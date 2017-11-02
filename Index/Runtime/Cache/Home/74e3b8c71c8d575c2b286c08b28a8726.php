<?php if (!defined('THINK_PATH')) exit();?><html>
<head lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="一起发开奖现场">
<meta name="format-detection" content="telephone=no,address=no,email=no">
<meta name="wap-font-scale" content="no">
<meta name="aplus-touch" content="1">
<meta name="msapplication-tap-highlight" content="no">
<title>彩色图库 - 马经历史图库这里是香港六合彩图库大全_<?=Cz_cig('site_name')?></title>
<meta name="keywords" content="117kj图库,117kj,马经,曾道人,福利传真,通天报,新报跑狗,香港正版挂牌,雷锋内幕报,平特,六合彩2017,东方心经,六合图库" />
<meta name="description" content="117kj图库：这里是香港首发最新版图库 - 提供随时查看001-150期全年图纸记录,分有彩色图库、黑白图库、精品网址大全三大块。" />
<link href="<?php echo (CSS_URL); ?>m.css" rel="stylesheet" type="text/css" />
</head>
<body onload="checkCookie()">
<div class="spinnerbox" style="display: none;">
	<div class="spinner">
		<div class="bounce1">
		</div>
		<div class="bounce2">
		</div>
		<div class="bounce3">
		</div>
	</div>
</div>
<header>
<div class="go6h_header">
	<div class="go6h_header_ul" style="width:auto;">
		<a href="/m_index.html" >
		<div class="go6h_header_li go6h_header_logo">
			<span></span>
			<i></i>
		</div>
		</a>
	</div>
	<div class="go6h_header_right">
		<a class="link go6h_header_rightUserIcon" href="/sx" >生肖对照表</a>
	</div>
	<div class="clear">
	</div>
</div>
</header>
<script src="/Index/Public/wap/src/jquery.min.js" type="text/javascript"></script>
<style>
@media screen and (min-width: 720px) {
		.go6h_header,.top_bar{
			width: 720px;
			left:50%;
			margin-left: -360px;
		}

		body {
		max-width: 720px;
		margin-left: auto !important;
		margin-right: auto !important;
	}

}
</style>

<table width="100%" border="0">
<tbody>
<tr class="header">
<td colspan="2"><span class="fright"></span><span class="fleft">彩色图库</span></td>
</tr>
</tbody>
</table>
<form action="/caise/index.php" method="get">
<input type="hidden" name="formhash" value="182bebcf">
<div class="search">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<input value="" autocomplete="off" class="input" name="keywords" id="keywords" placeholder="快速找图，输入关键字从请这里搜索">
</td>
<td width="66" align="center" class="scbar_btn_td">
<div><input type="hidden" name="searchsubmit" value="yes"><input type="submit" value="搜索" class="button2" id="scform_submit"></div>
</td>
</tr>
</tbody>
</table>
</div>
</form>	
<div id="mainer">
<div class="d1">
<div class="aa lc1">
<?php if(is_array($list1)): foreach($list1 as $key=>$vo): if(is_array($vo['voo1'])): $i = 0; $__LIST__ = $vo['voo1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub1): $mod = ($i % 2 );++$i; if(is_array($list)): foreach($list as $key=>$vo): if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li><a href="/caise/<?php echo ($sub1["id"]); ?>.html"><?php echo ($sub1["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; ?>	
</div>
</div>
</div>
<div class="blank"></div>
			<?php $config=M('config')->where(array('id'=>1))->find(); ?>


<footer>
 <p class="footer_copy">&copy; <?php echo ($config["site_name"]); ?> 版权所有</p>    
 <p class="footer_copy">香港特别行政区六合彩彩票发行管理中心唯一指定网络信息发布媒体</p>
        <p><?php echo (stripslashes(htmlspecialchars_decode($config["wap_tj"]))); ?></p>
</footer>

<div class="gotop backtop" style="display:none;"></div>
<script type="text/javascript">
//返回顶部
$(document).ready(function(){
	$(window).scroll(function () {
		var scrollHeight = $(document).height();
		var scrollTop = $(window).scrollTop();
		var $windowHeight = $(window).innerHeight();
		scrollTop > 75 ? $(".gotop").fadeIn(200).css("display","block") : $(".gotop").fadeOut(200).css({"background-image":"url(/Index/Public/wap/iconfont-fanhuidingbu_up.png)"});
	});
	$('.backtop').click(function (e) {
		$(".gotop").css({"background-image":"url(/Index/Public/wap/iconfont-fanhuidingbu.png)"});
		e.preventDefault();
		$('html,body').animate({ scrollTop:0});
	});
});
</script>

<div class="top_bar">
  <nav>
    <ul id="top_menu" class="top_menu">
    <li><a href="/m_index.html"><img src="/Index/Public/wap/plugmenu1.png"><label>首页</label></a></li>
	<li><a href="/kj"><img src="/Index/Public/wap/plugmenu2.png"><label>开奖</label></a></li>    
	<li class="home"><a href="/"></a></li>
	<li><a href="/caise"><img src="/Index/Public/wap/plugmenu3.png"><label>图库</label></a></li>
	<li><a href="/zst"><img src="/Index/Public/wap/plugmenu4.png"><label>图表</label></a></li>    
	</ul>
  </nav>
</div>
</body>
</html>