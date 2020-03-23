<?php


namespace src\Modules\Strategy\Ducks;


use src\Modules\Strategy\Duck;

class DuckRubber extends Duck
{
    public function display()
    {
        p("I'm Rubber Duck");
    }
}