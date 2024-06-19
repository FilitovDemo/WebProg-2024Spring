<?php
#確認有收到使用者輸入的資料
$id = $_GET['id'] ?? '';

if ($id=='') {
    echo '必須選擇編輯哪筆資料';
    exit();
}

#實際上存到資料庫的動作
# 連線
$db = new PDO('mysql:host=localhost;dbname=demo2024;charset=utf8mb4','test1234','1234');
# 指令(查詢特定資料)
$stmt = $db->prepare('select * from messagebox where id=?');      #準備指令
$stmt->execute( [$id] );
# (如果有)結果
$r = $stmt->fetch();   #id不會重複,所以只會查得1筆或0筆 不需要fetchAll

if (!$r) {             # 沒有這個 id 的資料
    echo '資料不存在';
    exit();
}
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>資料庫範例</title>
</head>
<body>
<h1>編輯留言</h1>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?=$id?>">
    作者:<input type="text" name="author" value="<?=$r['Author']?>"> <br>
    訊息:<input type="text" name="msg" value="<?=$r['Message']?>"> <br>
    <input type="submit" value="儲存異動">
    或 <a href="index.php">取消，回首頁</a>
</form>
    
</body>
</html>