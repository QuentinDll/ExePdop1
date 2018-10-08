<?php

/**
 * Création de la classe showTypes
 */
class showTypes {

    //Liste des attributs
    private $connexion;
    public $id;
    public $type;

    /**
     * Méthode construct
     */
    public function __construct() {

        try {
            $this->connexion = NEW PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'quentindll', 'first');
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Méthode pour récupérer le résultat de la requête
     * @return type
     */
    public function getshowTypeList() {
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `type` FROM `showTypes`;');
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
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
