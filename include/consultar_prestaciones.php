<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prestaciones</title>
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
  <section class="table table_prestaciones">

    <center>
      <H1>REGISTRO CONSULTADO</H1>
    </center>
    <center>
      <table border=1 cellpadding="2">
        <th width=100 style="color: #ffffff;" bgcolor="#754cf0">Id</th>
        <th width=100 style="color: #ffffff;" bgcolor="#754cf0">Fecha inicio</th>
        <th width=100 style="color: #ffffff;" bgcolor="#754cf0">Fecha final</th>
        <th width=100 style="color: #ffffff;" bgcolor="#754cf0">Salario</th>
        <th width=100 style="color: #ffffff;" bgcolor="#754cf0">Días</th>
        <th width=100 style="color: #ffffff;" bgcolor="#754cf0">Cesantias</th>
        <th width=100 style="color: #ffffff;" bgcolor="#754cf0">Intereses cesantias</th>
        <th width=100 style="color: #ffffff;" bgcolor="#754cf0">Prima uno</th>
        <th width=100 style="color: #ffffff;" bgcolor="#754cf0">Prima dos</th>
        <th width=100 style="color: #ffffff;" bgcolor="#754cf0">Vacaciones</th>
        <th width=100 style="color: #ffffff;" bgcolor="#754cf0">Total liquidacion</th>
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
      $sql = "SELECT * from liquidacion_prestaciones where id=$_POST[id]";

      if ($sql) {
        $result = mysqli_query($mysqli, $sql);
        while ($mostrar = mysqli_fetch_array($result)) {

          echo "<center><table border=1 style='font-size:.6rem'>";

          echo "<td width=100>", $mostrar['id'] . "</td>";
          echo "<td width=100>", $mostrar['fecha_Inicio'] . "</td>";
          echo "<td width=100>", $mostrar['fecha_final'] . "</td>";
          echo "<td width=100>", $mostrar['salario'] . "</td>";
          echo "<td width=100>", $mostrar['dias'] . "</td>";
          echo "<td width=100>", $mostrar['cesantias'] . "</td>";
          echo "<td width=100>", $mostrar['intereses_cesantias'] . "</td>";
          echo "<td width=100>", $mostrar['prima_uno'] . "</td>";
          echo "<td width=100>", $mostrar['prima_dos'] . "</td>";
          echo "<td width=100>", $mostrar['vacaciones'] . "</td>";
          echo "<td width=100>", $mostrar['total_liquidacion'] . "</td>";
          echo "</table></center>";
        }
        $mysqli->close();
      }
    } else {
      echo '<script>alert("El registro debe ser numérico para ser consultado")</script> ';
    }
  } else {
    header('Location: ../paginas/consultar_prestaciones.html');
  }
}

?>