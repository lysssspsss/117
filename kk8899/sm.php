<?php 
$content = file_get_contents('http://www.1388345.com/sm.htm'); 
$content = str_replace('981888.com','178kj.cc',$content);
$content = str_replace('交流群','资料网',$content);
$content = str_replace('567617689','www.ak7.cc',$content);
 $file = fopen("../Html/sm.html","w"); 
 fwrite($file, $content);//百度首页8K 
 fclose($file);
 echo "正在监视，采集中";
?> 