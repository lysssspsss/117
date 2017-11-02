<?php
namespace Home\Controller;
use Think\Controller;
class ZiliaoController extends Controller {
	
public function tms(){
$Daoinfo= M("tms");
$count  =$Daoinfo->count();
$Page   = new  \Common\Page($count,155);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  

$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
}


public function bizhong_sy(){
$Daoinfo= M("bizhong");
$parent=$Daoinfo->where('id')->order("id DESC LIMIT 0,3")->select();  
$this->assign('list',$parent);
$this->display();
}

public function tms_sy(){
$Daoinfo= M("tms");
$parent=$Daoinfo->where('id')->order("id DESC LIMIT 0,6")->select();  
$this->assign('list',$parent);
$this->display();
}

public function jingxuan_sy(){
$Daoinfo= M("jingxuan");
$parent=$Daoinfo->where('id')->order("id DESC LIMIT 0,5")->select();  
$this->assign('list',$parent);
$this->display();
}

public function jingxuan(){
$Daoinfo= M("jingxuan");
$count  =$Daoinfo->count();
$Page   = new  \Common\Page($count,10);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  

$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
}

public function pt3(){
$Daoinfo= M("pt3");
$count  =$Daoinfo->count();
$Page   = new  \Common\Page($count,60);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  

$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
}

public function pt3_sy(){
$Daoinfo= M("pt3");
$parent=$Daoinfo->where('id')->order("id DESC LIMIT 0,14")->select();  
$this->assign('list',$parent);
$this->display();
}


public function pt(){
$Daoinfo= M("pt");
$count  =$Daoinfo->count();
$Page   = new  \Common\Page($count,30);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  

$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
}

public function pt_sy(){
$Daoinfo= M("pt");
$parent=$Daoinfo->where('id')->order("id DESC LIMIT 0,14")->select();  
$this->assign('list',$parent);
$this->display();
}
public function liuxiao(){
$Daoinfo= M("liuxiao");
$count  =$Daoinfo->count();
$Page   = new  \Common\Page($count,20);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  

$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
}

public function liuxiao_sy(){
$Daoinfo= M("liuxiao");
$parent=$Daoinfo->where('id')->order("id DESC LIMIT 0,5")->select();  
$this->assign('list',$parent);
$this->display();
}


public function nmx(){
$Daoinfo= M("nmx");
$count  =$Daoinfo->count();
$Page   = new  \Common\Page($count,20);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  

$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
}

public function nmx_sy(){
$Daoinfo= M("nmx");
$parent=$Daoinfo->where('jg<1')->order("id DESC LIMIT 0,3")->select();  
$this->assign('list',$parent);

$parent1=$Daoinfo->where('jg>0')->order("id DESC LIMIT 0,2")->select();  
$this->assign('list1',$parent1);


$this->display();
}


}