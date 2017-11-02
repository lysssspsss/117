<?php
namespace Home\Controller;
use Think\Controller;
class CacheController extends Controller {
	
public function index(){

$this->display();	
}	

public function deltree($pathdir)
    {

        if($this->is_empty_dir($pathdir)){//如果是空的
            rmdir($pathdir);//直接删除
        }else{//否则读这个目录，除了.和..外
              $d=dir($pathdir);
              while($a=$d->read())
              {
                  if(is_file($pathdir.'/'.$a) && ($a!='.') && ($a!='..')){unlink($pathdir.'/'.$a);}
                  //如果是文件就直接删除
                  if(is_dir($pathdir.'/'.$a) && ($a!='.') && ($a!='..'))
                  {//如果是目录
                      if(!$this->is_empty_dir($pathdir.'/'.$a))//是否为空
                      {//如果不是，调用自身，不过是原来的路径+他下级的目录名
                          $this->deltree($pathdir.'/'.$a);
                      }
                      if($this->is_empty_dir($pathdir.'/'.$a))
                      {//如果是空就直接删除
                      rmdir($pathdir.'/'.$a);
                      }
                  }
              }
            $d->close();          
			  $this->assign("jumpUrl","index");
			  $this->success('系统缓存清除成功！');
        }
    }
    public function is_empty_dir($pathdir)
    {
        //判断目录是否为空，我的方法不是很好吧？只是看除了.和..之外有其他东西不是为空
        $d=opendir($pathdir);
        $i=0;
          while($a=readdir($d))
          {
            $i++;
          }
        closedir($d);
        if($i>2){return false;}
        else return true;
    }
    public function runtime(){
        $pathdir ="./Index/Runtime";
        $a = $this->deltree($pathdir);
        dump($a);
    }



}