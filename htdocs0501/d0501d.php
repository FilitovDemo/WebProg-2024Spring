<?php
$x = $_COOKIE['somedata'];
echo $x;


#cookie逾期設定在 此時之前, cookie會被刪掉
// setcookie('somedata','',time()-3600 );
setcookie('somedata','',10 );

#cookie逾期設定 0, cookie活到瀏覽器關閉為止
// setcookie('somedata','',0);
?>