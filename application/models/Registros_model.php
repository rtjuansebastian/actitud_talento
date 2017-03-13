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
class Registros_model extends CI_Model 
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
    
    public function traer_registros()
    {
        $registros=array();
        $this->db->select("eventos_registro.id, eventos_registro.evento, eventos.nombre as nombre_evento, eventos_registro.nombre, eventos_registro.email, eventos_registro.telefono");
        $this->db->from("eventos_registro");
        $this->db->join("eventos","eventos_registro.evento=eventos.id");        
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $registros[$row->id]['id']=$row->id;
            $registros[$row->id]['evento']=$row->evento;
            $registros[$row->id]['nombre_evento']=$row->nombre_evento;
            $registros[$row->id]['nombre']=$row->nombre;
            $registros[$row->id]['email']=$row->email;
            $registros[$row->id]['telefono']=$row->telefono;            
        }
        
        return $registros;
    }
    
    public function traer_registro($id)
    {
        $registro=array();
        $this->db->select("eventos_registro.id, eventos_registro.evento, eventos.nombre as nombre_evento, eventos_registro.nombre, eventos_registro.email, eventos_registro.telefono");
        $this->db->from("eventos_registro");
        $this->db->join("eventos","eventos_registro.evento=eventos.id");        
        $this->db->where("eventos_registro.id",$id);
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $registro['id']=$row->id;
            $registro['evento']=$row->evento;
            $registro['nombre_evento']=$row->nombre_evento;
            $registro['nombre']=$row->nombre;
            $registro['email']=$row->email;
            $registro['telefono']=$row->telefono;            
        }
        
        return $registro;
    } 
    
    public function traer_registros_evento($evento)
    {
        $registros=array();
        $this->db->select("eventos_registro.id, eventos_registro.evento, eventos.nombre as nombre_evento, eventos_registro.nombre, eventos_registro.email, eventos_registro.telefono");
        $this->db->from("eventos_registro");
        $this->db->join("eventos","eventos_registro.evento=eventos.id");
        $this->db->where("eventos_registro.evento",$evento);
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $registros[$row->id]['id']=$row->id;
            $registros[$row->id]['evento']=$row->evento;
            $registros[$row->id]['nombre_evento']=$row->nombre_evento;
            $registros[$row->id]['nombre']=$row->nombre;
            $registros[$row->id]['email']=$row->email;
            $registros[$row->id]['telefono']=$row->telefono;            
        }
        
        return $registros;
    }    
    
    public function agregar_registro_evento($data)
    {
        $this->db->insert('eventos_registro', $data); 
    }
}