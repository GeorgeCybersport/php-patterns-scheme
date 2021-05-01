<?php

namespace Observer\Observer;

use SplObserver;

class User implements SplObserver
{
    private $name;

    private $email;

    private $experience;

    public function __construct(string $name, string $email, string $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function update($subject): void
    {
        echo "Освободилась вакансия. '{$this->name}', время попробовать свои силы.\n";
    }
}