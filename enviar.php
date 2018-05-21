<?php
require("includes/class.phpmailer.php");
require("includes/class.smtp.php");
$nomape=$_POST["cnomape"];
$tel=$_POST["ctelefono"];
$email=$_POST["cemail"];
$asunto=$_POST["casunto"];
$coment=$_POST["ccomentarios"];
$mensaje="<br> Datos desde Contacto <br><br>";
$mensaje.="Nombre y Apellido: $nomape <br>";
$mensaje.="Telefono: $tel <br>";
$mensaje.="Email: $email <br>";
$mensaje.="Asunto: $asunto <br>";
$mensaje.="Comentarios: $coment <br>";
$mail=new phpmailer();
$mail->isSMTP();

//Asignamos a Host el nombre de nuestro servidor smtp
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth = true;
//$mail->PluginDir="includes/";
//$mail->Mailer="mail";
//Le decimos cual es nuestro nombre de usuario y password
$mail->Username="andreamonbel@gmail.com";
$mail->Password="monsalveandrea";
//Indicamos cual es nuestra dirección de correo y el nombre que queremos que vea el usuario que lee nuestro correo
$mail->From="andreamonbel@gmail.com";
$mail->FromName="Andrea";
$mail->Timeout="30";
//el valor por defecto 10 de Timeout es un poco escaso, lo pongo a 30
//Indicamos cual es la dirección de destino del correo
$mail->AddAddress("andreamonbel@gmail.com", "enviando");
$mail->WordWrap = 50;


//Decimos que el email va a ser tipo HTML
$mail->IsHTML(true);
// Esta es la dirección de correo a la cual queremos que se envíe el correo, a administración, o gerente o comercial o lo que sea. Dirección de la persona que va a gestionar los correos que llegan desde este formulario.
//Asignamos asunto y cuerpo del mensaje
$mail->Subject= "Desde contacto";
// en le body va el contenido del mensaje que se va a enviar
$mail->Body = $mensaje;
$mail->Send();
if($mail->Send())
{
    echo'<script type="text/javascript">
            alert("Enviado Correctamente");
            window.location="index.php"
         </script>';
}
else{
    echo'<script type="text/javascript">
            alert("NO ENVIADO, intentar de nuevo");
            window.location="contacto.php"
         </script>';
}
header("Location: index.php");
?>


