<?php
header("Content-type:text/html;charset=utf-8");
define('BASEDIR',__DIR__);

    function autoload($class){
        $dir =  str_replace('\\', '/',BASEDIR.'/'. $class) . '.class.php';
        //var_dump($dir);
        require("$dir");
    }
    spl_autoload_register('autoload');



