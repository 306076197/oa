<?php
 /*
	[PHPOA] (C) 2011-2014 天生创想 Inc.
	$Id: sms_count_num.php 1209087 2014-01-08 08:58:28Z phpoa $
*/
define('IN_ADMIN',True);
require_once('../include/common.php');
get_login($_USER->id);
//更新在线数据到数据库中
$blog = $db->fetch_one_array("SELECT COUNT(*) as online FROM ".DB_TABLEPRE."sms_receive where receiveperson='".$_USER->id."' and smskey='1'  ");
echo $blog["online"];
exit;
?>