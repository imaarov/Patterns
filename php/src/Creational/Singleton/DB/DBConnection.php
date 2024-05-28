<?php

namespace Imaarpv\Patterns\Creational\Singleton\Php\DB;

use Imaarov\Patterns\Creational\Singleton\DB\Interface\DBConnectionInterface;
use Exception;
use PDO;

class MysqlDBConnection implements DBConnectionInterface
{

    private static $instance = null;

    // Get from .env file or something
    private static array $options = [
        'dbName'    =>      '',
        'dbUser'    =>      'root',
        'dbHost'    =>      '127.0.0.1',
        'dbPassword'=>      'root'
    ];


    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            try {
                $dbHost = self::$options['dbHost'];
                $dbName = self::$options['dbName'];
                $dbPass = self::$options['dbPass'];
                $dbUser = self::$options['dbUser'];
                self::$instance = new PDO("mysql:host={$dbHost};dbname=$dbName", $dbUser, $dbPass);
            } catch (Exception $th) {
                echo $th->getMessage();
                die();
            }
        }
        return self::$instance;
    }
}
