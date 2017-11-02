<?php
function trash($folder,$time=864000){
$ext=array('php'); //带有这些扩展名的文件不会被删除.
$o=opendir($folder);
while($file=readdir($o)){
        if($file !='.' && $file !='..' && !in_array(substr($file,strrpos($file,'.')+1),$ext)){
                $fullPath=$folder.'/'.$file;
                if(is_dir($fullPath)){
                        trash($fullPath);
                        @rmdir($fullPath);
                } else {
                        if(time()-filemtime($fullPath) > $time){
                                unlink($fullPath);
                                }
                        }
                }
        }
        closedir($o);
}
trash('./');//调用自定义函数
echo "清理完毕";
?>