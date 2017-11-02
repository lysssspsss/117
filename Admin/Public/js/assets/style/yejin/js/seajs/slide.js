/*
 * name: slide.js
 * version: v3.1.0
 * update: 触屏允许循环
 * date: 2015-08-18
 */
define('slide',function(require, exports, module) {
    var $ = require('jquery');
    var base = require('base');
    seajs.importStyle('.slide{position:relative;overflow:hidden;-ms-touch-action:none;touch-action:none}.slide_wrap{position:absolute;width:100%;height:100%;overflow:hidden;*zoom:1}.slide_c{float:left;top:0;left:0;width:100%;height:100%;overflow:hidden;z-index:1}.slide_nav{position:absolute;z-index:8}.slide_nav .arrs{position:absolute;cursor:pointer;z-index:9;moz-user-select:-moz-none;-moz-user-select:none;-o-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none}.arrs.unable{cursor:default}'
        ,module.uri);

    require('touch');
    require('easing');
    var def = {
        wrap: 'ul',
        cell: 'li',
        effect: 'slide',    //切换 slide | fade | toggle
        direction: 'x',     //slide方向
        animate: 'swing',
        duration: 640,
        start: 0,
        auto: true,
        pause: true,        // true | false | (jquery selector)
        interval: 5e3,
        act: "mouseenter",
        prevHtml: "",
        nextHtml: "",
        prev: null,
        next: null,
        navs: null,
        imgattr: 'slide-src',
        callback: function() {},
        ext: function() {}
    };
    $.fn.slide = function(config) {
        return $(this).each(function(i, e) {
            var $this = $(e).addClass('slide').fadeIn(256),
                opt = $.extend({}, def, config || {}, $this.data("config") || {}),
                $wrap = $this.find(opt.wrap).addClass('slide_wrap'), 
                $cell = $wrap.find(opt.cell).addClass('slide_c'), 
                count = $cell.length,
                timer, $navs, $arrs,
                origin = 0,
                width = 0,
                efftct = function(){},
                init = function() {},
                windowLock = false,
                getPrev = function(number, _step) {
                    _step = _step ? _step : 1;
                    number = number <= 0 ? count - _step : number - _step;
                    return number;
                },
                getNext = function(number, _step) {
                    _step = _step ? _step : 1;
                    number = number >= count - _step ? 0 : number + _step;
                    return number;
                };

            //运行条件检测
            if (count <= 1) {
                $this.addClass('unable');
                $cell.unbind()._loadimg(opt.imgattr).addClass('active').show();
                typeof(opt.callback) === 'function' && opt.callback($this, $cell, origin);
                typeof(opt.ext) === 'function' && opt.ext($this, $cell, count);
                return $this;
            }
            if ($this.data('slideruning')) return $this;
            //初始化
            (function(){
                var _Target, _Direction, _Distance, _touchAction;
                init = function() {
                    var H = $this.outerHeight();

                    $wrap.css({
                        'height': H
                    });
                    $cell.css({
                        'position': 'absolute',
                        'height': H
                    });
                    switch (opt.effect) {
                        case 'slide':
                            if (opt.direction === 'y') {
                                _Target = 'height';
                                _Direction = 'top';
                                _Distance = parseInt($this.outerHeight());
                            } else {
                                _Target = 'width',
                                    _Direction = 'left',
                                    _Distance = parseInt($this.width());
                            }
                            $wrap.css(_Direction, -_Distance + 'px')
                                .css(_Target, _Distance * 3 + 'px');
                            $cell._css(_Direction, _Distance + 'px')
                                .css({
                                    'z-index': '0',
                                    'display': 'none'
                                })
                                .css(_Target, _Distance + 'px')
                                .unbind().
                            bind({
                                'movestart': function(e) {
                                    opt.auto && clearInterval(timer);
                                    $this.addClass('ontouch').data('moveTrigger',true);
                                },
                                'move': function(e) {
                                    if ($this.find('.slide_wrap:animated').length) {
                                        e.preventDefault();
                                        return;
                                    }
                                    var _distance;
                                    if (opt.direction === 'y') {
                                        _distance = e.distY;
                                    }else{
                                        _distance = e.distX;
                                    }
                                    setTimeout(function() {
                                        if (_distance < 0 ) {
                                            if($cell[origin + 1]){
                                                $wrap.css(_Direction, -_Distance + _distance / 2 + 'px');
                                                $cell.eq(getNext(origin))._loadimg(opt.imgattr).show()
                                                ._css(_Direction, _Distance * 2 + 'px');
                                            }else{
                                                _touchAction = 'next';
                                            }  
                                            return;
                                        }
                                        if (_distance > 0 ) {
                                            if($cell[origin - 1]){
                                                $wrap.css(_Direction, -_Distance + _distance / 2 + 'px');
                                                $cell.eq(getPrev(origin))._loadimg(opt.imgattr).show()
                                                ._css(_Direction, 0 + 'px');
                                            }else{
                                                _touchAction = 'prev';
                                            }
                                            return;
                                        }
                                        $this.data('moveTrigger',false);
                                    }, 0);
                                },
                                'moveend': function(e) {
                                    setTimeout(function() {
                                        $this.removeClass('ontouch');
                                        if ($this.find('.slide_wrap:animated').length || !$this.data('moveTrigger')) {
                                            e.preventDefault();
                                            return;
                                        }
                                        var _distance;
                                        if (opt.direction === 'y') {
                                            _distance = e.distY;
                                        }else{
                                            _distance = e.distX;
                                        }
                                        if (Math.abs(_distance) > _Distance / 5 || _touchAction.split) {
                                            if (_distance < 0 || _touchAction=='next') {
                                                efftct(getNext(origin), 1);
                                            } else if(_distance > 0 || _touchAction=='prev') {
                                                efftct(getPrev(origin), 0);
                                            }
                                            _touchAction && _touchAction.split && (_touchAction = null);
                                        } else {
                                            $wrap.css(_Direction, -_Distance + 'px');
                                        }
                                    },0);
                                }
                            });
                            break;
                    }
                };
                //效果
                efftct = function(current, direct, step, isInit) {
                    windowLock = true;
                    var _step = step ? step : 1,
                        _prev = getPrev(current, _step),
                        _next = getNext(current, _step);

                    $navs.removeClass('on nav_prev nav_next')
                        .eq(current).addClass('on')
                        .end().eq(_prev).addClass("nav_prev")
                        .end().eq(_next).addClass("nav_next");
                    $cell.removeClass('active slide_prev slide_next')
                        .eq(_prev).addClass("slide_prev")
                        .end().eq(_next).addClass("slide_next");
                    switch (opt.effect) {
                        case 'fade':
                            $cell.stop(1, 0).filter(':visible').fadeOut(opt.duration, opt.animate)
                                .end().eq(current)._loadimg(opt.imgattr).fadeIn(opt.duration * 1.5, opt.animate, function(){
                                    $(this).addClass('active');
                                });
                            break;
                        case 'toggle':
                            $cell.hide().eq(current)._loadimg(opt.imgattr).show(0, function(){
                                $(this).addClass('active');
                            });
                            break;
                        case 'slide':
                            direct == void(0) && (direct = true);
                            var _dir = !!direct,
                                wrap_move = _dir ? -_Distance * 2 : 0,
                                cell_move = _dir ? _Distance * 2 : 0,
                                _ori = origin; //存储起始元素，用于动作后处理起始元素

                            if ($cell.eq(current).is(':hidden')) {
                                $cell.eq(current)._css(_Direction, cell_move + 'px')
                                    ._loadimg(opt.imgattr).show(0, function(){
                                        $(this).addClass('active');
                                    });
                            }
                            if (isInit) {
                                //初始启动
                                $wrap.css(_Direction, -_Distance + 'px');
                                $cell._css(_Direction, _Distance + 'px')
                                    .eq(current).css('z-index', '2').show(0, function(){
                                        $(this).addClass('active');
                                    });
                            } else {
                                $cell.eq(_ori).show(0, function() {
                                    var _anim_data = {};
                                    _anim_data[_Direction] = wrap_move + 'px';
                                    $wrap.stop(1).animate(_anim_data, {
                                        duration: opt.duration,
                                        easing: opt.animate,
                                        complete: function() {
                                            $(this).css(_Direction, -_Distance + 'px');
                                            $cell._css(_Direction, _Distance + 'px')
                                                .css({
                                                    'z-index': '0'
                                                }).hide()
                                                .eq(current).css({
                                                    'z-index': '2'
                                                }).show().addClass('active');
                                        }
                                    });
                                });
                            }
                            break;
                    }
                    origin = current;
                    $this.data('play', origin);
                    setTimeout(function() {
                        typeof(opt.callback) === 'function' && opt.callback($this, $cell, origin);
                        windowLock = false;
                    }, opt.duration);
                };
            })();
            
            init();

            //添加导航
            (function() {
                var appendNav = function() {
                        var _links = '';
                        for (i = 0; i < count; i++) {
                            _links += ("<a>" + (i + 1) + "</a>");
                        }
                        $navs.empty().append(_links);
                    },
                    navIllegal = function() {
                        if ($navs.children('a').length !== count) {
                            console.log('指定的"slide_navs"数量不匹配,将自动生成"slide_navs".');
                            return true;
                        } else {
                            return false;
                        }
                    };
                if (opt.navs) {
                    if ($(opt.navs).length === 1) {
                        $navs = $(opt.navs);
                        if ($navs.attr('custom') == void(0) || ($navs.attr('custom') != void(0) && navIllegal())) {
                            appendNav();
                        }
                    } else {
                        console.log('只能指定唯一的slide_navs容器');
                        return;
                    }
                } else if ($this.find(".slide_nav").length) {
                    $navs = $this.find(".slide_nav").eq(0);
                    if (navIllegal()) {
                        appendNav();
                    }
                } else {
                    $navs = $('<div class="slide_nav"></div>');
                    appendNav();
                    $this.append($navs);
                }
                $navs = $navs.children('a');
            })();

            //添加左右按钮
            if ($(opt.prev).length || $(opt.next).length) {
                $arrs = $(opt.prev).addClass('arr_prev').add($(opt.next).addClass('arr_next'));
            } else {
                $this.append(function(i, h) {
                    $(h).find(opt.prev).remove().find(opt.next).remove();
                    return '<a href="###" class="arrs arr_prev" /><a href="###" class="arrs arr_next" />';
                });
                $arrs = $this.children('.arrs');
                $arrs.eq(0).html(opt.prevHtml).end().eq(1).html(opt.nextHtml);
            }
            if(opt.prevHtml && opt.prevHtml.split){
                $arrs.filter('.arr_prev').html(opt.prevHtml);
            }
            if(opt.nextHtml && opt.nextHtml.split){
                $arrs.filter('.arr_next').html(opt.nextHtml);
            }
            //事件绑定
            $navs.on(opt.act, function(e) {
                e.preventDefault();
                e.stopPropagation();
                if ($this.find('.slide_wrap:animated').length || $this.hasClass('ontouch')) return;
                var index = $(this).index(),
                    _dir, _step;

                if (index >= count || $(this).hasClass("on")) return false;
                //初始加载
                if (index === origin) {
                    origin = count - 1;
                    _dir = 1;
                    efftct(index, _dir);
                    return;
                }
                _dir = index > origin ? true : false;
                efftct(index, _dir);
            });

            $arrs.on('click', function(e) {
                e.preventDefault();
                if ($this.find('.slide_wrap:animated').length || $this.hasClass('ontouch')) return;
                if ($(this).hasClass('arr_prev')) {
                    efftct(getPrev(origin), 0);
                }
                if ($(this).hasClass('arr_next')) {
                    efftct(getNext(origin), 1);
                }
            });

            //自动 & 暂停
            if (opt.auto) {
                timer = window.setInterval(function() {
                    efftct(getNext(origin), 1);
                }, opt.interval);
                if (typeof(opt.pause) === 'boolean' && opt.pause) {
                    $this.on({
                        'mouseenter': function() {
                            window.clearInterval(timer);
                        },
                        'mouseleave': function() {
                            window.clearInterval(timer);
                            timer = window.setInterval(function() {
                                efftct(getNext(origin), 1);
                            }, opt.interval);
                        }
                    });
                } else if ($(opt.pause).length) {
                    $(opt.pause).eq(0).on('click', function(e) {
                        e.preventDefault();
                        if ($this.data('slidepause')) {
                            $this.data('slidepause', false);
                            $(opt.pause).eq(0).removeClass('pause');
                            window.clearInterval(timer);
                            timer = window.setInterval(function() {
                                efftct(getNext(origin), 1);
                            }, opt.interval);
                        } else {
                            $this.data('slidepause', true);
                            $(opt.pause).eq(0).addClass('pause');
                            window.clearInterval(timer);
                        }
                    });
                }
            }
            $this.data('slideruning', 1);
            typeof(opt.ext) === 'function' && opt.ext($this, $cell, count);
            //开始
            if ($this.data('play')) {
                $navs.eq($this.data('play')).trigger(opt.act);
            } else {
                efftct(opt.start, true, 1, true);
            }
            //响应式
            $(window).bind("orientationchange, resize", function(event) {
                if (windowLock) return;
                windowLock = true;
                init();
                efftct($this.data('play'), true, 1, true);
                setTimeout(function() {
                    windowLock = false;
                }, 1e3);
            });
        });
    };
});