if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['id'] = $mysqli_num_rows ['id'];
        header("location: bienvenida.php");
        exit;


        else {
            echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "index.php";
            </script>
        ';
        exit;
    }
    



    br />
<?php if ['avatar'] != '' { ?>}
<img src="" height="100" width="100" />
<?php } ?>
<br />
<a href="editarperfil.php?id=<?php echo $_SESSION['id']; ?>">Editar mi perfil</a>
