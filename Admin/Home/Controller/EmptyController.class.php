<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller {
public function _empty(){
echo "<div style='text-align:center;width:100%;padding-top:100px;float:left'><img src='".IMG_URL."404.png'></div>";
}


}