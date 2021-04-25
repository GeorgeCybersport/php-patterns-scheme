<?php

namespace Decorator\Contract;

/**
 * Interface Notifiable Интерфейс для сущности, которую можно оповестить.
 */
interface NotifiableInterface
{
    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @return string
     */
    public function getPhone(): string;
}