<?php
namespace src\Modules\Decorator;

/**
 * 低卡咖啡
 */
class Decaf extends BeverageContract
{
    public function __construct()
    {
        $this->description = "Decaf Coffee";
    }

    public function cost()
    {
        return 17.5;
    }
}