<?php
/*
	[PHPOA] (C) 2011-2014 天生创想 Inc.
	$Id: class_ugcode.php 1209087 2014-01-08 08:58:28Z phpoa $
*/
!defined('IN_TOA') && exit('Access Denied!');
class ugcode 
{
	static function ugcode_vod($type=0, $data=0) {
		if($type=='1'){
			$str = mb_convert_encoding($data,"GB2312","UTF-8");
			$result= iconv("GB2312","GB2312",$str);
		}else{
			$str = mb_convert_encoding($data,"UTF-8","GB2312");
			$result= iconv("UTF-8","UTF-8",$str);
		}
		
		return $result;

	}

	

	
	
}

?>