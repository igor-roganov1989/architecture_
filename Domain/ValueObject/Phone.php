<?php
declare(strict_types=1);
namespace App\Domain\ValueObject;

class Phone
{

    private string $phone;

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $name
     */
    public function __construct(string $phone)
    {
        $this->assertValidPhone($phone);
        $this->phone = $phone;
    }

    public function assertValidPhone(string $value):void{
        if ( mb_strlen($value) < 2){
            throw new \InvalidArgumentException('имя должно быть 3 символа');


        }
    }


}