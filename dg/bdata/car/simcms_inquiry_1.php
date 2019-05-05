<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_inquiry`;");
E_C("CREATE TABLE `simcms_inquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `uid` int(11) DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `mobilephone` varchar(32) DEFAULT NULL,
  `addtime` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>