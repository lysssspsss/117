<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\AuthController;
use Think\Auth;
use Think\Db;
use OT\Database;

class HtmlController extends AuthController {
	
public function index(){

$this->display();	
}	





public function tms_sy(){

$Daoinfo= M("tms");
$parent=$Daoinfo->where('id')->order("id DESC LIMIT 0,7")->select();  
$this->assign('list',$parent);
$connet=$this->buildHtml('tms_sy',HTML_PATH1.'/',U('Home/Ziliao/tms_sy'),'utf8');
$this->success('生成完毕！');


}	
	

}