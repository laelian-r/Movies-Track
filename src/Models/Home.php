<?php
namespace MoviesTrack\Models;

/** Class Home **/
class Home {
    private $id_film;
    private $titre;
    private $description;
    private $date;

    public function __construct($id_film = null, $titre = null, $description = null, $date = null) {
        $this->id_film = $id_film;
        $this->titre = $titre;
        $this->description = $description;
        $this->date = $date;
    }
    
    public function getId() {
        return $this->id_film;
    }

    public function getTitle() {
        return $this->titre;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDate() {
        return $this->date;
    }


    public function getIdFilm() {
        return $this->id_film;
    }

    public function setTitle(String $titre) {
        $this->titre = $titre;
    }

    public function setDescription(String $description) {
        $this->description = $description;
    }

    public function setDate(String $date) {
        $this->date = $date;
    }
}