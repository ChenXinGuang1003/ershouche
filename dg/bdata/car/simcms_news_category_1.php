<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_news_category`;");
E_C("CREATE TABLE `simcms_news_category` (
  `catid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint(5) unsigned DEFAULT '0',
  `catname` varchar(30) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `keywords` varchar(100) DEFAULT NULL,
  `description` mediumtext,
  `url` varchar(100) DEFAULT NULL,
  `listorder` smallint(5) unsigned DEFAULT '0',
  `isshow` tinyint(1) unsigned DEFAULT '1',
  PRIMARY KEY (`catid`),
  KEY `module` (`parentid`,`listorder`,`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_news_category` values('1','0','二手车行情',NULL,'','','','0','1');");
E_D("replace into `simcms_news_category` values('2','0','交易过户',NULL,'','','','0','1');");
E_D("replace into `simcms_news_category` values('3','0','汽车养护',NULL,NULL,NULL,'','0','1');");
E_D("replace into `simcms_news_category` values('4','0','驾驶技巧',NULL,NULL,NULL,'','0','1');");
E_D("replace into `simcms_news_category` values('5','0','公告',NULL,NULL,NULL,'','0','1');");

require("../../inc/footer.php");
?>