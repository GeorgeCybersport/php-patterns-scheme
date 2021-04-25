<?php

namespace AbstractFactory\Contract;

use AbstractFactory\Entity\DBQueryBuiler;
use AbstractFactory\Entity\Item;

interface DBQueryBuilderRepositoryInterface{
    /**
     * @param Item $item
     * @return void
     */
    public function insert(Item $item);

    /**
     * @param Item $item
     * @return void
     */
    public function delete(Item $item);

    /**
     * @param Item $item
     * @return void
     */
    public function update(Item $item);
}