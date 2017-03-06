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
class Escenarios_model extends CI_Model 
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
    
    public function traer_escenarios()
    {
        $escenarios=array();
        $query=$this->db->get('escenarios');
        foreach ($query->result() as $row)
        {
            $escenarios[$row->id]['id']=$row->id;
            $escenarios[$row->id]['evento']=$row->evento;
            $escenarios[$row->id]['nombre']=$row->nombre;
            $escenarios[$row->id]['capacidad']=$row->capacidad;
        }
        
        return $escenarios;
    }
    
    public function traer_escenarios_evento($evento)
    {
        $escenarios=array();
        $this->db->where('evento',$evento);
        $query=$this->db->get('escenarios');
        foreach ($query->result() as $row)
        {
            $escenarios[$row->id]['id']=$row->id;
            $escenarios[$row->id]['evento']=$row->evento;
            $escenarios[$row->id]['nombre']=$row->nombre;
            $escenarios[$row->id]['capacidad']=$row->capacidad;
        }
        
        return $escenarios;
    }    
    
    public function traer_escenario($id)
    {
        $escenario=array();
        $this->db->where('id',$id);
        $query=$this->db->get('escenarios');
        $row=$query->row();
        $escenario['id']=$row->id;
        $escenario['evento']=$row->evento;
        $escenario['nombre']=$row->nombre;        
        $escenario['capacidad']=$row->capacidad;        
        
        return $escenario;
    }    
}