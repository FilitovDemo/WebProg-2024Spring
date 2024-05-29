<?php

$name = $_COOKIE['username'] ?? '沒有設定';

// if ( isset($_COOKIE['username']) ) {
//     $name = $_COOKIE['username'];
// } else {
//     $name = '沒有設定';
// }
?>

其他頁面<br>
曾經記住:<?=$name?>