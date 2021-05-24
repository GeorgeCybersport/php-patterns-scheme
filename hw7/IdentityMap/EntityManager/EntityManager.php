<?php

declare(strict_types=1);

namespace IdentityMap\EntityManager;

use IdentityMap\Contract\ProductInterface;
use IdentityMap\IdentityMap\IdentityMap;
use IdentityMap\Mapper\ProductMapper;

/**
 * Class EntityManager Пример класса, который будет работать с IdentityMap
 * и с базой данных, если в IdentityMap не будет сущности, которую ищем.
 * @package IdentityMap\EntityManager
 */
class EntityManager
{
    /**
     * @var IdentityMap
     */
    private $identityMap;

    /**
     * @var ProductMapper
     */
    private $productMapper;

    /**
     * EntityManager constructor.
     * @param IdentityMap $identityMap
     * @param ProductMapper $productMapper
     */
    public function __construct(
        IdentityMap $identityMap,
        ProductMapper $productMapper
    ) {
        $this->identityMap = $identityMap;
        $this->productMapper = $productMapper;
    }

    /**
     * @param string $class
     * @param int $id
     * @return mixed|null
     */
    public function findById(string $class, int $id)
    {
        // Сначала ищем в хранилище.
        /** @var ProductInterface $entity */
        $entity = $this->identityMap->find($class, $id);
        // Если в хранилище нашли объект, возвращаем его.
        if ($entity !== null) {
            return $entity;
        }
        // Если в хранилище объекта нет, то ищем его в базе данных.
        // Здесь для упрощения используется только ProductMapper, конечно в
        // реальном проекте будут не только пользователи, там используется более
        // сложная конструкция EntityManager.
        $entity = $this->productMapper->findById($id);
        // Если в базе нет такого значения, то возвращаем null.
        if ($entity === null) {
            return null;
        }
        // Если в базе оказалось значение, сохраняем его в хранилище.
        $this->identityMap->add($entity);
        // Возвращаем объект.
        return $entity;
    }
}