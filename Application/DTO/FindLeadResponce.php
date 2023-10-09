<?php
declare(strict_types=1);

namespace App\Application\DTO;
class FindLeadResponce
{
    private string $name;
    private string $phone;
    private string $description;

    /**
     * @param string $name
     * @param string $phone
     * @param string $description
     */
    public function __construct(string $name, string $phone, string $description)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->description = $description;
    }


}