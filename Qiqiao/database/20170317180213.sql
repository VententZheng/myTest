--
-- MySQL database export
--
-- 生成日期: 2017 年  03 月 17 日 18:02
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
