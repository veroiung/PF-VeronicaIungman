<?php

@$name = addslashes($_POST['name']);
@$email = addslashes($_POST['email']);
@$asunto = addslashes($_POST['subject']);
@$message = addslashes($_POST['message']);

if ((strlen($name) > 0) and (strlen($email) > 0) and (strlen($asunto) > 0)) {

 

$header = "From: $email\n"
	. "Cc: dg.iungman@gmail.com"; 
$subject = "desde la web playlisteros"; 
$email_to = "playlisteros@gmail.com"; 

$contenido = "$name ha enviado un mensaje desde la web www.playlisteros.com.ar\n"
. "\n"
. "Nombre y Apellido: $name\n"
. "Email: $email\n"
. "Asunto: $asunto\n"
. "Mensaje: $message\n"
. "\n";
 

if (@mail($email_to, $subject ,$contenido ,$header )) {
 
echo'<script>alert("Gracias, su mensaje se envio correctamente.") ; </script>';

echo'<SCRIPT language="javascript">
	location.href = "index.html";
	</SCRIPT>';
	
}else{
 
echo'<script>alert("Error: Su información no pudo ser enviada, intente más tarde.") ; </script>';

echo'<SCRIPT language="javascript">
	location.href = "index.html";
	</SCRIPT>';
	
}


}
?>
