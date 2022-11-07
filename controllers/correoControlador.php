<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class CorreoControlador{

	static public function ctrEnviarCorreo(){

		if (isset($_POST["submit"])) {

			if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombre"]) && 
				preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"]) &&				
				preg_match('/^[0-9- ]+$/', $_POST["telefono"]) &&
				$_POST["servicios"] &&				
				preg_match('/^[?\\¿\\!\\¡\\:\\,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["mensaje"])) {

				$cabecera = "From: Mensaje de la Clínica Veterinaria Churucavet";	

				$mail = new PHPMailer(true);

				try {

					//Server settings
				    
				     //$mail->SMTPDebug = SMTP::DEBUG_SERVER;  				     

				     $mail->isMail();

				    //Recipients
				    $mail->setFrom($_POST["email"], $_POST["nombre"]);
				    $mail->addAddress('info@churucavet.com', 'Clínica Veterinaria Churucavet');     // Add a recipient
				     
				    $mail->addReplyTo($_POST["email"], $_POST["nombre"]);				  

				    // Content
				    $mail->isHTML(true); // Set email format to HTML
				    $mail->Subject = 'Mensaje de la Clínica Veterinaria Churucavet';
				    $mail->Body    = "Nombre: ".$_POST["nombre"]."\n"."\n".
									 "Email: ".$_POST["email"]."\n"."\n".
									 "Teléfono: ".$_POST["telefono"]."\n"."\n".
									 "Servicio a consultar: ".$_POST["servicios"]."\n"."\n".
									 "Mensaje: ".$_POST["mensaje"];
				    $mail->AltBody = $_POST["mensaje"];

				    $mail->send();
				    return "ok";
					
				} catch (Exception $e) {

					 return "error";
					
				}			  						

			}
			
		} else {

			return "error-sintaxis";
		}

	}

}