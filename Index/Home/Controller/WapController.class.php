<?php
namespace Home\Controller;
use Think\Controller;
class WapController extends Controller {
public function index(){
$Daolist= M("bbs_class");
$Daoinfo= M("bbs");
$count  =$Daoinfo->count();
$Page   = new  \Common\Pg($count,20);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  
$this->assign('list',$parent);
$Daolist1= M("pic_class");
$Daoinfo1= M("pic");
$parent1=$Daolist1->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent1 as $n=> $val){  
$parent1[$n]['voo']=$Daoinfo1->where('directory1='.$val[numberid].'')->order("hits DESC limit 0,4")->select();  
}
$this->assign('list1',$parent1);

$Daolist3= M("qs_class");
$Daoinfo3= M("qs");
$parent3=$Daolist3->where("LagID=0")->order(" id DESC")->select();
foreach($parent3 as $n=> $val){  
$parent3[$n]['voo3']=$Daoinfo3->where('directory1='.$val[numberid].'')->order("id DESC LIMIT 0,1")->select();  
}
$this->assign('list3',$parent3);

$Daoinfo= M("pt");
$count  =$Daoinfo->count();
$Page   = new  \Common\Pg($count,10);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  
$this->assign('list2',$parent);

$Daoinfo= M("article_class");
$parent[$n]['voo']=$Daoinfo->where('id')->order("id ASC limit 0,36")->select();  
$this->assign('list4',$parent);

    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_25=M('plug_ad')->where(array('plug_ad_adtypeid'=>25,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_25',$plug_ad_25);	
    	$plug_ad_19=M('plug_ad')->where(array('plug_ad_adtypeid'=>19,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_19',$plug_ad_19);
		//开奖方式选择
    	$kjfs=M('plug_kj')->where(array('plug_kj_id'))->order("plug_kj_id asc")->select();
    	$this->assign('kjfs',$kjfs);
		
    	$zlkg10=M('plug_zlkg')->where(array('plug_zlkg_id'=>10))->order("plug_zlkg_id asc")->select();
    	$this->assign('zlkg10',$zlkg10);

		
		
$this->display();
}

public function pt_sy(){
$Daoinfo= M("pt");
$parent=$Daoinfo->where('id')->order("id DESC LIMIT 0,150")->select();  
$this->assign('list',$parent);
$this->display();
}

public function bz_sy(){
$Daoinfo= M("bizhong");
$parent=$Daoinfo->where('id')->order("id DESC LIMIT 0,150")->select();  
$this->assign('list',$parent);
$this->display();
}

public function liuxiao_sy(){
$Daoinfo= M("liuxiao");
$parent=$Daoinfo->where('id')->order("id DESC LIMIT 0,150")->select();  
$this->assign('list',$parent);
$this->display();
}

public function pic(){
$Daolist= M("pic_class");
$Daoinfo= M("pic");
$count  =$Daoinfo->count();
$Page   = new  \Common\Pg($count,10);
$show   = $Page->paging();
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC")->limit($Page->limit)->select();  
}
$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
}
public function pic_detail(){
  $Form   =   M('pic');
             // 读取数据
             $id=$_GET['id'];
             $data =   $Form->where("id=$id")->find();
             if($data) {
                 $this->data =   $data;// 模板变量赋值
             }else{
                 $this->error('数据错误');
             }
             $Form->getLastSql();
			 M('pic')->where(array('id'=>$id))->setInc('hits',1);// 浏览量
             $this->display();
}

public function kj(){
$Article=D("Home/kaijiang");
$count  =$Article->where("times='2017'")->count();
$count=ceil($count/20);
$list = $Article->where("times='2017'")->order("begtime desc,id asc")->limit("0,20")->select();
$this->assign('list',$list);
$this->assign('total',$count);
		//开奖方式选择
    	$kjfs=M('plug_kj')->where(array('plug_kj_id'))->order("plug_kj_id asc")->select();
    	$this->assign('kjfs',$kjfs);
    	$plug_ad_23=M('plug_ad')->where(array('plug_ad_adtypeid'=>23,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_23',$plug_ad_23);
    	/*
    	 * 广告横幅
    	 */			
$this->display();
}

public function zst(){
$this->display();
}
public function wapkj(){
$this->display();
}
public function sx(){
$this->display();
}
public function rq(){
$this->display();
}
public function gongju(){
$this->display();
}
		
	
public function news(){
$Daoinfo= M("article_class");
$parent[$n]['voo']=$Daoinfo->where('id')->order("id ASC limit 0,50")->select();  
$this->assign('list',$parent);
$this->display();
}


public function news_lists(){	
  $Form   =   M('article_class');
  $Daolist= M("article_class");
  $Daoinfo= M("article");
    	/*
    	 * 广告横幅
    	 */	  
    	$plug_ad_22=M('plug_ad')->where(array('plug_ad_adtypeid'=>22,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_22',$plug_ad_22);
    	/*
    	 * 广告横幅
    	 */		  
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
$Page   = new  \Common\Page($count,75);
$show   = $Page->paging();	
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[id].'')->order("id DESC")->limit($Page->limit)->select();  
}
$this->assign('list',$parent);				 
$this->assign('page',$show);// 赋值分页输出

$this->display();
}

public function news_detail(){
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
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_20=M('plug_ad')->where(array('plug_ad_adtypeid'=>20,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_20',$plug_ad_20);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_21=M('plug_ad')->where(array('plug_ad_adtypeid'=>21,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_21',$plug_ad_21);
    	/*
    	 * 广告横幅
    	 */	
    	$plug_ad_22=M('plug_ad')->where(array('plug_ad_adtypeid'=>22,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_22',$plug_ad_22);
    	/*
    	 * 广告横幅
    	 */				
             $this->display();
}

public function bbs(){
$Daolist= M("bbs_class");
$Daoinfo= M("bbs");
$count  =$Daoinfo->count();
$Page   = new  \Common\Pg($count,30);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  

$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
}


public function bbs_lists(){
  $Form   =   M('bbs_class');
  $Daolist= M("bbs_class");
  $Daoinfo= M("bbs");
    	/*
    	 * 广告横幅
    	 */	  
    	$plug_ad_22=M('plug_ad')->where(array('plug_ad_adtypeid'=>22,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_22',$plug_ad_22);
    	/*
    	 * 广告横幅
    	 */	  
$count  =$Daoinfo->count();
$Page   = new  \Common\Pg($count,75);
$show   = $Page->paging();	  
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
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[id].'')->order("id DESC")->limit($Page->limit)->select();  
}
$this->assign('list',$parent);				 
$this->assign('page',$show);// 赋值分页输出

$this->display();
}

public function bbs_detail(){
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
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_20=M('plug_ad')->where(array('plug_ad_adtypeid'=>20,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_20',$plug_ad_20);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_21=M('plug_ad')->where(array('plug_ad_adtypeid'=>21,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_21',$plug_ad_21);
    	/*
    	 * 广告横幅
    	 */	
    	$plug_ad_22=M('plug_ad')->where(array('plug_ad_adtypeid'=>22,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_22',$plug_ad_22);
    	/*
    	 * 广告横幅
    	 */				
             $this->display();
}

public function caise(){
$Daolist= M("qs_class");
$Daoinfo= M("qs");
$parent=$Daolist->where("LagID=0")->order(" id DESC")->select();
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC LIMIT 0,1")->select();  
}
$this->assign('list',$parent);

$Daolist1= M("tuku_class");
$Daoinfo1= M("tuku");
$keywords=I('get.keywords','','strip_tags');
$count  =$Daoinfo1->count();
$Page   = new  \Common\Pg($count,20);
$show   = $Page->paging();
$search="1=1"; 
if ($keywords!='')$search.="  and title  like '%$keywords%' "; 
$parent1=$Daolist1->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent1 as $n=> $val){
$parent1[$n]['voo1'] = $Daoinfo1->where($search)->order("sorting asc")->select();	
}
$this->assign('list1',$parent1);

$this->display();
}
public function caise_detail(){
  $Form   =   M('tuku');
  $Daolist= M("qs_class");
  $Daoinfo= M("qs");
             // 读取数据
             $id=$_GET['id'];
             $data =   $Form->where("id=$id")->find();
             if($data) {
                 $this->data =   $data;// 模板变量赋值
             }else{
                 $this->error('数据错误');
             }
             $Form->getLastSql();
			 M('tuku')->where(array('id'=>$id))->setInc('hits',1);// 浏览量
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC")->select();  
}
$this->assign('list',$parent);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_20=M('plug_ad')->where(array('plug_ad_adtypeid'=>20,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_20',$plug_ad_20);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_21=M('plug_ad')->where(array('plug_ad_adtypeid'=>21,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_21',$plug_ad_21);
    	/*
    	 * 广告横幅
    	 */	
    	$plug_ad_22=M('plug_ad')->where(array('plug_ad_adtypeid'=>22,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_22',$plug_ad_22);
    	/*
    	 * 广告横幅
    	 */				 
             $this->display();
}


public function hb(){
$Daolist= M("qs_class");
$Daoinfo= M("qs");
$parent=$Daolist->where("LagID=0")->order(" id DESC")->select();
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC LIMIT 0,1")->select();  
}
$this->assign('list',$parent);

$Daolist1= M("heibai_class");
$Daoinfo1= M("heibai");
$keywords=I('get.keywords','','strip_tags');
$count  =$Daoinfo1->count();
$Page   = new  \Common\Pg($count,20);
$show   = $Page->paging();
$search="1=1"; 
if ($keywords!='')$search.="  and title  like '%$keywords%' "; 
$parent1=$Daolist1->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent1 as $n=> $val){
$parent1[$n]['voo1'] = $Daoinfo1->where($search)->order("sorting asc")->select();	
}
$this->assign('list1',$parent1);
$this->assign('page',$show);// 赋值分页输出

$this->display();
}
public function hb_detail(){
  $Form   =   M('heibai');
  $Daolist= M("qs_class");
  $Daoinfo= M("qs");
             // 读取数据
             $id=$_GET['id'];
             $data =   $Form->where("id=$id")->find();
             if($data) {
                 $this->data =   $data;// 模板变量赋值
             }else{
                 $this->error('数据错误');
             }
             $Form->getLastSql();
			  M('heibai')->where(array('id'=>$id))->setInc('hits',1);// 浏览量
$parent=$Daolist->where("LagID=0")->order(" sorting asc")->select();  
foreach($parent as $n=> $val){  
$parent[$n]['voo']=$Daoinfo->where('directory1='.$val[numberid].'')->order("id DESC")->select();  
}
$this->assign('list',$parent);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_20=M('plug_ad')->where(array('plug_ad_adtypeid'=>20,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_20',$plug_ad_20);
    	/*
    	 * 广告横幅
    	 */
    	$plug_ad_21=M('plug_ad')->where(array('plug_ad_adtypeid'=>21,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_21',$plug_ad_21);
    	/*
    	 * 广告横幅
    	 */	
    	$plug_ad_22=M('plug_ad')->where(array('plug_ad_adtypeid'=>22,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_22',$plug_ad_22);
    	/*
    	 * 广告横幅
    	 */				 
             $this->display();
}



public function wap(){
$dates=date("Y");
$this->assign('dates',$dates);
$this->display();
}

public function history(){
$id=I('get.id',0,'intval'); 
$Article=D("Home/kaijiang");
$count  =$Article->where("times='$id'")->count();
$count=ceil($count/20);
$list = $Article->where("times='$id'")->order("begtime desc,id asc")->limit("0,20")->select();
$this->assign('list',$list);
$this->assign('total',$count);
$this->assign('id',$id);	
$this->display();
}

public function search(){
$id=I('get.id',0,'intval'); 
$page=I('get.page',0,'intval'); 
$sid=I('get.sid',0,'intval'); 
$sid=($sid-1)*20;
$Article=D("Home/kaijiang");
$count  =$Article->where("times='$id'")->count();
$count=ceil($count/20);
$list = $Article->where("times='$id'")->order("begtime desc,id asc")->limit($sid,$page)->select();
$this->assign('list',$list);
$this->display();
}

public function tms_sy(){
$Daoinfo= M("tms");
$parent=$Daoinfo->where('id')->order("id DESC LIMIT 0,150")->select();  
$this->assign('list',$parent);
$this->display();
}

public function table1(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table2(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table3(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table4(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table5(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table6(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}


public function table7(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table8(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table9(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table10(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table11(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table12(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table13(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table14(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table15(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table16(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table17(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table18(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table19(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table20(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table21(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table22(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table23(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table24(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table25(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table26(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table27(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table28(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table29(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table30(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table31(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table32(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table33(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table34(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table35(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table36(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table37(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table38(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table39(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table40(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table41(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table42(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table43(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table44(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table45(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table46(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table47(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}

public function table48(){
$Daolist= M("kaijiang");
$qinum=I('post.qinum',0,'intval'); 
if ($qinum==''){
$qinum="25";
}
$len=strlen($qinum);
if ($len<='3'){
$list=$Daolist->where($search)->order("begtime desc")->limit($qinum)->select();
}else{
$list=$Daolist->where("times='$qinum'")->order("begtime desc")->limit(160)->select();
}
$this->assign('list',$list);
$this->display();
}
public function lhc(){
$id=I('get.id',0,'intval'); 
$Daolist= M("kaijiang");
$dates=date("Y");
if ($id==0){
$search="times='$dates'"; 
}else{
$search="times='$id'"; 
}
$list=$Daolist->where($search)->order("begtime desc")->limit(160)->select();

$arrar=array();
for ($i=1;$i<=49;$i++){
if ($i<=9){
$ii="0".$i;	
}else{
$ii=$i;	
}
$arrar[]=$Daolist->field(array('id'))->where("$search and (tit1='$ii' or tit2='$ii' or tit3='$ii' or tit4='$ii' or tit5='$ii' or tit6='$ii' or tit7='$ii')")->count();
}
$this->assign('list',$list);
$this->assign('counts',$arrar);
$this->display();
}


public function lhc1(){
$id=I('get.id',0,'intval'); 
$Daolist= M("kaijiang");
$dates=date("Y");
if ($id==0){
$search="times='$dates'"; 
}else{
$search="times='$id'"; 
}
$list=$Daolist->field(array('title','tit7','times'))->where($search)->order("begtime desc")->limit(160)->select();
$arrar=array();
for ($i=1;$i<=49;$i++){
if ($i<=9){
$ii="0".$i;	
}else{
$ii=$i;	
}
$arrar[]=$Daolist->field(array('id'))->where("$search and tit7='$ii'")->count();
}
$this->assign('list',$list);
$this->assign('counts',$arrar);
$this->display();
}



public function lhc2(){
$id=I('get.id',0,'intval'); 
$Daolist= M("kaijiang");
$dates=date("Y");
if ($id==0){
$search="times='$dates'"; 
}else{
$search="times='$id'"; 
}

$list=$Daolist->field(array('title','tit7','times','tit07','tit11'))->where($search)->order("begtime desc")->limit(160)->select();
$arrar=array();
$arrar[0]=$Daolist->where("$search and tit07='鼠'")->count();
$arrar[1]=$Daolist->where("$search and tit07='牛'")->count();
$arrar[2]=$Daolist->where("$search and tit07='虎'")->count();
$arrar[3]=$Daolist->where("$search and tit07='兔'")->count();
$arrar[4]=$Daolist->where("$search and tit07='龍'")->count();
$arrar[5]=$Daolist->where("$search and tit07='蛇'")->count();
$arrar[6]=$Daolist->where("$search and tit07='馬'")->count();
$arrar[7]=$Daolist->where("$search and tit07='羊'")->count();
$arrar[8]=$Daolist->where("$search and tit07='猴'")->count();
$arrar[9]=$Daolist->where("$search and tit07='雞'")->count();
$arrar[10]=$Daolist->where("$search and tit07='狗'")->count();
$arrar[11]=$Daolist->where("$search and tit07='豬'")->count();
$arrar[12]=$Daolist->where("$search and tit11='家禽'")->count();
$arrar[13]=$Daolist->where("$search and tit11='野兽'")->count();
$arrar[14]=$Daolist->where("$search and (tit07='鼠' or tit07='牛' or tit07='虎' or tit07='兔' or tit07='龍' or tit07='蛇')")->count();
$arrar[15]=$Daolist->where("$search and (tit07='馬' or tit07='羊' or tit07='猴' or tit07='雞' or tit07='狗' or tit07='豬')")->count();
$this->assign('list',$list);
$this->assign('counts',$arrar);
$this->display();
}



public function lhc3(){
$id=I('get.id',0,'intval'); 
$Daolist= M("kaijiang");
$dates=date("Y");
if ($id==0){
$search="times='$dates'"; 
}else{
$search="times='$id'"; 
}

$list=$Daolist->field(array('title','tit7','times','bands'))->where($search)->order("begtime desc")->limit(160)->select();
$arrar=array();
$arrar[0]=$Daolist->where("$search and  bands ='紅'")->count();
$arrar[1]=$Daolist->where("$search and  bands ='藍'")->count();
$arrar[2]=$Daolist->where("$search and  bands ='綠'")->count();
$arrar[3]=$Daolist->where("$search and  bands ='紅' and tit7 % 2=1")->count();
$arrar[4]=$Daolist->where("$search and  bands ='藍' and tit7 % 2=1")->count();
$arrar[5]=$Daolist->where("$search and  bands ='綠' and tit7 % 2=1")->count();
$arrar[6]=$Daolist->where("$search and  bands ='紅' and tit7 % 2=0")->count();
$arrar[7]=$Daolist->where("$search and  bands ='藍' and tit7 % 2=0")->count();
$arrar[8]=$Daolist->where("$search and  bands ='綠' and tit7 % 2=0")->count();
$this->assign('list',$list);
$this->assign('counts',$arrar);
$this->display();
}



public function lhc4(){
$id=I('get.id',0,'intval'); 
$Daolist= M("kaijiang");
$dates=date("Y");
if ($id==0){
$search="times='$dates'"; 
}else{
$search="times='$id'"; 
}

$list=$Daolist->field(array('title','tit7','times','tit9','tit22'))->where($search)->order("begtime desc")->limit(160)->select();
$arrar=array();
$arrar[0]=$Daolist->where("$search and tit7 % 2=1")->count();
$arrar[1]=$Daolist->where("$search and tit7 % 2=0")->count();
$arrar[2]=$Daolist->where("$search and substr(tit7,0,1) % 2=1")->count();
print_r($Daolist->where("$search and substr(tit7,0,1) % 2=1")->count());

$arrar[3]=$Daolist->where("$search and tit9 % 2=0")->count();
$arrar[4]=$Daolist->where("$search and tit22 like '%合单%'")->count();
$arrar[5]=$Daolist->where("$search and tit22 like '%合双%'")->count();
$this->assign('list',$list);
$this->assign('counts',$arrar);
$this->display();
}


public function lhc5(){
$id=I('get.id',0,'intval'); 
$Daolist= M("kaijiang");
$dates=date("Y");
if ($id==0){
$search="times='$dates'"; 
}else{
$search="times='$id'"; 
}

$list=$Daolist->field(array('title','tit7','times'))->where($search)->order("begtime desc")->limit(160)->select();
$arrar=array();
$arrar[0]=$Daolist->where("$search and tit7<='07'")->count();
$arrar[1]=$Daolist->where("$search and tit7>='08' and tit7<='14'")->count();
$arrar[2]=$Daolist->where("$search and tit7>='15' and tit7<='21'")->count();
$arrar[3]=$Daolist->where("$search and tit7>='22' and tit7<='28'")->count();
$arrar[4]=$Daolist->where("$search and tit7>='29' and tit7<='35'")->count();
$arrar[5]=$Daolist->where("$search and tit7>='36' and tit7<='42'")->count();
$arrar[6]=$Daolist->where("$search and tit7>'42'")->count();
$this->assign('list',$list);
$this->assign('counts',$arrar);
$this->display();
}



public function lhc6(){
$id=I('get.id',0,'intval'); 
$Daolist= M("kaijiang");
$dates=date("Y");
if ($id==0){
$search="times='$dates'"; 
}else{
$search="times='$id'"; 
}

$list=$Daolist->field(array('title','tit7','times','tit9'))->where($search)->order("begtime desc")->limit(160)->select();
$arrar=array();
$arrar[0]=$Daolist->where("$search and tit9='0'")->count();
$arrar[1]=$Daolist->where("$search and tit9='1'")->count();
$arrar[2]=$Daolist->where("$search and tit9='2'")->count();
$arrar[3]=$Daolist->where("$search and tit9='3'")->count();
$arrar[4]=$Daolist->where("$search and tit9='4'")->count();
$arrar[5]=$Daolist->where("$search and (tit9 % 2=0)")->count();
$arrar[6]=$Daolist->where("$search and  tit9 % 2=1")->count();
$this->assign('list',$list);
$this->assign('counts',$arrar);
$this->display();
}


public function lhc7(){
$id=I('get.id',0,'intval'); 
$Daolist= M("kaijiang");
$dates=date("Y");
if ($id==0){
$search="times='$dates'"; 
}else{
$search="times='$id'"; 
}

$list=$Daolist->field(array('title','tit7','times','tit10'))->where($search)->order("begtime desc")->limit(160)->select();
$arrar=array();
$arrar[0]=$Daolist->where("$search and tit10='0'")->count();
$arrar[1]=$Daolist->where("$search and tit10='1'")->count();
$arrar[2]=$Daolist->where("$search and tit10='2'")->count();
$arrar[3]=$Daolist->where("$search and tit10='3'")->count();
$arrar[4]=$Daolist->where("$search and tit10='4'")->count();
$arrar[5]=$Daolist->where("$search and tit10='5'")->count();
$arrar[6]=$Daolist->where("$search and tit10='6'")->count();
$arrar[7]=$Daolist->where("$search and tit10='7'")->count();
$arrar[8]=$Daolist->where("$search and tit10='8'")->count();
$arrar[9]=$Daolist->where("$search and tit10='9'")->count();
$arrar[10]=$Daolist->where("$search and tit10<='4'")->count();
$arrar[11]=$Daolist->where("$search and tit10>'4'")->count();
$this->assign('list',$list);
$this->assign('counts',$arrar);
$this->display();
}


public function lhc8(){
$id=I('get.id',0,'intval'); 
$Daolist= M("kaijiang");
$dates=date("Y");
if ($id==0){
$search="times='$dates'"; 
}else{
$search="times='$id'"; 
}

$list=$Daolist->field(array('title','tit7','times','tit8'))->where($search)->order("begtime desc")->limit(160)->select();
$arrar=array();
$arrar[0]=$Daolist->where("$search and tit8='金'")->count();
$arrar[1]=$Daolist->where("$search and tit8='木'")->count();
$arrar[2]=$Daolist->where("$search and tit8='水'")->count();
$arrar[3]=$Daolist->where("$search and tit8='火'")->count();
$arrar[4]=$Daolist->where("$search and tit8='土'")->count();
$this->assign('list',$list);
$this->assign('counts',$arrar);
$this->display();
}
}