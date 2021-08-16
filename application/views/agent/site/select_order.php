

<!-- include css file here -->
<?php $this->load->view('includes/agent_site_css'); ?>

<style type="text/css">
	.btc_tittle_main_wrapper{
	background:url('../images/title_bg.jpg') 50% 0 repeat-y;
	background-size:cover;
	background-position:center 0;
	background-repeat:no-repeat;
	background-attachment:fixed;
	float:left;
	width:100%;
	height:100%;
	position:relative;
	 padding-top:0px; 
	 padding-bottom:0px; 
}
.btc_tittle_main_wrapper_1{
	background:url('../images/title_bg.jpg') 50% 0 repeat-y;
	background-size:cover;
	background-position:center 0;
	background-repeat:no-repeat;
	background-attachment:fixed;
	float:left;
	width:100%;
	height:100%;
	position:relative;
	 padding-top:15px; 
	 padding-bottom:15px; 
}
.btc_tittle_main_wrapper_2{
	background:url('../images/title_bg.jpg') 50% 0 repeat-y;
	background-size:cover;
	background-position:center 0;
	background-repeat:no-repeat;
	background-attachment:fixed;
	float:left;
	width:100%;
	height:100%;
	position:relative;
	 padding-top:0px; 
	 padding-bottom:15px; 
}

hr{
	margin-top: 0px;
	margin-bottom: 0px;
}
.x_css_tabs_main_wrapper ul li a {
	font-size: 12px !important;
	text-transform: none !important;
}
.x_car_detail_descrip ul{
	 margin-top:0px; 
}
.padding_tb_100{
	 padding-top:0px; 
	 padding-bottom:0px; 
}
.x_css_tabs_main_wrapper .nav-tabs .nav-item:last-child{
	 margin-left:0px; 
}

@media (max-width: 768px)
{
.x_css_tabs_main_wrapper .nav-tabs .nav-item{
    margin-bottom:0;
    width: 100%;
}
.x_car_detail_main_wrapper{
		 margin-top:0px; 
	}
}


</style>

<body>
	
	<?php $this->load->view('includes/agentsite_header'); ?>
	
	<div class="btc_tittle_main_wrapper_2">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-6 col-md-9 col-sm-12 col-12 full_width">
					<div class="row">
						 <div class="col-sm-2 col-lg-1 col-md-1 col-2" style="margin-top: 10px;" >
							<img style="width: 50px;height: 50px;" class="rounded-circle" src="<?php echo $agent_details->image ;?> ">
						</div> 
						 <div class="col-sm-10 col-md-3 col-lg-3 col-10">
							<p  style="color: #333;font-weight: bold;"> <?php echo $agent_details->admin_fname." ".$agent_details->admin_lname; ?>  <br>
							<?php echo $agent_details->admin_city;?> <br>
							<?php echo $agent_details->agent_code;?> </p>
						</div> 

						<div class="col-sm-12 col-md-8 col-lg-8 text-center" style="padding-bottom: 15px;padding-top: 15px;">
							<div class="row" style="text-align: center!important;">
								<div style="text-align: center;width: 100%;">
									<h5 style="font-size: 16px!important;font-weight: bold;"> WELCOME TO MY BUSINESS PAGE </h5>
								</div>

								<h6>We  are committed to serving you in the best possible way, Your Satisfaction and Trust
								is our greatest asset.
								</h6>
                    		</div>
						</div>
													
					</div>
				</div>
				
			</div>
		</div>
		<hr>
	</div>



	<div class="btc_tittle_main_wrapper">
		<div class="container">
		<div class="row">
        <div class="col-md-12">
            <div class="x_car_detail_main_wrapper float_left">
                 <div class="x_css_tabs_wrapper float_left">
                    <div class="x_css_tabs_main_wrapper float_left" style="padding-top:20px;">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#menu1"> Luxury Premium Cars
                                                    
                                </a>
                            </li>
                            <li class="nav-item"> 
                            	<a class="nav-link" data-toggle="tab" href="#menu2">Dealership Consigment</a>
                            </li>
                            <li class="nav-item">
                             <a class="nav-link" data-toggle="tab" href="#menu3">Used Car Minor Dents </a>
                            </li>
                            <li class="nav-item">
                             <a class="nav-link" data-toggle="tab" href="#menu4">Uber-Taxi Ready Cars </a>
                            </li>
                            <li class="nav-item">
                             <a class="nav-link" data-toggle="tab" href="#menu5">Commercial Cars/Trucks </a>
                            </li>
                            <li class="nav-item">
                             <a class="nav-link" data-toggle="tab" href="#menu6">Used Wholesale Autoparts</a>
                            </li>
                        </ul>                        
                    </div>

                    <div class="tab-content">

                    	<div id="menu1" class="tab-pane active show">
                    		<div class="x_car_detail_descrip"> 
                    		<div class="row">
                    			<?php 
                            		foreach ($car_detail as $car_details) {

	                                if($car_details->category == 'Luxury Premium Cars')
	                                {   
                        		?>
               
			                  	<div class="col-md-3">                                                  
			                  
			                        <a href="#"><img class="img-fluid img-thumbnail"  src="<?php echo $car_details->admincar_stockimg;?>" alt=""></a>
			                         
			                        <div class="product-description text-left">
			  
			                            <h5 class="product-name" style="text-transform: capitalize;">
			                              <a href="#"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> </a>
			                            </h5>
			  
			                            <div class="pricing-area text-left">
			                              	<div class="product-price text-left">
			                                
			                                <?php 
			                                   if($car_details->price != null)
			                                    { 
			                                      $price = $car_details->price;
			                                      $words = preg_replace('/\d+/', '', $price );
			                                      $price_numbers = preg_replace('/[^0-9]/', '', $price);

			                                       if($price_numbers == 0 )
			                                        {
			                                          echo " ";
			                                        }
			                                        else
			                                        {
			                                            echo $words.' '.number_format($price_numbers);
			                                        }
			                                    }  
			                                ?>  
			                              	</div>
			                            </div>

			                            <div class="model-loc ">
			                                <ul>
			                                  <li><span>Mileage: </span><?php echo $car_details->car_mileage;?></li>
			                                  <li><span>Location: </span><?php echo $car_details->car_location;?></li>
			                                  <li style="text-align:center;"><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;text-align: center;">Price Includes Shipping to <?php echo $car_details->country;?></span></li>
			                                </ul>
			                            </div>
			                            
			                        </div>

			                          <div class="product-description " style="background-color:#dae0f3;font-family: 'Overpass', sans-serif !important">
			                              <div class="model-loc ">
			                                <ul>
			                                  <li style="text-align:center;">
			                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
			                                     Interested Buyers </span>
			                                  </li>
			                                  <li style="text-align:center;">
			                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
			                                      <strong>Available :</strong>
			                                        <?php 
				                                        $available_from = strtotime($car_details->available_from);
				                                        $available_to =  strtotime($car_details->available_to);
				                                        echo date("M j S",$available_from);
				                                        echo " To ";
				                                        echo date("M j S",$available_to);
				                                    ?>
			                                    </span>
			                                  </li>
			                                </ul>
			                              </div>
			                                               
			                              <div class="model-info text-center" >
			                                
			                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="<?php echo base_url('agent/get_car_details/'.$car_details->carstock_id);?>">View Details</a>
			                              </div>
			                            

			                          </div>

			                    
			                  </div> 
                
                       			<?php } } ?> 
                    		</div>
                    		</div>
                    	</div>

                    	<div id="menu2" class="tab-pane fade">
                    		<div class="x_car_detail_descrip"> 
                    		<div class="row">
                    			<?php 
                            		foreach ($car_detail as $car_details) {

	                                if($car_details->category == 'Dealership Consignment')
	                                {   
                        		?>
               
			                  <div class="col-md-3">                                                  
			                  
			                        <a href="#"><img  class="img-fluid img-thumbnail"  src="<?php echo $car_details->admincar_stockimg;?>" alt=""></a>
			                         
			                        <div class="product-description text-left">
			  
			                            <h5 class="product-name" style="text-transform: capitalize;">
			                              <a href="#"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> </a>
			                            </h5>
			  
			                            <div class="pricing-area text-left">
			                              	<div class="product-price text-left">
			                                
			                                <?php 
			                                   if($car_details->price != null)
			                                    { 
			                                      $price = $car_details->price;
			                                      $words = preg_replace('/\d+/', '', $price );
			                                      $price_numbers = preg_replace('/[^0-9]/', '', $price);

			                                       if($price_numbers == 0 )
			                                        {
			                                          echo " ";
			                                        }
			                                        else
			                                        {
			                                            echo $words.' '.number_format($price_numbers);
			                                        }
			                                    }  
			                                ?>  
			                              	</div>
			                            </div>

			                            <div class="model-loc ">
			                                <ul>
			                                  <li><span>Mileage: </span><?php echo $car_details->car_mileage;?></li>
			                                  <li><span>Location: </span><?php echo $car_details->car_location;?></li>
			                                  <li style="text-align:center;"><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;text-align: center;">Price Includes Shipping to <?php echo $car_details->country;?></span></li>
			                                </ul>
			                            </div>
			                            
			                        </div>

			                          <div class="product-description " style="background-color:#dae0f3;font-family: 'Overpass', sans-serif !important">
			                              <div class="model-loc ">
			                                <ul>
			                                  <li style="text-align:center;">
			                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
			                                     Interested Buyers </span>
			                                  </li>
			                                  <li style="text-align:center;">
			                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
			                                      <strong>Available :</strong>
			                                        <?php 
				                                        $available_from = strtotime($car_details->available_from);
				                                        $available_to =  strtotime($car_details->available_to);
				                                        echo date("M j S",$available_from);
				                                        echo " To ";
				                                        echo date("M j S",$available_to);
				                                    ?>
			                                    </span>
			                                  </li>
			                                </ul>
			                              </div>
			                                               
			                              <div class="model-info text-center" >
			                                
			                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="<?php echo base_url('agent/get_car_details/'.$car_details->carstock_id);?>">View Details</a>
			                              </div>
			                            

			                          </div>

			                    
			                  </div> 
                
                       			<?php } } ?> 
                    		</div>
                    		</div>
                    	</div>

                    	<div id="menu3" class="tab-pane fade">
                    		<div class="x_car_detail_descrip"> 
                    		<div class="row">
                    			<?php 
                            		foreach ($car_detail as $car_details) {

	                                if($car_details->category == 'Used Car Minor Dent')
	                                {   
                        		?>
               
			                  <div class="col-md-3">                                                  
			                  
			                        <a href="#"><img  class="img-fluid img-thumbnail"  src="<?php echo $car_details->admincar_stockimg;?>" alt=""></a>
			                         
			                        <div class="product-description text-left">
			  
			                            <h5 class="product-name" style="text-transform: capitalize;">
			                              <a href="#"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> </a>
			                            </h5>
			  
			                            <div class="pricing-area text-left">
			                              	<div class="product-price text-left">
			                                
			                                <?php 
			                                   if($car_details->price != null)
			                                    { 
			                                      $price = $car_details->price;
			                                      $words = preg_replace('/\d+/', '', $price );
			                                      $price_numbers = preg_replace('/[^0-9]/', '', $price);

			                                       if($price_numbers == 0 )
			                                        {
			                                          echo " ";
			                                        }
			                                        else
			                                        {
			                                            echo $words.' '.number_format($price_numbers);
			                                        }
			                                    }  
			                                ?>  
			                              	</div>
			                            </div>

			                            <div class="model-loc ">
			                                <ul>
			                                  <li><span>Mileage: </span><?php echo $car_details->car_mileage;?></li>
			                                  <li><span>Location: </span><?php echo $car_details->car_location;?></li>
			                                  <li style="text-align:center;"><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;text-align: center;">Price Includes Shipping to <?php echo $car_details->country;?></span></li>
			                                </ul>
			                            </div>
			                            
			                        </div>

			                          <div class="product-description " style="background-color:#dae0f3;font-family: 'Overpass', sans-serif !important">
			                              <div class="model-loc ">
			                                <ul>
			                                  <li style="text-align:center;">
			                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
			                                     Interested Buyers </span>
			                                  </li>
			                                  <li style="text-align:center;">
			                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
			                                      <strong>Available :</strong>
			                                        <?php 
				                                        $available_from = strtotime($car_details->available_from);
				                                        $available_to =  strtotime($car_details->available_to);
				                                        echo date("M j S",$available_from);
				                                        echo " To ";
				                                        echo date("M j S",$available_to);
				                                    ?>
			                                    </span>
			                                  </li>
			                                </ul>
			                              </div>
			                                               
			                              <div class="model-info text-center" >
			                                
			                               <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="<?php echo base_url('agent/get_car_details/'.$car_details->carstock_id);?>">View Details</a>
			                              </div>
			                            

			                          </div>

			                    
			                  </div> 
                
                       			<?php } } ?> 
                    		</div>
                    		</div>
                    	</div>

                    	<div id="menu4" class="tab-pane fade">
                    		<div class="x_car_detail_descrip"> 
                    		<div class="row">
                    			<?php 
                            		foreach ($car_detail as $car_details) {

	                                if($car_details->category == 'Uber-Taxi Ready Cars')
	                                {   
                        		?>
               
			                  <div class="col-md-3">                                                  
			                  
			                        <a href="#"><img class="img-fluid img-thumbnail"  src="<?php echo $car_details->admincar_stockimg;?>" alt=""></a>
			                         
			                        <div class="product-description text-left">
			  
			                            <h5 class="product-name" style="text-transform: capitalize;">
			                              <a href="#"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> </a>
			                            </h5>
			  
			                            <div class="pricing-area text-left">
			                              	<div class="product-price text-left">
			                                
			                                <?php 
			                                   if($car_details->price != null)
			                                    { 
			                                      $price = $car_details->price;
			                                      $words = preg_replace('/\d+/', '', $price );
			                                      $price_numbers = preg_replace('/[^0-9]/', '', $price);

			                                       if($price_numbers == 0 )
			                                        {
			                                          echo " ";
			                                        }
			                                        else
			                                        {
			                                            echo $words.' '.number_format($price_numbers);
			                                        }
			                                    }  
			                                ?>  
			                              	</div>
			                            </div>

			                            <div class="model-loc ">
			                                <ul>
			                                  <li><span>Mileage: </span><?php echo $car_details->car_mileage;?></li>
			                                  <li><span>Location: </span><?php echo $car_details->car_location;?></li>
			                                  <li style="text-align:center;"><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;text-align: center;">Price Includes Shipping to <?php echo $car_details->country;?></span></li>
			                                </ul>
			                            </div>
			                            
			                        </div>

			                          <div class="product-description " style="background-color:#dae0f3;font-family: 'Overpass', sans-serif !important">
			                              <div class="model-loc ">
			                                <ul>
			                                  <li style="text-align:center;">
			                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
			                                     Interested Buyers </span>
			                                  </li>
			                                  <li style="text-align:center;">
			                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
			                                      <strong>Available :</strong>
			                                        <?php 
				                                        $available_from = strtotime($car_details->available_from);
				                                        $available_to =  strtotime($car_details->available_to);
				                                        echo date("M j S",$available_from);
				                                        echo " To ";
				                                        echo date("M j S",$available_to);
				                                    ?>
			                                    </span>
			                                  </li>
			                                </ul>
			                              </div>
			                                               
			                              <div class="model-info text-center" >
			                                
			                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="<?php echo base_url('agent/get_car_details/'.$car_details->carstock_id);?>">View Details</a>
			                              </div>
			                            

			                          </div>

			                    
			                  </div> 
                
                       			<?php } } ?> 
                    		</div>
                    		</div>
                    	</div>

                    	<div id="menu5" class="tab-pane fade">
                    		<div class="x_car_detail_descrip"> 
                    		<div class="row">
                    			<?php 
                            		foreach ($car_detail as $car_details) {

	                                if($car_details->category == 'Commercial Trucks')
	                                {   
                        		?>
               
			                  <div class="col-md-3">                                                  
			                  
			                        <a href="#"><img  class="img-fluid img-thumbnail"  src="<?php echo $car_details->admincar_stockimg;?>" alt=""></a>
			                         
			                        <div class="product-description text-left">
			  
			                            <h5 class="product-name" style="text-transform: capitalize;">
			                              <a href="#"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> </a>
			                            </h5>
			  
			                            <div class="pricing-area text-left">
			                              	<div class="product-price text-left">
			                                
			                                <?php 
			                                   if($car_details->price != null)
			                                    { 
			                                      $price = $car_details->price;
			                                      $words = preg_replace('/\d+/', '', $price );
			                                      $price_numbers = preg_replace('/[^0-9]/', '', $price);

			                                       if($price_numbers == 0 )
			                                        {
			                                          echo " ";
			                                        }
			                                        else
			                                        {
			                                            echo $words.' '.number_format($price_numbers);
			                                        }
			                                    }  
			                                ?>  
			                              	</div>
			                            </div>

			                            <div class="model-loc ">
			                                <ul>
			                                  <li><span>Mileage: </span><?php echo $car_details->car_mileage;?></li>
			                                  <li><span>Location: </span><?php echo $car_details->car_location;?></li>
			                                  <li style="text-align:center;"><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;text-align: center;">Price Includes Shipping to <?php echo $car_details->country;?></span></li>
			                                </ul>
			                            </div>
			                            
			                        </div>

			                          <div class="product-description " style="background-color:#dae0f3;font-family: 'Overpass', sans-serif !important">
			                              <div class="model-loc ">
			                                <ul>
			                                  <li style="text-align:center;">
			                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
			                                     Interested Buyers </span>
			                                  </li>
			                                  <li style="text-align:center;">
			                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
			                                      <strong>Available :</strong>
			                                        <?php 
				                                        $available_from = strtotime($car_details->available_from);
				                                        $available_to =  strtotime($car_details->available_to);
				                                        echo date("M j S",$available_from);
				                                        echo " To ";
				                                        echo date("M j S",$available_to);
				                                    ?>
			                                    </span>
			                                  </li>
			                                </ul>
			                              </div>
			                                               
			                              <div class="model-info text-center" >
			                                
			                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="<?php echo base_url('agent/get_car_details/'.$car_details->carstock_id);?>">View Details</a>
			                              </div>
			                            

			                          </div>

			                    
			                  </div> 
                
                       			<?php } } ?> 
                    		</div>
                    		</div>
                    	</div>

                    	<div id="menu6" class="tab-pane fade">
                    		<div class="x_car_detail_descrip"> 
                    		<div class="row">
                    			<?php 
                            		foreach ($car_detail as $car_details) {

	                                if($car_details->category == 'Used Wholesale Parts')
	                                {   
                        		?>
               
			                  <div class="col-md-3">                                                  
			                  
			                        <a href="#"><img  class="img-fluid img-thumbnail"  src="<?php echo $car_details->admincar_stockimg;?>" alt=""></a>
			                         
			                        <div class="product-description text-left">
			  
			                            <h5 class="product-name" style="text-transform: capitalize;">
			                              <a href="#"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> </a>
			                            </h5>
			  
			                            <div class="pricing-area text-left">
			                              	<div class="product-price text-left">
			                                
			                                <?php 
			                                   if($car_details->price != null)
			                                    { 
			                                      $price = $car_details->price;
			                                      $words = preg_replace('/\d+/', '', $price );
			                                      $price_numbers = preg_replace('/[^0-9]/', '', $price);

			                                       if($price_numbers == 0 )
			                                        {
			                                          echo " ";
			                                        }
			                                        else
			                                        {
			                                            echo $words.' '.number_format($price_numbers);
			                                        }
			                                    }  
			                                ?>  
			                              	</div>
			                            </div>

			                            <div class="model-loc ">
			                                <ul>
			                                  <li><span>Mileage: </span><?php echo $car_details->car_mileage;?></li>
			                                  <li><span>Location: </span><?php echo $car_details->car_location;?></li>
			                                  <li style="text-align:center;"><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;text-align: center;">Price Includes Shipping to <?php echo $car_details->country;?></span></li>
			                                </ul>
			                            </div>
			                            
			                        </div>

			                        <div class="product-description " style="background-color:#dae0f3;font-family: 'Overpass', sans-serif !important">
			                            <div class="model-loc ">
			                                <ul>
			                                  <li style="text-align:center;">
			                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
			                                     Interested Buyers </span>
			                                  </li>
			                                  <li style="text-align:center;">
			                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
			                                      <strong>Available :</strong>
			                                        <?php 
				                                        $available_from = strtotime($car_details->available_from);
				                                        $available_to =  strtotime($car_details->available_to);
				                                        echo date("M j S",$available_from);
				                                        echo " To ";
				                                        echo date("M j S",$available_to);
				                                    ?>
			                                    </span>
			                                  </li>
			                                </ul>
			                            </div>
			                                               
			                            <div class="model-info text-center" >
			                                
			                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="<?php echo base_url('agent/get_car_details/'.$car_details->carstock_id);?>">View Details</a>
			                            </div>
			                            

			                        </div>

			                    
			                  </div> 
                
                       			<?php } } ?> 
                    		</div>
                    		</div>
                    	</div>

                    </div>
              </div>
          </div>
      	</div>
  		</div>
		</div>
    </div>



	


	<!-- btc team Wrapper End -->

	<!--js Start-->
	<!-- xs offer car tabs Start -->
		<?php $this->load->view('includes/business_partners') ?>
	<!-- btc team Wrapper Start -->

	


<!-- custom js-->
<?php $this->load->view('includes/agent_site_js') ?>

</body>



</html>