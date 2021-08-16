
<!-- include css file here -->
<?php $this->load->view('includes/agent_site_css'); ?>

    <style type="text/css">
       
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


<body>
    
     <!-- hs Navigation Start -->
    <?php $this->load->view('includes/agentsite_header'); ?>
    <!-- hs Navigation End -->

    <div class="btc_tittle_main_wrapper">
        <div class="btc_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
                    <div class="btc_tittle_left_heading">
                        <h1>Enter Ticket Information</h1>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
                    <div class="btc_tittle_right_heading">
                        <div class="btc_tittle_right_cont_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i>
                                </li>
                                <li>Enter Ticket Information</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="x_about_seg_main_wrapper float_left padding_tb_100">
        <div class="container">
            <div class="row">
                <div class="row flex-row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="margin-bottom:20px;">
                        <div class="col-md-12">
                            <img src="<?php echo base_url('assets/agent-assets/images/nm-1.jpg');?>" alt="car" class="img-responsive img-thumbnail">
                        </div>
                       <!--  <div class="col-md-12" style="margin-top:20px;">
                            <div class="x_slider_form_input_wrapper float_left">
                                <div style="font-size:18px; color:#333; font-weight:bold;">
                                    2016 Toyota 4Runner
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="margin-bottom:20px;">
                        <div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn" style="background:#f8f8f8; padding-top: 10px;">
                            <div class="row">
                                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;">
                                    <div class="x_slider_form_input_wrapper float_left">
                                        <h3>Enter Your Ticket Number Here</h3>
                                        <input type="text" placeholder="Enter Ticket Number">
                                    </div>                                    
                                </div>
                                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;">
                                    <div class="x_slider_form_input_wrapper float_left">
                                        <h3>Enter Email or Phone Number</h3>
                                        <input type="text" placeholder="Enter Phone or Email">
                                    </div>                                    
                                </div>                               
                            </div>
                        </div>
                       <div class="col-md-12">
                            <div class="x_slider_checkbox_bottom float_left">
                                <div class="x_slider_checout_right">
                                    <ul>
                                        <li><a href="#">Done <i class="fa fa-check"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- btc team Wrapper End -->

    <!--js Start-->
    <!-- xs offer car tabs Start -->
        <?php $this->load->view('includes/business_partners') ?>
    <!-- btc team Wrapper Start -->

  <!-- custom js-->
<?php $this->load->view('includes/agent_site_js') ?>

</body>



</html>