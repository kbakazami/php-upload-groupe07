<?php

namespace App\Services;

/**
 * TODO: 1. Mettre le chemin de l'image en bdd
 * TODO: 2. Renommer l'image avc un nom aléatore
 * TODO: 3. Appeler cette class depuis la class user ---> exmeple changer la photo de profil
 * TODO: 4. Système de mailing 
 * 
 */

class UploadFiles
{
  public function upload($imageFiles)
  {
    // $this->imageFilesName = $imageFilesName;
    $this->imageFiles = $imageFiles;

    $dossier = './img/';

    move_uploaded_file($imageFiles, $dossier . "default.png");
  }
}
