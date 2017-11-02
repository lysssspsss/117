var body=document.getElementsByTagName("html");
	
	$(document).ready(function(){
		$(".lcj_bottom").css({"position":"absolute","top":0,"left":0,"width":body[0].offsetWidth,"height":body[0].offsetHeight,"background-color":"#a6a6a6","opacity":0.4,"z-index":900,"background":"url(https://p1.3b82.com/cl/tpl/commonFile/css/jquery-ui/blitzer/images/ui-bg_dots-small_65_a6a6a6_2x2.png) 50% 50% repeat"});
		$(".lcj_tan").css({"left":body[0].offsetWidth/2-300});
		$(".lcj_guan button").mouseover(function(){
			$(this).css({"background-color":"white"});
			$(".lcj_guan img").attr({src:"http://www.z88888.com/images/bai.png"});
		});
		$(".lcj_guan button").mouseout(function(){
			$(this).css({"background-color":"#da2f33"});
			$(".lcj_guan img").attr({src:"http://www.z88888.com/images/hong.png"});
		});
		$(".lcj_cloa button").mouseover(function(){
			$(this).css({"color":"red"});			
		});
		$(".lcj_cloa button").mouseout(function(){
			$(this).css({"color":"#004276"});			
		});
		$(".lcj_tan button,.lcj_bottom").click(function(){
			$(".lcj_bottom").css("display","none");
			$(".lcj_tan").css("display","none");
		})
	})

function setaCookie(cname,cvalue,exdays){
	var d = new Date();
	d.setTime(d.getTime()+(exdays*24*60*60*1000));
	var expires = "expires="+d.toGMTString();
	document.cookie = cname+"="+cvalue+"; "+expires;
}
function getaCookie(cname){
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
		var c = ca[i].trim();
		if (c.indexOf(name)==0) return c.substring(name.length,c.length);
	}
	return "";
}
function checkCookie(){
	var user=getaCookie("xygjname");
	if (user!=""){
				
		$(".lcj_bottom,.lcj_tan").css("display","none");
		
		
	}
	else {
		$(".lcj_bottom,.lcj_tan").css("display","block");
		user ="caonidaye";
  		if (user!="" && user!=null){
    		setaCookie("xygjname",user,1/8640);
    	}
	}
}
$(document).ready(function(){
	checkCookie();
})