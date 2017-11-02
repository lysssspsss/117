// JavaScript Document
/*
* jQuery placeholder, fix for IE6,7,8,9
* @author JENA
* @since 20131115.1504
* @website ishere.cn
*/
var JPlaceHolder = {
//检测
_check : function(){
return 'placeholder' in document.createElement('input');
},
//初始化
init : function(){
if(!this._check()){
this.fix();
}
},
//修复
fix : function(){
jQuery(':input[placeholder]').each(function(index, element) {
var self = $(this), txt = self.attr('placeholder');
self.wrap($('<div style="line-height:240%;"></div>').css({position:'relative', zoom:'1', border:'none', background:'none', padding:'none', margin:'none'}));
var pos = self.position(), h = self.outerHeight(true), paddingleft = self.css('padding-left');
var holder = $('<span></span>').text(txt).css({position:'absolute', left:pos.left, top:pos.top, height:h, lienHeight:h, paddingLeft:paddingleft, color:'#aaa'}).appendTo(self.parent());
self.focusin(function(e) {
holder.hide();
}).focusout(function(e) {
if(!self.val()){
holder.show();
}
});
holder.click(function(e) {
holder.hide();
self.focus();
});
});
}
};
//执行
jQuery(function(){
JPlaceHolder.init();    
});
//======================================================================以上代码是让支持的直接路过，不支持的，完美显示~~



$(function(){
if(typeof(SITEURL) == 'string') SITE_URL = SITEURL;//重写SITE_URL
//首页左侧分类菜单
$("#category ul").find("li").each(
function() {
$(this).mouseover(
function() {
menu = $("#" + this.id + "_menu");
menu_height = menu.height();
if (menu_height < 40) menu.height(60);
menu_height = menu.height();
li_top = $(this).position().top;
if ((li_top > 40) && (menu_height >= li_top)) $(menu).css("top",-li_top+20);
if ((li_top > 160) && (menu_height >= li_top)) $(menu).css("top",-li_top+40);
if ((li_top > 240) && (li_top > menu_height)) $(menu).css("top",menu_height-li_top);
if (li_top > 360) $(menu).css("top",60-menu_height);
if ((li_top > 40) && (menu_height <= 90)) $(menu).css("top",-20);

menu.show();
$(this).addClass("a");
}
);
$(this).mouseout(
function() {
$(this).removeClass("a");
$("#" + this.id + "_menu").hide();
}
);
}
);

var tr;
$('li.all-yo').click(function () {
$(tr).nextUntil('.all-yo')[tr == this ? 'toggle' : 'hide']();
if (tr != this) $(this).nextUntil('.all-yo').show();
tr = this;
});

});


/* TaBle 切换模式 */
function setTab(name,cursel,n){
for(i=1;i<=n;i++){
var menu=document.getElementById(name+i);
var con=document.getElementById("con_"+name+"_"+i);
menu.className=i==cursel?"hover":"";
con.style.display=i==cursel?"block":"none";
}
}

//图片比例缩放控制
function DrawImage(ImgD,FitWidth,FitHeight){
var image=new Image();
image.src=ImgD.src;
if(image.width>0 && image.height>0)
{
if(image.width/image.height>= FitWidth/FitHeight)
{
if(image.width>FitWidth)
{
ImgD.width=FitWidth;
ImgD.height=(image.height*FitWidth)/image.width;
}
else
{
ImgD.width=image.width;  
ImgD.height=image.height;  
}
}
else
{
if(image.height>FitHeight)
{
ImgD.height=FitHeight;
ImgD.width=(image.width*FitHeight)/image.height;
}
else
{
ImgD.width=image.width;
ImgD.height=image.height;
}
}  
}
}
