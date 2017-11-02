<?php
$contents = @file_get_contents('http://www.118kjz.com/qwert/118lx.html');
$contents = str_replace('118kjz','838828',$contents);
$contents = str_replace('118lx.html','178lx.php',$contents);
$contents = str_replace('赌','港',$contents);
$contents = str_replace('船','台',$contents);
$contents = str_replace('零','同',$contents);
$contents = str_replace('距','步',$contents);
$contents = str_replace('离','中',$contents);
echo $contents;
?>