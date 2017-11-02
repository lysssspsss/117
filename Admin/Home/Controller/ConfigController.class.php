<?php
namespace Home\Controller;
use Think\Controller;
class ConfigController extends CommonController {
	
public function index(){
$config=new \Model\configModel();
$this->assign('Info',$config->show());
$this->display();
}

public function ConfigSave(){
$config=D("Home/config");
$config->site_name=I('post.site_name','','strip_tags');
$config->site_title=I('post.site_title','','strip_tags');
$config->site_url=I('post.site_url','','strip_tags');
$config->site_describe=I('post.site_describe','','strip_tags');
$config->site_keywords=I('post.site_keywords','','strip_tags');
$request=$config->where('id=1')->save();
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
}




public function _empty(){
echo "<div style='text-align:center;width:100%;padding-top:100px;float:left'><img src='".IMG_URL."404.png'></div>";
}



}