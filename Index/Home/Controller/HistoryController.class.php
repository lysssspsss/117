<?php
namespace Home\Controller;
use Think\Controller;
class HistoryController extends Controller {
public function index(){
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
$id=$_GET[id];
$sid=$_POST[sid];
$numNameCondition=$_POST[numNameCondition];
$page=$_POST['page'];
$pageSize=$_POST['pageSize'];
$numIndex=$_POST['numIndex'];
$yearCondition=$_POST['yearCondition'];
$shortDateCondition=$_POST['shortDateCondition'];
$shortPeriodCondition=$_POST['shortPeriodCondition'];
$numCondition=$_POST['numCondition'];
$num1Condition=$_POST['num1Condition'];
$num2Condition=$_POST['num2Condition'];
$num3Condition=$_POST['num3Condition'];
$num4Condition=$_POST['num4Condition'];
$num5Condition=$_POST['num6Condition'];
$num7Condition=$_POST['num7Condition'];
$numShengXiaoCondition=$_POST['numShengXiaoCondition'];
$num1ShengXiaoCondition=$_POST['num1ShengXiaoCondition'];
$num2ShengXiaoCondition=$_POST['num2ShengXiaoCondition'];
$num3ShengXiaoCondition=$_POST['num3ShengXiaoCondition'];
$num4ShengXiaoCondition=$_POST['num4ShengXiaoCondition'];
$num5ShengXiaoCondition=$_POST['num5ShengXiaoCondition'];
$num6ShengXiaoCondition=$_POST['num6ShengXiaoCondition'];
$num7ShengXiaoCondition=$_POST['num7ShengXiaoCondition'];
$danShuangCondition=$_POST['danShuangCondition'];
$boSeCondition=$_POST['boSeCondition'];
$daXiaoCondition=$_POST['daXiaoCondition'];
$wuXingCondition=$_POST['wuXingCondition'];
$touNumCondition=$_POST['touNumCondition'];
$weiNumCondition=$_POST['weiNumCondition'];
$heShuCondition=$_POST['heShuCondition'];
$jiaYeCondition=$_POST['jiaYeCondition'];
$menShuCondition=$_POST['menShuCondition'];
$duanWeiCondition=$_POST['duanWeiCondition'];
$yinYangCondition=$_POST['yinYangCondition'];
$tianDiCondition=$_POST['tianDiCondition'];
$jiXiongCondition=$_POST['jiXiongCondition'];
$heiBaiCondition=$_POST['heiBaiCondition'];
$seXiaoCondition=$_POST['seXiaoCondition'];
$biHuaCondition=$_POST['biHuaCondition'];
$nanNvCondition=$_POST['nanNvCondition'];
if ($page==''){$page=1;}else{$page=$page;}
if ($pageSize==''){$pageSize=30;}else{$pageSize=$pageSize;}
if ($numIndex==''){$numIndex=0;}else{$numIndex=$numIndex;}


if ($id!=''){
$search="times='$id'";
}else{
$search="1=1";
}
if ($yearCondition!=''){
	$search.="and times='$yearCondition' ";
}
if ($shortDateCondition!=''){$search.="and hitimes='$shortDateCondition' "; }
if ($shortPeriodCondition!=''){$shortPeriodConditions=$shortPeriodCondition.'期';$search.="and title='$shortPeriodConditions' ";}
if ($numCondition!=''){$search.="and (tit1='$numCondition' or tit2='$numCondition' or tit3='$numCondition' or tit4='$numCondition' or tit5='$numCondition' or tit6='$numCondition' or tit7='$numCondition')"; }
if ($num1Condition!=''){$search.="and tit1='$num1Condition'"; }
if ($num2Condition!=''){$search.="and tit2='$num2Condition'"; }
if ($num3Condition!=''){$search.="and tit3='$num3Condition'"; }
if ($num4Condition!=''){$search.="and tit4='$num4Condition'"; }
if ($num5Condition!=''){$search.="and tit5='$num5Condition'"; }
if ($num6Condition!=''){$search.="and tit6='$num6Condition'"; }
if ($num7Condition!=''){$search.="and tit7='$num7Condition'"; }
if ($numShengXiaoCondition!=''){$search.="and (tit01='$numShengXiaoCondition' or tit02='$numShengXiaoCondition' or tit03='$numShengXiaoCondition' or tit04='$numShengXiaoCondition' or tit05='$numShengXiaoCondition' or tit06='$numShengXiaoCondition' or tit07='$numShengXiaoCondition')"; }
if ($num1ShengXiaoCondition!=''){$search.="and tit01='$num1ShengXiaoCondition'"; }
if ($num2ShengXiaoCondition!=''){$search.="and tit02='$num2ShengXiaoCondition'"; }
if ($num3ShengXiaoCondition!=''){$search.="and tit03='$num3ShengXiaoCondition'"; }
if ($num4ShengXiaoCondition!=''){$search.="and tit04='$num4ShengXiaoCondition'"; }
if ($num5ShengXiaoCondition!=''){$search.="and tit05='$num5ShengXiaoCondition'"; }
if ($num6ShengXiaoCondition!=''){$search.="and tit06='$num6ShengXiaoCondition'"; }
if ($num7ShengXiaoCondition!=''){$search.="and tit07='$num7ShengXiaoCondition'"; }
if ($boSeCondition!=''){$search.="and bands='$boSeCondition'"; }
if ($daXiaoCondition!='' and $daXiaoCondition=='大'){$search.="and tit7>25 "; }
if ($daXiaoCondition!='' and $daXiaoCondition=='小'){$search.="and tit7<=25 "; }
if ($danShuangCondition!='' and $danShuangCondition=='单'){$search.="and tit7 % 2=1 "; }
if ($danShuangCondition!='' and $danShuangCondition=='双'){$search.="and tit7 % 2=0 "; }
if ($wuXingCondition!=''){$search.="and tit8='$wuXingCondition'"; }
if ($touNumCondition!=''){$search.="and tit9='$touNumCondition'"; }
if ($weiNumCondition!=''){$search.="and tit10='$weiNumCondition'"; }
if ($jiaYeCondition!=''){$search.="and tit11='$jiaYeCondition'"; }
if ($menShuCondition!=''){$search.="and tit12='$menShuCondition'"; }
if ($duanWeiCondition!=''){$search.="and tit13='$duanWeiCondition'"; }
if ($yinYangCondition!=''){$search.="and tit14='$yinYangCondition'"; }
if ($tianDiCondition!=''){$search.="and tit15='$tianDiCondition'"; }
if ($jiXiongCondition!=''){$search.="and tit16='$jiXiongCondition'"; }
if ($heiBaiCondition!=''){$search.="and tit17='$heiBaiCondition'"; }
if ($seXiaoCondition!=''){$search.="and tit18='$seXiaoCondition'"; }
if ($biHuaCondition!=''){$search.="and tit19='$biHuaCondition'"; }
if ($nanNvCondition!=''){$search.="and tit20='$nanNvCondition'"; }
if ($heShuCondition!=''){$search.="and tit22='$heShuCondition'"; }

if ($id==2010){
$ordby=' begtime desc,id desc ';
}else{
$ordby=' id desc,begtime desc ';
}


$Article=D("Home/kaijiang");
$count  =$Article->where($search)->count();
$Page   = new  \Common\Page($count,180);
$show   = $Page->paging();

$list = $Article->where($search)->order($ordby)->limit($Page->limit)->select();
$this->assign('numIndex',$numIndex);
$this->assign('list',$list);
$this->assign('page',$show);// 赋值分页输出

if ($id==2002){
$this->display("2002");
}elseif ($id==1998){
$this->display("1998");
}else{
$this->display();
}

}

public function record(){
$id=I('get.id',0,'intval'); 
$sid=I('get.sid',0,'intval'); 
$dates=date("Y");
if ($id==0){
$search="times='$dates'"; 
}else{
$search="times='$id'"; 	
}
$Article=D("Home/kaijiang");
$count  =$Article->where($search)->count();
$Page   = new  \Common\Page($count,180);
$show   = $Page->paging();
$list = $Article->where($search)->order("id desc,begtime desc")->limit($Page->limit)->select();
$this->assign('numIndex',$numIndex);
$this->assign('list',$list);
$this->assign('page',$show);// 赋值分页输出
$this->display();
}
}
?>