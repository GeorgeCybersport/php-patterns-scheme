<?php

use Adapter\Repository\CircleAreaLib;
use Adapter\Repository\SquareAreaLib;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Adapter/', '', $className);
    require_once __DIR__ . $className . '.php';
});

function countArea(array $figures)
{
    foreach ($figures as $figure) {
        $figure->getArea(23);
    }
}

$figures = [
    new CircleAreaLib(),
    new SquareAreaLib()
];

countArea($figures);
