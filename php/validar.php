<?php
include('db.php');
$usuario=$_POST['correo'];
$password=$_POST['pass'];

$consulta="SELECT*FROM usuarios where correo='$usuario' and pass='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:../html/menu.html");

}else{
    ?>
    <?php
    include("../php/login.php");

  ?>
  <h1 class="bad">Usuario y/o contraseña incorrecto
  </h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
