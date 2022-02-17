<?php

include('config.php');
session_start();

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }

    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();

        if ($result) {
            header('Location: ../paginas/success_register.html');;
        } else {
            echo '<script>alert("El registro ha fallado. Inténtelo más tarde.")</script>';
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="register-body">
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
    <section class="register-content">
        <h1>REGISTRO EN EL SISTEMA</h1>
        <form method="post" action="" name="signup-form" class="register-form">
            <div class="form-element">
                <label>Nombre de Usuario</label>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
            </div>
            <div class="form-element">
                <label>Correo Electrónico</label>
                <input type="email" name="email" required />
            </div>
            <div class="form-element">
                <label>Contraseña</label>
                <input type="password" name="password" required />
            </div>
            <div class="button">
                <button type="submit" name="register" value="register">REGISTRARSE</button>
            </div>
        </form>
    </section>
</body>

</html>