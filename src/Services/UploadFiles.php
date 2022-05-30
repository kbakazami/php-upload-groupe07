<?php

namespace App\Services;

class UploadFiles
{

  private $name;
  private $type;
  private $tmp_name;
  private $error;
  private $size;

  public function __construct($imageFiles) {
    $this->name = $imageFiles['name'];
    $this->type = $imageFiles['type'];
    $this->tmp_name = $imageFiles['tmp_name'];
    $this->error = $imageFiles['error'];
    $this->size = $imageFiles['size'];
  }

  public function upload()
  {
    $dossier = '../public/img/';
    if($this->verifyExtension($this->getType()))
    {
        move_uploaded_file($this->getTmp_name(), $dossier . $this->getName());
    }
  }

  public function verifyExtension($extensionGiven)
  {
      $acceptedExtension = ["image/jpg", "image/png", "image/jpeg", "application/pdf"];
      $ext = strtolower($extensionGiven);
      if(in_array($ext, $acceptedExtension))
      {
          return true;
      }
      else
      {
          return false;
      }
  }

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of type
   */ 
  public function getType()
  {
    return $this->type;
  }

  /**
   * Set the value of type
   *
   * @return  self
   */ 
  public function setType($type)
  {
    $this->type = $type;

    return $this;
  }

  /**
   * Get the value of tmp_name
   */ 
  public function getTmp_name()
  {
    return $this->tmp_name;
  }

  /**
   * Set the value of tmp_name
   *
   * @return  self
   */ 
  public function setTmp_name($tmp_name)
  {
    $this->tmp_name = $tmp_name;

    return $this;
  }

  /**
   * Get the value of error
   */ 
  public function getError()
  {
    return $this->error;
  }

  /**
   * Set the value of error
   *
   * @return  self
   */ 
  public function setError($error)
  {
    $this->error = $error;

    return $this;
  }

  /**
   * Get the value of size
   */ 
  public function getSize()
  {
    return $this->size;
  }

  /**
   * Set the value of size
   *
   * @return  self
   */ 
  public function setSize($size)
  {
    $this->size = $size;

    return $this;
  }
}
