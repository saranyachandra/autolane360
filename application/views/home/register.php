<?php $this->load->view('includes/site_css') ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/intlTelInput.css'); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
body {
	font-family: 'Overpass', sans-serif!important;
}
h1, h2, h3, h4, h5, h6 {
	font-family: 'Overpass', sans-serif!important;
}
label {
	font-family: 'Overpass', sans-serif!important;
}
::placeholder, select option {
	font-family: 'Overpass', sans-serif!important;
}


.btn {
	font-size: 15px!important;
}
.tab {
	float: left;
	border: 1px solid #ccc;
	background-color: #f1f1f1;
	width: 15%;
	margin-bottom: 460px;
	font-family: 'Overpass', sans-serif!important;
}
/* Style the buttons inside the tab */
.tab button {
	display: block;
	background-color: inherit;
	color: black;
	font-family: 'Overpass', sans-serif!important;
	padding: 13px 16px;
	width: 100%;
	border: none;
	outline: none;
	text-align: left;
	cursor: pointer;
	transition: 0.3s;
	font-size: 15px;
}
/* Change background color of buttons on hover */
.tab button:hover {
	background-color: #ddd;
	font-family: 'Overpass', sans-serif!important;
}
/* Create an active/current "tab button" class */
.tab button.active {
	background-color: #ccc;
	font-family: 'Overpass', sans-serif!important;
}
/* Style the tab content */
.tabcontent {
	float: left;
	padding: 0px 12px;
	border: 0px solid #ccc;
	width: 85%;
	border-left: none;
	height: 300px;
}
.intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input, .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input[type=text], .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input[type=tel] {
    padding-left: 100px;
    width: 176%;
    }

@media (max-width:768px) {
.tab {
	float: left;
	border: 1px solid #ccc;
	background-color: #f1f1f1;
	width: 100%;
	margin-bottom: 20px;
	font-family: 'Overpass', sans-serif!important;
}
.tab button {
	display: block;
	background-color: inherit;
	color: black;
	font-family: 'Overpass', sans-serif!important;
	padding: 22px 16px;
	width: 100%;
	border: none;
	outline: none;
	text-align: left;
	cursor: pointer;
	transition: 0.3s;
	font-size: 15px;
}
.tabcontent {
	float: left;
	padding: 0px 12px;
	border: 0px solid #ccc;
	width: 100%;
	border-left: none;
	height: 1195px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
  border-color: #888 transparent transparent transparent;
  border-style: solid;
  border-width: 5px 4px 0 4px;
  height: 0;
  right: 275%;
  margin-left: -4px;
  margin-top: 3px;
  position: absolute;
  top: 50%;
  width: 0;
}
.select2-container .select2-selection--single {
  box-sizing: border-box;
  cursor: pointer;
  display: block;
  height: 40px;
  width: 82%;
  line-height: 40px;
  user-select: none;
  -webkit-user-select: none;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 40px;
	font-family: 'Overpass', sans-serif!important;
}
.intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input, .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input[type=text], .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input[type=tel] {
    padding-left: 100px;
    width:107%;
    }
}
.iti-flag {
	background-image: url("<?php echo base_url('assets/images/flags/flags.png');?>");
}
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
        <h1 class="page-title">DASHBOARD</h1>
        <ul class="breadcrumbs">
          <li><a href="<?php echo base_url('home/index');?>">Home</a></li>
          <li>Buy Now</li>
        </ul>
      </div>
    </div>
    
    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    <div class="page-section" style="padding-top:20px; padding-bottom: 20px;">
      <div class="container">
        <div>
          <div class="hidden-section">
            <div class="account-action">Already Have an Account? <a class="invoker" href="#">Click here to login.</a> </div>
            <div class="content" >
              <p>If you have registered with us before, please enter your details in the boxes below. If you are a new customer please proceed with Create an Account.</p>
              <div id="login_error"></div>
              
              <!-- - - - - - - - - - - - - - Login Form - - - - - - - - - - - - - - - - -->
              
              <form id="login_form" class="contact-form type-2"  action="<?php echo base_url('login/login_auth'); ?>" method="post">
                <div class="row">
                  <div class="col-sm-6 col-md-6">
                    <label class="required">Username or email</label>
                    <input type="text" name="user_email">
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <label class="required">Password</label>
                    <input type="password" name="user_password" autocomplete="off">
                  </div>
                </div>
                <footer class="login-form-footer input-wrapper style-2">
                  <input type="checkbox" id="login-remember-me" class="type-2" name="login_remember_me">
                  <label for="login-remember-me">Remember me</label>
                </footer>
                <div class="form-column-full text-center">
                  <button type="submit" class="btn">Login</button>
                  <br>
                  <!-- <a href="#" class="link-text2 contact-button">Forgot your password?</a>  -->
                  <a href="#" class="calc-button">Forgot your password?</a>
                </div>
              </form>
              
              <!-- - - - - - - - - - - - - - End of Login Form - - - - - - - - - - - - - - - - --> 
              
            </div>
            <!--/ .content --> 
            
          </div>
          <!--/ .hidden-section -->
          
          <h3 class="border-bottom border-gray pb-2">Create an Account</h3>
          <div class="container" >
            <div class="content-element3">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'register')" id="defaultOpen">Register</button>
                    <button class="tablinks" onclick="openCity(event, 'Watch-List')">My Watch List</button>
                    <button class="tablinks" onclick="openCity(event, 'Purchases')">My Purchases</button>
                    <button class="tablinks" onclick="openCity(event, 'Car-Parts')">Request For Car Parts</button>
                    <button class="tablinks" onclick="openCity(event, 'Messages')">Messages</button>
                    <button class="tablinks" onclick="openCity(event, 'Logout')">
                    <a href="<?php echo base_url('home/main');?>">Logout </a>
                    </button>
                  </div>
                  
                  <!-- register start here -->
                  <div id="register" class="tabcontent"> 
                    
                    <!-- form start here -->

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
                              <label class="required">Phone</label>
                              <br>
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
                              <span id='message'></span> </div>
                          </div>
                        </div>
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
                                <option value="<?php echo $country_name->countryname; ?>"> <?php echo $country_name->countryname; ?> </option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6">
                              <input type="text" name="state" placeholder="Enter State" style="text-transform: capitalize;">
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
                        <div class="col-md-12 col-sm-12" style="padding:15px 0;">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <label class="required">Apply referral code and get up to 10% discount</label>
                              <input type="text" name="referral_code" placeholder="Enter Your Agent Referral Code">
                            </div>
                          </div>
                          <div class="form-column-full text-center" style="padding: 10px 0;">
                            <button type="submit" class="btn" style="background-color: #f60;color: #fff;" >Save &amp; Continue</button>
                          </div>
                          <p>You agree by providing your phone number to Autolane360 or an Autolane360 authorized representative/Agent you may recieve call/ text message from certified agent  about your interest in a purchase for marketing and future sales purposes. All agents are clearly listed on the the website for your protection and security.</p>
                        </div>
                      </form>

                  </div>
                  <!-- register end here -->
                  
                  <?php
									$fname = $this->session->userdata('user_fname');
									if($fname)
									{
								?>
                  
                  <!-- my watch list start here -->
                  <div id="Watch-List" class="tabcontent">
                    <p>WORKING</p>
                  </div>
                  <!-- my watch list  end here --> 
                  
                  <!-- my purchase start here -->
                  <div id="Purchases" class="tabcontent">
                    <table id="car_details" class="table table-bordered">
                      <thead>
                        <tr>
                          <th  scope="col">My Cars</th>
                          <th  scope="col">Buyer/Transaction Code</th>
                          <th  scope="col">Track</th>
                          <th  scope="col">Payment Confirmation</th>
                          <th  scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
						              		foreach ($car_img as $car_imgs) {
						              	?>
                        <tr>
                          <th scope="row"> <div class="row">
                              <div class="col-md-12 col-xs-12">
                                <h1 style="font-size:15px; line-height:20px;  margin:0; padding:0 0 10px 0; font-weight:bold;"> <?php echo $car_imgs->car_year." ".$car_imgs->car_brand." ".$car_imgs->car_model; ?> </h1>
                                <!-- <h3 style="font-size:13px; margin:0; padding:0;">Fully Redesigned Upscale Midsize Car</h3> --> 
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 col-xs-12"  style="margin-top:15px;"> <img style="width: 150px; height: 100px; margin-left: 0;" class="img-responsive img-thumbnail " src="<?php echo $car_imgs->admincar_stockimg ;?>" alt="nissan" /> </div>
                            </div>
                          </th>
                          <td><?php echo $car_imgs->transaction_code; ?> <br>
                            <?php echo $car_imgs->buyer_code; ?> <br>
                            
                            <!-- <a href="#" style="color:#f00;cursor: pointer;"><i class="fa fa-expand"></i> Extend Code</a> --> 
                            <a onclick="showextendModal('<?php echo base_url('home/extend_code_modal/'.$car_imgs->carstock_id); ?>');"   style="color:#f00;cursor: pointer;"><i class="fa fa-expand"></i> Extend Code</a></td>
                          <td><!--  NIS13VS29<br> --> 
                            <span style="text-decoration:underline;">Shipped On</span> <br>
                            <?php 
						                       		if($car_imgs->shipped_on != null)
						                       		{
			                                        	$shipping = strtotime($car_imgs->shipped_on);
			                                        	echo date("M jS Y",$shipping);
			                                    	}else
			                                    	{
			                                    		echo " ";
			                                    	}
			                                    ?>
                            <br>
                            <span style="text-decoration:underline;">Estimated Arrival Date</span><br>
                            <?php
						                        	if($car_imgs->arrival_date != null)
						                        	{
			                                       	 $arrival_date = strtotime($car_imgs->arrival_date);
			                                       	 echo date("M jS Y",$arrival_date);
			                                    	}else
			                                    	{
			                                    		echo " ";
			                                    	}
			                                    ?></td>
                          <td><i class="fa fa-check"></i> Payment Confirmed<br>
                            <a class="btn m-btn-1" onclick="showAjaxModal('<?php echo base_url('home/receipt_img_url/'.$car_imgs->carstock_id); ?>');" style="cursor: pointer;" ><i class="fa fa-eye"></i> Receipt</a> <br>
                            <a class="btn m-btn-1" href="#"><i class="fa fa-print"></i> Email Receipt</a></td>
                          <td><?php echo $car_imgs->status; ?><br></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- my purchase end here --> 
                  
                  <!-- Car-Parts start here -->
                  <div id="Car-Parts" class="tabcontent">
                    <p>WORKING</p>
                  </div>
                  <!-- Car-Parts  end here --> 
                  
                  <!-- Messages start here -->
                  <div id="Messages" class="tabcontent">
                    <p>WORKING</p>
                  </div>
                  <!-- Messages  end here -->
                  
                  <?php } else { echo ''; } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - --> 
    <div class="page-section">
        <?php $this->load->view('includes/newsfeeds.php'); ?>
    </div>
  <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
  
<footer id="footer" class="footer-4">

  <div class="pre-footer">
        
        <div class="container">
        
          <div class="row flex-row flex-center">
            <div class="col-md-7 col-sm-12">
              
              <form id="newsletter">
                <p class="f-left align-right">Sign up now and get exclusive offers <br> and news straight to your inbox!</p>
                <button type="submit" class="btn-email btn btn-style-2 f-right" data-type="submit"><i class="licon-envelope"></i></button>
                <div class="wrapper">
                  <input type="email" placeholder="Enter your email address" name="newsletter-email">
                </div> 
              </form>

            </div>
            <div class="col-md-5 col-sm-12">
              
              <div class="flex-row">
                <span>Connect With Us</span>
                <ul class="social-icons">
                  
                  <li><a target="_blank" href="https://www.facebook.com/autolane360"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <!-- <li><a href="#"><i class="icon-youtube-play"></i></a></li> -->
                  <!-- <li><a href="#"><i class="icon-gplus-3"></i></a></li> -->
                  <li><a href="#"><i class="icon-instagram-5"></i></a></li>
                  <!-- <li><a href="#"><i class="icon-linkedin-3"></i></a></li> -->
                
                </ul>
              </div>

            </div>
          </div>

        </div>

      </div>

        <!-- Top footer -->
      <div class="top-footer">
        
        <div class="container">
          
          <div class="flex-row">

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
              
              <div class="widget">

                <h5 class="widget-title">About Us</h5>
                <p>
                    Autolane360 is a Houston Based car sales company with branches in San Antonio Texas, Nigerian and Ghana. The founders of the company have been buying and selling used cars in US. 
                </p>
                <p>Auto-Market for the past 10 years and partnered various used cars companies across the USA thereby creating a huge network of both auction stock cars to dealership stocks cars.  </p>
                
              </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
              
              <div class="widget">
                <h5 class="widget-title">Company</h5>
                <ul class="info-links">
                      
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">How It Works</a></li>
                  <li><a href="#">News Feeds</a></li>
                  <li><a href="#">Agent List</a></li>
                  <li><a href="#">Direct Buy Lane</a></li>

                </ul>
              </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">

              <div class="widget">
                <h5 class="widget-title">Services</h5>
                <ul class="info-links">
                      
                  <li><a href="#">Car Parts</a></li>
                  <li><a href="#">Disclaimer</a></li>
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Shipping Policy</a></li>
                  <li><a href="#">Agent Login</a></li>

                </ul>
              </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
              
              <div class="widget">
                <h5 class="widget-title">Locations</h5>
                <ul class="info-links">
                      
                  <li><a href="#">USA</a></li>
                  <li><a href="#">Ghana</a></li>
                  <li><a href="#">Nigeria</a></li>
                  
                </ul>
              </div>

            </div>
            

          </div>

        </div>

        <div class="container">          
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="col-md-3 col-md-offset-3 col-xs-12 col-sm-12 ">               
                <div class="b-topBar__nav" style="border-right: none!important;">
                  <div class="dropdown" style="padding-top: 10px; margin-left: 10px;">
                      <div class="auto-custom-select">
                        <select id="country_filter" data-default-text="Select Country">
                          <option value="Ghana">Ghana</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="United States">USA</option>
                        </select>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-xs-12 col-sm-12">
                <!-- <a href="javascript:;" class="link-text2 contact-button btn" style="background-color: #f60; margin: 10px 10px 0;color: #fff;text-align: center; width:97%; height:45px; line-height:30px; text-decoration:none;">Agent Login</a> -->

                <a href="javascript:;" class="contact-button btn" style="background-color: #f60; margin: 10px 10px 0;color: #fff;text-align: center; width:97%; height:45px; line-height:30px; text-decoration:none;">Agent Login</a>
               
              </div>
            </div>
          </div>
        </div>

      </div>
      

      <!-- Copyright -->
      <div class="copyright-section">
      
        <div class="container">
          
          <div class="copyright align-center">Copyright Autolane360 © 2018. All Rights Reserved.</div>

        </div>

      </div>
      
    </footer>
  <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - --> 
  
</div>

<!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - --> 

<!-- forget model popup -->
<div class="popup-holder popup-calc">
  <div class="popup">
    <div class="calculation-form text-center">
      <div class="row" style="margin-bottom: 20px;" >
        <div class="col-sm-6 col-md-6  col-md-offset-3"> <img src="<?php echo base_url('assets/images/logo.png');?>" alt=""> </div>
      </div>
      <form id="forget_form" action="<?php echo base_url('login/forget_password'); ?>"  method="POST" enctype="multipart/form-data">
        <div id="forget_result"></div>
        <div class="row" style="margin-bottom: 20px;">
          <div class="col-sm-6 col-md-6 col-md-offset-3">
            <input type="text" name="user_email" placeholder="Enter Your Email..">
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn" style="background-color: #f60;color: #fff;"> Get Password </button>
          </div>
      </form>
    </div>
  </div>
  <a href="javascript:;" class="closePopup close-search-form"></a> 
</div>
  
  <!-- login model popup -->

   <div class="popup-holder popup-contact">

    <div class="popup">
      <div class="question-form">                      
        <h5 class="section-title text-center">Agent Login Here</h5> 

        <div id="error_result"></div>   
        <form id="agent_login" action="<?php echo base_url('agent_login/agent_login_auth'); ?>"  method="POST" enctype="multipart/form-data">
          <div class="form-cols">            
            <div class="form-collumn col-sm-6 col-md-12">
              <input type="text" name="agent_email" placeholder="Email">
              <input type="password" name="agent_password" placeholder="Password">              
            </div>
          </div>
          <button class="btn btn-style-3">Login</button> 
        </form>
      </div>
    </div>

    <a href="javascript:;" class="closePopup close-search-form"></a>

    </div>


<!-- (Ajax Modal)-->
<div class="modal fade" id="modal_ajax" role="dialog" style="z-index:99999;">
  <div class="modal-dialog">
    <div class="modal-content"> 
      
      <!-- ajax response goes here --> 
      
    </div>
  </div>
</div>

<!-- JS Libs & Plugins
  ============================================ --> 

<script src="<?php echo base_url('assets/js/intlTelInput.min.js');?>"></script> 
<script src="<?php echo base_url('assets/js/intlTelInput.js');?>"></script> 
<script src="<?php echo base_url('assets/js/intlTelInput-jquery.min.js');?>"></script>
<?php $this->load->view('includes/site_js') ?>
<script type="text/javascript">

	var base_url = '<?php echo base_url(); ?>';

	var page_name = '<?php echo $page_name; ?>';

// here onclick function to show model popup receipt
function showAjaxModal(url)
  {       
        // LOADING THE AJAX MODAL
        jQuery('#modal_ajax').modal('show', {backdrop: 'true'});
        
        // SHOW AJAX RESPONSE ON REQUEST SUCCESS
        $.ajax({
            url: url,
            success: function(response)
            {
                jQuery('#modal_ajax .modal-content').html(response);
            }
        });
  }	

// here onclick function to show model popup for extend code
function showextendModal(url)
  {       
        // LOADING THE AJAX MODAL
        jQuery('#modal_ajax').modal('show', {backdrop: 'true'});
        
        // SHOW AJAX RESPONSE ON REQUEST SUCCESS
        $.ajax({
            url: url,
            success: function(response)
            {
                jQuery('#modal_ajax .modal-content').html(response);
            }
        });
  }

// data table 
$(document).ready(function () {
    

    if(page_name == 'login')
    {
    	$(".invoker").click();
    }


    $('#car_details').DataTable({
       
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,      
        // "scrollX": true,       
        // "search": {"search": today_date},       
        
    });                                                         
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
                                  
                                  user_email: {
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
                         	window.location.href =  base_url+'home/main/';
                        }                      
                       
                        else 
                        {                       
                          	$("#login_error").html('<p style="color:red;">Sorry! Username or password wrong...</p>');
                        }          
                    }

           });
    }     

 });

// forget password form submited 
var base_url = '<?php echo base_url() ?>'; 


    $(document).on("submit", "#forget_form", function(e){

        e.preventDefault();
       
            var url = $(this).attr('action');
            var formdata = new FormData(this);

         $(this).validate({ 
                         rules: {                          
                                  user_email:
                                    {
                                      required : true,
                                      email: true
                                    }, 
                                },

                          messages: {                           
                                 
                                  user_email: {
                                      required: "Please Enter a Valid Email Address",
                                  }, 
                                 

                             },

                        }); 

    if($(this).valid())
        {         
          
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
                          $("#forget_result").html('<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Success!</strong> Password Send your email Plz Check. </div>');
                          // window.location.href = "<?php echo base_url('home/index'); ?>";
                      }
                      else 
                      {                       
                          $("#forget_result").html('<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Try again!</strong> Something went wrong. </div>');
                      }   
                              
                    }

                  });
          }

 });



// tab view
function openCity(evt, cityName) {

    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");

	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }

   	   tablinks = document.getElementsByClassName("tablinks");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].className = tablinks[i].className.replace(" active", "");
	    }


	    document.getElementById(cityName).style.display = "block";
	    evt.currentTarget.className += " active";
	
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


</script>
</body>
</html>