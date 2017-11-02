<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\AuthController;
use Think\Auth;
use Think\Db;
use OT\Database;

class ZiliaoController extends AuthController {
	

/*
 * 开奖模式操作
 */
 
    public function zlkg(){
    		$this->display();

    } 
 
    public function plug_zlkg_edit(){
    		$plug_zlkgtype_list=M('plug_zlkgtype')->select();
    		$plug_zlkg_id=I('plug_zlkg_id');
    		$plug_zlkg=M('plug_zlkg')->where(array('plug_zlkg_id'=>$plug_zlkg_id))->find();
    		$this->assign('plug_zlkgtype_list',$plug_zlkgtype_list);
			$this->assign('plug_zlkg',$plug_zlkg);
    		$this->display();

    }
    
/*
 * 修改开奖模式操作
 */
    public function plug_zlkg_runedit(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{  		
    		$sl_data=array(
    				'plug_zlkg_id'=>I('plug_zlkg_id'),
    				'plug_zlkg_adtypeid'=>I('plug_zlkg_adtypeid'),
    		);
    		M('plug_zlkg')->save($sl_data);
    		$this->success('开关设置修改成功',U('zlkg'),1);
    	}
    }	

public function jingxuan(){
$Daoinfo= M("jingxuan");
$count  =$Daoinfo->count();
$Page   = new  \Common\Page($count,5);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  
$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
} 



	public function jingxuan_add(){
		$this->display();
	}

    public function jingxuan_runadd(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$jingxuan=M('jingxuan');
    			$sldata=array(
    					'qihao'=>I('qihao'),
						'jxhm'=>I('jxhm'),
						'jx6m'=>I('jx6m'),
						'ymzt'=>I('ymzt'),
						'jxyx'=>I('jxyx'),
						'jx2x'=>I('jx2x'),
						'jx3x'=>I('jx3x'),
						'jx4x'=>I('jx4x'),
						'jx5x'=>I('jx5x'),
						'jx6x'=>I('jx6x'),
						'ptyx'=>I('ptyx'),
						'jx9x'=>I('jx9x'),
						'dszt'=>I('dszt'),
						'jsew'=>I('jsew'),
						'ds'=>I('ds'),
						'pt'=>I('pt'),
						'jg'=>I('jg'),
						'haoma'=>I('haoma'),						
    					'begtime'=>time(),
    			);
    			$jingxuan->field('qihao,jxhm,jx6m,ymzt,jxyx,jx2x,jx3x,jx4x,jx5x,jx6x,ptyx,jx9x,dszt,jsew,ds,pt,jg,haoma,begtime')->add($sldata);
    			$this->success('添加成功',U('jingxuan'),1);
    	}
    }

 
    public function jingxuan_edit(){
		$id=I('id');
    	$jingxuan=M('jingxuan')->where(array('id'=>$id))->find();
    	$this->assign('jingxuan',$jingxuan);
    	$this->display();
    }


//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function jingxuan_infodelete(){
$id=$_POST['id'];
$jingxuan=D("Home/jingxuan");          ###实例化Data数据对象
if ($_POST['Action']=='del'){
$request=$jingxuan->where('id='.$id)->delete();
}else{
$request=$jingxuan->where(array('id'=>array('in',$id)))->delete();
}
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能该信息已经被删除<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}

}



//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function jingxuan_delete(){
$jingxuan=M('jingxuan');
$jingxuan->where('1')->delete(); 
$this->success('清理成功',U('jingxuan'),1);
}


//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上开始数据的删除

	
    public function jingxuan_runedit(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$jingxuan=M('jingxuan');
    			$sldata=array(
    					'id'=>I('id'),
    					'qihao'=>I('qihao'),
						'jxhm'=>I('jxhm'),
						'jx6m'=>I('jx6m'),
						'ymzt'=>I('ymzt'),
						'jxyx'=>I('jxyx'),
						'jx2x'=>I('jx2x'),
						'jx3x'=>I('jx3x'),
						'jx4x'=>I('jx4x'),
						'jx5x'=>I('jx5x'),
						'jx6x'=>I('jx6x'),
						'ptyx'=>I('ptyx'),
						'jx9x'=>I('jx9x'),
						'dszt'=>I('dszt'),
						'jsew'=>I('jsew'),
						'ds'=>I('ds'),
						'pt'=>I('pt'),
						'jg'=>I('jg'),
						'haoma'=>I('haoma'),	
    			);
    			M('jingxuan')->field('id,qihao,jxhm,jx6m,ymzt,jxyx,jx2x,jx3x,jx4x,jx5x,jx6x,ptyx,jx9x,dszt,jsew,ds,pt,jg,haoma')->save($sldata);
    			$this->success('修改成功',U('jingxuan'),1);
    	}
    }


public function bizhong(){
$Daoinfo= M("bizhong");
$count  =$Daoinfo->count();
$Page   = new  \Common\Page($count,5);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  
$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
} 



	public function bizhong_add(){
		$this->display();
	}

    public function bizhong_runadd(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$bizhong=M('bizhong');
    			$sldata=array(
    					'qihao'=>I('qihao'),
						'liuxiao'=>I('liuxiao'),
						'sanxiao'=>I('sanxiao'),
						'erxiao'=>I('erxiao'),
						'yixiao'=>I('yixiao'),
						'yima'=>I('yima'),
						'sanma'=>I('sanma'),
						'wuma'=>I('wuma'),
						'bama'=>I('bama'),
						'jiuma'=>I('jiuma'),
						'pt'=>I('pt'),
						'jg'=>I('jg'),
						'haoma'=>I('haoma'),						
    					'begtime'=>time(),
    			);
    			$bizhong->field('qihao,liuxiao,sanxiao,erxiao,yixiao,yima,sanma,wuma,bama,jiuma,jg,haoma,begtime')->add($sldata);
    			$this->success('添加成功',U('bizhong'),1);
    	}
    }

 
    public function bizhong_edit(){
		$id=I('id');
    	$bizhong=M('bizhong')->where(array('id'=>$id))->find();
    	$this->assign('bizhong',$bizhong);
    	$this->display();
    }


//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function bizhong_infodelete(){
$id=$_POST['id'];
$bizhong=D("Home/bizhong");          ###实例化Data数据对象
if ($_POST['Action']=='del'){
$request=$bizhong->where('id='.$id)->delete();
}else{
$request=$bizhong->where(array('id'=>array('in',$id)))->delete();
}
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能该信息已经被删除<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}

}


//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function bizhong_delete(){
$bizhong=M('bizhong');
$bizhong->where('1')->delete(); 
$this->success('清理成功',U('bizhong'),1);
}

//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上开始数据的删除

	
    public function bizhong_runedit(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$bizhong=M('bizhong');
    			$sldata=array(
    					'id'=>I('id'),
    					'qihao'=>I('qihao'),
						'liuxiao'=>I('liuxiao'),
						'sanxiao'=>I('sanxiao'),
						'erxiao'=>I('erxiao'),
						'yixiao'=>I('yixiao'),
						'yima'=>I('yima'),
						'sanma'=>I('sanma'),
						'wuma'=>I('wuma'),
						'bama'=>I('bama'),
						'jiuma'=>I('jiuma'),
						'pt'=>I('pt'),
						'jg'=>I('jg'),
						'haoma'=>I('haoma'),	
    			);
    			M('bizhong')->field('id,qihao,liuxiao,sanxiao,erxiao,yixiao,yima,sanma,wuma,bama,jiuma,jg,haoma')->save($sldata);
    			$this->success('修改成功',U('bizhong'),1);
    	}
    }


	
public function sanqi(){
$Daoinfo= M("sanqi");
$count  =$Daoinfo->count();
$Page   = new  \Common\Page($count,20);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  
$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
} 



	public function sanqi_add(){
		$this->display();
	}

    public function sanqi_runadd(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$sanqi=M('sanqi');
    			$sldata=array(
    					'qihao1'=>I('qihao1'),
						'qihao2'=>I('qihao2'),
						'qihao3'=>I('qihao3'),
						'sanqi'=>I('sanqi'),
						'jg1'=>I('jg1'),
						'jg2'=>I('jg2'),
						'jg3'=>I('jg3'),
						'haoma1'=>I('haoma1'),
						'haoma2'=>I('haoma2'),
						'haoma3'=>I('haoma3'),						
    					'begtime'=>time(),
    			);
    			$sanqi->field('qihao1,qihao2,qihao3,sanqi,jg1,jg2,jg3,haoma1,haoma2,haoma3,begtime')->add($sldata);
    			$this->success('添加成功',U('sanqi'),1);
    	}
    }

 
    public function sanqi_edit(){
		$id=I('id');
    	$sanqi=M('sanqi')->where(array('id'=>$id))->find();
    	$this->assign('sanqi',$sanqi);
    	$this->display();
    }


//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function sanqi_infodelete(){
$id=$_POST['id'];
$sanqi=D("Home/sanqi");          ###实例化Data数据对象
if ($_POST['Action']=='del'){
$request=$sanqi->where('id='.$id)->delete();
}else{
$request=$sanqi->where(array('id'=>array('in',$id)))->delete();
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

	
    public function sanqi_runedit(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$sanqi=M('sanqi');
    			$sldata=array(
    					'id'=>I('id'),
    					'qihao1'=>I('qihao1'),
						'qihao2'=>I('qihao2'),
						'qihao3'=>I('qihao3'),
						'sanqi'=>I('sanqi'),
						'jg1'=>I('jg1'),
						'jg2'=>I('jg2'),
						'jg3'=>I('jg3'),
						'haoma1'=>I('haoma1'),
						'haoma2'=>I('haoma2'),
						'haoma3'=>I('haoma3'),		
    			);
    			M('sanqi')->field('id,qihao1,qihao2,qihao3,sanqi,jg1,jg2,jg3,haoma1,haoma2,haoma3')->save($sldata);
    			$this->success('修改成功',U('sanqi'),1);
    	}
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



	public function liuxiao_add(){
		$this->display();
	}

    public function liuxiao_runadd(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$liuxiao=M('liuxiao');
    			$sldata=array(
    					'qihao'=>I('qihao'),
						'liuxiao'=>I('liuxiao'),
						'shaxiao'=>I('shaxiao'),
						'jg'=>I('jg'),
						'haoma'=>I('haoma'),
						'que'=>I('que'),						
    					'begtime'=>time(),
    			);
    			$liuxiao->field('qihao,liuxiao,shaxiao,jg,haoma,que,begtime')->add($sldata);
    			$this->success('添加成功',U('liuxiao'),1);
    	}
    }

 
    public function liuxiao_edit(){
		$id=I('id');
    	$liuxiao=M('liuxiao')->where(array('id'=>$id))->find();
    	$this->assign('liuxiao',$liuxiao);
    	$this->display();
    }


//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function liuxiao_infodelete(){
$id=$_POST['id'];
$liuxiao=D("Home/liuxiao");          ###实例化Data数据对象
if ($_POST['Action']=='del'){
$request=$liuxiao->where('id='.$id)->delete();
}else{
$request=$liuxiao->where(array('id'=>array('in',$id)))->delete();
}
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能该信息已经被删除<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}

}


//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function liuxiao_delete(){
$liuxiao=M('liuxiao');
$liuxiao->where('1')->delete(); 
$this->success('清理成功',U('liuxiao'),1);
}


//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上开始数据的删除

	
    public function liuxiao_runedit(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$liuxiao=M('liuxiao');
    			$sldata=array(
    					'id'=>I('id'),
    					'qihao'=>I('qihao'),
						'liuxiao'=>I('liuxiao'),
						'shaxiao'=>I('shaxiao'),
						'jg'=>I('jg'),
						'haoma'=>I('haoma'),
						'que'=>I('que'),	
    			);
    			M('liuxiao')->field('id,qihao,liuxiao,shaxiao,jg,haoma,que')->save($sldata);
    			$this->success('修改成功',U('liuxiao'),1);
    	}
    }

	
 
 
 
public function tms(){
$Daoinfo= M("tms");
$count  =$Daoinfo->count();
$Page   = new  \Common\Page($count,10);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  
$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
} 

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function tms_infodelete(){
$id=$_POST['id'];
$tms=D("Home/tms");          ###实例化Data数据对象
if ($_POST['Action']=='del'){
$request=$tms->where('id='.$id)->delete();
}else{
$request=$tms->where(array('id'=>array('in',$id)))->delete();
}
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能该信息已经被删除<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}

}

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function tms_delete(){
$tms=M('tms');
$tms->where('1')->delete(); 
$this->success('清理成功',U('tms'),1);
}

//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上开始数据的删除

public function pt(){
$Daoinfo= M("pt");
$count  =$Daoinfo->count();
$Page   = new  \Common\Page($count,20);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  
$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
} 

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function pt_infodelete(){
$id=$_POST['id'];
$pt=D("Home/pt");          ###实例化Data数据对象
if ($_POST['Action']=='del'){
$request=$pt->where('id='.$id)->delete();
}else{
$request=$pt->where(array('id'=>array('in',$id)))->delete();
}
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能该信息已经被删除<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}

}

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function pt_delete(){
$pt=M('pt');
$pt->where('1')->delete(); 
$this->success('清理成功',U('pt'),1);
}

//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上开始数据的删除

	public function pt_add(){
		$this->display();
	}

    public function pt_runadd(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$pt=M('pt');
    			$sldata=array(
    					'qihao'=>I('qihao'),
						'pt'=>I('pt'),
						'jg'=>I('jg'),
    					'begtime'=>time(),
    			);
    			$pt->field('qihao,pt,jg,begtime')->add($sldata);
    			$this->success('添加成功',U('pt'),1);
    	}
    }

    public function pt_edit(){
		$id=I('id');
    	$pt=M('pt')->where(array('id'=>$id))->find();
    	$this->assign('pt',$pt);
    	$this->display();
    }

    public function pt_runedit(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$pt=M('pt');
    			$sldata=array(
    					'id'=>I('id'),
    					'qihao'=>I('qihao'),
						'pt'=>I('pt'),
						'jg'=>I('jg'),						
    			);
    			M('pt')->field('id,qihao,pt,jg')->save($sldata);
    			$this->success('修改成功',U('pt'),1);
    	}
    }

public function pt3(){
$Daoinfo= M("pt3");
$count  =$Daoinfo->count();
$Page   = new  \Common\Page($count,20);
$show   = $Page->paging();
$parent=$Daoinfo->where('id')->order("id DESC")->limit($Page->limit)->select();  
$this->assign('list',$parent);
$this->assign('page',$show);// 赋值分页输出
$this->display();
} 

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function pt3_infodelete(){
$id=$_POST['id'];
$pt3=D("Home/pt3");          ###实例化Data数据对象
if ($_POST['Action']=='del'){
$request=$pt3->where('id='.$id)->delete();
}else{
$request=$pt3->where(array('id'=>array('in',$id)))->delete();
}
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能该信息已经被删除<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}

}

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function pt3_delete(){
$pt3=M('pt3');
$pt3->where('1')->delete(); 
$this->success('清理成功',U('pt3'),1);
}

//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上开始数据的删除

	public function pt3_add(){
		$this->display();
	}

    public function pt3_runadd(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$pt3=M('pt3');
    			$sldata=array(
    					'qihao'=>I('qihao'),
						'pt3'=>I('pt3'),
						'jg'=>I('jg'),
    					'begtime'=>time(),
    			);
    			$pt3->field('qihao,pt3,jg,begtime')->add($sldata);
    			$this->success('添加成功',U('pt3'),1);
    	}
    }

    public function pt3_edit(){
		$id=I('id');
    	$pt3=M('pt3')->where(array('id'=>$id))->find();
    	$this->assign('pt3',$pt3);
    	$this->display();
    }

    public function pt3_runedit(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$pt3=M('pt3');
    			$sldata=array(
    					'id'=>I('id'),
    					'qihao'=>I('qihao'),
						'pt3'=>I('pt3'),
						'jg'=>I('jg'),						
    			);
    			M('pt3')->field('id,qihao,pt3,jg')->save($sldata);
    			$this->success('修改成功',U('pt3'),1);
    	}
    }	

	public function tms_add(){
		$this->display();
	}

    public function tms_runadd(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$tms=M('tms');
    			$sldata=array(
    					'qihao'=>I('qihao'),
						'temashi'=>I('temashi'),
						'tema'=>I('tema'),
						'jieshi'=>I('jieshi'),
						'bose'=>I('bose'),
						'shengxiao'=>I('shengxiao'),
    					'begtime'=>time(),
    			);
    			$tms->field('qihao,temashi,tema,jieshi,bose,shengxiao,begtime')->add($sldata);
    			$this->success('添加成功',U('tms'),1);
    	}
    }

 
    public function tms_edit(){
		$id=I('id');
    	$tms=M('tms')->where(array('id'=>$id))->find();
    	$this->assign('tms',$tms);
    	$this->display();
    }

    public function tms_runedit(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$tms=M('tms');
    			$sldata=array(
    					'id'=>I('id'),
    					'qihao'=>I('qihao'),
						'temashi'=>I('temashi'),
						'tema'=>I('tema'),
						'jieshi'=>I('jieshi'),
						'bose'=>I('bose'),
						'shengxiao'=>I('shengxiao'),						
    			);
    			M('tms')->field('id,qihao,temashi,tema,jieshi,bose,shengxiao')->save($sldata);
    			$this->success('修改成功',U('tms'),1);
    	}
    }
    
	
    //特码诗广告设置
    public function tmsad(){
    	$tms_ad=M('tms_ad')->where(array('id'=>1))->find();
    	$this->assign('tms_ad',$tms_ad)->display();
    }
    
    //保存特码诗广告设置
    public function runtmsad(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$tms_ad=M('tms_ad');
    		if (!$tms_ad->autoCheckToken($_POST)){
    			$this->error('表单令牌错误',0,0);
    		}else{
    			$sl_data=array(
    					'id'=>I('id'),
						'biaoti'=>I('biaoti'),
    					'ad_1'=>I('ad_1','','htmlspecialchars'),
    					'ad_2'=>I('ad_2','','htmlspecialchars'),
    					'ad_3'=>I('ad_3','','htmlspecialchars'),
    					'ad_4'=>I('ad_4','','htmlspecialchars'),
    					'ad_5'=>I('ad_5','','htmlspecialchars'),
						'ad_6'=>I('ad_6','','htmlspecialchars'),
    			);
	    		$tms_ad->field('id,biaoti,ad_1,ad_2,ad_3,ad_4,ad_5,ad_6')->save($sl_data);
	    		$this->success('特码诗广告保存成功',U('tms_ad'),1);
    		}
    		
    	}
    }

    //特码诗广告设置
    public function bizhongad(){
    	$bizhong_ad=M('bizhong_ad')->where(array('id'=>1))->find();
    	$this->assign('bizhong_ad',$bizhong_ad)->display();
    }
    
    //保存特码诗广告设置
    public function runbizhongad(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$bizhong_ad=M('bizhong_ad');
    		if (!$bizhong_ad->autoCheckToken($_POST)){
    			$this->error('表单令牌错误',0,0);
    		}else{
    			$sl_data=array(
    					'id'=>I('id'),
						'biaoti'=>I('biaoti'),
    					'ad_1'=>I('ad_1','','htmlspecialchars'),
    			);
	    		$bizhong_ad->field('id,biaoti,ad_1')->save($sl_data);
	    		$this->success('广告保存成功',U('bizhong_ad'),1);
    		}
    		
    	}
    }	
	

}