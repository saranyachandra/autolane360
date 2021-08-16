<!-- include css file here -->
<?php $this->load->view('includes/agent_site_css'); ?>

<style type="text/css">
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
        .x_avanticar_btn a {
    display: inline-block;
    position: relative;
    width: 170px;
    height: 50px;
    line-height: 45px;
    text-align: center;
    background: #ff6600;
    color: #ffffff;
    border: 1px solid transparent;
    text-transform: uppercase;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
}
.x_car_offer_heading_listing li {
    width: 15.33% !important;
    text-align: left;
}

.btc_tittle_main_wrapper{
    background:none;
    background-size:cover;
    background-position:center 0;
    background-repeat:no-repeat;
    background-attachment:fixed;
    float:left;
    width:100%;
    height:100%;
    position:relative;
    padding-top:0px;
    padding-bottom:0px;
}
.padding_tb_100{
    padding-top:0px; 
    padding-bottom:0px; 
}

@media (max-width: 991px)
{
.x_car_detail_main_wrapper {
    margin-top: 5px!important;
}
}
@media (max-width: 768px)
{
.x_css_tabs_main_wrapper .nav-tabs .nav-item{
    margin-bottom:0;
    width: 46%;
}
}

</style>
</head>

<body>

    <?php $this->load->view('includes/agentsite_header'); ?>

    <!-- hs Navigation Start -->
  
    <!-- hs Navigation End -->
    <div class="btc_tittle_main_wrapper" style="background:#f6f6f6; background-image: none; padding-top: 10px;">

        <div class="container">
            <div class="row">
               
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <div class="x_car_detail_main_wrapper float_left">
                                <div class="x_css_tabs_wrapper float_left">
                                    <div class="x_car_detail_main_wrapper float_left">
                                        <h3>All Order Cars</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- tab view start here -->

    <div class="btc_tittle_main_wrapper">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="x_car_detail_main_wrapper float_left">
                 <div class="x_css_tabs_wrapper float_left">
                    <div class="x_css_tabs_main_wrapper float_left" style="padding-top:20px;">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#menu1">My Car Order</a>
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link" data-toggle="tab" href="#menu2">Agent Car List Order</a>
                            </li>
                        </ul>                        
                    </div>

    <div class="tab-content">

        <div id="menu1" class="tab-pane active show">
            <div class="container">
                <div class="x_car_detail_main_wrapper float_left">
                    
                    <div class="row">
                       
                        <?php 
                            $i = 1;
                            foreach ($car_detail as  $details) {
                        ?>
                            
                        <div class="col-md-4 col-sm-12 col-lg-4" >
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-top: 10px;">
                                <p style="line-height: 30px; color: #333;" >
                                <span style="font-weight: bold;text-transform: capitalize;">
                                <?php echo $i."  .  "; ?>
                                <?php echo $details->car_year." ".$details->car_make." ".$details->car_model;?>
                                </span><br>
                                
                                <?php echo 'Mileage: '. $details->car_mileage;?><br>
                                Order Ticket: <span style="color:#1079e8;font-weight: bold;"> <?php echo $details->order_ticket;?></span>
                                <br>
                                Status: <span style="color: #157515;font-weight: bold;text-transform: uppercase;"><?php echo $details->car_status;?></span><br>
                               <a style="color: #fff;background-color: #f60;padding: 5px 10px;font-size: 12px;border-radius: 5px;" href="<?php echo base_url('agent/view_track_order_details/'.$details->order_ticket);?>">Click Here To View </a> 
                               </p>
                            </div>
                            <hr>
                        </div>

                        <?php $i++; } ?>

                    </div>

                </div>
            </div>
        </div>

                        <div id="menu2" class="tab-pane fade">
                            <div class="container">
                <div class="x_car_detail_main_wrapper float_left">

                    
                    <div class="row">
                       
                        <?php 
                            $i = 1;
                            foreach ($agent_car_detail as  $details) {
                        ?>
                        <div class="col-md-4  col-lg-4 col-sm-12"> 
                        <div class="row">
                        <div class="col-md-5  col-lg-5 col-sm-12" style="padding-top: 10px;">
                            <img class="img-fluid img-thumbnail"  src=" <?php echo $details->admincar_stockimg; ?>"  alt=""/>
                        </div>    
                        <div class="col-md-7  col-lg-7 col-sm-12" >
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-top: 10px;">
                                <p style="line-height: 25px; color: #333;" >
                                    <span style="font-weight: bold;text-transform: capitalize;">
                                    <?php echo $i."  .  "; ?>
                              
                                    <?php echo $details->car_year." ".$details->car_brand." ".$details->car_model;?>
                                        
                                    </span><br>
                                
                                <?php echo 'Mileage: '.  $details->car_mileage;?><br>
                                Price: <span style="font-weight: bold;"> <?php echo $details->price;?></span>
                                <br>
                                Status: <span style="color: #157515;font-weight: bold;text-transform: uppercase;"><?php echo $details->car_status;?></span><br>
                               <a style="color: #fff;background-color: #f60;padding: 5px 10px;font-size: 12px;border-radius: 5px;" href="<?php echo base_url('agent/common_agent_car_invoice_view/'.$details->carstock_id);?>">Click Here To View</a> 
                               </p>
                            </div>
                            <hr>
                        </div>
                        </div>
                        </div>

                        <?php $i++; } ?>

                    </div>
                
                </div>
            </div>

        </div>

    </div>
          </div>
          </div>
        </div>
        </div>
        </div>
    </div>





    </div>




   <!-- btc team Wrapper Start -->

    <?php $this->load->view('includes/business_partners') ?>
    <!-- custom js-->

    <!-- custom js-->
<?php $this->load->view('includes/agent_site_js') ?>


</body>



</html>