<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_member`;");
E_C("CREATE TABLE `simcms_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT '0',
  `cid` int(11) DEFAULT '0',
  `username` varchar(20) DEFAULT NULL,
  `nicname` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `regtime` int(11) DEFAULT '0',
  `regip` varchar(20) DEFAULT NULL,
  `last_login_time` int(11) DEFAULT '0',
  `last_login_ip` varchar(20) DEFAULT NULL,
  `login_count` int(11) DEFAULT '0',
  `tel` varchar(20) DEFAULT NULL,
  `mobilephone` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `ischeck` tinyint(1) DEFAULT '0',
  `checknotice` mediumtext,
  `checkshop` tinyint(1) DEFAULT NULL,
  `isrecom` tinyint(1) DEFAULT '0',
  `ishot` tinyint(1) DEFAULT '0',
  `shoptype` tinyint(2) DEFAULT '0',
  `shopdetail` text,
  `isdealer` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `tel` (`tel`)
) ENGINE=MyISAM AUTO_INCREMENT=181 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_member` values('166','0','0','youhecar','张先生','9e1274f2c699a30e3f3f4c1ea63d33d9','youpin@126.com','1398923763',NULL,'1406884298','127.0.0.1','38','0769-86069616','15900014410',NULL,'东莞市长安镇',NULL,'优品二手车有限公司','/upload/image/20140920/20140920134918_75508.jpg','1','公司地址未填写','1','1','1','1','优品二手车','2');");
E_D("replace into `simcms_member` values('174','1','2','zihan2014','小毛','e10adc3949ba59abbe56e057f20f883e','228971528@qq.com','1398923763',NULL,NULL,NULL,NULL,'010-88888888','13566815822',NULL,'浙江省台州市路桥区方林二手车交易市场A区226号',NULL,'北京普艾斯科技有限公司','/upload/image/20140617/20140617061303_78378.png','1',NULL,'1','0','0','0','浙江省台州市路桥区方林二手车交易市场A区226号','2');");
E_D("replace into `simcms_member` values('168','0','0','sanhecar','肖先生','9578a29ef5d632f23ad2ef031006edfb','bb@aa.com',NULL,NULL,NULL,NULL,NULL,'','15019183221',NULL,'东莞市长安镇',NULL,'三和二手车行','/upload/image/20140920/20140920135316_63484.jpg','1','',NULL,'1','1','1','','2');");
E_D("replace into `simcms_member` values('170','0','0','cccccc','asdf','c1f68ec06b490b3ecb4066b1b13a9ee9','cc@cc.com',NULL,NULL,NULL,NULL,NULL,'','13536541235',NULL,'',NULL,'哈哈二手车','','1',NULL,NULL,'1','1','0',NULL,'2');");
E_D("replace into `simcms_member` values('171','6','7','wiwiboy','李宏','e10adc3949ba59abbe56e057f20f883e','wiwiboy@126.com',NULL,NULL,'1397746088','127.0.0.1','2','','13566815832',NULL,'',NULL,'北京普艾斯科技有限公司','/upload/image/20140420/20140420112551_44436.jpg','1',NULL,NULL,'0','0','1',NULL,'2');");
E_D("replace into `simcms_member` values('175','0','0','littlemao2014','李先生','e10adc3949ba59abbe56e057f20f883e','littlemao2007@126.com','1403080374',NULL,'0',NULL,'0','18210888989','18210888989',NULL,'东莞市虎门镇',NULL,'信诚二手车行','','1','',NULL,'0','0','0','','2');");
E_D("replace into `simcms_member` values('176','0','0','any168','李宏','e10adc3949ba59abbe56e057f20f883e','any68@126.com','1403600448',NULL,'1411194051','106.37.236.210','2','','18234565656',NULL,'',NULL,'百姓二手车','','1','',NULL,'1','0','4','','0');");
E_D("replace into `simcms_member` values('177','6','7','littlemao2','李宏','e10adc3949ba59abbe56e057f20f883e','wiwiboy@1.com','1403600577',NULL,'1403600577','127.0.0.1','1','','13566815811',NULL,'',NULL,'厦门二手车经纪有限公司','','0','',NULL,'0','0','0','','0');");
E_D("replace into `simcms_member` values('178','0','0','123456','45','e10adc3949ba59abbe56e057f20f883e','651231@qq.com','1407571452',NULL,'1407572507','115.55.1.120','2','','13254678987',NULL,'',NULL,'ds','','1','',NULL,'0','0','0','','2');");
E_D("replace into `simcms_member` values('179','0','0','paishou','aon','6858ce2f6fbae098d375bcdc48110ba5','bongdi@qq.com','1407675082',NULL,'1407675082','58.242.219.154','1',NULL,'18919329933',NULL,NULL,NULL,'asdlasdlj',NULL,'0',NULL,NULL,'0','0','0',NULL,'2');");
E_D("replace into `simcms_member` values('180','0','0','123333','ceoggq','ce9e8dc8a961356d7624f1f463edafb5','ceoggq@163.com','1409128238',NULL,'1411184422','218.56.137.58','2',NULL,'15725515102',NULL,NULL,NULL,'',NULL,'0',NULL,NULL,'0','0','0',NULL,'1');");

require("../../inc/footer.php");
?>