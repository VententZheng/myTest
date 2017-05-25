--
-- MySQL database export
--
-- 生成日期: 2017 年  03 月 17 日 19:51
-- MySQL版本: 5.5.5-10.1.21-MariaDB
-- PHP 版本: 5.6.30

--
-- 数据库: `qiqiao`
--

-- -------------------------------------------------------

--
-- 表的结构qiq_admin
--

DROP TABLE IF EXISTS `qiq_admin`;
CREATE TABLE `qiq_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `real_name` varchar(16) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `age` int(11) NOT NULL,
  `tel` char(11) NOT NULL,
  `id_card` char(18) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `name` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `login_time` varchar(20) NOT NULL,
  `last_login_ip` varchar(20) NOT NULL,
  `last_login_time` varchar(30) NOT NULL,
  `status` tinyint(3) NOT NULL,
  `create_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 qiq_admin
--

--
-- 表的结构qiq_app
--

DROP TABLE IF EXISTS `qiq_app`;
CREATE TABLE `qiq_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appkey` varchar(100) NOT NULL,
  `secretkey` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 qiq_app
--

INSERT INTO `qiq_app` VALUES('1','43543543','ebb6245e37faea90458b91b427d0c2f2');
--
-- 表的结构qiq_auth_group
--

DROP TABLE IF EXISTS `qiq_auth_group`;
CREATE TABLE `qiq_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 qiq_auth_group
--

INSERT INTO `qiq_auth_group` VALUES('1','ç³»ç»Ÿç®¡ç†å‘˜','1','1,2,3,4,8,9,10');
INSERT INTO `qiq_auth_group` VALUES('2','ç”¨æˆ·ç®¡ç†å‘˜','1','5,6,7');
INSERT INTO `qiq_auth_group` VALUES('4','è§†é¢‘ç®¡ç†å‘˜','1','11,12,13,14,15,16');
INSERT INTO `qiq_auth_group` VALUES('5','èµ„è®¯ç®¡ç†å‘˜','1','17,18');
INSERT INTO `qiq_auth_group` VALUES('6','ç­–åˆ’ç®¡ç†å‘˜','1','19,20,21');
INSERT INTO `qiq_auth_group` VALUES('7','æƒé™è€…','1','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21');
--
-- 表的结构qiq_auth_group_access
--

DROP TABLE IF EXISTS `qiq_auth_group_access`;
CREATE TABLE `qiq_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 qiq_auth_group_access
--

INSERT INTO `qiq_auth_group_access` VALUES('1','7');
INSERT INTO `qiq_auth_group_access` VALUES('2','1');
INSERT INTO `qiq_auth_group_access` VALUES('3','2');
INSERT INTO `qiq_auth_group_access` VALUES('4','3');
--
-- 表的结构qiq_auth_rule
--

DROP TABLE IF EXISTS `qiq_auth_rule`;
CREATE TABLE `qiq_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `type` char(80) NOT NULL DEFAULT '',
  `condition` char(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 qiq_auth_rule
--

INSERT INTO `qiq_auth_rule` VALUES('1','Index/log','æ—¥å¿—ç®¡ç†','1','Index','');
INSERT INTO `qiq_auth_rule` VALUES('2','Index/setting','ç³»ç»Ÿè®¾ç½®','1','Index','');
INSERT INTO `qiq_auth_rule` VALUES('3','Index/database','å¤‡ä»½æ•°æ®åº“','1','Index','');
INSERT INTO `qiq_auth_rule` VALUES('4','Index/restore','è¿˜åŽŸæ•°æ®åº“','1','Index','');
INSERT INTO `qiq_auth_rule` VALUES('5','User/add','ç”¨æˆ·æ·»åŠ ','1','User','');
INSERT INTO `qiq_auth_rule` VALUES('6','User/manage','ç”¨æˆ·ç®¡ç†','1','User','');
INSERT INTO `qiq_auth_rule` VALUES('7','User/message','æ¶ˆæ¯ç®¡ç†','1','User','');
INSERT INTO `qiq_auth_rule` VALUES('8','Admin/user','ç®¡ç†äººå‘˜','1','Admin','');
INSERT INTO `qiq_auth_rule` VALUES('9','Admin/role','è§’è‰²åˆ—è¡¨','1','Admin','');
INSERT INTO `qiq_auth_rule` VALUES('10','Admin/addfunctions','æ·»åŠ åŠŸèƒ½','1','Admin','');
INSERT INTO `qiq_auth_rule` VALUES('11','Video/attributes','è§†é¢‘å±žæ€§','1','Video','');
INSERT INTO `qiq_auth_rule` VALUES('12','Video/handle','æ“ä½œè®¾ç½®','1','Video','');
INSERT INTO `qiq_auth_rule` VALUES('13','Video/change','è§†é¢‘è½¬æ¢','1','Video','');
INSERT INTO `qiq_auth_rule` VALUES('14','Video/pass','è§†é¢‘å®¡æ ¸','1','Video','');
INSERT INTO `qiq_auth_rule` VALUES('15','Video/view','è§†é¢‘æµè§ˆ','1','Video','');
INSERT INTO `qiq_auth_rule` VALUES('16','Video/setting','è§†é¢‘è®¾ç½®','1','Video','');
INSERT INTO `qiq_auth_rule` VALUES('17','Information/add','èµ„è®¯æ·»åŠ ','1','Information','');
INSERT INTO `qiq_auth_rule` VALUES('18','Information/manage','èµ„è®¯ç®¡ç†','1','Information','');
INSERT INTO `qiq_auth_rule` VALUES('19','Plan/planmanage','ç­–åˆ’ç®¡ç†','1','Plan','');
INSERT INTO `qiq_auth_rule` VALUES('20','Plan/add','ç§°å·æ·»åŠ ','1','Plan','');
INSERT INTO `qiq_auth_rule` VALUES('21','Plan/titlemanage','ç§°å·ç®¡ç†','1','Plan','');
--
-- 表的结构qiq_log
--

DROP TABLE IF EXISTS `qiq_log`;
CREATE TABLE `qiq_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `ip` varchar(50) NOT NULL,
  `action` text NOT NULL,
  `user` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 qiq_log
--

INSERT INTO `qiq_log` VALUES('39','备份数据库','2017-03-17 17:55:16','127.0.0.1','备份数据库:qiq_admin,qiq_app,qiq_auth_group,qiq_auth_group_access,qiq_auth_rule,qiq_log<br>备份文件名称:20170317175516','陈荣辉');
