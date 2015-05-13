<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public $em;
	function __construct(){
		parent::__construct();
		$this->load->model('register');
		$this->em = $this->doctrine->em;
	}
	public function generarEntidadesDoctrine(){
		$this->em->getConfiguration()
		->setMetadataDriverImpl(
			new Doctrine\ORM\Mapping\Driver\DatabaseDriver(
				$this->em->getConnection()->getSchemaManager()
				)
			);

		$cmf = new Doctrine\ORM\Tools\DisconnectedClassMetadataFactory;
		$cmf->setEntityManager($this->em);
		$metadata = $cmf->getAllMetadata();     
		$generator = new Doctrine\ORM\Tools\EntityGenerator();

		$generator->setUpdateEntityIfExists(true);
		$generator->setGenerateStubMethods(true);
		$generator->setGenerateAnnotations(true);
		$generator->generate($metadata, APPPATH."models/Entities");
	}
	public function index(){
		$data = array(
			'usuario'=>$_SESSION['usuario']
			);
		$this->load->view('index2',$data);
	}
	public function login(){
		if ($this->input->is_ajax_request()) {
			if($datos = $this->register->checkLogin($this->input->post())){
				$_SESSION = array('usuario'=>$datos);
				$res = array('code'=>200,'msg'=>'Login Exitoso entrando...','url'=>base_url().'admin');
			}else{
				$res = array('code'=>500,'msg'=>'Error de usario y/o Contraseña');
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($res));
		}else{
			$this->load->view('login');
		}
	}
	public function logout(){
		unset($_SESSION['usuario']);
		$this->session->sess_destroy();
		redirect('/admin/login');
	}
	public function getUserByEmail(){
		$this->output->set_content_type('application/json')
		->set_output(json_encode($this->register->getUserByEmail($this->input->post('email'))));
	}
	public function activarCuenta($email,$key){
		// echo '<pre>';
		// echo urldecode($email);
		// echo '</pre>';
		if($key == md5(sha1(urldecode($email)))){
			$user = $this->em->getRepository("User")->findBy(array("email" => urldecode($email)));
		}else{
			echo 'Código Invalido';
		}
		print_r($user);
		// if($)
	}
	public function register(){
		if ($this->input->is_ajax_request()) {
			if(isset($_FILES['image'])){
				$errors= array();
				$file_name = $_FILES['image']['name'];
				$file_size =$_FILES['image']['size'];
				$file_tmp =$_FILES['image']['tmp_name'];
				$file_type=$_FILES['image']['type'];   
				$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
				$extensions = array("jpeg","jpg","png"); 		
				if(in_array($file_ext,$extensions )=== false){
					$errors[]="extension not allowed, please choose a JPEG or PNG file.";
				}
				if($file_size > 2097152){
					$errors[]='File size must be excately 2 MB';
				}				
				if(empty($errors)==true){
					move_uploaded_file($file_tmp,__DIR__."/../../public/uploads/".md5($this->input->post('email')));
					if( $this->register->save($this->input->post())){
						$to = $this->input->post('email');
						$subject = "Activar cuenta TravelTale";
						$txt = '<p>De click al siguiente enlace para activar su cuenta o pegue la dirección en el navegador.</p><br><br><a href="'.base_url().'admin/activarCuenta/'.urlencode($this->input->post('email')).'/'.md5(sha1($this->input->post('email'))).'">'.base_url().urlencode($this->input->post('email')).'/'.md5(sha1($this->input->post('email'))).'</a>';
						$headers = "From: no-reply@travelTale.com" . "\r\n";;
						mail($to,$subject,$txt,$headers);
					}else{
						$res = array('code'=>500,'msg'=>print_r($errors,1));	
					}
					// $this->load->library('email');
					// $this->email->from('no-reply@travelTale.com', 'TravelTale');
					// $this->email->to('facp0@hotmail.com'/*$this->input->post('email')*/);
					// $this->email->subject('Email de Acticación');
					// $this->email->message('<p>De click al siguiente enlace para activar su cuenta o pegue la dirección en el navegador.</p><br><br><a href="'.base_url().'admin/activarCuenta/'.md5($this->input->post('email')).'">'.base_url().'admin/activarCuenta/'.md5($this->input->post('email')).'</a>');

					// $this->email->send();
					$res = array('code'=>200,'msg'=>'Registro Exitoso','url'=>base_url().'admin');
				}else{
					$res = array('code'=>500,'msg'=>print_r($errors,1));
				}
					$this->output->set_content_type('application/json')->set_output(json_encode($res));
			}
		}else{
			$this->load->view('register');
		}
	}
	public function getNacionalidades(){
		$this->output->set_content_type('application/json')
		->set_output(json_encode(array(
			'Afgano',
			'Alemán',
			'Árabe',
			'Argentino',
			'Australiano',
			'Inglés',
			'Belga',
			'Boliviano',
			'Brasilero',
			'Portugués',
			'Camboyano',
			'Canadiense',
			'Inglés',
			'Chileno',
			'Chino',
			'Chino',
			'Colombiano',
			'Español',
			'Coreano',
			'Costarricense',
			'Cubano',
			'Danés',
			'Ecuatoriano',
			'Egipcio',
			'Salvadoreño',
			'Estadounidense',
			'Estonio',
			'Etiope',
			'Amárico',
			'Filipino',
			'Tagalo',
			'Finlandés',
			'Francés',
			'Galés',
			'Griego',
			'Guatemalteco',
			'Haitiano',
			'Holandés',
			'Hondureño',
			'Indonesio',
			'Iraquí',
			'Iraní',
			'Persa',
			'Irlandés',
			'Israelí',
			'Italiano',
			'Japonés',
			'Jordano',
			'Laosiano',
			'Letón',
			'Lituano',
			'Malayo',
			'Marroquí',
			'Mexicano',
			'Nicaragüense',
			'Noruego',
			'Neozelandés',
			'Panameño',
			'Paraguayo',
			'Peruano',
			'Polaco',
			'Portugués',
			'Puertorriqueño',
			'Dominicano',
			'Rumano',
			'Ruso',
			'Sueco',
			'Suizo',
			'Tailandés',
			'Taiwanes',
			'Chino',
			'Turco',
			'Ucraniano',
			'Uruguayo',
			'Venezolano',
			'Vietnamita'
			)));
}
}
