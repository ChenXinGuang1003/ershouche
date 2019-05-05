<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_admin`;");
E_C("CREATE TABLE `simcms_admin` (
  `adminid` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` char(30) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `admingroup` int(11) DEFAULT '0',
  `admin_type` enum('administrator','admin') DEFAULT NULL,
  `last_login_time` int(11) DEFAULT NULL,
  `last_login_ip` char(15) DEFAULT NULL,
  `login_count` mediumint(9) DEFAULT '0',
  `status` tinyint(4) DEFAULT '0',
  `description` char(20) DEFAULT NULL,
  `permission` varchar(2048) DEFAULT NULL,
  PRIMARY KEY (`adminid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_admin` values('1','admin','e10adc3949ba59abbe56e057f20f883e','0','administrator','1426056431','127.0.0.1','401','1','','');");

require("../../inc/footer.php");
?>