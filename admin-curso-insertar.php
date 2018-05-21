<?php session_start();
if(isset($_SESSION["validado"])!=true){
header("Location:formulario.php");}
include("includes/conexiones.php");
$titulo=$_POST["ctitulo"];
$fecha=$_POST["cfecha"];
$categoria=$_POST["ccategoria"];
$descripcion=$_POST["cdescripcion"];
$sql="INSERT INTO cursos (titulo_cursos,categoria,fecha_cursos,descripcion) VALUES ('$titulo','$categoria','$fecha','$descripcion')";
mysqli_query($con,$sql);
header("Location:admin-cursos.php?curso=insertado");
?>