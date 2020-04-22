<?php
namespace src\Modules\Decorator;

/**
 * 黑咖啡
 */
class DarkRost extends BeverageContract
{

    public function __construct()
    {
        $this->description = "Dark rost Coffee";
    }

    public function cost()
    {
        return 30.1;
    }
}