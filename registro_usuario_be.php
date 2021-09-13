<?php

    session_start();

    include 'conexion_be.php';

   $nombre_completo = $_POST['nombre_completo'];
   $correo = $_POST['correo'];
   $usuario = $_POST['usuario'];
   $contrasena = $_POST['contrasena'];

   //Encriptamiento de contraseña
   $contrasena = hash('sha512', $contrasena);

   $query = "INSERT INTO usuario(nombre_completo, correo, usuario, contrasena, avatar, descripcion) 
             VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena' , 'defect.png' , '$descripcion')";

    //verificar que el correo no se repita en la base de Datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo' ");
    
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "index.php";
            </script>
        ';
        exit();
    }

     //verificar que el nombre de usuario no se repita en la base de Datos
     $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$usuario' ");
    
     if(mysqli_num_rows($verificar_usuario) > 0){
         echo '
             <script>
                 alert("Este usuario ya esta registrado, intenta con otro diferente");
                 window.location = "index.php";
             </script>
         ';
         exit();
     }

    $ejecutar = mysqli_query($conexion, $query);   
    
    if($ejecutar){
        echo '
            <script>
                alert("usuario registrado exitosamente");
            </script>
        ';
    }else{
        echo '
            <script>
                alert("intentalo de nuevo, usuario no almacenado");
            </script>
        ';
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenidad - a todos</title>
    <link rel="stylesheet" href="estilos2.css">
</head>
<body>

<header>
    <h1>Hola bienvenido a Anuncialo ya </h1>  
    <h2> Ahora que ya te haz registrado inicia sesion con los datos que usastes para registrarte</h2>
<header>
<nav> 
    <ul>
        <a href="index.php"><li>ir a iniciar sesion</li></a>
    </ul>
</nav>

<img src="img/imagen 1.svg">

</body>
</html>