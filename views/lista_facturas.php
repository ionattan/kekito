<!-- empieza lista de dispositivos -->
    <h2>lista de facturas</h2>
    <a  href="?seccion=crear_facturas" >crear factura</a>
    <table  style="width: 100%"  class="table-striped">
      <tbody>
        <tr>
          <td  style="background-color: rgb(192, 192, 192);">nombre</td>
          <td  style="background-color: rgb(192, 192, 192);">folio fiscal</td>
          <td  style="background-color: rgb(192, 192, 192);">rfc</td>
          <td  style="background-color: rgb(192, 192, 192);">empresa</td>
          <td  style="background-color: rgb(192, 192, 192);">direccion</td>
          <td  style="background-color: rgb(192, 192, 192);">estado</td>
          <td  style="background-color: rgb(192, 192, 192);">fecha inicial</td>
          <td  style="background-color: rgb(192, 192, 192);">cantidad</td>
          <td  style="background-color: rgb(192, 192, 192);">descripcion</td>
          <td  style="background-color: rgb(192, 192, 192);">precio</td>
          <td  style="background-color: rgb(192, 192, 192);">operaciones</td>
        </tr>
        <?php
          while($renglon= $facturas->fetch_assoc()){
        ?>
        <tr>
          <td> <?php echo $renglon["nombre"] ?> </td>
          <td> <?php echo $renglon["folio_fiscal"] ?> </td>
          <td> <?php echo $renglon["rfc"] ?> </td>
          <td> <?php echo $renglon["empresa"] ?> </td>
          <td> <?php echo $renglon["direccion"] ?> </td>
          <td> <?php echo $renglon["estado"] ?> </td>
          <td> <?php echo $renglon["fecha_inicial"] ?> </td>
          <td> <?php echo $renglon["cantidad"] ?> </td>
          <td> <?php echo $renglon["descripcion"] ?> </td>
          <td> <?php echo $renglon["precio"] ?> </td>
          <td>
            <a onclick="return confirm('seguro que quiere eliminar?')" href="?seccion=eliminar_facturas&renglon=<?php echo $renglon["id"];?>"><i class='fa fa-trash-o'></i> </a>
            <a href="?seccion=editar_facturas&renglon=<?php echo $renglon["id"];?>"><i class='fa fa-pencil'></i> </a>
          </td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
