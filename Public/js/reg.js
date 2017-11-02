// JavaScript Document
//===================================去除空格
function trim(str){   
str = str.replace(/^(\s|\u00A0)+/,'');   
for(var i=str.length-1; i>=0; i--){   
if(/\S/.test(str.charAt(i))){   
str = str.substring(0, i+1);   
break;   
}   
}   
return str;   
}  

//验证会员昵称
function CheckNickName() {
var nickname = $("#nickname").attr("value");
if (nickname != "") {
var result = nickname.match(/^([\u4E00-\u9FA5]){2,20}$/);
if (result == null) {
nicknameok = "<font color=red>×姓名格式不合法,必须是2个汉字以上</font>";
return false;
}else {
nicknameok = "OK";
return true;
}
}else {
nicknameok = "<font color=red>×姓名名称不能为空！</font>";
return false;
}
}


function CheckUser() {
var username =$("#username").attr("value");
if (username == ""){
usernameok = "<font color=red>×用户名不能为空</font>";
return false;
}else{
//===
jQuery.ajax({
url: "../../Ajax/Check.User.Ajax.php",
dataType:"json",
type: "Post",
data:{Action:"CheckUserName",username:username},
success:function(data){
if(data.error>0){
usernameok =data.error;
return false;
}else{
usernameok = "OK";
return true;
}
}
});
//	
}
}

////////////////////////////////////////////////密码格式是否正确
function check_pwd() {
var pwd = $("#password").attr("value");
var result = pwd.match(/^([a-z]|[A-Z]|[0-9]){6,18}$/);
if (result == null) {
passwordok = "<font color=red>×必须是6-30位的数字或字母</font>";
return false;
} else {
passwordok = "OK";
return true;
}
}
////////////////////////////////////////////////两次输入的登录密码是否一致
function pwdIsSame() {
var pwd = $("#password").attr("value");
var conFirmPwd = $("#qrpassword").attr("value");
var result = conFirmPwd.match(/^([a-z]|[A-Z]|[0-9]){6,30}$/);
if (pwd == conFirmPwd && conFirmPwd != "" && result != null) {
confirmPassword = "OK";
return true;
}
else {
confirmPassword = "<font color=red>×密码不一致或格式不正确</font>";
return false;
}
}




$(function () {
////////////////////////////////////////////////////////////////////////////////////////////////////////验证会员姓名 The Start
$("#nickname").focus(function(){
if ($(this).val() =="") {
chk_nickname.innerHTML="<font color=green>请输入昵称</font>";
}else{
chk_nickname.innerHTML="<font color=green>您要重新填写？</font>";	
}
});
//-------------------------------------------离开状态
$("#nickname").blur(function(){
CheckNickName();
if (nicknameok == "OK") {
chk_nickname.innerHTML="<font color=green>√</font>";
} else {
chk_nickname.innerHTML=nicknameok;
}
});	
////////////////////////////////////////////////////////////////////////////////////////////////////////验证会员姓名 The End
	
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////验证会员姓名 The Start
$("#username").focus(function(){
if ($(this).val() =="") {
chk_uses.innerHTML="<font color=green>请填写您的登录账户</font>";
}else{
chk_uses.innerHTML="<font color=green>您要重新填写？</font>";	
}
});
$("#username").blur(function(){
CheckUser();
if (usernameok == "OK") {
chk_uses.innerHTML="<font color=green>√</font>";
} else {
chk_uses.innerHTML=usernameok;
}
});	
////////////////////////////////////////////////////////////////////////////////////////////////////////验证会员姓名 The End



////////////////////////////////////////////////////////////////////////////////////////////////////////验证会员密码 The Start
$("#password").focus(function(){
if ($(this).val() =="") {
chk_pwd.innerHTML="<font color=green>请输入密码</font>";
}else{
chk_pwd.innerHTML="<font color=green>您要重新填写？</font>";	
}
});
//-------------------------------------------离开状态
$("#password").blur(function(){
check_pwd();
if (passwordok == "OK") {
chk_pwd.innerHTML="<font color=green>√</font>";
} else {
chk_pwd.innerHTML=passwordok;
}
});	
////////////////////////////////////////////////////////////////////////////////////////////////////////验证会员密码 The End

////////////////////////////////////////////////////////////////////////////////////////////////////////确认会员密码 The Start
$("#qrpassword").focus(function(){
if ($(this).val() =="") {
chk_qrpwd.innerHTML="<font color=green>请再次输入密码</font>";
}else{
chk_qrpwd.innerHTML="<font color=green>您要重新填写？</font>";	
}
});
//-------------------------------------------离开状态
$("#qrpassword").blur(function(){
pwdIsSame();
if (confirmPassword == "OK") {
chk_qrpwd.innerHTML="<font color=green>√</font>";
} else {
chk_qrpwd.innerHTML=confirmPassword;
}
});	
////////////////////////////////////////////////////////////////////////////////////////////////////////确认会员密码 The End


});


//提交总验证
function checkAll() {
if (CheckNickName() && usernameok=='OK' && check_pwd() && pwdIsSame() ) {
return true;
}else {
return false;
}
}

function Register(style) {
CheckNickName();
if (nicknameok != "OK")
chk_nickname.innerHTML=nicknameok;
CheckUser();
if (usernameok != "OK")
chk_uses.innerHTML=usernameok;
check_pwd();
if (passwordok !="OK")
chk_pwd.innerHTML=passwordok;
pwdIsSame();
if (confirmPassword != "OK")
chk_qrpwd.innerHTML=confirmPassword;

if (checkAll() ==false) {
return;
}

document.getElementById("register").style.display = "none";
document.getElementById("loading").style.display = "inline";
var nickname = $("#nickname").attr("value");
var username = $("#username").attr("value");
var password =trim($("#password").attr("value"));
var Token    =$("#Token").attr("value");
jQuery.ajax({
url: "../../Ajax/Check.User.Ajax.php",
dataType:"json",
type: "Post",
data:{Action:"Reg",username:username,password:password,nickname:nickname,Token:Token},
success:function(data) {
if(data.error=0){
alert('注册成功!');window.location='index.php';
}else{
alert(data.msg);window.location='reg.php';
}
}
});
}