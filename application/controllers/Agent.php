<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends CI_Controller {

	public function __construct()
	{
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		parent:: __construct();

		$this->load->library('session'); 
		$this->load->helper(array('form','url','date'));		 
		$this->load->database();
		$this->load->model(array('agent_model','home_model'));
		
		$this->load->library('cloudinarylib');

		// if(!$this->session->userdata('cus_id'))
		// {
		// 	redirect('agent/login');
		// }
	}

	public function validate_email()
	{

		$response = array();

	  	$email = $this->input->post('user_email');
			
	 	$sql = "select * from agentcustomer_register where (email = '$email')";
	 	$query = $this->db->query($sql)->row();  

	 	if($query == true)
			{		 	
				$response['status'] = 'success'; 			
			}
		else 
			{	
				$response['status'] = 'failed';
			}

	 	echo json_encode($response);

	}


	public function register($ref_code)
	{
			$data['ref'] = $ref_code;

			$sql = "select * from admin_user where (agent_code = '$ref_code')";
	 		$query = $this->db->query($sql)->row();  

	 		$video_sql = "select * from upload_video ";
	 		$data['video_details'] = $this->db->query($video_sql)->row(); 


	 		$data['agent_id'] = $query->admin_id;
	 		$data['agent_profile_pic'] = $query->image;
	 		$data['agent_fname'] = $query->admin_fname;
	 		$data['agent_lname'] = $query->admin_lname;
	 		
	 		if($query == true)
			{	
				$data['partner_details']   =  $this->agent_model->view_business_partners();
					 	
				$this->load->view('agent/site/register', $data); 			
			}
			else 
			{	
				$this->load->view('errors/html/error_pagenot_found');
			}
		
	}

	function insert_register_info()
	{
		$response = array();
                 	
        $now = date('Y-m-d H:i:s');
        $email	= $this->input->post('email');

        $this->session->set_userdata('user_email', $email);

		$data = array(	'admin_id'		=> $this->input->post('agent_id'),
						'cus_country'	=> $this->input->post('country'),
						'cus_state'    	=> $this->input->post('state'),
						'f_name'    	=> $this->input->post('first_name'),
						'l_name' 	 	=> $this->input->post('last_name'),
						'email' 	 	=> $this->input->post('email'),
						'phone_no'  	=> $this->input->post('phone_no'),
						'password' 	 	=> $this->input->post('password'),
						'otp' 			=>	rand(1000,9999),
						'referral_code' => $this->input->post('ref_code'),						
						'created_at'	=> $now
					);

		$insert_client_data = $this->db->insert('agentcustomer_register',$data);

		if($insert_client_data == true)
		{
			$response['status'] = 'success';
			$response['msg'] = $data;

				// $this->load->library('email'); 

	   //        	$config = array(
	   //                  'protocol'  => 'smtp',
	   //                  'smtp_host' => 'smtp.sendgrid.net',
	   //                   'smtp_user' => 'Emeka2019',
    //                 	'smtp_pass' => '@Emmy1800',
	   //                  'smtp_port' => 587,
	   //                  'mailtype'  => 'html',
	   //                  'crlf'      => "\r\n",
	   //                  'newline'   => "\r\n"
	   //                  );

	   //          $otp    = $data['otp'];
	   //          $email   = $this->input->post('email');
	   //          $link    = 'https://www.autolane360.com/';
	            
	   //          $message ='Welcome to Autolane360!.'."<br><br>".'Your OTP is :'.$otp;
	            
	   //          $this->email->initialize($config);
	   //          $this->email->set_newline("<br>");
	   //          $this->email->from('auto.sales@autolane360.com'); // change it to yours
	   //          $this->email->to($email);
	   //          $this->email->subject('OTP');
	   //          $this->email->message($message);
	             
	   //          if($this->email->send())
	   //          {
	   //              $response['status'] = 'success';
	   //          }
	   //          else
	   //          {
	   //              $response['status'] = 'failed';
	   //          } 
	        }  
	        else 
			{	
				$response['status'] = 'failed';
			}

        echo json_encode($response);
	}

	function login()
	{
		$data['partner_details']    =  $this->agent_model->view_business_partners();

		$this->load->view('agent/site/login',$data);
	}

	public function login_auth()
	{		
		
		$response = array();
		 		
	    if($this->agent_model->user_login_auth())
			{		 	
				$response['status'] = 'success';	
			}
			else 
			{	
				$response['status'] = 'failed';
			}

		echo json_encode($response); 

	}

	function otp()
	{
		$this->load->view('agent/site/otp');
	}

	function otp_verify()
	{
		$response = array();

		$email = $this->input->post('user_email');
		$otp = $this->input->post('otp1')."".$this->input->post('otp2')."".$this->input->post('otp3')."".$this->input->post('otp4');

		$credential = array('email' => $email, 'otp' => $otp);
    	$query= $this->db->get_where('agentcustomer_register', $credential)->row();

    	if($query == true)
		{	
			$response['status'] = 'success'; 
		}
		else
		{
			$response['status'] = 'failed'; 
		}

		echo json_encode($response);
	}
	
	public function forgot_pass()
	{
		$this->load->view('agent/site/forgot_password');
	}

	public function get_forgot_pass()
	{
		$response = array();	

		$email  = $this->input->post('user_email');

		$sql = "select * from agentcustomer_register where (email = '$email')";
	 	$email_query = $this->db->query($sql)->result(); 

	 	if($email_query == true)
	 	{
 	
			$credential = array('email' => $email);
			
			$query= $this->db->get_where('agentcustomer_register', $credential)->row();
			$pass = $query->password;
			
			$this->load->library('email'); 

			$config = array(
									'protocol' => 'smtp',
									'smtp_host' => 'smtp.sendgrid.net',
									 'smtp_user' => 'Emeka2019',
                    				'smtp_pass' => '@Emmy1800',
									'smtp_port' => 587,
									'mailtype'=> 'html',
									'crlf' => "\r\n",
									'newline' => "\r\n"
									);
					
					$admin_password = $pass;
					$email 			= $this->input->post('user_email');					
					$link 			= 'https://www.autolane360.com/agent/login';
				
				    
				    $message ='Welcome to Autolane360!. Your Login password details are given below '."<br><br>".'Email :'.$email."<br>".'Password :'.$admin_password ."<br>".'URL Link :'.$link;
				    
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

	public function landing_page()
	{
		
		
			$agent_id = $this->session->userdata('agent_id');

			$this->db->select('*');
	        $this->db->from('admin_user'); 
	        $this->db->where('admin_user.admin_id', $agent_id);

	        $data['agent_details'] = $this->db->get()->row();
	        

			$data['partner_details']    =  $this->agent_model->view_business_partners();

			$this->load->view('agent/site/landing_page', $data);

		
	}


	function select_order()
	{
		$agent_id = $this->session->userdata('agent_id');

		$this->db->select('*');
        $this->db->from('admin_user'); 
        $this->db->where('admin_user.admin_id', $agent_id);

        $data['agent_details'] = $this->db->get()->row();

        $this->db->select('*');
        $this->db->from('common_agent_car');  
        $this->db->join('common_agent_car_image', 'common_agent_car_image.carstock_id = common_agent_car.carstock_id');  
        $this->db->join('common_agent_car_status', '(common_agent_car_status.fav_carstock_id = common_agent_car.carstock_id) AND (common_agent_car_status.fav_admin_id = '.$agent_id.')', 'left'); 
        $this->db->group_by('common_agent_car.carstock_id'); 
        $this->db->where('common_agent_car_status.fav_status = 1'); 

        $data['car_detail'] = $this->db->get()->result();
        // print_r($data['car_details']);

		$data['partner_details']    =  $this->agent_model->view_business_partners();

		$this->load->view('agent/site/select_order', $data);
	}

	function place_order()
	{
		$data['partner_details']    =  $this->agent_model->view_business_partners();

		$this->load->view('agent/site/place_order', $data);
	}

	function place_order_details($car_type)
	{
		$data['car_type'] = $car_type ;

		$data['partner_details']    =  $this->agent_model->view_business_partners();

		$this->load->view('agent/site/place_order_details',$data);
	}

	public function insert_place_order()
	{

        $now = date('Y-m-d H:i:s');  

        if(isset($_POST['check_all']))
        {
            $checkBox = implode(',', $_POST['check_all']);
        }
        else
        {
            $checkBox = ' ';
        }

        $stock_data = array('agent_cus_id' => $this->input->post('customer_id'),
        				'admin_id'         => $this->input->post('agent_id'),
                        'cus_comments'     => $this->input->post('cus_comments'),
                        'car_option'       => $checkBox,
                        'car_year'         => $this->input->post('car_year'),
                        'car_make'         => $this->input->post('car_brand'),
                        'car_model'        => $this->input->post('car_model'),
                        'car_trim'         => $this->input->post('car_trim'),
                        'car_mileage'      => $this->input->post('car_miles'),
                        'car_budget'       => $this->input->post('car_budget'),
                        'created_at'       => $now
                        );

        $insert_stock = $this->db->insert('customer_order_details',$stock_data);

        	$data['order_id'] = $this->db->insert_id();

        	$data['car_type']  = $this->input->post('car_type');

            $data['details']  = array('car_year'   => $this->input->post('car_year'),
		                        'car_make'         => $this->input->post('car_brand'),
		                        'car_model'        => $this->input->post('car_model'),
		                        'car_trim'         => $this->input->post('car_trim'),
		                    	'car_mileage'      => $this->input->post('car_miles'),
                        		'car_budget'       => $this->input->post('car_budget')
                        		);

       	if($insert_stock == true)   
            {
            	$data['partner_details']    =  $this->agent_model->view_business_partners();
            	$this->load->view('agent/site/order_review_page',$data);
            }

        else
        {
        	echo "failed";
        }
       
	}



	function gen_order_ticket_view($order_id,$car_type)
	{
		$data['order_id'] = $order_id;
		$data['car_type'] = $car_type;

		$data['partner_details']    =  $this->agent_model->view_business_partners();

		$this->load->view('agent/site/generate_order_ticket_view',$data);
	}

	public function update_order_ticket()
  	{
   		$response = array();
   		
   		$order_id = $this->input->post('order_id');

   		$ticket = array('order_ticket' => $this->input->post('order_ticket'));

   		$update_status = $this->db->where('cus_order_id', $order_id)->update('customer_order_details', $ticket);   
        
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

	function generate_order_ticket()
	{
		$data['partner_details']    =  $this->agent_model->view_business_partners(); 

		$this->load->view('agent/site/generate_order_ticket', $data);
	}

	public function view_car_details()
	{
		$cus_id = $this->session->userdata('cus_id');

		if(!$cus_id)
		{
			redirect('agent/login');
		}	
		else
		{

	        $query = "SELECT agent_car_stock.*, CONCAT('[',GROUP_CONCAT(json_object('url',admincar_stockimg)),']') as admincar_stockimg FROM agent_car_stock left join   agent_car_stock_image on agent_car_stock_image.carstock_id = agent_car_stock.carstock_id WHERE agent_car_stock.agent_cus_id = '$cus_id'  GROUP BY carstock_id" ;

	        $data['car_detail'] = $this->db->query($query)->result();

	       
	        $sql = "select * from customer_order_details where (agent_cus_id = '$cus_id')";
		 	$data['order_details'] = $this->db->query($sql)->row();

		 	$this->db->select('*');
	        $this->db->from('agentcustomer_register');  
	        $this->db->join('admin_user', 'admin_user.admin_id = agentcustomer_register.admin_id');  
	        $this->db->where('agentcustomer_register.agent_cus_id',$cus_id);  

	        $data['agent_detail'] = $this->db->get()->row();

	        $data['partner_details']    =  $this->agent_model->view_business_partners();

			$this->load->view('agent/site/view_car_details',$data);
		}
	}

	public function car_invoice($carstock_id)
	{

	   		$status = array('customer_status' => "booking");

	   		$update_status = $this->db->where('carstock_id', $carstock_id)->update('agent_car_stock', $status); 	

	   			$this->db->select('*');
		        $this->db->from('agent_car_stock');  
		        $this->db->join('agent_car_stock_image', 'agent_car_stock_image.carstock_id = agent_car_stock.carstock_id');  
		        $this->db->where('agent_car_stock.carstock_id',$carstock_id);

		        $data['car_detail'] = $this->db->get()->row();

		    $sql = "select * from bank_details ";
			$data['bank_details'] = $this->db->query($sql)->result();

		    $data['partner_details']    =  $this->agent_model->view_business_partners();

			$this->load->view('agent/site/car_invoice',$data);
		
	}

	public function common_agent_car_invoice($carstock_id)
	{
			$cus_id = $this->session->userdata('cus_id');
			$now = date('Y-m-d H:i:s');

			$sql = "select * from common_agent_carbooking_status where (carstock_id = '$carstock_id' AND agent_cus_id = '$cus_id')";
    	 	$query = $this->db->query($sql)->row(); 

    	 	if($query == true)
    	 	{
    	 		
    	 	}
    	 	else
    	 	{
    	 		$status = array('agent_cus_id' 	 => $cus_id, 
	   						'carstock_id' 		 => $carstock_id, 
	   						'car_booking_status' => "booking",
	   						'created_at' 		 => $now
	   						);

	   			$update_status = $this->db->insert('common_agent_carbooking_status', $status); 
    	 	}

	   			$this->db->select('*');
		        $this->db->from('common_agent_car');  
		        $this->db->join('common_agent_car_image', 'common_agent_car_image.carstock_id = common_agent_car.carstock_id');  
		        $this->db->join(' common_agent_carbooking_status', ' common_agent_carbooking_status.carstock_id = common_agent_car.carstock_id') ;
		        $this->db->where('common_agent_car.carstock_id',$carstock_id);

		        $data['car_detail'] = $this->db->get()->row();

		    $sql = "select * from bank_details ";
			$data['bank_details'] = $this->db->query($sql)->result();

		    $data['partner_details']    =  $this->agent_model->view_business_partners();

			$this->load->view('agent/site/car_invoice',$data);
		
	}


	public function car_invoice_view($carstock_id)
	{
		

   			$this->db->select('*');
	        $this->db->from('agent_car_stock');  
	        $this->db->join('agent_car_stock_image', 'agent_car_stock_image.carstock_id = agent_car_stock.carstock_id');  
	        $this->db->where('agent_car_stock.carstock_id',$carstock_id);

	        $data['car_detail'] = $this->db->get()->row();

		    $sql = "select * from bank_details ";
			$data['bank_details'] = $this->db->query($sql)->result();

		    $data['partner_details']    =  $this->agent_model->view_business_partners();

			$this->load->view('agent/site/car_invoice',$data);
		
	}

	public function common_agent_car_invoice_view($carstock_id)
	{
		
   			$this->db->select('*');
	        $this->db->from('common_agent_car');  
	        $this->db->join('common_agent_car_image', 'common_agent_car_image.carstock_id = common_agent_car.carstock_id');  
	        $this->db->join(' common_agent_carbooking_status', ' common_agent_carbooking_status.carstock_id = common_agent_car.carstock_id') ;
	        $this->db->where('common_agent_car.carstock_id',$carstock_id);

	        $data['car_detail'] = $this->db->get()->row();

		    $sql = "select * from bank_details ";
			$data['bank_details'] = $this->db->query($sql)->result();

		    $data['partner_details']    =  $this->agent_model->view_business_partners();

			$this->load->view('agent/site/car_invoice',$data);
		
	}


	public function track_order()
	{
		if(!$this->session->userdata('cus_id'))
		{
			redirect('agent/login');
		}
		else
		{
			$cus_id = $this->session->userdata('cus_id');

			$this->db->select('*');
	        $this->db->from('common_agent_carbooking_status'); 
	        $this->db->join('common_agent_car', 'common_agent_car.carstock_id = common_agent_carbooking_status.carstock_id');
	        $this->db->join('common_agent_car_image', 'common_agent_car_image.carstock_id = common_agent_carbooking_status.carstock_id');
	        $this->db->where('common_agent_carbooking_status.car_booking_status', 'booking');
	        $this->db->where('common_agent_carbooking_status.agent_cus_id',$cus_id);
	        $this->db->group_by('common_agent_carbooking_status.carstock_id');


	        $data['agent_car_detail'] = $this->db->get()->result();

	        // print_r($data['agent_car_detail']);
	        
	        $this->db->select('*');
	        $this->db->from('customer_order_details'); 
	        $this->db->where('customer_order_details.agent_cus_id',$cus_id);
	        $this->db->where('customer_order_details.order_ticket != "null" ');

	        $data['car_detail'] = $this->db->get()->result();

	        $data['partner_details']    =  $this->agent_model->view_business_partners();

			$this->load->view('agent/site/track_order',$data);
		}
	}

	public function view_track_order_details($order_ticket)
	{
			$cus_id = $this->session->userdata('cus_id');

			$query = "SELECT agent_car_stock.*, CONCAT('[',GROUP_CONCAT(json_object('url',admincar_stockimg)),']') as admincar_stockimg FROM agent_car_stock left join   agent_car_stock_image on agent_car_stock_image.carstock_id = agent_car_stock.carstock_id WHERE agent_car_stock.order_ticket = '$order_ticket'  GROUP BY carstock_id" ;

	        $data['car_detail'] = $this->db->query($query)->result();

	       
	        $sql = "select * from customer_order_details where (agent_cus_id = '$cus_id')";
		 	$data['order_details'] = $this->db->query($sql)->row();

		 	$this->db->select('*');
	        $this->db->from('agentcustomer_register');  
	        $this->db->join('admin_user', 'admin_user.admin_id = agentcustomer_register.admin_id');  
	        $this->db->where('agentcustomer_register.agent_cus_id',$cus_id);  

	        $data['agent_detail'] = $this->db->get()->row();

	        $data['partner_details']    =  $this->agent_model->view_business_partners();

			$this->load->view('agent/site/view_car_details',$data);
	}

	public function agent_list()
	{
		$data['page_name'] = 'agent_list';

		$this->db->select('*');
	    $this->db->from('admin_user');
	    $this->db->where('Active = 1');
	    $this->db->where('user_type', 'agent');
	        
	    $data['user_detail'] = $this->db->get()->result();

	    $data['partner_details']    =  $this->agent_model->view_business_partners();
		
		$this->load->view('agent/site/agent_list',$data);
	}

	public function get_car_details($carstock_id = null)
	{

		if($carstock_id == null)
		{			
			$this->load->view('errors/html/error_pagenot_found');
		}
		else
		{
			$data['page_name'] = '';

			$this->db->where('carstock_id', $carstock_id);
	        $this->db->set('user_view_count', 'user_view_count+1', FALSE);
	        $this->db->update('admin_car_stock');
	        
			$data['country'] =   $this->home_model->get_country_name();

			$query = "select * FROM common_agent_car WHERE carstock_id = '$carstock_id' ";
			
			$this->db->select('*');
	        $this->db->from('common_agent_car');  
	        $this->db->join('common_agent_car_image', 'common_agent_car_image.carstock_id = common_agent_car.carstock_id'); 
	        $this->db->where('common_agent_car.carstock_id',$carstock_id);     

	        $data['car_img'] = $this->db->get()->result();

	        $data['car_details'] = $this->db->query($query)->row();

	        $data['partner_details']    =  $this->agent_model->view_business_partners();

	      	$this->load->view('agent/site/view_details',$data);


      	}
	}	



	public function logout()
	{
		$this->session->sess_destroy();
       	redirect('agent/login');
	}

}
