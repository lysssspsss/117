// JavaScript Document
function checkLogin(id){
	$.get(_userContextPath+"/checkLogin.html",{"random":Math.random()},function(data){$("#"+id).html(data);});
}
window.setTimeout("doCheckLogin()",1000);
function doCheckLogin(){
	checkLogin("loginDiv");
}



