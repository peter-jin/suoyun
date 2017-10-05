/*
Navicat MySQL Data Transfer

Source Server         : suoyun
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : suoyun

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2017-09-29 16:14:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sy_news
-- ----------------------------
DROP TABLE IF EXISTS `sy_news`;
CREATE TABLE `sy_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) DEFAULT '' COMMENT '//新闻标题',
  `news_content` varchar(255) DEFAULT '' COMMENT '//新闻内容',
  `news_time` datetime DEFAULT NULL COMMENT '//发帖时间',
  `news_author` varchar(255) DEFAULT '' COMMENT '//作者',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sy_news
-- ----------------------------
INSERT INTO `sy_news` VALUES ('1', '呵呵', '看看', '2017-09-24 20:55:07', '嗯嗯 ');
INSERT INTO `sy_news` VALUES ('2', '啊啊', '看看', null, '辅导辅导');
INSERT INTO `sy_news` VALUES ('3', '考虑', ' 立即离开', null, '看见了');
INSERT INTO `sy_news` VALUES ('4', '链接', '就', null, '就看看');

-- ----------------------------
-- Table structure for sy_user
-- ----------------------------
DROP TABLE IF EXISTS `sy_user`;
CREATE TABLE `sy_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_pet` varchar(255) DEFAULT '' COMMENT '//昵称',
  `user_name` varchar(255) DEFAULT '' COMMENT '//用户名',
  `user_time` datetime DEFAULT NULL COMMENT '//用户注册日期',
  `user_company` varchar(255) DEFAULT '' COMMENT '//公司名称',
  `user_iphone` varchar(255) DEFAULT '' COMMENT '//电话号码',
  `user_email` varchar(255) DEFAULT '' COMMENT '//邮箱地址',
  `user_password` varchar(255) DEFAULT '' COMMENT '//用户密码',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sy_user
-- ----------------------------
INSERT INTO `sy_user` VALUES ('1', '大小王', '神仙', '2017-09-05 20:49:24', '内蒙古索云数据科技有限责任公司', '18998986868', '123467892@163.com', '123');
INSERT INTO `sy_user` VALUES ('2', '让人', '李四', '2017-10-03 20:49:28', '个', '的', '吧', '123');
INSERT INTO `sy_user` VALUES ('3', '头痛', '王五', '2017-09-24 20:49:32', '吗', '的', ',', '123');
INSERT INTO `sy_user` VALUES ('4', '医院', '赵六', '2017-09-24 20:49:34', ',', '的', '个', '123');

-- ----------------------------
-- Table structure for sy_user_insert
-- ----------------------------
DROP TABLE IF EXISTS `sy_user_insert`;
CREATE TABLE `sy_user_insert` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT '' COMMENT '//用户名',
  `user_password` varchar(255) DEFAULT '' COMMENT '//用户密码',
  `affirm_password` varchar(255) DEFAULT '' COMMENT '//确认密码',
  `user_remark` varchar(255) DEFAULT '' COMMENT '//备注',
  `user_permissions` varchar(255) DEFAULT '' COMMENT '//用户权限',
  `user_time` varchar(255) DEFAULT '' COMMENT '//注册时间',
  `token` varchar(255) DEFAULT '' COMMENT '//token',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sy_user_insert
-- ----------------------------
INSERT INTO `sy_user_insert` VALUES ('1', 'enjie', '$2y$10$x3HQEpn6TAya3LfNhMGPMOLYDbTEm7Q7cALx317/h/dzlQ7B9GRAm', '123456', '123123123', '1', '', 'gZSzjzD0auYDmSETvp0kWo1XYvzS2y9G4jZnGziyvrySJSHNoI');
INSERT INTO `sy_user_insert` VALUES ('2', '啊啊啊啊啊', '$2y$10$LrGRqVSbd6iaYnOJNazD5.nJNmpIHQmn2WF1LkXzFR.8IyNp7K0OW', '111111', null, '1', '2017-09-29 03:54:39', 'xsr4ym3tlJqRX4bAaIUyn4YGyR6JGq00b4Ga4e6yxJ0x0lt0Hj');
INSERT INTO `sy_user_insert` VALUES ('3', 'enjie', '$2y$10$Qpc4ZfWHmTzT2dLE61mNyOpCNKH2Ji.Fw3AgO4do8N21zZ9GR1E2O', '111111', null, '1', '2017-09-29 04:08:31', 'yC0edzmsLQaJqMQ20P0TSRzio2R7Hz7vbAijaQ3kyLe8SKuYkq');
INSERT INTO `sy_user_insert` VALUES ('4', 'enjie', '$2y$10$fpB.Ehp/.2zVrCJL.2ir5.k7NxjlRak1bh6yFgt.RmWy8o1W1Y5Wu', '111111', null, '1', '2017-09-29 04:09:19', 'ilhVqnIodUiZ2mwFgbeJIVbEE925WU2uwsWye8ePVh5LMrQWKt');
INSERT INTO `sy_user_insert` VALUES ('5', 'enjie', '$2y$10$EoJ7mgxcXQBwoOn5vcZ48uoobW1627dl/Ov2Yk.pz4ZWWQRLgkYUS', '111111', null, '1', '2017-09-29 04:10:14', 'zRhPq6CBtFRMX0gBfLlbSbqSGWxeOG3UPKxUm1j5q2c2StAKze');
INSERT INTO `sy_user_insert` VALUES ('6', 'enjie', '$2y$10$C1kfVJeSNydWLJ/vle6gZez1ZVl/..aywB3XgdyWjMIbl8O.t.Uf2', '111111', null, '1', '2017-09-29 04:10:28', 'gJ5aepJiJxInGD2QMw7h3E4mEP9ejj4QiwcQUi0G2sW1uNTSrO');
INSERT INTO `sy_user_insert` VALUES ('7', '222', '$2y$10$.ZhEbtG7deZIgxIfqweBL.vG8feag.GeWKexrJTm9eJlXgVXbflJ6', '222222', null, '1', '2017-09-29 04:17:41', 'k7bhshD8OXnZh50j6ZO1vCczOjRvujWeyweS44wXeV5CV982jt');
INSERT INTO `sy_user_insert` VALUES ('8', '444', '$2y$10$F1ycnqynT1zN2XxET7RMi.9Aa6s26YCFXF8mB7ylLMlTUz38Zjq4u', '444444', null, '1', '2017-09-29 04:31:23', '6G8H8AncEDALT2jGmR4l5ZnpnSk8Y3cKkAgXfgzGtqMaBlAb4R');
INSERT INTO `sy_user_insert` VALUES ('9', '555', '$2y$10$wUfW.X73wpJWVuClN465l.nWe67kidaxXmg5oDcJU1roWMlgAaFdK', '555555', null, '1', '2017-09-29 04:32:33', 'JU7VuB4S0rnpoiXbI1eMcHQNdQAvCItZIkmO8YBHU41WSwwNOY');
INSERT INTO `sy_user_insert` VALUES ('10', '4444', '$2y$10$nbQT1WHrbWjlE7ycdeMOM.8Lx0Pujnk/LKZHvF7WnNEgGOFTliVVS', '444444', null, '1', '2017-09-29 04:41:42', 'SQmP4wkh44aUJ6Qu3IhWBCkv5pur6jnyCH12l7dPfjti19fiCo');
INSERT INTO `sy_user_insert` VALUES ('11', '333', '$2y$10$lNGQNj0sB408luwxfvdZzevS3El1rkO78veqzfxvGoBBBJxCB7bR6', '333333', null, '1', '2017-09-29 04:43:16', 'z74XRLvdRRGDsIIIVVZwMcYpSwMjRreX21pQlE0wIMU419qekB');
INSERT INTO `sy_user_insert` VALUES ('12', '111', '$2y$10$A3.KlZTzGHavbFRMi/xXCeyHB7P09Gc2Tm3RmZVcNoB5ihexwSsqO', '111111', null, '2', '2017-09-29 04:43:44', 'n1Ul6MSZBP6flPrMwZ8Uz6Ec7khCU6c6n3l5ekPIeawsINrX39');
INSERT INTO `sy_user_insert` VALUES ('13', '111', '$2y$10$N.8mYlqX2HWrbm5wONN/XOf9/yOcO7kSOYD.ZfyqH1oG7gBJYGTU6', '111111', null, '2', '2017-09-29 04:45:02', 'hZNe1XoX5hDftuoUjvxKZrKYWp2csrDy9yym6LNEbPlLdRjCLn');
INSERT INTO `sy_user_insert` VALUES ('14', '111', '$2y$10$vuYsV9bhLBZDwjXdczV4yOhG7YZL.Z90mTfpA297hCfJ2FD97ogim', '111111', null, '3', '2017-09-29 04:46:32', 'K8UaFCAjHrjbYGxCscQqblsLR78BBGr0zCj2EZZYiKhRuZYFFs');
INSERT INTO `sy_user_insert` VALUES ('15', '111', '$2y$10$6qyGyOBA.w09Tm6mkN/ktOTGkMgcInUBeHayn45eDpxv8T9Wiw2aa', '111111', null, '3', '2017-09-29 04:46:51', 'g8bo2MWHYSxB7goV3fsnK1JCJ7T0UPRxxQXXZKFSnmQzHmcJKD');
INSERT INTO `sy_user_insert` VALUES ('16', '1', '$2y$10$2/ADcReTanKItyZiBnzDDu4.0SBZmYpI/05nJRZWWvIdJwaEGqMK.', '111111', null, '1', '2017-09-29 04:55:58', 'GuxTU9hSW9IAQ1tNsWG6qJFAJqYezteBqmCUj9N0ljPRPPyPJL');
INSERT INTO `sy_user_insert` VALUES ('17', '4', '$2y$10$AXZULF1j9DFrG1ShrGPyIu9eSEHl4NwLh7PjpjIh25Vw4tPex7Qdy', '444444', null, '2', '2017-09-29 04:56:22', 'veLUVG82tkhHH8vvXqnkyC4BTSHaaR50PumD3n3Y530ZiiHHdI');
INSERT INTO `sy_user_insert` VALUES ('18', '1', '$2y$10$d3XUWCZZKgjYvg8PW.kpsepQZJFOOLNVqK/A5Pxnkol9sHfEb.TKq', '111111', null, '2', '2017-09-29 05:03:42', 'AeFklxIs4iGPXVkcdoVkIb3U98JyIuTItArlYLYqm6UhaG413j');
INSERT INTO `sy_user_insert` VALUES ('19', '444', '$2y$10$wpskXFOYuXgNBGwQKZuprepbuxgrzCCpqGE1sBlVloTOtMiUDytcS', '444444', null, '2', '2017-09-29 05:07:12', 'ZSKykD694OF74qkhGLXrRAXSXN6EjA5qs8nz28zfHDgCJwu7tG');
