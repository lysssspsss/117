<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\AuthController;
use Think\Auth;
class KaijiangController extends AuthController {
//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下调用首页内容
public function index(){
$Article=D("Home/kaijiang");
$count  =$Article->count();
$Page   = new  \Common\Page($count,30);
$show   = $Page->paging();
$list = $Article->field(array('id','title','tit1','tit2','tit3','tit4','tit5','tit6','tit7','tit01','tit02','tit03','tit04','tit05','tit06','tit07','begtime','next_tit6','next_tit5'))->order("id desc")->limit($Page->limit)->select();
$this->assign('list',$list);
$this->assign('page',$show);// 赋值分页输出
$this->display();	

//$confing   = new  \Common\Lhc();
//$lhc_rgb=$confing->cz_lhc_xiao();




}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上调用首页内容


/*
 * 开奖模式操作
 */
 
    public function kjms(){
    		$this->display();

    } 
 
    public function plug_kj_edit(){
    		$plug_kjtype_list=M('plug_kjtype')->select();
    		$plug_kj_id=I('plug_kj_id');
    		$plug_kj=M('plug_kj')->where(array('plug_kj_id'=>$plug_kj_id))->find();
    		$this->assign('plug_kjtype_list',$plug_kjtype_list);
			$this->assign('plug_kj',$plug_kj);
    		$this->display();

    }
    
/*
 * 修改开奖模式操作
 */
    public function plug_kj_runedit(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{  		
    		$sl_data=array(
    				'plug_kj_id'=>I('plug_kj_id'),
    				'plug_kj_adtypeid'=>I('plug_kj_adtypeid'),
    		);
    		M('plug_kj')->save($sl_data);
    		$this->success('模式设置修改成功',1,1);
    	}
    }

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下调用信息列表显示内容
public function info_add(){
if ($_POST['Action']==''){
$this->display();	
}else{
$title=I('post.title','','strip_tags');
$next_tit=I('post.next_tit','','strip_tags');
$next_tit1=I('post.next_tit1','','strip_tags');
$next_tit2=I('post.next_tit2','','strip_tags');
$next_tit3=I('post.next_tit3','','strip_tags');
$next_tit4=I('post.next_tit4','','strip_tags');
$next_tit5=I('post.next_tit5','','strip_tags');
$next_tit6=I('post.next_tit6','','strip_tags');

$riqi=date("Y").$title;
$times=date("Y");
$title=$title;
$hitimes=date("m-d");
$Article=D("Home/kaijiang");
$Article->title=$title;
$Article->next_tit=$next_tit;
$Article->next_tit1=$next_tit1;
$Article->next_tit2=$next_tit2;
$Article->next_tit3=$next_tit3;
$Article->next_tit4=$next_tit4;
$Article->next_tit5=$next_tit5;
$Article->next_tit6=$next_tit6;
$Article->hitimes=$hitimes;
$Article->times=$times;
$Article->riqi=$riqi;
$Article->begtime=begtime();
$request=$Article->add();
$baoma1=$title=str_replace("期", "",$title);
$json=array("k"=>"$baoma1,待,待,待,待,待,待,待,$next_tit,$next_tit1,$next_tit2,$next_tit3,$next_tit4",'t'=>"1000");
file_put_contents('/chajian/bmjg.js',json_encode($json));

if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上调用信息列表显示内容

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下调用信息修改内容
public function info_edit(){
if ($_POST['Action']==''){
$id=I('get.Id',0,'intval');
$Article=D("Home/kaijiang")->find($id);
$this->assign('info',$Article);
$this->display();	
}elseif($_POST['Action']=='Edit'){
$Id=I('post.Id',0,'intval');
$title=I('post.title','','strip_tags');
$begtime=I('post.begtime','','strip_tags');
$Article=D("Home/kaijiang"); 
$Article->title=I('post.title','','strip_tags');
$Article->tit1=I('post.tit1','','strip_tags');
$Article->tit2=I('post.tit2','','strip_tags');
$Article->tit3=I('post.tit3','','strip_tags');
$Article->tit4=I('post.tit4','','strip_tags');
$Article->tit5=I('post.tit5','','strip_tags');
$Article->tit6=I('post.tit6','','strip_tags');
$Article->tit7=I('post.tit7','','strip_tags');
$Article->begtime=strtotime($begtime);
$Article->tit01=cz_lhc_xiao(1,I('post.tit1','','strip_tags'));
$Article->tit02=cz_lhc_xiao(1,I('post.tit2','','strip_tags'));
$Article->tit03=cz_lhc_xiao(1,I('post.tit3','','strip_tags'));
$Article->tit04=cz_lhc_xiao(1,I('post.tit4','','strip_tags'));
$Article->tit05=cz_lhc_xiao(1,I('post.tit5','','strip_tags'));
$Article->tit06=cz_lhc_xiao(1,I('post.tit6','','strip_tags'));
$Article->tit07=cz_lhc_xiao(1,I('post.tit7','','strip_tags'));
$Article->tit8=cz_lhc_xiao(2,I('post.tit7','','strip_tags'));
if (is_numeric(I('post.tit7','','strip_tags')) ){
$Article->tit9=substr(I('post.tit7','','strip_tags'),0,1);
$Article->tit10=substr(I('post.tit7','','strip_tags'),1,1);
}

$Article->tit11=cz_lhc_xiao(3,cz_lhc_xiao(1,I('post.tit7','','strip_tags')));
$Article->tit12=cz_lhc_xiao(4,I('post.tit7','','strip_tags'));
$Article->tit13=cz_lhc_xiao(5,I('post.tit7','','strip_tags'));
$Article->tit14=cz_lhc_xiao(7,cz_lhc_xiao(1,I('post.tit7','','strip_tags')));
$Article->tit15=cz_lhc_xiao(8,cz_lhc_xiao(1,I('post.tit7','','strip_tags')));
$Article->tit16=cz_lhc_xiao(9,cz_lhc_xiao(1,I('post.tit7','','strip_tags')));
$Article->tit17=cz_lhc_xiao(6,cz_lhc_xiao(1,I('post.tit7','','strip_tags')));
$Article->tit18=cz_lhc_xiao(10,cz_lhc_xiao(1,I('post.tit7','','strip_tags')));
$Article->tit19=cz_lhc_xiao(11,cz_lhc_xiao(1,I('post.tit7','','strip_tags')));
$Article->tit20=cz_lhc_xiao(12,cz_lhc_xiao(1,I('post.tit7','','strip_tags')));


$zonger=I('post.tit1','','strip_tags')+I('post.tit2','','strip_tags')+I('post.tit3','','strip_tags')+I('post.tit4','','strip_tags')+I('post.tit5','','strip_tags')+I('post.tit6','','strip_tags')+I('post.tit7','','strip_tags');
if ($zonger<=175){
$show="(".$zonger.")≤175";
}else{
$show="(".$zonger.")≥176";
}
if ($zonger % 2 ==0){
$show."双";
}else{
$show."单";
}
$Article->tit21=$show;

$heshu=substr(I('post.tit7','','strip_tags'),0,1)+substr(I('post.tit7','','strip_tags'),1,1);
if ($heshu<=9){
$heshus="0".$heshu;
}else{
$heshus=$heshu;
}
if ($heshu % 2 ==0){
$heshus."和双";
}else{
$heshus."和单";
}

$Article->tit22=$heshus;
$Article->bands=cz_lhc_xiao(0,I('post.tit7','','strip_tags'));



$Article->hitimes=date("m-d");
$hitimes=date("m-d");

$request=$Article->where('id='.$Id)->save();
$Article=D("Home/kaijiang")->find($Id);
$baoma1=$title=str_replace("期", "",$title);
if ($Article[tit1]==''){
$tit1="待";	
}else{
$tit1=$Article[tit1];	
}
if ($Article[tit2]==''){
$tit2="待";	
}else{
$tit2=$Article[tit2];	
}

if ($Article[tit3]==''){
$tit3="待";	
}else{
$tit3=$Article[tit3];	
}

if ($Article[tit4]==''){
$tit4="待";	
}else{
$tit4=$Article[tit4];	
}

if ($Article[tit5]==''){
$tit5="待";	
}else{
$tit5=$Article[tit5];	
}

if ($Article[tit6]==''){
$tit6="待";	
}else{
$tit6=$Article[tit6];	
}


if ($Article[tit7]==''){
$tit7="待";	
}else{
$tit7=$Article[tit7];	
}

$json=array("k"=>"$baoma1,$tit1,$tit2,$tit3,$tit4,$tit5,$tit6,$tit7,$Article[next_tit],$Article[next_tit1],$Article[next_tit2],$Article[next_tit3],$Article[next_tit4]",'t'=>"1000");
file_put_contents('chajian/bmjg.js',json_encode($json));
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上调用信息修改内容

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function infodelete(){
$id=$_POST['id'];
$Article=D("Home/kaijiang");
if ($_POST['Action']=='del'){
$request=$Article->where('id='.$id)->delete();
}else{
$request=$Article->where(array('id'=>array('in',$id)))->delete();
}
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能该信息已经被删除<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}

}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行信息的删除内容

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据的排序功能
public function sorting(){
cz_sorting("cz_product","1",$_GET['Point'],$_GET['id'],$_GET['sid'],$config);
echo "<script>self.location=document.referrer;</script>";
exit();	
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行信息的排序功能

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据的排序功能
public function class_sorting(){
cz_class_sorting("cz_product_class","0",$_GET['Point'],$_GET['id'],$_GET['sid'],$_GET['numberid'],$config);
echo "<script>self.location=document.referrer;</script>";
exit();	
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行信息的排序功能

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据的目录显示功能
public function directory(){
$NumberID=I('get.NumberID','','strip_tags'); 
$NumberID1 = substr ("$NumberID",0,4);
$NumberID2 = substr ("$NumberID",0,8);
$NumberID3 = substr ("$NumberID",0,12);
$NumberID4 = substr ("$NumberID",0,16);
$len=strlen($NumberID);
$this->assign('len',$len);
$this->assign('NumberID',$NumberID);
$this->assign('NumberID1',$NumberID1);
$this->assign('NumberID2',$NumberID2);
$this->assign('NumberID3',$NumberID3);
$this->assign('NumberID4',$NumberID4);
$this->display();
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据的目录显示功能

public function index_class(){
$Article=D("Home/product_class");
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
$Article=D("Home/product_class");
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
$Article=D("Home/product_class");
$Article->sorting=$sorting;
$Article->NumberID=$NumberID;
$Article->Root1=$Root1;
$Article->Root2=$Root2;
$Article->Root3=$Root3;
$Article->Root4=$Root4;
$Article->PartID=$PartID;
$Article->LagID=$LagID;
$Article->title=$title;
$request=$Article->add();
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0,"url"=>$url));
}
}

//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据目录添加保存功能

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据目录修改页面
public function index_class_edit(){
$id=I('get.Id',0,'intval');
$Article=D("Home/product_class")->find($id);
$this->assign('info',$Article);
$this->display();
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据目录修改页面

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据目录编辑保存功能
public function index_class_edit_save(){
$id=I('post.id',0,'intval');
$PartID=I('post.PartID','','strip_tags');
$Article=D("Home/product_class");
$Article->title=I('post.title','','strip_tags');
$Article->sorting=I('post.sorting','','strip_tags');
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
$Article=D("Home/product_class");
$Article->locks=0;
$Article->where(array('id'=>array('in',$DID)))->save();
echo "<script>self.location=document.referrer;</script>";
exit();
}elseif($Del=='删除'){
$Article=D("Home/product_class");
foreach($DID as $value){
//**************************获取数据判断是只删除一个目录还是包含子目录也删除
$list = $Article->field(array('LagID','NumberID'))->where("id='$value'")->limit(1)->select();
//--------------------------------------------------------------->>删除一级目录
if      ($list[0]['lagid']=='0'){
$articlel=D("Home/product");
$articlel->where("directory1='".$list[0][numberid]."'")->delete();
$Article->where("Root1='".$list[0][numberid]."'")->delete();
$Article->where("id='$value'")->delete();
//--------------------------------------------------------------->>删除二级目录
}elseif ($list[0]['lagid']=='1'){
$articlel=D("Home/product");
$articlel->where("directory2='".$list[0][numberid]."'")->delete();
$Article->where("Root2='".$list[0][numberid]."'")->delete();
$Article->where("id='$value'")->delete();
//--------------------------------------------------------------->>删除三级目录
}elseif ($list[0]['lagid']=='2'){
$articlel=D("Home/product");
$articlel->where("directory3='".$list[0][numberid]."'")->delete();
$Article->where("Root3='".$list[0][numberid]."'")->delete();
$Article->where("id='$value'")->delete();
//--------------------------------------------------------------->>删除三级目录
}elseif ($list[0]['lagid']=='3'){
$articlel=D("Home/product");
$articlel->where("directory4='".$list[0][numberid]."'")->delete();
$Article->where("Root4='".$list[0][numberid]."'")->delete();
$Article->where("id='$value'")->delete();
}else{
$Article->where("id='$value'")->delete();
}
}
echo "<script>self.location=document.referrer;</script>";
exit();
}elseif($Del=='禁用'){
$Article=D("Home/product_class");
$Article->locks=1;
$Article->where(array('id'=>array('in',$DID)))->save();
echo "<script>self.location=document.referrer;</script>";
exit();
}	
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据目录的一些操作


public function _empty(){
echo "<div style='text-align:center;width:100%;padding-top:100px;float:left'><img src='".IMG_URL."404.png'></div>";
}



}