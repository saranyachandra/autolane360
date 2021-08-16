

<!-- include css file here -->
<?php $this->load->view('includes/agent_site_css'); ?>

<style type="text/css">
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
.x_slider_form_input_wrapper h3{
	font-size:14px;
	font-weight:800;
	color:#111111;
	text-transform:uppercase;
	padding-top: 0px;
	padding-bottom: 15px;
}

</style>

<script type="text/javascript" src="<?php echo base_url ('assets/js/carquery.0.3.4.js');?>"></script>

<body onload="noBack();" 
	onpageshow="if (event.persisted) noBack();" onunload="">
	
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
						<h1>Place Your Order</h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_right_heading">
						<div class="btc_tittle_right_cont_wrapper">
							<ul>
								<li><a href="#">Home</a> <i class="fa fa-angle-right"></i>
								</li>
								<li>Place Your Order</li>
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
				<form id="place_order_form" action="<?php echo base_url('agent/insert_place_order'); ?>" method="POST" enctype="multipart/form-data">

					<input type="hidden" name="customer_id" value="<?php echo $this->session->userdata('cus_id');?>">
					<input type="hidden" name="agent_id" value="<?php echo $this->session->userdata('agent_id');?>">

				<div class="row flex-row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="margin-bottom:20px;">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center" style="margin-bottom:20px;">
							<h3>Select Car Options</h3>
						</div>

							<div class="col-md-12">
								<div class="" style="font-size:14px;">
									<input type="checkbox" name="check_all[]" value="All">
									<label for="c1">All  &nbsp; </label>
									
									<input type="checkbox"  name="check_all[]" value="New Car">
									<label for="c1">New Car &nbsp; </label>
									
									<input type="checkbox"  name="check_all[]" value="Fairly Used Car">
									<label for="c1">Fairly Used Car &nbsp; </label>
									
									<input type="checkbox"  name="check_all[]" value="Auction Car With  Minor Dents">
									<label for="c1">Auction Car With  Minor Dents &nbsp; </label>
								</div>
							</div>
							<div class="col-md-12">
								<img src="<?php echo base_url('assets/agent-assets/images/types/'.$car_type.'.jpg');?>" alt="car" class="img-responsive img-thumbnail">

							</div>

							<input type="hidden" name="car_type" value="<?php echo $car_type; ?>">
							<div class="col-md-12" style="margin-top: 10px;">
								<div class="x_slider_form_input_wrapper float_left">
									<div>
										<h3>Comments</h3>
										<textarea name="cus_comments" ></textarea>
									</div>
								</div>
							</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="margin-bottom:20px;">
						<div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn" style="background:#fff;">
							<div class="x_slider_form_heading_wrapper float_left">
								<h3>Select Car Model</h3>
							</div>
							<div class="row">
								<div class="row" style="flex:100;">
									<div class="col-md-12">
										<div class="x_slider_form_input_wrapper float_left">
											<div class="x_slider_select">
												<h3>Car Year Range</h3>
												<select class="myselect" name="car_year" id="car-years" required="" >
												</select>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="x_slider_form_input_wrapper float_left">
										<div class="x_slider_select">
											<h3>Select Car Brand</h3>
											<select class="myselect" name="car_brand" id="car-makes" required="">
												
											</select>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="x_slider_form_input_wrapper float_left">
										<div class="x_slider_select">
											<h3>Select Car Model</h3>
											<select class="myselect" name="car_model" id="car-models" required="">
											</select>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="x_slider_form_input_wrapper float_left">
										<div class="x_slider_select">
											<h3>Select Car Trim</h3>
											<select class="myselect" name="car_trim" id="car-model-trims">
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="x_slider_form_input_wrapper float_left">
										<div class="x_slider_select">
											<h3>Select Car Mileage</h3>
											<select class="myselect" name="car_miles" required="">
												<option value="">Select Car Miles </option>
												<option value="Under 20,000 Miles">Under 20,000 Miles</option>
												<option value="Under 50,000 Miles">Under 50,000 Miles</option>
												<option value="Under 100,000 Miles">Under 100,000 Miles</option>
												<option value="Under 120,000 Miles">Under 120,000 Miles</option>
												<option value="Under 150,000 Miles">Under 150,000 Miles</option>
												<option value="Under 200,000 Miles">Under 200,000 Miles</option>
												<option value="All Miles">All Miles</option>
											</select>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="x_slider_form_input_wrapper float_left">
										<div class="x_slider_select">
											<h3>Car Budget</h3>
											<input type="text" name="car_budget" class="myselect" required>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="x_slider_checkbox_bottom float_left">
										<div class="x_slider_checout_right">
											<ul>
												<li>
													<button type="submit" style="background-color:#f60; border:0;color: #fff;" class="btn">Next  <i class="fa fa-arrow-right"></i></button>
													
												</li>
											</ul>
										</div>
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

	<div class="x_copyr_main_wrapper float_left">
		<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
		<div class="container">
			<p>Copyright © 2019 Autolaneagent360 Agent. All rights reserved.</p>
		</div>
	</div>
<!-- btc team Wrapper End -->

	<!--js Start-->
	<!-- xs offer car tabs Start -->
		
	<!-- btc team Wrapper Start -->


<!-- custom js-->
<?php $this->load->view('includes/agent_site_js') ?>

<script type="text/javascript">


var base_url = '<?php echo base_url() ?>'; //form submited

window.history.forward();
	function noBack() { window.history.forward(); }
	

    $(document).on("submit", "#place_order_form1", function(e){

        e.preventDefault();
       
        $(this).validate({ 
                         rules: {                             
                                                 
                                  car_model: "required",
                                  car_budget: "required",                                 
                                  cus_comments: "required",               
                                },

                          messages: 
                                {                           
                                  
                                  car_model: {
                                      required: "Required ", 
                                  }, 
                                  car_budget: {
                                      required: "Required",
                                      digits: true
                                  }, 
                                 
                                  cus_comments: {
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
                   
                    beforeSend: function()
                    {

                      swal({
                          title: 'Please Wait...',
                          text: 'Submitting...',
                          toast: true,
                          target: '.swal',              
                         
                          onOpen: () => {
                            swal.showLoading()
                         }
                      }); 
          
                    },
                    success: function(response)
                    {
                       if(response.status == 'success')
                       {
                       
                         document.getElementById("place_order_form").reset();
                        	swal({
                                title: "Success!",
                                text: "Thank you for your Enquiry...",
                                type: "success",
                                timer: 2000
                            }).then(() => {                     
                                  window.location.href = base_url+'agent/order_review_page/';
                                });;  
                       
                        }                      
                       
                        else 
                        {                       
                          swal("Something went wrong Try again");
                        }          
                    }

           });
    }     

 });

// car model pick from library

$(document).ready(
function()
{
     //Create a variable for the CarQuery object.  You can call it whatever you like.
      var carquery = new CarQuery();

  
     //Run the carquery init function to get things started:
      carquery.init();

    
     
     //Optionally, you can pre-select a vehicle by passing year / make / model / trim to the init function:
     //carquery.init('2000', 'dodge', 'Viper', 11636);

     //Optional: Pass sold_in_us:true to the setFilters method to show only US models. 
      carquery.setFilters( {sold_in_us:true} );

    

     //Optional: initialize the year, make, model, and trim drop downs by providing their element IDs
      carquery.initYearMakeModelTrim('car-years', 'car-makes', 'car-models', 'car-model-trims');
    
     
     //Optional: set the onclick event for a button to show car data.
     $('#cq-show-data').click(  function(){ carquery.populateCarData('car-model-data'); } );

     //Optional: initialize the make, model, trim lists by providing their element IDs.
     carquery.initMakeModelTrimList('make-list', 'model-list', 'trim-list', 'trim-data-list');

     //Optional: set minimum and/or maximum year options.
     carquery.year_select_min=1990;
     carquery.year_select_max=2018;

    
     //Optional: initialize search interface elements.
     //The IDs provided below are the IDs of the text and select inputs that will be used to set the search criteria.
     //All values are optional, and will be set to the default values provided below if not specified.
     var searchArgs =
     ({
         body_id:                       "cq-body"
        ,default_search_text:           "Keyword Search"
        ,doors_id:                      "cq-doors"
        ,drive_id:                      "cq-drive"
        ,engine_position_id:            "cq-engine-position"
        ,engine_type_id:                "cq-engine-type"
        ,fuel_type_id:                  "cq-fuel-type"
        ,min_cylinders_id:              "cq-min-cylinders"
        ,min_mpg_hwy_id:                "cq-min-mpg-hwy"
        ,min_power_id:                  "cq-min-power"
        ,min_top_speed_id:              "cq-min-top-speed"
        ,min_torque_id:                 "cq-min-torque"
        ,min_weight_id:                 "cq-min-weight"
        ,min_year_id:                   "cq-min-year"
        ,max_cylinders_id:              "cq-max-cylinders"
        ,max_mpg_hwy_id:                "cq-max-mpg-hwy"
        ,max_power_id:                  "cq-max-power"
        ,max_top_speed_id:              "cq-max-top-speed"
        ,max_weight_id:                 "cq-max-weight"
        ,max_year_id:                   "cq-max-year"
        ,search_controls_id:            "cq-search-controls"
        ,search_input_id:               "cq-search-input"
        ,search_results_id:             "cq-search-results"
        ,search_result_id:              "cq-search-result"
        ,seats_id:                      "cq-seats"
        ,sold_in_us_id:                 "cq-sold-in-us"
     }); 
      carquery.initSearchInterface(searchArgs);

      
     //If creating a search interface, set onclick event for the search button.  Make sure the ID used matches your search button ID.
     $('#cq-search-btn').click( function(){ carquery.search(); } );
});

</script>

</body>



</html>