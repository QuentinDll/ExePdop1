<?php

/**
 * Création de la classe shows
 */
class shows {

    private $connexion;
    public $id;
    public $title;
    public $performer;
    public $date;
    public $showTypesId;
    public $firstGenresId;
    public $secondGenreId;
    public $duration;
    public $startTime;

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
    public function getShowsDetails() {
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `title`, `performer`, '
                . 'DATE_FROMAT(`date`,\'%d/%m/%Y\') AS `date`, '
                . 'DATE_FORMAT(`startTime`, \'%Hh%i\') AS `startTime`, '
                . 'FROM `shows` '
                . 'ORDER BY `title`;');
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
