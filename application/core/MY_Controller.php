<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

 	public $country = '';

	public function __construct()
	{
		parent:: __construct();

		$this->load->library('session');
        $this->load->helper(array('url'));
       
		$data = $this->uri->uri_to_assoc();
        
        if(count($data) > 0 && isset($data['country']) )
        {
        	
        	$this->country = $data['country'];
        	$this->session->set_userdata('country_name', $this->country);
        	
        }else{
        		
        		if($this->session->has_userdata('country_name'))
        		{
        			$this->country = $this->session->userdata('country_name');
        			// echo $this->session->userdata('country_name');
        		}
        		else
        		{
        			$ch = curl_init();
         		   
	  	    		curl_setopt($ch, CURLOPT_URL,'http://ip-api.com/json');	   
	  		  		curl_setopt($ch, CURLOPT_POST, true);
	  		  		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	  	   	 		$response = curl_exec($ch); 	    	
	  		  		$data =json_decode($response);
	  		  		// print_r($data->country);
	  		  		$this->country = $data->country;
	        	
	        		$this->session->set_userdata('country_name', $this->country);
	        		// echo 'ok';
        		}

        		
        }
        
       
    }

}
