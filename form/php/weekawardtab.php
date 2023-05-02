<?php
    session_start();
    header("Content-Type:text/html; charset=utf-8");
    require_once 'config.php';

    $un = $_SESSION['acc'];
    $sql = "SELECT * FROM useracc WHERE acc ='$un'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    $weekawardcheck = (int)0;
    $error1 = false;
    var_dump($_GET);
    if ($data['weekaward'] == $weekawardcheck){
    
        $updateSql = "UPDATE useracc SET weekaward = 1 WHERE acc = '{$data['acc']}'";
        $updateResult = mysqli_query($conn, $updateSql);
        if ($updateResult) {
            // 更新成功
            header('Location: userpro.php');
        } else {
            // 更新失敗
            echo "Error: " . $updateSql . "<br>" . mysqli_error($conn);
            header('Location: userpro.php');
            exit();
        }

 //   "UPDATE useracc SET weekaward = 1  WHERE acc = {$data['acc']}";
 //   } else {
 //     echo "<script>alert('Error');  location.href= 'userpro.php' </script>";
 //     header('Location: userpro.php');
    } else {
        header('Location: userpro.php');
        $error1 = true;
        exit();
    }


    exit();
    ?>