<?php
class Database
{
    private const DSN  = 'mysql:host=172.27.0.50:3306;dbname=pedibus;charset=utf8mb4';
    private const USER = 'pediBusUser';
    private const PASS = 'pedibusUser';

    private static ?PDO $pdo = null;

    public static function getConnexion(): PDO
    {
        if (self::$pdo === null) {
            self::$pdo = new PDO(self::DSN, self::USER, self::PASS, [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
        }
        return self::$pdo;
    }
}