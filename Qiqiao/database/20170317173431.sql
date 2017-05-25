--
-- MySQL database export
--
-- 生成日期: 2017 年  03 月 17 日 17:34
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

INSERT INTO `qiq_admin` VALUES('1','???','1','23','15818334685','445121199411074739','928404652@qq.com','admin','d3fbd0c353bd46801f9fbc3989eb5fd1','1488128755','127.0.0.1','1488127178','0','0000-00-00 00:00:00');
INSERT INTO `qiq_admin` VALUES('2','???','1','28','13715811061','445121199411074729','wsm654321wm@qq.com','crh928404652','d3fbd0c353bd46801f9fbc3989eb5fd1','1488127273','127.0.0.1','1478755194','0','0000-00-00 00:00:00');
INSERT INTO `qiq_admin` VALUES('3','??','0','23','15818334695','445121199411076528','928465102@qq.com','crh13715811061','d3fbd0c353bd46801f9fbc3989eb5fd1','1478756977','127.0.0.1','1478597236','0','0000-00-00 00:00:00');
INSERT INTO `qiq_admin` VALUES('4','??','0','24','1581822653','445121199411074792','928735462@qq.com','crh6620446','d3fbd0c353bd46801f9fbc3989eb5fd1','1478764874','127.0.0.1','1478601775','0','0000-00-00 00:00:00');
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

INSERT INTO `qiq_auth_group` VALUES('1','????','1','1,2,3,4,8,9,10');
INSERT INTO `qiq_auth_group` VALUES('2','??','1','5,6,7');
INSERT INTO `qiq_auth_group` VALUES('3','???','1','8,9,10');
INSERT INTO `qiq_auth_group` VALUES('4','??','1','11,12,13,14,15,16');
INSERT INTO `qiq_auth_group` VALUES('5','??','1','17,18');
INSERT INTO `qiq_auth_group` VALUES('6','????','1','19,20,21');
INSERT INTO `qiq_auth_group` VALUES('7','???','1','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21');
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

INSERT INTO `qiq_auth_rule` VALUES('1','Index/log','????','1','Index','');
INSERT INTO `qiq_auth_rule` VALUES('2','Index/setting','????','1','Index','');
INSERT INTO `qiq_auth_rule` VALUES('3','Index/database','?????','1','Index','');
INSERT INTO `qiq_auth_rule` VALUES('4','Index/restore','?????','1','Index','');
INSERT INTO `qiq_auth_rule` VALUES('5','User/add','????','1','User','');
INSERT INTO `qiq_auth_rule` VALUES('6','User/manage','????','1','User','');
INSERT INTO `qiq_auth_rule` VALUES('7','User/message','????','1','User','');
INSERT INTO `qiq_auth_rule` VALUES('8','Admin/user','????','1','Admin','');
INSERT INTO `qiq_auth_rule` VALUES('9','Admin/role','????','1','Admin','');
INSERT INTO `qiq_auth_rule` VALUES('10','Admin/addfunctions','????','1','Admin','');
INSERT INTO `qiq_auth_rule` VALUES('11','Video/attributes','????','1','Video','');
INSERT INTO `qiq_auth_rule` VALUES('12','Video/handle','????','1','Video','');
INSERT INTO `qiq_auth_rule` VALUES('13','Video/change','????','1','Video','');
INSERT INTO `qiq_auth_rule` VALUES('14','Video/pass','????','1','Video','');
INSERT INTO `qiq_auth_rule` VALUES('15','Video/view','????','1','Video','');
INSERT INTO `qiq_auth_rule` VALUES('16','Video/setting','????','1','Video','');
INSERT INTO `qiq_auth_rule` VALUES('17','Information/add','????','1','Information','');
INSERT INTO `qiq_auth_rule` VALUES('18','Information/manage','????','1','Information','');
INSERT INTO `qiq_auth_rule` VALUES('19','Plan/planmanage','????','1','Plan','');
INSERT INTO `qiq_auth_rule` VALUES('20','Plan/add','????','1','Plan','');
INSERT INTO `qiq_auth_rule` VALUES('21','Plan/titlemanage','????','1','Plan','');
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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 qiq_log
--

INSERT INTO `qiq_log` VALUES('2','??','2017-03-13 14:23:49','127.0.0.1','?????????','???');
INSERT INTO `qiq_log` VALUES('4','??','2017-03-13 00:00:00','127.0.0.1','?????????','?');
INSERT INTO `qiq_log` VALUES('6','??','2017-03-13 15:17:57','127.0.0.1','?????????','???');
INSERT INTO `qiq_log` VALUES('7','??','2017-03-13 17:44:23','127.0.0.1','?????????','???');
INSERT INTO `qiq_log` VALUES('8','??','2017-03-13 23:41:08','127.0.0.1','?????????','???');
INSERT INTO `qiq_log` VALUES('9','??','2017-03-13 23:41:16','127.0.0.1','?????????','???');
INSERT INTO `qiq_log` VALUES('10','??????','2017-03-14 01:26:39','127.0.0.1','appkey:23624789???:23624780\r\nsecretkey:ebb6245e37faea90458b91b427d0c2f2???:ebb6245e37faea90458b91b','???');
INSERT INTO `qiq_log` VALUES('11','??????','2017-03-14 01:26:46','127.0.0.1','appkey:23624789???:23624700\r\nsecretkey:ebb6245e37faea90458b91b427d0c2f2???:ebb6245e37faea90458b91b','???');
INSERT INTO `qiq_log` VALUES('12','??????','2017-03-14 01:27:33','127.0.0.1','appkey:23624789???:11124789/r/nsecretkey:ebb6245e37faea90458b91b427d0c2f2???:ebb6245e37faea90458b91b','???');
INSERT INTO `qiq_log` VALUES('13','??????','2017-03-14 01:28:07','127.0.0.1','appkey:23624789???:22334242<br>secretkey:ebb6245e37faea90458b91b427d0c2f2???:ebb6245e37faea90458b91b','???');
INSERT INTO `qiq_log` VALUES('14','??????','2017-03-14 01:29:26','127.0.0.1','appkey:23624789&nbsp;&nbsp;???:34234234<br>secretkey:ebb6245e37faea90458b91b427d0c2f2<br>???:ebb6245','???');
INSERT INTO `qiq_log` VALUES('15','??????','2017-03-14 01:29:42','127.0.0.1','appkey:23624789&nbsp;&nbsp;???:23624789<br>secretkey:ebb6245e37faea90458b91b427d0c2f2<br>???:ebb6245','???');
INSERT INTO `qiq_log` VALUES('16','??????','2017-03-14 01:30:52','127.0.0.1','appkey:23624789&nbsp;&nbsp;???:2362478922<br>secretkey:ebb6245e37faea90458b91b427d0c2f2<br>???:ebb62','???');
INSERT INTO `qiq_log` VALUES('17','??????','2017-03-14 01:43:29','127.0.0.1','appkey:23624789&nbsp;&nbsp;???:435435<br>secretkey:ebb6245e37faea90458b91b427d0c2f2<br>???:ebb6245e3','???');
INSERT INTO `qiq_log` VALUES('18','??????','2017-03-14 01:43:48','127.0.0.1','appkey:435435&nbsp;&nbsp;???:45345435<br>secretkey:ebb6245e37faea90458b91b427d0c2f2<br>???:ebb6245e3','???');
INSERT INTO `qiq_log` VALUES('19','??????','2017-03-14 01:44:46','127.0.0.1','appkey:45345435&nbsp;&nbsp;???:43543543<br>secretkey:ebb6245e37faea90458b91b427d0c2f2<br>???:ebb6245e37faea90458b91b427d0c2f2','???');
INSERT INTO `qiq_log` VALUES('20','??','2017-03-14 13:15:33','127.0.0.1','?????????','???');
INSERT INTO `qiq_log` VALUES('21','??','2017-03-14 13:16:14','127.0.0.1','?????????','???');
INSERT INTO `qiq_log` VALUES('22','??','2017-03-14 15:14:04','127.0.0.1','?????????','???');
INSERT INTO `qiq_log` VALUES('23','?????','2017-03-14 22:56:14','127.0.0.1','?????:qiq_admin,qiq_app,qiq_auth_group,qiq_auth_group_access,qiq_auth_rule,qiq_log,qiq_session,qiq_users,qiq_video,qiq_video_attributes','???');
INSERT INTO `qiq_log` VALUES('24','?????','2017-03-14 22:57:17','127.0.0.1','?????:qiq_admin,qiq_app,qiq_auth_group,qiq_auth_group_access','???');
INSERT INTO `qiq_log` VALUES('25','?????','2017-03-14 23:07:46','127.0.0.1','?????:<br>??????:','???');
INSERT INTO `qiq_log` VALUES('26','?????','2017-03-14 23:08:39','127.0.0.1','?????:qiq_admin,qiq_app,qiq_auth_group,qiq_auth_group_access,qiq_auth_rule,qiq_log,qiq_session,qiq_users,qiq_video,qiq_video_attributes<br>??????:','???');
INSERT INTO `qiq_log` VALUES('27','?????','2017-03-17 17:07:33','127.0.0.1','?????:qiq_admin,qiq_auth_group,qiq_auth_group_access<br>??????:20170317170733_v.sql','???');
INSERT INTO `qiq_log` VALUES('28','?????','2017-03-17 17:12:21','127.0.0.1','?????:qiq_admin,qiq_app,qiq_auth_group,qiq_auth_rule<br>??????:20170317171221','???');
INSERT INTO `qiq_log` VALUES('29','?????','2017-03-17 17:14:34','127.0.0.1','?????:qiq_admin,qiq_auth_group,qiq_auth_group_access,qiq_auth_rule<br>??????:20170317171434','???');
INSERT INTO `qiq_log` VALUES('30','?????','2017-03-17 17:19:38','127.0.0.1','?????:qiq_admin,qiq_app,qiq_auth_group,qiq_auth_group_access,qiq_auth_rule,qiq_log<br>??????:20170317171938','???');
INSERT INTO `qiq_log` VALUES('31','?????','2017-03-17 17:22:35','127.0.0.1','?????:qiq_admin,qiq_app,qiq_auth_group,qiq_auth_group_access<br>??????:20170317172235','???');
INSERT INTO `qiq_log` VALUES('32','?????','2017-03-17 17:23:32','127.0.0.1','?????:qiq_admin,qiq_app,qiq_auth_group,qiq_auth_group_access<br>??????:20170317172332','???');
INSERT INTO `qiq_log` VALUES('33','?????','2017-03-17 17:24:29','127.0.0.1','?????:qiq_admin,qiq_app,qiq_auth_group,qiq_auth_group_access<br>??????:20170317172429','???');
INSERT INTO `qiq_log` VALUES('34','?????','2017-03-17 17:30:26','127.0.0.1','?????:qiq_admin,qiq_app,qiq_auth_group,qiq_auth_group_access,qiq_auth_rule<br>??????:20170317173026','???');
INSERT INTO `qiq_log` VALUES('35','?????','2017-03-17 17:31:28','127.0.0.1','?????:qiq_admin,qiq_app,qiq_auth_group,qiq_auth_group_access,qiq_auth_rule,qiq_log<br>??????:20170317173128','???');
INSERT INTO `qiq_log` VALUES('36','?????','2017-03-17 17:33:58','127.0.0.1','?????:qiq_admin,qiq_app,qiq_auth_group,qiq_auth_group_access,qiq_auth_rule,qiq_log<br>??????:20170317173358','???');
