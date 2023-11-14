<?php
if(!isset($_COOKIE['username'])){
    header("location:logout.php");
}
echo "xin chào";