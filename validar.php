<?php 

include('db.php');

$nombre=$_POST['nombre'];
$password=$_POST['password'];



$conexion=mysqli_connect("localhost","root","","validar");


$consulta = "SELECT* FROM personal where nombre= '$nombre' and password ='$password' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.html");
}else{
    include("registrar.html");
    ?>
    <h1>Error al registrarse</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>