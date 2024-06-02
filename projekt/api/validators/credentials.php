<?php
require $_SERVER['DOCUMENT_ROOT'] . '/projekt/api/models/UserModel.php';
function validate_credentials($email, $password): bool
{
//    $user = new UserModel();


    $stored_email = 'admin@zettafox.com';
    $stored_password = 'Q&,v6kBS+]]S`cd.';

    return $email === $stored_email && $password === $stored_password;
}