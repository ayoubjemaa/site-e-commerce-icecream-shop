###  Projet: IceCream Shop (e-commerce de parfums de glace) ![image](https://github.com/user-attachments/assets/6aca1d34-074a-4503-b92a-874ba9595c5c)

---
Conception et développement complet d'une plateforme e-commerce de glaces avec architecture MVC en PHP. Front-end responsive (HTML5/CSS3/Bootstrap/JavaScript) comprenant deux interfaces distinctes : client (catalogue, panier, commandes) et administration (gestion produits, stocks, utilisateurs). Back-end sécurisé utilisant PDO pour interactions avec base de données MariaDB (XAMPP) via opérations CRUD. Tests d'API réalisés avec Postman. Implémentation de fonctionnalités avancées : système de wishlist, notifications (SweetAlert), validation des données et protection contre injections SQL. Développement suivant les bonnes pratiques : versioning GitHub, code modulaire et documenté. Résultat : solution e-commerce complète et opérationnelle du catalogue à la facturation.
---
## 📸 Captures d’écran du projet (interface utilisateur)

1/Interfaces d’authentification :

a. Interface d'inscription : permet à l’utilisateur de créer un compte s’il n’en possède pas.

![image](https://github.com/user-attachments/assets/183006fb-5531-409a-aba6-ff866c96a50f)
b. Interface de connexion : permet à l’utilisateur de se connecter à son compte.

![image](https://github.com/user-attachments/assets/7ac4713b-97b1-46a8-82bd-a870cffabda3)
![image](https://github.com/user-attachments/assets/13f07c0b-6c25-48b8-b5a4-1c9957c53a0d)

2/🏠 Page d’accueil :

Permet à l’utilisateur de visualiser des informations clés sur :

• Notre site
• Nos services
• Nos parfums
• Nos boules de glace

![image](https://github.com/user-attachments/assets/f8c69abe-1832-4266-8c6b-a92c301595e3)
![image](https://github.com/user-attachments/assets/f345db71-7d21-4080-b07b-6f3653d6d74c)
![image](https://github.com/user-attachments/assets/9d278825-907a-49d0-b38f-c0fbed7111d7)
![image](https://github.com/user-attachments/assets/c594a84e-4002-4b08-8386-eeec4a091afe)
🧭 En-tête et pied de page (barre de navigation, liens utiles, etc.)
![image](https://github.com/user-attachments/assets/5cc6def8-6edc-47e0-a34a-c6bd4079352e)

3/📖 Page À propos (About Us) :

![image](https://github.com/user-attachments/assets/e3ccb7e1-cba8-499a-ac62-71cb187fc4d6)

Permet à l’utilisateur de découvrir des informations détaillées sur :

• Nos chefs
• Notre histoire – Taking Ice Cream To New Heights
• Les propriétaires du projet et le rôle de chacun
• Nos boules de glace

![image](https://github.com/user-attachments/assets/b1fe6425-b788-4070-baf9-2f5b5269dfd6)
![image](https://github.com/user-attachments/assets/63d41452-ac38-4b61-96af-bf1043a1db8c)
![image](https://github.com/user-attachments/assets/13a08039-07c0-4271-b0e6-36b749b0f70e)
![image](https://github.com/user-attachments/assets/1ef99091-a63d-477c-b130-3d83ef5c5674)
![image](https://github.com/user-attachments/assets/67debf65-bfb3-4bb0-9eb2-e394e868cdea)


4/ 🛒 Page Boutique (Shop) :

Permet à l’utilisateur d’ajouter des produits au panier ou à la liste de souhaits selon la quantité choisie, ou de recommander directement un parfum de glace.

![image](https://github.com/user-attachments/assets/78182307-13d1-4298-92da-2a406bd87aac)
![image](https://github.com/user-attachments/assets/e2cabefa-14d5-4877-804d-47a8dff0283e)
![image](https://github.com/user-attachments/assets/1776d7fa-4fc9-4dcb-b112-6551f6568e66)
![image](https://github.com/user-attachments/assets/dfed85cd-cbca-42cd-874b-c8e25b316cd8)

5/

👤 Espace utilisateur connecté :
Une fois inscrit, l’utilisateur peut se connecter pour :
• Visualiser et modifier son profil
• Mettre à jour ses coordonnées (stockées dans la table user de la base de données)
• Consulter sa liste de souhaits (wislist)
• Accéder à son panier et recommander des glaces

![image](https://github.com/user-attachments/assets/3ee02292-4797-4f9d-a072-bfe47e94a6e9)
![image](https://github.com/user-attachments/assets/1248ad1d-00c2-4da7-8369-5fbd7e29f304)
![image](https://github.com/user-attachments/assets/2a524842-8878-4aba-b8f6-7a7256b07dd9)
![image](https://github.com/user-attachments/assets/04587243-9d3f-467d-893d-202f2d76d1bd)
![image](https://github.com/user-attachments/assets/8af4fc81-0804-45ce-b783-96de52b60fc4)

❤️ Liste de souhaits :

Permet à l’utilisateur de sauvegarder ses parfums de glace préférés pour les retrouver facilement plus tard.(ex: 3 présent dans la capture) 
![image](https://github.com/user-attachments/assets/3c13899d-af7b-48c7-b361-8ed09e2b1cc6)
![image](https://github.com/user-attachments/assets/78858546-533e-4f76-927c-ff19532f9c08)

🧺 Gestion du panier :

• Affichage des produits ajoutés au panier (ex. : 4 produits)
• Possibilité de modifier la quantité de chaque produit
• Visualisation du montant total du panier
• Option pour vider entièrement le panier ou supprimer les produits un par un
• Possibilité de procéder au checkout pour finaliser la commande

![image](https://github.com/user-attachments/assets/d93cdc5b-3e7a-4a28-823c-3a2aaf9d6357)
![image](https://github.com/user-attachments/assets/adf985a9-a22b-4760-884c-c4825f748116)
![image](https://github.com/user-attachments/assets/a89a6aeb-1ea0-4026-a063-5552d763fa80)
![image](https://github.com/user-attachments/assets/ec485b7e-22ae-4e12-9272-688d76581651)




















