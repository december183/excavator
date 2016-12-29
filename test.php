<?php
echo microtime().'<br/>';
$sum=0;
for($i=0;$i<10000;$i++){
    $sum+=$i;
}
echo $sum.'<br/>';
echo microtime().'<br/>';
echo $_SERVER['HTTP_USER_AGENT'].'<br/>';
