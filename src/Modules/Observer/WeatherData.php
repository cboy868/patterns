<?php

namespace src\Modules\Observer;

/**
 * 天气数据，角色是观察者要观察的对象，实现SubjectInterface接口
 */
class WeatherData implements SubjectInterface {

    private $observers = [];

    /**
     * 注册观察者
     *
     * @param ObserverInterface $ob
     * @return void
     */
    public function registerObserver(ObserverInterface $ob)
    {
        $obname = get_class($ob);
        $this->observers[$obname] = $ob;
        p("添加观观察者:" . $obname);
    }

    /**
     * 移除观察者
     *
     * @param ObserverInterface $ob
     * @return void
     */
    public function removeObserver(ObserverInterface $ob)
    {
        $obname = get_class($ob);
        unset($this->observers[$obname]);
        p("移除观观察者:" . $obname);
    }

    /**
     * 通知观察者
     *
     * @return void
     */
    public function notifyObserver()
    {
        foreach ($this->observers as $observer) {
            p("通知观察者:" . get_class($observer));
            $observer->update();
        }
    }

    /**
     * 提供数据信息
     *
     * @return void
     */
    public function getData()
    {
        return [
            "temperature" => 36.3,
         ];
    }
}