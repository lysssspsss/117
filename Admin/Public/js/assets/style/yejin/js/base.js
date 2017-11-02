/*
 * name: base
 * version: 2.10.2
 * update: base.getScript()增加window.jQuery变量挂载
 * date: 2015-09-17
 */
define('base', function(require, exports, module) {
	var $ = require('jquery');

	/*
	 * cookie
	 */
	$.cookie = function(name, value, options) {
		if (typeof value != 'undefined') { // name and value given, set cookie
			options = options || {};
			if (value === null) {
				value = '';
				options.expires = -1;
			}
			var expires = '';
			if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
				var date;
				if (typeof options.expires == 'number') {
					date = new Date();
					date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
				} else {
					date = options.expires;
				}
				expires = '; expires=' + date.toUTCString();
				// use expires attribute, max-age is not supported by IE
			}
			var path = options.path ? '; path=' + options.path : '';
			var domain = options.domain ? '; domain=' + options.domain : '';
			var secure = options.secure ? '; secure' : '';
			document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
		} else { // only name given, get cookie
			var cookieValue = null;
			if (document.cookie && document.cookie != '') {
				var cookies = document.cookie.split(';');
				for (var i = 0; i < cookies.length; i++) {
					var cookie = $.trim(cookies[i]);
					// Does this cookie string begin with the name we want?
					if (cookie.substring(0, name.length + 1) == (name + '=')) {
						cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
						break;
					}
				}
			}
			return cookieValue;
		}
	};

	/*
	 * 延迟渲染
	 */
	var _push = function(dom, fn) {

		var topush = function(_dom, _fn) {
			if (!$(dom).length) return;
			$(_dom).each(function(i, e) {
				var template, html;
				if($(e).children('textarea').length){
					template = $(e).children('textarea');
					html = template.val();
				}else if($(e).children('script[type="text/template"]').length){
					template = $(e).children('script[type="text/template"]');
					html = template.html();
				}
				
				if($(e).hasClass('pushed') || !template) return;

				if (template.data('url')) {
					$.ajax({
						url: template.data('url'),
						success: function(data) {
							$(e).html(data).addClass('pushed');
							typeof(_fn) === 'function' && _fn(e);
						}
					})
				} else {
					$(e).html(html).addClass('pushed');
					typeof(_fn) === 'function' && _fn(e);
				}
			})
		};
		if (fn == void 0) {
			if (dom && typeof(dom) !== 'function') {
				topush(dom, fn);
			} else {
				fn = dom;
				dom = '.topush';
				topush(dom, fn);
			}
		} else {
			topush(dom, fn);
		}
	};
	/*
	 * 按需渲染
	 */
	var _scanpush = function() {
		$(function(){
			var typeCatch = _getType();
			if (typeCatch == 'Pc') {
				_push('.PcPush', function(that) {
					$(that).trigger('PcPush');
				})
			} else {
				_push('.UnpcPush', function(that) {
					$(that).trigger('UnpcPush');
				})
			}
			if (typeCatch == 'Mobile') {
				_push('.MobilePush', function(that) {
					$(that).trigger('MobilePush');
				})
			} else {
				_push('.UnmobilePush', function(that) {
					$(that).trigger('UnmobilePush');
				})
			}
		})
	}

	/*
	 * 设备识别
	 */
	var _getType = function(callback) {
		var _Type = 'Pc';
		if (window.getComputedStyle) {
			var bodyMark = window.getComputedStyle(document.body, ":after").getPropertyValue("content");
			_Type = /Mobile/.test(bodyMark) ? 'Mobile' : (/Pad/.test(bodyMark) ? 'Pad' : 'Pc');
		};
		if (!callback) return _Type;
		callback(_Type);
	};

	/*
	 * 设备方向
	 */
	var _getOrient = function(callback) {
		var _Orient;
		if (window.orientation == 0 || window.orientation == 180) {
			_Orient = 'Shu'
		} else if (window.orientation == 90 || window.orientation == -90) {
			_Orient = 'Heng'
		};
		if (_Orient === void(0)) {
			_Orient = $(window).width() > $(window).height() ? 'Heng' : 'Shu';
		}
		if (!callback) return _Orient;
		callback(_Orient);
	};

	$(window).bind("orientationchange", function(event) {
		$('body').removeClass('Heng Shu').addClass(_getOrient())
	});

	/*
	 * 响应图片
	 */
	var ready = require('img-ready');
	var _resImg = function(bigSrc) {
		bigSrc = bigSrc ? bigSrc : 'data-src';
		_getType(function(type) {
			if (!/Mobile/.test(type)) {
				$('img[' + bigSrc + ']').each(function(i, e) {
					$(e).attr('src', $(e).attr(bigSrc));
					ready($(e).attr('src'), function() {},
						function(width, height) {
							$(e).removeAttr(bigSrc);
						}
					)
				})
			}
		})
	};



	/*
	 * 分页加载
	 */
	var _loadAsync = function(option) {
		var def = {
				url: null, 
				size: 6, 
				data: {}, 
				callback: null
			},
			opt = $.extend({},def,option),
			process = _loadAsync.prototype.process,
			trueUrl,
			getPage;
		if(!opt.url){
			return console.warn('base.load()：参数缺少url');
		}
		//唯一标识
		trueUrl = opt.url+'?'+$.param(opt.data);
		//进程检索
		for(var i=0;i<process.length;++i){
			if(process[i].url==trueUrl){
				getPage = process[i].getPage;
				break;
			}
		}
		if(!getPage) {
			var newProcess = {};
			getPage = _loadAsync.prototype.newGetPage();
			newProcess.url = trueUrl;
			newProcess.getPage = getPage;
			process.push(newProcess);
			_loadAsync.prototype.process = process;
		}
		//销毁无用变量
		trueUrl = null;
		process = null;
		//合并数据
		opt.data.page = getPage();
		opt.data.size = opt.size;
		//发送请求
		$.ajax({
			url: opt.url,
			data: opt.data,
			dataType: opt.data.dataType || 'json',
			success: function(res) {
				if(res && res.status && $.trim(res.status)==='ok' || (res && opt.data.dataType && opt.data.dataType!='json')){
					typeof(opt.callback)==='function' && opt.callback(res);
				}else{
					getPage(true);
					console.warn('base.load()：没有下一页或数据异常');
				}
			},
			error: function(a) {
				getPage(true);
				console.warn(a);
			}
		})
	};
	//页码累加闭包
	_loadAsync.prototype.newGetPage = function(){
		var loadPage = -1,
		func = function(){
			return ++loadPage;
		}
		return func;
	}
	//进程管理
	_loadAsync.prototype.process = [];

	/*
	 * 函数节流
	 * @method: 函数体; @delay: 过滤执行间隔; @duration: 至少执行一次的间隔
	 */
	var _throttle = function throttle(method, delay, duration) {
		var timer = null,
			begin = new Date();
		delay = delay ? delay : 64;
		duration = duration ? duration : 640;
		return function() {
			var context = this,
				args = arguments,
				current = new Date();;
			clearTimeout(timer);
			if (current - begin >= duration) {
				method.apply(context, args);
				begin = current;
			} else {
				timer = setTimeout(function() {
					method.apply(context, args);
				}, delay);
			}
		}
	};

	/*
	 * 获取url参数
	 * @name：要获取的键；@search：可选，url
	 */
	var _urlParam = function getQueryString(name, url) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
		var s = url ? (url.split('?')[1] ? url.split('?')[1] : '') : window.location.search.substr(1);
		var r = s.match(reg);
		if (r != null) {
			return decodeURI(r[2]);
		}
		return null;
	}

	/*
	 * 浏览器
	 */
	var userAgent = navigator.userAgent.toLowerCase(),
		_browser = {};
	_browser.isMobile = !!userAgent.match(/(iphone|ipod|ipad|android|blackberry|bb10|windows phone|tizen|bada)/) && _getType()!=="Pc";
	_browser.ie = /msie\s*(\d+)\./.exec(userAgent) ? /msie\s*(\d+)\./.exec(userAgent)[1] : 0;
	_browser.platform = navigator.platform;
	_browser.agent = userAgent;
	_browser.support3d = (function() {
		var el = document.createElement('p'),
			has3d,
			transforms = {
				'webkitTransform': '-webkit-transform',
				'OTransform': '-o-transform',
				'msTransform': '-ms-transform',
				'MozTransform': '-moz-transform',
				'transform': 'transform'
			};
		// Add it to the body to get the computed style.
		document.body.insertBefore(el, null);
		for (var t in transforms) {
			if (el.style[t] !== undefined) {
				el.style[t] = "translate3d(1px,1px,1px)";
				has3d = window.getComputedStyle(el).getPropertyValue(transforms[t]);
			}
		}
		document.body.removeChild(el);
		return (has3d !== undefined && has3d.length > 0 && has3d !== "none");
	})();

	/*
	 * jquery.placeholder
	 * http://mths.be/placeholder v2.1.1 by @mathias 
	 */
	(function(){var isOperaMini=Object.prototype.toString.call(window.operamini)=='[object OperaMini]';var isInputSupported='placeholder'in document.createElement('input')&&!isOperaMini;var isTextareaSupported='placeholder'in document.createElement('textarea')&&!isOperaMini;var valHooks=$.valHooks;var propHooks=$.propHooks;var hooks;var placeholder;if(isInputSupported&&isTextareaSupported){placeholder=$.fn.placeholder=function(){return this};placeholder.input=placeholder.textarea=true}else{var settings={};placeholder=$.fn.placeholder=function(options){var defaults={customClass:'placeholder'};settings=$.extend({},defaults,options);var $this=this;$this.filter((isInputSupported?'textarea':':input')+'[placeholder]').not('.'+settings.customClass).bind({'focus.placeholder':clearPlaceholder,'blur.placeholder':setPlaceholder}).data('placeholder-enabled',true).trigger('blur.placeholder');return $this};placeholder.input=isInputSupported;placeholder.textarea=isTextareaSupported;hooks={'get':function(element){var $element=$(element);var $passwordInput=$element.data('placeholder-password');if($passwordInput){return $passwordInput[0].value}return $element.data('placeholder-enabled')&&$element.hasClass(settings.customClass)?'':element.value},'set':function(element,value){var $element=$(element);var $passwordInput=$element.data('placeholder-password');if($passwordInput){return $passwordInput[0].value=value}if(!$element.data('placeholder-enabled')){return element.value=value}if(value===''){element.value=value;if(element!=safeActiveElement()){setPlaceholder.call(element)}}else if($element.hasClass(settings.customClass)){clearPlaceholder.call(element,true,value)||(element.value=value)}else{element.value=value}return $element}};if(!isInputSupported){valHooks.input=hooks;propHooks.value=hooks}if(!isTextareaSupported){valHooks.textarea=hooks;propHooks.value=hooks}$(function(){$(document).delegate('form','submit.placeholder',function(){var $inputs=$('.'+settings.customClass,this).each(clearPlaceholder);setTimeout(function(){$inputs.each(setPlaceholder)},10)})});$(window).bind('beforeunload.placeholder',function(){$('.'+settings.customClass).each(function(){this.value=''})})}function args(elem){var newAttrs={};var rinlinejQuery=/^jQuery\d+$/;$.each(elem.attributes,function(i,attr){if(attr.specified&&!rinlinejQuery.test(attr.name)){newAttrs[attr.name]=attr.value}});return newAttrs}function clearPlaceholder(event,value){var input=this;var $input=$(input);if(input.value==$input.attr('placeholder')&&$input.hasClass(settings.customClass)){if($input.data('placeholder-password')){$input=$input.hide().nextAll('input[type="password"]:first').show().attr('id',$input.removeAttr('id').data('placeholder-id'));if(event===true){return $input[0].value=value}$input.focus()}else{input.value='';$input.removeClass(settings.customClass);input==safeActiveElement()&&input.select()}}}function setPlaceholder(){var $replacement;var input=this;var $input=$(input);var id=this.id;if(input.value===''){if(input.type==='password'){if(!$input.data('placeholder-textinput')){try{$replacement=$input.clone().attr({'type':'text'})}catch(e){$replacement=$('<input>').attr($.extend(args(this),{'type':'text'}))}$replacement.removeAttr('name').data({'placeholder-password':$input,'placeholder-id':id}).bind('focus.placeholder',clearPlaceholder);$input.data({'placeholder-textinput':$replacement,'placeholder-id':id}).before($replacement)}$input=$input.removeAttr('id').hide().prevAll('input[type="text"]:first').attr('id',id).show()}$input.addClass(settings.customClass);$input[0].value=$input.attr('placeholder')}else{$input.removeClass(settings.customClass)}}function safeActiveElement(){try{return document.activeElement}catch(exception){}}})();

	/*
	 * 内部方法
	 */
	// 兼容css3位移
	!$.fn._css && ($.fn._css = function(LeftOrTop, number) {
		var hasTrans = (LeftOrTop == 'left' || LeftOrTop == 'top') ? true : false,
			canTrans = _browser.support3d,
			theTrans = LeftOrTop == 'left' ? 'translateX' : 'translateY',
			matrixPosi = hasTrans ? (LeftOrTop == 'left' ? 4 : 5) : null;
		if (number != void(0)) {
			//赋值
			if (canTrans && hasTrans) {
				number = parseFloat(number) + 'px';
				$(this).css('transform', theTrans + '(' + number + ')');
			} else {
				$(this).css(LeftOrTop, number);
			}
			return $(this)
		} else {
			//取值
			if (canTrans && hasTrans && $(this).css('transform') !== 'none') {
				var transData = $(this).css('transform').match(/\((.*\,?\s?){6}\)$/)[0].substr(1).split(',');
				return parseFloat(transData[matrixPosi]);
			} else {
				return $(this).css(LeftOrTop)
			}
		}
	});
	// 加载指定属性的图片
	!$.fn._loadimg && ($.fn._loadimg = function(imgattr) {
		var lazyImg = $(this).find('img[' + imgattr + ']');
		if (lazyImg.length) {
			lazyImg.each(function(i, e) {
				if ($(e).attr(imgattr) != 'loaded' && $.trim($(this).attr(imgattr)) != '') {
					$(e).attr('src', $(this).attr(imgattr)).attr(imgattr, 'loaded')
				}
			})
		};
		return $(this);
	});

	//getScript
	var _getScript = function(road, option) {
		if (road && road.split || ($.isArray(road) && road.length)) {
			var def = {
					css: false,
					jquery: false,
					rely: false,
					callback: null
				},
				opt = $.extend({}, def, option),
				loadScript = function(road, hold){
					/*
					@road:请求url
					@hold:是否阻断默认回调，为function将阻断默认回调并执行自身
					*/
					var file = seajs.resolve(road),
						cssfile = '', 
						$link;
					if(opt.css){
						if(opt.css.split){
							cssfile = opt.css;
						}else{
							cssfile = file.replace(/\.js$/,".css");
						}
						$link = $('<link rel="stylesheet" href="'+cssfile+'">');
						$link.appendTo('head').error(function(e){
							$link.remove();
							cssfile = null;
							$link = null;
							return null;
						});
					}
					$.getScript(file).done(function(data, status) {
						if(hold && typeof(hold)==='function'){
							hold();
						}else{
							if(opt.callback && typeof(opt.callback) === 'function'){
								opt.callback(data, status);
							}
						}
					}).fail(function(xhr, settings, exception) {
						console.warn(exception);
					});  
				};
			if (opt.jquery) {
				window.$ = window.jQuery = $;
			}
			if(road.split){
				loadScript(road);
			}else if(road.length){
				var scriptsLength = road.length,
					scriptsCount = 0;
				if(opt.rely){
					//线性依赖
					var getNext = function(isLast){
							var hold;
							if(!isLast){
								hold = function(){
									scriptsCount++;
									getNext(scriptsLength>scriptsCount);
								}
							}
							loadScript(road[scriptsCount], hold);
						}
					getNext();
				}else{
					//同时发起
					var scriptRoad;
					while(scriptsCount<scriptsLength){
						scriptRoad = road[scriptsCount];
						scriptsCount++;
						loadScript(scriptRoad, scriptsLength>scriptsCount);
					}
				}
			}
		}
	}
	//ajaxCombo
	var _ajaxCombo = function(option) {
		var def = {
				comboUrl: "/test/combo.php",
				extendData: {},
				comboDataKey: "paramArray",
				duration: 16,
				everytimeout: 1000
			},
			ajaxComboObject,
			ajaxComboIndex,
			ajaxComboTimer;
		_ajaxCombo.prototype.option = $.extend(def, option || {});
		if (_ajaxCombo.prototype.runed) {
			return null;
		}
		_ajaxCombo.prototype.runed = true;
		$(document).bind("ajaxSend", function(event, request, settings) {
			var opt = _ajaxCombo.prototype.option,
				newAjax;
			if(!settings.combo){
				return null;
			}
			request.abort();
			newAjax = {
				async: settings.async,
				contentType: settings.contentType,
				crossDomain: settings.crossDomain,
				data: settings.data,
				dataType: settings.dataType,
				type: settings.type,
				url: settings.url,
				success: settings.success
			};
			//归零
			if(ajaxComboTimer) {
				clearTimeout(ajaxComboTimer);
			}else{
				ajaxComboIndex = 0;
				ajaxComboObject = {};
			}
			(function(){
				//get请求特殊处理
				if (settings.type === 'GET') {
					newAjax.data = newAjax.url.split('?')[1];
					newAjax.url = newAjax.url.split('?')[0];
				}
				//data转obj
				var dataArray = newAjax.data.split('&'),
					dataObj = {};
				$.each(dataArray, function(i, e) {
					var _key = dataArray[i].split('=')[0],
						_val = dataArray[i].split('=')[1];
					dataObj[_key] = _val;
				});
				//并入ajaxComboObject
				newAjax.data = dataObj;
				ajaxComboObject['combo' + (++ajaxComboIndex)] = newAjax;
			})();
			//合并发送
			ajaxComboTimer = setTimeout(function() {
				//剔除回调函数
				var ajaxComboData = $.extend(true, {}, opt.extendData),
					localCatch = $.extend(true, {}, ajaxComboObject);
				ajaxComboData[opt.comboDataKey] = $.extend(true, {}, localCatch);
				$.each(localCatch, function(key, val) {
					if (localCatch[key]["success"]) {
						delete ajaxComboData[opt.comboDataKey][key]["success"]
					}
				});
				ajaxComboTimer = null;
				$.ajax({
					type: 'post',
					global: false,
					timeout: ajaxComboIndex * opt.everytimeout,
					url: opt.comboUrl,
					data: ajaxComboData,
					dataType: 'json',
					success: function(data) {
						if (data && typeof(data) === 'object') {
							//分发回调
							$.each(localCatch, function(key, val) {
								if (localCatch[key]["success"]) {
									if (data[key] && data[key]["data"]) {
										localCatch[key]["success"](data[key]["data"]);
									} else {
										console.log("ajaxCombo:" + localCatch[key]["url"] + "数据有误");
									}
								}
							});
							localCatch = null;
						} else {
							console.log('ajaxCombo:数据错误');
						}
					},
					error: function(xhr){
						//分发原请求
						$.each(localCatch, function(key, val) {
							$.ajax(localCatch[key]);
						});
						localCatch = null;
					}
				});
			}, opt.duration);
			return null;
		});
	}

	/*
	 * 输出
	 */
	module.exports = {
		browser: _browser,
		getStyle: function(elem, attr) {
			if (elem.currentStyle) {
				return elem.currentStyle[attr];
			} else if (document.defaultView && document.defaultView.getComputedStyle) {
				attr = attr.replace(/([A-Z])/g, '-$1').toLowerCase();
				return document.defaultView.getComputedStyle(elem, null).getPropertyValue(attr);
			} else {
				return null;
			}
		},
		getType: _getType,
		resImg: _resImg,
		getOrient: _getOrient,
		topush: _push,
		scanpush: _scanpush,
		toload: _loadAsync,
		throttle: _throttle,
		getUrlParam: _urlParam,
		getScript: _getScript,
		ajaxCombo: _ajaxCombo
	}

});