<?php session_start();
if(isset($_SESSION["validado"])!=true){
header("Location:formulario.php");}
include("includes/conexiones.php");
$id=$_GET["vidcurso"];
$sql="SELECT * FROM cursos WHERE id_cursos=$id";
$resultado=$con->query($sql);
$fila=mysqli_fetch_array($resultado);
$sql="DELETE FROM cursos WHERE id_cursos=$id";
mysqli_query($con,$sql);
header("Location:admin-cursos.php?curso=eliminado");
?>