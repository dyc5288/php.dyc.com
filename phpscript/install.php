<?php

/**
 * 安装脚本
 * 
 * @author duanyunchao
 * @version $Id$
 */
/** 初始化 */
require '../init.php';

/* 调试模式 */
$flag = hlp_common::get_cmd_flag();

if (!empty($flag['help']))
{
    echo "php install.php -test 1" . PHP_EOL;
}

if (!empty($flag['test']))
{
    $number = 1;
    $sql    = "CREATE TABLE IF NOT EXISTS `%s` (
        `tid` int(11) NOT NULL DEFAULT '0' COMMENT 'ID',
        `test` varchar(50) NOT NULL DEFAULT '' COMMENT '内容',
        PRIMARY KEY (`tid`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='测试'";

    if ($flag['test'] == 1)
    {
        hlp_tool::create_table('test', $sql, $number);
    }
    else if ($flag['test'] == 2)
    {
        hlp_tool::drop_table('test', $number);
    }
}

echo "success" . PHP_EOL;
