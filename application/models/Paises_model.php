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
class Paises_model extends CI_Model 
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
    
    public function traer_paises($estado="activo")
    {
        $paises=array();
        $this->db->where("estado",$estado);
        $query=$this->db->get('paises');
        foreach ($query->result() as $row)
        {
            $paises[$row->id]['id']=$row->id;
            $paises[$row->id]['nombre']=$row->nombre;
            $paises[$row->id]['imagen']=$row->imagen;
            $paises[$row->id]['estado']=$row->estado;
        }
        
        return $paises;
    }
    
    public function traer_pais($id)
    {
        $pais=array();        
        $this->db->where('id',$id);
        $query=$this->db->get('paises');
        $row=$query->row();
        $pais['id']=$row->id;       
        $pais['nombre']=$row->nombre;
        $pais['imagen']=$row->imagen;
        $pais['estado']=$row->estado;
        
        return $pais;
    } 
    
    public function agregar_pais($data)
    {
        $this->db->insert('paises', $data); 
        $id=$this->db->insert_id();
        
        if(isset($_FILES['imagen']) && strcmp (basename($_FILES['imagen']['name']),"")!==0)
        {
            $oldmask = umask(0);
            umask($oldmask);        
            $dir_subida = DIRECTORIO_IMG.'banderas/';
            if(file_exists($dir_subida)){}
            else{mkdir($dir_subida, 0700);}
            $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
            $ext=substr($fichero_subido, -4); 
            $fichero_subido = $dir_subida . $id.$ext;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido);          
            $normal=DIRECTORIO_IMG.'banderas/';            
            $config['image_library'] = 'gd2';
            $config['source_image'] = $fichero_subido;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['new_image']=$normal;
            $config['width'] = 125;
            $config['height'] = 90;
            $this->load->library('image_lib', $config); 
            $this->image_lib->resize(); 
            $data_img = array(
                           'imagen' => $id.$ext
                        );

            $this->db->where('id', $id);
            $this->db->update('paises', $data_img);  
        }         
        
        return $id;
    }
    
    public function actualizar_pais($data)
    {        
        $this->db->where('id', $data['id']);
        $this->db->update('paises', $data);     
        if(isset($_FILES['imagen']) && strcmp (basename($_FILES['imagen']['name']),"")!==0)
        {
            $id=$data['id'];
            $oldmask = umask(0);
            umask($oldmask);        
            $dir_subida = DIRECTORIO_IMG.'banderas/';
            //$dir_subida = '/var/www/html/actitud_talento/assets/img/banderas/';
            if(file_exists($dir_subida)){}
            else{mkdir($dir_subida, 0700);}
            $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
            $ext=substr($fichero_subido, -4); 
            $fichero_subido = $dir_subida . $id.$ext;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido);
            $normal=DIRECTORIO_IMG.'banderas/';            
            //$normal='/var/www/html/actitud_talento/assets/img/banderas/';            
            $config['image_library'] = 'gd2';
            $config['source_image'] = $fichero_subido;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['new_image']=$normal;
            $config['width'] = 125;
            $config['height'] = 90;
            $this->load->library('image_lib', $config); 
            $this->image_lib->resize(); 
            $data_img = array(
                           'imagen' => $id.$ext
                        );

            $this->db->where('id', $id);
            $this->db->update('paises', $data_img);             
        }
    }  
    
    public function eliminar_pais($id)
    {
        $data = array(
            'estado' => "eliminado"
        );        
        $this->db->where('id', $id);
        $this->db->update('paises', $data);         
    }
}