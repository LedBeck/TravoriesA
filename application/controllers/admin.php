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
		$this->load->view('welcome_message');
	}
	public function login(){
		$this->load->view('login');
	}
	public function activarCuenta($email){
		$user = $em->find("User", array("email" => base64_decode($mail)));
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
					$this->register->save($this->input->post());
				}else{
					print_r($errors);
				}
			}
		}else{
			$this->load->view('register');
		}
	}
	public function getNacionalidades(){
		$this->output->set_content_type('application/json')
		->set_output(json_encode([
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
			]));
}
}
