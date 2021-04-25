<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Contract\DBQueryBuilder;
use AbstractFactory\Contract\DBQueryBuilderRepositoryInterface;
use AbstractFactory\Entity\Item;

class MongoDBQueryBuilderRepository extends MongoDBConnectionRepository
    implements DBQueryBuilderRepositoryInterface
{
    /**
     * @param Item $item
     * @return void
     */
    public function insert(Item $item): void
    {
        echo "Элемент добавлен в бд Mongo";
    }

    /**
     * @param Item $item
     * @return void
     */
    public function update(Item $item): void
    {
        echo "Элемент изменен в бд Mongo";
    }

    /**
     * @param Item $item
     * @return void
     */
    public function delete(Item $item): void
    {
        echo "Элемент удален из бд Mongo";
    }
}