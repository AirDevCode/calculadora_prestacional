<?php

$mysqli = new mysqli('127.0.0.1', 'root', '', 'proyecto_psq02');

if ($mysqli->connect_error) {
    echo "LO SENTIMOS, ESTE SITIO ESTA PRESENTANDO PROBLEMAS";

    exit;
} else {
    echo "Bienvenidos";
    $id = $_POST["random"];
    $fecha_inicio = $_POST["dateIni"];
    $fecha_final = $_POST["dateEnd"];
    $salario = $_POST["salario"];
    $dias = $_POST["dias"];
    $cesantias = str_replace(".", "", $_POST["cesantias"]);
    $intereses_cesantias = str_replace(".", "", $_POST["intCesantias"]);
    $prima_uno = str_replace(".", "", $_POST["primSemestre"]);
    $prima_dos = str_replace(".", "", $_POST["segSemestre"]);
    $vacaciones = str_replace(".", "", $_POST["vacaciones"]);
    $total_liquidacion = str_replace(".", "", $_POST["totalLiq"]);
    $otro = 0;

    $sql = "INSERT INTO liquidacion_prestaciones values('" . $id . "','" . $fecha_inicio . "','" . $fecha_final . "','" . $salario . "','" . $dias . "','" . $cesantias . "', '" . $intereses_cesantias . "',
    '" . $prima_uno . "','" . $prima_dos . "','" . $vacaciones . "','" . $total_liquidacion . "','" . $otro . "')";

    $mysqli->query($sql);
    header('Location: ../paginas/success_prestaciones.html');
}

$mysqli->close();
