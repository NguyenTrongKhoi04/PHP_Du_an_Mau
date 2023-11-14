<?php
session_start();
//xoa toan bo session
session_destroy();

// xoa tung phan tu 
unset($_SESSION['username']);
header("location: get_session.php");
die;
?>