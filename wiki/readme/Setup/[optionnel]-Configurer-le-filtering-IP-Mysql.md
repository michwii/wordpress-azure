# Configurer le filtering IP Mysql

Liste des étapes à effectuer : 
1. Récupérer les ips sortantes de la webapp contenant le wordpress : 
![image.png](/.attachments/image-647307f3-e09e-4005-aefe-d315131f563e.png)
2. Rajouter une à une les IPs dans la liste des IPs autorisées à se connecter à MYSQL
![image.png](/.attachments/image-b93a3556-b282-4e22-a6a4-36de21bbac66.png)
3. Supprimer la règle par default 0.0.0.0 --> 255.255.255.255