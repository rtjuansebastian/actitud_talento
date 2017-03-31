<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controlador de Login la aplicación
 * 
 * Este controlador conecta las funciones del modelo y las 
 * vistas del login.
 * 
 * @package AHA
 * @autor Juan Sebastián Rodríguez <rtjuansebastian@gmail.com>
 * @version 1.0
 * @copyright PoBox
 */
class Login extends SuperController 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->removeCache();
    }    

    /**
     * Metodo Login
     * 
     * Este metodo es el encargado de permitir el ingreso a la aplicación.
     */
    public function index($datos=NULL)
    {
        $this->load->view("login_view",$datos);
    }
    
    /**
     * Metodo valida login
     * 
     * Este metodo valida si las credenciales recibidas en la vista corresponden
     * a un usuario habilitado.
     */
    public function valida_login()
    {
        $email=  $this->input->post("email");
        $contraseña=  $this->input->post("password");
        
        $validacion=$this->login_model->valida_login($email,$contraseña);
        $datos['validacion']=$validacion;
        
        if($validacion)
        {
            $this->login_model->crear_sesion($email);
            //redirect(base_url('index.php/admin/'));
            redirect(base_url('admin/'));
        }
        else
        {
            $datos['mensaje']="Nombre de usuario o contraseña no validos";
            $this->index($datos);
        }
    }

    /**
     * Metodo cerrar sesión
     * 
     * Este metodo elimina la sesión almacenada en los cookies y carga nuevamente
     * la vista login
     */
    public function cerrar_sesion()
    {
        $this->session->unset_userdata('sesion');
        $this->load->view("login_view");
    }    
    
}