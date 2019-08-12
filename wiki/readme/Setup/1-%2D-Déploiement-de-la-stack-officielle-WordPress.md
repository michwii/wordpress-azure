# Déploiement de la stack officielle WordPress 

Toutes les ressources qui seront créées dans les étapes qui vont suivre devront être créées dans le datacenter **France Central**

Liste des étapes : 

| Etape | Description | Screenshot |
|--|--|--|
| 1 | Créer un resource group respectant les conventions de nommage KPMG <br/> Ce resource group devra contenir uniquement les ressources nécessaires pour le wordpress. Créer dans ce resource group une instance de WordPress présent dans le marketPlace. Bien selectionner la version Windows et non pas Linux. Prendre la version officielle maintenu par WordPress et non les versions d'autres éditeurs comme Bitnamie par exemple. | ![image.png](/.attachments/image-54f8469a-72a2-422a-a94c-13c87f7d1384.png) |
| 2 | Voici la configuration recommandée : 1. **ServicePlan** : S2 minimum dédié à WordPress 2. **Base de données** : dédiée / version 8 / 8vCore / 10TB espace disk / 30 jours de backup / Géorépliqué 3. Pensez à bien sauvegarder l'username et le password de la base de données dans un coffre fort. 4. Keyvault ici peut faire l'affaire. 5. **AppInsight** : Dédié / Collection level en mode recommandé | ![image.png](/.attachments/image-a673839a-9ad2-4638-ad52-5c2878a49a70.png) |
| 3 | Mettre comme répo celui dans lequel se trouve le wiki. | ![image.png](/.attachments/image-1bba4c52-6a0a-4571-b11b-6cdbe58751f8.png)|
| 4 | Une fois l'infrastructure déployée, il faut lancer la première configuration. Choisissez comme langue le Français et choisissez un login et un mot de passe d'administrateur.Pensez à bien les sauvegarder dans votre KeyVault.| ![image.png](/.attachments/image-b8afccd7-d5cb-4fb7-bd96-eeea835c235a.png)|



