<?php
namespace MoviesTrack\Controllers;

use MoviesTrack\Models\FilmsManager;
use MoviesTrack\Validator;

class FilmsController {
    private $manager;

    public function __construct() {
        $this->manager = new FilmsManager();
    }

    public function movies() {
        $movies = $this->manager->films();
        require VIEWS . 'MoviesTrack/films.php';
    }
}