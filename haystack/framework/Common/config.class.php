<?php
namespace Core\Common;

class config
{
    public function __construct(){

    }

    public function get($name){
        if (!file_exists(CONFIG_PATH . $name . '.cfg.php')) {
            throw new Exception('No Config File!');
        }


    }
}