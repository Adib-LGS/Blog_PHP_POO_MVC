<?php
/**
 * Method Static appartient a la Class on l'apl via la Class elle meme 
 * $pdo = Database::getPdo();*/

class Database {
    /**
 * Return une connexion a la Base de Données
 * @return PDO
 */
    public static function getPdo():PDO
    {

    $pdo = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', '*******', '******', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    return $pdo;
    }
}


