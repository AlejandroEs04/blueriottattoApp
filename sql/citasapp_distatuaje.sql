CREATE TABLE `distatuaje` (
  `citaID` int NOT NULL,
  `imagenURL` varchar(45) NOT NULL,
  KEY `fk_cita` (`citaID`),
  CONSTRAINT `fk_cita` FOREIGN KEY (`citaID`) REFERENCES `cita` (`id`)
)
