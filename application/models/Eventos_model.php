<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Modelo del usuario de la aplicación
 * 
 * Este modelo realiza las consultas sobre los usuarios a la base de datos
 * y retorna los resultados al controlador.
 * 
 * @package AHA
 * @autor Juan Sebastián Rodríguez <rtjuansebastian@gmail.com>
 * @version 1.0
 * @copyright PoBox
 */
class Eventos_model extends CI_Model 
{
    
    /**
     * Constructor de la clase 
     * 
     * Metodo que carga los atributos de la clase CI_model
     */    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function traer_eventos($estado="activo")
    {
        $eventos=array();
        $this->db->select("eventos.id, eventos.pais, paises.nombre as nombre_pais, eventos.nombre, eventos.descripcion, eventos.lugar, eventos.fecha, eventos.coordenadas, eventos.cupos, eventos.dias, eventos.telefono, eventos.email, eventos.video, eventos.imagen_fondo, eventos.color, paises.imagen as imagen_bandera, eventos.twitter, eventos.dribbble, eventos.facebook, eventos.google_plus, eventos.instagram, eventos.pinterest, eventos.skype, GROUP_CONCAT(patrocinadores.nombre SEPARATOR ',') AS patrocinadores, eventos.estado");
        $this->db->from("eventos");
        $this->db->join("eventos_patrocinadores","eventos.id=eventos_patrocinadores.evento");
        $this->db->join("patrocinadores","eventos_patrocinadores.patrocinador=patrocinadores.id");
        $this->db->join("paises","eventos.pais=paises.id");
        $this->db->where("eventos.estado",$estado);
        $this->db->group_by("eventos.id");
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $eventos[$row->id]['id']=$row->id;
            $eventos[$row->id]['pais']=$row->pais;
            $eventos[$row->id]['nombre_pais']=$row->nombre_pais;
            $eventos[$row->id]['nombre']=$row->nombre;
            $eventos[$row->id]['descripcion']=$row->descripcion;
            $eventos[$row->id]['lugar']=$row->lugar;
            $eventos[$row->id]['fecha']=$row->fecha;
            $eventos[$row->id]['coordenadas']=$row->coordenadas;
            $eventos[$row->id]['cupos']=$row->cupos;
            $eventos[$row->id]['dias']=$row->dias;
            $eventos[$row->id]['telefono']=$row->telefono;
            $eventos[$row->id]['email']=$row->email;
            $eventos[$row->id]['video']=$row->video;
            $eventos[$row->id]['imagen_fondo']=$row->imagen_fondo;
            $eventos[$row->id]['imagen_bandera']=$row->imagen_bandera;
            $eventos[$row->id]['color']=$row->color;
            $eventos[$row->id]['twitter']=$row->twitter;
            $eventos[$row->id]['dribbble']=$row->dribbble;
            $eventos[$row->id]['facebook']=$row->facebook;
            $eventos[$row->id]['google-plus']=$row->google_plus;
            $eventos[$row->id]['instagram']=$row->instagram;
            $eventos[$row->id]['pinterest']=$row->pinterest;
            $eventos[$row->id]['skype']=$row->skype;
            $eventos[$row->id]['patrocinadores']=$row->patrocinadores;
            $eventos[$row->id]['estado']=$row->estado;
        }
        
        return $eventos;
    }
    
    public function traer_evento($id)
    {
        $evento=array();
        $this->db->select("eventos.id, eventos.pais, paises.nombre as nombre_pais, eventos.nombre, eventos.descripcion, eventos.lugar, eventos.fecha, eventos.coordenadas, eventos.cupos, eventos.dias, eventos.telefono, eventos.email, eventos.video, eventos.imagen_fondo, eventos.color, paises.imagen as imagen_bandera, eventos.twitter, eventos.dribbble, eventos.facebook, eventos.google_plus, eventos.instagram, eventos.pinterest, eventos.skype, GROUP_CONCAT(patrocinadores.nombre SEPARATOR ',') AS patrocinadores, eventos.estado");
        $this->db->from("eventos");
        $this->db->join("eventos_patrocinadores","eventos.id=eventos_patrocinadores.evento");
        $this->db->join("patrocinadores","eventos_patrocinadores.patrocinador=patrocinadores.id");
        $this->db->join("paises","eventos.pais=paises.id");        
        $this->db->where('eventos.id',$id);
        $query=$this->db->get();
        $row=$query->row();
        $evento['id']=$row->id;
        $evento['pais']=$row->pais;
        $evento['nombre_pais']=$row->nombre_pais;
        $evento['nombre']=$row->nombre;
        $evento['descripcion']=$row->descripcion;
        $evento['lugar']=$row->lugar;
        $evento['fecha']=$row->fecha;
        $evento['coordenadas']=$row->coordenadas;
        $evento['cupos']=$row->cupos;
        $evento['dias']=$row->dias;
        $evento['telefono']=$row->telefono;
        $evento['email']=$row->email;
        $evento['video']=$row->video;
        $evento['imagen_fondo']=$row->imagen_fondo;
        $evento['color']=$row->color;
        $evento['imagen_bandera']=$row->imagen_bandera;
        $evento['twitter']=$row->twitter;
        $evento['dribbble']=$row->dribbble;
        $evento['facebook']=$row->facebook;
        $evento['google-plus']=$row->google_plus;
        $evento['instagram']=$row->instagram;
        $evento['pinterest']=$row->pinterest;
        $evento['skype']=$row->skype;
        $evento['estado']=$row->estado;
        
        return $evento;
    } 
    
    public function agregar_evento($data)
    {
        $this->db->insert('eventos', $data); 
        $id=$this->db->insert_id();
        if(isset($_FILES['imagen_fondo']) && strcmp (basename($_FILES['imagen_fondo']['name']),"")!==0)
        {
            $oldmask = umask(0);
            umask($oldmask);        
            $dir_subida = DIRECTORIO_IMG.'fondos/';
            if(file_exists($dir_subida)){}
            else{mkdir($dir_subida, 0700);}
            $fichero_subido = $dir_subida . basename($_FILES['imagen_fondo']['name']);
            $ext=substr($fichero_subido, -4); 
            $fichero_subido = $dir_subida . $id.$ext;
            move_uploaded_file($_FILES['imagen_fondo']['tmp_name'], $fichero_subido);      
            $normal=DIRECTORIO_IMG.'fondos/';            
            $config['image_library'] = 'gd2';
            $config['source_image'] = $fichero_subido;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['new_image']=$normal;
            $config['width'] = 1700;
            $config['height'] = 900;
            $this->load->library('image_lib', $config); 
            $this->image_lib->resize(); 
            $data_img = array(
                           'imagen_fondo' => base_url()."assets/img/fondos/".$id.$ext
                        );

            $this->db->where('id', $id);
            $this->db->update('eventos', $data_img);  
        }        
        
        return $id;
    }
    
    public function actualizar_evento($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('eventos', $data);          
        if(isset($_FILES['imagen_fondo']) && strcmp (basename($_FILES['imagen_fondo']['name']),"")!==0)
        {
            $id=$data['id'];
            $oldmask = umask(0);
            umask($oldmask);        
            $dir_subida = DIRECTORIO_IMG.'fondos/';
            if(file_exists($dir_subida)){}
            else{mkdir($dir_subida, 0700);}
            $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
            $ext=substr($fichero_subido, -4); 
            $fichero_subido = $dir_subida . $id.$ext;
            move_uploaded_file($_FILES['imagen_fondo']['tmp_name'], $fichero_subido);      
            $normal=DIRECTORIO_IMG.'fondos/';            
            $config['image_library'] = 'gd2';
            $config['source_image'] = $fichero_subido;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['new_image']=$normal;
            $config['width'] = 1700;
            $config['height'] = 900;
            $this->load->library('image_lib', $config); 
            $this->image_lib->resize(); 
            $data_img = array(
                           'imagen' => base_url()."assets/img/fondos/".$id.$ext
                        );

            $this->db->where('id', $id);
            $this->db->update('eventos', $data_img);  
        }          
    }
    
    public function eliminar_evento($id)
    {
        $data = array(
            'estado' => "eliminado"
        );        
        $this->db->where('id', $id);
        $this->db->update('eventos', $data);         
    } 

    
    public function traer_eventos_pais()
    {
        $eventos=array();
        $this->db->select("paises.id as id_pais, paises.nombre as pais_nombre, paises.imagen, eventos.id as id_evento, eventos.nombre as evento_nombre, eventos.fecha, eventos.lugar");
        $this->db->from("eventos");
        $this->db->join("paises","eventos.pais=paises.id");
        $this->db->where("eventos.estado","activo");
        $this->db->where("paises.estado","activo");
        $this->db->order_by("pais_nombre, fecha");
        $query=$this->db->get();
        
        foreach ($query->result() as $row)
        {
            $fecha=date_create($row->fecha);
            $eventos[$row->id_pais]["id_pais"]=$row->id_pais;
            $eventos[$row->id_pais]["pais_nombre"]=$row->pais_nombre;
            $eventos[$row->id_pais]["imagen"]=$row->imagen;
            $eventos[$row->id_pais]["evento"][$row->id_evento]["id_evento"]=$row->id_evento;
            $eventos[$row->id_pais]["evento"][$row->id_evento]["evento_nombre"]=$row->evento_nombre;
            $eventos[$row->id_pais]["evento"][$row->id_evento]["fecha"]=date_format($fecha,"Y-m-d");
            $eventos[$row->id_pais]["evento"][$row->id_evento]["lugar"]=$row->lugar;
        }
        
        return $eventos;
    }
}