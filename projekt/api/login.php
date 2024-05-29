<?php
require 'cors.php';
// Get the data from the request
$data = json_decode(file_get_contents('php://input'), true);

// Process the data...

// Send a response
echo json_encode(["message" => "Hello, World!"]);