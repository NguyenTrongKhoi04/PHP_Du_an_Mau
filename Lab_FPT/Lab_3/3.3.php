<?php
$time = 143523;
$b = chunk_split($time,2,':');
$c = substr($b,0,strlen($b)-1);
echo $c;
