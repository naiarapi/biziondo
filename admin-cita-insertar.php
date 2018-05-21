<?php session_start();
if(isset($_SESSION["validado"])!=true){
header("formulario.php");}
include("includes/conexiones.php");
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$fecha=$_POST['fecha'];
$horario=$_POST['horario'];

$sql="INSERT INTO citas(nombre_citas,apellidos_citas,email_citas,telefono_citas,fecha_citas,horario_citas) VALUES ('$nombre','$apellidos','$email','$telefono','$fecha','$horario')";
$resultado = mysql_query($sql);

if ($resultado == true){ 
   
echo mysql_affected_rows()." registro insertado en la base de datos.";
echo $nombre;
mysqli_query($con,$sql);
header( "Location: index.php"); 
} 
else 
{ 
echo 'Hubo un problema en el envío del mensaje'; 
} 
?>









