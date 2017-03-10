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
}