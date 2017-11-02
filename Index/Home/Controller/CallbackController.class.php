<?php
namespace Home\Controller;
use Think\Controller;
class CallbackController extends Controller {
public function index(){
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
$this->display();
}
}