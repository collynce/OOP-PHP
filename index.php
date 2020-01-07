<?php
//Include the loader file
include_once 'includes/loader.php';

print '// Object';
$users = new Details\UserDetails;

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


$login = new UserLogin\HandleUserLogin();

var_dump($login);

$user_email = 'Collins';

print_r($login->checkIfRegistered($user_email));

//Traits

$details = new UserFormData();

$details->getName('Collins');

$details->getEmail('collins@gmail.com');

$details->getDescription('Software Engineer');

var_dump($details->toArrays());
var_dump($details->toJSON());

$users = new Interfaces(15);

echo $users -> checkUserAge();

