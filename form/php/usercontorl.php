<?php
    session_start();
    require_once 'db.php';

    $un = $_POST['username'];
    $pad = $_POST['password'];

    //設置SQL連結
    $servername = "localhost";
    $username = ""

    //如果使用者名稱和密碼都不為空
    if($un && $pad){
        //檢測資料庫是否有對應的username和password的sql
        $sql = "SELECT * FROM user WHERE username ='$un' and password = '$pad'";
        
        //執行sql
        $result = mysqli_query($link, $sql);
        
        //返回一個數值
        $rows=mysqli_num_rows($result);  

        //0 false 1 true
        if($rows){

            //如果密碼以及帳號一樣，顯示登入成功
            $_SESSION['is_login'] = TRUE;

            //使用PHP來轉址，前往後台
            header('Location: home.html');

        }else{

            //要不然就是登入失敗
            $_SESSION['is_login'] = FALSE;

            //在session 存一個 msg 變數
            $_SESSION['msg'] = '登入失敗，請確認帳號密碼!!';

            header('Location: member.php');
        }
    }else{
        
        $_SESSION['msg'] = '請輸入帳號或密碼!!';
        //使用 PHP header 來轉址 返回登入頁
        header('Location: member.php');
    }
?>