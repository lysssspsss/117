$(document).ready(function(e){
	if(fw<320){
		$('#bigpic').on('click', function(){
			var arrPicc = $('#fpic').find('li');
			for(var i=0; i<arrPicc.length; i++){
				if($($('#fpic li')[i]).css('display')!=='none'){
					$('#bigpic').attr('href', $($('#fpic img')[i]).attr('src'));break;
				}
			}
		});
	}else{
		$('#bigpic').on('click', function(){
			var img = new Image();
			for(var i=0; i<document.getElementById('fpic').getElementsByTagName('li').length; i++){
				if(document.getElementById('fpic').getElementsByTagName('li').item(i).style.display!=='none'){
					img.src = document.getElementById('fpic').getElementsByTagName('img').item(i).src;	break;
				}
			}
			var areaW = img.width || document.getElementById('fpic').getElementsByTagName('img').item(0).offsetWidth;
			var areaH = img.height || document.getElementById('fpic').getElementsByTagName('img').item(0).offsetHeight;
			var offsetH = 20;
			var html = '<img src="' + img.src + '" />';
			if(areaW>($(window).outerWidth()-46)){
				areaH = parseInt(($(window).outerWidth() - 46) / areaW * areaH);
				areaW = $(window).outerWidth() - 46;
				html = '<img src="' + img.src + '" width="' + areaW + '" height="' + areaH + '" />';
			}
			if(areaH<($(window).outerHeight()-56)){
				offsetH = parseInt(($(window).outerHeight() - 16 - areaH) / 2);
			}
			var i = $.layer({
				type: 1,
				shade: [0.8, '#000', true],
				shadeClose: true,
				offset: [offsetH+'px', '50%'],
				area: [areaW, areaH],
				border: [8, 0.2, '#fff', true],
				closeBtn: [0, true],
				fix: false,
				title: false,
				page: {html: html}
			});
		});
	}

	if(window.localStorage){
		if(!localStorage.getItem('mywin')){
			var areaW = $(window).outerWidth() - 22;
			var areaH = $(window).outerHeight() - 53;
			if(areaW>480){
				areaW = 320;
				areaH = areaH - 100;
			}
			var mywin = {width:areaW, height:areaH};
			localStorage.setItem('mywin', JSON.stringify(mywin));
		}
	}else{
		if(!getCookie('mywinW') || !getCookie('mywinH')){
			var areaW = $(window).outerWidth() - 22;
			var areaH = $(window).outerHeight() - 53;
			if(areaW>480){
				areaW = 320;
				areaH = areaH - 100;
			}
			addCookie('mywinW', areaW, 365);
			addCookie('mywinH', areaH, 365);
		}
	}
	
	$('#lottery').bind('click', function(event){
		if(window.localStorage){
			var mywin2 = JSON.parse(localStorage.getItem('mywin'));
			var w = mywin2.width;
			var h = mywin2.height;
		}else{
			var w = getCookie('mywinW');
			var h = getCookie('mywinH');
		}
		$.dialog({
			id: 'lottery1',
			title: '【点这里-可移动】【点右下角-可扩大】',
			content: "url:http://www.117kj.com/index.php/Home/Wap/history.html?id=2017",
			left: '0%',
			top: 0,
			width: w,
			height: h,
			padding: '0',
			init: function(){this.zindex();},
			close: function(){
				if(window.localStorage){
					mywin2 = JSON.parse(localStorage.getItem('mywin'));
					mywin2.width = this.DOM.wrap[0].offsetWidth - 22;
					mywin2.height = this.DOM.wrap[0].offsetHeight - 53;
					localStorage.setItem('mywin', JSON.stringify(mywin2));
				}else{
					addCookie('mywinW', this.DOM.wrap[0].offsetWidth - 22, 365);
					addCookie('mywinH', this.DOM.wrap[0].offsetHeight - 53, 365);
				}
			}
		});
	});
		
	$('.sidebar .menu7 a').click(
		function(){$(document).scrollTop(0);}
	);
});

if(!browser.versions.ie678 && !browser.versions.android && !browser.versions.iphone && !browser.versions.ipad && !browser.versions.ipod && !browser.versions.winphone){
	$(window).resize(function(e){
		setTimeout(window.location.reload(), 1000);
	});
}

var focusImgs = function(n){
	var arrBtn = document.getElementById('fbtn').getElementsByTagName('li');
	var arrPic = document.getElementById('fpic').getElementsByTagName('li');
	var allmenu = document.getElementById('lists').getElementsByTagName('li');
	slideToggle('#allmenu', '#lists', 100, '展开全部期数', '收起全部期数');
	
	var cur = 0;
	for(var i=0; i<arrPic.length; i++){
		if(arrPic.item(i).style.display !== 'none'){
			cur = i;break;
		}
	}
	for(var i=0; i<arrPic.length; i++){
		if(i===n){
			arrBtn.item(i).className = 'on';
			arrPic.item(i).style.display = 'block';
			var img = new Image();
			img.src = $(arrPic.item(i).getElementsByTagName('img').item(0)).attr('_src') || $(arrPic.item(i).getElementsByTagName('img').item(0)).attr('src');
			if(!browser.versions.ie6){
				arrPic.item(i).innerHTML = '<img src="' + img.src + '" onload="javascript:formatImg(this, ' + document.getElementById('fpic').offsetWidth + ');"   onerror="this.src=\'/static/pmmb/image/nofind.gif\'"/>';
			}else{
				setTimeout(_show(i, img.src), 100);
			}
			allmenu.item(i).className = 'on';
			var x = 10;
			if(fw<800){	x = 8;}
			else if(fw<900){x = 9;}
			var np = parseInt(n / x) - parseInt(cur / x);
			if(np>0){
				for(var j=0; j<np; j++){$('.focusImgs .navNext').click();}
			}else if(np<0){
				for(var j=0; j>np; j--){$('.focusImgs .navPrev').click();}
			}
		}else{
			arrBtn.item(i).className = '';
			arrPic.item(i).style.display = 'none';
			allmenu.item(i).className = '';
		}
	}
};

var pn = 0;
var focusImgs2 = function(v){

	//2014-1-7
	//var thisyear= new Number(2012);
	var nextyear=Number(thisyear+1);
	var preyear=Number(thisyear-1);

	if(preyear<2011){
		preyear=Number(2014);
	}
	
	if(nextyear>2014){
		nextyear=Number(2013);
	}
	

	var arrBtn = document.getElementById('fbtn').getElementsByTagName('li');
	var arrPic = document.getElementById('fpic').getElementsByTagName('li');
	var allmenu = document.getElementById('lists').getElementsByTagName('li');
	for(var i=0; i<arrPic.length; i++){
		if(arrPic.item(i).style.display !== 'none'){
			pn = i;break;
		}
	}
	

	if(pn===0 && v==='prev'){
		var html = 
		"<div style=\"width:250px; height:100px; border:1px solid #8a8a8a; background:#000; font-size:14px; color:#fff;\">" +
		"	<dl style=\"padding:10px; text-align:center;\">" +
		"    	<dt style=\"width:230px; height:30px; padding-bottom:10px; line-height:30px;\">已是<font style=\"color:#FF0000\">[" + thisyear + "年]</font>最新一期</dt>" +
		"        <dd style=\"width:230px; height:30px;\">" +
		"        <a style=\"display:inline-block; height:21px; padding:4px 8px; border:1px solid #fff; line-height:21px; color:#fff; margin-right:5px; _display:inline; _float:left; _width:56px; _margin-left:25px;\" href=\"/\">返回首页</a>" +
		"    </dl>" +
		"</div>";
		var offsetH = $('.content').offset().top + 100;
		var i = $.layer({
			type: 1,
			shade: [0.8, '#000', true],
			shadeClose: true,
			offset: [offsetH+'px', '50%'],
			area: ['252px', '102px'],
			border: [8, 0.2, '#fff', true],
			closeBtn: [0, true],
			fix: false,
			title: false,
			page: {html: html}
		});
	}
	
	if(pn===(arrPic.length-1) && v==='next'){
		var html = 
		"<div style=\"width:250px; height:100px; border:1px solid #8a8a8a; background:#000; font-size:14px; color:#fff;\">" +
		"	<dl style=\"padding:10px; text-align:center;\">" +
		"    	<dt style=\"width:230px; height:30px; padding-bottom:10px; line-height:30px;\">您已浏览完<font style=\"color:#FF0000\">[" + thisyear + "年]</font>所有期数</dt>" +
		"        <dd style=\"width:230px; height:30px;\">" +
		"        <a style=\"display:inline-block; height:21px; padding:4px 8px; border:1px solid #fff; line-height:21px; color:#fff; margin-right:5px; _display:inline; _float:left; _width:56px; _margin-left:25px;\" href=\"javascript:;\" onclick=\"javascript:window.location.reload();\">重新浏览</a>" +
		"    </dl>" +
		"</div>";
		var offsetH = $('.content').offset().top + 100;
		var i = $.layer({
			type: 1,
			shade: [0.8, '#000', true],
			shadeClose: true,
			offset: [offsetH+'px', '50%'],
			area: ['252px', '102px'],
			border: [8, 0.2, '#fff', true],
			closeBtn: [0, true],
			fix: false,
			title: false,
			page: {html: html}
		});
	}
	if(v==='prev' && pn>0){pn = pn - 1;}
	else if(v==='next' && pn<(arrPic.length-1)){pn = pn + 1;}
	
	for(var i=0; i<arrPic.length; i++){
		if(i===pn){
			arrBtn.item(i).className = 'on';
			arrPic.item(i).style.display = 'block';
			var img = new Image();
			img.src = $(arrPic.item(i).getElementsByTagName('img').item(0)).attr('_src') || $(arrPic.item(i).getElementsByTagName('img').item(0)).attr('src');
			if(!browser.versions.ie6){
				arrPic.item(i).innerHTML = '<img src="' + img.src + '" onload="javascript:formatImg(this, ' + document.getElementById('fpic').offsetWidth + ');"   onerror="this.src=\'/pmmb/image/nofind.gif\'"/>';
			}else{
				setTimeout(_show(i, img.src), 100);
			}
			allmenu.item(i).className = 'on';
		}else{
			arrBtn.item(i).className = '';
			arrPic.item(i).style.display = 'none';
			allmenu.item(i).className = '';
		}
	}
	if(fw<480){
		if(v==='next'){
			if(pn===0){$('.focusImgs .navPrev').click();} else if(pn%3==0){jQuery('.focusImgs .navNext').click();}
		}else{
			if(pn===0 || (pn+1)%3==0){$('.focusImgs .navPrev').click();}
		}
	}else if(fw<600){
		if(v==='next'){
			if(pn===0){$('.focusImgs .navPrev').click();} else if(pn%5==0){jQuery('.focusImgs .navNext').click();}
		}else{
			if(pn===0 || (pn+1)%5==0){$('.focusImgs .navPrev').click();}
		}
	}else if(fw<720){
		if(v==='next'){
			if(pn===0){$('.focusImgs .navPrev').click();} else if(pn%7==0){jQuery('.focusImgs .navNext').click();}
		}else{
			if(pn===0 || (pn+1)%7==0){$('.focusImgs .navPrev').click();}
		}
	}else if(fw<800){
		if(v==='next'){
			if(pn===0){$('.focusImgs .navPrev').click();} else if(pn%8==0){jQuery('.focusImgs .navNext').click();}
		}else{
			if(pn===0 || (pn+1)%8==0){$('.focusImgs .navPrev').click();}
		}
	}else if(fw<900){
		if(v==='next'){
			if(pn===0){$('.focusImgs .navPrev').click();} else if(pn%9==0){jQuery('.focusImgs .navNext').click();}
		}else{
			if(pn===0 || (pn+1)%9==0){$('.focusImgs .navPrev').click();}
		}
	}else{
		if(v==='next'){
			if(pn===0){$('.focusImgs .navPrev').click();} else if(pn%10==0){jQuery('.focusImgs .navNext').click();}
		}else{
			if(pn===0 || (pn+1)%10==0){$('.focusImgs .navPrev').click();}
		}
	}
};

String.prototype.trim=function(){return this.replace(/(^[\s　]+)|([\s　]+$)/g,'')};
String.prototype.strLen=function(){return this.replace(/[^\x00-\xFF]/g,'**').length};



var chkForm = function(obj){
	var key = obj.value.trim();
	if(key==='快速找图？请输入搜索关键字'){
		alert('请输入搜索关键字！');return false;
	}
	if(key.strLen()<2){
		alert('关键词不能小于2个字节！');return false;
	}
	return true;
};

var slideToggle = function(o, obj, t, msg1, msg2){
	var ie = navigator.userAgent.indexOf('MSIE') !== -1 ? true : false;
	if(ie){
		if(msg1!=='' && msg2!==''){
			if($(o).text()===msg1){
				$(o).css('background-position', '-150px -101px');
				$(o).text(msg2);
				$(obj).css('display', 'block');
			}else{
				$(o).css('background-position', '-150px -51px');
				$(o).text(msg1);
				$(obj).css('display', 'none');
			}
		}
	}else{
		$(obj).slideToggle(t, function(){
			if(msg1!=='' && msg2!==''){
				if($(o).text()===msg1){
					$(o).css('background-position', '-150px -101px');
					$(o).text(msg2);
				}else{
					$(o).css('background-position', '-150px -51px');
					$(o).text(msg1);
				}
			}
		});
	}
};

var addFavorite = function(sURL, sTitle){
    if(document.all){
        try{
			window.external.addFavorite(sURL, sTitle);
		}catch(e){
			alert('加入收藏失败，请按“Ctrl+D”进行收藏！');
		}
		return false;
    }else{
		if(navigator.userAgent.indexOf('Firefox')!==-1){return true;}
		if(navigator.userAgent.indexOf('Opera')!==-1){return true;}
		if(navigator.userAgent.indexOf('Chrome')!==-1){
			alert('加入收藏失败，请按“Ctrl+D”进行收藏！');return false;
		}
		if(navigator.userAgent.indexOf('Safari')!==-1){
			alert('加入收藏失败，请按“Ctrl+D”进行收藏！');return false;
		}
        alert('加入收藏失败，请手动添加收藏！');return false;
    }
};

var addCookie = function(objName, objValue, objDays){
	var str = objName + '=' + escape(objValue);
	if(objDays>0){
		var date = new Date();
		var ms = objDays * 24 * 3600 * 1000;
		date.setTime(date.getTime() + ms);
		str = str + '; expires=' + date.toGMTString();
	}
	document.cookie = str;
};
var getCookie = function(objName){
	var arrStr = document.cookie.split('; ');
	for(var i=0; i<arrStr.length; i++){
		var temp = arrStr[i].split('=');
		if(temp[0]===objName){return unescape(temp[1]);}
	}
};

function favoriteSinglePhase(aLink){
	var src = $("#fpic .focus_pic li").eq(pn).find("img").attr("src");
	var href = "http://www.kj379.com/plus/stow.php?aid={dede:field.id/}&pic_id="+src;
	var aLinkObj = $(aLink);
	aLinkObj.attr("href",href);
}

//alert(url);
//2014-1-7 广告
$("#gg").append("<div><iframe src=\'\/100tkbocai\/ssgd.html\' width=\'100%\' marginwidth=\'0\' height=\'30\'  scrolling=\'no\' frameborder=\'0\' border=\'0\'><\/iframe><iframe src=\'\/100tkbocai\/bao.html\' width=\'100%\' marginwidth=\'0\' height=\'390\'  scrolling=\'no\' frameborder=\'0\' border=\'0\'><\/iframe><iframe src=\'\/100tkbocai\/danbao.html\' width=\'100%\' marginwidth=\'0\' height=\'83\'  scrolling=\'no\' frameborder=\'0\' border=\'0\'><\/iframe><script language='javascript' src='\/js\/dl.js'></script><\/div>"); 
