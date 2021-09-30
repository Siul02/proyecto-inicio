<?php
include 'conexion.php';
session_start();

$nombre1=$_POST['names'];
$password1=$_POST['pass1'];
$correo=$_POST['cor'];

$insertar = "INSERT INTO usuarios (nombre, contraseña, correo) VALUES ('$nombre1', '$password1', '$correo') ";

$resultado = mysqli_query($cone, $insertar);

if (!$resultado){

	echo "<script>alert('Error al registrarse intente de nuevo más tarde')</script>";
}
else{
			header("location:index.html");
  echo "<script>alert('Bienvenido')</script>";
  
}
mysqli_close($cone);
?>