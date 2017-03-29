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
class Configuracion_model extends CI_Model 
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
    
    public function traer_configuracion()
    {
        $configuracion=array();
        $query=$this->db->get('configuracion');
        foreach ($query->result() as $row)
        {
            $configuracion['id']=$row->id;
            $configuracion['nombre']=$row->nombre;
            $configuracion['telefono']=$row->telefono;
            $configuracion['correo']=$row->correo;
            $configuracion['direccion']=$row->direccion;            
            $configuracion['lugar']=$row->lugar;
            $configuracion['perfil']=$row->perfil;
            $configuracion['imagen_1']=$row->imagen_1;
            $configuracion['imagen_2']=$row->imagen_2;
            $configuracion['imagen_3']=$row->imagen_3;
            $configuracion['facebook']=$row->facebook;
            $configuracion['twitter']=$row->twitter;
            $configuracion['linkedin']=$row->linkedin;
            $configuracion['instagram']=$row->instagram;
            $configuracion['titulo']=$row->titulo;
            
        }
        
        return $configuracion;
    }      
    
    public function actualizar_configuracion($data)
    {        
        $this->db->where('id', $data['id']);
        $this->db->update('configuracion', $data);
        for($i=1;$i<=3;$i++)
        {
            if(strcmp (basename($_FILES['imagen_'.$i.'']['name']),"")!==0)
            {
                $oldmask = umask(0);
                umask($oldmask);        
                $dir_subida = DIRECTORIO_IMG.'configuracion/';
                if(file_exists($dir_subida)){}
                else{mkdir($dir_subida, 0700);}
                $fichero_subido = $dir_subida . basename($_FILES['imagen_'.$i.'']['name']);
                move_uploaded_file($_FILES['imagen_'.$i.'']['tmp_name'], $fichero_subido);         
                $normal=DIRECTORIO_IMG.'configuracion/';            
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
                               'imagen_'.$i.'' => basename($_FILES['imagen_'.$i.'']['name'])
                            );

                $this->db->where('id', $data['id']);
                $this->db->update('configuracion', $data_img);  
            }
        }
    }
    
    public function traer_configuracion_patrocinadores()
    {
        $patrocinadores=array();
        $this->db->where("estado","activo");
        $query=$this->db->get('configuracion_patrocinadores');
        foreach ($query->result() as $row)
        {
            $patrocinadores[$row->id]['id']=$row->id;
            $patrocinadores[$row->id]['nombre']=$row->nombre;
            $patrocinadores[$row->id]['url']=$row->url;
            $patrocinadores[$row->id]['imagen']=$row->imagen;            
        }
        
        return $patrocinadores;
    } 
    
    public function traer_configuracion_patrocinador($id)
    {
        $patrocinador=array();
        $this->db->where("id",$id);
        $query=$this->db->get('configuracion_patrocinadores');
        foreach ($query->result() as $row)
        {
            $patrocinador['id']=$row->id;
            $patrocinador['nombre']=$row->nombre;
            $patrocinador['url']=$row->url;
            $patrocinador['imagen']=$row->imagen;            
        }
        
        return $patrocinador;
    }  
    
    public function actualizar_configuracion_patrocinador($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('configuracion_patrocinadores', $data);
        if(isset($_FILES['imagen']) && strcmp (basename($_FILES['imagen']['name']),"")!==0)
        {
            $id=$data['id'];
            $oldmask = umask(0);
            umask($oldmask);        
            $dir_subida = DIRECTORIO_IMG.'configuracion/patrocinadores/';
            if(file_exists($dir_subida)){}
            else{mkdir($dir_subida, 0700);}
            $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
            $ext=substr($fichero_subido, -4); 
            $fichero_subido = $dir_subida . $id.$ext;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido);         
            $normal=DIRECTORIO_IMG.'configuracion/patrocinadores/';            
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
                           'imagen' => $id.$ext
                        );

            $this->db->where('id', $id);
            $this->db->update('configuracion_patrocinadores', $data);     
        }        
    }    
    
    public function agregar_configuracion_patrocinador($data)
    {
        $this->db->insert('configuracion_patrocinadores', $data);
        $id=$this->db->insert_id();
        if(isset($_FILES['imagen']) && strcmp (basename($_FILES['imagen']['name']),"")!==0)
        {
            $oldmask = umask(0);
            umask($oldmask);        
            $dir_subida = DIRECTORIO_IMG.'configuracion/patrocinadores/';
            if(file_exists($dir_subida)){}
            else{mkdir($dir_subida, 0700);}
            $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
            $ext=substr($fichero_subido, -4); 
            $fichero_subido = $dir_subida . $id.$ext;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido);         
            $normal=DIRECTORIO_IMG.'configuracion/patrocinadores/';            
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
                           'imagen' => $id.$ext
                        );

            $this->db->where('id', $id);
            $this->db->update('configuracion_patrocinadores', $data);     
        } 
        
        return $id;
    }

    public function eliminar_configuracion_patrocinador($id)
    {
        $data = array(
            'estado' => "eliminado"
        );        
        $this->db->where('id', $id);
        $this->db->update('configuracion_patrocinadores', $data);         
    }  
}