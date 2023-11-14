<?php
session_start();
if(isset($_SESSION['username']))
{
    echo"<h1> Chao mung " . $_SESSION['username']. "den voi website</h1>";
    echo"<a href='logout_session.php'>thoat</a>";
}

else{
    echo"session khong ton tai";
}
