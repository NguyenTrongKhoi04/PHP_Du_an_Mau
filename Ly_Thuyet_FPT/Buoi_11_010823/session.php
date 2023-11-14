<?php
// de lam viec duoc voi session can co ham 
session_start();
//khoi tao session 
$_SESSION['username'] = 'admin';

?>

<a href="get_session.php">Xem session</a>