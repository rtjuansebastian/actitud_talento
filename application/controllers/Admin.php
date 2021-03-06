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

class Admin extends SuperController 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("paises_model");
        $this->load->model('conferencistas_model');
        $this->load->model("escenarios_model");
        $this->load->model("eventos_model");
        $this->load->model("patrocinadores_model");
        $this->load->model("testimonios_model");
        $this->load->model("preguntas_model");
        $this->load->model("programaciones_model");
        $this->load->model("galerias_model");
        $this->load->model("login_model");
        $this->load->model('contactos_model');
        $this->load->model('registros_model');
        $this->load->model('precios_model');
        $this->load->model('precios_patrocinadores_model');
        $this->load->model('configuracion_model');
        $this->removeCache();
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
    
    public function agregar_usuario()
    {
        if($this->input->post())
        {
            $data=  $this->input->post();
            $this->login_model->agregar_usuario($data);
            redirect("/admin/ver_usuarios/","refresh");
        }
        else 
        {        
            $this->load->view("admin/agregar_usuario");
        }

    }
    
    public function editar_usuario()
    {
        $id=  $this->input->post("usuario");
        $usuario=$this->login_model->traer_usuario($id);
        echo json_encode($usuario);
    }
    
    public function actualizar_usuario()
    {
        $data=  $this->input->post();
        $this->login_model->actualizar_usuario($data);
        redirect("/admin/ver_usuarios/","refresh");
    }
    
    public function eliminar_usuario()
    {
        $id=  $this->input->post("id");
        $this->login_model->eliminar_usuario($id);        
    }

    public function ver_paises()
    {
        $datos['paises']=$this->paises_model->traer_paises();
        $datos['paises']+=$this->paises_model->traer_paises("inactivo");
        $this->load->view('admin/ver_paises',$datos);
    }    
    
    public function editar_pais()
    {
        $id=  $this->input->post("id");
        $pais=$this->paises_model->traer_pais($id);
        echo json_encode($pais);
    }
    
    public function actualizar_pais()
    {
        $data=$this->input->post();
        $this->paises_model->actualizar_pais($data);
        redirect("/admin/ver_paises/","refresh");
    }
    
    public function agregar_pais()
    {
        if($this->input->post())
        {
            $data=  $this->input->post();
            $this->paises_model->agregar_pais($data);
            redirect("/admin/ver_paises/","refresh");
        }
        else 
        {
            $this->load->view('admin/agregar_pais');   
        }        
    }
    
    public function eliminar_pais()
    {
        $id= $this->input->post("id");
        $this->paises_model->eliminar_pais($id);        
    }     

    public function ver_eventos()
    {        
        $datos['eventos']=$this->eventos_model->traer_eventos();
        $datos['eventos']+=$this->eventos_model->traer_eventos("inactivo");
        $datos['paises']=$this->paises_model->traer_paises();
        $datos['patrocinadores']=$this->patrocinadores_model->traer_patrocinadores();        
        $this->load->view('admin/ver_eventos',$datos);
    }        
    
    public function traer_programacion_evento()
    {
        $evento=$this->input->post("evento");
        $programaciones=$this->programaciones_model->traer_programacion_evento($evento);
        $programaciones+=$this->programaciones_model->traer_programacion_evento($evento,'inactivo');
        $programaciones+=$this->programaciones_model->traer_programacion_evento($evento,'activo',"inactivo");
        $programaciones+=$this->programaciones_model->traer_programacion_evento($evento,'inactivo','inactivo');
        echo json_encode($programaciones);
    }
    
    public function traer_precios_evento()
    {
        $evento=$this->input->post("evento");
        $precios=$this->precios_model->traer_precios_evento($evento);
        $precios+=$this->precios_model->traer_precios_evento($evento,"inactivo");
        echo json_encode($precios);
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
    
    public function editar_evento_evento()
    {
        $id=  $this->input->post("evento");
        $evento=  $this->eventos_model->traer_evento($id);
        echo json_encode($evento);
    }
    
    public function actualizar_evento_evento()
    {
        $data=  $this->input->post();
        $this->eventos_model->actualizar_evento($data);
    }
    
    public function agregar_patrocinador_evento()
    {
        $data=  $this->input->post();
        $this->patrocinadores_model->agregar_patrocinador_evento($data);        
    }
    
    public function eliminar_patrocinador_evento()
    {
        $data=  $this->input->post();
        $this->patrocinadores_model->eliminar_patrocinador_evento($data);        
    }   
    
    public function traer_precios_patrocinio_evento()
    {
        $evento=$this->input->post("evento");
        $precios=$this->precios_patrocinadores_model->traer_precios_patrocinadores_evento($evento);
        $precios+=$this->precios_patrocinadores_model->traer_precios_patrocinadores_evento($evento,"inactivo");
        echo json_encode($precios);
    }
    
    public function crear_precio_patrocinadores_evento()
    {
        $data=$this->input->post();
        $this->precios_patrocinadores_model->agregar_precio($data);
    }   
    
    public function editar_precio_patrocinador_evento()
    {
        $id=$this->input->post("precio");
        $precio=$this->precios_patrocinadores_model->traer_precio_patrocinio($id);
        echo json_encode($precio);
    }
    
    public function actualizar_precio_patrocinador_evento()
    {
        $data=$this->input->post();
        $this->precios_patrocinadores_model->actualizar_precio($data);        
    }
    
    public function eliminar_precio_patrocinador_evento()
    {
        $id=  $this->input->post("precio");
        $this->precios_patrocinadores_model->eliminar_precio($id);                
    }

    public function editar_programacion_evento()
    {
        $id=$this->input->post("conferencia");
        $datos['conferencia']=  $this->programaciones_model->traer_programacion($id);
        $datos['escenarios']=  $this->escenarios_model->traer_escenarios_evento($datos['conferencia']['evento']);
        $datos['conferencistas']= $this->conferencistas_model->traer_conferencistas();
        echo json_encode($datos);
    }
    
    public function actualizar_programacion_evento()
    {
        $data=  $this->input->post();
        $this->programaciones_model->actualizar_programacion($data);
    }
    
    public function crear_programacion_evento()
    {
        $data=$this->input->post();
        $this->programaciones_model->agregar_programacion_evento($data);
    }
    
    public function eliminar_programacion_evento()
    {
        $id=$this->input->post("programacion");
        $this->programaciones_model->eliminar_programacion_evento($id);
    }

    public function crear_precio_evento()
    {
        $data=$this->input->post();
        $this->precios_model->agregar_precio($data);
    }  
    
    public function editar_precio_evento()
    {
        $id=  $this->input->post("precio");
        $precio=  $this->precios_model->traer_precio($id);
        echo json_encode($precio);
    } 
    
    public function actualizar_precio_evento()
    {
        $data=  $this->input->post();
        $this->precios_model->actualizar_precio($data);
    }    

    public function eliminar_precio_evento()
    {
        $id=$this->input->post("precio");
        $this->precios_model->eliminar_precio($id);
    }        

    public function editar_pregunta_evento()
    {
        $id=  $this->input->post("pregunta");
        $pregunta=  $this->preguntas_model->traer_pregunta($id);
        echo json_encode($pregunta);
    }
    
    public function actualizar_pregunta_evento()
    {
        $data=  $this->input->post();
        $this->preguntas_model->actualizar_pregunta($data);
    }
    
    public function crear_pregunta_evento()
    {
        $data=$this->input->post();
        $this->preguntas_model->agregar_pregunta_evento($data);
    }
    
    public function eliminar_pregunta_evento()
    {
        $id=$this->input->post("pregunta");
        $this->preguntas_model->eliminar_pregunta_evento($id);
    }    
    
    public function crear_testimonio_evento()
    {
        $data=$this->input->post();
        $this->testimonios_model->agregar_testimonio_evento($data);
    }    
    
    public function editar_testimonio_evento()
    {
        $id=  $this->input->post("testimonio");
        $testimonio=  $this->testimonios_model->traer_testimonio($id);
        echo json_encode($testimonio);
    }
    
    public function actualizar_testimonio_evento()
    {
        $data=  $this->input->post();
        $this->testimonios_model->actualizar_testimonio($data);
    }
    
    public function eliminar_testimonio_evento()
    {
        $id=$this->input->post("testimonio");
        $this->testimonios_model->eliminar_testimonio_evento($id);
    }    

    public function editar_galeria_evento()
    {
        $id=  $this->input->post("galeria");
        $galeria=  $this->galerias_model->traer_galeria($id);
        echo json_encode($galeria);
    }
    
    public function actualizar_galeria_evento()
    {
        $data=  $this->input->post();
        $this->galerias_model->actualizar_galeria($data);
    }     

    public function agregar_evento()
    {
        if($this->input->post())
        {
            $data=  $this->input->post();
            $evento=$this->eventos_model->agregar_evento($data);
            redirect("/admin/ver_eventos/","refresh");
        }
        else 
        {
            $datos['paises']=$this->paises_model->traer_paises();
            $this->load->view("admin/agregar_evento",$datos);
        }
    }  
    
    /*
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
     */
    
    public function eliminar_evento()
    {
        $id= $this->input->post("id");
        $this->eventos_model->eliminar_evento($id);
    }

    public function traer_conferencistas()
    {
        $conferencistas=$this->conferencistas_model->traer_conferencistas();
        echo json_encode($conferencistas);
    }
    
    public function crear_conferencista()
    {
        $data=$this->input->post();
        $this->conferencistas_model->agregar_conferencista($data);
        $conferencistas=$this->conferencistas_model->traer_conferencistas();
        echo json_encode($conferencistas);
    }    
    
    /*
    public function agregar_preguntas_evento($evento=NULL)
    {
        if($this->input->post("pregunta"))
        {        
            $data=  $this->input->post();
            $evento=$this->preguntas_model->agregar_preguntas_evento($data);
            $this->agregar_precios_evento($evento);            
        }
        else
        {
            $datos['evento']=$evento;
            $this->load->view("admin/agregar_preguntas_evento",$datos);             
        }
    }
    
    public function agregar_precios_evento($evento=NULL)
    {
        if($this->input->post("precio"))
        {        
            $data=  $this->input->post();
            $evento=$this->precios_model->agregar_precios_evento($data);
            $this->agregar_testimonios_evento($evento);            
        }
        else
        {
            $datos['evento']=$evento;
            $this->load->view("admin/agregar_precios_evento",$datos);             
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
        $this->agregar_precios_patrocinadores_evento($evento);         
    }
    
    public function agregar_precios_patrocinadores_evento($evento=NULL)
    {
        if($this->input->post("precio"))
        {        
            $data=  $this->input->post();
            $evento=$this->precios_patrocinadores_model->agregar_precios_patrocinadores_evento($data);
            $this->agregar_patrocinadores_evento($evento);            
        }
        else
        {
            $datos['evento']=$evento;
            $this->load->view("admin/agregar_precios_patrocinadores_evento",$datos);             
        }
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
            $datos['precios_patrocinadores']=$this->precios_patrocinadores_model->traer_precios_patrocinadores_evento($evento);
            $datos['evento']=$evento;
            $this->load->view("admin/agregar_patrocinadores_evento",$datos);             
        }
    }
     * 
     */

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
        $datos['conferencistas']+=$this->conferencistas_model->traer_conferencistas("inactivo");
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
        redirect("/admin/ver_conferencistas/","refresh");
    }    

    public function agregar_conferencista()
    {
        if($this->input->post())
        {
            $data=  $this->input->post();
            $this->conferencistas_model->agregar_conferencista($data);
            redirect("/admin/ver_conferencistas/","refresh");
        }
        else 
        {
            $this->load->view('admin/agregar_conferencista');   
        }        
    }
    
    public function eliminar_conferencista()
    {
        $id= $this->input->post("id");
        $this->conferencistas_model->eliminar_conferencista($id);
    }
    
    public function traer_escenarios_evento()
    {
        $evento=  $this->input->post("evento");
        $escenarios=$this->escenarios_model->traer_escenarios_evento($evento);
        echo json_encode($escenarios);
    }
    
    public function editar_escenario_evento()
    {
        $id=  $this->input->post("escenario");
        $evento=$this->escenarios_model->traer_escenario($id);
        echo json_encode($evento);
    }

    public function actualizar_escenario_evento()
    {
        $data=  $this->input->post();
        $this->escenarios_model->actualizar_escenario($data);
    }
    
    public function crear_escenario_evento()
    {
        $data=  $this->input->post();
        $this->escenarios_model->agregar_escenario($data);
    }

    public function traer_patrocinadores_evento()
    {
        $evento=  $this->input->post("evento");
        $patrocinadores=$this->patrocinadores_model->traer_patrocinadores_evento($evento);
        $patrocinadores+=$this->patrocinadores_model->traer_patrocinadores_evento($evento,"activo","inactivo");

        echo json_encode($patrocinadores);
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
        redirect("/admin/ver_escenarios/","refresh");
    } 

    public function eliminar_escenario()
    {
        $id= $this->input->post("id");
        $this->escenarios_model->eliminar_escenario($id);        
    }

    public function agregar_escenario()
    {
        if($this->input->post())
        {
            $data=$this->input->post();
            $this->escenarios_model->agregar_escenario($data);
            redirect("/admin/ver_escenarios/","refresh");
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
        $datos['patrocinadores']+=$this->patrocinadores_model->traer_patrocinadores("inactivo");
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
        redirect("/admin/ver_patrocinadores/","refresh");
    }     

    public function agregar_patrocinador()
    {
        if($this->input->post())
        {
            $data=  $this->input->post();
            $this->patrocinadores_model->agregar_patrocinador($data);
            redirect("/admin/ver_patrocinadores/","refresh");
        }
        else 
        {
            $this->load->view('admin/agregar_patrocinador');   
        }          
    }
    
    public function ver_solicitudes_patrocinadores()
    {
        $datos['solicitudes']=$this->patrocinadores_model->traer_solicitudes_patrocinadores();
        $this->load->view('admin/ver_solicitudes_patrocinador',$datos);           
    }
    
    public function aceptar_solicitud()
    {
        $id=$this->input->get("patrocinador");
        $evento=$this->input->get("evento");
        $this->patrocinadores_model->aceptar_solicitud_patrocinador($id,$evento);
        redirect("/admin/ver_solicitudes_patrocinadores/","refresh");
    }
    
    public function rechazar_solicitud()
    {
        $id=$this->input->get("patrocinador");
        $evento=$this->input->get("evento");
        $this->patrocinadores_model->rechazar_solicitud_patrocinador($id,$evento);
        redirect("/admin/ver_solicitudes_patrocinadores/","refresh");
    }

    public function eliminar_patrocinador()
    {
        $id= $this->input->post("id");
        $this->patrocinadores_model->eliminar_patrocinador($id);        
    }    
    
    public function agregar_contacto()
    {
        $data=$this->input->post();
        $this->contactos_model->agregar_contacto($data);
    }
    
    public function agregar_registro_evento()
    {
        $data=$this->input->post();
        $this->registros_model->agregar_registro_evento($data);
    }

    public function ver_registros()
    {
        $datos['registros']=$this->registros_model->traer_registros();
        $this->load->view("admin/ver_registros",$datos);
    }
    
    public function ver_contactos()
    {
        $datos['contactos']=$this->contactos_model->traer_contactos();
        $this->load->view("admin/ver_contactos",$datos);
    }

    public function responder_contacto()
    {
        $id=  $this->input->post("id");
        $contacto=$this->contactos_model->traer_contacto($id);
        $respuesta=  $this->input->post("respuesta");
        $this->contactos_model->responder_contacto($contacto,$respuesta);
        redirect("/admin/ver_contactos/","refresh");
    }
    
    public function configuracion()
    {
        $datos['configuracion']=$this->configuracion_model->traer_configuracion();
        $datos['patrocinadores']=$this->configuracion_model->traer_configuracion_patrocinadores();
        $this->load->view("admin/configuracion",$datos);
    }
    
    public function actualizar_configuracion()
    {
        $data=  $this->input->post();
        $this->configuracion_model->actualizar_configuracion($data);
        redirect("/admin/configuracion/","refresh");
    }
    
    public function editar_configuracion_patrocinador()
    {
        $id=$this->input->post("id");
        $patrocinador=$this->configuracion_model->traer_configuracion_patrocinador($id);
        echo json_encode($patrocinador);
    }
    
    public function actualizar_configuracion_patrocinador()
    {
        $data=$this->input->post();
        $this->configuracion_model->actualizar_configuracion_patrocinador($data);
        redirect("/admin/configuracion/","refresh");
    }
    
    public function crear_configuracion_patrocinador()
    {
        $data=  $this->input->post();
        $this->configuracion_model->agregar_configuracion_patrocinador($data);
        redirect("/admin/configuracion/","refresh");
    }
    
    public function eliminar_configuracion_patrocinador()
    {
        $id=$this->input->post("id");
        $this->configuracion_model->eliminar_configuracion_patrocinador($id);
    }
    
    public function eliminar_registro()
    {
        $registro=  $this->input->get("registro");
        $this->registros_model->eliminar_registro($registro);
        redirect("/admin/ver_registros/","refresh");
    }
    
    public function eliminar_contacto()
    {
        $contacto=  $this->input->get("contacto");
        $this->contactos_model->eliminar_contacto($contacto);
        redirect("/admin/ver_contactos/","refresh");
    }    
}