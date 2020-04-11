<?php

require __DIR__ . '/../vendor/autoload.php';


$patterns = [
    //策略
    "strategy" => new \src\Controller\StrategyController(),
    //观察者
    "observer" => new \src\Controller\ObserverController()
];
//调用类中的方法


foreach ($patterns as $k => $pattern) {
    p("\n\n\n\n");
    p($k."模式代码开始测试");
    p("^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^");
    $pattern->index();
    p("======================".$k."模式代码结束测试=============");
}
