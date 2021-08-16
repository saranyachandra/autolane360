

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
.padding_tb_100 {
    padding-top: 20px;
    padding-bottom: 0px;
}
.review-label{
    position: absolute;
    top: 10px;
    right: 35px;
    background-color: #e84536;
    color: #fff;
    padding: 3px 5px;
    font-family: 'Overpass',sans-serif;
    font-size: 11px;
    font-weight: bold;
    text-align: center; 
    overflow: hidden;
    z-index: 2;
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
						<div class="col-sm-2 col-lg-1 col-md-1 col-2" style="margin-top: 10px;">
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

	<div class="x_about_seg_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center" style="margin-bottom:20px;"> <h3>Select Your Service Category Below</h3></div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style="padding-bottom: 20px;">
                   
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<a href="<?php echo base_url('agent/select_order');?>">
                        <img src="<?php echo base_url('assets/agent-assets/images/3.jpg');?>" alt="about_img" class="img-responsive img-thumbnail"  style="margin-bottom:20px;"> </a>
                    </div>
                   
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center" style="margin-top: -20px;"> 
                    	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background-color: #f60;padding: 5px 0;">
                    	<span style="font-size:14px; color:#fff;">
                    		My Car Listing For This Month 
                    	</span>
                    	</div>
                    </div>
                	
				</div>

				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style="padding-bottom: 20px;">
                   
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <a href="<?php echo base_url('agent/place_order');?>">
                        <img src="<?php echo base_url('assets/agent-assets/images/1.jpg');?>" alt="about_img" class="img-responsive img-thumbnail"  style="margin-bottom:20px;">
                        </a>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center" style="margin-top: -20px;"> 
                    	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background-color: #f60;padding: 5px 0;">
                    	<span style="font-size:14px; color:#fff;">
                    		Order For Specific Car
                    	</span>
                    	</div>
                    </div>
                	
				</div>

				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style="padding-bottom: 20px;">
                   
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <a href="<?php echo base_url('agent/track_order');?>">
                        <img src="<?php echo base_url('assets/agent-assets/images/1.jpg');?>" alt="about_img" class="img-responsive img-thumbnail"  style="margin-bottom:20px;">
                        </a>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center" style="margin-top: -20px;"> 
                    	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background-color: #f60;padding: 5px 0;">
                    	<span style="font-size:14px; color:#fff;">My Car Order</span>
                    	</div>
                    </div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style="padding-bottom: 20px;">
                    
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="position: relative;">
						<a href="<?php echo base_url('autopart/car_listing_page');?>">
                           <img src="<?php echo base_url('assets/agent-assets/images/9.jpg');?>" alt="about_img" class="img-responsive img-thumbnail"  style="margin-bottom:20px;"></a>
                    </div>
                    <div class="review-label">Coming Soon </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center" style="margin-top: -20px;"> 
                    	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background-color: #f60;padding: 5px 0;">
                    	<span style="font-size:14px; color:#fff;">Wholesale Car Parts Dealers </span>
                    	</div>
                    </div>
                    
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style="padding-bottom: 20px;">
                   
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="position: relative;">
						<a href="#">
                        <img src="<?php echo base_url('assets/agent-assets/images/2.jpg');?>" alt="about_img" class="img-responsive img-thumbnail"  style="margin-bottom:20px;"></a>
                    </div>
                    <div class="review-label">Coming Soon </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center" style="margin-top: -20px;">
                    	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background-color: #f60;padding: 5px 0;">
                    	<span style="font-size:14px; color:#fff;">Commercial Car/Trucks</span>                    	 
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