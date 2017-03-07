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
    }
    
    /**
     * Metodo index
     * 
     * Este metodo es el encargado de cargar la pagina de inicio.
     */    
    public function index()
    {  
        $this->load->view('index_admin');
    }
    
}