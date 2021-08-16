<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		
		parent:: __construct();

		$this->load->library('session'); 
		$this->load->library('cloudinarylib');
		$this->load->helper(array('form','url','date'));		 
		$this->load->database();
		$this->load->model('home_model');
		
	}

	public function main()
	{	

		$data['page_name'] = 'home';

		$data['car_detail'] =   $this->home_model->getadmin_car_infomation($this->country);	

		$data['new_car_detail'] =   $this->home_model->newly_added_car($this->country);	
		
		$data['news_feed'] =  $this->home_model->get_news_feeds();	

		$this->load->view('home/index',$data);
	}

	public function change_country($country_name)
	{

		$this->country = $country_name;

		$this->session->set_userdata('country_name', $this->country);

		redirect('home/main/country/'.$this->country,'refresh');

	}


	
// country select option filter 
	// public function country_filter($country_name = null)
	// {	
	// 	if($country_name == null)
	// 	{			
	// 		$this->load->view('errors/html/error_pagenot_found');
	// 	}
	// 	else
	// 	{

	// 		$country_name = $country_name;

	// 		$this->session->set_userdata('select_country_name', $country_name);

	// 		$country_name=urldecode($country_name); //remove white space between two words
			
	// 		$this->db->select('*');
	//         $this->db->from('admin_car_stock');  
	//         $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = admin_car_stock.carstock_id');  
	//         $this->db->group_by('admin_car_stock.carstock_id'); 
	//         $this->db->where('country', $country_name);
	//         $this->db->where('active = 1');

	//         $query = $this->db->get()->result();
	//         $count_query = count($query);
	       	
	//        	// print_r($query);
	//        	// echo $this->db->last_query(); 
            

 //        	if($count_query == 0 )
	// 		{
					
	// 			echo '<div class="col-lg-12 col-md-12 col-xs-12 wow zoomInUp" data-wow-delay="0.5s" style=" visibility: visible; animation-delay: 0.5s; animation-name: zoomInUp;"> 
	// 					<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry No Data Here!</strong>  Please Choose other option. </div>
	// 				</div>';
	// 		}

	// 	        if($query == true)
	// 			{		 	
					
	// 				foreach ($query as $car_details) 
	// 				{
	// 					if($car_details->car_status != 'Pending')
	// 					{

	// 						echo '  
 //                    			<div class="item-carousel">
 //                      				<div class="product" >
                        
 //                          				<a href="#"><img style="height:185px;" src="'.$car_details->admincar_stockimg.'" alt=""></a>
                         
 //                          			<div class="product-description">
  
 //                            					<h5 class="product-name">
 //                              					<a href="#">
 //                              					'.$car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model.' </a>
 //                            					</h5>
  
	// 			                            <div class="pricing-area">
	// 			                              <div class="product-price">';
				                              
				                             
	// 		                                   if($car_details->price != null)
	// 		                                    { 
	// 		                                      $price = $car_details->price;
	// 		                                      $words = preg_replace('/\d+/', '', $price );
	// 		                                      $price_numbers = preg_replace('/[^0-9]/', '', $price);

	// 		                                       if($price_numbers == 0 )
	// 		                                        {
	// 		                                          echo " ";
	// 		                                        }
	// 		                                        else
	// 		                                         {
	// 		                                            echo $words.' '.number_format($price_numbers);
	// 		                                          }
	// 		                                    }  
			                                
				                    
	// 			                  echo
	// 			                         '</div>
	// 			                            </div>

	// 		                            <div class="model-loc">
	// 		                                <ul>
	// 		                                  <li><span>Mileage</span> '.$car_details->car_mileage.'</li>
	// 		                                  <li><span>Location</span> '.$car_details->car_location.'</li>
	// 		                                  <li style="text-align:center;"><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;">Price Includes Shipping to '.$car_details->country.'</span></li>
			                                 
	// 		                                </ul>
	// 		                            </div>
                            
 //                          			</div>

	// 		                            <div class="product-description" style="background-color:#d2ddff;">
	// 		                              <div class="model-loc">
	// 		                                <ul>
	// 		                                  <li style="text-align:center;"><span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;"> '.$car_details->user_view_count.' Interested Buyers</span></li>
	// 		                                  <li style="text-align:center;"><span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;"><strong>Available:</strong> November15th to Dec 16th</span></li>
	// 		                                </ul>
	// 		                              </div>
	// 		                              <div class="model-info text-center">
	// 		                                <a style="color: #333;font-weight: bold;" href="'.base_url('Home/get_car_details/'.$car_details->carstock_id).'">View Details</a>
	// 		                              </div>
	// 		                            </div>
	// 		                         </div>
 //                        			</div>' ;

						
	// 					}
						
	// 				}
	// 			}
	// 	}
	// }
	

	

	public function car_brand_filter()
	{
		$data['page_name'] = '';

		$car_year  = $this->input->post('car_years');
		$car_brand = $this->input->post('car_brand');
		$car_model = $this->input->post('car_model');

		$ip_country =  $this->session->userdata('ip_country'); //filter by ip address fetch country name
 

		if($car_year != null)
		{
			$this->db->select('*');
            $this->db->from('admin_car_stock');  
            $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = admin_car_stock.carstock_id');  
            $this->db->group_by('admin_car_stock.carstock_id');
            $this->db->order_by('admin_car_stock.carstock_id',"desc"); 
            $this->db->where('car_year', $car_year);
            $this->db->where('country', $ip_country);
            $this->db->where('active = 1');

            $data['car_detail'] = $this->db->get()->result();

        	$data['news_feed'] 	=  $this->home_model->get_news_feeds();

		}
		else if(($car_year != null) && ($car_brand != null))
		{
			$this->db->select('*');
            $this->db->from('admin_car_stock');  
            $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = admin_car_stock.carstock_id');  
            $this->db->group_by('admin_car_stock.carstock_id'); 
            $this->db->where('car_year', $car_year);
            $this->db->where('car_brand', $car_brand);
            $this->db->order_by('admin_car_stock.carstock_id',"desc");
            $this->db->where('Active = 1');

            $data['car_detail'] = $this->db->get()->result();

        	$data['news_feed'] 	=  $this->home_model->get_news_feeds();

		}
		else if(($car_year != null) && ($car_brand != null) && ($car_model != null))
		{
			$this->db->select('*');
            $this->db->from('admin_car_stock');  
            $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = admin_car_stock.carstock_id');  
            $this->db->group_by('admin_car_stock.carstock_id'); 
            $this->db->where('car_year', $car_year);
            $this->db->where('car_brand', $car_brand);
            $this->db->where('car_model', $car_model);
            $this->db->order_by('admin_car_stock.carstock_id',"desc");
            $this->db->where('Active = 1');

            $data['car_detail'] = $this->db->get()->result();

        	$data['news_feed'] 	=  $this->home_model->get_news_feeds();

		}

		
		$this->load->view('home/browse',$data);
	}

	public function car_category($category)
	{
			$data['page_name'] = '';

		 	$this->db->select('*');
            $this->db->from('admin_car_stock');  
            $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = admin_car_stock.carstock_id');  
            $this->db->group_by('admin_car_stock.carstock_id'); 
            $this->db->where('category', $category);
            $this->db->where('country', $this->country);
            $this->db->where('active = 1');

        	$data['car_detail'] = $this->db->get()->result();

        	$data['news_feed'] 	=  $this->home_model->get_news_feeds();


		// print_r($this->db->last_query());

			$this->load->view('home/browse',$data);
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

			$query = "select * FROM admin_car_stock WHERE carstock_id = '$carstock_id' ";
			
			$this->db->select('*');
	        $this->db->from('admin_car_stock');  
	        $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = admin_car_stock.carstock_id'); 
	        $this->db->where('admin_car_stock.carstock_id',$carstock_id);     

	        $data['car_img'] = $this->db->get()->result();

	        $data['car_details'] = $this->db->query($query)->row();

	      	$this->load->view('home/view_details',$data);


      	}
	}	

	public function user_enquiry()
	{
		$response = array();

           if($this->home_model->insert_user_enquiry())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}


	public function buy_now($carstock_id = null)
	{
	

		$data['page_name'] = '';

		$mylane_query = "select * FROM mylane_carstock WHERE carstock_id = '$carstock_id' ";
		$query = "select * FROM admin_car_stock WHERE carstock_id = '$carstock_id' ";

		$data['country'] =   $this->home_model->get_country_name();


		$data['car_details']  = $this->db->query($query)->row();
	    $data['user_details'] = $this->db->query($mylane_query)->row();

	    	$this->db->select('*');
	        $this->db->from('admin_car_stock');  
	        $this->db->join('admin_car_stock_image', 'admin_car_stock_image.carstock_id = admin_car_stock.carstock_id'); 
	        $this->db->where('admin_car_stock.carstock_id',$carstock_id); 
	        $this->db->group_by('admin_car_stock.carstock_id'); 

	    $data['car_img']  = $this->db->get()->row();


		$this->load->view('home/buy_now',$data);
	}

	public function about_us()
	{
		$data['page_name'] = 'about_us';

		$this->get_news_feeds();	
		$data['news_feed'] =  $this->get_news_feeds();	

		$this->db->select('*');
	    $this->db->from('about_us');
	        
	    $data['about_us_detail'] = $this->db->get()->result();
		

		$this->load->view('home/about_us',$data);
	}

	public function get_news_feeds()
   	{
   		$this->db->select('*');
        $this->db->from('news_feed');  
        $this->db->where('Active = 1'); 

        $data['news_feed'] = $this->db->get()->result();
   		return $data['news_feed'];
   	}


	public function insert_mylanedata()
	{
		$now = date('Y-m-d H:i:s');
		$carstock_id = $this->input->post('car_id');
		 
		$car_data = array('user_id'			=> $this->input->post('user_id'),
						'carstock_id'   	=> $this->input->post('car_id'),						
						'transaction_code'  => $this->input->post('t_code'),						
						'first_time'		=> 0,
						'created_at'		=> $now
					);
		
		$insert_stock = $this->db->insert('mylane_carstock',$car_data);

		if($insert_stock == true)
			{		 	
				$response['status'] = 'success'; 
				$this->session->set_userdata('carstock_id', $carstock_id);			
			}
		else 
			{	
				$response['status'] = 'failed';
			}

		echo json_encode($response);

	}

	public function how_it_works()
	{
		$data['page_name'] = 'how_it_works';
		
		$this->load->view('home/how_it_work',$data);
	}

	public function agent_list()
	{
		$data['page_name'] = 'agent_list';

		$this->db->select('*');
	    $this->db->from('admin_user');
	    $this->db->where('Active = 1');
	    $this->db->where('user_type', 'agent');
	        
	    $data['user_detail'] = $this->db->get()->result();

		
		$this->load->view('home/agent_list',$data);
	}

	public function direct_buylane()
	{
		$data['page_name'] = 'direct_buylane';

		$this->get_news_feeds();	
		$data['news_feed'] =  $this->get_news_feeds();	
		
		$this->load->view('home/direct_buylane',$data);
	}

	public function customer_direct_buy()
	{
		
		$response = array();

		if($this->home_model->direct_buy())
			{		 	
				$response['status'] = 'success'; 			
			}
		else 
			{	
				$response['status'] = 'failed';
			}

		echo json_encode($response);
		
	}

	public function receipt_img_url($carstock_id = null)
	{
		if($carstock_id == null)
		{
			$this->load->view('errors/html/error_pagenot_found');
		}
		else
		{
			$user_id = $this->session->userdata('user_id');

			$query = "SELECT mylane_carstock_receipt.*, CONCAT('[',GROUP_CONCAT(json_object('url',receipt_url)),']') as receipturl FROM mylane_carstock_receipt  WHERE mylane_carstock_receipt.carstock_id='$carstock_id' and mylane_carstock_receipt.user_id='$user_id'  GROUP BY carstock_id" ;

	       	$data['receipt'] = $this->db->query($query)->result();
	        
			$this->load->view('home/view_receipt_model', $data);
		}
	}

	public function extend_code_modal($carstock_id = null)
	{
		if($carstock_id == null)
		{
			$this->load->view('errors/html/error_pagenot_found');
		}
		else
		{
			$user_id = $this->session->userdata('user_id');

			$this->db->select('*');
	        $this->db->from('mylane_carstock');	       	       
	        $this->db->where('mylane_carstock.user_id',$user_id);
	        $this->db->where('mylane_carstock.carstock_id', $carstock_id );
	        // $this->db->where('Active = 1');
	        $data['code_detail'] = $this->db->get()->result();

			$this->load->view('home/view_extend_code', $data);
		}
	}


	public function logout()
	{
		$this->session->sess_destroy();
       	redirect('home/index');
	}

}