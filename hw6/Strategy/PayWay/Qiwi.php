<?php


namespace Strategy\PayWay;


use Strategy\Contract\OrderInterface;
use Strategy\Contract\PaymentInterface;

class Qiwi implements PaymentInterface
{
    private $name = "Qiwi";

    public function pay(OrderInterface $a, OrderInterface $b): string
    {
        return "Qiwi";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}