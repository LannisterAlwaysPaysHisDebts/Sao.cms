<?php
namespace Core;

// 时区限制
ini_set('date.timezone', 'Asia/Shanghai');

// // 基础配置文件加载
$baseCfg = dirname(__DIR__) . '/config/base.cfg.php';
$baseCfg = require $baseCfg;
foreach($baseCfg as $key => $value) {
 define($key, $value);
}

// 自动加载类
require __DIR__ . '/Library/Load.php';
Load::register();
