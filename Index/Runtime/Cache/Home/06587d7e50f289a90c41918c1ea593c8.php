<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN" dir="ltr">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title>六合彩开奖号码综合分析_开奖记录搜索_查找历史开奖结果，可快速找到一肖一码中特等公式规律_<?=Cz_cig('site_name')?></title>
<meta name="keywords" content="六合彩开奖号码综合分析" />
<meta name="description" content="六合彩开奖记录搜索_查找历史开奖结果，可快速找到一肖一码中特等公式规律_<?=Cz_cig('site_name')?>" />
<meta name="viewport" content="width=1080" />
<link href="<?php echo (CSS_URL); ?>list.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (CSS_URL); ?>self.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (CSS_URL); ?>zoushi.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]><script src="<?php echo (JS_URL); ?>html5.js" type="text/javascript"></script><![endif]-->
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo (JS_URL); ?>superslide.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo (JS_URL); ?>zst.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<link href="<?php echo (CSS_URL); ?>ak7_cc.css" rel="stylesheet" type="text/css" />
<div id="top">
	<div class="top clearfix">
    	<div class="top-l" id="nowDate201707081607"></div>
        <div class="top-r">
			<!--AD-开始-->
			<?php if(is_array($plug_ad_29)): foreach($plug_ad_29 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="1000" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--AD-结束-->		
		</div>
    </div>
</div>
<script>
function getNowDate201707081607() {
 var date = new Date();
 var sign1 = "-";
 var sign2 = ":";
 var year = date.getFullYear() // 年
 var month = date.getMonth() + 1; // 月
 var day  = date.getDate(); // 日
 var hour = date.getHours(); // 时
 var minutes = date.getMinutes(); // 分
 var seconds = date.getSeconds() //秒
 var weekArr = [ '星期天', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'];
 var week = weekArr[date.getDay()];
 // 给一位数数据前面加 “0”
 if (month >= 1 && month <= 9) {
  month = "0" + month;
 }
 if (day >= 0 && day <= 9) {
  day = "0" + day;
 }
 if (hour >= 0 && hour <= 9) {
  hour = "0" + hour;
 }
 if (minutes >= 0 && minutes <= 9) {
  minutes = "0" + minutes;
 }
 if (seconds >= 0 && seconds <= 9) {
  seconds = "0" + seconds;
 }
 var currentdate = year + sign1 + month + sign1 + day + " " + hour + sign2 + minutes + sign2 + seconds + " " + week;
 $("#nowDate201707081607").html("今天是："+currentdate);
}
getNowDate201707081607();
window.setInterval("getNowDate201707081607()",1000);
</script>



<?php
$dates=date("Y"); ?>


<div class="logo-bar">
  <div class="logo"><a href="/"></a></div>
    <div class="logo-wap"><a href="<?=Cz_cig('site_wap')?>index.php"></a></div>
    <div class="top-search">
<style>
.top-search td { margin: 0; padding: 0; font-size: 13px;}
.top-search td { vertical-align: middle;}
.top-search td img { vertical-align: middle;}
.top-search input[type="text"] { float: left; width: 240px; height: 26px; line-height: 26px; margin-left: 10px; margin-right: 10px; padding: 0 5px; border: solid 1px #aaa; background: #fff;}
.top-search input[type="radio"] { margin-right: 5px; margin-left: 10px;}
.top-search input[type="submit"] {
  width: 75px;
  height: 28px;
  line-height: 28px;
  cursor: pointer;
  outline: none;
  display: inline-block;
  text-align: center;
  color: #fff;
  border: none;
  background-color: #da2f33;
  font-size: 15px;
  font-family: "Microsoft YaHei";
}
.top-search input[type="submit"]:hover { background: #c40106;}
</style>
<!--百度搜索代码start-->

<!--百度搜索代码end-->    
    </div>
</div>

<div id="nav">
	<div class="nav-nav">
    	<ul class="clearfix">
        	<li><a class="index_nav nav_li" href="/">网站首页</a></li>
        	<li><a class="History_nav nav_li" href="<?php echo U('Home/History');?>?id=<?=$dates?>">开奖记录</a></li>			
        	<li><a class="Article_nav nav_li" href="/Article">资料大全</a></li>
        	<li><a class="Kjzb_nav nav_li" href="<?php echo U('Home/Kjzb');?>">开奖直播</a></li>
        	<li><a class="Table_nav nav_li" href="<?php echo U('Home/Table/table1');?>">统计图表</a></li>
        	<li><a class="charts_go_nav nav_li" href="<?php echo U('Home/Charts');?>/charts_go.html?id=1">动态走势</a></li>
			<li><a class="Charts_nav nav_li" href="<?php echo U('Home/Charts/index');?>">图表走势</a></li>
        	<li><a class="Tuku_nav nav_li" href="<?php echo U('Home/Tuku');?>">六合图库</a></li>
        	<li><a class="Pic_nav nav_li" href="<?php echo U('Home/Pic');?>">性感美女</a></li>
        </ul>
    </div>
</div>

<div class="hot-bar">
	<dl>
    	<dt>热门图纸：</dt>
        <dd><a target="_blank" href="/Tuku/4790.html">跑狗图</a></dd>
        <dd><a target="_blank" href="/Tuku/4776.html">香港挂牌</a></dd>
        <dd><a target="_blank" href="/Tuku/4785.html">管家婆</a></dd>
        <dd><a target="_blank" href="/Tuku/5365.html">马经图</a></dd>
        <dd><a target="_blank" href="/Tuku/4980.html">苹果报</a></dd>
        <dd><a target="_blank" href="/Tuku/4766.html">藏宝图</a></dd>
        <dd><a target="_blank" href="/Tuku/4796.html">白小姐</a></dd>
        <dd><a target="_blank" href="/Tuku/4834.html">曾道人</a></dd>
        <dd><a target="_blank" href="/Tuku/4810.html">黄大仙</a></dd>
    </dl>
	<dl>
    	<dt>统计图表：</dt>  
        <dd><a href="<?php echo U('Home/Table/table1');?>">生肖统计</a></dd>
        <dd><a href="<?php echo U('Home/Table/table9');?>">五行统计</a></dd>
        <dd><a href="<?php echo U('Home/Table/table24');?>">波色统计</a></dd>
        <dd><a href="<?php echo U('Home/Table/table5');?>">大小统计</a></dd>
        <dd><a href="<?php echo U('Home/Table/table10');?>">单双统计</a></dd>      
    </dl>
</div>

<div class="menu">
<div class="inner main">
<dl>
<dt>选择<br />年份</dt>
<dd>
<ul>
<?php  for($i =1976; $i <= $dates; $i++) { ?>
<li><a href="<?php echo U('Home/Charts/index');?>?id=<?=$i?>"><?=$i?></a></li>
<?php } ?>
</ul>
</dd>
</dl>
</div>
</div>

<div class="main">
<ul class="zs_nav">
<li class='cur'><a href="<?php echo U('Home/Charts/index');?>">出号综合分析</a></li>
<li><a href="<?php echo U('Home/Charts/lhc1');?>">六合特码走势</a></li>
<li><a href="<?php echo U('Home/Charts/lhc2');?>">特码生肖走势</a></li>
<li><a href="<?php echo U('Home/Charts/lhc3');?>">特码波色走势</a></li>
<li><a href="<?php echo U('Home/Charts/lhc4');?>">特码单双走势</a></li>
<li><a href="<?php echo U('Home/Charts/lhc5');?>">特码段位走势</a></li>
<li><a href="<?php echo U('Home/Charts/lhc6');?>">特码头数走势</a></li>
<li><a href="<?php echo U('Home/Charts/lhc7');?>">特码尾数走势</a></li>
<li><a href="<?php echo U('Home/Charts/lhc8');?>">特码五行走势</a></li>
</ul>


<TABLE class="zstable">
<tr style="background:#efefef;">
<td width="70" rowspan="2" class="bold">期数</td>
<td width="40" rowspan="2" class="bold">特码</td>
<td colspan="49">开奖号码综合分析：<font class="Red">圆形</font>为平码；<font class="Blue">方形</font>为特码。<font color="#999999">(预测本期特码：请点击相关的号码试试)</font></td>
</tr>
<tr style="background:#f9f9f9;">
<td>01</td>
<td>02</td>
<td>03</td>
<td>04</td>
<td>05</td>
<td>06</td>
<td>07</td>
<td>08</td>
<td>09</td>
<td>10</td>
<td>11</td>
<td>12</td>
<td>13</td>
<td>14</td>
<td>15</td>
<td>16</td>
<td>17</td>
<td>18</td>
<td>19</td>
<td>20</td>
<td>21</td>
<td>22</td>
<td>23</td>
<td>24</td>
<td>25</td>
<td>26</td>
<td>27</td>
<td>28</td>
<td>29</td>
<td>30</td>
<td>31</td>
<td>32</td>
<td>33</td>
<td>34</td>
<td>35</td>
<td>36</td>
<td>37</td>
<td>38</td>
<td>39</td>
<td>40</td>
<td>41</td>
<td>42</td>
<td>43</td>
<td>44</td>
<td>45</td>
<td>46</td>
<td>47</td>
<td>48</td>
<td>49</td>
</tr>
<tr>
<td>出现次数</td>
<td> </td>
<td><?php echo ($counts[0]); ?></td>
<td><?php echo ($counts[1]); ?></td>
<td><?php echo ($counts[2]); ?></td>
<td><?php echo ($counts[3]); ?></td>
<td><?php echo ($counts[4]); ?></td>
<td><?php echo ($counts[5]); ?></td>
<td><?php echo ($counts[6]); ?></td>
<td><?php echo ($counts[7]); ?></td>
<td><?php echo ($counts[8]); ?></td>
<td><?php echo ($counts[9]); ?></td>
<td><?php echo ($counts[10]); ?></td>
<td><?php echo ($counts[11]); ?></td>
<td><?php echo ($counts[12]); ?></td>
<td><?php echo ($counts[13]); ?></td>
<td><?php echo ($counts[14]); ?></td>
<td><?php echo ($counts[15]); ?></td>
<td><?php echo ($counts[16]); ?></td>
<td><?php echo ($counts[17]); ?></td>
<td><?php echo ($counts[18]); ?></td>
<td><?php echo ($counts[19]); ?></td>
<td><?php echo ($counts[20]); ?></td>
<td><?php echo ($counts[21]); ?></td>
<td><?php echo ($counts[22]); ?></td>
<td><?php echo ($counts[23]); ?></td>
<td><?php echo ($counts[24]); ?></td>
<td><?php echo ($counts[25]); ?></td>
<td><?php echo ($counts[26]); ?></td>
<td><?php echo ($counts[27]); ?></td>
<td><?php echo ($counts[28]); ?></td>
<td><?php echo ($counts[29]); ?></td>
<td><?php echo ($counts[30]); ?></td>
<td><?php echo ($counts[31]); ?></td>
<td><?php echo ($counts[32]); ?></td>
<td><?php echo ($counts[33]); ?></td>
<td><?php echo ($counts[34]); ?></td>
<td><?php echo ($counts[35]); ?></td>
<td><?php echo ($counts[36]); ?></td>
<td><?php echo ($counts[37]); ?></td>
<td><?php echo ($counts[38]); ?></td>
<td><?php echo ($counts[39]); ?></td>
<td><?php echo ($counts[40]); ?></td>
<td><?php echo ($counts[41]); ?></td>
<td><?php echo ($counts[42]); ?></td>
<td><?php echo ($counts[43]); ?></td>
<td><?php echo ($counts[44]); ?></td>
<td><?php echo ($counts[45]); ?></td>
<td><?php echo ($counts[46]); ?></td>
<td><?php echo ($counts[47]); ?></td>
<td><?php echo ($counts[48]); ?></td>
<td><?php echo ($counts[49]); ?></td>
</tr>
<tr title="请点击号码选择">
<td class="bold" style="height:40px">预测本期</td>
<td></td>
<td class="cu hui" onClick="SelectNum(this,'RedX','1');">1</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','2');">2</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','3');">3</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','4');">4</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','5');">5</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','6');">6</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','7');">7</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','8');">8</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','9');">9</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','10');">10</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','11');">11</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','12');">12</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','13');">13</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','14');">14</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','15');">15</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','16');">16</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','17');">17</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','18');">18</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','19');">19</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','20');">20</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','21');">21</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','22');">22</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','23');">23</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','24');">24</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','25');">25</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','26');">26</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','27');">27</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','28');">28</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','29');">29</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','30');">30</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','31');">31</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','32');">32</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','33');">33</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','34');">34</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','35');">35</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','36');">36</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','37');">37</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','38');">38</td>

<td class="cu hui" onClick="SelectNum(this,'GreenX','39');">39</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','40');">40</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','41');">41</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','42');">42</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','43');">43</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','44');">44</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','45');">45</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','46');">46</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','47');">47</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','48');">48</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','49');">49</td>
</tr>
<?php if(is_array($list)): foreach($list as $key=>$row): $zong=array($row['tit1'],$row['tit2'],$row['tit3'],$row['tit4'],$row['tit5'],$row['tit6'],$row['tit7']); sort($zong); ?>
<tr onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#ffffcc'">
<td><?=$row['times']?>/<?=$row['title']?></td>
<td style="background:#ffc;"><span class="<?=yx_no_band($row['tit7'],1)?> F"><?=$row['tit7']?></span></td>
<?php
for($i =1; $i <= 49; $i++){ if (in_array($i,$zong)=='1'){ $sums=$i; $color=yx_no_band($i,2); }else{ $sums="-"; $color='hui_color'; } ?>
<td class="<?=$color?>"><?=$sums?></td>
<?php }?>
</tr><?php endforeach; endif; ?>
<tr title="请点击号码选择">
<td class="bold" style="height:40px">预测本期</td>
<td></td>
<td class="cu hui" onClick="SelectNum(this,'RedX','1');">1</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','2');">2</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','3');">3</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','4');">4</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','5');">5</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','6');">6</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','7');">7</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','8');">8</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','9');">9</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','10');">10</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','11');">11</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','12');">12</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','13');">13</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','14');">14</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','15');">15</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','16');">16</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','17');">17</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','18');">18</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','19');">19</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','20');">20</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','21');">21</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','22');">22</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','23');">23</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','24');">24</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','25');">25</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','26');">26</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','27');">27</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','28');">28</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','29');">29</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','30');">30</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','31');">31</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','32');">32</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','33');">33</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','34');">34</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','35');">35</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','36');">36</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','37');">37</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','38');">38</td>

<td class="cu hui" onClick="SelectNum(this,'GreenX','39');">39</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','40');">40</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','41');">41</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','42');">42</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','43');">43</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','44');">44</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','45');">45</td>
<td class="cu hui" onClick="SelectNum(this,'RedX','46');">46</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','47');">47</td>
<td class="cu hui" onClick="SelectNum(this,'BlueX','48');">48</td>
<td class="cu hui" onClick="SelectNum(this,'GreenX','49');">49</td>
</tr>
<tr>
<td>出现次数</td>
<td> </td>
<td><?php echo ($counts[0]); ?></td>
<td><?php echo ($counts[1]); ?></td>
<td><?php echo ($counts[2]); ?></td>
<td><?php echo ($counts[3]); ?></td>
<td><?php echo ($counts[4]); ?></td>
<td><?php echo ($counts[5]); ?></td>
<td><?php echo ($counts[6]); ?></td>
<td><?php echo ($counts[7]); ?></td>
<td><?php echo ($counts[8]); ?></td>
<td><?php echo ($counts[9]); ?></td>
<td><?php echo ($counts[10]); ?></td>
<td><?php echo ($counts[11]); ?></td>
<td><?php echo ($counts[12]); ?></td>
<td><?php echo ($counts[13]); ?></td>
<td><?php echo ($counts[14]); ?></td>
<td><?php echo ($counts[15]); ?></td>
<td><?php echo ($counts[16]); ?></td>
<td><?php echo ($counts[17]); ?></td>
<td><?php echo ($counts[18]); ?></td>
<td><?php echo ($counts[19]); ?></td>
<td><?php echo ($counts[20]); ?></td>
<td><?php echo ($counts[21]); ?></td>
<td><?php echo ($counts[22]); ?></td>
<td><?php echo ($counts[23]); ?></td>
<td><?php echo ($counts[24]); ?></td>
<td><?php echo ($counts[25]); ?></td>
<td><?php echo ($counts[26]); ?></td>
<td><?php echo ($counts[27]); ?></td>
<td><?php echo ($counts[28]); ?></td>
<td><?php echo ($counts[29]); ?></td>
<td><?php echo ($counts[30]); ?></td>
<td><?php echo ($counts[31]); ?></td>
<td><?php echo ($counts[32]); ?></td>
<td><?php echo ($counts[33]); ?></td>
<td><?php echo ($counts[34]); ?></td>
<td><?php echo ($counts[35]); ?></td>
<td><?php echo ($counts[36]); ?></td>
<td><?php echo ($counts[37]); ?></td>
<td><?php echo ($counts[38]); ?></td>
<td><?php echo ($counts[39]); ?></td>
<td><?php echo ($counts[40]); ?></td>
<td><?php echo ($counts[41]); ?></td>
<td><?php echo ($counts[42]); ?></td>
<td><?php echo ($counts[43]); ?></td>
<td><?php echo ($counts[44]); ?></td>
<td><?php echo ($counts[45]); ?></td>
<td><?php echo ($counts[46]); ?></td>
<td><?php echo ($counts[47]); ?></td>
<td><?php echo ($counts[48]); ?></td>
<td><?php echo ($counts[49]); ?></td>
</tr>


<tr style="background:#f9f9f9;">
<td style="background:#efefef;" width="70" rowspan="2" class="bold">期数</td>
<td style="background:#efefef;" width="40" rowspan="2" class="bold">特码</td>
<td>01</td>
<td>02</td>
<td>03</td>
<td>04</td>
<td>05</td>
<td>06</td>
<td>07</td>
<td>08</td>
<td>09</td>
<td>10</td>
<td>11</td>
<td>12</td>
<td>13</td>
<td>14</td>
<td>15</td>
<td>16</td>
<td>17</td>
<td>18</td>
<td>19</td>
<td>20</td>
<td>21</td>
<td>22</td>
<td>23</td>
<td>24</td>
<td>25</td>
<td>26</td>
<td>27</td>
<td>28</td>
<td>29</td>
<td>30</td>
<td>31</td>
<td>32</td>
<td>33</td>
<td>34</td>
<td>35</td>
<td>36</td>
<td>37</td>
<td>38</td>
<td>39</td>
<td>40</td>
<td>41</td>
<td>42</td>
<td>43</td>
<td>44</td>
<td>45</td>
<td>46</td>
<td>47</td>
<td>48</td>
<td>49</td>
</tr>

<tr style="background:#efefef;">
<td colspan="49">开奖号码综合分析：<font class="Red">圆形</font>为平码；<font class="Blue">方形</font>为特码。<font color="#999999">(预测本期特码：请点击相关的号码试试)</font></td>
</tr>
</table>
</div>

<div id="topbar" class="content clearfix">
<TABLE class="zstable">
<tr style="background:#efefef;">
<td width="70" rowspan="2" class="bold">期数</td>
<td width="40" rowspan="2" class="bold">特码</td>
<td colspan="49">开奖号码综合分析：<font class="Red">圆形</font>为平码；<font class="Blue">方形</font>为特码。<font color="#999999">(预测本期特码：请点击相关的号码试试)</font></td>
</tr>
<tr style="background:#f9f9f9;">
<td>01</td>
<td>02</td>
<td>03</td>
<td>04</td>
<td>05</td>
<td>06</td>
<td>07</td>
<td>08</td>
<td>09</td>
<td>10</td>
<td>11</td>
<td>12</td>
<td>13</td>
<td>14</td>
<td>15</td>
<td>16</td>
<td>17</td>
<td>18</td>
<td>19</td>
<td>20</td>
<td>21</td>
<td>22</td>
<td>23</td>
<td>24</td>
<td>25</td>
<td>26</td>
<td>27</td>
<td>28</td>
<td>29</td>
<td>30</td>
<td>31</td>
<td>32</td>
<td>33</td>
<td>34</td>
<td>35</td>
<td>36</td>
<td>37</td>
<td>38</td>
<td>39</td>
<td>40</td>
<td>41</td>
<td>42</td>
<td>43</td>
<td>44</td>
<td>45</td>
<td>46</td>
<td>47</td>
<td>48</td>
<td>49</td>
</tr>
<tr id="disnum2"></tr>
<tr id="forecast2"></tr>
</TABLE>
</div>
			<?php $config=M('config')->where(array('id'=>1))->find(); ?>
<!--底部start-->
<div id="foot">
	<div class="foot">
    	<ul>
			<li><a href="/">网站首页</a></li>
			<li><a href="<?php echo U('Home/History');?>?id=2017">开奖记录</a></li>
			<li><a href="<?php echo U('Home/Charts/lhc1');?>">走势图</a></li>
			<li><a href="<?php echo ($config["site_wap"]); ?>" target="_blank">手机看开奖</a></li>
			<li><a href="/Source/kj/2017/sx.html">号码属性对照</a></li>
            <li><a href="/callback">开奖调用</a></li>
        </ul>
    </div>
</div>

    <div class="foot-txt">
<p><?php echo (stripslashes(htmlspecialchars_decode($config["site_qq"]))); ?></p>
<p><?php echo (stripslashes(htmlspecialchars_decode($config["site_copyright"]))); ?>&nbsp;&nbsp;<?php echo (stripslashes(htmlspecialchars_decode($config["javascript"]))); ?>
</p>
</div>
<!--底部end-->
<script type="text/javascript" src="<?php echo (JS_URL); ?>zzsc.js"></script>
<div class="bottom_tools">
  <a id="scrollUp" href="javascript:;" title="飞回顶部"></a>
</div>
		<script>
			var bgSelect = setInterval(function(){
				$(".Charts_nav").addClass("li_checked").siblings().removeClass("li_checked");
				if($(".Charts_nav").length != 0){
					clearInterval(bgSelect);
				}
			},200)
		</script>
</body>
</html>
<script src="<?php echo (JS_URL); ?>history.js" type="text/javascript"></script>