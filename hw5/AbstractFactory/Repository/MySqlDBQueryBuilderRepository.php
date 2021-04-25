<?php


namespace AbstractFactory\Repository;

use AbstractFactory\Contract\DBQueryBuilder;
use AbstractFactory\Contract\DBQueryBuilderRepositoryInterface;
use AbstractFactory\Entity\Item;

class MySqlDBQueryBuilderRepository extends MySqlDBConnectionRepository
    implements DBQueryBuilderRepositoryInterface
{
    /**
     * @param Item $item
     * @return void
     */
    public function insert(Item $item): void
    {
        echo "Элемент добавлен в бд MySql". PHP_EOL;
    }

    /**
     * @param Item $item
     * @return void
     */
    public function update(Item $item): void
    {
        echo "Элемент изменен в бд MySql". PHP_EOL;
    }

    /**
     * @param Item $item
     * @return void
     */
    public function delete(Item $item): void
    {
        echo "Элемент удален из бд MySql". PHP_EOL;
    }
}