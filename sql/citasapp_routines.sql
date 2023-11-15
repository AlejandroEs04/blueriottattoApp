CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `citasapp`.`citasview` AS
    SELECT 
        `citasapp`.`cita`.`id` AS `id`,
        `citasapp`.`cita`.`fecha` AS `fecha`,
        `citasapp`.`cita`.`hora` AS `hora`,
        `citasapp`.`usuario`.`nombre` AS `nombre`,
        `citasapp`.`usuario`.`apellido` AS `apellido`,
        `citasapp`.`usuario`.`numero` AS `numero`,
        `citasapp`.`cita`.`finalizada` AS `finalizada`
    FROM
        (`citasapp`.`cita`
        JOIN `citasapp`.`usuario` ON ((`citasapp`.`usuario`.`id` = `citasapp`.`cita`.`userID`)))