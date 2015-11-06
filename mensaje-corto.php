<?php
/**
 * Template Name: Homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package pekcell
 */
 
require 'email/PHPMailer_5.2.4/class.phpmailer.php';

try {
    $mail = new PHPMailer(true); //New instance, with exceptions enabled

	//$body             = file_get_contents('contents.html');
	//$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
	$Destination = 'contacto@sharesystems.co';
    $Subject = 'Nuevo mensaje corto';
	
	$Content = '
	
	
	<div style=\"border: thin solid #039; font-size: 32px\">
	<div style=\"background: #039; color: #fff\"><h3>Contenido: </h3></div>
	<div>
		<ul style=\"list-style: none;\">
			<li>
				<b>Nombres y Apellidos:</b>	'.$_POST['contact-name'].
			'</li>
            <li>
    			<b>Correo electrónico :</b>	'.$_POST['contact-email'].
			'</li>           
            <li>
            	<b>Mensaje:</b> <br/>	'.$_POST['contact-message'].
			'</li>
		</ul>
	</div>
	</div>
	';

	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 25;                    // set the SMTP server port
	$mail->Host       = "smtpout.secureserver.net"; // SMTP server
	$mail->Username   = "contacto@sharesystems.co";     // SMTP server username
	$mail->Password   = "C0n74c70SH";            // SMTP server password

	$mail->IsSendmail();  // tell the class to use Sendmail

	$mail->From       = $_POST['contact-email'];
	$mail->FromName   = $_POST['contact-name'];
	
	$mail->AddReplyTo($_POST['contact-email'],$_POST['contact-name']);

	$to = "contacto@sharesystems.co";	

    $mail->AddAddress($to);	

	$mail->Subject  = $Subject;

	//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 80; // set word wrap

	$mail->MsgHTML($Content);

	$mail->IsHTML(true); // send as HTML

	$mail->Send();
	
} catch (phpmailerException $e) {
	echo $e->errorMessage();
}

try {
    $mail = new PHPMailer(true); //New instance, with exceptions enabled

    //$body             = file_get_contents('contents.html');
	//$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
	$Destination = 'totalmarcas@yahoo.com';
    $Subject = 'Nuevo mensaje corto';
	
	$Content = '
	
	
	<div style=\"border: thin solid #039; font-size: 32px\">
	<div style=\"background: #039; color: #fff\"><h3>Contenido: </h3></div>
	<div>
		<ul style=\"list-style: none;\">
			<li>
				<b>Nombres y Apellidos:</b>	'.$_POST['contact-name'].
			'</li>
            <li>
    			<b>Correo electrónico :</b>	'.$_POST['contact-email'].
			'</li>           
            <li>
            	<b>Mensaje:</b> <br/>	'.$_POST['contact-message'].
			'</li>
		</ul>
	</div>
	</div>
	';

	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 25;                    // set the SMTP server port
	$mail->Host       = "smtpout.secureserver.net"; // SMTP server
	$mail->Username   = "contacto@sharesystems.co";     // SMTP server username
	$mail->Password   = "C0n74c70SH";            // SMTP server password

	$mail->IsSendmail();  // tell the class to use Sendmail

	$mail->From       = $_POST['contact-email'];
	$mail->FromName   = $_POST['contact-name'];
	
	$mail->AddReplyTo($_POST['contact-email'],$_POST['contact-name']);

	$to = "totalmarcas@yahoo.com";	

    $mail->AddAddress($to);	

	$mail->Subject  = $Subject;

	//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 80; // set word wrap

	$mail->MsgHTML($Content);

	$mail->IsHTML(true); // send as HTML

	$mail->Send();
	
} catch (phpmailerException $e) {
	echo $e->errorMessage();
}
	
	echo  "
		
	<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" 
	style=\"vertical-align: middle;text-align: center; box-shadow: 2px 2px 3px #000\">
  		<div class=\"modal-dialog\" role=\"document\">
    		<div class=\"modal-content\">
      		<div class=\"modal-header\">
        	<h4 class=\"modal-title\" id=\"myModalLabel\">Solicitud enviada</h4>
      		</div>
      		<div class=\"modal-body\">
			Nos encargaremos de revisar su peticion y le comunicaremos por medio de su Correo electronico.
      		</div>
	      <div class=\"modal-footer\">
	        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" onclick=\"document.location='http://sharesystems.co/'\">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	
	";

?>