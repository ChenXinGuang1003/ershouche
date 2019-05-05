<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_ad`;");
E_C("CREATE TABLE `simcms_ad` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `adtype` tinyint(2) DEFAULT '0',
  `pic` varchar(100) DEFAULT NULL,
  `picwidth` varchar(5) DEFAULT NULL,
  `picheight` varchar(5) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `url_note` varchar(100) DEFAULT NULL,
  `starttime` int(11) DEFAULT '0',
  `endtime` int(11) DEFAULT '0',
  `isshow` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_ad` values('54','首页左侧广告','1','/upload/image/20140704/20140704140321_36372.jpg','240','130','http://www.simcms.net','','1406131200','1469030400','1');");
E_D("replace into `simcms_ad` values('55','首页右侧广告','1','/upload/image/20140810/20140810175740_74118.jpg','240','185','http://www.simcms.net','','1404403200','1501084800','1');");

require("../../inc/footer.php");
?>