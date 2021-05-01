<?php

declare(strict_types=1);

namespace Strategy\Contract;

interface PaymentInterface
{
    /**
     * @param $a
     * @param $b
     */
    public function pay(OrderInterface $a, OrderInterface $b): string;
}