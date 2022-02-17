<?php

$mysqli = new mysqli('127.0.0.1', 'root', '', 'proyecto_psq02');

if ($mysqli->connect_error) {
	echo " LO SENTIMOS, ESTE SITIO WEB ESTA EXPERIMENTANDO PROBLEMAS  <BR>";
	echo "error: Fallo al conectarse a mysql debido a:  " . $mysqli->connect_error . "<br>";

	exit;
} else {
	if ($_POST["documento"] != null) {
		$documento = $_POST["documento"];
		$registros = $mysqli->query("DELETE  from liquidacion_nomina where documento=$_POST[documento]");
		header('Location: ../paginas/registro_borrado.html');
	} else {
		header('Location: ../paginas/eliminar_nomina.html');

	}
}
$mysqli->close();
