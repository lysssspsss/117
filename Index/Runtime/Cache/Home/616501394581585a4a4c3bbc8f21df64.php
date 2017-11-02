<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;" name="viewport" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>1976年-<?php echo ($dates); ?>年开奖记录[手机版]- 请选择年份</title>
<meta name="keywords" content="手机报码,手机报码网,手机开奖网址,手机开奖结果,记录查询	">
<meta name="description" content="第一时间更新开奖结果,不用电脑上网也可以用手机查看最新开奖结果,查询全年开奖记录">
</head>
<body>
<style> 
BODY {
PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; LIST-STYLE-IMAGE: none; PADDING-TOP: 0px
}
UL {
PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; LIST-STYLE-IMAGE: none; PADDING-TOP: 0px
}
h1 {
PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; LIST-STYLE-IMAGE: none; PADDING-TOP: 0px
}
LI {
PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; LIST-STYLE-IMAGE: none; PADDING-TOP: 0px
}
A {
color:#0000FF;TEXT-DECORATION: none
}
A:hover {
COLOR: #FF0000
}
h1 {
PADDING-BOTTOM: 0px; LINE-HEIGHT: 35px; MARGIN-TOP: -1px; PADDING-LEFT: 3px; PADDING-RIGHT: 3px; BACKGROUND: #FE9F01; HEIGHT: 35px; COLOR: #fff; PADDING-TOP: 0px; font-size:14px
}
h1 span{float:right}
.list LI A {
DISPLAY: block
}
.list LI {
BORDER-BOTTOM: #e2e4e8 1px dotted; TEXT-ALIGN: center; LINE-HEIGHT: 33px; FLOAT: left; HEIGHT: 33px; OVERFLOW: hidden; BORDER-RIGHT: #e2e4e8 1px dotted; -webkit-box-sizing: border-box
}
.list LI {
WIDTH: 20%
}
.di{padding:3px 0; line-height:1.5em; color:#999; font-family:"宋体"; background:#fbfbfb; border-top:1px solid #efefef; margin-top:5px}
.tishi{color:#999; font-family:"宋体"; padding:3px}
</style>
<link href="<?php echo (CSS_URL); ?>m.css" rel="stylesheet" type="text/css" />
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

<h1>请选择年份</h1>
<ul class="list clearfix">
<?php for($i =1976; $i <= $dates; $i++) { ?>
<li><a href="//history.html?id=<?=$i?>"><?=$i?>年</a></li>
<?php } ?>

</ul>
<div style="clear:both"></div>
<br><br><br><br><br><br><br><br><br>
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