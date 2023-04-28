<?php
    session_start();
    header("Content-Type:text/html; charset=utf-8");
    require_once 'config.php';

    $un = $_SESSION['acc'];
    $sql = "SELECT * FROM useracc WHERE acc ='$un'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    $inc = 1;

    if ($data['weekaward'] = 0){
    
    "UPDATE useracc SET weekaward = 1  WHERE acc = {$data['acc']}";
    } else {
        echo "Error";
        header('Location: userpro.php');
    }

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');  location.href= 'userpro.php' </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header('Location: userpro.php');
    }
    

    ?>