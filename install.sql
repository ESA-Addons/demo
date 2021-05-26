DROP TABLE IF EXISTS `{$prefix}demo_table`;
CREATE TABLE IF NOT EXISTS `{$prefix}demo_table` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `pfid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '平台ID',
    `input` varchar(50) NOT NULL DEFAULT '' COMMENT '普通输入框',
    `icon` varchar(50) NOT NULL DEFAULT '' COMMENT '图标',
    `globe` varchar(50) NOT NULL DEFAULT '' COMMENT '经纬度',
    `eea` text COMMENT '电子围栏',
    `selectpage` varchar(100) NOT NULL DEFAULT COMMENT 'SelectPage',
    `linkage` varchar(100) NOT NULL DEFAULT COMMENT '多级联动',
    `image` varchar(100) NOT NULL DEFAULT '' COMMENT '单图',
    `images` varchar(256) NOT NULL DEFAULT '' COMMENT '多图',
    `file` varchar(100) NOT NULL DEFAULT '' COMMENT '单文件',
    `files` varchar(256) NOT NULL DEFAULT '' COMMENT '多文件',
    `textarea` varchar(500) NOT NULL DEFAULT '' COMMENT '文本',
    `editor` varchar(500) NOT NULL DEFAULT '' COMMENT '富文本',
    `create_time` datetime DEFAULT '1000-01-01 00:00:00' COMMENT '时间',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COMMENT='示例应用-测试表';