<?php
namespace Home\Controller;
use Think\Controller;
class KjmsController extends CommonController {

/*
 * 开奖模式操作
 */
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
    		$this->success('广告设置修改成功',1,1);
    	}
    }
    
/**********************************************广告位设置***********************************************************/
    




public function _empty(){
echo "<div style='text-align:center;width:100%;padding-top:100px;float:left'><img src='".IMG_URL."404.png'></div>";
}



}