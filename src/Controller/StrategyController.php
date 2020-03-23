<?php

namespace src\Controller;


use src\Modules\Strategy\Ducks\DuckDecoy;
use src\Modules\Strategy\Ducks\DuckMallard;
use src\Modules\Strategy\Ducks\DuckRedhead;
use src\Modules\Strategy\Ducks\DuckRubber;
use src\Modules\Strategy\FlyBehaviors\FlyNoWay;
use src\Modules\Strategy\FlyBehaviors\FlyWithWings;
use src\Modules\Strategy\QuackBehaviors\Quack;
use src\Modules\Strategy\QuackBehaviors\QuackMute;
use src\Modules\Strategy\QuackBehaviors\QuackSqueak;

/**
 * 测试
 * Class StrategyController
 * @package src\Controller
 */
class StrategyController
{
    public function index()
    {
        $duckMallard = new DuckMallard();
        $duckMallard->display();
        $duckMallard->setFlyBehavior(new FlyWithWings());
        $duckMallard->performFly();
        $duckMallard->setQuackBehavior((new Quack()));
        $duckMallard->performQuack();

        $duckReadHead = new DuckRedhead();
        $duckReadHead->display();
        $duckReadHead->setFlyBehavior(new FlyWithWings());
        $duckReadHead->performFly();
        $duckReadHead->setQuackBehavior((new Quack()));
        $duckReadHead->performQuack();

        $duckRubber = new DuckRubber();
        $duckRubber->display();
        $duckRubber->setFlyBehavior(new FlyWithWings());
        $duckRubber->performFly();
        $duckRubber->setQuackBehavior((new QuackSqueak()));
        $duckRubber->performQuack();


        $duckDecoy = new DuckDecoy();
        $duckDecoy->display();
        $duckDecoy->setFlyBehavior(new FlyNoWay());
        $duckDecoy->performFly();
        $duckDecoy->setQuackBehavior((new QuackMute()));
        $duckDecoy->performQuack();

    }
}