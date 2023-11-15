CREATE TABLE `usuario` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `numero` varchar(11) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
)

INSERT INTO `usuario` VALUES (1,' Alejandro Raphael','Estrada Lopez','Rafa04','$2y$10$lwrgmZNOj0jPGDDRuf3i1.3kG7tCNYPKNctutT9ylGtK34oe8vkL6','8110367083',1),(2,' Juan','Perez','Juan0210','$2y$10$NEtIBrdmI0wE877FNtBxremYwxGwvMZTfZnTCB1ftVk9S0Cxq/.3C','81196751102',0);