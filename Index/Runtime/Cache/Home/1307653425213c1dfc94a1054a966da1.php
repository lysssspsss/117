<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN" dir="ltr">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title>六合彩无广告/免费管理 - 开奖报码插件（开奖结果与本港台同步直播）_<?=Cz_cig('site_name')?></title>
<meta name="keywords" content="六合彩开奖报马插件" />
<meta name="description" content="<?=Cz_cig('site_keywords')?>" />
<link href="<?php echo (CSS_URL); ?>list.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (CSS_URL); ?>self.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (CSS_URL); ?>sx.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]><script src="<?php echo (JS_URL); ?>/html5.js" type="text/javascript"></script><![endif]-->
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


<div class="content clearfix">
<div class="main">
<article class="infos2 padding-b1">
<div class="inner">
<header id="topbartit" class="title">
<dl class="clearfix">
<dt>
<h2 style="background-repeat:no-repeat;background-position: 0px -28px; padding-left:25px">引用"开奖记录" <font color="#FF0000" size="2">（无广告、免管理、即时更新、兼容所有浏览器）<font color="#009900">技术帮助QQ：<?=Cz_cig('site_qq')?></font></font></h2>
</dt>
<dd></dd>
</dl>
</header>
<div class="bd">
<dl class="findk">
<dt>1、文字链接：开奖历史记录 <font color="#009900">链接网址：<?=Cz_cig('site_url')?>history/?id=2017</font></dt>
<dd>
<textarea id="cade_a"><a href="<?=Cz_cig('site_url')?>history/?id=2017" target="_blank" title="点击查看">开奖历史记录</a></textarea><br/>
<button type="button" class="btn-2" onClick="doCopy('cade_a')">复制代码</button> 
<button type="button" class="btn-2" onClick="$('#cade_a').select()">全选代码</button>
<button type="button" class="btn-2" onClick="openpage('/history/?id=2017')">预览效果</button>   
</dd>
<dt style="">2、加入网站名称[LOGO] <font color="#009900"></font></dt>
<dd>
<textarea id="cade_b"><html>
<!--换一下网站名称，就是你的网站-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>1976年-2015年六合开奖历史记录插件</title>
</head>
<body style="margin:0;padding:0">
<table width="100%" border="0" cellspacing="3" cellpadding="3">
<tr>
<td align="center"><font style="font-size:36pt" color="#0000FF"><b>"网站名称"/ LOGO</b></font></td>
</tr>
<tr>
<td align="center"><font size="6" style="font-family:Arial, Helvetica, sans-serif;"><b>网址 <a href="javascript:window.external.AddFavorite('<?=Cz_cig('site_url')?>','开奖历史记录')">
<font color="#FF0000">www.117kj.com</font></a> 点击收藏</b></font></td>
</tr>
</table>
<div><iframe src="/Kj/record.php?id=2014" scrolling="no" frameborder="0" height="8660" id="mainFrame" width="100%"></iframe></div>
</body>
</html></textarea>
<br/>
<button type="button" class="btn-2" onClick="doCopy('cade_b')">复制代码</button> 
<button type="button" class="btn-2" onClick="$('#cade_b').select()">全选代码</button>
<button type="button" class="btn-2" onClick="openpage('/history/?id=2017')">预览效果</button>

</dd>
</dl>
</div>
</div>
</article>

<article class="infos2 padding-b1">
<div class="inner">
<header id="topbartit" class="title">
<dl class="clearfix">
<dt>
<h2 style=" background-repeat:no-repeat;background-position: 0px -3px; padding-left:25px">引用"开奖直播" <font color="#FF0000" size="2">（与本港台同步播出开奖结果）<font color="#009900">如需订制符合自己网站风格，可以联系技术帮助QQ：</font></font></h2>
</dt>
<dd></dd>
</dl>
</header>
<div class="bd2">
<div class="findk">

<!--插件1-->
<dl class="dlbg">
<dt>1、（长700高33）最终效果预览</dt>
<dd style="border:2px solid #CC6600; background:#FFFFFF; text-align:center; margin:5px 0; width:700px" >
<iframe src="/Source/dm/d1.htm" width="700" marginwidth="0" height="33"  scrolling="no" frameborder="0" border="0"></iframe></dd>
<dd>
<textarea id="cade_1"><div style="border:2px solid #CC6600; background:#FFFFFF; text-align:center; width:700px" ><iframe src="<?=Cz_cig('site_url')?>Source/dm/d1.htm" width="700" marginwidth="0" height="33"  scrolling="no" frameborder="0" border="0"></iframe></div></textarea>
<br/>
<button type="button" class="btn-2" onClick="doCopy('cade_1')">复制代码</button> 
<button type="button" class="btn-2" onClick="$('#cade_1').select()">全选代码</button>
<button type="button" class="btn-2" onClick="openpage('/Source/dm/d1.htm')">预览效果</button>   
</dd>
</dl>

<!--插件2-->
<dl class="dlbg">
<dt>2、（长970高33）最终效果预览</dt>
<dd style='border:2px solid #CC6600; background:#FFFFFF; text-align:center;' ><iframe src='/Source/dm/d2.htm' width='970' marginwidth='0' height='33'  scrolling='no' frameborder='0' border='0'></iframe></dd>
<dd>
<textarea id="cade_2"><div style='border:2px solid #CC6600; background:#FFFFFF; text-align:center;' ><iframe src='<?=Cz_cig('site_url')?>Source/dm/d2.htm' width='970' marginwidth='0' height='33'  scrolling='no' frameborder='0' border='0'></iframe></div>
</textarea>
<br/>
<button type="button" class="btn-2" onClick="doCopy('cade_2')">复制代码</button> 
<button type="button" class="btn-2" onClick="$('#cade_2').select()">全选代码</button>
<button type="button" class="btn-2" onClick="openpage('/Source/dm/d2.htm')">预览效果</button>
</dd>
</dl>

<!--插件3-->
<dl class="dlbg">
<dt>3、（长970高35）最终效果预览</dt>
<dd style='border:2px solid #CC6600; background:#FFFFFF;text-align:center;' ><iframe src='/Source/dm/d3.htm' width="970" marginwidth='0' height='35'  scrolling='no' frameborder='0' border='0'></iframe></dd>
<dd>
<textarea id="cade_3"><div style='border:2px solid #CC6600; background:#FFFFFF; text-align:center;' ><iframe src='<?=Cz_cig('site_url')?>Source/dm/d3.htm' width="970" marginwidth='0' height='35'  scrolling='no' frameborder='0' border='0'></iframe></div>
</textarea>
<br/>
<button type="button" class="btn-2" onClick="doCopy('cade_3')">复制代码</button> 
<button type="button" class="btn-2" onClick="$('#cade_3').select()">全选代码</button>
<button type="button" class="btn-2" onClick="openpage('/Source/dm/d3.htm')">预览效果</button>
</dd>
</dl> 

<!--插件4-->
<dl class="dlbg">
<dt>4、（长545高123）最终效果预览</dt>
<dd><iframe src='/Source/dm/d4.htm' width='545' marginwidth='0' height='123'  scrolling='no' frameborder='0' border='0'></iframe></dd>
<dd>
<textarea id="cade_4"><div><iframe src='<?=Cz_cig('site_url')?>Source/dm/d4.htm' width='545' marginwidth='0' height='123'  scrolling='no' frameborder='0' border='0'></iframe></div>
</textarea>
<br/>
<button type="button" class="btn-2" onClick="doCopy('cade_4')">复制代码</button> 
<button type="button" class="btn-2" onClick="$('#cade_4').select()">全选代码</button>
<button type="button" class="btn-2" onClick="openpage('/Source/dm/d4.htm')">预览效果</button>
</dd>
</dl> 

<!--插件5-->
<dl class="dlbg">
<dt>5、（长555高72）最终效果预览</dt>
<dd><iframe src='/Source/dm/d5.htm' width='555' marginwidth='0' height='72'  scrolling='no' frameborder='0' border='0'></iframe></dd>
<dd>
<textarea id="cade_5"><div><iframe src='<?=Cz_cig('site_url')?>Source/dm/d5.htm' width='555' marginwidth='0' height='72'  scrolling='no' frameborder='0' border='0'></iframe></div>
</textarea>
<br/>
<button type="button" class="btn-2" onClick="doCopy('cade_5')">复制代码</button> 
<button type="button" class="btn-2" onClick="$('#cade_5').select()">全选代码</button>
<button type="button" class="btn-2" onClick="openpage('/Source/dm/d5.htm')">预览效果</button>
</dd>
</dl> 

<!--插件6-->
<dl class="dlbg">
<dt>6、（长520高118）最终效果预览</dt>
<dd style='border:2px solid #CC6600; background:#FFFFFF;text-align:center; width:520px'><iframe src='/Source/dm/d6.htm' width='520' marginwidth='0' height='118'  scrolling='no' frameborder='0' border='0'></iframe></dd>
<dd>
<textarea id="cade_6"><div style='border:2px solid #CC6600; background:#FFFFFF;text-align:center; width:520px'><iframe src='<?=Cz_cig('site_url')?>Source/dm/d6.htm' width='520' marginwidth='0' height='118'  scrolling='no' frameborder='0' border='0'></iframe></div>
</textarea>
<br/>
<button type="button" class="btn-2" onClick="doCopy('cade_6')">复制代码</button> 
<button type="button" class="btn-2" onClick="$('#cade_6').select()">全选代码</button>
<button type="button" class="btn-2" onClick="openpage('/Source/dm/d6.htm')">预览效果</button>
</dd>
</dl> 

<!--插件7-->
<dl class="dlbg">
<dt>7、（长705高140）最终效果预览</dt>
<dd><iframe src='/Source/dm/d7.htm' width='705' marginwidth='0' height='150'  scrolling='no' frameborder='0' border='0'></iframe></dd>
<dd>
<textarea id="cade_7"><div><iframe src='<?=Cz_cig('site_url')?>Source/dm/d7.htm' width='705' marginwidth='0' height='150'  scrolling='no' frameborder='0' border='0'></iframe></div>
</textarea>
<br/>
<button type="button" class="btn-2" onClick="doCopy('cade_7')">复制代码</button> 
<button type="button" class="btn-2" onClick="$('#cade_7').select()">全选代码</button>
<button type="button" class="btn-2" onClick="openpage('/Source/dm/d7.htm')">预览效果</button>
</dd>
</dl> 

<!--插件8-->
<dl class="dlbg">
<dt>8、（长<font color="#999999">自定义</font>高170）最终效果预览</dt>
<dd style="border:5px solid #FF9900;"><iframe src='/Source/dm/d8.htm'  width="100%" rginwidth='0' height='170'  scrolling='no' frameborder='0' border='0'></iframe></dd>
<dd>
<textarea id="cade_8"><div style="border:5px solid #FF9900;"><iframe src='<?=Cz_cig('site_url')?>Source/dm/d8.htm'  width="100%" rginwidth='0' height='170'  scrolling='no' frameborder='0' border='0'></iframe></div>
</textarea>
<br/>
<button type="button" class="btn-2" onClick="doCopy('cade_8')">复制代码</button> 
<button type="button" class="btn-2" onClick="$('#cade_8').select()">全选代码</button>
<button type="button" class="btn-2" onClick="openpage('/Source/dm/d8.htm')">预览效果</button>
</dd>
</dl> 

<!--插件9-->
<dl class="dlbg">
<dt>9、（长485高85）最终效果预览</dt>
<dd><iframe src='/Source/dm/d9.htm' width='485' marginwidth='0' height='85'  scrolling='no' frameborder='0' border='0'></iframe></dd>
<dd>
<textarea id="cade_9"><div><iframe src='<?=Cz_cig('site_url')?>Source/dm/d9.htm' width='485' marginwidth='0' height='85'  scrolling='no' frameborder='0' border='0'></iframe></div>
</textarea>
<br/>
<button type="button" class="btn-2" onClick="doCopy('cade_9')">复制代码</button> 
<button type="button" class="btn-2" onClick="$('#cade_9').select()">全选代码</button>
<button type="button" class="btn-2" onClick="openpage('/Source/dm/d9.htm')">预览效果</button>
</dd>
</dl> 

<!--插件10-->
<dl class="dlbg">
<dt>10、（长280高95）最终效果预览</dt>
<dd><iframe src='/Source/dm/d10.htm' width='280' marginwidth='0' height='95'  scrolling='no' frameborder='0' border='0'></iframe></dd>
<dd>
<textarea id="cade_10"><div><iframe src='<?=Cz_cig('site_url')?>Source/dm/d10.htm' width='280' marginwidth='0' height='95'  scrolling='no' frameborder='0' border='0'></iframe></div>
</textarea>
<br/>
<button type="button" class="btn-2" onClick="doCopy('cade_10')">复制代码</button> 
<button type="button" class="btn-2" onClick="$('#cade_10').select()">全选代码</button>
<button type="button" class="btn-2" onClick="openpage('/Source/dm/d10.htm')">预览效果</button>
</dd>
</dl> 

</div>
</div>
</div>
</article>
</div>
</div>
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
				$(".index_nav").addClass("li_checked").siblings().removeClass("li_checked");
				if($(".index_nav").length != 0){
					clearInterval(bgSelect);
				}
			},200)
		</script>
</body>
</html>
<script src="<?php echo (JS_URL); ?>history.js" type="text/javascript"></script>