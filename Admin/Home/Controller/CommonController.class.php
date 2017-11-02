<?php
namespace Home\Controller;
use Think\Controller; 
Class CommonController extends Controller{
	
Public function _initialize(){
$this->assign('Admin_title','后台管理系统 v1.0');
if (!isset($_SESSION['aid'])){
if(session('?Admin_User')){
$this->assign('Admin_User',session('Admin_User'));
$this->assign('Admin_Uid',session('Admin_Uid'));
}else{
$this->redirect('Home/Administrator/login');
}
}
}



public function _empty(){
echo "<div style='text-align:center;width:100%;padding-top:100px;float:left'><img src='".IMG_URL."404.png'></div>";
}


}