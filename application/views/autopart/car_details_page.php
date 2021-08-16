

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
            <div class="col-md-12 col-sm-12 col-xs-12 text-left"
                style="background:#ededed; margin-top:20px; margin-bottom: 20px;">
                <h4 style="font-weight:bold;text-transform: capitalize;">
                    <img src="<?php echo base_url('assets/agent-assets/images/car-logos/1.jpg');?>" width="65" height="50" alt="" /> 
                    <?php echo $car_details->car_brand; ?>
                </h4>
            </div>

            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-8 col-sm-12">
                    <h5 style="padding-bottom:10px;text-transform: capitalize;">
                        <img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15" alt="" />
                          <?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model; ?>
                    </h5>
                    <h6 style="font-weight:bold; color:#f60;"><i class="fa fa-calendar"></i> 
                        Available from  
                        <?php 
                                $available_from = strtotime($car_details->available_from);
                                $available_to   =  strtotime($car_details->available_to);
                                echo date("M j S",$available_from);
                                echo " To ";
                                echo date("M j S",$available_to);
                        ?>   
                    </h6>
                    <div class="lr_bc_slider_first_wrapper" style="margin-top:15px;">
                        <div class="owl-carousel owl-theme">
                            <?php 
                                foreach ($car_img as $car_imgs) {
                            ?>
                             <div class="item-carousel">
                                <div class="lr_bc_slider_img_wrapper">
                                    <a target="_blank" href="<?php echo $car_imgs->carpart_img;?>" class="fancybox" data-fancybox="group">
                                    <img src="<?php echo $car_imgs->carpart_img;?>" alt="acura1">
                                    </a>
                                </div>
                            </div>
                           
                          
                        <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="lr_bc_slider_first_wrapper">
                                <h5 style="padding-bottom:10px;"><img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15"
                                        alt="" /> Car Detail</h5>
                                <div class="row" style="margin-bottom:7px;">
                                    <div class="col-md-6 col-sm-12"><span style="color:#333;">VIN</span></div>
                                    <div class="col-md-6 col-sm-12"> <?php echo $car_details->vin_number; ?></div>
                                </div>
                                <div class="row" style="margin-bottom:7px;">
                                    <div class="col-md-6 col-sm-12"><span style="color:#333;">Mileage</span></div>
                                    <div class="col-md-6 col-sm-12"> <?php echo $car_details->car_mileage; ?></div>
                                </div>
                                <div class="row" style="margin-bottom:7px;">
                                    <div class="col-md-6 col-sm-12"><span style="color:#333;">Primary Damage</span>
                                    </div>
                                    <div class="col-md-6 col-sm-12"> <?php echo $car_details->primary_damage; ?></div>
                                </div>
                                <div class="row" style="margin-bottom:7px;">
                                    <div class="col-md-6 col-sm-12"><span style="color:#333;">Secondary Damage</span>
                                    </div>
                                    <div class="col-md-6 col-sm-12"> <?php echo $car_details->secondary_damage; ?></div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="lr_bc_slider_first_wrapper">
                                <h5 style="padding-bottom:10px;"><img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15"
                                        alt="" /> Recoverable Parts</h5>
                                <div class="row" style="margin-bottom:7px;">
                                    <div class="col-md-12 col-sm-12" style="line-height:28px;">
                                        <?php
                                            $string = $car_details->recoverable_part;                                           
                                            echo '<i class="fa fa-check" style="color:#f60"></i>'.str_replace(",", '<br>  <i class="fa fa-check" style="color:#f60"></i>', $string);                                            
                                        ?>                                    
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="lr_bc_slider_first_wrapper">
                                <h5 style="padding-bottom:10px;">
                                    <img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15"
                                        alt="" />Other Recoverable Parts
                                </h5>
                                <div class="row" style="margin-bottom:7px;">
                                    <div class="col-md-12 col-sm-12" style="line-height:28px;">
                                        <?php 
                                            $string = $car_details->other_recoverable_part;                                           
                                            echo '<i class="fa fa-check" style="color:#f60"></i>'.str_replace(",", '<br>  <i class="fa fa-check" style="color:#f60"></i>', $string);                                            
                                        ?>                                    
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                </div>


            </div>

            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-8 col-sm-12">
                    <h5 style="padding-bottom:20px;"><img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15" alt="" />
                        Stripping Information</h5>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 text-center">
                            <h6 style="font-weight:bold;">Complete Stripping</h6>
                            <img src="<?php echo base_url('assets/agent-assets/images/strip-1.jpg');?>" class="img-fluid img-thumbnail" style="margin-top:15px;"
                                alt="" />
                            <span style="font-size:13px; color:#333;"><input type="checkbox"> I Want Complete Stripping
                                <br>(Set as Default)</span>
                            <span style="font-size:10px; color:#333; font-style: italic;"><br>Entire Car Is Stripped
                                Down Tagged And Shipped To You</span>
                        </div>
                        <div class="col-md-6 col-sm-12  text-center">
                            <h6 style="font-weight:bold;">Custom Stripping</h6>
                            <img src="<?php echo base_url('assets/agent-assets/images/strip-2.jpg');?>" class="img-fluid img-thumbnail" style="margin-top:15px;"
                                alt="" />
                            <span style="font-size:13px; color:#333;"><input type="checkbox"> I Want Custom Stripping
                                <br>(Set as Default)</span>
                            <span style="font-size:10px; color:#333; font-style: italic;"><br>The Engine Compartment Is
                                Preserved With Dashboard Attached</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">

                    <h5 style="padding-top:20px;padding-bottom:20px;"><img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13"
                            height="15" alt="" />
                        Hold for me Policy</h5>
                    <div class="row">
                        <div class="col-md-6 col-sm-12"><span style="font-size:13px; color:#333;"><input
                                    type="checkbox"> 24 Hours Non-Refundable Hold Deposit
                                <br><strong>Nigeria - N50,000</strong></span></div>
                        <div class="col-md-6 col-sm-12"><span style="font-size:13px; color:#333;">24 Hours
                                Non-Refundable Hold Deposit
                                <br><strong>Ghana - C122</strong></span></div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 col-sm-12"><span style="font-size:13px; color:#333;"><input
                                    type="checkbox"> 3 Days Non-Refundable Hold Deposit
                                <br><strong>Nigeria - N150,000</strong></span></div>
                        <div class="col-md-6 col-sm-12"><span style="font-size:13px; color:#333;">3 Days Non-Refundable
                                Hold Deposit
                                <br><strong>Ghana - C368</strong></span></div>
                    </div>
                    <hr>
                    <p>All hold payment /deposit is deducted from the total cost at final payment,
                        All hold payment not completed at the end of the hold period cannot be refunded.</p>
                </div>

            </div>

            <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12 col-sm-12">
                    <h5 style="padding-bottom:20px;"><img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15" alt="" /> Sale Information</h5>
                       
                    <div class="row">
                        <div class="col-md-5 col-sm-12 text-center">
                            <div class="col-md-12 col-sm-12 text-center"
                                style="background:#e4edfc; padding-top: 15px; padding-bottom: 15px;">
                                <h6 style="font-weight:bold;"><?php echo $car_details->country; ?> Custom Pay </h6>
                               
                                <div class="col-md-12 col-sm-12 text-left" style="margin-top:10px; color:#f60;">
                                    <span style="font-size:15px; font-weight:bold;">
                                        <input type="checkbox" id="Complete" > Complete Stripping: <?php echo $car_details->com_shipping_price; ?>
                                    </span>
                                </div>
                                <div class="col-md-12 col-sm-12 text-left" style="margin-top:10px; color:#f60;">
                                    <span style="font-size:15px; font-weight:bold;">
                                        <input type="checkbox"> Custom Stripping: <?php echo $car_details->cus_shipping_price; ?>
                                    </span><br>
                                    <span style="font-size:12px;">(Recommended)</span>
                                </div>
                                <div class="col-md-12 col-sm-12 text-left" style="margin-top:10px; color:#f60;">
                                    <span style="font-size:20px; font-weight:bold;">Total: 
                                        <?php 
                                            $com = str_replace(array('₦', '₵', '$', '*'),'', $car_details->com_shipping_price) ;
                                            $cus = str_replace(array('₦', '₵', '$', '*'),'',$car_details->cus_shipping_price);
                                            $tol = $com + $cus;
                                            echo mb_substr($car_details->com_shipping_price, 0, 1)." ".$tol;
                                        ?>                                        
                                    </span><br>
                                    <span style="font-size:12px;">Price Includes Shipping</span>
                                </div>                                

                            </div>
                        </div>                      

                        <div class="col-md-7 col-sm-12">
                            <h5 style="padding-bottom:20px;">
                                <img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15" alt="" />
                                Buy Now Policy
                            </h5>
                            <p>All invoice are paid directly to <span style="color:#f60; font-weight:bold;">AUTOLANE360 COMPANY
                                    ACCOUNT</span> with our partner banks in Nigeria
                                and Ghana. <br>
                                Customer get an email confirming payment and stripping begins within a week of payment.<br>
                                International shipping to all client is done twice monthly. <br>
                                Shipping time is within 35-45 days depneding on the partner shipping company schedules.</p>
                        </div>

                    </div>
                </div>                
            </div>

            <div class="row" style="margin-top:20px;">
                <div class="col-md-12 col-sm-12">
                    <h5 style="padding-bottom:20px;">
                        <img src="<?php echo base_url('assets/agent-assets/images/v-line.png');?>" width="13" height="15" alt="" />
                        Shipping 7 Clearing Information
                    </h5>
                    <p>Depending on shipping company arrangement all shipping cost is included in total cost.<br>
                        At a mutual arrangement with customer clearing cost can also be taken care of under special
                        arrangment.</p>
                </div>
            </div> 


        </div>

        <div class="col-md-12 col-sm-12 text-center" style="margin-bottom:15px; margin-top: 5px;">
            <?php 
                if($car_details->status == 'booking')
                {
                    echo '<a href="'.base_url('autopart/view_invoice/'.$car_details->car_part_id).'" style="background-color:#E76710; color:#fff; padding:10px 10px; border-radius:5px; font-size: 14px;"> <i class="fa fa-cart"></i>Buy Now</a>';
                }
                else
                {
                    echo '<a href="'.base_url('autopart/insert_buynow/'.$car_details->car_part_id).'" style="background-color:#E76710; color:#fff; padding:10px 10px; border-radius:5px; font-size: 14px;"> <i class="fa fa-cart"></i>Buy Now</a>';
                }

            ?>            

            <a href="#" style="background-color:#05478C; color:#fff; padding:10px 10px; border-radius:5px; font-size: 14px;">
                <i class="fa fa-thumbs-up"></i> Hold For Me
            </a>
        </div>

    </div>

    <!-- btc team Wrapper End -->

    <div class="x_copyr_main_wrapper float_left"> <a href="javascript:" id="return-to-top"><i
                class="fa fa-arrow-up"></i></a>
        <div class="container">
            <p>Copyright © 2019 Autolane360 Agent. All rights reserved.</p>
        </div>
    </div>

    <?php $this->load->view('includes/agent_site_js') ?>
    <!-- custom js-->

<script type="text/javascript">

    
</script>

</body>

</html>