# Proteger WordPress avec Azure Front Door


|Etape| Description | Screenshot |
|--|--|--|
| 1 | Créer une instance de FrontDoor. Créer une première règle de test qui pointe vers Google.  Voici la configuration du FrontEnd Host| ![image.png](/.attachments/image-5d495b6d-5ef9-490f-a6bb-c360ac626440.png) |
| 2 | Voici la configuration du backendpool | ![image.png](/.attachments/image-b9e6a630-48a5-426c-8849-0e0ce379a58e.png) |
| 3 | Voici la configuration de la rule | ![image.png](/.attachments/image-69f37dbb-6eef-488f-bb1f-a9c821d6b49b.png) |
| 4 | Depuis le market place créer une policy WAF dans le même resource group que Front Door. Pensez à prendre un nom unique. |  ![image.png](/.attachments/image-a557c0b8-1749-4d48-a483-1c435d095bc2.png) |
| 5 | Lier cette policy WAF à l'azure FrontDoor | ![image.png](/.attachments/image-ccec8833-5f6c-41cb-b4cc-1ad5f6a74fad.png) |
| 6 | Rajouter un FrontEndHost qui pointe vers le bon nom de domaine voulu par le métier |  |
| 7 | Rajouter un backend pool qui pointe vers l'instance de wordpress. Les HTTP HEALTH PROBES doivent être en HTTPS |  |
| 8 | Rajouter une règle pour faire le redirect de l'http vers l'https. | ![image.png](/.attachments/image-ddfdc405-e796-46c1-8e54-a7f70bfcb883.png) |
| 9 | Rajouter une règle classique permettant de protéger le site internet | ![image.png](/.attachments/image-30f4ae09-013d-4ee0-94a7-109ac6d9d6c0.png) |
| 10 | Rajouter la gestion du certificat. Demander au NITSO si possiiblité de laisser FrontDoor gérer le certificat à notre place. Si oui, activer la gestion des certificats custom par front Door. Attention temps d'attente assez long. | ![image.png](/.attachments/image-8f9ea86d-7fff-4267-81dc-7c4b2fe10c27.png) |

