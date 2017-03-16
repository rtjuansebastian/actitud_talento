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
class Precios_patrocinadores_model extends CI_Model 
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
    
    public function traer_precios_patrocinadores()
    {
        $precios_patrocinadores=array();
        $this->db->select("eventos_precios_patrocinio.id, evento, eventos.nombre as nombre_evento, eventos_precios_patrocinio.nombre, eventos_precios_patrocinio.precio");
        $this->db->from("eventos_precios_patrocinio");
        $this->db->join("eventos","eventos_precios_patrocinio.evento=eventos.id");
        $this->db->where('estado','activo');
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $precios_patrocinadores[$row->id]['id']=$row->id;
            $precios_patrocinadores[$row->id]['evento']=$row->evento;
            $precios_patrocinadores[$row->id]['nombre_evento']=$row->nombre_evento;            
            $precios_patrocinadores[$row->id]['nombre']=$row->nombre;
            $precios_patrocinadores[$row->id]['descripcion']=$row->descripcion;
            $precios_patrocinadores[$row->id]['precio']=$row->precio;
        }
        
        return $precios_patrocinadores;
    }
    
    public function traer_precios_patrocinadores_evento($evento)
    {
        $precios_patrocinadores=array();
        $this->db->where('estado','activo');
        $this->db->where('evento',$evento);
        $query=$this->db->get('eventos_precios_patrocinio');
        foreach ($query->result() as $row)
        {
            $precios_patrocinadores[$row->id]['id']=$row->id;
            $precios_patrocinadores[$row->id]['evento']=$row->evento;
            $precios_patrocinadores[$row->id]['nombre']=$row->nombre;
            $precios_patrocinadores[$row->id]['precio']=$row->precio;
        }
        
        return $precios_patrocinadores;
    }    
    
    public function traer_precio_patrocinio($id)
    {
        $precio=array();
        $this->db->where('estado','activo');
        $this->db->where('id',$id);
        $query=$this->db->get('eventos_precios_patrocinio');
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
        $this->db->insert('eventos_precios_patrocinio', $data);       
    }
    
    public function agregar_precios_patrocinadores_evento($data)
    {
        $total_precios_patrocinadores=  count($data['nombre']);
        for($i=0;$i<=($total_precios_patrocinadores-1);$i++)
        {
            $datos=array("evento"=>$data['evento'][$i],
                    "nombre"=>$data['nombre'][$i],
                    "precio"=>$data['precio'][$i],
                );
            $this->db->insert('eventos_precios_patrocinio', $datos);       
        }
        
        return $data['evento'][0];
    }    
    
    public function actualizar_precio($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('eventos_precios_patrocinio', $data); 
    }
    
    public function eliminar_precio($id)
    {
        $data = array(
            'estado' => "eliminado"
        );        
        $this->db->where('id', $id);
        $this->db->update('eventos_precios_patrocinio', $data);         
    }    
}