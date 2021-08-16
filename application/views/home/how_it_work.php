
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
h2
{
  font-size:25px!important;
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
          
          <h1 class="page-title">How It Works</h1>

          <ul class="breadcrumbs">
            <li><a href="<?php echo base_url('home/index');?>">Home</a></li>
            <li>How It Works</li>
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
      
              <div class="row">
                  <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="b-contacts__form">
                     
                        <img  class="img-responsive" src="<?php echo base_url('assets/images/banner/how-it-works.png');?>" alt="sliderImg" />
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
<!-- newsfeeds start  here -->

      <div class="page-section">
        <?php $this->load->view('includes/newsfeeds.php'); ?>
      </div>

      <!-- newsfeeds end here -->
<!--b-info-->

<footer id="footer" class="footer-4">
      <?php $this->load->view('includes/footer_menu') ?>
    
</footer>
</div>
<!--b-footer--> 
<!--Main--> 

<?php $this->load->view('includes/site_js') ?>

</body>

</html>