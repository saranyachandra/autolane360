
<!-- import css files here -->
<?php $this->load->view('includes/site_css') ?>

<style type="text/css">


#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
  border-radius: 15px;
  text-align: center;
}
#boxes #dialog {
  width:450px; 
  height:300px;
  padding:10px;
  background-color:#ffffff;
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}

select.m-select{
    width: 125px;
    padding: 12px 0 12px 20px;
    border: 1px solid #eeeeee;
    border-radius: 30px;
    font: 400 13px 'Open Sans',sans-serif;
    background: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    appearance: none!important;
}

.s-form select{
    width:100%!important;
    margin-bottom: 10px;
    text-transform: uppercase;
    font: 400 10px 'Open Sans',sans-serif!important;
}
.tooltip-inner {
  background-color: red !important;
  color: #color ;
}

.tooltip.top .tooltip-arrow {
  border-top-color: #00acd6;
}
.b-items__aside-main-body-item label a
{
  color: #000;
}
.b-items__aside-main-body-item label{
    display: block;
    /*text-transform: uppercase;*/
    margin-bottom: 0px;
    font: 700 13px 'Open Sans',sans-serif;
    text-align: left;
}

.b-items__aside-main-body-item{
    text-align: left;
    margin-bottom: 0px!important;
}

.borderless td, .borderless th, .borderless tr {
    border: none!important;
}

</style>
</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124317054-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124317054-1');
</script>
<!-- register model popup -->
<body class="m-home" data-scrolling-animations="true" data-equal-height=".b-auto__main-item">
        

        <!-- Loader -->
        <div id="page-preloader"><span class="spinner"></span></div>
        <!-- Loader end -->

        
    <!--b-topBar-->
      <div class="container-fluid" style="background-color: #9a9090;height: 2px;"></div>
        <nav class="b-nav">
          <?php $this->load->view('includes/header_menu') ?>
        </nav>
    <!--b-nav-->

<div class="breadcrumbs-wrap" data-bg="<?=base_url()?>assets/images/1920x200_img1.jpg" style="background-image: url('<?=base_url()?>assets/images/1920x200_img1.jpg')">

        <div class="container">
          
          <h1 class="page-title">Agent List</h1>

          <ul class="breadcrumbs">

            <li><a href="<?php echo base_url('home/index');?>">Home</a></li>
            <li>Agent List</li>

          </ul>

        </div>

      </div>

<!--b-slider-->
<div class="container">
  <div class="row">
 <div class="col-md-10 col-sm-10"> 

    <div class="b-items">			

					<div class="col-lg-12 col-sm-8 col-xs-12">
						<div class="row m-border">
							<section style="padding:30px 0;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="b-contacts__form">
              <header class="b-contacts__form-header s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
                <h2 class="s-titleDet">Agent List </h2> 
              </header>

              <div class="tabs style-2 tabs-section horisontal clearfix">
              
                <ul class="tabs-nav clearfix">
                  <li class="active"><a data-toggle="tab" href="#USA">USA</a></li>
                  <li><a data-toggle="tab" href="#Nigeria">Nigeria</a></li>
                  <li><a data-toggle="tab" href="#Ghana">Ghana</a></li>  
                  <li><a data-toggle="tab" href="#Canada">Canada</a></li> 
                  <li><a data-toggle="tab" href="#UK">UK</a></li>                 
                </ul>

                <div class="tab-content">

                  <div id="USA" class="tab-pane fade in active">

                    <?php 

                      foreach ($user_detail as $user_details) {
                        if($user_details->admin_country == "USA")
                       {
                    ?>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.5s" style="animation-delay: 0.5s; animation-name: zoomInUp; margin-top: 20px;">
                      <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 b-items__cell" >
                        <div class="b-items__cars-one-img">   
                          <?php 
                              if(!empty($user_details->image))
                              {
                          ?>
                            <img  style="height: 215px;width: 275px;" class="img-responsive" src="<?php echo $user_details->image; ?>" alt="profile_pic">
                          <?php } else { ?>
                            <img style="height: 215px;width: 275px;" class="img-responsive" src="<?php echo base_url('assets/agent_profile-pic/default-avatar.jpg'); ?>" alt="profile_pic">
                          <?php } ?>
                      <table class="table borderless">                        

                        <tbody>
                            <tr>
                              <th>Name:</th>
                              <td><?php echo $user_details->admin_fname." ".$user_details->admin_lname ;?></td>
                            </tr>

                            <tr>
                              <th>Email:</th>
                              <td><?php echo $user_details->admin_email;?></td>
                            </tr>

                            <tr>
                              <th>Phone:</th>
                              <td><?php echo $user_details->admin_phone;?></td>
                            </tr>

                            <tr>
                              <th>City:</th>
                              <td><?php echo $user_details->admin_city;?></td>
                            </tr>

                            <tr>
                              <th>Country:</th>
                              <td><?php echo $user_details->admin_country;?></td>
                            </tr>

                            <tr>
                              <th>Ref Code:</th>
                              <td><?php echo $user_details->agent_code;?></td>
                            </tr>

                        </tbody>

                      </table>

                  </div>
                      </div>
                    </div> 
                    <?php } } ?>                  
                   
                  </div>


                  <div id="Nigeria" class="tab-pane fade">
                     <?php 

                      foreach ($user_detail as $user_details) {
                        if($user_details->admin_country == "Nigeria")
                       {
                    ?>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.5s" style="animation-delay: 0.5s; animation-name: zoomInUp; margin-top: 20px;">
                      <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 b-items__cell">
                        <div class="b-items__cars-one-img">   
                             <?php 
                              if(!empty($user_details->image))
                              {
                          ?>
                            <img style="height: 215px;width: 275px;" class="img-responsive" src="<?php echo $user_details->image; ?>" alt="profile_pic">
                          <?php } else { ?>
                            <img style="height: 215px;width: 275px;" class="img-responsive" src="<?php echo base_url('assets/agent_profile-pic/default-avatar.jpg'); ?>" alt="profile_pic">
                          <?php } ?>
                             <table class="table borderless">                        

                        <tbody>
                            <tr>
                              <th>Name:</th>
                              <td><?php echo $user_details->admin_fname." ".$user_details->admin_lname ;?></td>
                            </tr>

                            <tr>
                              <th>Email:</th>
                              <td><?php echo $user_details->admin_email;?></td>
                            </tr>

                            <tr>
                              <th>Phone:</th>
                              <td><?php echo $user_details->admin_phone;?></td>
                            </tr>

                            <tr>
                              <th>City:</th>
                              <td><?php echo $user_details->admin_city;?></td>
                            </tr>

                            <tr>
                              <th>Country:</th>
                              <td><?php echo $user_details->admin_country;?></td>
                            </tr>

                            <tr>
                              <th>Ref Code:</th>
                              <td><?php echo $user_details->agent_code;?></td>
                            </tr>

                        </tbody>

                      </table>


                        </div>
                      </div>
                    </div> 
                    <?php } } ?>       
                   
                  </div>


                  <div id="Ghana" class="tab-pane fade">
                      
                    <?php 

                      foreach ($user_detail as $user_details) {
                        if($user_details->admin_country == "Ghana")
                       {
                    ?>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.5s" style="animation-delay: 0.5s; animation-name: zoomInUp; margin-top: 20px;">
                      <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 b-items__cell">
                        <div class="b-items__cars-one-img">  

                          <?php 
                              if(!empty($user_details->image))
                              {
                          ?>
                            <img  style="height: 215px;width: 275px;" class="img-responsive" src="<?php echo $user_details->image; ?>" alt="profile_pic">
                          <?php } else { ?>
                            <img style="height: 215px;width: 275px;" class="img-responsive" src="<?php echo base_url('assets/agent_profile-pic/default-avatar.jpg'); ?>" alt="profile_pic">
                          <?php } ?>

                      <table class="table borderless">                        

                        <tbody>
                            <tr>
                              <th>Name:</th>
                              <td><?php echo $user_details->admin_fname." ".$user_details->admin_lname ;?></td>
                            </tr>

                            <tr>
                              <th>Email:</th>
                              <td><?php echo $user_details->admin_email;?></td>
                            </tr>

                            <tr>
                              <th>Phone:</th>
                              <td><?php echo $user_details->admin_phone;?></td>
                            </tr>

                            <tr>
                              <th>City:</th>
                              <td><?php echo $user_details->admin_city;?></td>
                            </tr>

                            <tr>
                              <th>Country:</th>
                              <td><?php echo $user_details->admin_country;?></td>
                            </tr>

                            <tr>
                              <th>Ref Code:</th>
                              <td><?php echo $user_details->agent_code;?></td>
                            </tr>

                        </tbody>

                      </table>

                        </div>

                      </div>
                    </div> 
                    <?php } } ?>      
                  </div>  

                <div id="Canada" class="tab-pane fade">
                      
                    <?php 

                      foreach ($user_detail as $user_details) {
                        if($user_details->admin_country == "Canada")
                       {
                    ?>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.5s" style="animation-delay: 0.5s; animation-name: zoomInUp; margin-top: 20px;">
                      <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 b-items__cell">
                        <div class="b-items__cars-one-img">  

                          <?php 
                              if(!empty($user_details->image))
                              {
                          ?>
                            <img  style="height: 215px;width: 275px;" class="img-responsive" src="<?php echo base_url('assets/agent_profile-pic/'.$user_details->image ); ?>" alt="profile_pic">
                          <?php } else { ?>
                            <img style="height: 215px;width: 275px;" class="img-responsive" src="<?php echo base_url('assets/agent_profile-pic/default-avatar.jpg'); ?>" alt="profile_pic">
                          <?php } ?>

                      <table class="table borderless">                        

                        <tbody>
                          
                            <tr>
                              <th>Name:</th>
                              <td><?php echo $user_details->admin_fname." ".$user_details->admin_lname ;?></td>
                            </tr>

                            <tr>
                              <th>Email:</th>
                              <td><?php echo $user_details->admin_email;?></td>
                            </tr>

                            <tr>
                              <th>Phone:</th>
                              <td><?php echo $user_details->admin_phone;?></td>
                            </tr>

                            <tr>
                              <th>City:</th>
                              <td><?php echo $user_details->admin_city;?></td>
                            </tr>

                            <tr>
                              <th>Country:</th>
                              <td><?php echo $user_details->admin_country;?></td>
                            </tr>

                            <tr>
                              <th>Ref Code:</th>
                              <td><?php echo $user_details->agent_code;?></td>
                            </tr>

                        </tbody>

                      </table>

                        </div>

                      </div>
                    </div> 
                    <?php } } ?>      
                </div>  


                <div id="UK" class="tab-pane fade">
                      
                    <?php 

                      foreach ($user_detail as $user_details) {
                        if($user_details->admin_country == "UK")
                       {
                    ?>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.5s" style="animation-delay: 0.5s; animation-name: zoomInUp; margin-top: 20px;">
                      <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 b-items__cell">
                        <div class="b-items__cars-one-img">  

                          <?php 
                              if(!empty($user_details->image))
                              {
                          ?>
                            <img  style="height: 215px;width: 275px;" class="img-responsive" src="<?php echo base_url('assets/agent_profile-pic/'.$user_details->image ); ?>" alt="profile_pic">
                          <?php } else { ?>
                            <img style="height: 215px;width: 275px;" class="img-responsive" src="<?php echo base_url('assets/agent_profile-pic/default-avatar.jpg'); ?>" alt="profile_pic">
                          <?php } ?>

                      <table class="table borderless">                        

                        <tbody>
                            <tr>
                              <th>Name:</th>
                              <td><?php echo $user_details->admin_fname." ".$user_details->admin_lname ;?></td>
                            </tr>

                            <tr>
                              <th>Email:</th>
                              <td><?php echo $user_details->admin_email;?></td>
                            </tr>

                            <tr>
                              <th>Phone:</th>
                              <td><?php echo $user_details->admin_phone;?></td>
                            </tr>

                            <tr>
                              <th>City:</th>
                              <td><?php echo $user_details->admin_city;?></td>
                            </tr>

                            <tr>
                              <th>Country:</th>
                              <td><?php echo $user_details->admin_country;?></td>
                            </tr>

                            <tr>
                              <th>Ref Code:</th>
                              <td><?php echo $user_details->agent_code;?></td>
                            </tr>

                        </tbody>

                      </table>

                        </div>

                      </div>
                    </div> 
                    <?php } } ?>      
                </div>  



                </div>               
               
              </div>

            </div>
          </div>

        </div>
      </div>
    </section><!--b-contacts-->
              
						</div>
					</div>
         
    </div>

</div>

 
  </div>
  </div>
<!--b-world-->


<!--b-info-->

<footer id="footer" class="footer-4">
      <?php $this->load->view('includes/footer_menu') ?>
    
</footer>
<!--b-footer--> 
<!--Main--> 

<?php $this->load->view('includes/site_js') ?>

</body>

</html>