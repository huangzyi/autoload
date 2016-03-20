<?php

namespace Hero\Arms;


class ARM1{
    protected $attack = "X"; // X不得超过10
    protected $recycle = 1;

    /* 随机化字符串，可以测试你的实例化对象是否已经静态化 */
    public static $random = "random";

    static public function run() {
        echo "ARM1";
        /*
        * 返回当前类的实例化对象
        * 请使用单例模式
        * @link http://www.phptherightway.com/pages/Design-Patterns.html
        * @link http://dwtedx.com/itshare_355.html
        * 关于单例模式的好处，请自行了解
        */
         if(!(self::$random instanceof self)){
            self::$random = new self;
        }
		return self::$random;

	}
    private function __construct(){

	}
     static public function  test(){
        echo "调用方法成功";
    }


    public function __clone(){
        trigger_error("Clone is not allow!",E_USER_ERROR);
	}
}
