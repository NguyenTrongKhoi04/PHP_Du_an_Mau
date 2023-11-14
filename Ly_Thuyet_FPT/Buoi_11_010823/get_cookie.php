<?php
if(isset($_COOKIE['username'])){
    echo $_COOKIE['username'];
    echo "<a href='logout_cookie.php'>Thoát</a>";
}
else{echo "fail";}
