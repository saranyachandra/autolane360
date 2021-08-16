
<?php $this->load->view('includes/admin_css'); ?>

<style type="text/css">
    span{
        font-weight: bold;
    }

h1 {
  padding: 50px 0;
  font-weight: 400;
  text-align: center;
}

p {
  margin: 0 0 20px;
  line-height: 1.5;
}

section {
  display: none;
  padding: 20px 0 0;
  border-top: 1px solid #ddd;
}

input {
  display: none;
}

label {
  display: inline-block;
  margin: 0 0 -1px;
  padding: 15px 25px;
  font-weight: 600;
  text-align: center;
  color: #bbb;
  border: 1px solid transparent;
}

label:before {
  font-family: fontawesome;
  font-weight: normal;
  margin-right: 10px;
}

label[for*='1']:before { content: '\f1cb'; }
label[for*='2']:before { content: '\f17d'; }
label[for*='3']:before { content: '\f16b'; }
label[for*='4']:before { content: '\f1a9'; }
label[for*='5']:before { content: '\f1a9'; }
label[for*='6']:before { content: '\f1a9'; }
label[for*='7']:before { content: '\f1a9'; }

label:hover {
  color: #888;
  cursor: pointer;
}

input:checked + label {
  color: #555;
  border: 1px solid #ddd;
  border-top: 2px solid orange;
  border-bottom: 1px solid #fff;
}

#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4,
#tab5:checked ~ #content5,
#tab6:checked ~ #content6,
#tab7:checked ~ #content7 {
  display: block;
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
                                            <h5>View Car Part</h5>
                                        </div>
                                        <!-- /.widget-heading -->
                    <div class="widget-body clearfix">
                                               
                        <!-- <form id="edit_buyerform" action="<?php echo base_url('admin/update_buyer/'.$user_details->carstock_id); ?>"  method="POST" enctype="multipart/form-data"> -->

                                        <div class="row" style="border:1px solid #f1f1f1; border-radius:5px;">
                                          <div class="col-xs-12 col-md-12 col-lg-12">
                                             <div id="result"></div> 
                                            <div class="col-lg-12 text-center">
                                              <h3><span style="font-size:15px; font-weight:bold; text-transform:uppercase;"><u>User/Carpart Details</u></span></h3>
                                            </div>
                                           
                                          
                                          
                                              <div class="col-lg-12 col-md-12">             
                                                <div class="row">
                                                  <div class="form-group col-lg-6 col-md-6">
                                                    <span>Available From: </span>
                                                    <?php echo $carpart_detail->available_from; ?> <br>
                                                    <span>Available To:  </span>
                                                    <?php echo $carpart_detail->available_to; ?> <br>
                                                    <span>Car Location: </span>
                                                    <?php echo $carpart_detail->car_location; ?> <br>
                                                   
                                                  </div>

                                                   <div class="form-group col-lg-6 col-md-6">
                                                    <span>Carpart Year/Model: </span>
                                                    <?php echo $carpart_detail->car_year." ".$carpart_detail->car_model; ?> <br>
                                                    <span>Carpart Brand: </span>
                                                    <?php echo $carpart_detail->car_brand; ?> <br>
                                                    <span>Carpart Price: </span>
                                                    <?php echo $carpart_detail->part_price; ?> <br>
                                                    
                                                  </div>
                                                </div>
                                              </div>

                                         

                                              </div>
                                        </div>
              
                            <div class="row" style="border:1px solid #f1f1f1; border-radius:5px;">
                              <div class="col-xs-12 col-md-12 col-lg-12">
                                <div class="col-lg-12 text-center">
                                  <h3><span style="font-size:15px; font-weight:bold; text-transform:uppercase;"><u>View Car part Details</u></span></h3>
                                </div>
                        
                                <main>
  
                      <input id="tab1" type="radio" name="tabs" checked>
                      <label for="tab1">Engine</label>
                        
                      <input id="tab2" type="radio" name="tabs">
                      <label for="tab2">Body</label>
                        
                      <input id="tab3" type="radio" name="tabs">
                      <label for="tab3">Transmission</label>
                        
                      <input id="tab4" type="radio" name="tabs">
                      <label for="tab4">Interior</label>

                      <input id="tab5" type="radio" name="tabs">
                      <label for="tab5">Wheel</label>                      

                      <input id="tab6" type="radio" name="tabs">
                      <label for="tab6">Electricals</label>

                      <input id="tab7" type="radio" name="tabs">
                      <label for="tab7">Lights</label>
    
                     
                      <section id="content1">
                        <div id="Engine" style="padding-top:15px;">
                            <div class="gallery" >
                              <div class="col-md-12 col-lg-12 col-sm-12">  
                              <div class="row">
                              <?php                     
                                foreach ($part_img as $details) {
                                
                                  if($details->main_cat == "engine")
                                  {
                                    if(!empty($details->image1))
                                    {

                              ?>
                            
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/test_images/'.$details->image1);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image1);?>" alt="nissan" />
                              </a>
                            </div>

                              <?php  
                                  }                
                                  if(!empty($details->image2))
                                  {
                              ?>
                           
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/test_images/'.$details->image2);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image2);?>" alt="nissan" />
                              </a>
                            </div>
                         
                              <?php } } } ?>
                           </div>
                        </div>
                            </div>
                           
                          </div>
                      </section>
    
                      <section id="content2">
                        <div id="Body"  style="padding-top:15px;">
                            
                             <div class="gallery">
                              <div class="col-md-12 col-lg-12 col-sm-12">  
                              <div class="row">
                              <?php                     
                               
                                  foreach ($part_img as $details) {

                                  if($details->main_cat == "body")
                                  {
                                    if(!empty($details->image1))
                                    {

                              ?>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/test_images/'.$details->image1);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image1);?>" alt="nissan" />
                              </a>
                            </div>

                              <?php  
                                  }                
                                  if(!empty($details->image2))
                                  {
                              ?>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/test_images/'.$details->image2);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image2);?>" alt="nissan" />
                              </a>
                            </div>

                              <?php } } } ?>
                            </div>
                          </div>
                            </div>

                          </div>             
                      </section>
    
                      <section id="content3">
                         <div id="Transmission" style="padding-top:15px;">
                             <div class="gallery">
                              <div class="col-md-12 col-lg-12 col-sm-12">  
                              <div class="row">
                            <?php  

                                foreach ($part_img as $details) {
                                  if($details->main_cat == "transmission")
                                  {
                                    if(!empty($details->image1))
                                    {

                              ?>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/test_images/'.$details->image1);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image1);?>" alt="nissan" />
                              </a>
                            </div>

                              <?php  
                                  }                
                                  if(!empty($details->image2))
                                  {
                              ?>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/test_images/'.$details->image2);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image2);?>" alt="nissan" />
                              </a>
                            </div>

                              <?php } } } ?>
                              </div>
                            </div>
                            </div>
                          </div>
                      </section>
    
                      <section id="content4">
                        <div id="Interior" style="padding-top:15px;">
                            <div class="gallery" >
                              <div class="col-md-12 col-lg-12 col-sm-12">  
                              <div class="row">
                              <?php                     
                               
                                foreach ($part_img as $details) {
                                  if($details->main_cat == "interior")
                                  {
                                    if(!empty($details->image1))
                                    {

                              ?>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/test_images/'.$details->image1);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image1);?>" alt="nissan" />
                              </a>
                            </div>

                              <?php  
                                  }                
                                  if(!empty($details->image2))
                                  {
                              ?>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/test_images/'.$details->image2);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image2);?>" alt="nissan" />
                              </a>
                            </div>

                              <?php } }  } ?>
                            </div>
                          </div>
                          
                            </div>
                           
                          </div>

                      </section>
    
                      <section id="content5">
                         <div id="Rim" style="padding-top:15px;">
                            <div class="gallery">
                              <div class="col-md-12 col-lg-12 col-sm-12">  
                              <div class="row">
                             <?php                     
                                foreach ($part_img as $details) {
                                
                                  if($details->main_cat == "rim/wheel/brakes")
                                  {
                                    if(!empty($details->image1))
                                    {

                              ?>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/test_images/'.$details->image1);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image1);?>" alt="nissan" />
                              </a>
                            </div>

                              <?php  
                                  }                
                                  if(!empty($details->image2))
                                  {
                              ?>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/test_images/'.$details->image2);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image2);?>" alt="nissan" />
                              </a>
                            </div>

                              <?php } }  } ?>
                            </div>
                          </div>
                            </div>
                          </div>
                      </section>


                      <section id="content6">
                          <div id="Electricals"  style="padding-top:15px;">
                             <div class="gallery">
                              <div class="col-md-12 col-lg-12 col-sm-12">  
                              <div class="row">
                            <?php                    
                                foreach ($part_img as $details) {
                                
                                  if($details->main_cat == "electricals")
                                  {
                                    if(!empty($details->image1))
                                    {

                              ?>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/test_images/'.$details->image1);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image1);?>" alt="nissan" />
                              </a>
                            </div>

                              <?php  
                                  }                
                                  if(!empty($details->image2))
                                  {
                              ?>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/test_images/'.$details->image2);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image2);?>" alt="nissan" />
                              </a>
                            </div>

                              <?php } } } ?>
                            </div>
                          </div>
                            </div>
                          </div>

                      </section>


                      <section id="content7">
                        <div id="Lights" style="padding-top:15px;">
                            <div class="gallery">
                              <div class="col-md-12 col-lg-12 col-sm-12">  
                              <div class="row">
                               <?php
                                foreach ($part_img as $details) {
                               
                                  if($details->main_cat == "lights")
                                  {
                                    if(!empty($details->image1))
                                    {

                              ?>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/test_images/'.$details->image1);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image1);?>" alt="nissan" />
                              </a>
                            </div>

                              <?php  
                                  }                
                                  if(!empty($details->image2))
                                  {
                              ?>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                              <a href="<?php echo base_url('assets/img/car_light_images/'.$details->image2);?>">
                              <img style="height:150px;width: 250px;" class="img-responsive" src="<?php echo base_url('assets/img/test_images/'.$details->image2);?>" alt="nissan" />
                              </a>
                            </div>

                              <?php } } } ?>
                            </div>
                          </div>
                            
                            </div>
                          </div>

                      </section>

                  </main>                       
                               

                              </div>

                            </div>
                

                           <!--  <div class="row" style="border:1px solid #f1f1f1; border-radius:5px; margin-top:15px;">
                              <div class="col-md-12 col-xs-12" style="margin-top: 20px;">
                                <div class="row text-center">
                                  <div class="col-lg-12 ">
                                  <div class="form-actions btn-list">
                                    <button type="submit" class="btn btn-primary"> Update</button>                           
                                  </div>
                                  </div>
                                </div>
                              </div>                     
                            </div> -->

                        <!-- </form>    -->

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