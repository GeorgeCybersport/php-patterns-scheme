<?php


namespace AbstractFactory\Factory;

use AbstractFactory\Db\MySql;
use AbstractFactory\Contract\DBConnectionRepositoryInterface;
use AbstractFactory\Contract\DBQueryBuilderRepositoryInterface;
use AbstractFactory\Contract\DBRecordRepositoryInterface;
use AbstractFactory\Repository\MySqlDBQueryBuilderRepository;
use AbstractFactory\Repository\MySqlDBRecordRepository;

class MySqlRepositoryFactory implements DBConnectionRepositoryInterface
{
    /**
     * @var MySql
     */
    private $mySqlConnection;

    /**
     * @param MySql $mySqlConnection
     */
    public function __construct(MySql $mySqlConnection)
    {
        $this->mySqlConnection = $mySqlConnection;
    }

    /**
     * @return DBQueryBuilderRepositoryInterface
     */
    public function createDBQueryBuilderRepository(): DBQueryBuilderRepositoryInterface{
        return new MySqlDBQueryBuilderRepository($this->mySqlConnection);
    }

    /**
     * @return DBRecordRepositoryInterface
     */
    public function createDBRecordRepository(): DBRecordRepositoryInterface
    {
        return new MySqlDBRecordRepository($this->mySqlConnection);
    }
}