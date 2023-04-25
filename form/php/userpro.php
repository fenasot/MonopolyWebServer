<?php
    session_start();
    header("Content-Type:text/html; charset=utf-8");
    require_once 'config.php';

    "SELECT * FROM useracc WHERE id = $id";
    "SELECT * FROM useracc WHERE acc = $acc";
    "SELECT * FROM useracc WHERE points = $point";
    "SELECT * FROM useracc WHERE dice = $dice";
    "SELECT * FROM useracc WHERE weekaward = $weekaward";
    

    
    ?>