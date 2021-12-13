<?php

namespace App\Controller;

use App\Entity\User;
use App\Routing\Attribute\Route;
use DateTime;
use Doctrine\ORM\EntityManager;

class IndexController extends AbstractController
{
  #[Route(path: "/", name:'index')]
  public function index(EntityManager $em)
  {
    var_dump($_FILES['file']);
    $user = new User();

    $file = ['name' => 'nomImg.png', 'type' => 'image/png', 'tmp_name' => 'C:\Windows\Temp\php9C6D.tmp', 'error' => 'error', 'size' => 1456];

    $user->setName("Bob")
      ->setFirstName("John")
      ->setUsername("Bobby")
      ->setPassword("randompass")
      ->setEmail("bob@bob.com")
      ->setBirthDate(new DateTime('1981-02-16'))
      ->setImgName($_FILES['file']);

    // On demande au gestionnaire d'entités de persister l'objet
    // Attention, à ce moment-là l'objet n'est pas encore enregistré en BDD
    $em->persist($user);
    $em->flush();
  }

  #[Route(path: "/contact", name: "contact")]
  public function contact()
  {
    echo $this->twig->render('contact/contact.html.twig');
  }

  #[Route(path: "/addavatar", httpMethod: "POST", name: "addavatar")]
  public function addAvatar(EntityManager $em)
  {
  
    $user = new User();

    $file = ['name' => 'nomImg.png', 'type' => 'image/png', 'tmp_name' => 'C:\Windows\Temp\php9C6D.tmp', 'error' => 'error', 'size' => 1456];

    $user->setName("Bob")
      ->setFirstName("John")
      ->setUsername("Bobby")
      ->setPassword("randompass")
      ->setEmail("bob@bob.com")
      ->setBirthDate(new DateTime('1981-02-16'))
      ->setImgName($_FILES['file']);

    // On demande au gestionnaire d'entités de persister l'objet
    // Attention, à ce moment-là l'objet n'est pas encore enregistré en BDD
    $em->persist($user);
    $em->flush();
  }
}
