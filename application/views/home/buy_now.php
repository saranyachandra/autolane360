
<?php $this->load->view('includes/site_css') ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/intlTelInput.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/css/bootstrap.min.css'); ?>">

<style type="text/css">
	h1, h2, h3, h4, h5, h6
	{
		font-family: 'Overpass', sans-serif!important;
	}
	.btn{
		font-size: 15px!important;
	}
	.iti-flag {background-image: url("<?php echo base_url('assets/images/flags/flags.png');?>");}

	
</style>
<body>

	<div id="loader">
		<div class="box loading"></div>
	</div>


	<!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

	<div id="wrapper" class="wrapper-container">

		<!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

		<nav id="mobile-advanced" class="mobile-advanced"></nav>

		<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

		<header id="header" class="header-4">

			<?php $this->load->view('includes/header_menu') ?>
		</header>

		<!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->

		<!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

		<div id="content" style="background-color:#f2f3f3;">

			<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

			<div class="breadcrumbs-wrap" data-bg="<?php echo base_url('assets/images/1920x200_img1.jpg');?>">

				<div class="container">

					<h1 class="page-title">Buy Now</h1>

					<ul class="breadcrumbs">
						<li><a href="<?php echo base_url('home/index');?>">Home</a></li>
						<li>Buy Now</li>
					</ul>
				</div>

			</div>

			<!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
			<div class="page-section" style="padding-top:20px; padding-bottom: 20px;">
				<div class="container">
					
					
					<div id="smartwizard">
						<ul>
							<li><a href="#step-1">Step 1<br /><small>Register and Login</small></a></li>
							<li><a href="#step-2">Step 2<br /><small>Get Your Assigned Trans Code</small></a></li>
							<li><a href="#step-3">Step 3<br /><small>Contact Us  via Phone/ Whatsapp Call</small></a></li>
							<li><a href="#step-4">Step 4<br /><small>Make Your Payment to our Bank</small></a></li>
							<li><a href="#step-5">Step 5<br /><small>Track Your Payment</small></a></li>
							<!-- <li><a href="#step-5">Step 5<br /><small>Track Your Payment </small></a></li> -->
						</ul>

						<div>


							<div id="step-1" class="">
									<div class="hidden-section">

											<div class="account-action" style="margin-top: 20px;">Already Have an Account? 
												<a class="invoker" href="#">Click here to login.</a>
											</div>
								
											<div class="content">
								
											  <p>If you have registered with us before, please enter your details in the boxes below. If you are a new customer please proceed with Create an Account.</p>
								
											  <!-- - - - - - - - - - - - - - Login Form - - - - - - - - - - - - - - - - -->
												<div id="login_error"></div>
											 <form id="login_form" class="contact-form type-2"  action="<?php echo base_url('login/login_auth'); ?>" method="post">
								
												<div class="row">
												  <div class="col-sm-6">													
													<label class="required">Username or email</label>
													<input type="text" name="user_email">
													<footer class="login-form-footer input-wrapper style-2">								
													  <input type="checkbox" id="login-remember-me" class="type-2" name="login_remember_me">
													  <label for="login-remember-me">Remember me</label>								
													</footer>								
												  </div>

												  <div class="col-sm-6">
													<label class="required">Password</label>
													<input type="password" name="user_password" autocomplete="off">
												  </div>

												</div>

												<div class="form-column-full text-center">
													<button type="submit" class="btn" style="background-color: #f60; color: #fff;">Login</button><br>
												  <a href="#" class="link-text2">Forgot your password?</a>
												</div>
								
											</form>
								
											  <!-- - - - - - - - - - - - - - End of Login Form - - - - - - - - - - - - - - - - -->
								
											</div><!--/ .content -->
								
										  </div><!--/ .hidden-section -->
								<h3 class="border-bottom border-gray pb-2">Create an Account</h3>
								<div class="container" style="padding-top:30px;">
										<div class="content-element3">
					
											<div class="row">
												<div class="col-md-8 col-sm-12">
					
													<div class="content-element8">
					
													<form id="register_form" class="contact-form type-2"  action="<?php echo base_url('login/insert_register'); ?>" method="post">
					
												<div class="content-element8">			
					
														<div class="row">
															<div class="col-sm-6 col-sm-6 col-md-6">					
																<label class="required">First Name</label>
																<input type="text" name="f_name" style="text-transform: capitalize;">					
															</div>
															<div class="col-sm-6 col-sm-6 col-md-6">					
																<label class="required">Last Name</label>
																<input type="text" name="l_name" style="text-transform: capitalize;">					
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12 col-sm-6 col-md-6">					
																<label class="required">Email</label>
																<input type="text" id="user_email" name="email">
																 <div id="email_error"></div>					
															</div>

															<div class="col-sm-6 col-sm-6 col-md-6">
																<label class="required">Phone</label><br>
																<input type="text" id="phone" name="phone_code" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
															</div>

														</div>

														<div class="row">
															<div class="col-sm-6 col-sm-6 col-md-6">
																<label class="required">Password</label>
																<input type="password" id="password" name="password">
															</div>															
															
															<div class="col-sm-6 col-sm-6 col-md-6">
																<label class="required">Retype Password</label>
																<input type="password" id="conform_pass" name="re_pass">
																<span id='message'></span>
															</div>
														</div>				
					
												</div>
					
												<?php 
													if($car_img->country == 'United States')
													{
												?>
													<div class="col-md-12 col-sm-12" style="border:2px solid #e3e3e3; border-radius: 5px; padding:15px;">
														<div class="input-wrapper style-2" style="padding:10px 0;">					
															<label for="checkbox" style="font-weight:bold;">SELECT YOUR COUNTRY OF RESIDENCE</label>
														</div>
														
															<div class="row">															
																<div class="col-md-6 col-lg-6 col-sm-6 ">
																	
																<select name="country_name" id="country" data-default-text="Select Country">
											                            <?php 
											                                foreach ($country as $country_name) {
											                            ?>
											                    <option value="<?php echo $country_name->countryname; ?>">
											                    	<?php echo $country_name->countryname; ?>
											                    		
											                    </option>
											                            <?php } ?>
											                    </select>
																</div>

																<div class="col-md-6 col-lg-6 col-sm-6">														<input type="text" name="state" placeholder="Enter State" style="text-transform: capitalize;">					
																</div>																
															</div>

															<div class="row">
																<div class="col-sm-12">					
																	<div class="input-wrapper style-2">
																		<input type="checkbox" id="car-in-usa" class="type-2" name="test" value="USA">
																		<label for="car-in-usa">I will use the car in USA</label>
																	</div>					
																</div>

																<div class="col-sm-12">					
																	<div class="input-wrapper style-2">
																		<input type="checkbox" id="car-in-other" class="type-2" name="test2" value="other">
																		<label for="car-in-other">I am Exporting the Car to</label>
																	</div>					
																</div>
															</div>			
													</div>

												<?php } ?>	

													<div class="col-md-12 col-sm-12" style="padding:15px 0;">					
														<div class="row">
															<div class="col-md-6 col-sm-12">					
																<label class="required">Apply referral code and get up to 10% discount</label>
																<input type="text" name="referral_code" placeholder="Enter Your Agent Referral Code">
															</div>
					
														</div>
					
														<div class="form-column-full" style="padding: 10px 0;">
															<button type="submit" class="btn" style="background-color: #f60; color: #fff;">Save &amp; Continue</button>
														</div>
													
														<p style="font-size:14px; line-height:22px;">You agree by providing your phone number to Autolane360 or an Autolane360 authorized representative/Agent you may recieve call/ text message from certified agent  about your interest in a purchase for marketing and future sales purposes. All agents are clearly listed on the the website for your protection and security.</p>
													</div>

													</form>
					
													</div>
																									
												</div>
					
												<div class="col-md-4 col-sm-12">					
													<div class="product" style="height:auto!important;">					
														<!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
														<a href="#"><img style="width:263;height: 173px;" src="<?php echo $car_img->admincar_stockimg ;?>" alt=""></a>
														<!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->
																			
														<div class="product-description">
					
														<h5 class="product-name" style="font-size:15px;text-transform: capitalize;" >
															<a href="#">
																<?php echo $car_img->car_year." ".$car_img->car_brand." ".$car_img->car_model;?>
															</a>
														</h5>
					
													<div class="pricing-area">					
														<div class="product-price">
																Price: 
														<?php 
									                        if($car_img->price != null)
									                        { 
									                            $price = $car_img->price;
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

														<div class="model-loc">
															<ul>
																<li><span>Shipping Info: </span> Price Includes Shipping</li>
																<li style="text-align:center; font-size: 18px; font-weight:bold; padding-top:15px;">Estimated</li>
																<li style="text-align:center;">
																	<span style="font-size:16px!important; color:rgb(58, 58, 58); text-transform:none; margin-top:10px;">
																		Customs Clearing Cost:
															<?php 
										                        if($car_img->clearing_cost != null)
										                        { 
										                            $price = $car_img->clearing_cost;
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
																	</span>
																</li>					
															</ul>
														</div>
					
														</div>

														<div class="product-description" style="background-color:#f60; margin-top:5px;padding: 1px 10px!important;height: 25px; ">					
															<div class="model-loc">
																<ul>			
																	<li style="text-align:center;">
																		<span style="font-size:11px!important; color:#fff; text-transform:none; margin-top:5px;">
																		<strong>Available Sales:</strong>
																		<?php 
									                                        $available_from = strtotime($car_img->available_from);
									                                        $available_to =  strtotime($car_img->available_to);
									                                        echo date("M j S",$available_from);
									                                        echo " To ";
									                                        echo date("M j S",$available_to);
									                                    ?>
																		</span>
																	</li>
																</ul>
															</div>					
														</div>
														<!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->
					
													</div>
					
												</div>
											</div>
					
										</div>
								</div>
							</div>

							<!-- end step 1 here -->
						

							<div id="step-2" class="">

								<!-- <h3 class="border-bottom border-gray pb-2">Step 1</h3> -->
								<div class="container" style="padding-top:30px;">
										<div class="content-element3">
					
											<div class="row">

												<!-- form start here -->
												<div class="col-md-8 col-sm-12">
													
												<div class="col-md-12 col-sm-12" style="background-color: transparent;padding: 10px 15px;border-radius: 5px; border:1px solid #ccc;">
													<p><strong>Buyer Name:</strong> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $this->session->userdata('user_fname')." ".$this->session->userdata('user_lname'); ?></p>
													<p><strong>Phone Number:</strong> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->session->userdata('user_phone'); ?> </p>
													<p><strong>Email:</strong> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->session->userdata('user_email'); ?></p>
												</div> 

												<div class="col-md-12 col-sm-12" style="background-color: transparent;padding: 10px 15px;margin-top: 10px;border-radius: 5px;border:1px solid #ccc;">
													<div class="col-md-6 col-sm-6">
														<p><strong>TRANSACTION CODE</strong></p>
														<input type="text"  name="transaction_code" id='random_number' style="text-align: center;border: 1px solid #ccc;" readonly>
													</div>
													<div class="col-md-6 col-sm-6">
														<p><strong>BUYER CODE</strong></p>
														<P>DGGB</P>
													</div>
													
												</div>
												<div class="col-md-12 col-sm-12"><span style="color:red;">Note: Code Will Expires in 48 Hours</span></div>
												<div class="col-md-12 col-sm-12"><span style="font-weight: bold;margin-top: 10px;">
													AGENT REFERRAL CODE: <?php echo $this->session->userdata('agent_ref_code'); ?>
												</span></div>

												</div>

												<!-- end form here -->
					
												<div class="col-md-4 col-sm-12">

					
													<div class="product" style="height:auto!important;">
					
														<!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
														<a href="#"><img style="width:263;height: 173px;" src="<?php echo $car_img->admincar_stockimg ;?>" alt=""></a>
														<!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->
					
														<!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
														<div class="product-description">
					
														<h5 class="product-name" style="font-size:15px;">
															<a href="#">
																<?php echo $car_img->car_year." ".$car_img->car_brand." ".$car_img->car_model;?>
															</a>
														</h5>
					
														<div class="pricing-area">					
															<div class="product-price">
																Price: 
														<?php 
									                        if($car_img->price != null)
									                        { 
									                            $price = $car_img->price;
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

														<div class="model-loc">
															<ul>
																<li><span>Shipping Info: </span> Price Includes Shipping</li>
																<li style="text-align:center; font-size: 18px; font-weight:bold; padding-top:15px;">Estimated</li>
																<li style="text-align:center;">
																	<span style="font-size:16px!important; color:rgb(58, 58, 58); text-transform:none; margin-top:10px;">
																		Customs Clearing Cost:
															<?php 
										                        if($car_img->clearing_cost != null)
										                        { 
										                            $price = $car_img->clearing_cost;
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
																	</span>
																</li>					
															</ul>
														</div>
					
														</div>

														<div class="product-description" style="background-color:#f60; margin-top:5px;padding: 1px 10px!important;height: 25px; ">					
															<div class="model-loc">
																<ul>			
																	<li style="text-align:center;">
																		<span style="font-size:11px!important; color:#fff; text-transform:none; margin-top:5px;">
																		<strong>Available Sales:</strong>
																			November15th to Dec 16th
																		</span>
																	</li>
																</ul>
															</div>					
														</div>
														<!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->
					
													</div>
					
												</div>
											</div>
					
										</div>
								</div>
							</div>

							<!-- step 2 end here  -->

							<div id="step-3" >

								<!-- <h3 class="border-bottom border-gray pb-2">Step 2</h3> -->
								<div class="container" style="padding-top:30px;">
								<div class="content-element3">
								<div class="row">
																				
									<div class="col-md-8 col-sm-12">
										<p style="text-align: center;font-weight: bold;"> FINALIZE YOUR TRANSACTION</p>
										<div style="text-align: center; background-color: transparent;padding: 10px 15px;border-radius: 10px;border:1px solid #ccc;">
													<strong>INTERNATIONAL BUYERS</strong>
													<p> Call us on directly/Whatsapp <br> To Finalize Your Purchase</p>
													<p style="color:#f60;font-weight: bold;"> +1-201-907-6887 </p>
										</div> 
									</div>

									<div class="col-md-4 col-sm-12">

					
													<div class="product" style="height:auto!important;">
					
														<!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
														<a href="#"><img style="width:263;height: 173px;" src="<?php echo $car_img->admincar_stockimg ;?>" alt=""></a>
														<!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->
					
														<!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
														<div class="product-description">
					
														<h5 class="product-name" style="font-size:15px;">
															<a href="#">
																<?php echo $car_img->car_year." ".$car_img->car_brand." ".$car_img->car_model;?>
															</a>
														</h5>
					
														<div class="pricing-area">					
															<div class="product-price">
																Price: 
														<?php 
									                        if($car_img->price != null)
									                        { 
									                            $price = $car_img->price;
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

														<div class="model-loc">
															<ul>
																<li><span>Shipping Info: </span> Price Includes Shipping</li>
																<li style="text-align:center; font-size: 18px; font-weight:bold; padding-top:15px;">Estimated</li>
																<li style="text-align:center;">
																	<span style="font-size:16px!important; color:rgb(58, 58, 58); text-transform:none; margin-top:10px;">
																		Customs Clearing Cost:
															<?php 
										                        if($car_img->clearing_cost != null)
										                        { 
										                            $price = $car_img->clearing_cost;
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
																	</span>
																</li>					
															</ul>
														</div>
					
														</div>

														<div class="product-description" style="background-color:#f60; margin-top:5px;padding: 1px 10px!important;height: 25px; ">					
															<div class="model-loc">
																<ul>			
																	<li style="text-align:center;">
																		<span style="font-size:11px!important; color:#fff; text-transform:none; margin-top:5px;">
																		<strong>Available Sales:</strong>
																			November15th to Dec 16th
																		</span>
																	</li>
																</ul>
															</div>					
														</div>
														<!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->
					
													</div>
					
									</div>
								</div>
								</div>
								</div>
							</div>
							<!-- step 3 end here  -->

							<div id="step-4" >
								<!-- <h3 class="border-bottom border-gray pb-2">Step 3</h3> -->
								<div class="container" style="padding-top:30px;">
								<div class="content-element3">
								<div class="row">
																				
									<div class="col-md-8 col-sm-12">
										<p style="text-align: center;font-weight: bold;">PAY VIA OUR PARTNER BANKS</p>	
										<div style="text-align: center; background-color:transparent;padding: 10px 15px;border-radius: 10px;border:1px solid #ccc;">
													<strong>RECEIVE AN INVOICE FOR YOUR PAYMENT <br> Via Our Email</strong>
													<p style="color:#f60;font-weight: bold;"> auto.sales@autolane360.com</p>
													<p> Once Your Payment Is Confirmed You Will <br>
														Recieve Your Receipt and Shipping  Detail Via <br>
														Email Provided  
													</p>
										</div> 
									</div>

									<div class="col-md-4 col-sm-12">

					
													<div class="product" style="height:auto!important;">
					
														<!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
														<a href="#"><img style="width:263;height: 173px;" src="<?php echo $car_img->admincar_stockimg ;?>" alt=""></a>
														<!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->
					
														<!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
														<div class="product-description">
					
														<h5 class="product-name" style="font-size:15px;">
															<a href="#">
																<?php echo $car_img->car_year." ".$car_img->car_brand." ".$car_img->car_model;?>
															</a>
														</h5>
					
														<div class="pricing-area">					
															<div class="product-price">
																Price: 
														<?php 
									                        if($car_img->price != null)
									                        { 
									                            $price = $car_img->price;
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

														<div class="model-loc">
															<ul>
																<li><span>Shipping Info: </span> Price Includes Shipping</li>
																<li style="text-align:center; font-size: 18px; font-weight:bold; padding-top:15px;">Estimated</li>
																<li style="text-align:center;">
																	<span style="font-size:16px!important; color:rgb(58, 58, 58); text-transform:none; margin-top:10px;">
																		Customs Clearing Cost:
															<?php 
										                        if($car_img->clearing_cost != null)
										                        { 
										                            $price = $car_img->clearing_cost;
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
																	</span>
																</li>					
															</ul>
														</div>
					
														</div>

														<div class="product-description" style="background-color:#f60; margin-top:5px;padding: 1px 10px!important;height: 25px; ">					
															<div class="model-loc">
																<ul>			
																	<li style="text-align:center;">
																		<span style="font-size:11px!important; color:#fff; text-transform:none; margin-top:5px;">
																		<strong>Available Sales:</strong>
																			November15th to Dec 16th
																		</span>
																	</li>
																</ul>
															</div>					
														</div>
														<!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->
					
													</div>
					
									</div>

								</div>
								</div>
								</div>
							</div>
							<!-- step 4 end here  -->

							<div id="step-5" class="">
								<!-- <h3 class="border-bottom border-gray pb-2">Step 4 Content</h3> -->
								<div class="container" style="padding-top:30px;">
								<div class="content-element3">
								<div class="row">
																				
									<div class="col-md-8 col-sm-12">
										<p style="text-align: center;font-weight: bold;">TRACK YOUR CAR/ PORT TERMINAL NOTIFICATION </p>	
										<div style="text-align: center; background-color: transparent;padding: 10px 15px;border-radius: 10px;border:1px solid #ccc;">
													<strong> GET NOTIFIED  ONCE YOUR CAR ARRIVES </strong>													
													<p> our local agent will call you for custom <br>
														clearing once your car arrives 
														  
													</p><br>
											<p style="color: #f60">	Please ask agent for their Code and confirm via listed agent names on 
											<a href="<?php echo base_url('home/agent_list');?>"> www.autolane360.com/agentlist </a> </p>
											
										</div> 
									</div>

									<div class="col-md-4 col-sm-12">

					
													<div class="product" style="height:auto!important;">
					
														<!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
														<a href="#"><img style="width:263;height: 173px;" src="<?php echo $car_img->admincar_stockimg ;?>" alt=""></a>
														<!-- - - - - - - - - - - - - - End of Product Image - - - - - - - - - - - - - - - - -->
					
														<!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
														<div class="product-description">
					
														<h5 class="product-name" style="font-size:15px;">
															<a href="#">
																<?php echo $car_img->car_year." ".$car_img->car_brand." ".$car_img->car_model;?>
															</a>
														</h5>
					
														<div class="pricing-area">					
															<div class="product-price">
																Price: 
														<?php 
									                        if($car_img->price != null)
									                        { 
									                            $price = $car_img->price;
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

														<div class="model-loc">
															<ul>
																<li><span>Shipping Info: </span> Price Includes Shipping</li>
																<li style="text-align:center; font-size: 18px; font-weight:bold; padding-top:15px;">Estimated</li>
																<li style="text-align:center;">
																	<span style="font-size:16px!important; color:rgb(58, 58, 58); text-transform:none; margin-top:10px;">
																		Customs Clearing Cost:
															<?php 
										                        if($car_img->clearing_cost != null)
										                        { 
										                            $price = $car_img->clearing_cost;
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
																	</span>
																</li>					
															</ul>
														</div>
					
														</div>

														<div class="product-description" style="background-color:#f60; margin-top:5px;padding: 1px 10px!important;height: 25px; ">					
															<div class="model-loc">
																<ul>			
																	<li style="text-align:center;">
																		<span style="font-size:11px!important; color:#fff; text-transform:none; margin-top:5px;">
																		<strong>Available Sales:</strong>
																			November15th to Dec 16th
																		</span>
																	</li>
																</ul>
															</div>					
														</div>
														<!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->
					
													</div>
					
									</div>

								</div>
								</div>
								</div>
							</div>
							<!-- step 5 end here  -->

						</div>

					</div>

				<form id="user_stock_form" action="<?php echo base_url('home/insert_mylanedata'); ?>" method="post">

					<input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">
					<input type="hidden" name="car_id" value="<?php echo $car_img->carstock_id; ?>">


					<?php 
						if(isset($user_details->first_time) && ($user_details->first_time == 0 )){

						echo '
						<div style="margin-top: 15px; text-align: center;">						
						<a href="javascript:;" style="text-decoration:none; text-transform:capitalize; background:#f60; color:#fff; font-weight:bold; border:1px solid #a1a1a1;" class="btn link-text2 contact-button">Click Here To Confirm Your Buyer Code</a>
						</div>';
					}
					else 
					{
						echo '
						<div style="margin-top: 15px; text-align: center;">
						<button type="submit" class="btn btn-info" style="text-transform:capitalize;"> Click Here To Confirm Your Buyer Code </button>
						</div>';
					}
					

					?>

				</form>	
					
				</div>
				
			</div>



		</div>

		<!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

		<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

		<footer id="footer" class="footer-4">
			<?php $this->load->view('includes/footer_menu') ?>
		
		</footer>


		<!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

	</div>

	<!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

	<!-- notification model  -->

<!--question popup-->
  <div class="popup-holder popup-contact">

    <div class="popup">

      <div class="question-form text-center">
                      
        <h5 class="section-title">Notification</h5>
        <p class="type-2 mb-3">Oops!! Car already added in Dashboard</p>

         <a class="btn btn-style-3" href="<?php echo base_url('login/register');?>"> Ok</a>

      </div>
    
    </div>

	<a href="javascript:;" class="closePopup close-search-form"></a>

  </div>

  




	<!-- JS Libs & Plugins
  ============================================ -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	
	 
 <script src="<?php echo base_url('assets/js/intlTelInput.min.js');?>"></script>
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="<?php echo base_url('assets/js/intlTelInput.js');?>"></script>
  <script src="<?php echo base_url('assets/js/intlTelInput-jquery.min.js');?>"></script>

<?php $this->load->view('includes/site_js') ?>

<script type="text/javascript">

var fname = '<?php echo $this->session->userdata('user_fname');?>'

// console.log(fname);
	

	// generate ramdom number
function randString(x){
    var s = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    while(s.length<x&&x>0){
        var r = Math.random();
        s+= possible.charAt(Math.floor(Math.random() * possible.length));
    }
    return s;
}

document.getElementById("random_number").value = randString(8);

 $( document ).ready(function() {
 		var ran_no = $('#random_number').val();
        $("#get_random_no").val(ran_no);
    });

// select2 option

	$("#country").select2();
	$("#country_code").select2();


// country code
	// $("#phone").intlTelInput();

	var input = document.querySelector("#phone");

    window.intlTelInput(input,{
    	separateDialCode: true,
    });
    	

    $('#password, #conform_pass').on('keyup', function () {
	  if ($('#password').val() == $('#conform_pass').val()) {
	    $('#message').html('Matching').css('color', 'green');
	  } else 
	    $('#message').html('Not Matching').css('color', 'red');
	});


// email validate form submit

$('#user_email').blur(function(e){

        e.preventDefault();
          
            var form_data = new FormData(this);

             var email = $('#user_email').val();
             form_data.append('user_email',email);

        
       if(email.trim().length == 0)  
       {
          $("#email_error").html('<p style="color:red; font-weight:bold;">Sorry! This field is not empty</p>');
       }
       else
        {
            $.ajax({
                    url : base_url+'login/validate_email/',
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
                          $("#email_error").html('<p style="color:red;">Sorry! Already have this Email try new</p>');
                        }
                      else 
                        {                       
                          $("#email_error").html('<p style="color:green; font-weight:bold;"></p>');
                        }          
                    }

                  });
        }
 });


// register form submit

  $(document).on("submit", "#register_form", function(e){

        e.preventDefault();

        $(this).validate({ 

                         rules: {                             
                                  f_name:"required",                  
                                  l_name: "required",
                                  email:
                                    {
                                      required : true,
                                      email: true
                                     }, 
                                  password: "required",
                                  re_pass: "required",  
                                  phone_code: "required",                                   
                                  country_name: "required",             
                                },

                          messages: 
                                {                           
                                  f_name: {
                                      required: "Required", 
                                  }, 
                                  l_name: {
                                      required: "Required ", 
                                  }, 
                                  email: {
                                      required: "Please Enter a Valid Email Address",                                    
                                  }, 
                                  password: {
                                      required: "Required", 
                                  }, 

                                  re_pass: {
                                      required: "Required", 
                                  },

                                  phone_code: {
                                      required: "Required", 
                                  },
                                  
                                   country_name: {
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
                          document.getElementById("register_form").reset();
                          swal("Your Account is Registered Successfully!!");
                       
                        }                      
                       
                        else 
                        {                       
                          swal("Something went wrong plz try again later..");
                        }          
                    }

           });
    }     

 });



 // login form submit

  $(document).on("submit", "#login_form", function(e){

        e.preventDefault();

        $(this).validate({ 

                        rules: {                             
                                  user_email:
                                    {
                                      required : true,
                                      email: true
                                    }, 
                                  user_password: "required",
                                             
                                },

                        messages: 
                                {                           
                                  
                                  email: {
                                      required: "Please Enter a Valid Email Address",                                    
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
                         	// window.location.href =  base_url+'home/buy_now/';
                         	// $('#smartwizard').smartWizard('next');
                         	location.reload();
                        }                      
                       
                        else 
                        {                       
                          	$("#login_error").html('<p style="color:red;">Sorry! Username or password wrong...</p>');
                        }          
                    },

           });
    }     

 });



//form submited
var base_url = '<?php echo base_url() ?>'; 

    $(document).on("submit", "#user_stock_form", function(e){

        e.preventDefault();

        var transaction_code = $("#random_number").val();
       	var url = $(this).attr('action');

        var formdata = new FormData(this);

        formdata.append("t_code", transaction_code);
          
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
                         	
                         	swal({
                                title: "Success!",
                                text: "This Car added your dashboard Successfully!!",
                                type: "success",
                                timer: 3000
                            }).then(() => {                     
                                  window.location.href = "<?php echo base_url('login/register'); ?>";
                                });;  

                       
                        }
                        else 
                        {                       
                           swal("Something went wrong try again..");
                        }          
                    }
           });       

 });

		
	$(document).ready(function () {
		var selected_tab; 
		var disabledSteps;

		if(fname)
		{
			selected_tab = 1;
			disabledSteps = [0];
		}
		else
		{
			selected_tab = 0;
			disabledSteps = [1,2,3,4];
		}

			// Step show event
			$("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
				//alert("You are on step "+stepNumber+" now");
				if (stepPosition === 'first') {
					$("#prev-btn").addClass('disabled');
				} else if (stepPosition === 'final') {
					$("#next-btn").addClass('disabled');
				} else {
					$("#prev-btn").removeClass('disabled');
					$("#next-btn").removeClass('disabled');
				}
			});

			// Toolbar extra buttons
			var btnFinish = $('<button></button>').text('Finish')
				.addClass('btn btn-info')
				// .on('click', function () { alert('Finish Clicked'); });
			var btnCancel = $('<button></button>').text('Cancel')
				.addClass('btn btn-danger')
				.on('click', function () { $('#smartwizard').smartWizard("reset"); });

			

			$('#smartwizard').smartWizard({
				// Properties
				selected: selected_tab,  // Selected Step, 0 = first step   
				theme: 'arrows',
				keyNavigation: true, // Enable/Disable key navigation(left and right keys are used if enabled)
				enableAllSteps: false,  // Enable/Disable all steps on first load
				transitionEffect: 'fade', // Effect on navigation, none/fade/slide/slideleft
				contentURL: null, // specifying content url enables ajax content loading
				contentURLData: null, // override ajax query parameters
				contentCache: true, // cache step contents, if false content is fetched always from ajax url
				cycleSteps: false, // cycle step navigation
				enableFinishButton: false, // makes finish button enabled always
				hideButtonsOnDisabled: false, // when the previous/next/finish buttons are disabled, hide them instead
				errorSteps: [],    // array of step numbers to highlighting as error steps
				labelNext: 'Next', // label for Next button
				labelPrevious: 'Previous', // label for Previous button
				labelFinish: 'Finish',  // label for Finish button        
				noForwardJumping: false,
				ajaxType: 'POST',
				// Events
				onLeaveStep: null, // triggers when leaving a step
				onShowStep: null,  // triggers when showing a step
				onFinish: null,  // triggers when Finish button is clicked  
				buttonOrder: ['finish', 'next', 'prev'],  // button order, to hide a button remove it from the list
				useURLhash: false,
				showStepURLhash: false,
				disabledSteps:disabledSteps
			});


			// External Button Events
			$("#reset-btn").on("click", function () {
				// Reset wizard
				$('#smartwizard').smartWizard("reset");
				return true;
			});

			$("#prev-btn").on("click", function () {
				// Navigate previous
				$('#smartwizard').smartWizard("prev");
				return true;
			});

			$("#next-btn").on("click", function () {
				// Navigate next
				$('#smartwizard').smartWizard("next");
				return true;
			});

			// $("#theme_selector").on("change", function () {
			// 	// Change theme				
			// 	$('#smartwizard').smartWizard("theme", "arrows");
			// 	return true;
			// });

			// Set selected theme on page refresh
			// $("#theme_selector").change();
			$('#smartwizard').smartWizard("theme", "arrows");

			// $('#smartwizard').smartWizard('goToPage', 2); 

		});






</script>
	

</body>

</html>