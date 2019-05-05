<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_page_sorts`;");
E_C("CREATE TABLE `simcms_page_sorts` (
  `s_id` smallint(10) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(30) DEFAULT NULL,
  `s_dir` varchar(50) DEFAULT NULL,
  `orderid` smallint(6) DEFAULT '0',
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_page_sorts` values('1','联系','contact','0');");

require("../../inc/footer.php");
?>