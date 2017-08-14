<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_home extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("commissions_model","obj_commissions");
        $this->load->model("otros_model","obj_otros");
        $this->load->model("franchise_model","obj_franchise");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        $params = array(
                        "select" =>"(select count(customer_id) from customer where parents_id = $customer_id) as direct,
                                    customer.customer_id,
                                    customer.parents_id,
                                    customer.username,
                                    customer.email,
                                    customer.bit,
                                    customer.password,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.active,
                                    customer.dni,
                                    customer.birth_date,
                                    customer.calification,
                                    customer.point_calification_left,
                                    customer.point_calification_rigth,
                                    customer.point_left,
                                    customer.point_rigth,
                                    customer.date_start,
                                    customer.date_end,
                                    customer.created_at,
                                    customer.address,
                                    customer.status_value,
                                    customer.franchise_id,
                                    franchise.price,
                                    franchise.name as franchise,
                                    ",
                         "where" => "customer.customer_id = $customer_id",
                         "join" => array('franchise, customer.franchise_id = franchise.franchise_id',)
                                        );
           $obj_customer = $this->obj_customer->get_search_row($params);
           //SET 5 VECES MAS EL VALOR DEL PAQUETE
           
      
       
                
                $this->tmp_backoffice->set("obj_customer",$obj_customer);
                $this->tmp_backoffice->render("backoffice/b_home");
    }
    
    public function make_pedido(){

             if($this->input->is_ajax_request()){   
                //SELECT ID FROM CUSTOMER
               $franchise_id = $this->input->post('franchise_id');
               $customer_id = $_SESSION['customer']['customer_id'];;
               
               if($franchise_id != "" && $customer_id != ""){
                            //UPDATE DATA EN CUSTOMER TABLE
                            if($franchise_id == 11){
                                //CHANGE TO BASIC
                                 $data = array(
                                            
                                            'franchise_id' => 11,
                                            'new_contract' => 1,
                                            'point_calification_left' => 125,
                                            'point_calification_rigth' => 125,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($franchise_id == 12){
                                //CHANGE TO EXECUTIVE
                                 $data = array(
                                            
                                            'franchise_id' => 12,
                                            'new_contract' => 1,
                                            'point_calification_left' => 125,
                                            'point_calification_rigth' => 125,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($franchise_id == 13){
                                //CHANGE TO SENIOR EXECUTIVE
                                 $data = array(
                                            
                                            'franchise_id' => 13,
                                            'new_contract' => 1,
                                            'point_calification_left' => 125,
                                            'point_calification_rigth' => 125,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($franchise_id == 14){
                                //CHANGE TO MASTER
                                 $data = array(
                                            'franchise_id' => 14,
                                            'new_contract' => 1,
                                            'point_calification_left' => 125,
                                            'point_calification_rigth' => 125,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }
                            
                            //alter session franchise_id
                            
//                            $data_customer_session['customer_id'] = $obj_customer->customer_id;
//                $data_customer_session['name'] = $obj_customer->first_name.' '.$obj_customer->last_name;
//                $data_customer_session['username'] = $obj_customer->username;
//                $data_customer_session['franchise_id'] = $obj_customer->franchise_id;
//                $data_customer_session['email'] = $obj_customer->email;
//                $data_customer_session['country'] = $obj_customer->country;
//                $data_customer_session['active'] = $obj_customer->active;
//                $data_customer_session['logged_customer'] = "TRUE";
//                $data_customer_session['status'] = $obj_customer->status_value;
//                $_SESSION['customer'] = $data_customer_session;
                            
                            
                            
                            
                             $data['message'] = "true";
                             echo json_encode($data); 
                             exit();
                    
               }else{
                     $data['message'] = "true";
                     echo json_encode($data); 
                     exit();
               }
            }
        }
    
    public function get_session(){          
        if (isset($_SESSION['customer'])){
            if($_SESSION['customer']['logged_customer']=="TRUE" && $_SESSION['customer']['status']=='1'){               
                return true;
            }else{
                redirect(site_url().'home');
            }
        }else{
            redirect(site_url().'home');
        }
    }
}


    
