<?php

/**
 * Connection to database with PDO
 */
class Database
{
    /**
     * Singelton to unique instance to database
     * @var PDO
     */
    private static $pdo = null;

    /**
     * Function to create a new connection to database or return the existing one
     * @return PDO|null 
     */
    public static function getConnection()
    {
        if (self::$pdo === null) {
            $config = require __DIR__ . '/../../config/config.php';
            $db = $config['db'];

            $dsn = "mysql:host={$db['host']};dbname={$db['name']};charset={$db['charset']}";

            try {
                self::$pdo = new PDO(
                    $dsn,
                    $db['user'],
                    $db['pass'],
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES => false
                    ]
                );
            } catch (PDOException $e) {
                die('Database connection error: ' . $e->getMessage());
            }
            return self::$pdo; // return the unique instance

        }
    }
}
