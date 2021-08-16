<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        $this->autopartdb = $this->load->database('autoparts', TRUE);
    }


    public function get_country_name()
  	{
        $this->db->select('*');
        $this->db->from('country');  

        $data['country'] = $this->db->get()->result();
      
        return $data['country'];
  	} 

  	public function login_auth()
	{		

		$user_name = $this->input->post("email");
    	$password  = $this->input->post("password");
    	$user_type = 'super_admin';
    	
    		$credential = array('admin_email' => $user_name, 'admin_password' => $password, 'user_type' => $user_type);
    		$query= $this->db->get_where('admin_user', $credential)->result();
 		
 			 		
	       	if($query == true)
			{		 	
				foreach ($query as $queries) 
				{
					$this->session->set_userdata('admin_id', $queries->admin_id);
					$this->session->set_userdata('first_name', $queries->admin_fname);
					$this->session->set_userdata('last_name', $queries->admin_lname);
					$this->session->set_userdata('profile_img', $queries->image);
					$this->session->set_userdata('admin_email', $queries->admin_email);
					$this->session->set_userdata('admin_phone', $queries->admin_phone);
				}

				return true;	
									
			}
			else 
				{	
					return false;
				}

	}


    public function register_admin_user()
  	{
  		if($_FILES['admin_profile_pic']['size'] != 0 )
		{
	  		$img    	=  $_FILES['admin_profile_pic']['name'];
			$file_temp  =  $_FILES['admin_profile_pic']['tmp_name'];
						    
			$image = \Cloudinary\Uploader::upload($file_temp);
			$profile_img_url = $image['secure_url'];
		}
		else
		{
			$profile_img_url = " ";
		}

	    $now = date('Y-m-d H:i:s'); 
	    $delecation = $this->input->post('delecation');

	    $data = array('admin_fname' 	=> $this->input->post('admin_fname'),
	                  'admin_lname'     => $this->input->post('admin_lname'),
	                  'admin_email'    	=> $this->input->post('admin_email'),
	                  'admin_password' 	=> $this->input->post('admin_pass'),
	                  'admin_phone'    	=> $this->input->post('admin_phone'),	                  
	                  'admin_city'  	=> $this->input->post('admin_city'),
	                  'admin_country'  	=> $this->input->post('admin_country'),	                  
	                  'comments'  		=> $this->input->post('admin_msg'),
	                  'delegate'  		=> implode(',', $delecation),	
	                  'agent_code'  	=> $this->input->post('admin_member_code'),   
	                  'user_type'  		=> 'admin',                
	                  'created_at'    	=> $now,
	                  'image' 		 	=> $profile_img_url	
	                );

	    $query = $this->db->insert('admin_user',$data);

	    if($query == true)
	    {     
	        
	        $response['status'] = 'success'; 

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
	          
	         		$admin_fname    = $this->input->post('admin_fname');
					$admin_lname    = $this->input->post('admin_lname');
					$admin_password = $this->input->post('admin_pass');
					$email 			= $this->input->post('admin_email');
					$agent_code 	= $this->input->post('admin_member_code');
					$link 			= 'https://www.autolane360.com/';
					$comments  	    = $this->input->post('admin_msg');
				    
				    $message ='Welcome to Autolane360!. Your Agent Login details are given below '."<br><br>".'Email :'.$email."<br>".'URL Link :'.$link."<br>".'First Name :'.$admin_fname."<br>".'Last Name :'.$admin_lname."<br>".'Password :'.$admin_password."<br>".'Agent Code :'.$agent_code."<br>".'[Comment Text]'.$comments."<br><br>".'Welcome Aboard';
				    
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
                // show_error($this->email->print_debugger());
                 return false;
              }   
	    }
	    else 
	      { 
	        return false;
	      }

	}

	public function register_agent_user()
  	{
  		if($_FILES['admin_profile_pic']['size'] != 0 )
		{
	  		$img    	=  $_FILES['admin_profile_pic']['name'];
			$file_temp  =  $_FILES['admin_profile_pic']['tmp_name'];
						    
			$image = \Cloudinary\Uploader::upload($file_temp);
			$profile_img_url = $image['secure_url'];
		}
		else
		{
			$profile_img_url = " ";
		}

	    $now = date('Y-m-d H:i:s'); 
	    $delecation = $this->input->post('delecation');

	    $data = array('admin_fname' 	=> $this->input->post('admin_fname'),
	                  'admin_lname'     => $this->input->post('admin_lname'),
	                  'admin_email'    	=> $this->input->post('admin_email'),
	                  'admin_password' 	=> $this->input->post('admin_pass'),
	                  'admin_phone'    	=> $this->input->post('admin_phone'),	                  
	                  'admin_city'  	=> $this->input->post('admin_city'),
	                  'admin_country'  	=> $this->input->post('admin_country'),	                  
	                  'comments'  		=> $this->input->post('admin_msg'),
	                  'delegate'  		=>	implode(',',$delecation),
	                  'agent_code'  	=> $this->input->post('admin_member_code'),   
	                  'user_type'  		=> 'agent',                
	                  'created_at'    	=> $now,
	                  'image' 		 	=> $profile_img_url	
	                );

	    $query = $this->db->insert('admin_user',$data);

	    if($query == true)
	    {     
	        
	        $response['status'] = 'success'; 

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
	          
	         		$admin_fname    = $this->input->post('admin_fname');
					$admin_lname    = $this->input->post('admin_lname');
					$admin_password = $this->input->post('admin_pass');
					$email 			= $this->input->post('admin_email');
					$agent_code 	= $this->input->post('admin_member_code');
					$link 			= 'https://www.autolane360.com/';
					$comments  	    = $this->input->post('admin_msg');
				    
				    $message ='Welcome to Autolane360!. Your Agent Login details are given below '."<br><br>".'Email :'.$email."<br>".'URL Link :'.$link."<br>".'First Name :'.$admin_fname."<br>".'Last Name :'.$admin_lname."<br>".'Password :'.$admin_password."<br>".'Agent Code :'.$agent_code."<br>".'[Comment Text]'.$comments."<br><br>".'Welcome Aboard';
				    
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
                // show_error($this->email->print_debugger());
                 return false;
              }   
	    }
	    else 
	      { 
	        return false;
	      }

	}

	public function view_admin_user()
   	{
   		$this->db->select('*');
        $this->db->from('admin_user');  
        $this->db->where('user_type', 'admin');
        $this->db->order_by('admin_user.admin_id', 'desc');

        $data['admin_detail'] = $this->db->get()->result();
   		return $data['admin_detail'];
   	}

   	public function view_agent_user()
   	{
   		$this->db->select('*');
        $this->db->from('admin_user');  
        $this->db->where('user_type', 'agent'); 
        $this->db->order_by('admin_user.admin_id', 'desc');

        $data['agent_detail'] = $this->db->get()->result();
   		return $data['agent_detail'];
   	}

   	public function view_seller_user()
   	{
   		$this->db->select('*');
        $this->db->from('admin_user');  
        $this->db->order_by('admin_user.admin_id', 'desc');
        
        $data['seller_detail'] = $this->db->get()->result();
   		return $data['seller_detail'];
   	}

   	public function register_seller_individual_user()
  	{
  		if($_FILES['seller_profile_pic']['size'] != 0 )
		{
	  		$img    	=  $_FILES['seller_profile_pic']['name'];
			$file_temp  =  $_FILES['seller_profile_pic']['tmp_name'];
						    
			$image = \Cloudinary\Uploader::upload($file_temp);
			$profile_img_url = $image['secure_url'];
		}
		else
		{
			$profile_img_url = " ";
		}

	    $now = date('Y-m-d H:i:s'); 

	    $data = array('admin_fname' 	=> $this->input->post('individaul_fname'),
	                  'admin_lname'     => $this->input->post('individaul_lname'),
	                  'admin_email'    	=> $this->input->post('individaul_email'),
	                  'admin_password' 	=> $this->input->post('individaul_pass'),
	                  'admin_phone'    	=> $this->input->post('individaul_phone'),                 
	                  'comments'  		=> $this->input->post('individaul_msg'),	                  
	                  'user_type'  		=> 'individual_seller',                
	                  'created_at'    	=> $now,
	                  'image' 		 	=> $profile_img_url	
	                );

	    $query = $this->db->insert('admin_user',$data);

	    if($query == true)
	    {     
	        
	        $response['status'] = 'success'; 

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
	          
	         		$admin_fname    = $this->input->post('individaul_fname');
					$admin_lname    = $this->input->post('individaul_lname');
					$admin_password = $this->input->post('individaul_pass');
					$email 			= $this->input->post('individaul_email');					
					$link 			= 'https://www.autolane360.com/';
					$comments  	    = $this->input->post('individaul_msg');
				    
				    $message ='Welcome to Autolane360!. Your Agent Login details are given below '."<br><br>".'Email :'.$email."<br>".'URL Link :'.$link."<br>".'First Name :'.$admin_fname."<br>".'Last Name :'.$admin_lname."<br>".'Password :'.$admin_password."<br>".'[Comment Text]'.$comments."<br><br>".'Welcome Aboard';
				    
				   	$this->email->initialize($config);
				    $this->email->set_newline("<br>");
				    $this->email->from('auto.sales@autolane360.com'); // change it to yours
				    $this->email->to($email);
				    $this->email->subject('Individual Seller Autolane Details');
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
	    else 
	      { 
	        return false;
	      }

	}

	public function register_dealer_individual_user()
  	{
  		if($_FILES['dealer_profile_pic']['size'] != 0 )
		{
	  		$img    	=  $_FILES['dealer_profile_pic']['name'];
			$file_temp  =  $_FILES['dealer_profile_pic']['tmp_name'];
						    
			$image = \Cloudinary\Uploader::upload($file_temp);
			$profile_img_url = $image['secure_url'];
		}
		else
		{
			$profile_img_url = " ";
		}

	    $now = date('Y-m-d H:i:s'); 

	    $data = array('admin_fname' 	=> $this->input->post('dealer_fname'),
	                  'admin_lname'     => $this->input->post('dealer_lname'),
	                  'admin_email'    	=> $this->input->post('dealer_email'),
	                  'admin_password' 	=> $this->input->post('dealer_pass'),
	                  'admin_phone'    	=> $this->input->post('dealer_phone'), 
	                  'admin_city'    	=> $this->input->post('dealer_city'),  
	                  'admin_country'   => $this->input->post('dealer_country'),  
	                  'admin_address'   => $this->input->post('dealer_address'),    
	                  'admin_zipcode'   => $this->input->post('dealer_zipcode'),              
	                  'comments'  		=> $this->input->post('dealer_msg'),	                  
	                  'user_type'  		=> 'dealer_seller',                
	                  'created_at'    	=> $now,
	                  'image' 		 	=> $profile_img_url	
	                );

	    $query = $this->db->insert('admin_user',$data);

	    if($query == true)
	    {     
	        
	        $response['status'] = 'success'; 

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
	          
	         		$admin_fname    = $this->input->post('dealer_fname');
					$admin_lname    = $this->input->post('dealer_lname');
					$admin_password = $this->input->post('dealer_pass');
					$email 			= $this->input->post('dealer_email');					
					$link 			= 'https://www.autolane360.com/';
					$comments  	    = $this->input->post('dealer_msg');
				    
				    $message ='Welcome to Autolane360!. Your Agent Login details are given below '."<br><br>".'Email :'.$email."<br>".'URL Link :'.$link."<br>".'First Name :'.$admin_fname."<br>".'Last Name :'.$admin_lname."<br>".'Password :'.$admin_password."<br>".'[Comment Text]'.$comments."<br><br>".'Welcome Aboard';
				    
				   	$this->email->initialize($config);
				    $this->email->set_newline("<br>");
				    $this->email->from('auto.sales@autolane360.com'); // change it to yours
				    $this->email->to($email);
				    $this->email->subject('Dealer Seller Autolane Details');
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
	    else 
	      { 
	        return false;
	      }

	}

	
	public function luxury_stock()
    {
    	
    	$now = date('Y-m-d H:i:s');  

    	// video upload by cloudnary
    	if($_FILES['car_videos']['size'] != 0 )
		{
    	 	$video =  $_FILES['car_videos']['name'];
			$video_file_temp =  $_FILES['car_videos']['tmp_name'];
					     
			$video = \Cloudinary\Uploader::upload($video_file_temp,array("resource_type" => "video"));
			$video_url = $video['secure_url'];
		}
		else
		{
			$video_url = " ";
		}

		$stock_data = array('admin_id'    	=> $this->input->post('admin_id'),
						'user_type'    		=> 'super admin',
						'category'    		=> $this->input->post('category'),
						'Splash_Text'    	=> $this->input->post('Splash_Text'),
						'available_from'    => $this->input->post('available_from'),
						'available_to'    	=> $this->input->post('available_to'),
						'car_type'    		=> $this->input->post('car_type'),
						'car_year' 	 	    => $this->input->post('car_years'),
						'car_brand' 	 	=> $this->input->post('car_brand'),
						'car_model'  		=> $this->input->post('car_model'),
						'car_trim'  		=> $this->input->post('car_trim'),
						'car_mileage' 	 	=> $this->input->post('car_mileage'),
						'car_location'    	=> $this->input->post('car_location'),						
						'vin_status'    	=> $this->input->post('vin_status'),
						'start_code' 	 	=> $this->input->post('start_code'),
						'engine' 	 		=> $this->input->post('engine_type'),
						'vehicle_class'  	=> $this->input->post('vehicle_class'),
						'transmission' 	 	=> $this->input->post('transmission'),
						'pasenger_door'  	=> $this->input->post('Passenger_Door'),
						'manufactured' 	 	=> $this->input->post('Manufacture'),
						'ac_condition'    	=> $this->input->post('ac_condition'),
						'interior_color'    => $this->input->post('Interior_color'),
						'exterior_color' 	=> $this->input->post('Exterior_color'),
						'car_keys' 	 		=> $this->input->post('car_keys'),
						'car_mpg' 	 		=> $this->input->post('car_mpg'),
						'Vehicle_Stock' 	=> $this->input->post('Vehicle_Stock'),
						'Fuel_type' 	 	=> $this->input->post('Fuel_type'),
						'Drive_type' 	 	=> $this->input->post('Drive_type'),
						'Message' 	 		=> $this->input->post('Message'),
						'Delivery_City' 	=> $this->input->post('Delivery_City'),
						'primary_damage'  	=> $this->input->post('primary_damage'),
						'secondary_damage' 	=> $this->input->post('secondary_damage'),
						'dealer_info' 	 	=> $this->input->post('dealer_info'),
						'delivery_estimate' => $this->input->post('delivery_estimate'),
						'buyer_code'  		=> $this->input->post('buyer_code'),
						'description'  		=> $this->input->post('dealer_info'),
						'country' 	 		=> $this->input->post('country'),
						'price' 	 		=> $this->input->post('price'),
						'clearing_cost' 	=> $this->input->post('clearing_cost'),
						'repair_cost' 	 	=> $this->input->post('repair_cost'),
						'video_name' 	 	=> $video_url,
						'created_at'		=> $now
					);

				$insert_stock = $this->db->insert('admin_car_stock',$stock_data);


				if($insert_stock == true)	
				{
					$carstock_id = $this->db->insert_id();
					
					$count = count($_FILES['car_images']['name']);


					for($i = 0; $i < $count; $i++) {
					   
					  $img       =  $_FILES['car_images']['name'][$i];
					  $file_temp =  $_FILES['car_images']['tmp_name'][$i];
					     
					   $image = \Cloudinary\Uploader::upload($file_temp);
					   $car_img_url = $image['secure_url'];

	   					$img_data = array(	'carstock_id' 		=> $carstock_id,
											'admincar_stockimg' =>  $car_img_url
									 );
	   					$this->db->insert('admin_car_stock_image',$img_data);
					}
					
					return true;

				}			

     	 		else{
						return false;
					}	
	 	
    }


    public function update_buyer_status($car_stockid)
   	{
   		$user_id  = $this->input->post('user_id');
   		
   		$status = array('user_id' 		=> $user_id,
   					   'status' 		=> $this->input->post('car_status'),
   					   'arrival_date' 	=> $this->input->post('Arrival_date'),   					  
   					   'shipped_on' 	=> $this->input->post('shipped_on'),
   					   'parts_need' 	=> $this->input->post('parts_need'),
   					   'bank_name' 		=> $this->input->post('bank_name'),
   					   'received_amt' 	=> $this->input->post('received_amt'),
   					   'extend_code_price' 	=> $this->input->post('extend_code_price')
   					  );

   		$carstatus =array('car_status' => $this->input->post('car_status') );

   		$result = $this->db->where('carstock_id', $car_stockid)->update('mylane_carstock', $status);
   		$update_status = $this->db->where('carstock_id', $car_stockid)->update('admin_car_stock', $carstatus);
	        
	    if($result == true)
	    {
			$count = count($_FILES['receipt_img']['name']);
			
			for($i = 0; $i < $count; $i++) {

				if($_FILES['receipt_img']['size'][$i] != 0 )
				{			   
						$img       =  $_FILES['receipt_img']['name'][$i];
						$file_temp =  $_FILES['receipt_img']['tmp_name'][$i];
						     
						$image = \Cloudinary\Uploader::upload($file_temp);
						$car_img_url = $image['secure_url'];

		   				$img_data = array(	'carstock_id'   => $car_stockid,
		   									'user_id'   	=> $user_id,
											'receipt_url' 	=> $car_img_url
										 );
		   				$this->db->insert('mylane_carstock_receipt',$img_data);
				}
			}

	        return true; 	
	    }

		else
		{
			return false;
		}
					
		
   	}


   	public function insert_about_us(){

		$now = date('Y-m-d H:i:s');	

		$count_text = count($this->input->post('about_title'));

   		for($i=0;$i<$count_text;$i++)
   		{	

			$data = array( 	'about_title'   => $this->input->post('about_title')[$i],	
							'about_text'    => $this->input->post('about_text')[$i],											
							'created_at'	=> $now
							);

		 	$query = $this->db->insert('about_us',$data);

	 	}

	 	if($query == true)
	    {						
	        return true; 	
	    }

		else
		{
			return false;
		}
					
		
	}

	public function newsfees_insert()
    {
    	
    	$now = date('Y-m-d H:i:s');  

    	$img =  $_FILES['images']['name'];	
		$file =  $_FILES['images']['tmp_name'];

		$image = \Cloudinary\Uploader::upload($file); //cloudnary image integrated 
		$img_url =$image['secure_url'];

		$news_data = array(
						'title'    		=> $this->input->post('title'),
						'description'   => $this->input->post('Description'),
						'image' 	 	=> $img_url,
						'created_at'	=> $now
					);

		$insert_stock = $this->db->insert('news_feed',$news_data);
		if($insert_stock == true)
	    {						
	        return true; 	
	    }

		else
		{
			return false;
		}
	 	
    }

    // add autoparts here
    public function insert_autoparts()
    {
   		$now = date('Y-m-d H:i:s');  
    	
		$stock_data = array('user_id'    	=> $this->input->post('admin_id'),
						'car_type'    		=> $this->input->post('carpart_type'),						
						'available_from'    => $this->input->post('available_partfrom'),
						'available_to'    	=> $this->input->post('available_partto'),
						'car_type'    		=> $this->input->post('carpart_type'),
						'car_year' 	 	    => $this->input->post('part_years'),
						'car_brand' 	 	=> $this->input->post('part_brand'),
						'car_model'  		=> $this->input->post('part_model'),
						'car_trim'  		=> $this->input->post('part_trim'),
						'car_mileage' 	 	=> $this->input->post('part_mileage'),
						'car_location'    	=> $this->input->post('part_location'),						
						'admin_comments' 	=> $this->input->post('part_Message'),
						'Delivery_City' 	=> $this->input->post('part_Delivery_City'),
						'country' 	 		=> $this->input->post('part_country'),
						'part_price' 	 	=> $this->input->post('part_price'),
						'clearing_cost' 	=> $this->input->post('part_clearing_cost'),					
						'created_at'		=> $now
					);

				$insert_part = $this->autopartdb->insert('car_details',$stock_data);


				if($insert_part == true)	
				{
					$car_id = $this->autopartdb->insert_id();
					

					$whole_car_images = array();
					
					// $count = count($_FILES['engine_images']['name']);

					$car_image_path = "./assets/img/test_images/";
					
					if (isset($_FILES['engine_images']) && !empty($_FILES['engine_images']["name"]))
					{
							$img       =  $_FILES['engine_images']['name'];
						  	$file_temp =  $_FILES['engine_images']['tmp_name'];
						   	
						   	$cloudinary_response = $this->single_img_upload('engine_images', $car_image_path);
						   	$sideViewRightImage_url = $this->upload->file_name;

		   					$sideViewRightImage = array(
		   									'car_id' => $car_id,
											'main_cat' => 'engine',
											'sub_cat' => $this->input->post('Sub_Category'),
											'image1' => $sideViewRightImage_url,
											'created_at' => date("Y-m-d H:i:s")
							);

		   					array_push($whole_car_images, $sideViewRightImage);
		   					// $this->autopartdb->insert('car_parts', $sideViewRightImage);
					}

					if (isset($_FILES['Transmission_images']) && !empty($_FILES['Transmission_images']["name"]))
					{
							$img       =  $_FILES['Transmission_images']['name'];
						  	$file_temp =  $_FILES['Transmission_images']['tmp_name'];
						   	
						   	$cloudinary_response = $this->single_img_upload('Transmission_images', $car_image_path);
						   	$sideViewRightImage_url = $this->upload->file_name;

		   					$engineImage = array(
		   									'car_id' => $car_id,
											'main_cat' => 'transmission',
											'sub_cat' => $this->input->post('Transmission_type'),
											'image1' => $sideViewRightImage_url,
											'created_at' => date("Y-m-d H:i:s")
							);

		   					array_push($whole_car_images, $engineImage);		   					
					}

					if (isset($_FILES['Interior_images']) && !empty($_FILES['Interior_images']["name"]))
					{
							$img       =  $_FILES['Interior_images']['name'];
						  	$file_temp =  $_FILES['Interior_images']['tmp_name'];
						   	
						   	$cloudinary_response = $this->single_img_upload('Interior_images', $car_image_path);
						   	$sideViewRightImage_url = $this->upload->file_name;

		   					$TransmissionImage = array(
		   									'car_id' => $car_id,
											'main_cat' => 'interior',
											'sub_cat' => $this->input->post('Interior_type'),
											'image1' => $sideViewRightImage_url,
											'created_at' => date("Y-m-d H:i:s")
							);

		   					array_push($whole_car_images, $TransmissionImage);		   					
					}

					if (isset($_FILES['Exterior_images']) && !empty($_FILES['Exterior_images']["name"]))
					{
							$img       =  $_FILES['Exterior_images']['name'];
						  	$file_temp =  $_FILES['Exterior_images']['tmp_name'];
						   	
						   	$cloudinary_response = $this->single_img_upload('Exterior_images', $car_image_path);
						   	$sideViewRightImage_url = $this->upload->file_name;

		   					$TransmissionImage = array(
		   									'car_id' => $car_id,
											'main_cat' => 'exterior',
											'sub_cat' => $this->input->post('Exterior_type'),
											'image1' => $sideViewRightImage_url,
											'created_at' => date("Y-m-d H:i:s")
							);

		   					array_push($whole_car_images, $TransmissionImage);		   					
					}

					if (isset($_FILES['Electricals_images']) && !empty($_FILES['Electricals_images']["name"]))
					{
							$img       =  $_FILES['Electricals_images']['name'];
						  	$file_temp =  $_FILES['Electricals_images']['tmp_name'];
						   	
						   	$cloudinary_response = $this->single_img_upload('Electricals_images', $car_image_path);
						   	$sideViewRightImage_url = $this->upload->file_name;

		   					$TransmissionImage = array(
		   									'car_id' => $car_id,
											'main_cat' => 'electricals',
											'sub_cat' => $this->input->post('Electricals_type'),
											'image1' => $sideViewRightImage_url,
											'created_at' => date("Y-m-d H:i:s")
							);

		   					array_push($whole_car_images, $TransmissionImage);		   					
					}

					if (isset($_FILES['Rims_images']) && !empty($_FILES['Rims_images']["name"]))
					{
							$img       =  $_FILES['Rims_images']['name'];
						  	$file_temp =  $_FILES['Rims_images']['tmp_name'];
						   	
						   	$cloudinary_response = $this->single_img_upload('Rims_images', $car_image_path);
						   	$sideViewRightImage_url = $this->upload->file_name;

		   					$TransmissionImage = array(
		   									'car_id' => $car_id,
											'main_cat' => 'rim/wheel/brakes',
											'sub_cat' => $this->input->post('Rims_type'),
											'image1' => $sideViewRightImage_url,
											'created_at' => date("Y-m-d H:i:s")
							);

		   					array_push($whole_car_images, $TransmissionImage);		   					
					}

					if (isset($_FILES['other_images']) && !empty($_FILES['other_images']["name"]))
					{
							$img       =  $_FILES['other_images']['name'];
						  	$file_temp =  $_FILES['other_images']['tmp_name'];
						   	
						   	$cloudinary_response = $this->single_img_upload('other_images', $car_image_path);
						   	$sideViewRightImage_url = $this->upload->file_name;

		   					$TransmissionImage = array(
		   									'car_id' => $car_id,
											'main_cat' => 'other',
											'sub_cat' => $this->input->post('other_type'),
											'image1' => $sideViewRightImage_url,
											'created_at' => date("Y-m-d H:i:s")
							);

		   					array_push($whole_car_images, $TransmissionImage);		   					
					}


					
					if(count($whole_car_images) > 0)
					{
						if($this->autopartdb->insert_batch('car_parts',$whole_car_images))
						{
							return true;

						}else{

							return false;
						}
					}
				}			

     	 		else{
						return false;
					}	
	 	
    }

    public function single_img_upload($image_name, $image_path)
	{
		$this->load->library('upload');

		if (isset($_FILES[$image_name]) && !empty($_FILES[$image_name])) {
			if (!is_dir($image_path)) {
				mkdir($image_path, 777, TRUE);
			}

			if ($_FILES[$image_name]['error'] != 4) {
				//Image file configurations
				$config['upload_path'] = $image_path;
				$config['allowed_types'] = '*';
				$config['max_size'] = 0;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($image_name)) {
					//if files not uploaded
					return $this->upload->display_errors();
					//echo $this->upload->file_name;
				} else {
					return $this->upload->data();
					// return true;
				}
			}
		}
	}
    public function multiple_img_upload($image_name, $image_path)
	{
		$this->load->library('upload');

		if (isset($_FILES[$image_name]) && !empty($_FILES[$image_name])) {
			if ($_FILES[$image_name]['error'] != 4) {
				$filesCount = count($_FILES[$image_name]['name']);

				for ($i = 0; $i < $filesCount; $i++) {
					$_FILES['multiple_image']['name'] = $_FILES[$image_name]['name'][$i];
					$_FILES['multiple_image']['type'] = $_FILES[$image_name]['type'][$i];
					$_FILES['multiple_image']['tmp_name'] = $_FILES[$image_name]['tmp_name'][$i];
					$_FILES['multiple_image']['error'] = $_FILES[$image_name]['error'][$i];
					$_FILES['multiple_image']['size'] = $_FILES[$image_name]['size'][$i];

					if (!is_dir($image_path)) {
						mkdir($image_path, 777, TRUE);
					}

					$config['upload_path'] = $image_path;
					$config['allowed_types'] = 'jpg|jpeg|png|gif';

					$config['file_name'] = $_FILES["multiple_image"]['name'];

					$this->load->library('upload', $config);

					$this->upload->initialize($config);

					if ($this->upload->do_upload('multiple_image')) {

						$fileData[] = $this->upload->data();

						//$uploadData[$i]['image'] = $fileData['file_name'];

					} else {

						//$error = array('msg' => 'Error in uploading file');
						//$json_error = json_encode($error);
						return $this->upload->display_errors();
						//echo $this->upload->file_name;
					}
				}

				if (!empty($fileData)) {
					//Insert image information into the database
					return $fileData;
				}

			}
		}
	}

	public function update_car_stock()
    {
    	
    	$now = date('Y-m-d H:i:s');  
    	$car_stockid  = $this->input->post('car_id');

		$stock_update_data = array('admin_id'    	=> $this->input->post('admin_id'),
						'available_from'    => $this->input->post('available_from'),
						'available_to'    	=> $this->input->post('available_to'),
						'car_type'    		=> $this->input->post('car_type'),
						'car_year' 	 	    => $this->input->post('car_years'),
						'car_brand' 	 	=> $this->input->post('car_brand'),
						'car_model'  		=> $this->input->post('car_model'),
						'car_trim'  		=> $this->input->post('car_trim'),
						'car_mileage' 	 	=> $this->input->post('car_mileage'),
						'car_location'    	=> $this->input->post('car_location'),						
						'vin_status'    	=> $this->input->post('vin_status'),
						'start_code' 	 	=> $this->input->post('start_code'),
						'engine' 	 		=> $this->input->post('engine_type'),
						'vehicle_class'  	=> $this->input->post('vehicle_class'),
						'transmission' 	 	=> $this->input->post('transmission'),
						'pasenger_door'  	=> $this->input->post('Passenger_Door'),
						'manufactured' 	 	=> $this->input->post('Manufacture'),
						'ac_condition'    	=> $this->input->post('ac_condition'),
						'interior_color'    => $this->input->post('Interior_color'),
						'exterior_color' 	=> $this->input->post('Exterior_color'),
						'car_keys' 	 		=> $this->input->post('car_keys'),
						'car_mpg' 	 		=> $this->input->post('car_mpg'),
						'Vehicle_Stock' 	=> $this->input->post('Vehicle_Stock'),
						'Fuel_type' 	 	=> $this->input->post('Fuel_type'),
						'Drive_type' 	 	=> $this->input->post('Drive_type'),
						'Message' 	 		=> $this->input->post('Message'),
						'Delivery_City' 	=> $this->input->post('Delivery_City'),
						'primary_damage'  	=> $this->input->post('primary_damage'),
						'secondary_damage' 	=> $this->input->post('secondary_damage'),
						'dealer_info' 	 	=> $this->input->post('dealer_info'),
						'delivery_estimate' => $this->input->post('delivery_estimate'),
						'buyer_code'  		=> $this->input->post('buyer_code'),
						'description'  		=> $this->input->post('dealer_info'),
						'country' 	 		=> $this->input->post('country'),
						'price' 	 		=> $this->input->post('price'),
						'clearing_cost' 	=> $this->input->post('clearing_cost'),
						'selling_price' 	=> $this->input->post('selling_price'),
						'created_at'		=> $now
					);
				
				return  $this->db->where('carstock_id', $car_stockid)->update('admin_car_stock', $stock_update_data);
	 	
    }

   	
   	public function agent_car_upload()
    {
    	
    	$cus_order_id = $this->input->post('cus_order_id');

    	$now = date('Y-m-d H:i:s');  

    	// video upload by cloudnary
    	if($_FILES['car_videos']['size'] != 0 )
		{
    	 	$video =  $_FILES['car_videos']['name'];
			$video_file_temp =  $_FILES['car_videos']['tmp_name'];
					     
			$video = \Cloudinary\Uploader::upload($video_file_temp,array("resource_type" => "video"));
			$video_url = $video['secure_url'];
		}
		else
		{
			$video_url = " ";
		}

		$stock_data = array('agent_cus_id'  => $this->input->post('cus_id'),
						'order_ticket'    	=> $this->input->post('order_ticket'),
						'admin_id'    		=> $this->input->post('admin_id'),
						'user_type'    		=> 'super admin',
						'category'    		=> $this->input->post('category'),
						'car_number'    	=> $this->input->post('car_number'),
						'Splash_Text'    	=> $this->input->post('Splash_Text'),
						'available_from'    => $this->input->post('available_from'),
						'available_to'    	=> $this->input->post('available_to'),
						'car_type'    		=> $this->input->post('car_type'),
						'car_year' 	 	    => $this->input->post('car_years'),
						'car_brand' 	 	=> $this->input->post('car_brand'),
						'car_model'  		=> $this->input->post('car_model'),
						'car_trim'  		=> $this->input->post('car_trim'),
						'car_mileage' 	 	=> $this->input->post('car_mileage'),
						'car_location'    	=> $this->input->post('car_location'),	
						'car_condition'    	=> $this->input->post('car_condition'),						
						'vin_status'    	=> $this->input->post('vin_status'),
						'start_code' 	 	=> $this->input->post('start_code'),
						'engine' 	 		=> $this->input->post('engine_type'),
						'vehicle_class'  	=> $this->input->post('vehicle_class'),
						'transmission' 	 	=> $this->input->post('transmission'),
						'pasenger_door'  	=> $this->input->post('Passenger_Door'),
						'manufactured' 	 	=> $this->input->post('Manufacture'),
						'ac_condition'    	=> $this->input->post('ac_condition'),
						'interior_color'    => $this->input->post('Interior_color'),
						'exterior_color' 	=> $this->input->post('Exterior_color'),
						'car_keys' 	 		=> $this->input->post('car_keys'),
						'car_mpg' 	 		=> $this->input->post('car_mpg'),
						'Vehicle_Stock' 	=> $this->input->post('Vehicle_Stock'),
						'Fuel_type' 	 	=> $this->input->post('Fuel_type'),
						'Drive_type' 	 	=> $this->input->post('Drive_type'),
						'Message' 	 		=> $this->input->post('Message'),
						'Delivery_City' 	=> $this->input->post('Delivery_City'),
						'primary_damage'  	=> $this->input->post('primary_damage'),
						'secondary_damage' 	=> $this->input->post('secondary_damage'),
						'dealer_info' 	 	=> $this->input->post('dealer_info'),
						'delivery_estimate' => $this->input->post('delivery_estimate'),
						'buyer_code'  		=> $this->input->post('buyer_code'),
						'description'  		=> $this->input->post('dealer_info'),
						'country' 	 		=> $this->input->post('country'),
						'price' 	 		=> $this->input->post('price'),
						'clearing_cost' 	=> $this->input->post('clearing_cost'),
						'repair_cost' 	 	=> $this->input->post('repair_cost'),
						'video_name' 	 	=> $video_url,
						'created_at'		=> $now
					);

				$update_car_status = array('car_status' => 'approved');
				$update_status = $this->db->where('cus_order_id', $cus_order_id)->update('customer_order_details', $update_car_status);  

				$insert_stock = $this->db->insert('agent_car_stock',$stock_data);


				if($insert_stock == true)	
				{
					$carstock_id = $this->db->insert_id();
					
					$count = count($_FILES['car_images']['name']);

					for($i = 0; $i < $count; $i++) {
					   
					  	$img       =  $_FILES['car_images']['name'][$i];
					  	$file_temp =  $_FILES['car_images']['tmp_name'][$i];
					     
					   	$image = \Cloudinary\Uploader::upload($file_temp);
					   	$car_img_url = $image['secure_url'];

	   					$img_data = array(	'carstock_id' 		=> $carstock_id,
											'admincar_stockimg' =>  $car_img_url
									 	);
	   					$this->db->insert('agent_car_stock_image',$img_data);
					}
					
					return true;

				}			

     	 		else{
						return false;
					}	
	 	
    }

    public function get_agent_car_img($carstock_id)
    {
    	$this->db->select('*');  
        $this->db->from('agent_car_stock_image'); 
        $this->db->where('carstock_id',$carstock_id);  
        $data = $this->db->get()->result();

    	return  $data;
    }
    // update agent car 

    public function update_agent_car_upload()
    {
    	   	

    	$carstock_id = $this->input->post('carstock_id');
    	$order_ticket = $this->input->post('order_ticket');

    	$now = date('Y-m-d H:i:s');  
    	
		$stock_data = array('agent_cus_id'  => $this->input->post('cus_id'),
						'order_ticket'    	=> $this->input->post('order_ticket'),
						'admin_id'    		=> $this->input->post('admin_id'),
						'user_type'    		=> 'super admin',
						'category'    		=> $this->input->post('category'),
						'car_number'    	=> $this->input->post('car_number'),
						'Splash_Text'    	=> $this->input->post('Splash_Text'),
						'available_from'    => $this->input->post('available_from'),
						'available_to'    	=> $this->input->post('available_to'),
						'car_type'    		=> $this->input->post('car_type'),
						'car_year' 	 	    => $this->input->post('car_years'),
						'car_brand' 	 	=> $this->input->post('car_brand'),
						'car_model'  		=> $this->input->post('car_model'),
						'car_trim'  		=> $this->input->post('car_trim'),
						'car_mileage' 	 	=> $this->input->post('car_mileage'),
						'car_location'    	=> $this->input->post('car_location'),	
						'car_condition'    	=> $this->input->post('car_condition'),						
						'vin_status'    	=> $this->input->post('vin_status'),
						'start_code' 	 	=> $this->input->post('start_code'),
						'engine' 	 		=> $this->input->post('engine_type'),
						'vehicle_class'  	=> $this->input->post('vehicle_class'),
						'transmission' 	 	=> $this->input->post('transmission'),
						'pasenger_door'  	=> $this->input->post('Passenger_Door'),
						'manufactured' 	 	=> $this->input->post('Manufacture'),
						'ac_condition'    	=> $this->input->post('ac_condition'),
						'interior_color'    => $this->input->post('Interior_color'),
						'exterior_color' 	=> $this->input->post('Exterior_color'),
						'car_keys' 	 		=> $this->input->post('car_keys'),
						'car_mpg' 	 		=> $this->input->post('car_mpg'),
						'Vehicle_Stock' 	=> $this->input->post('Vehicle_Stock'),
						'Fuel_type' 	 	=> $this->input->post('Fuel_type'),
						'Drive_type' 	 	=> $this->input->post('Drive_type'),
						'Message' 	 		=> $this->input->post('Message'),
						'Delivery_City' 	=> $this->input->post('Delivery_City'),
						'primary_damage'  	=> $this->input->post('primary_damage'),
						'secondary_damage' 	=> $this->input->post('secondary_damage'),
						'dealer_info' 	 	=> $this->input->post('dealer_info'),
						'delivery_estimate' => $this->input->post('delivery_estimate'),
						'buyer_code'  		=> $this->input->post('buyer_code'),
						'description'  		=> $this->input->post('dealer_info'),
						'country' 	 		=> $this->input->post('country'),
						'price' 	 		=> $this->input->post('price'),
						'clearing_cost' 	=> $this->input->post('clearing_cost'),
						'repair_cost' 	 	=> $this->input->post('repair_cost'),						
						'created_at'		=> $now
					);


				$update_car_stock = $this->db->where('carstock_id', $carstock_id)->update('agent_car_stock', $stock_data);
				
				if($update_car_stock == true)	
				{		
										
					if(in_array("", $_FILES['car_images']['name']))
					{
							 
					}
					else
					{
						$count = count($_FILES['car_images']['name']);

						for($i = 0; $i < $count; $i++) {
						   
						  	$img       =  $_FILES['car_images']['name'][$i];
						  	$file_temp =  $_FILES['car_images']['tmp_name'][$i];
						     
						   	$image = \Cloudinary\Uploader::upload($file_temp);
						   	$car_img_url = $image['secure_url'];

		   					$img_data = array(	'carstock_id' 		=> $carstock_id,
												'admincar_stockimg' =>  $car_img_url
										 	);
		   					$this->db->insert('agent_car_stock_image',$img_data);
						}
					}
					
				}			

				return true;
				 	
    }


  public function insert_agent_video()
   {
      	$now = date('Y-m-d H:i:s');

      	if($_FILES['agent_video']['size'] != 0 )
		{
    	 	$video =  $_FILES['agent_video']['name'];
			$video_file_temp =  $_FILES['agent_video']['tmp_name'];
					     
			$video = \Cloudinary\Uploader::upload($video_file_temp,array("resource_type" => "video"));
			$video_url = $video['secure_url'];
		}
		else
		{
			$video_url = " ";
		}
           
            $data =array('video_title'  => $this->input->post('video_title'),
                       	'video_url'    	=> $video_url,
                        'created_at'	=> $now
                      );

           
        $insert_video = $this->db->insert('upload_video',$data);

      	return true ;
    }


    public function insert_partners_details()
	   {
	    	$now = date('Y-m-d H:i:s');

	      $count_country = count($this->input->post('title'));

	        for($i=0;$i<$count_country;$i++)
	        {
	            $img       =  $_FILES['company_logo']['name'][$i];
	            $file_temp =  $_FILES['company_logo']['tmp_name'][$i];
	                     
	            $image = \Cloudinary\Uploader::upload($file_temp);
	            $car_img_url = $image['secure_url'];

	            $data =array('partner_name'   	=> $this->input->post('partner_name')[$i],
	                       'title'        		=> $this->input->post('title')[$i],	                       
	                       'business_logo_url'  => $car_img_url,
	                       'created_at'			=> $now
	                      );

	            $insert_del = $this->db->insert('business_partners',$data);
	        }

	    	return true ;
	        

	    }

	public function insert_common_agent_upload_car()
    {
    	
    	$now = date('Y-m-d H:i:s');  

    	// video upload by cloudnary
    	if($_FILES['car_videos']['size'] != 0 )
		{
    	 	$video =  $_FILES['car_videos']['name'];
			$video_file_temp =  $_FILES['car_videos']['tmp_name'];
					     
			$video = \Cloudinary\Uploader::upload($video_file_temp,array("resource_type" => "video"));
			$video_url = $video['secure_url'];
		}
		else
		{
			$video_url = " ";
		}

		$stock_data = array(					
						'admin_id'    		=> $this->input->post('admin_id'),
						'user_type'    		=> 'super admin',
						'category'    		=> $this->input->post('category'),
						'start_from'    	=> $this->input->post('start_from'),
						'end_to'  			=> $this->input->post('end_to'),
						'commision_country' => $this->input->post('commision_country'),
						'commision_value'  	=> $this->input->post('Commision_Value'),
						'commision_points'  => $this->input->post('Commision_Points'),
						'available_from'    => $this->input->post('available_from'),
						'available_to'    	=> $this->input->post('available_to'),
						'car_type'    		=> $this->input->post('car_type'),
						'car_year' 	 	    => $this->input->post('car_years'),
						'car_brand' 	 	=> $this->input->post('car_brand'),
						'car_model'  		=> $this->input->post('car_model'),
						'car_trim'  		=> $this->input->post('car_trim'),
						'car_mileage' 	 	=> $this->input->post('car_mileage'),
						'car_location'    	=> $this->input->post('car_location'),						
						'vin_status'    	=> $this->input->post('vin_status'),
						'start_code' 	 	=> $this->input->post('start_code'),
						'engine' 	 		=> $this->input->post('engine_type'),
						'vehicle_class'  	=> $this->input->post('vehicle_class'),
						'transmission' 	 	=> $this->input->post('transmission'),
						'pasenger_door'  	=> $this->input->post('Passenger_Door'),
						'manufactured' 	 	=> $this->input->post('Manufacture'),
						'ac_condition'    	=> $this->input->post('ac_condition'),
						'interior_color'    => $this->input->post('Interior_color'),
						'exterior_color' 	=> $this->input->post('Exterior_color'),
						'car_keys' 	 		=> $this->input->post('car_keys'),
						'car_mpg' 	 		=> $this->input->post('car_mpg'),
						'Vehicle_Stock' 	=> $this->input->post('Vehicle_Stock'),
						'Fuel_type' 	 	=> $this->input->post('Fuel_type'),
						'Drive_type' 	 	=> $this->input->post('Drive_type'),
						'Message' 	 		=> $this->input->post('Message'),
						'Delivery_City' 	=> $this->input->post('Delivery_City'),
						'primary_damage'  	=> $this->input->post('primary_damage'),
						'secondary_damage' 	=> $this->input->post('secondary_damage'),
						'dealer_info' 	 	=> $this->input->post('dealer_info'),
						'delivery_estimate' => $this->input->post('delivery_estimate'),
						'buyer_code'  		=> $this->input->post('buyer_code'),
						'description'  		=> $this->input->post('dealer_info'),
						'country' 	 		=> $this->input->post('country'),
						'price' 	 		=> $this->input->post('price'),
						'clearing_cost' 	=> $this->input->post('clearing_cost'),
						'repair_cost' 	 	=> $this->input->post('repair_cost'),
						'video_name' 	 	=> $video_url,
						'created_at'		=> $now
					);

				$insert_stock = $this->db->insert('common_agent_car',$stock_data);


				if($insert_stock == true)	
				{
					$carstock_id = $this->db->insert_id();
					
					$count = count($_FILES['car_images']['name']);


					for($i = 0; $i < $count; $i++) {
					   
					  $img       =  $_FILES['car_images']['name'][$i];
					  $file_temp =  $_FILES['car_images']['tmp_name'][$i];
					     
					   $image = \Cloudinary\Uploader::upload($file_temp);
					   $car_img_url = $image['secure_url'];

	   					$img_data = array(	'carstock_id' 		=> $carstock_id,
											'admincar_stockimg' =>  $car_img_url
									 );
	   					$this->db->insert('common_agent_car_image',$img_data);
					}
					
					return true;

				}			

     	 		else{
						return false;
					}	
	 	
    }


    public function edit_common_agent_list()
    {
    	
    	$now = date('Y-m-d H:i:s');  
    	$car_stockid  = $this->input->post('carstock_id');

		$stock_update_data = array('admin_id'    	=> $this->input->post('admin_id'),
						// 'user_type'    		=> 'super admin',
						// 'category'    		=> $this->input->post('category'),
						'available_from'    => $this->input->post('available_from'),
						'available_to'    	=> $this->input->post('available_to'),
						'car_type'    		=> $this->input->post('car_type'),
						'car_year' 	 	    => $this->input->post('car_years'),
						'car_brand' 	 	=> $this->input->post('car_brand'),
						'car_model'  		=> $this->input->post('car_model'),
						'car_trim'  		=> $this->input->post('car_trim'),
						'car_mileage' 	 	=> $this->input->post('car_mileage'),
						'car_location'    	=> $this->input->post('car_location'),						
						'vin_status'    	=> $this->input->post('vin_status'),
						'start_code' 	 	=> $this->input->post('start_code'),
						'engine' 	 		=> $this->input->post('engine_type'),
						'vehicle_class'  	=> $this->input->post('vehicle_class'),
						'transmission' 	 	=> $this->input->post('transmission'),
						'pasenger_door'  	=> $this->input->post('Passenger_Door'),
						'manufactured' 	 	=> $this->input->post('Manufacture'),
						'ac_condition'    	=> $this->input->post('ac_condition'),
						'interior_color'    => $this->input->post('Interior_color'),
						'exterior_color' 	=> $this->input->post('Exterior_color'),
						'car_keys' 	 		=> $this->input->post('car_keys'),
						'car_mpg' 	 		=> $this->input->post('car_mpg'),
						'Vehicle_Stock' 	=> $this->input->post('Vehicle_Stock'),
						'Fuel_type' 	 	=> $this->input->post('Fuel_type'),
						'Drive_type' 	 	=> $this->input->post('Drive_type'),
						'Message' 	 		=> $this->input->post('Message'),
						'Delivery_City' 	=> $this->input->post('Delivery_City'),
						'primary_damage'  	=> $this->input->post('primary_damage'),
						'secondary_damage' 	=> $this->input->post('secondary_damage'),
						'dealer_info' 	 	=> $this->input->post('dealer_info'),
						'delivery_estimate' => $this->input->post('delivery_estimate'),
						'buyer_code'  		=> $this->input->post('buyer_code'),
						'description'  		=> $this->input->post('dealer_info'),
						'country' 	 		=> $this->input->post('country'),
						'price' 	 		=> $this->input->post('price'),
						'clearing_cost' 	=> $this->input->post('clearing_cost'),
						'selling_price' 	=> $this->input->post('selling_price'),
						'created_at'		=> $now
					);
				
				return  $this->db->where('carstock_id', $car_stockid)->update('common_agent_car', $stock_update_data);
	 	
    }

    // upload car part_price

    public function carpart_upload()
    {    	   	

    	$now = date('Y-m-d H:i:s');  
    	$recoverable_part = $this->input->post('recoverable_parts');

		$stock_data = array(
						
						'available_from'    => $this->input->post('available_from'),
						'available_to'    	=> $this->input->post('available_to'),						
						'car_year' 	 	    => $this->input->post('car_years'),
						'car_brand' 	 	=> $this->input->post('car_brand'),
						'car_model'  		=> $this->input->post('car_model'),						
						'car_mileage' 	 	=> $this->input->post('car_mileage'),
						'car_location'    	=> $this->input->post('car_location'),										
						'vin_number'    	=> $this->input->post('vin_number'),						
						'primary_damage'  	=> $this->input->post('primary_damage'),
						'secondary_damage' 	=> $this->input->post('secondary_damage'),
						'recoverable_part' 	=> implode(',', $recoverable_part),
						'other_recoverable_part' 	=> $this->input->post('other_recoverable_parts'),
						'country' 			=> $this->input->post('country'),						
						'com_shipping_price'=> $this->input->post('complete_shipping_price'),
						'cus_shipping_price'=> $this->input->post('custom_shipping_price'),											
						'created_at'		=> $now
					);

				// $update_car_status = array('car_status' => 'approved');
				// $update_status = $this->db->where('cus_order_id', $cus_order_id)->update('customer_order_details', $update_car_status);  

				$insert_stock = $this->db->insert('carpart',$stock_data);


				if($insert_stock == true)	
				{
					$carpart_id = $this->db->insert_id();
					
					$count = count($_FILES['part_images']['name']);

					for($i = 0; $i < $count; $i++) {
					   
					  	$img       =  $_FILES['part_images']['name'][$i];
					  	$file_temp =  $_FILES['part_images']['tmp_name'][$i];
					     
					   	$image = \Cloudinary\Uploader::upload($file_temp);
					   	$car_img_url = $image['secure_url'];

	   					$img_data = array(	'car_part_id' => $carpart_id,
											'carpart_img' =>  $car_img_url
									 	);
	   					$this->db->insert('carpart_img',$img_data);
					}
					
					return true;

				}			

     	 		else{
						return false;
					}	
	 	
    }

      public function update_carpart()
    {    	   	

    	$now = date('Y-m-d H:i:s');  
    	$recoverable_part = $this->input->post('recoverable_parts');
    	$carpart_id = $this->input->post('carpart_id'); 

		$update_data = array(
						
						'available_from'    => $this->input->post('available_from'),
						'available_to'    	=> $this->input->post('available_to'),						
						'car_year' 	 	    => $this->input->post('car_years'),
						'car_brand' 	 	=> $this->input->post('car_brand'),
						'car_model'  		=> $this->input->post('car_model'),						
						'car_mileage' 	 	=> $this->input->post('car_mileage'),
						'car_location'    	=> $this->input->post('car_location'),										
						'vin_number'    	=> $this->input->post('vin_number'),						
						'primary_damage'  	=> $this->input->post('primary_damage'),
						'secondary_damage' 	=> $this->input->post('secondary_damage'),
						'recoverable_part' 	=> implode(',', $recoverable_part),
						'other_recoverable_part' 	=> $this->input->post('other_recoverable_parts'),
						'country' 			=> $this->input->post('country'),						
						'com_shipping_price'=> $this->input->post('complete_shipping_price'),
						'cus_shipping_price'=> $this->input->post('custom_shipping_price'),											
						'created_at'		=> $now
					);

				
				$update_status = $this->db->where('car_part_id', $carpart_id)->update('carpart', $update_data);  

									
				return true;

						

     	 		
    }


}