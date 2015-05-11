<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once __DIR__.'/Entities/User.php';
class Register extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->em = $this->doctrine->em;
	}
	public function save($data){
		$user = new User;
		$user->setUsername($data['email']);
		$user->setNombre($data['nombre']);
		$user->setApellidopaterno($data['nombre']);
		$user->setApellidomaterno($data['nombre']);
		$user->setFechanacimiento($data['nacimiento']);
		$user->setNacionalidad($data['nacionalidad']);
		if(file_exists(__DIR__.'/../../public/uploads/'.md5($data['email']))){
			echo 'rata';
			$user->setFoto(md5($data['email']));
		}
		$user->setEstatus('0');
		$user->setFechacreacion(Date('Y-m-d H:i:s'));
		$user->setPassword(md5($data['password']));
		$user->setEmail($data['email']);
		$this->em->persist($user);
		$this->em->flush();
	}
	

}
