set names utf8;
#  初始化数据

create database `dnf_statistics` default charset utf8;

use dnf_statistics;

create table `item` (
    `id` int(11) not null auto_increment,
    `name` varchar(255) not null default '' comment '名称',
    `item_id` int(11) not null default 0 comment '',
    `tasks_id` varchar(255) not null default '' comment '任务ID',
    `pirority` tinyint(4) not null default 0 comment '优先级',
    `c_t` int(11) not null default 0,
    `u_t` int(11) not null default 0,
    primary key (`id`),
    key `idx_name`(`name`)
)engine=Innodb default charset=utf8 comment='商品表';

create table `auction_price` (
    `id` int(11) not null auto_increment,
    `item_id` int(11) not null default 0,
    `time` int(11) not null default 0 comment '统计时间',
    `min_price` int(11) not null default 0 comment '最小价',
    `min_count` int(11) not null default 0 comment '最小价对应的数量',
    `max_price` int(11) not null default 0 comment '最大价',
    `max_count` int(11) not null default 0 comment '最大价对应的数量',
    `avg_price` int(11) not null default 0 comment '平均价，大概的',
    `avg_count` int(11) not null default 0 comment '平均价对应数量',
    `auction_time` tinyint(4) not null default 0 comment '拍卖剩余时间',
    `c_t` int(11) not null default 0,
    `u_t` int(11) not null default 0,
    primary key (`id`),
    key `idx_item_time` (`item_id`, `time`)
)engine=Innodb default charset=utf8 comment='拍卖行当前物品信息表';



