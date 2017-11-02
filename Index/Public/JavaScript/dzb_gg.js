var da000JsIdObj = document.getElementById("da000JsId");
var da000JsIdObjSrc = da000JsIdObj.src;
var da000JsIdObjSrcs = da000JsIdObjSrc.split("?");
var da000JsIdObjSrcParameters = da000JsIdObjSrcs[1].split("&");
var da000JsIdObjSrcIntr = da000JsIdObjSrcParameters[0];
var da000JsIdObjSrcQq = da000JsIdObjSrcParameters[1];
var da000JsIdObjSrcHostId = da000JsIdObjSrcParameters[2];
var da000JsIdObjSrcQqText = "版主监督QQ";
if(typeof(da000JsIdObjSrcQqTxt) != "undefined"){	
da000JsIdObjSrcQqText = da000JsIdObjSrcQqTxt;
}

(function($){
$.fn.TopWord = function(sUrl){
var sCss = ("<style>body{margin:0; border:0; padding:0;}")+
(".top_tui{height: 35px;background: #fbffe5;border-bottom: 1px solid #ddd;}")+
(".top_tui .ts_dzb{position: relative;width: 1000px;margin: 0 auto;}")+
(".top_tui .ts_dzb .icon {display: inline-block;width: 18px;height: 18px;top: 4px;margin: 0 4px 0 0;position: relative;}")+
(".top_tui .ts_dzb .btn {display: inline-block;width: 80px;height: 24px;top: 6px;position: relative;left: 10px;cursor: pointer;}")+
(".top_tui .ts_dzb a {font-size: 13px;position: relative;top: 0;color: #333;cursor: pointer;height: 20px;line-height: 20px;display: inline-block;text-decoration: underline;}")+
(".top_tui .ts_dzb a:hover{ text-decoration:underline; color:#FF0000}</style>");

var sHtml =('<div class="top_tui"><div class="ts_dzb">') +
('<span class="icon" style="background:url(/Public/gg/anquanbz.jpg) no-repeat 0 0"></span>')+
('<a href="'+sUrl+'" target="_blank" class="download">安全提示：当地庄家跑路、取款慢、倍率低...<font color="#FF0000">《澳门大资本》取款1000万30秒到帐，赌王何鸿燊100亿造，特码47.2倍+0.4%返水。</font></a>')+
('<a href="'+sUrl+'" target="_blank" title="点击加入" class="g-ib g_icon btn download" style="background:url(/Public/gg/jiaru_btn.png) no-repeat"></a>')+
('</div></div>');	
$("body").prepend(sCss+sHtml);
}
})(jQuery);
//对联
(function($){
$.fn.ADDL = function(options,ready){
var defaults = {
LR: "right",    
LRrange: 20,
TB: "top",
TBrange: 120
};	
options = $.extend(defaults, options);
if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){
return;
}
if(!ready){
$("#"+SetHtml()).ADDL(options,true);
return;
}	
// Our plugin implementation code goes here.
this.each(function(){ 
//实现代码
new Do().Start(this,options);

});

function Do(){
this.Start = function(oObj,Options){
var iTimeID = 0; 
SetStyle(oObj);
iTimeID = SetTime(oObj,0);
$(oObj).bind("mouseover",function(){
SetTime(oObj,iTimeID);
});
$(oObj).bind("mouseout",function(){
iTimeID = SetTime(oObj,0);
});
$(oObj).find("ul>li>a").bind("mouseover",function(){
$(oObj).find("ul>li>a").removeClass("Hover");
$(this).addClass("Hover");
});
if (!+[1,]){
if(navigator.appVersion .split(";")[1].replace(/[ ]/g,"")=="MSIE8.0" && document.documentMode==8) return;
$(oObj).css("position","absolute");
$(window).scroll(function(){
var oId = "#"+$(oObj).attr("id");
if(Options.TB.toLowerCase() == "top"){
$(oId).css("top", (document.documentElement.scrollTop || document.body.scrollTop) + Options.TBrange + "px");
}else{
$(oId).css("top", (document.documentElement.scrollTop || document.body.scrollTop) + ((document.documentElement.clientHeight ||document.body.clientHeight) - $(oObj).height() - Options.TBrange) + "px");
}
})
}
}
}		

function SetTime(oObj,startTime){			
var iIndex=0;
var oA = $(oObj).find("ul>li>a");
if(startTime==0){
return window.setInterval(function(){				
oA.removeClass("Hover");
oA.eq(iIndex).addClass("Hover");
iIndex ++;
if(iIndex >= 4) iIndex=0;					
},1000);
}else{				
window.clearInterval(startTime);
}
}

function SetStyle(oObj){
var sID = "#"+ $(oObj).attr("id");		
var sCss = (sID + "{width:120px; position:fixed; z-index:100;"+ options.LR + ":" + options.LRrange + "px;" + options.TB + ":" + options.TBrange + "px;}")+
(sID + " .divbox{border:1px #000000 solid; font-size:12px;}")+
(sID + " ul,"+ sID +" li{margin:0; padding:0; border:0; list-style:none;}")+
(sID + " li{padding:3px; background-color:#035303; color:#FFFFFF; height:20px; line-height:20px; border-top:#999 solid 1px;}")+
(sID + " li span{display:block; height:20px; background-color:#F90; position:absolute; padding:0px 8px; font-weight:bold;}")+
(sID + " li a{display:block; height:20px; line-height:20px; color:#FFF; text-decoration:none; text-align:center;}")+
(sID + " li:first-child{border-top:none;}")+
(sID + " .DL_tu{background-color:#035303; display:block; height:125px;border-top:#999 solid 1px;text-align:center}")+
//IE6、7
//("*html "+sID + " li{border-top:expression(this.previousSibling==null?'none':':#999 solid 1px')}")+
(sID + " .Hover{background-color:#FFF; color:#000;}")+
(sID + " .close{padding:3px;color:red; font-size:12px;text-align:right;cursor:pointer;}")+
(sID + " .close a:hover{ color:red}");


oHead = document.getElementsByTagName("head")[0];
sStyle = document.createElement("style"); 
sStyle.type = "text/css";
if(sStyle.styleSheet){
sStyle.styleSheet.cssText = sCss;
}else{
sStyle.appendChild(document.createTextNode(sCss));
}
oHead.appendChild(sStyle);
}

function SetHtml(){
var sID = 'ADDL-div' + Math.round(Math.random() * 9999) ;
$("body").append(
);
return sID;
}

}	
})(jQuery);


//顶部下拉
function AD_PUBU(){
var bPicCls = true;
if(typeof jQuery != "undefined"){		
Start();
}else{		
var oScript = document.createElement("script"); 
oScript.type = "text/javascript"; 
if (+[1,]){
oScript.async = true;
oScript.onload = function(){new AD_PUBU();}
};
oScript.src = "http://libs.useso.com/js/jquery/1.8.3/jquery.min.js";		
var oHead = document.getElementsByTagName("head")[0];
oHead.appendChild(oScript);
if (!+[1,]){new AD_PUBU();};
};

function Start(){
SetStyle();
SetHtml();
//var iWfLeft = ($(document).width() - 1920 )/2;
//$(".AD_SS>.Waterfall").css("left",iWfLeft);
$(".AD_SS .Down").bind("click",function(e){
e.preventDefault();
e.stopPropagation();
$(".AD_SS .Box").hide();
$(".AD_SS .Waterfall").slideDown(1000);
});

$(".AD_SS .Waterfall,.AD_SS .Box,.AD_SS .Waterfall .Jump").bind("click",function(e){
e.preventDefault();
e.stopPropagation();
window.open($(".AD_SS .Box .SignA a").attr("href"),"_blank");
});			
$(".AD_SS .Close").bind("click",function(e){
e.preventDefault();
e.stopPropagation();
$(".AD_SS>.Waterfall").slideUp(1000,function(){
$(".AD_SS .Box").show();
});
});
//SetTime();			

var H = new Date().getHours().toString();
var M = new Date().getMinutes().toString();
var D = new Date().getDay().toString();
var Week = [2,4,6];
var Is246 = false;
for(var i=0;i<Week.length;i++){
if(D == Week[i]) Is246 = true;
}
if(Is246 && Math.round(H+M)>2125 && Math.round(H+M)<2145){ 
$(".AD_SS .Waterfall").hide();
$(".AD_SS .Box").show();
return;
}
$(".AD_SS .Waterfall").slideDown(1000);			

};

function SetTime(){
window.setInterval(function(){
$(".AD_SS .Tvpic").fadeToggle(200,function(){
PicShow();
});	
$(".AD_SS .Tvpic").fadeToggle(200);		
},1000*3);
};

function PicShow(){
$(".AD_SS .Sign").fadeToggle();
if(bPicCls){
bPicCls=false;				
$(".AD_SS .Tvpic").removeClass("Tvpic_01").addClass("Tvpic_02");
}else{
bPicCls=true;
$(".AD_SS .Tvpic").removeClass("Tvpic_02").addClass("Tvpic_01");			
};
};

function SetStyle(){
var sCss = ("<style>body{margin:0; border:0; padding:0;}")+
(".top_tui{height: 35px;background: #fbffe5;border-bottom: 1px solid #ddd;text-align:center;}")+
(".top_tui .ts_dzb{position: relative;width: 1000px;margin: 0 auto;}")+
(".top_tui .ts_dzb .icon {display: inline-block;width: 18px;height: 18px;top: 4px;margin: 0 4px 0 0;position: relative;}")+
(".top_tui .ts_dzb .btn {display: inline-block;width: 80px;height: 24px;top: 6px;position: relative;left: 10px;cursor: pointer;}")+
(".top_tui .ts_dzb a {font-size: 13px;position: relative;top: 0;color: #333;cursor: pointer;height: 20px;line-height: 20px;display: inline-block;text-decoration: underline;}")+
(".top_tui .ts_dzb a:hover{ text-decoration:underline; color:#FF0000}")+
(".AD_SS{}")+
(".AD_SS .Tui{height:300px;display:none;}")+
(".AD_SS .Box{width:1000px;height:80px; background:url('public/gg/common.jpg') no-repeat; display:none; position:relative;cursor:pointer;margin:0 auto;vertical-align:middle;}")+
(".AD_SS .Box:hover{width:1000px;height:80px; background:url('public/gg/shangyi.jpg') no-repeat; display:none; position:relative;cursor:pointer;margin:0 auto;vertical-align:middle;}")+
(".AD_SS .Waterfall{min-width:1000px;height:300px; background:url('public/gg/02.jpg') center no-repeat; display:none; overflow:hidden;cursor:pointer;}")+
(".AD_SS .PW{width:1000px;margin:0 auto;position:relative;text-align:left;}")+ 

(".AD_SS .Tvpic_01{background-position:0 0;}")+
(".AD_SS .Tvpic_02{background-position:0px -204px;}")+
(".AD_SS .jiaru{position:absolute; width:315px; height:98px; top:219px; left:187px; font-size:12px; font-weight:bold; color:#FFF;}")+
(".AD_SS .Jump{background:url('public/gg/02-nav.png') no-repeat ;position:absolute; width:315px; height:96px; top:208px; left:637px;}")+
(".AD_SS .Jump:hover{background:url('public/gg/02-nav.png') no-repeat 0px -96px;}")+
(".AD_SS .Jump a{display:block; width:100%; height:100%; text-decoration:none;}")+


(".AD_SS .Close{position:absolute;width:70px; height:70px; overflow:hidden; background:url('public/gg/haobao_bjl.png') no-repeat -245px -212px; cursor:pointer; top:5px; left:1040px;}")+
(".AD_SS .Close:hover{background:url('public/gg/haobao_bjl.png') no-repeat -245px -312px;}")+
(".AD_SS .SignA{width:208px; height:68px;position:relative; left:290px; z-index:2;}")+
(".AD_SS .SignA a{display:block; width:208px; height:68px; text-decoration:none;}")+

(".AD_SS .Down{width:70px; height:70px; overflow:hidden; background:url('public/gg/haobao_bjl.png') 0px -212px no-repeat; cursor:pointer; left:1024px; position:absolute;}")+
(".AD_SS .Down:hover{ background:url('public/gg/haobao_bjl.png') 0px -312px no-repeat;}")+
(".AD_SS .rap_jcrk {width: 100%; height: 52px; background: url(public/gg/jcrkPic.png) top center no-repeat #333333;}")+
(".AD_SS .jcrk { width: 1000px; height: 52px; margin: 0 auto;}")+
(".AD_SS .jcrk ul {width: 1000px; height: 52px; position: relative; list-style: none;border: 0;margin: 0; overflow:visible;}")+
(".AD_SS .jcrk ul li {display:block; float:left;}")+
(".AD_SS .jcrk ul li a{display:inline-block;_display:inline;_zoom:1; overflow: hidden; text-indent: -9999px; overflow: hidden; position:absolute; z-index:10;}")+
(".AD_SS .jcrk ul li a.a01_jcrk { width: 124px; height: 52px; left: 25px; bottom: 0;}")+
(".AD_SS .jcrk ul li a.a01_jcrk:hover { height: 119px; background: url(public/gg/jcrkPic.png) -141px bottom no-repeat;}")+
(".AD_SS .jcrk ul li a.a02_jcrk { width: 113px; height: 52px; left: 149px; bottom: 0;}")+
(".AD_SS .jcrk ul li a.a02_jcrk:hover { height: 119px; background: url(public/gg/jcrkPic.png) -265px bottom no-repeat;}")+
(".AD_SS .jcrk ul li a.a03_jcrk { width: 113px; height: 52px; left: 262px; bottom: 0;}")+
(".AD_SS .jcrk ul li a.a03_jcrk:hover { height: 119px; background: url(public/gg/jcrkPic.png) -378px bottom no-repeat;}")+
(".AD_SS .jcrk ul li a.a04_jcrk { width: 161px; height: 52px; left:635px; bottom: 0;}")+
(".AD_SS .jcrk ul li a.a04_jcrk:hover { height: 119px; background: url(public/gg/jcrkPic.png) -751px bottom no-repeat;}")+
(".AD_SS .jcrk ul li a.a05_jcrk { width: 180px; height: 52px; left: 796px; bottom: 0;}")+
(".AD_SS .jcrk ul li a.a05_jcrk:hover { height: 119px; background: url(public/gg/jcrkPic.png) -912px bottom no-repeat;}")+
(".AD_SS .jcrk ul li a.a06_jcrk { width: 270px; height: 52px; left: 375px; bottom: 0;}")+
(".AD_SS .jcrk ul li a.a06_jcrk:hover { height: 119px; background: url(public/gg/jcrkPic.png) -491px bottom no-repeat;}</style>");


$("body").append(sCss);
};


function SetHtml(){
$("body").prepend(
'<div class="top_tui"><div class="ts_dzb">' +
'<span class="icon" style="background:url(/Public/gg/anquanbz.jpg) no-repeat 0 0"></span>'+
//顶部文字提示广告开始
'<a href="http://bbs.117kj.com/dome" target="_blank" class="download">安全提示：当地庄家跑路、取款慢、倍率低...<font color="#FF0000">《澳门大资本》取款1000万30秒到帐，赌王何鸿燊100亿造，特码47.2倍+0.4%返水。</font></a>'+
'<a href="http://bbs.117kj.com/dome" target="_blank" title="点击加入" class="g-ib g_icon btn download" style="background:url(/Public/gg/jiaru_btn.png) no-repeat"></a>'+
//顶部文字提示广告结束
'</div></div>'+

'<div class="AD_SS">' +
'<div class="Waterfall">'+
'<center><div class="PW">'+
'<div class="Close"></div>'+
'<div class="Tvpic Tvpic_01"></div>'+
'<div class="jiaru">已有<label style="color:#FFFF00" name="hasRegisterCount">35680</label>人加入</div>'+
'<div class="Jump"><a href="javascript:void(0);">　</a></div>'+
'<div class="Cm"></div>'+
'<div class="Zr"></div>'+
'</div></center>'+
'</div>'+
'<center><div class="Box">'+
'<div class="Down"></div>'+
'<div class="SignA"><a href="http://bbs.117kj.com/dome" target="_blank"><span>　</span></a></div>'+
'<div class="Sign"></div>'+
'</div></center>'+
'<div class="rap_jcrk">'+
'<center><div class="jcrk">'+
'<ul>'+
'<li><a class="a01_jcrk" href="http://bbs.117kj.com/dome" target="_blank" >注册教程</a></li>'+
'<li><a class="a02_jcrk" href="http://bbs.117kj.com/dome" target="_blank">充值教程</a></li>'+
'<li><a class="a03_jcrk" href="http://bbs.117kj.com/dome" target="_blank">取款教程</a></li>'+
'<li><a class="a06_jcrk" href="http://bbs.117kj.com/dome" target="_blank">大资本网投教程</a></li>'+
'<li><a class="a04_jcrk" href="http://bbs.117kj.com/dome" target="_blank">六合彩投注</a></li>'+
'<li><a class="a05_jcrk" href="http://bbs.117kj.com/dome" target="_blank">百家乐投注</a></li>'+
'</ul>'+
'</div></center>'+
'</div>'+
//顶部导航栏开始
'<div style="background:#000000; line-height:35px; text-align:center; color:#FFFF00"><font size="5" face="黑体" color="#FF0000">【www.117kj.com】通知：</font><font size="4" face="黑体" color="#FFFF00">唯一指定QQ：4501870</font></div>'+
//顶部导航栏结束
'</div>'
);
};

};


//四框担保
//$(".div").html(DBSK());
function DBSK(){
var sHtml = "";
sHtml+=("<style>");
sHtml+=("*{ margin:0; padding:0;}");
sHtml+=("ul{ list-style:none;}");
sHtml+=(".da001header {height: 50px; line-height: 50px; overflow: hidden; background: url(public/gg/header.png) 0 0 repeat-x #064903;font-family: \"Microsoft YaHei\", Arial,\"宋体\"; color:#FFFFFF}");
sHtml+=(".da001header .da0001h1 { height: 50px; line-height: 50px; padding-left: 50px;color:#FFFFFF; font-size: 20px; background: url(public/gg/bao.png) left center no-repeat;}");
sHtml+=(".da001header .da0001h1 label { float: right; font-size: 20px; }");
sHtml+=(".da001header .da0001h1 a { text-decoration: none; color:#FFFFFF}");
sHtml+=(".da001header .da0001h1 a:hover { color: #FFFF00; text-decoration:none}");
sHtml+=(".da001main { height: 280px;}");
sHtml+=(".da001main ul { height: 280px;}");
sHtml+=(".da001main ul li { float: left; width:25%; height: 280px; text-align: center; cursor: pointer; position: relative;}");
sHtml+=(".da001main ul li a { width: 100%; height: 280px; display: block; position: absolute; top: 0; left: 0;}");
sHtml+=(".da001main ul li.box1 a{ background: url(public/gg/1663481690_497142153.jpg) top center no-repeat;}");
sHtml+=(".da001main ul li.box2 a{ background: url(public/gg/1663481702_497142153.jpg) top center no-repeat;}");
sHtml+=(".da001main ul li.box3 a{ background: url(public/gg/1663481698_497142153.jpg) top center no-repeat;}");
sHtml+=(".da001main ul li.box4 a{ background: url(public/gg/1663481694_497142153.jpg) top center no-repeat;}");
sHtml+=(".da001main ul li.box1 a:hover{ background: url(public/gg/1663481690_497142153.jpg) bottom center no-repeat;}");
sHtml+=(".da001main ul li.box2 a:hover { background: url(public/gg/1663481702_497142153.jpg) bottom center no-repeat;}");
sHtml+=(".da001main ul li.box3 a:hover { background: url(public/gg/1663481698_497142153.jpg) bottom center no-repeat;}");
sHtml+=(".da001main ul li.box4 a:hover { background: url(public/gg/1663481694_497142153.jpg) bottom center no-repeat;}");
sHtml+=(".da001footer {height: 30px; padding:0 5px; line-height: 30px; color: #000; background: url(public/gg/footer.png) left bottom repeat-x;font-size:12px;font-family: \"Microsoft YaHei\", Arial,\"宋体\";}");
sHtml+=(".da001footer span{ float:right}");
sHtml+=(".da001footer em{ background: url(/public/gg/qq.gif) no-repeat; padding-left:15px}");
sHtml+=(".da001footer a { color: #000;}");
sHtml+=("<\/style>");
sHtml+=("<div class=\"da001header\">");
sHtml+=("	<div class=\"da0001h1\"><label><a target=\"_blank\" href=\"http:\/\/bbs.117kj.com\/dome\">小额下注哪都可以，大额投注都选《大资本》<\/a><\/label>"+da000JsIdObjSrcQqText+"<font color=\"#FFFF00\">500万<\/font>全程担保您的<font color=\"#FFFF00\">【资金100%安全】<\/font><\/div>");
sHtml+=("<\/div>");
sHtml+=("	<div class=\"left\"><\/div>");
sHtml+=("    <div class=\"right\"><\/div>");
sHtml+=("");
sHtml+=("<div class=\"da001main\">");
sHtml+=("	<ul>");
sHtml+=("    	<li class=\"box1\">");
sHtml+=("            <a target=\"_blank\" href=\"http:\/\/bbs.117kj.com\/dome\"><\/a>");
sHtml+=("        <\/li>");
sHtml+=("    	<li class=\"box2\">");
sHtml+=("            <a target=\"_blank\" href=\"http:\/\/bbs.117kj.com\/dome\"><\/a>");
sHtml+=("        <\/li>");
sHtml+=("    	<li class=\"box3\">");
sHtml+=("            <a target=\"_blank\" href=\"http:\/\/bbs.117kj.com\/dome\"><\/a>");
sHtml+=("        <\/li>");
sHtml+=("    	<li class=\"box4\">");
sHtml+=("            <a target=\"_blank\" href=\"http:\/\/bbs.117kj.com\/dome\"><\/a>");
sHtml+=("        <\/li>");
sHtml+=("    <\/ul>");
sHtml+=("<\/div>");
sHtml+=("<div class=\"da001footer\"><span>《澳门大资本》已付本站1年广告费+500万押金。添加客服QQ，优先获得100%赔偿。  <a href=\"http:\/\/wpa.qq.com\/msgrd?v=3&amp;uin=&amp;site=qq&amp;menu=yes\" target=\"_blank\"><em>"+da000JsIdObjSrcQq+"<\/em><\/a><\/span>");
sHtml+=("申保流程：遇到问题 → 联系客服 → 取证解决 → 申保成功　<\/div>");
return sHtml;
}

//黑色推广（为什么大客户客户都选大资本）
//$(".div").html(DJKS());




//$(function(){
//调用方法
//	$("body").WZJH();
//});
(function($){
$.fn.WZJH = function(sColor,ready){
if(!ready){
$("."+SetHtml(sColor)).WZJH(sColor,true);
return;
}

// Our plugin implementation code goes here.
//this.each(function(){ //实现代码
if(ready) new Do().Start($(this).attr("class"));
//});

function Do(){
this.Start = function(sID){
$("."+ sID +" .footer").hover(function(){
var i=0;
$("."+ sID +" .footer-div>ul").each(function(index, element) {
i+=$(this).height();
});
$(this).css({height: i + "px"});
},function(){
$(this).css({height: "30px"});
});

$("."+ sID +" .close,."+ sID +" .main-circle").bind("click",function(){
$("."+ sID +" .footer").slideToggle(0);
$("."+ sID +" .main-circle").slideToggle(0);	
});				

var sColor = ["#FF9900","#00FF33","#00CCFF","yellow","#FF00FF","#FF00FF"]
$("."+ sID +" .daohang >a:first-child").each(function(index, element) {
$(this).css("color",sColor[index]);
});	

if (!+[1,]){
if(navigator.appVersion .split(";")[1].replace(/[ ]/g,"")=="MSIE8.0" && document.documentMode==8) return;
if(navigator.appVersion .split(";")[1].replace(/[ ]/g,"")=="MSIE7.0" && document.documentMode==7) return;
$("."+ sID +" .footer .footer-div").css({"right":"50%","margin-right":"-400px","position":"absolute"});
}
}
}		

function SetHtml(sColor){
sColor = (typeof sColor!= "undefined")?sColor:"#000";
var sID = 'footer-nav' + Math.round(Math.random() * 9999) ;
var sCss = 	"<style>body{margin:0px; width:100%; height:100%; border:0; padding:0px;}"+
".sidebar, .sidebarbg {width: 100%;height: 55px;padding: 5px 0;position: fixed;left: 0;bottom: 30px;_position: absolute;"+
"_top: expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)-30));}"+
"." + sID + "{display:inherit;}"+
"." + sID + " .footer{margin:0px; padding:0px; overflow:hidden;  width:100%; position:fixed; bottom:0px;  zoom:1; height:30px; z-index:99;background:none;}"+
"*html ." + sID + " .footer{"+
"_position: absolute;"+
"width:expression(eval(document.documentElement.clientWidth ||document.body.clientWidth));"+
"top: expression(eval((document.documentElement.scrollTop || document.body.scrollTop)+"+
				"(document.documentElement.clientHeight ||document.body.clientHeight)-"+
				"this.offsetHeight-"+
				"(parseInt(this.currentStyle.marginTop,10)||0)-"+
				"(parseInt(this.currentStyle.marginBottom,10)||0)));}"+
"." + sID + " .footer .a1{ background:"+sColor+"; width:100%; position:absolute; bottom:0px; height:100%;filter:alpha(opacity=80);opacity:0.8;-moz-opacity:0.8;min-width:1000px;}"+
"." + sID + " .footer .footer-div{position:relative; z-index:1; width:1000px; margin: 0 auto;font-size:14px;font-family:Microsoft Yahei,Arial,Helvetica,sans-serif;}"+
"." + sID + " .footer .footer-div a:hover{color:#F00}"+
"." + sID + " .footer .footer-div ul, .footer .footer-div li{list-style:none; padding:0; margin:0; border:0;}"+
"." + sID + " .footer .footer-div .daohang{float:left; width:70px; line-height:30px;  display:inline-block; *display:inline; *zoom:1;/*text-shadow: 1px 1px #333333;FILTER:DropShadow(Color=#808080, OffX=1, OffY=1, Positive=1);vertical-align:top;*/text-align:right;clear:both}"+
"." + sID + " .footer .footer-div ul{float:left; width:930px; _width:920px;}"+
"." + sID + " .footer .footer-div ul li{height:30px;white-space:nowrap;float:left; *zoom:1;/*text-shadow: 1px 1px #333333;FILTER:DropShadow(Color=#808080, OffX=1, OffY=1, Positive=1);vertical-align:top;*/}"+
"." + sID + " .footer .footer-div ul li a{text-decoration:none; color:#FFF; padding:8px 8px;*padding:4px 8px; height:30px;line-height:30px;}"+
"." + sID + " .footer .footer-div ul li a:hover{text-decoration:none; color:#FF0000;background:"+sColor+"; padding:8px 8px;*padding:4px 8px;  height:30px;line-height:30px;}"+
"." + sID + " .footer .footer-div .close{background:#F00; border-radius:20px; width:30px; height:30px;text-align:center;font-family:Tahoma; font-size:22px; color:#FFF; cursor:pointer;position:absolute; right:-30px; top:2px;}"+						
"." + sID + " .main-divv{position:fixed; right:50px; bottom:50px; z-index:99;}"+						
"*html ." + sID + " .main-divv{"+
"_position: absolute;"+
"top: expression(eval((document.documentElement.scrollTop || document.body.scrollTop)+"+
				"(document.documentElement.clientHeight ||document.body.clientHeight)-"+
				"this.offsetHeight-"+
				"(parseInt(this.currentStyle.marginTop,10)||20)-"+
				"(parseInt(this.currentStyle.marginBottom,10)||20)));}"+
"." + sID + " .main-circle { background:#000; border-radius:50px; width:70px; height:70px; color:#FFF; display:none;cursor:pointer;filter:alpha(opacity=50);opacity:0.5;-moz-opacity:0.5;}"+
"." + sID + " .main-circle .main-circle-title1{ width:20px; height:30px; float:left; padding:25px 0 0 0; text-align:right;}"+
"." + sID + " .main-circle .main-circle-title2{ width:40px; height:30px; float:left; padding:20px 0 0 0; text-align:center; font-size:14px; }</style>";


var sHtml = '<div class="'+sID+'">'+
'<div class="main-divv">'+       
'<div class="main-circle">'+ 
'<div class="main-circle-title1"><</div>'+ 
'<div class="main-circle-title2">名站导航</div>'+ 
'</div></div></div>'+

'<div class="'+sID+'" _WZJH="true">'+
'<div class="footer">'+
'<div class="a1"></div>'+
'<div class="footer-div">'+
'<div class="close">×</div>'+
'<div class="daohang"><a>开奖直播：</a></div>' + 
'<ul><li><a title="点击进入" href="http://www.0123kj.com/" target="_blank">123开奖</a></li>' +
'<li><a title="点击进入" href="http://www.kj123.com/" target="_blank">雷锋KJ123开奖</a></li>' +
'<li><a title="点击进入" href="http://www.360kj.com/" target="_blank">360开奖</a></li>' +
'<li><a title="点击进入" href="http://www.88kj.com/" target="_blank">88开奖</a></li>' +
'<li><a title="点击进入" href="http://www.99kj.com/" target="_blank">马经99开奖</a></li>' +
'<li><a title="点击进入" href="http://www.118kj.com/" target="_blank">118开奖</a></li>' +
'<li><a title="点击进入" href="http://www.448kj.com/" target="_blank">448开奖</a></li>' +
'<li><a title="点击进入" href="http://www.133kj.com/" target="_blank">133开奖</a></li>' +
'<li><a title="点击进入" href="http://www.4kj.com/" target="_blank">"速"开奖</a></li>' +
'<li><a title="点击进入" href="http://www.8kj.com/" target="_blank">"8"开奖</a></li>' +
'<li><a title="点击进入" href="http://www.290kj.com/" target="_blank">290开奖</a></li>' +
'<li><a title="点击进入" href="http://www.01kj.com/" target="_blank">第一开奖</a></li></ul>' +


'<div class="daohang"><a>高手论坛：</a></div>' + 
'<ul><li><a title="点击进入" href="http://www.123lt.com/" target="_blank">123论坛</a></li>' +
'<li><a title="点击进入" href="http://www.lf123.com/" target="_blank">雷锋LF123论坛</a></li>' +
'<li><a title="点击进入" href="http://www.360lt.com/" target="_blank">360论坛</a></li>' +
'<li><a title="点击进入" href="http://www.88lt.com/" target="_blank">88论坛</a></li>' +
'<li><a title="点击进入" href="http://www.66lt.com/" target="_blank">马经66论坛</a></li>' +
'<li><a title="点击进入" href="http://www.94lt.com/" target="_blank">94论坛</a></li>' +
'<li><a title="点击进入" href="http://www.5v123.com/" target="_blank">5v123论坛</a></li>' +
'<li><a title="点击进入" href="http://www.zz888.com/" target="_blank">zz888论坛</a></li>' +
'<li><a title="点击进入" href="http://www.190ff.com/" target="_blank">九龙论坛</a></li>' +
'<li><a title="点击进入" href="http://www.88mid.com/" target="_blank">88六合秘典</a></li>' +
'<li><a title="点击进入" href="http://www.888gy.com/" target="_blank">88六合公益论坛</a></li></ul>' +

'<div class="daohang"><a>历史图库：</a></div>' + 
'<ul><li><a title="点击进入" href="http://www.123ls.com/" target="_blank">123图库</a></li>' +
'<li><a title="点击进入" href="http://www.290ls.com/" target="_blank">雷锋290LS图库</a></li>' +
'<li><a title="点击进入" href="http://www.360ls.com/" target="_blank">360图库</a></li>' +
'<li><a title="点击进入" href="http://www.88tk.com/" target="_blank">88图库</a></li>' +
'<li><a title="点击进入" href="http://www.88tk.com/" target="_blank">马经88图库</a></li>' +
'<li><a title="点击进入" href="http://www.118ls.com/" target="_blank">118全年图库</a></li>' +
'<li><a title="点击进入" href="http://www.tk49.com/" target="_blank">图库49</a></li>' +
'<li><a title="点击进入" href="http://www.100tk.com/" target="_blank">100图库</a></li>' +
'<li><a title="点击进入" href="http://www.90900.com/" target="_blank">九龙老牌图库</a></li>' +
'<li><a title="点击进入" href="http://www.390ff.com/" target="_blank">九龙挂牌图库</a></li>' +
'<li><a title="点击进入" href="http://www.114ls.com/" target="_blank">114图库</a></li></ul>' +

'<div class="daohang"><a>精品资料：</a></div>' + 
'<ul><li><a title="点击进入" href="http://www.123zl.com/" target="_blank">123资料</a></li>' +
'<li><a title="点击进入" href="http://www.27v.com" target="_blank">雷锋27V资料区</a></li>' +
'<li><a title="点击进入" href="http://www.360lhc.com/" target="_blank">360导航</a></li>' +
'<li><a title="点击进入" href="http://www.88gp.com/" target="_blank">88挂牌</a></li>' +
'<li><a title="点击进入" href="http://www.99zl.com" target="_blank">马经99资料</a></li>' +
'<li><a title="点击进入" href="http://www.118gp.com/" target="_blank">118挂牌论坛</a></li>' +
'<li><a title="点击进入" href="http://www.lhc49.com/" target="_blank">LHC49博客</a></li>' +
'<li><a title="点击进入" href="http://www.678gp.com/" target="_blank">678挂牌</a></li>' +
'<li><a title="点击进入" href="http://www.100gp.com/" target="_blank">100挂牌</a></li>' +
'<li><a title="点击进入" href="http://www.12394.com/" target="_blank">12394救世网</a></li>' +
'<li><a title="点击进入" href="http://www.004zl.com/" target="_blank">004资料</a></li></ul>' +

'<div class="daohang"><a>常用网站：</a></div>' + 
'<ul><li><a title="点击进入" href="http://www.lhc123.com/" target="_blank">lhc123网址大全</a></li>' +
'<li><a title="点击进入" href="http://www.lhc49.com/" target="_blank">lhc49网址大全</a></li>' +
'<li><a title="点击进入" href="http://www.118zl.com/" target="_blank">118资料</a></li>' +
'<li><a title="点击进入" href="http://bbs.88lt.com" target="_blank">88中彩网<font color="#FF0000">【3D彩票】</font></a></li>' +
'<li><a title="点击进入" href="http://www.38mm.com/" target="_blank">38MM美眉网</a></li>' +
'<li><a title="点击进入" href="http://www.100mz.com/" target="_blank">100妹子美女图库</a></li>' +
'<li><a title="点击进入" href="http://g.da000.com:889" target="_blank"><font color="#FFFF00">【大资本】网投</font></a></li>' +
'<li><a title="点击进入" href="http://www.da.cc" target="_blank"><font color="#00FF00">【大资本】网络检测</font></a></li></ul>' +

'</div></div></div>'

$("body").prepend(sCss + sHtml);
return sID;
}
}	
})(jQuery);


/*if(document.all){   
window.attachEvent('onload',function(){
new AD_PUBU();
});  //IE in   
}else{   
window.addEventListener('load',function(){
new AD_PUBU();
},false); //Firefox   
};*/

function CheckHost(aHost){
var sUrl = location.href;
for(var i=0;i<aHost.length;i++){
if(sUrl.indexOf(aHost[i])>=0) return true;
}
return false;
}


$(function(){
window.setTimeout(function(){
SetCount();
},1000*1);

var asColor=["90900,#000000","tk49,#666666","100tk,#1672B9","88kj,#0962BB","360kj,#003F22","118kj,#000000"];
for(var i=0;i<asColor.length;i++){
if(CheckHost([asColor[i].split(",")[0]])){
$("body").WZJH(asColor[i].split(",")[1]);
break;
}
}
if(!CheckHost(["448kj","0123kj","678gp","lf123","bbs.lf123","190ff","bbs.190ff","290kj","01kj","zz888","4kj","004zl","114ls","27v","290gp","88zcw","902008","90smh","263gp","22230","290777","290ff"])){
if((typeof $("div[_WZJH]")[0]== "undefined"))$("body").WZJH();
}


if(CheckHost(["90900"])){
//左联
$("body").ADDL({LR:"Lift",LRrange:20,TB:"Top",TBrange:310});
//右联 
$("body").ADDL({LR:"right",LRrange:6,TB:"Top",TBrange:310});
//瀑布	
new AD_PUBU();
$("#DBSK").html(DBSK());
$("#why_dzb").html(DJKS());	
return;		
}

if(CheckHost(["www.90smh.com","www.263gp.com","www.22230.com","290777.com"])){
//左联
$("body").ADDL({LR:"Lift",LRrange:20,TB:"Top",TBrange:150});
//右联 
$("body").ADDL({LR:"right",LRrange:6,TB:"Top",TBrange:150});
$("#DBSK").html(DBSK());
$("#why_dzb").html(DJKS());
return;		
}


if(CheckHost(["bbs.lf123.com/html","bbs.lf123.com/html","bbs.190ff.com/html","27v.com/View_1","27v.com/Category","www.290ls.com/col","www.290ls.com/black","123gs.com/html","290gp.com/html","902008.com/html","lf123.com/tk","902008.com/tk","290gp.com/tk","190ff.com/tk","lf123.com/lfmfzl"])){
//左联
$("body").ADDL({LR:"Lift",LRrange:20,TB:"Top",TBrange:150});
//右联 
$("body").ADDL({LR:"right",LRrange:6,TB:"Top",TBrange:150});
//瀑布	
$("#DBSK").html(DBSK());
$("#why_dzb").html(DJKS());	
return;		
}
if(CheckHost(["zz888.com/html"])){
//左联
$("body").ADDL({LR:"Lift",LRrange:20,TB:"Top",TBrange:80});
//右联 
$("body").ADDL({LR:"right",LRrange:6,TB:"Top",TBrange:80});
//瀑布	
$("#DBSK").html(DBSK());
$("#why_dzb").html(DJKS());	
return;		
}

if(CheckHost(["zz888"])){
//左联
$("body").ADDL({LR:"Lift",LRrange:20,TB:"Top",TBrange:80});
//右联 
$("body").ADDL({LR:"right",LRrange:6,TB:"Top",TBrange:80});
//瀑布	
new AD_PUBU();
$("#DBSK").html(DBSK());
$("#why_dzb").html(DJKS());	
return;		
}

if(CheckHost(["123gs"])){
//右联 
$("body").ADDL({LR:"right",LRrange:6,TB:"Top",TBrange:80});
//瀑布	
new AD_PUBU();
$("#DBSK").html(DBSK());
$("#why_dzb").html(DJKS());	
return;		
}

if(CheckHost(["123gs","zz888","5v123","bbs.lf123","bbs.190ff","66lt","88lt","360lt"])){
//右联 
$("body").ADDL({LR:"right",LRrange:6,TB:"Top",TBrange:150});
//瀑布	
new AD_PUBU();
$("#DBSK").html(DBSK());
$("#why_dzb").html(DJKS());	
return;		
}


if(CheckHost(["tk49","114ls.com/col","114ls.com/black","190ff.com/html"])){
//左联
$("body").ADDL({LR:"Lift",LRrange:20,TB:"Top",TBrange:150});
//右联 
$("body").ADDL({LR:"right",LRrange:6,TB:"Top",TBrange:150});

$("#DBSK").html(DBSK());
$("#why_dzb").html(DJKS());
return;		
}

if(CheckHost(["5v555"])){
new AD_PUBU();
$("#DBSK").html(DBSK());
$("#why_dzb").html(DJKS());
return;		
}	
//左联
$("body").ADDL({LR:"Lift",LRrange:20,TB:"Top",TBrange:130});
//右联 
$("body").ADDL({LR:"right",LRrange:6,TB:"Top",TBrange:130});
//瀑布	
new AD_PUBU();	
$("#DBSK").html(DBSK());
$("#why_dzb").html(DJKS());			

});


