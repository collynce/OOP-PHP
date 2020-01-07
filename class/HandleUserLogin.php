<?php
class HandleUserLogin extends UserDetails
{
    private $password;
    private $phone;
    public function checkIfRegistered($email)
    {
        //Inherits the user email from UserDetails class
        if ($this->email !== $email) {
            echo('No user with such email');
        } else {
            //Proceed to log in
            echo 'Log in successful';
        }
    }

    public function ChangeDetails($password, $phone)
    {
        $this->password = $password;
        $this->phone = $phone;
        return $this;
    }
}

$pwd = new HandleUserLogin();
$pwd->ChangeDetails('new password', '0987654321');

