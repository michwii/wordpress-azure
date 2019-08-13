# Récupérer les statistiques de visite sur PowerBI


## Option 1 : Via Application Insight


|Etape| Description | Screenshot |
|--|--|--|
| 1 | Créer une clée d'API pour Application Insight et la sauvegarder dans le KeyVault | ![image.png](/.attachments/image-c199bda0-2753-42dd-a98b-6bdc7cee3e88.png) |
| 2 | Rentrer dans la partie **Analytics** d'Application Insight | ![image.png](/.attachments/image-8f02c75e-1e31-4e9a-a126-434ca63f91c0.png) |
| 3 | Faire un extract de la table **pageViews** en écrivant simplement `pageViews` et lancer l'extract | ![image.png](/.attachments/image-afde50f9-4b5e-491d-b19e-fc2c185a7c65.png) |
| 4 | Exporter le resultat au format PowerBI. Un fichier texte va se générer | ![image.png](/.attachments/image-8af779b4-26dc-48ad-880a-fe5a6f5e4ae5.png) |
| 5 | Aller dans PowerBI et importer le en allant dans Obtenir les données --> Requête vide | ![image.png](/.attachments/image-fb9f571d-2168-4b88-ba07-9791bf07b984.png) |
| 6 | Coller l'export Application Insight dans la fenêtre d'édition avancée de PowerBI | ![image.png](/.attachments/image-b124dc5e-99b0-46ca-ab69-9d096a302ef9.png) |
| 7 | Authentifier vous à l'Application Insight avec une authentification de base. Mettre dans le champs **Nom d'utilisateur** l'API key créée dans l'étape 1. ne rien mettre en password | ![image.png](/.attachments/image-fb3d773a-3f96-40e6-9a0e-669ea7e6950b.png) |
| 8 | Refaite les étapes 3, 4, 5, 6 mais cette fois si avec la table `requests` |  |
| 9 | Commencer à analyser vos données | ![image.png](/.attachments/image-100d7f55-6863-4d8f-9941-ca78e3c8334d.png) |



## Option 2 : Via Google Analytics

Liste des étapes à effectuer : 

|Etape| Description | Screenshot |
|:--:|--|--|
| 1 | Créer un compte google Analytics et le configurer pour fonctionner avec l'url sécurisée. | ![image.png](/.attachments/image-67dca59c-f94b-46ca-bd3d-8b6731fe5c46.png) |
| 2 | Installer le pluging | ![image.png](/.attachments/image-01cf7e61-28bf-439c-9b6a-aedcd6aaf629.png) |
| 3 | Le configurer en l'autorisant à se connecter au compte Google Analytics |  |
| 4 | Connecter PowerBI au compte Google Analytics. | ![image.png](/.attachments/image-b4ec8de0-cfa3-4718-8223-f0b978f1b9ad.png) |
