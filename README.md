# TAWSILA - Application Web de Covoiturage avec Géolocalisation

Bienvenue dans TAWSILA, une application web de covoiturage intégrant la géolocalisation. 

## Technologies Utilisées

- PHP
- HTML
- CSS
- JavaScript
- Bootstrap
- MySQL (ou tout autre système de gestion de base de données)

## Configuration du Projet

1. **Cloner le Projet :**
   ```bash
   git clone https://github.com/zabdelhak/projetweb

Configuration de la Base de Données :

Importez le fichier SQL fourni (....) dans votre système de gestion de base de données.
Configurez les informations de connexion à la base de données dans le fichier condb.php.

Serveur Web Local :

Utilisez XAMPP, WAMP, ou tout autre serveur web local.
Placez le projet dans le répertoire approprié du serveur web.

Accès à l'Application :

Accédez à l'application via votre navigateur web : http://localhost/.... (assurez-vous d'ajuster l'URL selon votre configuration).
 
aussi pour le bon fonctionnment on vous suggére de créé
-la table  chauffeur:
iduser int PK 
email varchar(45) 
mdp varchar(45) 
cel_number varchar(45) 
user_name varchar(45) 
user_fname varchar(45) 
matricule varchar(45) 
last_cnx datetime 

-la table  trajet:
idtrajet int PK 
iduser varchar(45) 
pick_att varchar(45) 
pick_long varchar(45) 
drop_att varchar(45) 
drop_long varchar(45) 
date_depart varchar(45)

