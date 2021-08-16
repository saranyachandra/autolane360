
<?php $this->load->view('includes/admin_css'); ?>


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
                                                                <a class="nav-link active" href="#USA" data-toggle="tab" aria-expanded="true">USA</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#Nigeria" data-toggle="tab" aria-expanded="true">Nigeria</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#Ghana" data-toggle="tab" aria-expanded="true">Ghana</a>
                                                            </li>                                                           
                                                        </ul>
                                                        <!-- /.nav-tabs -->
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="USA">
                                                                <table class="table table-editable table-responsive">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>OwnerDetails</th>
                                                                            <th>CarImage</th>
                                                                            <th data-identifier>Make/ Model</th>
                                                                            <th data-editable>Cost</th>
                                                                            <th>Category</th>
                                                                            <th>Available From</th>
                                                                            <th>Available To</th>
                                                                            <th>Status</th>
                                                                            <th>Update</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <?php 
                                                                            foreach ($car_detail as $car_details) {

                                                                            if($car_details->country == 'United States')
                                                                            {   
                                                                        ?>
                                                                    <tr>
                                                                        <td><?php echo $car_details->user_type;?></td>
                                                                        <td><img style="height: 50px; width: 50px;" src="<?php echo $car_details->admincar_stockimg;?>" class="img-responsive" />
                                                                                    <br> View All Images
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?>
                                                                        </td>
                                                                        <td><?php echo $car_details->price;?></td>
                                                                        <td>
                                                                            <input type="hidden" id="car_stock_id" value="<?php echo $car_details->carstock_id;?>">
                                                                            <select name="category" class="car_category form-control">

                                                                            <option  value="Luxury" <?php if(isset($car_details->category) && ($car_details->category == "Luxury" )){ echo "selected"; } else { echo ""; } ?> >Luxury/ Premium </option>
                                                                            <option value="Dealership" <?php if(isset($car_details->category) && ($car_details->category == "Dealership" )){ echo "selected"; } else { echo ""; } ?> >Dealership </option>
                                                                            <option value="Hot_Deals" <?php if(isset($car_details->category) && ($car_details->category == "Hot_Deals" )){ echo "selected"; } else { echo ""; } ?> >Hot Deals </option>                                                                               
                                                                            <option value="Used_Cars" <?php if(isset($car_details->category) && ($car_details->category == "Used_Cars" )){ echo "selected"; } else { echo ""; } ?> >Used Car Minor dents </option>
                                                                            <option value="Uber_Taxi" <?php if(isset($car_details->category) && ($car_details->category == "Uber_Taxi" )){ echo "selected"; } else { echo ""; } ?> >Uber Taxi </option>
                                                                            <option value="Commercial_car" <?php if(isset($car_details->category) && ($car_details->category == "Commercial_car" )){ echo "selected"; } else { echo ""; } ?> >Commercial Car Trucks </option>
                                                                           </select>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group input-has-value">
                                                                                <div class="input-group input-has-value">
                                                                                    <input type="text"  class="form-control available_from" value="<?php echo $car_details->available_from;?>"> 
                                                                                    <span class="input-group-addon">
                                                                                    <i class="list-icon material-icons">date_range</i>
                                                                                    </span>
                                                                                </div>
                                                                                            <!-- /.input-group -->
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group input-has-value">                            
                                                                                <div class="input-group input-has-value">
                                                                                    <input type="text"  class="form-control available_to" value="<?php echo $car_details->available_to;?>"> 
                                                                                    <span class="input-group-addon">
                                                                                    <i class="list-icon material-icons">date_range</i>
                                                                                    </span>
                                                                                </div>
                                                                                            <!-- /.input-group -->
                                                                            </div>
                                                                        </td>
                                                                                   
                                                                        <td>
                                                                            <input type="hidden" id="car_stock_id" value="<?php echo $car_details->carstock_id;?>"> 
                                                                            <select name="car_status" class="form-control car_status_update">

                                                                                <option  value="Pending" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Pending" )){ echo "selected"; } else { echo ""; } ?> >Pending </option>
                                                                                <option value="Sold" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Sold" )){ echo "selected"; } else { echo ""; } ?> >Sold </option>
                                                                                <option value="Approved" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Approved" )){ echo "selected"; } else { echo ""; } ?> >Approved </option>                                                                               
                                                                                <option value="Shipped" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Shipped" )){ echo "selected"; } else { echo ""; } ?> >Shipped </option>
                                                                                <option value="Custom Cleared" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Custom Cleared" )){ echo "selected"; } else { echo ""; } ?> >Custom Cleared </option>
                                                                                <option value="Pickup" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Pickup" )){ echo "selected"; } else { echo ""; } ?> >Pickup </option>
                                                                            </select>
                                                                        </td>

                                                                        <td> 
                                                                           <a class="btn btn-info" style="padding: 5px;" href="<?php echo base_url('admin/edit_carstock/'.$car_details->carstock_id); ?>" >
                                                                                Edit
                                                                            </a>
                                                                            <a class="btn btn-danger delete_carstock" style="padding: 5px;" href="<?php echo base_url('admin/delete_carstock/'.$car_details->carstock_id); ?>" >
                                                                                delete
                                                                            </a>
                                                                        </td>

                                                                        </tr>
                                                                            <?php } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <!-- viwe stock from nigeria -->
                                                            <div class="tab-pane" id="Nigeria">
                                                                <table class="table  table-responsive">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="display: none;"></th>
                                                                            <th>OwnerDetails</th>
                                                                            <th>CarImage</th>
                                                                            <th data-identifier>Make/ Model</th>
                                                                            <th data-editable>Cost</th>
                                                                            <th data-editable>Category</th>
                                                                            <th>Available From</th>
                                                                            <th>Available To</th>
                                                                            <th>Status</th>
                                                                            <th>Update</th>
                                                                        </tr>
                                                                    </thead>
                                                            <tbody>
                                                                        <?php 
                                                                            foreach ($car_detail as $car_details) {

                                                                            if($car_details->country == 'Nigeria')
                                                                            {   
                                                                        ?>    
                                                                <tr>
                                                                    <td style="display: none;"><?php echo $car_details->car_stock_id;?></td>
                                                                    <td><?php echo $car_details->user_type;?></td>
                                                                    <td>
                                                                        <img style="height: 50px; width: 50px;" src="<?php echo $car_details->admincar_stockimg;?>" class="img-responsive" />
                                                                        <br> View All Images
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?>
                                                                    </td>
                                                                    <td><?php echo $car_details->price;?></td>
                                                                    <td>
                                                                        <input type="hidden" id="car_stock_id" value="<?php echo $car_details->carstock_id;?>">
                                                                        <select name="category" class="car_category form-control">

                                                                        <option  value="Luxury" <?php if(isset($car_details->category) && ($car_details->category == "Luxury" )){ echo "selected"; } else { echo ""; } ?> >Luxury/ Premium </option>
                                                                        <option value="Dealership" <?php if(isset($car_details->category) && ($car_details->category == "Dealership" )){ echo "selected"; } else { echo ""; } ?> >Dealership </option>
                                                                        <option value="Hot_Deals" <?php if(isset($car_details->category) && ($car_details->category == "Hot_Deals" )){ echo "selected"; } else { echo ""; } ?> >Hot Deals </option>                                                                               
                                                                        <option value="Used_Cars" <?php if(isset($car_details->category) && ($car_details->category == "Used_Cars" )){ echo "selected"; } else { echo ""; } ?> >Used Car Minor dents </option>
                                                                        <option value="Uber_Taxi" <?php if(isset($car_details->category) && ($car_details->category == "Uber_Taxi" )){ echo "selected"; } else { echo ""; } ?> >Uber Taxi </option>
                                                                        <option value="Commercial_car" <?php if(isset($car_details->category) && ($car_details->category == "Commercial_car" )){ echo "selected"; } else { echo ""; } ?> >Commercial Car Trucks </option>
                                                                        </select>   
                                                                                   
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group input-has-value">
                                                                            <div class="input-group input-has-value">
                                                                            <input type="text" class="form-control available_from"
                                                                                                    value="<?php echo $car_details->available_from;?>"> 
                                                                            <span class="input-group-addon">
                                                                            <i class="list-icon material-icons">date_range</i></span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group input-has-value">
                                                                            <div class="input-group input-has-value">
                                                                                <input type="text" class="form-control available_to"
                                                                                                    value="<?php echo $car_details->available_to;?>"> 
                                                                                <span class="input-group-addon">
                                                                                <i class="list-icon material-icons">date_range</i></span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                                   
                                                                    <td>
                                                                        <input type="hidden" id="car_stock_id" value="<?php echo $car_details->carstock_id;?>"> 
                                                                        <select name="car_status" class="form-control car_status_update">

                                                                                <option  value="Pending" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Pending" )){ echo "selected"; } else { echo ""; } ?> >Pending </option>
                                                                                <option value="Sold" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Sold" )){ echo "selected"; } else { echo ""; } ?> >Sold </option>
                                                                                <option value="Approved" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Approved" )){ echo "selected"; } else { echo ""; } ?> >Approved </option>                                                                               
                                                                                <option value="Shipped" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Shipped" )){ echo "selected"; } else { echo ""; } ?> >Shipped </option>
                                                                                <option value="Custom Cleared" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Custom Cleared" )){ echo "selected"; } else { echo ""; } ?> >Custom Cleared </option>
                                                                                <option value="Pickup" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Pickup" )){ echo "selected"; } else { echo ""; } ?> >Pickup </option>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <a class="btn btn-info" style="padding: 5px;" href="<?php echo base_url('admin/edit_carstock/'.$car_details->carstock_id); ?>" >
                                                                                Edit
                                                                        </a> 
                                                                        <a class="btn btn-danger delete_carstock" style="padding: 5px;" href="<?php echo base_url('admin/delete_carstock/'.$car_details->carstock_id); ?>" >
                                                                                delete
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                               <?php } } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                            <!-- viwe stock from ghana -->

                                                            <div class="tab-pane" id="Ghana">
                                                                    <table class="table table-editable table-responsive">
                                                                        <thead>
                                                                                <tr>
                                                                                    <th>OwnerDetails</th>
                                                                                    <th>CarImage</th>
                                                                                    <th data-identifier>Make/ Model</th>
                                                                                    <th data-editable>Cost</th>
                                                                                    <th>Category</th>
                                                                                    <th>Available From</th>
                                                                                    <th>Available To</th>
                                                                                    <th>Status</th>
                                                                                    <th>Update</th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php 
                                                                                foreach ($car_detail as $car_details) {

                                                                                if($car_details->country == 'Ghana')
                                                                                {   

                                                                            ?>    
                                                                                <tr>
                                                                                    <td><?php echo $car_details->user_type;?></td>
                                                                                    <td>
                                                                                        <img style="height: 50px; width: 50px;" src="<?php echo $car_details->admincar_stockimg;?>" class="img-responsive" />
                                                                                        <br> View All Images
                                                                                    </td>
                                                                                    <td>
                                                                                        <?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?>
                                                                                    </td>
                                                                                    <td><?php echo $car_details->price;?></td>
                                                                                    <td>
                                                                                   <input type="hidden" id="car_stock_id" value="<?php echo $car_details->carstock_id;?>">
                                                                                <select name="category" class="car_category form-control">

                                                                                <option  value="Luxury" <?php if(isset($car_details->category) && ($car_details->category == "Luxury" )){ echo "selected"; } else { echo ""; } ?> >Luxury/ Premium </option>
                                                                                <option value="Dealership" <?php if(isset($car_details->category) && ($car_details->category == "Dealership" )){ echo "selected"; } else { echo ""; } ?> >Dealership </option>
                                                                                <option value="Hot_Deals" <?php if(isset($car_details->category) && ($car_details->category == "Hot_Deals" )){ echo "selected"; } else { echo ""; } ?> >Hot Deals </option>                                                                               
                                                                                <option value="Used_Cars" <?php if(isset($car_details->category) && ($car_details->category == "Used_Cars" )){ echo "selected"; } else { echo ""; } ?> >Used Car Minor dents </option>
                                                                                <option value="Uber_Taxi" <?php if(isset($car_details->category) && ($car_details->category == "Uber_Taxi" )){ echo "selected"; } else { echo ""; } ?> >Uber Taxi </option>
                                                                                <option value="Commercial_car" <?php if(isset($car_details->category) && ($car_details->category == "Commercial_car" )){ echo "selected"; } else { echo ""; } ?> >Commercial Car Trucks </option>
                                                                                        </select>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group input-has-value">
                                                                                            <div class="input-group input-has-value">
                                                                                                <input type="text" class="form-control available_from"
                                                                                                    value="<?php echo $car_details->available_from;?>"> 
                                                                                                <span class="input-group-addon">
                                                                                                   <i class="list-icon material-icons">date_range</i>
                                                                                                </span>
                                                                                            </div>
                                                                                            <!-- /.input-group -->
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group input-has-value">
                                                                                            <div class="input-group input-has-value">
                                                                                                <input type="text" class="form-control available_to"
                                                                                                    value="<?php echo $car_details->available_to;?>"> 
                                                                                                <span class="input-group-addon">
                                                                                                <i class="list-icon material-icons">date_range</i></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                   
                                                                        <td>
                                                                            <input type="hidden" id="car_stock_id" value="<?php echo $car_details->carstock_id;?>"> 
                                                                           <select name="car_status" class="form-control car_status_update">

                                                                                <option  value="Pending" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Pending" )){ echo "selected"; } else { echo ""; } ?> >Pending </option>
                                                                                <option value="Sold" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Sold" )){ echo "selected"; } else { echo ""; } ?> >Sold </option>
                                                                                <option value="Approved" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Approved" )){ echo "selected"; } else { echo ""; } ?> >Approved </option>                                                                               
                                                                                <option value="Shipped" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Shipped" )){ echo "selected"; } else { echo ""; } ?> >Shipped </option>
                                                                                <option value="Custom Cleared" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Custom Cleared" )){ echo "selected"; } else { echo ""; } ?> >Custom Cleared </option>
                                                                                <option value="Pickup" <?php if(isset($car_details->car_status) && ($car_details->car_status == "Pickup" )){ echo "selected"; } else { echo ""; } ?> >Pickup </option>
                                                                            </select>
                                                                        </td>
                                                                        <td> 
                                                                            <a class="btn btn-info" style="padding: 5px;" href="<?php echo base_url('admin/edit_carstock/'.$car_details->carstock_id); ?>" >
                                                                                Edit
                                                                            </a>
                                                                            <a class="btn btn-danger delete_carstock" style="padding: 5px;" href="<?php echo base_url('admin/delete_carstock/'.$car_details->carstock_id); ?>" >
                                                                                delete
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                           
                                                        </div>
                                                        <!-- /.tab-content -->
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


//available from and to  date 
$(".available_from").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
});

$(".available_to").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
}); 



    
// delete newsfeeds submit

$(document).ready(function(){

    $(document).on("click", ".delete_carstock", function(e){
         
        e.preventDefault(); 
        var url = $(this).attr('href');
        var formdata = new FormData(this);

        bootbox.confirm("Are you sure you want to delete?", function(result) {

            if(result)
               {
      
                  $.ajax({
                          url :url,
                          context:this,
                          type: 'POST',
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
                                swal("Successfully Deteled carstock...")
                                window.setTimeout(function(){location.reload()},2000)
                                                                   
                              }else 
                               {                    
                                 swal("Successfully Went Wrong...")
                               }
                          }

                      });
                  }
               });
        });
 });




//update car status 

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("change", ".car_status_update", function(e){

        e.preventDefault();    

        var car_id = ($(this).closest('td').find('#car_stock_id').val());
        var status = $(this).val();      
       
       bootbox.confirm("Are you sure you want to change", function(result) {

        if(result)
              {

                $.ajax({
                          url :base_url+'admin/update_car_status/',
                          type: 'POST',
                          data: {id : car_id, car_status: status},
                          dataType:'json',
                           
                          error: function(xhr,status,error)
                          {   
                              alert(xhr.responseText);
                          },  
                          
                          success: function(response) 
                          {                             
                            if(response.status == 'success')
                            {
                             
                              swal("Successfully Updated");
                            }
                             
                              else 
                              {                       
                                swal("Something went wrong");
                              }      
                          }

                      });
              }  
            });     
             
        });
 });

//update car category 

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("change", ".car_category", function(e){

        e.preventDefault();    

        var car_id = ($(this).closest('td').find('#car_stock_id').val());
        var category = $(this).val();      
       
       bootbox.confirm("Are you sure you want to change", function(result) {

        if(result)
            {

                $.ajax({
                          url :base_url+'admin/update_car_category/',
                          type: 'POST',
                          data: {id : car_id, car_category: category},
                          dataType:'json',
                           
                          error: function(xhr,status,error)
                          {   
                              alert(xhr.responseText);
                          },  
                          
                          success: function(response) 
                          {                             
                            if(response.status == 'success')
                            {
                             
                              swal("Successfully Updated");
                            }
                             
                            else 
                            {                       
                               swal("Something went wrong");
                            }      
                          }

                        });
            }  
        });     
             
    });
 });

</script>
</body>



</html>