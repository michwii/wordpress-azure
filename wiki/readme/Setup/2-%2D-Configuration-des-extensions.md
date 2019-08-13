# Configuration des extensions

Voici les grandes étapes de configuration à réaliser : 


|Etape| Description | Screenshot |
|--|--|--|
| 1 | Le serveur de messagerie permettra à WordPress de pouvoir envoyer des mails au nom de KPMG aux utilisateurs WordPress. Il faut pour cela installer [ce plugin](https://wordpress.org/plugins/sendgrid-email-delivery-simplified/) (si ce n'est pas déjà fait). | ![image.png](/.attachments/image-09cb74b1-82ed-446f-8370-af92a73fc443.png) |
| 2 | Configurer la clée d'API suivante : **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**  Attention c'est une clée d'API d'un serveur de test. Pensez à vérifier si une clée de prod existe. | ![image.png](/.attachments/image-9689c7b9-aa25-4b40-9f62-79a5d90cd4ac.png) |
| 3 | Liste des étapes à effectuer disponible dans [cette doc officielle](https://blogs.msdn.microsoft.com/azureossds/2017/06/21/migrate-wordpress-content-to-azure-blob-storage/) Pour vous aider : Voici une commande réalisé avec AzCopy qui fonctionne (pensez quand même à changer le sas token et mettre le bon nom de votre blob storage) : <br/> `.\azcopy cp "./wp-content/uploads" "https://pocwordpresskpmg.blob.core.windows.net/storage-wordpress/?sv=2018-03-28&ss=bfqt&srt=sco&sp=rwdlacup&se=2019-08-06T23:39:26Z&st=2019-08-06T15:39:26Z&spr=https&sig=RsskGW8aiyc1eExvA%2B%2FDkMoGlOYETC7JzV1Mu1uFW28%3D" --recursive=true` |  |
| 4 | Télécharger l'extension APPINSIGHT (seulement si non déjà installée):| ![image.png](/.attachments/image-21c3696f-8770-4bdf-94de-170666cb8bf3.png) |
| 5 | Mettre dans la page de configuration de l'extension la clée **instrumentation key** de l'AppInsight (si ce n'est pas déjà fait). | ![image.png](/.attachments/image-00ba590b-613c-4f52-bbc1-5fc8a7fb792d.png) |
|6|Télécharger (seulement si nécessaire) l'extension suivante.|![image.png](/.attachments/image-920e0c46-f025-49ce-a21c-cd45c870f482.png)|
|  7 |  Ajouter sur le tenant de production Azure une application et garder bien son secret. (Vous pouvez le mettre dans le KeyVault du projet WordPress). Mettre en url autorisée, l'url de votre site WordPress protégée |   |
|  8 |  Configurer l'extension en y mettant votre clientid et votre clientsecret et en pensant à bien mettre le tenant de prod | ![image.png](/.attachments/image-ddbe2d4a-dae1-4d53-aec2-529acca82204.png)|
| 9 |  Rajouter un widget permettant aux utilisateurs de se connecter avec leur compte KPMG. |   |









