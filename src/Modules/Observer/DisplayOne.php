<?php
namespace src\Modules\Observer;

/**
 * 第一个观察者
 */
class DisplayOne implements ObserverInterface 
{
    private $subject;
    public function __construct(SubjectInterface $subject)
    {
        $this->subject = $subject;
    }
    /**
     * 主题数据变化后，通知到此方法
     *
     * @return void
     */
    public function update()
    {
        $this->processData();
    }


    /**
     * 处理数据 去主题中拉取数据，并处理 
     *
     * @return void
     */
    public function processData()
    {
        $temperature = $this->subject->getData();
        echo "第一个展示版开始处理数据";
        p($temperature);
    }
}