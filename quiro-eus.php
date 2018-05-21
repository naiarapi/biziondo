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

<section id="quiropractica">
	
	<article id="colunmas">
	
	<h2 class="titulo">Kiropraktika</h2>
	
	<img src="img/quirp1.jpg" alt="quiro" title="quiro" width="100%"><br><br>
	
	
		
		<div class="colquiro">
			<h3 class="subtit">Zer da kiropraktika?</h3>
			<p>		Azpiluxazioak, bere <span class="azul">lerrokatzea galduz joan diren ornoak dira</span>, nerbio-sistema oztopatzen dutenak eta beraz gure osasunari kalte egiten diotenak zuzentzen dituen osasunaren zientzia da kiropraktika.<br><br>
			
			Kiropraktikoek <span class="azul">eskuekin egindako oinazerik gabeko mugimenduak</span> erabiliz, ornoen lerrokatze zuzenera bueltatzea dute helburu. 
Ikuspegi bitalista dauka, no ez diren sartzen botikak edo kirurgiak. <span class="azul"> Zaintzeko era segurua, naturala eta minik gabekoa da.</span></p>
		</div>
		
		
		<div class="colquiro">
			<h3 class="subtit">Azpiluxazioa</h3>
			<p><span class="azul">Nerbio-sistema </span>arautzen eta antolatzen ditu organismoaren sistema guztiak. Bere funtzioak alteratuak ikusten badira, gaixotasunak pairatzeko joerakoagoak izango gara. <span class="azul">Patologi askok orno-azpiluxazioetan daukate bere jatorria, nerbio-sisteman eraginez.</span><br><br>
			
			Ondorioaz gorputzaren arautze naturala oztopatzen da. <span class="azul">Gorputza bera kabuz etengabe gado tentsio arteriala, glukosa maila, bihotzaren taupadak eta organismoaren defentsak doitzen.</span></p>
			
			

		</div>
		
		
		
		
	</article>
	
	
	
	<article class="tipos">
		
		<h3 class="tit2">Kiropraktika guztiontzat</h3>
		
		<img src="img/quiro3.jpg"  alt="familia" title="familia" class="izq">
		
		
		<div>
			
			<h4 class="tit3">Osasun onaz gozatu nahi duen edonork ongietorria da mundu honetara.</h4>
			
			
			<p>Kiropratkikaren helburua gorputza %100 funtzionatzea da, horregatik ona da bai haurrentzat bai adinekoentzat. Osasun onaz gozatu nahi duen edonork ongietorria da mundu honetara. </p><br>	
			
		</div>
		

	</article>
	
	
	
		<article class="tipos">
		
		<h3 class="tit2">Haurdunaldia</h3>
		
		<img src="img/quiro4.jpg"  alt="embarazo" title="embarazo" class="izq">
		
		
		<div>
			
			<h4 class="tit3">Kiropraktikaren eta haurdunaldiaren arteko lotura.</h4>
			
			
			<p>Lehen begiratuan kiropraktikaren eta haurdunaldiaren arteko erlazioa egoteak ez dirudi baina dago amari eta lau fasetako semeari laguntzeko funtzionatzen duen nerbio-sistema.
</p><br>
			
				<p class="azul">Aurresortzea</p>	
				<p>Etapa honetan kiropraktikak ziklo menstruala eta umatokiaren funtzionamendua arautzen laguntzen du. Honekin, gorputza prestatzen da sendo eta ahalik eta  orekatuena izateko haurdunaldiarako. <br>Bikote askok antzuak direla uste dute eta tratamenduari esker bere nerbio-sistema eta ugaltze-organoak hobetzea lortu dute.
				</p><br>
				
				<p class="azul">Haurdunaldia</p>	
				<p>Haurdunaldian zehar tratamenduak lortutako oreka mantentzen laguntzen du
aurresortzean. Haurtxoa eroso badago bere hazkundean zehar, posizio hobea izango du
jaiotzerakoan.</p><br>
				
				<p class="azul">Erditzea</p>	
				<p>Kiropraktikarekin tratatu diren amek medikuaren eku-hartze gutxiago behar ohi dute, gainera, erditze gehienak motzagoak izaten dira eta min gutxiagorekin. 
				</p><br>
				
				<p class="azul">Post erditzea
</p>	
				<p>Erditze naturaletan badaude zenbait kasu non haurtxoaren bizkarrezura tentsioz betetzen den, ondorioz, hautxoa ez bada gai bere burua era naturalean mugitzeko arazoak sortu daitezke edoskitzean. <br>Haurtxoetan kiropraktikak mugimendu leunak erabiltzen ditu, doiketak guztiz seguruak, erosoak eta eraginkorrak izan daitezen. Haurtxo baten bizkarrezurrak ez du heldu batena bezain tentsio beste pairatzen, beraz erabili behar den energia askoz gutxiagoa da. mendean jarrita egon ohi.
</p>
			
		</div>
		

	</article>
	
	
	
	
			<article class="tipos">
		
		<h3 class="tit2">Estresa</h3>
		
		<img src="img/quiro2.jpg"  alt="estress2" title="estress2" class="izq">
		
		
		<div>
			
			<h4 class="tit3">Estresa ez da beti txarra.</h4>
			
			
			<p>Estresa bai ona bai txarra izan daiteke, zure gorputza nola moldatzen den arabera. Dena zure nerbio sistemaren araberakoa da. <br><br>
Gororatu behar gara estresak gure eguneroko bizitzaren zati bat osatzen duelaz eta berari esker bizitza era biziangoan bizitzen dugu, eta berari esker gure burua gainditzen dugu eta zailtasunei aurre egiten diegu. 
</p><br>
			
				<p class="azul">Estres kimikoa</p>	
				<p>Estres kimikoaren zergatiak elikadura eskasa, azukrea, gantz ez osasuntsuak, sendagaiak, tabakoa, alkola eta polena dira besteen artean.
Guzti hau gure nerbio sisteman eta bizkarrezur-miunean eragiten dute. 
Kiropraktikak estres kimiko desberdinen gaineko erreakzio alergikoak ezabatzeko laguntzen du, hauen erruz azpiluxazioak sortu daitzekeelako zirkuitua puskatzen baitute. 


				</p><br>
				
				<p class="azul">Estres fisikoa
</p>	
				<p>Erorialdi bat, lesio zerbikal bat, lorik eza, ibiltzen ikastea, txirrindan ibiltzen ikastea dira beste batzuen artean estres fisikoaren eragileak. Kasu honetan kiropraktikak lagundu zaitzake jakiten nola eraman hobeto zure nerbio sistemaren bidez.
				</p><br>
				
				<p class="azul">Emozio estresa</p>	
				<p>Frustrazioa, lanean ezintasuna, beldurra, tristetasuna… emozio estresan era ohikoak dira. 
Kasu honetan kiropratikak lagundu zaitzake zure nerbio sistemaren tentsioa murrizten. 

				</p><br>
				
				Estresak zure hezur-muinean zuzenean eragiten du, zure nerbio sistema zenbat eta estres gehiago izaten badu tentsio handiagoa izango du eta ondorioz bere posizio naturaletik mugituko da.

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
