<?php

/**
 * Création de la classe cards
 */
class cards {

    //Liste des attributs
    private $connexion;
    public $id;
    public $cardNumber;
    public $cardTypesId;

    /**
     * Méthode construct
     */
    public function __construct() {
        try {
            $this->connexion = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'quentindll', 'first');
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Méthode pour récupérer le résultat de la requête
     * @return type
     */
    public function getClientsCard() {
        $PDOResult = $this->connexion->query('SELECT `clients`.`firstName`, `clients`.`lastName`, `cards`.`cardTypesId` FROM `clients` LEFT JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber` WHERE `cardTypesId` = 1;');
        return $PDOResult->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Méthode destruct
     */
    public function __destruct() {
        
    }

}
