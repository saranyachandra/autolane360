

<!-- include css file here -->
<?php $this->load->view('includes/agent_site_css'); ?>

<body>
	
	
	<!-- x top header_wrapper Start -->
	
	<!-- x top header_wrapper End -->
	<!-- hs Navigation Start -->
	 <?php $this->load->view('includes/agentsite_header'); ?>
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
													<a rel="external" href="https://www.youtube.com/embed/ryzOXAO0Ss0" title="title" class="test-popup-link">
														<img src="<?php echo base_url('assets/agent-assets/images/play.png');?>" alt="olay_icon">&nbsp;&nbsp;Play Video</a>
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
														<h3><span style="font-size:12px;">Enter a Valid OTP</span></h3>
													</div>
													<div id="error_result"></div>
												<form id="otp_form" action="<?php echo base_url('agent/otp_verify'); ?>"  method="POST">

													<div class="row">
														<input type="text" name="user_email" class="form-control" value="<?php echo $this->session->userdata('user_email');?>" readonly>
													</div>
													<div class="row">														
														<div class="col-md-3" style="margin-top:25px; margin-bottom:5px;">
															<div class="x_slider_form_input_wrapper float_left">
																<input type="text" id="codeBox1" name="otp1" maxlength="1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)" autocomplete="off"> 
															</div>
														</div>
														<div class="col-md-3" style="margin-top:25px; margin-bottom:5px;">
															<div class="x_slider_form_input_wrapper float_left">
																<input type="text" id="codeBox2" name="otp2" maxlength="1" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)" autocomplete="off">
															</div>
														</div>
														<div class="col-md-3" style="margin-top:25px; margin-bottom:5px;">
															<div class="x_slider_form_input_wrapper float_left">
																<input type="text" id="codeBox3" name="otp3" maxlength="1" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)" autocomplete="off">
															</div>
														</div>
														<div class="col-md-3" style="margin-top:25px; margin-bottom:5px;">
															<div class="x_slider_form_input_wrapper float_left">
																<input type="text" id="codeBox4" name="otp4" maxlength="1" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)" autocomplete="off">
															</div>
														</div>

														<div class="col-md-12">
															<div class="x_slider_checkbox_bottom float_left">
																<div class="x_slider_checout_right">
																	<ul>
																		<li>
																			<button class="btn" style="background-color: #ff6600;color: #fdfcfb;">
																				Submit <i class="fa fa-arrow-right"></i></button>
																			
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

	


	<!-- btc team Wrapper End -->

	<!--js Start-->
	<!-- xs offer car tabs Start business partners -->
		<?php $this->load->view('includes/business_partners') ?>
	<!-- btc team Wrapper Start business partners -->

	
	
<!-- custom js-->
<?php $this->load->view('includes/agent_site_js') ?>
<script type="text/javascript">
	var base_url = '<?php echo base_url() ?>'; //form submited

	function getCodeBoxElement(index) {
        return document.getElementById('codeBox' + index);
      }
      function onKeyUpEvent(index, event) {
        const eventCode = event.which || event.keyCode;
        if (getCodeBoxElement(index).value.length === 1) {
          if (index !== 4) {
            getCodeBoxElement(index+ 1).focus();
          } else {
            getCodeBoxElement(index).blur();
            // Submit code
            // console.log('submit code ');
          }
        }
        if (eventCode === 8 && index !== 1) {
          getCodeBoxElement(index - 1).focus();
        }
      }
      function onFocusEvent(index) {
        for (item = 1; item < index; item++) {
          const currentElement = getCodeBoxElement(item);
          if (!currentElement.value) {
              currentElement.focus();
              break;
          }
        }
      }


    $(document).on("submit", "#otp_form", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                             
                                  otp1:"required",   
                                  otp2:"required", 
                                  otp3:"required", 
                                  otp4:"required", 
                                },

                          messages: {  

                                  otp1: {
                                      required: "Required", 
                                  },  

                                  otp2: {
                                      required: "Required", 
                                  },
                                  otp3: {
                                      required: "Required", 
                                  },
                                  otp4: {
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
                          window.location.href ='<?php echo base_url('agent/login'); ?>';
                      	}
                        else 
                        {                       
                           $("#error_result").html('<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry!</strong> Incorrect OTP. </div>');
                        }          
                    }

            });
        }     

 }); 
</script>
</body>



</html>