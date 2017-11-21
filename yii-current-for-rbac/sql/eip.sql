/*
Navicat MySQL Data Transfer

Source Server         : centos64-01-192.168.10.150
Source Server Version : 50505
Source Host           : 192.168.10.150:3306
Source Database       : epi

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-11-17 18:38:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `auth_assignment`
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('admin', '1', '1508640274');

-- ----------------------------
-- Table structure for `auth_item`
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('admin', '1', '管理员', null, null, '1508640011', '1508640011');
INSERT INTO `auth_item` VALUES ('rbac/assignitem', '2', '权限系统/分配权限', null, null, '1508640254', '1508640467');
INSERT INTO `auth_item` VALUES ('rbac/create', '2', '权限系统/添加角色', null, null, '1508640711', '1508640711');
INSERT INTO `auth_item` VALUES ('rbac/createitem', '2', '权限系统/添加权限', null, null, '1508640344', '1508640344');
INSERT INTO `auth_item` VALUES ('rbac/delete', '2', '权限系统/删除角色', null, null, '1508640774', '1508640774');
INSERT INTO `auth_item` VALUES ('rbac/deleteitem', '2', '权限系统/删除节点', null, null, '1508640563', '1508640580');
INSERT INTO `auth_item` VALUES ('rbac/index', '2', '权限系统/角色列表', null, null, '1508640675', '1508640675');
INSERT INTO `auth_item` VALUES ('rbac/update', '2', '权限系统/修改角色', null, null, '1508640742', '1508640742');
INSERT INTO `auth_item` VALUES ('rbac/updateitem', '2', '权限系统/修改节点', null, null, '1508640538', '1508640538');
INSERT INTO `auth_item` VALUES ('site/index', '2', '后台首页/后台首页', null, null, '1508738152', '1508738152');
INSERT INTO `auth_item` VALUES ('user/create', '2', '管理员系统/添加管理员', null, null, '1508640083', '1508640083');
INSERT INTO `auth_item` VALUES ('user/index', '2', '管理员系统/管理员列表', null, null, '1508640105', '1508640105');
INSERT INTO `auth_item` VALUES ('user/myinfo', '2', '管理员系统/修改我的信息', null, null, '1508640963', '1508640963');
INSERT INTO `auth_item` VALUES ('user/mypassword', '2', '管理员系统/修改我的密码', null, null, '1508640993', '1508640993');
INSERT INTO `auth_item` VALUES ('user/update', '2', '管理员系统/修改管理员', null, null, '1508738242', '1508738242');
INSERT INTO `auth_item` VALUES ('user/upuserpass', '2', '管理员系统/修改管理员密码', null, null, '1508640890', '1508640890');

-- ----------------------------
-- Table structure for `auth_item_child`
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('admin', 'rbac/assignitem');
INSERT INTO `auth_item_child` VALUES ('admin', 'rbac/create');
INSERT INTO `auth_item_child` VALUES ('admin', 'rbac/createitem');
INSERT INTO `auth_item_child` VALUES ('admin', 'rbac/delete');
INSERT INTO `auth_item_child` VALUES ('admin', 'rbac/deleteitem');
INSERT INTO `auth_item_child` VALUES ('admin', 'rbac/index');
INSERT INTO `auth_item_child` VALUES ('admin', 'rbac/update');
INSERT INTO `auth_item_child` VALUES ('admin', 'rbac/updateitem');
INSERT INTO `auth_item_child` VALUES ('admin', 'site/index');
INSERT INTO `auth_item_child` VALUES ('admin', 'user/create');
INSERT INTO `auth_item_child` VALUES ('admin', 'user/index');
INSERT INTO `auth_item_child` VALUES ('admin', 'user/myinfo');
INSERT INTO `auth_item_child` VALUES ('admin', 'user/mypassword');
INSERT INTO `auth_item_child` VALUES ('admin', 'user/update');
INSERT INTO `auth_item_child` VALUES ('admin', 'user/upuserpass');

-- ----------------------------
-- Table structure for `auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for `loginlog`
-- ----------------------------
DROP TABLE IF EXISTS `loginlog`;
CREATE TABLE `loginlog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '登录记录表',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '用户登录IP',
  `created_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of loginlog
-- ----------------------------
INSERT INTO `loginlog` VALUES ('15', '1', '127.0.0.1', '1510132293');
INSERT INTO `loginlog` VALUES ('16', '1', '127.0.0.1', '1510132511');
INSERT INTO `loginlog` VALUES ('17', '2', '127.0.0.1', '1510133703');
INSERT INTO `loginlog` VALUES ('18', '2', '127.0.0.1', '1510133738');
INSERT INTO `loginlog` VALUES ('19', '2', '127.0.0.1', '1510133759');
INSERT INTO `loginlog` VALUES ('20', '1', '127.0.0.1', '1510384566');
INSERT INTO `loginlog` VALUES ('21', '1', '127.0.0.1', '1510554874');
INSERT INTO `loginlog` VALUES ('22', '1', '127.0.0.1', '1510741878');
INSERT INTO `loginlog` VALUES ('23', '1', '127.0.0.1', '1510884925');
INSERT INTO `loginlog` VALUES ('24', '1', '127.0.0.1', '1510906959');

-- ----------------------------
-- Table structure for `meiju`
-- ----------------------------
DROP TABLE IF EXISTS `meiju`;
CREATE TABLE `meiju` (
  `mid` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `tid` int(11) NOT NULL COMMENT '采集的ID',
  `title_cn` varchar(50) NOT NULL DEFAULT '' COMMENT '中文名字',
  `title_en` varchar(50) NOT NULL DEFAULT '' COMMENT '英文名',
  `img` varchar(200) NOT NULL DEFAULT '' COMMENT '主图',
  `update_day` varchar(20) NOT NULL DEFAULT '' COMMENT '更新日',
  `update_status` varchar(50) NOT NULL DEFAULT '' COMMENT '更新状态',
  `type` varchar(10) NOT NULL DEFAULT '' COMMENT '分类',
  `update_time` int(10) NOT NULL DEFAULT '0' COMMENT '最后更新时间',
  `back_status` varchar(50) NOT NULL DEFAULT '' COMMENT '回归状态',
  `back_time` varchar(10) NOT NULL COMMENT '更新倒计时',
  `Introduction` text NOT NULL COMMENT '详情介绍',
  `click_num` int(11) NOT NULL DEFAULT '0' COMMENT '点击量',
  `subscription_num` int(11) DEFAULT '0' COMMENT '订阅量',
  `url` varchar(500) DEFAULT '' COMMENT '下载页面链接',
  `update_at` int(11) DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of meiju
-- ----------------------------

-- ----------------------------
-- Table structure for `meiju_detail`
-- ----------------------------
DROP TABLE IF EXISTS `meiju_detail`;
CREATE TABLE `meiju_detail` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL DEFAULT '0',
  `tdid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '集数  制式 字幕下载',
  `season` int(11) NOT NULL DEFAULT '0' COMMENT '季',
  `urls` varchar(255) NOT NULL DEFAULT '' COMMENT '下载链接json',
  `click_num` int(11) NOT NULL DEFAULT '0' COMMENT '点击量',
  `password` varchar(20) NOT NULL DEFAULT '' COMMENT '百度提取码',
  `size` varchar(255) NOT NULL DEFAULT '' COMMENT '大小',
  `create_time` varchar(10) NOT NULL DEFAULT '' COMMENT '发布时间',
  `update_at` int(11) NOT NULL DEFAULT '0' COMMENT '采集时间',
  PRIMARY KEY (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of meiju_detail
-- ----------------------------

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of migration
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名',
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '手机号',
  `status` smallint(6) NOT NULL DEFAULT '10' COMMENT '10为正常，0为封禁',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '', '$2y$13$HOu4fmKletTcQniqKzAAxuFVtMmXZpCkNHVk4DtB2qmeoxMx.wFfK', null, 'admin@qq.com', '10000000000', '10', '1508640274', '1508640274');
INSERT INTO `user` VALUES ('2', 'huangjie', 'bTq27iAUM5DeCVyxuUU2mv8UwVRlk80a', '$2y$13$xVWUrcy6vUsJegvk4c3Fp.6JtiycJxCW2erjoaDsINN9QIIjz2Xya', null, '465175275@qq.com', '', '10', '1510130911', '1510130911');
