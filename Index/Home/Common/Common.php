<?php

function Cz_cig($var){
//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下读取网站配置
$Article=D("Home/config");
$confing=$Article->where('id=1')->limit(1)->select();
return($confing[0][$var]);
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上读取网站配置
}





function get_array_repeats($array,$string) {
/*
函数说明:计算$string在$array(需为数组)中重复出现的次数.
*/
$count = array_count_values($array);
foreach ($count as $key => $value) {
if ($key = $string) {
return $value;
}
}
}
###########################################自定义波段
function yx_no_band($val,$val1){
if($val1==1){
$color1="Red_bg";$color2="Blue_bg";$color3="Green_bg";$color4="hui_color";
}elseif($val1==2){
$color1="RedX";$color2="BlueX";$color3="GreenX";$color4="hui_color";
}elseif($val1==3){
$color1="Red";$color2="Blue";$color3="Green";$color4="hui_color";	
}elseif($val1==4){
$color1="Red_boll1";$color2="Blue_boll1";$color3="Green_boll1";$color4="hui_color";	
}elseif($val1==5){
$color1="redBoClass";$color2="blueBoClass";$color3="greenBoClass";$color4="hui_color";	
}elseif($val1==6){
$color1="redBall";$color2="blueBall";$color3="greenBall";$color4="defaultBall";	
}elseif($val1==7){
$color1="background:#F00";$color2="background:#00F";$color3="background:#24910e";$color4="background:#ccc";	
}elseif($val1==8){
$color1="redClass";$color2="blueClass";$color3="greenClass";$color4="defaultClass";	

}


if ($val=='01'){return $color1;}elseif($val=='02'){return $color1;}elseif($val=='03'){return $color2;}elseif($val=='04'){return $color2;}elseif($val=='05'){return $color3;}elseif($val=='06'){return $color3;}elseif($val=='07'){return $color1;}elseif($val=='08'){return $color1;}elseif($val=='09'){return $color2;}elseif($val=='10'){return $color2;}elseif($val=='11'){return $color3;}elseif($val=='12'){return $color1;}elseif($val=='13'){return $color1;}elseif($val=='14'){return $color2;}elseif($val=='15'){return $color2;}elseif($val=='16'){return $color3;}elseif($val=='17'){return $color3;}elseif($val=='18'){return $color1;}elseif($val=='19'){return $color1;}elseif($val=='20'){return $color2;}elseif($val=='21'){return $color3;}elseif($val=='22'){return $color3;}elseif($val=='23'){return $color1;}elseif($val=='24'){return $color1;}elseif($val=='25'){return $color2;}elseif($val=='26'){return $color2;}elseif($val=='27'){return $color3;}elseif($val=='28'){return $color3;}elseif($val=='29'){return $color1;}elseif($val=='30'){return $color1;}elseif($val=='31'){return $color2;}elseif($val=='32'){return $color3;}elseif($val=='33'){return $color3;}elseif($val=='34'){return $color1;}elseif($val=='35'){return $color1;}elseif($val=='36'){return $color2;}elseif($val=='37'){return $color2;}elseif($val=='38'){return $color3;}elseif($val=='39'){return $color3;}elseif($val=='40'){return $color1;}elseif($val=='41'){return $color2;}elseif($val=='42'){return $color2;}elseif($val=='43'){return $color3;}elseif($val=='44'){return $color3;}elseif($val=='45'){return $color1;}elseif($val=='46'){return $color1;}elseif($val=='47'){return $color2;}elseif($val=='48'){return $color2;}elseif($val=='49'){return $color3;}elseif($val==''){return $color4;}}

###########################################自定义波段
function yx_band_txt($val){
$var1=array(01,02,07,8,12,13,18,19,23,24,29,30,34,35,40,45,46);
$var2=array(03,04,9,10,14,15,20,25,26,31,36,37,41,42,47,48);
$var3=array(05,06,11,16,17,21,22,27,28,32,33,38,39,43,44,49);
if      (in_array($val,$var1)>0){
return "紅";
}elseif (in_array($val,$var2)>0){
return "藍";
}elseif (in_array($val,$var3)>0){
return "綠";
}
}

###########################################自定义波段
function cz_band_txt($val){
$var1=array(01,02,07,8,12,13,18,19,23,24,29,30,34,35,40,45,46);
$var2=array(03,04,9,10,14,15,20,25,26,31,36,37,41,42,47,48);
$var3=array(05,06,11,16,17,21,22,27,28,32,33,38,39,43,44,49);
if      (in_array($val,$var1)>0){
return "red";
}elseif (in_array($val,$var2)>0){
return "blue";
}elseif (in_array($val,$var3)>0){
return "green";
}
}


###########################################自定义生肖
function yx_shengxiao_class($val){
$var1=array(08,20,32,44);//鼠
$var2=array(07,19,31,43);//牛
$var3=array(06,18,30,42);//虎
$var4=array(05,17,29,41);//兔
$var5=array(04,16,28,40);//龙
$var6=array(03,15,27,39);//蛇
$var7=array(02,14,26,38);//猴
$var8=array(01,13,25,37,49);//鸡
$var9=array(12,24,36,48);//狗
$var10=array(11,23,35,47);//鸡
$var11=array(10,22,34,46);//狗
$var12=array(09,21,33,45 );//猪
if      (in_array($val,$var1)>0){
return "虎";
}elseif (in_array($val,$var2)>0){
return "兔";
}elseif (in_array($val,$var3)>0){
return "龍";
}elseif (in_array($val,$var4)>0){
return "蛇";
}elseif (in_array($val,$var5)>0){
return "馬";
}elseif (in_array($val,$var6)>0){
return "羊";
}elseif (in_array($val,$var7)>0){
return "猴";
}elseif (in_array($val,$var8)>0){
return "雞";
}elseif (in_array($val,$var9)>0){
return "狗";
}elseif (in_array($val,$var10)>0){
return "豬";
}elseif (in_array($val,$var11)>0){
return "鼠";
}elseif (in_array($val,$var12)>0){
return "牛";
}
}

#####其他自定义
function yx_Other_class($val,$val1,$val0){
$val=(int)$val;
if     ($val1=='1'){
$val2="danClass";
$val3="shuangClass";
$val4="xiaoClass";
$val5="daClass";
}elseif($val1=='2'){
$val2="单";
$val3="双";
$val4="小";
$val5="大";
}
if($val0==0){
//判断单双
if($val % 2 ==0){
return $val3;
}else{
return $val2;
}
}elseif($val0==1){
//判断大小
if($val<25){
return $val4;
}else{
return $val5;
}
}

}




function yx_Other_txt($val){
if($val=="阳"){
return "yangClass";
}elseif($val=="阴"){
return "yinClass";
}elseif($val=="天"){
return "tianClass";
}elseif($val=="地"){
return "diClass";
}elseif($val=="凶"){
return "xiongClass";
}elseif($val=="吉"){
return "jiClass";
}elseif($val=="双笔"){
return "shuangBiClass";
}elseif($val=="单笔"){
return "danBiClass";
}elseif($val=="男"){
return "nanClass";
}elseif($val=="女"){
return "nvClass";
}elseif($val=="藍肖"){
return "blueSeXiaoClass";
}elseif($val=="紅肖"){
return "redSeXiaoClass";
}elseif($val=="綠肖"){
return "greenSeXiaoClass";
}elseif($val=="黑"){
return "heiClass";
}elseif($val=="白"){
return "baiClass";
}



}



function yx_wuxing_class($val){
if($val=="金"){
return "wuxingjinClass";
}elseif($val=="木"){
return "wuxingmuClass";
}elseif($val=="水"){
return "wuxingshuiClass";
}elseif($val=="火"){
return "wuxinghuoClass";
}elseif($val=="土"){
return "wuxingtuClass";
}
}



function datetime($var){
return date("Y年m月d日",$var);
}



function cz_lhc_xiao($type=0,$value,$var1='0'){
$lhc_rgb=array(
"red_arr"=>array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"),
"green_arr"=>array("05","06","11","16","17","21","22","27","28","32","33","38","39","43","44","49"),
"blue_arr"=>array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"),
"SX"=>array(
"龍"=>array("06","18","30","42"),
"蛇"=>array("05","17","29","41"),
"蛇"=>array("04","16","28","40"),
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
'黑'=>array("兔","龍","蛇","馬","羊","猴","龙","马"),
'白'=>array("鼠","牛","虎","雞","狗","豬","鸡","猪"),
),
"YY"=>array(
'阴'=>array("鼠","龍","蛇","馬","狗","豬","龙","马"),
'阳'=>array("牛","虎","兔","羊","猴","雞","鸡","猪"),
),
"JX"=>array(
'吉'=>array("兔","龍","蛇","馬","羊","雞","鸡","马","龙"),
'凶'=>array("鼠","牛","虎","猴","狗","豬","猪"),
),
"TD"=>array(
'天'=>array("兔","馬","猴","豬","牛","龍","猪","马","龙"),
'地'=>array("蛇","羊","雞","狗","鼠","虎","鸡"),
),
"SEX"=>array(
'女'=>array("兔","蛇","羊","雞","豬","鸡","猪"),
'男'=>array("鼠","牛","虎","龍","馬","猴","狗","马","龙"),
),
"sexiao"=>array(
'紅肖'=>array("馬","兔","鼠","雞","鸡","马"),
'藍肖'=>array("蛇","虎","豬","猴","猪"),
'綠肖'=>array("羊","龍","牛","狗","龙"),
),
"bihua"=>array(
'单笔'=>array("鼠","龍","馬","蛇","雞","豬","龙","马","鸡","猪"),
'双笔'=>array("虎","猴","狗","兔","羊","牛"),
),

);



if   ($type==0){
if(in_array($value,$lhc_rgb['red_arr']) ){ 
return '紅';
}else if( in_array($value,$lhc_rgb['green_arr']) ){
return '綠';
}else if( in_array($value,$lhc_rgb['blue_arr']) ){
return '藍';
}
}elseif($type==1){
if(in_array($value,$lhc_rgb['red_arr']) ){ 
return '#FF0000';
}else if( in_array($value,$lhc_rgb['green_arr']) ){
return '#008822';
}else if( in_array($value,$lhc_rgb['blue_arr']) ){
return '#0000FF';
}	


//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取波段

}elseif($type==2){
$SX=$lhc_rgb['SX'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取生肖
}elseif($type==3){
$SX=$lhc_rgb['WH'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取生肖

}elseif($type==4){
if(in_array($value,$lhc_rgb['JQ']) ){ 
return '家禽';
}else{
return '野兽';
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取家野	
}elseif($type==5){
$nums1=substr($value,0,1);
$nums2=substr($value,1,1);
return $nums1+$nums2;
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是合数
}elseif($type==6){
if     ($value=='鼠'){
return "1";	
}elseif($value=='牛'){
return "2";
}elseif($value=='虎'){
return "3";	
}elseif($value=='兔'){
return "4";	
}elseif($value=='龍'){
return "5";	
}elseif($value=='蛇'){
return "6";	
}elseif($value=='馬'){
return "7";	
}elseif($value=='羊'){
return "8";	
}elseif($value=='猴'){
return "9";	
}elseif($value=='雞'){
return "10";	
}elseif($value=='狗'){
return "11";	
}elseif($value=='豬'){
return "12";	
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是合数
}elseif($type==7){
$nums1=substr($value,1,1);
return $nums1;
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是尾数
}elseif($type==8){
if($value<=7){
return "1";
}elseif($value<=14){
return "2";
}elseif($value<=19){
return "3";
}elseif($value<=25){
return "4";
}elseif($value<=30){
return "5";
}elseif($value<=36){
return "6";
}elseif($value<=40){
return "7";
}elseif($value<=44){
return "8";
}elseif($value<=49){
return "9";
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是9段走势
}elseif($type==9){
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
}elseif($type==10){
if($value=="金"){
return "1";
}elseif($value=="木"){
return "2";
}elseif($value=="水"){
return "3";
}elseif($value=="火"){
return "4";
}elseif($value=="土"){
return "5";
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是7段走势
}elseif($type==11){
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
}elseif($type==12){
$value=substr($value,0,1);
if($value=='0'){
return "0";
}elseif($value=='1'){
return "1";
}elseif($value=='2'){
return "2";
}elseif($value=='3'){
return "3";
}elseif($value=='4'){
return "4";
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是头走势
}elseif($type==13){
if($value=='紅'){
return "1";
}elseif($value=='綠'){
return "3";
}elseif($value=='藍'){
return "2";
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是泼段走势
}elseif($type==14){
if($var1=='紅'){
if ($value % 2 ==0){
return "2";
}else{
return "1";
}
}elseif($var1=='綠'){
if ($value % 2 ==0){
return "6";
}else{
return "5";
}
}elseif($var1=='藍'){
if ($value % 2 ==0){
return "4";
}else{
return "3";
}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是泼色单双走势
}elseif($type==15){
if($var1=='紅'){
if ($value>24){
return "2";
}else{
return "1";
}
}elseif($var1=='綠'){
if ($value>24){
return "6";
}else{
return "5";
}
}elseif($var1=='藍'){
if ($value>24){
return "4";
}else{
return "3";
}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是泼色大小走势
}elseif($type==16){


if($var1=='紅'){
if      ($value>24 and $value % 2 ==0){
return "4";
}elseif ($value<=24 and $value % 2 ==0){
return "3";
}elseif ($value>24 and $value % 2<>0){
return "2";
}elseif ($value<=24 and $value % 2<>0){
return "1";
}
}elseif($var1=='綠'){
if      ($value>24 and $value % 2 ==0){
return "12";
}elseif ($value<=24 and $value % 2 ==0){
return "11";
}elseif ($value>24 and $value % 2<>0){
return "10";
}elseif ($value<=24 and $value % 2<>0){
return "9";
}
}elseif($var1=='藍'){
if      ($value>24 and $value % 2 ==0){
return "8";
}elseif ($value<=24 and $value % 2 ==0){
return "7";
}elseif ($value>24 and $value % 2<>0){
return "6";
}elseif ($value<=24 and $value % 2<>0){
return "5";
}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是半泼大小单双走势
}elseif($type==17){

if      ($value>24 and $value % 2 ==0){
return "4";
}elseif ($value<=24 and $value % 2 ==0){
return "2";
}elseif ($value>24 and $value % 2<>0){
return "3";
}elseif ($value<=24 and $value % 2<>0){
return "1";
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是大小单双走势
}elseif($type==18){
if ($value % 2 <>0){
return "1";
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是单号个数
}elseif($type==19){
if ($value % 2 ==0){
return "1";
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是双号个数
}elseif($type==20){
$SX=$lhc_rgb['HB'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取黑白
}elseif($type==21){
$SX=$lhc_rgb['YY'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取阴阳
}elseif($type==22){
$SX=$lhc_rgb['TD'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取天地
}elseif($type==23){
$SX=$lhc_rgb['JX'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取吉凶
}elseif($type==24){
$SX=$lhc_rgb['sexiao'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取色肖
}elseif($type==25){
$SX=$lhc_rgb['bihua'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取笔画
}elseif($type==26){
$SX=$lhc_rgb['SEX'];
foreach($SX as $key=>$val){
if(in_array($value,$val) ){return $key;}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上是获取男女
}
}


function charts_tit($var){
switch ($var){
case 1:
return "号码走势";
break;
case 2:
return "合数走势";
break;
case 3:
return "生肖走势";
break;
case 4:
return "尾数走势";
break;
case 5:
return "九段走势";
break;
case 6:
return "七段走势";
break;
case 7:
return "五行走势";
break;
case 8:
return "五门走势";
break;
case 9:
return "头数走势";
break;
case 10:
return "波色走势";
break;
case 11:
return "波色单双";
break;
case 12:
return "波色大小";
break;
case 13:
return "半波大小";
break;
case 14:
return "大小单双";
break;
case 15:
return "号码总和";
break;
case 16:
return "平均数值";
break;
case 17:
return "除三走势";
break;
case 18:
return "除四走势";
break;
case 19:
return "除五走势";
break;
case 20:
return "除六走势";
break;
case 21:
return "除七走势";
break;
case 22:
return "除八走势";
break;
case 23:
return "除九走势";
break;
case 24:
return "除十走势";
break;
case 25:
return "除十一走";
break;
case 26:
return "除十二走";
break;
case 27:
return "周二走势";
break;
case 28:
return "周四走势";
break;
case 29:
return "周六走势";
break;
case 30:
return "单日走势";
break;
case 31:
return "双日走势";
break;
case 32:
return "单期号码";
break;
case 33:
return "双期号码";
break;
case 34:
return "单期尾数";
break;
case 35:
return "双期尾数";
break;
case 36:
return "单号个数";
break;
case 37:
return "双号个数";
break;
case 38:
return "最大号码";
break;
case 39:
return "最小号码";
break;
case 40:
return "极号间隔";
break;
}
}

function winnum_tit($var){
switch ($var){
case 1:
return "正一码";
break;
case 2:
return "正二码";
break;
case 3:
return "正三码";
break;
case 4:
return "正四码";
break;
case 5:
return "正五码";
break;
case 6:
return "正六码";
break;
case 7:
return "特码";
break;
}
}

function charts_line($var){
switch ($var){
case 1:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside" />
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="true"/>
<scale minimum="0" maximum="56" mode="Stacked" />
<title enabled="false"/>
</y_axis>
</axes>
';
break;
case 2:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="0" maximum="14" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="1" color="Gray" >
<label enabled="true">
<format>一合</format>
</label>
</line>
<line value="2" color="Gray" >
<label enabled="true">
<format>二合</format>
</label>
</line>
<line value="3" color="Gray" >
<label enabled="true">
<format>三合</format>
</label>
</line>
<line value="4" color="Gray" >
<label enabled="true">
<format>四合</format>
</label>
</line>
<line value="5" color="Gray" >
<label enabled="true">
<format>五合</format>
</label>
</line>
<line value="6" color="Gray" >
<label enabled="true">
<format>六合</format>
</label>
</line>
<line value="7" color="Gray" >
<label enabled="true">
<format>七合</format>
</label>
</line>
<line value="8" color="Gray" >
<label enabled="true">
<format>八合</format>
</label>
</line>
<line value="9" color="Gray" >
<label enabled="true">
<format>九合</format>
</label>
</line>
<line value="10" color="Gray" >
<label enabled="true">
<format>十合</format>
</label>
</line>
<line value="11" color="Gray" >
<label enabled="true">
<format>十一合</format>
</label>
</line>
<line value="12" color="Gray"  >
<label enabled="true">
<format>十二合</format>
</label>
</line>
<line value="13" color="Gray"  >
<label enabled="true">
<format>十三合</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 3:
return '<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside" />
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="0" maximum="14" mode="Stacked" />
<title enabled="false"/>
<axis_markers>
<lines>
<line value="1" color="Gray" >
<label enabled="true">
<format>鼠</format>
</label>
</line>
<line value="2" color="Gray" >
<label enabled="true">
<format>牛</format>
</label>
</line>
<line value="3" color="Gray" >
<label enabled="true">
<format>虎</format>
</label>
</line>
<line value="4" color="Gray" >
<label enabled="true">
<format>兔</format>
</label>
</line>
<line value="5" color="Gray" >
<label enabled="true">
<format>龍</format>
</label>
</line>
<line value="6" color="Gray" >
<label enabled="true">
<format>蛇</format>
</label>
</line>
<line value="7" color="Gray" >
<label enabled="true">
<format>馬</format>
</label>
</line>
<line value="8" color="Gray" >
<label enabled="true">
<format>羊</format>
</label>
</line>
<line value="9" color="Gray" >
<label enabled="true">
<format>猴</format>
</label>
</line>
<line value="10" color="Gray" >
<label enabled="true">
<format>雞</format>
</label>
</line>
<line value="11" color="Gray" >
<label enabled="true">
<format>狗</format>
</label>
</line>
<line value="12" color="Gray"  >
<label enabled="true">
<format>豬</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>';
break;
case 4:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="10" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>零尾</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>一尾</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>二尾</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>三尾</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>四尾</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>五尾</format>
</label>
</line>
<line value="6" color="Gray">
<label enabled="true">
<format>六尾</format>
</label>
</line>
<line value="7" color="Gray">
<label enabled="true">
<format>七尾</format>
</label>
</line>
<line value="8" color="Gray">
<label enabled="true">
<format>八尾</format>
</label>
</line>
<line value="9" color="Gray">
<label enabled="true">
<format>九尾</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 5:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="0" maximum="10" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="1" color="Gray">
<label enabled="true">
<format>一段</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>二段</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>三段</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>四段</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>五段</format>
</label>
</line>
<line value="6" color="Gray">
<label enabled="true">
<format>六段</format>
</label>
</line>
<line value="7" color="Gray">
<label enabled="true">
<format>七段</format>
</label>
</line>
<line value="8" color="Gray">
<label enabled="true">
<format>八段</format>
</label>
</line>
<line value="9" color="Gray">
<label enabled="true">
<format>九段</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 6:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="0" maximum="8" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="1" color="Gray">
<label enabled="true">
<format>一段</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>二段</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>三段</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>四段</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>五段</format>
</label>
</line>
<line value="6" color="Gray">
<label enabled="true">
<format>六段</format>
</label>
</line>
<line value="7" color="Gray">
<label enabled="true">
<format>七段</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 7:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="0" maximum="6" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="1" color="Gray">
<label enabled="true">
<format>金</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>木</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>水</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>火</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>土</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 8:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="0" maximum="6" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="1" color="Gray">
<label enabled="true">
<format>一门</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>二门</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>三门</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>四门</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>五门</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 9:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="5" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>零头</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>一头</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>二头</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>三头</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>四头</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 10:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="0" maximum="4" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="1" color="red">
<label enabled="true">
<font color="red" bold="True"/>
<format>紅波</format>
</label>
</line>
<line value="2" color="blue">
<label enabled="true">
<font color="blue" bold="True"/>
<format>藍波</format>
</label>
</line>
<line value="3" color="Green">
<label enabled="true">
<font color="Green" bold="True"/>
<format>綠波</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 11:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="0" maximum="7" mode="Stacked"/>
<title enabled="false"/>
<minor_grid enabled="false"/>
<axis_markers>
<lines>
<line value="1" color="red">
<label enabled="true">
<font color="red" bold="True"/>
<format>紅单</format>
</label>
</line>
<line value="2" color="red">
<label enabled="true">
<font color="red" bold="True"/>
<format>紅双</format>
</label>
</line>
<line value="3" color="blue">
<label enabled="true">
<font color="blue" bold="True"/>
<format>藍单</format>
</label>
</line>
<line value="4" color="blue">
<label enabled="true">
<font color="blue" bold="True"/>
<format>藍双</format>
</label>
</line>
<line value="5" color="Green">
<label enabled="true">
<font color="Green" bold="True"/>
<format>綠单</format>
</label>
</line>
<line value="6" color="Green">
<label enabled="true">
<font color="Green" bold="True"/>
<format>綠双</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 12:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="0" maximum="7" mode="Stacked"/>
<title enabled="false"/>
<minor_grid enabled="false"/>
<axis_markers>
<lines>
<line value="1" color="red">
<label enabled="true">
<font color="red" bold="True"/>
<format>紅小</format>
</label>
</line>
<line value="2" color="red">
<label enabled="true">
<font color="red" bold="True"/>
<format>紅大</format>
</label>
</line>
<line value="3" color="blue">
<label enabled="true">
<font color="blue" bold="True"/>
<format>藍小</format>
</label>
</line>
<line value="4" color="blue">
<label enabled="true">
<font color="blue" bold="True"/>
<format>藍大</format>
</label>
</line>
<line value="5" color="Green">
<label enabled="true">
<font color="Green" bold="True"/>
<format>綠小</format>
</label>
</line>
<line value="6" color="Green">
<label enabled="true">
<font color="Green" bold="True"/>
<format>綠大</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 13:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="0" maximum="13" mode="Stacked"/>
<title enabled="false"/>
<minor_grid enabled="false"/>
<axis_markers>
<lines>
<line value="1" color="red">
<label enabled="true">
<font color="red" bold="True"/>
<format>紅小单</format>
</label>
</line>
<line value="2" color="red">
<label enabled="true">
<font color="red" bold="True"/>
<format>紅大单</format>
</label>
</line>
<line value="3" color="red">
<label enabled="true">
<font color="red" bold="True"/>
<format>紅小双</format>
</label>
</line>
<line value="4" color="red">
<label enabled="true">
<font color="red" bold="True"/>
<format>紅大双</format>
</label>
</line>
<line value="5" color="blue">
<label enabled="true">
<font color="blue" bold="True"/>
<format>藍小单</format>
</label>
</line>
<line value="6" color="blue">
<label enabled="true">
<font color="blue" bold="True"/>
<format>藍大单</format>
</label>
</line>
<line value="7" color="blue">
<label enabled="true">
<font color="blue" bold="True"/>
<format>藍小双</format>
</label>
</line>
<line value="8" color="blue">
<label enabled="true">
<font color="blue" bold="True"/>
<format>藍大双</format>
</label>
</line>
<line value="9" color="Green">
<label enabled="true">
<font color="Green" bold="True"/>
<format>綠小单</format>
</label>
</line>
<line value="10" color="Green">
<label enabled="true">
<font color="Green" bold="True"/>
<format>綠大单</format>
</label>
</line>
<line value="11" color="Green">
<label enabled="true">
<font color="Green" bold="True"/>
<format>綠小双</format>
</label>
</line>
<line value="12" color="Green">
<label enabled="true">
<font color="Green" bold="True"/>
<format>綠大双</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 14:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="0" maximum="5" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="1" color="Gray">
<label enabled="true">
<format>小单</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>小双</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>大单</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>大双</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 15:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="true"/>
<scale minimum="0" maximum="370" mode="Stacked"/>
<title enabled="false"/>
</y_axis>
</axes>
';
break;
case 16:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="true"/>
<scale minimum="0" maximum="49" mode="Stacked"/>
<title enabled="false"/>
</y_axis>
</axes>
';
break;
case 17:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="2.5" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>余零</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>余一</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>余二</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 18:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="3.5" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>余零</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>余一</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>余二</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>余三</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 19:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="5" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>余零</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>余一</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>余二</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>余三</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>余四</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 20:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="6" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>余零</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>余一</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>余二</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>余三</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>余四</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>余五</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 21:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="7" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>余零</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>余一</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>余二</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>余三</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>余四</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>余五</format>
</label>
</line>
<line value="6" color="Gray">
<label enabled="true">
<format>余六</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 22:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="8" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>余零</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>余一</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>余二</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>余三</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>余四</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>余五</format>
</label>
</line>
<line value="6" color="Gray">
<label enabled="true">
<format>余六</format>
</label>
</line>
<line value="7" color="Gray">
<label enabled="true">
<format>余七</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 23:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="9" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>余零</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>余一</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>余二</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>余三</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>余四</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>余五</format>
</label>
</line>
<line value="6" color="Gray">
<label enabled="true">
<format>余六</format>
</label>
</line>
<line value="7" color="Gray">
<label enabled="true">
<format>余七</format>
</label>
</line>
<line value="8" color="Gray">
<label enabled="true">
<format>余八</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 24:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="10" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>余零</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>余一</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>余二</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>余三</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>余四</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>余五</format>
</label>
</line>
<line value="6" color="Gray">
<label enabled="true">
<format>余六</format>
</label>
</line>
<line value="7" color="Gray">
<label enabled="true">
<format>余七</format>
</label>
</line>
<line value="8" color="Gray">
<label enabled="true">
<format>余八</format>
</label>
</line>
<line value="9" color="Gray">
<label enabled="true">
<format>余九</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 25:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="11" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>余零</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>余一</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>余二</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>余三</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>余四</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>余五</format>
</label>
</line>
<line value="6" color="Gray">
<label enabled="true">
<format>余六</format>
</label>
</line>
<line value="7" color="Gray">
<label enabled="true">
<format>余七</format>
</label>
</line>
<line value="8" color="Gray">
<label enabled="true">
<format>余八</format>
</label>
</line>
<line value="9" color="Gray">
<label enabled="true">
<format>余九</format>
</label>
</line>
<line value="10" color="Gray">
<label enabled="true">
<format>余十</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 26:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="12" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>余零</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>余一</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>余二</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>余三</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>余四</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>余五</format>
</label>
</line>
<line value="6" color="Gray">
<label enabled="true">
<format>余六</format>
</label>
</line>
<line value="7" color="Gray">
<label enabled="true">
<format>余七</format>
</label>
</line>
<line value="8" color="Gray">
<label enabled="true">
<format>余八</format>
</label>
</line>
<line value="9" color="Gray">
<label enabled="true">
<format>余九</format>
</label>
</line>
<line value="10" color="Gray">
<label enabled="true">
<format>余十</format>
</label>
</line>
<line value="11" color="Gray">
<label enabled="true">
<format>余十一</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 27:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="true"/>
<scale minimum="0" maximum="56" mode="Stacked"/>
<title enabled="false"/>
</y_axis>
</axes>
';
break;
case 28:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="true"/>
<scale minimum="0" maximum="56" mode="Stacked"/>
<title enabled="false"/>
</y_axis>
</axes>
';
break;
case 29:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="true"/>
<scale minimum="0" maximum="56" mode="Stacked"/>
<title enabled="false"/>
</y_axis>
</axes>
';
break;
case 30:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="true"/>
<scale minimum="0" maximum="56" mode="Stacked"/>
<title enabled="false"/>
</y_axis>
</axes>
';
break;
case 31:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="true"/>
<scale minimum="0" maximum="56" mode="Stacked"/>
<title enabled="false"/>
</y_axis>
</axes>
';
break;
case 32:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="true"/>
<scale minimum="0" maximum="56" mode="Stacked"/>
<title enabled="false"/>
</y_axis>
</axes>
';
break;
case 33:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="true"/>
<scale minimum="0" maximum="56" mode="Stacked"/>
<title enabled="false"/>
</y_axis>
</axes>
';
break;
case 34:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="10" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>零尾</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>一尾</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>二尾</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>三尾</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>四尾</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>五尾</format>
</label>
</line>
<line value="6" color="Gray">
<label enabled="true">
<format>六尾</format>
</label>
</line>
<line value="7" color="Gray">
<label enabled="true">
<format>七尾</format>
</label>
</line>
<line value="8" color="Gray">
<label enabled="true">
<format>八尾</format>
</label>
</line>
<line value="9" color="Gray">
<label enabled="true">
<format>九尾</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 35:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="-1" maximum="10" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="0" color="Gray">
<label enabled="true">
<format>零尾</format>
</label>
</line>
<line value="1" color="Gray">
<label enabled="true">
<format>一尾</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>二尾</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>三尾</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>四尾</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>五尾</format>
</label>
</line>
<line value="6" color="Gray">
<label enabled="true">
<format>六尾</format>
</label>
</line>
<line value="7" color="Gray">
<label enabled="true">
<format>七尾</format>
</label>
</line>
<line value="8" color="Gray">
<label enabled="true">
<format>八尾</format>
</label>
</line>
<line value="9" color="Gray">
<label enabled="true">
<format>九尾</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 36:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="0" maximum="8" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="1" color="Gray">
<label enabled="true">
<format>一</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>二</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>三</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>四</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>五</format>
</label>
</line>
<line value="6" color="Gray">
<label enabled="true">
<format>六</format>
</label>
</line>
<line value="7" color="Gray">
<label enabled="true">
<format>七</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 37:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="false"/>
<scale minimum="0" maximum="8" mode="Stacked"/>
<title enabled="false"/>
<axis_markers>
<lines>
<line value="1" color="Gray">
<label enabled="true">
<format>一</format>
</label>
</line>
<line value="2" color="Gray">
<label enabled="true">
<format>二</format>
</label>
</line>
<line value="3" color="Gray">
<label enabled="true">
<format>三</format>
</label>
</line>
<line value="4" color="Gray">
<label enabled="true">
<format>四</format>
</label>
</line>
<line value="5" color="Gray">
<label enabled="true">
<format>五</format>
</label>
</line>
<line value="6" color="Gray">
<label enabled="true">
<format>六</format>
</label>
</line>
<line value="7" color="Gray">
<label enabled="true">
<format>七</format>
</label>
</line>
</lines>
</axis_markers>
</y_axis>
</axes>
';
break;
case 38:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="true"/>
<scale minimum="0" maximum="56" mode="Stacked"/>
<title enabled="false"/>
</y_axis>
</axes>
';
break;
case 39:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="true"/>
<scale minimum="0" maximum="56" mode="Stacked"/>
<title enabled="false"/>
</y_axis>
</axes>
';
break;
case 40:
return '
<axes>
<x_axis tickmarks_placement="Center">
<title enabled="false"/>
<zoom enabled="true" start="200" visible_range="25" scroll_bar_position="Outside"/>
<labels display_mode="Stager"/>
</x_axis>
<y_axis>
<labels enabled="true"/>
<scale minimum="0" maximum="56" mode="Stacked"/>
<title enabled="false"/>
</y_axis>
</axes>
';
break;
}
}

function charts_yx($id,$num,$winxiao,$wuxing){
if    ($id=='1'){
return $num;	
}elseif($id=='2'){
return cz_lhc_xiao(5,$num);	
}elseif($id=='3'){
return cz_lhc_xiao(6,$winxiao);	
}elseif($id=='4'){
return cz_lhc_xiao(7,$num);	
}elseif($id=='5'){
return cz_lhc_xiao(8,$num);	
}elseif($id=='6'){
return cz_lhc_xiao(9,$num);	
}elseif($id=='7'){
return cz_lhc_xiao(10,$wuxing);	
}elseif($id=='8'){
return cz_lhc_xiao(11,$num);	
}elseif($id=='9'){
return cz_lhc_xiao(12,$num);	
}elseif($id=='10'){
$num=cz_lhc_xiao(0,$num);
return cz_lhc_xiao(13,$num);
}elseif($id=='11'){
$nums=cz_lhc_xiao(0,$num);
return cz_lhc_xiao(14,$num,$nums);
}elseif($id=='12'){
$nums=cz_lhc_xiao(0,$num);
return cz_lhc_xiao(15,$num,$nums);
}elseif($id=='13'){
$nums=cz_lhc_xiao(0,$num);
return cz_lhc_xiao(16,$num,$nums);
}elseif($id=='14'){
return cz_lhc_xiao(17,$num);
}elseif($id=='15'){
return cz_lhc_xiao($num);
}

}
?>