<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }


  public function getadmin_car_infomation($country)
  	{
  		
  		    $this->db->select('*');
          $this->db->from('admin_car_stock');  
          $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = admin_car_stock.carstock_id');  
          $this->db->group_by('admin_car_stock.carstock_id'); 
          $this->db->where('admin_car_stock.country',$country); 
          $this->db->where('admin_car_stock.category','Hot_Deals'); 
          $this->db->order_by('admin_car_stock.carstock_id',"desc");
          $this->db->where('active = 1'); 
          
          $query = $this->db->get()->result();
         
          // echo $this->db->last_query();   print the sql query
          return $query;
      	
  	}

  public function newly_added_car($country)
  {
          $this->db->select('*');
          $this->db->from('admin_car_stock');  
          $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = admin_car_stock.carstock_id');  
          $this->db->group_by('admin_car_stock.carstock_id'); 
          $this->db->where('admin_car_stock.country',$country); 
          // $this->db->where('admin_car_stock.category','Hot_Deals'); 
          $this->db->order_by('admin_car_stock.carstock_id',"desc", "limit 8");
          $this->db->where('active = 1'); 
          
          $query = $this->db->get()->result();
          return $query;
        
  }

  public function country_filter($country_name)
    { 
      
        $country_name = $country_name;

        $this->session->set_userdata('select_country_name', $country_name);

        $country_name=urldecode($country_name); //remove white space between two words
        
            $this->db->select('*');
            $this->db->from('admin_car_stock');  
            $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = admin_car_stock.carstock_id');  
            $this->db->group_by('admin_car_stock.carstock_id'); 
            $this->db->where('country', $country_name);
            $this->db->where('active = 1');

            $query = $this->db->get()->result();

            // echo $this->db->last_query(); 
            
        return $query;    
    }  

  public function get_country_name()
  {
        $this->db->select('*');
        $this->db->from('country');  

        $data['country'] = $this->db->get()->result();
      
        return $data['country'];
  }         

	public function get_news_feeds()
   	{
   		  $this->db->select('*');
        $this->db->from('news_feed');  
        $this->db->where('Active = 1'); 

        $data['news_feed'] = $this->db->get()->result();
   		
        return $data['news_feed'];
   	}


  public function insert_user_enquiry()
  {

    $now = date('Y-m-d H:i:s'); 

    $data = array('car_details'   => $this->input->post('car_detail'),
                  'enquiry_topic' => $this->input->post('enquiry_topic'),
                  'message'       => $this->input->post('discription'),
                  'first_name'    => $this->input->post('f_name'),
                  'last_name'     => $this->input->post('l_name'),
                  'user_email'    => $this->input->post('email'),
                  'user_country'  => $this->input->post('country_name'),
                  'created_at'    => $now
                );

    $query = $this->db->insert('customer_enquiry',$data);

    if($query == true)
      {     
        
        $response['status'] = 'success'; 

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
          
          $enquiry_topic    = $this->input->post('enquiry_topic');
          $discription      = $this->input->post('discription');
          $f_name           = $this->input->post('f_name');
          $l_name           = $this->input->post('l_name');
          $email            = $this->input->post('email');
          $country_name     = $this->input->post('country_name');
          $link             = 'https://www.autolane360.com/';
          
            
            $message ='Welcome to Autolane360!. Your Agent Login details are given below '."<br><br>".'Enquiry Topic :'.$enquiry_topic."<br>".'Message :'.$discription."<br>".'Name :'.$f_name.' '.$l_name."<br>".'Email :'.$email."<br>".'Country Name :'.$country_name."<br>".'Site URL :'.$link."<br><br>".'Welcome Aboard';
            
            $this->email->initialize($config);
            $this->email->set_newline("<br>");
            $this->email->from('auto.sales@autolane360.com'); // change it to yours
            $this->email->to('auto.sales@autolane360.com');
            $this->email->subject('Agent Autolane Details');
            $this->email->message($message);
             
            if($this->email->send())
              {
                  return true;
              }
            else
              {
                // show_error($this->email->print_debugger());
                 return false;
              }   
      }
    else 
      { 
        return false;
      }

  }
   	
	public function insert_register()
  {

    $now = date('Y-m-d H:i:s'); 

    $data = array('user_fname'    => $this->input->post('f_name'),
                  'user_lname'    => $this->input->post('l_name'),
                  'user_email'    => $this->input->post('email'),
                  'user_password' => $this->input->post('password'),
                  'user_phone'    => $this->input->post('phone_code'),                  
                  'user_country'  => $this->input->post('country_name'),
                  'user_state'    => $this->input->post('state'),
                  'agent_ref_code'=> $this->input->post('referral_code'),
                  'user_created_at'    => $now
                );

    $query = $this->db->insert('user_registration',$data);

    if($query == true)
      {
        return true;
      } 
    else
    {
      return false;
    }

  }


  public function validate_user_email()
  {


    $email= $this->input->post('user_email');
      
    $sql="select * from user_registration where (user_email = '$email')";
    $query = $this->db->query($sql)->result();  

    if($query == true)
      {     
        return true;      
      }
    else 
      { 
       return false;
      }

  }

  public function user_login_auth()
  {   

      $user_name = $this->input->post("user_email");
      $password  = $this->input->post("user_password");
      
      $credential = array('user_email' => $user_name, 'user_password' => $password);
      $query= $this->db->get_where('user_registration', $credential)->row();
          
      if($query == true)
      {     
          $this->session->set_userdata('user_id',    $query->user_id);
          $this->session->set_userdata('user_fname', $query->user_fname);
          $this->session->set_userdata('user_lname', $query->user_lname);         
          $this->session->set_userdata('user_email', $query->user_email);
          $this->session->set_userdata('user_phone', $query->user_phone);
          $this->session->set_userdata('agent_ref_code', $query->agent_ref_code);
      
        return true;          
      }
      else 
        { 
          return false;
        }

  }

  public function direct_buy()
  {

      $now = date('Y-m-d H:i:s'); 

      $customer_data = array(
            'car_category'    => $this->input->post('car_category'),
            'car_year'        => $this->input->post('car_years'),
            'car_makes'       => $this->input->post('car_brand'),
            'car_model'       => $this->input->post('car_model'),            
            'customer_email'  => $this->input->post('email'),
            'customer_phone'  => $this->input->post('phone'),
            'first_name'      => $this->input->post('first_name'),
            'last_name'       => $this->input->post('last_name'),
            'customer_city'   => $this->input->post('user_city'),
            'customer_state'  => $this->input->post('user_state'),
            'comments'      => $this->input->post('comments'),
            'created_at'    => $now
          );

      $query = $this->db->insert('customer_contact',$customer_data);

      if($query == true)
        {
          return true;
        } 
      else
      {
        return false;
      }

  }

}
