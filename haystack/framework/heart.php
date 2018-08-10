<?php
// 基础配置文件加载
$baseCfg = dirname(__DIR__) . '/config/base.cfg.php';
$baseCfg = require $baseCfg;
foreach($baseCfg as $key => $value) {
    define($key, $value);
}

// 时区限制
ini_set('date.timezone', 'Asia/Shanghai');

// 自动加载
spl_autoload_register(function($class) {
    static $class_map = [];

    if (!isset($class_map[$class])) {
        $class = strstr($class, '\\', DIRECTORY_SEPARATOR);
        
        $class_file = strpos($class, 'core') === 0 ? CORE_PATH : APP_PATH;

    }
});

