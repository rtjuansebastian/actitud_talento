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
class Contactos_model extends CI_Model 
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
    
    public function traer_contactos()
    {
        $registros=array();
        $this->db->select("eventos_contacto.id, eventos_contacto.evento, eventos.nombre as nombre_evento, eventos_contacto.nombre, eventos_contacto.email, eventos_contacto.mensaje, eventos_contacto.estado");
        $this->db->from("eventos_contacto");
        $this->db->join("eventos","eventos_contacto.evento=eventos.id");        
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $registros[$row->id]['id']=$row->id;
            $registros[$row->id]['evento']=$row->evento;
            $registros[$row->id]['nombre_evento']=$row->nombre_evento;
            $registros[$row->id]['nombre']=$row->nombre;
            $registros[$row->id]['email']=$row->email;
            $registros[$row->id]['mensaje']=$row->mensaje;            
            $registros[$row->id]['estado']=$row->estado;
        }
        
        return $registros;
    }
    
    public function traer_contacto($id)
    {
        $registro=array();
        $this->db->select("eventos_contacto.id, eventos_contacto.evento, eventos.nombre as nombre_evento, eventos_contacto.nombre, eventos_contacto.email, eventos_contacto.mensaje, eventos_contacto.estado");
        $this->db->from("eventos_contacto");
        $this->db->join("eventos","eventos_contacto.evento=eventos.id");        
        $this->db->where("eventos_contacto.id",$id);
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $registro['id']=$row->id;
            $registro['evento']=$row->evento;
            $registro['nombre_evento']=$row->nombre_evento;
            $registro['nombre']=$row->nombre;
            $registro['email']=$row->email;
            $registro['mensaje']=$row->mensaje;
            $registro['estado']=$row->estado;            
        }
        
        return $registro;
    } 
    
    public function traer_contacto_evento($evento)
    {
        $registros=array();
        $this->db->select("eventos_contacto.id, eventos_contacto.evento, eventos.nombre as nombre_evento, eventos_contacto.nombre, eventos_contacto.email, eventos_contacto.mensaje, eventos_contacto.estado");
        $this->db->from("eventos_contacto");
        $this->db->join("eventos","eventos_contacto.evento=eventos.id");
        $this->db->where("eventos_contacto.evento",$evento);
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            $registros[$row->id]['id']=$row->id;
            $registros[$row->id]['evento']=$row->evento;
            $registros[$row->id]['nombre_evento']=$row->nombre_evento;
            $registros[$row->id]['nombre']=$row->nombre;
            $registros[$row->id]['email']=$row->email;
            $registros[$row->id]['mensaje']=$row->mensaje;            
            $registros[$row->id]['estado']=$row->estado;
        }
        
        return $registros;
    }    
    
    public function agregar_contacto($data)
    {
        $this->db->insert('eventos_contacto', $data); 
    }
    
    public function responder_contacto($contacto,$respuesta)
    {
        $this->load->library('email');
        $this->email->from('contacto@actitudytalento.com');
        $this->email->to($contacto['email']);
        $this->email->subject('Respuesta sobre '.$contacto['nombre_evento'].'.');
        $this->email->message($respuesta);
        $this->email->send();
        $data = array(
            'estado' => 'Contestado'
         );

        $this->db->where('id', $contacto['id']);
        $this->db->update('eventos_contacto', $data);         
    }
}