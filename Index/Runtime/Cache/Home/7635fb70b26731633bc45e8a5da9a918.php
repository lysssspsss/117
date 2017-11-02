<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
<title>单双号码统计走势图 － 六合开奖记录直播</title>
<meta name="keywords" content="一起发开奖现场,手机报码,单双号码统计走势图,手机开奖网址" />
<meta name="description" content="一起发开奖现场第一时间更新开奖结果,不用电脑上网也可以用手机查看最新开奖结果" />	
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link type="text/css" rel="stylesheet" href="/Index/Public/wap/mobile.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>view.css"/>
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
            <h2 class="ui-head-tit">六合图表统计</h2>
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
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                    <td class="itm-qih"><?php echo ($vo['title']); ?>期</td>
                </tr><?php endforeach; endif; ?>				
                    </table>
    </div>

    <div class="zous-2col-r zstable2-main-scroll">
        <table class="zstable2 zstable2-main zstable2-main-scrollhd zstable2-yil">
            <colgroup>
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
				<col width="40">
				<col width="40">
				<col width="40">
				<col width="40">
				<col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
				<col width="40">				
            </colgroup>
<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>平</td><td>码</td><td>比</td><td>值</td><td>单</td><td>:</td><td>双</td><td>所有</td></tr>

<tr><td>一码</td><td>二码</td><td>三码</td><td>四码</td><td>五码</td><td>六码</td><td>特码</td><td>一码</td><td>二码</td><td>三码</td><td>四码</td><td>五码</td><td>六码</td><td>特码</td><td>一肖</td><td>二肖</td><td>三肖</td><td>四肖</td><td>五肖</td><td>六肖</td><td>特肖</td><td>6:0</td><td>5:1</td><td>4:2</td><td>3:3</td><td>2:4</td><td>1:5</td><td>0:6</td><td>单:双</td></tr>
			
        </table>
        <table class="zstable2 zstable2-main zstable2-main-scrollbd zstable2-yil">
            <colgroup>
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
				<col width="40">
				<col width="40">
				<col width="40">
				<col width="40">
				<col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
				<col width="40">
            </colgroup>
<?php if(is_array($list)): foreach($list as $key=>$vo): if ($vo['tit1'] % 2<>0){ $pingy=$pingy+1; $zongy=$pingy; }else{ $pingb=$pingb+1; $zongb=$pingb; } if ($vo['tit2'] % 2<>0){ $pingy=$pingy+1; $zongy=$pingy; }else{ $pingb=$pingb+1; $zongb=$pingb; } if ($vo['tit3'] % 2<>0){ $pingy=$pingy+1; $zongy=$pingy; }else{ $pingb=$pingb+1; $zongb=$pingb; } if ($vo['tit4'] % 2<>0){ $pingy=$pingy+1; $zongy=$pingy; }else{ $pingb=$pingb+1; $zongb=$pingb; } if ($vo['tit5'] % 2<>0){ $pingy=$pingy+1; $zongy=$pingy; }else{ $pingb=$pingb+1; $zongb=$pingb; } if ($vo['tit6'] % 2<>0){ $pingy=$pingy+1; $zongy=$pingy; }else{ $pingb=$pingb+1; $zongb=$pingb; } if ($vo['tit7'] % 2<>0){ $zongy=$pingy+1; }else{ $zongb=$pingb+1; } ?>
<tr>
<td class="<?php echo (cz_band_txt($vo['tit1'])); ?>"><FONT color=#ffffff><?php echo ($vo['tit1']); ?></FONT></td>
<td class="<?php echo (cz_band_txt($vo['tit2'])); ?>"><FONT color=#ffffff><?php echo ($vo['tit2']); ?></FONT></td>
<td class="<?php echo (cz_band_txt($vo['tit3'])); ?>"><FONT color=#ffffff><?php echo ($vo['tit3']); ?></FONT></td>
<td class="<?php echo (cz_band_txt($vo['tit4'])); ?>"><FONT color=#ffffff><?php echo ($vo['tit4']); ?></FONT></td>
<td class="<?php echo (cz_band_txt($vo['tit5'])); ?>"><FONT color=#ffffff><?php echo ($vo['tit5']); ?></FONT></td>
<td class="<?php echo (cz_band_txt($vo['tit6'])); ?>"><FONT color=#ffffff><?php echo ($vo['tit6']); ?></FONT></td>
<td class="<?php echo (cz_band_txt($vo['tit7'])); ?>"><FONT color=#ffffff><?php echo ($vo['tit7']); ?></FONT></td>
<?php
if ($vo['tit1'] % 2<>0){ $nums1=$nums1+1; ?>
<td class="abg">单</td>
<?php }else{ $nums01=$nums01+1; ?>
<td class="bbg">双</td>
<?php } ?>

<?php
if ($vo['tit2'] % 2<>0){ $nums2=$nums2+1; ?>
<td class="abg">单</td>
<?php }else{ $nums02=$nums02+1; ?>
<td class="bbg">双</td>
<?php } ?>

<?php
if ($vo['tit3'] % 2<>0){ $nums3=$nums3+1; ?>
<td class="abg">单</td>
<?php }else{ $nums03=$nums03+1; ?>
<td class="bbg">双</td>
<?php } ?>

<?php
if ($vo['tit4'] % 2<>0){ $nums4=$nums4+1; ?>
<td class="abg">单</td>
<?php }else{ $nums04=$nums04+1; ?>
<td class="bbg">双</td>
<?php } ?>

<?php
if ($vo['tit5'] % 2<>0){ $nums5=$nums5+1; ?>
<td class="abg">单</td>
<?php }else{ $nums05=$nums05+1; ?>
<td class="bbg">双</td>
<?php } ?>


<?php
if ($vo['tit6'] % 2<>0){ $nums6=$nums6+1; ?>
<td class="abg">单</td>
<?php }else{ $nums06=$nums06+1; ?>
<td class="bbg">双</td>
<?php } ?>
<?php
if ($vo['tit7'] % 2<>0){ $nums7=$nums7+1; ?>
<td class="abg">单</td>
<?php }else{ $nums07=$nums07+1; ?>
<td class="bbg">双</td>
<?php } ?>

<td class="bg"><?php echo ($vo['tit01']); ?></td>
<td class="bg"><?php echo ($vo['tit02']); ?></td>
<td class="bg"><?php echo ($vo['tit03']); ?></td>
<td class="bg"><?php echo ($vo['tit04']); ?></td>
<td class="bg"><?php echo ($vo['tit05']); ?></td>
<td class="bg"><?php echo ($vo['tit06']); ?></td>
<td class="cbg"><?php echo ($vo['tit07']); ?></td>
<?php if ($pingy==6){ $nums8=$nums8+1; ?>
<td class='bg'>6:0</td>
<?php }else{?>
<td class='cpy'>1</td>
<?php } ?>
<?php if ($pingy==5){ $nums9=$nums9+1; ?>
<td class='bg'>5:1</td>
<?php }else{?>
<td class='cpy'>1</td>
<?php } ?>
<?php if ($pingy==4){ $nums10=$nums10+1; ?>
<td class='bg'>4:2</td>
<?php }else{?>
<td class='cpy'>1</td>
<?php } ?>
<?php if ($pingy==3){ $nums11=$nums11+1; ?>
<td class='bg'>3:3</td>
<?php }else{?>
<td class='cpy'>1</td>
<?php } ?>
<?php if ($pingy==2){ $nums12=$nums12+1; ?>
<td class='bg'>2:3</td>
<?php }else{?>
<td class='cpy'>1</td>
<?php } ?>
<?php if ($pingy==1){ $nums13=$nums13+1; ?>
<td class='bg'>1:5</td>
<?php }else{?>
<td class='cpy'>1</td>
<?php } ?>
<?php if ($pingy==0){ $nums14=$nums14+1; ?>
<td class='bg'>0:6</td>
<?php }else{?>
<td class='cpy'>1</td>
<?php } ?>
<td><?=$zongy?> : <?=$zongb?></td>
</tr>
<?php
$pingy=0; $pingb=0; $zongy=0; $zongb=0; endforeach; endif; ?>											
</table>
    </div>
</div>

<div class="zous-2col zous-2col-long zous-2col-longinfo">
    <div class="zous-2col-l">
        <table class="zstable3">
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
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
				<col width="40">
				<col width="40">
				<col width="40">
				<col width="40">
				<col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
                <col width="40">
				<col width="40">
            </colgroup>
<tr ><td>一码</td><td>二码</td><td>三码</td><td>四码</td><td>五码</td><td>六码</td><td>特码</td><td>一码</td><td>二码</td><td>三码</td><td>四码</td><td>五码</td><td>六码</td><td>特码</td><td>一肖</td><td>二肖</td><td>三肖</td><td>四肖</td><td>五肖</td><td>六肖</td><td>特肖</td><td>6:0</td><td>5:1</td><td>4:2</td><td>3:3</td><td>2:4</td><td>1:5</td><td>0:6</td><td>单:双</td></tr>
<tr><td></td><td></td><td></td><td></td><td></td><td>统计</td><td>单:双</td>
<td><?=$nums1?>:<?=$nums01?></td>
<td><?=$nums2?>:<?=$nums02?></td>
<td><?=$nums3?>:<?=$nums03?></td>
<td><?=$nums4?>:<?=$nums04?></td>
<td><?=$nums5?>:<?=$nums05?></td>
<td><?=$nums6?>:<?=$nums06?></td>
<td><?=$nums7?>:<?=$nums07?></td>
<td>比</td><td>值</td><td>累</td><td>计</td><td>次</td><td>数</td><td>:</td><td><?=$nums8?></td><td><?=$nums9?></td><td><?=$nums10?></td><td><?=$nums11?></td><td><?=$nums12?></td><td><?=$nums13?></td><td><?=$nums14?></td><td>所有</td></tr>

        </table>
    </div>
</div>
<ul class="zous-list">
	属性说明：将49个号码分为单,双两组。
	<li >1、单=01,03,05,07,09~~49</li>
	<li >2、双=02,04,06,08,10~~48</li>
    <li style="color: red">按住屏幕中间可往左移动查看</li>
</ul>
</div>


<div class="zous-foot-qh-wrap">
    <div class="zous-foot-qh">

        <span class="on">单双号码统计走势图</span>

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