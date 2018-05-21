<?php session_start();
include("includes/conexiones.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BiziOndo</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans" rel="stylesheet">
<link href="animate.css" rel="stylesheet" type="text/css">
<link href="estilos.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.12.0.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>

<!--    JQUERY Y CSS para MODAL  -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>

<!--    JQUERY Y CSS para FoxHolder  -->
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <link rel="stylesheet" href="css/help-styles.css" />
   <link rel="stylesheet" href="css/prism.css" />
   <link rel="stylesheet" href="css/foxholder-styles.css" />
    
   <script src="js/jquery-1.12.0.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/prism.js"></script>
   <script src="js/foxholder.js"></script>
   <script src="js/script.js"></script>


<link href="animate.css" rel="stylesheet" type="text/css">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-66794691-3', 'auto');
      ga('send', 'pageview');

    </script>
    

</head>
<div id="container">
<body>


<header id="inicio">
	<div id="idiomas">
	
	<a href="#">esp -</a>
	<a href="#">eus -</a>
	<a href="#">fr</a>
</div>

	<a href="index.php"><img src="img/logo.png" title="logo" alt="logo" class="logo"></a>

  <nav>      
	<?php 
	
	$activo1="";
	$activo2="class='activado'";
	$activo3="";
	$activo4="";
	
	include("includes/menu.php");
?>      

</nav> 
 

</header>

<section id="contacto">
	
		<h2 class="titulo">Gestor de contenidos</h2>
  
  <article id="login">
		
			<h3 class="titulillos">Zona reservada</h3>
			
			<form name="login" method="post" action="login.php">
			
				<label class="labelficha">Usuario</label>
				<input type="text" class="inputform" name="cusuario">
				
					<br><br>
					
				<label class="labelficha"> Clave</label>
				<input type="password" class="inputform" name="cclave">
				
				<br><br>
				
				<input type="submit" name="button" value="Enviar" class="enviar2">
			</form>
	</article>
		
	
</section>
</div>


<footer id="pie">

<?php 	
include("includes/footer.php");
?> 

</footer>







<?php include("includes/cerrar_conexiones.php");?>
</body>
</html>
