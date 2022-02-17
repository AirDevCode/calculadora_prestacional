<?php

include('config.php');
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            header('Location: ../paginas/menu_interno.html');
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="login">
    <div id="header">
        <ul class="nav">
            <li><a href="../index.html">Inicio</a></li>
            <li><a href="">Servicios</a>
                <ul>
                    <li><a href="../paginas/liquidador_nomina.html">Liquidador Nómina</a></li>
                    <li><a href="../paginas/liquidador_prestaciones.html">Liquidador Prestaciones Sociales</a></li>
                    <li><a href="../paginas/parafiscales.html">Liquidador Parafiscales</a></li>
                </ul>
            </li>
            <li><a href="../paginas/contacto.html">Contacto</a></li>
            <li><a href="../paginas/encuesta.html">Encuesta</a></li>
            <li><a href="./login.php">Login</a></li>
            <li><a href="./register.php">Registro</a></li>
        </ul>
    </div>
    <section class="login-content">
        <h1>INGRESE AL SISTEMA</h1>
        <form method="post" action="" name="signin-form" class="form-login">
            <div class="form-element">
                <label>Nombre de Usuario</label>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
            </div>
            <div class="form-element">
                <label>Contraseña</label>
                <input type="password" name="password" required />
            </div>
            <div class="button">
                <button type="submit" name="login" value="login">INGRESAR</button>
            </div>
        </form>
    </section>
</body>

</html>