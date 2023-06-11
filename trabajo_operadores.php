<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores de comparación</title>
  <style>
    h1{
      text-align: center;
    }
    table{
      background-color: #ffc;
      padding: 5px;
      border: #666 5px solid;
      width: 15%;
      margin-left: auto;
      margin-right: auto;
    }
    .no-validado{
      font-size: 18px;
      color: #f00;
      font-weight: bold;
      text-align: center;
    }
    .validado{
      font-size: 18px;
      color: #0c3;
      font-weight: bold;
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>USANDO OPERADORES DE COMPARACIÓN</h1>
  <form action="" method="post" name="datos_usuario" id="datos_usuario" >
    <table>
      <tr>
        <td>Nombre:</td>
        <td>
          <label for nombre_usuario></label>
          <input type="text" name="nombre_usuario" id="nombre_usuario">
        </td>
      </tr>
      <tr>
        <td>Edad:</td>
        <td>
          <label for nombre_usuario></label>
          <input type="text" name="edad_usuario" id="edad_usuario">
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
      </tr>
    </table>
  </form>

  <?php
    include "validacion.php";
  ?>
</body>
</html>