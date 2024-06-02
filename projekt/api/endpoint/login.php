<?php
require '../cors.php';
require '../db/DatabaseConnector.php';

$method = $_SERVER['REQUEST_METHOD'];

//if ($_SESSION['token']) {
//    http_response(["message" => "Login successefefful", "token" => $_SESSION['token']]);
//}

//TODO: Store token in DB, check if token is valid, clear tokens after some time
switch ($method) {
    case 'GET':
        $data = $_GET;
        break;
    case 'POST':

        $data = json_decode(file_get_contents('php://input'), true);
        break;

}

$email = $data['email'];
$password = $data['password'];

function validate_credentials($email, $password): bool
{
    $stored_email = 'admin@zettafox.com';
    $stored_password = 'Q&,v6kBS+]]S`cd.';

    return $email === $stored_email && $password === $stored_password;
}


if (!validate_credentials($email, $password)) {
    http_response_code(401);
    http_response(["message" => "Invalid credentials"]);
}

//set session

$_SESSION['email'] = $email;
//$_SESSION['password'] = ["password" => $password];

$token = generate_token($email);
$_SESSION['token'] = generate_token($token);

$dbConnection = (new DatabaseConnector())->getConnection();

//return token
http_response(["message" => "Login successful", "token" => $token]);