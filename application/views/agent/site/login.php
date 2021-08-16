
<!-- include css file here -->
<?php $this->load->view('includes/agent_site_css'); ?>

<style type="text/css">

.margn-top-30 {
	margin-top: 20px;
}

	label
	{
		color: #f33131!important;
	}
</style>


<body>
	
	
	
	<?php $this->load->view('includes/agentsite_header'); ?>


	<!-- hs Slider Start -->
	<div class="slider-area float_left">
		<div id="carousel-example-generic">
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-captions caption-1">
						<div class="container">
							<div class="row">
								<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
									<div class="content">
										<h2 data-animation="animated fadeInLeft">Check Our Exclusive<br>
											Video</h2>

										<div class="hs_effect_btn">
											<ul>
												<li data-animation="animated flipInX" class="">
													<a rel="external" href="https://www.youtube.com/embed/ryzOXAO0Ss0" title="title" class="test-popup-link">
														<img src="<?php echo base_url('assets/agent-assets/images/play.png');?>" alt="olay_icon">&nbsp;&nbsp;Play Video
													</a>
												</li>
												
											</ul>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none  d-lg-block d-xl-block">
									<div class="content_tabs">
										<div class="row">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn">
													<div class="x_slider_form_heading_wrapper float_left">
														<h3>Login <span style="font-size:12px;"></span></h3>
													</div>
													<div id="error_result"></div>
												<form id="login" action="<?php echo base_url('agent/login_auth'); ?>"  method="POST" enctype="multipart/form-data">
													<div class="row">										
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="text" name="user_email" placeholder="Enter Email/Phone" class="form-control">
															</div>
														</div>
														
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="Password" name="user_password" placeholder="Enter Password" class="form-control">
															</div>
														</div>

														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<a href="<?php echo base_url('agent/forgot_pass'); ?>" style="color: #5e5ee2;">Forgot Password?</a>
															</div>
														</div>

														<div class="col-md-12">
															<div class="x_slider_checkbox_bottom float_left">
																<div class="x_slider_checout_right">
																	<ul>
																		<li><button class="btn" style="background-color: #ff6600;color: #fdfcfb;">  Submit <i class="fa fa-arrow-right"></i></button> 
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
									</div>
								</div>
							</div>
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
					<h3>Login <span style="font-size:12px;"></span></h3>
				</div>
				<div id="error_result"></div>
												<form id="login" action="<?php echo base_url('agent/login_auth'); ?>"  method="POST" enctype="multipart/form-data">
													<div class="row">										
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="text" name="user_email" placeholder="Enter Email/Phone" class="form-control">
															</div>
														</div>
														
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="Password" name="user_password" placeholder="Enter Password" class="form-control">
															</div>
														</div>

														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<a href="#" style="color: #5e5ee2;">Forgot Password?</a>
															</div>
														</div>

														<div class="col-md-12">
															<div class="x_slider_checkbox_bottom float_left">
																<div class="x_slider_checout_right">
																	<ul>
																		<li><button class="btn" style="background-color: #ff6600;color: #fdfcfb;">  Submit <i class="fa fa-arrow-right"></i></button> 
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


	<!-- btc team Wrapper End -->

	<!--js Start-->
	<!-- xs offer car tabs Start -->
		<?php $this->load->view('includes/business_partners') ?>
	<!-- btc team Wrapper Start -->

	

	
	<!-- custom js-->
	<?php $this->load->view('includes/agent_site_js') ?>
<script type="text/javascript">
	var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", "#login", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                             
                                  user_email:"required",  
                                  user_password:"required", 
                                                 
                                },

                          messages: {  

                                  user_email: {
                                      required: "Required", 
                                  },  
                                  user_password: {
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
                            window.location.href ='<?php echo base_url('agent/landing_page'); ?>';
                      	}
                        else 
                        {                       
                          $("#error_result").html('<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry! </strong> Email or Password Incorrect. </div>');
                        }          
                    }

            });
        }     

 });

 //agent login form 
    $(document).on("submit", "#agent_login", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                             
                                  agent_email:"required",   
                                  agent_password:"required",                  
                                },

                          messages: {  

                                  agent_email: {
                                      required: "Required", 
                                  },  

                                  agent_password: {
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
                         window.location.href ='<?php echo base_url('agent_dashboard/index'); ?>';
                      }
                        else 
                        {                       
                          $("#error_result1").html('<div style="color:red;" class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry!</strong> Email or Password incorrect. </div>');
                        }          
                    }

           });
        }     

 });  
</script>

</body>



</html>