<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Contract\DBRecordRepositoryInterface;

class MongoDBRecordRepository extends MongoDBConnectionRepository
    implements DBRecordRepositoryInterface
{
    public function getAllItems(): void
    {
        echo "Все элементы таблицы Mongo";
    }
    public function getItemById(int $id): void
    {
        echo "Элемент с индексом $id из таблицы Mongo";
    }
}