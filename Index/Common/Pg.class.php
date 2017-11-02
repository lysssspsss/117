<?php

namespace Common;
class pg{
private $total;      //数据表中数据的总条数
private $listRows;  //每页显示行数
private $limit; 
private $uri; 
private $pgNum;       //页数
private $listNum=8;    //列表数目 默认等于8
private $config=array("Header"=>"记录","Prev"=>"上一页&nbsp;","Next"=>"下一页&nbsp;","First"=>"首 页&nbsp;","Last"=>"尾 页&nbsp;");
public function __construct($total,$listRows=10){
$pgs=$_GET['pg'];
if ($pgs==''){
$pgs=1;	
}

$this->total=$total;
$this->listRows=$listRows;
$this->uri=$this->getUri();
$this->pg=!empty($pgs) ? $pgs:1 ;
$this->pgNum=ceil($this->total/$this->listRows);
$this->limit=$this->setLimit();
$this->ypgs=$pgs ."/". $this->pgNum;
}

private function setLimit(){
return "" . ($this->pg - 1) * $this->listRows . ", {$this->listRows}";
}

//private function setLimit(){
//return "Limit " . ($this->pg - 1) * $this->listRows . ", {$this->listRows}";
//}

private function getUri(){
$url=$_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'],'?')?'':"?");
$parse=parse_url($url);
if(isset($parse["query"])){
parse_str($parse["query"],$params);
unset($params["pg"]);
$url=$parse['path'].'?'.http_build_query($params);
}
return  $url;
}
public function __get($args){
if ($args=="limit")
return  $this->limit;
else
return  null;
}
private function start(){
if ($this->total==0)
return 0;
else
return ($this->pg-1)*$this->listRows+1;
}
private function end(){
return min($this->pg*$this->listRows,$this->total);
}
private function First(){
if($this->pg==1)
$html="<a href='#'>{$this->config["First"]}</a>";
else
$html="<a href='{$this->uri}&pg=1'>{$this->config["First"]}</a>";
return $html;
}
private function Prev(){
if($this->pg==1)
$html="<a href='#'>{$this->config["Prev"]}</a>";
else
$html="<a href='{$this->uri}&pg=".($this->pg-1)."'>{$this->config["Prev"]}</a>";
return $html;
}
private function pgList(){
$linkpg="";
$iunm=floor($this->listNum/2);
for($i=$iunm;$i>=1;$i--){
$pg=$this->pg-$i;
if($pg<1)
continue;
$linkpg.="";
}
$linkpg.="";
for($i=1;$i<$iunm;$i++){
$pg=$this->pg+$i;
if($pg<=$this->pgNum)
$linkpg.="";
else
break;
}
return $linkpg;
}
private function Next(){
if($this->pg==$this->pgNum)
$html="<a href='#'>{$this->config["Next"]}</a>";
else
$html="<a href='{$this->uri}&pg=".($this->pg+1)."'>{$this->config["Next"]}</a>";
return $html;
}
private function Last(){
if($this->pg==$this->pgNum)
$html="<a href='#'>{$this->config["Last"]}</a>";
else
$html="<a href='{$this->uri}&pg=".($this->pgNum)."'>{$this->config["Last"]}</a>";
return $html;
}
private function Gopg(){
return '<input onkeyup="value=this.value.replace(/\D+/g,\'\')" type="text" onKeyDown="javascript:if(event.keyCode==13){var pg=(this.value>'.$this->pgNum.')?'.$this->pgNum.':this.value;location=\''.$this->uri.'&pg=\'+pg+\'\'}" value="'.$this->pg.'" style="width:25px"';
}

private function total(){
$html="";
return $html;
}




function paging(){

$html.=$this->total();
$html.=$this->First();
$html.=$this->Prev();
$html.=$this->pgList();
$html.=$this->Next();
$html.=$this->Last();
//$html.=$this->Gopg();//页面跳转
return $html;
}
}
?>