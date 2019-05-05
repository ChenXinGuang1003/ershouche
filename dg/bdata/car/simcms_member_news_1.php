<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_member_news`;");
E_C("CREATE TABLE `simcms_member_news` (
  `n_id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT '0',
  `n_title` varchar(100) DEFAULT NULL,
  `n_info` text,
  `n_author` varchar(30) DEFAULT NULL,
  `n_addtime` int(10) DEFAULT '0',
  `catid` int(11) DEFAULT '0',
  `n_type` tinyint(4) DEFAULT '0',
  `n_count` int(10) DEFAULT '0',
  `n_keywords` varchar(100) DEFAULT NULL,
  `n_url` varchar(200) DEFAULT NULL,
  `n_pic` varchar(100) DEFAULT NULL,
  `n_updatetime` int(11) DEFAULT '0',
  `n_hits` int(11) DEFAULT '0',
  `orderid` int(11) DEFAULT '0',
  `isrecom` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`n_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_member_news` values('6','166','二手车也可以0首付啦！','111111111111122222222222',NULL,'1388826235','0',NULL,'0',NULL,NULL,NULL,'0','0','0','0');");

require("../../inc/footer.php");
?>