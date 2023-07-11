<?php
session_start();
header("Content-Type:text/html; charset=utf-8");
require_once 'config.php';

$_SESSION['acc'] = "";
if (isset($_POST) && isset($_POST["username"]) && isset($_POST["password"])) {
    $un = $_POST['username'];
    $pad = $_POST['password'];
} else {
    //使用者名稱和密碼不為空
    echo "<script>alert('帳號密碼不能為空');window.location.href='../../index.html'</script>";
    exit;
}

if (!preg_match('/^[A-Za-z0-9]+$/', $un)) {
    // 格式不符合要求
    echo "<script>alert('輸入字元不得包含特殊字元');window.location.href='../../index.html'</script>";
    exit;
}

if ($un && $pad) {
    //檢測資料庫是否有對應的username和password的sql
    $sql = "SELECT * FROM useracc WHERE acc ='$un' and pws = '$pad'";
    //執行sql
    $result = mysqli_query($conn, $sql);
    //返回一個數值
    $rows = mysqli_num_rows($result);
    //0 false 1 true
    if ($rows) {
        //帳密一樣，登入成功
        $_SESSION['is_login'] = TRUE;
        $_SESSION['acc'] = $un;
        //使用PHP來轉址，前往首頁
        header('Location: ../home.php');
        exit;
    } else {
        //登入失敗
        echo "<script>alert('登入失敗，帳號或密碼錯誤!!');window.location.href='../../index.html'</script>";
    }
}