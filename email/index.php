<?php
		//se compone el mensaje
		require("PHPMailer_5.2.4/class.phpmailer.php");

		$mail = new PHPMailer();
		$mail->Host = "mail.pekcellgold.com";
		$mail->Port       = 465; 
		$mail->Username   = "info@pekcellgold.com";
		$mail->Password   = "InfoInfo";
		$mail->FromName = "Caso Nuevo";
		$mail->Subject = "Caso de ";
		$mail->AddAddress("hardcorgian@gmail.com", "Altas");
		$body .= "Titulo  :\n ".Ejemplo."\n\n";

		$mail->Body = $body;

		if($mail->Send()){
			echo "OK";
		}  else{
			echo "error"; 
			//window.location.assign("http://asjurem.co");
		}

?>
