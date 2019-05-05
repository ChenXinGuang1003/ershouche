<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `simcms_settings`;");
E_C("CREATE TABLE `simcms_settings` (
  `k` char(30) NOT NULL DEFAULT '',
  `v` text,
  PRIMARY KEY (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `simcms_settings` values('title','二手网');");
E_D("replace into `simcms_settings` values('keywords','二手网');");
E_D("replace into `simcms_settings` values('description','二手网是专业的二手交易网，海量信息，精准数据，是买卖二手最佳选择！');");
E_D("replace into `simcms_settings` values('sitename','二手网');");
E_D("replace into `simcms_settings` values('website','');");
E_D("replace into `simcms_settings` values('copyright','二手网');");
E_D("replace into `simcms_settings` values('icp','鲁ICP备01234567号');");
E_D("replace into `simcms_settings` values('address','山东东营');");
E_D("replace into `simcms_settings` values('postcode','257000');");
E_D("replace into `simcms_settings` values('fax','010-11111111');");
E_D("replace into `simcms_settings` values('tel','010-11111111');");
E_D("replace into `simcms_settings` values('email','web@123456.com');");
E_D("replace into `simcms_settings` values('pic_width','300');");
E_D("replace into `simcms_settings` values('pic_height','300');");
E_D("replace into `simcms_settings` values('htmldir','html');");
E_D("replace into `simcms_settings` values('templates','default');");
E_D("replace into `simcms_settings` values('water','0');");
E_D("replace into `simcms_settings` values('isdstimg','1');");
E_D("replace into `simcms_settings` values('imgwidth','800');");
E_D("replace into `simcms_settings` values('imgheight','800');");
E_D("replace into `simcms_settings` values('color','白色\r\n绿色\r\n蓝色\r\n红色\r\n黄色\r\n银灰\r\n黑色\r\n橙色');");
E_D("replace into `simcms_settings` values('year','2002\r\n2003\r\n2004\r\n2005\r\n2006\r\n2007\r\n2008\r\n2009\r\n2010\r\n2011\r\n2012\r\n2013\r\n2014\r\n2015');");
E_D("replace into `simcms_settings` values('issell','0');");
E_D("replace into `simcms_settings` values('gas','1.0\r\n1.2\r\n1.4\r\n1.5\r\n1.6\r\n1.8\r\n2.0\r\n2.4\r\n2.7\r\n3.0\r\n3.0以上');");
E_D("replace into `simcms_settings` values('transmission','手动\r\n自动\r\n手自一体');");
E_D("replace into `simcms_settings` values('waterpic','');");
E_D("replace into `simcms_settings` values('logo','');");
E_D("replace into `simcms_settings` values('version','2');");
E_D("replace into `simcms_settings` values('position','1');");
E_D("replace into `simcms_settings` values('islimit','1');");
E_D("replace into `simcms_settings` values('limitcount','3');");
E_D("replace into `simcms_settings` values('rentlimit','1');");
E_D("replace into `simcms_settings` values('rentcount','3');");
E_D("replace into `simcms_settings` values('thumbwidth','180');");
E_D("replace into `simcms_settings` values('thumbheight','200');");
E_D("replace into `simcms_settings` values('contactman','赵先生');");

require("../../inc/footer.php");
?>