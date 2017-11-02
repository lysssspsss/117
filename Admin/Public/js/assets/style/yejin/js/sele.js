/*
J_sele

v0.9

*/
define('sele',function(require, exports, module) {
   var $ = require('jquery');
	seajs.importStyle('.sele{position:relative;height:20px;line-height:20px;width:99px;cursor:pointer;}.sele_{display:none;position:absolute;width:100%;left:-1px;top:25px;background:#fff;border:1px solid #cacad9;max-height:200px;overflow:auto;}'
		,module.uri)
	$.fn.sele=function(config) {
	var def={
			act:"mouseenter",
			fn:function(a){}
			},
		 opt=$.extend({},def,config || {}),
		 val;

	$(this).on(opt.act,function(){sele_show(this,opt.act)}).on('mouseleave',function(){sele_hide(this)});
	function sele_show(me,evt){
		$(me).find('.sele_').show().children('a').bind('click',function(event){
			event.stopPropagation();
			if(!$(this).attr('target')){
				event.preventDefault();
				if($(me).find('.btn').length){
					$(me).find('.btn').attr('href',$(this).attr('href'))
				};
				$(this).parent().hide().parents('.sele').find('span').text($(this).text());
				$(this).parent().children('a').unbind();
				val=$(this).data('val');

				opt.fn(val)
			};
		})
	};
	function sele_hide(me){
		$(me).find('.sele_').hide()
	};
};
var $sele=$('.sele');
$sele.each(function(i) {$(this).css('z-index',$sele.length-i).sele()});
	
	
});