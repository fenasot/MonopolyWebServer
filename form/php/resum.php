<?php 

session_start();
header("Content-Type:text/html; charset=utf-8");
require_once 'config.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'acccheck.php';
$error1 = false;


if (isset($_POST) && isset($_POST["Location"]))
{
    $check = true;
    $ppo = $_POST["Location"];
 
} else {
    die("shaaaaaaaaar");
}



if ($check)
{   
    $updateSql = "UPDATE useracc SET dice = dice - 1, userlocation = '$ppo' WHERE acc = '{$data['acc']}'";
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
