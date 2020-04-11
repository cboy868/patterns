<?php

namespace src\Controller;

use src\Modules\Observer\DisplayOne;
use src\Modules\Observer\DisplayTwo;
use src\Modules\Observer\WeatherData;

/**
 * 测试
 * Class StrategyController
 * @package src\Controller
 */
class ObserverController
{
    public function index()
    {
        //初始化
        $subject = new WeatherData;
        $ob1 = new DisplayOne($subject);
        $ob2 = new DisplayTwo($subject);

        //注册
        $subject->registerObserver($ob1);
        $subject->registerObserver($ob2);
        
        //通知
        $subject->notifyObserver();

        //移除观察者一
        $subject->removeObserver($ob1);

        //通知
        $subject->notifyObserver();
    }
}