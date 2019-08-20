# Architecture

Voici l'architecture de la solution :
 

![image.png](/.attachments/image-53566284-3e1e-4bdc-93e6-ac263ba880cc.png)


|Composant| Description | Mutualisé entre les instances WordPress|
|--|--|--|
| Azure AD | Permet aux utilisateurs KPMG de se logger à l'interface d'ADMIN du WordPress avec leur crédential KPMG. | Oui |
| Application Insights | Permet de stocker les statistiques d'utilisation des sites WordPress | Oui |
| Storage Account | Permet de stocker les uploads des différents administrateurs | Oui |
| KeyVault | Stocker les crédentials importants d'administration de WordPress | Oui |
| FrontDoor | Porte d'entrée de toutes les requêtes allant vers les WordPress. C'est un WAF. | Oui |
| WAF Policy | Règles WAF du Front Door. Quels sont les requêtes que je dois bloquer et celles que je dois accepter | Oui |
| WebAPP + Service Plan | Serveur Web contenant le code du WordPress. 1 WordPress = 1 Web APP = 1 service plan | Non |
| MySQL | Base de données du WordPress. 1 WordPress = 1 base de données MYSQL| Non |
| 1 Repo Azure DevOps | Contient le code Custom KPMG de notre instance WordPress |  Oui|

