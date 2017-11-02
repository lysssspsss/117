<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>六合三肖平特</title>
<style>
*{ margin:0; padding:0;}
html { }
body{ font-size: 12px; color:#000;}
a:hover img,img{ border:none;}
table{ border-collapse:collapse;}
a{ text-decoration:none; color: inherit;}
a:hover{ text-decoration: underline;}

.tit { padding: 15px 0; text-align: center;}
td { height: 30px; border-bottom: dashed 1px #eee;}
p { width: 280px; height: 30px; line-height: 30px; overflow: hidden;}
</style>
<base target="_blank" />
</head>

<body>
<div class="tit"><b><font size="5"><font color="#FF0000"><?=Cz_cig('site_name')?></font><font color="#00FF00">三肖平特</font></font></b></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<colgroup>
<col width="50" />
<col width="" />
</colgroup>
<!--开始end-->
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
    <td width="49" height="19">
	<img src="/Html/img/jiuxiao.gif" style="border: medium none" /></td>
    <td height="19"><font color="#0066FF">
	<a href="<?=Cz_cig('site_url')?>"><?php echo ($vo["qihao"]); ?>期（平特三）</a></font><a href="<?=Cz_cig('site_url')?>"><font color="#FF0000" style="margin: 0; padding: 0">【<?php echo ($vo["pt3"]); ?>】</font>开：<font color="#FF0000"><?php echo ($vo["jg"]); ?></font></a>准</td>
  </tr><?php endforeach; endif; ?> 
 <!--结束end-->
</table>
</body>
</html>