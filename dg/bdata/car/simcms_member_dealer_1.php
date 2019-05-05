<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_member_dealer`;");
E_C("CREATE TABLE `simcms_member_dealer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `tel` varchar(32) DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_member_dealer` values('3','166','哈哈哈','13565645654','/upload/image/20140711/20140711111147_54406.jpg');");
E_D("replace into `simcms_member_dealer` values('2','171','张林','13676787678','/upload/image/20140711/20140711111159_57991.jpg');");
E_D("replace into `simcms_member_dealer` values('4','175','张林','13565676567','/upload/image/20140711/20140711111135_10741.jpg');");

require("../../inc/footer.php");
?>