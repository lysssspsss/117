<?php 
 $content = file_get_contents('http://kj.701389.com/chajian/bmjg.js'); 
 $file = fopen("../chajian/bmjg.js","w"); 
 fwrite($file, $content);//百度首页8K 
 fclose($file);
 echo "正在监视，采集中";
?> 