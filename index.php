<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logearse y registro</title> 

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="diseños.css">
</head>
<body>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿ya tienes una cuenta?</h3>
                    <p>inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">iniciar sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>registrate para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">regístrarse</button>
                </div>
            </div>
            <!--Formulario de Registro y login-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>ENTRAR</button>
                </form>
                <!--Registro-->
                <form action="registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
                    <input type="text" placeholder="Correo Electronico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>REGISTRARSE</button>
                </form>
            </div>
        </div>
    </main>

    <script src="script.js"></script>
</body>
</html>