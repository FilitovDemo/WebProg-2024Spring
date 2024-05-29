<?php
session_start();   //用session一定要做的

$name = $_SESSION['username'] ?? '未設定';

// if ( isset($_SESSION['username']) ) {
//     $name = $_SESSION['username'];
// } else {
//     $name = '未設定';
// }

?>

其他頁面<br>
曾經記住:<?=$name?>