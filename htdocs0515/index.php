<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if ( isset($_SESSION['登入']) ) {
?>
    <fieldset>
        <legend>登入</legend>
        <form method="POST" action="logout.php">
            歡迎光臨，<?=$_SESSION['登入']?>
            <input type="submit" value="登出">
        </form>
    </fieldset>
<?php
} else {
?>
    <fieldset>
        <legend>登入</legend>
        <form method="POST" action="valid.php">
            帳號 <input type="text" name="uid" placeholder="英文數字組合"><br>
            密碼 <input type="password" name="pwd" placeholder="英文、數字或符號"><br>
            <input type="submit">
        </form>
    </fieldset>
<?php
}
?>

其他內容

</body>
</html>