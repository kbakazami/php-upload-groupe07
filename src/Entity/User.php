<?php

namespace App\Entity;

use App\Services\UploadFiles;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private int $id;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private string $name;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private string $firstName;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private string $username;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private string $password;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private string $email;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private string $imgProfile;

  /**
   * @ORM\Column(type="datetime", nullable=true)
   */
  private DateTime $birthDate;

  public function getId(): int
  {
    return $this->id;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getFirstName(): string
  {
    return $this->firstName;
  }

  public function setFirstName(string $firstName): self
  {
    $this->firstName = $firstName;

    return $this;
  }

  public function getUsername(): string
  {
    return $this->username;
  }

  public function setUsername(string $username): self
  {
    $this->username = $username;

    return $this;
  }

  public function getPassword(): string
  {
    return $this->password;
  }

  public function setPassword(string $password): self
  {
    $this->password = $password;

    return $this;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function setEmail(string $email): self
  {
    $this->email = $email;

    return $this;
  }

  public function getBirthDate(): DateTime
  {
    return $this->birthDate;
  }

  public function setBirthDate(DateTime $birthDate): self
  {
    $this->birthDate = $birthDate;

    return $this;
  }

  public function setImgName($img)
  {

    $this->img = $img;

    $nomImg = new UploadFiles($img);
    $nom = $nomImg->getName();

    return $this->setImgProfile($nom);
  }


  public function getImgProfile()
  {
    return $this->imgProfile;
  }


  public function setImgProfile($img)
  {
    $this->imgProfile = $img;

    return $this;
  }
}
