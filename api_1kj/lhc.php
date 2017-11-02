<?php
  $mid=$_GET["id"]; 
		$url="http://1680660.com/smallSix/findCurrentVideoInfo.do?";		
		$contents = file_get_contents($url);
	echo $contents;	
?>