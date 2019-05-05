<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_keywords`;");
E_C("CREATE TABLE `simcms_keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(50) DEFAULT NULL,
  `mark` varchar(10) DEFAULT NULL,
  `orderid` int(11) DEFAULT '0',
  `catid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_keywords` values('1','宝马','B','0','1');");
E_D("replace into `simcms_keywords` values('2','奔驰','B','0','1');");
E_D("replace into `simcms_keywords` values('3','福克斯','F','0','1');");
E_D("replace into `simcms_keywords` values('4','捷达','J','0','2');");
E_D("replace into `simcms_keywords` values('5',' 迈腾','M','0','2');");
E_D("replace into `simcms_keywords` values('6',' 宝来','B','0','2');");
E_D("replace into `simcms_keywords` values('7','奥迪Q5','A','0','2');");
E_D("replace into `simcms_keywords` values('8','奥迪','A','0','2');");
E_D("replace into `simcms_keywords` values('9','宝马','B','0','2');");

require("../../inc/footer.php");
?>