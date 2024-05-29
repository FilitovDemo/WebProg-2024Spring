<?php
//處理使用者帳號
if ( !isset($_GET['uname']) || empty($_GET['uname']) ) { //未設定 或 空值
    echo '必須提供帳號名稱';
    exit();                 //沒有指定帳號 就不用往下了
}

//處理密碼
if ( !isset($_GET['upwd']) || empty($_GET['upwd']) ) { //未設定 或 空值
    echo '必須提供密碼';
    exit();                 //沒有指定密碼 就不用往下了
}

//整理變數
$name = $_GET['uname'];        //帳號
$pass = $_GET['upwd'];         //密碼

//處理名字 (假設是可有可無)
$rname = $_GET['realname'] ?? '無名氏';   //設定值 或者 未設定的話 無名氏


echo '我還活著....還可以往下執行...';
