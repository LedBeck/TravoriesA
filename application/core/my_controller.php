<?php
class MY_Controller extends CI_Controller{
	static $template = 'layouts/default';
    function __construct(){
        parent::__construct();
        $this->load->library('layout');
        $this->layout->setLayout(MY_Controller::$template);
        $this->layout->setTitulo('Compras');
    }
    public function setLayout($layout = 'layouts/default'){
    	$this->layout->setLayout($layout);
        
    }
}
