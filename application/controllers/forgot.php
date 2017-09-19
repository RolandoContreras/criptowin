<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {
    public function __construct() {
        parent::__construct();    
        $this->load->model("customer_model", "obj_customer");
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('forgot');
	}
        public function send_messages(){
            if($this->input->is_ajax_request()){ 
                $username = $this->input->post('username');  
                
                //GER DATA USERNAME
                 $params = array("select" => "first_name,email",
                                "where" => "username = '$username'");
                 $obj_data = $this->obj_customer->get_search_row($params);
                
                 
                 $coubt = count($obj_data);
                 
                 var_dump($obj_data);
                 die();
                
                
                
                if (count($obj_data) > 0){ 
                    $data['message'] = "false";
                    $data['print'] = "Complete todos los datos correctamente";
                }else{                    
                //SEND MESSAGES
                
                // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
                $mensaje = wordwrap("<html><body><h1>Recuperar Contraseña</h1><p>Bienvenido ahora eres parte de la revolución CRIPTOWIN estamos muy contentos de que hayas tomado la mejor decisión en este tiempo.</p><p>Estamos para poyarte en todo lo que necesites. Te dejamos tus datos de ingreso.</p><h3>Usuario: $usuario</h3><h3>Contraseña: $clave</h3></body></html>", 70, "\n", true);
                //Titulo
                $titulo = "Bienvenido a Criptowin";
                //cabecera
                $headers = "MIME-Version: 1.0\r\n"; 
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                $headers .= "From: CRIPTOWIN - The best Investment < noreplay@criptowin.com >\r\n";
                //Enviamos el mensaje a tu_dirección_email 
                $bool = mail("$email",$titulo,$mensaje,$headers);
                    
                    
                    
                    $data['print'] = "Mensaje enviado correctamente";
                    $data['message'] = "true";       
                }         
                echo json_encode($data);  
                exit();      
            }
        }   
}
