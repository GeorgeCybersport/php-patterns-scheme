<?php


namespace IdentityMap\Storage;

use IdentityMap\Contract\StorageAdapterInterface;

class StorageAdapter implements StorageAdapterInterface
{
    /**
     * В методе происходит поиск данных в БД по id.
     * @param int $id
     * @return array|null
     */
    public function find(int $id): ?array
    {
        // Сделаем имитацию поиска.
        if ($id === 1) {
            return [
                'id' => 1,
                'name' => 'PHP',
                'price' => 15300
            ];
        }
        return null;
    }
}