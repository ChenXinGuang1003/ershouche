<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `simcms_area`;");
E_C("CREATE TABLE `simcms_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `isrecom` tinyint(1) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `simcms_area` values('1','ɽ��ʡ','0','0','-1');");
E_D("replace into `simcms_area` values('2','����','1','0','1');");
E_D("replace into `simcms_area` values('3','�ൺ','0','0','1');");
E_D("replace into `simcms_area` values('4','��̨','0','0','1');");
E_D("replace into `simcms_area` values('5','����','0','0','1');");
E_D("replace into `simcms_area` values('6','�Ϻ���','0','0','-1');");
E_D("replace into `simcms_area` values('7','�Ϻ���','1','0','6');");
E_D("replace into `simcms_area` values('8','�ӱ�','0','0','-1');");
E_D("replace into `simcms_area` values('9','�ػʵ�','0','0','8');");
E_D("replace into `simcms_area` values('10','ʯ��ׯ','0','0','8');");

require("../../inc/footer.php");
?>