<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once __DIR__.'/Entities/Experiencia.php';
include_once __DIR__.'/Entities/Comentario.php';
include_once __DIR__.'/Entities/Galeria.php';
include_once __DIR__.'/Entities/User.php';
class ModelExperiencia extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->em = $this->doctrine->em;
	}
	public function getAllExperiencias($user){
		$experiencias = $this->em->getRepository("Experiencia")->findBy(array("iduser" => $user));
		return $experiencias;
	}
	public function getExperiencias($id){
		$experiencia = $this->em->getRepository("Experiencia")->findOneBy(array("idexperiencia" => $id));
		return $experiencia;
	}
	public function delete($id){

	}
	public function edit($id){
		
	}
	public function save($data){
		// $user = new User;
		// $user->setUsername($data['email']);
		// $user->setNombre($data['nombre']);
		// $user->setApellidopaterno($data['nombre']);
		// $user->setApellidomaterno($data['nombre']);
		// $user->setFechanacimiento($data['nacimiento']);
		// $user->setNacionalidad($data['nacionalidad']);
		// if(file_exists(__DIR__.'/../../public/uploads/'.md5($data['email']))){
		// 	$user->setFoto(md5($data['email']));
		// }
		// $user->setEstatus('0');
		// $user->setFechacreacion(Date('Y-m-d H:i:s'));
		// $user->setPassword(md5($data['password']));
		// $user->setEmail($data['email']);
		// $this->em->persist($user);
		// $this->em->flush();
	}
	

}

