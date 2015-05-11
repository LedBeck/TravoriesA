<?php  
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{

    private $obj;
    private $layout;
    private $titulo;
    function __construct()
    {
        $this->obj =& get_instance();
        $this->layout = 'layouts/default';
        $this->titulo = 'Titulo';
    }

    function setLayout($layout){
      $this->layout = $layout;
    }
    function getLayout(){
        return $this->layout;
    }
    function getTitulo(){
        return $this->titulo;
    }
    function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    function view($view, $data=null, $return=false)
    {
        
        $loadedData = array();
        $data['tituloLayout'] = $this->titulo;
        $loadedData['contenidoLayout'] = $this->obj->load->view($view,$data,true);

        if($return)
        {
            $output = $this->obj->load->view($this->layout, $loadedData, true);
            return $output;
        }
        else
        {
            $this->obj->load->view($this->layout, $loadedData, false);
        }
    }
}
?> 