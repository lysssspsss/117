// JavaScript Document
$(document).ready(function(){
jQuery("#nav").slide({type:"menu", titCell:".nLi", targetCell:".sub", effect:"slideDown", delayTime:300, triggerTime:0, defaultIndex:4, returnDefault:true});
$(".infolist").bind("mouseover", function(){
var i = $(this), t = i.position();
i.css({"background-color":"#ffc"});
var pTop = t.top-(100-i.outerHeight())/2;
var pLeft = $(".infos").offset().left;
pLeft = pLeft>=102 ? pLeft-102 : 10;
i.find(".dialog").css({top:pTop, left:pLeft});
i.find(".dialog").show(0);
i.bind("mouseleave", function(){i.css({"background-color":"#fff"});});
i.bind("mouseleave", function(){i.find(".dialog").hide(0);});
});
});
function showAll(s1, s2){
$(s1).show();$(s2).show();
}
function showWithHide(s, h){
$(s).show();$(h).hide();
}

function checkOnlyOne(position, checkName){
$("input[type='checkbox'][name='" + checkName + "']").each(function(index, element){
var checked = false;
if(position==index)	checked = true;
$(element).attr("checked", checked);
});
}
String.prototype.trim=function(){return this.replace(/(^[\s　]+)|([\s　]+$)/g,'')};
String.prototype.strLen=function(){return this.replace(/[^\x00-\xFF]/g,'**').length};
var __currentDate = new Date();
var __year = __currentDate.getFullYear();
var chkK = function(obj, value){
if(value==='请您输入：年份、月份、期数、号码。试试输入“'+__year+'”'){
obj.value = '';
obj.style.fontSize = '14px';
obj.style.color = '#000';
}
};
var chkK2 = function(obj, value){
if(value.trim()===''){
obj.value = '请您输入：年份、月份、期数、号码。试试输入“'+__year+'”';
obj.style.fontSize = '12px';
obj.style.color = '#999';
}
};
var chkForm = function(obj){
var key = obj.value.trim();
if(key==='请您输入：年份、月份、期数、号码。试试输入“'+__year+'”'){
alert('请输入搜索关键字！');return false;
}
if(key.strLen()<2){
alert('关键词不能小于2个字节！');return false;
}
return true;
};
var lotteryInfo = function(year){
__year = year;
var browser = {
versions : function(){
var u = navigator.userAgent, app = navigator.appVersion;  
return{
android: u.indexOf('Android') !== -1,
iphone: u.indexOf('iPhone') !== -1,
ipad: u.indexOf('iPad') !== -1,
ipod: u.indexOf('iPod') !== -1,
winphone: u.indexOf('Windows Phone') !== -1
}
}()
};
if(browser.versions.android || browser.versions.iphone || browser.versions.ipad || browser.versions.ipod || browser.versions.winphone){
return true;
}
var areaH = $(window).outerHeight() - 36;
var html =

"<iframe src=\"/index.php/Home/history/record/?id="+ year +"/\" width=\"1020\" height=\""+ (areaH) +"\" frameborder=\"0\" scrolling=\"yes\"></iframe>";
$.layer({
type: 1,shade: [0.8, '#000', true],shadeClose: true,offset: ['10px','50%'],area: ['1020px', areaH],border: [8, 0.3, '#fff', true],closeBtn: [0, true],title: false,page: {html: html}
});
return false;
};

