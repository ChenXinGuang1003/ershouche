<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_page`;");
E_C("CREATE TABLE `simcms_page` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) DEFAULT '0',
  `orderid` int(11) DEFAULT '0',
  `p_title` varchar(50) DEFAULT NULL,
  `p_info` text,
  `p_tql` varchar(200) DEFAULT NULL,
  `p_page` varchar(200) DEFAULT NULL,
  `p_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_page` values('1','1','4','关于我们','关于我们','about.html','index.html','0');");
E_D("replace into `simcms_page` values('2','1','5','联系我们','联系我们&lt;br /&gt;','about.html','contact.html','0');");

require("../../inc/footer.php");
?>