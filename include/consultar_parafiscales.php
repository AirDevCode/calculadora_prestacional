<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parafiscales</title>
  <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
  <div id="header">
    <ul class="nav">
      <li><a href="">Nómina</a>
        <ul>
          <li><a href="./mostrar_nomina.php">Ver Registros</a></li>
          <li><a href="../paginas/consultar_nomina.html">Consultar Registro</a></li>
          <li><a href="../paginas/eliminar_nomina.html">Eliminar Registro</a></li>
        </ul>
      </li>
      <li><a href="">Prestaciones</a>
        <ul>
          <li><a href="./mostrar_prestaciones.php">Ver Registros</a></li>
          <li><a href="../paginas/consultar_prestaciones.html">Consultar Registro</a></li>
          <li><a href="../paginas/eliminar_prestaciones.html">Eliminar Registro</a></li>
        </ul>
      </li>
      <li><a href="">Parafiscales</a>
        <ul>
          <li><a href="./mostrar_parafiscales.php">Ver Registros</a></li>
          <li><a href="../paginas/consultar_parafiscales.html">Consultar Registro</a></li>
          <li><a href="../paginas/eliminar_parafiscales.html">Eliminar Registro</a></li>
        </ul>
      </li>
      <li><a href="./logOut.php">Salir</a></li>
    </ul>
  </div>
  <section class="table table_parafiscales">
    <center>
      <h1>REGISTROS PARAFISCALES</h1>
    </center>
    <center>
      <table border=1>
        <th width=150 style="color: #ffffff;" bgcolor="#E84F0C">Id Registro</th>
        <th width=150 style="color: #ffffff;" bgcolor="#E84F0C">Sueldo Base</th>
        <th width=150 style="color: #ffffff;" bgcolor="#E84F0C">Sena</th>
        <th width=150 style="color: #ffffff;" bgcolor="#E84F0C">ICBF</th>
        <th width=150 style="color: #ffffff;" bgcolor="#E84F0C">Caja de Compensación</th>
        <th width=150 style="color: #ffffff;" bgcolor="#E84F0C">Total Parafiscales</th>
      </table>
    </center>
  </section>
</body>

<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'proyecto_psq02');
if ($mysqli->connect_error) {
  echo " LO SENTIMOS, ESTE SITIO WEB ESTA EXPERIMENTANDO PROBLEMAS  <BR>";
  echo "error: Fallo al conectarse a mysql debido a:  " . $mysqli->connect_error . "<br>";

  exit;
} else {

  if ($_POST["id"] != null) {
    $codigo = $_POST["id"];
    if (is_numeric($codigo)) {

      $sql = "SELECT * from parafiscales where id=$_POST[id]";
      $result = mysqli_query($mysqli, $sql);

      while ($mostrar = mysqli_fetch_array($result)) {

        echo "<center><table border=1 style='font-size:.6rem'>";

        echo "<td width=150>", $mostrar['id'] . "</td>";
        echo "<td width=150>", $mostrar['sueldo_base'] . "</td>";
        echo "<td width=150>", $mostrar['sena'] . "</td>";
        echo "<td width=150>", $mostrar['icbf'] . "</td>";
        echo "<td width=150>", $mostrar['caja'] . "</td>";
        echo "<td width=150>", $mostrar['total'] . "</td>";
      }
      echo "</table></center>";
    }else {
      echo '<script>alert("El registro debe ser numérico para ser consultado")</script> ';
    }
  }else {
    header('Location: ../paginas/consultar_parafiscales.html');
  }
}
$mysqli->close();
?>