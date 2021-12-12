<?php

namespace App\Services;

class Email
{
  private $email;
  private $subject;
  private $content;


  public function __construct($email, $subject, $content)
  {
    $this->email = $email;
    $this->subject = $subject;
    $this->content = $content;
  }

  public function sendEmail()
  {
    mail(
      $this->getEmail(),
      $this->getSubject(),
      $this->getContent()
    );

  }


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
   * Get the value of subject
   */ 
  public function getSubject()
  {
    return $this->subject;
  }

  /**
   * Set the value of subject
   *
   * @return  self
   */ 
  public function setSubject($subject)
  {
    $this->subject = $subject;

    return $this;
  }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}
