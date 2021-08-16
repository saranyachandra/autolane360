
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
                                                                    <table class="table  table-responsive">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>OwnerDetails</th>
                                                                                    <th>Car</th>
                                                                                    <th data-identifier>Make /Model/Year</th>
                                                                                    <th data-editable>Price</th>
                                                                                    <th>Status</th>
                                                                                    <th>Shipped On</th>
                                                                                    <th>Arrival Date</th>
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
                                                                                <td>
                                                                                    <?php echo $car_details->user_fname." ".$car_details->user_lname;?>
                                                                                </td>
                                                                                <td>
                                                                                    <img style="height: 50px; width: 50px;" src="<?php echo $car_details->admincar_stockimg;?>" class="img-responsive" />
                                                                                        <br> View All Images
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?>
                                                                                </td>
                                                                                <td><?php echo $car_details->price;?></td>
                                                                                <td><?php echo $car_details->status;?></td>
                                                                                <td><?php echo $car_details->shipped_on;?></td>
                                                                                <td><?php echo $car_details->arrival_date;?></td>
                                                                                <td>
                                                                                    <a href="<?php echo base_url('admin/edit_buyer/'.$car_details->carstock_id); ?>" class="btn btn-info" style="padding: 5px;"> View </a>
                                                                                    <a class="delete_stock btn btn-danger" style="padding: 5px;" href="<?php echo base_url('admin/delete_buyer/'.$car_details->carstock_id); ?>" ><i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>  
                                                                            </tr>   
                                                                            <?php } } ?>
                                                                            </tbody>
                                                                    </table>
                                                            </div>

                                                        <!-- viwe stock from nigeria -->
                                                            <div class="tab-pane" id="Nigeria">
                                                                    <table class="table table-responsive">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>OwnerDetails</th>
                                                                                <th>Car</th>
                                                                                <th>Make /Model/Year</th>
                                                                                <th>Price</th>
                                                                                <th>Status</th>
                                                                                <th>Shipped On</th>
                                                                                <th>Arrival Date</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php 
                                                                                foreach ($car_detail as $car_details) {

                                                                                if($car_details->country == 'Nigeria')
                                                                                {   

                                                                            ?>    
                                                                            <tr>

                                                                                <td><?php echo $car_details->user_fname." ".$car_details->user_lname;?></td>
                                                                                <td>
                                                                                    <img style="height: 50px; width: 50px;" src="<?php echo $car_details->admincar_stockimg;?>" class="img-responsive" />
                                                                                        <br> View All Images
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?>
                                                                                </td>
                                                                                <td><?php echo $car_details->price;?></td>
                                                                                <td><?php echo $car_details->status;?></td>
                                                                                <td><?php echo $car_details->shipped_on;?></td>
                                                                                <td><?php echo $car_details->arrival_date;?></td>
                                                                                <td>
                                                                                    <a href="<?php echo base_url('admin/edit_buyer/'.$car_details->carstock_id); ?>" class="btn btn-info" style="padding: 5px;"> View </a>
                                                                                    <a class="delete_stock btn btn-danger" style="padding: 5px;" href="<?php echo base_url('admin/delete_buyer/'.$car_details->carstock_id); ?>" ><i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>     
                                                                            </tr>
                                                                            <?php } } ?>
                                                                        </tbody>
                                                                    </table>
                                                            </div>

                                                            <!-- viwe stock from ghana -->

                                                            <div class="tab-pane" id="Ghana">
                                                                    <table class="table table-responsive">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>OwnerDetails</th>
                                                                                    <th>Car</th>
                                                                                    <th data-identifier>Make /Model/Year</th>
                                                                                    <th data-editable>Price</th>
                                                                                    <th>Status</th>
                                                                                    <th>Shipped On</th>
                                                                                    <th>Arrival Date</th>
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

                                                                                <td>
                                                                                    <?php echo $car_details->user_fname." ".$car_details->user_lname;?>
                                                                                </td>
                                                                                <td>
                                                                                    <img style="height: 50px; width: 50px;" src="<?php echo $car_details->admincar_stockimg;?>" class="img-responsive" />
                                                                                        <br> View All Images
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?>
                                                                                </td>
                                                                                <td><?php echo $car_details->price;?></td>
                                                                                <td><?php echo $car_details->status;?></td>
                                                                                <td><?php echo $car_details->shipped_on;?></td>
                                                                                <td><?php echo $car_details->arrival_date;?></td>
                                                                                <td>
                                                                                    <a href="<?php echo base_url('admin/edit_buyer/'.$car_details->carstock_id); ?>" class="btn btn-info" style="padding: 5px;"> View </a>
                                                                                    <a class="delete_stock btn btn-danger" style="padding: 5px;" href="<?php echo base_url('admin/delete_buyer/'.$car_details->carstock_id); ?>" ><i class="fa fa-trash-o" aria-hidden="true"></i>
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

//available from and to  date 
$("#available_from").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
});

$("#available_to").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
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

//car stock delete submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("click", ".delete_stock", function(e){
         
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
                                $("#delete_result").html('<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> Successfully Deleted  </div>');
                                window.setTimeout(function(){location.reload()},2000)
                                                                   
                              }else 
                               {                    
                                  $("#delete_result").html('<div class="alert alert-success alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Sorry! Somethink went wrong. </div>');
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