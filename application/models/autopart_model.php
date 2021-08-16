<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class autopart_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        
    }


   public function register()
   {
   		$now = date('Y-m-d H:i:s');  

   		$cus_id = $this->session->userdata('cus_id');
    	
		$insert_data = array('agent_cus_id' => $cus_id,
						'business_name'    	=> $this->input->post('business_name'),						
						'business_address1' => $this->input->post('business_address1'),
						'business_address2' => $this->input->post('business_address2'),
						'business_country'  => $this->input->post('business_coutry'),
						'business_state' 	=> $this->input->post('business_state'),
						'business_email' 	=> $this->input->post('business_email'),
						'business_phone'  	=> $this->input->post('business_phone'),
						'created_at'		=> $now
					);

		$insert_part = $this->db->insert('car_part_register',$insert_data);

		return true;

   } 

   public function insert_business_interest()
   {
   		$now = date('Y-m-d H:i:s');  

   		$cus_id = $this->session->userdata('cus_id');
    	
		$interest_data = array('carpart_reg_id' => $cus_id,
						'carpart_interest'  => implode(',', $this->input->post('interest')),						
						'other_interest' 	=> $this->input->post('other_interest'),
						'specific_interest' => $this->input->post('Specify_interest'),
						'created_at'		=> $now
					);

		$insert_part = $this->db->insert('carpart_interest',$interest_data);

		return true;

   } 

    public function insert_buynow_details($carpart_id)
	{
	   		$now = date('Y-m-d H:i:s');  

	   		$cus_id = $this->session->userdata('cus_id');

	   			    	
			$data = array(	'car_part_id'		=> $carpart_id,
							'agent_cus_id'  	=> $cus_id,						
							'carpart_status' 	=> 'booking',							
							'created_at'		=> $now
						);

			$status = array('status'=> 'booking');
			$result = $this->db->where('car_part_id', $carpart_id)->update('carpart', $status);
   			
			$insert_part = $this->db->insert('carpart_buying',$data);

			return true;

	} 

}

