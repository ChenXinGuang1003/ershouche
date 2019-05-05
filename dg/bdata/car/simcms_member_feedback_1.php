<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_member_feedback`;");
E_C("CREATE TABLE `simcms_member_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT '0',
  `auid` int(11) DEFAULT '0',
  `ask` varchar(500) DEFAULT NULL,
  `reply` varchar(500) DEFAULT NULL,
  `asktime` int(11) DEFAULT '0',
  `replytime` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `auid` (`auid`),
  KEY `ask` (`ask`(333))
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_member_feedback` values('4','166','0','1111111111111111','1111111111','1397970560','1397970572');");
E_D("replace into `simcms_member_feedback` values('7','175','0','1111','轻轻巧巧','1403364431','1403364442');");

require("../../inc/footer.php");
?>