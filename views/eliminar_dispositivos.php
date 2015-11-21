<?php
  $dispositivos_eliminar=$_GET["renglon"];

  $conexion->query("delete from dispositivos where id=$dispositivos_eliminar");
?>
<script>
  window.location="http://kekito.dev"
</script>
