<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_subscribe`;");
E_C("CREATE TABLE `simcms_subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `uid` int(11) DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `mobilephone` varchar(32) DEFAULT NULL,
  `ordertime` int(11) DEFAULT NULL,
  `orderinfo` varchar(300) DEFAULT NULL,
  `addtime` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>