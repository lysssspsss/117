<?php
namespace Home\Controller;
use Think\Controller;
class CacheController extends Controller {



  public function index(){
     header("Content-type: text/html; charset=utf-8");
     //清文件缓存
     $dirs = array('Index/Runtime/');
     @mkdir('Index/Runtime',0777,true);
     //清理缓存
     foreach($dirs as $value) {
      $this->rmdirr($value);
     }
     echo '<div >系统缓存清除成功！</div>';  
  }
 
 
 
  //后台页面
  public function admin(){
     header("Content-type: text/html; charset=utf-8");
     //清文件缓存
     $dirs = array('Admin/Runtime/');
     @mkdir('Admin/Runtime',0777,true);
     //清理缓存
     foreach($dirs as $value) {
      $this->rmdirr($value);
     }
     echo '<div >系统缓存清除成功！</div>';  
  }
 
 
 
 
 
 
 
  //处理方法
   public function rmdirr($dirname) {
    if (!file_exists($dirname)) {
     return false;
    }
    if (is_file($dirname) || is_link($dirname)) {
     return unlink($dirname);
    }
    $dir = dir($dirname);
    if($dir){
     while (false !== $entry = $dir->read()) {
   if ($entry == '.' || $entry == '..') {
    continue;
   }
   //递归
   $this->rmdirr($dirname . DIRECTORY_SEPARATOR . $entry);
     }
    }
    $dir->close();
    return rmdir($dirname);
   }



	

}