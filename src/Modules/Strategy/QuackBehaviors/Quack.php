<?php

namespace src\Modules\Strategy\QuackBehaviors;

use src\Modules\Strategy\QuackBehavior;

class Quack implements QuackBehavior {
    public function quack()
    {
        p("Hi 我就是只普通的鸭子，我叫起来呱呱响... ");
    }
}