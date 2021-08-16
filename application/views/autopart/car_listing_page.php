

<?php $this->load->view('includes/agent_site_css'); ?>
<style type="text/css">

.margn-top-30 {
	margin-top: 20px;
}
body {
	background: #fff!important;
}

hr
{
	margin-top:6px!important;
	margin-bottom:6px!important;
}
</style>
</head>

<body>

<?php $this->load->view('includes/agentsite_header'); ?>
<!-- hs Navigation End -->
<div class="btc_tittle_main_wrapper">
  <div class="btc_tittle_img_overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
        <div class="btc_tittle_left_heading">
          <h1>Car Listed for Stripping</h1>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
        <div class="btc_tittle_right_heading">
          <div class="btc_tittle_right_cont_wrapper">
            <ul>
              <li><a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
              <li>Car Listed for Stripping</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="x_about_seg_main_wrapper float_left padding_tb_20">
  <div class="container">
   
    <div class="row"  style="margin-top:20px;">
      <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="x_slider_select">
          <select  id="carbrand" name="car_brand"  class="myselect" >
            <option value="" disabled selected hidden> Choose Car Brand </option>
            <option values="acura">Acura </option>
            <option values="audi">Audi </option>
            <option values="bentley">Bentley</option>
            <option values="bmw">BMW</option>
            <option values="cadillac">Cadillac</option>
            <option values="buick">Buick</option>
            <option values="chevrolet">Chevrolet </option>
            <option values="chrysler">Chrysler</option>
            <option values="dodge">Dodge </option>
            <option values="fiat">Fiat</option>
            <option values="ford">Ford </option>
            <option values="gmc">GMC </option>
            <option values="honda">Honda </option>
            <option values="hyundai">Hyundai </option>
            <option values="infiniti">Infiniti </option>
            <option values="jaguar">Jaguar </option>
            <option values="jeep">Jeep </option>
            <option values="kia">Kia </option>
            <option values="lamborghini">Lamborghini </option>
            <option values="lexus">Lexus </option>
            <option values="lincoln">Lincoln </option>
            <option values="maserati">Maserati </option>
            <option values="mazda">Mazda </option>
            <option values="mcLaren">McLaren </option>
            <option values="mercedes-Benz">Mercedes-Benz </option>
            <option values="mini">Mini </option>
            <option values="mitsubishi">Mitsubishi </option>
            <option values="nissan">Nissan </option>
            <option values="porsche">Porsche </option>
            <option values="rolls-royce">Rolls-Royce </option>
            <option values="scion">Scion </option>
            <option values="smart">Smart </option>
            <option values="subaru">Subaru </option>
            <option values="toyota">Toyota </option>
            <option values="volkswagen">Volkswagen </option>
            <option values="volvo">Volvo </option>            
          </select>
        </div>
      </div>
    </div>


    <div class="row" style="margin-top:10px; margin-bottom:10px;">
    
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
      <div class="col-md-12 col-sm-12 col-xs-12 text-left" style="background:#ededed; margin-bottom:20px;"> <h4 style="font-weight:bold;">
        <img src="<?php echo base_url('assets/agent-assets/images/car-logos/1.jpg');?>" width="65" height="50" alt=""/> All Car Part Here</h4>
      </div>
      <div class="row" style="margin-bottom:20px;">
        <?php 
          foreach ($car_detail as $details) {
           
        ?>
          <div class="col-md-3 col-sm-12" style="margin-bottom:20px;">
            <div class="product" style="border:1px solid #ddd;">
                          
              <a href="#"><img src="<?php echo $details->carpart_img;?>" class="img-responsive img-thumbnail" alt=""></a>
                        
              <div class="product-description">
                
                <h5 class="product-name" style="font-size:13px; margin-top:10px; margin-bottom:10px;text-transform: capitalize;">
                  <a href="#">
                    <?php echo $details->car_year." ".$details->car_brand." ".$details->car_model;?>
                  </a>
                </h5>
                
                <div class="pricing-area">
                  
                  <div class="product-price" style="font-size:13px;">
                    Complete Shipping: <span style="color:#f60;"><?php echo $details->com_shipping_price;?></span>
                  </div>
                  <div class="product-price" style="font-size:13px;">
                    Custom Shipping: <span style="color:#f60;"><?php echo $details->cus_shipping_price;?></span>
                  </div>
                  
                </div>
                <div class="model-loc">
                  <ul>
                    
                    <li><span>Location- </span><?php echo $details->car_location;?></li>
                    <li style="text-align:center;"><span style="font-size:11px!important; color:#333; text-transform:none; margin-top:10px;"><em>Price Includes Shipping And Clearing</em></span></li>
                    
                  </ul>
                </div>
                
                </div>
              <div class="product-description" style="background-color:#d2ddff;">
                <div class="model-info text-center" style="background:#f60; color:#fff; padding:7px 0;">
                  <a href="<?php echo base_url('Autopart/car_details_page/'.$details->car_part_id);?>" style="color:#fff; font-weight:bold;">View Details</a>
                </div>
              </div>
             
              </div>
              
          </div>

        <?php } ?>

      </div>
       
    </div>
  
  </div>
</div>

<!-- btc team Wrapper End -->

<div class="x_copyr_main_wrapper float_left"> <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
  <div class="container">
    <p>Copyright © 2019 Autolane360 Agent. All rights reserved.</p>
  </div>
</div>

<?php $this->load->view('includes/agent_site_js') ?>
<!-- custom js-->

<script type="text/javascript">

  $("#carbrand").select2();
 


var base_url = '<?php echo base_url() ?>'; //form submited

  $(document).ready(function(){

   $(document).on("change", "#carbrand", function(e){

        e.preventDefault();         
        
        var brand_name = $('#carbrand').val();

        window.location.href = base_url+'Autopart/filter_brand_name/'+brand_name;
      });
    });


</script>


</body>
</html>