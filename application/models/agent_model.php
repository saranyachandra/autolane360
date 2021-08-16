<?php 


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class agent_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
    
    public function login_auth()
	{		

		$user_name = $this->input->post("agent_email");
    	$password  = $this->input->post("agent_password");
    	$user_type = 'agent';
    	
    		$credential = array('admin_email' => $user_name, 'admin_password' => $password, 'user_type' => $user_type);
    		$query= $this->db->get_where('admin_user', $credential)->row();
 			 		
	       	if($query == true)
			{		 	
					$this->session->set_userdata('admin_user_id', $query->admin_id);
					$this->session->set_userdata('first_name', $query->admin_fname);
					$this->session->set_userdata('last_name', $query->admin_lname);
					$this->session->set_userdata('profile_img', $query->image);
					$this->session->set_userdata('admin_email', $query->admin_email);
					$this->session->set_userdata('admin_phone', $query->admin_phone);
					$this->session->set_userdata('admin_code', $query->agent_code);


				return true;	
			}
			else 
				{	
					return false;
				}

	}

	public function get_client_list()
	{
		$admin_id = $this->session->userdata('admin_user_id'); 

		$sql = "select * from agentcustomer_register where (admin_id = '$admin_id')";
	 	return $this->db->query($sql)->result();  

	}

	public function send_marketing_email()
    {
       
        $this->load->library('email'); 

          	$config = array(
                    'protocol'  => 'smtp',
                    'smtp_host' => 'smtp.sendgrid.net',
                     'smtp_user' => 'Emeka2019',
                    'smtp_pass' => '@Emmy1800',
                    'smtp_port' =>  587,
                    'mailtype'  => 'html',
                    'crlf'      => "\r\n",
                    'newline'   => "\r\n"
                    );
            
            $link     	= $this->input->post('link');
            $email      = implode(',',$this->input->post('email'));
            $text_msg   = $this->input->post('text_msg');
            
            $message ='Welcome to Autolane360!.'."<br><br>".$text_msg."<br><br>"."Link Here: ".$link."<br>";
            
            $this->email->initialize($config);
            $this->email->set_newline("<br>");
            $this->email->from('auto.sales@autolane360.com'); // change it to yours
            $this->email->to($email);
            $this->email->subject('Admin Autolane Details');
            $this->email->message($message);
             
            if($this->email->send())
            {
                return true;
            }
            else
            {
                return false;
            }   

    }

	//here start site function 

  	public function user_login_auth()
	{		

		$email        = $this->input->post("user_email");
    	$password     = $this->input->post("user_password");
    	
        if(is_numeric($email))
        {
            $credential = array('phone_no' => $email, 'password' => $password);
            $query      = $this->db->get_where('agentcustomer_register', $credential)->row();
                    
            if($query == true)
            {           
                    $this->session->set_userdata('cus_id', $query->agent_cus_id);
                    $this->session->set_userdata('cus_fname', $query->f_name);
                    $this->session->set_userdata('cus_lname', $query->l_name);                  
                    $this->session->set_userdata('agent_id', $query->admin_id);
                    $this->session->set_userdata('cus_phone', $query->phone_no);
                    $this->session->set_userdata('cus_email', $query->email);
                    $this->session->set_userdata('cus_country', $query->cus_country);
                    $this->session->set_userdata('cus_state', $query->cus_state);
                    $this->session->set_userdata('referral_code', $query->referral_code);

                    return true;    
            }
            else 
                {   
                    return false;
                }
        }
        else
        {

    		$credential   = array('email' => $email, 'password' => $password);
    		$query        = $this->db->get_where('agentcustomer_register', $credential)->row();
 			 		
	       	if($query == true)
			{		 	
					$this->session->set_userdata('cus_id', $query->agent_cus_id);
					$this->session->set_userdata('cus_fname', $query->f_name);
					$this->session->set_userdata('cus_lname', $query->l_name);					
					$this->session->set_userdata('agent_id', $query->admin_id);
					$this->session->set_userdata('cus_phone', $query->phone_no);
					$this->session->set_userdata('cus_email', $query->email);
                    $this->session->set_userdata('cus_country', $query->cus_country);
                    $this->session->set_userdata('cus_state', $query->cus_state);
                    $this->session->set_userdata('referral_code', $query->referral_code);

				return true;	
			}
			else 
				{	
					return false;
				}
        }

	}

   
    public function view_business_partners()
    {
        $this->db->select('*');
        $this->db->from('business_partners');  
        $this->db->where('active = 1'); 

        $data['partner_details'] = $this->db->get()->result();
      
        return $data['partner_details'];
    }


}