CREATE TABLE `cita` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userID` tinyint NOT NULL,
  `tatuadorID` tinyint NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `finalizada` tinyint(1) DEFAULT (false),
  PRIMARY KEY (`id`),
  KEY `fk_user` (`userID`),
  KEY `fk_tatuador` (`tatuadorID`),
  CONSTRAINT `fk_tatuador` FOREIGN KEY (`tatuadorID`) REFERENCES `tatuador` (`id`),
  CONSTRAINT `fk_user` FOREIGN KEY (`userID`) REFERENCES `usuario` (`id`)
)

INSERT INTO `cita` VALUES (4,2,1,'2023-11-29','14:30:00',1),(5,2,1,'2023-11-17','15:00:00',0);