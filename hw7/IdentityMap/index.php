<?php

use IdentityMap\Entity\Product;
use IdentityMap\EntityManager\EntityManager;
use IdentityMap\IdentityMap\IdentityMap;
use IdentityMap\Mapper\ProductMapper;
use IdentityMap\Storage\StorageAdapter;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^IdentityMap/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$entityManager = new EntityManager(
    new IdentityMap(),
    new ProductMapper(new StorageAdapter())
);

$product = $entityManager->findById(Product::class, 1);
echo "Под id 1 хранится пользователь с именем {$product->getName()}.\n";

$product2 = $entityManager->findById(Product::class, 1);
echo "Объект один: " . ($product === $product2 ? 'true' : 'false') . "\n";