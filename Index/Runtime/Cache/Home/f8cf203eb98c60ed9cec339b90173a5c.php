<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title><?=Cz_cig('site_name')?> <?=Cz_cig('site_title')?></title>
<meta name="viewport" content="width=1080" />
<meta name="keywords" content="<?=Cz_cig('site_keywords')?>" />
<meta name="description" content="<?=Cz_cig('site_describe')?>" />
<style>
<!--

* { margin: 0; padding: 0;}
td { height: 25px; font-weight: bold; font-size: 14px; text-align: center; border: solid 1px #d3b484;}
td.td01 { color: #fff; border: solid 1px #f00; background: #f00;}
-->
</style>
<link href="<?php echo (CSS_URL); ?>main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (CSS_URL); ?>self.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>foot.css">
<!--[if lt IE 9]><script src="<?php echo (JS_URL); ?>/html5.js" type="text/javascript"></script><![endif]-->
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo (JS_URL); ?>superslide.js" type="text/javascript"></script>


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

			<?php if(is_array($wap)): foreach($wap as $key=>$v): if($v[plug_wap_adtypeid]==1): ?><script type="text/javascript">
function browserRedirect() { 
var sUserAgent= navigator.userAgent.toLowerCase(); 
var bIsIpad= sUserAgent.match(/ipad/i) == "ipad"; 
var bIsIphoneOs= sUserAgent.match(/iphone os/i) == "iphone os"; 
var bIsMidp= sUserAgent.match(/midp/i) == "midp"; 
var bIsUc7= sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4"; 
var bIsUc= sUserAgent.match(/ucweb/i) == "ucweb"; 
var bIsAndroid= sUserAgent.match(/android/i) == "android"; 
var bIsCE= sUserAgent.match(/windows ce/i) == "windows ce"; 
var bIsWM= sUserAgent.match(/windows mobile/i) == "windows mobile"; 
if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) { 
window.location= '<?=Cz_cig('site_wap')?>m_index.html'; //手机网站地址
} else { 
//window.location= '<?=Cz_cig('site_url')?>'; //电脑网站地址
} 
} 
browserRedirect(); 
</script>
<script>
    try
    {
        if(self.location == "<?=Cz_cig('site_wap')?>")
        {
            top.location.href = "<?=Cz_cig('site_url')?>";
        }
    }
    catch(e){ }
</script><?php endif; endforeach; endif; ?>

			
			


			<!--首页-弹窗开始-->
			<?php if(is_array($plug_ad_24)): foreach($plug_ad_24 as $key=>$v): if($v[plug_ad_checkid]==1): ?><div class="lcj_tan" style="display:none">
					<div class="lcj_guan"><span><?php echo ($v["plug_ad_name"]); ?></span><button><img src="/Public/tu/hong.png" ></button></div>
					<div class="lcj_img">
						<a href="<?php echo ($v["plug_ad_url"]); ?>" target="_blank"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" ></a>
					</div>
					<div class="lcj_clo">
						<div class="lcj_cloa">
							<button >关闭</button>
						</div>
					</div>
				</div>
				<div class="lcj_bottom" style="display:none">
				
				</div>			
			<?php elseif($v[plug_ad_checkid]==2): ?>		
				<div class="lcj_tan" style="display:none">
					<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); ?>
					<div class="lcj_clo">
						<div class="lcj_cloa">
							<button >关闭</button>
						</div>
					</div>
				</div>
				<div class="lcj_bottom" style="display:none">
				
				</div><?php endif; ?>	
			<script src="/Public/tu/jquery.min.js"></script>
			 <script src="/Public/tu/lcj.js" type="text/javascript"></script><?php endforeach; endif; ?>
			<!--首页-弹窗结束-->					


<div class="width1000">			

			
			<!--首页-开奖记录下方广告开始-->
			<?php if(is_array($plug_ad_16)): foreach($plug_ad_16 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="1000" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-开奖记录下方结束-->			
			<div class="blank10"></div>	


<!--开奖结果-->
<div class="kj-box"><span class="kj-ico"></span>
			<?php if(is_array($kjfs)): foreach($kjfs as $key=>$v): if($v[plug_kj_adtypeid]==1): ?><iframe name="I6" src="/kaijiang" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>	
			<?php elseif($v[plug_kj_adtypeid]==2): ?>
			<iframe name="I6" src="/kai" width="100%" height="100%" frameborder="0" scrolling="no"></iframe><?php endif; endforeach; endif; ?>
	</div>




<div class="kjjl-box mb10">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td class="kjjl-td1">开奖<br>记录</td>
        <td class="kjjl-td2">
<ul>
<?php  for($i =1976;$i <= $dates; $i++) { ?>
<li><a href="/Source/kj/<?=$i?>" onclick="javascript:lotteryInfo(<?=$i?>);return false;"><?=$i?>年</a></li>
<?php } ?>

			<!--AD-开始-->
			<?php if(is_array($plug_ad_28)): foreach($plug_ad_28 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="1000" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--AD-结束-->

<li>
						<a style="width: 100px; font-size: 14px; color: #FFFF00; font-weight: bold; margin-left: 5px; background: #000000" title="点击搜索开奖记录《公式规律》" target="_blank" href="/history/?id=2017"><u>搜索开奖公式</u></a></li>
</ul>
        </td>
      </tr>
    </tbody>
	</table>
    </div>



<div class="content clearfix">
<div id="main" class="main">

			
			<!--首页-开奖记录下方广告开始-->
			<?php if(is_array($plug_ad_1)): foreach($plug_ad_1 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="1000" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-开奖记录下方结束-->

<div class="blank10"></div>	
<iframe src="Html/tuijian.html" width="100%" height="173" scrolling="no" frameborder="0" target="_blank"></iframe>
<article class="infos" id="gao">

<!--图库start-->					
<!--图库start-->	

<div id="tabbox">
<div id="DBSK"></div>
<div>
	<table border="0" width="100%" id="table1" height="50" class="nav123">
		<tr>
			<td align="center" width="100%" bgcolor="#000000"><b>
			<font size="6" color="#FFFF00">117kj开奖</font><font size="6" color="#FF00FF">长期免费公开</font><font size="6" color="#FFFF00">六合彩</font><font size="6" color="#FF00FF">资料.请大家互相转告！</font></b></td>
		</tr>
	</table>
</div>
<!--解波肖start-->
			<?php if(is_array($zlkg)): foreach($zlkg as $key=>$v): if($v[plug_zlkg_adtypeid]==1): ?><iframe id="St" src="Html/bizhong_sy.html"  scrolling="no" frameborder="0" style="width: 100%;" onload="this.height=this.contentWindow.document.documentElement.scrollHeight">
</iframe><?php endif; endforeach; endif; ?>	

<iframe src="Html/guapai2.html" width="100%" height="1811" frameborder="0" scrolling="no"></iframe>


			<!--首页-广告开始-->
			<?php if(is_array($plug_ad_13)): foreach($plug_ad_13 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="100%" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-广告结束-->
			
<!--解波肖end-->
			<?php if(is_array($zlkg3)): foreach($zlkg3 as $key=>$v): if($v[plug_zlkg_adtypeid]==1): ?><div class="qiMore"><a href="/Ziliao/tms" target="_blank">香港秘典玄机 —— 特马诗 →点击查看更多←</a></div>			
<iframe name="I137" src="Html/tms_sy.html" target="_blank" height="450" width="100%" scrolling="no" align="middle" border="0" frameborder="0"></iframe><?php endif; endforeach; endif; ?>	

			<!--首页-广告开始-->
			<?php if(is_array($plug_ad_14)): foreach($plug_ad_14 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="100%" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-广告结束--> 
<!--解波肖end-->
			<?php if(is_array($zlkg4)): foreach($zlkg4 as $key=>$v): if($v[plug_zlkg_adtypeid]==1): ?><iframe name="I137" src="Html/bbs_sy.html" target="_blank" height="666" width="100%" scrolling="no" align="middle" border="0" frameborder="0"></iframe><?php endif; endforeach; endif; ?>	
			<div class="blank10"></div>	
			<!--首页-广告开始-->
			<?php if(is_array($plug_ad_15)): foreach($plug_ad_15 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="100%" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-广告结束-->
			<?php if(is_array($zlkg5)): foreach($zlkg5 as $key=>$v): if($v[plug_zlkg_adtypeid]==1): ?><iframe id="St" src="Html/liuxiao_sy.html"  scrolling="no" frameborder="0" style="width: 100%;" onload="this.height=this.contentWindow.document.documentElement.scrollHeight">
</iframe><?php endif; endforeach; endif; ?>
<iframe name="I137" src="Html/bs.html" target="_blank" height="40" width="100%" scrolling="no" align="middle" border="0" frameborder="0"></iframe>
			<div class="blank10"></div>		
			<?php if(is_array($zlkg7)): foreach($zlkg7 as $key=>$v): if($v[plug_zlkg_adtypeid]==1): ?><iframe id="St" src="Html/yj.html"  scrolling="no" frameborder="0" style="width: 100%;" onload="this.height=this.contentWindow.document.documentElement.scrollHeight">
</iframe><?php endif; endforeach; endif; ?>			

<!--插件start-->
<div>
	<table border="0" width="100%" id="table1" height="50" class="nav123">
		<tr>
			<td align="center" width="100%" bgcolor="#000000"><b>
			<font size="6" color="#FFFF00">117kj开奖</font><font size="6" color="#FF00FF">长期免费公开</font><font size="6" color="#FFFF00">六合彩</font><font size="6" color="#FF00FF">资料.请大家互相转告！</font></b></td>
		</tr>
	</table>
</div>
		<!--<iframe src="Html/quannian.html" width="100%" marginwidth="0" height="318"  scrolling="no" frameborder="0" border="0"></iframe>-->

<!--插件end-->
<div id="why_dzb">
	<table border="0" width="100%" id="table2" height="50" class="nav123">
		<tr>
			<td align="center" width="100%" bgcolor="#000000"><font face="黑体">
			<font color="#ffff00" size="6" style="margin: 0; padding: 0">
			公告：请用三秒钟时间记好 </font>
			<font color="#00FF00" size="6" style="margin: 0; padding: 0">
			www.117kj.com</font><font color="#ffff00" size="6" style="margin: 0; padding: 0"> 
			这里值得您长期关注！</font></font></td>
		</tr>
	</table>
</div>
</div>			
</article>


<iframe src="/Html/tuku.html" width="1000" height="764" frameborder="0" scrolling="no"></iframe>
<div class="blank10"></div>	
			<!--首页-彩色图库下方广告开始-->
			<?php if(is_array($plug_ad_2)): foreach($plug_ad_2 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="1000" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-彩色图库下方广告结束-->  
			<div class="blank10"></div>		


			<?php if(is_array($zlkg8)): foreach($zlkg8 as $key=>$v): if($v[plug_zlkg_adtypeid]==1): ?><iframe id="St" src="Html/jingxuan_sy.html"  scrolling="no" frameborder="0" style="width: 100%;" onload="this.height=this.contentWindow.document.documentElement.scrollHeight">
</iframe><?php endif; endforeach; endif; ?>	 			

<!--<iframe name="I137" src="http://www.178kj.cc" target="_blank" height="329" width="100%" scrolling="no" align="middle" border="0" frameborder="0"></iframe>-->
 

		

		
<div class="blank10"></div>			
<div style="width:1010px">
<?php if(is_array($list1)): foreach($list1 as $key=>$vo): ?><div class="juesha">
        	<div class="juesha-tit"><span><a href="/lists/<?=$vo['id']?>.html" target="_blank">更多</a></span><?=$vo['title']?></div>
            <div class="juesha-box">
            	<ul class="list-news list-ico2">
                <?php if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="/Article/<?php echo ($sub["id"]); ?>.html"><?php echo ($sub["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
                </ul>
            </div>
</div><?php endforeach; endif; ?>
</div>


		
			<!--首页-六合资料下方广告开始-->
			<?php if(is_array($plug_ad_3)): foreach($plug_ad_3 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="1000" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-六合资料下方广告结束--> 
<div class="blank10"></div>
<div class="quann">
    	<div class="quann-tit">全年资料</div>
        <div class="quann-box clearfix list-ico3" id="commonNewsList12">
		<div class="quann-l">
		<ul class="list-news">
	<?php if(is_array($list2)): foreach($list2 as $key=>$vo): if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="/quannian/<?php echo ($sub["id"]); ?>.html"><?php echo ($sub["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; ?>
		</ul>
		</div>
		<div class="quann-m">
		<ul class="list-news">
	<?php if(is_array($list4)): foreach($list4 as $key=>$vo): if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="/quannian/<?php echo ($sub["id"]); ?>.html"><?php echo ($sub["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; ?>
		</ul>
		</div>
		<div class="quann-r">
		<ul class="list-news">
	<?php if(is_array($list5)): foreach($list5 as $key=>$vo): if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="/quannian/<?php echo ($sub["id"]); ?>.html"><?php echo ($sub["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; ?>
		</ul>
		</div>
		</div>
</div>


 
<div id="main" class="main">

<aside class="flink1">
<div class="inner">

<dl>
<dt id="flink1">
<img class="leftsj" src="<?php echo (CSS_URL); ?>/images/r6c6.jpg">
<img class="rightsj" src="<?php echo (CSS_URL); ?>/images/r8c7.jpg">
<img class="tup" src="<?php echo (CSS_URL); ?>/images/gj.gif">
<h3>动态走势图</h3>
</dt>
<dd>
<ul class="clearfix">
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=1">号码走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=2">合数走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=3">生肖走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=4">尾数走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=5">九段走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=6">七段走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=7">五行走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=8">五门走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=9">头数走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=10">波色走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=11">波色单双</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=12">波色大小</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=13">半波大小</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=14">大小单双</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=15">号码总和</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=16">平均数值</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=17">除三走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=18">除四走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=19">除五走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=20">除六走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=21">除七走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=22">除八走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=23">除九走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=24">除十走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=25">除十一走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=26">除十二走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=27">周二走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=28">周四走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=29">周六走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=30">单日走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=31">双日走势</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=32">单期号码</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=33">双期号码</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=34">单期尾数</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=35">双期尾数</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=36">单号个数</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=37">大号个数</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=38">最大号码</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=39">最小号码</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/charts/charts_go.html?id=40">极号间隔</a></li>
</ul>
</dd>
</dl>
<dl>
<dt id="flink1">
<img class="leftsj" src="<?php echo (CSS_URL); ?>/images/r6c6.jpg">
<img class="rightsj" src="<?php echo (CSS_URL); ?>/images/r8c7.jpg">
<img class="tup" src="<?php echo (CSS_URL); ?>/images/gj.gif">
<h3>统计图表</h3>
</dt>
<dd>
<ul class="clearfix">
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table1.html">十二生肖</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table2.html">四肖统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table3.html">阴阳生肖</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table4.html">天地生肖</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table5.html">大小统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table6.html">六肖统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table7.html">三色生肖</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table8.html">男女生肖</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table9.html">五行统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table10.html">单双统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table11.html">五行生肖</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table12.html">单双笔画</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table13.html">傍肖统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table14.html">大尾小尾</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table15.html">合数单双</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table16.html">琴棋书画</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table17.html">家野生肖</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table18.html">朝夕生肖</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table19.html">五门统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table20.html">合数大小</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table21.html">四季统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table22.html">吉凶生肖</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table23.html">上中下波</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table24.html">波色统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table25.html">四方统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table26.html">内围外围</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table27.html">深浅统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table28.html">冷热统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table29.html">波色单双</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table30.html">前落后落</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table31.html">拼搏统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table32.html">爱恨统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table33.html">头数统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table34.html">左右统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table35.html">高低统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table36.html">顺逆统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table38.html">楼上楼下</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table39.html">长短统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table40.html">天玄地机</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table41.html">风雨统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table42.html">黑白统计</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table44.html">行列分布</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table45.html">特殊七星</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table46.html">摇奖机位</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table47.html">江恩旋出</a></li>
<li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href="/table/table48.html">江恩旋入</a></li>
</ul>
</dd>
</dl>
</div>
</aside>
</div>
<div class="blank10"></div>	
			<!--首页-特码走势图下方广告开始-->
			<?php if(is_array($plug_ad_4)): foreach($plug_ad_4 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="1000" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-特码走势图下方广告结束--> 
<div class="blank10"></div>				
<iframe src="Html/pic.html" width="100%" height="390" frameborder="0" scrolling="no"></iframe>
</div>
<div class="blank10"></div>	
			<!--首页-动态走势图下方广告开始-->
			<?php if(is_array($plug_ad_27)): foreach($plug_ad_27 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="100%" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-动态走势图下方广告结束--> 

<div id="main" class="main">
<div class="blank10"></div>
<script language="javascript">
function GetRequest() {
var url = location.search;
var theRequest = new Object();
if (url.indexOf("?") != -1) {
var str = url.substr(1);
strs = str.split("&");
for(var i = 0; i < strs.length; i ++) {
theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);
}
}
return theRequest;
}
function showResult(){
var test=GetRequest();
var qinum=test['qinum'];
var winnum=test['winnum'];
var series_type=test['series_type'];
if ((qinum != null)){qinum=qinum} else{qinum="25"} 
if ((winnum != null)){winnum=winnum} else{winnum="7"} 
if ((series_type != null)){series_type=series_type} else{series_type="line"} 
document.getElementById('qinum').value=qinum;
document.getElementById('winnum').value=winnum;
document.getElementById('series_type').value=series_type;
}
</script>
<div class="d">
<div class="aa lc">
<div class="y-header"><span class="fright"><a href="/Home/charts/charts_go.html?id=1" target="_blank">查看更仔细的动态走势图</a></span><h4>特码走势图</h4></div>
<script type="text/javascript" language="JavaScript" src="/charts/chart.js"></script><div id="chart" class="tbox"></div><SCRIPT LANGUAGE="JavaScript1.1">
<!--
// U can change this number to check specific version of flash
var MM_contentVersion = 6;
var plugin = (navigator.mimeTypes && navigator.mimeTypes["application/x-shockwave-flash"]) ?
navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin : 0;
if ( plugin ) {
var words = navigator.plugins["Shockwave Flash"].description.split(" ");
for (var i = 0; i < words.length; ++i){
if (isNaN(parseInt(words[i])))
continue;
var MM_PluginVersion = words[i];
}
var MM_FlashCanPlay = MM_PluginVersion >= MM_contentVersion;
}
else if( navigator.userAgent && navigator.userAgent.indexOf("MSIE")>=0 &&
(navigator.appVersion.indexOf("Win") != -1) ) {
//FS hide this from IE4.5 Mac by splitting the tag
document.write('<SCR' + 'IPT LANGUAGE=VBScript\> \n');
document.write('on error resume next \n');
document.write('MM_FlashCanPlay = ( IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash." & MM_contentVersion)))\n');
document.write('</SCR' + 'IPT\> \n');
}
if ( MM_FlashCanPlay ) {
var alternateContent = '';document.write(alternateContent);
}
else{
var alternateContent = '此内容需要安装Adobe Flash Player. '+ '<u><a href=http://www.macromedia.com/go/getflash/ target=_blank>下载Adobe Flash Player</a></u>.';
document.write(alternateContent);
}
//-->
</SCRIPT>
<noscript>浏览器必须能够运行 JavaScript ，要在Internet Explorer 中启用。</noscript>
<script type="text/javascript" language="JavaScript">
 var test=GetRequest();
 var qinum=test['qinum'];
 var winnum=test['winnum'];
 var series_type=test['series_type'];
if ((qinum != null)){qinum=qinum} else{qinum="25"}
if ((winnum != null)){winnum=winnum} else{winnum="7"} 
if ((series_type != null)){series_type=series_type} else{series_type="line"}
//<![CDATA[
var chart = new AnyChart('/charts/chart.swf','/charts/preloader.swf');
chart.width = '994';
chart.height= '450';
chart.wMode = 'transparent';
chart.setXMLFile('/vbsxml/xml_1_'+winnum+'_'+ qinum+'_'+series_type+'.xml');
chart.write('chart');
//]]>
</script>
<div class="blank10"></div>
</div>
</div>
<div class="blank10"></div>	
			<!--首页-动态走势图下方广告开始-->
			<?php if(is_array($plug_ad_5)): foreach($plug_ad_5 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="100%" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-动态走势图下方广告结束--> 

</div>

			<?php if(is_array($zlkg10)): foreach($zlkg10 as $key=>$v): if($v[plug_zlkg_adtypeid]==1): ?><div id="main" class="main">
<aside class="flink">
<div class="inner">
<dl>
<dt id="flink1"><h3><span></span>欢迎您参与讨论</h3></dt>
<dd>
<div class="clear"></div>


			<?php $config=M('config')->where(array('id'=>1))->find(); ?>
			<?php echo (htmlspecialchars_decode($config["pl_index"])); ?>
</dd>
</dl>
</div>
</aside>
<div class="blank10"></div>	
			<!--首页-参与讨论下方广告开始-->
			<?php if(is_array($plug_ad_6)): foreach($plug_ad_6 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="100%" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-参与讨论下方广告结束--> 

</div><?php endif; endforeach; endif; ?>	





<div id="main" class="main">

<aside class="flink">
<div class="inner">



<?php if(is_array($list)): foreach($list as $key=>$vo): ?><dl>
<dt id="flink1">
<img class="leftsj" src="<?php echo (CSS_URL); ?>/images/r6c6.jpg">
<img class="rightsj" src="<?php echo (CSS_URL); ?>/images/r8c7.jpg">
<img class="tup" src="<?php echo (CSS_URL); ?>/images/gj.gif">
<h3><?=$vo['title']?></h3>
</dt>
<dd>
<ul class="clearfix">
<?php if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li style="border: 1px solid #500a0c; border-radius: 5px; background: #fff;"><a href='<?php echo ($sub["url"]); ?>' target="_blank" rel="nofollow"><?php echo ($sub["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>  
</ul>
</dd>
</dl><?php endforeach; endif; ?>




</div>
</aside>
</div>

<div class="con" style="margin-top:5px;">
<h2 class="listT1">
<a target="_blank" href="/Source/kj/2017/sx.html">
<span>
号码属性对照
</span>
2017鸡年（十二生肖号码对照）
</a>
</h2>
<ul class="sxdz">
<li>
<span class="sx">
鼠
<img align="absMiddle" src="./Index/Public/img/88111_files/1_01.png">
[冲 马]
</span>
<br>


<span class="bg_blue">&nbsp;10&nbsp;</span>&nbsp;
<span class="bg_green">&nbsp;22&nbsp;</span>&nbsp;
<span class="bg_red">&nbsp;34&nbsp;</span>&nbsp;
<span class="bg_red">&nbsp;46&nbsp;</span>
</li>
<li>
<span class="sx">
牛
<img align="absMiddle" src="./Index/Public/img/88111_files/1_02.png">
[冲 羊]
</span>
<br>
<span class="bg_blue">&nbsp;09&nbsp;</span>&nbsp;
<span class="bg_green">&nbsp;21&nbsp;</span>&nbsp;
<span class="bg_green">&nbsp;33&nbsp;</span>&nbsp;
<span class="bg_red">&nbsp;45&nbsp;</span>

</li>
<li>
<span class="sx">
虎
<img align="absMiddle" src="./Index/Public/img/88111_files/1_05.png">
[冲 猴]
</span>
<br>
<span class="bg_red">&nbsp;08&nbsp;</span>&nbsp;
<span class="bg_blue">&nbsp;20&nbsp;</span>&nbsp;
<span class="bg_green">&nbsp;32&nbsp;</span>&nbsp;
<span class="bg_green">&nbsp;44&nbsp;</span>

</li>
<li style="width:19%">
<span class="sx">
兔
<img align="absMiddle" src="./Index/Public/img/88111_files/1_06.png">
[冲 鸡]
</span>
<br>

<span class="bg_red">&nbsp;07&nbsp;</span>&nbsp;
<span class="bg_red">&nbsp;19&nbsp;</span>&nbsp;
<span class="bg_blue">&nbsp;31&nbsp;</span>&nbsp;
<span class="bg_green">&nbsp;43&nbsp;</span>

</li>
<li>
<span class="sx">
龙
<img align="absMiddle" src="./Index/Public/img/88111_files/1_07.png">
[冲 狗]
</span>
<br>

<span class="bg_green">&nbsp;06&nbsp;</span>&nbsp;
<span class="bg_red">&nbsp;18&nbsp;</span>&nbsp;
<span class="bg_red">&nbsp;30&nbsp;</span>&nbsp;
<span class="bg_blue">&nbsp;42&nbsp;</span>


</li>
<li>
<span class="sx">
蛇
<img align="absMiddle" src="./Index/Public/img/88111_files/1_08.png">
[冲 猪]
</span>
<br>
<span class="bg_green">&nbsp;05&nbsp;</span>&nbsp;
<span class="bg_green">&nbsp;17&nbsp;</span>&nbsp;
<span class="bg_red">&nbsp;29&nbsp;</span>&nbsp;
<span class="bg_blue">&nbsp;41&nbsp;</span>


</li>
</ul>
<ul class="sxdz" style="border-top: 1px #ddd dashed;">
<li>
<span class="sx">
马
<img align="absMiddle" src="./Index/Public/img/88111_files/1_09.png">
[冲 鼠]
</span>
<br>
<span class="bg_blue">&nbsp;04&nbsp;</span>&nbsp;
<span class="bg_green">&nbsp;16&nbsp;</span>&nbsp;
<span class="bg_green">&nbsp;28&nbsp;</span>&nbsp;
<span class="bg_red">&nbsp;40&nbsp;</span>

</li>
<li>
<span class="sx">
羊
<img align="absMiddle" src="./Index/Public/img/88111_files/1_10.png">
[冲 牛]
</span>
<br>

<span class="bg_blue">&nbsp;03&nbsp;</span>&nbsp;
<span class="bg_blue">&nbsp;15&nbsp;</span>&nbsp;
<span class="bg_green">&nbsp;27&nbsp;</span>&nbsp;
<span class="bg_green">&nbsp;39&nbsp;</span>


</li>
<li>
<span class="sx">
猴
<img align="absMiddle" src="./Index/Public/img/88111_files/1_11.png">
[冲 虎]
</span>
<br>
<span class="bg_red">&nbsp;02&nbsp;</span>&nbsp;
<span class="bg_blue">&nbsp;14&nbsp;</span>&nbsp;
<span class="bg_blue">&nbsp;26&nbsp;</span>&nbsp;
<span class="bg_green">&nbsp;38&nbsp;</span>&nbsp;


</li>
<li style="width:19%">
<span class="sx">
鸡
<img align="absMiddle" src="./Index/Public/img/88111_files/1_12.png">
[冲 兔]
</span>
<br>
<span class="bg_red">&nbsp;01&nbsp;</span>&nbsp;
<span class="bg_red">&nbsp;13&nbsp;</span>&nbsp;
<span class="bg_blue">&nbsp;25&nbsp;</span>&nbsp;
<span class="bg_blue">&nbsp;37&nbsp;</span>
<span class="bg_green">&nbsp;49&nbsp;</span>

</li>
<li>
<span class="sx">
狗
<img align="absMiddle" src="./Index/Public/img/88111_files/1_03.png" width="52" height="50">
[冲 龙]
</span>
<br>

<span class="bg_red">&nbsp;12&nbsp;</span>&nbsp;
<span class="bg_red">&nbsp;24&nbsp;</span>&nbsp;
<span class="bg_blue">&nbsp;36&nbsp;</span>&nbsp;
<span class="bg_blue">&nbsp;48&nbsp;</span>


</li>
<li>
<span class="sx">
猪
<img align="absMiddle" src="./Index/Public/img/88111_files/1_04.png" width="52" height="50">
[冲 蛇]
</span>
<br>
<span class="bg_green">&nbsp;11&nbsp;</span>&nbsp;
<span class="bg_red">&nbsp;23&nbsp;</span>&nbsp;
<span class="bg_red">&nbsp;35&nbsp;</span>&nbsp;
<span class="bg_blue">&nbsp;47&nbsp;</span>

</li>
</ul>
</div>
</div>
			<!--首页-参与讨论下方广告开始-->
			<?php if(is_array($plug_ad_7)): foreach($plug_ad_7 as $key=>$v): if($v[plug_ad_checkid]==1): ?><!--漂浮对联广告左边-->
			<div class='couplet_ad' id='ad_left'> 
			<a rel="nofollow" href="<?php echo ($v["plug_ad_url"]); ?>" target="_blank"><img  src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" title="<?php echo ($v["plug_ad_name"]); ?>" border=0 ></a><a onClick="ad_left();"><img  src="/Index/Public/img/2.gif" width=110 height=20 /></a>
			</div>

			<!--漂浮对联广告右边-->
			<div class='couplet_ad' id='ad_right'>
			<a rel="nofollow" href="<?php echo ($v["plug_ad_url"]); ?>" target="_blank"><img  src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" title="<?php echo ($v["plug_ad_name"]); ?>" border=0 ></a><a onClick="ad_right();"><img  src="/Index/Public/img/2.gif" width=110 height=20 /></a>
			</div>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-参与讨论下方广告结束-->
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
<script src="<?php echo (JS_URL); ?>menu.js"></script> 
<script src="<?php echo (JS_URL); ?>layer.min.js"></script> 
<script src="<?php echo (JS_URL); ?>kj.js"></script>
<script language="javascript">
function ad_left(){
document.getElementById('ad_left').style.display="none";
}
function ad_right(){
document.getElementById('ad_right').style.display="none";
}

</script>
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