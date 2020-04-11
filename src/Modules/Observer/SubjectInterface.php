<?php
namespace src\Modules\Observer;

/**
 * 观察者模式要监控的主题
 */
interface SubjectInterface {

    /**
     * 注册观察者
     *
     * @param ObserverInterface $ob
     * @return void
     */
    public function registerObserver(ObserverInterface $ob);

    /**
     * 移除观察者
     *
     * @param ObserverInterface $ob
     * @return void
     */
    public function removeObserver(ObserverInterface $ob);

    /**
     * 通知观察者
     *
     * @return void
     */
    public function notifyObserver();


    /**
     * 获取数据
     *
     * @return void
     */
    public function getData();
}