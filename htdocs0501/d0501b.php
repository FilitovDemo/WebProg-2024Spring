<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的網頁</title>
</head>
<body>
    
    <h1>第二頁</h1>

    <?php
        if ( !isset($_GET['q']) ){
            echo '沒有輸入q';
        } else {
            $qq = $_GET['q'];
            echo '收到'.$qq;

            #託付餅乾給瀏覽器
            #setcookie('名字','值')    餅乾存活到瀏覽器關閉
            #setcookie('名字','值',逾期時間)
            setcookie('somedata', 'this is a book');
            setcookie('myqq', $qq);
            setcookie('alice', '不會活很久', time()+60*10 );    #cookie存活10分鐘
            setcookie('bob', '活比較久', time()+60*60*24*7 );    #cookie存活1周
        }

    ?>
    <br>
    <a href="d0501c.php">前往第三頁</a>
</body>
</html>