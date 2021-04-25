<?php


namespace AbstractFactory\Service;


use AbstractFactory\Contract\DBConnectionRepositoryInterface;
use AbstractFactory\Entity\Item;

class Service
{
    private $table;
    private $selector;

    public function __construct(DBConnectionRepositoryInterface $repositoryFactory)
    {
        $this->table = $repositoryFactory->createDBQueryBuilderRepository();
        $this->selector = $repositoryFactory->createDBRecordRepository();
    }

    public function addItem(): void
    {
        $item = new Item();
        $this->table->insert($item);
    }

    public function updateItem(): void
    {
        $item = new Item();
        $this->table->update($item);
    }

    public function deleteItem(): void
    {
        $item = new Item();
        $this->table->delete($item);
    }

    public function showItems(): void
    {
        $this->selector->getAllItems();
    }

    public function showItemById(int $id): void
    {
        $this->selector->getItemById($id);
    }
}