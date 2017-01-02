<?php
/*echo microtime().'<br/>';
$sum=0;
for($i=0;$i<10000;$i++){
    $sum+=$i;
}
echo $sum.'<br/>';
echo microtime().'<br/>';
echo $_SERVER['HTTP_USER_AGENT'].'<br/>';*/
header('Content-type:application/msword');
$file=$_GET['file'];
header('filename='.$file);
readfile($file);
/*header('Content-type: application/pdf');
header('filename='.$file);
readfile($file);*/
exit();
