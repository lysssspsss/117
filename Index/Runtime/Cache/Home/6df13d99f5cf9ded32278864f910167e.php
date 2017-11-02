<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="一起发开奖现场">
<meta name="format-detection" content="telephone=no,address=no,email=no">
<meta name="wap-font-scale" content="no">
<meta name="aplus-touch" content="1">
<meta name="msapplication-tap-highlight" content="no">
<TITLE>手机看开奖结果 － 六合开奖记录直播</TITLE>
<meta name="keywords" content="手机报码,手机报码网,手机开奖网址">
<meta name="description" content="第一时间更新开奖结果,不用电脑上网也可以用手机查看最新开奖结果">
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

<div class="allzl-list">
<?php if(is_array($list)): foreach($list as $key=>$vo): if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li><a href="/lists/m_<?php echo ($sub["id"]); ?>.html"><?php echo ($sub["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; ?>
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