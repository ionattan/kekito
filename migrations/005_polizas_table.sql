-- autor: imendez@geeksolutions.mx
-- date: 11/14/2015
DROP TABLE IF EXISTS `polizas`;

CREATE TABLE `polizas` (
    `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    `razon_social` VARCHAR(100) NOT NULL,
    `direccion_empresa` VARCHAR(250) NOT NULL,
    `telefono` VARCHAR(15) NOT NULL,
    `fecha` date,
    `rfc` VARCHAR(13) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `descripcion`VARCHAR(250) NOT NULL,
    `cantidad` INTEGER(3) NOT NULL,
    `precio_unitario` FLOAT NOT NULL,
    `total` FLOAT NOT NULL,
    `usuario_id` INTEGER(6) NOT NULL,
    PRIMARY KEY (`id`));

-- agregar polizas iniciales

INSERT INTO `polizas` VALUES (1, "Baja Vacations SDRL de CV", "carretera transpeninsular km. 29.5, 5, La Joya, San Jose del Cabo, Los Cabos, Baja California Sur", "(624)1422954", NOW(), "BVA070922J39", "imendez@geeksolutions.mx", "INSTALACION DE OFFICE Y ANTIVIRUS", "1", "100.00", "100.00", 1);
INSERT INTO `polizas` VALUES (2, "Baja 2", "carretera transp", "(624)1426432", NOW(), "meli840814m41", "emendez@geeksolutions.mx", "INSTALACION DE RED", "1", "250.00", "250.00", 2);
