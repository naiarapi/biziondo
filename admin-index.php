<?php session_start();
if(isset($_SESSION["validado"])!=true){
header("Location:formulario.php");
}
include("includes/conexiones.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Admin-index</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans" rel="stylesheet">
<link href="admin.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.12.0.js"></script>
<!--    JQUERY Y CSS para MODAL  -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>

<script>
			
			function confirmar(id){
				//alert(id);
				eliminar=confirm("¿Desea eliminar este usuario?");
				if(eliminar==true){
					window.location.href="admin-usuario-eliminar.php?vidusuario="+id;
				}else{
					alert('No se ha eliminado el usuario.');
				}

			}
			
			
		</script>
		
</head>

<body>
<header>


	<a href="index.php"><img src="img/logo.png" title="logo" alt="logo" class="logo"></a>
	
</header>
<nav>


<?php 
	
	$activo1="class='activo'";
	$activo2="";
	$activo3="";
	$activo4="";
?>
	<?php include("includes/menu_2.php");?>
	
</nav>




<div id="container">

<h1 class="h1">GESTIÓN DE USUARIOS</h1>

<article>

	<h2 class="titulillos">Insertar nuevo usuario</h2>
	
			<?php 
	if(isset($_GET["usuario"])){
		
		if($_GET["usuario"]=="insertado"){
			echo "<p class='verde'> _Nuevo usuario insertado_</p>";
		}
	}
	?>
	
	

	


	
<form id="form1" method="post" action="admin-usuario-insertar.php" class="col-lg-12">
			
				<label>Nombre</label>
				<input type="text" name="cnombre">
				
				 <br>
				
				<label>Usuario</label>
				<input type="text" name="cusuario">
				
				<br>
				<label>Clave</label>
				<input type="password" name="cclave">
				
				
				<br><br>
				
				<input type="submit" name="button" value="Insertar usuario" class="enviar">
				
</form>
			
		
	</article>
	
	<br><br>
	
	<article>

	<h2 class="titulillos">Gestionar usuarios</h2>
	
			<?php 
		
		
	if(isset($_GET["usuario"])){
		
		if($_GET["usuario"]=="eliminado"){
			echo "<p class='verde'> _Usuario elimiado_</p>";
		}
	}
	?>

	
  		
  		
  		
	  <?php 
	
	//la consulta
	$_pagi_sql="SELECT * FROM admin_usuarios ORDER BY id ASC";
	
	//cantidad de resgistros que tendra como maximo cada pagina
	$_pagi_cuantos=5;
	
	//contiene lo que debe ir en el enlace a la primera pagina
	$_pagi_nav_primera="";
	
	//contiene lo que debe ir en el enlace a la ultima pagina
	$_pagi_nav_ultima="";
	
	//$pagi_nav_anterior="";
	//$pagi_nav_siguiente="";
	
	//$_pagi_separador="-";
	
	
	$_pagi_nav_num_enlaces=5;
	
	//include para poder paginar los resultados de la consulta
	include("includes/paginator_es.inc.php");
	
	//OJO $resultado ya no se puede ejecutar porque lo hace desde el archivo includes	
		
	
	?>
	<table width="100%" border="0" cellspacing="30" cellpadding="20" id="tabla" class="col-lg-12">
  <tbody>
  
    <tr class="arr">
      <th scope="col" class="col-lg-4">Nombre</th>
      <th scope="col" class="col-lg-4">Usuario</th>
      <th scope="col" class="col-lg-3">Clave</th>
      <th scope="col" class="col-lg-1">Eliminar</th>
    </tr>
       
	  
	<?php 
	  while ($fila=mysqli_fetch_array($_pagi_result)){
	?>
   
    <tr>
     <td class="col-lg-4"><?php echo $fila["admin_nombre"]; ?></td>
     
     <td class="col-lg-4"><?php echo $fila["admin_usuario"]; ?></td>
           
     <td class="col-lg-3"><?php echo $fila["admin_clave"]; ?></td>
            
     <td class="col-lg-1"><a href="#" onClick="confirmar(<?php echo $fila['id'];?>)"><img src="img/cancel.png" width="15px" class="img"></a></td>
      
      </tr>
  <?php } ?>
  </tbody>
</table>


<?php 
		
	echo "<p class='limpiar'> $_pagi_navegacion </p>";
	?>


		
	</article>
	
	
	
	

</div>

<script type="text/javascript" src="js/menu_admin.js"></script>

<?php include("includes/cerrar_conexiones.php");?>
</body>


</html>