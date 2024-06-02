<?php
require '../cors.php';

require $_SERVER['DOCUMENT_ROOT'] . '/projekt/api/models/UserModel.php';
require $_SERVER['DOCUMENT_ROOT'] . '/projekt/api/validators/credentials.php';

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

if (!validate_credentials($email, $password)) {
    http_response_code(401);
    http_response(["message" => "Invalid credentials"]);
}

//set session

$_SESSION['email'] = $email;
//$_SESSION['password'] = ["password" => $password];

$token = generate_token($email);
$_SESSION['token'] = generate_token($token);


//return token
http_response(["message" => "Login successful", "token" => $token]);