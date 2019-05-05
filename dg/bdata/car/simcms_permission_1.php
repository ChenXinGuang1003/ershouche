<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_permission`;");
E_C("CREATE TABLE `simcms_permission` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '权限ID',
  `pid` smallint(6) DEFAULT '0' COMMENT '父权限ID',
  `name` char(20) DEFAULT NULL,
  `mod` char(20) DEFAULT NULL,
  `ac` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=utf8");
E_D("replace into `simcms_permission` values('4','0','二手车管理','','add');");
E_D("replace into `simcms_permission` values('5','4','品牌管理','','add');");
E_D("replace into `simcms_permission` values('6','5','品牌管理','brand','');");
E_D("replace into `simcms_permission` values('9','0','新闻管理','','add');");
E_D("replace into `simcms_permission` values('70','69','新闻管理','news','');");
E_D("replace into `simcms_permission` values('71','9','分类管理','','');");
E_D("replace into `simcms_permission` values('36','0','会员管理','','');");
E_D("replace into `simcms_permission` values('37','36','会员管理','','');");
E_D("replace into `simcms_permission` values('38','37','会员管理','member','');");
E_D("replace into `simcms_permission` values('83','60','生成车源','','');");
E_D("replace into `simcms_permission` values('84','83','生成车源','create_html','cars');");
E_D("replace into `simcms_permission` values('85','60','生成新闻','','');");
E_D("replace into `simcms_permission` values('60','0','生成静态','','');");
E_D("replace into `simcms_permission` values('106','0','租车管理',NULL,NULL);");
E_D("replace into `simcms_permission` values('107','106','车型管理',NULL,NULL);");
E_D("replace into `simcms_permission` values('63','0','模块管理','','');");
E_D("replace into `simcms_permission` values('64','63','栏目管理','','');");
E_D("replace into `simcms_permission` values('65','64','栏目管理','channel','');");
E_D("replace into `simcms_permission` values('68','67','车型管理','model','');");
E_D("replace into `simcms_permission` values('67','4','车型管理','','');");
E_D("replace into `simcms_permission` values('69','9','新闻管理','','');");
E_D("replace into `simcms_permission` values('72','71','分类管理','news_category','');");
E_D("replace into `simcms_permission` values('86','85','生成新闻','create_html','news');");
E_D("replace into `simcms_permission` values('87','60','生成单页','','');");
E_D("replace into `simcms_permission` values('75','4','车源列表','','');");
E_D("replace into `simcms_permission` values('76','75','车源列表','cars','');");
E_D("replace into `simcms_permission` values('77','4','卖车信息','','');");
E_D("replace into `simcms_permission` values('78','77','卖车信息','sellcars','');");
E_D("replace into `simcms_permission` values('79','4','求购信息','','');");
E_D("replace into `simcms_permission` values('80','79','求购信息','buycars','');");
E_D("replace into `simcms_permission` values('81','4','车源评估','','');");
E_D("replace into `simcms_permission` values('82','81','车源评估','assesscars','');");
E_D("replace into `simcms_permission` values('88','87','生成单页','create_html','page');");
E_D("replace into `simcms_permission` values('89','63','单页管理','','');");
E_D("replace into `simcms_permission` values('90','89','单页管理','page','');");
E_D("replace into `simcms_permission` values('91','63','广告管理','','');");
E_D("replace into `simcms_permission` values('92','91','广告管理','ad','');");
E_D("replace into `simcms_permission` values('93','63','首页轮播广告','','');");
E_D("replace into `simcms_permission` values('94','93','首页轮播广告','filmstrip','');");
E_D("replace into `simcms_permission` values('95','63','友情链接','','');");
E_D("replace into `simcms_permission` values('96','95','友情链接','flink','');");
E_D("replace into `simcms_permission` values('97','0','系统设置','','');");
E_D("replace into `simcms_permission` values('98','97','系统基本设置','','');");
E_D("replace into `simcms_permission` values('99','98','系统基本设置','settings','web');");
E_D("replace into `simcms_permission` values('100','97','联系方式设置','','');");
E_D("replace into `simcms_permission` values('101','100','联系方式设置','settings','contact');");
E_D("replace into `simcms_permission` values('102','97','车源相关设置','','');");
E_D("replace into `simcms_permission` values('103','102','车源相关设置','settings','car');");
E_D("replace into `simcms_permission` values('104','97','管理员选项','','');");
E_D("replace into `simcms_permission` values('105','104','管理员选项','admin','');");
E_D("replace into `simcms_permission` values('108','106','车源列表',NULL,NULL);");
E_D("replace into `simcms_permission` values('109','107','车型管理','rentmodel','');");
E_D("replace into `simcms_permission` values('110','108','车源列表','rentcars','');");
E_D("replace into `simcms_permission` values('111','36','商家类型管理',NULL,NULL);");
E_D("replace into `simcms_permission` values('112','111','商家类型管理','dealer_category','');");
E_D("replace into `simcms_permission` values('113','36','销售代表管理',NULL,NULL);");
E_D("replace into `simcms_permission` values('114','113','销售代表管理','member_dealer','');");
E_D("replace into `simcms_permission` values('115','36','促销信息管理',NULL,NULL);");
E_D("replace into `simcms_permission` values('116','115','促销信息管理','member_news','');");
E_D("replace into `simcms_permission` values('117','36','店铺问答管理',NULL,NULL);");
E_D("replace into `simcms_permission` values('118','117','店铺问答管理','member_ask','');");
E_D("replace into `simcms_permission` values('119','60','生成租车',NULL,NULL);");
E_D("replace into `simcms_permission` values('120','119','生成租车','create_html','rentcars');");
E_D("replace into `simcms_permission` values('121','60','生成求购',NULL,NULL);");
E_D("replace into `simcms_permission` values('122','121','生成求购','create_html','qiugou');");
E_D("replace into `simcms_permission` values('123','97','管理员用户组',NULL,NULL);");
E_D("replace into `simcms_permission` values('124','123','管理员用户组','admingroup','');");

require("../../inc/footer.php");
?>