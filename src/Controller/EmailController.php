<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use App\Services\Email;
use App\Services\UploadFiles;

class EmailController extends AbstractController
{
  #[Route(path: "/email", name: "email")]
  public function email()
  {
    echo $this->twig->render('mail/mail.html.twig');
  }

  #[Route(path: "/sendmail", httpMethod: "POST", name: "sendmail")]
  public function sendEmail()
  {
      $from = $_POST['from'];
      $to = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $boundary = md5(rand());

      $headers = 'From: <' . $from . '>' ."\n" . 'Reply-To: <' . $to . '>';
      $headers .= "MIME-VERSION: 1.0" . "\n";
      $headers .= 'Content-Type: multipart/mixed; boundary='.$boundary."\n";

      $email_message = '--' . $boundary . "\n";
      $email_message .= "Content-Type:text/plain; charset=utf-8" . "\n";
      $email_message .= "Content-Transfert-Encoding: 8bit" . "\n";
      $email_message .= $message;

      if(isset($_FILES['file']) && $_FILES['file']['name'] !="")
      {
          $verifyUpload = new UploadFiles($_FILES['file']);
          if($verifyUpload->verifyExtension($verifyUpload->getType()))
          {
              $fileName = $verifyUpload->getName();
              $sourceFile = $verifyUpload->getTmp_name();
              $fileType = $verifyUpload->getType();
              $fileSize = $verifyUpload->getSize();
              $tabRemplacement = array("é" => "e", "è" => "e", "à" => "a");

              $fileOpen = fopen($sourceFile, 'r');
              $fileContent = fread($fileOpen, $fileSize);
              $fileEncoded = chunk_split(base64_encode($fileContent));
              fclose($fileOpen);

              $email_message .= "\n" . "--" . $boundary . "\n";
              $email_message .= 'Content-Type:' .$fileType.';name="'.$fileName.'"'."\n";
              $email_message .= 'Content-Disposition: attachment; filename="'.$fileName.'"'."\n";
              $email_message .= "\n";
              $email_message .= $fileEncoded. "\n";

              $email_message .= "\n --" . $boundary. "-- \n";
              $mail = new Email("<$to>", $subject, $email_message, $headers);
              if($mail)
              {
                  $mail->sendEmail();
                  echo $this->twig->render('mail/reussi.html.twig');
              }
          }
      }



  }
}
