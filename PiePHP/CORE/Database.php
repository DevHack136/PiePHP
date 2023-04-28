<?php

namespace Core;

use PDO;
use PDOException;

class Database
{
    private static $bdd_pdo;

    public static function GetBdd()
    {
        if (self::$bdd_pdo === null) {
            $local = 'localhost';
            $user = 'root';
            $password = 'root';
            $dbname = 'piephp_bdd';

            try {
                self::$bdd_pdo = new PDO(
                    "mysql:host = $local;
                        dbname = $dbname;
                        charset = utf8",
                    $user,
                    $password
                );
                self::$bdd_pdo->query("USE $dbname");
                self::$bdd_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Erreur de connexion à la base de données : " . $e->getMessage() . "<br>";
            }
        }
        return self::$bdd_pdo;
    }
}