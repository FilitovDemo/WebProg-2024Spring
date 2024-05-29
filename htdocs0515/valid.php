<?php
session_start();                         // <-----啟動SESSION功能
$id = $_POST['uid'] ?? '未定義';
$pw = $_POST['pwd'] ?? '未定義';

//通常檢查 $id 及 $pw 有沒有在資料庫中
//此處省略   限制 alice / 1234 可以驗證

if ( $id=='alice' && $pw=='1234' ) {
    //登入成功  記住登入的狀態
    $_SESSION['登入'] = $id;            // <-----用 SESSION儲存狀態
    //引導回首頁(index.php)
    header('Location: index.php');
    //登入成功的話, 不用往下進行了..離開..
    exit();
}

//登入失敗  顯示引導訊息
?>

<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    登入失敗<br>
    請回<a href="index.php">首頁</a>重新登入
    </body>
</html>