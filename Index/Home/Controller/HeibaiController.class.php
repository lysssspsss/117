<?php
namespace Home\Controller;
use Think\Controller;
class heibaiController extends Controller {
public function index(){
$Daolist= M("qs_class");
$Daoinfo= M("qs");
$parent=$Daolist->where("LagID=0")->order(" id DESC")->select();
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC LIMIT 0,1")->select();  
}
$this->assign('list',$parent);

$Daolist1= M("heibai_class");
$Daoinfo1= M("heibai");
$keywords=I('get.keywords','','strip_tags');
$search="1=1"; 
if ($keywords!='')$search.="  and title  like '%$keywords%' "; 
$parent1=$Daolist1->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent1 as $n=> $val){
$parent1[$n]['voo1'] = $Daoinfo1->where($search)->order("sorting desc")->select();	
}
$this->assign('list1',$parent1);


$this->display();
}
public function detail(){
  $Form   =   M('heibai');
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
			 M('heibai')->where(array('id'=>$id))->setInc('hits',1);// 浏览量
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC")->select();  
}
$this->assign('list',$parent);
    	$zlkg10=M('plug_zlkg')->where(array('plug_zlkg_id'=>10))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg10',$zlkg10);				 
             $this->display();
}
public function pic(){
$Daolist= M("heibai_class");
$Daoinfo= M("heibai");
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->select();  
}
$this->assign('list',$parent);
$this->display();
}
}