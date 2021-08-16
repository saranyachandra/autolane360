<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	public function __construct()
	{
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		
		parent:: __construct();

		$this->load->library('session'); 
		$this->load->helper(array('form','url','date'));		 
		$this->load->database();
		$this->load->model('admin_model');
	}


	public function index()
	{
		$this->load->view('admin/login');
	}

	public function sadmin_login_auth()
	{		
		
		$response = array();
		 		
	    if($this->admin_model->login_auth())
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
	        $this->load->view('admin/forget_password');
	   }

	public function get_forget_password()
	{
		 

		$response = array();	

		$email  = $this->input->post('email');
		$user_type = 'super_admin';

		$sql = "select * from admin_user where (admin_email = '$email') AND (user_type ='$user_type') ";
	 	$email_query = $this->db->query($sql)->result();

	 	if($email_query == true)
	 	{

	 		$response['status'] = 'success';

			$cre_email = array('admin_email' => $email);
		
			$query= $this->db->get_where('admin_user', $cre_email)->row();
			$pass = $query->admin_password;

	
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
					$email 			= $this->input->post('email');					
					$link 			= 'https://www.autolane360.com/admin_login';
				
				    
				    $message ='Welcome to Autolane360!. Your Login password details are given below '."<br><br>".'Email :'.$email."<br>".'URL Link :'.$link."<br>".'Password :'.$admin_password;
				    
				   	$this->email->initialize($config);
				    $this->email->set_newline("<br>");
				    $this->email->from('auto.sales@autolane360.com'); // change it to yours
				    $this->email->to($email);
				    $this->email->subject('Autolane Credential Details');
				    $this->email->message($message);
				     
				    if($this->email->send())
			     		{
			      			 $response['status'] = 'success'; 
			     		}
			     	else
			    		{
			     			 $response['status'] = 'failed';
			    		}		
			}

			else
	 		{
	 			$response['status'] = 'failed';
	 		}

	 		echo json_encode($response); 

	}



	public function logout()
	{
		 $this->session->sess_destroy();
       	 redirect('Admin_login/index');
	}


}