<?php
require 'vendor/autoload.php';

$token = "ov1s50h4wQ1HBn4CHhqn83dM";

$response = [
    "text" => $_SERVER['QUERY_STRING']
];

echo json_encode($response);

?>