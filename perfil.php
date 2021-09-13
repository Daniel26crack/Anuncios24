<?php

    session_start();
    include 'conexion_be.php';

    if(!isset($_SESSION['usuario'])){
        header("location: index.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú lateral responsive - MagtimusPro</title>

    <link rel="stylesheet" href="estilos3.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>

    </header>
      
    <div class="menu__side" id="menu_side">
        <div class="name__page">
            <i class="fab fa-youtube"></i>
            <h4>Daniel507Crack</h4>
        </div>
    </a>

        <div class="options__menu">	

            <a href="pagina_principal.php">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Pagina principal</h4>
                </div>
            </a>

            <a href="https://anuncios24.000webhostapp.com/portafolio.html">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>Portafolio</h4>
                </div>
            </a>
            
            <a href="#">
                <div class="option">
                    <i class="fas fa-video" title="Cursos"></i>
                    <h4>Cursos</h4>
                </div>
            </a>

            <a href="">
                <div class="option">
                    <i class="far fa-sticky-note" title="Blog"></i>
                    <h4>Blog</h4>
                </div>
            </a>

            <a href="https://anuncios24.000webhostapp.com/registro/perfil.php" class="selected">
                <div class="option">
                    <i class="far fa-id-badge" title="Contacto"></i>
                    <h4>Perfil</h4>
                </div>
            </a>

            <a href="https://anuncios24.000webhostapp.com/nosotros.html">
                <div class="option">
                    <i class="far fa-address-card" title="Nosotros"></i>
                    <h4>Nosotros</h4>
                </div>
            </a>
            <a href="https://anuncios24.000webhostapp.com/">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Regresar al Inicio</h4>
                </div>
            </a>

        </div>

    </div>

    <main>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
if(isset($_GET['id'])) {

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE id = '".$_GET['id']."'");

    while($row=mysqli_fetch_array($validar_login)) { 
?>

<a href="index.php">Regresar al Inicio</a>
<br /> <br />

Bienvenido <strong><?php echo $_SESSION['usuario']; ?> </strong>

<br />
<?php if($row['avatar'] != '') { ?>
<img src="" height="100" width="100" />
<?php } ?>
<br />
<a href="editarperfil.php?id=<?php echo $_SESSION['id']; ?>">Editar Perfil</a>
     
<?php
    }
}
?>

    	
		
<?php		
	
?>

</body>
</html>
    </main>

    </body> 
    <script src="maiin.js"></script>
</body>
</html>