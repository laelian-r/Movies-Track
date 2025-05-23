<?php
namespace MoviesTrack\Models;

use MoviesTrack\Models\Home;
/** Class HomeManager **/
class HomeManager {

    private $bdd;
    
    public function __construct($id_travel = null) {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getBdd() {
        return $this->bdd;
    }

    public function films() {
        $stmt = $this->bdd->query('SELECT * FROM films WHERE id_categorie = 1');
        $movies = $stmt->fetchAll(\PDO::FETCH_CLASS, "MoviesTrack\Models\Home");
        return $movies;
    }

    public function series() {
        $stmt = $this->bdd->query('SELECT * FROM films WHERE id_categorie = 2');
        $movies = $stmt->fetchAll(\PDO::FETCH_CLASS, "MoviesTrack\Models\Home");
        return $movies;
    }
}