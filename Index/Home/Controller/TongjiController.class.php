<?php
namespace Home\Controller;
use Think\Controller;
class TongjiController extends Controller {
public function index(){

$Daolist= M("kaijiang");
$parent = $Daolist->field(array('title','riqi','times','hitimes','next_tit','next_tit1','next_tit2','next_tit3','next_tit4'))->order("id desc")->limit(1)->select();
$this->assign('parent',$parent);

$this->display();
}
}