<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN" dir="ltr">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title><?php echo ($data["title"]); ?>_<?=Cz_cig('site_name')?></title>
<meta name="keywords" content="<?php echo ($data["title"]); ?>" />
<meta name="description" content="<?php echo ($data["title"]); ?>" />
<link href="<?php echo (CSS_URL); ?>list.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (CSS_URL); ?>self.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (CSS_URL); ?>main.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]><script src="<?php echo (JS_URL); ?>/html5.js" type="text/javascript"></script><![endif]-->
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo (JS_URL); ?>superslide.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
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
<div id="main" class="main">
<div class="fleft">
<div class="br p10 bgff">
<p>您的位置：<a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="<?php echo U('Home/Article');?>">六合资料</a></p>
</div>
<div class="blank10"></div>
<div class="br bgff">
<div class="article_text">
 <h1><?php echo ($data["title"]); ?></h1>
 <div class="info_text"><span>时间：</span><?php echo (datetime($data["begtime"])); ?></div>
<div class="blank10"></div> 
 <div id="textzoom">
			<!--广告开始-->
			<?php if(is_array($plug_ad_17)): foreach($plug_ad_17 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="100%" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--广告结束-->   
 <div><?php echo ($data["content"]); ?></div>
			<!--广告开始-->
			<?php if(is_array($plug_ad_18)): foreach($plug_ad_18 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="100%" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--广告结束-->   
</div>
<div class="blank10"></div>
</div>
			<?php if(is_array($zlkg10)): foreach($zlkg10 as $key=>$v): if($v[plug_zlkg_adtypeid]==1): ?><!--PC和WAP自适应版-->
			<?php $config=M('config')->where(array('id'=>1))->find(); ?>
			<div id="SOHUCS" sid="<?php echo ($data["id"]); ?>" ></div>
			<?php echo (htmlspecialchars_decode($config["pl_detail"])); ?>
<!--PC和WAP自适应版--><?php endif; endforeach; endif; ?>			
</div>
</div>
<div class="blank10"></div>
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
				$(".Article_nav").addClass("li_checked").siblings().removeClass("li_checked");
				if($(".Article_nav").length != 0){
					clearInterval(bgSelect);
				}
			},200)
		</script>
<script src="<?php echo (JS_URL); ?>menu.js"></script> 
<script src="<?php echo (JS_URL); ?>layer.min.js"></script> 
</body>
</html>