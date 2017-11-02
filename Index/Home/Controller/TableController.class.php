<?php
namespace Home\Controller;
use Think\Controller;
class TableController extends Controller {
public function index(){
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
$this->display();
}

public function table1(){
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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
	    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */	
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

}