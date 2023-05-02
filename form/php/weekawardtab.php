<?php
    session_start();
    header("Content-Type:text/html; charset=utf-8");
    require_once 'config.php';

    $un = $_SESSION['acc'];
    $sql = "SELECT * FROM useracc WHERE acc ='$un'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    $weekawardcheck = (int)0;
    $errors = "";
   
    if ($data['weekaward'] === $weekawardcheck){
    
        $updateSql = "UPDATE useracc SET weekaward = 1 WHERE acc = '{$data['acc']}'";
        $updateResult = mysqli_query($conn, $updateSql);
        if ($updateResult) {
            // 更新成功
            $error1 = true;
        } else {
            // 更新失敗
            echo "Error: " . $updateSql . "<br>" . mysqli_error($conn);
            $error2 = true;
        }

 //   "UPDATE useracc SET weekaward = 1  WHERE acc = {$data['acc']}";
 //   } else {
 //     echo "<script>alert('Error');  location.href= 'userpro.php' </script>";
 //     header('Location: userpro.php');
    } else {
        $error3 = true;
    }


    if($error1 == true){
        $errors .= "更新成功";
    } else if ($error2 == true){
        $errors .= "更新失敗";
    } else if ($error3 == true){
        $errors .= "判斷失敗";
    } 
    if(!$errors){
        echo nl2br($errors);
    }
    echo 'fkyou';
    header('Location: userpro.php');
    exit();
    ?>