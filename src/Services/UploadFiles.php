<?php

namespace App\Services;

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
