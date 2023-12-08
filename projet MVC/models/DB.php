<?php
require_once 'config/config.php';

class DB {
    private static $connexion;

    public static function connect() {
        if (!isset(self::$connexion)) {
            try {
                self::$connexion = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
                self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erreur de connexion à la base de données: " . $e->getMessage());
            }
        }

        return self::$connexion;
    }

    public static function close() {
        self::$connexion = null;
    }
}
?>

