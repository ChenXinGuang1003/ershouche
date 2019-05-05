<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_selfdefine`;");
E_C("CREATE TABLE `simcms_selfdefine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(200) DEFAULT NULL,
  `isshow` smallint(11) DEFAULT NULL,
  `type_name` varchar(20) DEFAULT NULL,
  `type_value` varchar(200) DEFAULT NULL,
  `orderid` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_selfdefine` values('5','交强险到期时间','1','time','','2');");
E_D("replace into `simcms_selfdefine` values('2','年检有效期至','1','time','','1');");
E_D("replace into `simcms_selfdefine` values('8','4S店定期保养','1','select','是|否','3');");
E_D("replace into `simcms_selfdefine` values('9','车辆用途','1','select','非营运|营运|营转非|租赁','4');");
E_D("replace into `simcms_selfdefine` values('12','看车地区','1','select','长安镇|虎门镇|厚街镇|南城区|莞城区|东城区|万江区|沙田镇|道滘镇|寮步镇|大朗镇|常平镇|黄江镇|高埗镇|茶山镇|石龙镇|石排镇|石碣镇|桥头镇|大岭山|望牛墩|洪梅镇|中堂镇|麻涌镇','5');");

require("../../inc/footer.php");
?>