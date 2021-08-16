<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
  		header('Access-Control-Allow-Origin: *');
  		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  		
  		parent:: __construct();

  		$this->load->library('session'); 
  		$this->load->library('cloudinarylib');
  		$this->load->helper(array('form','url','date'));		 
  		$this->load->database();
      $this->autopartdb = $this->load->database('autoparts', TRUE);
  		$this->load->model('admin_model');

  		if(!$this->session->userdata('admin_id'))
  		{
  			redirect('admin_login/');
  		}

	}

	public function index()
	{
  		$data['page_name'] = 'index';

  		$this->load->view('admin/index', $data);
	}

	public function add_admin_manager()
	{
  		$data['page_name']  = 'add_admin_manager';

  		$data['country']    =  $this->admin_model->get_country_name();

  		$this->load->view('admin/add_admin_manager',$data);
	}

	public function view_admin_manager()
	{
  		$data['page_name'] = 'view_admin_manager';

  		$data['admin_user_detail'] =  $this->admin_model->view_admin_user();

  		$this->load->view('admin/view_admin_manager',$data);
	}


	public function insert_admin_user()
	{
		$response = array();

           if($this->admin_model->register_admin_user())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}

  public function update_admin_manager()
  {

      if ($_POST['action'] === 'edit') {

       $data = array( 
        'admin_fname'      => $_POST['fname'] , 
        'admin_lname'      => $_POST['lname'] ,
        'admin_email'      => $_POST['email'] , 
        'admin_password'   => $_POST['password'] ,
        'admin_phone'      => $_POST['phone'] 
        );

        $this->db->where('admin_id', $_POST['id']);
        $this->db->update('admin_user', $data);

      }
       else if ($_POST['action'] === 'delete') 
        {

          $this->db->where('admin_id', $_POST['id']);
          $this->db->delete('admin_user'); 
        }

    echo json_encode($_POST);
  
  }
   

	public function validate_email(){

  		$response = array();

  	  	$email = $this->input->post('agent_email');
  			
    	 	$sql = "select * from admin_user where (admin_email = '$email')";
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

	public function add_agent_manager()
	{
		$data['page_name'] = 'add_agent_manager';

		$data['country'] =  $this->admin_model->get_country_name();

		$this->load->view('admin/add_agent_manager',$data);
	}

	public function insert_agent_user()
	{
		$response = array();

           if($this->admin_model->register_agent_user())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}


	public function view_agent_manager()
	{
		$data['page_name'] = 'view_agent_manager';

		$data['agent_user_detail'] =  $this->admin_model->view_agent_user();

		$this->load->view('admin/view_agent_manager',$data);
	}



	public function add_seller_manager()
	{
		$data['page_name'] = 'add_seller_manager';

		$data['country'] =  $this->admin_model->get_country_name();

		$this->load->view('admin/add_seller_manager',$data);
	}
	
	public function view_seller_manager()
	{
		$data['page_name'] = 'view_seller_manager';

		$data['seller_user_detail'] =  $this->admin_model->view_seller_user();

		$this->load->view('admin/view_seller_manager',$data);
	}

	public function insert_individual_seller_user()
	{
		$response = array();

           if($this->admin_model->register_seller_individual_user())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}

	public function insert_dealer_seller_user()
	{
		$response = array();

           if($this->admin_model->register_dealer_individual_user())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}
	
	public function add_stock_page()
	{
		$data['page_name'] = 'add_stock_page';
		
		$this->load->view('admin/add_stock',$data);
	}

	public function insert_luxury_stock()
   	{
   		$response = array();
           if($this->admin_model->luxury_stock())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
   	}


  public function get_car_infomation()
	{
		    $data['page_name'] = 'view_stock_page';

		    $this->db->select('*');
        $this->db->from('admin_car_stock');  
        $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = admin_car_stock.carstock_id');  
        $this->db->group_by('admin_car_stock.carstock_id'); 
        $this->db->order_by('admin_car_stock.carstock_id',"desc");
        $this->db->where('Active = 1'); 

        $data['car_detail'] = $this->db->get()->result();

       $this->load->view('admin/view_stock',$data);
	}

	public function update_car_status()
  {
   		
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

  public function update_car_category()
  {
      
      $car_id = $_POST['id'] ;
      $category = $_POST['car_category'];       
      
      $status = array('category' => $category);

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

  public function insert_dealership_stock()
   	{
   		$response = array();
           if($this->admin_model->dealership_stock())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
   	}
   	
  public function buyer_page()
   	{
   		$data['page_name'] = 'buyer_page';


   		  $this->db->select('*');
        $this->db->from('mylane_carstock');  
        $this->db->join('user_registration', 'user_registration.user_id = mylane_carstock.user_id'); 
        $this->db->join('admin_car_stock', 'admin_car_stock.carstock_id = mylane_carstock.carstock_id'); 
        $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = mylane_carstock.carstock_id');  
        $this->db->group_by('mylane_carstock.carstock_id'); 
        $this->db->order_by('admin_car_stock.carstock_id',"desc");	

        // $this->db->where('admin_car_stock', 'Active = 1'); 

        $data['car_detail'] = $this->db->get()->result();

       	$this->load->view('admin/buyer_view',$data);
   	}

   	public function edit_buyer($car_stockid)
   	{
   		$data['page_name'] = '';

   		  $this->db->select('*');
        $this->db->from('mylane_carstock');  
        $this->db->join('user_registration', 'user_registration.user_id = mylane_carstock.user_id'); 
        $this->db->join('admin_car_stock', 'admin_car_stock.carstock_id = mylane_carstock.carstock_id'); 
        // $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = mylane_carstock.carstock_id');  
        $this->db->group_by('mylane_carstock.carstock_id'); 
        $this->db->order_by('admin_car_stock.carstock_id',"desc");	
        $this->db->where('admin_car_stock.carstock_id',$car_stockid ); 

        $data['user_details'] = $this->db->get()->row();

       	$this->load->view('admin/buyer_update',$data);
   	}

   	public function update_buyer($car_stockid)
   	{
   		$response = array();
           if($this->admin_model->update_buyer_status($car_stockid))
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
   	}

   	public function delete_buyer($car_stockid)
   	{
     		$this->db->where('carstock_id', $car_stockid);
  		  $result = $this->db->delete('mylane_carstock');

  		if($result == true)
  	    {
  	        $response['status'] = 'success'; 	
  	    }

  		else
  		{
  			$response['status'] = 'failed';
  		}
  					
  		echo json_encode($response); 

   	}

   	public function message()
   	{
   		  $data['page_name'] = 'Message';

   		  $this->db->select('*');
        $this->db->from('customer_enquiry');
        $this->db->order_by('customer_enquiry.user_id',"desc");	

		    $data['user_details'] = $this->db->get()->result();
		
		    $this->load->view('admin/message',$data);
   	}

    public function send_customer_email()
    {
       
        $response = array();

        $this->load->library('email'); 

          $config = array(
                    'protocol'  => 'smtp',
                    'smtp_host' => 'smtp.sendgrid.net',
                    'smtp_user' => 'Emeka2019',
                    'smtp_pass' => '@Emmy1800',
                    'smtp_port' => 587,
                    'mailtype'  => 'html',
                    'crlf'      => "\r\n",
                    'newline'   => "\r\n"
                    );
            
            $comments     = $this->input->post('comments');
            $email        = $this->input->post('email');
            $link         = 'https://www.autolane360.com/';
            
            $message ='Welcome to Autolane360!.'."<br><br>".$comments."<br>";
            
            $this->email->initialize($config);
            $this->email->set_newline("<br>");
            $this->email->from('auto.sales@autolane360.com'); // change it to yours
            $this->email->to($email);
            $this->email->subject('Admin Autolane Details');
            $this->email->message($message);
             
            if($this->email->send())
              {
                $response['status'] = 'success'; 
              }
            else
              {
                $response['status'] = 'failed';
              }   
        echo json_encode($response); 

    }

   	public function about_us()
   	{
		    $data['page_name'] = 'about_us';

   		  $this->db->select('*');
        $this->db->from('about_us');  
        $this->db->order_by('about_us.about_id',"desc");

       	$data['about_us'] = $this->db->get()->result(); 

   		  $this->load->view('admin/about_us',$data);
   	}

  public function insert_aboutus(){

		$response = array();

	 	if($this->admin_model->insert_about_us())
	    {						
	        $response['status'] = 'success'; 	
	    }

		else
		{
			$response['status'] = 'failed';
		}
					
		echo json_encode($response);  
	}

	
   	public function delete_about_us($about_us_id)
   	{
       		$this->db->where('about_id', $about_us_id);
    		$result = $this->db->delete('about_us');
    		
    		if($result == true)
    	    {
    	        $response['status'] = 'success'; 	
    	    }

    		else
    		{
    			$response['status'] = 'failed';
    		}
    					
    		echo json_encode($response); 

   	}

   	public function News_Feeds()
   	{
   		$data['page_name'] = 'News_Feeds';   		

   		$this->db->select('*');
        $this->db->from('news_feed');
        $this->db->order_by('news_feed.news_id',"desc");

		$data['news_feed'] = $this->db->get()->result();

   		$this->load->view('admin/news_feed',$data);
   	}

   	public function insert_news_feeds()
   	{
   		$response = array();

           if($this->admin_model->newsfees_insert())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
   	}

  public function delete_newsfeeds($news_id)
  {
  		$this->db->where('news_id', $news_id);
		$result = $this->db->delete('news_feed');
   		
	    if($result == true)
	        {
	            $response['status'] = 'success'; 	
	        }

		else
		{
			$response['status'] = 'failed';
		}
					
		echo json_encode($response); 
  }


  public function insert_parts()
  {
      $response = array();
           if($this->admin_model->insert_autoparts())
            {
              $response['status'] = 'success';              
            }
            else
            {
              $response['status'] = 'failed';
            }
          
        echo json_encode($response);
  }

  public function get_part_infomation()
  {
        $data['page_name'] = 'View_Parts';

        $this->autopartdb->select('*');
        $this->autopartdb->from('car_details');        
        $this->autopartdb->order_by('car_details.car_id',"desc");
        $this->autopartdb->where('Active = 1'); 

        $data['car_detail'] = $this->autopartdb->get()->result();
        // print_r($data['car_detail']);

        $this->load->view('admin/view_parts',$data);
  }

  public function update_carpart_status()
  {
      
      $car_id = $_POST['id'] ;
      $car_status = $_POST['car_status'];       
      
      $status = array('car_status' => $car_status);

      $update_status = $this->autopartdb->where('car_id', $car_id)->update('car_details', $status);   
        
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

  public function delete_carparts($car_id)
  {
      $this->autopartdb->where('car_id', $car_id);
      $result = $this->autopartdb->delete('car_details');
      
      if($result == true)
          {
              $response['status'] = 'success';  
          }

      else
      {
        $response['status'] = 'failed';
      }
            
      echo json_encode($response); 
  }

  public function delete_carstock($carstock_id)
  {
      $admin_data = array('active' => '0' );
     
      $result = $this->db->where('carstock_id', $carstock_id)->update('admin_car_stock', $admin_data);

      // $query = $this->db->last_query();
      
      if($result == true)
          {
              $response['status'] = 'success';  
          }

      else
      {
        $response['status'] = 'failed';
      }
            
      echo json_encode($response); 
  }



  // public function edit_carparts($car_id)
  // {
  //       $data['page_name'] = '';

  //       $query = "select * from car_details where car_id = '$car_id' ";

  //       $this->autopartdb->select('*');
  //       $this->autopartdb->from('car_details');        
  //       $this->autopartdb->join('car_parts', 'car_parts.car_id = car_details.car_id'); 
  //       $this->autopartdb->where('car_parts.car_id',$car_id); 

  //       $data['carpart_detail'] = $this->autopartdb->query($query)->row();
  //       $data['part_img']    = $this->autopartdb->get()->result();
       

  //       $this->load->view('admin/edit_carparts',$data);
  // }

  public function update_carstock()
  {

      if ($_POST['action'] === 'edit') {

       $data = array( 
        'price'         => $_POST['fname'] ,        
        'category'      => $_POST['phone'] , 
        'selling_price' => $_POST['selling_price']
        
      );

      $this->db->where('carstock_id', $_POST['id']);
      $this->db->update('admin_car_stock', $data);

      }
     else if ($_POST['action'] === 'delete') 
     {

        $this->db->where('carstock_id', $_POST['id']);
       $this->db->delete('admin_car_stock'); 
      }

     echo json_encode($_POST);
  
  }

  public function edit_carstock($car_id)
  {
        $data['page_name'] = '';

        $query = "select * from admin_car_stock where carstock_id = '$car_id' ";
        $data['carstock_detail'] = $this->db->query($query)->row();

        $this->db->select('*');
        $this->db->from('admin_car_stock');        
        $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = admin_car_stock.carstock_id'); 
        $this->db->where('admin_car_stock.carstock_id',$car_id); 
       
        $data['carstock_img'] = $this->db->get()->result();

        $this->load->view('admin/edit_carstock',$data);
  }

  public function update_and_save_car_stock_details()
    {
     
           if($this->admin_model->update_car_stock())
            {
              $response['status'] = 'success';              
            }
            else
            {
              $response['status'] = 'failed';
              
            }
          
      echo json_encode($response);
     
    }

  public function delete_carstock_img()
  {
      $car_id = $this->input->post('car_id');

      $this->db->where('carstockimg_id', $car_id);
      $result = $this->db->delete('admin_car_stock_image');
      
      if($result == true)
          {
              $response['status'] = 'success';  
          }

      else
      {
        $response['status'] = 'failed';
      }
      // $response['status'] = 'success';  
            
      echo json_encode($response); 
  }

  public function upload_cars($cus_id,$order_ticket, $cus_order_id)
  {
        $data['page_name'] = 'upload_cars';

        $data['order_ticket'] = $order_ticket;
        $data['cus_order_id'] = $cus_order_id;
       

        $this->db->select('*');  //here get customer email and id
        $this->db->from('agentcustomer_register'); 
        $this->db->where('agent_cus_id',$cus_id);  
        $data['cus_detail'] = $this->db->get()->row();

        $this->load->view('admin/agent_upload_car',$data);
  }

  public function insert_agent_upload_cars()
    {
        $response = array();

           if($this->admin_model->agent_car_upload())
            {
              $response['status'] = 'success';              
            }
            else
            {
              $response['status'] = 'failed';
            }
          
        echo json_encode($response);
    }

  public function edit_agent_carstock($order_ticket)
    {
        $data['page_name'] = '';
               
        $this->db->select('*');  
        $this->db->from('agent_car_stock'); 
        $this->db->where('order_ticket',$order_ticket);  
        $data['car_detail'] = $this->db->get()->result();

        // print_r($data['car_detail']);

        $this->load->view('admin/edit_agent_carstock',$data);
    }

  public function delete_agent_carstock_img()
  {
      $car_id = $this->input->post('car_id');

      $this->db->where('carstockimg_id', $car_id);
      $result = $this->db->delete('agent_car_stock_image');
      
      if($result == true)
          {
              $response['status'] = 'success';  
          }

      else
      {
        $response['status'] = 'failed';
      }
                  
      echo json_encode($response); 
  }



  public function delete_agent_carstock($order_ticket)
    {
        $admin_data = array('active' => '0' );
        $status = array('car_status' => 'pending' );

        $this->db->where('order_ticket', $order_ticket);
        $result1 = $this->db->delete('agent_car_stock');
       
        $result = $this->db->where('order_ticket', $order_ticket)->update('customer_order_details', $status);

        // $query = $this->db->last_query();
        
        if($result == true)
            {
                $response['status'] = 'success';  
            }

        else
        {
          $response['status'] = 'failed';
        }
              
        echo json_encode($response); 
    }


  public function update_agent_upload_cars()
    {
        $response = array();

           if($this->admin_model->update_agent_car_upload())
            {
              $response['status'] = 'success';              
            }
            else
            {
              $response['status'] = 'failed';
            }
          
        echo json_encode($response);
    }

  public function view_agent_car_info()
  {
        $data['page_name'] = 'view_agent_car_info';

        $this->db->select('*');
        $this->db->from('agent_car_stock');  
        $this->db->join('agent_car_stock_image', 'agent_car_stock_image.carstock_id = agent_car_stock.carstock_id');  
        $this->db->join('agentcustomer_register', 'agentcustomer_register.agent_cus_id = agent_car_stock.agent_cus_id');
        $this->db->group_by('agent_car_stock.carstock_id'); 
        $this->db->order_by('agent_car_stock.carstock_id',"desc");
        $this->db->where('Active = 1'); 

        // $data['car_detail'] = $this->db->get()->result();

        $data['car_detail'] =  $this->build_response_array($this->db->get()->result_array(),"order_ticket");


        // print_r(json_encode($result));
       $this->load->view('admin/agent_view_car',$data);
  }


  public function build_response($result, $date_fields = array())
  {
        $response_data = array();
        foreach ($result as $key => $value) {
            // $responseKey = (strpos($key, '_')) ? substr($key, strpos($key, "_") + 1) : $key;
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


  public function order_home_page()
  {
        $data['page_name'] = 'order_home_page';

        $this->db->select('*, customer_order_details.created_at AS date' );
        $this->db->from('customer_order_details');  
        $this->db->join('agentcustomer_register', 'agentcustomer_register.agent_cus_id = customer_order_details.agent_cus_id');  
        $this->db->join('admin_user', 'admin_user.admin_id = customer_order_details.admin_id'); 
        $this->db->order_by('customer_order_details.cus_order_id',"desc");
        $this->db->where('customer_order_details.order_ticket != "null" ');

        $data['car_detail'] = $this->db->get()->result();

        // print_r($data['car_detail']);

        $this->load->view('admin/order_home_page',$data);
  }

   public function send_cus_email_link()
    {
       
        $response = array();

        $this->load->library('email'); 

          $config = array(
                    'protocol'  => 'smtp',
                    'smtp_host' => 'smtp.sendgrid.net',
                    'smtp_user' => 'Emeka2019',
                    'smtp_pass' => '@Emmy1800',
                    'smtp_port' => 587,
                    'mailtype'  => 'html',
                    'crlf'      => "\r\n",
                    'newline'   => "\r\n"
                    );
            
            $comments     = $this->input->post('message');
            $email        = $this->input->post('email');
            $link1         = 'https://www.autolane360.com/';
            $link         = 'https://www.autolane360.com/agent/view_car_details';

            
            $message ='Welcome to Autolane360!.'."<br><br>".$comments."<br>".$link;
            
            $this->email->initialize($config);
            $this->email->set_newline("<br>");
            $this->email->from('auto.sales@autolane360.com'); // change it to yours
            $this->email->to($email);
            $this->email->subject(' Autolane Car Details');
            $this->email->message($message);
             
            if($this->email->send())
              {
                $response['status'] = 'success'; 
              }
            else
              {
                $response['status'] = 'failed';
              }   
        echo json_encode($response); 

    }

  public function bank_details()
  {
        $data['page_name'] = 'bank_details';

        $this->db->select('*');
        $this->db->from('bank_details');  
        $data['bank_detail'] = $this->db->get()->result(); 

        $this->load->view('admin/bank_details',$data);
  }

  public function insert_bank_details()
  {
    
      $count_country = count($this->input->post('country_name'));

        for($i=0;$i<$count_country;$i++)
        {
            $img       =  $_FILES['bank_logo']['name'][$i];
            $file_temp =  $_FILES['bank_logo']['tmp_name'][$i];
                     
            $image = \Cloudinary\Uploader::upload($file_temp);
            $car_img_url = $image['secure_url'];

            $data =array('country_name'   => $this->input->post('country_name')[$i],
                       'bank_name'        => $this->input->post('bank_name')[$i],
                       'account_no'       => $this->input->post('account_no')[$i],
                       'bank_logo_url'    => $car_img_url
                      );

            $insert_stock = $this->db->insert('bank_details',$data);
        }

    
        if($insert_stock == true)
          {
              $response['status'] = 'success';  
          }

        else
        {
          $response['status'] = 'failed';
        }
          
      echo json_encode($response);

    }

    public function delete_bank_details($bank_id)
    {
        $this->db->where('bank_id', $bank_id);
        $result = $this->db->delete('bank_details');

        if($result == true)
        {
            $response['status'] = 'success';  
        }

        else
        {
          $response['status'] = 'failed';
        }
              
        echo json_encode($response); 

    }

    public function car_sale_invoice()
    {
        $data['page_name'] = 'car_sale_invoice';

        $this->db->select('*');
        $this->db->from('common_agent_carbooking_status');  
        $this->db->join('agentcustomer_register', 'agentcustomer_register.agent_cus_id = common_agent_carbooking_status.agent_cus_id'); 
        $this->db->join(' common_agent_car', ' common_agent_car.carstock_id = common_agent_carbooking_status.carstock_id'); 
        $this->db->order_by('common_agent_carbooking_status.car_booking_id',"desc");

        $data['agent_list_cus_detail'] = $this->db->get()->result(); 

        $this->db->select('*');
        $this->db->from('agent_car_stock');  
        $this->db->join('agent_car_stock_image', 'agent_car_stock_image.carstock_id = agent_car_stock.carstock_id');  
        $this->db->join('agentcustomer_register', 'agentcustomer_register.agent_cus_id = agent_car_stock.agent_cus_id'); 
        $this->db->group_by('agent_car_stock.carstock_id'); 
        $this->db->order_by('agent_car_stock.carstock_id',"desc");
        $this->db->where('agent_car_stock.customer_status','booking');

        $data['cus_detail'] = $this->db->get()->result(); 

        $this->load->view('admin/car_sale_invoice',$data);

    }

    public function car_sale_invoice_details($carstock_id)
    {
          $data['page_name'] = 'car_sale_invoice';
         
          $this->db->select('*');
          $this->db->from('agent_car_stock'); 
          $this->db->where('agent_car_stock.carstock_id', $carstock_id);

          $data['car_info'] = $this->db->get()->row(); 

        $this->load->view('admin/update_car_sale_invoice',$data);

    }

    public function update_invoice()
    {
      
        $carstock_id =  $this->input->post('carstock_id');

        $data = array( 
          'car_status'      => $this->input->post('status') , 
          'due_date'        => $this->input->post('due_date') ,
          'invoice_date'    => $this->input->post('invoice_date')
        );
       
        $update_status = $this->db->where('carstock_id', $carstock_id)->update('agent_car_stock', $data);  

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

    public function common_car_sale_invoice_details($car_booking_id)
    {
          $data['page_name'] = 'car_sale_invoice';
         
          $this->db->select('*');
          $this->db->from('common_agent_carbooking_status'); 
          $this->db->join('common_agent_car', '(common_agent_car.carstock_id = common_agent_carbooking_status.carstock_id) AND (common_agent_carbooking_status.car_booking_id = '.$car_booking_id.') ');
          // $this->db->where('common_agent_carbooking_status.car_booking_id', $car_booking_id);

          $data['car_info'] = $this->db->get()->row(); 

          // print_r($data['car_info']);

        $this->load->view('admin/update_common_car_sale_invoice',$data);

    }

    public function update_common_car_invoice()
    {
      
        $car_booking_id =  $this->input->post('car_booking_id');

        
        $data = array( 
          'car_status'      => $this->input->post('status') , 
          'due_date'        => $this->input->post('due_date') ,
          'invoice_date'    => $this->input->post('invoice_date')
        );
       
        $update_status = $this->db->where('car_booking_id', $car_booking_id)->update('common_agent_carbooking_status', $data);  

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


    public function all_customer()
    {
        $data['page_name'] = 'all_customer';

        $this->db->select('*');
        $this->db->from('agentcustomer_register');
        $this->db->order_by('agentcustomer_register.agent_cus_id',"desc");

        $data['cus_detail'] = $this->db->get()->result(); 

        $this->load->view('admin/all_customer',$data);

    }

    public function all_customer_view_details($agent_cus_id)
    {
        $data['page_name'] = '';

        $this->db->select('*');
        $this->db->from('agent_car_stock');  
        // $this->db->join('agent_car_stock_image', 'agent_car_stock_image.carstock_id = agent_car_stock.carstock_id');  
        // $this->db->join('agentcustomer_register', 'agentcustomer_register.agent_cus_id = agent_car_stock.agent_cus_id'); 
        $this->db->group_by('agent_car_stock.carstock_id'); 
        $this->db->order_by('agent_car_stock.carstock_id',"desc");
        // $this->db->where('agent_car_stock.customer_status','booking');
        $this->db->where('agent_car_stock.agent_cus_id', $agent_cus_id);

        $data['cus_detail'] = $this->db->get()->result(); 

        // print_r( $data['cus_detail']);

        $this->load->view('admin/all_customer_view_details',$data);

    }

  public function view_agent_car_info_details($carstock_id)
    {
        $data['page_name'] = '';

        $query = "SELECT agent_car_stock.*, CONCAT('[',GROUP_CONCAT(json_object('url',admincar_stockimg)),']') as admincar_stockimg FROM agent_car_stock left join   agent_car_stock_image on agent_car_stock_image.carstock_id = agent_car_stock.carstock_id WHERE agent_car_stock.carstock_id = '$carstock_id'  GROUP BY carstock_id" ;

        $data['car_detail'] = $this->db->query($query)->row();

        $this->load->view('admin/view_agent_car_info_details',$data);

    }

   


  public function upload_video()
  {
        $data['page_name'] = 'Video';

        $this->db->select('*');
        $this->db->from('upload_video');

        $data['video_detail'] = $this->db->get()->result(); 

        $this->load->view('admin/upload_video',$data);
  }

  public function insert_video()
  {
      $response = array();

        if($this->admin_model->insert_agent_video())
        {
            $response['status'] = 'success';  
        }

        else
        {
          $response['status'] = 'failed';
        }
          
      echo json_encode($response);

  }

  public function delete_video($video_id)
    {
        $this->db->where('video_id', $video_id);
        $result = $this->db->delete('upload_video');

      if($result == true)
        {
            $response['status'] = 'success';  
        }

      else
      {
        $response['status'] = 'failed';
      }
            
      echo json_encode($response); 

    }

  public function Business_Partners()
  {
        $data['page_name'] = 'Business_Partners';

        $this->db->select('*');
        $this->db->from('business_partners');
        // $this->db->where('active = 1');
        $this->db->order_by('business_partners.partner_id', 'desc');

        $data['partner_detail'] = $this->db->get()->result(); 

        $this->load->view('admin/business_partners',$data);
  }

  public function insert_Business_Partners()
  {
      $response = array();

        if($this->admin_model->insert_partners_details())
        {
            $response['status'] = 'success';  
        }

        else
        {
          $response['status'] = 'failed';
        }
          
      echo json_encode($response);

  }

  public function delete_partner_details($partner_id)
    {
        $this->db->where('partner_id', $partner_id);
        $result = $this->db->delete('business_partners');

        if($result == true)
        {
            $response['status'] = 'success';  
        }

        else
        {
          $response['status'] = 'failed';
        }
              
        echo json_encode($response); 

    }

  public function update_partner_status()
  {
      
      $id = $_POST['id'] ;
      $active_status = $_POST['status'];       
      
      $status = array('active' => $active_status);

      // print_r($status);

      $update_status = $this->db->where('partner_id', $id)->update('business_partners', $status);   
        
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

  public function common_agent_upload_car()
  {
      $data['page_name'] = 'Add_Agent_Car_Listing';

      $this->load->view('admin/common_agent_upload_car', $data);
  }

  public function upload_common_agent_upload_car()
  {
      $response = array();

        if($this->admin_model->insert_common_agent_upload_car())
        {
            $response['status'] = 'success';  
        }

        else
        {
          $response['status'] = 'failed';
        }
          
      echo json_encode($response);

  }

  public function edit_common_agent_carstock($car_id)
  {
        $data['page_name'] = '';

        $query = "select * from common_agent_car where carstock_id = '$car_id' ";
        $data['carstock_detail'] = $this->db->query($query)->row();

      

        $this->load->view('admin/edit_common_agent_upload_car',$data);
  }


  public function edit_common_agent_upload_car()
  {
      $response = array();

        if($this->admin_model->edit_common_agent_list())
        {
            $response['status'] = 'success';  
        }

        else
        {
          $response['status'] = 'failed';
        }
          
      echo json_encode($response);

  }


  public function view_agent_car_list()
  {
        $data['page_name'] = 'view_agent_car_listing';

        $this->db->select('*');
        $this->db->from('common_agent_car');  
        $this->db->join('common_agent_car_image', 'common_agent_car_image.carstock_id = common_agent_car.carstock_id');  
        $this->db->group_by('common_agent_car.carstock_id'); 
        $this->db->order_by('common_agent_car.carstock_id',"desc");
        $this->db->where('Active = 1'); 

        $data['car_detail'] = $this->db->get()->result();

       $this->load->view('admin/view_agent_car_listing',$data);
  }

  public function delete_common_agent_car($car_id)
  {
      $this->db->where('carstock_id', $car_id);
      $result = $this->db->delete('common_agent_car');
      
      if($result == true)
          {
              $response['status'] = 'success';  
          }

      else
      {
        $response['status'] = 'failed';
      }
            
      echo json_encode($response); 
  }

  public function agent_delete_customer($cus_id)
    {
        $this->db->where('agent_cus_id', $cus_id);
        $result = $this->db->delete('agentcustomer_register');

      if($result == true)
        {
            $response['status'] = 'success';  
        }

      else
      {
        $response['status'] = 'failed';
      }
            
      echo json_encode($response); 

    }

  public function view_carpart_customer()
  {
        $data['page_name'] = 'Registed Customer';

        $this->db->select('*');
        $this->db->from('car_part_register');  
        $this->db->order_by('car_part_register.carpart_reg_id',"desc");
       

        $data['customer_detail'] = $this->db->get()->result();

        $this->load->view('admin/view_carpart_customer',$data);
  }

  public function update_membership_status()
  {
      
      $id = $_POST['id'] ;
      $membership_status = $_POST['Membership_status'];       
      
      $status = array('membership_status' => $membership_status);

      // print_r($status);

      $update_status = $this->db->where('carpart_reg_id', $id)->update('car_part_register', $status);   
        
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

  public function carpart_customer_delete($cus_id)
    {
        $this->db->where('carpart_reg_id', $cus_id);
        $result = $this->db->delete('car_part_register');

      if($result == true)
        {
            $response['status'] = 'success';  
        }

      else
      {
        $response['status'] = 'failed';
      }
            
      echo json_encode($response); 

    }

    public function carpart_customer_view_details($agent_cus_id)
    {
        $data['page_name'] = '';

        $this->db->select('*');
        $this->db->from('car_part_register');  
        $this->db->join('agentcustomer_register', 'agentcustomer_register.agent_cus_id = car_part_register.agent_cus_id','left');  
                     
        $this->db->where('car_part_register.agent_cus_id', $agent_cus_id);

        $data['cus_detail'] = $this->db->get()->result();        

        $this->load->view('admin/carpart_customer_view_details',$data);

    }

    public function upload_car_part()
    {
        $data['page_name'] = 'upload_car_part';

        $this->load->view('admin/car_part_upload',$data);

    }

    public function insert_car_part()
    {
      $response = array();

             if($this->admin_model->carpart_upload())
              {
                $response['status'] = 'success';              
              }
              else
              {
                $response['status'] = 'failed';
              }
            
          echo json_encode($response);
    }

    public function view_carpart_order()
    {
        $data['page_name'] = 'car_part_order';

        $this->db->select('*');
        $this->db->from('carpart_buying');  
        $this->db->join('carpart', 'carpart.car_part_id = carpart_buying.car_part_id','left');  
        // $this->db->join('carpart_img', 'carpart_img.car_part_id = carpart_buying.car_part_id','left');             
        // $this->db->where('car_part_register.agent_cus_id', $agent_cus_id);

        $data['part_detail'] = $this->db->get()->result();   

        // $query = "select * from carpart where car_part_id = '$carpart_id' ";
        // $data['carpart_detail'] = $this->db->query($query)->row();

        // print_r($data['part_detail']);      

        $this->load->view('admin/view_carpart_order',$data);

    }

    public function view_all_carpart()
    {
        $data['page_name'] = 'view_all_carpart';

        $this->db->select('*');
        $this->db->from('carpart');  
        
        $data['part_detail'] = $this->db->get()->result();   
         
        $this->load->view('admin/carpart/view_all_carpart',$data);

    }

  
  public function edit_carpart($carpart_id)
  {
        $data['page_name'] = '';

        $query = "select * from carpart where car_part_id = '$carpart_id' ";

        $this->db->select('*');
        $this->db->from('carpart');        
        $this->db->where('carpart.car_part_id',$carpart_id); 

        $data['carpart_detail'] = $this->db->get()->row();

        $this->load->view('admin/carpart/edit_carpart',$data);
  }

  public function update_car_part()
    {
        $response = array();

             if($this->admin_model->update_carpart())
              {
                $response['status'] = 'success';              
              }
              else
              {
                $response['status'] = 'failed';
              }
            
          echo json_encode($response);
    }

  public function delete_carpart($carpart_id)
    {
          $this->db->where('car_part_id', $carpart_id);
          $result = $this->db->delete('carpart');

        if($result == true)
          {
              $response['status'] = 'success';  
          }

        else
        {
          $response['status'] = 'failed';
        }
              
        echo json_encode($response); 

    }

}