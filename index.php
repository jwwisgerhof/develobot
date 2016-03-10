<?php
require 'vendor/autoload.php';

$token = "ov1s50h4wQ1HBn4CHhqn83dM";

$string = http_build_query();

$response = [
    "text" => $string
];

echo json_encode($response);

?>