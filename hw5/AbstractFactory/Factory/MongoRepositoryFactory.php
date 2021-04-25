<?php

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\DBConnectionRepositoryInterface;
use AbstractFactory\Contract\DBQueryBuilderRepositoryInterface;
use AbstractFactory\Contract\DBRecordRepositoryInterface;
use AbstractFactory\Repository\MongoDBQueryBuilderRepository;
use AbstractFactory\Repository\MongoDBRecordRepository;
use AbstractFactory\Db\Mongo;

class MongoRepositoryFactory implements DBConnectionRepositoryInterface
{
    /**
     * @var Mongo
     */
    private $mongoConnection;

    /**
     * @param Mongo $mongoConnection
     */
    public function __construct(Mongo $mongoConnection)
    {
        $this->mongoConnection = $mongoConnection;
    }

    /**
     * @return DBQueryBuilderRepositoryInterface
     */
    public function createDBQueryBuilderRepository(): DBQueryBuilderRepositoryInterface{
        return new MongoDBQueryBuilderRepository($this->mongoConnection);
    }

    /**
     * @return DBRecordRepositoryInterface
     */
    public function createDBRecordRepository(): DBRecordRepositoryInterface
    {
        return new MongoDBRecordRepository($this->mongoConnection);
    }
}