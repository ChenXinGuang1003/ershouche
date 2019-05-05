<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_admingroup`;");
E_C("CREATE TABLE `simcms_admingroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(32) DEFAULT NULL,
  `permission` varchar(2048) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_admingroup` values('3','租车管理员','107,108');");
E_D("replace into `simcms_admingroup` values('2','二手车管理员','5,67,75,77,79,81,71,69');");

require("../../inc/footer.php");
?>