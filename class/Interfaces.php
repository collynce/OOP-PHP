<?php

Interface LoginInterface
{
    public function __construct($age);

    public function checkUserAge();
}

class Interfaces implements LoginInterface
{
    public $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function checkUserAge()
    {
        if ($this->age < 18) {
            echo '<br><br>'.'<p>You are not eligible for this program</p>';
        } else {
            echo '<br><br>'.'<p>Welcome to our new program</p>';
        }
    }
}
