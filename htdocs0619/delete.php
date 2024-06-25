<?php
#確認有收到使用者輸入的資料
$id = $_GET['id'] ?? '';


if ($id=='') {
    echo '必須選擇刪除哪筆資料';
    exit();
}

#實際上存到資料庫的動作

#引用資料庫連線的檔案
require('db.php');
# 指令(從資料表刪除)
$stmt = $db->prepare('delete from messagebox where id=?');
$stmt->execute( [$id] );
# 結果
# 通常要檢查回傳結果 看成功與否

?>

<a href="index.php">回首頁</a>