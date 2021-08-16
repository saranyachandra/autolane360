
<?php $this->load->view('includes/agent_site_css'); ?>

<style type="text/css">

        .margn-top-30 {
            margin-top: 20px;
        }

        body {
            background: #fff !important;
        }

        hr {
            margin-top: 6px !important;
            margin-bottom: 6px !important;
        }

        .margn-top-30 {
            margin-top: 20px;
        }

        body {
            background: #fff !important;
        }

        .x_slider_form_input_wrapper textarea {
            width: 520px;
            height: 150px;
            padding-left: 10px;
            border: 1px solid #eeeeee;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
        }

        .x_slider_checout_right li a {
            float: left;
            width: 100%;
            height: 50px;
            line-height: 45px;
            text-align: center;
            background: #ff6600;
            color: #ffffff;
            padding: 0px 15px;
            border: 1px solid transparent;
            text-transform: uppercase;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
        }

        .x_slider_checout_right {
            text-align: center;
            width: 100%;
            padding-top: 30px;
            float: left !important;
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
                        <h1>Buy now Invoice</h1>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
                    <div class="btc_tittle_right_heading">
                        <div class="btc_tittle_right_cont_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
                                <li>Buy now Invoice</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="x_about_seg_main_wrapper float_left padding_tb_20">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12 text-left"
                style="background:#ededed; margin-top:20px; margin-bottom: 20px;">
                <h4 style="font-weight:bold;text-transform: capitalize;">
                    <img src="<?php echo base_url('assets/agent-assets/images/car-logos/1.jpg');?>" width="65" height="50" alt="" />
                    <?php echo $car_detail->car_brand; ?>
                </h4>
            </div>

            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-3 col-sm-12">
                        <div class="x_car_book_left_siderbar_wrapper float_left">
                                <div class="row">
        
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="x_slider_form_main_wrapper float_left x_slider_form_main_wrapper_ccb" style="padding:0 20px; background:#f9f9f9; border:1px solid #f5f5f5;">
        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="x_slider_form_input_wrapper float_left">
                                                        <h3><img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15"
                                                            alt="" /> Your Car Order</h3>
                                                    </div>
                                                
                                                    <div class="x_slider_select" style="line-height:28px; width:100%; font-size:13px; margin-top: 0; ">
                                                        <strong>Car Brand:</strong> <?php echo $car_detail->car_brand." ".$car_detail->car_model; ?><br>
                                                        <strong>Car Year:</strong> <?php echo $car_detail->car_year; ?><br>
                                                        <!-- <strong>Car Trim:</strong><?php echo $car_detail->car_trim;?><br> -->
                                                        <strong>Car Mileage:</strong> <?php echo $car_detail->car_mileage;?><br>
                                                        
                                                    </div>
                                                    <div class="x_slider_form_input_wrapper float_left">
                                                        <h3>Customer Detail</h3>
                                                    </div>
                                                    <div class="x_slider_select" style="line-height:28px; width:100%; font-size:13px;margin-top: 0;  ">
                                                        <strong>Name:</strong> <?php echo $this->session->userdata('cus_fname')." ".$this->session->userdata('cus_lname');?><br>
                                                        <strong>Phone:</strong> <?php echo $this->session->userdata('cus_phone');?><br>
                                                        <strong>Email:</strong> <?php echo $this->session->userdata('cus_email');?><br>
                                                        <strong>Country:</strong> <?php echo $this->session->userdata('cus_country');?><br>
                                                        <strong>State:</strong> <?php echo $this->session->userdata('cus_state');?><br>
                                                    </div>
                                                    <div class="x_slider_form_input_wrapper float_left">
                                                        <h3>Seller Detail</h3>
                                                    </div>
                                                    <div class="x_slider_select" style="line-height:28px; width:100%; font-size:13px;margin-top: 0;  ">
                                                        <strong>AUTOLANE360</strong><br>
                                                        <strong>Phone:</strong> +1832-7163892<br>
                                                        <strong>Whatsapp Video:</strong> +1832-7163892<br>
                                                        <strong>Location:</strong> Houston<br>
                                                        <strong>Country:</strong> USA<br>
                                                    </div>
                                                    
                                                </div>
        
        
        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
        <div class="col-md-9 col-sm-12">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top:15px; margin-bottom:15px;">
                    <h4 style="font-weight:bold;">Autolane 360 Invoice</h4>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" style="color:#333;">
                            <thead>
                                <tr>
                                    <th valign="middle">
                                        <img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15"  alt="" /> Car Name
                                    </th>
                                    <th valign="middle">
                                        <img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15" alt="" /> Car Img
                                    </th>
                                    <th valign="middle">
                                        <img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15" alt="" /> Strip Type
                                    </th>
                                    <th valign="middle">
                                        <img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15"  alt="" /> Description
                                    </th>
                                    <th valign="middle">
                                        <img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15" alt="" /> Payment
                                    </th>
                                </tr>
                            </thead>                                          
                            <tbody>
                                <tr>
                                    <td style="text-transform: capitalize;color:#333; font-weight:bold">
                                        <?php echo $car_detail->car_year." ".$car_detail->car_brand." ".$car_detail->car_model; ?></td>
                                    <td align="center">
                                        <img style="width: 180px" src="<?php echo $car_detail->carpart_img;?>" alt="acura" class="img-fluid img-thumbnail"/><br>
                                    </td>
                                    <td>Complete Stripping</td>
                                    <td style="color:#333;">Custom Shipping<br> 
                                        <strong><?php echo $car_detail->cus_shipping_price;?></strong><br>
                                        <!-- <input type="checkbox"> -->
                                        <span style="color:#333;">Complete Shipping<br> 
                                        <strong><?php echo $car_detail->com_shipping_price;?></strong></span>
                                    </td>
                                    <td style="color:#f60; font-weight: bold;">Total<br>
                                         <?php 
                                            $com = str_replace(array('₦', '₵', '$', '*'),'', $car_detail->com_shipping_price) ;
                                            $cus = str_replace(array('₦', '₵', '$', '*'),'',$car_detail->cus_shipping_price);
                                            $tol = $com + $cus;
                                            echo mb_substr($car_detail->com_shipping_price, 0, 1)." ".$tol;
                                        ?>   
                                    </td>
                                </tr>                              
                            </tbody>
                        </table>
                    </div> 
                </div>
                        <div class="col-md-12 col-sm-12 text-center"  style="margin-top:30px;">
                           <h4 style="font-weight:bold; margin-bottom: 15px;">Bank Info</h4>
                            <hr>
                        </div>
                                <div class="col-md-12 col-sm-12 text-center"  style="margin-top:-6px; margin-bottom: 30px;">
                                    <div class="col-md-6 offset-md-3 col-sm-12 text-center">
                                        <h4 style="font-weight:normal; background:#f00; color: #fff; padding:10px 0; font-size:14px;">PAYMENT DUE  : 15<sup>TH</sup> MARCH</h4>
                                    </div>                                   
                                </div>
                              <div class="col-md-12 col-sm-12" style="margin-top:15px;">
                                <div class="col-md-8 col-sm-8  text-left">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6  text-left">
                                            <h4 style="font-weight:bold; font-size:16px;">
                                            <img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="10" height="15" alt=""/> Nigeria</h4> 
                                        </div>
                                        <div class="col-md-12 col-sm-12 text-left" style="margin:15px 0;">
                                            <p style="font-size:15px; font-weight:bold;">Amount Due: 
                                            <span style="color:#f60;"><?php echo $car_detail->com_shipping_price; ?></span>
                                            </p>
                                        </div>                                   
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12  text-left">
                                            <a href="#">
                                            <img src="<?php echo base_url('assets/agent-assets/images/gtb-logo.jpg');?>" class="img-responsive img-thumbnail" alt=""></a>
                                        </div>
                                        <div class="col-md-9 col-sm-12  text-left">
                                          <p style="line-height:35px;"> <strong style="color:#333;">BANK INFO</strong><br>
                                            Account Name: AUTOLANE360 LTD <br>
                                            Account Number: 43543543543543<br>
                                            Amount: <?php echo $car_detail->com_shipping_price; ?><br><br>
                                          </p>                                      
                                        </div>
                                    </div>
                                </div>
                               
                              </div>
                           
                              <div class="col-md-12 col-sm-12">
                                <div class="x_slider_checkbox float_left" style="font-size:14px;">
                                  <div class="row">
                                    <div class="col-md-6 text-left" style="padding-top:15px;"> <a href="#" style="background-color:#ededed; color:#333; padding:10px 20px; border-radius:5px;"> <i class="fa fa-print"></i> Print</a> </div>
                                  </div>
                                </div>
                                <div class="x_slider_checkbox float_left" style="font-size:14px;">
                                  <div class="row">
                                    <div class="col-md-6 text-left">
                                      <input type="text" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="col-md-6 text-left">
                                      <input type="checkbox" name="cb">
                                      <div class="x_avanticar_btn" style="padding:0; margin-top:8px;"><a href="#" style="background-color:#333; color:#fff; padding:10px 20px; border-radius:5px;"> <i class="fa fa-paper-plane"></i> Send</a> </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="x_slider_checkbox float_left" style="font-size:14px;">Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit facilisi, mi mattis pariatur aliquam pharetra eget.</div>
                              </div>
                        
                    </div>
                </div>


            </div>

          
        </div>


    </div>

    <!-- btc team Wrapper End -->

    <div class="x_copyr_main_wrapper float_left"> <a href="javascript:" id="return-to-top"><i
                class="fa fa-arrow-up"></i></a>
        <div class="container">
            <p>Copyright © 2019 Autohub360 Agent. All rights reserved.</p>
        </div>
    </div>

    <?php $this->load->view('includes/agent_site_js') ?>
    <!-- custom js-->
</body>

</html>