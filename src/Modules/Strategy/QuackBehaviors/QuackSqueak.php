<?php

namespace src\Modules\Strategy\QuackBehaviors;

use src\Modules\Strategy\QuackBehavior;

class QuackSqueak implements QuackBehavior {
    public function quack()
    {
        p("吱吱吱... 我就是传说中的Squeak ");
    }
}