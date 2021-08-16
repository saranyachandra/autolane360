
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
                        <!-- <h6 class="page-title-heading mr-0 mr-r-5">Admin Manager</h6> -->
                        <p class="page-title-description mr-0 d-none d-md-inline-block">DIRECT CAR ORDER DASHBOARD</p>
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
                      <h5>View Customer Members</h5>
                    </div>
                      <!-- /.widget-heading -->
                    <div class="widget-body clearfix">
                      <div class="tabs">
                        <!-- /.nav-tabs -->
                                                       
                        <div class="tab-pane active" id="USA">
                          <table class="table table-responsive">
                            <thead>
                              <tr>
                                <th>Order Ticket</th>
                                <th>Customers Name</th>
                                <th>Phone/Email</th>
                                <th>Location</th>
                                <th>Car Request</th>
                                <th>Budget</th>
                                <th>Agent</th>
                                <th>Upload Order Car </th>
                               
                                <th>Date </th>
                              </tr>
                            </thead>
                            <tbody>

                              <?php 

                                foreach ($car_detail as $car_details) {
                              ?>
                            <tr>
                              <td><?php echo $car_details->order_ticket;?></td>
                              <td><?php echo $car_details->f_name." ".$car_details->l_name;?> </td>
                              <td><?php echo $car_details->phone_no." / ".$car_details->email;?> </td>
                              <td><?php echo $car_details->cus_country;?></td>
                              <td>
                                <?php echo $car_details->car_year." ".$car_details->car_make." ".$car_details->car_model;?>
                              </td>
                              <td><?php echo $car_details->car_budget;?></td>
                                                                        
                              <td><?php echo $car_details->agent_code;?></td>
                              <td>
                                <?php 
                                  if($car_details->car_status == 'pending')
                                    {
                                      echo '<a id="upload_car1" href="'.base_url('admin/upload_cars/'.$car_details->agent_cus_id."/".$car_details->order_ticket."/".$car_details->cus_order_id).'"> Upload Cars </a> ';
                                    } else 
                                    {
                                      echo '<a id="upload_car1" href="#"> already upload Cars </a>';
                                      echo '<a class="btn btn-info" style="padding: 5px;" href="'.base_url('admin/edit_agent_carstock/'.$car_details->order_ticket).'" >Edit </a>&nbsp;&nbsp;&nbsp;';
                                      echo '<a class="btn btn-danger delete_carstock" style="padding: 5px;" href="'.base_url('admin/delete_agent_carstock/'.$car_details->order_ticket).'" > delete  </a>';
                                    }
                                ?>
                              </td>
                                                                
                              <td>
                                <?php 
                                  $timestamp = strtotime($car_details->date);
                                  echo date('M-d-Y', $timestamp);  
                                ?>
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
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

$(document).ready( function () {
    $('.table').DataTable({
      "order": [ 3,"desc" ]
    });
} );

//available from and to  date 
$(".available_from").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
});

$(".available_to").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
}); 


var base_url = '<?php echo base_url() ?>'; //form submited

    
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