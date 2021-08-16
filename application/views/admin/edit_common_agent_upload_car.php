
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
                        <p class="page-title-description mr-0 d-none d-md-inline-block">Information about Agent Car Upload</p>
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
                                            <h5>Add Agent Car Upload</h5>
                                        </div>

                                        <!-- /.widget-heading -->
                                    <div class="widget-body clearfix">
                                   
                                        <form id="edit_common_agent_car_stock" action="<?php echo base_url('admin/edit_common_agent_upload_car'); ?>" method="POST" enctype="multipart/form-data">
                                           
                                            <input type="hidden" name="admin_id" value="<?php echo $this->session->userdata('admin_id');?>">
                                            <input type="hidden" name="carstock_id" value="<?php echo $carstock_detail->carstock_id;?>">
                                            <div class="container-fluid">

                                                <div style="border: 1px solid #cccccc6e; padding: 20px;">
                                                    <div class="form-group row">
                                                        <div class="form-group col-sm-4">
                                                            <span>Start From:</span>
                                                            <input type="text" name="start_from"  class="available_from form-control" placeholder="Start From" autocomplete="off" value="<?php echo $carstock_detail->start_from;?>">
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <span>End To:</span>
                                                            <input type="text" name="end_to" class="available_to form-control" placeholder="End To" autocomplete="off" value="<?php echo $carstock_detail->end_to;?>">
                                                        </div>
                                                       <div class="form-group col-sm-4">
                                                            <span>Select Catogory:</span>
                                                            <select name="category" class="form-control">
                                                                <option  value="Luxery Permium Cars" <?php if(isset($carstock_detail->category) && ($carstock_detail->category == "Luxery Permium Cars" )){ echo "selected"; } else { echo ""; } ?> >Luxery Permium Cars </option>
                                                                <option  value="Dealership Consignment" <?php if(isset($carstock_detail->category) && ($carstock_detail->category == "Dealership Consignment" )){ echo "selected"; } else { echo ""; } ?> >Dealership Consignment </option>
                                                                <option  value="Used Car Minor Dent" <?php if(isset($carstock_detail->category) && ($carstock_detail->category == "Used Car Minor Dent" )){ echo "selected"; } else { echo ""; } ?> >Used Car Minor Dent </option>
                                                                <option  value="Uber-Taxi Ready Cars" <?php if(isset($carstock_detail->category) && ($carstock_detail->category == "Uber-Taxi Ready Cars" )){ echo "selected"; } else { echo ""; } ?> >Uber-Taxi Ready Cars </option>
                                                                <option  value="Commercial Trucks" <?php if(isset($carstock_detail->category) && ($carstock_detail->category == "Commercial Trucks" )){ echo "selected"; } else { echo ""; } ?> >Commercial Trucks </option>
                                                                <option  value="Used Wholesale Parts" <?php if(isset($carstock_detail->category) && ($carstock_detail->category == "Used Wholesale Parts" )){ echo "selected"; } else { echo ""; } ?> >Used Wholesale Parts </option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
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
                                                  
                                                function country_list(index)
                                                {
                                                    var price=document.getElementById('Commision_Value');
                                                    
                                                    if(index==-1)
                                                    {
                                                        price.value ="";
                                                                                            
                                                      return;
                                                    }
                                                    price.value=cur[index];
                                                                                          
                                                }

                                            </script>
                                   

                                                        <div class="form-group row">
                                                            <div class="form-group col-sm-4">
                                                                <span style="font-weight: bold;">Select Country</span>
                                                                <select id="commision_country" name="commision_country" onChange=country_list(this.value) class="con form-control required" >
                                                                  <script type="text/javascript">
                                                                    document.write("<option value=-1>Select Country</option>");
                                                                    count=con.length;
                                                                    for(i=0;i<count;i++)
                                                                    document.write("<option value='"+con[i]+"'>"+con[i]+"</option>");

                                                                    var element = document.getElementById('commision_country');
                                                                    element.value = '<?php echo $carstock_detail->commision_country; ?>';
                                                                  </script>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <span style="font-weight: bold;">Enter Commision Value</span>
                                                                <input type="text" name="Commision_Value" id="Commision_Value"  class="form-control" placeholder="Enter Commision Value"  onkeypress="return Validate(event);" autocomplete="off" value="<?php echo $carstock_detail->commision_value;?>">
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <span style="font-weight: bold;">Enter Commision Points</span>
                                                                <input type="text" name="Commision_Points" class=" form-control" placeholder="Enter Commision Points" autocomplete="off"  value="<?php echo $carstock_detail->commision_points;?>">
                                                            </div>
                                                            
                                                        </div>
                                                </div>
                                                        
                                                        <div class="form-group row">
                                                            <div class="col-sm-6" style="margin-bottom:10px;">
                                                                <div class="col-sm-6" style="margin-bottom:10px;">
                                                                    <span style="font-size:18px; font-weight:bold; color:#565656;">Car
                                                                        Main Features</span>
                                                                </div>
                                                                

                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                        <span>Available From:</span>
                                                                        <input type="text" name="available_from"  class="available_from form-control" placeholder="Available From" autocomplete="off" value="<?php echo $carstock_detail->available_from;?>">
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <span>Available To:</span>
                                                                        <input type="text" name="available_to" class="available_to form-control" placeholder="Available To" autocomplete="off" value="<?php echo $carstock_detail->available_to;?>">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                        <span>Select Car Type:</span>
                                                                        <select name="car_type" class="form-control">
                                                                           <option  value="Automobiles" <?php if(isset($carstock_detail->car_type) && ($carstock_detail->car_type == "Automobiles" )){ echo "selected"; } else { echo ""; } ?> >Automobiles</option> 
                                                                           <option  value="Pick-ups" <?php if(isset($carstock_detail->car_type) && ($carstock_detail->car_type == "Pick-ups" )){ echo "selected"; } else { echo ""; } ?> >Pick-ups</option> 
                                                                           <option  value="SUVs" <?php if(isset($carstock_detail->car_type) && ($carstock_detail->car_type == "SUVs" )){ echo "selected"; } else { echo ""; } ?> >SUVs</option> 
                                                                           <option  value="Motorcycles" <?php if(isset($carstock_detail->car_type) && ($carstock_detail->car_type == "Motorcycles" )){ echo "selected"; } else { echo ""; } ?> >Motorcycles</option> 
                                                                           <option  value="Heavy Duty Trucks" <?php if(isset($carstock_detail->car_type) && ($carstock_detail->car_type == "Heavy Duty Trucks" )){ echo "selected"; } else { echo ""; } ?> >Heavy Duty Trucks</option> 
                                                                           <option  value="Trailers" <?php if(isset($carstock_detail->car_type) && ($carstock_detail->car_type == "Trailers" )){ echo "selected"; } else { echo ""; } ?> >Trailers</option> 
                                                                           <option  value="Buses" <?php if(isset($carstock_detail->car_type) && ($carstock_detail->car_type == "Buses" )){ echo "selected"; } else { echo ""; } ?> >Buses</option> 
                                                                           <option  value="Equipments" <?php if(isset($carstock_detail->car_type) && ($carstock_detail->car_type == "Equipments" )){ echo "selected"; } else { echo ""; } ?> >Equipments</option>
                                                                           <option  value="Misellellous" <?php if(isset($carstock_detail->car_type) && ($carstock_detail->car_type == "Misellellous" )){ echo "selected"; } else { echo ""; } ?> >Misellellous</option>
                                                                           <option  value="Recreational" <?php if(isset($carstock_detail->car_type) && ($carstock_detail->car_type == "Recreational" )){ echo "selected"; } else { echo ""; } ?> >Recreational</option>
                                                                           <option  value="Vans" <?php if(isset($carstock_detail->car_type) && ($carstock_detail->car_type == "Vans" )){ echo "selected"; } else { echo ""; } ?> >Vans</option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <span>Car Year:</span>
                                                                       <select class="form-control" name="car_years" id="car-years-1">
                                                                           <script type="text/javascript">
                                                                                var car_year = document.getElementById('car-years-1');
                                                                                car_year.value = '<?php echo $carstock_detail->car_year; ?>';
                                                                            </script>
                                                                       </select>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                        <span>Car Brand:</span>
                                                                         <select class="form-control" name="car_brand" id="car-makes-1">
                                                                            <script type="text/javascript">
                                                                                var car_make = document.getElementById('car-makes-1');
                                                                                car_make.value = '<?php echo $carstock_detail->car_brand; ?>';
                                                                            </script>
                                                                         </select>
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <span>Car Model:</span>
                                                                         <select  class="form-control" name="car_model" id="car-models-1"></select>       
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                        <span>Car Trim:</span>
                                                                        <select  class="form-control" name="car_trim" id="car-model-trims-1"></select> 
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <span>Car Mileage:</span>
                                                                        <input type="text" class="form-control" name="car_mileage"
                                                                            placeholder="Car Mileage" value="<?php echo $carstock_detail->car_mileage; ?>">
                                                                    </div>                                                                   
                                                                </div>
                                                                <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                    <span>Car Location:</span>
                                                                    <input type="text" class="form-control" name="car_location"
                                                                        placeholder="Car Location" value="<?php echo $carstock_detail->car_location; ?>" >
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <span>Car Condition</span>
                                                                    <select name="car_condition" class="form-control">
                                                                        <option  value="USA Used Car" <?php if(isset($carstock_detail->car_condition) && ($carstock_detail->car_condition == "USA Used Car" )){ echo "selected"; } else { echo ""; } ?> >USA Used Car</option>  
                                                                        <option  value="Dealership Consignment" <?php if(isset($carstock_detail->car_condition) && ($carstock_detail->car_condition == "Dealership Consignment" )){ echo "selected"; } else { echo ""; } ?> >Dealership Consignment</option>

                                                                        <option  value="Used Car Minor Dents" <?php if(isset($carstock_detail->car_condition) && ($carstock_detail->car_condition == "Used Car Minor Dents" )){ echo "selected"; } else { echo ""; } ?> >Used Car Minor Dents</option>
                                                                    </select>
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
                                                                <span style="font-size:18px; font-weight:bold;">Add Car
                                                                   Details</span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                    <span>Vin Status</span>
                                                                    <input type="text" class="form-control" name="vin_status"
                                                                        placeholder="VIN Status" value="<?php echo $carstock_detail->vin_status; ?>">
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <span>Interior Color</span>
                                                                    <input type="text" class="form-control" name="Interior_color"
                                                                        placeholder="Interior Color" value="<?php echo $carstock_detail->interior_color; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                    <span>Select Engin Type</span>
                                                                    <select name="engine_type" class="form-control">
                                                                        <option  value="4-Cylinder" <?php if(isset($carstock_detail->engine) && ($carstock_detail->engine == "4-Cylinder" )){ echo "selected"; } else { echo ""; } ?> >4-Cylinder</option>
                                                                        <option  value="6-Cylinder" <?php if(isset($carstock_detail->engine) && ($carstock_detail->engine == "6-Cylinder" )){ echo "selected"; } else { echo ""; } ?> >6-Cylinder</option>
                                                                        <option  value="8-Cylinder" <?php if(isset($carstock_detail->engine) && ($carstock_detail->engine == "8-Cylinder" )){ echo "selected"; } else { echo ""; } ?> >8-Cylinder</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <span>Exterior Color</span>
                                                                    <input type="text" class="form-control" name="Exterior_color"
                                                                        placeholder="Exterior Color" value="<?php echo $carstock_detail->exterior_color; ?>">
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                    <span>Select Car Transmission</span>
                                                                    <select name="transmission" class="form-control">
                                                                        <option  value="Automatic" <?php if(isset($carstock_detail->transmission) && ($carstock_detail->transmission == "Automatic" )){ echo "selected"; } else { echo ""; } ?> >Automatic</option>  
                                                                        <option  value="Manual" <?php if(isset($carstock_detail->transmission) && ($carstock_detail->transmission == "Manual" )){ echo "selected"; } else { echo ""; } ?> >Manual</option>  
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <span>Car MPG</span>
                                                                    <input type="text" class="form-control" name="car_mpg"
                                                                        placeholder="MPG" value="<?php echo $carstock_detail->car_mpg; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                    <span>Select Passenger Door</span>
                                                                    <select name="Passenger_Door" class="form-control">
                                                                        <option  value="2 Doors" <?php if(isset($carstock_detail->passenger_Door) && ($carstock_detail->passenger_Door == "2 Doors" )){ echo "selected"; } else { echo ""; } ?> >2 Doors</option> 
                                                                        <option  value="4 Doors" <?php if(isset($carstock_detail->passenger_Door) && ($carstock_detail->passenger_Door == "4 Doors" )){ echo "selected"; } else { echo ""; } ?> >4 Doors</option>
                                                                              
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <span>Vehicle Class</span>
                                                                    <input type="text" class="form-control" name="vehicle_class"
                                                                        placeholder="Vehicle Class" value="<?php echo $carstock_detail->vehicle_class; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                    <select name="car_keys" class="form-control">
                                                                        <span>Select Car Keys</span>
                                                                        <option  value="Regular Keys" <?php if(isset($carstock_detail->car_keys) && ($carstock_detail->car_keys == "Regular Keys" )){ echo "selected"; } else { echo ""; } ?> >Regular Keys</option>
                                                                        <option  value="Push to Start" <?php if(isset($carstock_detail->car_keys) && ($carstock_detail->car_keys == "Push to Start" )){ echo "selected"; } else { echo ""; } ?> >Push to Start</option>
                                                                        <option  value="Available" <?php if(isset($carstock_detail->car_keys) && ($carstock_detail->car_keys == "Available" )){ echo "selected"; } else { echo ""; } ?> >Available</option>
                                                                        <option  value="Not Available" <?php if(isset($carstock_detail->car_keys) && ($carstock_detail->car_keys == "Not Available" )){ echo "selected"; } else { echo ""; } ?> >Not Available</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <span>Vehicle Stock</span>
                                                                    <input type="text" class="form-control" name="Vehicle_Stock"
                                                                        placeholder="Vehicle Stock" lass" value="<?php echo $carstock_detail->Vehicle_Stock; ?>">
                                                                </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                                <span>Select Start Code</span>
                                                                <select name="Start_Code" class="form-control">
                                                                    <option  value="Runs" <?php if(isset($carstock_detail->start_code) && ($carstock_detail->start_code == "Runs" )){ echo "selected"; } else { echo ""; } ?> >Runs</option>
                                                                    <option  value="Runs & Drive" <?php if(isset($carstock_detail->start_code) && ($carstock_detail->start_code == "Runs & Drive" )){ echo "selected"; } else { echo ""; } ?> >Runs & Drive</option>
                                                                   
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-sm-6">
                                                                <span>Add Dealer Info</span>
                                                                <input type="text" class="form-control" name="dealer_info" 
                                                                    placeholder="Add Dealer Info" value="<?php echo $carstock_detail->dealer_info; ?>">
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                            <div class="form-group col-sm-6">
                                                                <span>Select Fuel Type</span>
                                                                <select name="Fuel_type" class="form-control">
                                                                    <option  value="Gasoline Fuel" <?php if(isset($carstock_detail->Fuel_type) && ($carstock_detail->Fuel_type == "Gasoline Fuel" )){ echo "selected"; } else { echo ""; } ?> >Gasoline Fuel</option>
                                                                    <option  value="Diesel" <?php if(isset($carstock_detail->Fuel_type) && ($carstock_detail->Fuel_type == "Diesel" )){ echo "selected"; } else { echo ""; } ?> >Diesel</option>
                                                                </select>
                                                            </div>
                                                        <div class="form-group col-sm-6">   
                                                            <span>Manufacturer</span>                                                     
                                                            <select name="Manufacture" class="form-control">
                                                                   <option  value="USA" <?php if(isset($carstock_detail->manufactured) && ($carstock_detail->manufactured == "USA" )){ echo "selected"; } else { echo ""; } ?> >USA</option>
                                                                   <option  value="Japan" <?php if(isset($carstock_detail->manufactured) && ($carstock_detail->manufactured == "Japan" )){ echo "selected"; } else { echo ""; } ?> >Japan</option>
                                                                   <option  value="Mexico" <?php if(isset($carstock_detail->manufactured) && ($carstock_detail->manufactured == "Mexico" )){ echo "selected"; } else { echo ""; } ?> >Mexico</option>
                                                                   <option  value="Germany" <?php if(isset($carstock_detail->manufactured) && ($carstock_detail->manufactured == "Germany" )){ echo "selected"; } else { echo ""; } ?> >Germany</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <span>Drive Type</span>
                                                        <select name="Drive_type" class="form-control">
                                                            <option  value="Front Wheel Drive" <?php if(isset($carstock_detail->Drive_type) && ($carstock_detail->Drive_type == "Front Wheel Drive" )){ echo "selected"; } else { echo ""; } ?> >Front Wheel Drive</option>
                                                            <option  value="Rear Wheel Drive" <?php if(isset($carstock_detail->Drive_type) && ($carstock_detail->Drive_type == "Rear Wheel Drive" )){ echo "selected"; } else { echo ""; } ?> >Rear Wheel Drive</option>
                                                            <option  value="AWD Drive" <?php if(isset($carstock_detail->Drive_type) && ($carstock_detail->Drive_type == "AWD Drive" )){ echo "selected"; } else { echo ""; } ?> >AWD Drive</option>
                                                        </select>
                                                    </div>
                                                
                                                </div>
                                                        <!-- /.input-group -->
                                            </div>

                                            <div class="col-sm-6" style="margin-bottom:10px; margin-top:40px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-12">
                                                        <textarea class="form-control" name="Message" rows="3" placeholder="Add Message" ><?php echo $carstock_detail->Message; ?></textarea>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <span>Buyers Code</span>
                                                        <input type="text" class="form-control" name="buyer_code" placeholder="Generate Buyers Code" value="<?php echo $carstock_detail->buyer_code; ?>"> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <span>Add Delivery Estimate</span>
                                                        <select name="delivery_estimate" class="form-control">
                                                            <option  value="21-30 Days" <?php if(isset($carstock_detail->delivery_estimate) && ($carstock_detail->delivery_estimate == "21-30 Days" )){ echo "selected"; } else { echo ""; } ?> >21-30 Days</option>
                                                            <option  value="21-45 Days" <?php if(isset($carstock_detail->delivery_estimate) && ($carstock_detail->delivery_estimate == "21-45 Days" )){ echo "selected"; } else { echo ""; } ?> >21-45 Days</option>
                                                            <option  value="30-45 Days" <?php if(isset($carstock_detail->delivery_estimate) && ($carstock_detail->delivery_estimate == "30-45 Days" )){ echo "selected"; } else { echo ""; } ?> >30-45 Days</option>
                                                            <option  value="25-50 Days" <?php if(isset($carstock_detail->delivery_estimate) && ($carstock_detail->delivery_estimate == "25-50 Days" )){ echo "selected"; } else { echo ""; } ?> >25-50 Days</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <span>Select Delivery City</span>
                                                        <select name="Delivery_City" class="form-control">
                                                            <option  value="Lagos Nigeria" <?php if(isset($carstock_detail->Delivery_City) && ($carstock_detail->Delivery_City == "Lagos Nigeria" )){ echo "selected"; } else { echo ""; } ?> >Lagos Nigeria</option>
                                                            <option  value="Accra Ghana" <?php if(isset($carstock_detail->Delivery_City) && ($carstock_detail->Delivery_City == "Accra Ghana" )){ echo "selected"; } else { echo ""; } ?> >Accra Ghana</option>

                                                        </select>
                                                    </div>
                                                </div>    

                                                <div class="row" id="demage_details" style="font-weight: bold;margin-top: 20px;">
                                                    <div class=" col-md-12 col-sm-12">
                                                        <span>Add Damage Details:</span>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-12">
                                                        <span>Primary Damage Details:</span>
                                                        <input type="text" class="form-control" name="primary_damage" placeholder="Primary Damage Details" value="<?php echo $carstock_detail->primary_damage; ?>">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-12">
                                                        <span>Secondary Damage Details:</span>
                                                        <input type="text" class="form-control" name="secondary_damage" placeholder="Secondary Damage Details" value="<?php echo $carstock_detail->secondary_damage;?>"> 
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
                                            <select id="country_id" name="country" onChange=list(this.value) class="con form-control required" >
                                              <script type="text/javascript">
                                                document.write("<option value=-1>Select Country</option>");
                                                count=con.length;
                                                for(i=0;i<count;i++)
                                                document.write("<option value='"+con[i]+"'>"+con[i]+"</option>");

                                                var element = document.getElementById('country_id');
                                                element.value = '<?php echo $carstock_detail->country; ?>';
                                              </script>
                                            </select>
                                          </div>

                                          <div class="form-group col-md-3" style="margin-bottom:1.5625rem;">
                                            <span>Car Price</span>
                                              <input type="text" name="price" id="price" class="form-control" placeholder="Price" autocomplete="off" onkeypress="return Validate(event);" value="<?php echo $carstock_detail->price;?>">
                                          </div>
                                          <div class="form-group col-md-3">
                                            <span>Estimate Clearing Cost</span>
                                            <input type="text" name="clearing_cost" id="clear_cost" class="form-control" placeholder="Estimated Clearing Cost" autocomplete="off" onkeypress="return Validate(event);" value="<?php echo $carstock_detail->clearing_cost;?>">
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
                                                                <i class="feather feather-check-circle"></i> &nbsp;  Upload</button>
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

    $(document).on("submit", "#edit_common_agent_car_stock", function(e){

        e.preventDefault();
       
        $(this).validate({ 
                         rules: {  

                                  category:"required",                  
                                  car_model: "required",
                                  price: "required",
                                  engine_type: "required",
                                  buyer_code: "required",               
                                },

                          messages: 
                                {                           
                                  category: {
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
                           
                            swal("Your Details Updated Successfully...");
                            window.location.href = "<?php echo base_url('admin/view_agent_car_list'); ?>";
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