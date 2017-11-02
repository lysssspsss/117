<?php
$contents = @file_get_contents('http://www.118kjz.com/qwert/118zztj.html');
$contents = str_replace('118kjz','838828',$contents);
$contents = str_replace('118zztj.html','178zltj.php',$contents);
$contents = str_replace('118lx.html','178lx.php',$contents);
$contents = str_replace('<font color="#9900ff">1</font><font color="#ffff00">1</font><font color="#0f0">8</font><font color="#f00">k</font><font color="#0ff">j</font><font color="#f00">z</font>.com</font>','<font color="#9900ff">8</font><font color="#ffff00">3</font><font color="#0f0">8</font><font color="#f00">8</font><font color="#0ff">2</font><font color="#f00">8</font>.com</font>',$contents);
echo $contents;
?>