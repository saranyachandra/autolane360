
<?php $this->load->view('includes/admin_css'); ?>

<style type="text/css">
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
                                               
                        <form id="edit_buyerform" action="<?php echo base_url('admin/update_buyer/'.$user_details->carstock_id); ?>"  method="POST" enctype="multipart/form-data">

                                        <div class="row" style="border:1px solid #f1f1f1; border-radius:5px;">
                                          <div class="col-xs-12 col-md-12 col-lg-12">
                                             <div id="result"></div> 
                                            <div class="col-lg-12 text-center">
                                              <h3><span style="font-size:15px; font-weight:bold; text-transform:uppercase;"><u>User/Car Details</u></span></h3>
                                            </div>
                                            
                                             <input type="hidden" name="user_id" value="<?php echo $user_details->user_id; ?>">
                                          
                                              <div class="col-lg-12 col-md-12">             
                                                <div class="row">
                                                  <div class="form-group col-lg-6 col-md-6">
                                                    <span>User Name: </span>
                                                    <?php echo $user_details->user_fname." ".$user_details->user_lname; ?> <br>
                                                    <span>User Email:  </span>
                                                    <?php echo $user_details->user_email; ?> <br>
                                                    <span>User Phone: </span>
                                                    <?php echo $user_details->user_phone; ?> <br>
                                                   
                                                  </div>

                                                   <div class="form-group col-lg-6 col-md-6">
                                                    <span>Car Year/Model: </span>
                                                    <?php echo $user_details->car_year." ".$user_details->car_model; ?> <br>
                                                    <span>Car Brand: </span>
                                                    <?php echo $user_details->car_brand; ?> <br>
                                                    <span>Car Price: </span>
                                                    <?php echo $user_details->price; ?> <br>
                                                    <span>Buyer Code: </span>
                                                    <?php echo $user_details->buyer_code; ?> <br>
                                                  </div>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
              
                                        <div class="row" style="border:1px solid #f1f1f1; border-radius:5px;">
                                          <div class="col-xs-12 col-md-12 col-lg-12">
                                             <div id="result"></div> 
                                            <div class="col-lg-12 text-center">
                                              <h3><span style="font-size:15px; font-weight:bold; text-transform:uppercase;"><u>Edit Car Details</u></span></h3>
                                            </div>
                        
                                            <div class="col-lg-12 col-md-12">             
                                                <div class="row">
                                                <div class="form-group col-lg-3 col-md-3">
                                                    <span>Car Status: </span>
                                                    <select name="car_status" class="form-control" >
                                                      <option value="" disabled selected hidden>Select Status </option>
                                                      <option value="Pending" <?php if(isset($user_details->status) && ($user_details->status == "Pending" )){ echo "selected"; } else { echo ""; } ?> >Pending </option>
                                                      <option value="Sold" <?php if(isset($user_details->status) && ($user_details->status == "Sold" )){ echo "selected"; } else { echo ""; } ?> >Sold </option>
                                                      <option value="Add Parts" <?php if(isset($user_details->status) && ($user_details->status == "Add Parts" )){ echo "selected"; } else { echo ""; } ?> >Add Parts </option>
                                                      <option value="Shipped" <?php if(isset($user_details->status) && ($user_details->status == "Shipped" )){ echo "selected"; } else { echo ""; } ?> >Shipped </option>
                                                      <option value="Arrived Destination" <?php if(isset($user_details->status) && ($user_details->status == "Arrived Destination" )){ echo "selected"; } else { echo ""; } ?> >Arrived Destination </option>
                                                      <option value="Cleared" <?php if(isset($user_details->status) && ($user_details->status == "Cleared" )){ echo "selected"; } else { echo ""; } ?> >Cleared </option>
                                                      <option value="Buyer Feed Back" <?php if(isset($user_details->status) && ($user_details->status == "Buyer Feed Back" )){ echo "selected"; } else { echo ""; } ?> >Buyer Feed Back </option>
                                                    </select>
                                                </div>  
                                                <div class="form-group col-lg-3 col-md-3">   
                                                    <span>Shipped On:  </span>
                                                    <input type="text" name="shipped_on" id="shipping_date" class="form-control" value="<?php echo $user_details->shipped_on;?>" autocomplete="off">
                                                </div>

                                                <div class="form-group col-lg-3 col-md-3">
                                                    <span>Estimate Arrival Date:  </span>
                                                    <input type="text" name="Arrival_date" id="arrival_date" class="form-control" value="<?php echo $user_details->arrival_date;?>" autocomplete="off">
                                                </div> 

                                               
                                                </div>
                                            </div>

                                        <div class="col-lg-12 col-md-12"> 
                                          <div class="row">

                                          <div class="form-group col-lg-3 col-md-3">
                                              <span>Choose Receipt Image: <span>
                                              <input type="file" name="receipt_img[]" class="form-control" accept="image/*" multiple>
                                          </div>

                                          <div class="form-group col-lg-3 col-md-3">
                                              <span>Bank Name: </span>
                                            <select name="bank_name" class="form-control" >
                                              <option value="" disabled selected hidden>Select Bank Name </option>
                                              <option value="test1">test1 </option>
                                              <option value="test2">test2 </option>
                                             
                                            </select>
                                          </div>

                                            <div class="form-group col-lg-3 col-md-3">
                                              <span>Received Amount: </span>
                                              <input type="text" name="received_amt" class="form-control" >
                                            </div>
                                          
                                          </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12"> 
                                          <div class="row">
                                            <div class="form-group col-lg-3 col-md-3">
                                                <span>Extend Code Price: </span>
                                                <input type="text" name="extend_code_price" class="form-control" placeholder="Enter Extend Code Price">
                                            </div>
                                              <div class="form-group col-lg-3 col-md-3">
                                                <span>Message: </span>
                                                <textarea class="form-control" name="Message" placeholder="Enter Msg here"></textarea>
                                               
                                            </div>
                                          </div>

                                          
                                         

                                        </div>

                                </div>

                            </div>
                

                            <div class="row" style="border:1px solid #f1f1f1; border-radius:5px; margin-top:15px;">
                              <div class="col-md-12 col-xs-12" style="margin-top: 20px;">
                                <div class="row text-center">
                                  <div class="col-lg-12 ">
                                  <div class="form-actions btn-list">
                                    <button type="submit" class="btn btn-primary"> Update</button>                           
                                  </div>
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

//available from and to  date 
$("#shipping_date").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
});

$("#arrival_date").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
}); 
    
//update car status 

var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", "#edit_buyerform", function(e){

        e.preventDefault();

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
                       
                            $("#result").html('<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>success!</strong> Your details updated... </div>');
                            window.location.href = "<?php echo base_url('admin/buyer_page'); ?>";
                        }
                       
                        else 
                        {                       
                          $("#result").html('<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry!</strong> Something went wrong Try again. </div>');
                        }          
                    }

           });
      

 });




</script>
</body>



</html>