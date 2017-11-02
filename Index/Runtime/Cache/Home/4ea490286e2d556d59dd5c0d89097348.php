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
<title><?=Cz_cig('site_name')?> <?=Cz_cig('site_title')?></title>
<meta name="keywords" content="<?=Cz_cig('site_keywords')?>" />
<meta name="description" content="<?=Cz_cig('site_describe')?>" />
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

<script src="/Index/Public/wap/layer/jquery.cookie.js"  type="text/javascript"></script>
<script src="/Index/Public/wap/layer/layer.js"  type="text/javascript"></script>
<script type="text/javascript" src="/Index/Public/wap/src/slick.min.js"></script>
<script src="/Index/Public/wap/jQuery-jcMarquee.js" type="text/javascript"></script> 
<div class="ng-scope">
	<div class="go6h_webContentColorBg_f6">
		<div class="go6h_navBlock go6h_navOpen">
			<ul class="go6h_ShrinkFrom ">
				<li><a href="/history.html?id=2017" target=""><span class="go6h_navicon go6h_webKIcon01"></span><span class="go6h_navFont">开奖记录</span></a></li>
				<li><a href="/Caise" target=""><span class="go6h_navicon go6h_webKIcon06"></span><span class="go6h_navFont">彩色图库</span></a></li>
				<li><a href="/kj" target=""><span class="go6h_navicon go6h_webKIcon07"></span><span class="go6h_navFont">开奖直播</span></a></li>
				<li><a href="/news" target=""><span class="go6h_navicon go6h_webKIcon08"></span><span class="go6h_navFont">资料大全</span></a></li>
				<li><a href="/lists/m_bbs.html" target=""><span class="go6h_navicon go6h_webKIcon08"></span><span class="go6h_navFont">高手帖子</span></a></li>				
				<li><a href="/zst" target=""><span class="go6h_navicon go6h_webKIcon10"></span><span class="go6h_navFont">走势图</span></a></li>
				<li><a href="/pic"><span class="go6h_navicon go6h_webKIcon06"></span><span class="go6h_navFont">性感美女</span></a></li>
				<li><a href="/rq"><span class="go6h_navicon go6h_webKIcon05"></span><span class="go6h_navFont">开奖日期</span></a></li>
				<li><a href="/sx"><span class="go6h_navicon go6h_webKIcon03"></span><span class="go6h_navFont">生肖属性</span></a></li>
				<li><a href="/lists/m_1.html"><span class="go6h_navicon go6h_webKIcon04"></span><span class="go6h_navFont">香港挂牌</span></a></li>
				<li><a href="/zst"><span class="go6h_navicon go6h_webKIcon11"></span><span class="go6h_navFont">统计图表</span></a></li>
				<li><a href="/gongju"><span class="go6h_navicon go6h_webKIcon09"></span><span class="go6h_navFont">辅助工具</span></a></li>				
			</ul>
		</div>
		
		
		<div class="index-form">
		</div>

		

			<div class="go6h_openBonus">			
				<div class="go6h_resultTitle">
					<span class="go6h_resultTitleCenter">
					<span class="go6h_resultTitle_leftFont01">最新开奖：</span>
					<span class="go6h_resultTitle_leftFont02">
					<span>2017年 第</span>
					<i class="go6h_orangeFont" id="q">000</i><span>  期</span></span><a class="go6h_resultTitle_btn" href="/kj"></a></span>
				</div>
				<div class="go6h_resultBall_List">
					<div class="go6h_num">
						<span class="" id="w1"><p id="m1"></p></span><span class="go6h_sqBlock" id="m1x"></span>
					</div>
					<div class="go6h_num">
						<span class="" id="w2"><p id="m2"></p></span><span class="go6h_sqBlock" id="m2x"></span>
					</div>
					<div class="go6h_num">
						<span class="" id="w3"><p id="m3"></p></span><span class="go6h_sqBlock" id="m3x"></span>
					</div>
					<div class="go6h_num">
						<span class="" id="w4"><p id="m4"></p></span><span class="go6h_sqBlock" id="m4x"></span>
					</div>
					<div class="go6h_num">
						<span class="" id="w5"><p id="m5"></p></span><span class="go6h_sqBlock" id="m5x"></span>
					</div>
					<div class="go6h_num">
						<span class="" id="w6"><p id="m6"></p></span><span class="go6h_sqBlock" id="m6x"></span>
					</div>
					<div class="go6h_add">
					</div>
					<div class="go6h_num go6h_delMargin">
						<span class="" id="w7"><p id="s1"></p></span><span class="go6h_sqBlock" id="s1x"></span>
					</div>
					<a class="go6h_rightJtou" href="/history.html?id=2017"></a>
				</div>
			</div>
			<div class="go6h_nextOpenBonus">
				<span class="go6h_nextFont"><span>下期开奖时间：</span><i class="go6h_nextRedFont">2017年<span id="nextMonth"></span>月<span id="nextDay"></span>日 <span id="nextQiShu"></span>期</i></span>
			</div>


			<!--首页-广告开始-->
			<?php if(is_array($plug_ad_19)): foreach($plug_ad_19 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="100%" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-结束-->

		<div class="go6h_zjTuiJianBlock">
			<div class="go6h_zjTuiJianBlock_title">
				<span class="go6h_selectedPosts_titleLeft">平特资料</span><a class="go6h_moreBtn" href="/" >更多</a>
			</div>
<div class="yy_page_mm">	
		<iframe src="/html/m_pt_sy.html" width="100%" frameborder="0" marginwidth="0" marginheight="0"></iframe>		
		<iframe src="/html/m_liuxiao_sy.html" width="100%" frameborder="0" marginwidth="0" marginheight="0"></iframe>
		<iframe src="/html/m_tms_sy.html" width="100%"  frameborder="0" marginwidth="0" marginheight="0"></iframe>		
		<iframe src="/html/m_bizhong_sy.html" width="100%" height="541" frameborder="0" marginwidth="0" marginheight="0"></iframe>			
</div>

</div>
<iframe src="/html/bs1.html" width="100%" height="40" frameborder="0" marginwidth="0" marginheight="0"></iframe>			
	<link rel="stylesheet"  href="/Index/Public/wap/src/css/lightslider.css"/>
			
		<div class="go6h_6hackPhoto">
			<div class="go6h_6hackPhoto_title">
				<span class="go6h_6hackPhoto_title_left">六合图库</span><a class="go6h_moreBtn" href="/Caise">更多</a>
			</div>	
			<div class="go6h_6hackphotoList">
				<div class="go6h_6hackphotoListScroll">
					<ul id="content-slider"  style="width: 770px; transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1); transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);">
						<li><a href="/caise/5279.html"><img src="/Index/Public/wap/tkfm/181396384.jpg"></a></li>
						<li><a href="/caise/5205.html"><img src="/Index/Public/wap/tkfm/155991098.jpg"></a></li>
						<li><a href="/caise/4789.html"><img src="/Index/Public/wap/tkfm/184640033.jpg"></a></li>
						<li><a href="/caise/5738.html"><img src="/Index/Public/wap/tkfm/150210815.jpg"></a></li>
						<li><a href="/caise/5106.html"><img src="/Index/Public/wap/tkfm/103028853.jpg"></a></li>
						<li><a href="/caise/5065.html"><img src="/Index/Public/wap/tkfm/104828434.jpg"></a></li>
						<li><a href="/caise/5128.html"><img src="/Index/Public/wap/tkfm/11193620.jpg"></a></li>
						<li><a href="/caise/5093.html"><img src="/Index/Public/wap/tkfm/163028334.jpg"></a></li>
						<li><a href="/caise/5228.html"><img src="/Index/Public/wap/tkfm/173066692.jpg"></a></li>
						<li><a href="/caise/5109.html"><img src="/Index/Public/wap/tkfm/104545317.jpg"></a></li>
					</ul>
				</div>
			</div>
			<div class="go6h_6hackFontList">
<table width="100%" border="0">
 <tr>
  <td width="50%" class="fleft">
   <table width="100%" border="0">
<tr class="header2">
<td><span class="fleft">马经系列</span></td>
</tr>
<tr>
 <td width="100%">
  <ul class="list2">
                    <li><a href="/caise/4742.html">伯乐相马经（荐）</a></li>
                    <li><a href="/caise/4743.html">马经精版料（荐）</a></li>
                    <li><a href="/caise/4744.html">马经救世报（荐）</a></li>
                    <li><a href="/caise/4745.html">香港马经（新版）</a></li>
                    <li><a href="/caise/4746.html">马经平特图（荐）</a></li>
                    <li><a href="/caise/4754.html">马经发财报（荐）</a></li>
                    <li><a href="/caise/4755.html">马经王牌料（荐）</a></li>
                    <li><a href="/caise/4756.html">马经玄机图（荐）</a></li>
                    <li><a href="/caise/4757.html">马经龙头报（荐）</a></li>
                    <li><a href="/caise/5097.html">另版凤凰马经</a></li>
   </ul>
   <div class="clear"></div>
 </td>
</tr>
</table>
</td>
<td width="50%" class="fright">
   <table width="100%" border="0">
<tr class="header2">
<td><span class="fleft">挂牌系列</span></td>
</tr>
<tr>
 <td width="100%">
  <ul class="list2">
                    <li><a href="/caise/4763.html">九龙挂牌解特码A</a></li>
                    <li><a href="/caise/4764.html">九龙挂牌解特码B</a></li>
                    <li><a href="/caise/4776.html">香港正版挂牌</a></li>
                    <li><a href="/caise/4787.html">正版香港数码挂牌</a></li>
                    <li><a href="/caise/5040.html">手写马会挂牌</a></li>
                    <li><a href="/caise/5075.html">香港挂牌宝典</a></li>
                    <li><a href="/caise/5207.html">马经挂牌系列A(新图)</a></li>
                    <li><a href="/caise/5208.html">马经挂牌系列B(新图)</a></li>
                    <li><a href="/caise/5209.html">马经挂牌系列C(新图)</a></li>
                    <li><a href="/caise/5210.html">马经挂牌系列D(新图)</a></li>
   </ul>
   <div class="clear"></div>
   </td>
</tr>
</table>
</td>
</tr>
</table>

<table width="100%" border="0">
 <tr>
  <td width="50%" class="fleft">
   <table width="100%" border="0">
<tr class="header2">
<td><span class="fleft">管家婆系列</span></td>
</tr>
<tr>
 <td width="100%">
  <ul class="list2">
                    <li><a href="/caise/4783.html"><span class="gjpxl"></span>管家婆新传密</a></li>
                    <li><a href="/caise/4784.html"><span class="gjpxl"></span>管家婆财经版</a></li>
                    <li><a href="/caise/4785.html"><span class="gjpxl"></span>管家婆</a></li>
                    <li><a href="/caise/4993.html"><span class="gjpxl"></span>(新版)管家婆</a></li>
                    <li><a href="/caise/5093.html"><span class="gjpxl"></span>管家婆抓特码A</a></li>
                    <li><a href="/caise/5094.html"><span class="gjpxl"></span>管家婆抓特码B</a></li>
                    <li><a href="/caise/5106.html"><span class="gjpxl"></span>管家婆心水报A</a></li>
                    <li><a href="/caise/5107.html"><span class="gjpxl"></span>管家婆心水报B</a></li>
                    <li><a href="/caise/5440.html"><span class="gjpxl"></span>新一代管家婆</a></li>
                    <li><a href="/caise/5688.html"><span class="gjpxl"></span>管家婆内部透密-新图</a></li>
   </ul>
   <div class="clear"></div>
 </td>
</tr>
</table>
</td>
<td width="50%" class="fright">
   <table width="100%" border="0">
<tr class="header2">
<td><span class="fleft">平特系列</span></td>
</tr>
<tr>
 <td width="100%">
  <ul class="list2">
                    <li><a href="/caise/15811.html"><span class="ptxl"></span>挂牌平特(新图)</a></li>
                    <li><a href="/caise/4789.html"><span class="ptxl"></span>一肖平特图</a></li>
                    <li><a href="/caise/4749.html"><span class="ptxl"></span>平特内幕精选（荐）</a></li>
                    <li><a href="/caise/4748.html"><span class="ptxl"></span>平特心水报（荐）</a></li>
                    <li><a href="/caise/4758.html"><span class="ptxl"></span>金钥匙平特报</a></li>
                    <li><a href="/caise/4752.html"><span class="ptxl"></span>平特藏宝图（荐）</a></li>
                    <li><a href="/caise/4747.html"><span class="ptxl"></span>平特精版料（荐）</a></li>
                    <li><a href="/caise/4746.html"><span class="ptxl"></span>马经平特图（荐）</a></li>
                    <li><a href="/caise/4753.html"><span class="ptxl"></span>宝宝平特图（热）</a></li>
                    <li><a href="/caise/4751.html"><span class="ptxl"></span>平特乾坤卦（荐）</a></li>
   </ul>
   <div class="clear"></div>
   </td>
</tr>
</table>
</td>
</tr>
</table>
			</div>
		</div>			
			
		<div class="go6h_zjTuiJianBlock">
			<div class="go6h_zjTuiJianBlock_title">
				<span class="go6h_selectedPosts_titleLeft">高手帖</span><a class="go6h_moreBtn" href="/lists/m_bbs.html">更多</a>
			</div>
			<div class="go6h_zjTuiJianList">
				<ul>
				<?php if(is_array($list)): foreach($list as $key=>$vo): ?><li><span class="leftContent"><a class="wenzhang" href="/bbs/m_<?php echo ($vo["id"]); ?>.html"><?php echo ($vo["title"]); ?></a></span></li><?php endforeach; endif; ?>					
				</ul>
			</div>
		</div>
		
		<div class="go6h_ymBlock">
			<div class="go6h_ymBlock_title">
				<span class="go6h_6hackPhoto_title_left">性感美女</span><a class="go6h_moreBtn" href="/pic">更多</a>
			</div>

			<div class="go6h_ymBlock_photoList">
				<ul>
<?php if(is_array($list1)): foreach($list1 as $key=>$vo): if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li><span class="imgBg"><i></i><a href="/pic/<?php echo ($sub["id"]); ?>.html"><img src="<?php echo ($sub["picurl"]); ?>" height="280"></a></span><span class="imgFont"><a href="/pic/<?php echo ($sub["id"]); ?>.html"><?php echo ($sub["title"]); ?></a></span></li><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; ?>	
				</ul>
			</div>	
		</div>				
	

		<div class="go6h_zjTuiJianBlock">
			<div class="go6h_zjTuiJianBlock_title">
				<span class="go6h_selectedPosts_titleLeft">免费资料大全</span><a class="go6h_moreBtn" href="/news" >更多</a>
			</div>		
       <div class="allzl-list">		  
<?php if(is_array($list3)): foreach($list3 as $key=>$vo): if(is_array($vo['voo3'])): $i = 0; $__LIST__ = $vo['voo3'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub3): $mod = ($i % 2 );++$i; if(is_array($list4)): foreach($list4 as $key=>$vo): if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li><a href="/lists/m_<?php echo ($sub["id"]); ?>.html"><?php echo ($sub3["title"]); ?>期:<<?php echo ($sub["title"]); ?>></a></li><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; ?>		
    </div>
<iframe src="/html/bs2.html" width="100%" height="10" frameborder="0" marginwidth="0" marginheight="0"></iframe>			
		</div>
		
		
			<?php if(is_array($zlkg10)): foreach($zlkg10 as $key=>$v): if($v[plug_zlkg_adtypeid]==1): ?><div class="go6h_selectedPosts">
			<div class="go6h_selectedPosts_title">
				<span class="go6h_zjTuiJianBlock_titleLeft">欢迎您参与讨论</span><a class="go6h_moreBtn">更多</a>
			</div>
			<?php $config=M('config')->where(array('id'=>1))->find(); ?>
			<?php echo (htmlspecialchars_decode($config["pl_index"])); ?>
		</div><?php endif; endforeach; endif; ?>	
	</div>


</div>
<div id="tmpinfo" style="display:none;"></div>


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

<script>
	$('.showNav').on('click',function(){
		$('.top_bar').toggleClass('show')
	})

</script>
<script language="javascript"> 

function reload(secs)
{  
var hand_reload=getCookie('hand_reload');
var ischecked=document.getElementById("reloadCheckbox");
if(!ischecked.checked||hand_reload=="yes"){
ischecked.checked=false;
var view=document.getElementById("remainingTime");
view.innerHTML="当前处于手动刷新模式";
return
}
var view=document.getElementById("remainingTime");
view.innerHTML=secs+"秒后刷新页面";
if(secs>0){
secs=secs-1;
setTimeout("reload("+secs+")",1000);  
}else{
location.reload();
}
}

function setCookie(c_name,value,expiredays)
{
var exdate=new Date()
exdate.setDate(exdate.getDate()+expiredays)
document.cookie=c_name+ "=" +escape(value)+
((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
}

function getCookie(c_name)
{
if(document.cookie.length>0)
{
c_start=document.cookie.indexOf(c_name + "=")
if (c_start!=-1)
{ 
c_start=c_start + c_name.length+1 
c_end=document.cookie.indexOf(";",c_start)
if (c_end==-1) c_end=document.cookie.length
return unescape(document.cookie.substring(c_start,c_end))
}
}
return ""
}

function checkCookie()
{
secs=getCookie('secs')
if(secs!=null && secs!="")
{ 
document.getElementById("reloadTime").value=secs;
reload(secs);
}
}

function setTime()
{   setCookie('hand_reload','no',365);
secs=document.getElementById("reloadTime").value;
setCookie('secs',secs,365);
location.reload();
}

function changeType(){
var ischecked=document.getElementById("reloadCheckbox")
if(ischecked.checked){
setCookie('hand_reload','no',365);
location.reload();
}
}
function reload_hand(){
setCookie('hand_reload','yes',365);
location.reload();	
}
</script>

<script> 
$(function(){ 
    $('#Marquee_x').jcMarquee({ 'marquee':'x','margin_right':'10px','speed':20 }); 
}); 
</script> 	
	<script src="/Index/Public/wap/src/js/lightslider.js"></script> 
    <script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });

		});
    </script> 

			<?php if(is_array($kjfs)): foreach($kjfs as $key=>$v): if($v[plug_kj_adtypeid]==1): ?><script src="/Index/Public/JavaScript/bmjs-wap.js" type="text/javascript"></script>	
			<?php elseif($v[plug_kj_adtypeid]==2): ?>
			<script src="/Index/Public/JavaScript/bmjs-wap00.js" type="text/javascript"></script><?php endif; endforeach; endif; ?>

			

	
			<!--首页-弹窗开始-->
			<?php if(is_array($plug_ad_25)): foreach($plug_ad_25 as $key=>$v): if($v[plug_ad_checkid]==1): elseif($v[plug_ad_checkid]==2): ?>
			
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--首页-弹窗结束-->	
	
    <script>
      	 
      
      
	 $(function(){
		 if($.cookie('layer')==undefined){
                $('.shade').show();
                $('.dialog').show();
		 
             $.cookie('layer', '11', { expires: 0.02 }); 
		 }
		  
		  $('.shade').on('click',function(){
                $('.shade').hide();
                $('.dialog').slideUp();
          })
          $('.close').on('click',function(){
                $('.shade').hide();
                $('.dialog').slideUp();
          })
		  
	  });
	  
	  function  showsearch(){
		$('.index-form').toggle();
	  }
	  
	  
	  
		  
    </script>
		
</body>
</html>