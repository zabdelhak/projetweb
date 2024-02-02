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
