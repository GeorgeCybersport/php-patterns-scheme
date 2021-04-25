<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Db\TSql;

abstract class TSqlDBConnectionRepository
{
    private $tSqlConnection;

    /**
     * @param TSql $tSqlConnection
     */
    public function __construct(TSql $tSqlConnection)
    {
        $this->tSqlConnection = $tSqlConnection;
    }

    /**
     * @return TSql $tSqlConnection
     */
    public function getConnection(): TSql
    {
        return $this->tSqlConnection;
    }
}