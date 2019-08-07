# Récupérer les statistiques de visite sur PowerBI


## Option 1 : Via JetPack

Merci de suivre le tutoriel suivant :
https://www.biinsight.com/analyse-your-wordpress-blog-stats-in-power-bi/

Résumé des étapes

1. Installer les plugins JetPack et Askimate antispam.
2. Configurer les plugins
3. Récuperer la clé d'API.
Example de requete simple : https://stats.wordpress.com/csv.php?api_key=1b1df849a8f1&blog_uri=poc-wordpress-kpmg.azurewebsites.net
4. Plugger PowerBI à la source de données externe et construire les rapports.

## Option 2 : Via Google Analytics

Liste des étapes à effectuer : 
1. Créer un compte google Analytics et le configurer pour fonctionner avec l'url sécurisée.
2. Installer le pluging 
![image.png](/.attachments/image-01cf7e61-28bf-439c-9b6a-aedcd6aaf629.png)
3. Le configurer en l'autorisant à se connecter au compte Google Analytics
4. Connecter PowerBI au compte Google Analytics.