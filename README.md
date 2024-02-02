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
<<<<<<< HEAD
   git clone https://github.com/zabdelhak/projetweb
=======
   git clone https://github.com/zabdelhak/projetweb.git
>>>>>>> a14446b12a36a8c0fffed6cb4dbcdc342e93e9ef

Configuration de la Base de Données :

Importez le fichier SQL fourni (projetweb\sql) dans votre système de gestion de base de données.
Configurez les informations de connexion à la base de données dans le fichier condb.php.

Serveur Web Local :

Utilisez XAMPP, WAMP, ou tout autre serveur web local.
Placez le projet dans le répertoire approprié du serveur web.

Accès à l'Application : http://127.0.0.1:81/projetweb/login.php 

aussi pour le bon fonctionnment on vous suggére de créé
-la table  chauffeur: 
 CREATE TABLE `user` (
  `iduser` int NOT NULL,
  `email` varchar(45) NOT NULL,
  `mdp` varchar(45) NOT NULL,
  `cel_number` varchar(45) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `user_fname` varchar(45) NOT NULL,
  `matricule` varchar(45) NOT NULL,
  `last_cnx` datetime DEFAULT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `numero_UNIQUE` (`cel_number`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-la table  trajet:
CREATE TABLE `trajet` (
  `idtrajet` int NOT NULL,
  `iduser` varchar(45) DEFAULT NULL,
  `pick_att` varchar(45) DEFAULT NULL,
  `pick_long` varchar(45) DEFAULT NULL,
  `drop_att` varchar(45) DEFAULT NULL,
  `drop_long` varchar(45) DEFAULT NULL,
  `date_depart` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtrajet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


=======
Accédez à l'application via votre navigateur web : http://127.0.0.1:81/projetweb/login.php (assurez-vous d'ajuster l'URL selon votre configuration).
>>>>>>> a14446b12a36a8c0fffed6cb4dbcdc342e93e9ef
