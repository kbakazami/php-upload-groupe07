#Sciences-U - B3 IW - PHP7-8 MVC from scratch
___
###Système d'upload de fichiers et système de mailing
___
Nous avons choisis de mettre en place un système simple pour upload des fichiers
et un système de mailing.

###Entité User
Nous avons repris l'entité User avec les variables déjà existantes pour ajouter
les notres tel que imgProfile.
___
###Services
Nous avons créer un dossier Services où se situerons les fichiers dont nous avons besoin.

<u>**_UploadFiles.php_**</u>

Ce fichier contient
* Le constructeur où l'on va initialiser
les valeurs récupérées dans le fichier _IndexController.php_ grâce aux méthodes _setImgName_ et _setImgPath_.
* Les différents Getters et Setters qui vont nous permettre de récupérer et insérer les nouvelles valeurs.
* La fonction upload qui va nous permettre d'upload l'image choisie vers un dossier _img_ se trouvant dans le dossier public * 

<u>**_Email.php_**</u>

Ce fichier contient
* Le constructeur où l'on va initialiser les valeurs récupérées
* La fonction sendEmail avec la fonction _mail_ de PHP et les différents paramètres nécessaires à l'envoi d'un mail qui seront récupérées au préalable par les différents Getters et Setters

<u>**_IndexController.php_**</u>

Nous avons réutiliser ce fichier pour créer un nouvel utilisateur puis rentrer ses différentes informations telles que :
* Nom
* Prénom
* Mot de passe
* Email
* Date de naissance
* Nom de l'image


On va également afficher le template contact avec le formulaire où l'on pourra choisir l'image à upload qui sera stockée dans **_$_FILES_** puis triée dans le constructeur d'*__UploadFiles__*.

Une fois que nous avons toutes les données nécessaires elle seront envoyées à la base de données où elle seront stockées

La route qui nous permets d'accéder au template twig est "/contact" avec la méthode POST. **

___
###Template twig
<u>**_contact.html.twig_**</u>

Ce fichier est notre template, nous l'avons donc réutiliser pour ajouter le formulaire avec en action "_/contact_" pour qu'au clic sur le bouton Enregistrer on reste sur la même page.

<u>**_mail.html.twig_**</u>
Ce fichier est la vue qui nous sert de forulaire pour envoyer un email. Il contient un champ Email, Sujet et Message.

