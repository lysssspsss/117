<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
<title>特码生肖走势 － 六合开奖记录直播</title>
<meta name="keywords" content="一起发开奖现场,手机报码,特码生肖走势,手机开奖网址" />
<meta name="description" content="一起发开奖现场第一时间更新开奖结果,不用电脑上网也可以用手机查看最新开奖结果" />	
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link type="text/css" rel="stylesheet" href="/Index/Public/wap/mobile.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>view.css"/>
	<link href="<?php echo (CSS_URL); ?>zoushi-wap.css" rel="stylesheet" type="text/css">
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

<TABLE class="zstable">
<tr style="background:#efefef;">
<td width="70" rowspan="2">期数</td>
<td width="40" rowspan="2">特码</td>
<td width="40" rowspan="2">特肖</td>
<td colspan="12">生肖走势</td>
</tr>
<tr style="background:#f9f9f9;">
<td style="width:52px;">鼠</td>
<td style="width:52px;">牛</td>
<td style="width:52px;">虎</td>
<td style="width:52px;">兔</td>
<td style="width:52px;">龍</td>
<td style="width:52px;">蛇</td>
<td style="width:52px;">馬</td>
<td style="width:52px;">羊</td>
<td style="width:52px;">猴</td>
<td style="width:52px;">雞</td>
<td style="width:52px;">狗</td>
<td style="width:52px;">豬</td>
</tr>
<tr style="background:#ffc;" class="red bold">
<td>出现次数</td>
<td> </td>
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
<td class="bold" style="height:40px">预测本期</td>
<td colspan="2"><font style="font-weight:normal; color:#999999">(请点击生肖)</font></td>
<td class="cu" onClick="SelectNum(this,'Red','鼠');">鼠</td>
<td class="cu" onClick="SelectNum(this,'Red','牛');">牛</td>
<td class="cu" onClick="SelectNum(this,'Red','虎');">虎</td>
<td class="cu" onClick="SelectNum(this,'Red','兔');">兔</td>
<td class="cu" onClick="SelectNum(this,'Red','龍');">龍</td>
<td class="cu" onClick="SelectNum(this,'Red','蛇');">蛇</td>
<td class="cu" onClick="SelectNum(this,'Red','馬');">馬</td>
<td class="cu" onClick="SelectNum(this,'Red','羊');">羊</td>
<td class="cu" onClick="SelectNum(this,'Red','猴');">猴</td>
<td class="cu" onClick="SelectNum(this,'Red','雞');">雞</td>
<td class="cu" onClick="SelectNum(this,'Red','狗');">狗</td>
<td class="cu" onClick="SelectNum(this,'Red','豬');">豬</td>
</tr>
<?php if(is_array($list)): foreach($list as $key=>$row): ?><tr onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#ffffcc'">
<td><?=$row['title']?></td>
<td style="background:#ffc;"><span class="<?=yx_no_band($row['tit7'],1)?> F"><?=$row['tit7']?></span></td>
<td class="Blue"><?=$row['tit07']?></td>
<?php if ($row['tit07']=='鼠'){?><td class="<?=yx_no_band($row['tit7'],4)?>">鼠</td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit07']=='牛'){?><td class="<?=yx_no_band($row['tit7'],4)?>">牛</td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit07']=='虎'){?><td class="<?=yx_no_band($row['tit7'],4)?>">虎</td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit07']=='兔'){?><td class="<?=yx_no_band($row['tit7'],4)?>">兔</td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit07']=='龍'){?><td class="<?=yx_no_band($row['tit7'],4)?>">龍</td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit07']=='蛇'){?><td class="<?=yx_no_band($row['tit7'],4)?>">蛇</td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit07']=='馬'){?><td class="<?=yx_no_band($row['tit7'],4)?>">馬</td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit07']=='羊'){?><td class="<?=yx_no_band($row['tit7'],4)?>">羊</td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit07']=='猴'){?><td class="<?=yx_no_band($row['tit7'],4)?>">猴</td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit07']=='雞'){?><td class="<?=yx_no_band($row['tit7'],4)?>">雞</td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit07']=='狗'){?><td class="<?=yx_no_band($row['tit7'],4)?>">够</td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit07']=='豬'){?><td class="<?=yx_no_band($row['tit7'],4)?>">豬</td><?php }else{?><td class="hui_color">-</td><?php } ?>

</tr><?php endforeach; endif; ?>
<tr id="forecast">
<td class="bold" style="height:40px">预测本期</td>
<td colspan="2"><font style="font-weight:normal; color:#999999">(请点击生肖)</font></td>
<td class="cu" onClick="SelectNum(this,'Red','鼠');">鼠</td>
<td class="cu" onClick="SelectNum(this,'Red','牛');">牛</td>
<td class="cu" onClick="SelectNum(this,'Red','虎');">虎</td>
<td class="cu" onClick="SelectNum(this,'Red','兔');">兔</td>
<td class="cu" onClick="SelectNum(this,'Red','龍');">龍</td>
<td class="cu" onClick="SelectNum(this,'Red','蛇');">蛇</td>
<td class="cu" onClick="SelectNum(this,'Red','馬');">馬</td>
<td class="cu" onClick="SelectNum(this,'Red','羊');">羊</td>
<td class="cu" onClick="SelectNum(this,'Red','猴');">猴</td>
<td class="cu" onClick="SelectNum(this,'Red','雞');">雞</td>
<td class="cu" onClick="SelectNum(this,'Red','狗');">狗</td>
<td class="cu" onClick="SelectNum(this,'Red','豬');">豬</td>
</tr>
<tr id="disnum" style="background:#ffc;" class="red bold">
<td>出现次数</td>
<td> </td>
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
<tr style="background:#f9f9f9; height:38px; font-weight:bold;" align=middle>
<td width="70" rowspan="2" style="background:#efefef;">期数</td>
<td width="40" rowspan="2" style="background:#efefef;">特码</td>
<td width="40" rowspan="2" style="background:#efefef;">特肖</td>
<td>鼠</td>
<td>牛</td>
<td>虎</td>
<td>兔</td>
<td>龍</td>
<td>蛇</td>
<td>馬</td>
<td>羊</td>
<td>猴</td>
<td>雞</td>
<td>狗</td>
<td>豬</td>
</tr>
<tr style="background:#efefef;">
<td colspan="12">生肖走势</td>
</tr>

</table>

</div>

</div>


<div class="zous-foot-qh-wrap">
    <div class="zous-foot-qh">

        <span class="on">特码生肖走势</span>

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