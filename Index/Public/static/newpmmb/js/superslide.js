/*!
 * SuperSlide v2.1.1 
 * 轻松解决网站大部分特效展示问题
 * 详尽信息请看官网：http://www.SuperSlide2.com/
 *
 * Copyright 2011-2013, 大话主席
 *
 * 请尊重原创，保留头部版权
 * 在保留版权的前提下可应用于个人或商业用途

 * v2.1.1：修复当调用多个SuperSlide，并设置returnDefault:true 时返回defaultIndex索引错误

 */

(function($){$.fn.slide=function(options){$.fn.slide.defaults={type:"slide",effect:"fade",autoPlay:false,delayTime:500,interTime:2500,triggerTime:150,defaultIndex:0,titCell:".hd li",mainCell:".bd",targetCell:null,trigger:"mouseover",scroll:1,vis:1,titOnClassName:"on",autoPage:false,prevCell:".prev",nextCell:".next",pageStateCell:".pageState",opp:false,pnLoop:true,easing:"swing",startFun:null,endFun:null,switchLoad:null,playStateCell:".playState",mouseOverStop:true,defaultPlay:true,returnDefault:false};return this.each(function(){var opts=$.extend({},$.fn.slide.defaults,options);var slider=$(this);var effect=opts.effect;var prevBtn=$(opts.prevCell,slider);var nextBtn=$(opts.nextCell,slider);var pageState=$(opts.pageStateCell,slider);var playState=$(opts.playStateCell,slider);var navObj=$(opts.titCell,slider);var navObjSize=navObj.size();var conBox=$(opts.mainCell,slider);var conBoxSize=conBox.children().size();var sLoad=opts.switchLoad;var tarObj=$(opts.targetCell,slider);var index=parseInt(opts.defaultIndex);var delayTime=parseInt(opts.delayTime);var interTime=parseInt(opts.interTime);var triggerTime=parseInt(opts.triggerTime);var scroll=parseInt(opts.scroll);var vis=parseInt(opts.vis);var autoPlay=(opts.autoPlay=="false"||opts.autoPlay==false)?false:true;var opp=(opts.opp=="false"||opts.opp==false)?false:true;var autoPage=(opts.autoPage=="false"||opts.autoPage==false)?false:true;var pnLoop=(opts.pnLoop=="false"||opts.pnLoop==false)?false:true;var mouseOverStop=(opts.mouseOverStop=="false"||opts.mouseOverStop==false)?false:true;var defaultPlay=(opts.defaultPlay=="false"||opts.defaultPlay==false)?false:true;var returnDefault=(opts.returnDefault=="false"||opts.returnDefault==false)?false:true;var slideH=0;var slideW=0;var selfW=0;var selfH=0;var easing=opts.easing;var inter=null;var mst=null;var rtnST=null;var titOn=opts.titOnClassName;var onIndex=navObj.index(slider.find("."+titOn));var oldIndex=index=onIndex==-1?index:onIndex;var defaultIndex=index;var _ind=index;var cloneNum=conBoxSize>=vis?(conBoxSize%scroll!=0?conBoxSize%scroll:scroll):0;var _tar;var isMarq=effect=="leftMarquee"||effect=="topMarquee"?true:false;var doStartFun=function(){if($.isFunction(opts.startFun)){opts.startFun(index,navObjSize,slider,$(opts.titCell,slider),conBox,tarObj,prevBtn,nextBtn)}};var doEndFun=function(){if($.isFunction(opts.endFun)){opts.endFun(index,navObjSize,slider,$(opts.titCell,slider),conBox,tarObj,prevBtn,nextBtn)}};var resetOn=function(){navObj.removeClass(titOn);if(defaultPlay)navObj.eq(defaultIndex).addClass(titOn)};if(opts.type=="menu"){if(defaultPlay){navObj.removeClass(titOn).eq(index).addClass(titOn)};navObj.hover(function(){_tar=$(this).find(opts.targetCell);var hoverInd=navObj.index($(this));mst=setTimeout(function(){index=hoverInd;navObj.removeClass(titOn).eq(index).addClass(titOn);doStartFun();switch(effect){case"fade":_tar.stop(true,true).animate({opacity:"show"},delayTime,easing,doEndFun);break;case"slideDown":_tar.stop(true,true).animate({height:"show"},delayTime,easing,doEndFun);break}},opts.triggerTime)},function(){clearTimeout(mst);switch(effect){case"fade":_tar.animate({opacity:"hide"},delayTime,easing);break;case"slideDown":_tar.animate({height:"hide"},delayTime,easing);break}});if(returnDefault){slider.hover(function(){clearTimeout(rtnST)},function(){rtnST=setTimeout(resetOn,delayTime)})};return};if(navObjSize==0)navObjSize=conBoxSize;if(isMarq)navObjSize=2;if(autoPage){if(conBoxSize>=vis){if(effect=="leftLoop"||effect=="topLoop"){navObjSize=conBoxSize%scroll!=0?(conBoxSize/scroll^0)+1:conBoxSize/scroll}else{var tempS=conBoxSize-vis;navObjSize=1+parseInt(tempS%scroll!=0?(tempS/scroll+1):(tempS/scroll));if(navObjSize<=0)navObjSize=1}}else{navObjSize=1};navObj.html("");var str="";if(opts.autoPage==true||opts.autoPage=="true"){for(var i=0;i<navObjSize;i++){str+="<li>"+(i+1)+"</li>"}}else{for(var i=0;i<navObjSize;i++){str+=opts.autoPage.replace("$",(i+1))}};navObj.html(str);var navObj=navObj.children();};if(conBoxSize>=vis){conBox.children().each(function(){if($(this).width()>selfW){selfW=$(this).width();slideW=$(this).outerWidth(true)};if($(this).height()>selfH){selfH=$(this).height();slideH=$(this).outerHeight(true)}});var _chr=conBox.children();var cloneEle=function(){for(var i=0;i<vis;i++){_chr.eq(i).clone().addClass("clone").appendTo(conBox)};for(var i=0;i<cloneNum;i++){_chr.eq(conBoxSize-i-1).clone().addClass("clone").prependTo(conBox)}};switch(effect){case"fold":conBox.css({"position":"relative","width":slideW,"height":slideH}).children().css({"position":"absolute","width":selfW,"left":0,"top":0,"display":"none"});break;case"top":conBox.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+vis*slideH+'px"></div>').css({"top":-(index*scroll)*slideH,"position":"relative","padding":"0","margin":"0"}).children().css({"height":selfH});break;case"left":conBox.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+vis*slideW+'px"></div>').css({"width":conBoxSize*slideW,"left":-(index*scroll)*slideW,"position":"relative","overflow":"hidden","padding":"0","margin":"0"}).children().css({"float":"left","width":selfW});break;case"leftLoop":case"leftMarquee":cloneEle();conBox.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+vis*slideW+'px"></div>').css({"width":(conBoxSize+vis+cloneNum)*slideW,"position":"relative","overflow":"hidden","padding":"0","margin":"0","left":-(cloneNum+index*scroll)*slideW}).children().css({"float":"left","width":selfW});break;case"topLoop":case"topMarquee":cloneEle();conBox.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+vis*slideH+'px"></div>').css({"height":(conBoxSize+vis+cloneNum)*slideH,"position":"relative","padding":"0","margin":"0","top":-(cloneNum+index*scroll)*slideH}).children().css({"height":selfH});break}};var scrollNum=function(ind){var _tempCs=ind*scroll;if(ind==navObjSize){_tempCs=conBoxSize}else if(ind==-1&&conBoxSize%scroll!=0){_tempCs=-conBoxSize%scroll};return _tempCs};var doSwitchLoad=function(objs){var changeImg=function(t){for(var i=t;i<(vis+t);i++){objs.eq(i).find("img["+sLoad+"]").each(function(){var _this=$(this);_this.attr("src",_this.attr(sLoad)).removeAttr(sLoad);if(conBox.find(".clone")[0]){var chir=conBox.children();for(var j=0;j<chir.size();j++){chir.eq(j).find("img["+sLoad+"]").each(function(){if($(this).attr(sLoad)==_this.attr("src"))$(this).attr("src",$(this).attr(sLoad)).removeAttr(sLoad)})}}})}};switch(effect){case"fade":case"fold":case"top":case"left":case"slideDown":changeImg(index*scroll);break;case"leftLoop":case"topLoop":changeImg(cloneNum+scrollNum(_ind));break;case"leftMarquee":case"topMarquee":var curS=effect=="leftMarquee"?conBox.css("left").replace("px",""):conBox.css("top").replace("px","");var slideT=effect=="leftMarquee"?slideW:slideH;var mNum=cloneNum;if(curS%slideT!=0){var curP=Math.abs(curS/slideT^0);if(index==1){mNum=cloneNum+curP}else{mNum=cloneNum+curP-1}};changeImg(mNum);break}};var doPlay=function(init){if(isMarq){if(index>=1){index=1}else if(index<=0){index=0}}else{_ind=index;if(index>=navObjSize){index=0}else if(index<0){index=navObjSize-1}};doStartFun();if(sLoad!=null){doSwitchLoad(conBox.children())};if(tarObj[0]){_tar=tarObj.eq(index);if(sLoad!=null){doSwitchLoad(tarObj)};if(effect=="slideDown"){tarObj.not(_tar).stop(true,true).slideUp(delayTime);_tar.slideDown(delayTime,easing,function(){if(!conBox[0])doEndFun()})}else{tarObj.not(_tar).stop(true,true).hide();_tar.animate({opacity:"show"},delayTime,function(){if(!conBox[0])doEndFun()})}};if(conBoxSize>=vis){switch(effect){case"fade":conBox.children().stop(true,true).eq(index).animate({opacity:"show"},delayTime,easing,function(){doEndFun()}).siblings().hide();break;case"fold":conBox.children().stop(true,true).eq(index).animate({opacity:"show"},delayTime,easing,function(){doEndFun()}).siblings().animate({opacity:"hide"},delayTime,easing);break;case"top":conBox.stop(true,false).animate({"top":-index*scroll*slideH},delayTime,easing,function(){doEndFun()});break;case"left":conBox.stop(true,false).animate({"left":-index*scroll*slideW},delayTime,easing,function(){doEndFun()});break;case"leftLoop":var __ind=_ind;conBox.stop(true,true).animate({"left":-(scrollNum(_ind)+cloneNum)*slideW},delayTime,easing,function(){if(__ind<=-1){conBox.css("left",-(cloneNum+(navObjSize-1)*scroll)*slideW)}else if(__ind>=navObjSize){conBox.css("left",-cloneNum*slideW)};doEndFun()});break;case"topLoop":var __ind=_ind;conBox.stop(true,true).animate({"top":-(scrollNum(_ind)+cloneNum)*slideH},delayTime,easing,function(){if(__ind<=-1){conBox.css("top",-(cloneNum+(navObjSize-1)*scroll)*slideH)}else if(__ind>=navObjSize){conBox.css("top",-cloneNum*slideH)};doEndFun()});break;case"leftMarquee":var tempLeft=conBox.css("left").replace("px","");if(index==0){conBox.animate({"left":++tempLeft},0,function(){if(conBox.css("left").replace("px","")>=0){conBox.css("left",-conBoxSize*slideW)}})}else{conBox.animate({"left":--tempLeft},0,function(){if(conBox.css("left").replace("px","")<=-(conBoxSize+cloneNum)*slideW){conBox.css("left",-cloneNum*slideW)}})};break;case"topMarquee":var tempTop=conBox.css("top").replace("px","");if(index==0){conBox.animate({"top":++tempTop},0,function(){if(conBox.css("top").replace("px","")>=0){conBox.css("top",-conBoxSize*slideH)}})}else{conBox.animate({"top":--tempTop},0,function(){if(conBox.css("top").replace("px","")<=-(conBoxSize+cloneNum)*slideH){conBox.css("top",-cloneNum*slideH)}})};break;}};navObj.removeClass(titOn).eq(index).addClass(titOn);oldIndex=index;if(!pnLoop){nextBtn.removeClass("nextStop");prevBtn.removeClass("prevStop");if(index==0){prevBtn.addClass("prevStop")};if(index==navObjSize-1){nextBtn.addClass("nextStop")}};pageState.html("<span>"+(index+1)+"</span>/"+navObjSize)};if(defaultPlay){doPlay(true)};if(returnDefault){slider.hover(function(){clearTimeout(rtnST)},function(){rtnST=setTimeout(function(){index=defaultIndex;if(defaultPlay){doPlay()}else{if(effect=="slideDown"){_tar.slideUp(delayTime,resetOn)}else{_tar.animate({opacity:"hide"},delayTime,resetOn)}};oldIndex=index},300)})};var setInter=function(time){inter=setInterval(function(){opp?index--:index++;doPlay()},!!time?time:interTime)};var setMarInter=function(time){inter=setInterval(doPlay,!!time?time:interTime)};var resetInter=function(){if(!mouseOverStop){clearInterval(inter);setInter()}};var nextTrigger=function(){if(pnLoop||index!=navObjSize-1){index++;doPlay();if(!isMarq)resetInter()}};var prevTrigger=function(){if(pnLoop||index!=0){index--;doPlay();if(!isMarq)resetInter()}};var playStateFun=function(){clearInterval(inter);isMarq?setMarInter():setInter();playState.removeClass("pauseState")};var pauseStateFun=function(){clearInterval(inter);playState.addClass("pauseState")};if(autoPlay){if(isMarq){opp?index--:index++;setMarInter();if(mouseOverStop)conBox.hover(pauseStateFun,playStateFun)}else{setInter();if(mouseOverStop)slider.hover(pauseStateFun,playStateFun)}}else{if(isMarq){opp?index--:index++};playState.addClass("pauseState")};playState.click(function(){playState.hasClass("pauseState")?playStateFun():pauseStateFun()});if(opts.trigger=="mouseover"){navObj.hover(function(){var hoverInd=navObj.index(this);mst=setTimeout(function(){index=hoverInd;doPlay();resetInter()},opts.triggerTime)},function(){clearTimeout(mst)})}else{navObj.click(function(){index=navObj.index(this);doPlay();resetInter()})};if(isMarq){nextBtn.mousedown(nextTrigger);prevBtn.mousedown(prevTrigger);if(pnLoop){var st;var marDown=function(){st=setTimeout(function(){clearInterval(inter);setMarInter(interTime/10^0)},150)};var marUp=function(){clearTimeout(st);clearInterval(inter);setMarInter()};nextBtn.mousedown(marDown);nextBtn.mouseup(marUp);prevBtn.mousedown(marDown);prevBtn.mouseup(marUp)};if(opts.trigger=="mouseover"){nextBtn.hover(nextTrigger,function(){});prevBtn.hover(prevTrigger,function(){})}}else{nextBtn.click(nextTrigger);prevBtn.click(prevTrigger)}});};})(jQuery);jQuery.easing['jswing']=jQuery.easing['swing'];jQuery.extend(jQuery.easing,{def:'easeOutQuad',swing:function(x,t,b,c,d){return jQuery.easing[jQuery.easing.def](x,t,b,c,d)},easeInQuad:function(x,t,b,c,d){return c*(t/=d)*t+b},easeOutQuad:function(x,t,b,c,d){return-c*(t/=d)*(t-2)+b},easeInOutQuad:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t+b;return-c/2*((--t)*(t-2)-1)+b},easeInCubic:function(x,t,b,c,d){return c*(t/=d)*t*t+b},easeOutCubic:function(x,t,b,c,d){return c*((t=t/d-1)*t*t+1)+b},easeInOutCubic:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t+b;return c/2*((t-=2)*t*t+2)+b},easeInQuart:function(x,t,b,c,d){return c*(t/=d)*t*t*t+b},easeOutQuart:function(x,t,b,c,d){return-c*((t=t/d-1)*t*t*t-1)+b},easeInOutQuart:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t*t+b;return-c/2*((t-=2)*t*t*t-2)+b},easeInQuint:function(x,t,b,c,d){return c*(t/=d)*t*t*t*t+b},easeOutQuint:function(x,t,b,c,d){return c*((t=t/d-1)*t*t*t*t+1)+b},easeInOutQuint:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t*t*t+b;return c/2*((t-=2)*t*t*t*t+2)+b},easeInSine:function(x,t,b,c,d){return-c*Math.cos(t/d*(Math.PI/2))+c+b},easeOutSine:function(x,t,b,c,d){return c*Math.sin(t/d*(Math.PI/2))+b},easeInOutSine:function(x,t,b,c,d){return-c/2*(Math.cos(Math.PI*t/d)-1)+b},easeInExpo:function(x,t,b,c,d){return(t==0)?b:c*Math.pow(2,10*(t/d-1))+b},easeOutExpo:function(x,t,b,c,d){return(t==d)?b+c:c*(-Math.pow(2,-10*t/d)+1)+b},easeInOutExpo:function(x,t,b,c,d){if(t==0)return b;if(t==d)return b+c;if((t/=d/2)<1)return c/2*Math.pow(2,10*(t-1))+b;return c/2*(-Math.pow(2,-10*--t)+2)+b},easeInCirc:function(x,t,b,c,d){return-c*(Math.sqrt(1-(t/=d)*t)-1)+b},easeOutCirc:function(x,t,b,c,d){return c*Math.sqrt(1-(t=t/d-1)*t)+b},easeInOutCirc:function(x,t,b,c,d){if((t/=d/2)<1)return-c/2*(Math.sqrt(1-t*t)-1)+b;return c/2*(Math.sqrt(1-(t-=2)*t)+1)+b},easeInElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);return-(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b},easeOutElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);return a*Math.pow(2,-10*t)*Math.sin((t*d-s)*(2*Math.PI)/p)+c+b},easeInOutElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d/2)==2)return b+c;if(!p)p=d*(.3*1.5);if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);if(t<1)return-.5*(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b;return a*Math.pow(2,-10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p)*.5+c+b},easeInBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;return c*(t/=d)*t*((s+1)*t-s)+b},easeOutBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;return c*((t=t/d-1)*t*((s+1)*t+s)+1)+b},easeInOutBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;if((t/=d/2)<1)return c/2*(t*t*(((s*=(1.525))+1)*t-s))+b;return c/2*((t-=2)*t*(((s*=(1.525))+1)*t+s)+2)+b},easeInBounce:function(x,t,b,c,d){return c-jQuery.easing.easeOutBounce(x,d-t,0,c,d)+b},easeOutBounce:function(x,t,b,c,d){if((t/=d)<(1/2.75)){return c*(7.5625*t*t)+b}else if(t<(2/2.75)){return c*(7.5625*(t-=(1.5/2.75))*t+.75)+b}else if(t<(2.5/2.75)){return c*(7.5625*(t-=(2.25/2.75))*t+.9375)+b}else{return c*(7.5625*(t-=(2.625/2.75))*t+.984375)+b}},easeInOutBounce:function(x,t,b,c,d){if(t<d/2)return jQuery.easing.easeInBounce(x,t*2,0,c,d)*.5+b;return jQuery.easing.easeOutBounce(x,t*2-d,0,c,d)*.5+c*.5+b}});



/*js1*/
var browser = {
	versions : function(){
		var u = navigator.userAgent, app = navigator.appVersion;  
		return{
			ie: !!u.match(/MSIE/),
			ie6: !!u.match(/MSIE 6\.0/),
			ie678: !!u.match(/MSIE [678]{1}\.0/),
			android: u.indexOf('Android') !== -1,
			iphone: u.indexOf('iPhone') !== -1,
			ipad: u.indexOf('iPad') !== -1,
			ipod: u.indexOf('iPod') !== -1,
			winphone: u.indexOf('Windows Phone') !== -1
		}
	}()
};

var formatImg2 = function(image, maxw, maxh){
	var img = new Image();
	img.src = image.src;
	var w = img.width;
	var h = img.height;
	if(w>maxw || h>maxh){
		var b1 = w / maxw;
		var b2 = h / maxh;
		if(b1>b2){
			image.style.width = maxw + 'px';
			image.style.height = h / b1 + 'px';
		}else{
			image.style.width = w / b2 + 'px';
			image.style.height = maxh + 'px';
		}
	}else{
		image.style.width = w + 'px';
		image.style.height = h + 'px';
	}
};

var _show = function(i, url){
    return function(){show(i, url);}
};
var show = function(i, url){
	var arrPic = document.getElementById('fpic').getElementsByTagName('li');
	arrPic.item(i).innerHTML = '<img src="' + url + '" onload="javascript:formatImg(this, ' + document.getElementById('fpic').offsetWidth + ');"  onerror="this.src=\'/static/pmmb/image/nofind.gif\'" />';
};


/*articleAd*/

var formatImg = function(image, maxw){
	if(image.src.indexOf('static/pmmb/image/blank.png')!==-1){return;}
	var img = new Image();
	img.src = image.src;
	var imgW = img.width;
	var imgH = img.height;
	var fpic = document.getElementById('fpic');
	var imghover = document.getElementById('imghover');
	var prev = document.getElementById('prev');
	var next = document.getElementById('next');
	if(imgW<=maxw){
		image.style.width = imgW + 'px';
		image.style.height = imgH + 'px';
		fpic.style.height = imgH + 'px';
		imghover.style.width = imgW + 'px';
		imghover.style.height = imgH + 'px';
		prev.style.width = parseInt(imgW / 2) + 'px';
		prev.style.height = imgH + 'px';
		next.style.width = (imgW - parseInt(imgW / 2)) + 'px';
		next.style.height = imgH + 'px';
	}else{
		var newH = parseInt(maxw * imgH / imgW);
		image.style.width = maxw + 'px';
		image.style.height = newH + 'px';
		fpic.style.height = newH + 'px';
		imghover.style.width = maxw + 'px';
		imghover.style.height = newH + 'px';
		prev.style.width = parseInt(maxw / 2) + 'px';
		prev.style.height = newH + 'px';
		next.style.width = (maxw - parseInt(maxw / 2)) + 'px';
		next.style.height = newH + 'px';
	}
	imghover.style.left = image.offsetLeft + 'px';
	
	var arrBtn = document.getElementById('fbtn').getElementsByTagName('li');
	var totalpages=arrBtn.length, currentpage=0, pageup='', pagedown='';
	for(var i=0; i<totalpages; i++){
		if(arrBtn.item(i).className==='on'){
			currentpage = i;break;
		}
	}
	if(currentpage===0){
		pageup = '当前已是最新一期了';
		pagedown = '点击查看[第' + (totalpages - 1) + '期]';
	}else if(currentpage===(totalpages-1)){
		pageup = '点击查看[第2期]';
		pagedown = '当前已是第一期了';
	}else{
		pageup = '点击查看[第' + (totalpages - currentpage + 1) + '期]';
		pagedown = '点击查看[第' + (totalpages - currentpage - 1) + '期]';
	}
	imghover.innerHTML = 
	'<a id="prev" class="prev" style="width:' + prev.offsetWidth + 'px; height:' + prev.offsetHeight + 'px;" href="javascript:void(0);" title="' + pageup + '" onClick="javascript:focusImgs2(\'prev\');"></a>' +
    '<a id="next" class="next" style="width:' + next.offsetWidth + 'px; height:' + next.offsetHeight + 'px;" href="javascript:void(0);" title="' + pagedown + '" onClick="javascript:focusImgs2(\'next\');"></a>';
	
	var adHtml = '';
	var adbox = function(obj, imgW, imgH){
		if(obj.width>=imgW || obj.height>=imgH){return;}
		if((obj.left+obj.width)>imgW){
			if((imgW - obj.width)<20){obj.left = parseInt((imgW - obj.width) / 2);}
			else{obj.left = imgW - obj.width - 10;}
		}
		if((obj.top+obj.height)>imgH){
			if((imgH - obj.height)<20){obj.top = parseInt((imgH - obj.height) / 2);}
			else{obj.top = imgH - obj.height - 10;}
		}
		obj.url = obj.url || 'javascript:void(0);';
		var content = obj.flag===true ? '<img src="' + obj.image + '" onload="javascript:formatImg2(this, ' + (obj.width-20) + ', ' + (obj.height-20) + ');" />' : obj.text;
		var fbold = obj.fweight===true ? ' font-weight:bold;' : '';
		adHtml = adHtml +
		'<div class="adbox" style="width:' + obj.width + 'px; height:' + obj.height + 'px; left:' + obj.left + 'px; top:' + obj.top + 'px;">' +
			'<div class="adcon" style="width:' + obj.width + 'px; height:' + obj.height + 'px; font-size:' + obj.fsize + 'px;' + fbold + '">' +
				'<a style="width:' + (obj.width-20) + 'px; height:' + (obj.height-20) + 'px; color:' + obj.fcolor + ';" href="' + obj.url + '" target="_blank">' + content + '</a>' +
			'</div>' +
			'<div class="adboxbg" style="width:' + obj.width + 'px; height:' + obj.height + 'px;"></div>' +
		'</div>';
	};

function random(min,max){
    return Math.floor(min+Math.random()*(max-min));
}

function GetRandomNum(Min,Max)
{   
var Range = Max - Min;   
var Rand = Math.random();   
return(Min + Math.round(Rand * Range));   
}  

	//-->文字广告位开始
	var adclass = {
		width:580, //广告位的宽度
		height:120, //广告位的高度
		left:GetRandomNum(1,300), //广告位距离图片左边的距离
		top:GetRandomNum(1,500), //广告位距离图片顶端的距离
		url:'http://www.117kj.com', //广告链接
		text:'网上投注,资金100%安全-《澳门大资本赌场》取款3秒到账。100图库全程担保，点击免费开户》', //广告文字内容
		fsize:20, //广告文字大小
		fweight:true, //广告文字是否加粗（加粗：true | 不加粗：false）
		fcolor:'#f00', //广告文字颜色
		image:'/Index/Public/css/images/tuku_logo.png', //广告图片地址
		flag:true //广告内容是文本还是图片（图片：true | 文本：false）
	};
	adbox(adclass, imghover.offsetWidth, imghover.offsetHeight);
	//-->文字广告位结束
	
	imghover.innerHTML = imghover.innerHTML + adHtml;
	
	if(browser.versions.ie){
		$('#prev').hover(
			function(){$(this).css('background', 'transparent url(/pmmb/image/arr_left.gif) no-repeat 2% 50%');},
			function(){$(this).css('background', 'url(about:blank)');	}
		);
		$('#next').hover(
			function(){$(this).css('background', 'transparent url(/pmmb/image/arr_right.gif) no-repeat 98% 50%');	},
			function(){$(this).css('background', 'url(about:blank)');	}
		);
	}
	
	$('.adbox .adcon a').hover(
		function(){$(this).parents('.adbox').find('.adboxbg').css('opacity', 0.4);},
		function(){$(this).parents('.adbox').find('.adboxbg').css('opacity', 0.3);}
	);
};
