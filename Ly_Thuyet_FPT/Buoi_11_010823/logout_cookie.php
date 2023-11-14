<?php
// đẻ hủy cookie cần set thời gian nhở hơn thời gian hiện tại
setcookie('username','',time()-60*60);
header("location: get_cookie.php");
die();