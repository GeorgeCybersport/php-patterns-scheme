<?php

use \AbstractFactory\Factory\MongoRepositoryFactory;
use \AbstractFactory\Factory\MySqlRepositoryFactory;
use \AbstractFactory\Factory\TSqlRepositoryFactory;
use \AbstractFactory\Db\Mongo;
use AbstractFactory\Db\MySql;
use AbstractFactory\Db\TSql;
use \AbstractFactory\Service\Service;


spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^AbstractFactory/', '', $className);
    print_r( __DIR__ . $className . '.php');
    require_once __DIR__ . $className . '.php';
});

$mongoRepositoryFactory = new MongoRepositoryFactory(new Mongo());
$serviceWithMongoRepositories = new Service($mongoRepositoryFactory);

$mySqlRepositoryFactory = new MySqlRepositoryFactory(new MySql());
$serviceWithMySqlRepositories = new Service($mySqlRepositoryFactory);

$tSqlRepositoryFactory = new TSqlRepositoryFactory(new TSql());
$serviceWithTSqlRepositories = new Service($tSqlRepositoryFactory);

$serviceWithTSqlRepositories->addItem();
$serviceWithTSqlRepositories->deleteItem();
$serviceWithTSqlRepositories->showItemById(1);
$serviceWithTSqlRepositories->showItems();
$serviceWithTSqlRepositories->updateItem();