<?php
namespace Home\Controller;
use Think\Controller;
class BbsController extends Controller {
public function index(){
$Daolist= M("qs_class");
$Daoinfo= M("qs");
$parent=$Daolist->where("LagID=0")->order(" id DESC")->select();
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC LIMIT 0,1")->select();  
}
$this->assign('list',$parent);

$Daolist1= M("bbs_class");
$Daoinfo1= M("bbs");
$count  =$Daoinfo1->count();
$Page   = new  \Common\Page($count,20);
$show   = $Page->paging();
$parent1=$Daolist1->where("LagID=0")->order(" id DESC")->select();  
foreach($parent1 as $n=> $val){
$parent1[$n]['voo1'] = $Daoinfo1->where('directory1='.$val[numberid].'')->order("id DESC")->limit($Page->limit)->select(); 
}
$this->assign('list1',$parent1);
$this->assign('page',$show);// 赋值分页输出
$this->display();
}

public function sy(){
$Daolist= M("qs_class");
$Daoinfo= M("qs");
$parent=$Daolist->where("LagID=0")->order(" id DESC")->select();
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC LIMIT 0,1")->select();  
}
$this->assign('list',$parent);

$Daolist1= M("bbs_class");
$Daoinfo1= M("bbs");
$count  =$Daoinfo1->count();
$Page   = new  \Common\Page($count,40);
$show   = $Page->paging();
$parent1=$Daolist1->where("LagID=0")->order(" id DESC")->select();  
foreach($parent1 as $n=> $val){
$parent1[$n]['voo1'] = $Daoinfo1->where('directory1='.$val[numberid].'')->order("id DESC")->limit($Page->limit)->select(); 
}
$this->assign('list1',$parent1);
$this->assign('page',$show);// 赋值分页输出
$this->display();
}

public function lists(){
  $Form   =   M('bbs_class');
  $Daolist= M("bbs_class");
  $Daoinfo= M("bbs");	  
             // 读取数据
             $id=$_GET['id'];
             $data =   $Form->where("id=$id")->find();
             if($data) {
                 $this->data =   $data;// 模板变量赋值
             }else{
                 $this->error('数据错误');
             }
             $Form->getLastSql();			 
$parent=$Form->where("id=$id")->select(); 
foreach($parent as $n=> $val){
$count  =$Daoinfo->where('directory1='.$val[id].'')->count();
$Page   = new  \Common\Page($count,90);
$show   = $Page->paging();	
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[id].'')->order("id DESC")->limit($Page->limit)->select();  
}
$this->assign('list',$parent);				 
$this->assign('page',$show);// 赋值分页输出
// 热门资料
$Daolist1= M("bbs_class");
$Daoinfo1= M("bbs");
$parent1[$n]['voo']=$Daoinfo1->where('id')->order("hits DESC limit 0,15")->select();  
$this->assign('list1',$parent1);

// 公式资料
$Daolist2= M("bbs_class");
$Daoinfo2= M("bbs");
$parent2[$n]['voo']=$Daoinfo2->where('id')->order("id DESC limit 0,15")->select();  
$this->assign('list2',$parent2);

$this->display();
}


public function detail(){
  $Form   =   M('bbs');
  $Daolist= M("bbs_class");
  $Daoinfo= M("bbs");
             // 读取数据
             $id=$_GET['id'];
             $data =   $Form->where("id=$id")->find();
             if($data) {
                 $this->data =   $data;// 模板变量赋值
             }else{
                 $this->error('数据错误');
             }
             $Form->getLastSql();
			M('bbs')->where(array('id'=>$id))->setInc('hits',1);// 文章浏览量			 
// 热门资料
$Daolist1= M("bbs_class");
$Daoinfo1= M("bbs");
$parent1[$n]['voo']=$Daoinfo1->where('id')->order("hits DESC limit 0,15")->select();  
$this->assign('list1',$parent1);

// 公式资料
$Daolist2= M("bbs_class");
$Daoinfo2= M("bbs");
$parent2[$n]['voo']=$Daoinfo2->where('id')->order("id DESC limit 0,15")->select();  
$this->assign('list2',$parent2);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_17=M('plug_ad')->where(array('plug_ad_adtypeid'=>17,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_17',$plug_ad_17);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_18=M('plug_ad')->where(array('plug_ad_adtypeid'=>18,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_18',$plug_ad_18);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */			 
    	$zlkg10=M('plug_zlkg')->where(array('plug_zlkg_id'=>10))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg10',$zlkg10);			 
             $this->display();
}
public function pic(){
$Daolist= M("bbs_class");
$Daoinfo= M("bbs");
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->select();  
}
$this->assign('list',$parent);
$this->display();
}
}