-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-07-03 06:26:54
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chuangqiang`
--
CREATE DATABASE IF NOT EXISTS `chuangqiang` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `chuangqiang`;

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `art_title` varchar(100) DEFAULT '' COMMENT '//文章标题',
  `art_tag` varchar(100) DEFAULT '' COMMENT '//关键词',
  `art_description` varchar(255) DEFAULT '' COMMENT '//描述',
  `art_thumb` varchar(255) DEFAULT '' COMMENT '//缩略图',
  `art_content` text COMMENT '//内容',
  `art_time` int(11) DEFAULT '0' COMMENT '//发布时间',
  `art_editor` varchar(50) DEFAULT '' COMMENT '//作者',
  `art_view` int(11) DEFAULT '0' COMMENT '//查看次数',
  `cate_id` int(11) DEFAULT '0' COMMENT '//分类id',
  PRIMARY KEY (`art_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='//文章' AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`art_id`, `art_title`, `art_tag`, `art_description`, `art_thumb`, `art_content`, `art_time`, `art_editor`, `art_view`, `cate_id`) VALUES
(21, '上海数学中心筹建工作小组会议在复旦大学召开', '复旦大学，数字建设', '上海数学中心筹建工作小组会议在复旦大学召开', '', '上海数学中心筹建工作小组会议在复旦大学召开', 1460081601, 'whx', 2, 1),
(22, '华南理工大学广州国际校区启动建设', '启动建设，华南理工大学', '华南理工大学广州国际校区启动建设5月10日中\r国科\r     \r\n     学家2天发表4篇CNS文章5月7日李彦宏、刘强东\r高校捐款数亿，助力自主创新！5月2日中国最顶尖的\r青年科研人才，更喜欢去哪些城市？4月28日。', '', '华南理工大学广州国际校区启动建设5月10日中\r国科\r     \r\n     学家2天发表4篇CNS文章5月7日李彦宏、刘强东\r高校捐款数亿，助力自主创新！5月2日中国最顶尖的\r青年科研人才，更喜欢去哪些城市？4月28日。', 1460081668, 'whx', 2, 1),
(23, '中央马克思主义理论研\r究和建设工程咨询委员会主任徐光\r春一行调研复旦大学。', '调研，复旦大学', '5月12日，中央马克思主义理论研\r究和建设工程咨询委员会主任徐光\r春一行调研复旦大学。', '', '5月12日，中央马克思主义理论研\r究和建设工程咨询委员会主任徐光\r春一行调研复旦大学。', 1460081749, 'whx', 17, 1),
(1, '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '复旦大学,卢森堡大学', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', 1460081749, 'whx', 1, 1),
(2, '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '复旦大学,卢森堡大学', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', 1460081749, 'whx', 2, 1),
(16, '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '复旦大学,卢森堡大学', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', 1460081749, 'whx', 2, 1),
(17, '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '复旦大学,卢森堡大学', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', 1460081749, 'whx', 2, 1),
(18, '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '复旦大学,卢森堡大学', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', 1460081749, 'whx', 2, 1),
(19, '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '复旦大学,卢森堡大学', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', 1460081749, 'whx', 5, 1),
(20, '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '复旦大学,卢森堡大学', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', '', '复旦大学与卢森堡大学共建卢森堡大学孔子学院成立', 1460081749, 'whx', 2, 1),
(29, '我校与广州阿里云创新中心签约成立产业学院', '', '', '', '<p>我校与广州阿里云创新中心签约成立产业学院</p>', 1530294297, 'whx', 6, 1),
(30, '广东轻工职业技术学院顶岗实习安全及突发事件应急预案（试行）', '', '', '', '<p>广东轻工职业技术学院顶岗实习安全及突发事件应急预案（试行）</p>', 1530399997, 'whx', 29, 1),
(31, '我校荣获省市两级无偿献血促进奖', '献血', '献血', 'uploads/xianxie.jpg', '<p><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); line-height: 32px; font-family: 宋体;">6</span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); line-height: 32px; font-family: 宋体;">月29日上午，在佛山市政府机关大礼堂，由佛山市卫生和计划生育局、市红十字会联合举办2018年“世界献血者日”主题活动中，表彰了一批无偿献血事业的先进单位和个人，我校荣获“广东省2015-2016年度无偿献血促进奖”与“2016-2017年度佛山市无偿献血促进奖”称号</span></p><p><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); line-height: 32px; font-family: 宋体;"><span style="color: rgb(85, 85, 85); font-family: 宋体; text-indent: 32px; background-color: rgb(255, 255, 255);">我校是此次受表彰单位中献血量人数最多，献血量最大的单位。2016年献血人数达2639人，献血量达689151ml；2017年献血人数达2467人，献血量达713386ml；合计献血人数5160人，献血量达1402537ml。我校同时也是佛山地区唯一一所获得省级献血促进奖的高校。同一天，我校与佛山市中心血站签订“应急爱心血库”协议。（校团委）</span></span></p>', 1530581188, 'whx', 22, 8),
(32, '生态环境学院古树名木保护中心中标东莞市林业局项目', '树木', '园林树木', 'uploads/20180703042101506.jpg', '<p><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">近日获悉，生态环境技术学院古树名木保护中心在廖俊杰院长的带领下，参与了</span>2</span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: Calibri; line-height: 32px;">018</span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">年东莞市古树名木健康巡查及安全性评估项目投标，并以<span style="margin: 0px; padding: 0px;">2</span><span style="margin: 0px; padding: 0px; font-family: Calibri; line-height: 32px;">2</span><span style="margin: 0px; padding: 0px; line-height: 32px;"><span style="margin: 0px; padding: 0px;">万元</span></span>顺利中标。该</span></span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">项目主要是对东莞市</span>3</span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: Calibri; line-height: 32px;">900</span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">棵树进行健康巡查评估。</span></span></p><p><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">生态环境技术学院成立的古树名木保护研究中心，可开展古树保木保护健康与安全性评估技术研发、古树名木抢救复壮技术研发、古树名木保护教育与实训、古树名木保护科普教育等相关工作。中心成立以来首次对接社会投标服务，体现了</span></span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">生态环境技术学院的</span></span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">古树名木保护科研水平不断提升。</span></span></span></span></p><p><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">东莞市古树名木资源丰富，种类很多，保护古树名木对改善环境、加强<span style="margin: 0px; padding: 0px;">生态文明建设</span>、开展科学研究及科学普及工作都具有非常重要的意义。</span></span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">生态环境技术学院</span></span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">承接古树名木保护项目，一方面是紧密结合园林专业的特色，对接古树名木保护技术人才的需求，培养学生的专业技能，另一方面也是为落实立德树人根本任务，培育和践行社会主义核心价值观拓展了渠道和途径，进一步实现</span>“在实践中成长”的育人目标。</span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">生态环境学院将组织园林专业学生，结合暑期社会实践做好该项服务，保质保量完成项目任务。</span></span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">（</span></span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">生态环境技术学院</span><span style="margin: 0px; padding: 0px;">、科技处</span></span><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); text-indent: 32px; background-color: rgb(255, 255, 255); font-family: 宋体; line-height: 32px;"><span style="margin: 0px; padding: 0px;">）</span></span></span></span></span></span></p>', 1530590611, 'whx', 4, 10);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(50) DEFAULT '' COMMENT '//分类名称',
  `cate_title` varchar(255) DEFAULT '' COMMENT '//分类说明',
  `cate_keywords` varchar(255) DEFAULT '' COMMENT '//关键词',
  `cate_description` varchar(255) DEFAULT '' COMMENT '//描述',
  `cate_view` int(10) DEFAULT '0' COMMENT '//查看次数',
  `cate_order` tinyint(4) DEFAULT '0' COMMENT '//排序',
  `cate_pid` int(11) DEFAULT '0' COMMENT '//父级id',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='//文章分类' AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `cate_title`, `cate_keywords`, `cate_description`, `cate_view`, `cate_order`, `cate_pid`) VALUES
(1, '新闻', '新闻', '新闻', '', 5, 1, 0),
(2, '创强项目', '创强项目', '创强项目', '创强项目', 2, 2, 0),
(8, '热点新闻', '热点新闻', '', '', 3, 2, 1),
(10, '项目新闻', '项目新闻', '', '', 2, 2, 2);

-- --------------------------------------------------------

--
-- 表的结构 `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `conf_id` int(11) NOT NULL AUTO_INCREMENT,
  `conf_title` varchar(50) DEFAULT '' COMMENT '//标题',
  `conf_name` varchar(50) DEFAULT '' COMMENT '//变量名',
  `conf_content` text COMMENT '//变量值',
  `conf_order` int(11) DEFAULT '0' COMMENT '//排序',
  `conf_tips` varchar(255) DEFAULT '' COMMENT '//描述',
  `field_type` varchar(50) DEFAULT '' COMMENT '//字段类型',
  `field_value` varchar(255) DEFAULT '' COMMENT '//类型值',
  PRIMARY KEY (`conf_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `config`
--

INSERT INTO `config` (`conf_id`, `conf_title`, `conf_name`, `conf_content`, `conf_order`, `conf_tips`, `field_type`, `field_value`) VALUES
(1, '网站标题', 'web_title', '创强网', 1, '网站大众化标题', 'input', ''),
(2, '统计代码', 'web_count', '创强网', 3, '网站访问情况统计', 'textarea', ''),
(3, '网站状态', 'web_status', '1', 2, '网站开启状态', 'radio', '1|开启,0|关闭'),
(5, '辅助标题', 'seo_title', '创强网', 4, '对网站名称的补充', 'input', ''),
(6, '关键词', 'keywords', '创强网', 5, '', 'input', ''),
(7, '描述', 'description', '创强网', 6, '', 'textarea', ''),
(8, '版权信息', 'copyright', 'Design by 广东轻工职业技术学院 <a href="" target="_blank"></a>', 7, '', 'textarea', '');

-- --------------------------------------------------------

--
-- 表的结构 `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) DEFAULT NULL,
  `file_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `file`
--

INSERT INTO `file` (`file_id`, `file_name`, `file_type`) VALUES
(1, 'uploads/20180703040318596.jpg', 1),
(2, 'uploads/20180703042101506.jpg', 1);

-- --------------------------------------------------------

--
-- 表的结构 `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '//名称',
  `link_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '//标题',
  `link_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '//链接',
  `link_order` int(11) NOT NULL DEFAULT '0' COMMENT '//排序',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `links`
--

INSERT INTO `links` (`link_id`, `link_name`, `link_title`, `link_url`, `link_order`) VALUES
(7, '王和旭个人博客', '武陵人', 'http://www.wanghexu.cn', 1);

-- --------------------------------------------------------

--
-- 表的结构 `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_04_11_095342_create_links_table', 1),
('20180703', 0),
('2', 0);

-- --------------------------------------------------------

--
-- 表的结构 `navs`
--

CREATE TABLE IF NOT EXISTS `navs` (
  `nav_id` int(11) NOT NULL AUTO_INCREMENT,
  `nav_name` varchar(50) DEFAULT '' COMMENT '//名称',
  `nav_alias` varchar(50) DEFAULT '' COMMENT '//别名',
  `nav_url` varchar(255) DEFAULT '' COMMENT '//url',
  `nav_order` int(11) DEFAULT '0' COMMENT '//排序',
  PRIMARY KEY (`nav_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `navs`
--

INSERT INTO `navs` (`nav_id`, `nav_name`, `nav_alias`, `nav_url`, `nav_order`) VALUES
(1, '首页', 'Protal', 'http://', 1),
(2, '申报材料', '', 'http://', 2),
(3, '政策考核', '', 'http://', 3),
(4, '创强考核材料', '', 'http://', 4),
(5, '成果展示', '', 'http://', 5);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT '' COMMENT '//用户名',
  `user_pass` varchar(255) DEFAULT '' COMMENT '//密码',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='//管理员' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
