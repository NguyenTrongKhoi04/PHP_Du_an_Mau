<?php
echo 'Simple Break';
for($i=1;$i<=2;$i++){
    echo "\n".'$i= '.$i.'';
    for($j=1;$j<=5;$j++){
        if ($j==2) { 
            break;
    }
    echo '$j= '.$j.'';
}
}   

echo 'Multi-level Break';
for($i=1;$i<=2;$i++){
    echo "\n".'$i= '.$i.'';
    for($j=1;$j<=5;$j++){
        if ($j==2) { 
            break 2;
            //vì ở đây là 2=> kết thúc 2 vòng lặp
    }
    echo '$j= '.$j.'';
}
}   