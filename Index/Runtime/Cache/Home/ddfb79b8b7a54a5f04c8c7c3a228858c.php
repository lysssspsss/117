<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN" dir="ltr">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title>性感美女</title>
<link href="<?php echo (CSS_URL); ?>list.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (CSS_URL); ?>self.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (CSS_URL); ?>main.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]><script src="<?php echo (JS_URL); ?>html5.js" type="text/javascript"></script><![endif]-->
<script src="//libs.baidu.com/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo (JS_URL); ?>superslide.js" type="text/javascript"></script>
<script src="<?php echo (JS_URL); ?>My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<script src="<?php echo (JS_URL); ?>jQuery-jcMarquee.js" type="text/javascript"></script> 
<script> 
$(function(){ 
    $('#Marquee_x').jcMarquee({ 'marquee':'x','margin_right':'10px','speed':20 }); 
}); 
</script> 
<div class="br bgff" style="margin-top:2px;">
 <div class="title28_bord"><span class="fright"><a href="<?php echo U('Home/Pic');?>" target="_blank">更多美女图库</a></span><h4>性感美女图</h4></div>
    <div id="Marquee_x"> 
        <ul> 
            <li>
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><div><a href="/meinv/<?php echo ($vo["id"]); ?>.html" title="<?php echo ($vo["title"]); ?>" target="_blank"><img src="<?php echo ($vo["picurl"]); ?>" width="215" height="297" alt="<?php echo ($vo["title"]); ?>" /><span><?php echo ($vo["title"]); ?>..</span></a></div><?php endforeach; endif; ?>
            </li> 
        </ul> 
    </div> 
<div class="clear"></div>
</div>
</body>
</html>