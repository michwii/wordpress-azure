# Déploiement de la stack officielle WordPress 

Toutes les ressources qui seront créées dans les étapes qui vont suivre devront être créées dans le datacenter **France Central**

Liste des étapes : 
1. Créer un resource group respectant les conventions de nommage KPMG 
<br/> Ce resource group devra contenir uniquement les ressources nécessaires pour le wordpress.
2. Créer dans ce resource group une instance de WordPress présent dans le marketPlace
![image.png](/.attachments/image-54f8469a-72a2-422a-a94c-13c87f7d1384.png)
Bien selectionner la version Windows et non pas Linux. Prendre la version officielle maintenu par WordPress et non les versions d'autres éditeurs comme Bitnamie par exemple.
3. Voici la configuration recommandée : 
- [ ] **ServicePlan** : S2 minimum dédié à WordPress
- [ ] **Base de données** : dédiée / version 8 / 8vCore / 10TB espace disk / 30 jours de backup / Géorépliqué
- [ ] Pensez à bien sauvegarder l'username et le password de la base de données dans un coffre fort. 
- [ ] Keyvault ici peut faire l'affaire.
- [ ] **AppInsight** : Dédié / Collection level en mode recommandé

![image.png](/.attachments/image-a673839a-9ad2-4638-ad52-5c2878a49a70.png)