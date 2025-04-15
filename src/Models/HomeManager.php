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

    public function all() {
        $stmt = $this->bdd->query('SELECT * FROM films');

        return $stmt->fetchAll(\PDO::FETCH_CLASS, "MoviesTrack\Models\Home");
    }
}