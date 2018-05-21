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

<section id="quiropractica">
	
	<article id="colunmas">
	
	<h2 class="titulo">La Quiropráctica</h2>
	
	<img src="img/quirp1.jpg" alt="quiro" title="quiro" width="100%"><br><br>
	
	
		
		<div class="colquiro">
			<h3 class="subtit">¿Qué es la quiropráctica?</h3>
			<p>Es la ciencia de la salud que <span class="azul">corrige las subluxaciones</span>, es decir, <span class="azul">vértebras</span> que han ido perdiendo su alineación en la columna y están obstaculizando el funcionamiento del <span class="azul">sistema nervioso</span> y por lo tanto, nuestra salud. <br><br>

				Los quiroprácticos utilizan <span class="azul">movimientos indoloros</span> realizados con las manos, donde el objetivo que restaurar la <span class="azul">alineación de estas vértebras.</span> <br> <br>

Tiene una visión vitalista donde no se incluyen medicamentos o cirugías. Es una forma de cuidado <span class="azul">segura y natural</span>, además de indolora.
</p>
		</div>
		
		
		<div class="colquiro">
			<h3 class="subtit">La subluxación</h3>
			<p>El <span class="azul">sistema nervioso</span> es el que regula y organiza todos los <span class="azul">sistemas del organismo.</span> Si sus funciones se ven alteradas, seremos más propensos a sufrir enfermedades. <br><br>  Muchas de las patologías tienen su origen en la <span class="azul">subluxación vertebral</span>, afectando así al <span class="azul">sistema nervioso</span>.<br><br>

Las consecuencias son que se interfiere con la capacidad que tiene el cuerpo de auto-regularse. <span class="azul">El cuerpo</span> por si solo, está continuamente <span class="azul">regulando la tensión arterial, el nivel de glucosa, los latidos del corazón, las defensas del organismo...</span>
 </p>
		</div>
		
		
		
		
	</article>
	
	
	
	<article class="tipos">
		
		<h3 class="tit2">El cuidado para toda la familia</h3>
		
		<img src="img/quiro3.jpg"  alt="familia" title="familia" class="izq">
		
		
		<div>
			
			<h4 class="tit3">Disfruta y comparte con tu familia de buena salud.</h4>
			
			
			<p>Los bebés, se benefician del cuidado quiropráctico que reciben sus madres durante el embarazo.<br> Esto ayuda a que los partos sean más rápido y menos dolorosos. <br><br>

En la niñez, cualquier caída en bici, jugando al fútbol...puede provocar que una de las vértebras se desplazan creando así subluxaciones.<br><br>

En la edad adulta, los accidentes laborales, en coche, la tensión del dia a dia pueden provocar subluxaciones, por lo que un cuidado quiropráctico puede ayudar a disminuir el estrés diario, calmar la ansiedad y mejorar la salud.<br><br>

La quiropráctica también es muy beneficiosa para las personas mayores, ya que poco a poco van notando cómo se modifica su columna y este afecta a su sistema nervioso.<br><br>

En resumen, la quiropráctica puede ayudarte a mejorar tu salud, el correcto funcionamiento de tu columna es esencial para el sistema nervioso.
</p>	
			
		</div>
		

	</article>
	
	
	
		<article class="tipos">
		
		<h3 class="tit2">Embarazo</h3>
		
		<img src="img/quiro4.jpg"  alt="embarazo" title="embarazo" class="izq">
		
		
		<div>
			
			<h4 class="tit3">El lazo entre la quiropráctica y el embarazo.</h4>
			
			
			<p>A simple vista no parece que haya relación entre la quiropráctica y el embarazo pero existe un sistema nervioso que funciona para ayudar a la madre y al hijo en cuatro fases.</p><br>
			
				<p class="azul">Preconcepción</p>	
				<p>En esta etapa la quiropráctica ayuda a regular el ciclo menstrual y el funcionamiento del útero. Con esto, el cuerpo se prepara para ser fuerte y lo más equilibrado posible para el embarazo. <br>Muchas parejas creen ser estériles y gracias al tratamiento han conseguido mejorar el sistema nervioso y los órganos reproductores.
				</p><br>
				
				<p class="azul">Embarazo</p>	
				<p>Durante el embarazo el tratamiento ayuda a mantener el equilibrio logrado en la preconcepción. Si el bebé está cómodo durante su crecimiento, tendrá mejor posición en el nacimiento
				</p><br>
				
				<p class="azul">Parto</p>	
				<p>Las madres que se han tratado con la quiropráctica suelen necesitas mejor intervención y la mayoría de los partos suelen ser más cortos y menos dolorosos.
				</p><br>
				
				<p class="azul">Postparto</p>	
				<p>En los partos naturales hay casos en los que la columna del bebé se suele tensar, y si el bebé no es capaz de girar de manera natural su cabeza pueden surgir problemas en la lactancia.<br>La quiropráctica en los bebés se utilizan movimientos suaves para que los ajustes sean totalmente seguros, cómodos y efectivos. La columna de un bebé no suele estar sometida a tanta tensión como la de un adulto, esto significa que la energía que hay que usar es mucho menor.</p>
			
		</div>
		

	</article>
	
	
	
	
			<article class="tipos">
		
		<h3 class="tit2">Estress</h3>
		
		<img src="img/quiro2.jpg"  alt="estress2" title="estress2" class="izq">
		
		
		<div>
			
			<h4 class="tit3">El estrés no es siempre negativo.</h4>
			
			
			<p>El estrés puede ser tanto positivo como negativo, todo depende de cómo tu cuerpo se adapte a él. Todo depende de tu sistema nervioso.<br><br>
Hay que recordar que el estrés forma parte de nuestro dia a dia y que gracias a él vivimos la vida más intensamente y hace que nos superemos y nos enfrentemos a las dificultades.
</p><br>
			
				<p class="azul">El estrés químico</p>	
				<p>Las causas del estrés químico suelen ser por una alimentación pobre, azúcar, grasas pocos saludables, medicamentos, tabaco, alcohol, polen….Todo ello influyen en nuestro sistema nervioso y a nuestra médula espinal. La quiropráctica ayuda a eliminar la reacciones alérgicas a los diferentes tipos de estrés químicos, ya que estas rompen el circuito y pueden causar subluxación.

				</p><br>
				
				<p class="azul">El estrés físico</p>	
				<p>Una caída, una lesión cervical, falta de sueño, aprender a andar, montar en bici también son causas de estrés físico donde la quiropráctica puede ayudarte a saber llevarlo mejor a través de tu sistema nervioso.
				</p><br>
				
				<p class="azul">El estrés emocional</p>	
				<p>La frustración o la impotencia en el trabajo, el miedo, la tristeza...son formas habituales en el estrés emocional. En este caso la quiropráctica puede ayudarte a reducir la tensión en tu sistema nervioso.
				</p><br>
				
				
				<p>El estrés afecta directamente a tu columna, ya que cuanto más estrés tengas tu sistema nervioso más tenso estará, y esto obligará a que la columna se desplace de su posición natural.
</p>
			
		</div>
		

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
