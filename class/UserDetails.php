<?php


class UserDetails
{
    public $email = 'Collins';
    public $username = 'collynce';
    public $bio = 'Software Engineering Intern';

    public function GetUserDetails($email, $username, $bio)
    {
        $this->email = $email;
        $this->username = $username;
        $this->bio = $bio;
    }

    public function SetUserDetails($email, $username, $bio)
    {
        $this->email = $email;
        $this->username = $username;
        $this->bio = $bio;
    }
}
