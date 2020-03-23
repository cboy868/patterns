<?php
namespace src\Modules\Strategy\FlyBehaviors;

use src\Modules\Strategy\FlyBehavior;

class FlyWithWings implements FlyBehavior {
    public function fly()
    {
        p("Oh It's fly time");
    }
}