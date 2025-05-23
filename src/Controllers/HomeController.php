<?php
namespace MoviesTrack\Controllers;

use MoviesTrack\Models\HomeManager;
use MoviesTrack\Validator;

class HomeController {
    private $manager;

    public function __construct() {
        $this->manager = new HomeManager();
    }

    public function index() {
        $movies = $this->manager->films();
        $series = $this->manager->series();
        require VIEWS . 'MoviesTrack/homepage.php';
    }
}