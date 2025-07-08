<?php
namespace MoviesTrack\Models;

/** Class Films **/
class Films {
    public $id_film;
    public $fichier;
    public $image;
    public $titre;
    public $description;
    public $date;
    public $id_categorie;

    // Getters
    public function getIdFilm() {
        return $this->id_film;
    }

    public function getFichier() {
        return $this->fichier;
    }

    public function getImage() {
        return $this->image;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDate() {
        return $this->date;
    }

    public function getIdCategorie() {
        return $this->id_categorie;
    }


    public function setIdFilm(Int $id_film) {
        $this->id_film = $id_film;
    }

    public function setFichier(String $fichier) {
        $this->fichier = $fichier;
    }

    public function setImage(String $image) {
        $this->image = $image;
    }

    public function setTitre(String $titre) {
        $this->titre = $titre;
    }

    public function setDescription(String $description) {
        $this->description = $description;
    }

    public function setDate(Date $date) {
        $this->date = $date;
    }

    public function setIdCategorie(Int $id_categorie) {
        $this->id_categorie = $id_categorie;
    }
}