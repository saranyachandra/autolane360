
<!-- import css files here -->
<?php $this->load->view('includes/site_css') ?>
<script type="text/javascript" src="<?php echo base_url ('assets/js/carquery.0.3.4.js');?>"></script>


<style type="text/css">


#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
  border-radius: 15px;
  text-align: center;
}
#boxes #dialog {
  width:450px; 
  height:300px;
  padding:10px;
  background-color:#ffffff;
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}

select.m-select{
    width: 125px;
    padding: 12px 0 12px 20px;
    border: 1px solid #eeeeee;
    border-radius: 30px;
    font: 400 13px 'Open Sans',sans-serif;
    background: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    appearance: none!important;
}

.s-form select{
    width:100%!important;
    margin-bottom: 10px;
    text-transform: uppercase;
    font: 400 10px 'Open Sans',sans-serif!important;
}
.tooltip-inner {
  background-color: red !important;
  color: #color ;
}

.tooltip.top .tooltip-arrow {
  border-top-color: #00acd6;
}
.b-items__aside-main-body-item label a
{
  color: #000;
}
.b-items__aside-main-body-item label{
    display: block;
    /*text-transform: uppercase;*/
    margin-bottom: 0px;
    font: 700 13px 'Open Sans',sans-serif;
    text-align: left;
}

.b-items__aside-main-body-item{
    text-align: left;
    margin-bottom: 0px!important;
}
h2
{
  font-size:25px!important;
}

 input:not([type="submit"]),
    textarea,select,
    .auto-custom-select .auto-selected-option{
      width: 100%;
      color: #31353c;
      border: 1px solid #ccc;
      background-color: transparent;
      border-radius: 5px;
      height: 44px;
      padding: 10px 20px;
      text-align: left;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      -webkit-transition: box-shadow .35s ease, border-color .35s ease;
      transition: box-shadow .35s ease, border-color .35s ease;
    }


</style>
</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124317054-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124317054-1');
</script>
<!-- register model popup -->
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
<!--b-nav-->


      <div class="breadcrumbs-wrap" data-bg="<?=base_url()?>assets/images/1920x200_img1.jpg" style="background-image: url('<?=base_url()?>assets/images/1920x200_img1.jpg')">

        <div class="container">
          
          <h1 class="page-title">Direct Buy Lane</h1>

          <ul class="breadcrumbs">

            <li><a href="<?php echo base_url('home/index');?>">Home</a></li>
            <li>Direct Buy Lane</li>

          </ul>

        </div>

      </div>
<!--b-slider-->
<div class="container">
  <div class="row">
 <div class="col-md-10 col-sm-10">
  <!-- <section>
  <div id="carousel" class="slide carousel carousel-fade">
    <div class="carousel-inner">
      <div class="item active"> 
        <img src="<?php echo base_url('assets/images/backgrounds/6.jpg');?>" alt="sliderImg" />
      </div>
      
    </div>
   
</section> -->

    <div class="b-items">
				

					<div class="col-lg-12 col-sm-8 col-xs-12">
						<div class="row m-border">
							<section style="padding:30px 0;">
      
        <div class="row">

          <div class="col-md-6 col-sm-12 col-xs-12">
           
              <div class="content">

                <form id="direct_buy" class="contact-form type-2"  action="<?php echo base_url('home/customer_direct_buy'); ?>" method="post">

                  <div class="row">
                          <div class="col-sm-12 col-lg-12 col-md-12">         
                               <label class="required">Select Your car category</label>
                            <select name="car_category" data-default-text="Select Your car category">
                                <option value="">Select Your car category</option>
                                <option value="Sedan">Sedan</option>
                                <option value="SUV">SUV</option>
                                <option value="Crossover">Crossover</option>
                                <option value="Truck">Truck</option>
                                <option value="Hatchback">Hatchback</option>
                                <option value="Convertible">Convertible</option>
                                <option value="Van">Van</option>
                                <option value="Bus">Bus</option>
                                <option value="Trailer">Trailer</option>
                                <option value="Others">Others</option>
                            </select>         
                          </div>
                  </div>

                 <div class="row">
                              <div class="col-sm-6 col-sm-6 col-md-6">          
                                <label class="required">Car Year</label>
                                <select  name="car_years" id="car-years"></select>          
                              </div>
                              <div class="col-sm-6 col-sm-6 col-md-6">          
                                <label class="required">Car Brand</label>
                               <select name="car_brand" id="car-makes"></select>        
                              </div>
                  </div>

                   <div class="row">
                              <div class="col-sm-6 col-sm-6 col-md-6">          
                                <label class="required">Car Model</label>
                                <select  name="car_model" id="car-models"></select>         
                              </div>
                             
                  </div>

                  <div class="row">
                              <div class="col-sm-6 col-sm-6 col-md-6">          
                                <label class="required">First Name</label>
                                <input type="text" name="first_name" style="text-transform: capitalize;">         
                              </div>
                              <div class="col-sm-6 col-sm-6 col-md-6">          
                                <label class="required">Last Name</label>
                                <input type="text" name="last_name" style="text-transform: capitalize;">         
                              </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6 col-sm-6 col-md-6">         
                                <label class="required">Email</label>
                                <input type="text" id="user_email" name="email">
                                 <div id="email_error"></div>         
                    </div>

                    <div class="col-sm-6 col-lg-6 col-md-6">
                      <label class="required">Phone</label>
                      <input type="text" id="phone" name="phone" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6 col-sm-6 col-md-6">         
                        <label class="required">City</label>
                        <input type="text" name="user_city">
                    </div>

                    <div class="col-sm-6 col-lg-6 col-md-6">
                      <label class="required">State</label>
                      <input type="text"  name="user_state" >
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12 col-md-12">         
                        <label class="required">Comments</label>
                        <textarea name="comments" style="height: 75px;" placeholder="Comments"></textarea>
                    </div>                  
                  </div>
                  
                  <button type="submit" style="background-color: #f60; color: #fff;" class="btn m-btn"> SUBMIT NOW 
                    <span class="fa fa-angle-right"></span>
                  </button>

                </form>

              </div>

            
          </div>


          <div class="col-md-6 col-sm-12 col-xs-12 ">
            <div class="b-contacts__address">
              <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="b-contacts__address-hours">
                <h2 class="s-titleDet wow zoomInUp" data-wow-delay="0.5s">Contact Our Local Representatives</h2>
                <div class="b-contacts__address-hours-main wow zoomInUp" data-wow-delay="0.5s">
                  <div class="row">
                                      <div class="row" style="margin-bottom:15px;">
                                        <div class="col-md-12 col-xs-12">
                                          <div class="col-md-3 col-xs-12">
                                          <img src="<?php echo base_url('assets/images/flags/us-flag.png');?>" class="img-responsive" alt=""/> </div>
                                        </div>
                                      </div>
                    <div class="col-md-6 col-xs-12">
                      <h5>Phone Call</h5>
                      <p><span class="fa fa-phone"></span> USA +1 - 210-907-6887</p>
                    </div>
                    <div class="col-md-6 col-xs-12">
                      <h5>Email</h5>
                      <p><span class="fa fa-envelope"></span> auto.sales@autolane360.com</p>
                    </div>
                  </div>
                </div>
              </div></div>

              <div class="b-contacts__address-info">
                <div class="col-md-12 col-xs-12">
                       <div class="row"> <div class="col-md-4 col-xs-12"><img src="<?php echo base_url('assets/images/flags/nigeria-flag.png');?>" class="img-responsive" alt=""/> </div></div>
                </div>
                <div class="col-md-12 col-xs-12" style="padding-top: 15px;"><h2 class="s-titleDet wow zoomInUp" style="font-size:18px!important;" data-wow-delay="0.5s">Local Representative Contacts (Nigeria) </h2></div>
                <div class="col-md-12 col-xs-12"><address class="b-contacts__address-info-main wow zoomInUp" data-wow-delay="0.5s">
                
                  <div class="b-contacts__address-info-main-item">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        Lagos
                      </div>
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        <em>07019155814</em>
                      </div>
                    </div>
                  </div>
                  <div class="b-contacts__address-info-main-item">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        Abuja
                      </div>
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        <em>07061607374</em>
                      </div>
                    </div>
                  </div>
                  <div class="b-contacts__address-info-main-item">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        Port-Harcourt
                      </div>
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        <em>07033357048</em>
                      </div>
                    </div>
                  </div>
                                    <div class="b-contacts__address-info-main-item">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        
                        Kano
                      </div>
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        <em>08053827362</em>
                      </div>
                    </div>
                  </div>
                                    <div class="b-contacts__address-info-main-item">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-12">

                        Owerri
                      </div>
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        <em>08181981662</em>
                      </div>
                    </div>
                  </div>
                </address></div>
              </div>
            </div>
          </div>
          
        </div>
      
    </section><!--b-contacts-->
              
						</div>
					</div>
          
         
    </div>

</div>



 <div class="col-md-12 col-xs-12 col-sm-12 wow zoomInUp" data-wow-delay="0.5s" style="margin-top: 20px; visibility: visible; animation-delay: 0.5s; animation-name: zoomInUp;">
    
   <div style="margin-top: 10px; border-radius: 5px; ">
        
       <?php $this->load->view('includes/newsfeeds'); ?>
      
    </div>
  </div>
  </div>
  </div>
<!--b-world-->

<!--b-info-->

<footer id="footer" class="footer-4">
      <?php $this->load->view('includes/footer_menu') ?>
    
</footer>
</div>
<!--b-footer--> 
<!--Main--> 

<?php $this->load->view('includes/site_js') ?>


<script type="text/javascript">

//direct buy form submit

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).on("submit", "#direct_buy", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                             
                                  email:"required",                  
                                  first_name: "required",                                 
                                  phone: "required",
                                  user_city: "required",                
                                },

                          messages: {                           
                                  email: {
                                      required: "Required", 
                                  }, 
                                  first_name: {
                                      required: "Required ", 
                                  }, 
                               
                                  phone: {
                                      required: "Required", 
                                  }, 
                                  
                                  user_city: {
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
                       
                        swal("Successfully updated..");
                        document.getElementById("direct_buy").reset(); //clear form data
                        }
                        else 
                        {                       
                          swal("Somethink went wrong..");
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