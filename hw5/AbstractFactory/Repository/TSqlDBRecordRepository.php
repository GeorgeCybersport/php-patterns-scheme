<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Contract\DBRecordRepositoryInterface;

class TSqlDBRecordRepository extends TSqlDBConnectionRepository
    implements DBRecordRepositoryInterface
{
    public function getAllItems(): void
    {
        echo "Все элементы таблицы TSql";
    }

    public function getItemById(int $id): void
    {
        echo "Элемент с индексом $id из таблицы TSql";
    }
}