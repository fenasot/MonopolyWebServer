<?php


    //設置SQL連結
    $servername = "localhost";
    $username = "user";
    $password = "123456";
    $dbname = "monopolyweb";

    $conn = mysqli_connect($servername, $username ,$password ,$dbname);


    //檢查是否成功
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST) && isset($_POST["username"]) && isset($_POST["password"]))
    {
        $un = $_POST['username'];
        $pad = $_POST['password'];
    } else {
        die( 'Error: Username not found');
    }
?>