<?php
class Gestion_sesion{
	function __construct(){
		session_start();
	}
	function index(){

		$CI =& get_instance(); 
		$controlador = $CI->router->class;
		$action = $CI->router->method;
		$controladores_guest = array('welcome','admin');
		$action_guest = array('login','getUserByEmail','activarCuenta','register','getNacionalidades','sendEmail');
		if( !isset($_SESSION['usuario']) && $controlador == 'admin' && !in_array($action,$action_guest)){
			redirect('/admin/login');
		}
      // si la sesion se inicio y el usuario intenta entrar a login_c, 
      // lo enviamos al index    
		if(isset($_SESSION['usuario']) && in_array($action,array('login','register'))) {
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