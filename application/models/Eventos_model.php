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
class Eventos_model extends CI_Model 
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
    
    public function traer_eventos()
    {
        $eventos=array();
        $query=$this->db->get('eventos');
        foreach ($query->result() as $row)
        {
            $eventos[$row->id]['id']=$row->id;
            $eventos[$row->id]['pais']=$row->pais;
            $eventos[$row->id]['nombre']=$row->nombre;
            $eventos[$row->id]['descripcion']=$row->descripcion;
            $eventos[$row->id]['lugar']=$row->lugar;
            $eventos[$row->id]['fecha']=$row->fecha;
            $eventos[$row->id]['coordenadas']=$row->coordenadas;
            $eventos[$row->id]['cupos']=$row->cupos;
            $eventos[$row->id]['dias']=$row->dias;
            $eventos[$row->id]['telefono']=$row->telefono;
            $eventos[$row->id]['email']=$row->email;
            $eventos[$row->id]['imagen_fondo']=$row->imagen_fondo;
            $eventos[$row->id]['imagen_bandera']=$row->imagen_bandera;
        }
        
        return $eventos;
    }
    
    public function traer_evento($id)
    {
        $evento=array();
        $this->db->where('id',$id);
        $query=$this->db->get('eventos');
        $row=$query->row();
        $evento['id']=$row->id;
        $evento['pais']=$row->pais;
        $evento['nombre']=$row->nombre;
        $evento['descripcion']=$row->descripcion;
        $evento['lugar']=$row->lugar;
        $evento['fecha']=$row->fecha;
        $evento['coordenadas']=$row->coordenadas;
        $evento['cupos']=$row->cupos;
        $evento['dias']=$row->dias;
        $evento['telefono']=$row->telefono;
        $evento['email']=$row->email;
        $evento['imagen_fondo']=$row->imagen_fondo;
        $evento['imagen_bandera']=$row->imagen_bandera;
        
        return $evento;
    }    
}