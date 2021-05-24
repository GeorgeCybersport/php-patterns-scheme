<?php

namespace IdentityMap\Contract;

interface ProductInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getPrice(): float;

    public function toArray(): array;
}