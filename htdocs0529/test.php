<?php
#------------------------------------
#建立連線
#$db = new PDO(連線字串,帳號,密碼,設定);
#連線字串    mysql:host=主機;dbname=資料庫;charset=文字編碼
$db = new PDO('mysql:host=localhost;dbname=demo2024;charset=utf8mb4','test1234','1234',[]);
#------------------------------------
#送出查詢指令
$stmt = $db->prepare('select * from messagebox');
$stmt->execute();
#------------------------------------
#取回查詢結果 (取回所有結果 fetchAll(格式) 只取一筆 fetch() )  
$data = $stmt->fetchAll(PDO::FETCH_OBJ);
#------------------------------------
#偵錯,印印看
echo '<h3>print_r</h3>';
print_r($data);
#逐筆印出來看看
echo '<h3>逐筆</h3>';
foreach( $data as $r ) {
    echo $r->Author;
    echo '<br>';
    echo $r->Message;
    echo '<hr>';
}
