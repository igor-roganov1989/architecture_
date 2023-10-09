<?php
declare(strict_types=1);
namespace App\Application\DTO;

class CreateLeadResponce
{
    private ?string $id = null;
    private ?string $error = null;

    private function __contruct(){
    }

    public static function createWithId(string $id):self
    {
        $object = new self();
        $object->id = $id;
        return $object;
    }


    public static function createWithError(string $error):self
    {
        $object = new self();
        $object->error = $error;
        return $object;
    }

}