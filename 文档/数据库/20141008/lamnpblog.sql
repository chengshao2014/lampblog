/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50538
Source Host           : localhost:3306
Source Database       : lamnpblog

Target Server Type    : MYSQL
Target Server Version : 50538
File Encoding         : 65001

Date: 2014-10-08 16:31:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `lamnpblog_admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `lamnpblog_admin_user`;
CREATE TABLE `lamnpblog_admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'admin用户ID',
  `username` varchar(50) DEFAULT NULL COMMENT 'admin用户名',
  `password` varchar(255) DEFAULT NULL COMMENT 'admin密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lamnpblog_admin_user
-- ----------------------------
INSERT INTO `lamnpblog_admin_user` VALUES ('1', '7bd78411a128ad60fbb2840457573175', '9b4498f50599a8179064a90774c3a70d');

-- ----------------------------
-- Table structure for `lamnpblog_user`
-- ----------------------------
DROP TABLE IF EXISTS `lamnpblog_user`;
CREATE TABLE `lamnpblog_user` (
  `uid` int(10) unsigned NOT NULL,
  `username` varchar(100) NOT NULL COMMENT '用户名',
  `password` varchar(100) NOT NULL COMMENT '密码',
  `nickname` varchar(60) NOT NULL COMMENT '昵称',
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL COMMENT '手机号',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='前台用户表';

-- ----------------------------
-- Records of lamnpblog_user
-- ----------------------------
