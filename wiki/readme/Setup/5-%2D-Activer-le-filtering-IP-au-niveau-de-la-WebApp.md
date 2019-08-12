# Activer le filtering IP au niveau de la WebApp

Pour ne pas autoriser les utilisateurs à attaquer directement la WebApp mais à les forcer à passer par le WAF, il faut mettre en place du filtering ip entre la WebApp et Azure Front Door.

Liste des étapes à suivre :


|Etape| Description | Screenshot |
|--|--|--|
| 1 | Aller dans l'option **Networking** de la WebApp  | ![image.png](/.attachments/image-2b9b1ec5-2f8d-4325-a70b-321eb7d398b6.png) |
| 2 | Cliquer sur Configure Access Restriction |  |
| 3 | Autoriser le range d'IP V4 suivant : 147.243.0.0/16| ![image.png](/.attachments/image-a93dc310-af17-413a-ad1a-08eb46a63551.png) |
| 4 | Autoriser le range d'IP v6 suivant : 2a01:111:2050::/44 | ![image.png](/.attachments/image-d06b0877-6362-4e88-883d-2f71ed34aed1.png)  |

