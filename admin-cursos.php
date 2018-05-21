<?php session_start();
if(isset($_SESSION["validado"])!=true){
header("Location:formulario.php");
}
include("includes/conexiones.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

		<?php 
 function truncate_words($text, $limit, $ellipsis = '...') {
    $words = preg_split("/[\n\r\t ]+/", $text, $limit + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_OFFSET_CAPTURE);
    if (count($words) > $limit) {
        end($words); //ignore last element since it contains the rest of the string
        $last_word = prev($words);
           
        $text =  substr($text, 0, $last_word[1] + strlen($last_word[0])) . $ellipsis;
    }
    return $text;
}
 ?>
<title>Admin-index</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans" rel="stylesheet">
<link href="admin.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.12.0.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
			
			function confirmar(id){
				//alert(id);
				eliminar=confirm("¿Desea eliminar este curso?");
				if(eliminar==true){
					window.location.href="admin-curso-eliminar.php?vidcurso="+id;
				}else{
					alert('No se ha eliminado el curso.');
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

<h1 class="h1">GESTIÓN DE CURSOS</h1>

<article>

	<h2 class="titulillos">Insertar nuevo curso</h2>
	
		
		<?php 
	if(isset($_GET["curso"])){
		
		if($_GET["curso"]=="insertado"){
			echo "<p class='verde'> _Nuevo curso insertado_</p>";
		}
	}
	?>
	
	
		<?php 
		
		
	if(isset($_GET["curso"])){
		
		if($_GET["curso"]=="eliminado"){
			echo "<p class='verde'> _Curso elimiado_</p>";
		}
	}
	?>
	


	
<form id="form1" method="post" action="admin-curso-insertar.php" class="col-lg-12">
			
				<label>Título</label>
				<input type="text" name="ctitulo">
				
				 <br>
				 
				<label>Fecha</label>
				<input type="date" name="cfecha">
				
				 <br>
				
				<label>Categoría</label>
				<select name="ccategoria">
  					<option value="volvo">Volvo</option>
  					<option value="saab">Saab</option>
  					<option value="mercedes">Mercedes</option>
  					<option value="audi">Audi</option>
				</select>
				
				<br>
				<label>Descripción</label>
				<textarea name="cdescripcion" type="text"></textarea>
				
				
				<br><br>
				
				<input type="submit" name="button" value="Insertar curso" class="enviar">
				
</form>
			
		
	</article>
	
	<br><br>
	
	<article>

	<h2 class="titulillos">Gestionar cursos</h2>
	

	
  		
  		
  		
	  <?php 
	
	//la consulta
	$_pagi_sql="SELECT * FROM cursos ORDER BY fecha_cursos ASC";
	
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
      <th scope="col" class="col-lg-3">Titulo</th>
      <th scope="col" class="col-lg-2">Fecha</th>
      <th scope="col" class="col-lg-2">Categoría</th>
      <th scope="col" class="col-lg-4">Descripción</th>
      <th scope="col" class="col-lg-1">Eliminar</th>
    </tr>
       
	  
	<?php 
	  while ($fila=mysqli_fetch_array($_pagi_result)){
	?>
   
    <tr>
     <td class="col-lg-3"><?php echo $fila["titulo_cursos"]; ?></td>
     
     <td class="col-lg-2"><?php echo $fila["fecha_cursos"]; ?></td>
           
     <td class="col-lg-2"><?php echo $fila["categoria"]; ?></td>
           
     <td class="col-lg-4"><?php echo truncate_words($fila["descripcion"],"20","...");?></td>

            
     <td class="col-lg-1"><a href="#" onClick="confirmar(<?php echo $fila['id_cursos'];?>)"><img src="img/cancel.png" width="15px" class="img"></a></td>
      
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