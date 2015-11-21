-- autor: imendez@geeksolutions.mx
-- date: 11/14/2015
DROP TABLE IF EXISTS `facturas`;
CREATE TABLE `facturas` (
    `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(32) NOT NULL,
    `folio_fiscal` VARCHAR(32) NOT NULL,
    `rfc` VARCHAR(14) NOT NULL,
    `empresa` VARCHAR(50) NOT NULL,
    `direccion` VARCHAR(256) NOT NULL,
    `estado`VARCHAR(50) NOT NULL,
    `fecha_inicial` date,
    `cantidad` INTEGER(3) NOT NULL,
    `descripcion` VARCHAR(100) NOT NULL,
    `precio` INTEGER(8) NOT NULL,
    PRIMARY KEY (`id`));

INSERT INTO `kekito`.`facturas` (`nombre`, `folio_fiscal`, `rfc`, `empresa`, `direccion`, `estado`, `fecha_inicial`, `cantidad`, `descripcion`, `precio`) VALUES ('ionattan', 'asddf34w', 'asdf34s', 'geeksolutions', 'asdfasdf', 'asdfasdf', '2015-11-15', 3, 'asdfasdf', 300);
INSERT INTO `kekito`.`facturas` (`nombre`, `folio_fiscal`, `rfc`, `empresa`, `direccion`, `estado`, `fecha_inicial`, `cantidad`, `descripcion`, `precio`) VALUES ('pipo', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', '2015-11-15', 3, 'asdfasd', 300);
