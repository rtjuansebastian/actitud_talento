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
    
    public function index()
    {
        $datos['eventos']=$this->eventos_model->traer_eventos();
        $this->load->view('index',$datos);        
    }
    
    /**
     * Metodo index
     * 
     * Este metodo es el encargado de cargar la pagina de inicio.
     */    
    public function evento()
    {
        $evento=  $this->input->get("evento");
        $datos['evento']=$this->eventos_model->traer_evento($evento);
        $datos['patrocinadores']=$this->patrocinadores_model->traer_patrocinadores_evento($evento);
        $datos['testimonios']=$this->testimonios_model->traer_testimonios_evento($evento);
        $datos['preguntas']=$this->preguntas_model->traer_preguntas_evento($evento);
        $datos['galerias']=$this->galerias_model->traer_galerias_evento($evento);
        $dias=$this->programaciones_model->traer_dias_evento($evento);
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
        $datos['conferencistas']=$this->conferencistas_model->traer_conferencistas_evento($evento);
        $this->load->view('evento',$datos);
    }
    
    
    
}