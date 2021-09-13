<?php

    session_start();
    include 'conexion_be.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<a href="index.php">Regresar al inicio</a>
<br /> <br />

<?php
if(isset($_GET['id'])) {

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE id = '".$_GET['id']."'");

    while($row=mysqli_fetch_array($validar_login)) { 
?>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <p>
        <label for="textfield2"></label>
        Usuario
        <input type="text" name="usuario" id="textfield" value="<?php echo $row['usuario'] ; ?>"/>
    </p>
    <p>
        Descripcion
        <input type="text" name="descripcion" id="textfield" value="<?php echo $row['descripcion'] ; ?>"/>
    </p>
        Avatar
    <p><img src="<?php echo $row['avatar'] ; ?>" height="100" width="100" />
    
    </p>
    <p>
        <label for="fileField"></label>
        <input type="file" name="avatar" id="fileField" />
    </p>
    <p>
        <input type="submit" name="editar" id="button" value="Editar Perfil" />
    </p>
</form>

<?php if(isset($_POST['editar'])) {

$usuario = $_POST['usuario'] ;
$descripcion = $_POST['descripcion'] ;


$sql = mysqli_query($conexion, "UPDATE usuario SET usuario = '".$usuario."', descripcion = '".$descripcion."' WHERE id = '".$_GET['id']."'");

if($sql)  {echo "Se han actualizado los datos"; }


}
?>

<?php
    }
}
?>

</body>
</html>