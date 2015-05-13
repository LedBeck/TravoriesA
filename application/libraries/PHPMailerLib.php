<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PHPMailerLib {
	private $host;
	private $port;
	private $user;
	private $pass;
	private $seguridad;
    function __construct() {
        require_once('PHPMailer/PHPMailerAutoload.php');
        $this->host='smtp.googlemail.com';
		$this->user='esedigitalmx03@gmail.com';
		$this->pass='-123456-';
		$this->port='465';
		$this->seguridad='ssl';
    }
    public function enviarMail($parametros = array('mensaje'=>'','asunto'=>'asunto','de'=>array('Sistemas México','contacto@sistemas.com.mx'),'para'=>null,'adjuntos'=>array(),'bcc'=>array())) {
        $mail = new PHPMailer();
		$mail->isSMTP(); 
		$mail->CharSet = 'UTF-8';
		$mail->SMTPDebug  = 4;                     
		$mail->SMTPAuth   = true;        
		$mail->Timeout  =   60;    
		$mail->Host       = $this->host; 
        // print_r($mail);
		//$mail->charSet = "UTF-8";
		if($this->seguridad)
			$mail->SMTPSecure = $this->seguridad;
		if($this->port!='')
			$mail->Port = $this->port; 
		$mail->Username   = $this->user;
		$mail->Password   = $this->pass;
		$mail->SetFrom($parametros['de'][1],$parametros['de'][0]);
		if(!empty($parametros['adjuntos']))
			for ($i=0; $i < count($parametros['adjuntos']); $i++)
				$mail->AddAttachment($parametros['adjuntos'][$i]);
		if(is_array(@$parametros['bcc']))
		 	for($i=0; $i<count($parametros['bcc']);$i++)
		 		$mail->AddBCC($parametros['bcc'][$i]);			
		if(is_array($parametros['para']))
		 	for($i=0; $i<count($parametros['para']);$i++)
		 		$mail->AddAddress($parametros['para'][$i]);
		else
		 	$mail->AddAddress($parametros['para']);
		$mail->Subject = $parametros['asunto'];
		$mail->AltBody    = "Error Fatal"; 
		$mail->MsgHTML($parametros['mensaje']);
		if($mail->Send()) {
		   	return true;
		}else { 
			echo "Error al enviar";
		  	return false;
		}
    }
}