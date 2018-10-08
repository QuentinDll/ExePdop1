<?php

/**
 * Création de la classe cardTypes
 */
class cardTypes {

    private $connexion;
    public $id;
    public $type;
    public $discount;

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
    /**
     * Méthode destruct
     */
}
