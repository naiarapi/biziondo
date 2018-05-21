<?php session_start();
if(isset($_SESSION["validado"])!=true){
header("Location:formulario.php");}
include("includes/conexiones.php");
$id=$_GET["vidusuario"];
$sql="SELECT * FROM admin_usuarios WHERE id=$id";
$resultado=$con->query($sql);
$fila=mysqli_fetch_array($resultado);
$sql="DELETE FROM admin_usuarios WHERE id=$id";
mysqli_query($con,$sql);
header("Location:admin-index.php?usuario=eliminado");
?>