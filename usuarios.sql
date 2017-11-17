CREATE TABLE `usuarios` (
    `usuario_id` int(4) NOT NULL AUTO_INCREMENT,
    `usuario_nombre` varchar(15) NOT NULL DEFAULT '',
    `usuario_clave` varchar(32) NOT NULL DEFAULT '',
    `usuario_email` varchar(50) NOT NULL DEFAULT '',
    `usuario_freg` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    PRIMARY KEY (`usuario_id`)
)