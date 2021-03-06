<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Modelo del login de la aplicación
 * 
 * Este modelo realiza las consultas sobre los usuarios a la base de datos
 * y retorna los resultados al controlador.
 * 
 * @package AHA
 * @autor Juan Sebastián Rodríguez <rtjuansebastian@gmail.com>
 * @version 1.0
 * @copyright PoBox
 */
class Login_model extends CI_Model 
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
    
    /**
     * Metodo que valida el ingreso a la aplicación
     * 
     *Recibe el usuario y la contraseña y los compara con los datos aca establecidos
     * 
     * @param String $email Nit del usuario para ingresar
     * @param String $contraseña contraseña correspondiente al usuario
     * 
     * @return boolean cuando los datos son validos retorna TRUE en caso contrario
     * FALSE
     */        
    public function valida_login($email,$contraseña)
    {
        $validacion=FALSE;        
        
        $this->db->where('email',$email);
        $query=$this->db->get('usuarios');

        if($query->num_rows()>0)
        {
            $row=$query->row();
            $hash=$row->password;            
            //$hash = $this->login_model->get_hash($password);
            
            $validacion = $this->login_model->validate_pass($hash, $contraseña);
        }        
        
        return $validacion;
    }

 
    public function get_hash($password, $cost = 11) 
    {
        // Genera sal de forma aleatoria
        $salt=substr(base64_encode(openssl_random_pseudo_bytes(17)),0,22);
        // reemplaza caracteres no permitidos
        $salt=str_replace("+",".",$salt);
        // genera una cadena con la configuración del algoritmo
        $param='$'.implode('$',array(
                "2y", // versión más segura de blowfish (>=PHP 5.3.7)
                str_pad($cost,2,"0",STR_PAD_LEFT), // costo del algoritmo
                $salt // añade la sal
        ));

        // obtiene el hash de la contraseña
        return crypt($password,$param);
    }

    public function validate_pass($hash, $pass) 
    {
            // verifica la contraseña con el hash
            return crypt($pass, $hash) == $hash;
    }
    
    public function crear_sesion($email)
    {
        $acceso = array(
                'email'  => $email,
                'logged_in' => TRUE
           );

        $this->session->set_userdata('sesion',$acceso);         
    }
    
    public function traer_usuarios()
    {
        $usuarios=array();
        $this->db->where("estado","activo");
        $query=$this->db->get("usuarios");
        foreach ($query->result() as $row)
        {
            $usuarios[$row->numero_identificacion]['numero_identificacion']=$row->numero_identificacion;
            $usuarios[$row->numero_identificacion]['email']=$row->email;
            $usuarios[$row->numero_identificacion]['password']=$row->password;
            $usuarios[$row->numero_identificacion]['nombre']=$row->nombre;
        }
        
        return $usuarios;
    }
    
    public function agregar_usuario($data)
    {
        $this->db->insert("usuarios",$data);
    }
    
    public function traer_usuario($id)
    {
        $usuario=array();
        $this->db->where("numero_identificacion",$id);
        $query=$this->db->get("usuarios");
        $row=$query->row();
        $usuario['email']=$row->email;
        $usuario['password']=$row->password;
        $usuario['nombre']=$row->nombre;
        
        return $usuario;
    }    
  
    public function actualizar_usuario($data)
    {        
        $this->db->where('numero_identificacion', $data['numero_identificacion']);
        $this->db->update('usuarios', $data);     
    } 

    public function eliminar_usuario($id)
    {
        $data = array(
               'estado' => 'eliminado',
            );
        $this->db->where('numero_identificacion', $id);
        $this->db->update('usuarios',$data);        
    }
}    