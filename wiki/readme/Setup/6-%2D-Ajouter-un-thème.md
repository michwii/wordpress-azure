# Ajouter un thème


|Etape| Description | Screenshot |
|--|--|--|
| 1 | Rechercher un thème qui correspond au besoin.  | ![image.png](/.attachments/image-723230fd-7435-4c15-ac0c-aceb48ea6925.png) |
| 2 | L'installer et l'activer | ![image.png](/.attachments/image-f63764b7-868e-49e2-a69f-faac7f0aed8e.png) |
| 3 | Configurer le thème pour le faire correspondre à l'image de marque KPMG et au besoin | ![image.png](/.attachments/image-d96a027e-e954-4500-aa11-e48599673556.png) |
| 4 | Rajouter cette ligne de code : `remove_filter('template_redirect', 'redirect_canonical');` Dans le fichier **wp-content/themes/[nom-de-votre-template]/functions.php** du template installé. Demander à ITS de le faire car vous ne devriez pas avoir les droits d'éditer en direct les fichiers | ![image.png](/.attachments/image-063798a2-0777-44c7-8e8a-0c7b9c6e43cf.png) |
| 5 | Contacter les équipes marketing et sécurité pour s'assurer que le template répond bien aux exigences de l'image de marque, aux requirements GDPR et aux exigences sécurité |  |
