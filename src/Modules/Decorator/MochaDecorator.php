<?php
namespace src\Modules\Decorator;

/**
 * 摩卡装饰
 */
class MochaDecorator extends CondimentDecoratorContract
{
    protected $beverage;

    /**
     * 初始化时，已确定用于装饰哪个coffee
     *
     * @param BeverageContract $beverageContract
     */
    public function __construct(BeverageContract $beverageContract)
    {
        $this->beverage = $beverageContract;
    }
    
    
    /**
     * 获取描述
     *
     * @return void
     */
    public function getDescription()
    {
        return $this->beverage->getDescription(). ", Mocha";
    }

    /**
     * 计算价钱
     *
     * @return void
     */
    public function cost()
    {
        return $this->beverage->cost() + 0.1;
    }
}