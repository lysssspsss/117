<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Wmzz-Lhc网站后台系统管理</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo (JS_URL); ?>/assets/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo (JS_URL); ?>/assets/css/font-awesome.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo (JS_URL); ?>/assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo (JS_URL); ?>/assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo (JS_URL); ?>/assets/css/ace-ie.css" />
		<![endif]-->

		<!-- inline styles related to this page -->
        <link rel="stylesheet" href="<?php echo (JS_URL); ?>/assets/css/slackck.css" />
		<!-- ace settings handler -->
		<script src="<?php echo (JS_URL); ?>/assets/js/ace-extra.js"></script>
		<script src="<?php echo (JS_URL); ?>/assets/js/jquery.min.js"></script>
		<script src="<?php echo (JS_URL); ?>/assets/js/jquery.form.js"></script>
		<script src="<?php echo (JS_URL); ?>/assets/layer/layer.js"></script>
		<!--<script src="<?php echo (JS_URL); ?>/assets/js/jquery.leanModal.min.js"></script>-->

		<!--[if lte IE 8]>
		<script src="<?php echo (JS_URL); ?>/assets/js/html5shiv.js"></script>
		<script src="<?php echo (JS_URL); ?>/assets/js/respond.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default    navbar-collapse">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>
		
			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>
				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="<?php echo U('Index/index');?>" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Wmzz-Lhc
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->
					<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons">
						<span class="sr-only">Toggle user menu</span>

						<img src="<?php echo (JS_URL); ?>/assets/avatars/user.jpg" alt="Jason's Photo" />
					</button>

					<!-- /section:basics/navbar.toggle -->
				</div>
				
				
				
				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
					<ul class="nav ace-nav">
					<li class="transparent"></li>
					<li class="transparent">
						<a href="/" target="_blank" style="cursor:pointer;" class="dropdown-toggle">网站首页</a>
					</li>
					<li class="transparent">
						<a style="cursor:pointer;" id="cache" class="dropdown-toggle">清除缓存</a>
					</li>			
						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo (JS_URL); ?>/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>管理员</small>
									<?php echo ($_SESSION['admin_username']); ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li class="divider"></li>

								<li>
									<a href="javascript:;"  id="logout">
										<i class="ace-icon fa fa-power-off"></i>
										注销
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>


<script type="text/javascript">
$(document).ready(function(){
	$("#logout").click(function(){
		layer.confirm('你确定要退出吗？', {icon: 3}, function(index){
	    layer.close(index);
	    window.location.href="<?php echo U('Administrator/logout');?>";
	});
	});
});



$(function(){
$('#cache').click(function(){
if(confirm("确认要清除缓存？")){
var $type=$('#type').val();
var $mess=$('#mess');
$.post('/admin.php/Home/Kaijiang/clear',{type:$type},function(data){
alert("缓存清理成功");
});
}else{
return false;
}
});
});
</script>
<link href="<?php echo (CSS_URL); ?>common.css" rel="stylesheet" type="text/css"/>
		<div class="main-container" id="main-container">


			<div id="sidebar" class="sidebar responsive">

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<!--左侧顶端按钮-->
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<a class="btn btn-success" href="<?php echo U('Article/index');?>" role="button" title="文章列表"><i class="ace-icon fa fa-signal"></i></a>
			<a class="btn btn-info" href="<?php echo U('Article/info_add');?>" role="button" title="添加文章"><i class="ace-icon fa fa-pencil"></i></a>
			<a class="btn btn-warning" href="<?php echo U('Kaijiang/index');?>" role="button" title="开奖管理"><i class="ace-icon fa fa-users"></i></a>
			<a class="btn btn-danger" href="<?php echo U('Sys/sys');?>" role="button" title="站点设置"><i class="ace-icon fa fa-cogs"></i></a>
		</div>
        <!--左侧顶端按钮（手机）-->
		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<a class="btn btn-success" href="<?php echo U('Article/index');?>" role="button" title="文章列表"></a>
			<a class="btn btn-info" href="<?php echo U('Article/info_add');?>" role="button" title="添加文章"></a>
			<a class="btn btn-warning" href="<?php echo U('Kaijiang/index');?>" role="button" title="开奖管理"></a>
			<a class="btn btn-danger" href="<?php echo U('Sys/sys');?>" role="button" title="站点设置"></a>
		</div>
	</div>

				<ul class="nav nav-list">
			<?php use Common\Controller\AuthController; use Think\Auth; $m = M('auth_rule'); $field = 'id,name,title,css'; $data = $m->field($field)->where('pid=0 AND status=1')->order('sort')->select(); $auth = new Auth(); foreach ($data as $k=>$v){ if(!$auth->check($v['name'], $_SESSION['aid']) && $_SESSION['aid'] != 1){ unset($data[$k]); } } ?>

			<?php if(is_array($data)): foreach($data as $key=>$v): ?><li class="<?php if(CONTROLLER_NAME == $v['name']): ?>active open<?php endif; ?>"><!--open代表打开状态-->
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa <?php echo ($v["css"]); ?>"></i>
							<span class="menu-text">
								<?php echo ($v["title"]); ?>
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
				<?php $m = M('auth_rule'); $dataa = $m->where(array('pid'=>$v['id'],'menustatus'=>1))->order('sort')->select(); foreach ($dataa as $kk=>$vv){ if(!$auth->check($vv['name'], $_SESSION['aid']) && $_SESSION['aid'] != 1){ unset($dataa[$kk]); } } $id_4=$m->where(array('name'=>CONTROLLER_NAME.'/'.ACTION_NAME,'level'=>4))->field('pid')->find(); if($id_4){ $id_3=$m->where(array('id'=>$id_4['pid'],'level'=>3))->field('pid')->find(); }else{ $id_3=$m->where(array('name'=>CONTROLLER_NAME.'/'.ACTION_NAME,'level'=>3))->field('pid')->find(); if(!$id_3){ $id_2=$m->where(array('name'=>CONTROLLER_NAME.'/'.ACTION_NAME,'level'=>2))->field('id')->find(); $id_3['pid']=$id_2['id']; } } ?>
    <?php if(is_array($dataa)): foreach($dataa as $key=>$j): $m = M('auth_rule'); $dataaa = $m->where(array('pid'=>$j['id'],'status'=>1))->order('sort')->select(); foreach ($dataaa as $kkk=>$vvv){ if(!$auth->check($vvv['name'], $_SESSION['aid']) && $_SESSION['aid'] != 1){ unset($dataaa[$kkk]); } } ?>	
							<li class="<?php if(($_SESSION['se'] == $j['id'])): ?>active<?php endif; ?>">
								<a href="<?php echo U($j['name'],array('se'=>$j['id']));?>">
									<i class="menu-icon fa fa-caret-right"></i>
									<?php echo ($j["title"]); ?>
								</a>
								<b class="arrow"></b>
							</li><?php endforeach; endif; ?>
						</ul>
					</li><?php endforeach; endif; ?>
                    
				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
					
					

							<div class="row maintop">
								<div class="col-xs-12 col-sm-8">

<form action="/admin.php/Home/Kaijiang/" method="get">

<input type="button" value="开奖添加" onclick="location.href='/admin.php/Home/Kaijiang/info_add.html'"  class="btn btn-xs btn-danger" />

</form>
								</div>

								
								
							</div>

		

							<div class="row">
							    <div class="col-xs-12">
										<div>
<div id="msg">
<form name="form1" method="post" action="">
<table cellspacing="1" cellpadding="0" class="page_table" width="100%" style="margin-top:10px;">
<tr>
<td width="4%" height="32" align="center" class="table_top">ID</td>
<td width="12%" align="center" class="table_top">期数</td>
<td width="59%" align="center" class="table_top">开奖号码</td>
<td width="14%" align="center" class="table_top">时间</td>
<td width="11%" align="center" class="table_top">操作</td>
</tr>
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr bgcolor="ffffff" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#F5F5F5'">
<td><input type="checkbox" id="id" value="<?php echo ($vo["id"]); ?>" style="margin:3px 0px"></td>
<td align="center"><?php if (strstr($vo['title'], '期')){?>
<?=$vo['title']?>
<?php }else{?>
<?=$vo['title']?>期
<?php }?>
</td>
<td align="center">

<table cellspacing="1" cellpadding="0" class="page_table" width="100%" >
<tr>
<td><?php echo ($vo["tit1"]); ?></td>
<td><?php echo ($vo["tit2"]); ?></td>
<td><?php echo ($vo["tit3"]); ?></td>
<td><?php echo ($vo["tit4"]); ?></td>
<td><?php echo ($vo["tit5"]); ?></td>
<td><?php echo ($vo["tit6"]); ?></td>
<td><?php echo ($vo["tit7"]); ?></td>
</tr>
<tr>
<td><?php echo ($vo["tit01"]); ?></td>
<td><?php echo ($vo["tit02"]); ?></td>
<td><?php echo ($vo["tit03"]); ?></td>
<td><?php echo ($vo["tit04"]); ?></td>
<td><?php echo ($vo["tit05"]); ?></td>
<td><?php echo ($vo["tit06"]); ?></td>
<td><?php echo ($vo["tit07"]); ?></td>
</tr>
</table>


</td>
<td align="center"><?php echo (datetime($vo["begtime"])); ?> </td>
<td align="center">
<a href="/admin.php/Home/Kaijiang/info_edit/Id/<?php echo ($vo["id"]); ?>">更新开奖</a> 
<a href="#" onClick="Get_Ation_Save('infodelete','<?php echo ($vo["id"]); ?>')">删除</a></td>
</tr><?php endforeach; endif; ?>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
<tr>
<td width="17%" align="left">
<input type="button" value="全选" onClick="CheckAll()" class="x_input" />
<input type="button" value="删除" onClick="Get_Del_Save()"  class="x3_input" >
</td>
<td width="83%" style="text-align:center;"><div class="pager"><?php echo ($page); ?></div></td>
</tr>
</table>
</form>
</div>
							    		</div>
									</div>
								</div>

<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
	<div class="row">
		<div class="col-xs-12">
			<div class="">
				<div id="sidebar2" class="sidebar h-sidebar navbar-collapse collapse collapse_btn">
					<ul class="nav nav-list header-nav" id="header-nav">
                                        
    <?php $m = M('auth_rule'); $dataaa = $m->where(array('pid'=>$_SESSION['se'],'menustatus'=>1))->order('sort')->select(); foreach ($dataaa as $kkk=>$vvv){ if(!$auth->check($vvv['name'], $_SESSION['aid']) && $_SESSION['aid']!= 1){ unset($dataaa[$kkk]); } } ?>
    <?php if(is_array($dataaa)): foreach($dataaa as $key=>$k): ?><li>
												<a href="<?php echo U(''.$k['name'].'');?>">
													<o class="font12 <?php if((CONTROLLER_NAME.'/'.ACTION_NAME == $k['name'])): ?>rigbg<?php endif; ?>"><?php echo ($k["title"]); ?></o>
												</a>

								<b class="arrow"></b>
							</li><?php endforeach; endif; ?>
					</ul><!-- /.nav-list -->
				</div><!-- .sidebar -->
			</div>
		</div><!-- /.col -->
	</div><!-- /.row -->

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
</div>				
</div>
			<div class="footer">
				<div class="footer-inner">
					<!-- #section:basics/footer -->
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Wmzz.Cn</span>
							Lhc系统 &copy; 2015-2017
						</span>
					</div>

					<!-- /section:basics/footer -->
				</div>
			</div>
            

		<!-- basic scripts -->


<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?php echo (JS_URL); ?>assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script src="<?php echo (JS_URL); ?>/assets/js/bootstrap.js"></script>
		<script src="<?php echo (JS_URL); ?>/assets/js/maxlength.js"></script>
		<script src="<?php echo (JS_URL); ?>/assets/js/ace/ace.js"></script>
		<script src="<?php echo (JS_URL); ?>/assets/js/ace/ace.sidebar.js"></script>


		<!-- inline scripts related to this page -->
		
		<script type="text/javascript">
			jQuery(function($) {
			   $('#sidebar2').insertBefore('.page-content');
			   
			   $('.navbar-toggle[data-target="#sidebar2"]').insertAfter('#menu-toggler');
			   
			   
			   $(document).on('settings.ace.two_menu', function(e, event_name, event_val) {
				 if(event_name == 'sidebar_fixed') {
					 if( $('#sidebar').hasClass('sidebar-fixed') ) {
						$('#sidebar2').addClass('sidebar-fixed');
						$('#navbar').addClass('h-navbar');
					 }
					 else {
						$('#sidebar2').removeClass('sidebar-fixed')
						$('#navbar').removeClass('h-navbar');
					 }
				 }
			   }).triggerHandler('settings.ace.two_menu', ['sidebar_fixed' ,$('#sidebar').hasClass('sidebar-fixed')]);
			})
		</script>
	
<script src="<?php echo (JS_URL); ?>jquery.min.js"></script>
<script>
function CheckAll(value,obj)  {
var form=document.getElementsByTagName("form")
for(var i=0;i<form.length;i++){
for (var j=0;j<form[i].elements.length;j++){
if(form[i].elements[j].type=="checkbox"){ 
var e = form[i].elements[j]; 
if (value=="selectAll"){e.checked=obj.checked}     
else{e.checked=!e.checked;} 
}
}
}
}
</script>
<script>
//==========设置几秒跳转
var i = 2; 
var intervalid; 
function TiaoSecond(Yoyo){ 
if (i ==0) { 
window.location.href =Yoyo; 
clearInterval(intervalid); 
} 
document.getElementById("mes").innerHTML = i; 
i--; 
} 	
//==========设置几秒结束




//=======================获取删除数据
function Get_Del_Save(){
var $check_boxes = $('input[type=checkbox][checked=checked][id!=check_all_box]');  
if($check_boxes.length<=0){ alert('您未勾选任何数据，请先勾选！');return;}  
if(confirm('您确定要删除此数据？')){  
var dropIds = new Array();  
$check_boxes.each(function(){  
dropIds.push($(this).val());  
});
jQuery.ajax({
url: "/admin.php/Home/Kaijiang/infodelete.html",
dataType:"json",
type:"POST",
data:{Action:"Alldel",id:dropIds},
beforeSend: function(){
$('#msg').html('<center><br><br><img alt="正在加载中..." src="<?php echo (IMG_URL); ?>Loading/load1.gif" ></center>');	
},
success:function(data){
$("#msg").html(data.msg)
intervalid =setInterval("TiaoSecond('/admin.php/Home/Kaijiang/index.html')",1000);//==========执行几秒跳转
}
});
}  
}


//=======================获取其他操作
function Get_Ation_Save(oo1,oo2){
if(confirm('您确定要执行此操作？')){   
jQuery.ajax({
url: "/admin.php/Home/Kaijiang/infodelete.html",
dataType:"json",
type:"POST",
data:{Action:"del",id:oo2},
beforeSend: function(){
$('#msg').html('<center><br><br><img alt="正在加载中..." src="<?php echo (IMG_URL); ?>Loading/load1.gif" ></center>');	
},
success:function(data){
$("#msg").html(data.msg)
intervalid =setInterval("TiaoSecond('/admin.php/Home/Kaijiang/index.html')",1000);//==========执行几秒跳转
}
});
}  
}


</script>
	</body>
</html>