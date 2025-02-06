<?php

namespace Src\Config;
class Database
{
    private static $servername = "localhost";
    private static $dbname = "products";
    private static $username = "postgres";
    private static $password = "1234";
    private static $pdo = null;

    public static function getConnection()
    {
        if (self::$pdo === null) {
            try {
                self::$pdo = new \PDO(
                    "pgsql:host=" . self::$servername . ";port= 5432;dbname=" . self::$dbname ,
                    self::$username,
                    self::$password
                );
            } catch (\PDOException $ex) {
                die("Erreur de connexion : " . $ex->getMessage());
            }
        }
        return self::$pdo;
    }
}
