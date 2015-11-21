<?php
  $servicios_eliminar=$_GET["renglon"];

  $conexion->query("delete from servicios where id=$servicios_eliminar");
?>
<script>
  window.location="http://kekito.dev"
</script>
