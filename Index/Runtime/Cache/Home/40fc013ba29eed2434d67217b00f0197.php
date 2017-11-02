<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
<title>紅綠藍三色统计走势图 － 六合开奖记录直播</title>
<meta name="keywords" content="一起发开奖现场,手机报码,紅綠藍三色统计走势图,手机开奖网址" />
<meta name="description" content="一起发开奖现场第一时间更新开奖结果,不用电脑上网也可以用手机查看最新开奖结果" />	
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link type="text/css" rel="stylesheet" href="/Index/Public/wap/mobile.css"/>
<style type="text/css">
.bg{ background: #E1E1FF no-repeat center center;text-align:center;color:#000000;font-size:15px;font-family:Arial;} 
</style>
</head>

<body>
<!--head begin-->
<header id="uiHead" class="ui-head">
    <div class="ui-head-in">
        <div class="ui-head-l">
            <span class="ui-head-btn1">返回</span>
        </div>
        <div class="ui-head-m">
            <h2 class="ui-head-tit">六合走势图</h2>
        </div>
    </div>
</header>
<!--head end-->
<!--彩种导航 start-->
<div class="ui-navbox">
    <div class="ui-navbox-in">
        <ul>
            <li><div id="tatol_box" class="tbox" style="text-align:center;line-height:28px;">
<!--表单提交开始-->
<form action="" method="post">
选择查询范围：<select name="qinum" id="qinum">
<option value="25" selected>最近25期</option>
<option value="50">最近50期</option>
<option value="80">最近80期</option>
<option value="100">最近100期</option>
<option value="150">最近150期</option>
<option value="200">最近200期</option>
<option value="2016">2016年</option>
<option value="2015">2015年</option>
<option value="2014">2014年</option>
<option value="2013">2013年</option>
<option value="2012">2012年</option>
<option value="2011">2011年</option>
<option value="2010">2010年</option>
<option value="2009">2009年</option>
<option value="2008">2008年</option>
<option value="2007">2007年</option>
<option value="2006">2006年</option>
<option value="2005">2005年</option>
<option value="2004">2004年</option>
<option value="2003">2003年</option>
<option value="2002">2002年</option>
<option value="2001">2001年</option>
<option value="2000">2000年</option>
<option value="1999">1999年</option>
<option value="1998">1998年</option>
<option value="1997">1997年</option>
<option value="1996">1996年</option>
<option value="1995">1995年</option>
<option value="1994">1994年</option>
<option value="1993">1993年</option>
<option value="1992">1992年</option>
<option value="1991">1991年</option>
<option value="1990">1990年</option>
<option value="1989">1989年</option>
<option value="1988">1988年</option>
<option value="1987">1987年</option>
<option value="1986">1986年</option>
<option value="1985">1985年</option>
<option value="1984">1984年</option>
<option value="1983">1983年</option>
<option value="1982">1982年</option>
<option value="1981">1981年</option>
<option value="1980">1980年</option>
<option value="1979">1979年</option>
<option value="1978">1978年</option>
<option value="1977">1977年</option>
<option value="1976">1976年</option>
</select>&nbsp;&nbsp;
<input type="submit" value="提交查询" name="submit" >
</form>
<!--表单提交结束-->
</div></li>
        </ul>
    </div>
</div>
<!--彩种导航 end-->

<div class="wrapper">
    <div class="zous-2col zous-2col-long">
    <div class="zous-2col-l">
        <table class="zstable2 zstable2-tit zstable2-tit-scrollhd">
            <tr>
                <th>期号</th>
            </tr>
        </table>
        <table class="zstable2 zstable2-tit zstable2-tit-scrollbd">
<?php
if (in_array($vo['tit1'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $pingred=$pingred+1; $zongred=$pingred; }elseif(in_array($vo['tit1'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $pingblu=$pingblu+1; $zongblu=$pingblu; }else{ $pinggre=$pinggre+1; $zonggre=$pinggre; } if (in_array($vo['tit2'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $pingred=$pingred+1; $zongred=$pingred; }elseif(in_array($vo['tit2'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $pingblu=$pingblu+1; $zongblu=$pingblu; }else{ $pinggre=$pinggre+1; $zonggre=$pinggre; } if (in_array($vo['tit3'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $pingred=$pingred+1; $zongred=$pingred; }elseif(in_array($vo['tit3'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $pingblu=$pingblu+1; $zongblu=$pingblu; }else{ $pinggre=$pinggre+1; $zonggre=$pinggre; } if (in_array($vo['tit4'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $pingred=$pingred+1; $zongred=$pingred; }elseif(in_array($vo['tit4'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $pingblu=$pingblu+1; $zongblu=$pingblu; }else{ $pinggre=$pinggre+1; $zonggre=$pinggre; } if (in_array($vo['tit5'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $pingred=$pingred+1; $zongred=$pingred; }elseif(in_array($vo['tit5'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $pingblu=$pingblu+1; $zongblu=$pingblu; }else{ $pinggre=$pinggre+1; $zonggre=$pinggre; } if (in_array($vo['tit6'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $pingred=$pingred+1; $zongred=$pingred; }elseif(in_array($vo['tit6'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $pingblu=$pingblu+1; $zongblu=$pingblu; }else{ $pinggre=$pinggre+1; $zonggre=$pinggre; } if (in_array($vo['tit7'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $zongred=$pingred+1; }elseif(in_array($vo['tit7'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $zongblu=$pingblu+1; }else{ $zonggre=$pinggre+1; } ?>

<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                    <td class="itm-qih"><?php echo ($vo['title']); ?>期</td>
                </tr><?php endforeach; endif; ?>				
                    </table>
    </div>

    <div class="zous-2col-r zstable2-main-scroll">
        <table class="zstable2 zstable2-main zstable2-main-scrollhd zstable2-yil">
            <colgroup>
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
				<col width="30">
				<col width="30">
				<col width="30">
				<col width="30">
				<col width="30">
            </colgroup>
            <tr>
<td class="bg">正</td><td class="bg">一</td><td class="bg">码</td>
<td>正</td><td>二</td><td>码</td>
<td class="bg">正</td><td class="bg">三</td><td class="bg">码</td>
<td>正</td><td>四</td><td>码</td>
<td class="bg">正</td><td class="bg">五</td><td class="bg">码</td>
<td>正</td><td>六</td><td>码</td>
<td class="bg">特</td><td class="bg"></td><td class="bg">码</td>			
            </tr>
<tr>
<td class="bg">紅</td>
<td class="bg">藍</td>
<td class="bg">綠</td>
<td>紅</td>
<td>藍</td>
<td>綠</td>
<td class="bg">紅</td>
<td class="bg">藍</td>
<td class="bg">綠</td>
<td>紅</td>
<td>藍</td>
<td>綠</td>
<td class="bg">紅</td>
<td class="bg">藍</td>
<td class="bg">綠</td>
<td>紅</td>
<td>藍</td>
<td>綠</td>
<td class="bg">紅</td>
<td class="bg">藍</td>
<td class="bg">綠</td>
</tr>			
        </table>
        <table class="zstable2 zstable2-main zstable2-main-scrollbd zstable2-yil">
            <colgroup>
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
				<col width="30">
				<col width="30">
				<col width="30">
				<col width="30">
				<col width="30">
            </colgroup>
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
<?php
if (in_array($vo['tit1'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums1=$nums1+1; ?>
<td class="on"><span><?=$vo['tit1']?></span></td>
<td></td>
<td></td>
<?php }elseif(in_array($vo['tit1'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa1=$numsa1+1; ?>
<td></td>
<td class="on"><span class="hou-blue"><?=$vo['tit1']?></span></td>
<td></td>
<?php }else{ $numsb1=$numsb1+1; ?>
<td></td>
<td></td>
<td class="on"><span class="hou-gaee"><?=$vo['tit1']?></span></td>
<?php } ?>


<?php
if (in_array($vo['tit2'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums2=$nums2+1; ?>
<td class="on"><span><?=$vo['tit2']?></span></td>
<td></td>
<td></td>
<?php }elseif(in_array($vo['tit2'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa2=$numsa2+1; ?>
<td></td>
<td class="on"><span class="hou-blue"><?=$vo['tit2']?></span></td>
<td></td>
<?php }else{ $numsb2=$numsb2+1; ?>
<td></td>
<td></td>
<td class="on"><span class="hou-gaee"><?=$vo['tit2']?></span></td>
<?php } ?>


<?php
if (in_array($vo['tit3'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums3=$nums3+1; ?>
<td class="on"><span><?=$vo['tit3']?></span></td>
<td></td>
<td></td>
<?php }elseif(in_array($vo['tit3'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa3=$numsa3+1; ?>
<td></td>
<td class="on"><span class="hou-blue"><?=$vo['tit3']?></span></td>
<td></td>
<?php }else{ $numsb3=$numsb3+1; ?>
<td></td>
<td></td>
<td class="on"><span class="hou-gaee"><?=$vo['tit3']?></span></td>
<?php } ?>

<?php
if (in_array($vo['tit4'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums4=$nums4+1; ?>
<td class="on"><span><?=$vo['tit4']?></span></td>
<td></td>
<td></td>
<?php }elseif(in_array($vo['tit4'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa4=$numsa4+1; ?>
<td></td>
<td class="on"><span class="hou-blue"><?=$vo['tit4']?></span></td>
<td></td>
<?php }else{ $numsb4=$numsb4+1; ?>
<td></td>
<td></td>
<td class="on"><span class="hou-gaee"><?=$vo['tit4']?></span></td>
<?php } ?>

<?php
if (in_array($vo['tit5'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums5=$nums5+1; ?>
<td class="on"><span><?=$vo['tit5']?></span></td>
<td></td>
<td></td>
<?php }elseif(in_array($vo['tit5'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa5=$numsa5+1; ?>
<td></td>
<td class="on"><span class="hou-blue"><?=$vo['tit5']?></span></td>
<td></td>
<?php }else{ $numsb5=$numsb5+1; ?>
<td></td>
<td></td>
<td class="on"><span class="hou-gaee"><?=$vo['tit5']?></span></td>
<?php } ?>

<?php
if (in_array($vo['tit6'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums6=$nums6+1; ?>
<td class="on"><span><?=$vo['tit6']?></span></td>
<td></td>
<td></td>
<?php }elseif(in_array($vo['tit6'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa6=$numsa6+1; ?>
<td></td>
<td class="on"><span class="hou-blue"><?=$vo['tit6']?></span></td>
<td></td>
<?php }else{ $numsb6=$numsb6+1; ?>
<td></td>
<td></td>
<td class="on"><span class="hou-gaee"><?=$vo['tit6']?></span></td>
<?php } ?>

<?php
if (in_array($vo['tit7'], array("01","02","07","08","12","13","18","19","23","24","29","30","34","35","40","45","46"))){ $nums7=$nums7+1; ?>
<td class="on"><span><?=$vo['tit7']?></span></td>
<td></td>
<td></td>
<?php }elseif(in_array($vo['tit7'], array("03","04","09","10","14","15","20","25","26","31","36","37","41","42","47","48"))){ $numsa7=$numsa7+1; ?>
<td></td>
<td class="on"><span class="hou-blue"><?=$vo['tit7']?></span></td>
<td></td>
<?php }else{ $numsb7=$numsb7+1; ?>
<td></td>
<td></td>
<td class="on"><span class="hou-gaee"><?=$vo['tit7']?></span></td>
<?php } ?>

                        
</tr><?php endforeach; endif; ?>															

                    </table>
    </div>
</div>

<div class="zous-2col zous-2col-long zous-2col-longinfo">
    <div class="zous-2col-l">
        <table class="zstable3">
            <tr>
                <th>出现总次数</th>
            </tr>
        </table>
    </div>

    <div class="zous-2col-r zstable2-main-scroll">
        <table class="zstable3">
            <colgroup>
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
				<col width="30">
				<col width="30">
				<col width="30">
				<col width="30">
				<col width="30">
            </colgroup>
<tr>
				<td><span><?=$zongred=$nums1?></span></td>
				<td><span><?=$zongblu=$numsa1?></span></td>
				<td><span><?=$zonggre=$numsb1?></span></td>
				<td><span><?=$zongred=$nums2?></span></td>
				<td><span><?=$zongblu=$numsa2?></span></td>
				<td><span><?=$zonggre=$numsb2?></span></td>	
				<td><span><?=$zongred=$nums3?></span></td>
				<td><span><?=$zongblu=$numsa3?></span></td>
				<td><span><?=$zonggre=$numsb3?></span></td>	
				<td><span><?=$zongred=$nums4?></span></td>
				<td><span><?=$zongblu=$numsa4?></span></td>
				<td><span><?=$zonggre=$numsb4?></span></td>	
				<td><span><?=$zongred=$nums5?></span></td>
				<td><span><?=$zongblu=$numsa5?></span></td>
				<td><span><?=$zonggre=$numsb5?></span></td>	
				<td><span><?=$zongred=$nums6?></span></td>
				<td><span><?=$zongblu=$numsa6?></span></td>
				<td><span><?=$zonggre=$numsb6?></span></td>	
				<td><span><?=$zongred=$nums7?></span></td>
				<td><span><?=$zongblu=$numsa7?></span></td>
				<td><span><?=$zonggre=$numsb7?></span></td>					
</tr>
        </table>
    </div>
</div>
</div>


<div class="zous-foot-qh-wrap">
    <div class="zous-foot-qh">

        <span class="on">紅綠藍三色统计走势图</span>

    </div>
</div>


<div class="zous-haomb-btn hide"></div>

<!--弹层 开始-->
<div class="ui-alert-layer hide"></div>
<div class="zous-haomb on hide">

</div>
<!--弹层 结束-->




<script type="text/javascript" src="/Index/Public/wap/vendor.js"></script>



<script type="text/javascript">
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        clickEvent = "tap";
    } else {
        clickEvent = "click";
    }

    $(function () {

        //切换统计的期数
        $("span[data-code]").on(clickEvent, function () {
            $(".zous-foot-qh span").removeClass("on");
            $(this).addClass("on");
            var code = $(this).attr("data-code");
            $.get("/chart/ssq/houqu/" + code, function (data) {
                $(".wrapper").html(data);
                addScroll();
            })
        });

        //投注弹窗
        $('.zous-haomb-btn').on(clickEvent, function () {
            $('.ui-alert-layer').removeClass('hide');
            $('.zous-haomb').removeClass('hide');
        });

        //头部
        $(".ui-head-btn1").on("click", function () {
            history.back();
        });

        $("li[data-href]").on(clickEvent, function () {
            var url = $(this).attr("data-href");
            window.location.href = url + "?_t=" + new Date().getMilliseconds();
        });


        function addScroll(){
            //左右-上下滚动
            var o2ColScrollL = $('.zous-2col-l').width(),
                o2ColScrollHD = $('.zstable2-main-scrollhd').eq(0),
                o2ColScrollHDinfo = $('.zous-2col-longinfo').find('.zstable2-main-scrollhd').eq(0),
                o2ColScroll = $('.zstable2-main-scroll'),
                o2ColScrollinfo = $('.zous-2col-longinfo').find('.zstable2-main-scroll').eq(0),
                nCurScrollLeft;

            $('.zous-2col-r').width($(window).width() - o2ColScrollL);
            $(window).on('resize', function () {
                $('.zous-2col-r').width($(window).width() - o2ColScrollL);
            });

            $(o2ColScroll).scroll(function () {
                nCurScrollLeft = $(this).scrollLeft();
                o2ColScrollHD.css('left', -nCurScrollLeft + o2ColScrollL);
                o2ColScrollinfo.scrollLeft(nCurScrollLeft);
            });
            $(o2ColScrollinfo).scroll(function () {
                nCurScrollLeft = $(this).scrollLeft();
                o2ColScrollHD.css('left', -nCurScrollLeft + o2ColScrollL);
                o2ColScroll.scrollLeft(nCurScrollLeft);
            });
        }
        addScroll();
    });

</script>


</body>
</html>