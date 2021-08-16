

<div class="x_partner_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper float_left">
						
						<h3>Business Partners</h3>
						<!-- <p>We have a list of Business partners</p> -->
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-album-slider">
						<ul class="album-slider">
							<?php 
								foreach ($partner_details as $details) {
									
							?>
							<li class="album-slider__item">
								<figure class="album">
									<img src="<?php echo $details->business_logo_url;?>" alt="img">
								</figure>
							</li>
							<?php } ?>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="x_copyr_main_wrapper float_left">
		<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
		<div class="container">
			<div class="row">
			<div class="col-md-6">
			<p> Copyright ©2019 Autolane360. All rights reserved.</p>
			</div>
		
		<div class="col-md-3">
			<!-- <a href="javascript:;" class="link-text2 contact-button btn" style="background-color: #f60; margin: 10px 10px 0;color: #fff;text-align: center; width:97%; height:45px; line-height:30px; text-decoration:none;">Agent Login</a> -->
			 <button type="button" class="link-text2 contact-button btn"  style="background-color: #f60;color: #fff;" data-toggle="modal" data-target="#myModal">
			    Agent Login
			  </button>

		</div>
		</div>
		</div>

	</div>

	<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Agent Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        	<div id="error_result"></div> 
         <form id="agent_login" action="<?php echo base_url('agent_login/agent_login_auth'); ?>"  method="POST" enctype="multipart/form-data">
													<div class="row">										
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="text" name="agent_email" placeholder="Enter Email/Phone" class="form-control">
															</div>
														</div>
														
														<div class="col-md-12 margn-top-30">
															<div class="form-sec-header">
																<input type="password" name="agent_password" placeholder="Enter Password" class="form-control">
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
        
        <!-- Modal footer -->
       
      </div>
    </div>
  </div>
  
 
