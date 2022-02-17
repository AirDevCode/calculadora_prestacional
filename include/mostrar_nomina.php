<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nómina</title>
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
    <section class="table table_nomina">

        <center>
            <H1>REGISTROS NÓMINA</H1>
        </center>
        <center>
            <table border=1 cellpadding="2">
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Doc.</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Nombres</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Apellidos</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Cargo</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Salario</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Días</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Sueldo</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Transp.</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">HED</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">HEN</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">HEDF</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">HENF</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Total Extras</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Otr. Devengados</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Total Devengados</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">EPS</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Pensión</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Fondo Solidaridad</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Otr. Deducidos</th>
                <th width=70 style="color: #ffffff;" bgcolor="#0b7ad4">Total Deducidos</th>
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
    $sql = "SELECT * from liquidacion_nomina";

    $result = mysqli_query($mysqli, $sql);


    while ($mostrar = mysqli_fetch_array($result)) {

        echo "<center><table border=1 style='font-size:.6rem'>";

        echo "<td width=70>", $mostrar['documento'] . "</td>";
        echo "<td width=70>", $mostrar['nombres'] . "</td>";
        echo "<td width=70>", $mostrar['apellidos'] . "</td>";
        echo "<td width=70>", $mostrar['cargo'] . "</td>";
        echo "<td width=70>", $mostrar['salario'] . "</td>";
        echo "<td width=70>", $mostrar['dias_laborados'] . "</td>";
        echo "<td width=70>", $mostrar['sueldo_basico'] . "</td>";
        echo "<td width=70>", $mostrar['transporte'] . "</td>";
        echo "<td width=70>", $mostrar['Nextra_dia'] . "</td>";
        echo "<td width=70>", $mostrar['Nextra_noche'] . "</td>";
        echo "<td width=70>", $mostrar['Nextra_dia_fest'] . "</td>";
        echo "<td width=70>", $mostrar['Nextra_noche_fest'] . "</td>";
        echo "<td width=70>", $mostrar['total_extras'] . "</td>";
        echo "<td width=70>", $mostrar['otros_devengados'] . "</td>";
        echo "<td width=70>", $mostrar['total_devengado'] . "</td>";
        echo "<td width=70>", $mostrar['eps'] . "</td>";
        echo "<td width=70>", $mostrar['pension'] . "</td>";
        echo "<td width=70>", $mostrar['fondo_solid'] . "</td>";
        echo "<td width=70>", $mostrar['otros_deducidos'] . "</td>";
        echo "<td width=70>", $mostrar['total_deducidos'] . "</td>";
    }
    echo "</table></center>";
}
$mysqli->close();
?>