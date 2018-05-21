<div id="container2">

<div class="colpie col-lg-3 col-md-12 col-xs-12">
	
		<h2 class="titulo2">Dirección</h2>
		<div class="linea"></div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.5862489788183!2d-1.885279785083742!3d43.30198568308924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a890fffa1155%3A0x1a47b9511d135165!2sAstigarrako+Bidea%2C+2%2C+20180%2C+Gipuzkoa!5e0!3m2!1ses!2ses!4v1526142157658" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe><br>
		<p class="txtpie">Astigarrako Bidea, 2<br>Planta 2 - Oficina 9 (Edificios Mamut) <br>Oiarzun, 20180. Gipuzkoa</p>
		<p class="txtpie">943 10 80 91</p>
		<p class="txtpie">biziondo@biziondo.com</p>
	
</div>


<div class="colpie col-lg-3 col-md-12 col-xs-12">
	
		<h2 class="titulo2">Nosotros</h2>
		<div class="linea"></div>
		<p class="txtpie">El objetivo de BiziOndo es hacer que tu cuerpo funcione al 100%.<br><br> ¿Quieres disfrutar de buena salud? <strong>Bienvenido.</strong></p>
	
</div>


<div class="colpie col-lg-3 col-md-12 col-xs-12">
	
		<h2 class="titulo2">Pide tu cita</h2>
		<div class="linea"></div>
		<p class="txtpie">Elige el día y el momento que te venga mejor, nos pondremos en contacto contigo para confirmar la cita.</p><br><br><a href="#" class="boton" data-toggle="modal" data-target="#myModal"> Pide tu cita</a>
</div>



<!-- MODAL inicio PEDIR CITA  -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content"><!-- Modal content-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">PIDE TU CITA</h2>
        </div>
        <div class="modal-body">
        	 
        	 
                      <form method="post" action="admin-cita-insertar.php">               
               
                <input id="first-input-3" name="cnombre" type="text" placeholder="Nombre" required/>
                <input id="second-input-3"  name="ctelefono" type="number" placeholder="Teléfono" required />
                <input id="second-input-3" name="cemail" type="text" placeholder="Email" required />
				<input id="second-input-4" name="cfecha" type="date" placeholder="Fecha" required />
				  <strong><select id="second-input-4" name="chorario" placeholder="Horario" class="select"></strong>
           	    	<option value="mañana">Mañana</option>
                    <option value="tarde">Tarde</option>
            	</select> 
            	
            	  
                <button type="submit" class="enviar2">Enviar</button>
                
              </form>
        </div>
    <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
     </div>
      </div><!-- fin Modal content-->
    </div>
</div>
<!--   MODAL fin PEDIR CITA  -->


	



<div class="colpie col-lg-3 col-md-12 col-xs-12">
	
		<h2 class="titulo2">Menú</h2>
		<div class="linea"></div>
		<a href="index.php" class="enlace">Inicio</a>
				<div class="linea2"></div>
		<a href="quiro.php" class="enlace">La Quiropráctica</a>
				<div class="linea2"></div>
		<a href="cursos.php" class="enlace">Cursos</a>
				<div class="linea2"></div>
		<a href="contacto.php" class="enlace">Contacto</a>
				<div class="linea2"></div>
				
				<a href="formulario.php" class="admin"><img src="img/locked-padlock.png" alt="admin" title="admin"></a>
</div>
	
</div>	
	