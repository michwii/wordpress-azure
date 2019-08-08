# Activer un read replica sur la base MySQL

Afin d'avoir une protection supplémentaire, il est recommendé d'ajouter au moins un read replica à la base de données.

Liste des étapes à effectuer.
Aller dans la configuration de la base de données.
Dans l'onglet Replicas, créer un réplica dans un autre data center que France Central.
![image.png](/.attachments/image-a4bb1802-badf-4de7-9956-5342595002b5.png)
Prendre West Europe.
4vCore devrait suffire. 
Prendre la même capacité de stokage que la database primaire.

Concernant le process de restore, suivre le [process officiel de Microsoft](https://docs.microsoft.com/fr-fr/azure/mysql/howto-restore-server-portal) pour restaurer une base.
Seul 30 jours sont disponibles.
