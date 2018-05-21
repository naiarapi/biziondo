<?php session_start();
if(isset($_SESSION["validado"])!=true){
header("index.php");}
include("includes/conexiones.php");
$nombre=$_POST["cnombre"];
$usuario=$_POST["cusuario"];
$clave=$_POST["cclave"];
$sql="INSERT INTO admin_usuarios (admin_nombre,admin_usuario,admin_clave) VALUES ('$nombre','$usuario','$clave')";
mysqli_query($con,$sql);
header("Location:admin-index.php?usuario=insertado");
?>