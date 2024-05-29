<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的網頁</title>
    <style type="text/css">
        a {
            text-decoration: none;
        }
        span {
            color: red;
        }
    </style>
</head>
<body>
    
    <h1>我的網頁</h1>

<?php
$page = $_GET['p'] ?? 1;

echo '第';
echo $page;
echo '頁';
?>

<br>
<br>

<?php
if ($page>1) {
    echo '<a href="?p=';
    echo $page-1;
    echo '">&lt;</a>';
}

for ($i=1; $i<=10; $i=$i+1) {
    if ($page==$i) {
        //所在頁面 湊出這段文字 <span>1</span>&nbsp;
        echo "<span>$i</span>&nbsp;";
    } else {
        //湊出這段文字 <a href="?p=1">1</a>
        echo '<a href="?p=';
        echo $i;
        echo '">';
        echo $i;
        echo '</a>&nbsp;';
    }
}

if ($page<10) {
    echo '<a href="?p=';
    echo $page+1;
    echo '">&gt;</a>';
}
?>

</body>
</html>