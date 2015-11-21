-- autor: imendez@geeksolutions.mx
-- date: 11/14/2015
DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios` (
    `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(32) NOT NULL,
    `problema` VARCHAR(50) NOT NULL,
    `observaciones` VARCHAR(50) NOT NULL,
    `solucion` VARCHAR(50) NOT NULL,
    `factura` VARCHAR(10) NOT NULL,
    `precio` VARCHAR(10) NOT NULL,
    `fecha_inicial` date,
    PRIMARY KEY (`id`));

-- agregar servicios iniciales

	INSERT INTO `servicios` VALUES (1,"ionattan", "falla en teclado", "teclado con teclas pegadas por refresco", "se limpia el teclado", "az2550", "700.00", NOW());
