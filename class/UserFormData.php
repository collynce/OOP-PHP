<?php

use Traits\ToArray;

include_once 'traits/ToArray.php';

class UserFormData
{
    use ToArray;
    public $name;
    public $email;
    public $description;

    public function getName($name)
    {
        return $this->name = $name;
    }

    public function getEmail($email)
    {
        return $this->email = $email;
    }

    public function getDescription($description)
    {
        return $this->description = $description;
    }
}
