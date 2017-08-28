<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->view('register');
	}
        public function validate_region() {
        if ($this->input->is_ajax_request()) {
        $id_pais = trim($this->input->post('id'));
        //SELECT ID FROM CUSTOMER
        $param_regiones = array(
            "select" => "id,nombre",
            "where" => "id_pais = $id_pais and id_idioma = 7");
        $region['region'] = $this->obj_regiones->search($param_regiones);

        if (count($region) > 0) {
            $data['message'] = "true";
            $data['print'] = $region['region'];
        } else {
            $data['message'] = "false";
            $data['print'] = "Seleccionar un país";
        }
        echo json_encode($data);
        }
    }

    public function validate_username() {
        if ($this->input->is_ajax_request()) {
            //SELECT ID FROM CUSTOMER
        $username = str_to_minuscula(trim($this->input->post('username')));
        $param_customer = array(
            "select" => "customer_id",
            "where" => "username = '$username'");
        $customer = count($this->obj_customer->get_search_row($param_customer));
        if ($customer > 0) {
            $data['message'] = "true";
            $data['print'] = "No esta disponible";
        } else {
            $data['message'] = "false";
            $data['print'] = "✔ Disponible";
        }
        echo json_encode($data);
        }
    }


}
