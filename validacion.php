<?php
$usuario = $_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

include('conex.php');

$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND cast(AES_DECRYPT(contraseña,'xyz123') as char)  = '$contraseña'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    ?>
    <div class="alert alert-danger" role="alert" id = "">
        Error en la autentificacion.
    </div>
    <?php
    
    include("index.php");
    ?>
    
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
