<?php

$path = "/Users/";

$dir = new DirectoryIterator($path);

$dir->next();
$dir->next();
$dir->next();
$dir->next();
$dir->next();
$dir->next();

echo  $dir->current()->getPathname() . "<br/>";

foreach ($dir as $item){
    echo $item->getFilename() . "<br/>";
}

