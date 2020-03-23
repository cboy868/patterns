<?php


namespace src\Modules\Strategy\Ducks;


use src\Modules\Strategy\Duck;

class DuckRedhead extends Duck
{
    public function display()
    {
        p("I'm ReadHead Duck");
    }
}