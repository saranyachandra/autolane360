<!-- include css file here -->
<?php $this->load->view('includes/agent_site_css'); ?>

<style type="text/css">
  .x_slider_form_input_wrapper textarea {
    width: 520px;
    height: 150px;
    padding-left: 10px;
    border: 1px solid #eeeeee;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
  }

.x_slider_checout_right li a {
    float: left;
    width: 100%;
    height: 50px;
    line-height: 45px;
    text-align: center;
    background: #ff6600;
    color: #ffffff;
    padding: 0px 15px;
    border: 1px solid transparent;
    text-transform: uppercase;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
}

.x_slider_checout_right {
      text-align: center;
      width: 100%;
      padding-top: 30px;
      float: left !important;
}

.x_avanticar_btn a {
    display: inline-block;
    position: relative;
    width: 170px;
    height: 50px;
    line-height: 45px;
    text-align: center;
    background: #ff6600;
    color: #ffffff;
    border: 1px solid transparent;
    text-transform: uppercase;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
}

.x_car_offer_heading_listing li {
    width: 15.33% !important;
    text-align: left;
}
.table-bordered td, .table-bordered th {
  border:1px solid #edac81!important;
}

</style>
</head>

<body>

    <?php $this->load->view('includes/agentsite_header'); ?>

    <!-- hs Navigation Start -->
  
    <!-- hs Navigation End -->
  


    <div class="container">
      <div class="x_css_tabs_wrapper float_left">
                  <div class="x_css_tabs_main_wrapper float_left">
                    <ul class="nav nav-tabs">
                      <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#USA"> USA</a></li>
                      <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Nigeria">Nigeria</a> </li>
                      <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Ghana">Ghana</a></li>
                      <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Canada">Canada</a> </li>
                      <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#UK">UK</a></li>
                    </ul>
                  </div>

                  <div class="tab-content">
                      <!-- usa start here -->
                    <div id="USA" class="tab-pane active">
                        <div class="x_car_detail_descrip"> 
                           
                          <div class="row">   

                                    <?php 
                                      foreach ($user_detail as $user_details) {
                                        if($user_details->admin_country == "United States")
                                          {
                                    ?>
                                     <div class="col-md-6"> 
                                      <div class="row">  
                                      <div class="col-md-4">
                                        <?php 
                                          if(!empty($user_details->image))
                                          {
                                        ?>
                                        <img style="height:170px;"   class="img-responsive img-thumbnail" src="<?php echo $user_details->image; ?>" alt="profile_pic">
                                        <?php } else { ?>
                                        <img style="height:170px;" class="img-responsive img-thumbnail" src="<?php echo base_url('assets/agent_profile-pic/default-avatar.jpg'); ?>" alt="profile_pic">
                        
                                        <?php } ?>
                                        <br>
                                        <div style="font-size:15px; color:#333; padding-top:5px;">
                                          <?php echo $user_details->agent_code;?>
                                          <a href="<?php echo base_url('agent/register/'.$user_details->agent_code); ?>" target="_blank" style="color:#f60; font-weight:bold;">/ Register</a>
                                        </div>
                                      </div>

                                      <div class="col-md-8">
                                        <table class="table table-bordered" style="text-align: left!important; margin-bottom:15px;">
                                          <tbody>
                                            <tr>
                                              <td width="25%">Name:</td>
                                              <td width="75%"><?php echo $user_details->admin_fname." ".$user_details->admin_lname ;?></td>
                                              </tr>
                                              <tr>
                                              <td width="25%">Email:</td>
                                              <td width="75%"><?php echo $user_details->admin_email;?></td>
                                              </tr>
                                              <tr>
                                              <td width="25%">City:</td>
                                              <td width="75%"><?php echo $user_details->admin_city;?></td>
                                              </tr>
                                              <tr>
                                              <td width="25%">Country:</td>
                                              <td width="75%"><?php echo $user_details->admin_country;?></td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                    </div>   
                                  
                                    <?php }  } ?>   
                          </div>
                        </div>
                         
                      
                    </div>

                      <!-- nigeria start here -->
                    <div id="Nigeria" class="tab-pane fade">
                      <div class="container x_car_detail_descrip ">
                      
                        <div class="row">
                        
                                    <?php 
                                      foreach ($user_detail as $user_details) {
                                        if($user_details->admin_country == "Nigeria")
                                      {
                                    ?>
                                <div class="col-md-6">       
                                   <div class="row">     
                                        <div class="col-md-4 ">
                                          <?php 
                                            if(!empty($user_details->image))
                                            {
                                          ?>
                                          <img style="height:170px;width: 200px;" class="img-responsive img-thumbnail" src="<?php echo $user_details->image; ?>" alt="profile_pic">
                                          <?php } else { ?>
                                          <img style="height:170px;" class="img-responsive img-thumbnail" src="<?php echo base_url('assets/agent_profile-pic/default-avatar.jpg'); ?>" alt="profile_pic">
                                          <?php } ?>
                                          <div style="font-size:15px; color:#333; padding-top:5px;"><?php echo $user_details->agent_code;?>
                                            <a href="<?php echo base_url('agent/register/'.$user_details->agent_code); ?>" target="_blank" style="color:#f60; font-weight:bold;">/ Register</a>
                                          </div>
                                        </div>
                                        <div class="col-md-8 "> 
                                       
                                          <table class="table table-bordered" style="text-align: left!important; margin-bottom:25px;">
                                            <tbody>
                                              <tr>
                                                 <td width="25%"><strong>Name:</strong></td>
                                                 <td width="75%"><?php echo $user_details->admin_fname." ".$user_details->admin_lname ;?></td>
                                              </tr>
                                               
                                              <tr>
                                                 <td width="25%"><strong>Email:</strong></td>
                                                 <td width="75%"><?php echo $user_details->admin_email;?></td>
                                              </tr>
                                                                                             
                                              <tr>
                                                 <td width="25%"><strong>City:</strong></td>
                                                 <td width="75%"><?php echo $user_details->admin_city;?></td>
                                              </tr>
                                               
                                              <tr>
                                                 <td width="25%"><strong>Country:</strong></td>
                                                 <td width="75%"><?php echo $user_details->admin_country;?></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        
                                      </div>
                                    
                                      
                                  </div>  
                                </div>   
                                    <?php } } ?>   
                        
                        </div>
                               
                      </div>
                    </div>

                      <!-- ghana start here -->
                    <div id="Ghana" class="tab-pane fade">
                      <div class="x_car_detail_descrip">
                        <div class="row">
                                    <?php 
                                      
                                      foreach ($user_detail as $user_details) {
                                        if($user_details->admin_country == "Ghana")
                                       {
                                    ?>

                                    <div class="col-md-6"> 
                                    <div class="row">      
                                      <div class="col-md-4">  
                                         

                                      <?php 
                                          if(!empty($user_details->image))
                                          {
                                      ?>
                                      <img  style="height: 170px;" class="img-responsive img-thumbnail" src="<?php echo $user_details->image; ?>" alt="profile_pic">
                                      <?php } else { ?>
                                      <img style="height: 170px;" class="img-responsive img-thumbnail" src="<?php echo base_url('assets/agent_profile-pic/default-avatar.jpg'); ?>" alt="profile_pic">
                                      <?php } ?>
                                      <div style="font-size:15px; color:#333; padding-top:5px;"><?php echo $user_details->agent_code;?>
                        
                                        <a href="<?php echo base_url('agent/register/'.$user_details->agent_code); ?>" target="_blank" style="color:#f60; font-weight:bold;">/ Register</a>
                                      </div>
                                      </div>
                                      <div class="col-md-8"> 
                                        <table class="table table-bordered" style="text-align: left!important; margin-top:10px;">  
                                          <tbody>
                                            <tr>
                                              <td width="25%">Name:</td>
                                              <td width="75%"><?php echo $user_details->admin_fname." ".$user_details->admin_lname ;?></td>
                                            </tr>
                                            <tr>
                                              <td width="25%">Email:</td>
                                              <td width="75%"><?php echo $user_details->admin_email;?></td>
                                            </tr>

                                            <tr>
                                              <td width="25%">City:</td>
                                              <td width="75%"><?php echo $user_details->admin_city;?></td>
                                            </tr>

                                            <tr>
                                              <td width="25%">Country:</td>
                                              <td width="75%"><?php echo $user_details->admin_country;?></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                     
                                    </div> 
                                    <?php } }  ?>  
                        </div>
                      </div>
                    </div>

                        <!-- canada start here -->
                    <div id="Canada" class="tab-pane fade">
                      <div class="x_car_detail_descrip">
                        <div class="row">
                                    <?php 
                                      $i = 0;
                                      foreach ($user_detail as $user_details) {
                                        if($user_details->admin_country == "Canada")
                                       {
                                    ?>
                                    <div class="col-md-6"> 
                                    <div class="row">    
                                    <div class="col-md-4">  
                                        <?php 
                                            if(!empty($user_details->image))
                                            {
                                        ?>
                                      <img  style="height: 170px;" class="img-responsive img-thumbnail" src="<?php echo base_url('assets/agent_profile-pic/'.$user_details->image ); ?>" alt="profile_pic">
                                      <?php } else { ?>
                                      <img style="height: 170px;" class="img-responsive img-thumbnail" src="<?php echo base_url('assets/agent_profile-pic/default-avatar.jpg'); ?>" alt="profile_pic">
                                      <?php } ?>
                                      <div style="font-size:15px; color:#333; padding-top:5px;"><?php echo $user_details->agent_code;?>
                        
                                        <a href="<?php echo base_url('agent/register/'.$user_details->agent_code); ?>" target="_blank" style="color:#f60; font-weight:bold;">/ Register</a>
                                      </div>
                                    </div>
                                    <div class="col-md-8">
                                      <table class="table table-bordered" style="text-align: left!important; margin-top:10px;">            
                                        <tbody>
                                          <tr>
                                            <td width="25%">Name:</td>
                                            <td width="75%"><?php echo $user_details->admin_fname." ".$user_details->admin_lname ;?></td>
                                          </tr>
                                          <tr>
                                            <td width="25%">Email:</td>
                                            <td width="75%"><?php echo $user_details->admin_email;?></td>
                                          </tr>
                                          <tr>
                                            <td width="25%">City:</td>
                                            <td width="75%"><?php echo $user_details->admin_city;?></td>
                                          </tr>
                                          <tr>
                                            <td width="25%">Country:</td>
                                            <td width="75%"><?php echo $user_details->admin_country;?></td>
                                          </tr>
                            
                                        </tbody>

                                      </table>
                                    </div>
                                    </div>
                                  </div>
                                      <?php } else if($i == 0) { echo "No Agent Here.."; } $i++;}  ?> 
                                    </div>
                      </div>
                    </div>

                      <!-- united kindom start here -->
                    <div id="UK" class="tab-pane fade">
                      <div class="x_car_detail_descrip">
                        <div class="row">
                                    <?php 
                                      foreach ($user_detail as $user_details) {
                                        if($user_details->admin_country == "United Kingdom")
                                          {
                                    ?>

                                   <div class="col-md-6"> 
                                    <div class="row">     
                                    <div class="col-md-4">  

                                      <?php 
                                        if(!empty($user_details->image))
                                          {
                                      ?>
                                    <img  style="height: 170px;" class="img-responsive" src="<?php echo $user_details->image; ?>" alt="profile_pic">
                                    <?php } else { ?>
                                    <img style="height: 170px;" class="img-responsive" src="<?php echo base_url('assets/agent_profile-pic/default-avatar.jpg'); ?>" alt="profile_pic">
                                    <?php } ?>
                                    <div style="font-size:15px; color:#333; padding-top:5px;"><?php echo $user_details->agent_code;?>
                                      <a href="<?php echo base_url('agent/register/'.$user_details->agent_code); ?>" target="_blank" style="color:#f60; font-weight:bold;">/ Register</a>
                                    </div>
                                    </div>

                                    <div class="col-md-8">  
                                      <table class="table table-bordered" style="text-align: left!important; margin-top:10px;">
                                        <tbody>
                                          <tr>
                                            <td width="25%">Name:</td>
                                            <td width="75%"><?php echo $user_details->admin_fname." ".$user_details->admin_lname ;?></td>
                                          </tr>
                                          <tr>
                                            <td width="25%">Email:</td>
                                            <td width="75%"><?php echo $user_details->admin_email;?></td>
                                          </tr>
                                          <tr>
                                            <td width="25%">City:</td>
                                            <td width="75%"><?php echo $user_details->admin_city;?></td>
                                          </tr>
                                          <tr>
                                            <td width="25%">Country:</td>
                                            <td width="75%"><?php echo $user_details->admin_country;?></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>

                                  </div>
                                  </div>
                                  <?php }  }  ?>  
                              </div>  
                      </div>
                    </div>
                  </div>  
      </div>
    </div>

   <!-- btc team Wrapper Start -->

    <?php $this->load->view('includes/business_partners') ?>
    <!-- custom js-->

    <!-- custom js-->
<?php $this->load->view('includes/agent_site_js') ?>

</body>



</html>