<?php

use Decorator\Service\UserService;
use \Decorator\Repository\MessageSender;
use \Decorator\Entity\User;
use \Decorator\Service\PhoneApi;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Decorator/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$userService = new UserService(new MessageSender(new User("aaaa123", "1233"), "телефонный номер", "текст сообщения", null));

$userService->send();