<?php
namespace Home\Controller;
use Think\Controller;
class ChartsController extends Controller {
public function index(){
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
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
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
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
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
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
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
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
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
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
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
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
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
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
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
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
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
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

public function charts_go(){
    	$plug_ad_29=M('plug_ad')->where(array('plug_ad_adtypeid'=>29,'plug_ad_open'=>1))->order("plug_ad_order asc")->select();
    	$this->assign('plug_ad_29',$plug_ad_29);		
    	/*
    	 * 广告横幅
    	 */		
$Article=D("Home/kaijiang");
$id=I('get.id',0,'intval');
$qinum=I('get.qinum',0,'intval');
$winnum=I('get.winnum',0,'intval');
$series_type=I('get.series_type','','strip_tags');




if ($qinum==''){$qinum=25;}
if ($winnum==''){$winnum="7";}
if ($series_type==''){$series_type="line";}

//if ($series_type=='line'){
//$count=$Article->where("locks1=1")->order("id desc")->limit(1)->count();
//}elseif ($series_type=='spline'){
//$count=$Article->where("locks2=1")->order("id desc")->limit(1)->count();
//}else{
//$count=$Article->where("locks3=1")->order("id desc")->limit(1)->count();
//}



$len=strlen($qinum);
if ($len<='3'){
if     ($id=='27'){
$search=" next_tit4='二'";	
}elseif($id=='28'){
$search=" next_tit4='四'";
}elseif($id=='29'){
$search=" next_tit4='六'";	
}elseif($id=='30'){
$search=" next_tit5 % 2<>0";	
}elseif($id=='31'){
$search=" next_tit5 % 2=0";	
}elseif($id=='32' || $id=='34'){
$search=" riqi % 2<>0";	
}elseif($id=='33' || $id=='35'){
$search=" riqi % 2=0";	
}

$list = $Article->field(array('tit1','tit01','tit2','tit02','tit3','tit03','tit4','tit04','tit5','tit05','tit6','tit06','tit7','tit07','title','times','begtime'))->where("$search")->order("id desc")->limit(0,$qinum)->select();
}elseif($len=='4'){
if     ($id=='27'){
$search="and next_tit4='二'";	
}elseif($id=='28'){
$search="and next_tit4='四'";
}elseif($id=='29'){
$search="and next_tit4='六'";	
}elseif($id=='30'){
$search="and next_tit5 % 2=0";	
}elseif($id=='31'){
$search="and next_tit5 % 2<>0";	
}elseif($id=='32' || $id=='34'){
$search="and riqi % 2=0";	
}elseif($id=='33' || $id=='35'){
$search="and riqi % 2<>0";	
}
$list = $Article->field(array('tit1','tit01','tit2','tit02','tit3','tit03','tit4','tit04','tit5','tit05','tit6','tit06','tit7','tit07','title','times','begtime'))->where("times='$qinum' $search")->order("id desc")->limit(0,160)->select();	
}
$title=charts_tit($id);
$winnum_tit=winnum_tit($winnum);
$this->charts_list($title,$id,$qinum,$winnum,$winnum_tit,$series_type,$list);

//if ($series_type=='line'){
//$Article->locks1=1;
//$Article->where("locks1=0")->order("id desc")->limit(1)->save();
//}elseif ($series_type=='spline'){
//$Article->locks2=1;
//$Article->where("locks1=0")->order("id desc")->limit(1)->save();
//}else{
//$Article->locks3=1;
//$Article->where("locks1=0")->order("id desc")->limit(1)->save();
//}


$this->assign('id',$id);
$this->display();
}


public function writefile($file,$source){
if($fp=fopen($file,'w')){
$filesource=fwrite($fp,$source);
fclose($fp);
return $filesource;
}
else
return false;
}

public function charts_list($title,$id,$qinum,$winnum,$winnum_tit,$series_type,$list){
$xml ='<?xml version="1.0" encoding="utf-8"?>';
$xml.='<anychart>';
$xml.='<settings>
<chart_background>
<corners all="5" type="square"/>
</chart_background>
<context_menu version_info="false" about_anychart="false">
<save_as_image_item_text>另存为PNG图像</save_as_image_item_text>
<print_chart_item_text>打印</print_chart_item_text>
</context_menu>
<animation enabled="True"/>
</settings>';
$xml.='<charts>';
$xml.='<chart plot_type="Bubble">';
$xml.='<chart_settings>';
$xml.='<title enabled="True" ><text>  '.$winnum_tit.'    '.$title.'分析图    www.117kj.com</text></title>';
$xml.=charts_line($id);
$xml.='</chart_settings>';
$xml.='<data_plot_settings default_series_type="'.$series_type.'" >
<line_series point_padding="0.2" group_padding="1">
<label_settings enabled="true">
<background enabled="false"/>
<font color="Rgb(45,45,45)" bold="true" size="15">
<effects enabled="true">
<glow enabled="true" color="White" opacity="3" blur_x="1.5" blur_y="1.5" strength="3"/>
</effects>
</font>
<format>{%wintxt}{enabled:False}</format>
</label_settings>
<tooltip_settings enabled="true">
<font render_as_html="True"/>
<format><![CDATA[<font color="#000000" size="16"><b>
期数:{%Name}{enabled:False}
平码:{%winnum}
特码:{%addnum}{enabled:False}
开奖日期:{%windate}
</b></font>]]></format>
<background>
<border type="Solid" color="DarkColor(%Color)"/>
</background>
<font color="DarkColor(%Color)" size="15"/>
</tooltip_settings>
<marker_settings enabled="true"/>
<line_style>
<line thickness="2"/>
</line_style>
</line_series>
</data_plot_settings>';
$xml.='<data>';
$xml.='<series name="lottery">';
$center = '';
foreach (array_reverse($list) as $vo) {
if      ($winnum=='1'){
$wintxt=$vo[tit1];
$winxiao=$vo[tit01];
}elseif($winnum=='2'){
$wintxt=$vo[tit2];
$winxiao=$vo[tit02];
}elseif($winnum=='3'){
$wintxt=$vo[tit3];
$winxiao=$vo[tit03];
}elseif($winnum=='4'){
$wintxt=$vo[tit4];
$winxiao=$vo[tit04];
}elseif($winnum=='5'){
$wintxt=$vo[tit5];
$winxiao=$vo[tit05];
}elseif($winnum=='6'){
$wintxt=$vo[tit6];
$winxiao=$vo[tit06];
}elseif($winnum=='7'){
$wintxt=$vo[tit7];
$winxiao=$vo[tit07];
}

if     ($id=='3'){
$yshow=$winxiao;
}elseif($id=='7'){
$yshow=cz_lhc_xiao(3,$wintxt);
}else{
$yshow=$wintxt;
}

if     ($id=='15'){
$yx=$vo[tit1]+$vo[tit2]+$vo[tit3]+$vo[tit4]+$vo[tit5]+$vo[tit6]+$vo[tit7];
}elseif($id=='16'){
$yx=($vo[tit1]+$vo[tit2]+$vo[tit3]+$vo[tit4]+$vo[tit5]+$vo[tit6]+$vo[tit7])/7;
}elseif($id=='17'){
$yx=fmod($wintxt,3);
}elseif($id=='18'){
$yx=fmod($wintxt,4);
}elseif($id=='19'){
$yx=fmod($wintxt,5);
}elseif($id=='20'){
$yx=fmod($wintxt,6);
}elseif($id=='21'){
$yx=fmod($wintxt,7);
}elseif($id=='22'){
$yx=fmod($wintxt,8);
}elseif($id=='23'){
$yx=fmod($wintxt,9);
}elseif($id=='24'){
$yx=fmod($wintxt,10);
}elseif($id=='25'){
$yx=fmod($wintxt,11);
}elseif($id=='26'){
$yx=fmod($wintxt,12);
}elseif($id=='27' || $id=='28' || $id=='29' || $id=='30' || $id=='31' || $id=='32' || $id=='33'){
$yx=$wintxt;
}elseif($id=='34'){
$yx=cz_lhc_xiao(7,$wintxt);
}elseif($id=='35'){
$yx=cz_lhc_xiao(7,$wintxt);
}elseif($id=='36'){
$yx=cz_lhc_xiao(18,$vo[tit1])+cz_lhc_xiao(18,$vo[tit2])+cz_lhc_xiao(18,$vo[tit3])+cz_lhc_xiao(18,$vo[tit4])+cz_lhc_xiao(18,$vo[tit5])+cz_lhc_xiao(18,$vo[tit6])+cz_lhc_xiao(18,$vo[tit7]);
}elseif($id=='37'){
$yx=cz_lhc_xiao(19,$vo[tit1])+cz_lhc_xiao(19,$vo[tit2])+cz_lhc_xiao(19,$vo[tit3])+cz_lhc_xiao(19,$vo[tit4])+cz_lhc_xiao(19,$vo[tit5])+cz_lhc_xiao(19,$vo[tit6])+cz_lhc_xiao(19,$vo[tit7]);
}elseif($id=='38'){
$a=array($vo[tit1],$vo[tit2],$vo[tit3],$vo[tit4],$vo[tit5],$vo[tit6],$vo[tit7]);
$pos= array_search(max($a), $a);
$yx=$a[$pos];
$yshow=$yx;
}elseif($id=='39'){
$a=array($vo[tit1],$vo[tit2],$vo[tit3],$vo[tit4],$vo[tit5],$vo[tit6],$vo[tit7]);
$pos=array_search(min($a), $a);
$yx=$a[$pos];
$yshow=$yx;
}elseif($id=='40'){
$a=array($vo[tit1],$vo[tit2],$vo[tit3],$vo[tit4],$vo[tit5],$vo[tit6],$vo[tit7]);
$maxs= array_search(max($a), $a);
$mins=array_search(min($a), $a);
$yx=$a[$maxs]-$a[$mins];
$yshow=$yx;
}else{
$yx=charts_yx($id,$wintxt,$winxiao,cz_lhc_xiao(3,$wintxt));
}
$center .= '
<point name="'.$vo[times].$vo[title].'" y="'.$yx.'" >
<attributes>
<attribute name="winnum">
<![CDATA[<font color="'.cz_lhc_xiao(1,$vo[tit1]).'">'.$vo[tit1].$vo[tit01].'</font>]]>-
<![CDATA[<font color="'.cz_lhc_xiao(1,$vo[tit2]).'">'.$vo[tit2].$vo[tit02].'</font>]]>-
<![CDATA[<font color="'.cz_lhc_xiao(1,$vo[tit3]).'">'.$vo[tit3].$vo[tit03].'</font>]]>-
<![CDATA[<font color="'.cz_lhc_xiao(1,$vo[tit4]).'">'.$vo[tit4].$vo[tit04].'</font>]]>-
<![CDATA[<font color="'.cz_lhc_xiao(1,$vo[tit5]).'">'.$vo[tit5].$vo[tit05].'</font>]]>-
<![CDATA[<font color="'.cz_lhc_xiao(1,$vo[tit6]).'">'.$vo[tit6].$vo[tit06].'</font>]]>
</attribute>
<attribute name="wintxt">'.$yshow.'</attribute>
<attribute name="addnum"><![CDATA[<font color="'.cz_lhc_xiao(1,$vo[tit7]).'">'.$vo[tit7].$vo[tit07]."/".cz_lhc_xiao(3,$vo[tit7]).'</font>]]></attribute>
<attribute name="windate">'.datetime($vo['begtime']).'</attribute>
</attributes>
</point>
';
}
$xml .=$center;
$xml.='</series>';
$xml.='</data>';
$xml.='</chart>';
$xml.='</charts>';
$xml.='</anychart>';
$this->writefile($_SERVER['DOCUMENT_ROOT']."/vbsxml/xml_".$id."_".$winnum."_".$qinum."_".$series_type.".xml",$xml);

}





}?>
