<?php
namespace Home\Controller;
use Think\Controller;
class KjzbController extends Controller {
public function index(){
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
$Daolist= M("kaijiang");
$parent = $Daolist->field(array('title','riqi','times','hitimes','next_tit','next_tit1','next_tit2','next_tit3','next_tit4'))->order("id desc")->limit(1)->select();
$this->assign('parent',$parent);

$this->display();
}
}