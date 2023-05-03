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

    if ($data['weekaward'] == $weekawardcheck){
    
        $updateSql = "UPDATE useracc SET weekaward = 1 WHERE acc = '{$data['acc']}'";
        $updateSql2 = "UPDATE useracc SET dice = dice + 1 WHERE acc = '{$data['acc']}'";
        $updateResult = mysqli_query($conn, $updateSql);
        $updateResult2 = mysqli_query($conn, $updateSql2);

        if ($updateResult and $updateResult2) {
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
        $error1 = true;
    }


        
    if ($error1 === true) {
      header('Location: userpro.php');

    }
    
    exit();
    ?>