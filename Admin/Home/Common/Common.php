<?php

function begtime(){
return strtotime(date("Y-m-d G:i:s"));
}

function datetime($var){
return date("Y-m-d G:i:s",$var);
}


function dingdanhao(){
$dingdanhao = date("Y-m-dH-i-s");
$dingdanhao = str_replace("-","",$dingdanhao);
$dingdanhao .= rand(10000,90000);	
return $dingdanhao;
}

//使用说明 Yo_Directory_Title(数据表,1显示下级 0 不显示,.编号)
function czdirectory($table,$val=0,$var1=0,$config=0){
$len=strlen($var1);
$Dao = M();
if ($var1==''){
return "";
exit();	
}
$list  = $Dao->query("select * from cz_".$table."_class where NumberID=".$var1);
if ($val==0){
return $list[0][title];
}
}

//使用说明 Yo_Directory_Title(数据表,1显示下级 0 不显示,.编号)
function czcid($table,$val=0,$var1=0,$config=0){
$len=strlen($var1);
$Dao = M();
if ($var1==''){
return "";
exit();	
}
$list  = $Dao->query("select * from cz_".$table."_category where id=".$var1);
if ($val==0){
return $list[0][title];
}
}

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下是更新数据操作方法
function Cupdate($id){
$Dao = M();
$num = $Dao->execute("update cz_article set title='12345@xxx.com' where id=".$id); 
}


/*===============================说明开始=========================*/
/*table 代表哪个数据表 way 代表的是方式 0 是默认从低到高 1 是从高到低排序
/*Point 代表移动方式   up上移 down 下移
/*id    代表数据本身Id
/*where 代表移动数据的方向  从低到高 或者从高到低
/*===============================说明结束=========================*/
function getsorting($table,$Point='up',$id,$where=0,$search="1=1",$numberid="0001"){
$Dao  = M();
if ($search=='0'){
$search=" LagID=0";
}elseif ($search=='1'){
$search=" LagID=1 and Root4=".substr($numberid,0,4);
}elseif ($search=='2'){
$search=" LagID=1 and Root4=".substr($numberid,0,8);
}elseif ($search=='3'){
$search=" LagID=1 and Root4=".substr($numberid,0,12);
}
if      ($Point=='up'   && $where==0){
$list = $Dao->query("select * from `".$table."`  where sorting>$id and $search order by sorting asc limit 1");
}elseif ($Point=='up'   && $where==1){
$list = $Dao->query("select * from `".$table."`  where sorting<$id and $search order by sorting desc limit 1");
}elseif ($Point=='down' && $where==0){
$list = $Dao->query("select * from `".$table."`  where sorting<$id and $search order by sorting desc limit 1");
}elseif ($Point=='down' && $where==1){
$list = $Dao->query("select * from `".$table."`  where sorting>$id and $search order by sorting asc limit 1");
}

return $list[0][sorting];
}


function cz_sorting($table,$way=0,$Point,$id,$sid,$config){
	
/*===============================说明开始=========================*/
/*table 代表哪个数据表 way 代表的是方式 0 是默认从低到高 1 是从高到低排序
/*Point 代表移动方式   1 置顶 2 上移 3 下移 4 置底
/*id    代表数据本身Id  sid 代表移动到哪个Id
/*===============================说明结束=========================*/
//-----------------------------------------------------------进行数据验证 Start
if     (($Point==1 || $Point==2 )and ($sid=='' || $sid==$id)){
echo "<script>alert('操作失败,已经到顶部了！');history.go(-1);</script>";
exit();		
}elseif(($Point==3 || $Point==4 )and ($sid=='' || $sid==$id)){
echo "<script>alert('操作失败,已经到底部了！');history.go(-1);</script>";
exit();		
}
if ($way==1){
//===========================================================排序条件 Start
if     ($Point==1){//==============置顶
$search="where sorting<='$sid'  and sorting>='$id' order by sorting asc";
}elseif($Point==2){//==============上移
$search="where sorting>='$id'  and sorting<='$sid' order by sorting desc";
}elseif($Point==3){//==============下移
$search="where sorting<='$id'  and sorting>='$sid' order by sorting desc";
}elseif($Point==4){//==============置底
$search="where sorting<='$id'  and sorting>='$sid' order by sorting desc";
}
}elseif ($way==0){
if     ($Point==1){//==============置顶
$search="where sorting>='$sid' and sorting<='$id'  order by sorting desc";
}elseif($Point==2){//==============上移
$search="where sorting<='$id'  and sorting>='$sid' order by sorting asc";
}elseif($Point==3){//==============下移
$search="where sorting>='$id'  and sorting<='$sid' order by sorting asc";
}elseif($Point==4){//==============置底
$search="where sorting>='$id'  and sorting<='$sid' order by sorting asc";
}	
}
//============================================================排序条件 End
//===================================================================================按条件搜索并组合成数组 

$Arrsorting=array();      ###定义数组
$Arrid=array();           ###定义数
$Dao  = M();
$total= count($Dao->query("select * from  $table $search"));//获取数量
$list = $Dao->query("select * from $table $search");
foreach ($list as $val){
$Arrsorting[]=$val['sorting']; ###组合数组
$Arrid[]=$val['id'];           ###组合数组
}
//===================================================================================按条件搜索并组合成数组   The End
//===================================================================================进行数据的整合及更新 
$Arrsorting=array_reverse($Arrsorting);//让数组倒序
foreach($Arrid as $vale){              //循环数组准备更新
$sorting=$Arrsorting[$total];
if ($sorting==''){$sorting=$Arrsorting[0];}//把本身的Id等于置底的排序
//echo $vale.'==='.$sorting."<br>";
$Dao = M();
$Dao->execute("update $table set sorting=$sorting where id=".$vale); 
$total--;	
}
//===================================================================================进行数据的整合及更新  The End


}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是更新数据操作方法


function cz_class_sorting($table,$way=0,$Point,$id,$sid,$numberid,$config){
$len=strlen($numberid);
if ($numberid==''){
$search="where LagID=0 ";
}elseif($len==4 and $numberid!=''){
$search="where LagID=1 and Root1='$numberid'";
}elseif($len==8 and $numberid!=''){
$search="where LagID=2 and Root2='$numberid'";
}elseif($len==12 and $numberid!=''){
$search="where LagID=3 and Root3='$numberid'";
}
//-----------------------------------------------------------进行数据验证 Start
if     (($Point==1 || $Point==2 )and ($sid=='' || $sid==$id)){
echo "<script>alert('操作失败,已经到顶部了！');history.go(-1);</script>";
exit();		
}elseif(($Point==3 || $Point==4 )and ($sid=='' || $sid==$id)){
echo "<script>alert('操作失败,已经到底部了！');history.go(-1);</script>";
exit();		
}
if ($way==1){
//===========================================================排序条件 Start
if     ($Point==1){//==============置顶
$searchs=$search." and sorting<='$sid'  and sorting>='$id' order by sorting asc";
}elseif($Point==2){//==============上移
$searchs=$search." and sorting>='$id'  and sorting<='$sid' order by sorting desc";
}elseif($Point==3){//==============下移
$searchs=$search." and sorting<='$id'  and sorting>='$sid' order by sorting desc";
}elseif($Point==4){//==============置底
$searchs=$search." and sorting<='$id'  and sorting>='$sid' order by sorting desc";
}
}elseif ($way==0){
if     ($Point==1){//==============置顶
$searchs=$search." and sorting>='$sid' and sorting<='$id'  order by sorting desc";
}elseif($Point==2){//==============上移
$searchs=$search." and sorting<='$id'  and sorting>='$sid' order by sorting asc";
}elseif($Point==3){//==============下移
$searchs=$search." and sorting>='$id'  and sorting<='$sid' order by sorting asc";
}elseif($Point==4){//==============置底
$searchs=$search." and sorting>='$id'  and sorting<='$sid' order by sorting asc";
}		
}
$Arrsorting=array();
$Arrid=array();
$Dao  = M();
$total= count($Dao->query("select * from  $table $searchs"));
$list = $Dao->query("select * from $table $searchs");
foreach ($list as $val){
$Arrsorting[]=$val['sorting'];
$Arrid[]=$val['id'];
}
$Arrsorting=array_reverse($Arrsorting);
foreach($Arrid as $vale){
$sorting=$Arrsorting[$total];
if ($sorting==''){$sorting=$Arrsorting[0];}
$Dao = M();
$Dao->execute("update $table set sorting=$sorting where id=".$vale); 
$total--;	
}
//===================================================================================进行数据的整合及更新  The End
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是更新数据操作方法



function cz_lhc_xiao($type=0,$value){

$lhc_rgb=array(
"red_arr"=>array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"),
"green_arr"=>array("05","06","11","16","17","21","22","27","28","32","33","38","39","43","44","49"),
"blue_arr"=>array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"),
"SX"=>array(
"龍"=>array("06","18","30","42"),
"蛇"=>array("05","17","29","41"),
"馬"=>array("04","16","28","40"),
"羊"=>array("03","15","27","39"),
"猴"=>array("02","14","26","38"),
"雞"=>array("01","13","25","37","49"),
"狗"=>array("12","24","36","48"),
"豬"=>array("11","23","35","47"),
"鼠"=>array("10","22","34","46"),
"牛"=>array("09","21","33","45"),
"虎"=>array("08","20","32","44"),
"兔"=>array("07","19","31","43")
),

"JQ"=>array("牛","馬","羊","雞","狗","豬","猪","鸡","马"),//家禽
"WH"=>array(
'金'=>array("03", "04", "17", "18", "25", "26", "33", "34", "47", "48"),
'木'=>array("07", "08", "15", "16", "29", "30", "37", "38", "45", "46"),
"水"=>array("05", "06", "13", "14", "21", "22", "35", "36", "43", "44"),
"火"=>array("01", "02", "09", "10", "23", "24", "31", "32", "39"),
"土"=>array("11", "12", "19", "20", "27", "28", "41", "42", "49"),
),
"HB"=>array(
'黑'=>array("兔","龍","蛇","馬","羊","猴"),
'白'=>array("鼠","牛","虎","雞","狗","豬"),
),
"YY"=>array(
'阴'=>array("鼠","龍","蛇","馬","狗","豬"),
'阳'=>array("牛","虎","兔","羊","猴","雞"),
),
"JX"=>array(
'吉'=>array("兔","龍","蛇","馬","羊","雞"),
'凶'=>array("鼠","牛","虎","猴","狗","豬"),
),
"TD"=>array(
'天'=>array("兔","馬","猴","豬","牛","龍"),
'地'=>array("蛇","羊","雞","狗","鼠","虎"),
),
"SEX"=>array(
'女'=>array("兔","蛇","羊","雞","豬"),
'男'=>array("鼠","牛","虎","龍","馬","猴","狗"),
),
"sexiao"=>array(
'紅肖'=>array("馬","兔","鼠","雞"),
'藍肖'=>array("蛇","虎","豬","猴"),
'綠肖'=>array("羊","龍","牛","狗"),
),
"bihua"=>array(
'单笔'=>array("鼠","龍","馬","蛇","雞","豬"),
'双笔'=>array("虎","猴","狗","兔","羊","牛"),
),

);


if ($type==0){
if(in_array($value,$lhc_rgb['red_arr']) ){ 
return '紅';
}else if( in_array($value,$lhc_rgb['green_arr']) ){
return '綠';
}else if( in_array($value,$lhc_rgb['blue_arr']) ){
return '藍';
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取波段

}elseif($type==1){
$SX=$lhc_rgb['SX'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取生肖
}elseif($type==2){
$SX=$lhc_rgb['WH'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取生肖

}elseif($type==3){
if(in_array($value,$lhc_rgb['JQ']) ){ 
return '家禽';
}else{
return '野兽';
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取家野	
}elseif($type==4){
if($value<=9){
return "1";
}elseif($value<=18){
return "2";
}elseif($value<=27){
return "3";
}elseif($value<=37){
return "4";
}elseif($value<=49){
return "5";
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是五门走势
}elseif($type==5){
if($value<=7){
return "1";
}elseif($value<=14){
return "2";
}elseif($value<=21){
return "3";
}elseif($value<=28){
return "4";
}elseif($value<=35){
return "5";
}elseif($value<=42){
return "6";
}elseif($value<=49){
return "7";
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是7段走势
}elseif($type==6){
$SX=$lhc_rgb['HB'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取黑白
}elseif($type==7){
$SX=$lhc_rgb['YY'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取阴阳
}elseif($type==8){
$SX=$lhc_rgb['TD'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取天地
}elseif($type==9){
$SX=$lhc_rgb['JX'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取吉凶
}elseif($type==10){
$SX=$lhc_rgb['sexiao'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取色肖
}elseif($type==11){
$SX=$lhc_rgb['bihua'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取笔画
}elseif($type==12){
$SX=$lhc_rgb['SEX'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取男女
}

}

?>