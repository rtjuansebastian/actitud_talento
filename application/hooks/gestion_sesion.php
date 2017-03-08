<?php
class Gestion_sesion{
   function index(){
    //instanciamos al objeto codeigniter
      $CI =& get_instance();       
      
      // cargamos la libreria de sesion
      $CI->load->library('session');
      $sesion = $CI->session->userdata('sesion');      
      // obtenemos el nombre del controlador en el que estamos
      $controlador = $CI->router->class;
            
      if ($sesion== false && $controlador=='admin' )
      {
            //redirect(base_url('index.php/login'));
            redirect(base_url('login'));
      }
   }
}