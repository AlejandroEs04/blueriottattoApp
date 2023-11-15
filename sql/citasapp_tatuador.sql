CREATE TABLE `tatuador` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `numero` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
)

INSERT INTO `tatuador` VALUES (1,'Carlos','Estrada','8112882028');