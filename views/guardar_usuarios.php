<?php

  $guardado=$conexion->query(sprintf('INSERT INTO `usuarios` VALUES (NULL, "%s", "%s", "%s", "%s", "%s", "%s", NOW(), "%s", "%s")',
    $_POST['nombre'], $_POST['nick'], $_POST['telefono'], $_POST['empresa'], $_POST['email'],
    $_POST['password'], $_POST['fecha_inicial'], $_POST['direccion'], $_POST['notas']
    ));

if($guardado) echo "usuario guardado";
