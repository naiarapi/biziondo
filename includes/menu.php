<nav id="menu-responsive">    
           <img id="equis" src="img/menu/cancel..png">
           <ul id="menuresponsivee">
               <li><a href="index.php">INICIO</a></li>
               <li><a href="quiro.php">LA QUIROPRÁCTICA</a></li>
               <li><a href="cursos.php">CURSOS</a></li>
               <li><a href="contacto.php">CONTACTO</a></li>
           </ul>
           
 <div id="idioma2">
	
	<a href="index.php"><img src="img/png/003-world.png" alt="español" title="español" ></a>
	<a href="index-eus.php"><img src="img/png/002-flag.png" alt="euskera" title="euskera" ></a>
	<a href="index-fr.php"><img src="img/png/001-world-1.png" alt="frances" title="frances" ></a>
</div>
            
    </nav>


<div id="logo" class="over">
<img id="hamburguesa" src= "img/menu/nav-icon.png" width="30" height="30" class="fl"/>
</div>


<nav id="menu">

<ul id="menuresponsive">

               <li><a href="index.php">INICIO</a></li>
               <li><a href="quiro.php">LA QUIROPRÁCTICA</a></li>
               <li><a href="cursos.php">CURSOS</a></li>
               <li><a href="contacto.php">CONTACTO</a></li>

</ul>



</nav>



<!------- menu responsive --------> 
<script>   

$(document).ready(function() {
	x=0;//menú oculto
	
	$("#hamburguesa").click(function(){
		if(x==0){
			$("#menu-responsive").animate({left:'0px'},500);
			$("#hamburguesa").fadeOut(500);
			$("#equis").show();
			x=1; //está visible
		}
	
	});
	
	$("#equis").click(function(){
		if(x==1){
			$("#menu-responsive").animate({left:"-100%"},500);
			$("#equis").hide();
			$("#hamburguesa").fadeIn(500);
			x=0; //está oculto
		}
	
	});		
});

</script>