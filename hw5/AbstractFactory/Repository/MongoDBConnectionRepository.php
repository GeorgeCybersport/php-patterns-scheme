<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Db\Mongo;

abstract class MongoDBConnectionRepository
{
    private $mongoConnection;

    /**
     * @param Mongo $MongoConnection
     */
    public function __construct(Mongo $MongoConnection)
    {
        $this->mongoConnection = $MongoConnection;
    }

    /**
     * @return Mongo $MongoConnection
     */
    public function getConnection(): Mongo
    {
        return $this->mongoConnection;
    }
}