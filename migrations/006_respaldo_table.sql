-- autor: imendez@geeksolutions.mx
-- date: 11/14/2015
DROP TABLE IF EXISTS `respaldo`;

CREATE TABLE `respaldo` (
    `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    `poliza_id` INTEGER(6) NOT NULL,
    `notas` VARCHAR(100) NOT NULL,
    `telefono` VARCHAR(15) NOT NULL,
    `fecha` date,
    `cantidad` INTEGER(3) NOT NULL,
    `dvd` BOOLEAN NOT NULL,
    `hdd` BOOLEAN NOT NULL,
    `usuario_id` INTEGER(6) NOT NULL,

    PRIMARY KEY (`id`));

-- agregar respaldo iniciales

INSERT INTO `respaldo` VALUES (1, 2, "carretera transpeninsular km. 29.5, 5, La Joya, San Jose del Cabo, Los Cabos, Baja California Sur", "(624)1422954", NOW(), "2", FALSE, TRUE, 1);
