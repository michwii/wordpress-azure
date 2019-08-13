# Action d'administration


|Etape| Description | Screenshot |
|--|--|--|
| 1 | Télécharger le fichier unique adminer [ici](https://www.adminer.org/#download). |  |
| 2 | Le mettre à la racine de la webapp. Se servir de la console d'administration KUDU pour cela | ![image.png](/.attachments/image-f339da17-8ca3-4edf-96ac-a660324595df.png) |
| 3 | Tester la connection. Vous routrouverez le password de votre database dans KeyVault | ![image.png](/.attachments/image-9b61fd0c-7dfd-4791-b0de-56f3cd63ca20.png) |
| 4 | Le mot d'un user spécifique peut être changé par l'administrateur en allant dans la table  suivante. Attention le mot de passe devra surement être "hasché" et devra peut-être utiliser un salt. Voir wp-config.php qui contiendra le salt  | ![image.png](/.attachments/image-32bb2146-a5c0-4714-879d-9823ceed42c8.png) |