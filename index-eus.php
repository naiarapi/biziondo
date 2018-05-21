<?php session_start();
include("includes/conexiones.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BiziOndo - Kiropraktikoak</title>
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
<body>
<div id="container">



<header id="inicio">

<div id="idiomas">
	
	<a href="index.php"><img src="img/png/003-world.png" alt="español" title="español" width="20%"></a>
	<a href="index-eus.php"><img src="img/png/002-flag.png" alt="euskera" title="euskera" width="20%"></a>
	<a href="index-fr.php"><img src="img/png/001-world-1.png" alt="frances" title="frances" width="20%"></a>
</div>
	<a href="index-eus.php"><img src="img/logo.png" title="logo" alt="logo" class="logo"></a>
  
 

  <nav>      
	<?php 
	
	$activo1="class='activado'";
	$activo2="";
	$activo3="";
	$activo4="";
	
	include("includes/menu-eus.php");
?> 



</nav> 
 

</header>



<div id="img1" class="image1" >
	<img src="img/cabecera.jpg" width="100%" alt="cabecera" title="cabecera" class="col-lg-12 col-md-12 col-xs-12">
	<h1 class="animated fadeInUp col-lg-6" >Osasun ona izan, ongi etorri BiziOndora</h2>
	<a href="#" class="btn btn-info btn-lg col-lg-2" data-toggle="modal" data-target="#myModal">HITZORDUA ESKATU</a>




<!-- MODAL inicio PEDIR CITA  -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content"><!-- Modal content-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">PIDE TU CITA</h2>
          <p>Elige el día y el momento que te venga mejor, nos pondremos en contacto contigo para confirmar la cita.</p>

        </div>
        
       
       
        <div class="modal-body">
       	 	 
       <div class="row">
         
 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

            

            <div class="form-container-3">
             

		
              <form method="post" action="enviar.php" name="contacto" id ="contacto">  
              
                                      
               
                <input id="nombre" name="nombre" type="text" placeholder="Nombre" size="30" maxlength="100" required/>
                
                <input id="apellidos" name="apellidos" type="text" placeholder="Apellidos" size="30" maxlength="100"/>
                
                <input id="email "name="email" type="text" onBlur="MM_validateForm('email','','NisEmail');return document.MM_returnValue" size="25" maxlength="100" placeholder="Email" required >
                
                <input id="telefono" name="telefono" type="text" size="25" maxlength="100" placeholder="Teléfono" required>

				<input id="fecha" name="fecha" type="date" placeholder="Fecha" required />
			  
			 	<strong><select name="horario" placeholder="Horario" class="select" id="horario"></strong>
           	    	<option value="mañana">Mañana</option>
                    <option value="tarde">Tarde</option>
            	</select> 
            	
				  
                <button type="submit" class="enviar2" value="Enviar">Enviar</button>
                <button type="Reset" value="Borrar datos" class="enviar2">Restablecer</button>
                
              </form>
            </div>


      </div>
	</div>
       
       
        </div>
    <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
     </div>
      </div><!-- fin Modal content-->
   </div>
</div>
<!--   MODAL fin PEDIR CITA  -->

        	 
        	 	<?php 
					if(isset($_GET["cita"])){
		
					if($_GET["cita"]=="insertado"){
					echo "<p class='verde'> Cita enviada, en breves nos pondremos en contacto contigo.</p>";
				}
		}
	?>

</div>

	
	


<article id="quiropractica">
	
	
	<div class="titulo">
		<h2 style="margin-top: 50px;">Kiropraktika</h2>
	</div>
	
	<div class="txt col-lg-12 col-md-12 col-xs-12">
		<p>Azpiluxazioak, bere lerrokatzea galduz joan diren ornoak dira, nerbio-sistema oztopatzen dutenak eta beraz gure osasunari kalte egiten diotenak zuzentzen dituen osasunaren zientzia da kiropraktika.</p>
	</div>

	
<div id="tipos" class="col-lg-12 col-md-12- col-xs-12">



	<div class="col col-lg-4 col-md-12 col-xs-12">
		<a href="quiro-eus.php">
			<img src="img/hands-2545757_1920.jpg" width="100%" title="familia" alt="familia">
			<h3 class="subtutilos">KIROPRAKTIKA GUZTIONTZAT</h3>
			</a>
	</div>
		
		
		<div class="col col-lg-4 col-md-12 col-xs-12">
		<a href="quiro-eus.php">
			<img src="img/pregnant-1245703_1920.jpg" width="100%" title="embarazo" alt="embarazo">
			<h3 class="subtutilos">HAURDUNALDIA</h3>
			</a>
		</div>
		
		
		<div class="col col-lg-4 col-md-12 col-xs-12">
		<a href="quiro-eus.php">
			<img src="img/tied-up-1792237_1920.jpg" width="100%" title="estres" alt="estres">
			<h3 class="subtutilos">ESTRESA</h3>
			</a>
		</div>
		
</div>	
	
	
</article>


<section id="cursos">
	
	<article>
	
	<h2 class="titulo">Kurtsoak</h2>
	
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
		
		<a href="cursos.php" class="mas">Gehio ikusi</a>
	
	
</section>

<img src="img/fotos-index.jpg" alt="quiro" title="quiro" width="100%">

</div>


<footer id="pie">

<?php 	
include("includes/footer-eus.php");
?> 

</footer>







<?php include("includes/cerrar_conexiones.php");?>
</body>
</html>
