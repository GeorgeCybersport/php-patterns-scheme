<?php


namespace Strategy\Entity;


use Strategy\Contract\OrderInterface;

class Order implements OrderInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var float
     */
    private $sum;

    /**
     * Order constructor.
     * @param int $id
     * @param float $sum
     */
    public function __construct(int $id, float $sum)
    {
        $this->id = $id;
        $this->sum = $sum;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getSum(): float
    {
        return $this->sum;
    }



}