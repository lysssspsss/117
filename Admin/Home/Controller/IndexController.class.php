<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
//var_dump(get_defined_constants(true)); ////打印出系统提供的常量 包括我们自定义的常量
// D() M() 都可以实例化操作一个没有具体model模型类文件的数据表
//$Administrator=new \Model\AdministratorModel(); //实例化Model 
// A 说明 A(项目://) 或者A(模块)
//----------------------通过内置A函数实例化ConfingController  读取配置信息
//$confing=A("Confing");
//$confing->Confing();
//便捷操作R  R说明  实例化对象 并调用摸个方法
//R("Confing/Confing");
public function index(){
$this->assign('title','后台管理系统 v1.0');
$guide='http://www.178kj.cc/guide';  
$this->assign('guide',$guide);
    	$article=M('article');
		$tuku=M('tuku');
		$heibai=M('heibai');
		$pic=M('pic');
		$links_url=M('links_url');
		$qs=M('qs');
		$kaijiang=M('kaijiang');
		$plug_ad=M('plug_ad');
		$article_list=$article->where('id')->order("hits DESC limit 0,5")->select();  //热门文章排行
		$article_count=$article->count();//总文章数
		$tuku_count=$tuku->count();//彩色图库数
		$heibai_count=$heibai->count();//黑白图库数
		$pic_count=$pic->count();//美女图片数
		$links_url_count=$links_url->count();//网址数
		$plug_ad_count=$plug_ad->count();//广告数
		$qs_list=$qs->where('id')->order("id DESC limit 0,1")->select();//图库期数
		$kaijiang_list=$kaijiang->where('id')->order("id DESC limit 0,1")->select();//开奖期数
		$this->assign('article_count',$article_count);
		$this->assign('tuku_count',$tuku_count);
		$this->assign('heibai_count',$heibai_count);
		$this->assign('pic_count',$pic_count);
		$this->assign('links_url_count',$links_url_count);
		$this->assign('plug_ad_count',$plug_ad_count);
		$this->assign('qs_list',$qs_list);
		$this->assign('kaijiang_list',$kaijiang_list);

		
		$this->assign('article_list',$article_list);
    	if (empty($_SESSION['aid'])){
    		$this->redirect('Administrator/login');
    	}
$this->display();
}

//---------------------调用布局模版
public function header(){
$this->display();
}

public function left(){
$this->display();
}




public function _empty(){
echo "<div style='text-align:center;width:100%;padding-top:100px;float:left'><img src='".IMG_URL."404.png'></div>";
}



}