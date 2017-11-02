<?php
namespace Home\Controller;
use Think\Controller;
class qsController extends Controller {
public function index(){
$Daolist= M("qs_class");
$Daoinfo= M("qs");
$parent=$Daolist->where("LagID=0")->order(" id DESC")->select();
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC LIMIT 0,1")->select();  
}
$this->assign('list',$parent);
$this->display();
}

public function qi(){
$Daolist= M("qs_class");
$Daoinfo= M("qs");
$parent=$Daolist->where("LagID=0")->order(" id DESC")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC")->select();  
}
$this->assign('list',$parent);
$this->display();
}
public function qi1(){
$Daolist= M("qs_class");
$Daoinfo= M("qs");
$parent=$Daolist->where("LagID=0")->order(" id DESC")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC")->select();  
}
$this->assign('list',$parent);
$this->display();
}
public function qi2(){
$Daolist= M("qs_class");
$Daoinfo= M("qs");
$parent=$Daolist->where("LagID=0")->order(" id DESC")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC")->select();  
}
$this->assign('list',$parent);
$this->display();
}
public function index1(){
$Daolist= M("qs_class");
$Daoinfo= M("qs");
$parent=$Daolist->where("LagID=0")->order(" title asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->select();  
}
$this->assign('list',$parent);
$this->display();
}
public function detail(){
  $Form   =   M('qs');
  $Daolist= M("qs_class");
  $Daoinfo= M("qs");
             // 读取数据
             $id=$_GET['id'];
             $data =   $Form->where("id=$id")->find();
             if($data) {
                 $this->data =   $data;// 模板变量赋值
             }else{
                 $this->error('数据错误');
             }
             $Form->getLastSql();
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC")->select();  
}
$this->assign('list',$parent);			 
             $this->display();
}
public function pic(){
$Daolist= M("qs_class");
$Daoinfo= M("qs");
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->select();  
}
$this->assign('list',$parent);
$this->display();
}
}