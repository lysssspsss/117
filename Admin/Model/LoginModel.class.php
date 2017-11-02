<?php
namespace Model;
use Think\Model;
//说明 默认是读取表前缀 加表名字的 
//可以通过 protected $trueTableName="xxxx"; 重置表名称
//可以通过 protected $tablePrefix  ="xxxx"; 重置表前缀名称
class LoginModel extends Model {

//↓↓↓↓↓↓↓↓↓↓↓调用网站配置模块
public function CheckUser($name,$pwd){
$info=$this->getByusername($name);
var_dump($info);
}
//↑↑↑↑↑↑↑↑↑↑↑↑调用网站配置模块


}