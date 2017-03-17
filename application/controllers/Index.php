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
        $this->load->model("precios_model");
        $this->load->model("precios_patrocinadores_model");
    }
    
    public function index()
    {
        $datos['eventos']=$this->eventos_model->traer_eventos();
        $datos['galerias']=$this->galerias_model->traer_galerias();
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
        $datos['numero_conferencistas']=$this->conferencistas_model->traer_numero_conferencistas_evento($evento);
        $datos['precios']=$this->precios_model->traer_precios_evento($evento);
        $this->load->view('evento',$datos);
    }
    
    public function ver_conferencistas_evento()
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
        $this->load->view('conferencistas',$datos);        
    }
    
    public function conviertete_patrocinador($mensaje=NULL,$id=NULL)
    {
        if($mensaje)
        {
            $datos['mensaje']=$mensaje;
        }
        if($id)
        {
            $evento=$id;
        }
        else
        {
            $evento=  $this->input->get("evento");
        }
        $datos['evento']=$this->eventos_model->traer_evento($evento);
        $datos['galerias']=$this->galerias_model->traer_galerias_evento($evento);
        $datos['precios_patrocinadores']=  $this->precios_patrocinadores_model->traer_precios_patrocinadores_evento($evento);
        $this->load->view('conviertete_patrocinador',$datos);        
    }  
    
    public function solicitud_patrocinador()
    {
        $data_patrocinador=array(
            "nombre_contacto" => $this->input->post("nombre_contacto"),
            "telefono_contacto" => $this->input->post("telefono_contacto"),
            "nombre" => $this->input->post("nombre"),
            "descripcion" => $this->input->post("descripcion"),
            "url" => $this->input->post("url"),
            "estado" => $this->input->post("estado")
        );
        $evento=  $this->input->post("evento");
        $precio_evento=  $this->input->post("precio");
        $patrocinador=$this->patrocinadores_model->agregar_patrocinador($data_patrocinador);
        $data_patrocinador_evento=array(
            "evento" => $evento,
            "patrocinador" => $patrocinador,
            "precio" => $precio_evento,
            "estado" => "pendiente"
        );
        $this->patrocinadores_model->agregar_patrocinador_evento($data_patrocinador_evento);
        $mensaje="Gracias por comunicarte con nostros en breve te responderemos";
        $this->conviertete_patrocinador($mensaje,$evento);
    }
}