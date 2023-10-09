<?php
declare(strict_types=1);
namespace App\Domain\ValueObject;
class Name
{
    private string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->assertValidName($name);
        $this->name = $name;
    }

    public function assertValidName(string $value):void{
        if ( mb_strlen($value) < 2){
            throw new \InvalidArgumentException('имя должно быть 3 символа');


        }
    }


}