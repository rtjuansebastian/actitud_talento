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
class Precios_model extends CI_Model 
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
    
    public function traer_precios()
    {
        $precios=array();
        $this->db->select("precios.id, evento, eventos.nombre as nombre_evento, precios.nombre, precios.descripcion, precios.precio");
        $this->db->from("eventos_precios");
        $this->db->join("eventos","precios.evento=eventos.id");
        $this->db->where('precios.estado','activo');
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $precios[$row->id]['id']=$row->id;
            $precios[$row->id]['evento']=$row->evento;
            $precios[$row->id]['nombre_evento']=$row->nombre_evento;            
            $precios[$row->id]['nombre']=$row->nombre;
            $precios[$row->id]['descripcion']=$row->descripcion;
            $precios[$row->id]['precio']=$row->precio;
        }
        
        return $precios;
    }
    
    public function traer_precios_evento($evento)
    {
        $precios=array();
        $this->db->where('estado','activo');
        $this->db->where('evento',$evento);
        $query=$this->db->get('eventos_precios');
        foreach ($query->result() as $row)
        {
            $precios[$row->id]['id']=$row->id;
            $precios[$row->id]['evento']=$row->evento;
            $precios[$row->id]['nombre']=$row->nombre;
            $precios[$row->id]['descripcion']=$row->descripcion;
            $precios[$row->id]['precio']=$row->precio;
        }
        
        return $precios;
    }    
    
    public function traer_precio($id)
    {
        $precio=array();
        $this->db->where('estado','activo');
        $this->db->where('id',$id);
        $query=$this->db->get('eventos_precios');
        $row=$query->row();
        $precio['id']=$row->id;
        $precio['evento']=$row->evento;
        $precio['nombre']=$row->nombre;        
        $precio['descripcion']=$row->descripcion;        
        $precio['precio']=$row->precio;        
        
        return $precio;
    }    
    
    public function agregar_precio($data)
    {
        $this->db->insert('eventos_precios', $data);       
    }
    
    public function agregar_precios_evento($data)
    {
        $total_precios=  count($data['nombre']);
        for($i=0;$i<=($total_precios-1);$i++)
        {
            $datos=array("evento"=>$data['evento'][$i],
                    "nombre"=>$data['nombre'][$i],
                    "descripcion"=>$data['descripcion'][$i],
                    "precio"=>$data['precio'][$i],
                );
            $this->db->insert('eventos_precios', $datos);       
        }
        
        return $data['evento'][0];
    }    
    
    public function actualizar_precio($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('eventos_precios', $data); 
    }
    
    public function eliminar_precio($id)
    {
        $data = array(
            'estado' => "eliminado"
        );        
        $this->db->where('id', $id);
        $this->db->update('eventos_precios', $data);         
    }    
}