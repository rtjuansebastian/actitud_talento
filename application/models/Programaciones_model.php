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
class Programaciones_model extends CI_Model 
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
    
    public function traer_programaciones()
    {
        $programaciones=array();
        $query=$this->db->get('programaciones');
        foreach ($query->result() as $row)
        {
            $programaciones[$row->id]['id']=$row->id;
            $programaciones[$row->id]['evento']=$row->evento;
            $programaciones[$row->id]['fecha']=$row->fecha;
            $programaciones[$row->id]['duracion']=$row->duracion;
            $programaciones[$row->id]['titulo']=$row->titulo;
            $programaciones[$row->id]['descripcion']=$row->descripcion;
            $programaciones[$row->id]['escenario']=$row->escenario;
            $programaciones[$row->id]['conferencista']=$row->conferencista;            
        }
        
        return $programaciones;
    }
    
    public function traer_programacion($id)
    {
        $conferencista=array();
        $this->db->where('id',$id);
        $query=$this->db->get('programaciones');
        $row=$query->row();
        $conferencista['id']=$row->id;
        $conferencista['evento']=$row->evento;
        $conferencista['fecha']=$row->fecha;
        $conferencista['duracion']=$row->duracion;
        $conferencista['titulo']=$row->titulo;
        $conferencista['descripcion']=$row->descripcion;
        $conferencista['escenario']=$row->escenario;
        $conferencista['conferencista']=$row->conferencista;

        return $conferencista;
    }
    
    public function traer_programacion_evento($evento)
    {
        $programaciones=array();
        $this->db->select("programaciones.id, programaciones.evento, eventos.nombre as nombre_evento, programaciones.fecha, programaciones.duracion, programaciones.titulo, programaciones.descripcion, programaciones.escenario, escenarios.nombre as nombre_escenario, programaciones.conferencista, conferencistas.nombre as nombre_conferencista");
        $this->db->from("programaciones");
        $this->db->join("eventos","programaciones.evento=eventos.id");
        $this->db->join("conferencistas","programaciones.conferencista=conferencistas.id");
        $this->db->join("escenarios","programaciones.escenario=escenarios.id");
        $this->db->where("programaciones.evento",$evento);
        $this->db->order_by("fecha");
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $programaciones[$row->id]['id']=$row->id;
            $programaciones[$row->id]['evento']=$row->evento;
            $programaciones[$row->id]['nombre_evento']=$row->nombre_evento;
            $programaciones[$row->id]['fecha']=$row->fecha;
            $programaciones[$row->id]['duracion']=$row->duracion;
            $programaciones[$row->id]['titulo']=$row->titulo;
            $programaciones[$row->id]['descripcion']=$row->descripcion;
            $programaciones[$row->id]['escenario']=$row->escenario;
            $programaciones[$row->id]['nombre_escenario']=$row->nombre_escenario;
            $programaciones[$row->id]['conferencista']=$row->conferencista;
            $programaciones[$row->id]['nombre_conferencista']=$row->nombre_conferencista;
        }
        
        return $programaciones;
    }

    public function traer_dias_evento($evento)
    {
        $dias=array();
        $this->db->select("Date_format(fecha,'%Y-%M-%d') as fecha");
        $this->db->from("programaciones");
        $this->db->where("evento",$evento);
        $this->db->group_by("fecha");
        $query=$this->db->get();
        foreach ($query->result() as $row)        
        {
            $dias[$row->fecha]['fecha']=$row->fecha;
        }
        
        return $dias;
    }
    
    public function traer_escenarios_dia($dia)
    {
        $where="DATE(fecha) = DATE_FORMAT(STR_TO_DATE('$dia', '%Y-%M-%d'),'%Y-%m-%d')";
        $escenarios=array();
        $this->db->select("programaciones.escenario as id, escenarios.nombre, escenarios.capacidad");
        $this->db->from("programaciones");
        $this->db->join("escenarios","programaciones.escenario=escenarios.id");
        $this->db->where($where);
        $query=$this->db->get();
        
        foreach ($query->result() as $row)
        {
            $escenarios[$row->id]['id']=$row->id;
            $escenarios[$row->id]['nombre']=$row->nombre;
            $escenarios[$row->id]['capacidad']=$row->capacidad;
        }
        
        return $escenarios;
    }
    
    public function traer_programacion_escenario_dia($dia,$escenario)
    {
        $where="DATE(fecha) = DATE_FORMAT(STR_TO_DATE('$dia', '%Y-%M-%d'),'%Y-%m-%d')";
        $programaciones=array();
        $this->db->select("programaciones.id, Date_format(programaciones.fecha,'%h:%i') as hora, programaciones.titulo, programaciones.descripcion, conferencistas.nombre, conferencistas.profesion, conferencistas.imagen, conferencistas.facebook, conferencistas.twitter, conferencistas.linkedin, conferencistas.instagram");
        $this->db->from("programaciones");
        $this->db->join("conferencistas","programaciones.conferencista=conferencistas.id");
        $this->db->where($where);
        $this->db->where("escenario",$escenario);
        $this->db->order_by("fecha");
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $programaciones[$row->id]['id']=$row->id;
            $programaciones[$row->id]['hora']=$row->hora;
            $programaciones[$row->id]['titulo']=$row->titulo;
            $programaciones[$row->id]['descripcion']=$row->descripcion;
            $programaciones[$row->id]['nombre']=$row->nombre;
            $programaciones[$row->id]['profesion']=$row->profesion;
            $programaciones[$row->id]['imagen']=$row->imagen;
            $programaciones[$row->id]['facebook']=$row->facebook;
            $programaciones[$row->id]['twitter']=$row->twitter;
            $programaciones[$row->id]['linkedin']=$row->linkedin;
            $programaciones[$row->id]['instagram']=$row->instagram;            
        }
        
        return $programaciones;
    }
    
    public function agregar_programaciones_evento($data)
    {
        $total_programaciones=count($data['titulo']);
        
        for($i=0;$i<=($total_programaciones-1);$i++)
        {
            $datos=array(
                "evento"=>$data['evento'][$i],                
                "fecha"=>$data['fecha'][$i],
                "duracion"=>$data['duracion'][$i],
                "titulo"=>$data['titulo'][$i],
                "descripcion"=>$data['descripcion'][$i],
                "escenario"=>$data['escenario'][$i],
                "conferencista"=>$data['conferencista'][$i]
            );
            
            $this->db->insert('programaciones', $datos); 
        }
        
        return $data['evento'][0];
    }
    
    public function actualizar_programacion($data)
    {       
        $this->db->where('id', $data['id']);
        $this->db->update('programaciones', $data); 
    }
}