<?php

namespace Strategy;

use Strategy\Payway\Qiwi;
use Strategy\Payway\WebMoney;
use Strategy\Payway\Yandex;
use Strategy\Entity\Order;
use Strategy\Service\OrderSorter;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Strategy/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$orders = [
    new Order(1, 500 ),
    new Order(2, 1000),
    new Order(3, 15.55),
    new Order(4, 133),
    new Order(5, 582),
];

function renderOrders(array $orders, $payWay)
{
    foreach ($orders as $order) {
        echo "id: {$order->getId()}\tsum: {$order->getSum()}" .
            "\tоплата: {$payWay->getName()}<br/>";
    }
}

$sorter = new OrderSorter(new Qiwi());

echo "--- Qiwi ---<br/>";
$qiwiPay = $sorter->getPay();
renderOrders($orders, $qiwiPay);

echo "--- WebMoney ---<br/>";
$webMoneyPay = $sorter->setPay(new WebMoney())->getPay();
renderOrders($orders, $webMoneyPay);

echo "--- Yandex ---<br/>";
$yandexPay = $sorter->setPay(new Yandex())->getPay();
renderOrders($orders, $yandexPay);