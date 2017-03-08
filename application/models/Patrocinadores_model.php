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
class Patrocinadores_model extends CI_Model 
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
    
    public function traer_patrocinadores()
    {
        $patrocinadores=array();
        $query=$this->db->get('patrocinadores');
        foreach ($query->result() as $row)
        {
            $patrocinadores[$row->id]['id']=$row->id;
            $patrocinadores[$row->id]['nombre']=$row->nombre;
            $patrocinadores[$row->id]['descripcion']=$row->descripcion;
            $patrocinadores[$row->id]['url']=$row->url;
            $patrocinadores[$row->id]['imagen_patrocinador']=$row->imagen_patrocinador;
        }
        
        return $patrocinadores;
    }
    
    public function traer_patrocinadores_evento($evento)
    {
        $patrocinadores=array();
        $this->db->select("eventos.id as evento, eventos.nombre as nombre_evento, patrocinadores.id as patrocinador, patrocinadores.nombre as nombre_patrocinador, patrocinadores.url as url, patrocinadores.imagen_patrocinador as imagen_patrocinador");
        $this->db->from("eventos_patrocinadores");
        $this->db->join("eventos","eventos.id=eventos_patrocinadores.evento");
        $this->db->join("patrocinadores","patrocinadores.id=eventos_patrocinadores.patrocinador");
        $this->db->where('eventos_patrocinadores.evento',$evento);
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $patrocinadores[$row->evento."-".$row->patrocinador]['evento']=$row->evento;
            $patrocinadores[$row->evento."-".$row->patrocinador]['nombre_evento']=$row->nombre_evento;
            $patrocinadores[$row->evento."-".$row->patrocinador]['patrocinador']=$row->patrocinador;
            $patrocinadores[$row->evento."-".$row->patrocinador]['nombre_patrocinador']=$row->nombre_patrocinador;
            $patrocinadores[$row->evento."-".$row->patrocinador]['url']=$row->url;
            $patrocinadores[$row->evento."-".$row->patrocinador]['imagen_patrocinador']=$row->imagen_patrocinador;
        }
        
        return $patrocinadores;
    }    
    
    public function traer_patrocinador($id)
    {
        $patrocinador=array();
        $this->db->where('id',$id);
        $query=$this->db->get('patrocinadores');
        $row=$query->row();
        $patrocinador['id']=$row->id;
        $patrocinador['nombre']=$row->nombre;
        $patrocinador['descripcion']=$row->descripcion;
        $patrocinador['url']=$row->url;
        $patrocinador['imagen_patrocinador']=$row->imagen_patrocinador;
        
        return $patrocinador;
    }    
}