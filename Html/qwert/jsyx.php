<?php
$contents = @file_get_contents('http://www.118kjz.com/qwert/jsyx.html');
$contents = str_replace('118kjz','838828',$contents);
$contents = str_replace('118fxxj.html','178fxxj.php',$contents);
$contents = str_replace('118gpz','838828',$contents);
$contents = str_replace('118역쉽','838828역쉽',$contents);
$contents = str_replace('역쉽','',$contents);
echo $contents;
?>