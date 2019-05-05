<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_dealer_category`;");
E_C("CREATE TABLE `simcms_dealer_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(32) DEFAULT NULL,
  `orderid` int(11) DEFAULT '0',
  `isshow` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_dealer_category` values('1','经纪公司','0','0');");
E_D("replace into `simcms_dealer_category` values('2','4S店','0','0');");
E_D("replace into `simcms_dealer_category` values('3','综合经销商','0','0');");
E_D("replace into `simcms_dealer_category` values('4','个体经营','0','0');");

require("../../inc/footer.php");
?>