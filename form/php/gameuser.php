<?php

session_start();
header("Content-Type: text/plain charset=utf-8");
require_once 'config.php';



$un = $_SESSION['acc'];
$sql = "SELECT * FROM useracc WHERE acc ='$un'";
$result = mysqli_query($conn, $sql);
$data = $result->fetch_assoc();

/*
$gamedata = array(
    'userlocation' => $data["userlocation"],
    'dice' => $data["dice"],
);
*/

$gamedata = $data["userlocation"] . "a". $data["dice"];

//$jsonData = json_encode($gamedata);

header('Content-Type: application/json');

echo $gamedata;
exit();
?>