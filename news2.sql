/*
Navicat MySQL Data Transfer

Source Server         : xhz
Source Server Version : 50714
Source Host           : 127.0.0.1:3306
Source Database       : news2

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-08-13 15:52:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL COMMENT '账号',
  `password` char(32) NOT NULL COMMENT '密码',
  `is_use` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否启用 1：启用0：禁用',
  `local_id` int(3) DEFAULT '0' COMMENT '0,代表本地管理员，其他代表地方管理员',
  `phone` varchar(25) DEFAULT NULL,
  `minphone` varchar(8) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL COMMENT '邮箱',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COMMENT='管理员';

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'root', '202cb962ac59075b964b07152d234b70', '1', '0', '13033960037', null, null);
INSERT INTO `admin` VALUES ('15', 'cfun ', '202cb962ac59075b964b07152d234b70', '1', '1', '13033960037', '22222222', null);
INSERT INTO `admin` VALUES ('20', 'd', '202cb962ac59075b964b07152d234b70', '1', '4', '13271346349', '88888888', null);
INSERT INTO `admin` VALUES ('21', 'r', '202cb962ac59075b964b07152d234b70', '1', '3', '13033960037', '88888888', '1606548133@qq.com ');
INSERT INTO `admin` VALUES ('22', 'admin123', '202cb962ac59075b964b07152d234b70', '1', '2', '1234578910', '12345678', null);
INSERT INTO `admin` VALUES ('32', 'admin 1111', '202cb962ac59075b964b07152d234b70', '1', '0', null, null, null);
INSERT INTO `admin` VALUES ('36', '12345', 'c4ca4238a0b923820dcc509a6f75849b', '1', '0', null, null, null);
INSERT INTO `admin` VALUES ('37', 'ad', '202cb962ac59075b964b07152d234b70', '1', '1', null, null, null);
INSERT INTO `admin` VALUES ('38', 'admin', '202cb962ac59075b964b07152d234b70', '1', '0', null, null, null);
INSERT INTO `admin` VALUES ('39', '111', 'c4ca4238a0b923820dcc509a6f75849b', '1', '0', null, null, null);
INSERT INTO `admin` VALUES ('40', 'xhz', '202cb962ac59075b964b07152d234b70', '1', '2', '18939670537', '', '177058542@qq.com');
INSERT INTO `admin` VALUES ('41', 'adm', '202cb962ac59075b964b07152d234b70', '1', '0', null, null, null);
INSERT INTO `admin` VALUES ('42', 'admin sas', '202cb962ac59075b964b07152d234b70', '1', '0', '13033960037', '22222222', '1606548133@qq.com ');
INSERT INTO `admin` VALUES ('43', 'admin ', '202cb962ac59075b964b07152d234b70', '1', '0', '13033960037', '22222222', '1606548133qq.com ');

-- ----------------------------
-- Table structure for admin_role
-- ----------------------------
DROP TABLE IF EXISTS `admin_role`;
CREATE TABLE `admin_role` (
  `admin_id` tinyint(3) unsigned NOT NULL COMMENT '管理员的id',
  `role_id` smallint(5) unsigned NOT NULL COMMENT '角色的id',
  KEY `admin_id` (`admin_id`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='管理员角色表';

-- ----------------------------
-- Records of admin_role
-- ----------------------------
INSERT INTO `admin_role` VALUES ('18', '2');
INSERT INTO `admin_role` VALUES ('40', '2');
INSERT INTO `admin_role` VALUES ('37', '1');
INSERT INTO `admin_role` VALUES ('22', '2');
INSERT INTO `admin_role` VALUES ('4', '2');
INSERT INTO `admin_role` VALUES ('6', '2');
INSERT INTO `admin_role` VALUES ('21', '2');
INSERT INTO `admin_role` VALUES ('39', '2');
INSERT INTO `admin_role` VALUES ('23', '2');
INSERT INTO `admin_role` VALUES ('38', '2');
INSERT INTO `admin_role` VALUES ('20', '3');
INSERT INTO `admin_role` VALUES ('1', '1');
INSERT INTO `admin_role` VALUES ('32', '3');
INSERT INTO `admin_role` VALUES ('15', '1');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cate_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `cate_name` varchar(255) DEFAULT NULL COMMENT '分类名称',
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '首页');
INSERT INTO `category` VALUES ('2', '组织机构');
INSERT INTO `category` VALUES ('3', '法律法规');
INSERT INTO `category` VALUES ('4', '总队长信箱');
INSERT INTO `category` VALUES ('5', '政委信箱');
INSERT INTO `category` VALUES ('6', '通信手册');
INSERT INTO `category` VALUES ('7', '消防要闻');
INSERT INTO `category` VALUES ('8', '支队动态');
INSERT INTO `category` VALUES ('9', '推荐阅读');
INSERT INTO `category` VALUES ('10', '政策发布');
INSERT INTO `category` VALUES ('11', '政策解读');
INSERT INTO `category` VALUES ('12', '政策图解');
INSERT INTO `category` VALUES ('13', '工作通知');
INSERT INTO `category` VALUES ('14', '人事信息');
INSERT INTO `category` VALUES ('15', '财务信息');
INSERT INTO `category` VALUES ('16', '媒体报道');
INSERT INTO `category` VALUES ('17', '灭火救援');
INSERT INTO `category` VALUES ('18', '调研文章');
INSERT INTO `category` VALUES ('19', '感悟消防');
INSERT INTO `category` VALUES ('20', '精彩图集');
INSERT INTO `category` VALUES ('21', '精彩视频');
INSERT INTO `category` VALUES ('22', '警营文化');
INSERT INTO `category` VALUES ('23', '领导讲话');
INSERT INTO `category` VALUES ('24', '办公系统');
INSERT INTO `category` VALUES ('25', '今日值班');
INSERT INTO `category` VALUES ('26', '通知公告');
INSERT INTO `category` VALUES ('27', '专项工作');
INSERT INTO `category` VALUES ('28', '计划安排');

-- ----------------------------
-- Table structure for file
-- ----------------------------
DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `upload_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `cate_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_flag` tinyint(1) DEFAULT '0' COMMENT '0未删除，1 删除',
  `downloads` int(10) DEFAULT '0' COMMENT '下载次数',
  `role_id` int(11) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0' COMMENT '0,上传文件；1是删除通讯录',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE,
  UNIQUE KEY `name` (`title`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of file
-- ----------------------------
INSERT INTO `file` VALUES ('30', '我是一只笑笑鸟', 'root', 'index.html', '/Public/Uploads/files/2017-07-31/597ea4a0a7052.html', '1501471904', null, null, '0', '16', '1', '0');
INSERT INTO `file` VALUES ('31', '我是一只笑笑鸟2', 'xhz', 'index2.html', '/Public/Uploads/files/2017-07-31/597ea4a0a7052.html', '1501471989', null, null, '0', '0', null, '0');
INSERT INTO `file` VALUES ('32', '我是一只笑笑鸟3', 'xhz', 'index3.html', '/Public/Uploads/files/2017-07-31/597ea4a0a7052.html', '1501401904', null, null, '0', '1', null, '0');
INSERT INTO `file` VALUES ('33', '我是一只笑笑鸟4', 'xhz', 'index4.html', '/Public/Uploads/files/2017-07-31/597ea4a0a7052.html', '1551471904', null, null, '0', '1', '2', '0');
INSERT INTO `file` VALUES ('34', '90909090', 'root', 'AmazeUI-2.7.2.zip', '/Public/Uploads/files/2017-08-13/598ff40f1e90b.zip', '1502606351', null, null, '0', '0', '3', '0');
INSERT INTO `file` VALUES ('37', null, 'root', 'java笔记-xiaohuizhong.docx', '/Public/Uploads/files/2017-08-13/598ff9dc83afa.docx', '1502607836', null, null, '0', '0', null, '1');

-- ----------------------------
-- Table structure for leave_msg
-- ----------------------------
DROP TABLE IF EXISTS `leave_msg`;
CREATE TABLE `leave_msg` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `type` tinyint(1) DEFAULT NULL COMMENT '0,代表总队长信箱,1，代表支队长信箱',
  `status` tinyint(1) DEFAULT '0' COMMENT '默认0,未审核，1代表审核通过，2，审核未通过，未回复，3代表回复',
  `leaver` varchar(255) DEFAULT NULL COMMENT '留言者',
  `leave_time` int(11) DEFAULT NULL,
  `replay_people` varchar(50) DEFAULT NULL,
  `del_flag` tinyint(1) DEFAULT '0' COMMENT '默认0显示。1删除',
  `verifier` varchar(50) DEFAULT NULL COMMENT '审核人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of leave_msg
-- ----------------------------
INSERT INTO `leave_msg` VALUES ('1', '队长你好，', '网站信息已经更新完成', '1', '1', '小明', '1501384568', '朱华', '0', 'root');
INSERT INTO `leave_msg` VALUES ('2', '队长你好，', '网站信息已经更新完', '1', '1', '小明', '1501384568', '朱华', '0', '');
INSERT INTO `leave_msg` VALUES ('3', '总队长你好，', '已经更新完3', '0', '2', '小虫', '1501384568', null, '0', '');
INSERT INTO `leave_msg` VALUES ('4', '总队长你好，', '已经更新完4', '0', '1', '小虫', '1501384568', null, '0', null);
INSERT INTO `leave_msg` VALUES ('5', '总队长你好，', '已经更新完5', '0', '1', '小虫', '1501384568', null, '0', null);
INSERT INTO `leave_msg` VALUES ('8', '65dfgdfgdfgfgdfgddfgdfgfdgfgd', '	\r\n规定元素中内容的文本方向。\r\ndraggable\r\n规定是否允许用户拖动元素。\r\ndropzone\r\n规定当被拖动的项目/数据被拖放到元素中时会发生什么。\r\nhidden\r\n规定该元素是无关的。被隐藏的元素不会显示。\r\nid\r\n规定元素的唯一 ID。\r\nlang\r\n规定元素中内容的语言代码。\r\nspellcheck\r\n规定是否必须对元素进行拼写或语法检查。\r\nstyle\r\n规定元素的行内样式。\r\ntabindex\r\n规定元素的 tab 键控制次序。\r\ntitle\r\n规定有关元素的额外信息。\r\n[1] \r\n描述\r\nCommon -- 一般属性\r\ncols -- 多行输入域的列数\r\nrows -- 多行输入域的行数\r\naccesskey -- 表单的快捷键访问方式\r\ndisabled -- 输入域无法获得焦点,无法选择,以灰色显示,在表单中不起任何作用\r\nreadonly -- 输入域可以选择,但是无法修改\r\ntabindex -- 输入域,使用\"tab\"键的遍历顺序\r\n示例\r\n<html>\r\n<body>\r\n<form action=\"../dreamdu.php\" method=\"post\" id=\"dreamduform\">\r\n<label for=\"contactus\">请联系我们</label>\r\n<textarea cols=\"50\" rows=\"10\" id=\"contactus\" name=\"contactus\">\r\n可爱的猴子 </textarea>\r\n</form>\r\n</body>', null, '1', 'xhz', '1502501913', null, '0', null);
INSERT INTO `leave_msg` VALUES ('9', '123trty65dfgdfgdfgfgdfgddfgdfgfdgfgd', 'sdgsfgs', null, '1', 'xhz', '1502502136', null, '0', null);
INSERT INTO `leave_msg` VALUES ('14', '685656', '5656565', null, '1', 'xhz', '1502504125', null, '0', null);

-- ----------------------------
-- Table structure for local
-- ----------------------------
DROP TABLE IF EXISTS `local`;
CREATE TABLE `local` (
  `local_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '地区id',
  `local_name` varchar(255) DEFAULT NULL COMMENT '地区名称',
  PRIMARY KEY (`local_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='地区表';

-- ----------------------------
-- Records of local
-- ----------------------------
INSERT INTO `local` VALUES ('1', '川汇');
INSERT INTO `local` VALUES ('2', '项城');
INSERT INTO `local` VALUES ('3', '西华');
INSERT INTO `local` VALUES ('4', '淮阳');
INSERT INTO `local` VALUES ('5', '沈丘');
INSERT INTO `local` VALUES ('6', '扶沟');
INSERT INTO `local` VALUES ('7', '郸城');
INSERT INTO `local` VALUES ('8', '太康');
INSERT INTO `local` VALUES ('9', '鹿邑');
INSERT INTO `local` VALUES ('10', '商水');
INSERT INTO `local` VALUES ('11', '东新区');
INSERT INTO `local` VALUES ('12', '开发区');
INSERT INTO `local` VALUES ('13', '港区');
INSERT INTO `local` VALUES ('14', '范区');
INSERT INTO `local` VALUES ('15', '特勤');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '新闻ID',
  `title` varchar(50) DEFAULT NULL COMMENT '新闻标题',
  `content` text COMMENT '新闻内容',
  `brief` varchar(100) DEFAULT NULL COMMENT '简介',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `author` varchar(255) DEFAULT NULL COMMENT '添加人，作者',
  `sort_id` int(11) DEFAULT NULL,
  `news_big_img` varchar(255) DEFAULT NULL COMMENT '大图',
  `news_small_img` varchar(255) DEFAULT NULL COMMENT '小图',
  `is_top` tinyint(3) DEFAULT '0' COMMENT '是否头条显示，1，代表置顶显示',
  `reply_time` int(11) DEFAULT NULL COMMENT '回复时间',
  `reply_msg` varchar(255) DEFAULT NULL COMMENT '恢复新闻',
  `is_rotaion` tinyint(3) DEFAULT '0' COMMENT '是否轮播显示。1，代表轮播显示。默认0',
  `title_color` varchar(255) DEFAULT NULL COMMENT '标题颜色',
  `cate_id` int(11) DEFAULT NULL COMMENT '分类id',
  `del_flag` tinyint(1) DEFAULT '0' COMMENT '0未删除，1删除',
  `view` int(11) DEFAULT '0' COMMENT '浏览量',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  `role_id` int(11) DEFAULT NULL COMMENT '所在单位id',
  `status` tinyint(11) DEFAULT '0' COMMENT '默认0待审核，1审核通过，2未通过，3,回复成功',
  `local_id` int(11) DEFAULT '0' COMMENT '默认0为本地管理员，其他为地区管理员',
  `verifier` varchar(50) DEFAULT NULL COMMENT '审核人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('55', '李彦军总队长亲临支队调研指导工作', '&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: Simsun; font-size: 14px; line-height: 26.25px; text-indent: 28px; widows: 1; background-color: rgb(250, 250, 250);&quot;&gt;李总队长一行来到王胡砦社区幸福家园小区，实地察看了小区消防通道、楼道消防设施设备情况，认真听取了街道相关负责人关于微型消防站器材配备情况、电动车充电及电动车棚建设情况汇报，对街道电动车棚建设工作给予充分肯定，并对消防工作提出指导性意见：要进一步落实好消防安全工作，加强安全隐患排查力度，确保责任落实到位，保障广大群众生命财产安全。&lt;/span&gt;&lt;/p&gt;', '李彦军总队长亲临支队调研指导工作', '1501384568', 'root', '67', null, null, '1', null, null, '0', '#0000FF', '7', '0', '22', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('56', '关于举办全省灭火器维修技能人员培训的通知', '&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: Simsun; font-size: 14px; line-height: 26.25px; text-indent: 28px; widows: 1; background-color: rgb(250, 250, 250);&quot;&gt;李总队长一行来到王胡砦社区幸福家园小区，实地察看了小区消防通道、楼道消防设施设备情况，认真听取了街道相关负责人关于微型消防站器材配备情况、电动车充电及电动车棚建设情况汇报，对街道电动车棚建设工作给予充分肯定，并对消防工作提出指导性意见：要进一步落实好消防安全工作，加强安全隐患排查力度，确保责任落实到位，保障广大群众生命财产安全。&lt;/span&gt;&lt;/p&gt;', '关于举办全省灭火器维修技能人员培训的通知', '1501384668', 'root', '67', null, null, '0', null, null, '0', '', '7', '0', '31', '0', null, null, '9', null);
INSERT INTO `news` VALUES ('57', '关于办事直通车无法使用的通知', null, '关于办事直通车无法使用的通知', '1501384710', 'root', '676', null, null, '0', null, null, '0', '', '7', '0', '1', '0', null, null, '0', null);
INSERT INTO `news` VALUES ('58', '清理整治全省一级注册消防工程师资格证书挂靠问题的通知', null, '清理整治全省一级注册消防工程师资格证书挂靠问题的通知', '1501384746', 'root', '4', null, null, '0', null, null, '0', '', '7', '0', '1', '0', null, null, '0', null);
INSERT INTO `news` VALUES ('59', '关于继续实行消防技术服务机构临时资质管理的通知', null, '关于不再开展陕西消防产品流向信息服务平台有关事项的通', '1501384746', 'root', '5', null, null, '0', null, null, '0', null, '7', '0', '6', '0', null, null, '0', null);
INSERT INTO `news` VALUES ('60', '陕西省公安消防总队二〇一七年接收普通高等学校毕业生简', null, '关于不再开展陕西消防产品流向信息服务平台有关事项的通', '1501384746', 'root', '6', null, null, '0', null, null, '0', null, '7', '0', '1', '0', null, null, '0', null);
INSERT INTO `news` VALUES ('61', '关于不再开展陕西消防产品流向信息服务平台有关事项的通', null, '关于不再开展陕西消防产品流向信息服务平台有关事项的通', '1501384745', 'root', '7', null, null, '0', null, null, '0', null, '7', '0', '2', '0', null, null, '0', null);
INSERT INTO `news` VALUES ('62', '关于办事直通车无法使用的通关于办事直通车无法使用的通..', null, null, '1501384710', 'root', '8', null, null, '0', null, null, '0', null, '8', '0', '6', '0', null, null, '0', null);
INSERT INTO `news` VALUES ('63', '关于办事直通车无法使用的通关于办事直通车无法使用的通..', null, null, '1501384711', 'root', '9', null, null, '0', null, null, '0', null, '8', '0', '7', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('64', '关于办事直通车无法使用的关于办事直通车无法使用的通..', null, null, '1501384719', 'root', '10', null, null, '0', null, null, '0', null, '8', '0', '3', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('65', '关于办事直通车无法使用的通关于办事直通车无法使用的通..', null, null, '1501384710', 'root', '11', null, null, '0', null, null, '0', null, '8', '0', '2', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('66', '关于办事直通车无法使用的通关于办事直通车无法使用的通..', null, null, '1501384746', 'root', '12', null, null, '0', null, null, '0', null, '8', '0', '11', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('67', '关于办事直通车无法使用关于办事直通车无法使用的通..', null, null, '1501384712', 'root', '13', null, null, '0', null, null, '0', null, '9', '0', '4', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('68', '关于办事直通车无法使用的关于办事直通车无法使用的通..', null, null, '1501384721', 'root', '14', null, null, '0', null, null, '0', null, '9', '0', '1', '0', null, '1', '6', null);
INSERT INTO `news` VALUES ('69', '关于办事直通车无法使用的关于办事直通车无法使用的通..', null, null, '1501384589', 'root', '15', null, null, '0', null, null, '0', null, '9', '0', '2', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('70', '关于办事直通车无法使用关于办事直通车无法使用的通..', null, null, '1501384586', 'root', '16', null, null, '0', null, null, '0', null, '9', '0', '2', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('71', '关于办事直通车无法使用的关于办事直通车无法使用的通..', null, null, '1501384723', 'root', '17', null, null, '0', null, null, '0', null, '9', '0', '4', '0', null, '1', '5', null);
INSERT INTO `news` VALUES ('72', '关于办事直通车无法使用的关于办事直通车无法使用的通..', null, null, '1501384846', 'root', '18', null, null, '0', null, null, '0', null, '9', '0', '2', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('73', '于办事直通车无法使用的通.于办事直通车无法使用的通.于办事直通车无法使用的通.', null, null, '1501384658', 'root', '19', null, null, '0', null, null, '0', null, '10', '0', '0', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('74', '商务部公告2017年第34号 关于对产自朗盛于办事直通车无法使用的通.', null, null, '1501384746', 'root', '20', null, null, '0', null, null, '0', null, '10', '0', '2', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('75', '商务部公告2017年第34号 关于对产自朗盛于办事直通车无法使用的通.', null, null, '1501384746', 'root', '21', null, null, '0', null, null, '0', null, '10', '0', '2', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('76', '商务部公告2017年第34号 关于对产自朗于办事直通车无法使用的通.', null, null, '1501384746', 'root', '22', null, null, '0', null, null, '0', null, '10', '0', '2', '0', null, '1', '4', null);
INSERT INTO `news` VALUES ('77', '商务部公告2017年第34号 关于对产自朗于办事直通车无法使用的通.', null, null, '1501384746', 'root', '23', null, null, '0', null, null, '0', null, '10', '0', '6', '0', null, '0', '0', null);
INSERT INTO `news` VALUES ('78', '商务部服贸司负责人解读《国际服务外包产业发于办事直通车无法使用的通.', null, null, '1501384746', 'root', '24', null, null, '0', null, null, '0', null, '11', '1', '7', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('79', '商务部服贸司负责人解读《国际服务外包产业发展', null, null, '1501384746', 'root', '25', null, null, '0', null, null, '0', null, '11', '0', '1', '0', null, '0', '7', null);
INSERT INTO `news` VALUES ('80', '商务部服贸司负责人解读《国际服务外包产业发展', null, null, '1501384746', 'root', '22', null, null, '0', null, null, '0', null, '11', '0', '0', '0', null, '0', '0', null);
INSERT INTO `news` VALUES ('81', '商务部服贸司负责人解读《国际服务外包产业发展', null, null, '1501384746', 'root', '27', null, null, '0', null, null, '0', null, '11', '0', '0', '0', null, '0', '8', null);
INSERT INTO `news` VALUES ('82', '商务部服贸司负责人解读《国际服务外包产业发展', null, null, '1501384746', 'root', '28', null, null, '0', null, null, '0', null, '11', '0', '0', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('83', '共同推进农产品和农村市场体系建设的通知', null, null, '1501384746', 'root', '29', null, null, '0', null, null, '0', null, '12', '0', '0', '0', '1', '1', '0', null);
INSERT INTO `news` VALUES ('84', '共同推进农产品和农村市场体系建设的通知', null, null, '1501384746', 'root', '30', null, null, '0', null, null, '0', null, '12', '0', '0', '0', '1', '1', '0', null);
INSERT INTO `news` VALUES ('85', '共同推进农产品和农村市场体系建设的通知', null, null, '1501384746', 'root', '31', null, null, '0', null, null, '0', null, '12', '0', '2', '0', '1', '1', '3', null);
INSERT INTO `news` VALUES ('86', '共同推进农产品和农村市场体系建设的通知', null, null, '1501384746', null, '32', null, null, '0', null, '软碟通热特让他对方股份的股份', '0', null, '12', '0', '0', '0', '1', '3', '4', null);
INSERT INTO `news` VALUES ('87', '关于进一步做好行业协会商会政策和业务指导工作的通知', null, null, '1501384746', null, '33', null, null, '0', null, null, '0', null, '13', '0', '1', '0', '1', '1', '5', null);
INSERT INTO `news` VALUES ('88', '关于进一步做好行业协会商会政策和业务指导工作的通知', null, null, '1501384746', null, '34', null, null, '0', null, null, '0', null, '13', '0', '2', '0', '1', '1', '6', null);
INSERT INTO `news` VALUES ('89', '关于进一步做好行业协会商会政策和业务指导工作的通知', null, null, '1501384746', null, '35', null, null, '0', '1501384746', '关于进一步做好行业协会商会政策和业务指导工作的通知', '0', null, '13', '0', '6', '0', '1', '3', '2', null);
INSERT INTO `news` VALUES ('90', '关于进一步做好行业协会商会政策和业务指导工作的通知', null, null, '1501384746', null, '36', null, null, '0', '1501384746', '软碟通热特让他对方股份的股份', '0', null, '13', '0', '0', '0', '3', '2', '2', null);
INSERT INTO `news` VALUES ('91', '2017年公开遴选面试和职位业务水平测试公告', null, null, '1501384746', null, '37', null, null, '0', '1501384746', '软碟通热特让他对方股份的股份', '0', null, '14', '0', '0', '0', '2', '3', '4', null);
INSERT INTO `news` VALUES ('92', '2017年公开遴选面试和职位业务水平测试公告', null, null, '1501384746', null, '38', null, null, '0', null, null, '0', null, '14', '1', '0', '0', null, '0', '4', null);
INSERT INTO `news` VALUES ('93', '2017年公开遴选面试和职位业务水平测试公告', null, null, '1501384746', null, '39', null, null, '0', '1501384746', '软碟通热特让他对方股份的股份', '0', null, '14', '0', '0', '0', '3', '3', '2', null);
INSERT INTO `news` VALUES ('94', '2017年公开遴选面试和职位业务水平测试公告', null, null, '1501384746', null, '40', null, null, '0', null, null, '0', null, '14', '0', '0', '0', '3', '1', '3', null);
INSERT INTO `news` VALUES ('95', '中国国际经济技术交流中心物资项目中标公告', null, null, '1501384746', null, '41', null, null, '0', null, null, '0', null, '15', '0', '1', '0', '4', '1', '3', null);
INSERT INTO `news` VALUES ('96', '中国国际经济技术交流中心物资项目中标公告', null, null, '1501384746', null, '42', null, null, '0', '1501384746', '软碟通热特让他对方股份的股份', '0', null, '15', '0', '0', '0', '4', '3', '5', null);
INSERT INTO `news` VALUES ('97', '中国国际经济技术交流中心物资项目中标公告', null, null, '1501384746', null, '43', null, null, '0', '1501384746', '软碟通热特让他对方股份的股份', '0', null, '15', '0', '0', '0', '4', '3', '3', null);
INSERT INTO `news` VALUES ('98', '中国国际经济技术交流中心物资项目中标公告', null, null, '1501384746', null, '44', null, null, '0', null, null, '0', null, '15', '0', '0', '0', '3', '1', '4', null);
INSERT INTO `news` VALUES ('99', '刘奎林：“工欲善其事，必先利其器”----对', null, null, '1501384746', null, '45', null, null, '0', null, '软碟通热特让他对方股份的股份', '0', null, '16', '0', '1', '0', '3', '3', '13', null);
INSERT INTO `news` VALUES ('100', '刘奎林：“工欲善其事，必先利其器”----对', null, null, '1501384746', null, null, null, null, '0', null, null, '0', null, '16', '0', '4', '0', '2', '1', '14', null);
INSERT INTO `news` VALUES ('101', '刘奎林：“工欲善其事，必先利其器”----对', null, null, '1501384746', null, '47', null, null, '0', null, null, '0', null, '1', '0', '0', '0', '1', '1', '15', null);
INSERT INTO `news` VALUES ('102', '刘奎林：“工欲善其事，必先利其器”----对', null, null, '1501384746', null, '484', null, null, '0', null, null, '0', null, '16', '0', '5', '0', '1', '1', '9', null);
INSERT INTO `news` VALUES ('103', '刘奎林：“工欲善其事，必先利其器”----对', null, null, '1501384746', null, '49', null, null, '0', null, null, '0', null, '16', '0', '0', '0', '3', '3', '8', null);
INSERT INTO `news` VALUES ('104', '刘奎林：“工欲善其事，必先利其器”----对', null, null, '1501384746', null, '50', null, null, '0', null, null, '0', null, '16', '0', '0', '0', '2', '3', '7', null);
INSERT INTO `news` VALUES ('105', '刘奎林：“工欲善其事，必先利其器”----对', null, null, '1501384746', null, '51', null, null, '0', null, '软碟通热特让他对方股份的股份', '0', null, '16', '0', '2', '0', '1', '3', '6', null);
INSERT INTO `news` VALUES ('106', '黎维亮：浅谈举高消防车的结 维护', null, null, '1501384746', null, '52', null, null, '0', null, null, '0', null, '17', '0', '1', '0', '3', '1', '11', null);
INSERT INTO `news` VALUES ('107', '黎维亮：浅谈举高消防车的结 维护', null, null, '1501384746', null, '36', null, null, '0', null, null, '0', null, '17', '0', '0', '0', '2', '2', '5', null);
INSERT INTO `news` VALUES ('108', '黎维亮：浅谈举高消防车的结 维护', null, null, '1501384746', null, '545', null, null, '0', null, '软碟通热特让他对方股份的股份', '0', null, '17', '0', '0', '0', '3', '3', '4', null);
INSERT INTO `news` VALUES ('109', '黎维亮：浅谈举高消防车的结 维护', null, null, '1501384746', null, '55', null, null, '0', null, '软碟通热特让他对方股份的股份', '0', null, '17', '0', '0', '0', '4', '3', '5', null);
INSERT INTO `news` VALUES ('110', '黎维亮：浅谈举高消防车的结 维护', null, null, '1501384746', null, '56', null, null, '0', null, null, '0', null, '17', '0', '2', '0', '2', '1', '4', null);
INSERT INTO `news` VALUES ('111', '黎维亮：浅谈举高消防车的结 维护', null, null, '1501384746', null, '57', null, null, '0', null, '软碟通热特让他对方股份的股份', '0', null, '17', '0', '0', '0', '4', '3', '14', null);
INSERT INTO `news` VALUES ('112', '刘奎林：“工欲善其事，必层部队管', null, null, '1501384746', null, '58', null, null, '0', null, null, '0', null, '18', '0', '3', '0', '2', '1', '2', null);
INSERT INTO `news` VALUES ('113', '刘奎林：“工欲善其事，必层部队管', null, null, '1501384746', null, '59', null, null, '0', null, '软碟通热特让他对方股份的股份', '0', null, '18', '0', '1', '0', '4', '3', '1', null);
INSERT INTO `news` VALUES ('114', '刘奎林：“工欲善其事，必层部队管', null, null, '1501384746', null, '60', null, null, '0', null, null, '0', null, '18', '0', '3', '0', '3', '1', '6', null);
INSERT INTO `news` VALUES ('115', '刘奎林：“工欲善其事，必层部队管', null, null, '1501384746', null, '61', null, null, '0', null, '软碟通热特让他对方股份的股份', '0', null, '18', '0', '1', '0', '4', '3', '4', null);
INSERT INTO `news` VALUES ('116', '刘奎林：“工欲善其事，必层部队管', null, null, '1501384746', null, '62', null, null, '0', null, null, '0', null, '18', '0', '3', '0', '1', '1', '10', null);
INSERT INTO `news` VALUES ('117', '刘奎林：“工欲善其事，必层部队管', null, null, '1501384746', null, '63', null, null, '0', null, null, '0', null, '18', '0', '5', '0', '2', '1', '5', null);
INSERT INTO `news` VALUES ('118', '黎维亮：浅谈举高消防车的结 维护很多时候', null, '', '1501384746', 'root', '64', null, null, '0', null, null, '0', '', '19', '0', '2', '1501935587', '3', '1', '4', null);
INSERT INTO `news` VALUES ('119', '黎维亮：浅谈举高消防车的结 维护点对点的', null, null, '1501384746', null, '65', null, null, '0', null, null, '0', null, '19', '0', '2', '0', '4', '1', '3', null);
INSERT INTO `news` VALUES ('120', '黎维亮：浅32323谈举高消防车的结 维护', null, null, '1501384746', null, '66', null, null, '0', null, null, '0', null, '19', '0', '0', '0', '1', '1', '7', null);
INSERT INTO `news` VALUES ('121', '黎维亮：浅谈举高消防车的结 维护4434', '黎维亮黎维亮', null, '1501384746', null, '76', null, null, '0', null, null, '0', null, '19', '0', '3', '0', '2', '1', '6', null);
INSERT INTO `news` VALUES ('122', '黎维亮：5454545谈举高消防车的结 维护', '黎维亮黎维亮', null, '1501384746', null, '68', null, null, '0', null, null, '0', null, '19', '0', '1', '0', '3', '1', '7', null);
INSERT INTO `news` VALUES ('123', '黎维7676767浅谈举高消防车的结 维护', '黎维亮黎维亮', null, '1501384746', null, '69', null, null, '0', null, null, '0', null, '19', '0', '0', '0', '4', '1', '8', null);
INSERT INTO `news` VALUES ('124', '黎维9898989浅谈举高消防车的结 维护', '黎维亮黎维亮', null, null, null, '70', null, null, '0', null, null, '0', null, null, '0', '4', '0', '4', '1', '9', null);
INSERT INTO `news` VALUES ('125', '黎维亮：0000浅谈举高消防车的结 维护', '黎维亮黎维亮', '黎维亮：浅谈举高消防车的结 维护', '1501396365', 'root', '71', '/Public/Uploads/2017-07-/Public/Uploads/2017-08-08/dt1.jpg', '/Public/Uploads/2017-07-30/small_597d7d8d48af4.jpg', '0', null, null, '0', '#66FF00', '20', '0', '6', '1502019931', '3', '1', '12', null);
INSERT INTO `news` VALUES ('126', '黎维亮：333浅谈举高消防车的结 维护', '黎维亮黎维亮', '', '1501396389', 'root', '72', '/Public/Uploads/2017-07-30/597d7da56b82a.jpg', '/Public/Uploads/2017-07-30/small_597d7da56b82a.jpg', '0', null, null, '0', '', '20', '0', '4', '0', '2', '1', '13', null);
INSERT INTO `news` VALUES ('127', '黎维亮：浅4444444谈举高消防车的结 维护', '黎维亮黎维亮', '', '1501396411', 'root', '73', '/Public/Uploads/2017-07-30/597d7dbb28a96.jpg', '/Public/Uploads/2017-07-30/small_597d7dbb28a96.jpg', '0', null, null, '0', '', '20', '0', '5', '0', '1', '1', '14', null);
INSERT INTO `news` VALUES ('128', '黎维亮：浅谈举高消防车的结 维护', '黎维亮黎维亮', '', '1501396430', 'root', '74', '/Public/Uploads/2017-07-30/597d7dce4dcdd.jpg', '/Public/Uploads/2017-07-30/small_597d7dce4dcdd.jpg', '0', null, null, '0', '', '20', '0', '2', '1501896158', '2', '1', '0', null);
INSERT INTO `news` VALUES ('129', '黎维亮：浅谈举高8888消防车的结 维护', '黎维亮黎维亮', '', '1501396443', 'root', '75', '/Public/Uploads/2017-07-30/597d7de7560b9.jpg', '/Public/Uploads/2017-07-30/small_597d7de7560b9.jpg', '0', null, null, '0', '', '20', '0', '0', '1501396455', '3', '0', '0', null);
INSERT INTO `news` VALUES ('130', '黎维亮：浅谈举7777消防车的结 维护', '黎维亮黎维亮', '', '1501396472', 'root', '76', '/Public/Uploads/2017-07-30/597d7df88b5b6.jpg', '/Public/Uploads/2017-07-30/small_597d7df88b5b6.jpg', '0', null, null, '0', '', '20', '0', '0', '0', '4', '0', '0', null);
INSERT INTO `news` VALUES ('132', '黎维亮：浅谈举6666消防车的结 维护', '黎维亮黎维亮', '', '1501401174', 'root', '77', '/Public/Uploads/2017-07-30/597d905675920.jpg', '/Public/Uploads/2017-07-30/small_597d905675920.jpg', '0', null, null, '0', '', '8', '0', '2', '1501833080', '3', '0', '0', null);
INSERT INTO `news` VALUES ('133', '黎维亮：浅谈举5555高消防车的结 维护', '黎维亮黎维亮', '', '1501401193', 'root', '78', '/Public/Uploads/2017-07-30/597d90699436c.jpg', '/Public/Uploads/2017-07-30/small_597d90699436c.jpg', '0', null, null, '0', '', '9', '0', '4', '1501833497', '2', '1', '8', null);
INSERT INTO `news` VALUES ('134', '黎维亮：浅谈举444高消防车的结 维护', '黎维亮黎维亮', '', '1501401209', 'root', '79', '/Public/Uploads/2017-08-08/dt1.jpg', '/Public/Uploads/2017-07-30/small_597d90791ba18.jpg', '0', null, null, '1', '', '10', '0', '22', '0', '3', '1', '0', null);
INSERT INTO `news` VALUES ('135', '黎维亮：浅谈举9999消防车的结 维护', '黎维亮黎维亮', '', '1501401860', 'root', '80', '/Public/Uploads/2017-08-08/dt2.jpg', '/Public/Uploads/2017-07-30/small_597d93043f1bb.jpg', '0', null, null, '1', '', '10', '0', '3', '0', '8', '1', '0', null);
INSERT INTO `news` VALUES ('136', '黎维亮：浅谈0000高消防车的结 维护', '黎维亮黎维亮', '', '1501401883', 'root', '81', '/Public/Uploads/2017-08-08/dt3.jpg', '/Public/Uploads/2017-07-30/small_597d931b869f9.jpg', '0', null, null, '1', '', '9', '0', '9', '0', '4', '1', '0', null);
INSERT INTO `news` VALUES ('137', '黎维亮：浅谈举000高消防车的结 维护', '&lt;p style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; font-size: 14px; line-height: 25px; font-family: Simsun; white-space: normal; widows: 1;&quot;&gt;&lt;span style=&quot;text-indent: 2em;&quot;&gt;近日，中国领先的在线旅游平台携程与百度联手，升级携程App中的翻译助手功能，通过百度OCR技术，实现了拍照翻译功能。这意味着，携程用户在境外用手机拍摄一张带有英文内容的图片，将能实时翻译成中文，解决中国出境游游客的语言难题。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; font-size: 14px; line-height: 25px; font-family: Simsun; white-space: normal; widows: 1;&quot;&gt;数据显示，中国已经是世界上第一大的出境客源地国家，2016年出境人数为1.22亿人次，预计到2020年将达到2亿人次。不过，与越来越多的国内游客选择自由行不同的是，超过半数的出境游游客仍会选择跟团游，而语言不通成为最主要的原因。&lt;/p&gt;&lt;p style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; font-size: 14px; line-height: 25px; font-family: Simsun; white-space: normal; widows: 1;&quot;&gt;“在国外旅游时，国人会遇到语言难题的场景主要为问路、购物、点菜等，除了用手势，也会使用手机上的翻译软件手动输入进行翻译，但是，这种翻译方式非常费时、费力，若输入错误还会造成误会。携程这次通过接入百度OCR，实现了图片翻译的功能，比如，在国外餐厅里，游客如果不认识菜单，可以直接在翻译助手中拍照，软件会将照片内的英文内容识别出来并且翻译成中文，一目了然。”携程相关负责人介绍。&lt;/p&gt;&lt;p style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 25px; font-family: Simsun; white-space: normal; widows: 1; text-align: center;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170804/1501816903154914.png&quot; border=&quot;0&quot; width=&quot;554&quot; height=&quot;310&quot; style=&quot;display: block; margin: 0px auto; max-width: 550px;&quot;/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; font-size: 14px; line-height: 25px; font-family: Simsun; white-space: normal; widows: 1;&quot;&gt;据了解，百度OCR是全球最准确的中文通用识别服务，拥有整图文字检测和识别、整图文字行定位和单字图像识别等能力。百度的OCR技术处于世界顶尖水平，以通用文字识别来说——它支持多场景下整体文字检测识别，在图片文字清晰，小幅度倾斜、无明显背光等情况下识别率高达90%以上。&lt;/p&gt;&lt;p style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; font-size: 14px; line-height: 25px; font-family: Simsun; white-space: normal; widows: 1;&quot;&gt;此外，携程的翻译助手功能除了支持中英文拍照翻译功能，还支持韩语、泰语、日语、法语、德语、西班牙语、俄语等7种语言与中文的互翻功能。首次翻译后，将给出收藏提示，用户可以将翻译结果添加到收藏夹，离线时也可进行查看。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '', '1501401898', 'root', '82', '/Public/Uploads/2017-08-08/dt4.jpg', '/Public/Uploads/2017-07-30/small_597d932a87ec9.jpg', '0', null, null, '1', '', '9', '0', '11', '1501816908', '2', '1', '1', null);
INSERT INTO `news` VALUES ('138', '黎维亮：浅谈00000000、、444高消防车的结 维护', '黎维亮黎维亮黎维亮', null, null, null, '83', null, null, '0', null, '软碟通热特让他对方股份的股份', '0', null, null, '0', '0', '0', '1', '3', '7', null);
INSERT INTO `news` VALUES ('139', '热烈祝贺郑锅股份一分厂架装一组获荣誉称号', '&lt;p style=&quot;text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;img border=&quot;0&quot; alt=&quot;济源：火灾危险时刻微型消防站队员冲了上去&quot; src=&quot;/ueditor/php/upload/image/20170730/1501415285731411.jpg&quot; style=&quot;margin: 0px; padding: 0px; border: none;&quot;/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;近段时间以来，在济源市，消防官兵出警灭火总会遇到这样的场面，一到现场，就会发现已经有人员在对火势进行扑救，有的时候，甚至还没到达事故现场火已被扑灭。这群赶在消防官兵到来之前灭火的人是谁呢？让我们先来了解一件发生在7月20日当天的事例。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;7&lt;/span&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;月20日中午12时23分许，济源市119指挥中心接到报警称：南环路与沁园路交叉口有一货车着火，指挥中心立即调派济水中队前往现场处置。12时26分许，消防官兵到达现场后发现在距离着火货车30米处就是加油站，数名加油站员工正在使用灭火器全力扑救。此时，火势已经处于猛烈阶段，燃烧中带着啪啪的响声，如果蔓延开来后果不堪设想。消防官兵们立即展开作战，出两支枪对车体进行灭火，经过近10分钟的紧张处置明火被彻底扑灭。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;据加油站监控录像显示，加油站员工发现火情后立即启动应急预案，该加油站内微型消防站队员迅速按照预案分工展开灭火战斗，3名队员利用手提式灭火器、推车式灭火器等消防器材对火势进行压制，2名队员对事故路段实施警戒并疏散过往车辆，1名队员立即向119消防指挥中心报警。此次事故，由于加油站员工做出的快速反应，有效控制了火势蔓延，防止了事态进一步恶化，为消防官兵最终扑灭火灾发挥了重要作用。事故未造成人员伤亡。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;据了解，近段时间以来，济源市发生多起微型消防站队员果断处置初期火灾的事例。6月19日，东留村大队部附近电线着火；6月21日，豫港花园路边变压器着火；7月1日，轵城黄河酒店门口一面包车着火，附近微型消防站均在接到119指挥中心指令后第一时间赶赴现场处置。7月4日，上城国际小区管道井内着火，附近微型消防站队员及时到场展开灭火战斗，直到消防官兵到场；7月17日，济源市第二人民医院门诊病房二楼走廊空调配电箱着火，医院微型消防站队员利用干粉灭火器第一时间将火扑灭……&amp;nbsp;几起事例，充分体现出微型消防站队员过硬的业务素质和快速的反应能力。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;市消防支队一直着力于微型消防站建设和队员战斗力的锤炼，出台了《微型消防站建设标准》，按照有人员、有器材、有制度、有检查、有演练、有奖惩的“六有”建设标准全面开展微型消防站建设工作。目前，全市共建设微型消防站232个，配备队员1392人、各类装备器材8000余件套。同时，将全市微型消防站纳入119指挥灭火救援体系，全面建立1分钟出动、3分钟到场、5分钟处置的快速响应机制。今年年初以来，全市微型消防站已成功处置初期火灾30余起，实现了救早、灭小的初期火情控制目标。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;此外，市消防支队定期组织微型消防站队员进行集中培训，对装备的维护保养、消防器材的操作、水带的绑法等消防技能，以“手把手”培训、“面对面”教学的方式进行了专业培训，并要求每名队员进行现场演示过关，切实熟练掌握消防技能。考虑到全市微型消防站点多、面广、管理难度大、工作任务重的基础，支队将全市微型消防站负责人纳入消防微信群，发布各类通知、通告以及即时出警信息和消防知识等，并利用微信群通过视频、照片等方式进行每日不定时点名查看人员在岗在位情况、抽查各微型消防站拉动、日常训练等情况，并记录备案每月进行通报，进一步健全了全市微型消防站的日常管理机制，形成了&amp;nbsp;“一把抓”新格局。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '', '1501415300', 'root', '84', null, null, '0', null, null, '0', '#66FF00', '2', '0', '19', '0', '0', '0', '6', null);
INSERT INTO `news` VALUES ('140', '洛阳西工区开展娱乐场所消防安全隐患夜查专项行动', '&lt;p&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;8&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;月&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;22&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;日晚，洛阳市西工区公安、消防部门组成联合&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;15&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;个检查组强势出击，分赴深入辖区&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;KTV&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;歌舞厅、网吧电子游艺等公共娱乐场所，商场超市、宾馆饭店等人员密集场所，对各类场所内存在的火灾隐患展开全面夜间清查集中整治行动，严厉查处各种消防违法违规行为，深入推进夏季消防检查工作扎实开展。&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;&lt;/span&gt;&lt;br style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; font-size: 14px; line-height: 23px; text-indent: 29px; white-space: normal; widows: 1;&quot;/&gt;&lt;br style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; font-size: 14px; line-height: 23px; text-indent: 29px; white-space: normal; widows: 1;&quot;/&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; font-size: 14px; line-height: 23px; text-indent: 29px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;　　&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;晚上&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;19&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;时&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;30&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;分，各路检查组先后深入辖区歌舞厅、&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;KTV&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;歌厅、电子游艺、网吧等公共娱乐场所，认真检查各场所消防安全主体责任和火灾防范措施落实情况，并逐一查看疏散通道和安全出口是否保持畅通，室内消火栓等各类消防设施是否正常，各项消防安全措施是否落实，是否安排专人开展消防巡逻值守。检查组在检查中发现，个别网吧中存在摆放物品遮挡消火栓、灭火器和消防指示标志数量不足等安全隐患，检查人员当场提出了整改要求。&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;&lt;/span&gt;&lt;br style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; font-size: 14px; line-height: 23px; text-indent: 29px; white-space: normal; widows: 1;&quot;/&gt;&lt;br style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; font-size: 14px; line-height: 23px; text-indent: 29px; white-space: normal; widows: 1;&quot;/&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; font-size: 14px; line-height: 23px; text-indent: 29px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;　　&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;检查人员在顾客量最大某大酒吧检查中，发现该场所内消防报警系统处于瘫痪停用状态，并存在大量悬挂易燃可燃装饰物品、场内应急照明灯安装不规范、照明电源线路未穿管、安装铺设不符合消防安全要求等火灾隐患，检查组当场对该酒吧作出临时查封、停业整顿处理。据统计，西工区在当天的夜间清查集中整治行动中，共检查各类场&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;43&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;个，发现火灾隐患&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;49&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;处，现场整改&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;36&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;处，临时查封&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;3&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;家，责令“三停”场所&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;4&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;个，依法行政拘留&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;lucida Grande&amp;quot;, Verdana, &amp;quot;Microsoft YaHei&amp;quot;; line-height: 23px; text-indent: 29px; widows: 1; font-size: 12pt;&quot;&gt;2&lt;/span&gt;&lt;span style=&quot;line-height: 23px; text-indent: 29px; widows: 1; font-family: 宋体; font-size: 12pt;&quot;&gt;人，有力震慑了消防违法违规行为。&lt;br/&gt;&lt;/span&gt;&lt;/p&gt;隐患夜查专', '', '1501415343', 'root', '85', null, null, '0', null, null, '0', '', '3', '0', '5', '0', '0', '0', '13', null);
INSERT INTO `news` VALUES ('141', '漯河开展火灾隐患集中曝光活动', '&lt;p style=&quot;text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;img border=&quot;0&quot; alt=&quot;漯河开展火灾隐患集中曝光活动&quot; src=&quot;/ueditor/php/upload/image/20170730/1501415397219419.jpg&quot; style=&quot;margin: 0px; padding: 0px; border: none;&quot;/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;　&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;为进一步建立和完善常态化曝光机制，坚持抓节点、抓舆论、抓长效，充分运用舆论和社会监督，加强新闻媒体消防警示宣传力度，倒逼火灾隐患整改，推动消防工作有效落实，7月24日，漯河市消防支队联合当地主流新闻媒体实施火灾隐患集中曝光，开展社会化消防警示宣传。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;漯河市电视台、新闻综合广播、有线电视台、日报、晚报及微信微博等新媒体参与此次集中曝光活动。市消防支队充分利用当地广播、电视、报刊、网络等新闻媒体资源，通过开设专栏、专题等形式，开展火灾隐患集中曝光活动，形成强大舆论声势。对一批久拖不改的，严重影响公共安全、发生火灾极易造成重大人员伤亡的重大火灾隐患单位，给予集中曝光，倒逼隐患整改。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;此次媒体曝光单位涉及阳光雨露教育大厦、东方博爱婴幼园、快乐宝贝幼儿园、启聪特殊教育学校等12家教育机构和新闻大厦、MOCO新世界、太行山公寓、工商联大厦、第二附属医院、郾城区人民医院等11家高层建筑单位，集中曝光了单位消防安全管理制度建立及落实情况；员工消防安全教育培训开展情况；疏散通道、安全出口、疏散楼梯等设置、使用、畅通以及疏散指示和火灾事故照明运行情况；消防控制室、消防水泵房、配电室以及其他消防设备用房及其设施设置运行以及实行24小时专人值班情况等。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;针对上述问题，支队联合新闻媒体予以集中曝光，对存在隐患单位施加压力，促使隐患单位积极整改火灾隐患。集中曝光活动以来，支队先后通过市电视台、新闻综合广播、有线电视台、微信微博等媒体对政府督办重大隐患单位、居民住宅小区、教育机构、高层建筑等５类场所消防安全隐患单位进行了集中曝光，极大震慑了一大批无视消防法律法规、漠视消防安全的单位，在全市范围内引起强烈的反响。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '', '1501415401', 'root', '86', null, null, '0', null, null, '0', '', '4', '0', '1', '0', '0', '1', '0', null);
INSERT INTO `news` VALUES ('142', '航空港区开展“百场消防电影进社区”活动', '&lt;p style=&quot;text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;img border=&quot;0&quot; alt=&quot;航空港区开展“百场消防电影进社区”活动&quot; src=&quot;/ueditor/php/upload/image/20170730/1501415440351182.jpg&quot; style=&quot;margin: 0px; padding: 0px; border: none;&quot;/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;“&lt;/span&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;老伴儿，碗筷快点收拾收拾，消防队来小区广场上放电影，马上就开始了！”7月26日晚8时许，家住航空港区裕鸿世界港丽园小区的张大爷一边领着外孙准备出门，一边催着老伴一块去看消防电影。当晚，由航空港区消防支队联合区社会事业局文化处、新郑农商银行开展的“百场消防电影进社区”活动走进辖区裕鸿世界港社区。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;电影放映前，消防宣传员先针对近期酷夏高温火灾易发的严峻防火形势，讲解了家庭火灾的常见原因、电气火灾防范、电动车安全充电停放注意事项、火场浓烟的危害性以及初起火灾扑救方法等知识技巧，并为社区居民发放的消防并向群众免费发放了消防扑克牌、《家庭防火指南》、《消防安全知识手册》等图文并茂、通俗易懂的消防宣传资料。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;8&lt;/span&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;时30分，涵盖了电气火灾案例警示、幼儿园火灾警示、商市场火灾警示、郑州关虎屯“6.25”火灾警示、电动车消防安全提醒和《119对你说》的《火灾警示录》电影开始上映，观看中，居民们纷纷惊叹小小电动车竟能造成重大火灾损失，居民有的拿出手机现场翻拍短片，有的拿着笔在纸上记着火灾防范的要点……&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;“&lt;/span&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;这些火灾真的太可怕了，来，给我拷贝一份吧，回家也让我爱人和孩子都看看，学一学”，电影放映结束，一些随身带有优盘的居民要求将《火灾警示录》视频拷贝回家，让自己的家人和朋友都进行观看，让他们也知道火灾的危害，避免他们遭受火灾侵害。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 21px; text-indent: 30pt;&quot;&gt;&lt;span style=&quot;line-height: 30px; font-family: 宋体; font-size: 15pt;&quot;&gt;连日来，航空港区消防支队已联合区社会事业局文化处、新郑农商银行开展的“百场消防电影进社区”活动5次，为辖区集中纳凉避暑的600余名居民带来了别样的消防“盛宴”，让他们在生活闲暇期间就轻松学习到了实用易记的消防安全知识，受到辖区居民的热烈欢迎。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '', '1501415441', 'root', '87', null, null, '0', null, '第二届全省儿童消防绘画作文书法大赛方案', '0', '', '5', '0', '1', '0', '2', '3', '2', null);
INSERT INTO `news` VALUES ('143', '第二届全省儿童消防绘画作文书法大赛方案', '&lt;p&gt;					&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; line-height: 25px; white-space: normal; widows: 1;&quot;&gt;&lt;span style=&quot;font-family: 黑体; color: windowtext;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; 一、活动主旨&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 32pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;作文、绘画及书法作品是反映作者认识世界、认识自我、进行创造性表述的过程。通过鼓励小朋友借助作文、绘画和书法作品来记述生活中对火的利与害的认识、对消防安全的感悟，不仅可以培养他们对消防安全的关注，从小提升消防安全意识，而且可以进一步丰富校园安全文化，努力建设平安和谐校园。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 32pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 黑体; color: windowtext;&quot;&gt;二、主办单位&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 32pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;河南省公安消防总队&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 32pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 黑体; color: windowtext;&quot;&gt;三、承办单位&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 32pt; text-indent: 32pt;&quot;&gt;映象网、腾讯大豫网&lt;span style=&quot;color: windowtext;&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 黑体; color: windowtext;&quot;&gt;四、征集时间&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;6&lt;/span&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;月30日至7月20日&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 黑体; color: windowtext;&quot;&gt;四、参赛对象&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;各类小学、幼儿园小朋友。（可独立或在教师指导下完成绘画或作文）&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 黑体; color: windowtext;&quot;&gt;五、作品要求&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 楷体_GB2312; color: windowtext;&quot;&gt;（一）作文&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;1.&lt;/span&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;紧扣消防主题，语句通顺，内容完整，思想感情积极向上。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;2.&lt;/span&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;自己看、自己想、自己写，抒发真情实感，严禁抄袭。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;3.&lt;/span&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;体裁不限，字数不少于300字（诗歌不限）。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;4.&lt;/span&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;正确使用标点符号。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 楷体_GB2312; color: windowtext;&quot;&gt;（二）绘画&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;消防主题突出，富有想象力、个性鲜明、构图新颖、内容积极向上，形式不限，绘画材料不限，尺寸不限。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 楷体_GB2312; color: windowtext;&quot;&gt;（三）书法&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;紧扣消防主题，字数不限，形式不限，尺寸不限，不需装裱。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 黑体; color: windowtext;&quot;&gt;四、报送要求&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;作文、绘画及书法作品&lt;/span&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;完成后，以学校为单位报送至当地公安消防部门，由各省辖市公安消防支队组织初评并遴选出三类作品各10个，于7月20日之前将参赛作文电子版、绘画书法作品照片和作品报送分类统计表（附后）发送至省公安消防总队宣传处电子邮箱。同时，各支队需将参赛绘画书法作品原稿寄至省公安消防总队宣传处（均不退稿），供评选使用，不接受个人来稿。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;所有参赛作品应在作品右下角注明名称、作者及年龄、所在地市、学&lt;/span&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;校年级、辅导老师及联系方式，以便评比。凡信息不全者一律不参与评选。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 32pt; text-indent: 32.25pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;作文、绘画、书法作品电子版报送邮箱：&lt;a href=&quot;mailto:869405358@qq.com&quot; style=&quot;text-decoration-line: none; color: rgb(0, 0, 0);&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;869405358@qq.com&lt;/span&gt;&lt;/a&gt;。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 32pt; text-indent: 32.25pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;作品邮寄地址：郑州市金水区福元路158号（河南省公安消防总队宣传处）。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 黑体; color: windowtext;&quot;&gt;六、奖项设置&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;一等奖：绘画、作文、书法各10名&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;二等奖：绘画、作文、书法各20名&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;三等奖：绘画、作文、书法各30名&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 黑体; color: windowtext;&quot;&gt;七、作品评选及运用&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 30pt; text-indent: 32pt;&quot;&gt;&lt;span style=&quot;color: windowtext;&quot;&gt;省教育厅、省公安消防总队将组织专家对各地上报的作品进行评选，设置一、二、三等奖。获奖者将全省通报表彰并颁发荣誉证书、金银铜质奖章、消防车模型。全省评选出50个省辖市优秀组织奖、100名优秀辅导教师，并在全省通报表彰，颁发证书。同时，将遴选优秀作文、绘画作品10个参与全国评选。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 宋体; color: windowtext;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 32pt;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;font-family: 宋体; color: windowtext;&quot;&gt;XX&lt;/span&gt;&lt;/strong&gt;&lt;strong&gt;&lt;span style=&quot;font-family: 宋体; color: windowtext;&quot;&gt;市（作文、绘画、书法）作品报送分类统计表&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Simsun; font-size: 14px; white-space: normal; widows: 1; line-height: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 宋体; color: windowtext;&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;&lt;table cellspacing=&quot;0&quot; cellpadding=&quot;0&quot;&gt;&lt;tbody&gt;&lt;tr class=&quot;firstRow&quot;&gt;&lt;td valign=&quot;top&quot; width=&quot;49&quot; style=&quot;border-width: 1pt; border-color: windowtext; padding: 0cm 5.4pt;&quot;&gt;&lt;p style=&quot;text-align:center; line-height: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 宋体; color: windowtext; font-size: 12pt;&quot;&gt;地市&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;81&quot; style=&quot;border-bottom-color: windowtext; border-width: 1pt 1pt 1pt medium; border-left-style: none; padding: 0cm 5.4pt; border-top-color: windowtext; border-right-color: windowtext;&quot;&gt;&lt;p style=&quot;text-align:center; line-height: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 宋体; color: windowtext; font-size: 12pt;&quot;&gt;作品名称&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;46&quot; style=&quot;border-bottom-color: windowtext; border-width: 1pt 1pt 1pt medium; border-left-style: none; padding: 0cm 5.4pt; border-top-color: windowtext; border-right-color: windowtext;&quot;&gt;&lt;p style=&quot;text-align:center; line-height: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 宋体; color: windowtext; font-size: 12pt;&quot;&gt;作者&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;84&quot; style=&quot;border-bottom-color: windowtext; border-width: 1pt 1pt 1pt medium; border-left-style: none; padding: 0cm 5.4pt; border-top-color: windowtext; border-right-color: windowtext;&quot;&gt;&lt;p style=&quot;text-align:center; line-height: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 宋体; color: windowtext; font-size: 12pt;&quot;&gt;学校年级&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;94&quot; style=&quot;border-bottom-color: windowtext; border-width: 1pt 1pt 1pt medium; border-left-style: none; padding: 0cm 5.4pt; border-top-color: windowtext; border-right-color: windowtext;&quot;&gt;&lt;p style=&quot;text-align:center; line-height: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 宋体; color: windowtext; font-size: 12pt;&quot;&gt;联系方式&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;60&quot; style=&quot;border-bottom-color: windowtext; border-width: 1pt 1pt 1pt medium; border-left-style: none; padding: 0cm 5.4pt; border-top-color: windowtext; border-right-color: windowtext;&quot;&gt;&lt;p style=&quot;text-align:center; line-height: 32pt;&quot;&gt;&lt;span style=&quot;font-family: 宋体; color: windowtext; font-size: 12pt;&quot;&gt;辅导老师&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td valign=&quot;top&quot; width=&quot;49&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt; border-top-style: none; border-left-color: windowtext; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;81&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;46&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;84&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;94&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;60&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td valign=&quot;top&quot; width=&quot;49&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt; border-top-style: none; border-left-color: windowtext; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;81&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;46&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;84&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;94&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;60&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td valign=&quot;top&quot; width=&quot;49&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt; border-top-style: none; border-left-color: windowtext; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;81&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;46&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;84&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;94&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;60&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td valign=&quot;top&quot; width=&quot;49&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt; border-top-style: none; border-left-color: windowtext; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;81&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;46&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;84&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;94&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;60&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td valign=&quot;top&quot; width=&quot;49&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt; border-top-style: none; border-left-color: windowtext; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;81&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;46&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;84&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;94&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;60&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td valign=&quot;top&quot; width=&quot;49&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt; border-top-style: none; border-left-color: windowtext; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;81&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;46&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;84&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;94&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;60&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td valign=&quot;top&quot; width=&quot;49&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt; border-top-style: none; border-left-color: windowtext; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;81&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;46&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;84&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;94&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;60&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td valign=&quot;top&quot; width=&quot;49&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt; border-top-style: none; border-left-color: windowtext; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;81&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;46&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;84&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;94&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;60&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td valign=&quot;top&quot; width=&quot;49&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt; border-top-style: none; border-left-color: windowtext; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;81&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;46&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;84&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;94&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;60&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td valign=&quot;top&quot; width=&quot;49&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt; border-top-style: none; border-left-color: windowtext; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;81&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;46&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;84&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;94&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;60&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td valign=&quot;top&quot; width=&quot;49&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt; border-top-style: none; border-left-color: windowtext; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;81&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;46&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;84&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;94&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;td valign=&quot;top&quot; width=&quot;60&quot; style=&quot;border-bottom-color: windowtext; border-width: medium 1pt 1pt medium; border-top-style: none; border-left-style: none; padding: 0cm 5.4pt; border-right-color: windowtext;&quot;&gt;&lt;br/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;				&lt;/p&gt;', '', '1501415479', 'root', '88', null, null, '0', null, null, '0', '', '6', '0', '1', '1501936140', '1', '3', '13', null);
INSERT INTO `news` VALUES ('144', '一个大白22', '&lt;p&gt;&lt;span style=&quot;font-family: Simsun; font-size: medium; background-color: rgb(236, 245, 255);&quot;&gt;总站可投稿数： &amp;nbsp; 456 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;4563条&lt;/span&gt;&lt;span style=&quot;font-family: Simsun; font-size: medium; background-color: rgb(236, 245, 255);&quot;&gt;总站可投稿数： &amp;nbsp; 465 &amp;nbsp; &amp;nbsp;3条&lt;/span&gt;&lt;span style=&quot;font-family: Simsun; font-size: medium; background-color: rgb(236, 245, 255);&quot;&gt;总站可投稿数：&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-family: Simsun; font-size: medium; background-color: rgb(236, 245, 255);&quot;&gt;3条&lt;/span&gt;&lt;span style=&quot;font-family: Simsun; font-size: medium; background-color: rgb(236, 245, 255);&quot;&gt;总站可投稿数： &amp;nbsp; &amp;nbsp; 456 &amp;nbsp; &amp;nbsp; &amp;nbsp; 3条&lt;/span&gt;&lt;span style=&quot;font-family: Simsun; font-size: medium; background-color: rgb(236, 245, 255);&quot;&gt;总站可投稿数：3条465&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-family: Simsun; font-size: medium; background-color: rgb(236, 245, 255);&quot;&gt;4645 576 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; 6767&lt;/span&gt;&lt;/p&gt;', '', '1502353344', 'root', '89', null, null, '0', null, null, '0', '', '8', '0', '17', '0', '2', '0', '0', null);
INSERT INTO `news` VALUES ('146', 'text视频文件', '&lt;p&gt;&lt;video class=&quot;edui-Upload-video  vjs-default-skin video-js&quot; controls=&quot;&quot; preload=&quot;none&quot; width=&quot;220&quot; height=&quot;200&quot; src=&quot;/ueditor/php/upload/video/20170731/1501489762127081.mp4&quot; data-setup=&quot;{}&quot;&gt;&lt;source src=&quot;/ueditor/php/upload/video/20170731/1501489762127081.mp4&quot; type=&quot;video/mp4&quot;/&gt;&lt;/video&gt;&lt;/p&gt;', '', '1501489767', 'root', '90', null, null, '0', null, '软碟通热特让他对方股份的股份', '0', '', '21', '0', '0', '0', '1', '3', '14', null);
INSERT INTO `news` VALUES ('147', '第二个小视频', '&lt;p&gt;					&lt;/p&gt;&lt;p&gt;&lt;video class=&quot;edui-Upload-video  vjs-default-skin  video-js&quot; controls=&quot;&quot; preload=&quot;none&quot; width=&quot;200&quot; height=&quot;200&quot; src=&quot;/ueditor/php/upload/video/20170731/1501489932696512.mp4&quot; data-setup=&quot;{}&quot;&gt;&lt;source src=&quot;/ueditor/php/upload/video/20170731/1501489932696512.mp4&quot; type=&quot;video/mp4&quot;/&gt;&lt;/video&gt;&lt;/p&gt;&lt;p&gt;				&lt;/p&gt;', '', '1501489935', 'root', '33', null, null, '0', null, null, '0', '', '21', '0', '0', '1501934464', '1', '0', '0', null);
INSERT INTO `news` VALUES ('148', '第三个小视频', '&lt;p&gt;					&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;video class=&quot;edui-Upload-video  vjs-default-skin   video-js&quot; controls=&quot;&quot; preload=&quot;none&quot; width=&quot;242&quot; height=&quot;182&quot; src=&quot;/ueditor/php/upload/video/20170731/1501491788121134.mp4&quot; data-setup=&quot;{}&quot;&gt;&lt;source src=&quot;/ueditor/php/upload/video/20170731/1501491788121134.mp4&quot; type=&quot;video/mp4&quot;/&gt;&lt;/video&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;				&lt;/p&gt;', '', '1501491835', 'root', '92', null, null, '0', null, null, '0', '', '21', '0', '9', '1501936204', '1', '1', '15', null);
INSERT INTO `news` VALUES ('163', '习近平在会见全国公安系统英雄模范立功集体表彰大会', '习近平在会见全国公安系统英雄模范立功集体表彰大会', null, '1502157742', null, '1', null, null, '1', null, null, '0', null, '1', '0', '30', '0', '1', '1', '0', null);
INSERT INTO `news` VALUES ('164', '陈润儿省长主持召开省政府常务会议对', '&lt;p&gt;					&lt;/p&gt;&lt;p&gt;\r\n					陈润儿省长主持召开省政府常务会议对				&lt;/p&gt;&lt;p&gt;陈润儿省陈润儿省长主持召开省政府常&lt;/p&gt;&lt;p&gt;务会议对陈润&lt;img src=&quot;/ueditor/php/upload/image/20170808/1502176282456395.jpg&quot; title=&quot;1502176282456395.jpg&quot; alt=&quot;%e5%9b%be%e7%89%87%e5%90%8d%e7%a7%b05.jpg&quot;/&gt;儿省长主持召开省政府常务会议对陈润儿省长主持召开省政府常务会议对陈润儿省长主持召开省政府常务会议对陈润儿省长主持召开省政府常务会议对陈润儿省长主持召开省政府常务会议对陈润儿省长主持召开省政府常务会议对陈润儿省长主持召开省政府常务会议对陈润儿省长主持召开省政府常务会议对长主持召开省政府常务会议对&lt;/p&gt;&lt;p&gt;				&lt;/p&gt;', '', '1502157745', 'root', '2', null, null, '1', null, null, '0', '', '1', '0', '33', '1502176283', '2', '1', '0', null);
INSERT INTO `news` VALUES ('165', '省政府召开高层建筑消防安全暨电气综合', '省政府召开高层建筑消防安全暨电气综合', null, '1502157742', null, '2', null, null, '1', null, null, '0', null, '2', '0', '13', '0', '3', '1', '0', null);
INSERT INTO `news` VALUES ('166', '周口支队举行“维护核心、听党指挥”主题教育暨', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170809/1502283057857150.png&quot; title=&quot;1502283057857150.png&quot; alt=&quot;github.png&quot;/&gt;&lt;/p&gt;', null, '1502283338', 'xhz', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '3', '0', '2', null);
INSERT INTO `news` VALUES ('167', '肖会中测试2', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170809/1502283799136208.png&quot; style=&quot;&quot; title=&quot;1502283799136208.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170809/1502283799167092.png&quot; style=&quot;&quot; title=&quot;1502283799167092.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170809/1502283799704430.jpg&quot; style=&quot;&quot; title=&quot;1502283799704430.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', null, '1502283817', 'xhz', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '2', '0', '2', null);
INSERT INTO `news` VALUES ('168', '周口支队举行“维护核心、听党指挥”主题教育暨', '&lt;p&gt;测试3肖会中测试3肖会中测试3肖会中测试3肖会中测试3肖会中测试3肖会中测试3肖会中&lt;/p&gt;', null, '1502286274', 'xhz', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '1', '0', '2', null);
INSERT INTO `news` VALUES ('169', '测试3肖会中', '&lt;p&gt;测试3肖会中测试3肖会中测试3肖会中测试3肖会中测试3肖会中测试3肖会中测试3肖会中&lt;/p&gt;', null, '1502286407', 'xhz', null, null, null, '0', null, null, '0', null, null, '0', '13', '0', '1', '3', '2', null);
INSERT INTO `news` VALUES ('170', '周口支队举行“维护核心、听党指挥”主题教育暨', '&lt;p&gt;测试4肖会中测试4肖会中测试4肖会中测试4肖会中测试4肖会中测试4肖会中测试4肖会中&lt;/p&gt;', null, '1502286496', 'xhz', null, null, null, '0', null, null, '0', null, null, '0', '3', '0', '4', '0', '2', null);
INSERT INTO `news` VALUES ('171', '测试5肖会中', '&lt;p&gt;测试5肖会中测试5肖会中测试5肖会中测试5肖会中&lt;/p&gt;', null, '1502286578', 'xhz', null, null, null, '0', null, null, '0', null, null, '0', '5', '0', '3', '0', '2', null);
INSERT INTO `news` VALUES ('172', '4564', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170810/1502366309137572.png&quot; title=&quot;1502366309137572.png&quot; alt=&quot;微信支付流程.png&quot;/&gt;&lt;/p&gt;', null, '1502366326', 'xhz', null, null, null, '0', null, null, '0', null, null, '0', '1', '0', '1', '0', '2', null);
INSERT INTO `news` VALUES ('173', 'erert', '&lt;p&gt;ertetr&lt;img src=&quot;/ueditor/php/upload/image/20170810/1502368738131862.jpg&quot; title=&quot;1502368738131862.jpg&quot; alt=&quot;218250-106.jpg&quot;/&gt;&lt;/p&gt;', null, '1502368742', 'xhz', null, null, null, '0', null, null, '0', null, null, '0', '3', '0', '3', '0', '2', null);
INSERT INTO `news` VALUES ('174', '实话实说和', '&lt;p&gt;是地方生活费&lt;img src=&quot;/news/ueditor/php/upload/image/20170812/1502523193103220.jpg&quot; title=&quot;1502523193103220.jpg&quot; alt=&quot;4586-106.jpg&quot; width=&quot;787&quot; height=&quot;833&quot; style=&quot;width: 787px; height: 833px;&quot;/&gt;&lt;/p&gt;', null, '1502523217', 'xhz', null, null, null, '0', null, null, '0', null, null, '0', '5', '0', '2', '0', '2', null);
INSERT INTO `news` VALUES ('175', '101', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '1', '1', '1', null);
INSERT INTO `news` VALUES ('176', '102', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '2', '1', '2', null);
INSERT INTO `news` VALUES ('177', '103', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '3', '1', '3', null);
INSERT INTO `news` VALUES ('178', '104', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '4', '1', '4', null);
INSERT INTO `news` VALUES ('179', '105', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '5', '1', '5', null);
INSERT INTO `news` VALUES ('180', '106', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '1', '1', '6', null);
INSERT INTO `news` VALUES ('181', '107', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '2', '1', '7', null);
INSERT INTO `news` VALUES ('182', '108', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '3', '1', '8', null);
INSERT INTO `news` VALUES ('183', '109', null, null, null, '40', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '4', '1', '9', null);
INSERT INTO `news` VALUES ('184', '110', null, null, null, '40', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '5', '1', '10', null);
INSERT INTO `news` VALUES ('185', '201', null, null, null, '40', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '1', '1', '1', null);
INSERT INTO `news` VALUES ('186', '202', null, null, null, '40', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '2', '1', '2', null);
INSERT INTO `news` VALUES ('187', '203', null, null, null, '40', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '3', '1', '3', null);
INSERT INTO `news` VALUES ('188', '204', null, null, null, '40', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '4', '1', '4', null);
INSERT INTO `news` VALUES ('189', '205', null, null, null, '40', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '5', '1', '5', null);
INSERT INTO `news` VALUES ('190', '206', null, null, '1', '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '1', '1', '6', null);
INSERT INTO `news` VALUES ('191', '207', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '2', '1', '7', null);
INSERT INTO `news` VALUES ('192', '208', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '3', '1', '8', null);
INSERT INTO `news` VALUES ('193', '209', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '4', '1', '9', null);
INSERT INTO `news` VALUES ('194', '210', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '5', '1', '10', null);
INSERT INTO `news` VALUES ('195', '301', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '1', '1', '1', null);
INSERT INTO `news` VALUES ('196', '302', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '2', '1', '2', null);
INSERT INTO `news` VALUES ('197', '303', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '3', '1', '3', null);
INSERT INTO `news` VALUES ('198', '304', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '4', '1', '4', null);
INSERT INTO `news` VALUES ('199', '305', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '5', '1', '5', null);
INSERT INTO `news` VALUES ('200', '306', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '1', '1', '6', null);
INSERT INTO `news` VALUES ('201', '307', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '2', '1', '7', null);
INSERT INTO `news` VALUES ('202', '308', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '3', '1', '8', null);
INSERT INTO `news` VALUES ('203', '309', null, null, '1', '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '4', '1', '9', null);
INSERT INTO `news` VALUES ('204', '310', null, null, null, '1', null, null, null, '0', null, null, '0', null, null, '0', '0', '0', '5', '1', '10', null);
INSERT INTO `news` VALUES ('205', 'video1', '&lt;p&gt;					&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;video class=&quot;edui-Upload-video  vjs-default-skin   video-js&quot; controls=&quot;&quot; preload=&quot;none&quot; width=&quot;242&quot; height=&quot;182&quot; src=&quot;/ueditor/php/upload/video/20170731/1501491788121134.mp4&quot; data-setup=&quot;{}&quot;&gt;&lt;source src=&quot;/ueditor/php/upload/video/20170731/1501491788121134.mp4&quot; type=&quot;video/mp4&quot;/&gt;&lt;/video&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;				&lt;/p&gt;\r\n', null, null, null, null, null, null, '0', null, null, '0', null, '21', '0', '0', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('206', 'video2', '&lt;p&gt;					&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;video class=&quot;edui-Upload-video  vjs-default-skin   video-js&quot; controls=&quot;&quot; preload=&quot;none&quot; width=&quot;242&quot; height=&quot;182&quot; src=&quot;/ueditor/php/upload/video/20170731/1501491788121134.mp4&quot; data-setup=&quot;{}&quot;&gt;&lt;source src=&quot;/ueditor/php/upload/video/20170731/1501491788121134.mp4&quot; type=&quot;video/mp4&quot;/&gt;&lt;/video&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;				&lt;/p&gt;\r\n', null, null, null, null, null, null, '0', null, null, '0', null, '21', '0', '0', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('207', 'video3', '&lt;p&gt;					&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;video class=&quot;edui-Upload-video  vjs-default-skin   video-js&quot; controls=&quot;&quot; preload=&quot;none&quot; width=&quot;242&quot; height=&quot;182&quot; src=&quot;/ueditor/php/upload/video/20170731/1501491788121134.mp4&quot; data-setup=&quot;{}&quot;&gt;&lt;source src=&quot;/ueditor/php/upload/video/20170731/1501491788121134.mp4&quot; type=&quot;video/mp4&quot;/&gt;&lt;/video&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;				&lt;/p&gt;\r\n', null, null, null, null, null, null, '0', null, null, '0', null, '21', '0', '0', '0', null, '1', '0', null);
INSERT INTO `news` VALUES ('208', 'gdgfdfgdgf', '&lt;p&gt;dfgdfgdfgdfgdgdfg&lt;/p&gt;', null, '1502587587', 'xhz', null, null, null, '0', null, null, '0', null, '7', '0', '3', '0', '4', '1', '2', null);
INSERT INTO `news` VALUES ('209', 'tetertert', '&lt;p&gt;ertetrertertetrert&lt;img src=&quot;/ueditor/php/upload/image/20170813/1502588581116405.jpg&quot; title=&quot;1502588581116405.jpg&quot; alt=&quot;zknu_logo.jpg&quot;/&gt;&lt;/p&gt;', null, '1502588583', 'xhz', null, null, null, '0', null, null, '0', null, '7', '0', '2', '0', '1', '1', '2', null);

-- ----------------------------
-- Table structure for news_cate
-- ----------------------------
DROP TABLE IF EXISTS `news_cate`;
CREATE TABLE `news_cate` (
  `cate_id` int(11) NOT NULL,
  `news_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_cate
-- ----------------------------

-- ----------------------------
-- Table structure for privilege
-- ----------------------------
DROP TABLE IF EXISTS `privilege`;
CREATE TABLE `privilege` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pri_name` varchar(30) NOT NULL COMMENT '权限名称',
  `module_name` varchar(10) NOT NULL COMMENT '模块名称',
  `controller_name` varchar(30) NOT NULL COMMENT '控制器名称',
  `action_name` varchar(20) NOT NULL COMMENT '方法名称',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '上级权限的ID，0：代表顶级权限',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8 COMMENT='权限表';

-- ----------------------------
-- Records of privilege
-- ----------------------------
INSERT INTO `privilege` VALUES ('2', '支队新闻列表', 'Admin', 'News', 'news_list', '1');
INSERT INTO `privilege` VALUES ('3', '添加新闻', 'Admin', 'News', 'news_add', '2');
INSERT INTO `privilege` VALUES ('1', '新闻', 'null', 'null', 'null', '0');
INSERT INTO `privilege` VALUES ('4', '修改新闻', 'Admin', 'News', 'news_edit', '2');
INSERT INTO `privilege` VALUES ('5', '删除新闻', 'Admin', 'News', 'news_del', '2');
INSERT INTO `privilege` VALUES ('34', '信箱管理', 'null', 'null', 'null', '0');
INSERT INTO `privilege` VALUES ('35', '信箱列表', 'Admin', 'Lmsg', 'lmsg_list', '34');
INSERT INTO `privilege` VALUES ('29', '文件管理', 'null', 'null', 'null', '0');
INSERT INTO `privilege` VALUES ('30', '文件列表', 'Admin', 'File', 'file_list', '29');
INSERT INTO `privilege` VALUES ('31', '文件添加', 'Admin', 'File', 'file_add', '29');
INSERT INTO `privilege` VALUES ('11', '管理员管理', 'null', 'null', 'null', '0');
INSERT INTO `privilege` VALUES ('12', '单位管理', 'Admin', 'role', 'lst', '11');
INSERT INTO `privilege` VALUES ('13', '单位添加', 'Admin', 'role', 'add', '12');
INSERT INTO `privilege` VALUES ('14', '单位编辑', 'Admin', 'role', 'edit', '12');
INSERT INTO `privilege` VALUES ('15', '单位删除', 'Admin', 'role', 'delete', '12');
INSERT INTO `privilege` VALUES ('16', '权限管理', 'Admin', 'privilege', 'lst', '11');
INSERT INTO `privilege` VALUES ('17', '权限添加', 'Admin', 'privilege', 'add', '16');
INSERT INTO `privilege` VALUES ('18', '权限删除', 'Admin', 'privilege', 'delete', '16');
INSERT INTO `privilege` VALUES ('19', '权限编辑', 'Admin', 'privilege', 'edit', '16');
INSERT INTO `privilege` VALUES ('20', '管理员管理', 'Admin', 'admin', 'lst', '11');
INSERT INTO `privilege` VALUES ('21', '管理员添加', 'Admin', 'admin', 'add', '20');
INSERT INTO `privilege` VALUES ('22', '管理员删除', 'Admin', 'admin', 'delete', '20');
INSERT INTO `privilege` VALUES ('23', '管理员编辑', 'Admin', 'admin', 'edit', '20');
INSERT INTO `privilege` VALUES ('6', '栏目管理', 'null', 'null', 'null', '0');
INSERT INTO `privilege` VALUES ('7', '栏目列表', 'Admin', 'Category', 'showlist', '6');
INSERT INTO `privilege` VALUES ('8', '栏目删除', 'Admin', 'Category', 'del', '7');
INSERT INTO `privilege` VALUES ('9', '栏目编辑', 'Admin', 'Category', 'edit', '7');
INSERT INTO `privilege` VALUES ('10', '栏目添加', 'Admin', 'Category', 'add', '7');
INSERT INTO `privilege` VALUES ('32', '文件编辑', 'Admin', 'File', 'file_edit', '30');
INSERT INTO `privilege` VALUES ('33', '文件删除', 'Admin', 'File', 'fileDel', '30');
INSERT INTO `privilege` VALUES ('36', '信箱查看审核', 'Admin', 'Lmsg', 'lmsg_view', '35');
INSERT INTO `privilege` VALUES ('37', '信箱列表回复', 'Admin', 'Lmsg', 'replay', '35');
INSERT INTO `privilege` VALUES ('38', '信箱列表删除', 'Admin', 'Lmsg', 'lmsg_del', '35');
INSERT INTO `privilege` VALUES ('39', '地区稿件管理', 'null', 'null', 'null', '0');
INSERT INTO `privilege` VALUES ('40', '部门新闻列表', 'Admin', 'Local', 'local_list', '39');
INSERT INTO `privilege` VALUES ('41', '新闻详情查看', 'Admin', 'Local', 'local_view', '40');
INSERT INTO `privilege` VALUES ('42', '新闻删除', 'Admin', 'Local', 'local_del', '40');
INSERT INTO `privilege` VALUES ('43', '新闻编辑', 'Admin', 'Local', 'local_edit', '40');
INSERT INTO `privilege` VALUES ('44', '新闻保存', 'Admin', 'Local', 'localEditSave', '40');
INSERT INTO `privilege` VALUES ('45', '新闻审核', 'Admin', 'Local', 'submit_success', '40');
INSERT INTO `privilege` VALUES ('46', '新闻审核回复', 'Admin', 'Local', 'replay', '40');
INSERT INTO `privilege` VALUES ('47', '信箱查看回复内容', 'Admin', 'Lmsg', 'replay_look', '34');
INSERT INTO `privilege` VALUES ('48', '通讯录上传', 'Admin', 'File', 'maillist_add', '29');
INSERT INTO `privilege` VALUES ('49', '信箱提交审核成功', 'Admin', 'Lmsg', 'submit_success', '35');
INSERT INTO `privilege` VALUES ('50', '信箱提交审核失败', 'Admin', 'Lmsg', 'submit_success', '35');
INSERT INTO `privilege` VALUES ('51', '信箱提交审核失败', 'Admin', 'Lmsg', 'replay_look', '35');
INSERT INTO `privilege` VALUES ('52', '批量删除新闻', 'Admin', 'News', 'batchDel', '2');
INSERT INTO `privilege` VALUES ('82', '文件批量删除', 'Admin', 'File', 'batchDel', '30');

-- ----------------------------
-- Table structure for privilege_role
-- ----------------------------
DROP TABLE IF EXISTS `privilege_role`;
CREATE TABLE `privilege_role` (
  `pri_id` int(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '权限id',
  `role_id` int(5) NOT NULL COMMENT '角色id',
  PRIMARY KEY (`pri_id`,`role_id`),
  KEY `role_id` (`role_id`),
  KEY `权限的id` (`pri_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='权利角色表';

-- ----------------------------
-- Records of privilege_role
-- ----------------------------
INSERT INTO `privilege_role` VALUES ('1', '1');
INSERT INTO `privilege_role` VALUES ('2', '1');
INSERT INTO `privilege_role` VALUES ('3', '1');
INSERT INTO `privilege_role` VALUES ('4', '1');
INSERT INTO `privilege_role` VALUES ('5', '1');
INSERT INTO `privilege_role` VALUES ('24', '1');
INSERT INTO `privilege_role` VALUES ('25', '1');
INSERT INTO `privilege_role` VALUES ('26', '1');
INSERT INTO `privilege_role` VALUES ('27', '1');
INSERT INTO `privilege_role` VALUES ('28', '1');
INSERT INTO `privilege_role` VALUES ('29', '1');
INSERT INTO `privilege_role` VALUES ('30', '1');
INSERT INTO `privilege_role` VALUES ('31', '1');
INSERT INTO `privilege_role` VALUES ('32', '1');
INSERT INTO `privilege_role` VALUES ('33', '1');
INSERT INTO `privilege_role` VALUES ('1', '2');
INSERT INTO `privilege_role` VALUES ('2', '2');
INSERT INTO `privilege_role` VALUES ('3', '2');
INSERT INTO `privilege_role` VALUES ('4', '2');
INSERT INTO `privilege_role` VALUES ('5', '2');
INSERT INTO `privilege_role` VALUES ('24', '2');
INSERT INTO `privilege_role` VALUES ('25', '2');
INSERT INTO `privilege_role` VALUES ('26', '2');
INSERT INTO `privilege_role` VALUES ('27', '2');
INSERT INTO `privilege_role` VALUES ('28', '2');
INSERT INTO `privilege_role` VALUES ('29', '2');
INSERT INTO `privilege_role` VALUES ('30', '2');
INSERT INTO `privilege_role` VALUES ('31', '2');
INSERT INTO `privilege_role` VALUES ('32', '2');
INSERT INTO `privilege_role` VALUES ('33', '2');
INSERT INTO `privilege_role` VALUES ('1', '3');
INSERT INTO `privilege_role` VALUES ('2', '3');
INSERT INTO `privilege_role` VALUES ('3', '3');
INSERT INTO `privilege_role` VALUES ('4', '3');
INSERT INTO `privilege_role` VALUES ('5', '3');
INSERT INTO `privilege_role` VALUES ('24', '3');
INSERT INTO `privilege_role` VALUES ('25', '3');
INSERT INTO `privilege_role` VALUES ('26', '3');
INSERT INTO `privilege_role` VALUES ('27', '3');
INSERT INTO `privilege_role` VALUES ('28', '3');
INSERT INTO `privilege_role` VALUES ('29', '3');
INSERT INTO `privilege_role` VALUES ('30', '3');
INSERT INTO `privilege_role` VALUES ('31', '3');
INSERT INTO `privilege_role` VALUES ('32', '3');
INSERT INTO `privilege_role` VALUES ('33', '3');
INSERT INTO `privilege_role` VALUES ('1', '4');
INSERT INTO `privilege_role` VALUES ('2', '4');
INSERT INTO `privilege_role` VALUES ('3', '4');
INSERT INTO `privilege_role` VALUES ('4', '4');
INSERT INTO `privilege_role` VALUES ('5', '4');
INSERT INTO `privilege_role` VALUES ('24', '4');
INSERT INTO `privilege_role` VALUES ('25', '4');
INSERT INTO `privilege_role` VALUES ('26', '4');
INSERT INTO `privilege_role` VALUES ('27', '4');
INSERT INTO `privilege_role` VALUES ('28', '4');
INSERT INTO `privilege_role` VALUES ('29', '4');
INSERT INTO `privilege_role` VALUES ('30', '4');
INSERT INTO `privilege_role` VALUES ('31', '4');
INSERT INTO `privilege_role` VALUES ('32', '4');
INSERT INTO `privilege_role` VALUES ('33', '4');

-- ----------------------------
-- Table structure for replay
-- ----------------------------
DROP TABLE IF EXISTS `replay`;
CREATE TABLE `replay` (
  `replay_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `replay_msg` varchar(255) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL COMMENT '回复的新闻id',
  `admin_id` int(11) DEFAULT NULL COMMENT '回复人id',
  `lmsg_id` int(11) DEFAULT NULL COMMENT '留言信息id',
  PRIMARY KEY (`replay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of replay
-- ----------------------------
INSERT INTO `replay` VALUES ('1', '你好啊', '90', null, null);
INSERT INTO `replay` VALUES ('4', '啊啊啊啊', null, null, null);
INSERT INTO `replay` VALUES ('5', '软碟通热特让他对方股份的股份', null, null, null);
INSERT INTO `replay` VALUES ('6', '的设备返回的到数据库经济法', null, null, null);
INSERT INTO `replay` VALUES ('7', '人体有人为法人发给对方', null, null, null);
INSERT INTO `replay` VALUES ('8', '无法认定是否', null, null, null);
INSERT INTO `replay` VALUES ('9', '是的是的', null, null, null);
INSERT INTO `replay` VALUES ('13', 'fghjh ', null, null, null);
INSERT INTO `replay` VALUES ('14', '规范施工方', null, null, null);
INSERT INTO `replay` VALUES ('15', '大叔大婶多', null, null, null);
INSERT INTO `replay` VALUES ('17', 'ffffff', null, null, null);
INSERT INTO `replay` VALUES ('18', 'ffff', null, null, null);
INSERT INTO `replay` VALUES ('20', '，你好，，你做的很完美', '94', '1', null);
INSERT INTO `replay` VALUES ('21', '很完美', '92', '4', null);
INSERT INTO `replay` VALUES ('22', '让他如何', null, null, null);
INSERT INTO `replay` VALUES ('23', '郭德纲', '93', '40', null);
INSERT INTO `replay` VALUES ('25', '胜多负少的水电费', '89', '1', null);
INSERT INTO `replay` VALUES ('26', '你还哦啊是', '94', null, null);
INSERT INTO `replay` VALUES ('27', '多岁的撒多', null, null, null);
INSERT INTO `replay` VALUES ('28', '第三方深深的', null, null, null);
INSERT INTO `replay` VALUES ('29', '奋斗开始奋斗', null, null, null);
INSERT INTO `replay` VALUES ('30', '是都回家', null, null, null);
INSERT INTO `replay` VALUES ('31', '好多撒会收到', null, '1', '5');
INSERT INTO `replay` VALUES ('32', '阿达撒打算', null, '1', '4');
INSERT INTO `replay` VALUES ('33', '都是对的是空号', '57', '1', null);
INSERT INTO `replay` VALUES ('34', '发斯蒂芬', null, '1', '2');
INSERT INTO `replay` VALUES ('35', 'skdhkjdsf ', '58', '1', null);

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(30) NOT NULL COMMENT '角色名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='管理员角色表';

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', '司令部门');
INSERT INTO `role` VALUES ('2', '政治处部门');
INSERT INTO `role` VALUES ('3', '后勤处部门');
INSERT INTO `role` VALUES ('4', '防火部门');
INSERT INTO `role` VALUES ('5', '宣传部门');
