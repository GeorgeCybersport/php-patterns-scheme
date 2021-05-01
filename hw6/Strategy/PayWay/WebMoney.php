<?php


namespace Strategy\PayWay;


use Strategy\Contract\OrderInterface;
use Strategy\Contract\PaymentInterface;

class WebMoney implements PaymentInterface
{
    private $name = "WebMoney";

    public function pay(OrderInterface $a, OrderInterface $b): string
    {
        return "WebMoney";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}