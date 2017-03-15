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
class Galerias_model extends CI_Model 
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
    
    public function traer_galerias()
    {
        $galerias=array();
        $query=$this->db->get('eventos_galerias');
        foreach ($query->result() as $row)
        {
            $galerias[$row->id]['id']=$row->id;
            $galerias[$row->id]['evento']=$row->evento;
            $galerias[$row->id]['imagen']=$row->imagen;
        }
        
        return $galerias;
    }
    
    public function traer_galerias_evento($evento)
    {
        $galerias=array();
        $this->db->where('evento',$evento);
        $query=$this->db->get('eventos_galerias');
        foreach ($query->result() as $row)
        {
            $galerias[$row->id]['id']=$row->id;
            $galerias[$row->id]['evento']=$row->evento;
            $galerias[$row->id]['imagen']=$row->imagen;
        }
        
        return $galerias;
    }    
    
    public function traer_galeria($id)
    {
        $galeria=array();
        $this->db->where('id',$id);
        $query=$this->db->get('eventos_galerias');
        $row=$query->row();
        $galeria['id']=$row->id;
        $galeria['evento']=$row->evento;
        $galeria['imagen']=$row->imagen;              
        
        return $galeria;
    }

    public function agregar_galerias_evento($data)
    {
        $evento=$data['evento'][0];
        $imagen=1;
        for($i=0;$i<=3;$i++)
        {                       
            $datos=array("evento"=>$evento,
                    "imagen"=> ""
                );
            $this->db->insert('eventos_galerias', $datos); 
            if(isset($_FILES['imagen'.$imagen.'']) && strcmp (basename($_FILES['imagen'.$imagen.'']['name']),"")!==0)
            {
                $id=$this->db->insert_id();
                $oldmask = umask(0);
                umask($oldmask);        
                $dir_subida = '/home/users/web/b976/dom.ealvarezec/public_html/eventos/assets/img/galerias/';
                if(file_exists($dir_subida)){}
                else{mkdir($dir_subida, 0700);}
                $fichero_subido = $dir_subida . basename($_FILES['imagen'.$imagen.'']['name']);
                $ext=substr($fichero_subido, -4); 
                $fichero_subido = $dir_subida . $evento.'-'.$id.$ext;
                move_uploaded_file($_FILES['imagen'.$imagen.'']['tmp_name'], $fichero_subido);         
                $normal='/home/users/web/b976/dom.ealvarezec/public_html/eventos/assets/img/galerias/';            
                $config['image_library'] = 'gd2';
                $config['source_image'] = $fichero_subido;
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['new_image']=$normal;
                $config['width'] = 500;
                $config['height'] = 330;
                $this->load->library('image_lib', $config); 
                $this->image_lib->resize();                  
                $data_img = array(
                               'imagen' => $evento.'-'.$id.$ext
                            );

                $this->db->where('id', $id);
                $this->db->update('eventos_galerias', $data_img);  
                $imagen++;
            }             
        }
        
        return $evento;        
    }
    
    public function actualizar_galeria($data)
    {
        if(isset($_FILES['imagen']) && strcmp (basename($_FILES['imagen']['name']),"")!==0)
        {
            $id=$data['id'];
            $evento=$data['evento'];
            $oldmask = umask(0);
            umask($oldmask);        
            $dir_subida = '/home/users/web/b976/dom.ealvarezec/public_html/eventos/assets/img/galerias/';
            if(file_exists($dir_subida)){}
            else{mkdir($dir_subida, 0700);}
            $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
            $ext=substr($fichero_subido, -4); 
            $fichero_subido = $dir_subida . $evento.'-'.$id.$ext;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido);
            $normal='/home/users/web/b976/dom.ealvarezec/public_html/eventos/assets/img/galerias/';            
            $config['image_library'] = 'gd2';
            $config['source_image'] = $fichero_subido;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['new_image']=$normal;
            $config['width'] = 500;
            $config['height'] = 330;
            $this->load->library('image_lib', $config); 
            $this->image_lib->resize();
            $data_img = array(
                           'imagen' => $evento.'-'.$id.$ext
                        );

            $this->db->where('id', $id);
            $this->db->update('eventos_galerias', $data_img); 
        }        
    }
}