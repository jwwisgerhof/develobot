<?php
require '../vendor/autoload.php';

$token = "ov1s50h4wQ1HBn4CHhqn83dM";

$response = [
    "text" => file_get_contents("php://input")
];

echo json_encode($response);

?>