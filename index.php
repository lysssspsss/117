<?php
header("Content-type: text/html; charset=utf-8");
// 开启调试模建议开发阶段开部署阶段注释或者设为false
define('APP_DEBUG',True);

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下定义常常量必须大写字母
define("site_url","/");
define("JS_URL",site_url."Index/Public/JavaScript/");
define("CSSCP_URL",site_url."caipiao/css/");
define("CSS_URL",site_url."Index/Public/css/");
define("IMG_URL",site_url."Index/Public/images/");
define("CZADMIN",site_url."Index.php/");
define('HTML_PATH','./');
define('HTML_PATH1','./Html');
define('WEB_PATH', dirname(__FILE__) );
define('NO_CACHE_RUNTIME', true);//debug
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上定义常
// 定义应用目录
define('APP_PATH','./Index/');
// 引入ThinkPHP入口文件
require './Public/ThinkPHP/ThinkPHP.php';
?>