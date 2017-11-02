<?php
namespace Home\Controller;
use Think\Controller;
class AdministratorController extends Controller {
	
public function index(){
$Article=D("Home/administrator");
$count  =$Article->count();
$Page   = new  \Common\Page($count,30);
$show   = $Page->paging();
$keywords=I('get.keywords','','strip_tags');
$search="1=1"; 
if ($keywords!='')$search.="  and username  like '%$keywords%' "; 
$list = $Article->field(array('id','username','rname','founder','begtime'))->where($search)->order("begtime desc")->limit($Page->limit)->select();
$this->assign('list',$list);
$this->assign('page',$show);
$this->display();

}


public function deltree($pathdir)
    {

        if($this->is_empty_dir($pathdir)){//如果是空的
            rmdir($pathdir);//直接删除
        }else{//否则读这个目录，除了.和..外
              $d=dir($pathdir);
              while($a=$d->read())
              {
                  if(is_file($pathdir.'/'.$a) && ($a!='.') && ($a!='..')){unlink($pathdir.'/'.$a);}
                  //如果是文件就直接删除
                  if(is_dir($pathdir.'/'.$a) && ($a!='.') && ($a!='..'))
                  {//如果是目录
                      if(!$this->is_empty_dir($pathdir.'/'.$a))//是否为空
                      {//如果不是，调用自身，不过是原来的路径+他下级的目录名
                          $this->deltree($pathdir.'/'.$a);
                      }
                      if($this->is_empty_dir($pathdir.'/'.$a))
                      {//如果是空就直接删除
                      rmdir($pathdir.'/'.$a);
                      }
                  }
              }
            $d->close();          
			  $this->assign("jumpUrl","../Cache/index");
			  $this->success('系统缓存清除成功！');
        }
    }
    public function is_empty_dir($pathdir)
    {
        //判断目录是否为空，我的方法不是很好吧？只是看除了.和..之外有其他东西不是为空
        $d=opendir($pathdir);
        $i=0;
          while($a=readdir($d))
          {
            $i++;
          }
        closedir($d);
        if($i>2){return false;}
        else return true;
    }
    public function runtime(){
        $pathdir = APP_PATH."Runtime";
        $a = $this->deltree($pathdir);
        dump($a);
    }

//---------------------调用登录模块
public function login(){
$this->display();
}

//---------------------调用退出模块
public function logout(){
session(null); // 删除session
$this->redirect("Administrator/login");
}


    //登陆验证
	public function runlogin(){
		if (!IS_AJAX){
			$this->error("提交方式错误！",U('login'),0);
		}else{
			$admin_username=I('admin_username');
			$admin_pwd=md5(I('admin_pwd'));
			
			$admin=M('admin')->where(array('admin_username'=>$admin_username,'admin_pwd'=>$admin_pwd))->find();
				if (!$admin||$admin_pwd!==$admin['admin_pwd']){
					$this->error('用户名或者密码错误，重新输入',U('login'),0);
				}else{
					//登录后更新数据库，登录IP，登录次数,登录时间
					$data=array(
							'admin_ip'=>get_client_ip(),
					);
					M('admin')->where(array('admin_username'=>$admin_username))->setInc('admin_hits',1);
					M('admin')->save($data);
					session('aid',$admin['admin_id']);
					session('admin_username',$admin['admin_username']);
					session('admin_realname',$admin['admin_realname']);
					$this->success('恭喜您，登陆成功',U('Index/index'),1);
				}
		}
	}

//---------------------调用登录验证模块
public function loginCheck(){
$Action=I('post.Action','','strip_tags');
$Administrator=new \Model\AdministratorModel();
$username=I('post.username','','strip_tags');
$password=md5(I('post.password','','strip_tags'));
$Token=I('post.Token','','strip_tags');
$rst=$Administrator->CheckUser($username,$password);
if ($rst==false or $Token<>$_SESSION['cz_token']){
$msg="<br><br><p>Sorry，验证失败，请重新输入！</p><p>将在 <span id=\"mes\">3</span> 秒钟后返回首页！</p>";
}else{
$error=0;
session(Admin_User,$rst['username']);
session(Admin_Uid,$rst['id']);
session(Admin_Flag,$rst['flag']);
$msg="<br><br>登录成功，等稍等......";
}

echo json_encode(array("msg"=>$msg,"error"=>$error));
}


//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function infodelete(){
$id=$_POST['id'];
$Article=D("Home/administrator");
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


public function info_add(){
if     ($_POST['Action']==''){
$this->display();	
}elseif($_POST['Action']=='Add'){
$username=I('post.username','','strip_tags');
$password=md5(I('post.password','','strip_tags'));
$gender=I('post.gender','','strip_tags');
$rname=I('post.rname','','strip_tags');
$Article=D("Home/administrator");       // 实例化Data数据对象
$Article->username=$username;
$Article->password=$password;
$Article->rname=$rname;
$Article->gender=$gender;
$Article->begtime=begtime();
$request=$Article->add();
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
}
}


public function info_edit(){
	
if ($_POST['Action']==''){
$id=I('get.Id',0,'intval');
$Article=D("Home/administrator")->find($id);
$this->assign('info',$Article);
$this->display();	
}elseif($_POST['Action']=='Edit'){
$id=I('post.Id',0,'intval');
$password=md5(I('post.password','','strip_tags'));
$passwords=md5(I('post.passwords','','strip_tags'));
$qrpassword=md5(I('post.qrpassword','','strip_tags'));
$result=$Article=D("Home/administrator")->find($id);

if     ($result['password']!=$passwords){
$msg="<div class='Yoerror2'>操作失败！原因：旧密码不正确！！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
}elseif ($password!=$qrpassword){
$msg="<div class='Yoerror2'>操作失败！原因：您两次输入的密码不一样！！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
}else{
$Article=D("Home/administrator");
$Article->password=$password;
$Article->where('id='.$id)->save();
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
}

echo json_encode(array("msg"=>$msg,"error"=>0));
	
}
	
}

}