<?php

namespace Ecole\app;

class Enseignant extends Personne {
  protected $matiere;
  protected static int $effectifProf = 0;

  public function __construct($nom, $prenom, $adresse, $matiere) {
    parent::__construct($nom, $prenom, $adresse);
    $this->matiere = $matiere;
    self::$effectifProf++;
  }

  public function getEtatCivil() {
    $etatCivil = parent::getEtatCivil();
    $etatCivil['matiere'] = $this->matiere;
    return $etatCivil;
  }

  public static function getEffectifProf()
  {
    return self::$effectifProf;
  }

  public function getMatiere() {
    return $this->matiere;
  }
}

?> 




