<?php

session_start();
header("Content-Type: text/plain charset=utf-8");
require_once 'config.php';
require_once 'acccheck.php';

$gamedata = $data["userlocation"] . "a". $data["dice"];

echo $gamedata;

exit();
?>