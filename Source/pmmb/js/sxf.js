// JavaScript Document
function dialogOpen(obj,id){
	obj.style.background = '#ffc';
	var main=document.getElementById('main');
	var mainTop=main.offsetTop;
	var mainLeft=(document.documentElement.clientWidth-main.offsetWidth)/2;
	if(!window.XMLHttpRequest){
		mainTop=main.offsetTop+main.parentNode.offsetTop;
	}
	var show=document.getElementById(id);
	show.style.display='block';
	var showWidth=show.offsetWidth;
	show.style.top=(mainTop+obj.offsetTop-obj.offsetHeight/2-1)+'px';
	if(mainLeft-showWidth<=4){
		show.style.left=4+'px';
	}else{
		show.style.left=(mainLeft-showWidth-4)+'px';
	}
}
function dialogClose(obj,id){
	var show=document.getElementById(id);
	show.style.display='none';
	obj.style.background = '#fff';
}
$(document).ready(function(){
//	$(".infolist").bind("mouseover", function(){
//		var i = $(this), t = i.position();
//		i.css({"background-color":"#ffc"});
//		var pTop = t.top-(100-i.outerHeight())/2;
//		var pLeft = $(".infos").offset().left;
//		pLeft = pLeft>=102 ? pLeft-102 : 10;
//		i.find(".dialog").css({top:pTop, left:pLeft});
//		i.find(".dialog").show(0);
//		i.bind("mouseleave", function(){i.css({"background-color":"#fff"});});
//		i.bind("mouseleave", function(){i.find(".dialog").hide(0);});
//	});
	$(window).scroll(function(){
		var st = $(document).scrollTop();
		if(st>194){
			if($('#topbar').css('display')=='block'){
				$('#topbartit').empty();
			}else{
				/*$('#topbar header').html($('#topbartit').html());*/
				$('#searchstr1').val($('#searchstr').val());
				$('#topbar').show();
			}
		}else{
			if($('#topbar').css('display')=='block'){
				$('#topbartit').html($('#topbar header').html());
				/*$('#topbar header').empty();*/
				$('#searchstr1').val($('#searchstr').val());
				$('#topbar').hide();
			}
		}
	});
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