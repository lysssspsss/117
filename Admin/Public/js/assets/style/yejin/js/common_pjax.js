/*
 * name: common-pjax
 * version: v3.0.1
 * update: 按需渲染异步执行，保证渲染事件被监听到
 * date: 2015-08-13
 */
define(function(require, exports, module) {
    var $ = require('jquery');
    var base = require('base');
    var typeCatch = base.getType();

    if (base.browser.ie == 6) {
        alert('本站不支持IE6访问，请升级IE或使用chrome、Firefox等高级浏览器！');
    };

    //pc模拟多终端检测
    if (window.sessionStorage && sessionStorage.getItem('PcMode')) {
        $('body').addClass('PcMode');
        typeCatch = base.getType();
    };
    (function() {
        if (window.sessionStorage && sessionStorage.getItem('browserRedirectLock'))
            return;
        if (!base.browser.isMobile && typeCatch !== 'Pc') {
            require.async('box', function() {
                $.box.confirm('网站即将进入移动模式，点【取消】保持电脑模式', function() {
                    window.sessionStorage && sessionStorage.setItem('browserRedirectLock', 'true');
                    $.box.hide();
                }, function() {
                    typeCatch = 'Pc';
                    window.sessionStorage && sessionStorage.setItem('PcMode', 'Pc');
                }, {
                    title: "切换到移动模式"
                })
            })
        }
    })();



    /*
     * 全局事件
     */
    //返回顶部
    $('body').on('click', '.gotop', function() {
        $('html,body').stop(1).animate({
            scrollTop: '0'
        }, 300);
        return false
    });
    //关闭当前页
    $('body').on('click', '.closewin', function() {
        window.opener = null;
        window.open("", "_self");
        window.close()
    });
    //打印当前页
    $('body').on('click', '.print', function() {
        window.print()
    });
    //加入收藏
    $('body').on('click', '.favorite', function() {
        var sURL = "http:&#47;&#47;" + document.domain + "&#47;",
            sTitle = document.title;
        try {
            window.external.addFavorite(sURL, sTitle)
        } catch (e) {
            try {
                window.sidebar.addPanel(sTitle, sURL, "")
            } catch (e) {
                alert("加入收藏失败，请使用Ctrl+D进行添加")
            }
        }
    });
    //设为首页
    $('body').on('click', '.sethome', function() {
        var vrl = "http:&#47;&#47;" + document.domain + "&#47;";
        if (window.netscape) {
            try {
                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect")
            } catch (e) {
                alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。")
            }
            var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
            prefs.setCharPref('browser.startup.homepage', vrl)
        } else {
            alert("您的浏览器不支持自动设为首页，请您手动进行设置！")
        }
    });
    //屏蔽ie78 console未定义错误
    if (typeof console === 'undefined') {
        console = {
            log: function() {},
            warn: function() {}
        }
    }

    //PJAX预取
    var ic = require('instantclick');
    var ic_scroll;
    ic.on('fetch', function() {
        ic_scroll = $(window).scrollTop();
    });
    ic.on('receive', function(url, body, title) {
        var scrollfixed = base.getUrlParam('scrollfixed', url);
        if (!scrollfixed) {
            ic_scroll = null;
        }
        return {
            body: body,
            title: title
        };
    });
    ic.on('change', function() {
        if (ic_scroll) {
            $('body,html').scrollTop(ic_scroll);
            ic_scroll = null;
        }
    });
    ic.init();

    /*
     * 输出
     */
    module.exports = {
        init: function() {

            //跨屏刷新
            var throttleResize = base.throttle(function() {
                if (base.getType() !== typeCatch)
                    document.location.reload();
            });
            $(window).on('resize', function() {
                throttleResize();
            });

            var meta_con = '';
            if (base.getType() === 'Pc') {
                $('#meta').attr('content', meta_con)
            }


            // placeholder
            $('input, textarea').placeholder();
            //textarea限制字数
            $('textarea[max-length]').on('change blur keyup', function() {
                var _val = $(this).val(),
                    _max = $(this).attr('max-length');
                if (_val.length > _max) {
                    $(this).val(_val.substr(0, _max));
                };
            });
            //按需渲染
            setTimeout(function() {
                base.scanpush();
            }, 0);
            //响应图片
            base.resImg();
            /*
             * 站内公用
             */

            //导航当前状态
            //var jrChannelArr=jrChannel.split('#');
            //$('.nav').children('li').eq(jrChannelArr[0]).addClass('cur').find('li').eq(jrChannelArr[1]).addClass('cur');
            //console.log('com.init()');

            //返回顶部
            $('body').on('click', '.gotop', function() {
                $('html,body').stop(1).animate({
                    scrollTop: '0'
                }, 300);
                return false
            });


            $('.topBar ._top ._fac').on('click', function() {
                $('.zj_fac').slideDown(320)
            })
            $('.zj_fac').find('._close').on('click', function() {
                $('.zj_fac').slideUp(320)
            })
            $('.channelT ._tab').find('li:last').addClass('last')


            //多组分享js
            $(function() {
                require.async('bdshare', function(bdshare) {
                    bdshare([{
                        tag: 'share_1',
                        bdSize: 16,
                        //图标尺寸, 16｜24｜32
                        bdStyle: '1' //图标类型, 0｜1｜2

                    }, {
                        tag: 'share_2',
                        bdSize: 32,
                        bdStyle: 2
                    }])
                });
            })

            require('tab');
            $('.zj_fac .wrap').tab({
                act: 'mouseenter'
            });

            if (typeCatch === 'Mobile') {
                require('mmenu');
                $('.mobile_nav').mmenu({
                    onClick: {
                        close: true
                    }
                });
            }

            //语言
            require('sele');
            $('.topBar ._lan').sele();
            var nav_li = $('.nav').find('li').has('._lev2')


            /* nav_li.hover(function() {
                 $(this).find('._lev2').stop(1, 1).show()
				
             }
             , function() {
                 $(this).find('._lev2').stop(1, 1).hide()
				
             }
             )*/



        }
    }



    /* require('scroll-bar');
        $('.foot_menu dd').scrollBar();*/


})