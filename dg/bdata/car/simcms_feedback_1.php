<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_feedback`;");
E_C("CREATE TABLE `simcms_feedback` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_username` varchar(30) DEFAULT NULL,
  `f_addtime` int(11) DEFAULT NULL,
  `f_email` varchar(32) DEFAULT NULL,
  `f_address` varchar(100) DEFAULT NULL,
  `f_tel` varchar(60) DEFAULT NULL,
  `f_detail` text,
  `is_show` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>