<?php
namespace Home\Controller;
use Think\Controller;
class tukuController extends Controller {
public function index(){
$Daolist= M("qs_class");
$Daoinfo= M("qs");
$parent=$Daolist->where("LagID=0")->order(" id DESC")->select();
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC LIMIT 0,1")->select();  
}
$this->assign('list',$parent);

$Daolist1= M("tuku_class");
$Daoinfo1= M("tuku");
$keywords=I('get.keywords','','strip_tags');
$search="1=1"; 
if ($keywords!='')$search.="  and title  like '%$keywords%' "; 
$parent1=$Daolist1->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent1 as $n=> $val){
$parent1[$n]['voo1'] = $Daoinfo1->where($search)->order("sorting asc")->select();	
}
$this->assign('list1',$parent1);


    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_8=M('plug_ad')->where(array('plug_ad_adtypeid'=>8,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_8',$plug_ad_8);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_9=M('plug_ad')->where(array('plug_ad_adtypeid'=>9,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_9',$plug_ad_9);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_10=M('plug_ad')->where(array('plug_ad_adtypeid'=>10,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_10',$plug_ad_10);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_11=M('plug_ad')->where(array('plug_ad_adtypeid'=>11,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_11',$plug_ad_11);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_12=M('plug_ad')->where(array('plug_ad_adtypeid'=>12,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_12',$plug_ad_12);
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */			

$this->display();
}
public function detail(){
  $Form   =   M('tuku');
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
			  M('tuku')->where(array('id'=>$id))->setInc('hits',1);// 浏览量
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC")->select();  
}
$this->assign('list',$parent);
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
    	$zlkg10=M('plug_zlkg')->where(array('plug_zlkg_id'=>10))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg10',$zlkg10);			 
             $this->display();
}
public function pic(){
$Daolist= M("tuku_class");
$Daoinfo= M("tuku");
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->select();  
}
$this->assign('list',$parent);
$this->display();
}
public function tuijian(){
$Daolist= M("tuku_class");
$Daoinfo= M("tuku");
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->select();  
}
$this->assign('list',$parent);
$this->display();
}
}