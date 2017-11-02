<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN" dir="ltr">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title>紅綠藍三色统计走势图</title>
<link href="<?php echo (CSS_URL); ?>main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (CSS_URL); ?>self.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>view.css"/>
<!--[if lt IE 9]><script src="<?php echo (JS_URL); ?>html5.js" type="text/javascript"></script><![endif]-->
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo (JS_URL); ?>superslide.js" type="text/javascript"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<link href="<?php echo (CSS_URL); ?>ak7_cc.css" rel="stylesheet" type="text/css" />
<div id="top">
	<div class="top clearfix">
    	<div class="top-l" id="nowDate201707081607"></div>
        <div class="top-r">
			<!--AD-开始-->
			<?php if(is_array($plug_ad_29)): foreach($plug_ad_29 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="1000" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--AD-结束-->		
		</div>
    </div>
</div>
<script>
function getNowDate201707081607() {
 var date = new Date();
 var sign1 = "-";
 var sign2 = ":";
 var year = date.getFullYear() // 年
 var month = date.getMonth() + 1; // 月
 var day  = date.getDate(); // 日
 var hour = date.getHours(); // 时
 var minutes = date.getMinutes(); // 分
 var seconds = date.getSeconds() //秒
 var weekArr = [ '星期天', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'];
 var week = weekArr[date.getDay()];
 // 给一位数数据前面加 “0”
 if (month >= 1 && month <= 9) {
  month = "0" + month;
 }
 if (day >= 0 && day <= 9) {
  day = "0" + day;
 }
 if (hour >= 0 && hour <= 9) {
  hour = "0" + hour;
 }
 if (minutes >= 0 && minutes <= 9) {
  minutes = "0" + minutes;
 }
 if (seconds >= 0 && seconds <= 9) {
  seconds = "0" + seconds;
 }
 var currentdate = year + sign1 + month + sign1 + day + " " + hour + sign2 + minutes + sign2 + seconds + " " + week;
 $("#nowDate201707081607").html("今天是："+currentdate);
}
getNowDate201707081607();
window.setInterval("getNowDate201707081607()",1000);
</script>



<?php
$dates=date("Y"); ?>


<div class="logo-bar">
  <div class="logo"><a href="/"></a></div>
    <div class="logo-wap"><a href="<?=Cz_cig('site_wap')?>index.php"></a></div>
    <div class="top-search">
<style>
.top-search td { margin: 0; padding: 0; font-size: 13px;}
.top-search td { vertical-align: middle;}
.top-search td img { vertical-align: middle;}
.top-search input[type="text"] { float: left; width: 240px; height: 26px; line-height: 26px; margin-left: 10px; margin-right: 10px; padding: 0 5px; border: solid 1px #aaa; background: #fff;}
.top-search input[type="radio"] { margin-right: 5px; margin-left: 10px;}
.top-search input[type="submit"] {
  width: 75px;
  height: 28px;
  line-height: 28px;
  cursor: pointer;
  outline: none;
  display: inline-block;
  text-align: center;
  color: #fff;
  border: none;
  background-color: #da2f33;
  font-size: 15px;
  font-family: "Microsoft YaHei";
}
.top-search input[type="submit"]:hover { background: #c40106;}
</style>
<!--百度搜索代码start-->

<!--百度搜索代码end-->    
    </div>
</div>

<div id="nav">
	<div class="nav-nav">
    	<ul class="clearfix">
        	<li><a class="index_nav nav_li" href="/">网站首页</a></li>
        	<li><a class="History_nav nav_li" href="<?php echo U('Home/History');?>?id=<?=$dates?>">开奖记录</a></li>			
        	<li><a class="Article_nav nav_li" href="/Article">资料大全</a></li>
        	<li><a class="Kjzb_nav nav_li" href="<?php echo U('Home/Kjzb');?>">开奖直播</a></li>
        	<li><a class="Table_nav nav_li" href="<?php echo U('Home/Table/table1');?>">统计图表</a></li>
        	<li><a class="charts_go_nav nav_li" href="<?php echo U('Home/Charts');?>/charts_go.html?id=1">动态走势</a></li>
			<li><a class="Charts_nav nav_li" href="<?php echo U('Home/Charts/index');?>">图表走势</a></li>
        	<li><a class="Tuku_nav nav_li" href="<?php echo U('Home/Tuku');?>">六合图库</a></li>
        	<li><a class="Pic_nav nav_li" href="<?php echo U('Home/Pic');?>">性感美女</a></li>
        </ul>
    </div>
</div>

<div class="hot-bar">
	<dl>
    	<dt>热门图纸：</dt>
        <dd><a target="_blank" href="/Tuku/4790.html">跑狗图</a></dd>
        <dd><a target="_blank" href="/Tuku/4776.html">香港挂牌</a></dd>
        <dd><a target="_blank" href="/Tuku/4785.html">管家婆</a></dd>
        <dd><a target="_blank" href="/Tuku/5365.html">马经图</a></dd>
        <dd><a target="_blank" href="/Tuku/4980.html">苹果报</a></dd>
        <dd><a target="_blank" href="/Tuku/4766.html">藏宝图</a></dd>
        <dd><a target="_blank" href="/Tuku/4796.html">白小姐</a></dd>
        <dd><a target="_blank" href="/Tuku/4834.html">曾道人</a></dd>
        <dd><a target="_blank" href="/Tuku/4810.html">黄大仙</a></dd>
    </dl>
	<dl>
    	<dt>统计图表：</dt>  
        <dd><a href="<?php echo U('Home/Table/table1');?>">生肖统计</a></dd>
        <dd><a href="<?php echo U('Home/Table/table9');?>">五行统计</a></dd>
        <dd><a href="<?php echo U('Home/Table/table24');?>">波色统计</a></dd>
        <dd><a href="<?php echo U('Home/Table/table5');?>">大小统计</a></dd>
        <dd><a href="<?php echo U('Home/Table/table10');?>">单双统计</a></dd>      
    </dl>
</div>

<div class="main">
<div class="d">
<div class="aa lc">
<div class="y-header">动态走势图</div>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=1">号码走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=2">合数走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=3">生肖走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=4">尾数走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=5">九段走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=6">七段走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=7">五行走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=8">五门走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=9">头数走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=10">波色走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=11">波色单双</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=12">波色大小</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=13">半波大小</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=14">大小单双</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=15">号码总和</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=16">平均数值</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=17">除三走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=18">除四走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=19">除五走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=20">除六走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=21">除七走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=22">除八走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=23">除九走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=24">除十走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=25">除十一走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=26">除十二走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=27">周二走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=28">周四走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=29">周六走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=30">单日走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=31">双日走势</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=32">单期号码</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=33">双期号码</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=34">单期尾数</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=35">双期尾数</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=36">单号个数</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=37">双号个数</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=38">最大号码</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=39">最小号码</a></li>
<li><a href="<?php echo U('Home/Charts');?>/charts_go?id=40">极号间隔</a></li>
</div>
</div>	

<div class="d">
<div class="aa lc">
<div class="y-header">统计图表</div>
<li><a href="<?php echo U('Home/Table/table1');?>">十二生肖</a></li>
<li><a href="<?php echo U('Home/Table/table2');?>">四肖统计</a></li>
<li><a href="<?php echo U('Home/Table/table3');?>">阴阳生肖</a></li>
<li><a href="<?php echo U('Home/Table/table4');?>">天地生肖</a></li>
<li><a href="<?php echo U('Home/Table/table5');?>">大小统计</a></li>
<li><a href="<?php echo U('Home/Table/table6');?>">六肖统计</a></li>
<li><a href="<?php echo U('Home/Table/table7');?>">三色生肖</a></li>
<li><a href="<?php echo U('Home/Table/table8');?>">男女生肖</a></li>
<li><a href="<?php echo U('Home/Table/table9');?>">五行统计</a></li>
<li><a href="<?php echo U('Home/Table/table10');?>">单双统计</a></li>
<li><a href="<?php echo U('Home/Table/table11');?>">五行生肖</a></li>
<li><a href="<?php echo U('Home/Table/table12');?>">单双笔画</a></li>
<li><a href="<?php echo U('Home/Table/table13');?>">傍肖统计</a></li>
<li><a href="<?php echo U('Home/Table/table14');?>">大尾小尾</a></li>
<li><a href="<?php echo U('Home/Table/table15');?>">合数单双</a></li>
<li><a href="<?php echo U('Home/Table/table16');?>">琴棋书画</a></li>
<li><a href="<?php echo U('Home/Table/table17');?>">家野生肖</a></li>
<li><a href="<?php echo U('Home/Table/table18');?>">朝夕生肖</a></li>
<li><a href="<?php echo U('Home/Table/table19');?>">五门统计</a></li>
<li><a href="<?php echo U('Home/Table/table20');?>">合数大小</a></li>
<li><a href="<?php echo U('Home/Table/table21');?>">四季统计</a></li>
<li><a href="<?php echo U('Home/Table/table22');?>">吉凶生肖</a></li>
<li><a href="<?php echo U('Home/Table/table23');?>">上中下波</a></li>
<li><a href="<?php echo U('Home/Table/table24');?>">波色统计</a></li>
<li><a href="<?php echo U('Home/Table/table25');?>">四方统计</a></li>
<li><a href="<?php echo U('Home/Table/table26');?>">内围外围</a></li>
<li><a href="<?php echo U('Home/Table/table27');?>">深浅统计</a></li>
<li><a href="<?php echo U('Home/Table/table28');?>">冷热统计</a></li>
<li><a href="<?php echo U('Home/Table/table29');?>">波色单双</a></li>
<li><a href="<?php echo U('Home/Table/table30');?>">前落后落</a></li>
<li><a href="<?php echo U('Home/Table/table31');?>">拼搏统计</a></li>
<li><a href="<?php echo U('Home/Table/table32');?>">爱恨统计</a></li>
<li><a href="<?php echo U('Home/Table/table33');?>">头数统计</a></li>
<li><a href="<?php echo U('Home/Table/table34');?>">左右统计</a></li>
<li><a href="<?php echo U('Home/Table/table35');?>">高低统计</a></li>
<li><a href="<?php echo U('Home/Table/table36');?>">顺逆统计</a></li>
<li><a href="<?php echo U('Home/Table/table38');?>">楼上楼下</a></li>
<li><a href="<?php echo U('Home/Table/table39');?>">长短统计</a></li>
<li><a href="<?php echo U('Home/Table/table40');?>">天玄地机</a></li>
<li><a href="<?php echo U('Home/Table/table41');?>">风雨统计</a></li>
<li><a href="<?php echo U('Home/Table/table42');?>">黑白统计</a></li>
<li><a href="<?php echo U('Home/Table/table44');?>">行列分布</a></li>
<li><a href="<?php echo U('Home/Table/table45');?>">特殊七星</a></li>
<li><a href="<?php echo U('Home/Table/table46');?>">摇奖机位</a></li>
<li><a href="<?php echo U('Home/Table/table47');?>">江恩旋出</a></li>
<li><a href="<?php echo U('Home/Table/table48');?>">江恩旋入</a></li>
</div>
</div>
<div id="tatol_box" class="tbox" style="text-align:center;line-height:28px;">
<!--表单提交开始-->
<form action="" method="post">
选择查询范围：<select name="qinum" id="qinum">
<option value="25" selected>最近25期</option>
<option value="50">最近50期</option>
<option value="80">最近80期</option>
<option value="100">最近100期</option>
<option value="150">最近150期</option>
<option value="200">最近200期</option>
<option value="2015">2015年</option>
<option value="2014">2014年</option>
<option value="2013">2013年</option>
<option value="2012">2012年</option>
<option value="2011">2011年</option>
<option value="2010">2010年</option>
<option value="2009">2009年</option>
<option value="2008">2008年</option>
<option value="2007">2007年</option>
<option value="2006">2006年</option>
<option value="2005">2005年</option>
<option value="2004">2004年</option>
<option value="2003">2003年</option>
<option value="2002">2002年</option>
<option value="2001">2001年</option>
<option value="2000">2000年</option>
<option value="1999">1999年</option>
<option value="1998">1998年</option>
<option value="1997">1997年</option>
<option value="1996">1996年</option>
<option value="1995">1995年</option>
<option value="1994">1994年</option>
<option value="1993">1993年</option>
<option value="1992">1992年</option>
<option value="1991">1991年</option>
<option value="1990">1990年</option>
<option value="1989">1989年</option>
<option value="1988">1988年</option>
<option value="1987">1987年</option>
<option value="1986">1986年</option>
<option value="1985">1985年</option>
<option value="1984">1984年</option>
<option value="1983">1983年</option>
<option value="1982">1982年</option>
<option value="1981">1981年</option>
<option value="1980">1980年</option>
<option value="1979">1979年</option>
<option value="1978">1978年</option>
<option value="1977">1977年</option>
<option value="1976">1976年</option>
</select>&nbsp;&nbsp;
<input type="submit" value="提交查询" name="submit" >
</form>
<!--表单提交结束-->
</div>
<!--主体内容开始-->
<div class="boxs">  属性说明：将49个号码分为紅,藍,綠三组。<li style="color:red;">1、紅=1,2,7,8,12,13,18,19,23,24,29,30,34,35,40,45,46</li><li style="color:blue;">2、藍=3,4,9,10,14,15,20,25,26,31,36,37,41,42,47,48</li><li style="color:green;">3、綠=5,6,11,16,17,21,22,27,28,32,33,38,39,43,44,49</li></div><div class="table"><table  border="1" width="100%" cellspacing="0" cellpadding="0" bordercolor="#FFFFFF" bordercolordark="#FFFFFF" bordercolorlight="#C0C0C0"><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="bg">正</td><td class="bg">一</td><td class="bg">码</td><td>正</td><td>二</td><td>码</td><td class="bg">正</td><td class="bg">三</td><td class="bg">码</td><td>正</td><td>四</td><td>码</td><td class="bg">正</td><td class="bg">五</td><td class="bg">码</td><td>正</td><td>六</td><td>码</td><td class="bg">特</td><td class="bg"></td><td class="bg">码</td><td>包含特码</td><td>不含特码</td></tr><tr ><td>期数</td><td>一码</td><td>二码</td><td>三码</td><td>四码</td><td>五码</td><td>六码</td><td>特码</td><td class="bg">紅</td><td class="bg">藍</td><td class="bg">綠</td><td>紅</td><td>藍</td><td>綠</td><td class="bg">紅</td><td class="bg">藍</td><td class="bg">綠</td><td>紅</td><td>藍</td><td>綠</td><td class="bg">紅</td><td class="bg">藍</td><td class="bg">綠</td><td>紅</td><td>藍</td><td>綠</td><td class="bg">紅</td><td class="bg">藍</td><td class="bg">綠</td><td>紅:藍:綠</td><td>紅:藍:綠</td></tr><?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
<?php
if (in_array($vo['tit1'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $pingred=$pingred+1; $zongred=$pingred; }elseif(in_array($vo['tit1'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $pingblu=$pingblu+1; $zongblu=$pingblu; }else{ $pinggre=$pinggre+1; $zonggre=$pinggre; } if (in_array($vo['tit2'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $pingred=$pingred+1; $zongred=$pingred; }elseif(in_array($vo['tit2'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $pingblu=$pingblu+1; $zongblu=$pingblu; }else{ $pinggre=$pinggre+1; $zonggre=$pinggre; } if (in_array($vo['tit3'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $pingred=$pingred+1; $zongred=$pingred; }elseif(in_array($vo['tit3'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $pingblu=$pingblu+1; $zongblu=$pingblu; }else{ $pinggre=$pinggre+1; $zonggre=$pinggre; } if (in_array($vo['tit4'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $pingred=$pingred+1; $zongred=$pingred; }elseif(in_array($vo['tit4'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $pingblu=$pingblu+1; $zongblu=$pingblu; }else{ $pinggre=$pinggre+1; $zonggre=$pinggre; } if (in_array($vo['tit5'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $pingred=$pingred+1; $zongred=$pingred; }elseif(in_array($vo['tit5'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $pingblu=$pingblu+1; $zongblu=$pingblu; }else{ $pinggre=$pinggre+1; $zonggre=$pinggre; } if (in_array($vo['tit6'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $pingred=$pingred+1; $zongred=$pingred; }elseif(in_array($vo['tit6'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $pingblu=$pingblu+1; $zongblu=$pingblu; }else{ $pinggre=$pinggre+1; $zonggre=$pinggre; } if (in_array($vo['tit7'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $zongred=$pingred+1; }elseif(in_array($vo['tit7'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $zongblu=$pingblu+1; }else{ $zonggre=$pinggre+1; } ?>
<td ><?php echo ($vo['title']); ?>期 </td>
<td class="<?php echo (cz_band_txt($vo['tit1'])); ?>"><?php echo ($vo['tit1']); ?></td>
<td class="<?php echo (cz_band_txt($vo['tit2'])); ?>"><?php echo ($vo['tit2']); ?></td>
<td class="<?php echo (cz_band_txt($vo['tit3'])); ?>"><?php echo ($vo['tit3']); ?></td>
<td class="<?php echo (cz_band_txt($vo['tit4'])); ?>"><?php echo ($vo['tit4']); ?></td>
<td class="<?php echo (cz_band_txt($vo['tit5'])); ?>"><?php echo ($vo['tit5']); ?></td>
<td class="<?php echo (cz_band_txt($vo['tit6'])); ?>"><?php echo ($vo['tit6']); ?></td>
<td class="<?php echo (cz_band_txt($vo['tit7'])); ?>"><?php echo ($vo['tit7']); ?></td>

<?php
if (in_array($vo['tit1'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums1=$nums1+1; ?>
<td class="r"><?=$vo['tit1']?></td>
<td class="bg"></td>
<td class="bg"></td>
<?php }elseif(in_array($vo['tit1'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa1=$numsa1+1; ?>
<td class="bg"></td>
<td class="b"><?=$vo['tit1']?></td>
<td class="bg"></td>
<?php }else{ $numsb1=$numsb1+1; ?>
<td class="bg"></td>
<td class="bg"></td>
<td class="g"><?=$vo['tit1']?></td>
<?php } ?>


<?php
if (in_array($vo['tit2'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums2=$nums2+1; ?>
<td class="r"><?=$vo['tit2']?></td>
<td class=""></td>
<td class=""></td>
<?php }elseif(in_array($vo['tit2'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa2=$numsa2+1; ?>
<td class=""></td>
<td class="b"><?=$vo['tit2']?></td>
<td class=""></td>
<?php }else{ $numsb2=$numsb2+1; ?>
<td class=""></td>
<td class=""></td>
<td class="g"><?=$vo['tit2']?></td>
<?php } ?>


<?php
if (in_array($vo['tit3'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums3=$nums3+1; ?>
<td class="r"><?=$vo['tit3']?></td>
<td class="bg"></td>
<td class="bg"></td>
<?php }elseif(in_array($vo['tit3'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa3=$numsa3+1; ?>
<td class="bg"></td>
<td class="b"><?=$vo['tit3']?></td>
<td class="bg"></td>
<?php }else{ $numsb3=$numsb3+1; ?>
<td class="bg"></td>
<td class="bg"></td>
<td class="g"><?=$vo['tit3']?></td>
<?php } ?>

<?php
if (in_array($vo['tit4'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums4=$nums4+1; ?>
<td class="r"><?=$vo['tit4']?></td>
<td class=""></td>
<td class=""></td>
<?php }elseif(in_array($vo['tit4'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa4=$numsa4+1; ?>
<td class=""></td>
<td class="b"><?=$vo['tit4']?></td>
<td class=""></td>
<?php }else{ $numsb4=$numsb4+1; ?>
<td class=""></td>
<td class=""></td>
<td class="g"><?=$vo['tit4']?></td>
<?php } ?>

<?php
if (in_array($vo['tit5'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums5=$nums5+1; ?>
<td class="r"><?=$vo['tit5']?></td>
<td class=""></td>
<td class=""></td>
<?php }elseif(in_array($vo['tit5'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa5=$numsa5+1; ?>
<td class=""></td>
<td class="b"><?=$vo['tit5']?></td>
<td class=""></td>
<?php }else{ $numsb5=$numsb5+1; ?>
<td class="bg"></td>
<td class="bg"></td>
<td class="g"><?=$vo['tit5']?></td>
<?php } ?>

<?php
if (in_array($vo['tit6'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums6=$nums6+1; ?>
<td class="r"><?=$vo['tit6']?></td>
<td class=""></td>
<td class=""></td>
<?php }elseif(in_array($vo['tit6'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa6=$numsa6+1; ?>
<td class=""></td>
<td class="b"><?=$vo['tit6']?></td>
<td class=""></td>
<?php }else{ $numsb6=$numsb6+1; ?>
<td class=""></td>
<td class=""></td>
<td class="g"><?=$vo['tit6']?></td>
<?php } ?>

<?php
if (in_array($vo['tit7'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums7=$nums7+1; ?>
<td class="r"><?=$vo['tit7']?></td>
<td class="bg"></td>
<td class="bg"></td>
<?php }elseif(in_array($vo['tit7'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa7=$numsa7+1; ?>
<td class="bg"></td>
<td class="b"><?=$vo['tit7']?></td>
<td class="bg"></td>
<?php }else{ $numsb7=$numsb7+1; ?>
<td class=""></td>
<td class=""></td>
<td class="g"><?=$vo['tit7']?></td>
<?php } ?>
<td><?=$pingred?> : <?=$pingblu?> : <?=$pinggre?></td>
<td><?=$zongred?> : <?=$zongblu?> : <?=$zonggre?></td>
</tr>
<?php
$pingred=0; $pingblu=0; $pinggre=0; $zongred=0; $zongblu=0; $zonggre=0; endforeach; endif; ?>
<tr><td>期数</td><td>一码</td><td>二码</td><td>三码</td><td>四码</td><td>五码</td><td>六码</td><td>特码</td><td class="bg">紅</td><td class="bg">藍</td><td class="bg">綠</td><td>紅</td><td>藍</td><td>綠</td><td class="bg">紅</td><td class="bg">藍</td><td class="bg">綠</td><td>紅</td><td>藍</td><td>綠</td><td class="bg">紅</td><td class="bg">藍</td><td class="bg">綠</td><td>紅</td><td>藍</td><td>綠</td><td class="bg">紅</td><td class="bg">藍</td><td class="bg">綠</td><td>紅:藍:綠</td><td>紅:藍:綠</td></tr><tr ><td></td><td></td><td></td><td></td><td></td><td></td><td>累计</td><td>次数</td><td class="bg">10</td><td class="bg">6</td><td class="bg">9</td><td>6</td><td>12</td><td>7</td><td class="bg">10</td><td class="bg">12</td><td class="bg">3</td><td>9</td><td>8</td><td>7</td><td class="bg">10</td><td class="bg">8</td><td class="bg">7</td><td>7</td><td>9</td><td>9</td><td class="bg">10</td><td class="bg">3</td><td class="bg">12</td><td>包含特码</td><td>不含特码</td></tr><tr ><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="bg">正</td><td class="bg">一</td><td class="bg">码</td><td>正</td><td>二</td><td>码</td><td class="bg">正</td><td class="bg">三</td><td class="bg">码</td><td>正</td><td>四</td><td>码</td><td class="bg">正</td><td class="bg">五</td><td class="bg">码</td><td>正</td><td>六</td><td>码</td><td class="bg">特</td><td class="bg"></td><td class="bg">码</td><td></td><td></td></tr></table></div>
<!--主体内容结束-->

</div>
			<?php $config=M('config')->where(array('id'=>1))->find(); ?>
<!--底部start-->
<div id="foot">
	<div class="foot">
    	<ul>
			<li><a href="/">网站首页</a></li>
			<li><a href="<?php echo U('Home/History');?>?id=2017">开奖记录</a></li>
			<li><a href="<?php echo U('Home/Charts/lhc1');?>">走势图</a></li>
			<li><a href="<?php echo ($config["site_wap"]); ?>" target="_blank">手机看开奖</a></li>
			<li><a href="/Source/kj/2017/sx.html">号码属性对照</a></li>
            <li><a href="/callback">开奖调用</a></li>
        </ul>
    </div>
</div>

    <div class="foot-txt">
<p><?php echo (stripslashes(htmlspecialchars_decode($config["site_qq"]))); ?></p>
<p><?php echo (stripslashes(htmlspecialchars_decode($config["site_copyright"]))); ?>&nbsp;&nbsp;<?php echo (stripslashes(htmlspecialchars_decode($config["javascript"]))); ?>
</p>
</div>
<!--底部end-->
<script type="text/javascript" src="<?php echo (JS_URL); ?>zzsc.js"></script>
<div class="bottom_tools">
  <a id="scrollUp" href="javascript:;" title="飞回顶部"></a>
</div>
		<script>
			var bgSelect = setInterval(function(){
				$(".Table_nav").addClass("li_checked").siblings().removeClass("li_checked");
				if($(".Table_nav").length != 0){
					clearInterval(bgSelect);
				}
			},200)
		</script>
</body>
</html>