<?php
namespace MoviesTrack\Controllers;

use MoviesTrack\Models\CatalogManager;
use MoviesTrack\Validator;

class CatalogController {
    private $manager;

    public function __construct() {
        $this->manager = new CatalogManager();
    }

    public function movies() {
        $movies = $this->manager->films();
        require VIEWS . 'MoviesTrack/films.php';
    }
    
    public function series() {
        $series = $this->manager->series();
        require VIEWS . 'MoviesTrack/series.php';
    }
}