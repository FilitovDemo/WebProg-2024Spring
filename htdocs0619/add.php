<?php
require('html_header.php');
?>
<h1>新增留言</h1>

<form method="POST" action="insert.php">
    作者:<input type="text" name="author"> <br>
    訊息:<input type="text" name="msg"> <br>
    <input type="submit">
    或 <a href="index.php">取消，回首頁</a>
</form>

    
</body>
</html>