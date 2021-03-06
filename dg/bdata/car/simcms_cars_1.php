<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_cars`;");
E_C("CREATE TABLE `simcms_cars` (
  `p_no` varchar(10) DEFAULT NULL,
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT '0',
  `cid` int(11) DEFAULT '0',
  `uid` int(11) DEFAULT '0',
  `p_brand` int(5) DEFAULT '0',
  `p_subbrand` smallint(11) DEFAULT '0',
  `p_subsubbrand` int(11) NOT NULL,
  `p_name` varchar(30) DEFAULT NULL,
  `p_allname` varchar(50) DEFAULT NULL,
  `p_keyword` varchar(200) DEFAULT NULL,
  `p_color` varchar(10) DEFAULT NULL,
  `p_country` varchar(30) DEFAULT NULL,
  `p_transmission` varchar(10) DEFAULT NULL,
  `p_emission` varchar(32) DEFAULT NULL,
  `p_year` int(4) DEFAULT '0',
  `p_details` text,
  `p_model` int(11) DEFAULT NULL,
  `p_addtime` int(11) DEFAULT NULL,
  `p_pics` text,
  `p_mainpic` varchar(100) DEFAULT NULL,
  `p_hits` int(11) DEFAULT '0',
  `p_month` int(4) DEFAULT '0',
  `issprecom` tinyint(1) DEFAULT '0',
  `p_gas` varchar(10) DEFAULT NULL,
  `issell` tinyint(1) DEFAULT '0',
  `listtime` int(10) DEFAULT '0',
  `p_price` decimal(8,2) DEFAULT NULL,
  `p_kilometre` decimal(8,2) DEFAULT NULL,
  `p_keywords` varchar(100) DEFAULT NULL,
  `p_username` varchar(32) DEFAULT NULL,
  `p_tel` varchar(32) DEFAULT NULL,
  `isrecom` tinyint(1) DEFAULT '0',
  `ishot` tinyint(1) DEFAULT '0',
  `isshow` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`p_id`),
  KEY `p_id` (`p_id`),
  KEY `p_allname` (`p_allname`),
  KEY `p_price` (`p_price`),
  KEY `p_kilometre` (`p_kilometre`),
  KEY `p_model` (`p_model`),
  KEY `p_year` (`p_year`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_cars` values(NULL,'74','0','0','0','1','423','42059','','奥迪100 1994 款 2.6L（六缸）',NULL,'白色','进口','手动','国五','2002','','3','1406866833','/upload/image/20140912/20140912120001_67741.jpg|/upload/image/20140912/20140912120003_95624.jpg','/upload/image/20140912/20140912120001_67741.jpg','18','1','1','2.4','0','1406866833','8.00','22.00',NULL,'','0769-86069616','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'75','0','0','-1','19','666','46038','','北京汽车 北汽E系列三厢 2013 款 1.3L 手动 舒适型 乐活版',NULL,'银灰','','手动','国五','2013','优品二手车','3','1406903617','/upload/image/20140805/20140805003017_47107.jpg|/upload/image/20140805/20140805003017_31018.jpg|/upload/image/20140805/20140805003018_50391.jpg|/upload/image/20140912/20140912132632_55348.jpg|/upload/image/20140912/20140912132635_72899.jpg|/upload/image/20140912/20140912132639_33930.jpg','/upload/image/20140912/20140912132635_72899.jpg','10','5','0','1.2','0','1406903617','6.00','11.00',NULL,'','0769-86069616','1','0','1');");
E_D("replace into `simcms_cars` values(NULL,'41','0','0','0','1','426','42091','','奥迪A4 2007 款 1.8T CVT 豪华型','','黑色','进口','自动','国二','2004','一手车，车况超好','6','1397311720','/upload/image/20140912/20140912114418_78181.jpg|/upload/image/20140912/20140912114421_16902.jpg|/upload/image/20140912/20140912114423_18585.jpg|/upload/image/20140912/20140912114426_62539.jpg|/upload/image/20140912/20140912114429_11224.jpg','/upload/image/20140912/20140912114418_78181.jpg','10','3','1','1.8','1','1407640601','25.00','12.00',NULL,'4000-669-224','','1','0','1');");
E_D("replace into `simcms_cars` values(NULL,'65','0','0','166','19','664','46013','','北京汽车BJ40 2014 款 2.4L 手动 四驱 酷野版','','红色','国产','手动','国三','2008','','8','1405236964','/upload/image/20140912/20140912115627_76791.jpg|/upload/image/20140912/20140912115630_24512.jpg|/upload/image/20140912/20140912115632_76813.jpg','/upload/image/20140912/20140912115627_76791.jpg','7','5','1','2.0','0','1405236964','11.00','0.00',NULL,'','0769-86069616','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'66','0','0','0','124','1571','60378','','奇瑞A3三厢 2012 款 1.6L CVT 进取型','','蓝色','国产','自动','国二','2013','','3','1405236976','/upload/image/20140920/20140920161407_79971.jpg|/upload/image/20140920/20140920161410_60221.jpg','/upload/image/20140920/20140920161410_60221.jpg','4','1','1','1.6','0','1405236976','9.00','2.00',NULL,'','13453345676','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'67','0','0','166','2','452','42793','','奥克斯 朗杰 2004 款 豪华型','','红色','进口','手动','国三','2006','','1','1405236993','/upload/image/20140912/20140912120128_15910.jpg|/upload/image/20140912/20140912120130_14479.jpg','/upload/image/20140912/20140912120128_15910.jpg','2','4','1','1.0','1','1405236993','32.00','0.00',NULL,'','0769-86069616','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'68','0','0','166','59','1068','52872','','海马M3 2014 款 1.5L 自动 舒适型','','白色','国产','手动','国五','2013','','3','1405237019','/upload/image/20140912/20140912120606_27874.jpg|/upload/image/20140912/20140912120608_98818.jpg','/upload/image/20140912/20140912120608_98818.jpg','13','12','1','1.5','0','1405237019','7.00','1.00',NULL,'','0769-86069616','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'69','0','0','166','1','429','42363','','奥迪Q3 2014 款 30TFSI 进取型','','黑色','国产','自动','国五','2012','一手私家车','6','1405237045','/upload/image/20140920/20140920141228_56027.jpg|/upload/image/20140920/20140920141233_79285.jpg','/upload/image/20140920/20140920141233_79285.jpg','14','2','1','1.0','0','1405237045','22.00','9.00',NULL,'','18688810516','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'90','0','0','176','59','1068','52881','','海马M3 2013 款 1.5L 自动 豪华型',NULL,'白色','国产','手动','国五','2013','一手车','3','1411194189','/upload/image/20140920/20140920142245_60685.jpg|/upload/image/20140920/20140920142247_60863.jpg','/upload/image/20140920/20140920142245_60685.jpg','4','2','1','1.5','0','1411194189','6.50','6.00',NULL,'','4000669224','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'70','0','0','166','3','456','42801','','阿尔法·罗密欧 166 2003 款 166 3.0','','绿色','进口','自动','国三','2005','','3','1405237050','/upload/image/20140805/20140805101404_92069.jpg|/upload/image/20140805/20140805101405_22187.jpg|/upload/image/20140913/20140913125225_70397.jpg','/upload/image/20140913/20140913125225_70397.jpg','9','4','1','2.0','0','1406042153','11.00','6.00',NULL,'','0769-86069616','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'89','0','0','0','124','1572','60406','','奇瑞A5 2009 款 超值版 1.5—MT 精英型','','黑色','国产','手动','国五','2010','','3','1411097170','/upload/image/20140920/20140920161715_44439.jpg|/upload/image/20140920/20140920161718_12436.jpg|/upload/image/20140920/20140920161722_85860.jpg','/upload/image/20140920/20140920161722_85860.jpg','2','4','1','1.5','0','1411097170','8.00','3.00',NULL,'','18888888888','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'71','0','0','166','7','513','43451','','宝马3系 2012 款 320i 时尚型','','白色','国产','自动','国五','2010','一手私家车，车况超好','6','1405237058','/upload/image/20140920/20140920140619_19728.jpg','/upload/image/20140920/20140920140619_19728.jpg','12','4','1','2.7','0','1405237058','36.00','10.00',NULL,'','4000669224','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'72','0','0','0','59','1068','52880','','海马M3 2013 款 1.5L 自动 舒适型',NULL,'银灰','国产','手动','国二','2013','私家车，车况超好，因换了新车，优惠出让','3','1405329116','/upload/image/20140920/20140920160719_25180.jpg','/upload/image/20140920/20140920160719_25180.jpg','16','6','1','1.5','0','1405329116','11.00','3.00',NULL,'','18688810516','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'73','0','0','166','158','1831','64998','','雪佛兰 科鲁兹三厢 2013 款 1.6L SE MT WTCC版 ',NULL,'白色','进口','手动','国三','2013','优品二手车','4','1406272111','/upload/image/20140805/20140805095324_14705.jpg|/upload/image/20140805/20140805095326_83422.jpg|/upload/image/20140805/20140805095327_16358.jpg|/upload/image/20140805/20140805095328_54618.jpg|/upload/image/20140805/20140805095329_22693.jpg|/upload/image/20140912/20140912125258_47798.jpg|/upload/image/20140912/20140912125301_97039.jpg|/upload/image/20140912/20140912125303_43626.jpg','/upload/image/20140912/20140912125258_47798.jpg','17','7','1','1.6','0','1406272111','11.00','9.00',NULL,'','0769-86069616','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'78','0','0','166','73','1149','53867','','哈弗H6 2014 款 运动版 1.5T 手动 四驱 都市型',NULL,'黑色','国产','手动','国五','2013','优品二手车','8','1406986643','/upload/image/20140805/20140805002614_84696.jpg|/upload/image/20140805/20140805002614_24720.jpg|/upload/image/20140912/20140912132122_89615.jpg|/upload/image/20140912/20140912132126_43642.jpg|/upload/image/20140912/20140912132129_42074.jpg|/upload/image/20140912/20140912132133_91916.jpg|/upload/image/20140912/20140912132137_72347.jpg','/upload/image/20140912/20140912132137_72347.jpg','60','6','1','1.5','0','1410497469','13.00','11.00',NULL,'','0769-86069616','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'79','0','0','0','6','479','43053',NULL,'奔驰B级(进口) 2012 款 B180 1.6T 双离合',NULL,'白色','进口','自动','国四','2007','','2','1407475704','',NULL,'0','2','0','2.0','0','1407475704','30.00','8.00',NULL,'是施施','13101988888','0','0','0');");
E_D("replace into `simcms_cars` values(NULL,'80','0','0','178','59','1070','52891','','海马S5 2014 款 1.6L 手动 智乐型',NULL,'绿色','国产','手动','国二','2014','优品二手车','8','1407572605','/upload/image/20140912/20140912131652_71215.jpg|/upload/image/20140912/20140912131655_92361.jpg|/upload/image/20140912/20140912131658_50869.jpg','/upload/image/20140912/20140912131652_71215.jpg','11','4','1','2.0','0','1407572605','11.00','0.50',NULL,'','0769-86069616','1','1','1');");
E_D("replace into `simcms_cars` values(NULL,'81','0','0','0','20','667','46044',NULL,'北汽威旺205 2013 款 加长版 1.0L 兴业型',NULL,'绿色','进口','手动','国一','2004','5454','2','1407572767','','/upload/image/20140809/20140809162556_92026.jpg','0','3','0','1.0','0','1407572767','1.00','11.00',NULL,'5445','13222222222','0','0','0');");
E_D("replace into `simcms_cars` values(NULL,'82','0','0','0','2','452','42793',NULL,'奥克斯 朗杰 2004 款 豪华型',NULL,'白色','国产','自动','国二','2004','1','3','1407572809','',NULL,'0','3','0','2.0','0','1407572809','11.00','1.00',NULL,'11','13222222222','0','0','0');");
E_D("replace into `simcms_cars` values(NULL,'83','0','0','0','1','423','42059',NULL,'奥迪100 1994 款 2.6L（六缸）',NULL,'绿色','进口','手动','国一','2003','','2','1407572985','',NULL,'0','6','0','2.0','0','1407572985','12.00','11.00',NULL,'刘先生','13453345676','0','0','0');");
E_D("replace into `simcms_cars` values(NULL,'84','0','0','0','2','452','42794',NULL,'奥克斯 朗杰 2004 款 普通型',NULL,'绿色','','自动','国二','2004','','2','1407573079','',NULL,'0','2','0','2.0','0','1407573079','12.00','0.00',NULL,'刘先生','13565676567','0','0','0');");
E_D("replace into `simcms_cars` values(NULL,'85','0','0','0','19','665','46015',NULL,'北京汽车 北汽E系列两厢 2013 款 1.5L 乐天自动版',NULL,'绿色','进口','手动','国二','2004','1','1','1407573089','',NULL,'7','3','0','1.0','0','1407573089','11.00','1.00',NULL,'11','13222222222','0','0','1');");
E_D("replace into `simcms_cars` values(NULL,'86','0','0','-1','1','426','42081','','奥迪A4 2008 款 2.0TFSI 豪华型',NULL,'黄色','进口','手自一体','','2009','','6','1407664592','/upload/image/20140912/20140912115303_71322.jpg','/upload/image/20140912/20140912115303_71322.jpg','11','5','0','2.0','0','1407664592','15.00','10.00',NULL,'','','0','0','1');");
E_D("replace into `simcms_cars` values(NULL,'87','0','0','0','7','527','43851','','宝马X1(进口) 2012 款 xDrive 28i',NULL,'白色','进口','手自一体','国五','2006','车辆补充描述','6','1407810432','/upload/image/20140815/20140815222627_30887.jpg|/upload/image/20140912/20140912115120_36633.jpg|/upload/image/20140912/20140912115125_57013.jpg|/upload/image/20140912/20140912115130_88428.jpg','/upload/image/20140815/20140815222627_30887.jpg','4','4','1','2.4','0','1407810432','19.00','9.00',NULL,'张三','0769-86069616','1','0','1');");
E_D("replace into `simcms_cars` values(NULL,'88','0','0','0','3','457','42803',NULL,'阿尔法·罗密欧 阿尔法罗密欧Gtv 2003 款 GT 2.0 JTS S/S',NULL,'绿色','','自动','国二','2002','','2','1409929338','',NULL,'1','2','0','1.0','0','1409929338','1.00','0.00',NULL,'我','13000000000','0','0','0');");
E_D("replace into `simcms_cars` values(NULL,'91','0','0','-1','2','452','42793','','奥克斯 朗杰 2004 款 豪华型',NULL,'','','','','0','','1','1426039192','',NULL,'0','0','0','','0','1426039212','33.00','0.00',NULL,'','','0','0','1');");

require("../../inc/footer.php");
?>