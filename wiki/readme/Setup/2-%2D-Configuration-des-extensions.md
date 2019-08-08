# Configuration des extensions

Voici les grandes étapes de configuration à réaliser
[[_TOC_]]


## Configurer le serveur de messagerie
Le serveur de messagerie permettra à WordPress de pouvoir envoyer des mails au nom de KPMG aux utilisateurs WordPress.
Il faut pour cela installer [ce plugin](https://wordpress.org/plugins/sendgrid-email-delivery-simplified/) (si ce n'est pas déjà fait).
![image.png](/.attachments/image-09cb74b1-82ed-446f-8370-af92a73fc443.png)
Voici la clée d'API à utiliser : **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** 
Attention c'est une clée d'API d'un serveur de test. Pensez à vérifier si une clée de prod existe.
![image.png](/.attachments/image-9689c7b9-aa25-4b40-9f62-79a5d90cd4ac.png)


## Externaliser les contenus volumineux sur un Azure BlobStorage

Liste des étapes à effectuer disponible dans [cette doc officielle](https://blogs.msdn.microsoft.com/azureossds/2017/06/21/migrate-wordpress-content-to-azure-blob-storage/)
Pour vous aider : 
Voici une commande réalisé avec AzCopy qui fonctionne (pensez quand même à changer le sas token et mettre le bon nom de votre blob storage) : <br/>
`.\azcopy cp "./wp-content/uploads" "https://pocwordpresskpmg.blob.core.windows.net/storage-wordpress/?sv=2018-03-28&ss=bfqt&srt=sco&sp=rwdlacup&se=2019-08-06T23:39:26Z&st=2019-08-06T15:39:26Z&spr=https&sig=RsskGW8aiyc1eExvA%2B%2FDkMoGlOYETC7JzV1Mu1uFW28%3D" --recursive=true`

## Plugger Application Insight

Télécharger cette extension (seulement si non déjà installée).
Mettre dans la page de configuration de l'extension la clée **instrumentation key** de l'AppInsight
![image.png](/.attachments/image-00ba590b-613c-4f52-bbc1-5fc8a7fb792d.png)

