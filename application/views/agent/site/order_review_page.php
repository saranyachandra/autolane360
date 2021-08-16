

<!-- include css file here -->
<?php $this->load->view('includes/agent_site_css'); ?>
<style type="text/css">
	body {
			background: #fff !important;
		}
.x_slider_form_input_wrapper textarea
{
	width:520px;
	height:150px;
	padding-left:10px;
	border:1px solid #eeeeee;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
}
.x_slider_checout_right li a{
	    float: left;
	    width: 350px; 
	    height: 50px;
	    line-height: 45px;
	    text-align: center;
	    background: #ff6600;
	    color: #ffffff;
        padding: 0px 15px;
	    border:1px solid transparent;
	    text-transform: uppercase;
	    -webkit-border-radius: 10px;
	    -moz-border-radius: 10px;
	    border-radius: 10px;
}

</style>

<body>
	<!-- preloader Start -->
	
	<!-- x top header_wrapper Start -->
	
	<!-- x top header_wrapper End -->
	<?php $this->load->view('includes/agentsite_header'); ?>
	<!-- hs Navigation Start -->
	
	<!-- hs Navigation End -->



	<div class="btc_tittle_main_wrapper">
		<div class="btc_tittle_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_left_heading">
						<h1>Generate Your Order Ticket</h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_right_heading">
						<div class="btc_tittle_right_cont_wrapper">
							<ul>
								<li><a href="#">Home</a> <i class="fa fa-angle-right"></i>
								</li>
								<li>Generate Your Order Ticket</li>
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
				<div class="row flex-row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="margin-bottom:20px;">
						
						
							<div class="col-md-12">
									<img src="<?php echo base_url('assets/agent-assets/images/types/'.$car_type.'.jpg');?>" alt="car" class="img-responsive img-thumbnail">

							</div>
							<div class="col-md-12"  style="margin-top:20px;">
									<div class="x_slider_form_input_wrapper float_left">
										<!-- <div>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et risus felis. Sed ac sagittis elit. Vivamus scelerisque justo id eros venenatis faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et risus felis. Sed ac sagittis elit.
										</div> -->
									</div>
								</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="margin-bottom:20px;">
						<div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn" style="background:#f8f8f8;">
							<div class="x_slider_form_heading_wrapper float_left">
								<h3>Car Details</h3>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="x_slider_form_input_wrapper float_left">
										<div class="x_slider_select" style="line-height:40px;">
                                            <strong>Car Brand:</strong> <?php echo $details['car_model']." ".$details['car_make']; ?><br>
                                            <strong>Car Year:</strong> <?php echo $details['car_year']; ?><br>
                                            <strong>Car Trim:</strong> <?php echo $details['car_trim']; ?><br>
                                            <strong>Car Mileage:</strong> <?php echo $details['car_mileage']; ?><br>
                                            <strong>Car Budget:</strong> <?php echo $details['car_budget']; ?><br>
										</div>
									</div>
								</div>							
							</div>
							
							 
                        </div>
                        	<div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn" style="background:#f8f8f8;">
                                <div class="x_slider_form_heading_wrapper float_left">
                                    <h3>Customer Details</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="x_slider_form_input_wrapper float_left">
                                            <div class="x_slider_select" style="line-height:40px;">
                                                <strong>Name:</strong> <?php echo $this->session->userdata('cus_fname')." ".$this->session->userdata('cus_lname');?><br>
                                                <strong>Phone:</strong> <?php echo $this->session->userdata('cus_phone');?><br>
                                                <strong>Email:</strong> <?php echo $this->session->userdata('cus_email');?><br>
                                                <strong>Country:</strong><?php echo $this->session->userdata('cus_country');?><br>
                                                <strong>State:</strong> <?php echo $this->session->userdata('cus_state');?><br>
                                            </div>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>

                            <div class="col-md-12">
                                    <div class="x_slider_checkbox_bottom float_left">
                                        <div class="x_slider_checout_right">
                                            <ul>
                                                <li><a href="<?php echo base_url('agent/gen_order_ticket_view/'.$order_id."/".$car_type);?>">Generate Your An Order Ticket <i class="fa fa-arrow-right"></i></a>
                                                </li>
                                            </ul>
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