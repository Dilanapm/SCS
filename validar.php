<?php
$usuario=$_POST['usuario'];
$contrasenia=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","id22211476_group","Sistemas@123","id22211476_scs");

$consulta="SELECT*FROM usuarios where Usuario='$usuario' and Contrasenia='$contrasenia'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['ID_CARGO']==1){ //administrador
    header("location:admin.php");

}else
if($filas['ID_CARGO']==2){ //CONDUCTOR
header("location:conductor.php");
}
else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
