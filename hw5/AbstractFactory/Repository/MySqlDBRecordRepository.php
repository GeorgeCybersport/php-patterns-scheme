<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Contract\DBRecordRepositoryInterface;

class MySqlDBRecordRepository extends MySqlDBConnectionRepository
    implements DBRecordRepositoryInterface
{
    public function getAllItems(): void
    {
        echo "Все элементы таблицы MySql";
    }
    public function getItemById(int $id): void
    {
        echo "Элемент с индексом $id из таблицы MySql";
    }
}