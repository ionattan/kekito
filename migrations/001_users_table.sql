-- autor: imendez@geeksolutions.mx
-- date: 11/14/2015
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
    `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(32) NOT NULL,
    `nick` VARCHAR(10) NOT NULL,
    `telefono` VARCHAR(50) NOT NULL,
    `empresa` VARCHAR(50) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `password`VARCHAR(10) NOT NULL,
    `fecha_inicial` date,
    `direccion` VARCHAR(256),
    `notas` TEXT(512) NOT NULL,
    PRIMARY KEY (`id`));

-- agregar usuarios iniciales

	INSERT INTO `usuarios` VALUES (1, "ADMINISTRADOR", "admin", "6241422954", "GEEKSOLUTIONS", "admin@geeksolutions.mx", "12345", NOW(), "sadfasdfasdf sdfadfsg", "hola mundo");
	INSERT INTO `usuarios` VALUES (2, "INVITADO", "guest", "6241426432", "GEEKSOLUTIONS", "guest@geeksolutions.mx", "12345", NOW(), "sadfaasdfasdfasdf sdfadfsg", "hola mundo2");
