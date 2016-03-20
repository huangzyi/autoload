<?php

use Hero\Arms\ARM1 as ARM1;
use Hero\Power\XPower as X;
include('Hero/Main.class.php');
abstract class fighting extends Main{
     static function equip(
        /*
         * 在这里你需要调用ARM-NAME和XPower的run方法
         * 同时将返回的实例化对象保存在$army和$x下。
         * @example $army = ['ARM-NAME' => (class), ...]
         * $x = (class);
         */
    )
    {
        // TODO: Implement equip() method.
        PARENT::call();
        Hero\Arms\ARM1::run();
        X::run();

    }
    static function attack(

    )
    {
        // TODO: Implement attack() method.
    }
    static function defend()
    {
        // TODO: Implement defend() method.
    }
    public function __construct()
    {
        self::equip();
        self::attack();
        self::defend();
    }
}