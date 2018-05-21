<?php session_start();
include("includes/conexiones.php");
$usuario=$_POST["cusuario"];
$clave=$_POST["cclave"];
$_SESSION["admin_clave"]=$clave;
$sql="SELECT * FROM admin_usuarios WHERE (admin_usuario='$usuario') AND (admin_clave='$clave')";
$resultado=$con->query($sql);
if(mysqli_num_rows($resultado)){
$fila=mysqli_fetch_array($resultado);
$_SESSION["admin_usuario"]=$fila["admin_nombre"];
$_SESSION["validado"]="Ok";
header("Location:admin-citas.php");
}else{
header("Location:formulario.php?error=si");
}?>