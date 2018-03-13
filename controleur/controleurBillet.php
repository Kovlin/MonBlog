<?php

require_once 'modele/modele.php';
require_once 'vue/Vue.php';

class ControleurBillet {

  private $billet;
  private $commentaire;

  public function __construct() {
    $this->billet = new modele();
  }

  // Affiche les détails sur un billet
  public function billet($idBillet) {
    $billet = $this->billet->getBillet($idBillet);
    $commentaires = $this->billet->getCommentaires($idBillet);
    $vue = new Vue("Billet");
    $vue->generer(array('billet' => $billet, 'commentaires' => $commentaires));
  }
}