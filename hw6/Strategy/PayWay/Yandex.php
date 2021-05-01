<?php


namespace Strategy\PayWay;


use Strategy\Contract\OrderInterface;
use Strategy\Contract\PaymentInterface;

class Yandex implements PaymentInterface
{
    private $name = "Yandex";

    public function pay(OrderInterface $a, OrderInterface $b): string
    {
        return "Yandex";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}