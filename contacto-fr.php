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

	<a href="index-fr.php"><img src="img/logo.png" title="logo" alt="logo" class="logo"></a>

  <nav>      
	<?php 
	
	$activo1="";
	$activo2="class='activado'";
	$activo3="";
	$activo4="";
	
	include("includes/menu-fr.php");
?>      

</nav> 
 

</header>

<section id="contacto">
	
		<h2 class="titulo">Contact</h2>
  
  
		<div> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.5457520228733!2d-1.9755754845182583!3d43.32376767913406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a5436243a9e9%3A0xbc209c429183310!2sCalle+Gran+V%C3%ADa%2C+14%2C+20002+San+Sebasti%C3%A1n%2C+Guip%C3%BAzcoa!5e0!3m2!1ses!2ses!4v1497951527469" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div> <br><br>


	<div class="colcontacto col-md-12 col-xs-12">
	
		<h3 class="titulos2">Contact</h2>
			<p class="txtcontacto">Tlf: 943 46 59 83 | 943 56 74 89</p>
			<p class="txtcontacto">inmobiliaria@donostihome.com</p>
			<p class="txtcontacto"> C/ Gran Vía nº14 - Gros</p>
			<p class="txtcontacto">20004 Donostia - San Sebastian</p>
			<p class="txtcontacto">API - Luis Artola nº223344</p>
	 </div>
	 
	 
	 <div class="colcontacto col-md-12 col-xs-12">
	 	
		 <h3 class="titulos2">Calendrier</h2>
		 <p class="txtcontacto"><strong>De lunes a jueves </strong>: 9:30h a 13:30h y 16:00h a 20:00h</p>
		 <p class="txtcontacto"><strong>Vendredi </strong>: 9:30h a 14:00h</p>
		 <p class="txtcontacto"><strong>Samedi</strong> : 10:00h a 14:00h</p>
	</div> 
	 
	 
	 <div class="colcontacto col-md-12 col-xs-12">
	 	
		 <h3 class="titulos2">Réseaux Sociaux
</h2>
			<img src= "img/facebook.png">
	</div> 

<img src="img/foto-contacto.jpg" alt="quiro" title="quiro" width="100%">

	</article>
	
	
	<article id="email">
	
		<h3 class="titulos2">Envoyer un email</h2>
	
	 <form name="form1" action="enviar.php" method="post" id="formcontacto" enctype="multipart/form-data">
           	
          	  <input name="cnomape" type="text" id="nombre" class="input2" value="Prénom">

           	  <input name="ctelefono" type="text" id="telefono" class="input2" value="Numéro de téléphone
">
               
          	  <input name="cemail" type="text" id="email" class="input2" value="Email">
          	  
          	  <input name="casunto" type="text" id="asunto" class="input2" value="Asunto">

		 		<textarea name="ccomentarios" type="text" id="comentarios" class="input3"
				 >Commentaire</textarea>
          	            
			<br><br>
                
                
            <input value="Enviar" type="submit" class="enviar2">
            
            
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
