// JavaScript Document

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
function checkOnlyOne(position, checkName){
$("input[type='checkbox'][name='" + checkName + "']").each(function(index, element){
var checked = false;
if(position==index)	checked = true;
$(element).attr("checked", checked);
});
}
var page = 1;

function checkLoadmore(){
if(page>=totalPage){
hideLoadmoreBtn();
}
}
function hideLoadmoreBtn(){
$("#loadmorePageSizeBtn").hide();
$("#loadmoreAllBtn").hide();
}
checkLoadmore();
function loadmore(pageSize,isAll){
page++;
var url = _contextPath+"/search.html?id="+_name+"&page="+ pageSize + "&sid="+page;
$.get(url,{"rand":Math.random()},function(data){
if(data!=""){
$("#loadmore").append(data);
}
if(isAll){
hideLoadmoreBtn();
}else{
checkLoadmore();
}
});
}
function loadmorePageSize(pageSize){
loadmore(pageSize,0);
}
function loadmoreAll(){
loadmore(200,1);
}