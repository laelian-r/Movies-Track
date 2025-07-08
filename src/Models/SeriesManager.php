<?php
namespace MoviesTrack\Models;

use MoviesTrack\Models\Series;
/** Class SeriesManager **/
class SeriesManager {

    private $bdd;
    
    public function __construct($id_travel = null) {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getBdd() {
        return $this->bdd;
    }

    public function series() {
        $stmt = $this->bdd->query('SELECT * FROM series');
        $series = $stmt->fetchAll(\PDO::FETCH_CLASS, "MoviesTrack\Models\Series");
        return $series;
    }

    public function getSerieById($id_serie) {
        $stmt = $this->bdd->prepare("SELECT * FROM series WHERE id_serie = ?");
        $stmt->execute([$id_serie]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MoviesTrack\Models\Series");
        return $stmt->fetch();
    }

    public function getSaisonsBySerie($id_serie) {
        $stmt = $this->bdd->prepare(
            "SELECT s.* FROM saisons s
            JOIN saison_episodes se ON se.id_saison = s.id_saison
            WHERE se.id_serie = ?
            GROUP BY s.id_saison"
        );
        $stmt->execute([$id_serie]);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getEpisodesBySaison($id_serie, $id_saison) {
        $stmt = $this->bdd->prepare(
            "SELECT e.* FROM episodes e
            JOIN saison_episodes se ON se.id_episode = e.id_episode
            WHERE se.id_serie = ? AND se.id_saison = ?"
        );
        $stmt->execute([$id_serie, $id_saison]);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}