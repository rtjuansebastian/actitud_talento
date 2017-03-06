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
    
    public function traer_conferencistas()
    {
        $conferencistas=array();
        $query=$this->db->get('conferencistas');
        foreach ($query->result() as $row)
        {
            $conferencistas[$row->id]['id']=$row->id;
            $conferencistas[$row->id]['nombre']=$row->nombre;
            $conferencistas[$row->id]['profesion']=$row->profesion;
            $conferencistas[$row->id]['perfil']=$row->perfil;
            $conferencistas[$row->id]['imagen']=$row->imagen;
        }
        
        return $conferencistas;
    }
    
    public function traer_conferencista($id)
    {
        $conferencista=array();
        $this->db->where('id',$id);
        $query=$this->db->get('conferencista');
        $row=$query->row();
        $conferencista['id']=$row->id;
        $conferencista['nombre']=$row->nombre;
        $conferencista['profesion']=$row->profesion;
        $conferencista['perfil']=$row->perfil;
        $conferencista['imagen']=$row->imagen;
        
        return $conferencista;
    }    
}