<?php


namespace src\Modules\Strategy\Ducks;


use src\Modules\Strategy\Duck;

class DuckDecoy extends Duck
{
    public function display()
    {
        p("I'm 诱饵鸭");
    }
}