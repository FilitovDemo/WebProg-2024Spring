<?php
#確認有收到使用者輸入的資料
$author = $_POST['author'] ?? '';
$message = $_POST['msg'] ?? '';

if ($author=='' || $message=='') {
    echo '請輸入資料';
    exit();                  #結束離開,不往下執行
}

#實際上存到資料庫的動作

# 連線
$db = new PDO('mysql:host=localhost;dbname=demo2024;charset=utf8mb4','test1234','1234');
# 指令(新增到資料表)
$stmt = $db->prepare('insert into messagebox (Author,Message) values (?,?)');
$stmt->execute( [$author,$message] );
# 結果
# 裝死

?>

<a href="index.php">回首頁</a>