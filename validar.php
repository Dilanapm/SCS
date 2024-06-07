<?php
$usuario=$_POST['usuario'];
$contrasenia=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","rol");

$consulta="SELECT*FROM usuarios where usuario='$usuario'     and     contrasenia='$contrasenia'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("location:admin.php");

}else
if($filas['id_cargo']==2){ //CONDUCTOR
header("location:conductor.php");
}
else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION por favor arregle esosdfsdfds</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);