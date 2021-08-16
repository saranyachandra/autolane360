

<?php $this->load->view('includes/site_css') ?>
<style type="text/css">
  .select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
    width: 100%!important;
}

</style>
<!-- car year,brand,model library -->
<script type="text/javascript" src="<?php echo base_url ('assets/js/carquery.0.3.4.js');?>"></script>

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

          <h1 class="page-title">Browse Car List</h1>

          <ul class="breadcrumbs">

            <li><a href="<?php echo base_url('home/index');?>">Home</a></li>
            <li>Browse Car Type/ Category</li>

          </ul>

        </div>

      </div>

      <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
      <div class="page-section" style="padding-top: 0; padding-bottom: 20px;">
        <div class="container">
          <h3 class="section-title" style="padding-top:15px;">
                  
            
          </h3>
          <div class="row">
            <div class="brw">
            <div class="col-md-2">
              <a href="<?php echo base_url('home/car_category/'."luxury")?>">
              <img src="<?php echo base_url('assets/images/br-1.png');?>">
              </a>
            </div>
            <div class="col-md-2">
              <a href="<?php echo base_url('home/car_category/'."Dealership");?> ">
              <img src="<?php echo base_url('assets/images/br-2.png');?>">
              </a>
            </div>
            <div class="col-md-2">
              <a href="<?php echo base_url('home/car_category/'."Used_Cars");?>">
              <img src="<?php echo base_url('assets/images/br-3.png');?>">
              </a>
            </div>
            <div class="col-md-2">
              <a href="<?php echo base_url('home/car_category/'."Uber_Taxi");?>">
              <img src="<?php echo base_url('assets/images/br-4.png');?>">
              </a>
            </div>
            <div class="col-md-2">
              <a href="<?php echo base_url('home/car_category/'."Commercial_car");?>">
              <img src="<?php echo base_url('assets/images/br-5.png');?>">
              </a>
            </div>
            <div class="col-md-2"><img src="<?php echo base_url('assets/images/br-6.png');?>"></div>
          </div>
          </div>
        </div>
      </div>

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
      <div class="page-section-bg" style="padding:0;">

        <div class="container">

          <div class="products-holder">

            <div class="tabs tabs-section style-2 clearfix">
              <!--tabs navigation-->

              <!--tabs content-->
              <div class="tabs-content">
                <div id="tab-8">

                 
                <div class="carousel-type-3" >
                  <div  class="owl-carousel"  data-max-items="4" data-item-margin="30">
                    
                   <?php 
                    
                    foreach ($car_detail as $car_details) {
                   
                   ?>
                    <!-- Slide  start one car product-->                  
                    
                    <div class="item-carousel" >
                    
                       <div class="product" style="position: relative;" >

                        <?php 
                          if($car_details->car_status == 'Sold')
                          {
                            echo 
                              '<div class="review-label">SOLD </div>
                              <a href="#">
                              <img style="height:185px;" src="'.$car_details->admincar_stockimg.'" alt="">
                              </a>';
                          }
                          else{
                             echo ' <a href="#"> <img style="height:185px;" src="'.$car_details->admincar_stockimg.'" alt=""> </a>';
                          }
                        ?>
                         
                          <div class="product-description">
  
                            <h5 class="product-name" style="text-transform: capitalize;">
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
                                      <strong>Available:</strong>
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

                  <?php }   ?>
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

      <?php $this->load->view('includes/footer_menu') ?>
      
    </footer>


    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

  </div>

  <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

  <!-- JS Libs & Plugins
  ============================================ -->
  <?php $this->load->view('includes/site_js') ?>
 
<script type="text/javascript">


// select2 library

  $("#car-years").select2();
  $("#car-makes").select2();
  $("#car-models").select2();
  
  // car model pick from library
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
});

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