<?php
/**
 * Created by PhpStorm.
 * User: huangzyi
 * Date: 2016/3/17
 * Time: 0:31
 */
namespace Hero;
/* ARM-NAME可能会存在多个 */
use  Hero\Arms\ARM1;
use  Hero\Power\XPower as X;

abstract class Main extends Hero{

    /* 血量 */
    private 	$health = 100;
    /* 装备 */
    private  	$army = [];
    /* 能力 */
    private $x = null;

    /* 姓名 */
    protected $name = '';
    /* 攻击力 */
    protected $attack = 10;
    /* 防御力 */
    protected $defence = 5;

    abstract public function run(
        /*  */
    );
    static public function call(){
        include ('../autoload.php');
    }
    static abstract public function equip(
    /*
     * 在这里你需要调用ARM-NAME和XPower的run方法
     * 同时将返回的实例化对象保存在$army和$x下。
     * @example $army = ['ARM-NAME' => (class), ...]
     * $x = (class);
     */
    );
    function __construct()
    {
        $this->call();
    }

    static abstract public function attack(
        /*  */
    );

    static abstract public function defend();

    public function __call(){
        throw new InvalidArgumentException;
    }

    public function __toString() {
        return 'Hero Name: ' . $this->name . ' Attack: ' . $this->attack . ' Defence: ' . $this->defence;
       }
}

