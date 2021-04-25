<?php


namespace Decorator\Service;


use Decorator\Contract\NotificationInterface;
use Decorator\Repository\MessageSender;

class UserService implements NotificationInterface
{
    private $messageSender;

    public function __construct(MessageSender $messageSender)
    {
        $this->messageSender=$messageSender;
    }

    public function send(): void
    {
        $this->messageSender->send();
    }
}