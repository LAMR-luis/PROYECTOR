<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include('db.php');
 $nombre=$_POST['nombre'];
 $usuario=$_POST['correo'];
 $password=$_POST['pass'];
 $conf_pass=$_POST['conf_pass'];
 $consulta="INSERT INTO `usuarios` (`nombre`, `correo`, `pass`, `conf_pass`) 
 VALUES ('$nombre', '$usuario', '$password', '$conf_pass')";
 $resultado=mysqli_query($conexion,$consulta) or die("error de registro");
 if($resultado){
  
  header("location:../php/login.php");

}else{
  ?>
  <?php
  echo"error de registro";

?>
<h1 class="bad">Usuario y/o contraseña incorrecto
</h1>
<?php
}
 mysqli_close($conexion);


?>