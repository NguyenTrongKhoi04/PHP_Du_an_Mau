<?php
        setcookie('username',$tk,time()-10);
        header("location: index.php");