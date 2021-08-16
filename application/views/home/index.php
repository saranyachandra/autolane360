
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
                               
                <div class="col-md-3 wdth-25">                  
                    <button type="submit" class="btn btn-style-3" > <i class="licon-magnifier"></i>Search</button> 
                </div>

            </div>
          </form>
              
          </div>
           
            
          </div>
        </div>

      </div>
      
    </div>

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content">      

      <!-- hot deals start here -->
      <div class="page-section-bg">
        
        <div class="container">
          
            <!-- hot deals start here -->
          <h3 class="section-title" id="page_scroll">Hot Deals</h3>
          <div class="carousel-type-3" >
                  <div  class="owl-carousel"  data-max-items="4" data-item-margin="30" id="country_filter_data">
                    
                   <?php 
                    if(!empty($car_detail))
                    {
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

                            <?php 
                              if($car_details->car_status == 'Sold')
                              {
                                echo
                                 ' <div class="model-info text-center" >
                                    <a style="color: #333;" href="#">View Details</a>
                                  </div>';
                              }
                              else{
                                  echo
                                 ' <div class="model-info text-center" >
                                    <a style="color: #333;font-weight: bold;" href="'.base_url('Home/get_car_details/').$car_details->carstock_id.'">View Details</a>
                                  </div>';
                              }
                            ?>

                            </div>

                      </div>

                    </div>
                     
                    <!-- /Slide  end one car product -->

                  <?php } } else { echo '<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry No Hot Deals Found!</strong>  </div>' ; } ?>
                   </div>
                   
          </div>

          <hr>
          <!-- newly added car details -->
          <h3 class="section-title" id="page_scroll">Newly Added Cars</h3>
          <div class="carousel-type-3" >
                  <div  class="owl-carousel"  data-max-items="4" data-item-margin="30" id="country_filter_data">
                    
                   <?php 
                    if(!empty($new_car_detail))
                    {
                    foreach ($new_car_detail as $car_details) {
                   
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

                             
                              <?php 
                              if($car_details->car_status == 'Sold')
                              {
                                echo
                                 ' <div class="model-info text-center" >
                                    <a style="color: #333;" href="#">View Details</a>
                                  </div>';
                              }
                              else{
                                  echo
                                 ' <div class="model-info text-center" >
                                    <a style="color: #333;font-weight: bold;" href="'.base_url('Home/get_car_details/').$car_details->carstock_id.'">View Details</a>
                                  </div>';
                              }
                            ?>
                            </div>

                      </div>

                    </div>
                     
                    <!-- /Slide  end one car product -->

                  <?php } } else { echo '<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry Newly Added Not Found!</strong>  </div>' ; } ?>
                   </div>
                   
          </div>
        </div>
      </div>


      <div class="page-section">
        
        <div class="container">
         <div class="flex-row">   
          <div style="background-color:#f60; width:2%; height:30px; line-height:30px;" class="col-md-1 col-sm-1 col-xs-1"></div>
          <div class="col-md-10 col-sm-10 col-xs-10" style="width:83.33333333333334%!important; float:inherit!important;">
            <h3 class="section-title">  Browse Car Inventory</h3>
          </div>
          </div>
            
          <div class="row">            
              <div class="browse-car">
                <div class="col-sm-12">
                  
                    <div class="col-sm-4 text-center">
                      <a href="<?php echo base_url('home/car_category/luxury')?>">
                      <img src="<?php echo base_url('assets/images/l-1.jpg');?>" class="img-responsive" style="margin:0 auto;"><br>
                      <span style="font-size:18px; font-weight:bold;">Luxury Premium Collections</span>
                      </a>
                    </div>

                    <div class="col-sm-4 text-center">
                      <a href="<?php echo base_url('home/car_category/'."Dealership");?> ">
                      <img src="<?php echo base_url('assets/images/l-2.jpg');?>" class="img-responsive" style="margin:0 auto;"><br>
                      <span style="font-size:18px; font-weight:bold;">Dealership Consignments</span>
                      </a>
                    </div>

                    <div class="col-sm-4 text-center">
                      <a href="<?php echo base_url('home/car_category/'."Used_Cars");?>">
                      <img src="<?php echo base_url('assets/images/l-3.jpg');?>" class="img-responsive" style="margin:0 auto;"><br>
                      <span style="font-size:18px; font-weight:bold;">Used Car Minor Dents</span>
                      </a>
                    </div>
                </div>

                <div class="col-sm-12" style="padding-top:50px;">
                    <div class="col-sm-4 text-center">
                      <a href="<?php echo base_url('home/car_category/'."Uber_Taxi");?>">
                      <img src="<?php echo base_url('assets/images/l-4.jpg');?>" class="img-responsive" style="margin:0 auto;"><br>
                      <span style="font-size:18px; font-weight:bold;">Uber-Taxi Ready Cars</span>
                      </a>
                    </div>
                    <div class="col-sm-4 text-center">
                      <a href="<?php echo base_url('home/car_category/'."Commercial_car");?>">
                      <img src="<?php echo base_url('assets/images/l-5.jpg');?>" class="img-responsive" style="margin:0 auto;"><br>
                      <span style="font-size:18px; font-weight:bold;">Commercial Cars- Trucks</span>
                      </a>
                    </div>
                    <div class="col-sm-4 text-center">
                      <img src="<?php echo base_url('assets/images/l-6.jpg');?>" class="img-responsive" style="margin:0 auto;"><br>
                      <span style="font-size:18px; font-weight:bold; color:#333;">Used Wholesale Autoparts</span>
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

   

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

     <footer id="footer" class="footer-4">

      <?php $this->load->view('includes/footer_menu') ?>
      
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


       
                  // $.ajax({
                  //         url :base_url+'Home/change_country/'+country_name,
                  //         type: 'POST',
                  //         dataType:'html',
                           
                  //         error: function(xhr,status,error)
                  //         {   
                  //             alert(xhr.responseText);
                  //         },  
                          
                  //         success: function(response) 
                  //         {

                  //            //these 3 lines kill the owl, and returns the markup to the initial state
                  //             $('.owl-carousel').trigger('destroy.owl.carousel'); 
                  //             $('.owl-carousel').find('.owl-stage-outer').children().unwrap();
                  //             $('.owl-carousel').removeClass("owl-center owl-loaded owl-text-select-on");
                  
                  //             $('#country_filter_data').html(response); //php response show here

                  //             $(".owl-carousel").owlCarousel(
                  //             {
                  //                 margin:30,
                  //                 nav:true,
                  //                 navText:false,
                  //                 responsiveClass:true,
                  //                 responsive:{
                  //                     0:{
                  //                         items:1,
                  //                         nav:true
                  //                     },
                  //                     600:{
                  //                         items:3,
                  //                         nav:false
                  //                     },
                  //                     1000:{
                  //                         items:5,
                  //                         nav:true,
                  //                         loop:false
                  //                     }
                  //                 }
                  //             }); //re-initialise the owl

                  //             document.getElementById("page_scroll").scrollIntoView();
                  //         }

                  //     });
             
        
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