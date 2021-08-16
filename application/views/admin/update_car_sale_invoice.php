
<?php $this->load->view('includes/admin_css'); ?>

<style type="text/css">
    img {
    max-width: 200px;
    height: auto;
    display: inline-block;
  }
.remove {
    display: block;
    background: #444;
    border: 1px solid black;
    color: white;
    text-align: center;
    cursor: pointer;
    width: 200px;
      margin-left: 0px;
  }
.remove:hover {
    background: white;
    color: black;
  }

span{
    font-weight: bold;
}
</style>

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
                                <img src="<?php echo base_url('assets/admin-assets/demo/users/user1.jpg');?>" class="rounded-circle" alt="">
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
                        <h6 class="page-title-heading mr-0 mr-r-5">Add Agent Members</h6>
                        <p class="page-title-description mr-0 d-none d-md-inline-block">Information about Admin details</p>
                    </div>
                    <!-- /.page-title-left -->
                    <div class="page-title-right d-none d-sm-inline-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/index'); ?>">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Add Agent Members</li>
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

                            <div class="container"> 
                            <div class="col-sm-12 col-md-12" >  
                                <h3 style="text-align: center;"> Car Details</h3> 

                                <div class="row">
                                   <div class="col-sm-6 col-md-6" >
                                        <div class="row" style="margin-top:20px;">
                                            <span>Order Ticket: </span>
                                            <p><?php echo $car_info->order_ticket; ?></p>
                                        </div>
                                        <div class="row">
                                            <span>Car Year:</span>
                                            <p><?php echo $car_info->car_year; ?></p>
                                        </div>
                                        <div class="row">
                                            <span > Car Brand/Model:</span>
                                            <p style="text-transform: capitalize;"><?php echo $car_info->car_brand." ".$car_info->car_model; ?></p>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="col-sm-6 col-md-6" >
                                        <div class="row" style="margin-top:20px;">
                                            <span>Buyer Code: </span>
                                            <p><?php echo $car_info->buyer_code; ?></p>
                                        </div>
                                        <div class="row">
                                            <span>Car Price:</span>
                                            <p><?php echo $car_info->price; ?></p>
                                        </div>
                                        <div class="row">
                                            <span>Car Location:</span>
                                            <p><?php echo $car_info->car_location; ?></p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </div>

                            <div class="row">
                                <div class="col-md-12 widget-holder" style="margin-top: 25px;">
                                    <form id="update_invoice_form" action="<?php echo base_url('admin/update_invoice'); ?>" method="POST" enctype="multipart/form-data"> 
                                        <input type="hidden" name="carstock_id" value="<?php echo $car_info->carstock_id; ?>">
                                        <div class="container">
                                        
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <span>Due Date</span>
                                                    <input type="text" name="due_date"  id="due_date" class="form-control" value="<?php echo $car_info->due_date;  ?>">
                                                </div>
                                                <div class="col-md-4">
                                                    <span>Invoice Date</span>
                                                    <input type="text" name="invoice_date" id="invoice_date" class="form-control" value="<?php echo $car_info->invoice_date;  ?>">
                                                </div>
                                                <div class="col-md-4">
                                                    <span>Status</span>
                                                    <select name="status" class="form-control">
                                                        <option  value="Pending" <?php if(isset($car_info->car_status) && ($car_info->car_status == "Pending" )){ echo "selected"; } else { echo ""; } ?> >Pending</option>
                                                        <option value="Car Order Uploaded" <?php if(isset($car_info->car_status) && ($car_info->car_status == "Car Order Uploaded" )){ echo "selected"; } else { echo ""; } ?> >Car Order Uploaded </option>
                                                                                             
                                                        <option value="Payment Made" <?php if(isset($car_info->car_status) && ($car_info->car_status == "Payment Made" )){ echo "selected"; } else { echo ""; } ?> >Payment Made </option>
                                                        <option value="Car Shipped" <?php if(isset($car_info->car_status) && ($car_info->car_status == "Car Shipped" )){ echo "selected"; } else { echo ""; } ?> >Car Shipped </option>
                                                        <option value="Car Delivered" <?php if(isset($car_info->car_status) && ($car_info->car_status == "Car Delivered" )){ echo "selected"; } else { echo ""; } ?> >Car Delivered </option>
                                                        <option value="Agent Paid" <?php if(isset($car_info->car_status) && ($car_info->car_status == "Agent Paid" )){ echo "selected"; } else { echo ""; } ?> >Agent Paid </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>    
                                           
                                        </div>

                                       
                                        <!-- /.form-group -->
                                        <div class="container" style="margin-top: 20px;">
                                            <div class="form-actions">
                                                <div class="form-group row">
                                                    <div class="col-sm-12 ml-auto btn-list text-center">
                                                        <button type="submit" style="background-color:#f60; border:0;" class="btn btn-warning">Update</button>

                                                    </div>
                                                    <!-- /.col-sm-12 -->
                                                </div>
                                                <!-- /.form-group -->
                                            </div>
                                        </div>
                                        <!-- /.form-actions -->
                                    </form>
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
    
$("#due_date").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
});
$("#invoice_date").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
});

//admin form submit

var base_url = '<?php echo base_url() ?>'; //form submited

// select2 library
$("#country").select2();


    $(document).on("submit", "#update_invoice_form", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                             
                                  due_date:"required",                  
                                  invoice_date: "required",
                                  status:"required",

                                },

                          messages: {                           
                                  due_date: {
                                      required: "Required", 
                                  }, 
                                  invoice_date: {
                                      required: "Required ", 
                                  }, 
                                  status: {
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
                    
                    success: function(response)
                    {
                       if(response.status == 'success')
                       {
                       
                        swal("Successfully Admin User was Created");                        
                        window.location.href = "<?php echo base_url('admin/car_sale_invoice'); ?>";
                        
                        }
                        else 
                        {                       
                          $("#result").html('<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry!</strong> Something went wrong Try again. </div>');
                        }          
                    }

           });
    }     

 });




</script>

</body>



</html>