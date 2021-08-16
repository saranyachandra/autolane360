<?php

// require APPPATH . 'libraries/REST_Controller.php';

defined('BASEPATH') OR exit('No direct script access allowed');

class Agent_dashboard extends CI_Controller {

	public function __construct()
	{
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		parent:: __construct();

		$this->load->library('session'); 
		$this->load->helper(array('form','url','date'));		 
		$this->load->database();
		$this->load->model('agent_model');
		$this->load->library('cloudinarylib');

		// if(!$this->session->userdata('agent_id'))
		// {
		// 	redirect('home/index');
		// }
	}

	public function index()
	{
		$data['page_name'] = 'index';

        $agent_id = $this->session->userdata('admin_user_id');

        $this->db->select('*');
        $this->db->from('common_agent_car');  
        $this->db->join('common_agent_car_image', 'common_agent_car_image.carstock_id = common_agent_car.carstock_id');  
        $this->db->join('common_agent_car_status', '(common_agent_car_status.fav_carstock_id = common_agent_car.carstock_id) AND (common_agent_car_status.fav_admin_id = '.$agent_id.')', 'left'); 
        $this->db->group_by('common_agent_car.carstock_id'); 

        $data['car_detail'] = $this->db->get()->result();

        // $sql = $this->db->last_query();
        // print_r($sql);
        // print_r($data['car_detail']);

		$this->load->view('agent/dashboard/index', $data);
	}

    public function update_agentcar_status()
    {
         $response = array();

        $car_id = $_POST['id'] ;
        $status = $_POST['car_status']; 
        $agent_id = $this->session->userdata('admin_user_id');

        if($status == 1)
        {
                $status = array('fav_admin_id' => $agent_id,'fav_carstock_id' => $car_id,'fav_status' => $status);

                $insert_status = $this->db->insert('common_agent_car_status',$status);

                $response['status'] = 'success';
            
        }
        elseif($status == 0)
        {
            $this->db->where('fav_id', $car_id);
            $result = $this->db->delete('common_agent_car_status');
           
            $response['status'] = 'update'; 
        }    

        echo json_encode($response);  
    }

    public function update_car_status()
    {
        $response = array();

        $car_id = $_POST['id'] ;
        $car_status = $_POST['car_status'];         
        
        $status = array('car_status' => $car_status);

        $update_status = $this->db->where('carstock_id', $car_id)->update('admin_car_stock', $status);   
        
        if($update_status == true)
        {                       
            $response['status'] = 'success';    
        }

        else
        {
            $response['status'] = 'failed';
        }
                    
        echo json_encode($response);  
    }
	
	function marketing_link()
	{
		$data['page_name'] = 'marketing_link';

		
		$this->load->view('agent/dashboard/marketing_link', $data);
	}

	function sent_market_link()
	{
		$response = array();

           if($this->agent_model->send_marketing_email())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
		
	}

	function my_client_list()
	{
		$data['page_name'] = 'my_client_list';
		
	 	$data['client_details'] =  $this->agent_model->get_client_list();

	 	
		$this->load->view('agent/dashboard/client_list', $data);
	}

	public function view_customer_car_details($agent_cus_id)
  	{
        $data['page_name'] = '';

        $this->db->select('*');
        $this->db->from('agent_car_stock');  
        $this->db->join('agent_car_stock_image', 'agent_car_stock_image.carstock_id = agent_car_stock.carstock_id');  
        $this->db->join('agentcustomer_register', 'agentcustomer_register.agent_cus_id = agent_car_stock.agent_cus_id');
        $this->db->group_by('agent_car_stock.carstock_id'); 
        $this->db->order_by('agent_car_stock.carstock_id',"desc");
        $this->db->where('agent_car_stock.agent_cus_id',$agent_cus_id); 

       
        $data['cus_detail'] =  $this->build_response_array($this->db->get()->result_array(),"order_ticket");

        // print_r($data['cus_detail']);

        $this->load->view('agent/dashboard/view_customer_car_details',$data);
  	}


  	public function build_response($result, $date_fields = array())
  	{
        $response_data = array();
        foreach ($result as $key => $value) {
           
          $responseKey =  $key;
            if (!in_array($responseKey, array_diff(array('createdAt', 'createdBy', 'updatedAt', 'updatedBy'), $date_fields)))
                $response_data[$responseKey] = $value;
        }
        return $response_data;
  	}

  	public function build_response_array($result, $mapField = NULL, $date_fields = array())
    {
        $response_array_data = array();
        if (empty($result))
            return $response_array_data;
        foreach ($result as $data) {
            $response_data = $this->build_response($data, $date_fields);
            if (array_key_exists($mapField, $response_data)) {
                if (!array_key_exists(0, $response_array_data))
                    array_push($response_array_data, array());  //to create response data as array;
                if (!array_key_exists($response_data[$mapField], $response_array_data[0])) {
                    $response_array_data[0][$response_data[$mapField]] = array();
                }
                array_push($response_array_data[0][$response_data[$mapField]], $response_data);
            } else
                array_push($response_array_data, $response_data);
        }

        return $response_array_data;
    }


    public function change_password()
    {
        $response = array();

        $email              = $this->input->post("admin_email");
        $current_password   = $this->input->post("current_password");
        $new_password       = $this->input->post("new_password");

        if($current_password == $new_password)
        {
             $response['status'] = 'success';   
        }
        else{
                $this->db->select('*');
                $this->db->from('admin_user');
                $this->db->where('admin_email',$email);
                $this->db->where('admin_password',$current_password);
                $query = $this->db->get();
               
                if($query->num_rows()==1)
                {
                    $data = array('admin_password' => $new_password );
                                
                    $this->db->where('admin_password',$current_password);
                    $this->db->where('admin_email',$email);
                    $this->db->update('admin_user', $data); 

                    $response['status'] = 'update_success'; 
                }
                else
                {
                    $response['status'] = 'failed';
                }
            }
        echo json_encode($response); 

    }


	public function logout()
	{
		$this->session->sess_destroy();
       	redirect('home/main');
	}


}
