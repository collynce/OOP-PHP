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

print '// Object';
$users = new UserDetails();

var_dump($users);
echo "<br><br>";

echo $users->username . "<br><br>";

echo $users->bio . "<br><br>";

echo $users->email . "<br><br>";

echo "<br><br>";

print '// Calling a Class method';
$users->SetUserDetails('Kiprotich', 'rono', 'Web Developer');

var_dump($users);

echo $users->username . "<br><br>";

echo $users->bio . "<br><br>";

echo $users->email . "<br><br>";

class HandleUserLogin extends UserDetails
{
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

}

$login = new HandleUserLogin();

var_dump($login);

$user_email = 'Collins';

print_r($login->checkIfRegistered($user_email));

//Traits

trait ToArray
{
    public function toArrays()
    {
        return get_object_vars($this);
    }

    public function toJSON()
    {
        return json_encode($this->toArrays());
    }
}

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

$details = new UserFormData();

$details->getName('Collins');

$details->getEmail('collins@gmail.com');

$details->getDescription('Software Engineer');

var_dump($details->toArrays());
var_dump($details->toJSON());
