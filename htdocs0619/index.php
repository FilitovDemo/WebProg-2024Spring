<?php
require('html_header.php');
?>
<h1>留言板</h1>

<a href="add.php">新增</a>

<table border="1">
    <tr>
        <th>作者</th>
        <th>留言</th>
        <th>#</th>
    </tr>

<?php
#引用資料庫連線的檔案
require('db.php');
# 指令
$stmt = $db->prepare('select * from messagebox');      #準備指令
$stmt->execute();
# (如果有)結果
$data = $stmt->fetchAll();   #預設是 PDO::FETCH_BOTH

foreach ($data as $r) {      #近似PYTHON的 for r in data
?>
    <tr>
        <td><?=$r['Author']?></td>
        <td><?=$r['Message']?></td>
        <td>
            <a href="edit.php?id=<?=$r['id']?>">編輯</a> |
            <a href="delete.php?id=<?=$r['id']?>">刪除</a>
        </td>
    </tr>
<?php
}
?>

</table>

</body>
</html>

