
<?php $this->load->view('includes/agent_site_css'); ?>

<style type="text/css">
label
  {
    color: #f33131!important;
  }

.redBackground{
background-color:#dedede;
width:124px; 
height:124px; 
border-radius:8px;
}
input[type=checkbox] {
    margin: 6px 0 0 6px;
    margin-top: 1px\9;
    line-height: normal;

}
input[type=checkbox] {
      display:none;

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
          <h1>Select Your Business Interest</h1>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
        <div class="btc_tittle_right_heading">
          <div class="btc_tittle_right_cont_wrapper">
            <ul>
              <li><a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
              <li>Select Your Business Interest</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="x_about_seg_main_wrapper float_left padding_tb_100">
<form id="interest_form" action="<?php echo base_url('autopart/insert_interest'); ?>"  method="POST" enctype="multipart/form-data">
  
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
        <h4 style="font-weight:bold;">What Kind Of Cars Parts Do You Deal In</h4>
        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - --> 
      </div>
    </div>


    <div class="row" style="margin-top:20px; margin-bottom:20px;">

      <div class="col-md-2 col-sm-12 col-xs-12 text-center" >
        <div style="left:11px; top:1px;">
          <input type="checkbox" name="interest[]" value="Acura" id="check1">
            <label for="check1">
            <div style="border:1px solid #ccc; border-radius:8px; width:125px; height:125px; text-align:center; cursor: pointer;">
             <img src="<?php echo base_url('assets/agent-assets/images/car-logos/1.png')?>"  alt=""/>
            </div>
            </label>
        </div>
          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Acura</div>
      </div>


      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          <input type="checkbox" name="interest[]" value="Audi" id="check2">
          <label for="check2">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/2.png');?>"  alt=""/>
          </div>
          </label>
        </div>
          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Audi</div>
      </div>


      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
       <div style="left:11px; top:1px;">
         <input type="checkbox" name="interest[]" value="BMW" id="check3">
          <label for="check3">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/3.png');?>"  alt=""/>
          </div>
          </label>
           <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;BMW</div>
        </div>        
      </div>


      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Bentley" id="check4">
          <label for="check4">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/4.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Bentley</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Buick" id="check5">
          <label for="check5">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/5.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Buick</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Cadillac" id="check6">
          <label for="check6">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/6.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Cadillac</div>
        </div>
      </div>


    </div>



    <div class="row" style="margin-top:20px; margin-bottom:20px;">

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Chevrolet" id="check7">
          <label for="check7">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/7.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Chevrolet</div>
        </div>
      </div>
      
      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Chrysler" id="check8">
          <label for="check8">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/8.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Chrysler</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Dodge" id="check9">
          <label for="check9">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/9.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Dodge</div>
        </div>
      </div>
      
      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Ford" id="check10">
          <label for="check10">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/10.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Ford</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="GM" id="check11">
          <label for="check11">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/11.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;GM</div>
        </div>
      </div>
      
      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Honda" id="check12">
          <label for="check12">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/12.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Honda</div>
        </div>
      </div>
      
    </div>


    <div class="row" style="margin-top:20px; margin-bottom:20px;">

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Hyundai" id="check13">
          <label for="check13">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/13.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Hyundai</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Ifiniti" id="check14">
          <label for="check14">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/14.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Ifiniti</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Jaguar" id="check15">
          <label for="check15">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/15.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Jaguar</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Jeep" id="check16">
          <label for="check16">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/16.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Jeep</div>
        </div>
      </div>
      
      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Lamborghini" id="check17">
          <label for="check17">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/17.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Lamborghini</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Land Rover" id="check18">
          <label for="check18">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/18.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Land Rover</div>
        </div>
      </div>
     
    </div>


    <div class="row" style="margin-top:20px; margin-bottom:20px;">

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Lexus" id="check19">
          <label for="check19">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/19.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Lexus</div>
        </div>
      </div>

       <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Maserati" id="check20">
          <label for="check20">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/20.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Maserati</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Mazda" id="check21">
          <label for="check21">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/21.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Mazda</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Mercedes" id="check22">
          <label for="check22">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/22.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Mercedes</div>
        </div>
      </div>
     
       <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Mini" id="check23">
          <label for="check23">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/23.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Mini</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Mitusibhi" id="check24">
          <label for="check24">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/24.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Mitusibhi</div>
        </div>
      </div>
     
    </div>


    <div class="row" style="margin-top:20px; margin-bottom:20px;">

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Nissan" id="check25">
          <label for="check25">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/25.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Nissan</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="RAM" id="check26">
          <label for="check26">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/26.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;RAM</div>
        </div>
      </div>

       <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Subaru" id="check27">
          <label for="check27">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/27.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Subaru</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Rolls-Royce" id="check28">
          <label for="check28">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/28.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Rolls-Royce</div>
        </div>
      </div>
     
      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Suzuki" id="check29">
          <label for="check29">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/29.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Suzuki</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Toyota" id="check30">
          <label for="check30">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/30.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Toyota</div>
        </div>
      </div>
            
    </div>


    <div class="row" style="margin-top:20px; margin-bottom:20px;">

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Volkswagen" id="check31">
          <label for="check31">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/31.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Volkswagen</div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 col-xs-12 text-center">
        <div style="left:11px; top:1px;">
          
          <input type="checkbox" name="interest[]" value="Fiat" id="check32">
          <label for="check32">
          <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;">
          <img src="<?php echo base_url('assets/agent-assets/images/car-logos/32.png');?>"  alt=""/>
          </div>
          </label>

          <div style="text-align:left; line-height:22px;">&nbsp;&nbsp;Fiat</div>
        </div>
      </div>
     
    </div>

    
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
        <h4 style="font-weight:bold;">Other Business Opportunities</h4>
        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - --> 
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
        
        <div class="x_slider_form_input_wrapper float_left">
                                <div class="x_slider_select">
                                  <select name="other_interest"  class="myselect" >
                                    <option value="" disabled selected hidden>Interested in</option>
                                    <option value="Buying OEM Car Parts">Buying OEM Car Parts</option>
                                    <option value="Buying Cars">Buying Cars</option>
                                    <option value="Distributorship">Distributorship</option>
                                    <option value="Franchise">Franchise</option>
                                    <option value="Other Interest">Other Interest</option>
                                  </select> <i class="fa fa-flag"></i>
                                </div>
                            
        </div>
        </div>
        
        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:10px;">
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-sec-header">
                <label>
                  <input type="text" name="Specify_interest" placeholder="Please Specify" class="form-control" autocomplete="off">
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:10px;">
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="x_slider_checkbox_bottom float_left">
								<div class="x_slider_checout_right">
									<ul>
										<li>
                      <button class="btn" style="background-color: #ff6600;color: #fdfcfb;">  Submit <i class="fa fa-arrow-right"></i></button> 
                    </li>
									</ul>
								</div>
							</div>
            </div>
          </div>
        </div>
      
    </div>
  </div>
</form>
</div>

<!-- btc team Wrapper End -->

<div class="x_copyr_main_wrapper float_left"> <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
  <div class="container">
    <p>Copyright © 2019 Autohub360 Agent. All rights reserved.</p>
  </div>
</div>

<?php $this->load->view('includes/agent_site_js') ?>
<!-- custom js-->

<script type="text/javascript">

// checkbox background color change
$("input[type='checkbox']").change(function(){
    if($(this).is(":checked")){
        $(this).parent().addClass("redBackground"); 
    }else{
        $(this).parent().removeClass("redBackground");  
    }
});



// interest form submit here
  $(document).on("submit", "#interest_form", function(e){

        e.preventDefault();

        $(this).validate({ 

                         rules: {                             
                                  interest:"required",   
                                  other_interest:"required", 
                                  Specify_interest:"required", 
                                                                                   
                                },

                          messages: {  

                                  interest: {
                                      required: "Required", 
                                  },  

                                  other_interest: {
                                      required: "Required", 
                                  },
                                  Specify_interest: {
                                      required: "Required", 
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
                          // document.getElementById("interest_form").reset();
                          swal("Business Interest Updated Successfully......");
                          window.location.href ='<?php echo base_url('autopart/business_profile'); ?>';

                         // swal({
                         //        title: "Success!",
                         //        text: "User Registered Successfully...",
                         //        type: "success",
                         //        timer: 2000
                         //    }).then(() => {                     
                         //          window.location.href ='<?php echo base_url('agent/otp'); ?>';
                         //        });;  
                        }
                        else 
                        {                       
                          swal("Something went wrong...");
                        }          
                    }

            });
        }     

 }); 

</script>
</body>
</html>