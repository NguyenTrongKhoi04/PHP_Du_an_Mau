<!-- "/ có tác dụng j, theo như Chat GPT thì nó là toàn bộ trang trên miền" -->
<!-- cho cái đó vào thì k xóa đc cookie -->
<?php
    setcookie("khoi",12345);
    var_dump($_COOKIE);
    setcookie("khoi","",time()-3600,"/");
    var_dump($_COOKIE);
   