<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
<title>特码尾数走势 － 六合开奖记录直播</title>
<meta name="keywords" content="一起发开奖现场,手机报码,特码尾数走势,手机开奖网址" />
<meta name="description" content="一起发开奖现场第一时间更新开奖结果,不用电脑上网也可以用手机查看最新开奖结果" />	
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link type="text/css" rel="stylesheet" href="/Index/Public/wap/mobile.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>view.css"/>
	<link href="<?php echo (CSS_URL); ?>zoushi-wap.css" rel="stylesheet" type="text/css">
	<script src="<?php echo (JS_URL); ?>superslide.js" type="text/javascript"></script>
	<script language="javascript" src="<?php echo (JS_URL); ?>zst.js"></script>
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
<li><a class="select" href="?id=2017">2017</a></li>
<li><a href="?id=2016">2016</a></li>
<li><a href="?id=2015">2015</a></li>
<li><a href="?id=2014">2014</a></li>
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
		<tr>
		<td>出现次数</td>
		</tr>
		<tr>
		<td>预测本期</td>
		</tr>		
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                    <td class="itm-qih"><?php echo ($vo['title']); ?>期</td>
                </tr><?php endforeach; endif; ?>				
                    </table>
    </div>

    <div class="zous-2col-r zstable2-main-scroll">
        <table class="zstable2 zstable2-main zstable2-main-scrollhd zstable2-yil">
            <colgroup>
				<col width="30">
				<col width="50">
				<col width="50">
				<col width="50">
				<col width="50">
                <col width="50">
                <col width="50">
                <col width="50">
                <col width="50">
                <col width="50">
                <col width="50">
                <col width="72">
				<col width="72">				
            </colgroup>
<tr style="background:#efefef;">
<td width="40" rowspan="2">特码</td>
<td colspan="10">尾数走势</td>
<td colspan="2">尾数大小</td>
</tr>
<tr style="background:#f9f9f9;">
<td style="width:72px;">0尾</td>
<td style="width:72px;">1尾</td>
<td style="width:72px;">2尾</td>
<td style="width:72px;">3尾</td>
<td style="width:72px;">4尾</td>
<td style="width:72px;">5尾</td>
<td style="width:72px;">6尾</td>
<td style="width:72px;">7尾</td>
<td style="width:72px;">8尾</td>
<td style="width:72px;">9尾</td>
<td style="width:72px;">小(0-4)</td>
<td style="width:72px;">大(5-9)</td>
</tr>			
        </table>
        <table class="zstable2 zstable2-main zstable2-main-scrollbd zstable2-yil">
            <colgroup>
				<col width="30">
				<col width="50">
				<col width="50">
				<col width="50">
				<col width="50">
                <col width="50">
                <col width="50">
                <col width="50">
                <col width="50">
                <col width="50">
                <col width="50">
                <col width="72">
				<col width="72">
            </colgroup>
<tr style="background:#ffc;" class="red bold">
<td> </td>
<td><?php echo ($counts[0]); ?> 次</td>
<td><?php echo ($counts[1]); ?> 次</td>
<td><?php echo ($counts[2]); ?> 次</td>
<td><?php echo ($counts[3]); ?> 次</td>
<td><?php echo ($counts[4]); ?> 次</td>
<td><?php echo ($counts[5]); ?> 次</td>
<td><?php echo ($counts[6]); ?> 次</td>
<td><?php echo ($counts[7]); ?> 次</td>
<td><?php echo ($counts[8]); ?> 次</td>
<td><?php echo ($counts[9]); ?> 次</td>
<td><?php echo ($counts[10]); ?> 次</td>
<td><?php echo ($counts[11]); ?> 次</td>

</tr>
<tr>
<td></td>
<td class="cu" onClick="SelectNum(this,'Red','0');">0尾</td>
<td class="cu" onClick="SelectNum(this,'Red','1');">1尾</td>
<td class="cu" onClick="SelectNum(this,'Red','2');">2尾</td>
<td class="cu" onClick="SelectNum(this,'Red','3');">3尾</td>
<td class="cu" onClick="SelectNum(this,'Red','4');">4尾</td>
<td class="cu" onClick="SelectNum(this,'Red','5');">5尾</td>
<td class="cu" onClick="SelectNum(this,'Red','6');">6尾</td>
<td class="cu" onClick="SelectNum(this,'Red','7');">7尾</td>
<td class="cu" onClick="SelectNum(this,'Red','8');">8尾</td>
<td class="cu" onClick="SelectNum(this,'Red','9');">9尾</td>
<td class="white enfont cu">尾小</td>
<td class="white enfont cu">尾大</td>
</tr>			
<?php if(is_array($list)): foreach($list as $key=>$row): ?><tr onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#ffffcc'">
<td style="background:#ffc;"><span class="<?=yx_no_band($row['tit7'],1)?> F"><?=$row['tit7']?></span></td>
<?php if ($row['tit10']=='0'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff>0</FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit10']=='1'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff>1</FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit10']=='2'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff>2</FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit10']=='3'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff>3</FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit10']=='4'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff>4</FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit10']=='5'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff>5</FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit10']=='6'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff>6</FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit10']=='7'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff>7</FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit10']=='8'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff>8</FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit10']=='9'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff>9</FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit10']<=4){?>
<td class="white"><img src="/Index/Public/img/1.gif"></td>
<?php }else{?>
<td class="white hui_color">-</td>
<?php } ?>

<?php if ($row['tit10']>4){?>
<td class="white"><img src="/Index/Public/img/1.gif"></td>
<?php }else{?>
<td class="white hui_color">-</td>
<?php } ?>




</tr><?php endforeach; endif; ?>															
</table>
    </div>
</div>

<div class="zous-2col zous-2col-long zous-2col-longinfo">
    <div class="zous-2col-l">
        <table class="zstable3">
            <tr>
                <th>预测本期</th>
            </tr>
            <tr>
                <th>出现次数</th>
            </tr>
            <tr>
                <th>期数</th>
            </tr>
            <tr>
                <th></th>
            </tr>			
        </table>
    </div>

    <div class="zous-2col-r zstable2-main-scroll">
        <table class="zstable3">
            <colgroup>
				<col width="30">
				<col width="50">
				<col width="50">
				<col width="50">
				<col width="50">
                <col width="50">
                <col width="50">
                <col width="50">
                <col width="50">
                <col width="50">
                <col width="50">
                <col width="72">
				<col width="72">
            </colgroup>

<tr>
<td></td>
<td class="cu" onClick="SelectNum(this,'Red','0');">0尾</td>
<td class="cu" onClick="SelectNum(this,'Red','1');">1尾</td>
<td class="cu" onClick="SelectNum(this,'Red','2');">2尾</td>
<td class="cu" onClick="SelectNum(this,'Red','3');">3尾</td>
<td class="cu" onClick="SelectNum(this,'Red','4');">4尾</td>
<td class="cu" onClick="SelectNum(this,'Red','5');">5尾</td>
<td class="cu" onClick="SelectNum(this,'Red','6');">6尾</td>
<td class="cu" onClick="SelectNum(this,'Red','7');">7尾</td>
<td class="cu" onClick="SelectNum(this,'Red','8');">8尾</td>
<td class="cu" onClick="SelectNum(this,'Red','9');">9尾</td>
<td class="white enfont cu">尾小</td>
<td class="white enfont cu">尾大</td>
</tr>
<tr style="background:#ffc;" class="red bold">
<td> </td>
<td><?php echo ($counts[0]); ?> 次</td>
<td><?php echo ($counts[1]); ?> 次</td>
<td><?php echo ($counts[2]); ?> 次</td>
<td><?php echo ($counts[3]); ?> 次</td>
<td><?php echo ($counts[4]); ?> 次</td>
<td><?php echo ($counts[5]); ?> 次</td>
<td><?php echo ($counts[6]); ?> 次</td>
<td><?php echo ($counts[7]); ?> 次</td>
<td><?php echo ($counts[8]); ?> 次</td>
<td><?php echo ($counts[9]); ?> 次</td>
<td><?php echo ($counts[10]); ?> 次</td>
<td><?php echo ($counts[11]); ?> 次</td>

</tr>				
<tr style="background:#efefef;">
<td width="40" rowspan="2">特码</td>
<td style="width:72px;">0尾</td>
<td style="width:72px;">1尾</td>
<td style="width:72px;">2尾</td>
<td style="width:72px;">3尾</td>
<td style="width:72px;">4尾</td>
<td style="width:72px;">5尾</td>
<td style="width:72px;">6尾</td>
<td style="width:72px;">7尾</td>
<td style="width:72px;">8尾</td>
<td style="width:72px;">9尾</td>
<td style="width:72px;">小(0-4)</td>
<td style="width:72px;">大(5-9)</td>
</tr>
<tr style="background:#f9f9f9;">
<td colspan="10">尾数走势</td>
<td colspan="2">尾数大小</td>
</tr>
        </table>
    </div>
</div>
<ul class="zous-list">
    <li style="color: red">按住屏幕中间可往左移动查看</li>
</ul>
</div>


<div class="zous-foot-qh-wrap">
    <div class="zous-foot-qh">

        <span class="on">特码尾数走势</span>

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