<?php


namespace IdentityMap\IdentityMap;


use IdentityMap\Contract\ProductInterface;

class IdentityMap
{
    /**
     * Массив со всеми сохраненными объектами, которые достали из базы данных.
     * @var array
     */
    private $identityMap = [];

    /**
     * Добавляет в массив $identityMap новый объект.
     * В данном случае используется id, в реальных примерах часто используется
     * кеш объекта, для того чтоб отследить был ли такой объект уже запрошен.
     * @param ProductInterface $obj
     */
    public function add(ProductInterface $obj)
    {
        $key = $this->getGlobalKey(get_class($obj), $obj->getId());
        $this->identityMap[$key] = $obj;
    }

    /**
     * Ищет в массиве объект.
     * @param string $classname
     * @param int $id
     * @return mixed|null
     */
    public function find(string $classname, int $id)
    {
        $key = $this->getGlobalKey($classname, $id);
        if (isset($this->identityMap[$key])) {
            return $this->identityMap[$key];
        }
        return null;
    }

    /**
     * Возвращает ключ для хранения в массиве $identityMap, который собирается
     * из класса и id нашего объекта.
     * @param string $classname
     * @param int $id
     * @return string
     */
    private function getGlobalKey(string $classname, int $id)
    {
        return sprintf('%s.%d', $classname, $id);
    }
}