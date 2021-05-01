<?php

namespace Observer;

use Observer\Entity\Vacancy;
use Observer\Observer\User;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Observer/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$users = [];
$users[] = new User("Igor", "voitenko@mail.ru", "2 years");
$users[] = new User("Alex", "alex@mail.ru", "1 years");
$users[] = new User("Kirill", "kirill@mail.ru", "3 years");

$vacancies = [new Vacancy(), new Vacancy()];


foreach ($vacancies as $vacancy) {
    foreach ($users as $user) {
        $vacancy->attach($user);
    }
}

foreach ($vacancies as $vacancy){
    $vacancy->detach($users[0]);
}

$vacancy->notify();

