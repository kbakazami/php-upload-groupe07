<?php 

namespace App\Services;

class Email{

  private $email;
  private $envoyeur;
  private $sujet;
  private $contenu;


  /**
   * Get the value of email
   */ 
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */ 
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of envoyeur
   */ 
  public function getEnvoyeur()
  {
    return $this->envoyeur;
  }

  /**
   * Set the value of envoyeur
   *
   * @return  self
   */ 
  public function setEnvoyeur($envoyeur)
  {
    $this->envoyeur = $envoyeur;

    return $this;
  }

  /**
   * Get the value of sujet
   */ 
  public function getSujet()
  {
    return $this->sujet;
  }

  /**
   * Set the value of sujet
   *
   * @return  self
   */ 
  public function setSujet($sujet)
  {
    $this->sujet = $sujet;

    return $this;
  }

  /**
   * Get the value of contenu
   */ 
  public function getContenu()
  {
    return $this->contenu;
  }

  /**
   * Set the value of contenu
   *
   * @return  self
   */ 
  public function setContenu($contenu)
  {
    $this->contenu = $contenu;

    return $this;
  }
}

