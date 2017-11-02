<?php
namespace Home\Controller;
use Think\Controller;
class DocumentController extends Controller {

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据的排序功能
public function class_sorting(){
cz_class_sorting("cz_document","0",$_GET['Point'],$_GET['id'],$_GET['sid'],$_GET['numberid'],$config);
echo "<script>self.location=document.referrer;</script>";
exit();	
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行信息的排序功能

public function index(){
$Article=D("Home/document");
$Action=I('get.Action','','strip_tags');
$SId=I('get.SId','','strip_tags');
if     ($Action=='close'){
$Article->locks=1;
$Article->where('id='.$SId)->save();
echo "<script>self.location=document.referrer;</script>";exit();	
}elseif($Action=='open'){
$Article->locks=0;
$Article->where('id='.$SId)->save();
echo "<script>self.location=document.referrer;</script>";exit();	
}elseif($Action==''){	
$NumberID=I('get.Id','','strip_tags');
$len=strlen($NumberID);
$search="1=1"; 
if ($NumberID==''){
$search=" LagID=0 ";
}elseif($len==4 and $NumberID!=''){
$search=" LagID=1 and Root1='$NumberID'";
}elseif($len==8 and $NumberID!=''){
$search=" LagID=2 and Root2='$NumberID'";
}elseif($len==12 and $NumberID!=''){
$search=" LagID=3 and Root3='$NumberID'";
}
if ($Id!='')$search.="  and title  like '%$keywords%' "; 
$count  =$Article->count();
$Page   = new  \Common\Page($count,30);
$show   = $Page->paging();
$list = $Article->field(array('id','title','NumberID','sorting','locks','id','lagid'))->where($search)->order("sorting asc")->limit($Page->limit)->select();
$Start = $Article->field(array('sorting'))->where($search)->order("sorting asc,id desc")->limit(1)->select();
$End   = $Article->field(array('sorting'))->where($search)->order("sorting desc,id desc")->limit(1)->select();
$this->assign('Startid',$Start[0]['sorting']);
$this->assign('Endid',$End[0]['sorting']);
$this->assign('NumberID',$NumberID);
$this->assign('list',$list);
$this->assign('page',$show);
$this->display();
}
}

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据目录的添加显示页面
public function index_class_add(){
$Id=I('get.Id','','strip_tags');
$Article=D("Home/document");
#--------------------------------------------------------------------主目录添加
if ($Id==''){
$total  =$Article->count();
#--------------------------------------------------------------------判断大目录是否有数据
if ($total<>0){
$list = $Article->field(array('NumberID'))->where("LagID=0")->order("NumberID desc,id desc")->limit(1)->select();
$MJ=substr($list[0]['numberid'],1,20);
$J=$MJ+1;
}else{
$J=0+1;
}
#--------------------------------------------------------------------判断大目录是否有数据 THE END
$RootID=0;  
$PartID=0;
$LagID=0;
$len=strlen($J);
if ($len==1){
$JJ="000$J";
}elseif ($len==2){
$JJ="00$J";
}elseif ($len==3){
$JJ="0$J";
}elseif ($len==4){
$JJ="$J";
}
#--------------------------------------------------------------------主目录添加
}else{
$len=strlen($Id);
#--------------------------------------------------------------------二级目录添加
if ($len==4){
$total  =$Article->where("LagID=1 and PartID='$Id'")->count();
if ($total!='0'){
$list = $Article->field(array('NumberID'))->where("LagID=1 and PartID='$Id'")->order("NumberID desc,id desc")->limit(1)->select();
$MJ=substr($list[0]['numberid'],4,20);
$J=$MJ+1;
}else{
$J=0+1;
} 
$RootID="$Id";
$PartID="$Id";
$LagID=1;
#--------------------------------------------------------------------三级目录添加
}elseif ($len==8){
$total  =$Article->where("LagID=2 and PartID='$Id'")->count();
if ($total!='0'){
$list = $Article->field(array('NumberID'))->where("LagID=2 and PartID='$Id'")->order("NumberID desc,id desc")->limit(1)->select();
$MJ=substr($list[0]['numberid'],8,20);
$J=$MJ+1;
}else{
$J=0+1;
} 
$RootID="$Id";
$PartID="$Id";
$LagID=2;
}

$lmyen=strlen($J);
if ($lmyen==1){
$JJ=$Id."000".$J;
}elseif ($lmyen==2){
$JJ=$Id."00".$J;
}elseif ($lmyen==3){
$JJ=$Id."0".$J;
}elseif ($lmyen==4){
$JJ=$Id.$J;
}
}
$this->assign('RootID',$RootID);
$this->assign('PartID',$PartID);
$this->assign('LagID',$LagID);
$this->assign('JJ',$JJ);
$this->assign('J',$J);
$this->display();
}

//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据目录添加显示页面

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据目录的添加保存功能
public function index_class_add_save(){
$title=I('post.title','','strip_tags');
$PartID=I('post.PartID','','strip_tags');
$RootID=I('post.RootID','','strip_tags');
$LagID=I('post.LagID','','strip_tags');
$sorting=I('post.sorting','','strip_tags');
$NumberID=I('post.NumberID','','strip_tags');
$content=$_POST['content'];
$Root1=substr($RootID,0,4);
$Root2=substr($RootID,0,8);
$Root3=substr($RootID,0,12);
$Root4=substr($RootID,0,16);
$len=strlen($NumberID);
if ($len<=4){$url="";}elseif($len<=8){$url=$Root1;}elseif($len<=12){$url=$Root2;}elseif($len<=16){$url=$Root3;}
if ($title=='' || $NumberID=='' || $LagID=='' || $Root1==''  || $PartID==''){
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：您没有输入资料呀<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1,"url"=>$url));
}else{
$Article=D("Home/document");
$Article->sorting=$sorting;
$Article->NumberID=$NumberID;
$Article->Root1=$Root1;
$Article->Root2=$Root2;
$Article->Root3=$Root3;
$Article->Root4=$Root4;
$Article->PartID=$PartID;
$Article->LagID=$LagID;
$Article->title=$title;
$Article->content=$content;
$request=$Article->add();
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0,"url"=>$url));
}
}

//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据目录添加保存功能

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据目录修改页面
public function index_class_edit(){
$id=I('get.Id',0,'intval');
$Article=D("Home/document")->find($id);
$this->assign('info',$Article);
$this->display();
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据目录修改页面

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据目录编辑保存功能
public function index_class_edit_save(){
$id=I('post.id',0,'intval');
$PartID=I('post.PartID','','strip_tags');
$content=$_POST['content'];
$Article=D("Home/document");
$Article->title=I('post.title','','strip_tags');
$Article->sorting=I('post.sorting','','strip_tags');
$Article->content=$content;
$request=$Article->where('id='.$id)->save();
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0,"url"=>$PartID));
}else{
$msg=$PartID."<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1,"url"=>$PartID));
}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据目录编辑保存功能

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据目录的一些操作
public function Action(){
$DID=I('post.DID','','strip_tags');
$Del=I('post.Del','','strip_tags');
if     ($Del=='开通'){
$Article=D("Home/document");
$Article->locks=0;
$Article->where(array('id'=>array('in',$DID)))->save();
echo "<script>self.location=document.referrer;</script>";
exit();
}elseif($Del=='删除'){
$Article=D("Home/document");
foreach($DID as $value){
//**************************获取数据判断是只删除一个目录还是包含子目录也删除
$list = $Article->field(array('LagID','NumberID'))->where("id='$value'")->limit(1)->select();
//--------------------------------------------------------------->>删除一级目录
if      ($list[0]['lagid']=='0'){
$Article->where("Root1='".$list[0][numberid]."'")->delete();
$Article->where("id='$value'")->delete();
//--------------------------------------------------------------->>删除二级目录
}elseif ($list[0]['lagid']=='1'){
$Article->where("Root2='".$list[0][numberid]."'")->delete();
$Article->where("id='$value'")->delete();
//--------------------------------------------------------------->>删除三级目录
}elseif ($list[0]['lagid']=='2'){
$Article->where("Root3='".$list[0][numberid]."'")->delete();
$Article->where("id='$value'")->delete();
//--------------------------------------------------------------->>删除三级目录
}elseif ($list[0]['lagid']=='3'){
$Article->where("Root4='".$list[0][numberid]."'")->delete();
$Article->where("id='$value'")->delete();
}else{
$Article->where("id='$value'")->delete();
}
}
echo "<script>self.location=document.referrer;</script>";
exit();
}elseif($Del=='禁用'){
$Article=D("Home/document");
$Article->locks=1;
$Article->where(array('id'=>array('in',$DID)))->save();
echo "<script>self.location=document.referrer;</script>";
exit();
}	
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据目录的一些操作




}