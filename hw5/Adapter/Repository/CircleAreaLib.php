<?php


namespace Adapter\Repository;


use Adapter\Contract\CircleInterface;

class CircleAreaLib implements CircleInterface
{
    public function getArea(int $diagonal): void
    {
        $area = (M_PI * $diagonal**2)/4;

       echo 'площадь круга ' . $area;
   }
}