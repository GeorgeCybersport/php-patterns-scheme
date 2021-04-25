<?php


namespace Adapter\Repository;


use Adapter\Contract\SquareInterface;

class SquareAreaLib implements SquareInterface
{
    public function getArea(int $diagonal): void
    {
        $area = ($diagonal**2)/2;

        echo 'площадь квадрата ' . $area;
    }
}