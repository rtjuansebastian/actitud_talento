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
class Patrocinadores_model extends CI_Model 
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
    
    public function traer_patrocinadores()
    {
        $patrocinadores=array();
        $this->db->where('estado','activo');
        $query=$this->db->get('patrocinadores');
        foreach ($query->result() as $row)
        {
            $patrocinadores[$row->id]['id']=$row->id;
            $patrocinadores[$row->id]['nombre']=$row->nombre;
            $patrocinadores[$row->id]['descripcion']=$row->descripcion;
            $patrocinadores[$row->id]['url']=$row->url;
            $patrocinadores[$row->id]['imagen_patrocinador']=$row->imagen_patrocinador;
        }
        
        return $patrocinadores;
    }
    
    public function traer_patrocinadores_evento($evento)
    {
        $patrocinadores=array();
        $this->db->select("eventos.id as evento, eventos.nombre as nombre_evento, patrocinadores.id as patrocinador, patrocinadores.nombre as nombre_patrocinador, patrocinadores.url as url, patrocinadores.imagen_patrocinador as imagen_patrocinador");
        $this->db->from("eventos_patrocinadores");
        $this->db->join("eventos","eventos.id=eventos_patrocinadores.evento");
        $this->db->join("patrocinadores","patrocinadores.id=eventos_patrocinadores.patrocinador");
        $this->db->where('eventos_patrocinadores.evento',$evento);
        $this->db->where('patrocinadores.estado','activo');
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $patrocinadores[$row->evento."-".$row->patrocinador]['evento']=$row->evento;
            $patrocinadores[$row->evento."-".$row->patrocinador]['nombre_evento']=$row->nombre_evento;
            $patrocinadores[$row->evento."-".$row->patrocinador]['patrocinador']=$row->patrocinador;
            $patrocinadores[$row->evento."-".$row->patrocinador]['nombre_patrocinador']=$row->nombre_patrocinador;
            $patrocinadores[$row->evento."-".$row->patrocinador]['url']=$row->url;
            $patrocinadores[$row->evento."-".$row->patrocinador]['imagen_patrocinador']=$row->imagen_patrocinador;
        }
        
        return $patrocinadores;
    }    
    
    public function traer_patrocinador($id)
    {
        $patrocinador=array();
        $this->db->where('id',$id);
        $this->db->where('estado','activo');
        $query=$this->db->get('patrocinadores');
        $row=$query->row();
        $patrocinador['id']=$row->id;
        $patrocinador['nombre']=$row->nombre;
        $patrocinador['descripcion']=$row->descripcion;
        $patrocinador['url']=$row->url;
        $patrocinador['imagen_patrocinador']=$row->imagen_patrocinador;
        
        return $patrocinador;
    }    
    
    public function agregar_patrocinador($data)
    {
        $this->db->insert('patrocinadores', $data);
        $id=$this->db->insert_id();
        if(isset($_FILES['imagen_patrocinador']) && strcmp (basename($_FILES['imagen_patrocinador']['name']),"")!==0)
        {
            $oldmask = umask(0);
            umask($oldmask);        
            $dir_subida = DIRECTORIO_IMG.'patrocinadores/';
            if(file_exists($dir_subida)){}
            else{mkdir($dir_subida, 0700);}
            $fichero_subido = $dir_subida . basename($_FILES['imagen_patrocinador']['name']);
            $ext=substr($fichero_subido, -4); 
            $fichero_subido = $dir_subida . $id.$ext;
            move_uploaded_file($_FILES['imagen_patrocinador']['tmp_name'], $fichero_subido);         
            $normal=DIRECTORIO_IMG.'patrocinadores/';            
            $config['image_library'] = 'gd2';
            $config['source_image'] = $fichero_subido;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['new_image']=$normal;
            $config['width'] = 125;
            $config['height'] = 90;
            $this->load->library('image_lib', $config); 
            $this->image_lib->resize(); 
            $data = array(
                           'imagen_patrocinador' => $id.$ext
                        );

            $this->db->where('id', $id);
            $this->db->update('patrocinadores', $data);     
        } 
        
        return $id;
    }
    
    public function actualizar_patrocinador($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('patrocinadores', $data);
        if(isset($_FILES['imagen_patrocinador']) && strcmp (basename($_FILES['imagen_patrocinador']['name']),"")!==0)
        {
            $id=$data['id'];
            $oldmask = umask(0);
            umask($oldmask);        
            $dir_subida = DIRECTORIO_IMG.'patrocinadores/';
            if(file_exists($dir_subida)){}
            else{mkdir($dir_subida, 0700);}
            $fichero_subido = $dir_subida . basename($_FILES['imagen_patrocinador']['name']);
            $ext=substr($fichero_subido, -4); 
            $fichero_subido = $dir_subida . $id.$ext;
            move_uploaded_file($_FILES['imagen_patrocinador']['tmp_name'], $fichero_subido);         
            $normal=DIRECTORIO_IMG.'patrocinadores/';            
            $config['image_library'] = 'gd2';
            $config['source_image'] = $fichero_subido;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['new_image']=$normal;
            $config['width'] = 125;
            $config['height'] = 90;
            $this->load->library('image_lib', $config); 
            $this->image_lib->resize();
            $data = array(
                           'imagen_patrocinador' => $id.$ext
                        );

            $this->db->where('id', $id);
            $this->db->update('patrocinadores', $data);     
        }        
    }
    
    public function agregar_patrocinadores_evento($data)
    {
        $evento=$data['evento'][0];
        $total_patrocinadores=  count($data['patrocinador']);
        for($i=0;$i<=$total_patrocinadores-1;$i++)
        {
            $datos=array("evento"=>$evento, "patrocinador"=>$data['patrocinador'][$i]);
            $this->db->insert('eventos_patrocinadores', $datos); 
        }
    }
    
    public function agregar_patrocinador_evento($data)
    {
        $this->db->where("evento",$data["evento"]);
        $this->db->where("patrocinador",$data["patrocinador"]);
        $query=$this->db->get("eventos_patrocinadores");
        if($query->num_rows()<1)
        {
            $this->db->insert('eventos_patrocinadores', $data); 
        }        
    }  
    
    public function eliminar_patrocinador_evento($data)
    {
        $this->db->where("evento",$data["evento"]);
        $this->db->where("patrocinador",$data["patrocinador"]);
        $this->db->delete('eventos_patrocinadores');
    }
    
    public function eliminar_patrocinador($id)
    {
        $data = array(
            'estado' => "eliminado"
        );        
        $this->db->where('id', $id);
        $this->db->update('patrocinadores', $data);         
    }    
}