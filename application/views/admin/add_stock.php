
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
                        <div class="lh-14 mr-t-5">
                            <a href="#" class="hide-menu mt-3 mb-0 side-user-heading fw-500">Emeka Daniels</a>
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
                        <h6 class="page-title-heading mr-0 mr-r-5">Add Stock</h6>
                        <p class="page-title-description mr-0 d-none d-md-inline-block">Information about Add Stock</p>
                    </div>
                    <!-- /.page-title-left -->
                    <div class="page-title-right d-none d-sm-inline-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Add Stock</li>
                        </ol>
                    </div>
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
                                <div class="widget-body clearfix" style="width:100%;">

                                    <div class="tabs tabs-bordered">
                                        <ul class="nav nav-tabs" style="width:45%; margin:0 auto;">
                                          
                                            <li class="nav-item">
                                                <a href="#" id="Luxury" onClick="javascript:return yourfunction(Luxury)"  class="nav-link" data-toggle="tab" aria-expanded="true"  style="margin-bottom:7px;">Luxury/ Premium Collections</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" id="Dealership" onClick="javascript:return yourfunction(Dealership)" class="nav-link"  data-toggle="tab" aria-expanded="true" style="margin-bottom:7px;">Dealership Consignment</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" id="Used_Cars" onClick="javascript:return yourfunction(Used_Cars)" data-toggle="tab" aria-expanded="true" style="margin-bottom:7px;">Used Cars- Minor Dents</a>
                                            </li>
                                            <li class="nav-item" style=" margin-left:0!important">
                                                <a href="#" id="Uber_Taxi" onClick="javascript:return yourfunction(Uber_Taxi)" class="nav-link"  data-toggle="tab" aria-expanded="true" style="margin-bottom:7px;">Uber Taxi Ready Cars</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" id="Commercial_car" onClick="javascript:return yourfunction(Commercial_car)" class="nav-link"  data-toggle="tab" aria-expanded="true" style="margin-bottom:7px;">Commercial Cars-Trucks</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" id="Autoparts" onClick="javascript:return yourfunction(Autoparts)" class="nav-link" data-toggle="tab" aria-expanded="true" style="margin-bottom:7px;">Wholesale Autoparts</a>
                                            </li>
                                            <li class="nav-item" style=" margin-left:0!important">
                                                <a href="#" id="Hot_Deals" onClick="javascript:return yourfunction(Hot_Deals)" class="nav-link"  data-toggle="tab" aria-expanded="true" style="margin-bottom:7px;">Hot Deals</a>
                                            </li>

                                        </ul>
                                        <!-- /.nav-tabs -->
                                        

                                            <div  id="showing_form_details" style="display: none;">
                                                <form id="admin_stockform" action="<?php echo base_url('admin/insert_luxury_stock'); ?>" method="POST" enctype="multipart/form-data">

                                                    <input type="hidden" name="category" id="category_val" value="">

                                                    <input type="hidden" name="admin_id" value="<?php echo $this->session->userdata('admin_id');?>">
                                                    <div class="container-fluid">
                                                        <div class="form-group row" style="font-size:20px; letter-spacing: -.5px; font-weight: bold; margin-bottom:20px;">
                                                            <i  class="feather feather-aperture" style="padding-top:7px;"></i>
                                                            &nbsp;&nbsp;&nbsp;<p id="text_show">  </p>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-6" style="margin-bottom:10px;">
                                                                <div class="col-sm-6" style="margin-bottom:10px;">
                                                                    <span style="font-size:18px; font-weight:bold; color:#565656;">Car
                                                                        Main Features</span>
                                                                </div>
                                                                <div class="row" id="show_Splash_Text" style="display: none;">
                                                                    <div class="form-group col-sm-6">
                                                                        <select name="Splash_Text" class="form-control">
                                                                            <option value="" disabled selected hidden>Select Splash Text </option>
                                                                            <option values="Sold">Sold </option>
                                                                            <option values="Good for long trips">Good for long trips</option>
                                                                            <option values="Best offers">Best offers</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                        <input type="text" name="available_from" id="available_from" class="form-control" placeholder="Available From" autocomplete="off">
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <input type="text" name="available_to" id="available_to" class="form-control" placeholder="Available To" autocomplete="off">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                        <select name="car_type" class="form-control">
                                                                           <option value="" disabled selected hidden>Select Car Type </option>
                                                                           <option values="Automobiles">Automobiles </option>
                                                                           <option values="Pick-ups">Pick-ups </option>
                                                                           <option values="SUVs">SUVs</option>
                                                                           <option values="Motorcycles">Motorcycles</option>
                                                                           <option values="Heavy Duty Trucks">Heavy Duty Trucks</option>
                                                                           <option values="Trailers">Trailers</option>
                                                                           <option values="Buses">Buses </option>
                                                                           <option values="Equipments">Equipments</option>
                                                                           <option values="Misellellous">Miscellaneous </option>
                                                                           <option values="Recreational">Recreational</option>
                                                                           <option values="Vans">Vans </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                       <select class="form-control" name="car_years" id="car-years-1"></select>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                         <select class="form-control" name="car_brand" id="car-makes-1"></select>
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                         <select  class="form-control" name="car_model" id="car-models-1"></select>       
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                        <select  class="form-control" name="car_trim" id="car-model-trims-1"></select> 
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <input type="text" class="form-control" name="car_mileage"
                                                                            placeholder="Car Mileage">
                                                                    </div>                                                                   
                                                                </div>
                                                                <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                    <input type="text" class="form-control" name="car_location"
                                                                        placeholder="Car Location">
                                                                </div>
                                                            </div>
                                                            <!-- /.input-group -->
                                                        </div>
                                                        <div class="col-sm-6" style="margin-bottom:10px;">
                                                            <div class="col-sm-6" style="margin-bottom:10px;"><span
                                                                    style="font-size:18px; font-weight:bold; color: #565656;">Car
                                                                    Images/ Video</span></div>
                                                            <div class="form-group">
                                                                <span style="font-weight: bold;" >Upload Car Image</span>
                                                                <br>                                                                
                                                                <input type="file" class="required" name="car_images[]" accept="image/*" multiple>
                                                                <br>
                                                                <small class="text-muted">You can upload the photo here</small>
                                                                    
                                                            </div>
                                                            <div class="form-group">
                                                                <span style="font-weight: bold;" >Upload Car Video</span>
                                                                <br>                                                                
                                                                <input type="file" name="car_videos" accept="Video/*">
                                                                <br>
                                                                <small class="text-muted">You can upload the Video here</small>
                                                                    
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
                                                                <span style="font-size:18px; font-weight:bold;">Add Car
                                                                   Details</span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                    <input type="text" class="form-control" name="vin_status"
                                                                        placeholder="VIN Status">
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <input type="text" class="form-control" name="Interior_color"
                                                                        placeholder="Interior Color">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                        <select name="engine_type" class="form-control">
                                                                            <option value="" disabled selected hidden>Select Engine Type</option>
                                                                            <option value="4-Cylinder">4-Cylinder</option>
                                                                            <option value="6-Cylinder">6-Cylinder</option>
                                                                            <option value="8-Cylinder">8-Cylinder</option>
                                                                        </select>
                                                                    </div>
                                                                <div class="form-group col-sm-6">
                                                                    <input type="text" class="form-control" name="Exterior_color"
                                                                        placeholder="Exterior Color">
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                            <select name="transmission" class="form-control">
                                                                                <option value="" disabled selected hidden>Select Car Transmission</option>
                                                                                <option value="Automatic">Automatic</option>
                                                                                <option value="Manual">Manual</option>
                                                                            </select>
                                                                    </div>
                                                                <div class="form-group col-sm-6">
                                                                    <input type="text" class="form-control" name="car_mpg"
                                                                        placeholder="MPG">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                            <select name="Passenger_Door" class="form-control">
                                                                                <option value="" disabled selected hidden>Select Passenger Door</option>
                                                                                <option value="2 Doors">2 Doors</option>
                                                                                <option value="4 Doors">4 Doors</option>
                                                                            </select>
                                                                    </div>
                                                                <div class="form-group col-sm-6">
                                                                    <input type="text" class="form-control" name="vehicle_class"
                                                                        placeholder="Vehicle Class">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                            <select name="car_keys" class="form-control">
                                                                                <option value="" disabled selected hidden>Select Car Keys</option>
                                                                                <option value="Regular Keys">Regular Keys</option>
                                                                                <option value="Push to Start">Push to Start</option>
                                                                                <option value="Available">Available</option>
                                                                                <option value="Not Available">Not Available</option>
                                                                            </select>
                                                                        </div>
                                                                <div class="form-group col-sm-6">
                                                                    <input type="text" class="form-control" name="Vehicle_Stock"
                                                                        placeholder="Vehicle Stock">
                                                                </div>
                                                        </div>
                                                        <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                        <select name="Start_Code" class="form-control">
                                                                            <option value="" disabled selected hidden>Select Start Code</option>
                                                                            <option value="Runs">Runs</option>
                                                                            <option value="Runs & Drive">Runs &amp; Drive</option>
                                                                        </select>
                                                                    </div>
                                                            <div class="form-group col-sm-6">
                                                                <input type="text" class="form-control" name="dealer_info" 
                                                                    placeholder="Add Dealer Info">
                                                            </div>
                                                    </div>
                                                    <div class="row">
                                                            <div class="form-group col-sm-6">
                                                                    <select name="Fuel_type" class="form-control">
                                                                        <option value="" disabled selected hidden>Select Fuel Type</option>
                                                                        <option value="Gasoline Fuel">Gasoline Fuel</option>
                                                                        <option value="Diesel">Diesel</option>
                                                                    </select>
                                                            </div>
                                                        <div class="form-group col-sm-6">                                                            
                                                            <select name="Manufacture" class="form-control">
                                                                    <option value="" disabled selected hidden>Manufacturer</option>
                                                                    <option value="USA">USA</option>
                                                                    <option value="Japan">Japan</option>
                                                                    <option value="Mexico">Mexico</option>
                                                                    <option value="Germany">Germany</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                        <select name="Drive_type" class="form-control">
                                                                <option vvalue="" disabled selected hidden>Drive Type</option>
                                                                <option value="Front Wheel Drive">Front Wheel Drive</option>
                                                                <option value="Rear Wheel Drive">Rear Wheel Drive</option>
                                                                <option value="AWD Drive">AWD Drive</option>
                                                        </select>
                                                </div>
                                                
                                            </div>
                                                        <!-- /.input-group -->
                                        </div>
                                                    <div class="col-sm-6" style="margin-bottom:10px; margin-top:40px;">
                                                        <div class="row">
                                                            <div class="form-group col-sm-12">
                                                                <textarea class="form-control" name="Message" rows="3" placeholder="Add Message"></textarea>
                                                            </div>
                                                            <div class="form-group col-sm-12">
                                                                    <input type="text" class="form-control" name="buyer_code"
                                                                    placeholder="Generate Buyers Code"> 
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                        <select name="delivery_estimate" class="form-control">
                                                                            <option value="" disabled selected hidden>Add Delivery Estimate</option>
                                                                            <option value="21-30 Days">21-30 Days</option>
                                                                            <option value="21-45 Days">21-45 Days</option>
                                                                            <option value="30-45 Days">30-45 Days</option>
                                                                            <option value="25-50 Days">25-50 Days</option>
                                                                        </select>
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <select name="Delivery_City" class="form-control">
                                                                        <option value="">Select Delivery City</option>
                                                                        <option value="Lagos Nigeria">Lagos Nigeria</option>
                                                                        <option value="Accra Ghana">Accra Ghana</option>
                                                                    </select>
                                                                </div>
                                                        </div>    

                                                        <div class="row" id="demage_details" style="font-weight: bold;margin-top: 20px;display: none;">
                                                            <div class=" col-md-12 col-sm-12">
                                                                <span>Add Damage Details</span>
                                                            </div>
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <input type="text" class="form-control" name="primary_damage" placeholder="Primary Damage Details">
                                                            </div>
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <input type="text" class="form-control" name="secondary_damage" placeholder="Secondary Damage Details"> 
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
                                        var repair_cost=document.getElementById('repair_cost');
                                        
                                        if(index==-1)
                                        {
                                            price.value ="";
                                            clear_cost.value =""; 
                                            repair_cost.value ="";                                        
                                          return;
                                        }
                                        price.value=cur[index];
                                        clear_cost.value=cur[index];    
                                        repair_cost.value=cur[index];                                        
                                    }

                                </script>
                               
                          <div class="form-group col-md-3">
                             <span>Country</span>
                            <select name="country" onChange=list(this.value) class="con form-control required" >
                              <script type="text/javascript">
                                document.write("<option value=-1>Select Country</option>");
                                count=con.length;
                                for(i=0;i<count;i++)
                                document.write("<option value='"+con[i]+"'>"+con[i]+"</option>");
                              </script>
                            </select>
                          </div>

                          <div class="form-group col-md-3" style="margin-bottom:1.5625rem;">
                            <span>Car Price</span>
                              <input type="text" name="price" id="price" class="form-control" placeholder="Price" autocomplete="off" onkeypress="return Validate(event);" >
                          </div>
                          <div class="form-group col-md-3">
                            <span>Estimate Clearing Cost</span>
                            <input type="text" name="clearing_cost" id="clear_cost" class="form-control" placeholder="Estimated Clearing Cost" autocomplete="off" onkeypress="return Validate(event);">
                          </div>
                           <div class="form-group col-md-3" id="show_repair_cost" style="display: none;">
                            <span>Estimate Repair Cost</span>
                            <input type="text" name="repair_cost" id="repair_cost" class="form-control" placeholder="Estimated Repair Cost" autocomplete="off" onkeypress="return Validate(event);">
                          </div>
                          
                      
                                                                
                                                        </div>                                                            
                                                    </div>                                                    
                                                </div>
                                            </div>
                                           
                                            <div class="container">
                                                <div class="form-actions">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12 ml-auto btn-list text-center">
                                                            <!-- <button type="submit" class="btn btn-primary"><i class="feather feather-book"></i> &nbsp; Post Car  For Review</button> -->
                                                            <button type="submit" style="background-color:#f60; border:0;" class="btn btn-warning">
                                                                <i class="feather feather-check-circle"></i> &nbsp;  Publish Car Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                    
                                     <!-- auto parts start here -->
                                    <div class="tabs" id="showing_parts" style="display: none;">
                                        <form id="addparts_form" action="<?php echo base_url('admin/insert_parts'); ?>" method="POST" enctype="multipart/form-data">

                                        <input type="hidden" name="admin_id" value="<?php echo $this->session->userdata('admin_id');?>">

                                        <ul class="nav nav-tabs" style="width:65%; margin:0 auto;">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#Main_Feature" style="margin-bottom:7px;" data-toggle="tab" aria-expanded="true">Main Feature</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link car_part" href="#engine" style="margin-bottom:7px;" data-toggle="tab" aria-expanded="true">ENGINE</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link car_part" href="#transmission" style="margin-bottom:7px;" data-toggle="tab" aria-expanded="true">TRANSMISSION</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link car_part" href="#INTERIOR" style="margin-bottom:7px;" data-toggle="tab" aria-expanded="true">INTERIOR</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link car_part" href="#BODY_EXTERIOR" style="margin-bottom:7px;" data-toggle="tab" aria-expanded="true">BODY/EXTERIOR</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link car_part" href="#ELECTRICALS" style="margin-bottom:7px;" data-toggle="tab" aria-expanded="true">ELECTRICALS</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link car_part" href="#WHEELS" style="margin-bottom:7px;" data-toggle="tab" aria-expanded="true">WHEELS</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link car_part" href="#OTHERS" style="margin-bottom:7px;" data-toggle="tab" aria-expanded="true">OTHERS</a>
                                            </li>

                                        </ul>

                                        <div class="tab-content">

                                            <div class="tab-pane active" id="Main_Feature">
                                                <span style="text-align: center;">WHOLESALE CARPARTS</span>
                                                <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" name="available_partfrom" id="available_partfrom" class="form-control" placeholder="Available From" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" name="available_partto" id="available_partto" class="form-control" placeholder="Available To" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <select name="carpart_type" class="form-control">
                                                                <option value="" disabled selected hidden>Select Car Type </option>
                                                                <option values="Automobiles">Automobiles </option>
                                                                <option values="Pick-ups">Pick-ups </option>
                                                                <option values="SUVs">SUVs</option>
                                                                <option values="Motorcycles">Motorcycles</option>
                                                                <option values="Heavy Duty Trucks">Heavy Duty Trucks</option>
                                                                <option values="Trailers">Trailers</option>
                                                                <option values="Buses">Buses </option>
                                                                <option values="Equipments">Equipments</option>
                                                                <option values="Misellellous">Miscellaneous </option>
                                                                <option values="Recreational">Recreational</option>
                                                                <option values="Vans">Vans </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <select class="form-control" name="part_years" id="car-years-2" ></select>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <select class="form-control" name="part_brand" id="car-makes-2" ></select>
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <select class="form-control" name="part_model" id="car-models-2" ></select>       
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <select class="form-control" name="part_trim" id="car-model-trims-2"></select> 
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" class="form-control" name="part_mileage" placeholder="Car Mileage">
                                                        </div>                                                                   
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" class="form-control" name="part_location" placeholder="Car Location">
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-12">
                                                                <textarea class="form-control" name="part_Message" rows="3" placeholder="Add Message"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                                <select name="part_delivery_estimate" class="form-control">
                                                                    <option value="" disabled selected hidden>Add Delivery Estimate</option>
                                                                    <option value="21-30 Days">21-30 Days</option>
                                                                    <option value="21-45 Days">21-45 Days</option>
                                                                    <option value="30-45 Days">30-45 Days</option>
                                                                    <option value="25-50 Days">25-50 Days</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-sm-6">
                                                                <select name="part_Delivery_City" class="form-control">
                                                                    <option value="">Select Delivery City</option>
                                                                    <option value="Lagos Nigeria">Lagos Nigeria</option>
                                                                    <option value="Accra Ghana">Accra Ghana</option>
                                                                </select>
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- main feature end here -->

                                            <div class="tab-pane" id="engine">    
                                            <span>ENGINE</span>     <br>                                       
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="row">
                                                        <div class="col-sm-6 col-md-6">
                                                        <select name="Sub_Category" class="form-control">
                                                            <option value="" disabled selected hidden>Add Part Sub-Category</option>
                                                            <option value="Engine">Engine</option>
                                                            <option value="AC Parts">A/C Parts</option>
                                                            <option value="Emission/Exhaust">Emission/Exhaust</option>
                                                            <option value="Fuel Delivery">Fuel Delivery</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <input type="file" name="engine_images" accept="image/*" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>

                                            <!-- engine end here -->

                                            <div class="tab-pane" id="transmission">
                                                <span>TRANSMISSION</span><br>
                                                <div class="row">
                                                   
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="row">
                                                        <div class="col-sm-6 col-md-6">    
                                                        <select name="Transmission_type" class="form-control">
                                                            <option value="" disabled selected hidden>Select Transmission</option>
                                                            <option value="Automatic">Automatic</option>
                                                            <option value="Manual">Manual</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                        </div>
                                                    
                                                    <div class="col-sm-6 col-md-6">
                                                        <input type="file" name="Transmission_images" accept="image/*" >
                                                    </div>
                                                    </div>
                                                    </div>
                                                </div>  
                                            </div>

                                            <!-- transmission end here -->

                                            <div class="tab-pane" id="INTERIOR">
                                                 <span>INTERIOR</span><br>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="row">
                                                        <div class="col-sm-6 col-md-6">
                                                        <select name="Interior_type" class="form-control">
                                                            <option value="" disabled selected hidden>Select Interior</option>
                                                            <option value="Seats">Seats</option>
                                                            <option value="Steering">Steering</option>
                                                            <option value="Dashboard">Dashboard</option>
                                                            <option value="Car radio">Car radio</option>
                                                        </select>
                                                        </div>
                                                    
                                                    <div class="col-sm-6 col-md-6">
                                                        <input type="file" name="Interior_images" accept="image/*" >
                                                    </div>
                                                    </div>
                                                    </div>
                                                </div>  
                                                 
                                            </div>
                                            <!-- INTERIOR end here -->
                                            <div class="tab-pane" id="BODY_EXTERIOR">
                                                 <span>BODY/EXTERIOR</span><br>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="row">
                                                        <div class="col-sm-6 col-md-6">
                                                        <select name="Exterior_type" class="form-control">
                                                            <option value="" disabled selected hidden>Select Exterior</option>
                                                            <option value="Doors">Doors</option>
                                                            <option value="Bumpers">Bumpers</option>
                                                            <option value="Hoods">Hoods</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                        </div>
                                                    
                                                    <div class="col-sm-6 col-md-6">
                                                        <input type="file" name="Exterior_images" accept="image/*" >
                                                    </div>
                                                </div>
                                                </div>
                                                </div>  
                                                 
                                            </div>

                                            <!-- BODY/EXTERIOR end here -->

                                            <div class="tab-pane" id="ELECTRICALS">
                                                <span>ELECTRICALS</span><br>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="row">
                                                        <div class="col-sm-6 col-md-6">
                                                        <select name="Electricals_type" class="form-control">
                                                            <option value="" disabled selected hidden>Select Electricals</option>
                                                            <option value="Oil Pressure Switch">Oil Pressure Switch</option>
                                                            <option value="Ignition Lock Cylinder">Ignition Lock Cylinder</option>
                                                            <option value="Window Lift Motor">Window Lift Motor</option>
                                                            <option value="Brainbox">Brainbox</option>
                                                            <option value="Switch Assembly">Switch Assembly</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                        </div>
                                                   
                                                    <div class="col-sm-6 col-md-6">
                                                        <input type="file" name="Electricals_images" accept="image/*" >
                                                    </div>
                                                </div>
                                                 </div>
                                                </div>  
                                                 
                                            </div>

                                            <!-- ELECTRICALS end here -->
                                            <div class="tab-pane" id="WHEELS">
                                                <span>RIMS/WHEELS/BRAKES/UNDER-CARRIAGE</span><br>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="row">
                                                        <div class="col-sm-6 col-md-6">
                                                        <select name="Rims_type" class="form-control">
                                                            <option value="" disabled selected hidden>Select RIMS</option>
                                                            <option value="Brakes">Brakes</option>
                                                            <option value="Suspension">Suspension</option>
                                                            <option value="Rims">Rims</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                        </div>
                                                    
                                                    <div class="col-sm-6 col-md-6">
                                                        <input type="file" name="Rims_images" accept="image/*" >
                                                    </div>
                                                    </div>
                                                    </div>
                                                </div>  
                                                 
                                            </div>

                                            <!-- WHEELS end here -->
                                            <div class="tab-pane" id="OTHERS">
                                                <span>OTHERS</span>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="row">
                                                             <div class="col-sm-6 col-md-6">
                                                            <input type="text" class="form-control" name="other_type" placeholder="Enter Part Title">
                                                            </div>
                                                   
                                                    <div class="col-sm-6 col-md-6">
                                                        <input type="file" name="other_images" accept="image/*" >
                                                    </div>
                                                    </div>
                                                 </div>
                                                </div> 
                                            </div>
                                            <!-- OTHERS end here -->    

                                        </div>  <!-- /.tab-content -->


                                    <div class="container-fluid" >                                                   
                                                    <div class="form-group row">
                                                        <div class="col-sm-12 col-md-12" style="margin-bottom:10px;">
                                                            <div class="col-sm-12" style="margin-bottom:10px;">
                                                                <span style="font-size:18px; font-weight:bold;">Post Autoparts:</span>
                                                            </div>
                                                            
                                                        <div class="row" style="border: 1px solid #ccc;">
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
                                      
                                      function list2(index)
                                      {
                                        var price=document.getElementById('price2');
                                        var clear_cost=document.getElementById('clear_cost2');
                                       
                                        
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
                               
                                                    <div class="form-group col-md-3" style="margin-top: 10px;">
                                                         <span>Country</span>
                                                        <select name="part_country" onChange=list2(this.value) class="con form-control required" >
                                                          <script type="text/javascript">
                                                            document.write("<option value=-1>Select Country</option>");
                                                            count=con.length;
                                                            for(i=0;i<count;i++)
                                                            document.write("<option value='"+con[i]+"'>"+con[i]+"</option>");
                                                          </script>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3" style="margin-bottom:1.5625rem;margin-top: 10px;">
                                                        <span>Wholesale Car Parts Price</span>
                                                          <input type="text" name="part_price" id="price2" class="form-control" placeholder="Price" autocomplete="off" onkeypress="return Validate(event);" >
                                                    </div>
                                                    <div class="form-group col-md-3" style="margin-top: 10px;">
                                                        <span>Estimate Clearing Cost</span>
                                                        <input type="text" name="part_clearing_cost" id="clear_cost2" class="form-control" placeholder="Estimated Clearing Cost" autocomplete="off" onkeypress="return Validate(event);">
                                                    </div>
                                                                
                                                        </div>                                                            
                                                    </div>                                                    
                                                </div>
                                            </div>
                                <div class="container" style="margin-top: 10px;">
                                    <div class="form-actions">
                                        <div class="form-group row">
                                            <div class="col-sm-12 ml-auto btn-list text-center">
                                                <button type="submit" style="background-color:#f60; border:0;" class="btn btn-warning">
                                                <i class="feather feather-check-circle"></i> &nbsp;  Publish Part Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            </div>   <!-- auto parts end here -->
                                   
                                   
                                    <!-- /.tab-content -->


                                </div>
                               
                            </div>
                           
                        </div>
                       
                    </div>
                    
                </div>

        </div>
        
        </main>
       
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

    <script src="<?php echo base_url('assets/admin-assets/js/custom_function.js');?>"></script>

</body>



</html>