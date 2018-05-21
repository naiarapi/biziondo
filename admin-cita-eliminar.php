<?php session_start();
if(isset($_SESSION["validado"])!=true){
header("Location:formulario.php");}
include("includes/conexiones.php");
$id=$_GET["vidcita"];
$sql="SELECT * FROM citas WHERE id_citas=$id";
$resultado=$con->query($sql);
$fila=mysqli_fetch_array($resultado);
$sql="DELETE FROM citas WHERE id_citas=$id";
mysqli_query($con,$sql);
header("Location:admin-citas.php?citas=eliminado");
?>