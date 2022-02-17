<?php

$mysqli = new mysqli('127.0.0.1', 'root', '', 'proyecto_psq02');

if ($mysqli->connect_error) {
	echo " LO SENTIMOS, ESTE SITIO WEB ESTA EXPERIMENTANDO PROBLEMAS  <BR>";
	echo "error: Fallo al conectarse a mysql debido a:  " . $mysqli->connect_error . "<br>";

	exit;
} else {
	if ($_POST["id"] != null) {
		$id = $_POST["id"];
		$registros = $mysqli->query("DELETE  from liquidacion_prestaciones where id=$_POST[id]");
		header('Location: ../paginas/registro_borrado.html');
	} else {
		header('Location: ../paginas/eliminar_prestaciones.html');

	}
}
$mysqli->close();
