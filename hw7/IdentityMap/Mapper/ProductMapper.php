<?php


namespace IdentityMap\Mapper;

use IdentityMap\Contract\StorageAdapterInterface;
use IdentityMap\Entity\Product;

class ProductMapper
{
    /**
     * @var StorageAdapterInterface
     */
    private $storageAdapter;

    /**
     * ProductMapper constructor.
     * @param StorageAdapterInterface $storage
     */
    public function __construct(StorageAdapterInterface $storage)
    {
        $this->storageAdapter = $storage;
    }

    /**
     * @param int $id
     * @return Product
     */
    public function findById(int $id): Product
    {
        $result = $this->storageAdapter->find($id);

        if ($result === null) {
            return null;
        }

        return $this->mapRowToUser($result);
    }

    /**
     * @param array $row
     * @return Product
     */
    private function mapRowToUser(array $row): Product
    {
        return new Product($row['id'], $row['name'], $row['price']);
    }
}