<?php

session_start();
header("Content-Type:text/html; charset=utf-8");
require_once 'config.php';


$un = $_SESSION['acc'];
$sql = "SELECT * FROM useracc WHERE acc ='$un'";
$result = mysqli_query($conn, $sql);
$data = $result->fetch_assoc();

$data = array(
    'userlocation' => $data["userlocation"],
    'dice' => $data["dice"],
);

$jsonData = json_encode($data);

header('Content-Type: application/json');

echo $jsonData;

?>