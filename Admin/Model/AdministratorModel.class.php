<?php
namespace Model;
use Think\Model;
//说明 默认是读取表前缀 加表名字的 
//可以通过 protected $trueTableName="xxxx"; 重置表名称
//可以通过 protected $tablePrefix  ="xxxx"; 重置表前缀名称
class AdministratorModel extends Model {

//↓↓↓↓↓↓↓↓↓↓↓调用网站配置模块
public function Confing(){
$site="我是测试";
echo $site;
}

//↓↓↓↓↓↓↓↓↓↓↓调用网站配置模块
function CheckUser($name,$pwd){
$info=$this->getByUsername($name);

if ($info!=null){
if ($info['password']!=$pwd){
return false;
}else{
return $info;
}
}else{
return false;	
}

}
//↑↑↑↑↑↑↑↑↑↑↑↑调用网站配置模块

//↑↑↑↑↑↑↑↑↑↑↑↑调用网站配置模块


}