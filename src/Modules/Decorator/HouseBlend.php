<?php
namespace src\Modules\Decorator;

/**
 * 招牌咖啡
 */
class HouseBlend extends BeverageContract
{
    public function __construct()
    {
        $this->description = "HouseBlend Coffee";
    }

    public function cost()
    {
        return 20.5;
    }
}