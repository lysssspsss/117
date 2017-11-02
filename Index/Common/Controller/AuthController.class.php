<?php
/*
 * @thinkphp3.2.2  auth认证   php5.3以上
 * @Created on 2015/08/18
 * @Author  slackck   876902658@qq.com
 * @如果需要公共控制器，就不要继承AuthController，直接继承Controller
 */
namespace Common\Controller;
use Think\Controller;
use Think\Auth;
use Think\Model;

//权限认证
class AuthController extends CommonController {
	

	
	protected function _initialize(){
	
		//自动运行，为了判断左侧导航、右侧导航的选中状态,S为导航ID
		session('se',I('se'));
		
		//session不存在时，不允许直接访问
		if(!$_SESSION['aid']){
			$this->error('还没有登录，正在跳转到登录页','/Admin.php/Administrator/login');
		}

		//session存在时，不需要验证的权限
		$not_check = array('Index/index','Administrator/login');
		
		
		
		//当前操作的请求                 模块名/方法名
		if(in_array(CONTROLLER_NAME.'/'.ACTION_NAME, $not_check)){
			return true;
		}
		
		//下面代码动态判断权限
		$auth = new Auth();
		if(!$auth->check(CONTROLLER_NAME.'/'.ACTION_NAME,$_SESSION['aid']) && $_SESSION['aid']!= 1){
			$this->error('没有权限',0,0);
		}
	}
}