// JavaScript Document
$(document).ready(function(){
var curUrl=window.location.href;
if(curUrl.indexOf('/Source/kj/') != -1||curUrl.indexOf('/history') != -1) $('#nLi3').addClass('on');
else if(curUrl.indexOf('/rq/') != -1) $('#nLi2').addClass('on');
else if(curUrl.indexOf('/zs/') != -1||curUrl.indexOf('/swfcharts/') != -1) $('#nLi1').addClass('on');
else $('#nLi4').addClass('on');

jQuery("#nav").slide({type:"menu", titCell:".nLi", targetCell:".sub", effect:"slideDown", delayTime:300, triggerTime:0, defaultIndex:4, returnDefault:true});
});

