<?php $this->load->view('includes/site_css') ?>

<style type="text/css">
    input[type="radio"] + label::before,
    input[type="checkbox"] + label::before{
      background: #ccc!important;
    
    }

</style>
<body>

  <div id="loader">
    <div class="box loading"></div>
  </div>

 
  

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

          <h1 class="page-title">View Details</h1>

          <ul class="breadcrumbs">

            <li><a href="<?php echo base_url('home/index');?>">Home</a></li>
            <li>View Details</li>

          </ul>

        </div>

      </div>

      <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
      
   
      <div class="page-section-bg" style="background:#fff;">
        <div class="container">
                <div class="flex-row">
                  <div style="background-color:#f60; width:2%; height:30px; line-height:30px;" class="col-md-1 col-sm-1 col-xs-1"></div>
                    <div class="col-md-10 col-sm-10 col-xs-10" style="width:83.33333333333334%!important; float:inherit!important;">
                      <h3 class="section-title" style="padding-bottom:25px;"><?php echo $car_details->category; ?></h3>
                    </div>

                    <!-- <div class="col-md-5" style="float:right; text-align:right;">
                      <h3 class="section-title" style="padding-bottom:35px;">
                        <img src="<?php echo base_url('assets/images/flags/nigeria-flag.jpg');?>"> AUTOLANE360 USA</h3>
                    </div> -->
                </div>

        <div class="row">
            <main id="main" class="col-md-8">
              
              <div class="single-product-section">
                
                <div class="single-product-title">
                  
                  <h2 class="section-title" style="text-transform: capitalize;">
                    <?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> 
                  </h2>
                  <div class="flex-row flex-justify">

                    <div class="product-price" style="font-size:15px;">
                     VIN: <?php echo $car_details->vin_status; ?>
                    </div>
                    
                  </div>
                  
                </div>
               
                <div class="content-element3">
                       
                  <div class="carousel-type-4 type-2">                      

                    <div class="carousel-tabs">
                      
                      <div id="tab1" class="tab-cont current">
                      
                        <div class="owl-carousel" id="sync-carousel-1" data-max-items="1">

                        <?php 
                          foreach ($car_img as $car_imgs) {
                           
                        ?> 
                        
                          <div class="item-carousel">
                            <a href="<?php echo $car_imgs->admincar_stockimg;?>" class="fancybox" data-fancybox="group">
                              <img style="width:760px;height: 460px;" src="<?php echo $car_imgs->admincar_stockimg;?>" alt="">
                            </a>
                          </div>

                        <?php } ?>
                        
                        </div>

                      </div>
                      <div id="tab2" class="tab-cont">

                        <div class="responsive-iframe">
                          
                          <iframe src="<?php echo $car_imgs->video_name;?>"></iframe>

                        </div>
                        
                      </div>
                      

                    </div>
                    <ul>
                      <div class="col-md-12" style="background-color:#f60; font-size:18px; padding:10px 5px; text-align:center; color:#fff; margin-bottom:15px;">Available Dates:   
                            <?php 
                                $available_from = strtotime($car_details->available_from);
                                $available_to =  strtotime($car_details->available_to);
                                echo date("M j S",$available_from);
                                echo " To ";
                                echo date("M j S",$available_to);
                            ?>                
                        <!-- November 15th to December 13th -->
                      </div>
                    </ul> 
                    <div class="tabs tabs-section style-2 clearfix">
                      <!--tabs navigation--> 
                                      
                      <ul class="tabs-nav clearfix">
                        <li data-tab="tab1">
                          <a href="#tab-1"><span class="licon-camera2"></span>Photos (6)</a>
                        </li>
                        <li data-tab="tab2">
                          <a href="#tab-2"><span class="licon-camera"></span>Videos (1)</a>
                        </li>
                      
                      </ul>
                      <!--tabs content-->                 
                      <div class="tabs-content">
                        <div id="tab-1">

                          <!-- - - - - - - - - - - - - - Carousel Pagination - - - - - - - - - - - - - - - - -->

                          <div class="owl-carousel type-small" data-sync="#sync-carousel-1" data-max-items="5" data-item-margin="20">

                            <?php 
                            foreach ($car_img as $car_imgs) {
                              // echo count($car_imgs->admincar_stockimg);
                               
                            ?> 

                            <div class="item-carousel">
                              <img style="width:134px;height: 97px;" src="<?php echo $car_imgs->admincar_stockimg;?>" alt="">
                            </div>

                            <?php } ?>
                            
                          </div>

                          <!-- - - - - - - - - - - - - - End of Carousel Pagination - - - - - - - - - - - - - - - - -->
                        </div>

                        <div id="tab-2">

                          <video width="250" controls>
                            <source src="<?php echo $car_imgs->video_name;?>" type="video/mp4">
                           
                            Your browser does not support HTML5 video.
                          </video>

                        </div>
                        
                      </div>

                    </div>

                  </div>

                </div>

                <div class="content-element3">
                  
                        <h4><b>Vehicle Specification</b></h4>
                      
                          
                          <div class="flex-row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-1.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">MILEAGE</span><br><?php echo $car_details->car_mileage; ?>
                              </div>  
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-2.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">DRIVE TYPE</span><br><?php echo $car_details->Drive_type; ?>
                              </div>  
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-3.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">ENGINE</span><br><?php echo $car_details->engine; ?>
                              </div>  
                            </div>                           
                           
                          </div>

                          <div class="flex-row" style="margin-top: 40px;">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-4.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">TRANSMISSION</span><br><?php echo $car_details->transmission; ?>
                              </div>  
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-5.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">FUEL TYPE</span><br><?php echo $car_details->Fuel_type; ?>
                              </div>  
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-6.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">MPG</span><br><?php echo $car_details->car_mpg; ?>
                              </div>  
                            </div>
                          </div>

                          <div class="flex-row" style="margin-top: 40px;">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-7.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">INTERIOR COLOR</span><br><?php echo $car_details->interior_color; ?>
                              </div>  
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-7.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">EXTERIOR COLOR</span><br><?php echo $car_details->exterior_color; ?>
                              </div>  
                            </div>
                          </div>

                          <div class="flex-row" style="margin-top: 40px;">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-9.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">VEHICLE CLASS</span><br><?php echo $car_details->vehicle_class; ?>
                              </div>  
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-10.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">MANUFACTURER</span><br><?php echo $car_details->manufactured; ?>
                              </div>  
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-11.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">VEHICLE VIN</span><br>VIN: <?php echo $car_details->vin_status; ?>
                              </div>  
                            </div>
                          </div>

                          <div class="flex-row" style="margin-top: 40px;">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-12.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">KEYS</span><br><?php echo $car_details->car_keys; ?>
                              </div>  
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-13.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">VEHICLE LOCATION</span><br><?php echo $car_details->car_location; ?>
                              </div>  
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div style="float:left;"><img src="<?php echo base_url('assets/images/view-icons/icon-14.png');?>"></div>
                              <div style="float:left; margin-left:10px;">
                                <span style="font-weight:bold;">START CODE</span><br><?php echo $car_details->start_code; ?>
                              </div>  
                            </div>
                          </div>

      
                      </div>
      
               

                <div class="content-element3">                  
                  <h4><b>Additional Vehicle Details</b></h4>
                  <p><?php echo $car_details->description; ?>.</p>              
                </div>

              </div>

            </main>
            <aside id="sidebar" class="col-md-4">
              
              <div class="content-element3">
                
                <div class="sidebar-item dealer-item style-2" style="margin-bottom:0;">

                  <div class="dealer-title">
                    
                    <div class="wrapper">
                      <h3 style="font-weight:bold;">
                        Price: 

                        <?php 
                         if($car_details->price != null)
                          { 
                            $price = $car_details->price;
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
                          
                        </h3>
                      <div class="rating-area">
                        <a class="link-text2" style="color:#333; line-height:22px;">
                          <strong>Shipping Info:</strong> Price Includes Shipping to <?php echo $car_details->country; ?>
                        </a>                        
                      </div>
                    </div>
                  </div>

                </div>

                      <a href="<?php echo base_url('home/buy_now/').$car_details->carstock_id ?>" class="btn btn-big btn-style-3 text-center sidebar-btn" content="telephone=no" style="font-size:30px; text-align:center; margin-bottom: 0;">
                          <i class="licon-cart" style="font-size:30px;"></i><b>Buy Now</b>
                      </a>
                  

                    <div style="color:#333; text-align:center; background-color: #f2f3f3; padding:10px 5px;">
                      <a class="link-text2" style="color:#333;">Apply your Referral Code and get upto 10% Discount</a>
                    </div>

                    <div class="question-form bg-sidebar-item" style="background-color:#fff!important; text-align:center;">
                        <h5>Estimated</h5>
                        <p class="type-2" style="font-size:18px;">
                          Customs Clearing Cost: 
                          <?php echo $car_details->clearing_cost; ?>
                            
                        </p>
                    </div>

                <div class="question-form bg-sidebar-item">
                      
                  <h5>Make Enquiry</h5>
                  <h6 class="section-title"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?></h6>
                  <p class="type-2">All fields are required.</p>

                  <form id="enquiry_form" action="<?php echo base_url('home/user_enquiry'); ?>" method="post">

                    <input type="hidden" name="car_detail" value="<?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?>">

                    <div class="auto-custom-select">
                      <select name="enquiry_topic" data-default-text="Select Enquiry Topic">
                        <option value="What is the customs clearing cost">What is the customs clearing cost</option>
                        <option value="Can i use my own agent to clear customs">Can i use my own agent to clear customs</option>
                        <option value="Can i track my shipment">Can i track my shipment</option>
                        <option value="Can i pay in my local currency">Can i pay in my local currency </option>
                      </select>
                    </div>
                    
                    <textarea name="discription" rows="4" placeholder="I have a question about the <?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?>"></textarea>
                    <input type="text" name="f_name" placeholder="First Name">
                    <input type="text" name="l_name" placeholder="Last Name">
                    <input type="text" name="email" placeholder="Email">
                        
                    <select name="country_name" id="country" data-default-text="Select Country" class="wdth-select">
                      <option value="" disabled selected hidden>Select Country </option>
                              <?php 
                                foreach ($country as $country_name) {
                              ?>
                      <option value="<?php echo $country_name->countryname; ?>"><?php echo $country_name->countryname; ?></option>

                              <?php } ?>

                    </select>
                     
                    <button style="margin-top: 20px;" class="btn btn-style-3">Send Message</button>

                  </form>

                  <div>

                        <input type="checkbox" name="checkbox" id="checkbox-1" >
                        <label for="checkbox-1">By using this service you accept the Terms & Conditiions for  Visitors Agreement</label>
        
                        <input type="checkbox" name="checkbox" id="checkbox-2">
                        <label for="checkbox-2">Yes, I will like to recieve Promotions, Updates and Sales discounts from Autolane360 and its affilates </label>
                  </div>
                </div>

                
              </div>

             
            

            </aside>
          </div>
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

  <!-- JS Libs & Plugins-->
 <?php $this->load->view('includes/site_js') ?>
  
<script type="text/javascript">

  $("#country").select2();


  // enquiry form submit

  $(document).on("submit", "#enquiry_form", function(e){

        e.preventDefault();

        $(this).validate({ 

                         rules: {                             
                                  enquiry_topic:"required",                  
                                  discription: "required",
                                  f_name: "required",
                                  l_name: "required",
                                  email: "required",  
                                  country_name: "required",             
                                },

                          messages: 
                                {                           
                                  enquiry_topic: {
                                      required: "Required", 
                                  }, 
                                  discription: {
                                      required: "Required ", 
                                  }, 
                                  f_name: {
                                      required: "Required",                                     
                                  }, 
                                  l_name: {
                                      required: "Required", 
                                  }, 

                                  email: {
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
                          document.getElementById("enquiry_form").reset();
                          swal("Successfully update");
                       
                        }                      
                       
                        else 
                        {                       
                          swal("Something went wrong plz try again later..");
                        }          
                    }

           });
    }     

 });


</script>

</body>

</html>