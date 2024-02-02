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
