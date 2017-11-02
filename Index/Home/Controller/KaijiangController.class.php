<?php
namespace Home\Controller;
use Think\Controller;
class KaijiangController extends Controller {
public function index(){
		//开奖方式选择
    	$kjfs=M('plug_kj')->where(array('plug_kj_id'))->order("plug_kj_id asc")->select();
    	$this->assign('kjfs',$kjfs);	
$this->display();
}
}