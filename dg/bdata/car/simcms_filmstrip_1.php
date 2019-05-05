<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_filmstrip`;");
E_C("CREATE TABLE `simcms_filmstrip` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `pic` varchar(100) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `orderid` tinyint(4) DEFAULT '0',
  `typeid` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_filmstrip` values('32','/upload/image/20140815/20140815160628_46768.jpg','http://www.127.0.0.1','','0','1');");
E_D("replace into `simcms_filmstrip` values('42','/upload/image/20140815/20140815160705_66293.jpg','http://www.127.0.0.1',NULL,'0','1');");
E_D("replace into `simcms_filmstrip` values('47','/upload/image/20140711/20140711153619_12606.jpg','http://www.simcms.net',NULL,'0','2');");

require("../../inc/footer.php");
?>