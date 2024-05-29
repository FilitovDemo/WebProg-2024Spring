<?php
session_start();

unset($_SESSION['登入']);

//也可以 摧毀整個SESSION
//session_destroy();

header('Location: index.php');