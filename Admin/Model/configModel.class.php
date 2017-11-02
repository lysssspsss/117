<?php
namespace Model;
use Think\Model;
//说明 默认是读取表前缀 加表名字的 
//可以通过 protected $trueTableName="xxxx"; 重置表名称
//可以通过 protected $tablePrefix  ="xxxx"; 重置表前缀名称
class configModel extends Model {

//↓↓↓↓↓↓↓↓↓↓↓调用网站配置模块
public function show(){
$info=$this->where('id=1')->select();
return $info;
}




}