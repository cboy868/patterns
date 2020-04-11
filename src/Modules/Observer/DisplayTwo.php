<?php
namespace src\Modules\Observer;

/**
 * 第二个观察者 
 */
class DisplayTwo implements ObserverInterface 
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
        echo "第二个展示版开始处理数据，这次用不一样的方式来处理数据";
        p($temperature);
    }
}