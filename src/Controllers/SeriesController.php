<?php
namespace MoviesTrack\Controllers;

use MoviesTrack\Models\SeriesManager;
use MoviesTrack\Validator;

class SeriesController {
    private $manager;

    public function __construct() {
        $this->manager = new SeriesManager();
    }

    public function series() {
        $series = $this->manager->series();
        require VIEWS . 'MoviesTrack/Serie/series.php';
    }

    public function episodes($id_serie, $id_saison) {
        $episodes = $this->manager->getEpisodesBySaison($id_serie, $id_saison);
        $saison = $id_saison; // Tu peux récupérer plus d'infos si besoin
        require VIEWS . 'MoviesTrack/episodes.php';
    }

    // Ajoute aussi cette méthode utilitaire
    public function getSerieById($id_serie) {
        $stmt = $this->manager->getBdd()->prepare("SELECT * FROM series WHERE id_serie = ?");
        $stmt->execute([$id_serie]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MoviesTrack\Models\Series");
        return $stmt->fetch();
    }
}