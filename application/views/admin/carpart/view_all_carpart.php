
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
                        <p class="page-title-description mr-0 d-none d-md-inline-block">My Client List</p>
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
                                            <!-- <h5>View Customer Members</h5> -->
              </div>
                                        <!-- /.widget-heading -->
              <div class="widget-body clearfix">
                <div class="tabs">                                                        
                                                        <!-- /.nav-tabs -->
                  <div class="tab-pane active" id="USA">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Car Details</th>
                          <th>Complete Shipping Price</th>
                          <th>Custom Shipping Price</th>                        
                          <th> Status </th>
                          <th>View</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php 
                            $i = 1;
                            foreach ($part_detail as $details) {
                        ?>
                        <tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $details->car_year." ".$details->car_brand." ".$details->car_model;?> </td>
                          <td><?php echo $details->com_shipping_price;?> </td>
                          <td><?php echo $details->cus_shipping_price;?></td>
                          <td><?php echo $details->car_location;?></td>
                          <td>
                            <a class="btn btn-info" href="<?php echo base_url('admin/edit_carpart/'.$details->car_part_id); ?>"> Edit </a> 
                            <a class="btn btn-danger delete_carpart" style="padding: 5px;" href="<?php echo base_url('admin/delete_carpart/'.$details->car_part_id); ?>" >delete</a>
                          </td>
                        </tr>
                        <?php $i++; } ?>
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
      // "order": [ 3,"desc" ]
    });
} );

    
// delete customer submit

$(document).ready(function(){

    $(document).on("click", ".delete_carpart", function(e){
         
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
                                swal("Successfully Deteled...")
                                window.setTimeout(function(){location.reload()},2000)
                                                                   
                              }else 
                               {                    
                                 swal("Something Went Wrong...")
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

    $(document).on("change", ".carpart_status", function(e){

        e.preventDefault();    

        var carpart_id = ($(this).closest('td').find('#carpart_id').val());
        var status = $(this).val();      
       
       bootbox.confirm("Are you sure you want to change", function(result) {

        if(result)
            {

                $.ajax({
                          url :base_url+'admin/update_membership_status/',
                          type: 'POST',
                          data: {id : carpart_id, Membership_status: status},
                          dataType:'json',
                           
                          error: function(xhr,status,error)
                          {   
                              alert(xhr.responseText);
                          },  
                          
                          success: function(response) 
                          {                             
                              if(response.status == 'success')
                              {
                               
                                swal("Updated Successfully...");
                              }
                               
                              else 
                              {                       
                                 swal("Something went wrong...");
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