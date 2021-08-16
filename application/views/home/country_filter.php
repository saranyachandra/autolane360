
<?php $this->load->view('includes/site_css') ?>

<!-- car year,brand,model library -->
<script type="text/javascript" src="<?php echo base_url ('assets/js/carquery.0.3.4.js');?>"></script>

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

    <div class="media-holder type-3 " >
      <div id="wowslider-container1" class="hidden-sm hidden-xs">
        <div class="ws_images">
          <ul>
            <li>
              <img src="<?php echo base_url('assets/images/banner/banner-1.jpg');?>" alt="bootstrap image slider" title="" id="wows1_0" />
               BUY AUCTION CARS<br>FROM USA<br>
              <span style="font-size:18px;">Own a Car Starting From $500</span>
            </li>

            <li>              
              <img src="<?php echo base_url('assets/images/banner/banner-2.jpg');?>" alt="" title="" id="wows1_0" />
              CLEARING AND FORWARDING <br> TRACKING SERVICES <br>
              <span style="font-size:18px;">Track your shipped car in real time</span>
            </li>

            <li>               
              <img src="<?php echo base_url('assets/images/banner/banner-3.jpg');?>" alt="" title="" id="wows1_0" />
              AUTOPARTS & ACCESSORIES<br>FROM USA<br>
              <span style="font-size:18px;">BY REGISTERING IN OUR DATABASE</span>
            </li>

            <li>              
              <img src="<?php echo base_url('assets/images/banner/banner-4.jpg');?>" alt="" title="" id="wows1_0" />
              HEAVY DUTY <br> TRUCK PARTS <br>
              <span style="font-size:18px;">Get All Affordable Prices</span>
            </li>

            <li>               
              <img src="<?php echo base_url('assets/images/banner/banner-5.jpg');?>" alt="" title="" id="wows1_0" />
              Minor dent vehicles<br>FROM USA<br>
              <span style="font-size:18px;">Save Money By Buying Directly </span>
            </li>


          </ul>
        </div>
       
  
      </div>
      <!-- <script type="text/javascript" src="<?php echo base_url('assets/engine1/wowslider.js');?>"></script> -->
      <!-- <script type="text/javascript" src="<?php echo base_url('assets/engine1/script.js');?>"></script> -->
      <div class="container">
        
     

        <div class="tabs type-2 style-4 tabs-section clearfix">
          <!--tabs navigation-->                  
          
          <!--tabs content-->                 
          <div class="tabs-content">
            <div id="tab-1">

              <div class="input-wrapper">

                <input type="checkbox" name="checkbox-1" id="checkbox-1" checked="">
                <label for="checkbox-1">All Vehicles</label>

                <input type="checkbox" name="checkbox-2" id="checkbox-2">
                <label for="checkbox-2">Offers</label>

                <input type="checkbox" name="checkbox-3" id="checkbox-3">
                <label for="checkbox-3">Used</label>
               
              </div>


          <form action="<?php echo base_url('home/car_brand_filter'); ?>" method="post">
            <div class="select-area tab-col-auto">
               
                  <div class="col-md-3 col-sm-22 wdth-25">
                    <select  name="car_years" id="car-years"></select> 
                  </div>
                
                  <div class="col-md-3 col-sm-22 wdth-25">
                    <select name="car_brand" id="car-makes"></select> 
                  </div>
                
                    <div class="col-md-3 col-sm-22 wdth-25">
                       <select  name="car_model" id="car-models"></select>
                    </div>
               
                 <!--  <div class="col-md-22 col-sm-22 wdth-20">
                    <select  id="budget" name="car_budget">
                      
                      <option>₦ 2,00,000</option>
                      <option>₦ 2,00,000  - ₦ 5,00,000</option>
                      <option>₦ 5,00,000  - ₦ 1,000,000</option>
                      <option>₦ 1,000,000 - ₦ 2,000,000 </option>
                    </select>
                  </div> -->
                               
                <div class="col-md-3 wdth-25">                  
                    <button type="submit" class="btn btn-style-3" > <i class="licon-magnifier"></i>Search</button> 
                </div>

            </div>
          </form>
              <!-- <a href="#" class="info-btn">More search options</a> -->

          </div>
           
            
          </div>
        </div>

      </div>
      
    </div>

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content">      

     

      <div class="page-section-bg">
        
        <div class="container">
          
          <h3 class="section-title" id="page_scroll">Hot Deals</h3>

          <div class="tabs mad-tabs mad-default style-2 clearfix">
            <!--tabs navigation-->                  
          
            <!--tabs content-->                 
            <div class="tabs-content mad-tabs-container">
              <div id="tab-14" class="mad-tab">

                <div class="carousel-type-3" >
                  <div  class="owl-carousel"  data-max-items="4" data-item-margin="30" id="country_filter_data">
                    
                   <?php 
                    if(!empty($car_detail))
                    {
                    foreach ($car_detail as $car_details) {
                   
                   ?>
                    <!-- Slide  start one car product-->                  
                    
                    <div class="item-carousel">
                    
                      <div class="product">
                        
                          <a href="#"><img style="height:185px;" src="<?php echo $car_details->admincar_stockimg;?>" alt=""></a>
                         
                          <div class="product-description">
  
                            <h5 class="product-name">
                              <a href="#"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> </a>
                            </h5>
  
                            <div class="pricing-area">
                              <div class="product-price">
                                
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
                              </div>
                            </div>

                            <div class="model-loc">
                                <ul>
                                  <li><span>Mileage</span><?php echo $car_details->car_mileage;?></li>
                                  <li><span>Location</span><?php echo $car_details->car_location;?></li>
                                  <li style="text-align:center;"><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;">Price Includes Shipping to <?php echo $car_details->country;?></span></li>
                                 
                                </ul>
                            </div>
                            
                          </div>

                            <div class="product-description" style="background-color:#d2ddff;">
                              <div class="model-loc">
                                <ul>
                                  <li style="text-align:center;"><span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;"><?php echo $car_details->user_view_count;?> Interested Buyers</span></li>
                                  <li style="text-align:center;">
                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
                                      <strong>Available:</strong> <!-- November15th to Dec 16th -->
                                      <?php 
                                        $available_from = strtotime($car_details->available_from);
                                        $available_to =  strtotime($car_details->available_to);
                                        echo date("M j S",$available_from);
                                        echo " To ";
                                        echo date("M j S",$available_to);
                                      ?>
                                    </span>
                                  </li>
                                </ul>
                              </div>

                              <div class="model-info text-center" >
                                <a style="color: #333;font-weight: bold;" href="<?php echo base_url('Home/get_car_details/'.$car_details->carstock_id);?>">View Details</a>
                              </div>
                            </div>

                      </div>

                    </div>
                     
                    <!-- /Slide  end one car product -->

                  <?php } } else { echo '<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry No Data Here!</strong>  Please Choose other Country option. </div>' ; } ?>
                   </div>
                   
                </div>

                </div>

              </div>            
              
            </div>
          </div>

         
      </div>

      </div>

      <!-- newsfeeds start  here -->

      <div class="page-section">
        
        <?php $this->load->view('includes/newsfeeds.php'); ?>

      </div>

      <!-- newsfeeds end here -->

    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

    <footer id="footer" class="footer-4">
      
      <!-- pre footer -->
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
          
          <div class="row">

            <div class="col-lg-4 col-md-3 col-sm-12">
              
              <div class="widget">

                <h5 class="widget-title">About Us</h5>
                <p>
                    Autolane360 is a Houston Based car sales company with branches in San Antonio Texas, Nigerian and Ghana. The founders of the company have been buying and selling used cars in US. 
                </p>
                <p>Auto-Market for the past 10 years and partnered various used cars companies across the USA thereby creating a huge network of both auction stock cars to dealership stocks cars.  </p>
                
              </div>

            </div>
            <div class="col-lg-3 col-md-2 col-sm-4 col-xs-4">
              
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
            <div class="col-lg-3 col-md-2 col-sm-4 col-xs-4">

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
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              
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
              <div class="col-md-3 col-md-offset-3 col-xs-6 col-sm-6 ">               
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

              <div class="col-md-3 col-xs-6 col-sm-6">
                <a href="javascript:;" class="link-text2 contact-button btn" style="background-color: #f60; margin: 10px 10px 0;color: #fff;text-align: center;">Agent Login</a>
                <!-- <a href="javascript:;" class="link-text2 contact-button"><i class="icon-help-circled-alt"></i>Agent Login</a> -->
              </div>
            </div>
          </div>
        </div>

      </div>
      
      <!-- model popup start here -->
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

  <!-- model popup end here -->

      <!-- Copyright -->
      <div class="copyright-section">
      
        <div class="container">          
          <div class="copyright align-center">Copyright Autolane360 © 2018. All Rights Reserved.</div>
        </div>

      </div>

    </footer>

    

    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->
    <!--agent  signin modal-->


  </div>



  <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

    <?php $this->load->view('includes/site_js') ?>
    <script type="text/javascript" src="<?php echo base_url('assets/engine1/wowslider.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/engine1/script.js');?>"></script>
    
<script>


  var base_url = '<?php echo base_url() ?>'; 

// select2 library

  $("#car-years").select2();
  $("#car-makes").select2();
  $("#car-models").select2();
  $("#budget").select2();
  // $("#country_filter").select2();

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
                          $("#error_result").html('<div style="color:red;" class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry!</strong> Email or Password incorrect. </div>');
                        }          
                    }

           });
        }     

 }); 

//country filter submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

  $(".owl-carousel").owlCarousel(
                              {
                                  margin:30,
                                  nav:true,
                                  navText:false,
                                  responsiveClass:true,
                                  responsive:{
                                      0:{
                                          items:1,
                                          nav:true
                                      },
                                      600:{
                                          items:3,
                                          nav:false
                                      },
                                      1000:{
                                          items:5,
                                          nav:true,
                                          loop:false
                                      }
                                  }
                              }); //re-initialise the owl


    $(document).on("change", "#country_filter", function(e){

        e.preventDefault();         
        
        var country_name = $('#country_filter').val();

                  $.ajax({
                          url :base_url+'Home/country_filter/'+country_name,
                          type: 'POST',
                          dataType:'html',
                           
                          error: function(xhr,status,error)
                          {   
                              alert(xhr.responseText);
                          },  
                          
                          success: function(response) 
                          {

                             //these 3 lines kill the owl, and returns the markup to the initial state
                              $('.owl-carousel').trigger('destroy.owl.carousel'); 
                              $('.owl-carousel').find('.owl-stage-outer').children().unwrap();
                              $('.owl-carousel').removeClass("owl-center owl-loaded owl-text-select-on");
                  
                              $('#country_filter_data').html(response); //php response show here

                              $(".owl-carousel").owlCarousel(
                              {
                                  margin:30,
                                  nav:true,
                                  navText:false,
                                  responsiveClass:true,
                                  responsive:{
                                      0:{
                                          items:1,
                                          nav:true
                                      },
                                      600:{
                                          items:3,
                                          nav:false
                                      },
                                      1000:{
                                          items:5,
                                          nav:true,
                                          loop:false
                                      }
                                  }
                              }); //re-initialise the owl

                              document.getElementById("page_scroll").scrollIntoView();
                          }

                      });
             
        });
 // });



// car model pick from library

// $(document).ready(function(){
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
      
      // console.log('loading');
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