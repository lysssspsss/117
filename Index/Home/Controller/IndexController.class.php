<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
public function index(){
$Daolist= M("links_url_class");
$Daoinfo= M("links_url");
$parent=$Daolist->where("locks=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->select();  
}
$this->assign('list',$parent);

		//显示方式选择
    	$zlkg=M('plug_zlkg')->where(array('plug_zlkg_id'=>1))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg',$zlkg);
    	$zlkg2=M('plug_zlkg')->where(array('plug_zlkg_id'=>2))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg2',$zlkg2);	
    	$zlkg3=M('plug_zlkg')->where(array('plug_zlkg_id'=>3))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg3',$zlkg3);	
    	$zlkg4=M('plug_zlkg')->where(array('plug_zlkg_id'=>4))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg4',$zlkg4);	
    	$zlkg5=M('plug_zlkg')->where(array('plug_zlkg_id'=>5))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg5',$zlkg5);	
    	$zlkg6=M('plug_zlkg')->where(array('plug_zlkg_id'=>6))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg6',$zlkg6);	
    	$zlkg7=M('plug_zlkg')->where(array('plug_zlkg_id'=>7))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg7',$zlkg7);	
    	$zlkg8=M('plug_zlkg')->where(array('plug_zlkg_id'=>8))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg8',$zlkg8);	
    	$zlkg9=M('plug_zlkg')->where(array('plug_zlkg_id'=>9))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg9',$zlkg9);	
    	$zlkg10=M('plug_zlkg')->where(array('plug_zlkg_id'=>10))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg10',$zlkg10);			

		//手机跳转选择
    	$wap=M('plug_wap')->where(array('plug_wap_id'=>1))->order("plug_wap_id asc")->select();
    	$this->assign('wap',$wap);

		//开奖方式选择
    	$kjfs=M('plug_kj')->where(array('plug_kj_id'))->order("plug_kj_id asc")->select();
    	$this->assign('kjfs',$kjfs);
		
$Daolist1= M("article_class");
$Daoinfo1= M("article");
$parent1=$Daolist1->where("locks=0")->order(" sorting asc")->select();  
foreach($parent1 as $n=> $val){  
$parent1[$n]['voo']=$Daoinfo1->where('directory1='.$val[numberid].'')->order("id DESC limit 0,10")->select();  
}
$this->assign('list1',$parent1);

$Daolist1= M("article_class");
$Daoinfo1= M("article");
$parent2=$Daolist1->where("id=2")->order(" sorting asc")->select();  
foreach($parent2 as $n=> $val){  
$parent2[$n]['voo']=$Daoinfo1->where('directory1='.$val[numberid].'')->order("id DESC limit 0,24")->select();  
}
$this->assign('list2',$parent2);

foreach($parent2 as $n=> $val){  
$parent2[$n]['voo']=$Daoinfo1->where('directory1='.$val[numberid].'')->order("id DESC limit 24,24")->select();  
}
$this->assign('list4',$parent2);
foreach($parent2 as $n=> $val){  
$parent2[$n]['voo']=$Daoinfo1->where('directory1='.$val[numberid].'')->order("id DESC limit 48,24")->select();  
}
$this->assign('list5',$parent2);


$Daolist3= M("qs_class");
$Daoinfo3= M("qs");
$parent3=$Daolist3->where("LagID=0")->order(" id DESC")->select();
foreach($parent3 as $n=> $val){  
$parent3[$n]['voo3']=$Daoinfo3->where('directory1='.$val[numberid].'')->order("id DESC LIMIT 0,1")->select();  
}
$this->assign('list3',$parent3);

    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_1=M('plug_ad')->where(array('plug_ad_adtypeid'=>1,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_1',$plug_ad_1);
    	$plug_ad_2=M('plug_ad')->where(array('plug_ad_adtypeid'=>2,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_2',$plug_ad_2);
    	$plug_ad_3=M('plug_ad')->where(array('plug_ad_adtypeid'=>3,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_3',$plug_ad_3);
    	$plug_ad_4=M('plug_ad')->where(array('plug_ad_adtypeid'=>4,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_4',$plug_ad_4);
    	$plug_ad_5=M('plug_ad')->where(array('plug_ad_adtypeid'=>5,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_5',$plug_ad_5);
    	$plug_ad_6=M('plug_ad')->where(array('plug_ad_adtypeid'=>6,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_6',$plug_ad_6);
    	$plug_ad_7=M('plug_ad')->where(array('plug_ad_adtypeid'=>7,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_7',$plug_ad_7);	
    	$plug_ad_13=M('plug_ad')->where(array('plug_ad_adtypeid'=>13,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_13',$plug_ad_13);	
    	$plug_ad_14=M('plug_ad')->where(array('plug_ad_adtypeid'=>14,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_14',$plug_ad_14);	
    	$plug_ad_15=M('plug_ad')->where(array('plug_ad_adtypeid'=>15,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_15',$plug_ad_15);
    	$plug_ad_16=M('plug_ad')->where(array('plug_ad_adtypeid'=>16,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_16',$plug_ad_16);
    	$plug_ad_24=M('plug_ad')->where(array('plug_ad_adtypeid'=>24,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_24',$plug_ad_24);
    	$plug_ad_27=M('plug_ad')->where(array('plug_ad_adtypeid'=>27,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_27',$plug_ad_27);
    	$plug_ad_28=M('plug_ad')->where(array('plug_ad_adtypeid'=>28,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_28',$plug_ad_28);
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
		$this->buildHtml('index',HTML_PATH.'/','index','utf8');//注意：这里的utf8不能写成utf-8
		//$this->buildHtml('tuijian',HTML_PATH1.'/','Tuku:tuijian','utf8');//注意：这里的utf8不能写成utf-8

		

$this->display();
}


public function pic(){
$Daolist= M("article_class");
$Daoinfo= M("article");
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->select();  
}
$this->assign('list',$parent);
$this->display();
}
public function tuku(){
$Daolist= M("tuku_class");
$Daoinfo= M("tuku");
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->select();  
}
$this->assign('list',$parent);
$this->display();
}
public function acti(){
$gengxin= M("kaijiang");
$id=I('get.id','','strip_tags');
$zj=I('get.zj','','strip_tags');
$next_tit5=substr(I('get.time','','strip_tags'),8,10);
$begtime=strtotime(I('get.time','','strip_tags')." 21:30:00");
if ($zj=='2'){
$next_tit6="二";
}elseif ($zj=='1'){
$next_tit6="一";
}elseif ($zj=='4'){
$next_tit6="四";
}elseif ($zj=='3'){
$next_tit6="三";
}elseif ($zj=='6'){
$next_tit6="六";
}elseif ($zj=='7'){
$next_tit6="日";
}
$parents=$gengxin->where("id=$id")->order("id asc")->select();  
foreach($parents as $n=> $val){
echo $val['id'];
echo "<hr>";
echo $next_tit6;
echo "<hr>";
echo $next_tit5;
$gengxin->begtime=$begtime;
$gengxin->next_tit5=$next_tit5;
$gengxin->next_tit6=$next_tit6;
$gengxin->where('id='.$val['id'])->save();
}
}
}