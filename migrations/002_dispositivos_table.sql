-- autor: imendez@geeksolutions.mx
-- date: 11/14/2015
DROP TABLE IF EXISTS `dispositivos`;
CREATE TABLE `dispositivos` (
    `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(32) NOT NULL,
    `codigo` VARCHAR(10) NOT NULL,
    `tipo` VARCHAR(50) NOT NULL,
    `estado` VARCHAR(50) NOT NULL,
    `ubicacion`VARCHAR(50) NOT NULL,
    `activo` BOOLEAN DEFAULT true,
    `fecha_inicial` date,
    `notas` TEXT(512) NOT NULL,
    PRIMARY KEY (`id`));

-- agregar dispositivos iniciales

	INSERT INTO `dispositivos` VALUES (1,"impresora recepcion", "imp100", "impresora", "nueva", "recepcion", true, NOW(), "NO TIENE UNA PATA");
