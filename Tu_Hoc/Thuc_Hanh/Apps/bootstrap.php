<?php
// vì sao phải có file này ? file này tính năng gần giống boostrap
// file này sẽ giúp bạn làm việc nhanh hơn

// TÌNH HUỐNG THỰC TẾ: khi làm việc bạn muốn include nhiều file vào "index.php"
        // Cách 1: Bạn sẽ đi copy Include từng file =>> mất time và đôi lúc bị sai 
        // Cách 2: Bạn inlude hết tất cả file đó vào file nào đó rồi Inlude file đó vào "index.php" =>> có thể bị thừa, sai và ảnh hường đến hiệu suất 
    // =>>> Cách tối ưu nhất là khi bạn viết tên hàm =>> hàm đó sẽ tìm cho bạn file bạn muốn Include

spl_autoload_register(
    function ($classname){
            $exp = str_replace("_","/",$classname);
            $path = str_replace("Apps","",dirname(__FILE__));
            include_once $path.'/'.$exp.'.php';
            var_dump($path.'/'.$exp.'.php');
    }
);
