<?php

namespace Ecole\app;

abstract class Personne {
  protected $prenom;
  protected $nom;
  protected $adresse;

  public function __construct($nom, $prenom, $adresse) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->adresse = $adresse;
  }

  public function getEtatCivil() 
  {
    return array(
      'nom' => $this->nom,
      'prenom' => $this->prenom,
      'adresse' => $this->adresse,
    );
  }

  public function getNom() {
    return $this->nom;
  }

  public function getPrenom() {
    return $this->prenom;
  }

  public function getAdresse() {
    return $this->adresse;
  }
}

?> 
