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
        $this->db->select("escenarios.id, evento, eventos.nombre as nombre_evento, escenarios.nombre, capacidad");
        $this->db->from("escenarios");
        $this->db->join("eventos","escenarios.evento=eventos.id");
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $escenarios[$row->id]['id']=$row->id;
            $escenarios[$row->id]['evento']=$row->evento;
            $escenarios[$row->id]['nombre_evento']=$row->nombre_evento;            
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
    
    public function agregar_escenario($data)
    {
        $this->db->insert('escenarios', $data);       
    }
    
    public function agregar_escenarios_evento($data)
    {
        $total_escenarios=  count($data['nombre']);
        for($i=0;$i<=($total_escenarios-1);$i++)
        {
            $datos=array("evento"=>$data['evento'][$i],
                    "nombre"=>$data['nombre'][$i],
                    "capacidad"=>$data['evento'][$i],
                );
            $this->db->insert('escenarios', $datos);       
        }
        
        return $data['evento'][0];
    }    
    
    public function actualizar_escenario($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('escenarios', $data); 
    }
}