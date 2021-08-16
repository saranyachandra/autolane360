
<?php $this->load->view('includes/admin_css'); ?>

<style type="text/css">
    
    span{
        font-weight: bold;
    }
    
</style>
<script type="text/javascript" src="<?php echo base_url ('assets/js/carquery.0.3.4.js');?>"></script>


<body class="sidebar-dark sidebar-expand navbar-brand-dark header-light">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
             <?php $this->load->view('includes/admin_top_navigation'); ?>
        <!-- /.navbar -->
        <div class="content-wrapper">
            <!-- SIDEBAR -->
            <aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
                <!-- User Details -->
                <div class="side-user d-none">
                    <div class="col-sm-12 text-center p-0 clearfix">
                        <div class="d-inline-block pos-relative mr-b-10">
                            <figure class="thumb-sm mr-b-0 user--online">
                                <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                            </figure><a href="#" class="text-muted side-user-link"><i class="feather feather-settings list-icon"></i></a>
                        </div>
                        <!-- /.d-inline-block -->
                        <div class="lh-14 mr-t-5"><a href="#" class="hide-menu mt-3 mb-0 side-user-heading fw-500">Emeka
                                Daniels</a>
                            <br><small class="hide-menu">Super Admin</small>
                        </div>
                    </div>
                    <!-- /.col-sm-12 -->
                </div>
                <!-- /.side-user -->
                <!-- Call to Action -->

                <!-- Sidebar Menu -->
                    <?php $this->load->view('includes/admin_side_menu'); ?>
                <!-- /.sidebar-nav -->
            </aside>
            <!-- /.site-sidebar -->
            <main class="main-wrapper clearfix">
                <!-- Page Title Area -->
                <div class="row page-title clearfix">
                    <div class="page-title-left">
                        <h6 class="page-title-heading mr-0 mr-r-5">Admin Manager</h6>
                        <p class="page-title-description mr-0 d-none d-md-inline-block">Information about  Car Part Upload</p>
                    </div>
                    <!-- /.page-title-left -->
                   
                    <!-- /.page-title-right -->
                </div>
                <!-- /.page-title -->
                <!-- =================================== -->
                <!-- Different data widgets ============ -->
                <!-- =================================== -->
                <div class="widget-list row">

                    <!-- /.widget-holder -->
                    <div class="widget-holder widget-sm col-md-12 widget-full-height">
                        <div class="widget-bg">

                            <div class="row">
                                <div class="col-md-12 widget-holder">
                                    <div class="widget-bg">
                                        <div class="widget-heading clearfix">
                                            <h5>Add  Car Part Upload</h5>
                                        </div>

                                        <!-- /.widget-heading -->
                                    <div class="widget-body clearfix">
                                   
                                        <form id="update_car_part" action="<?php echo base_url('admin/update_car_part'); ?>" method="POST" enctype="multipart/form-data">
                                           
                                        <input type="hidden" name="carpart_id" value="<?php echo $carpart_detail->car_part_id; ?>">   
                                            <div class="container-fluid">
                                                        
                                                        <div class="form-group row">
                                                            <div class="col-sm-6" style="margin-bottom:10px;">
                                                                <div class="col-sm-6" style="margin-bottom:10px;">
                                                                    <span style="font-size:18px; font-weight:bold; color:#565656;">Part
                                                                        Main Features</span>
                                                                </div>                                                               

                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                        <input type="text" name="available_from"  class="available_from form-control" placeholder="Available From" autocomplete="off" value="<?php echo $carpart_detail->available_from; ?>">
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <input type="text" name="available_to" class="available_to form-control" placeholder="Available To" autocomplete="off" value="<?php echo $carpart_detail->available_to; ?>">
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="row" id="show_Splash_Text" >
                                                                    <div class="form-group col-sm-6">
                                                                       <select class="form-control" name="car_years" id="car-years-1">
                                                                        
                                                                       </select>
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                         <select class="form-control" name="car_brand" id="car-makes-1">
                                                                          
                                                                         </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                         <select  class="form-control" name="car_model" id="car-models-1"></select>       
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <input type="text" class="form-control" name="car_mileage"
                                                                            placeholder="Car Mileage" value="<?php echo $carpart_detail->car_mileage; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    
                                                                    <div class="form-group col-sm-6">
                                                                        <input type="text" class="form-control" style="text-transform: capitalize;" name="car_location"
                                                                        placeholder="Car Location" value="<?php echo $carpart_detail->car_location; ?>" >
                                                                    </div>                                                                   
                                                                </div>
                                                                                                                        <!-- /.input-group -->
                                                        </div>
                                                       
                                                        <!-- /.col-sm-9 -->
                                                    </div>

                                                </div>
                                                <hr>
                                                <div class="container-fluid">                                                   
                                                    <div class="form-group row">
                                                        <div class="col-sm-6" style="margin-bottom:10px;">
                                                            <div class="col-sm-6" style="margin-bottom:10px;">
                                                                <span style="font-size:18px; font-weight:bold;">Add Car Part
                                                                   Details</span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-sm-12">
                                                                <input type="text" class="form-control" name="vin_number" placeholder="Enter VIN Number" value="<?php echo $carpart_detail->vin_number; ?>">
                                                                </div>
                                                                 <div class="form-group col-md-6 col-sm-12">
                                                                <input type="text" class="form-control" style="text-transform: capitalize;" name="primary_damage" placeholder="Primary Damage Details" value="<?php echo $carpart_detail->primary_damage; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                               
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <input type="text" class="form-control" style="text-transform: capitalize;" name="secondary_damage" placeholder="Secondary Damage Details" value="<?php echo $carpart_detail->secondary_damage; ?>"> 
                                                            </div>
                                                            </div>                                                           
                                                       
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="container-fluid">                                                   
                                                    <div class="form-group row">
                                                        <div class="col-sm-6" style="margin-bottom:10px;">
                                                            <div class="col-sm-6" style="margin-bottom:10px;">
                                                                <span style="font-size:18px; font-weight:bold;">Recoverable Parts
                                                                   </span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-sm-12">
                                                                <input type="checkbox" name="recoverable_parts[]" value="Entire Engine Compartment" <?php if (preg_match("/Entire Engine Compartment/i", $carpart_detail->recoverable_part)) { echo "checked";} else {echo "";} ?>>
                                                                Entire Engine Compartment
                                                                </div>
                                                                <div class="form-group col-md-6 col-sm-12">
                                                                <input type="checkbox" name="recoverable_parts[]" value="Entire Under Carriage" <?php if (preg_match("/Entire Under Carriage/i", $carpart_detail->recoverable_part)) { echo "checked";} else {echo "";} ?>>
                                                                Entire Under Carriage
                                                                </div>
                                                            </div>
                                                            <div class="row">                                                              
                                                                <div class="form-group col-md-6 col-sm-12">
                                                                <input type="checkbox" name="recoverable_parts[]" value="Dashboard" <?php if (preg_match("/Dashboard/i", $carpart_detail->recoverable_part)) { echo "checked";} else {echo "";} ?> >
                                                                Dashboard
                                                                </div>
                                                                <div class="form-group col-md-6 col-sm-12">
                                                                <input type="checkbox" name="recoverable_parts[]" value="Side Mirrors" <?php if (preg_match("/Side Mirrors/i", $carpart_detail->recoverable_part)) { echo "checked";} else {echo "";} ?> >
                                                                Side Mirrors
                                                                </div>
                                                            </div>    
                                                            <div class="row">                                                              
                                                                <div class="form-group col-md-6 col-sm-12">
                                                                <input type="checkbox" name="recoverable_parts[]" value="Gear Box" <?php if (preg_match("/Gear Box/i", $carpart_detail->recoverable_part)) { echo "checked";} else {echo "";} ?>>
                                                                Gear Box
                                                                </div>
                                                                <div class="form-group col-md-6 col-sm-12">
                                                                <input type="checkbox" name="recoverable_parts[]" value="Back Lights" <?php if (preg_match("/Back Lights/i", $carpart_detail->recoverable_part)) { echo "checked";} else {echo "";} ?>>
                                                                Back Lights
                                                                </div>
                                                            </div>   
                                                            <div class="row">                                                             
                                                                <div class="form-group col-md-6 col-sm-12">
                                                                <input type="checkbox" name="recoverable_parts[]" value="Doors Hood" <?php if (preg_match("/Doors Hood/i", $carpart_detail->recoverable_part)) { echo "checked";} else {echo "";} ?>>
                                                                 Doors/Hood
                                                                </div>
                                                                <div class="form-group col-md-6 col-sm-12">
                                                                <input type="checkbox" name="recoverable_parts[]" value="Electricals" <?php if (preg_match("/Electricals/i", $carpart_detail->recoverable_part)) { echo "checked";} else {echo "";} ?> >
                                                                 Electricals
                                                                </div>
                                                            </div>     
                                                            <div class="row">                                                             
                                                                <div class="form-group col-md-6 col-sm-12">
                                                                <input type="text" name="other_recoverable_parts" class="form-control" style="text-transform: capitalize;" placeholder="Enter Other Recoverable Parts" value="<?php echo $carpart_detail->other_recoverable_part; ?>">
                                                                </div>
                                                                
                                                            </div>  
                                                       
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                            <div class="container-fluid">                                                   
                                                    <div class="form-group row">
                                                        <div class="col-sm-12 col-md-12" style="margin-bottom:10px;">
                                                            <div class="col-sm-12" style="margin-bottom:10px;">
                                                                <span style="font-size:18px; font-weight:bold;">Post Car</span>
                                                            </div>
                                                            
                                                        <div class="row">
                                                    <!-- here country rupee shows -->
                                            <script type="text/javascript">

                                                var con=new Array();
                                                var cur=new Array();

                                                con[0]='Ghana';
                                                con[1]='Nigeria';
                                                con[2]='United States';

                                                cur['Ghana']='₵ ';
                                                cur['Nigeria']='₦ ';
                                                cur['United States']='$ ';
                                                  
                                                function list(index)
                                                {
                                                    var price=document.getElementById('price');
                                                    var clear_cost=document.getElementById('clear_cost');
                                                   
                                                    if(index==-1)
                                                    {
                                                        price.value ="";
                                                        clear_cost.value =""; 
                                                                                              
                                                      return;
                                                    }
                                                    price.value=cur[index];
                                                    clear_cost.value=cur[index];    
                                                                                          
                                                }

                                            </script>
                                   
                                          <div class="form-group col-md-3">
                                             <span>Country</span>
                                            <select name="country" id="country_id" onChange=list(this.value) class="con form-control required" >
                                              <script type="text/javascript">
                                                document.write("<option value=-1>Select Country</option>");
                                                count=con.length;
                                                for(i=0;i<count;i++)
                                                document.write("<option value='"+con[i]+"'>"+con[i]+"</option>");

                                                var element = document.getElementById('country_id');
                                                element.value = '<?php echo $carpart_detail->country; ?>';

                                              </script>
                                            </select>
                                          </div>

                                          <div class="form-group col-md-3" style="margin-bottom:1.5625rem;">
                                            <span>Complete Shipping Price</span>
                                              <input type="text" name="complete_shipping_price" id="price" class="form-control" placeholder="Complete Shipping Price" autocomplete="off" onkeypress="return Validate(event);" value="<?php echo $carpart_detail->com_shipping_price; ?>">
                                          </div>
                                          <div class="form-group col-md-3">
                                            <span>Custom Shipping Price</span>
                                            <input type="text" name="custom_shipping_price" id="clear_cost" class="form-control" placeholder="Custom Shipping Price" autocomplete="off" onkeypress="return Validate(event);" value="<?php echo $carpart_detail->cus_shipping_price; ?>">
                                          </div>
                                          
                                                                
                                                        </div>                                                            
                                                    </div>                                                    
                                                </div>
                                            </div>
                                           
                                            <div class="container">
                                                <div class="form-actions">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12 ml-auto btn-list text-center">
                                                           
                                                            <button type="submit" style="background-color:#f60; border:0;" class="btn btn-warning">
                                                                <i class="feather feather-check-circle"></i> &nbsp;  Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                           
                                    </div>
                                        <!-- /.widget-body -->
                                    </div>
                                    <!-- /.widget-bg -->
                                </div>

                                <!-- /.widget-holder -->
                            </div>
                            <!-- /.counter-w-info -->

                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->


                </div>

                <!-- /.widget-list -->

                <!-- /.widget-list -->
            </main>
            <!-- /.main-wrappper -->
            <!-- RIGHT SIDEBAR -->

            <!-- CHAT PANEL -->

            <!-- /.chat-panel -->
        </div>
        <!-- /.content-wrapper -->
        <!-- FOOTER -->
        <footer class="footer"><span class="heading-font-family">Copyright @ 2018. All rights reserved. Autolane360
                Admin</span>
        </footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
<?php $this->load->view('includes/admin_js'); ?>

<script type="text/javascript">

var base_url = '<?php echo base_url() ?>';

$(".available_from").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
});

$(".available_to").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
});

function Validate(event) {
        var regex = new RegExp("^[0-9-!@#$%*?]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }  


//agent  car #1 stock form submit

    $(document).on("submit", "#update_car_part", function(e){

        e.preventDefault();
       
        $(this).validate({ 
                         rules: {  

                                  car_mileage:"required",                  
                                  car_model: "required",
                                  complete_shipping_price: "required",
                                                
                                },

                          messages: 
                                {                           
                                  car_mileage: {
                                      required: "Required", 
                                  }, 
                                  car_model: {
                                      required: "Required ", 
                                  }, 
                                  complete_shipping_price: {
                                      required: "Required",
                                      digits: true
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
                            swal("Your Details Updated Successfully...");
                            window.location.href = "<?php echo base_url('admin/view_all_carpart'); ?>";
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
      var cq2 = new CarQuery();
      var cq3 = new CarQuery();
  
     //Run the carquery init function to get things started:
      carquery.init();
     
     
     //Optionally, you can pre-select a vehicle by passing year / make / model / trim to the init function:
     //carquery.init('2000', 'dodge', 'Viper', 11636);

     //Optional: Pass sold_in_us:true to the setFilters method to show only US models. 
      carquery.setFilters( {sold_in_us:true} );

     //Optional: initialize the year, make, model, and trim drop downs by providing their element IDs
      carquery.initYearMakeModelTrim('car-years-1', 'car-makes-1', 'car-models-1', 'car-model-trims-1');
     
     //Optional: set the onclick event for a button to show car data.
     $('#cq-show-data').click(  function(){ carquery.populateCarData('car-model-data'); } );

     //Optional: initialize the make, model, trim lists by providing their element IDs.
     carquery.initMakeModelTrimList('make-list', 'model-list', 'trim-list', 'trim-data-list');

     //Optional: set minimum and/or maximum year options.
     cq2.year_select_min=1990;
     cq2.year_select_max=2018;

    
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