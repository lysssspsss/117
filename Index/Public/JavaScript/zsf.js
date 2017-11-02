// JavaScript Document
$(document).ready(function(){
	jQuery("#nav").slide({type:"menu", titCell:".nLi", targetCell:".sub", effect:"slideDown", delayTime:300, triggerTime:0, defaultIndex:4, returnDefault:true});
	$(window).scroll(function(){
		var st = $(document).scrollTop();
		if(st>256){
			$('#forecast2').html($('#forecast').html());
			$('#disnum2').html($('#disnum').html());
			$('#topbar').show();
		}else{
			$('#topbar').hide();
		}
	});
});