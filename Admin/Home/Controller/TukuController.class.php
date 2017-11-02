<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\AuthController;
use Think\Auth;
class TukuController extends AuthController {

    //站点设置
    public function tkcj(){
    	$tuku_cj=M('tuku_cj')->where(array('id'=>1))->find();
    	$this->assign('tuku_cj',$tuku_cj)->display();
    }
    
    //保存站点设置
    public function runtkcj(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$tuku_cj=M('tuku_cj');
    		if (!$tuku_cj->autoCheckToken($_POST)){
    			$this->error('表单令牌错误',0,0);
    		}else{
    			$sl_data=array(
    					'id'=>I('id'),
    					'site_url'=>I('site_url'),
    			);
	    		$tuku_cj->field('id,site_url')->save($sl_data);
	    		$this->success('图库采集地址设置保存成功',U('tuku_cj'),1);
    		}
    		
    	}
    }

	
//-----------------------以下调用彩色图库内容	
public function caise(){
$Article=D("Home/Tuku");
$count  =$Article->count();
$Page   = new  \Common\Page($count,30);
$show   = $Page->paging();
$keywords=I('get.keywords','','strip_tags');
$search="1=1"; 
if ($keywords!='')$search.="  and title  like '%$keywords%' "; 
$list = $Article->field(array('id','title','begtime','hits','directory4','sorting'))->where($search)->order("id desc")->limit($Page->limit)->select();
#######读取第一条排序
$Start = $Article->field(array('sorting'))->where($search)->order("id desc,begtime desc")->limit(1)->select();
#######读取后一条排序
$End   = $Article->field(array('sorting'))->where($search)->order("id asc,begtime desc")->limit(1)->select();
$this->assign('Startid',$Start[0]['sorting']);
$this->assign('Endid',$End[0]['sorting']);
$this->assign('list',$list);
$this->assign('page',$show);// 赋值分页输出
$this->display();	
}

public function caise_info_add(){
if ($_POST['Action']==''){
$this->display();	
}else{
$title=I('post.title','','strip_tags'); ######安全模式过滤获取标题
$picurl=I('post.path','','strip_tags'); ######安全模式过滤获取标题
$ClassID=I('post.ClassID','','strip_tags'); ######安全模式过滤获取标题
$directory1=substr($ClassID,0,4);    ######文章一级栏目
$directory2=substr($ClassID,0,8);    ######文章二级栏目
$directory3=substr($ClassID,0,12);   ######文章三级栏目
$directory4=substr($ClassID,0,16);   ######文章四级栏目
$content=$_POST['content'];          ###内容
session(tuku_class,$ClassID);
//$Article=D("Home/article");       // 实例化Data数据对象
//$array=array(
//"title"=>$title,
//"picurl"=>$picurl,
//"content"=>$content,
//"directory1"=>$directory1,
//"directory2"=>$directory2,
//"directory3"=>$directory3,
//"directory4"=>$directory4,
//"begtime"=>$begtime
//);
//$request=$Article->add($array);       // 实例化Data数据对象

//↓↓↓↓↓↓↓↓↓↓↓利用AR数据添加方法
$Article=D("Home/tuku");       // 实例化Data数据对象
$Article->title=$title;
$Article->picurl=$picurl;
$Article->content=$content;
$Article->directory1=$directory1;
$Article->directory2=$directory2;
$Article->directory3=$directory3;
$Article->directory4=$directory4;
$Article->begtime=begtime();
$request=$Article->add();
$Article->where('id='.$request)->save(array("sorting"=>$request));
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑利用AR数据添加方法
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
//↑↑↑↑以上开始数据的更新	
}
}


//↓↓↓利用AR方法执行数据的修改
public function caise_info_edit(){
if ($_POST['Action']==''){
$id=I('get.Id',0,'intval');######安全模式过滤获取标签
$Article=D("Home/tuku")->find($id);          ###实例化Data数据对象
$this->assign('info',$Article);   ######赋值Id
$this->display();	
}elseif($_POST['Action']=='Edit'){
$Id=I('post.Id',0,'intval');                ######安全模式过滤获取标签
$title=I('post.title','','strip_tags');     ######安全模式过滤获取标题
$picurl=I('post.path','','strip_tags');     ######安全模式过滤获取标题
$ClassID=I('post.ClassID','','strip_tags'); ######安全模式过滤获取标题
$directory1=substr($ClassID,0,4);    ######文章一级栏目
$directory2=substr($ClassID,0,8);    ######文章二级栏目
$directory3=substr($ClassID,0,12);   ######文章三级栏目
$directory4=substr($ClassID,0,16);   ######文章四级栏目
$content=$_POST['content'];          ###内容
$Article=D("Home/tuku");          ###实例化Data数据对象
$Article->title=I('post.title','','strip_tags');
$Article->picurl=$picurl;
$Article->content=$content;
$Article->directory1=$directory1;
$Article->directory2=$directory2;
$Article->directory3=$directory3;
$Article->directory4=$directory4;
$begtime->begtime=$begtime;
$request=$Article->where('id='.$Id)->save();
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
}

}
//↑↑以上开始数据的修改


//↓↓执行数据的删除
public function caise_infodelete(){
$id=$_POST['id'];
$Article=D("Home/tuku");          ###实例化Data数据对象
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
//↑↑以上开始数据的删除


public function caise_directory(){
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


//-----------------------彩色图库结束	


//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓黑白图库

public function heibai(){
$Article=D("Home/Heibai");
$count  =$Article->count();
$Page   = new  \Common\Page($count,30);
$show   = $Page->paging();
$keywords=I('get.keywords','','strip_tags');
$search="1=1"; 
if ($keywords!='')$search.="  and title  like '%$keywords%' "; 
$list = $Article->field(array('id','title','begtime','hits','directory4','sorting'))->where($search)->order("id desc")->limit($Page->limit)->select();
#######读取第一条排序
$Start = $Article->field(array('sorting'))->where($search)->order("id desc,begtime desc")->limit(1)->select();
#######读取后一条排序
$End   = $Article->field(array('sorting'))->where($search)->order("id asc,begtime desc")->limit(1)->select();
$this->assign('Startid',$Start[0]['sorting']);
$this->assign('Endid',$End[0]['sorting']);
$this->assign('list',$list);
$this->assign('page',$show);// 赋值分页输出
$this->display();	
}


public function heibai_info_add(){
if ($_POST['Action']==''){
$this->display();	
}else{
$title=I('post.title','','strip_tags'); ######安全模式过滤获取标题
$picurl=I('post.path','','strip_tags'); ######安全模式过滤获取标题
$ClassID=I('post.ClassID','','strip_tags'); ######安全模式过滤获取标题
$directory1=substr($ClassID,0,4);    ######文章一级栏目
$directory2=substr($ClassID,0,8);    ######文章二级栏目
$directory3=substr($ClassID,0,12);   ######文章三级栏目
$directory4=substr($ClassID,0,16);   ######文章四级栏目
$content=$_POST['content'];          ###内容
session(heibai_class,$ClassID);
//$Article=D("Home/article");       // 实例化Data数据对象
//$array=array(
//"title"=>$title,
//"picurl"=>$picurl,
//"content"=>$content,
//"directory1"=>$directory1,
//"directory2"=>$directory2,
//"directory3"=>$directory3,
//"directory4"=>$directory4,
//"begtime"=>$begtime
//);
//$request=$Article->add($array);       // 实例化Data数据对象

//↓↓↓↓↓↓↓↓↓↓↓利用AR数据添加方法
$Article=D("Home/heibai");       // 实例化Data数据对象
$Article->title=$title;
$Article->picurl=$picurl;
$Article->content=$content;
$Article->directory1=$directory1;
$Article->directory2=$directory2;
$Article->directory3=$directory3;
$Article->directory4=$directory4;
$Article->begtime=begtime();
$request=$Article->add();
$Article->where('id='.$request)->save(array("sorting"=>$request));
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑利用AR数据添加方法
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上开始数据的更新	
}
}


//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓利用AR方法执行数据的修改
public function heibai_info_edit(){
if ($_POST['Action']==''){
$id=I('get.Id',0,'intval');######安全模式过滤获取标签
$Article=D("Home/heibai")->find($id);          ###实例化Data数据对象
$this->assign('info',$Article);   ######赋值Id
$this->display();	
}elseif($_POST['Action']=='Edit'){
$Id=I('post.Id',0,'intval');                ######安全模式过滤获取标签
$title=I('post.title','','strip_tags');     ######安全模式过滤获取标题
$picurl=I('post.path','','strip_tags');     ######安全模式过滤获取标题
$ClassID=I('post.ClassID','','strip_tags'); ######安全模式过滤获取标题
$directory1=substr($ClassID,0,4);    ######文章一级栏目
$directory2=substr($ClassID,0,8);    ######文章二级栏目
$directory3=substr($ClassID,0,12);   ######文章三级栏目
$directory4=substr($ClassID,0,16);   ######文章四级栏目
$content=$_POST['content'];          ###内容
$Article=D("Home/heibai");          ###实例化Data数据对象
$Article->title=I('post.title','','strip_tags');
$Article->picurl=$picurl;
$Article->content=$content;
$Article->directory1=$directory1;
$Article->directory2=$directory2;
$Article->directory3=$directory3;
$Article->directory4=$directory4;
$begtime->begtime=$begtime;
$request=$Article->where('id='.$Id)->save();
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
}

}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上开始数据的修改


//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function heibai_infodelete(){
$id=$_POST['id'];
$Article=D("Home/heibai");          ###实例化Data数据对象
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
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上开始数据的删除
	
public function heibai_directory(){
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


//-----------------------黑白图库结束	


//-----------------------图库期数管理----------------------------

public function qs(){
$Article=D("Home/Qs");
$count  =$Article->count();
$Page   = new  \Common\Page($count,30);
$show   = $Page->paging();
$keywords=I('get.keywords','','strip_tags');
$search="1=1"; 
if ($keywords!='')$search.="  and title  like '%$keywords%' "; 
$list = $Article->field(array('id','title','begtime','directory4','sorting'))->where($search)->order("id desc")->limit($Page->limit)->select();
#######读取第一条排序
$Start = $Article->field(array('sorting'))->where($search)->order("id desc,begtime desc")->limit(1)->select();
#######读取后一条排序
$End   = $Article->field(array('sorting'))->where($search)->order("id asc,begtime desc")->limit(1)->select();
$this->assign('Startid',$Start[0]['sorting']);
$this->assign('Endid',$End[0]['sorting']);
$this->assign('list',$list);
$this->assign('page',$show);// 赋值分页输出
$this->display();	
}

public function qs_info_add(){
if ($_POST['Action']==''){
$this->display();	
}else{
$title=I('post.title','','strip_tags'); ######安全模式过滤获取标题
$picurl=I('post.path','','strip_tags'); ######安全模式过滤获取标题
$ClassID=I('post.ClassID','','strip_tags'); ######安全模式过滤获取标题
$directory1=substr($ClassID,0,4);    ######文章一级栏目
$directory2=substr($ClassID,0,8);    ######文章二级栏目
$directory3=substr($ClassID,0,12);   ######文章三级栏目
$directory4=substr($ClassID,0,16);   ######文章四级栏目
$content=$_POST['content'];          ###内容
session(qs_class,$ClassID);
//$Article=D("Home/article");       // 实例化Data数据对象
//$array=array(
//"title"=>$title,
//"picurl"=>$picurl,
//"content"=>$content,
//"directory1"=>$directory1,
//"directory2"=>$directory2,
//"directory3"=>$directory3,
//"directory4"=>$directory4,
//"begtime"=>$begtime
//);
//$request=$Article->add($array);       // 实例化Data数据对象

//↓↓↓↓↓↓↓↓↓↓↓利用AR数据添加方法
$Article=D("Home/qs");       // 实例化Data数据对象
$Article->title=$title;
$Article->picurl=$picurl;
$Article->content=$content;
$Article->directory1=$directory1;
$Article->directory2=$directory2;
$Article->directory3=$directory3;
$Article->directory4=$directory4;
$Article->begtime=begtime();
$request=$Article->add();
$Article->where('id='.$request)->save(array("sorting"=>$request));
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑利用AR数据添加方法
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上开始数据的更新	
}
}


//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓利用AR方法执行数据的修改
public function qs_info_edit(){
if ($_POST['Action']==''){
$id=I('get.Id',0,'intval');######安全模式过滤获取标签
$Article=D("Home/qs")->find($id);          ###实例化Data数据对象
$this->assign('info',$Article);   ######赋值Id
$this->display();	
}elseif($_POST['Action']=='Edit'){
$Id=I('post.Id',0,'intval');                ######安全模式过滤获取标签
$title=I('post.title','','strip_tags');     ######安全模式过滤获取标题
$picurl=I('post.path','','strip_tags');     ######安全模式过滤获取标题
$ClassID=I('post.ClassID','','strip_tags'); ######安全模式过滤获取标题
$directory1=substr($ClassID,0,4);    ######文章一级栏目
$directory2=substr($ClassID,0,8);    ######文章二级栏目
$directory3=substr($ClassID,0,12);   ######文章三级栏目
$directory4=substr($ClassID,0,16);   ######文章四级栏目
$content=$_POST['content'];          ###内容
$Article=D("Home/qs");          ###实例化Data数据对象
$Article->title=I('post.title','','strip_tags');
$Article->picurl=$picurl;
$Article->content=$content;
$Article->directory1=$directory1;
$Article->directory2=$directory2;
$Article->directory3=$directory3;
$Article->directory4=$directory4;
$begtime->begtime=$begtime;
$request=$Article->where('id='.$Id)->save();
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
}

}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上开始数据的修改


//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function qs_infodelete(){
$id=$_POST['id'];
$Article=D("Home/qs");          ###实例化Data数据对象
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
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上开始数据的删除

public function qs_directory(){
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

//----------------------图库期数管理结束----------------------------


public function _empty(){
echo "<div style='text-align:center;width:100%;padding-top:100px;float:left'><img src='".IMG_URL."404.png'></div>";
}



}