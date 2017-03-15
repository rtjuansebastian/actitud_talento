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
class Testimonios_model extends CI_Model 
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
    
    public function traer_testimonios()
    {
        $testimonios=array();
        $query=$this->db->get('eventos_testimonios');
        foreach ($query->result() as $row)
        {
            $testimonios[$row->id]['id']=$row->id;
            $testimonios[$row->id]['evento']=$row->evento;
            $testimonios[$row->id]['nombre']=$row->nombre;           
            $testimonios[$row->id]['testimonio']=$row->testimonio;
            $testimonios[$row->id]['imagen']=$row->imagen;            
        }
        
        return $testimonios;
    }
    
    public function traer_testimonios_evento($evento)
    {
        $testimonios=array();
        $this->db->where("evento",$evento);
        $query=$this->db->get('eventos_testimonios');
        foreach ($query->result() as $row)
        {
            $testimonios[$row->id]['id']=$row->id;
            $testimonios[$row->id]['evento']=$row->evento;
            $testimonios[$row->id]['nombre']=$row->nombre;           
            $testimonios[$row->id]['testimonio']=$row->testimonio;
            $testimonios[$row->id]['imagen']=$row->imagen;            
        }
        
        return $testimonios;        
    }

        public function traer_testimonio($id)
    {
        $testimonio=array();
        $this->db->where('id',$id);
        $query=$this->db->get('eventos_testimonios');
        $row=$query->row();
        $testimonio['id']=$row->id;
        $testimonio['evento']=$row->evento;
        $testimonio['nombre']=$row->nombre;        
        $testimonio['testimonio']=$row->testimonio;
        $testimonio['imagen']=$row->imagen;
      
        return $testimonio;
    }
    
    public function agregar_testimonio_evento($data)
    {
        $this->db->insert('eventos_testimonios', $data);
        if(isset($_FILES['imagen']) && strcmp (basename($_FILES['imagen']['name']),"")!==0)
        {
            $id=$this->db->insert_id();
            $oldmask = umask(0);
            umask($oldmask);        
            $dir_subida = '/home/users/web/b976/dom.ealvarezec/public_html/eventos/assets/img/testimonios/';
            if(file_exists($dir_subida)){}
            else{mkdir($dir_subida, 0700);}
            $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
            $ext=substr($fichero_subido, -4); 
            $fichero_subido = $dir_subida . $id.$ext;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido);          
            $normal='/home/users/web/b976/dom.ealvarezec/public_html/eventos/assets/img/testimonios/';            
            $config['image_library'] = 'gd2';
            $config['source_image'] = $fichero_subido;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['new_image']=$normal;
            $config['width'] = 100;
            $config['height'] = 115;
            $this->load->library('image_lib', $config); 
            $this->image_lib->resize();            
            $data_img = array(
                           'imagen' => $id.$ext
                        );

            $this->db->where('id', $id);
            $this->db->update('eventos_testimonios', $data_img);  
        }        
    }
    
    public function agregar_testimonios_evento($data)
    {
        $evento=$data['evento'][0];
        $imagen=1;
        $total_preguntas=  count($data['testimonio']);
        for($i=0;$i<=($total_preguntas-1);$i++)
        {                       
            $datos=array("evento"=>$data['evento'][$i],
                    "nombre"=>$data['nombre'][$i],
                    "testimonio"=>$data['testimonio'][$i],
                );
            $this->db->insert('eventos_testimonios', $datos); 
            if(isset($_FILES['imagen'.$imagen.'']) && strcmp (basename($_FILES['imagen'.$imagen.'']['name']),"")!==0)
            {
                $id=$this->db->insert_id();
                $oldmask = umask(0);
                umask($oldmask);        
                $dir_subida = '/home/users/web/b976/dom.ealvarezec/public_html/eventos/assets/img/testimonios/';
                if(file_exists($dir_subida)){}
                else{mkdir($dir_subida, 0700);}
                $fichero_subido = $dir_subida . basename($_FILES['imagen'.$imagen.'']['name']);
                $ext=substr($fichero_subido, -4); 
                $fichero_subido = $dir_subida . $id.$ext;
                move_uploaded_file($_FILES['imagen'.$imagen.'']['tmp_name'], $fichero_subido);          
                $normal='/home/users/web/b976/dom.ealvarezec/public_html/eventos/assets/img/testimonios/';            
                $config['image_library'] = 'gd2';
                $config['source_image'] = $fichero_subido;
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['new_image']=$normal;
                $config['width'] = 100;
                $config['height'] = 115;
                $this->load->library('image_lib', $config); 
                $this->image_lib->resize();   
                $data_img = array(
                               'imagen' => $id.$ext
                            );

                $this->db->where('id', $id);
                $this->db->update('eventos_testimonios', $data_img);  
                $imagen++;
            }             
        }
        
        return $evento;
    }
    
    public function actualizar_testimonio($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('eventos_testimonios', $data);          
        if(isset($_FILES['imagen']) && strcmp (basename($_FILES['imagen']['name']),"")!==0)
        {
            $id=$data['id'];
            $oldmask = umask(0);
            umask($oldmask);        
            $dir_subida = '/home/users/web/b976/dom.ealvarezec/public_html/eventos/assets/img/testimonios/';
            if(file_exists($dir_subida)){}
            else{mkdir($dir_subida, 0700);}
            $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
            $ext=substr($fichero_subido, -4); 
            $fichero_subido = $dir_subida . $id.$ext;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido);          
            $normal='/home/users/web/b976/dom.ealvarezec/public_html/eventos/assets/img/testimonios/';            
            $config['image_library'] = 'gd2';
            $config['source_image'] = $fichero_subido;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['new_image']=$normal;
            $config['width'] = 100;
            $config['height'] = 115;
            $this->load->library('image_lib', $config); 
            $this->image_lib->resize();  
            $data_img = array(
                           'imagen' => $id.$ext
                        );

            $this->db->where('id', $id);
            $this->db->update('eventos_testimonios', $data_img);  
        }        
    }
    
    public function eliminar_testimonio_evento($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('eventos_testimonios');         
    }
}