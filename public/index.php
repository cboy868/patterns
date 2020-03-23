<?php

require __DIR__ . '/../vendor/autoload.php';


$strategy = new \src\Controller\StrategyController();

//调用类中的方法
$strategy->index();