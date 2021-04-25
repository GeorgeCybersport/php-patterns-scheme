<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Db\MySql;

abstract class MySqlDBConnectionRepository
{
    private $mySqlConnection;

    /**
     * @param MySql $mySqlConnection
     */
    public function __construct(MySql $mySqlConnection)
    {
        $this->mySqlConnection = $mySqlConnection;
    }

    /**
     * @return MySql $mySqlConnection
     */
    public function getConnection(): MySql
    {
        return $this->mySqlConnection;
    }
}