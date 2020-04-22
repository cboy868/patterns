<?php
namespace src\Modules\Decorator;

/**
 * 基类，所有组件需要继承此类
 */
abstract class BeverageContract
{
    protected $description;

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * 抽象方法，所有子类需要实现价格计算
     *
     * @return void
     */
    abstract public function cost();
}