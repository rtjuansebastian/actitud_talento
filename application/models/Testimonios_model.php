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
}