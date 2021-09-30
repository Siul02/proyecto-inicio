<?php
include 'conexion.php';
session_start();


if (isset($_REQUEST['Ingresar'])) {
  
//estos valores los optienes del html

  $usuario = $_POST['name'];
  $paswwrod = $_POST['pass'];
  
  $consulta = "SELECT * FROM usuarios WHERE nombre = '$usuario'";
//estos es lo que hace que funcione las consulta o consultas
  $rusuario = mysqli_fetch_object(mysqli_query($cone, $consulta));

  //Se validad el usuario y el password para acceder a la pagina administradora
if ($rusuario->nombre == $usuario && $rusuario->contraseña == $paswwrod) {
  //El usuario existe entonces puede iniciar sesion
  header("location:inicio.html");
  echo "<script>alert('Usuario Correcto')</script>";
}else{
  //El usuario no existe 
  echo "<script>alert('usuario no valido')</script>";
  mysqli_close($cone);  
  echo "<script>window.location='index.html'</script>";
  session_destroy();
}


}

?>
