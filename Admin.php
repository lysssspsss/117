<?php
header("Content-type: text/html; charset=utf-8");
define('APP_DEBUG',True);
//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下定义常量 常量必须大写字母
define("site_url","/");
define("JS_URL",site_url."Admin/Public/js/");
define("CSS_URL",site_url."Admin/Public/css/");
define("IMG_URL",site_url."Admin/Public/images/");
define("CZEDITOR",site_url."Public/czeditor/");
define("CZADMIN",site_url."Admin.php/");
define('HTML_PATH','./');
define('HTML_PATH1','./htm');
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上定义常量
// 定义应用目录
define('APP_PATH','./Admin/');
// 引入ThinkPHP入口文件
require './Public/ThinkPHP/ThinkPHP.php';
?>