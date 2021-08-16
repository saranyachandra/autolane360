<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		
		parent:: __construct();

		$this->load->library('session'); 
		$this->load->helper(array('form','url','date'));		 
		$this->load->database();
		$this->load->model('home_model');
		
	}


	public function register()
	{
		
		$data['page_name'] = 'register';

		$data['country'] =   $this->home_model->get_country_name();

		$user_id = $this->session->userdata('user_id');		


		if($user_id)
		{

        	$this->db->select('*');
	        $this->db->from('mylane_carstock');  
	        $this->db->join('admin_car_stock', 'admin_car_stock.carstock_id = mylane_carstock.carstock_id'); 
	        $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = mylane_carstock.carstock_id'); 
	        $this->db->where('mylane_carstock.user_id',$user_id); 
	        $this->db->group_by('admin_car_stock.carstock_id'); 

	    	$data['car_img']  = $this->db->get()->result();
        	
		}

		$this->load->view('home/register',$data);
	}

	public function login()
	{
		
		$data['page_name'] = 'login';

		$data['country'] =   $this->home_model->get_country_name();

		$user_id = $this->session->userdata('user_id');		


		if($user_id)
		{

        	$this->db->select('*');
	        $this->db->from('mylane_carstock');  
	        $this->db->join('admin_car_stock', 'admin_car_stock.carstock_id = mylane_carstock.carstock_id'); 
	        $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = mylane_carstock.carstock_id'); 
	        $this->db->where('mylane_carstock.user_id',$user_id); 
	        $this->db->group_by('admin_car_stock.carstock_id'); 

	    	$data['car_img']  = $this->db->get()->result();
        	
		}

		$this->load->view('home/register',$data);
	}


	public function insert_register()
	{
		 $response = array();

           if($this->home_model->insert_register())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}

	public function validate_email(){

		$response = array();

	 	if($this->home_model->validate_user_email())
			{		 	
				$response['status'] = 'success'; 			
			}
		else 
			{	
				$response['status'] = 'failed';
			}

	 	echo json_encode($response);

	}


	public function login_auth()
	{		
		
		$response = array();

		 		
	    if($this->home_model->user_login_auth())
			{		 	
				$response['status'] = 'success';	
			}
			else 
				{	
					$response['status'] = 'failed';
				}

		echo json_encode($response); 

	}


	public function forget_password()
	{

		$response = array();	

		$email  = $this->input->post('user_email');

		$sql = "select * from user_registration where (user_email = '$email')";
	 	$email_query = $this->db->query($sql)->result(); 

	 	if($email_query == true)
	 	{

	 	
			$credential = array('user_email' => $email);
			
			$query= $this->db->get_where('user_registration', $credential)->row();
			$pass = $query->user_password;

			// print_r($pass);


			$this->load->library('email'); 

			$config = array(
									'protocol' => 'smtp',
									'smtp_host' => 'smtp.sendgrid.net',
									'smtp_user' => 'Emeka2018',
									'smtp_pass' => '@Emmy2018',
									'smtp_port' => 587,
									'mailtype'=> 'html',
									'crlf' => "\r\n",
									'newline' => "\r\n"
									);
					
					$admin_password = $pass;
					$email 			= $this->input->post('user_email');					
					$link 			= 'https://www.autolane360.com/';
				
				    
				    $message ='Welcome to Autolane360!. Your Login password details are given below '."<br><br>".'Email :'.$email."<br>".'URL Link :'.$link."<br>".'Password :'.$admin_password;
				    
				   	$this->email->initialize($config);
				    $this->email->set_newline("<br>");
				    $this->email->from('auto.sales@autolane360.com'); // change it to yours
				    $this->email->to($email);
				    $this->email->subject('Autolane Password Details');
				    $this->email->message($message);
				     
				    if($this->email->send())
			     		{
			      			 $response['status'] = 'success'; 
			     		}
			     	else
			    		{
			     			// show_error($this->email->print_debugger());
			     			 $response['status'] = 'failed';
			    		}		
			}

			else
	 		{
	 			 $response['status'] = 'failed';
	 		}
		
		echo json_encode($response);
	}

	


}