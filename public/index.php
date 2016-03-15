<?php
require '../vendor/autoload.php';

$token = "ov1s50h4wQ1HBn4CHhqn83dM";

$request = $_POST;

$text = "";
if ($request["trigger_word"] === "!request") {
    $text = http_build_query($_POST);
} else if ($request["trigger_word"] === "!stats") {
    $text = "Some great statistics!";
}

if ($text !== "") {
    $return = [
        "text" => $text
    ];
    echo json_encode($return);
}
?>