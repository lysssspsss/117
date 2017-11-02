<?php
//$contents = @file_get_contents('http://zhibo.788kj.com:8889/js/i1i1i1i1i1l1l1l1l0.js');
$contents = @file_get_contents('http://kj.701389.com/chajian/bmjg.js');
$contents = str_replace('金','与',$contents);
$contents = str_replace('沙','本',$contents);
$contents = str_replace('赌','港',$contents);
$contents = str_replace('船','台',$contents);
$contents = str_replace('零','同',$contents);
$contents = str_replace('距','步',$contents);
$contents = str_replace('离','中',$contents);

$contents = str_replace('一','\u4e00',$contents);
$contents = str_replace('二','\u4e8c',$contents);
$contents = str_replace('三','\u4e09',$contents);
$contents = str_replace('四','\u56db',$contents);
$contents = str_replace('五','\u4e94',$contents);
$contents = str_replace('六','\u516d',$contents);
$contents = str_replace('日','\u65e5',$contents);
$contents = str_replace('21点30分','21\u70b930\u5206',$contents);
$contents = str_replace('7136995','4501870',$contents);	
echo $contents;
?>