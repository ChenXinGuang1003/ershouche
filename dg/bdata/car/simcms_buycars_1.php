<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_buycars`;");
E_C("CREATE TABLE `simcms_buycars` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT '0',
  `cid` int(11) DEFAULT '0',
  `uid` int(11) DEFAULT '0',
  `p_contact_name` varchar(32) DEFAULT NULL,
  `p_contact_tel` varchar(32) DEFAULT NULL,
  `p_brand` int(5) DEFAULT '0',
  `p_subbrand` smallint(11) DEFAULT '0',
  `p_subsubbrand` int(11) DEFAULT '0',
  `p_name` varchar(32) DEFAULT NULL,
  `p_allname` varchar(50) DEFAULT NULL,
  `p_model` int(11) DEFAULT '0',
  `p_price` decimal(8,2) DEFAULT NULL,
  `p_age` int(11) DEFAULT NULL,
  `p_addtime` int(11) DEFAULT '0',
  `p_kilometre` int(11) DEFAULT '0',
  `p_details` varchar(512) DEFAULT NULL,
  `isshow` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`p_id`),
  KEY `p_price` (`p_price`),
  KEY `p_sort` (`p_model`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>