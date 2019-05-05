<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_keywords_category`;");
E_C("CREATE TABLE `simcms_keywords_category` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) DEFAULT NULL,
  `listorder` int(11) DEFAULT '0',
  PRIMARY KEY (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_keywords_category` values('1','头部搜索下方','0');");
E_D("replace into `simcms_keywords_category` values('2','首页页面底部','0');");

require("../../inc/footer.php");
?>