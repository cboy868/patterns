<?php


namespace src\Modules\Strategy\Ducks;


use src\Modules\Strategy\Duck;

class DuckMallard extends Duck
{
    public function display()
    {
        p("I'm Mallard Duck");
    }
}