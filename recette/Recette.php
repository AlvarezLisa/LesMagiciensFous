<?php

public class Recette ()
{
  //---------------------- Attributs ----------------------//
  private $id;

  private $title;
  private $image;
  private $level;
  private $time;
  private $price;
  private $ingredients;
  private $description;
  private $date;
  private $nb_person;
  private $enable;

  private $fk_user;

  //---------------------- Construct ----------------------//

  //Constructeur par défaut
  public function __construct()
  {
    $this->level = 1;
    $this->date = Datetime();
    $this->enable = true;
  }

  //---------------------- Accesseurs ----------------------//
  public get_title(){
    return $this->title;
  }

  public set_title(string $p_title){

    //Si le titre contient plus de 255 caractères -> erreur
    if( strlen($p_title) > 255)
      return 'error : La chaine de caractere rentée est trop longue.'

    $this->title = $p_title;
  }

}

 ?>
