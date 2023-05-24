<?php
    session_start();
    header("Content-Type:text/html; charset=utf-8");
    require_once 'config.php';

    if (isset($_POST) && isset($_POST["username"]) && isset($_POST["password"]))
    {
        $id = $_POST['fullname'];
        $un = $_POST['username'];
        $pad = $_POST['password'];
    } else {
        die( 'Error: Username add fail');
    }

    $sql = "INSERT INTO useracc (id, acc, pws) VALUES ('$id', '$un', '$pad')";

    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');  location.href= '../../index.html' </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header('Location: ../../index.html');
    }

?>