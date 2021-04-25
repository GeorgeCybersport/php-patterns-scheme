<?php


namespace AbstractFactory\Factory;

use AbstractFactory\Db\TSql;
use AbstractFactory\Contract\DBConnectionRepositoryInterface;
use AbstractFactory\Contract\DBQueryBuilderRepositoryInterface;
use AbstractFactory\Contract\DBRecordRepositoryInterface;
use AbstractFactory\Repository\TSqlDBQueryBuilderRepository;
use AbstractFactory\Repository\TSqlDBRecordRepository;

class TSqlRepositoryFactory implements DBConnectionRepositoryInterface
{
    /**
     * @var TSql
     */
    private $tSqlConnection;

    /**
     * @param TSql $tSqlConnection
     */
    public function __construct(TSql $tSqlConnection)
    {
        $this->tSqlConnection = $tSqlConnection;
    }

    /**
     * @return DBQueryBuilderRepositoryInterface
     */
    public function createDBQueryBuilderRepository(): DBQueryBuilderRepositoryInterface{
        return new TSqlDBQueryBuilderRepository($this->tSqlConnection);
    }

    /**
     * @return DBRecordRepositoryInterface
     */
    public function createDBRecordRepository(): DBRecordRepositoryInterface
    {
        return new TSqlDBRecordRepository($this->tSqlConnection);
    }
}