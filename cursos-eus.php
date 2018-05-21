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
	
	<a href="index.php"><img src="img/png/003-world.png" alt="español" title="español" width="20%"></a>
	<a href="index-eus.php"><img src="img/png/002-flag.png" alt="euskera" title="euskera" width="20%"></a>
	<a href="index-fr.php"><img src="img/png/001-world-1.png" alt="frances" title="frances" width="20%"></a></div>

	<a href="index-eus.php"><img src="img/logo.png" title="logo" alt="logo" class="logo"></a>

  <nav>      
	<?php 
	
	$activo1="";
	$activo2="class='activado'";
	$activo3="";
	$activo4="";
	
	include("includes/menu-eus.php");
?>      

</nav> 
 

</header>

<section id="cursos">
	
	<article id="colunmas">
	
	<h2 class="titulo">Kurtsoak</h2>
	
	<img src="img/cursos.jpg" alt="quiro" title="quiro" width="100%"><br><br>
	
	
		<?php 
			$sql="SELECT * FROM cursos";
		   	$resultado=$con->query($sql);			
		   	while ($fila=mysqli_fetch_array($resultado)){
		?>
		<div class="colcurso col-lg-4 col-md-12 col-xs-12">
			<div class="curso">

				

				<p class="txtcurso"><?php echo $fila ["titulo_cursos"];?></p>
				<p class="txtcurso2"><?php echo $fila ["descripcion"];?></p>
				
				<div>
					<p class="fecha"><?php echo $fila ["fecha_cursos"];?>| </p>
					<p class="tipo"><?php echo $fila ["categoria"];?></p>
				</div>

			</div>
		</div>
		
		    <?php } ?>
		
					
		
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
