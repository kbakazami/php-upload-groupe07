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
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $attachment = $_FILES['file'];

    $mail = new Email($to, $subject, $message, $attachment);
    $verifyUpload = new UploadFiles($_FILES['file']);
    if($verifyUpload->verifyExtension($verifyUpload->getType()))
    {
        $mail->sendEmail();
        var_dump('yes');
    }

  }
}
