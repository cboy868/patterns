<?php
namespace src\Modules\Strategy\FlyBehaviors;

use src\Modules\Strategy\FlyBehavior;

class FlyNoWay implements FlyBehavior {
    public function fly()
    {
        p("sorry I can't fly");
    }
}