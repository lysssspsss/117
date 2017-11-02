<?php
namespace Home\Controller;
use Think\Controller;
class LogoutController extends Controller {
public function index(){
session('Admin_User',null); // 删除session
$this->success('您已成功退出系统！！！',U('/Home/Login'));
}

}