<!-- import css files here -->
<?php $this->load->view('includes/site_css') ?>
<style type="text/css">
#mask {
	position: absolute;
	left: 0;
	top: 0;
	z-index: 9000;
	background-color: #000;
	display: none;
}
#boxes .window {
	position: absolute;
	left: 0;
	top: 0;
	width: 440px;
	height: 200px;
	display: none;
	z-index: 9999;
	padding: 20px;
	border-radius: 15px;
	text-align: center;
}
#boxes #dialog {
	width: 450px;
	height: 300px;
	padding: 10px;
	background-color: #ffffff;
	font-family: 'Segoe UI Light', sans-serif;
	font-size: 15pt;
}
select.m-select {
	width: 125px;
	padding: 12px 0 12px 20px;
	border: 1px solid #eeeeee;
	border-radius: 30px;
	font: 400 13px 'Open Sans', sans-serif;
	background: transparent;
	-webkit-appearance: none;
	-moz-appearance: none;
	-ms-appearance: none;
	appearance: none!important;
}
.s-form select {
	width: 100%!important;
	margin-bottom: 10px;
	text-transform: uppercase;
	font: 400 10px 'Open Sans', sans-serif!important;
}
.tooltip-inner {
	background-color: red !important;
	color: #color;
}
.tooltip.top .tooltip-arrow {
	border-top-color: #00acd6;
}
.b-items__aside-main-body-item label a {
	color: #000;
}
.b-items__aside-main-body-item label {
	display: block;
	/*text-transform: uppercase;*/
	margin-bottom: 0px;
	font: 700 13px 'Open Sans', sans-serif;
	text-align: left;
}
.b-items__aside-main-body-item {
	text-align: left;
	margin-bottom: 0px!important;
}
h2 {
	font-size: 25px!important;
}
</style>
</head><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124317054-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124317054-1');
</script>
<!-- register model popup -->
<body>

  <div id="loader">
    <div class="box loading"></div>
  </div>

  <!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

  <div id="wrapper" class="wrapper-container">

    <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

    <nav id="mobile-advanced" class="mobile-advanced"></nav>

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    <header id="header" class="header-4">
      
        <?php $this->load->view('includes/header_menu') ?>

    </header>
<!--b-nav-->

<div class="breadcrumbs-wrap" data-bg="<?=base_url()?>assets/images/1920x200_img1.jpg" style="background-image: url('<?=base_url()?>assets/images/1920x200_img1.jpg')">
  <div class="container">
    <h1 class="page-title">About Us</h1>
    <ul class="breadcrumbs">
      <li><a href="<?php echo base_url('home/index');?>">Home</a></li>
      <li>About Us</li>
    </ul>
  </div>
</div>
<!--b-slider-->
<div class="container">
  <div class="row">
    <div class="col-md-10 col-sm-10"> 
      <!-- <section>
  <div id="carousel" class="slide carousel carousel-fade">
    <div class="carousel-inner">
      <div class="item active"> 
        <img src="<?php echo base_url('assets/images/backgrounds/6.jpg');?>" alt="sliderImg" />
      </div>
      
    </div>
   
</section> -->
      
      <div class="b-items">
        <div class="col-lg-12 col-sm-8 col-xs-12">
          <div class="row m-border">
            <section style="padding:30px 0;">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="b-contacts__form">
                    <div class="flex-row">
                      <div style="background-color:#f60; width:2%; height:30px; line-height:30px;" class="col-md-1 col-sm-1 col-xs-1"></div>
                      <div class="col-md-10 col-sm-10 col-xs-10" style="width:83.33333333333334%!important; float:inherit!important;">
                        <h3 class="section-title"> About Us</h3>
                      </div>
                    </div>
                    <?php foreach ($about_us_detail as $details) {
                ?>
                    <h3 class="s-titleDet" style="font-size: 20px;"> <?php echo $details->about_title; ?>  </h3>
                    <p> <?php echo $details->about_text; ?> </p>
                    <?php } ?>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 ">
                  <div class="b-contacts__address">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="b-contacts__address-hours">
                        <h2 class="s-titleDet wow zoomInUp" data-wow-delay="0.5s">Contact Our Local Representatives</h2>
                        <div class="b-contacts__address-hours-main wow zoomInUp" data-wow-delay="0.5s">
                          <div class="row">
                            <div class="row" style="margin-bottom:15px;">
                              <div class="col-md-12 col-xs-12">
                                <div class="col-md-3 col-xs-12"> <img src="<?php echo base_url('assets/images/flags/us-flag.png');?>" class="img-responsive" alt=""/> </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                              <h5>Phone Call</h5>
                              <p><span class="fa fa-phone"></span> USA +1 - 210-907-6887</p>
                            </div>
                            <div class="col-md-6 col-xs-12">
                              <h5>Email</h5>
                              <p><span class="fa fa-envelope"></span> auto.sales@autolane360.com</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="b-contacts__address-info">
                      <div class="col-md-12 col-xs-12">
                        <div class="row">
                          <div class="col-md-4 col-xs-12"><img src="<?php echo base_url('assets/images/flags/nigeria-flag.png');?>" class="img-responsive" alt=""/> </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-xs-12" style="padding-top: 15px;">
                        <h2 class="s-titleDet wow zoomInUp" style="font-size:18px!important;" data-wow-delay="0.5s">Local Representative Contacts (Nigeria) </h2>
                      </div>
                      <div class="col-md-12 col-xs-12">
                        <address class="b-contacts__address-info-main wow zoomInUp" data-wow-delay="0.5s">
                        <div class="b-contacts__address-info-main-item">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12"> Lagos </div>
                            <div class="col-lg-6 col-md-6 col-xs-12"> <em>07019155814</em> </div>
                          </div>
                        </div>
                        <div class="b-contacts__address-info-main-item">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12"> Abuja </div>
                            <div class="col-lg-6 col-md-6 col-xs-12"> <em>07061607374</em> </div>
                          </div>
                        </div>
                        <div class="b-contacts__address-info-main-item">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12"> Port-Harcourt </div>
                            <div class="col-lg-6 col-md-6 col-xs-12"> <em>07033357048</em> </div>
                          </div>
                        </div>
                        <div class="b-contacts__address-info-main-item">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12"> Kano </div>
                            <div class="col-lg-6 col-md-6 col-xs-12"> <em>08053827362</em> </div>
                          </div>
                        </div>
                        <div class="b-contacts__address-info-main-item">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12"> Owerri </div>
                            <div class="col-lg-6 col-md-6 col-xs-12"> <em>08181981662</em> </div>
                          </div>
                        </div>
                        </address>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!--b-contacts--> 
            
          </div>
        </div>
      </div>
    </div>

   

  </div>
</div>
<!--b-world--> 
  <!-- newsfeeds start  here -->

      <div class="page-section">
        <?php $this->load->view('includes/newsfeeds.php'); ?>
      </div>

      <!-- newsfeeds end here -->

   

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

     <footer id="footer" class="footer-4">

      <?php $this->load->view('includes/footer_menu') ?>
      
    </footer>
    
</div>
<!--b-footer--> 
<!--Main-->

<?php $this->load->view('includes/site_js') ?>
</body>
</html>