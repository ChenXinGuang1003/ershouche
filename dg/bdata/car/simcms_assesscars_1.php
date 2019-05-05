<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_assesscars`;");
E_C("CREATE TABLE `simcms_assesscars` (
  `aid` int(11) DEFAULT '0',
  `cid` int(11) DEFAULT '0',
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_contact_name` varchar(64) DEFAULT NULL,
  `p_contact_tel` varchar(32) DEFAULT NULL,
  `p_brand` int(5) DEFAULT '0',
  `p_subbrand` smallint(11) DEFAULT '0',
  `p_subsubbrand` int(11) DEFAULT '0',
  `p_name` varchar(30) DEFAULT NULL,
  `p_allname` varchar(50) DEFAULT NULL,
  `p_keyword` varchar(200) DEFAULT NULL,
  `p_color` varchar(10) DEFAULT NULL,
  `p_country` varchar(30) DEFAULT NULL,
  `p_transmission` varchar(10) DEFAULT NULL,
  `p_year` int(4) DEFAULT '0',
  `p_details` varchar(512) DEFAULT NULL,
  `p_model` int(11) DEFAULT NULL,
  `p_addtime` int(11) DEFAULT '0',
  `p_pics` varchar(512) DEFAULT NULL,
  `p_mainpic` varchar(100) DEFAULT NULL,
  `p_month` int(4) DEFAULT '0',
  `p_gas` varchar(10) DEFAULT NULL,
  `p_price` decimal(8,2) DEFAULT NULL,
  `p_kilometre` decimal(8,2) DEFAULT NULL,
  `p_reply_times` int(11) DEFAULT '0',
  `p_reply_info` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  KEY `p_allname` (`p_allname`),
  KEY `p_price` (`p_price`),
  KEY `p_sort` (`p_model`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_assesscars` values('0','0','4','张先生','13676765676','29','32','0','','阿斯顿·马丁DB7',NULL,'白色','国产','自动','2004','','1','1398865097',NULL,NULL,'4','2',NULL,'0.00',NULL,NULL);");
E_D("replace into `simcms_assesscars` values('0','0','3','张先生','13676765676','1','9','0','','奥迪A1',NULL,'白色','国产','自动','2006','','2','1398517204',NULL,NULL,'5','1',NULL,'15.00',NULL,NULL);");

require("../../inc/footer.php");
?>