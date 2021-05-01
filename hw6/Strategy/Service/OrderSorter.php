<?php


namespace Strategy\Service;


use Strategy\Contract\PaymentInterface;

class OrderSorter
{
    /**
     * @var PaymentInterface
     */
    private $payWay;

    /**
     * OrderSorter constructor.
     * @param PaymentInterface $payWay
     */
    public function __construct(PaymentInterface $payWay)
    {
        $this->payWay = $payWay;
    }

    public function getPay(): PaymentInterface
    {
        return $this->payWay;
    }

    public function setPay(PaymentInterface $payWay): self
    {
        $this->payWay = $payWay;
        return $this;
    }
}