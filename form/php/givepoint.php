<?php 

session_start();
header("Content-Type:text/html; charset=utf-8");
require_once 'config.php';

$un = $_SESSION['acc'];
$sql = "SELECT * FROM useracc WHERE acc ='$un'";
$result = mysqli_query($conn, $sql);
$data = $result->fetch_assoc();
$check = true;
$error1 = false;

if ($check){
    
    $updateSql = "UPDATE useracc SET points = points + 1 WHERE acc = '{$data['acc']}'";
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

}
