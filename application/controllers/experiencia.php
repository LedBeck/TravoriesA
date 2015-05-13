<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public $em;
	function __construct(){
		parent::__construct();
		$this->load->model('experiencia');
		$this->em = $this->doctrine->em;
	}
	public function getCatalogo($catalogo = 0){
		if($catalogo == 0)
			$this->output->set_content_type('application/json')->set_output(json_encode(array('code'=>500,'msg'=>'Error Catalogo no exite')));
		switch ($catalogo) {
			case 'value':
				# code...
				break;
			
			default:
				# code...
				break;
		}
	}
}
