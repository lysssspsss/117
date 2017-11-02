<?php
namespace Common\Controller;
use Think\Controller;

class CommonController extends Controller{
	
	
	
	
    public function _empty(){
		$this->error('此操作无效');
    }
}