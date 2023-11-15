CREATE TABLE `comercio` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `logoURL` varchar(45) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `facebookURL` varchar(45) NOT NULL,
  `instagramURL` varchar(45) NOT NULL,
  `horaInicio` time DEFAULT NULL,
  `horaFin` time DEFAULT NULL,
  PRIMARY KEY (`id`)
)

INSERT INTO `comercio` VALUES (1,'Blueriot.tatto','','','','','https://www.instagram.com/blueriot.tattoo/','00:00:00','00:00:00');
