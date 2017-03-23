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
                $dir_subida = DIRECTORIO_IMG;
                if(file_exists($dir_subida)){}
                else{mkdir($dir_subida, 0700);}
                $fichero_subido = $dir_subida . basename($_FILES['imagen_'.$i.'']['name']);
                move_uploaded_file($_FILES['imagen_'.$i.'']['tmp_name'], $fichero_subido);         
                $normal=DIRECTORIO_IMG;            
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
    
}