<?php

namespace Ecole\app;

class Eleve extends Personne
{
  protected $niveau;
  protected static int $effectif = 0;

  public function __construct($nom, $prenom, $adresse, $niveau)
  {
    parent::__construct($nom, $prenom, $adresse);
    $this->niveau = $niveau;
    self::$effectif++;
  }

  public static function getEffectif()
  {
    return self::$effectif;
  }

  public function getEtatCivil()
  {
    $etatCivil = parent::getEtatCivil();
    $etatCivil['niveau'] = $this->niveau;
    return $etatCivil;
  }
}

?> 
