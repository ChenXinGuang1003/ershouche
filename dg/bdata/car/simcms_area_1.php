<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `simcms_area`;");
E_C("CREATE TABLE `simcms_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `isrecom` tinyint(1) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `simcms_area` values('1','山东省','0','0','-1');");
E_D("replace into `simcms_area` values('2','济南','1','0','1');");
E_D("replace into `simcms_area` values('3','青岛','0','0','1');");
E_D("replace into `simcms_area` values('4','烟台','0','0','1');");
E_D("replace into `simcms_area` values('5','威海','0','0','1');");
E_D("replace into `simcms_area` values('6','上海市','0','0','-1');");
E_D("replace into `simcms_area` values('7','上海市','1','0','6');");
E_D("replace into `simcms_area` values('8','河北','0','0','-1');");
E_D("replace into `simcms_area` values('9','秦皇岛','0','0','8');");
E_D("replace into `simcms_area` values('10','石家庄','0','0','8');");

require("../../inc/footer.php");
?>