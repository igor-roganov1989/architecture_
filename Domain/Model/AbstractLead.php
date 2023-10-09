<?php
declare(strict_types=1);
namespace App\Domain\Model;

abstract class AbstractLead
{
    private Name $name;
    private Phone $phone;
    private string $description;

    /**
     * @return string
     */
    abstract function getDescription(): string;



    /**
     * @param string $name
     * @param string $phone
     */
    public function __construct(string $name, string $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    /**
     * @return Name|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Phone|string
     */
    public function getPhone()
    {
        return $this->phone;
    }

}