
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
                                            <p><?php echo $car_detail->order_ticket; ?></p>
                                        </div>
                                        <div class="row">
                                            <span>Car Year:</span>
                                            <p><?php echo $car_detail->car_year; ?></p>
                                        </div>
                                        <div class="row">
                                            <span > Car Brand/Model:</span>
                                            <p style="text-transform: capitalize;">
                                                <?php echo $car_detail->car_brand." ".$car_detail->car_model; ?>
                                            </p>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="col-sm-6 col-md-6" >
                                        <div class="row" style="margin-top:20px;">
                                            <span>Buyer Code: </span>
                                            <p><?php echo $car_detail->buyer_code; ?></p>
                                        </div>
                                        <div class="row">
                                            <span>Car Price:</span>
                                            <p><?php echo $car_detail->price; ?></p>
                                        </div>
                                        <div class="row">
                                            <span>Car Location:</span>
                                            <p><?php echo $car_detail->car_location; ?></p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </div>

                           <div class="col-md-12 widget-holder" style="margin-top: 25px;">
                                 <h3 style="text-align: center;"> Car Images</h3> 
                           </div>
                            <div class="col-sm-12 col-md-12" >
                            <div class="row">
                                    <?php 
                                        foreach (json_decode($car_detail->admincar_stockimg) as  $img){
                                                    echo '<img style="height:170px;" class="img-responsive img-thumbnail" src="'.$img->url.'" alt="profile_pic">';
                                        }
                                    ?>
                            </div>
                                       
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