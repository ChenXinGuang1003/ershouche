<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_channel`;");
E_C("CREATE TABLE `simcms_channel` (
  `c_id` smallint(10) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(30) DEFAULT NULL,
  `c_url` varchar(200) DEFAULT NULL,
  `c_orderid` int(3) DEFAULT NULL,
  `c_target` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_channel` values('1','首页','index.php','1','1');");
E_D("replace into `simcms_channel` values('2','卖车','index.php?m=sellcar','2','1');");
E_D("replace into `simcms_channel` values('7','买车','index.php?m=search','3','1');");
E_D("replace into `simcms_channel` values('13','评估','index.php?m=assesscar','5','1');");
E_D("replace into `simcms_channel` values('10','求购','index.php?m=qiugou','4','1');");
E_D("replace into `simcms_channel` values('11','联系','contact/','11','1');");
E_D("replace into `simcms_channel` values('14','商家','index.php?m=dealer','8','1');");
E_D("replace into `simcms_channel` values('16','攻略','index.php?m=news','9','1');");

require("../../inc/footer.php");
?>