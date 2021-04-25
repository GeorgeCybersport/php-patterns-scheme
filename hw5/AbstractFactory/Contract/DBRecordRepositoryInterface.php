<?php

namespace AbstractFactory\Contract;

interface DBRecordRepositoryInterface{


    public function getAllItems(): void;

    /**
     * @param int $id
     */
    public function getItemById(int $id): void;

}