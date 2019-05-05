<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_model`;");
E_C("CREATE TABLE `simcms_model` (
  `s_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(10) DEFAULT NULL,
  `s_parent` tinyint(4) DEFAULT NULL,
  `s_pic` varchar(20) DEFAULT NULL,
  `s_list` varchar(20) DEFAULT NULL,
  `orderid` smallint(6) DEFAULT '0',
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_model` values('1','微型车','-1','','4,-1','1');");
E_D("replace into `simcms_model` values('2','小型车','-1','1346398534.gif','28,-1','2');");
E_D("replace into `simcms_model` values('3','紧凑型车','-1','1346398540.gif','29,-1','3');");
E_D("replace into `simcms_model` values('4','中型车','-1','1346398547.gif','31,-1','4');");
E_D("replace into `simcms_model` values('5','中大型车','-1','1346398556.gif','32,-1','5');");
E_D("replace into `simcms_model` values('6','豪华车','-1','','33,-1','6');");
E_D("replace into `simcms_model` values('7','MPV','-1','','34,-1','7');");
E_D("replace into `simcms_model` values('8','SUV','-1','','37,-1','8');");
E_D("replace into `simcms_model` values('9','跑车','-1','','36,-1','9');");
E_D("replace into `simcms_model` values('38','皮卡',NULL,'',NULL,'38');");
E_D("replace into `simcms_model` values('39','面包车',NULL,'',NULL,'39');");

require("../../inc/footer.php");
?>