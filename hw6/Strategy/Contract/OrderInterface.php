<?php

declare(strict_types=1);

namespace Strategy\Contract;

interface OrderInterface
{
    public function getId(): int;

    public function getSum(): float;

}