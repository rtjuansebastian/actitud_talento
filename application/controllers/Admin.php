<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controlador de index la aplicación
 * 
 * Este controlador conecta las funciones del modelo y las 
 * vistas del index.
 * 
 * @package Actitud_talento
 * @autor Juan Sebastián Rodríguez <rtjuansebastian@gmail.com>
 * @version 1.0
 * @copyright Actitud y Talento
 */

class Admin extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('conferencistas_model');
        $this->load->model("escenarios_model");
        $this->load->model("eventos_model");
        $this->load->model("patrocinadores_model");
        $this->load->model("testimonios_model");
        $this->load->model("preguntas_model");
        $this->load->model("programaciones_model");
        $this->load->model("galerias_model");
        $this->load->model("login_model");
    }
    
    /**
     * Metodo index
     * 
     * Este metodo es el encargado de cargar la pagina de inicio.
     */    
    public function index()
    {  
        $this->load->view('admin/index_admin');
    }
    
    public function ver_usuarios()
    {
        $datos['usuarios']=$this->login_model->traer_usuarios();
        $this->load->view('admin/ver_usuarios',$datos);        
    }
    
    public function ver_eventos()
    {
        $datos['eventos']=$this->eventos_model->traer_eventos();
        $this->load->view('admin/ver_eventos',$datos);
    }
    
    public function traer_programacion_evento()
    {
        $evento=$this->input->post("evento");
        $programaciones=$this->programaciones_model->traer_programacion_evento($evento);
        echo json_encode($programaciones);
    }
    
    public function traer_preguntas_evento()
    {
        $evento=$this->input->post("evento");
        $preguntas=$this->preguntas_model->traer_preguntas_evento($evento);
        echo json_encode($preguntas);
    }
    
    public function traer_testimonios_evento()
    {
        $evento=$this->input->post("evento");
        $testimonios=$this->testimonios_model->traer_testimonios_evento($evento);
        echo json_encode($testimonios);
    }    

    public function agregar_evento()
    {
        
    }  

    public function ver_conferencistas()
    {
        $datos['conferencistas']=$this->conferencistas_model->traer_conferencistas();
        $this->load->view('admin/ver_conferencistas',$datos);
    }  

    public function agregar_conferencista()
    {
        if($this->input->post())
        {
            $data=  $this->input->post();
            $this->conferencistas_model->agregar_conferencista($data);
            $this->ver_conferencistas();
        }
        else 
        {
            $this->load->view('admin/agregar_conferencista');   
        }        
    }  

    public function ver_escenarios()
    {
        $datos['escenarios']=$this->escenarios_model->traer_escenarios();
        $this->load->view('admin/ver_escenarios',$datos);
    }  

    public function agregar_escenario()
    {
      
    }
    

    public function ver_patrocinadores()
    {
        $datos['patrocinadores']=$this->patrocinadores_model->traer_patrocinadores();
        $this->load->view('admin/ver_patrocinadores',$datos);        
    }  

    public function agregar_patrocinador()
    {
        if($this->input->post())
        {
            $data=  $this->input->post();
            $this->patrocinadores_model->agregar_patrocinador($data);
            $this->ver_patrocinadores();
        }
        else 
        {
            $this->load->view('admin/agregar_patrocinador');   
        }          
    }    
    
}