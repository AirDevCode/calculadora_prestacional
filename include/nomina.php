<?php

$mysqli = new mysqli('127.0.0.1', 'root', '', 'proyecto_psq02');

if ($mysqli->connect_error) {
    echo "LO SENTIMOS, ESTE SITIO ESTA PRESENTANDO PROBLEMAS";

    exit;
} else {
    echo "Bienvenidos";
    $documento = $_POST["documento"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $cargo = $_POST["cargo"];
    $salario = $_POST["salario"];
    $dias_laborados = $_POST["dias_laborados"];
    $basico = str_replace(".", "", $_POST["basico"]);
    $transporte = str_replace(".", "", $_POST["transporte"]);
    $extraDia = $_POST["extraDia"];
    $extraNoche = $_POST["extraNoche"];
    $extraDiaFest = $_POST["extraDiaFest"];
    $extraNocheFest = $_POST["extraNocheFest"];
    $totalExtra = str_replace(".", "", $_POST["totalExtra"]);
    $otrosDev = $_POST["otrosDev"];
    $totalDev = str_replace(".", "", $_POST["totalDev"]);
    $eps = str_replace(".", "", $_POST["eps"]);
    $pension = str_replace(".", "", $_POST["pension"]);
    $fondo = str_replace(".", "", $_POST["fondo"]);
    $deducidos = $_POST["deducidos"];
    $totalDeducidos = str_replace(".", "", $_POST["totalDeducidos"]);
    $neto = 0;
    
    $sql = "INSERT INTO liquidacion_nomina values('" .$documento. "','" .$nombres. "','" .$apellidos. "','" .$cargo. "','" .$salario. "', '" .$dias_laborados. "',
    '" .$basico. "','" .$transporte. "','" .$extraDia. "','" .$extraNoche. "','" .$extraDiaFest. "', '" .$extraNocheFest. "',
    '" .$totalExtra. "','" .$otrosDev. "','" .$totalDev. "','" .$eps. "','" .$pension. "', '" .$fondo. "','" .$deducidos. "','" .$totalDeducidos. "', '" .$neto. "')";

    $mysqli->query($sql);
    header('Location: ../paginas/success.html');
}

$mysqli->close();
