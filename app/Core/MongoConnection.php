<?php


namespace HackLog\Core;

use MongoDB\Client;
use MongoDB\Collection;

class MongoConnection
{
    private static $connection;
    private static $databaseConnection;

    private static function connect()
    {
        self::$connection = new Client("mongodb://" . App::$configuration['dbaddress']);
        self::$databaseConnection = self::$connection->selectDatabase(App::$configuration['database']);
    }

    public static function getConnection(string $collection) : Collection
    {
        if (!isset(self::$databaseConnection)) {
            self::connect();
        }
        return self::$databaseConnection->selectCollection($collection);
    }
}
