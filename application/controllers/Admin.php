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

    public function traer_galerias_evento()
    {
        $evento=$this->input->post("evento");
        $galeria=$this->galerias_model->traer_galerias_evento($evento);
        echo json_encode($galeria);        
    }

    public function agregar_evento()
    {
        if($this->input->post())
        {
            $data=  $this->input->post();
            $evento=$this->eventos_model->agregar_evento($data);
            $this->agregar_escenarios_evento($evento);
        }
        else 
        {        
            $this->load->view("admin/agregar_evento");
        }
    }  
    
    public function agregar_escenarios_evento($evento=NULL)
    {
        if($this->input->post("capacidad"))
        {
            $data=$this->input->post();
            $evento=$this->escenarios_model->agregar_escenarios_evento($data);
            $this->agregar_programacion_evento($evento);
        }
        else
        {
            $datos['evento']=$evento;
            $this->load->view("admin/agregar_escenarios_evento",$datos);   
        }        
    }

    public function agregar_programacion_evento($evento=NULL)
    {
        if($this->input->post("titulo"))
        {
            $data=  $this->input->post();
            $evento=$this->programaciones_model->agregar_programaciones_evento($data);
            $this->agregar_preguntas_evento($evento);
        }   
        else
        {
            $datos['evento']=$evento;
            $datos['conferencistas']=$this->conferencistas_model->traer_conferencistas();
            $datos['escenarios']=$this->escenarios_model->traer_escenarios_evento($evento);
            $this->load->view("admin/agregar_programacion_evento",$datos);            
        }
    }
    
    public function agregar_preguntas_evento($evento=NULL)
    {
        if($this->input->post("pregunta"))
        {        
            $data=  $this->input->post();
            $evento=$this->preguntas_model->agregar_preguntas_evento($data);
            $this->agregar_testimonios_evento($evento);            
        }
        else
        {
            $datos['evento']=$evento;
            $this->load->view("admin/agregar_preguntas_evento",$datos);             
        }
    }
    
    public function agregar_testimonios_evento($evento=NULL)
    {
        if($this->input->post("testimonio"))
        {        
            $data=  $this->input->post();
            $evento=$this->testimonios_model->agregar_testimonios_evento($data);
            $this->agregar_galerias_evento($evento);            
        }
        else
        {
            $datos['evento']=$evento;
            $this->load->view("admin/agregar_testimonios_evento",$datos);             
        }
    }

    public function agregar_galerias_evento($evento=NULL)
    {                  
        $datos['evento']=$evento;
        $this->load->view("admin/agregar_galerias_evento",$datos);             
    }
    
    public function subir_galerias_evento()
    {
        $data=  $this->input->post();
        $evento=$this->galerias_model->agregar_galerias_evento($data);
        $this->agregar_patrocinadores_evento($evento);         
    }

    public function agregar_patrocinadores_evento($evento=NULL)
    {
        if($this->input->post("patrocinador"))
        {        
            $data=  $this->input->post();
            $evento=$this->patrocinadores_model->agregar_patrocinadores_evento($data);
            $this->ver_eventos();           
        }
        else
        {
            $datos['patrocinadores']=$this->patrocinadores_model->traer_patrocinadores();
            $datos['evento']=$evento;
            $this->load->view("admin/agregar_patrocinadores_evento",$datos);             
        }
    }

    public function crear_patrocinador()
    {
        $data=  $this->input->post();
        $this->patrocinadores_model->agregar_patrocinador($data);
        $patrocinadores=$this->patrocinadores_model->traer_patrocinadores();
        echo json_encode($patrocinadores);
    }

    public function ver_conferencistas()
    {
        $datos['conferencistas']=$this->conferencistas_model->traer_conferencistas();
        $this->load->view('admin/ver_conferencistas',$datos);
    }
    
    public function editar_conferencista()
    {
        $id=  $this->input->post("id");
        $conferencista=$this->conferencistas_model->traer_conferencista($id);
        echo json_encode($conferencista);
    }
    
    public function actualizar_conferencista()
    {
        $data=  $this->input->post();
        $this->conferencistas_model->actualizar_conferencista($data);
        $this->ver_conferencistas();
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
        $datos['eventos']=  $this->eventos_model->traer_eventos();
        $datos['escenarios']=$this->escenarios_model->traer_escenarios();
        $this->load->view('admin/ver_escenarios',$datos);
    }
    
    public function editar_escenario()
    {
        $id=  $this->input->post("id");
        $escenario=$this->escenarios_model->traer_escenario($id);
        echo json_encode($escenario);
    }
    
    public function actualizar_escenario()
    {
        $data=  $this->input->post();
        $this->escenarios_model->actualizar_escenario($data);
        $this->ver_escenarios();
    }     

    public function agregar_escenario()
    {
        if($this->input->post())
        {
            $data=$this->input->post();
            $this->escenarios_model->agregar_escenario($data);
            $this->ver_escenarios();
        }
        else 
        {
            $datos['eventos']=  $this->eventos_model->traer_eventos();
            $this->load->view('admin/agregar_escenario',$datos);   
        }        
    }
    

    public function ver_patrocinadores()
    {
        $datos['patrocinadores']=$this->patrocinadores_model->traer_patrocinadores();
        $this->load->view('admin/ver_patrocinadores',$datos);        
    }
    
    public function editar_patrocinador()
    {
        $id=  $this->input->post("id");
        $patrocinador=$this->patrocinadores_model->traer_patrocinador($id);
        echo json_encode($patrocinador);
    }
    
    public function actualizar_patrocinador()
    {
        $data=  $this->input->post();
        $this->patrocinadores_model->actualizar_patrocinador($data);
        $this->ver_patrocinadores();
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