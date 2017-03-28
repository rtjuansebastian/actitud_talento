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
class Conferencistas_model extends CI_Model 
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
    
    public function traer_conferencistas($estado="activo")
    {
        $conferencistas=array();
        $this->db->where("estado",$estado);
        $query=$this->db->get('conferencistas');
        foreach ($query->result() as $row)
        {
            $conferencistas[$row->id]['id']=$row->id;
            $conferencistas[$row->id]['nombre']=$row->nombre;
            $conferencistas[$row->id]['profesion']=$row->profesion;
            $conferencistas[$row->id]['perfil']=$row->perfil;
            $conferencistas[$row->id]['imagen']=$row->imagen;
            $conferencistas[$row->id]['facebook']=$row->facebook;
            $conferencistas[$row->id]['twitter']=$row->twitter;
            $conferencistas[$row->id]['google_plus']=$row->google_plus;
            $conferencistas[$row->id]['linkedin']=$row->linkedin;
            $conferencistas[$row->id]['instagram']=$row->instagram;
            $conferencistas[$row->id]['estado']=$row->estado;
            
        }
        
        return $conferencistas;
    }
    
    public function traer_conferencistas_evento($evento)
    {
        $conferencistas=array();
        $this->db->select("conferencistas.id,conferencistas.nombre,conferencistas.profesion,conferencistas.perfil,conferencistas.imagen,conferencistas.facebook,conferencistas.twitter,conferencistas.google_plus,conferencistas.linkedin,conferencistas.instagram");
        $this->db->from("programaciones");
        $this->db->join("conferencistas","programaciones.conferencista=conferencistas.id");
        $this->db->where("conferencistas.estado","activo");
        $this->db->where('programaciones.evento',$evento);
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $conferencistas[$row->id]['id']=$row->id;
            $conferencistas[$row->id]['nombre']=$row->nombre;
            $conferencistas[$row->id]['profesion']=$row->profesion;
            $conferencistas[$row->id]['perfil']=$row->perfil;
            $conferencistas[$row->id]['imagen']=$row->imagen;
            $conferencistas[$row->id]['facebook']=$row->facebook;
            $conferencistas[$row->id]['twitter']=$row->twitter;
            $conferencistas[$row->id]['google_plus']=$row->google_plus;
            $conferencistas[$row->id]['linkedin']=$row->linkedin;
            $conferencistas[$row->id]['instagram']=$row->instagram;        
        }
        return $conferencistas;
    }     
    
    public function traer_conferencista($id)
    {
        $conferencista=array();
        $this->db->where('id',$id);
        $query=$this->db->get('conferencistas');
        $row=$query->row();
        $conferencista['id']=$row->id;
        $conferencista['nombre']=$row->nombre;
        $conferencista['profesion']=$row->profesion;
        $conferencista['perfil']=$row->perfil;
        $conferencista['imagen']=$row->imagen;
        $conferencista['facebook']=$row->facebook;
        $conferencista['twitter']=$row->twitter;
        $conferencista['google_plus']=$row->google_plus;
        $conferencista['linkedin']=$row->linkedin;
        $conferencista['instagram']=$row->instagram;        
        $conferencista['estado']=$row->estado;
        return $conferencista;
    }

    public function agregar_conferencista($data)
    {
        $this->db->insert('conferencistas', $data);
        if(isset($_FILES['imagen']) && strcmp (basename($_FILES['imagen']['name']),"")!==0)
        {
            $id=$this->db->insert_id();
            $oldmask = umask(0);
            umask($oldmask);        
            $dir_subida = DIRECTORIO_IMG.'conferencistas/';
            if(file_exists($dir_subida)){}
            else{mkdir($dir_subida, 0700);}
            $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
            $ext=substr($fichero_subido, -4); 
            $fichero_subido = $dir_subida . $id.$ext;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido);          
            $normal=DIRECTORIO_IMG.'conferencistas/';            
            $config['image_library'] = 'gd2';
            $config['source_image'] = $fichero_subido;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['new_image']=$normal;
            $config['width'] = 110;
            $config['height'] = 110;
            $this->load->library('image_lib', $config); 
            $this->image_lib->resize(); 
            $data = array(
                           'imagen' => $id.$ext
                        );

            $this->db->where('id', $id);
            $this->db->update('conferencistas', $data);     
        }
    }
    
    public function actualizar_conferencista($data)
    {        
        $this->db->where('id', $data['id']);
        $this->db->update('conferencistas', $data);     
        if(isset($_FILES['imagen']) && strcmp (basename($_FILES['imagen']['name']),"")!==0)
        {           
            $id=$data['id'];
            $oldmask = umask(0);
            umask($oldmask);        
            $dir_subida = DIRECTORIO_IMG.'conferencistas/';
            //$dir_subida = '/var/www/html/actitud_talento/assets/img/conferencistas/';
            if(file_exists($dir_subida)){}
            else{mkdir($dir_subida, 0700);}
            $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
            $ext=substr($fichero_subido, -4); 
            $fichero_subido = $dir_subida . $id.$ext;            
            move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido);
            $normal=DIRECTORIO_IMG.'conferencistas/';                        
            //$normal='/var/www/html/actitud_talento/assets/img/conferencistas/';                        
            $config['image_library'] = 'gd2';
            $config['source_image'] = $fichero_subido;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['new_image']=$normal;
            $config['width'] = 110;
            $config['height'] = 110;
            $this->load->library('image_lib', $config); 
            $this->image_lib->resize();                      
            $data = array(
                'imagen' => $id.$ext
            );
            $this->db->where('id', $id);
            $this->db->update('conferencistas', $data);             
        }
    }
    
    public function eliminar_conferencista($id)
    {
        $data = array(
            'estado' => "eliminado"
        );        
        $this->db->where('id', $id);
        $this->db->update('conferencistas', $data);         
    }

    public function traer_numero_conferencistas_evento($evento)
    {
        $this->db->where("evento",$evento);
        $this->db->group_by("conferencista");
        $query=$this->db->get("programaciones");
        $total=$query->num_rows();
        return $total;
    }
}