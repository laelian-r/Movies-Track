<?php
namespace MoviesTrack\Models;

use MoviesTrack\Models\Films;
/** Class FilmsManager **/
class FilmsManager {
    private $bdd;

    public function __construct() {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function films() {
        $stmt = $this->bdd->query('SELECT * FROM films');
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "MoviesTrack\Models\Films");
    }
}