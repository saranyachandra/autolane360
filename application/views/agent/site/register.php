
<!-- include css file here -->
<?php $this->load->view('includes/agent_site_css'); ?>

<style type="text/css">
	label
	{
		color: #f33131!important;
	}
</style>

<body>
	
	<?php $this->load->view('includes/agentsite_header'); ?>

	<!-- hs Navigation Start -->
	
	<!-- hs Navigation End -->

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
													
													<a rel="external" href="<?php echo $video_details->video_url; ?>" title="title" class="test-popup-link">
														<img src="<?php echo base_url('assets/agent-assets/images/play.png');?>" alt="olay_icon">&nbsp;&nbsp;Play Video
													</a>
												</li>												
											</ul>
										</div>
										<div class="clear"></div>
									</div>
								</div>

								<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none  d-lg-block d-xl-block">
									<div class="content_tabs" style="padding-top:25px;">
										<div class="row">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn">
													<div class="x_slider_form_heading_wrapper float_left">
														<h3>Register- <span style="font-size:12px;">To Create Your order Ticket</span></h3>
													</div>
												<form id="register" action="<?php echo base_url('agent/insert_register_info'); ?>"  method="POST" enctype="multipart/form-data">	
													<div class="row">
														<div class="col-md-12">
															<div class="x_slider_form_input_wrapper float_left">
																<div class="x_slider_select">
																	<select id="country" name="country"  class="myselect" >
																		
																	</select> <i class="fa fa-flag"></i>
																</div>
															</div>
														</div>

														<input type="hidden" name="agent_id" value="<?php echo $agent_id; ?>">

														<div class="col-md-12" style="margin-top:5px; margin-bottom:5px;">
															<div class="x_slider_select">
																<select name="state" id="state" class="myselect"></select>
															</div>
														</div>

														<div class="col-md-12">
															<div class="form-sec-header">
																<input type="text" name="first_name" placeholder="First Name" class="form-control">
															</div>
														</div>

														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="text" name="last_name" placeholder="Last Name" class="form-control">
															</div>
														</div>

														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="text" name="email" id="user_email" placeholder="Email" class="form-control">
															</div>
															<div id="user_email_error"></div>
														</div>
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="text" name="phone_no" placeholder="Phone No" class="form-control">
																
															</div>
														</div>
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="password" name="password" placeholder="Create Password" class="form-control">
															</div>
														</div>														
																
														<input type="hidden" name="ref_code" class="form-control" value="<?php echo $ref; ?>" readonly>

														<div class="col-md-12">
															<div class="x_slider_checkbox_bottom float_left">
																<div class="x_slider_checout_right">
																	<ul>
																		<li ><button class="btn" style="background-color: #ff6600;color: #fdfcfb;">  Submit <i class="fa fa-arrow-right"></i></button> 
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
                                    <div class="content_tabs" style="padding-top:10px;">
										<div class="row">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn" style="padding:5px 10px!important; min-height:125px;">
													
												<form id="register" action="<?php echo base_url('agent/insert_register_info'); ?>"  method="POST" enctype="multipart/form-data">	


													
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >

														<div class="row" style="font-weight: bold; text-align:center;">
															<div style="text-align:center; width:100%;">Referred By</div>
														</div>
														
														
													
												</div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
															<div class="form-sec-header" style="width: 20%;float: left;margin-top: 20px;">
																<img style="width: 65px;height: 65px;" class="rounded-circle" src="<?php echo $agent_profile_pic;?> ">
															</div>
															<div class="form-sec-header" style="width: 80%;float: left;">
																<label><?php echo $agent_fname." ".$agent_lname;?></label>
																<input type="text" class="form-control" value="<?php echo $ref; ?>" readonly>
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
					<h3>Register- <span style="font-size:12px;">To Create Your order Ticket</span></h3>
				</div>
				<form id="register" action="<?php echo base_url('agent/insert_register_info'); ?>"  method="POST" enctype="multipart/form-data">	
													<div class="row">
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

														<input type="hidden" name="agent_id" value="<?php echo $agent_id; ?>">
														<div class="col-md-12" style="margin-top:5px; margin-bottom:5px;">
															<div class="form-sec-header">
																<input type="text" name="state" placeholder="Enter State" class="form-control">
															</div>
														</div>
														<div class="col-md-12">
															<div class="form-sec-header">
																<input type="text" name="first_name" placeholder="First Name" class="form-control">
																
															</div>
														</div>
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="text" name="last_name" placeholder="Last Name" class="form-control">
															</div>
														</div>
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="text" name="email" placeholder="Email" class="form-control">
															</div>
														</div>
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="text" name="phone_no" placeholder="Phone No" class="form-control">
																
															</div>
														</div>
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="text" name="password" placeholder="Create Password" class="form-control">
															</div>
														</div>
														
																
														<input type="hidden" name="ref_code" class="form-control" value="<?php echo $ref; ?>" readonly>
															

														<div class="col-md-12">
															<div class="x_slider_checkbox_bottom float_left">
																<div class="x_slider_checout_right">
																	<ul>
																		<li ><button class="btn" style="background-color: #ff6600;color: #fdfcfb;">  Submit <i class="fa fa-arrow-right"></i></button> 
																		</li>
																	</ul>
																</div>
															</div>
														</div>

													</div>

													
													<div class="row" style="border-top: 1px solid #000;margin-top: 30px;" >
													<div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn" style="padding-top: 15px;min-height: 0;">
														<div class="row" style="font-weight: bold;">
															<span>Referred By</span>
														</div>
														<div class="row">
															<div class="form-sec-header" style="width: 20%;float: left;margin-top: 20px;">
																<img style="width: 50px;height: 50px;" src="<?php echo $agent_profile_pic;?> ">
															</div>
															<div class="form-sec-header" style="width: 80%;float: left;">
																<label><?php echo $agent_fname." ".$agent_lname;?></label>
																<input type="text" class="form-control" value="<?php echo $ref; ?>" readonly>
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
<script src="<?php echo base_url('assets/agent-assets/js/countries.js');?>"></script>

<script type="text/javascript">

var base_url = '<?php echo base_url() ?>'; //form submited

populateCountries("country", "state");

//admin email validate form submit

$('#user_email').blur(function(e){

        e.preventDefault();
          
            var form_data = new FormData(this);

             var email = $('#user_email').val();
             form_data.append('user_email',email);
        
       if(email.trim().length == 0)  
       {
          $("#user_email_error").html('<p style="color:red; font-weight:bold;">Sorry! This field is not empty</p>');
       }
       else
       {
            $.ajax({
                    url : base_url+'agent/validate_email/',
                    method: 'POST',
                    data: form_data,
                    processData: false,
                    contentType: false,
                    dataType:'json',
                    context:this,

                    error: function(xhr,status,error)
                    {   
                        alert(xhr.responseText);
                    },                   
                    
                    success: function(response)
                    {
                      if(response.status == 'success')
                        {
                            $("#user_email_error").html('<p style="color:red; font-weight:bold;">Sorry! Already have this Email try new</p>');
                        }
                      else 
                        {                       
                            $("#user_email_error").html('<p style="color:green; font-weight:bold;"></p>');
                        }          
                    }

                  });
        }
 });



 // register form submit here

    $(document).on("submit", "#register", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                             
                                  country:"required",   
                                  state:"required", 
                                  first_name:"required", 
                                  last_name:"required", 
                                  email:
                                    {
                                      required : true,
                                      email: true
                                     },  
                                  phone_no: 
                                  {
                                     required : true,
                                     digits: true
                                  },
                                  password:"required", 
                                                 
                                },

                          messages: {  

                                  country: {
                                      required: "Required", 
                                  },  

                                  state: {
                                      required: "Required", 
                                  },
                                  first_name: {
                                      required: "Required", 
                                  },
                                  last_name: {
                                      required: "Required", 
                                  },
                                  email: {
                                     required: "Please Enter a Valid Email Address",
                                  },
                                  phone_no: {
                                      required: "Required", 
                                  },
                                  password: {
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
                       		swal("User Registered Successfully......");
                       	 // swal({
                         //        title: "Success!",
                         //        text: "User Registered Successfully...",
                         //        type: "success",
                         //        timer: 2000
                         //    }).then(() => {                     
                         //          window.location.href ='<?php echo base_url('agent/otp'); ?>';
                         //        });;  
                      	}
                        else 
                        {                       
                          swal("Something went wrong...");
                        }          
                    }

            });
        }     

 }); 
</script>

</body>



</html>