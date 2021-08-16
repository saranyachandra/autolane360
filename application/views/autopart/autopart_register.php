

<?php $this->load->view('includes/agent_site_css'); ?>

	<style type="text/css">
		
       .margn-top-30 {
	margin-top: 20px;
} 
	    label
		{
			color: #f33131!important;
		}

@media (max-width:764px){

	.padding_tb_100 {
    padding-top: 0px;
    padding-bottom: 0px;
	}
}
</style>
</head>

<body>

	<?php $this->load->view('includes/agentsite_header'); ?>
	<!-- hs Navigation End -->
	<div class="btc_tittle_main_wrapper">
		<div class="btc_tittle_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_left_heading">
						<h1>Car Parts Dealer</h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_right_heading">
						<div class="btc_tittle_right_cont_wrapper">
							<ul>
								<li><a href="#">Home</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li>Car Parts Dealer</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="x_about_seg_main_wrapper float_left padding_tb_100">
		<div class="container">
			
                   <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                          	<h4 style="font-weight:bold;">AUTO PARTS DEALER  ZONE</h4>
                          	<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                        	<img src="<?php echo base_url('assets/agent-assets/images/cp-reg.jpg');?>" class="img-fluid" style="margin-top:20px;" alt=""/> 
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none  d-lg-block d-xl-block">
							<div class="content_tabs">
								<div class="row">
									<div id="error_result"></div>
										<form id="register" action="<?php echo base_url('autopart/insert_register_info'); ?>" method="POST" enctype="multipart/form-data">	
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn" style="background-color:#f9f9f9;">
													<div class="x_slider_form_heading_wrapper float_left">
														<h3>Register- <span style="font-size:12px;">Create Your Business Profile</span>
														</h3>
													</div>
													<div class="row">
														
														<div class="col-md-12" style="margin-top:25px; margin-bottom:5px;">
															<div class="form-sec-header">
																<input type="text" name="business_name" placeholder="Enter Business Name" class="form-control">
															</div>
														</div>
														<div class="col-md-12">
															<div class="form-sec-header">
																<label><input type="text" name="business_address1" placeholder="Enter Business Address1" class="form-control">
																</label>
															</div>
														</div>
														
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<label><input type="text" name="business_address2" placeholder="Enter Business Address2" class="form-control">
																</label>
															</div>
														</div>
														<div class="col-md-12">
															<div class="x_slider_form_input_wrapper float_left">
																<div class="x_slider_select">
																	<select name="business_coutry" id="country" class="myselect" >
																	</select> <i class="fa fa-flag"></i>
																</div>
															</div>
														</div>
                                                        <div class="col-md-12">
															<div class="x_slider_form_input_wrapper float_left">
																<div class="x_slider_select">
																	<select name="business_state" id="state" class="myselect" >
																	</select> <i class="fa fa-flag"></i>
																</div>
															</div>
														</div>

														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<label>
																	<input type="text" name="business_email" placeholder="Enter Business Email" class="form-control">
																</label>
															</div>
														</div>

														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<label><input type="text" name="business_phone" placeholder="Enter Business Phone" class="form-control">
																</label>
															</div>
														</div>

														<div class="col-md-12">
															<div class="x_slider_checkbox_bottom float_left">
																<div class="x_slider_checout_right">
																	<ul>
																		<li>
																			<button class="btn" style="background-color: #ff6600;color: #fdfcfb;">  Next <i class="fa fa-arrow-right"></i></button>
																		</li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</form>
								</div>
							</div>
						</div>
               
					</div>
		</div>
	</div>

	<!-- hs Slider End -->
	<div class="x_responsive_form_wrapper x_responsive_form_wrapper2 float_left d-block d-sm-block d-md-block  d-lg-none d-xl-none">
		<div class="container">
			<div class="x_slider_form_main_wrapper float_left">
				<div class="x_slider_form_heading_wrapper float_left">
					<h3>Register- <span style="font-size:12px;">To Create Your order Ticket</span></h3>
				</div>
					
									<div id="error_result"></div>
										<form id="register" action="<?php echo base_url('autopart/insert_register_info'); ?>" method="POST" enctype="multipart/form-data">	
													<div class="row">
														
														<div class="col-md-12" style="margin-top:25px; margin-bottom:5px;">
															<div class="form-sec-header">
																<input type="text" name="business_name" placeholder="Enter Business Name" class="form-control">
															</div>
														</div>
														<div class="col-md-12">
															<div class="form-sec-header">
																<label><input type="text" name="business_address1" placeholder="Enter Business Address1" class="form-control">
																</label>
															</div>
														</div>
														
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<label><input type="text" name="business_address2" placeholder="Enter Business Address2" class="form-control">
																</label>
															</div>
														</div>
														<div class="col-md-12">
															<div class="x_slider_form_input_wrapper float_left">
																<div class="x_slider_select">
																	<select name="country"  class="myselect" >
																		<option value="" disabled selected hidden>Country</option>
																		<option value="Nigeria">Nigeria</option>
																		<option value="Ghana">Ghana</option>
																		<option value="United State">USA</option>
																	</select> <i class="fa fa-flag"></i>
																</div>
															</div>
														</div>
                                                        <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;">
															<div class="form-sec-header">
																<input type="text" name="state" placeholder="Enter State" class="form-control">
															</div>
														</div>

														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<label>
																	<input type="text" name="business_email" placeholder="Enter Business Email" class="form-control">
																</label>
															</div>
														</div>

														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<label><input type="text" name="business_phone" placeholder="Enter Business Phone" class="form-control">
																</label>
															</div>
														</div>

														<div class="col-md-12">
															<div class="x_slider_checkbox_bottom float_left">
																<div class="x_slider_checout_right">
																	<ul>
																		<li>
																			<button class="btn" style="background-color: #ff6600;color: #fdfcfb;">  Next <i class="fa fa-arrow-right"></i></button>
																		</li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												
										</form>
													
				
			</div>
		</div>
	</div>
	<div class="x_copyr_main_wrapper float_left">
		<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
		<div class="container">
			<p>Copyright © 2019 Autohub360 Agent. All rights reserved.</p>
		</div>
	</div>


<?php $this->load->view('includes/agent_site_js') ?>
<script src="<?php echo base_url('assets/agent-assets/js/countries.js');?>"></script>
	<!-- custom js-->

<script type="text/javascript">

	var base_url = '<?php echo base_url() ?>'; //form submited

	// here country and state declare with js library file
	populateCountries("country", "state");

	// register form submit here

    $(document).on("submit", "#register", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                             
                                  business_name:"required",  
                                  business_address1:"required", 
                                  business_email:
                                  {
                                      required : true,
                                      email: true
                                    }, 
                                  business_phone:
                                  {
                                     required : true,
                                     digits: true
                                    }, 
                                  business_country:"required", 
                                                 
                                },

                          messages: {  

                                  business_name: {
                                      required: "Required", 
                                  },  
                                  business_address1: {
                                      required: "Required", 
                                  },
                                   business_email: {
                                      required: "Please Enter a Valid Email Address",
                                  },
                                   business_phone: {
                                      required: "Required", 
                                  },
                                   business_country: {
                                      required: "Required", 
                                  },
                                  
                             },

                        }); 

    if($(this).valid())
        {     
            var url = $(this).attr('action');
            var formdata = new FormData(this);
          
            $.ajax({
                    url : url,
                    method: 'POST',
                    data: formdata,
                    processData: false,
                    contentType: false,
                    dataType:'json',
                    error: function(xhr,status,error)
                    {   
                        alert(xhr.responseText);
                    },                   
                   
                    success: function(response)
                    {
                      if(response.status == 'success')
                      	{
                            document.getElementById("register").reset();
                            swal({
                                title: "Success!",
                                text: "User Registered Successfully...",
                                type: "success",
                                timer: 3000
                            }).then(() => {                     
                                  window.location.href ='<?php echo base_url('autopart/business_interest'); ?>';
                                });;  

                      	}
                        else 
                        {                       
                          $("#error_result").html('<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry! </strong> Email or Password Incorrect. </div>');
                        }          
                    }

            });
        }     

 }); 

</script>


</body>



</html>