# Action d'administration

[[_TOC_]]

## Ajouter le module adminer à la racine de la webApp

1. Télécharger le fichier unique adminer [ici](https://www.adminer.org/#download).
2. Le mettre à la racine de la webapp.
3. Tester la connection.
![image.png](/.attachments/image-9b61fd0c-7dfd-4791-b0de-56f3cd63ca20.png)
Vous routrouverez le password de votre database dans KeyVault
4. Le mot d'un user spécifique peut être changé par l'administrateur en allant dans cette table : ![image.png](/.attachments/image-32bb2146-a5c0-4714-879d-9823ceed42c8.png)
Attention le mot de passe devra surement être "hasché" et devra peut-être utiliser un salt. Voir wp-config.php qui contiendra le salt

## Rajouter un utlisateur en mode **editeur**

Afin de laisser au métier la possibilité d'éditer du contenu sans pouvoir toucher le theme de base ni les extensions, il faut donner au demandeur le role d'editeur.