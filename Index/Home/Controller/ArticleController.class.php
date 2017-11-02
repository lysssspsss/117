<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
public function index(){
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
$Daoinfo= M("article_class");
$parent[$n]['voo']=$Daoinfo->where('id')->order("id ASC limit 0,50")->select();  
$this->assign('list',$parent);
$this->display();	
}

public function lists(){
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
  $Form   =   M('article_class');
  $Daolist= M("article_class");
  $Daoinfo= M("article");
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_26=M('plug_ad')->where(array('plug_ad_adtypeid'=>26,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_26',$plug_ad_26);  
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
$Page   = new  \Common\Page($count,105);
$show   = $Page->paging();	
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[id].'')->order("id DESC")->limit($Page->limit)->select();  
}
$this->assign('list',$parent);				 
$this->assign('page',$show);// 赋值分页输出
// 热门资料
$Daolist1= M("article_class");
$Daoinfo1= M("article");
$parent1[$n]['voo']=$Daoinfo1->where('id')->order("hits DESC limit 0,10")->select();  
$this->assign('list1',$parent1);

// 公式资料
$Daolist2= M("article_class");
$Daoinfo2= M("article");
$parent2[$n]['voo']=$Daoinfo2->where('id')->order("id DESC limit 0,15")->select();  
$this->assign('list2',$parent2);

$this->display();
}


public function detail(){
  $Form   =   M('article');
  $Daolist= M("article_class");
  $Daoinfo= M("article");
             // 读取数据
             $id=$_GET['id'];
             $data =   $Form->where("id=$id")->find();
             if($data) {
                 $this->data =   $data;// 模板变量赋值
             }else{
                 $this->error('数据错误');
             }
             $Form->getLastSql();
			M('article')->where(array('id'=>$id))->setInc('hits',1);// 文章浏览量			 
// 热门资料
$Daolist1= M("article_class");
$Daoinfo1= M("article");
$parent1[$n]['voo']=$Daoinfo1->where('id')->order("hits DESC limit 0,15")->select();  
$this->assign('list1',$parent1);

// 公式资料
$Daolist2= M("article_class");
$Daoinfo2= M("article");
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
$Daolist= M("article_class");
$Daoinfo= M("article");
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->select();  
}
$this->assign('list',$parent);
$this->display();
}
}