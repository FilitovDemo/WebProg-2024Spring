<?php
#確認有收到使用者輸入的資料
$id = $_POST['id'] ?? '';
$author = $_POST['author'] ?? '';
$message = $_POST['msg'] ?? '';

if ($author=='' || $message=='' || $id=='') {
    echo '請輸入資料';
    exit();                  #結束離開,不往下執行
}

#實際上存到資料庫的動作

# 連線
$db = new PDO('mysql:host=localhost;dbname=demo2024;charset=utf8mb4','test1234','1234');
# 指令(新增到資料表)
$stmt = $db->prepare('update messagebox set Author=?,Message=? where id=?');
$stmt->execute( [$author,$message,$id] );
# 結果
# 通常要檢查回傳結果 看成功與否

?>

<a href="index.php">回首頁</a>