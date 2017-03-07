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

class Index extends CI_Controller 
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
    }
    
    /**
     * Metodo index
     * 
     * Este metodo es el encargado de cargar la pagina de inicio.
     */    
    public function index()
    {        
        $datos['evento']=$this->eventos_model->traer_evento(1);
        $datos['patrocinadores']=$this->patrocinadores_model->traer_patrocinadores_evento(1);
        $datos['testimonios']=$this->testimonios_model->traer_testimonios_evento(1);
        $datos['preguntas']=$this->preguntas_model->traer_preguntas_evento(1);
        $datos['galerias']=$this->galerias_model->traer_galerias_evento(1);
        $dias=$this->programaciones_model->traer_dias_evento(1);
        foreach ($dias as $dia)
        {
            $programaciones['dias'][$dia['fecha']]['escenarios']=$this->programaciones_model->traer_escenarios_dia($dia['fecha']);
        }        
        foreach ($dias as $dia)
        {
            foreach ($programaciones['dias'][$dia['fecha']]['escenarios'] as $escenario)
            {
                $programaciones['dias'][$dia['fecha']]['escenarios'][$escenario['id']]['programaciones']=$this->programaciones_model->traer_programacion_escenario_dia($dia['fecha'],$escenario['id']);
            }
        }
        $datos['dias']=$dias;
        $datos['programaciones']=$programaciones;
        $datos['conferencistas']=$this->conferencistas_model->traer_conferencistas_evento(1);
        $this->load->view('index',$datos);
    }
    
    
    
}