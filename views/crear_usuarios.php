    <h1>Editor de usuario</h1>
    <form action="/?seccion=guardar_usuarios" method="post" >
    <table  style="width: 100%"  border="1">
      <tbody>
        <tr>
          <td>nombre</td>
          <td><input  placeholder="Escribe tu Nombre completo"  autocomplete="off" maxlength="30"  size="30"  name="nombre"  type="text"> </td>        </tr>
        <tr>
          <td>nick</td>
          <td><input  autocomplete="off"  maxlength="12"  size="12"  required="required" placeholder="escribe tu nick"  name="nick"  type="text"> </td>        </tr>        <tr>
          <td>telefono</td>
          <td><input  autocomplete="off"  maxlength="10"  size="10"  placeholder="(LADA)" name="telefono"  type="tel"> </td>        </tr>        <tr>
          <td>empresa</td>
          <td><input  maxlength="50"  size="30"  placeholder="Escribe tu empresa" name="empresa"  type="text"> </td>        </tr>        <tr>
          <td>email</td>
          <td><input  autocomplete="off"  maxlength="50"  size="30"  placeholder="Escribe tu email" name="email"  type="email"> </td>        </tr>        <tr>
          <td>password</td>
          <td><input  autocomplete="off"  maxlength="20"  size="20"  required="required" placeholder="Escribe tu password"  name="password"  type="password"> </td>        </tr>        <tr>
          <td>fecha inicial</td>
          <td><input  autocomplete="on"  required="required"  name="fecha_inicial" type="date"> </td>        </tr>        <tr>
          <td>direccion</td>
          <td><input  maxlength="50"  size="40"  placeholder="Escribe tu Direccion" name="direccion"  type="text"> </td>        </tr>
        <tr>
          <td>notas</td>
          <td><textarea  maxlength="512"  placeholder="Comentarios"  rows="5"  cols="30" name="notas"></textarea> </td>        </tr>        <tr>
          <td>
          </td>
          <td><button  type="submit"  value="Guardar" name="guardar">guardar</button></td>        </tr>      </tbody>
    </table>

    </form>
