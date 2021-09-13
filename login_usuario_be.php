<?php

    session_start();

    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$usuario' and contrasena='$contrasena'");
    
    $contar = mysqli_num_rows($validar_login);

    if ($contar != 0) {

        while($row=mysqli_fetch_array($validar_login)) {

            if($usuario == $row['usuario'] && $contrasena == $row['contrasena'])

            {
                $_SESSION['usuario'] = $usuario;

                $_SESSION['id'] = $row['id'];

                header("location: bienvenida.php");
    
            }
        }
    }else {
                echo '
                <script>
                    alert("Usuario no existe, por favor verifique los datos introducidos");
                    window.location = "index.php";
                </script>
            ';
            }
        
            exit;
            
        
        
?>
   