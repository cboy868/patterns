<?php

namespace src\Modules\Strategy;


abstract class Duck{
    protected $flyBehavior;
    protected $quackBehavior;

    abstract function display();

    public function performFly(){
        $this->flyBehavior->fly();
    }

    public function performQuack(){
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        p("All Ducks float");
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior){
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior) {
        $this->quackBehavior = $quackBehavior;
    }
}