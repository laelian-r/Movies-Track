<?php
namespace MoviesTrack\Models;

/** Class Series **/
class Series {
    public $id_serie;
    public $image_serie;
    public $nom_serie;
    public $description_serie;
    public $id_categorie;
    public $date_creation;

    // Getters
    public function getIdSerie() { return $this->id_serie; }
    public function getImageSerie() { return $this->image_serie; }
    public function getNomSerie() { return $this->nom_serie; }
    public function getDescriptionSerie() { return $this->description_serie; }
    public function getIdCategorie() { return $this->id_categorie; }
    public function getDateCreation() { return $this->date_creation; }

    // Setters
    public function setIdSerie(Int $id_serie) { $this->id_serie = $id_serie; }
    public function setImageSerie(String $image_serie) { $this->image_serie = $image_serie; }
    public function setNomSerie(String $nom_serie) { $this->nom_serie = $nom_serie; }
    public function setDescriptionSerie(String $description_serie) { $this->description_serie = $description_serie; }
    public function setIdCategorie(Int $id_categorie) { $this->id_categorie = $id_categorie; }
    public function setDateCreation($date_creation) { $this->date_creation = $date_creation; }
}