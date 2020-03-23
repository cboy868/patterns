<?php

namespace src\Modules\Strategy\QuackBehaviors;
use src\Modules\Strategy\QuackBehavior;

class QuackMute implements QuackBehavior {
    public function quack()
    {
        p("Sorry 我是Mute，我可不会叫。");
    }
}