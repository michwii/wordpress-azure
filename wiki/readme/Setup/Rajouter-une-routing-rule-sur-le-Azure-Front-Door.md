# Rajouter une routing rule sur le Azure Front Door

1. Créer une instance de FrontDoor
Créer une première règle de test qui pointe vers Google. <br/>
Voici les réglages :<br/>
FrontEnd Host <br/>
![image.png](/.attachments/image-5d495b6d-5ef9-490f-a6bb-c360ac626440.png)
Backend Pool : <br/>
![image.png](/.attachments/image-b9e6a630-48a5-426c-8849-0e0ce379a58e.png)
Rule : <br/>
![image.png](/.attachments/image-69f37dbb-6eef-488f-bb1f-a9c821d6b49b.png)
2. Rajouter une règle WAF
Depuis le market place créer une policy WAF dans le même resource group que Front Door : ![image.png](/.attachments/image-a557c0b8-1749-4d48-a483-1c435d095bc2.png)
Pensez à prendre un nom unique.
3. lier cette policy WAF à l'azure FrontDoor
![image.png](/.attachments/image-ccec8833-5f6c-41cb-b4cc-1ad5f6a74fad.png)