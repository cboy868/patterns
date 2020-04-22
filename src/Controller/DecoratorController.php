<?php

namespace src\Controller;

use src\Modules\Decorator\CondimentPrettyPrint;
use src\Modules\Decorator\DarkRost;
use src\Modules\Decorator\HouseBlend;
use src\Modules\Decorator\MilkDecorator;
use src\Modules\Decorator\MochaDecorator;

/**
 * 测试
 * Class StrategyController
 * @package src\Controller
 */
class DecoratorController
{
    public function index()
    {
        //初始化
        $darkRost = new DarkRost();
        //加入牛奶
        $darkRost = new MilkDecorator($darkRost);
        //加入摩卡
        $darkRost = new MochaDecorator($darkRost);

        p($darkRost->getDescription(). " $". $darkRost->cost());


        //初始化
        $houseBlend = new HouseBlend();
        //加入牛奶
        $houseBlend = new MilkDecorator($houseBlend);
        //加入摩卡
        $houseBlend = new MochaDecorator($houseBlend);
        //再次加入牛奶
        $houseBlend = new MilkDecorator($houseBlend);
        
        p($houseBlend->getDescription(). " $". $houseBlend->cost());
    }
}