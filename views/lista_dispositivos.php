<!-- empieza lista de dispositivos -->
    <h2>lista de dispositivos</h2>
    <a  href="?seccion=crear_dispositivos" >crear dispositivos</a>
    <table  style="width: 100%"  class="table-striped">
      <tbody>
        <tr>
          <td  style="background-color: rgb(192, 192, 192);">nombre</td>
          <td  style="background-color: rgb(192, 192, 192);">codigo</td>
          <td  style="background-color: rgb(192, 192, 192);">tipo</td>
          <td  style="background-color: rgb(192, 192, 192);">estado</td>
          <td  style="background-color: rgb(192, 192, 192);">ubicacion</td>
          <td  style="background-color: rgb(192, 192, 192);">activo</td>
          <td  style="background-color: rgb(192, 192, 192);">fecha inicial</td>
          <td  style="background-color: rgb(192, 192, 192);">notas</td>
          <td  style="background-color: rgb(192, 192, 192);">operaciones</td>
        </tr>
        <?php
          while($renglon= $dispositivos->fetch_assoc()){
        ?>
        <tr>
          <td> <?php echo $renglon["nombre"] ?> </td>
          <td> <?php echo $renglon["codigo"] ?> </td>
          <td> <?php echo $renglon["tipo"] ?> </td>
          <td> <?php echo $renglon["estado"] ?> </td>
          <td> <?php echo $renglon["ubicacion"] ?> </td>
          <td> <?php echo $renglon["activo"] ?> </td>
          <td> <?php echo $renglon["fecha_inicial"] ?> </td>
          <td> <?php echo $renglon["notas"] ?> </td>
          <td>
            <a onclick="return confirm('seguro que quiere eliminar?')" href="?seccion=eliminar_dispositivos&renglon=<?php echo $renglon["id"];?>"><i class='fa fa-trash-o'></i> </a>
            <a href="?seccion=editar_dispositivos&renglon=<?php echo $renglon["id"];?>"><i class='fa fa-pencil'></i> </a>
          </td>

        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
