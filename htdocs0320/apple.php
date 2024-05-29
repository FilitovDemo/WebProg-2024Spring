<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

使用者輸入值<br>
<?php
$a = $_GET['aa'];
echo '變數a的值是';
echo '<b>';
echo $a;
echo '</b>';
echo '<br>';

$b = $_GET['bb'];
echo '變數b的值是';
echo $b;
echo '<br>';

$c = $_GET['cc'];
echo '變數c的值是';
echo $c;
?>

</body>
</html>