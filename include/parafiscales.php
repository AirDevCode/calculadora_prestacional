<?php

$mysqli = new mysqli('127.0.0.1', 'root', '', 'proyecto_psq02');

if ($mysqli->connect_error) {
    echo "LO SENTIMOS, ESTE SITIO ESTA PRESENTANDO PROBLEMAS";

    exit;
} else {
    echo "Bienvenidos";
    $id = $_POST["random"];
    $salario = $_POST['salario'];
    $sena =  str_replace(".", "", $_POST['sena']);
    $icbf = str_replace(".", "", $_POST["icbf"]);
    $caja = str_replace(".", "", $_POST["caja"]);
    $total = str_replace(".", "", $_POST["total"]);

    $sql = "INSERT INTO parafiscales values('" . $id . "', '" . $salario . "', '" . $sena . "','" . $icbf . "','" . $caja . "','" . $total . "')";

    $mysqli->query($sql);
    header('Location: ../paginas/success_parafiscales.html');
}

$mysqli->close();
