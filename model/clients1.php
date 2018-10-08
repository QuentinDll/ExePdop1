<?php

/**
 * Création de la classe clients
 */
class clients {

    //Liste des attributs
    private $connexion;
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $card;
    public $cardNumber;
    public $cardTypesId;

    /**
     * Méthode construct
     */
    public function __construct() {
        //On test les erreurs avec le try/catch 
        //Si tout est bon, on est connecté à la base de donnée
        try {
            $this->connexion = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'quentindll', 'first');
        }
        //Autrement, un message d'erreur est affiché
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Méthode pour récupérer le résultat de la requête
     * @return type
     */
    public function getClientsList() {
        $PDOResult = $this->connexion->query('SELECT `lastName`, `firstName`, `birthDate`, `card`, `cardNumber` FROM `clients`');
        return $PDOResult->fetchAll(PDO::FETCH_OBJ);
    }

    public function getClients20() {
        $PDOResult = $this->connexion->query('SELECT `lastName`, `firstName` FROM `clients` LIMIT 20;');
        return $PDOResult->fetchAll(PDO::FETCH_OBJ);
    }

    public function getClientsCardList() {
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `clients`.`firstName`, `clients`.`lastName`, `cards`.`cardTypesId`, `clients`.`id`'
                . ' FROM `clients` '
                . 'INNER JOIN `cards` '
                . 'ON `clients`.`cardNumber` = `cards`.`cardNumber` '
                . 'WHERE `cards`.`cardTypesId` = 1');
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }

    public function getClientsNameM() {
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `lastName`, `firstName` FROM `clients` WHERE `lastName` LIKE \'M%\' ORDER BY `lastName`;');
        if (is_object($PDOResult)) {
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $isObjectResult;
    }

    public function getClientsDetails() {
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `clients`.`firstName`, `clients`.`lastName`, `clients`.`birthDate`, `cards`.`cardTypesId`, `clients`.`cardNumber` '
                . 'FROM `clients` '
                . 'LEFT JOIN `cards` '
                . 'ON `clients`.`cardNumber` = `cards`.`cardNumber`;');
        if (is_object($PDOResult)) {
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $isObjectResult;
    }

    /**
     * Méthode destruct
     */
    public function __destruct() {
        
    }

}
