<?php
class Gestion_sesion{
	function index(){
		$CI =& get_instance(); 
		$controlador = $CI->router->class;
		$action = $CI->router->method;
		$controladores_guest = array('welcome','admin');
		$action_guest = array('login','getUserByEmail','activarCuenta');
		// $CI->load->library('session');
		print_r($CI->session->userdata('usuario'));
		session_start();
		print_r($_SESSION);

		// $_SESION
		exit;
		// echo $controlador;
		// echo $action;

		if( trim($CI->session->userdata('usuario'))=='' && $controlador == 'admin' && !in_array($action,$action_guest)){
			redirect('/admin/login');
		}
      // si la sesion se inicio y el usuario intenta entrar a login_c, 
      // lo enviamos al index    
		if(trim($CI->session->userdata('usuario'))!='' && $action=='login'){
			redirect('/admin');
		}
      // si el usuario es un visitante, 
      // solo puede entrar a los controladores permitidos para él..
	/*	}elseif(!user_is_logged() && 
			(!in_array($controlador,$controladores_guest))){
			redirect('login_c');

      // cerramos la sesion si el tiempo establecido expiro
      // solo si se cambio el tiempo de expiracion
		}elseif($CI->config->item('sess_use_time_expire')){

          // cargamos la libreria de sesion
			$CI->load->library('session');
			$arrSesion = $CI->session->userdata('ses_usuario');
			if (is_array($arrSesion) and $arrSesion['seslimite']<=time()){
				cerrar_sesion();
			}
		}*/
		unset($CI);
	}
}