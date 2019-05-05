<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_friendlink`;");
E_C("CREATE TABLE `simcms_friendlink` (
  `l_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `l_name` varchar(30) DEFAULT NULL,
  `l_url` varchar(100) DEFAULT NULL,
  `l_note` varchar(50) DEFAULT NULL,
  `l_orderid` tinyint(4) DEFAULT '0',
  `isshow` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>