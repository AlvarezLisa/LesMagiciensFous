<?php

public function indexAction()  {
  $recettes = RecetteRepository->findAll();
  include 'index.php'
}


public function editAction(Recette $p_recette, $form) {
  // verifier utilisateur connecté

  $p_recette->get_title() = $form->title;
}


public function newAction() {
  $ma_recette = new Recette();
}


public function showAction(Recette $p_recette) {

}


public function deleteAction(Recette $p_recette) {

}


public function enabledAction(Recette $p_recette, string $name)
{
  $tableau = array();
  // verifier utilisateur connecté

  // si utilisateur admin
    // $p_recette->
}
