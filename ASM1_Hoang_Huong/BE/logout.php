<?php
include "connection.php";

unset($_SESSION['admin']);
header("location: login_user.php");