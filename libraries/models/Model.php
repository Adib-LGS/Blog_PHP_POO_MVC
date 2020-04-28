<?php
/**
 * Empeche l'instanciation de Model
 * Récupéere le getPdo de Database et Methode  est l'applique aux Autres Class du Model
 */
namespace Models;
require_once 'libraries/Database.php';

abstract class Model 
{

    protected $pdo;
    //permet d'utiliser la methode find() ds Article et Comment de maniére dynamique
    // en utilisant 2 table dif
    protected $table;

    public function __construct()
    {
        $this->pdo = \Database::getPdo();
    }

    /**
     * Return lists of Articles, by creation dates
     * @return array
     * Utilisation de cette Methode ds 2 class Models Differentes
     */
    public function findAll(?string $order = ""): array{ 

        $sql = "SELECT * FROM {$this->table}";

        if ($order){
            $sql .= " ORDER BY " . $order;
        }

        $resultats = $this->pdo->query($sql);
        // On fouille le résultat pour en extraire les données réelles
        $articles = $resultats->fetchAll();
        return $articles;
    }


    /**Utilisation de cette Methode ds 2 class Models Differentes Article et Comment */
    public function find(int $id) {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
        $item = $query->fetch();
        return $item;
    }

    /**Utilisation de cette Methode ds 2 class Models Differentes Article et Comment */
    public function delete(int $id) :void{
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
    }

}