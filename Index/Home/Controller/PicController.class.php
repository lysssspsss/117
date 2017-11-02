<?php
namespace Home\Controller;
use Think\Controller;
class PicController extends Controller {
public function index(){
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
$Daolist= M("pic_class");
$Daoinfo= M("pic");
$count  =$Daoinfo->count();
$Page   = new  \Common\Page($count,20);
$show   = $Page->paging();
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC")->limit($Page->limit)->select();  
}
$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出


 
$parent1=$Daoinfo->where('hot=1')->order("id DESC limit 0,16")->select();  

$this->assign('list1',$parent1);

$this->display();
}
public function detail(){
  $Form   =   M('pic');
             // 读取数据
             $id=$_GET['id'];
             $data =   $Form->where("id=$id")->find();
             if($data) {
                 $this->data =   $data;// 模板变量赋值
             }else{
                 $this->error('数据错误');
             }
             $Form->getLastSql();
			 M('pic')->where(array('id'=>$id))->setInc('hits',1);// 浏览量
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_17=M('plug_ad')->where(array('plug_ad_adtypeid'=>17,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_17',$plug_ad_17);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_18=M('plug_ad')->where(array('plug_ad_adtypeid'=>18,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_18',$plug_ad_18);
    	/*
    	 * 广告横幅
    	 */	
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */			 
             $this->display();
}
public function detail2(){
  $Form   =   M('pic');
  $Daolist= M("tuku_class");
  $Daoinfo= M("tuku");
             // 读取数据
             $id=$_GET['id'];
             $data =   $Form->where("id=$id")->find();
             if($data) {
                 $this->data =   $data;// 模板变量赋值
             }else{
                 $this->error('数据错误');
             }
             $Form->getLastSql();
			 M('pic')->where(array('id'=>$id))->setInc('hits',1);// 浏览量
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC")->select();  
}
$this->assign('list',$parent);			 
             $this->display();
}
public function pic(){
$Daolist= M("pic_class");
$Daoinfo= M("pic");

$parent=$Daoinfo->where('hot=1')->order("id DESC limit 0,16")->select();   

$this->assign('list',$parent);
$this->display();
}
}