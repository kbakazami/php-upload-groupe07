<?php

namespace App\Services;

class Email
{
    private $email;
    private $subject;
    private $content;
    private $header;

    public function __construct($email, $subject, $content, $header)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->content = $content;
        $this->header = $header;
    }

    public function sendEmail()
    {
        mail(
            $this->getEmail(),
            $this->getSubject(),
            $this->getContent(),
            $this->getHeader()
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

    /**
     * Get the value of the header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Set the value of the header
     *
     * @return  self
     */
    public function setHeader($header)
    {
        $this->header = $header;

        return $this;
    }
}
