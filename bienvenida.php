<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("por favor deves iniciar session");
                window.location = "index.php"
            </script>   
        ';
        session_destroy();
        die();
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
    <h1>Bienvenido denuevo a Anuncios24</h1>  
<header>
<nav> 
    <ul>
        <a href="perfil.php?id=<?php echo $_SESSION['id']; ?>"><li>ir a mi perfil</li></a>
        <br />
        <a href="cerrar_sesion.php"><li>cerrar sesion</li></a>
        <br />
    </ul>
</nav>

<img src="img/imagen 1.svg">

</body>
</html>