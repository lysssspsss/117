// JavaScript Document
$(document).ready(function(){
jQuery("#nav").slide({type:"menu", titCell:".nLi", targetCell:".sub", effect:"slideDown", delayTime:300, triggerTime:0, defaultIndex:4, returnDefault:true});
$(".infolist").bind("mouseover", function(){
var i = $(this), t = i.position();
i.css({"background-color":"#ffc"});
var pTop = t.top-(100-i.outerHeight())/2;
var pLeft = $(".infos").offset().left;
pLeft = pLeft>=108 ? pLeft-108 : 10;
i.find(".dialog").css({top:pTop, left:pLeft});
i.find(".dialog").show(0);
i.bind("mouseleave", function(){i.css({"background-color":"#fff"});});
i.bind("mouseleave", function(){i.find(".dialog").hide(0);});
});
$(window).scroll(function(){
var st = $(document).scrollTop();
if(st>616){
if($('#topbar').css('display')=='block'){
$('#topbartit').empty();
}else{
$('#topbar header').html($('#topbartit').html());
$('#topbar').show();
}
}else{
if($('#topbar').css('display')=='block'){
$('#topbartit').html($('#topbar header').html());
$('#topbar header').empty();
$('#topbar').hide();
}
}
});
});



$("form :input").change(function ()  
{  
$('#back').show();

});  



function showAll(s1, s2){
$(s1).show();$(s2).show();
}
function showWithHide(s, h){
$(s).show();$(h).hide();
}
function showHaoMaAndShengXiao(){
checkOnlyOne(0, 'haoMaOrShengXiao');showAll('.hm', '.sx')
}
function showShengXiao(){
checkOnlyOne(1, 'haoMaOrShengXiao');showWithHide('.sx', '.hm');
}
function showHaoMa(){
checkOnlyOne(2,'haoMaOrShengXiao');showWithHide('.hm', '.sx');
}
function showSortDown(){
checkOnlyOne(0, 'sortDownOrSize');showWithHide('.sortDown', '.sortSize');
}
function showSortSize(){
checkOnlyOne(1, 'sortDownOrSize');showWithHide('.sortSize', '.sortDown');
}
function checkOnlyOne(position, checkName){
$("input[type='checkbox'][name='" + checkName + "']").each(function(index, element){
var checked = false;
if(position==index)	checked = true;
$(element).attr("checked", checked);
});
}
function historySearch(year,page,pageSize,colIndex){
if(year!=""){$("#yearCondition").val(year);}
$("#page").val(page);
$("#pageSize").val(pageSize);
$("#numIndex").val(colIndex);
$("#historySearchForm").submit();
}
function resetInfos(){
$("#numIndex").val(0);
$("#shortDateCondition").val("选择日期");
$("select").each(function(index, element){$(this).val("");});
for(var i=0; i<document.forms[0].elements.length; i++){
if(document.forms[0].elements[i].tagName == 'SELECT') {
document.forms[0].elements[i].options[0].selected = true;
}
}
//$("#keyword").val("请您输入：年份、月份、期数、号码。试试输入“2013”");
$("input[type='radio'][name='keywordColIndex']").eq(0).attr("checked", "checked");
$(".qiShuChk").each(function(index, element){$(this).attr("checked", false);});
$("#historySearchForm").submit();
}
function changeAll(){
var chkAll = document.getElementById("chkAll").checked;
$(".qiShuChk").each(function(index, element){$(this).attr("checked", chkAll);});
} 


//判断是否有选择项
var j=0;
for(var i=0; i<document.forms[0].elements.length; i++){
if(document.forms[0].elements[i].tagName == 'SELECT') {
if(document.forms[0].elements[i].selectedIndex==0){
j++;
}
}
}
var f=$("#shortDateCondition").val();
if(j==48){$('#back').hide();}else{$('#back').show();}
if(j==48&&f=='选择日期'){$('#back').hide();}else{$('#back').show();}

//alert(j);