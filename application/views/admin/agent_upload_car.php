
<?php $this->load->view('includes/admin_css'); ?>

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
                        <p class="page-title-description mr-0 d-none d-md-inline-block">Information about Admin details</p>
                    </div>
                    <!-- /.page-title-left -->
                    <div class="page-title-right d-none d-sm-inline-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Admin Manager</li>
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
                                <div class="col-md-12 widget-holder">
                                    <div class="widget-bg">
                                        <div class="widget-heading clearfix">
                                            <h5>View Admin Members</h5>
                                        </div>

                                        <!-- /.widget-heading -->
                                        <div class="widget-body clearfix">
                                                <div class="tabs">
                                                        <ul class="nav nav-tabs">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" href="#USA" data-toggle="tab" aria-expanded="true">Car #1</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#Nigeria" data-toggle="tab" aria-expanded="true">Car #2</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#Ghana" data-toggle="tab" aria-expanded="true">Car #3</a>
                                                            </li>
                                                           
                                                        </ul>
                                                        <!-- /.nav-tabs -->
                                    <div class="tab-content">

                                    <!-- Upload car #1 -->

                                    <div class="tab-pane active" id="USA">
                                        <form id="agent_car_stock1" action="<?php echo base_url('admin/insert_agent_upload_cars'); ?>" method="POST" enctype="multipart/form-data">

                                            <input type="hidden" name="cus_id" value="<?php echo $cus_detail->agent_cus_id;?>">
                                            <input type="hidden" name="order_ticket" value="<?php echo $order_ticket;?>">
                                            <input type="hidden" name="cus_order_id" value="<?php echo $cus_order_id;?>">
                                            <input type="hidden" name="car_number" value="car_1">
                                            <input type="hidden" name="admin_id" value="<?php echo $this->session->userdata('admin_id');?>">
                                                    <div class="container-fluid">
                                                        
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
                                                                        <input type="text" name="available_from"  class="available_from form-control" placeholder="Available From" autocomplete="off">
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <input type="text" name="available_to" class="available_to form-control" placeholder="Available To" autocomplete="off">
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
                                                                <div class="form-group col-sm-6">
                                                                    <select name="car_condition" class="form-control">
                                                                           <option value="" disabled selected hidden>Select Car Condition </option>
                                                                           <option values="USA Used Car">USA Used Car </option>
                                                                           <option values="Dealership Consignment">Dealership Consignment </option>
                                                                           <option values="Used Car Minor Dents">Used Car Minor Dents</option>
                                                                    </select>
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
                                                                <i class="feather feather-check-circle"></i> &nbsp;  Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Upload car #2 -->

                                    <div class="tab-pane" id="Nigeria">
                                        <form id="agent_car_stock2" action="<?php echo base_url('admin/insert_agent_upload_cars'); ?>" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="cus_id" value="<?php echo $cus_detail->agent_cus_id;?>">
                                                    <input type="hidden" name="car_number" value="car_2">
                                                    <input type="hidden" name="order_ticket" value="<?php echo $order_ticket;?>">
                                                  
                                                    <input type="hidden" name="admin_id" value="<?php echo $this->session->userdata('admin_id');?>">
                                                    <div class="container-fluid">
                                                        
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
                                                                        <input type="text" name="available_from"  class="available_from form-control" placeholder="Available From" autocomplete="off">
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <input type="text" name="available_to"  class="available_to form-control" placeholder="Available To" autocomplete="off">
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
                                                                       <select class="form-control" name="car_years" id="car-years-2"></select>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                         <select class="form-control" name="car_brand" id="car-makes-2"></select>
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                         <select  class="form-control" name="car_model" id="car-models-2"></select>       
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                        <select  class="form-control" name="car_trim" id="car-model-trims-2"></select> 
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
                                                                <div class="form-group col-sm-6">
                                                                    <select name="car_condition" class="form-control">
                                                                           <option value="" disabled selected hidden>Select Car Condition </option>
                                                                           <option values="USA Used Car">USA Used Car </option>
                                                                           <option values="Dealership Consignment">Dealership Consignment </option>
                                                                           <option values="Used Car Minor Dents">Used Car Minor Dents</option>
                                                                    </select>
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
                                                  
                                                function list2(index)
                                                {
                                                    var price=document.getElementById('price2');
                                                    var clear_cost=document.getElementById('clear_cost2');
                                                    var repair_cost=document.getElementById('repair_cost2');
                                                    
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
                                                <select name="country" onChange=list2(this.value) class="con form-control required" >
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
                                                  <input type="text" name="price" id="price2" class="form-control" placeholder="Price" autocomplete="off" onkeypress="return Validate(event);" >
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <span>Estimate Clearing Cost</span>
                                                    <input type="text" name="clearing_cost" id="clear_cost2" class="form-control" placeholder="Estimated Clearing Cost" autocomplete="off" onkeypress="return Validate(event);">
                                                </div>
                                                <div class="form-group col-md-3" id="show_repair_cost2" style="display: none;">
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
                                                                <i class="feather feather-check-circle"></i> &nbsp;  Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>                   
                                    </div>

                                    <!-- upload  car #3 -->

                                    <div class="tab-pane" id="Ghana">
                                        <form id="agent_car_stock3" action="<?php echo base_url('admin/insert_agent_upload_cars'); ?>" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="cus_id" value="<?php echo $cus_detail->agent_cus_id;?>">
                                                    <input type="hidden" name="car_number" value="car_3">
                                                    <input type="hidden" name="order_ticket" value="<?php echo $order_ticket;?>">

                                                    <input type="hidden" name="admin_id" value="<?php echo $this->session->userdata('admin_id');?>">
                                                    <div class="container-fluid">
                                                        
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
                                                                        <input type="text" name="available_from" class="available_from form-control" placeholder="Available From" autocomplete="off">
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <input type="text" name="available_to" class="available_to form-control" placeholder="Available To" autocomplete="off">
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
                                                                       <select class="form-control" name="car_years" id="car-years-3"></select>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                         <select class="form-control" name="car_brand" id="car-makes-3"></select>
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                         <select  class="form-control" name="car_model" id="car-models-3"></select>       
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                        <select  class="form-control" name="car_trim" id="car-model-trims-3"></select> 
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
                                                                <div class="form-group col-sm-6">
                                                                    <select name="car_condition" class="form-control">
                                                                           <option value="" disabled selected hidden>Select Car Condition </option>
                                                                           <option values="USA Used Car">USA Used Car </option>
                                                                           <option values="Dealership Consignment">Dealership Consignment </option>
                                                                           <option values="Used Car Minor Dents">Used Car Minor Dents</option>
                                                                    </select>
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
                                                  
                                                function list3(index)
                                                {
                                                    var price=document.getElementById('price3');
                                                    var clear_cost=document.getElementById('clear_cost3');
                                                    var repair_cost=document.getElementById('repair_cost3');
                                                    
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
                                            <select name="country" onChange=list3(this.value) class="con form-control required" >
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
                                              <input type="text" name="price" id="price3" class="form-control" placeholder="Price" autocomplete="off" onkeypress="return Validate(event);" >
                                          </div>
                                          <div class="form-group col-md-3">
                                            <span>Estimate Clearing Cost</span>
                                            <input type="text" name="clearing_cost" id="clear_cost3" class="form-control" placeholder="Estimated Clearing Cost" autocomplete="off" onkeypress="return Validate(event);">
                                          </div>
                                           <div class="form-group col-md-3" id="show_repair_cost3" style="display: none;">
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
                                                                <i class="feather feather-check-circle"></i> &nbsp;  Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>                  
                                    </div>
                                                           
                                </div>
                                                        <!-- /.tab-content -->
                                <hr>
                                <div class=" col-md-12 col-sm-12" style="font-weight: bold;">
                                    <span>Send Link to Client:</span>
                                </div>
                            <form id="cus_email_link" action="<?php echo base_url('admin/send_cus_email_link'); ?>" method="POST">

                                <div class="col-md-12" style="font-weight: bold;">
                                    <div class="row">
                                    <div class="form-group col-md-3" >
                                        <span>Email</span>
                                        <input type="text" name="email" class="form-control" value="<?php echo $cus_detail->email ;?>" >
                                    </div> 
                                    <div class="form-group col-md-3">
                                        <span>Add Message</span>
                                        <textarea class="form-control" name="message" placeholder="Add Message"></textarea>
                                      
                                    </div> 
                                    </div>
                                </div>  
                                <div class="col-md-12 " >
                                    <div class="col-sm-12 ml-auto btn-list text-center">
                                        <button type="submit" style="background-color:#f60; border:0;" class="btn btn-warning">
                                            <i class="feather feather-check"></i> &nbsp; Send & Publish </button>
                                    </div>
                                </div> 
                            </form> 

                            </div>
                                           
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

//email send form submit

    $(document).on("submit", "#cus_email_link", function(e){

        e.preventDefault();
       
        $(this).validate({ 
                         rules: {                             
                                  email:"required",                  
                                  message: "required",
                                },

                          messages: 
                                {                           
                                  email: {
                                      required: "Required", 
                                  }, 
                                  message: {
                                      required: "Required ", 
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
                            document.getElementById("agent_car_stock1").reset();
                            swal("Your Email Link was send Successfully...");
                        }                      
                        else 
                        {                       
                          swal("Something went wrong Try again");
                        }          
                    }

           });
    }     

 });

//agent  car #1 stock form submit

    $(document).on("submit", "#agent_car_stock1", function(e){

        e.preventDefault();
       
        $(this).validate({ 
                         rules: {                             
                                  car_type:"required",                  
                                  car_model: "required",
                                  price: "required",
                                  engine_type: "required",
                                  buyer_code: "required",               
                                },

                          messages: 
                                {                           
                                  car_type: {
                                      required: "Required", 
                                  }, 
                                  car_model: {
                                      required: "Required ", 
                                  }, 
                                  price: {
                                      required: "Required",
                                      digits: true
                                  }, 
                                  engine_type: {
                                      required: "Required", 
                                  }, 

                                  buyer_code: {
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
                            document.getElementById("agent_car_stock1").reset();
                            swal("Your Details Saved Successfully...");
                        }                      
                        else 
                        {                       
                          swal("Something went wrong Try again");
                        }          
                    }

           });
    }     

 });

//agent  car #2 stock form submit

    $(document).on("submit", "#agent_car_stock2", function(e){

        e.preventDefault();
       
        $(this).validate({ 
                         rules: {                             
                                  car_type:"required",                  
                                  car_model: "required",
                                  price: "required",
                                  engine_type: "required",
                                  buyer_code: "required",               
                                },

                          messages: 
                                {                           
                                  car_type: {
                                      required: "Required", 
                                  }, 
                                  car_model: {
                                      required: "Required ", 
                                  }, 
                                  price: {
                                      required: "Required",
                                      digits: true
                                  }, 
                                  engine_type: {
                                      required: "Required", 
                                  }, 

                                  buyer_code: {
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
                            document.getElementById("agent_car_stock2").reset();
                            swal( "Your Details Saved Successfully...");
                        }                      
                       
                        else 
                        {                       
                          swal("Something went wrong Try again");
                        }          
                    }

           });
    }     

 });

//agent  car #3 stock form submit

    $(document).on("submit", "#agent_car_stock3", function(e){

        e.preventDefault();
       
        $(this).validate({ 
                         rules: {                             
                                  car_type:"required",                  
                                  car_model: "required",
                                  price: "required",
                                  engine_type: "required",
                                  buyer_code: "required",               
                                },

                          messages: 
                                {                           
                                  car_type: {
                                      required: "Required", 
                                  }, 
                                  car_model: {
                                      required: "Required ", 
                                  }, 
                                  price: {
                                      required: "Required",
                                      digits: true
                                  }, 
                                  engine_type: {
                                      required: "Required", 
                                  }, 

                                  buyer_code: {
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
                       
                            document.getElementById("agent_car_stock3").reset();
                            swal("Your Details Saved Successfully...");
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
      cq2.init();
      cq3.init();
    
     
     //Optionally, you can pre-select a vehicle by passing year / make / model / trim to the init function:
     //carquery.init('2000', 'dodge', 'Viper', 11636);

     //Optional: Pass sold_in_us:true to the setFilters method to show only US models. 
      carquery.setFilters( {sold_in_us:true} );
      cq2.setFilters( {sold_in_us:true} );
      cq3.setFilters( {sold_in_us:true} );
    

     //Optional: initialize the year, make, model, and trim drop downs by providing their element IDs
      carquery.initYearMakeModelTrim('car-years-1', 'car-makes-1', 'car-models-1', 'car-model-trims-1');
      cq2.initYearMakeModelTrim('car-years-2', 'car-makes-2', 'car-models-2', 'car-model-trims-2');
      cq3.initYearMakeModelTrim('car-years-3', 'car-makes-3', 'car-models-3', 'car-model-trims-3');
     
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
       cq2.initSearchInterface(searchArgs);
       cq3.initSearchInterface(searchArgs);
      
     //If creating a search interface, set onclick event for the search button.  Make sure the ID used matches your search button ID.
     $('#cq-search-btn').click( function(){ carquery.search(); } );
});


</script>
</body>



</html>