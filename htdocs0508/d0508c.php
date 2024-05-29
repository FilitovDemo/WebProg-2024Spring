<?php
session_start();    //啟動session機制 (最好在內文送出前執行)

$_SESSION['username'] = 'dan';   //把值存在session中

?>

第一頁