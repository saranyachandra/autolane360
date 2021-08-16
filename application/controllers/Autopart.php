<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autopart extends CI_Controller {

	public function __construct()
	{
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		
		parent:: __construct();

		$this->load->library('session'); 
		$this->load->library('cloudinarylib');
		$this->load->helper(array('form','url','date'));		 
		$this->load->database();
    	
		$this->load->model('autopart_model');

		// if(!$this->session->userdata('admin_id'))
		// {
		// 	redirect('admin_login/');
		// } 

	}

	public function autopart_register()
	{
		$this->load->view('autopart/autopart_register');
	}

	public function insert_register_info()
	{
		$response = array();

           if($this->autopart_model->register())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}

	public function business_interest()
	{
		$cus_id = $this->session->userdata('cus_id');

		if(!$cus_id)
		{
			redirect('agent/login');
		}
		else{
			$this->load->view('autopart/business_interest');
		}

		
	}

	public function insert_interest()
	{
		$response = array();

           if($this->autopart_model->insert_business_interest())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}

	public function business_profile()
	{
		$this->load->view('autopart/business_profile');
	}

	public function business_member_invoice()
	{
		$this->load->view('autopart/business_member_invoice');
	}

	public function car_listing_page()
	{
		$this->db->select('*');
        $this->db->from('carpart');  
        $this->db->join('carpart_img', 'carpart_img.car_part_id = carpart.car_part_id'); 
        $this->db->group_by('carpart.car_part_id'); 

        $data['car_detail'] = $this->db->get()->result();
       
		$this->load->view('autopart/car_listing_page',$data);
	}

	public function filter_brand_name($brand_name)
	{
		$car_brand = $brand_name;

		$this->db->select('*');
        $this->db->from('carpart');  
        $this->db->join('carpart_img', 'carpart_img.car_part_id = carpart.car_part_id'); 
        $this->db->where('carpart.car_brand',$car_brand);
        $this->db->group_by('carpart.car_part_id'); 

        $data['car_detail'] = $this->db->get()->result();
        
		$this->load->view('autopart/car_listing_page',$data);

	}


	public function car_details_page($car_part_id)
	{
		
		$query = "select * FROM carpart WHERE car_part_id = '$car_part_id' ";
		$data['car_details'] = $this->db->query($query)->row();

		$this->db->select('carpart_img');
        $this->db->from('carpart');  
        $this->db->join('carpart_img', 'carpart_img.car_part_id = carpart.car_part_id'); 
        $this->db->where('carpart.car_part_id',$car_part_id);
       	
        $data['car_img'] = $this->db->get()->result();

       
		$this->load->view('autopart/car_details_page',$data);
	}

	public function insert_buynow($carpart_id)
	{
	  
	    if($this->autopart_model->insert_buynow_details($carpart_id))
	        {	              
	         	$this->db->select('*');
			    $this->db->from('carpart');  
			    $this->db->join('carpart_img', 'carpart_img.car_part_id = carpart.car_part_id'); 
			    $this->db->where('carpart.car_part_id',$carpart_id);
			       
			    $data['car_detail'] = $this->db->get()->row();	

				$this->load->view('Autopart/buynow_invoice',$data);          
	        }
	    else
	        {
	             
	        }
	   
	}

	public function view_invoice($carpart_id)
	{
	  	   	              
	         	$this->db->select('*');
			    $this->db->from('carpart');  
			    $this->db->join('carpart_img', 'carpart_img.car_part_id = carpart.car_part_id'); 
			    $this->db->where('carpart.car_part_id',$carpart_id);
			       
			    $data['car_detail'] = $this->db->get()->row();	

				$this->load->view('Autopart/buynow_invoice',$data);          
	        
	   
	}

	public function car_holding()
	{
		$this->load->view('autopart/car_holding');
	}


}