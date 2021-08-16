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
.padding_tb_100{
     padding-top:0px; 
     padding-bottom:0px; 
}

.car_detail h3{
    font-size:24px;
    font-weight:800;
    text-transform:uppercase;
    padding-bottom:10px;
}

.car_detail span{
    color:#ff6600;
    padding-left:0px;
}
.car_detail_other p{
    color:#111111;
    text-transform:uppercase;
    font-size:18px;
    display:inline-block;
    line-height: 13px;
    font-weight:900;
    font-style:italic;
    position:relative;
}
.car_detail_other h3{
    font-family: 'Lato', sans-serif;
    font-size:30px;
    color:#ff6600;
    font-weight:800;
    line-height: 50px;
    display:inline-block;
    font-style:italic;
}
.car_detail_other span{
    color:#ff6600;
    padding-left:10px;
}
.x_avanticar_btn{
    margin-top:20px;
    padding-bottom: 60px;
}

@media (max-width:768px)
{

    .x_car_offer_heading_listing li{
    width:100%;
    text-align: left;
}
.x_car_offer_heading_listing li a{
    text-align:left;
    padding-left:20px;
}
.x_car_book_left_siderbar_wrapper {
         padding-top:0px; 
    }
.x_car_detail_main_wrapper{
        margin-top:0px;
    }
.x_css_tabs_main_wrapper .nav-tabs .nav-item{
    margin-bottom:0;
    width: 32%;
}

}


</style>
</head>

<body>

  <?php $this->load->view('includes/agentsite_header'); ?>

    <div class="btc_tittle_main_wrapper" style="background:#f6f6f6; background-image: none; padding-top: 10px;">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('agent/landing_page');?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('agent/track_order');?>">Back</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="x_car_book_left_siderbar_wrapper float_left">
                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="x_slider_form_main_wrapper float_left x_slider_form_main_wrapper_ccb" style="padding:0 20px;">

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="x_slider_form_input_wrapper float_left">
                                                <h3>Your Car Order</h3>
                                            </div>
                                           <!--  <div class="x_slider_form_input_wrapper float_left">
                                                <img src="<?php echo base_url('assets/images/nm-1.jpg');?>" class="img-responsive img-thumbnail" />
                                            </div> -->
                                            <div class="x_slider_select" style="line-height:28px; width:100%; font-size:13px; margin-top: 0; ">
                                                <strong>Car Brand:</strong> <?php echo $order_details->car_make." ".$order_details->car_model." ".$order_details->car_year; ?><br>
                                                <strong>Car Year:</strong> <?php echo $order_details->car_year; ?><br>
                                                <strong>Car Trim:</strong> <?php echo $order_details->car_trim; ?><br>
                                                <strong>Car Mileage:</strong> <?php echo $order_details->car_mileage; ?><br>
                                                <strong>Budget:</strong> <?php echo $order_details->car_budget; ?><br>
                                                <strong>Order Ticket: <?php echo $order_details->order_ticket; ?></strong><br>
                                            </div>
                                            <div class="x_slider_form_input_wrapper float_left">
                                                <h3>Customer Detail</h3>
                                            </div>
                                            <div class="x_slider_select" style="line-height:28px; width:100%; font-size:13px;margin-top: 0;  ">
                                                <strong>Name:</strong> <?php echo $agent_detail->f_name." ".$agent_detail->l_name; ?><br>
                                                <strong>Phone:</strong> <?php echo $agent_detail->phone_no; ?><br>
                                                <strong>Email:</strong> <?php echo $agent_detail->email;?><br>
                                                <strong>Country:</strong> <?php echo $agent_detail->cus_country;?><br>
                                                <strong>State:</strong> <?php echo $agent_detail->cus_state;?><br>
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
                                            <div class="x_slider_form_input_wrapper float_left">
                                                <h3>Agent Info</h3>
                                            </div>
                                            <div class="x_slider_select" style="line-height:28px; width:100%; font-size:13px;margin-top: 0;  ">
                                                <strong>Code:</strong> <?php echo $agent_detail->agent_code;?><br>
                                                <strong>Name:</strong> <?php echo $agent_detail->admin_fname." ".$agent_detail->admin_lname;?><br>
                                                <strong>Phone:</strong> <?php echo $agent_detail->admin_phone;?><br>
                                                <strong>Country:</strong> <?php echo $agent_detail->admin_country;?><br>
                                                <strong>City:</strong> <?php echo $agent_detail->admin_city;?><br>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">

                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="x_car_detail_main_wrapper float_left">
                                <div class="x_css_tabs_wrapper float_left">
                                    <div class="x_css_tabs_main_wrapper float_left" style="padding-top:0;">
                                        
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="tab" href="#home"> CAR #1<br>STK
                                                    # 8934567
                                                </a>
                                            </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu1">CAR
                                                    #2<br>STK # 8932345</a>
                                            </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu2">CAR
                                                    #3<br>STK # 7845670</a>
                                            </li>
                                        </ul>                        
                                    </div>

                                    <div class="tab-content">

                                    <?php 
                                        foreach ($car_detail as $car_details) {
                                            if($car_details->car_number == "car_1")
                                            {

                                          
                                    ?>
                                        <div id="home" class="tab-pane active show">
                                            <div class="x_car_detail_main_wrapper float_left" style="margin-top:25px;">
                                                <div class="lr_bc_slider_first_wrapper">
                                                    <div class="owl-carousel owl-theme">
                                                         
                                                        <?php 
                                                            foreach (json_decode($car_details->admincar_stockimg) as  $detail) {
                                                        ?>
                                                        <div class="item">
                                                            <div class="lr_bc_slider_img_wrapper">
                                                                <img src="<?php echo $detail->url;?>" alt="fresh_food_img">
                                                            </div>
                                                        </div>

                                                        <?php } ?>

                                                    </div>
                                                </div>
                                                <div class="x_car_offer_heading x_car_offer_heading_listing float_left x_car_offer_heading_inner_car_names x_car_offer_heading_inner_car_names2" style="margin-top:15px;">

                                                        <ul >
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-15.png');?>">
                                                                    &nbsp;<span style="color:#333;">Car Source: <?php echo $car_details->category;?></span></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-16.png');?>">
                                                                    &nbsp;<span style="color:#333;">Car Condition: <?php echo $car_details->car_condition;?></span></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-17.png');?>">
                                                                    &nbsp;<span style="color:#333;">Car Location: <?php echo $car_details->car_location;?></span></a>
                                                            </li>                                                           
                                                        </ul>                                                       
                                                </div>
                                         
                                                
                                                <div class="x_car_detail_slider_bottom_cont float_left">
                                                    <div class="row">
                                                    <div class="car_detail col-md-9 col-lg-9 col-sm-12 ">

                                                        <h3><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model; ?></h3>

                                                        <span>AVAILABLE FROM
                                                            <span style="font-weight:bold;">
                                                            <?php 
                                                                $available_from = strtotime($car_details->available_from);
                                                                $available_to =  strtotime($car_details->available_to);
                                                                echo date("M j S",$available_from);
                                                                echo " To ";
                                                                echo date("M j S",$available_to);
                                                            ?>    
                                                            
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="car_detail_other col-md-3 col-lg-3 col-sm-12 ">
                                                        <h3 style="font-style:normal;">

                                                            <?php 
                                                               if($car_details->price != null)
                                                                { 
                                                                  $price = $car_details->price;
                                                                  $words = preg_replace('/\d+/', '', $price );
                                                                  $price_numbers = preg_replace('/[^0-9]/', '', $price);

                                                                   if($price_numbers == 0 )
                                                                    {
                                                                      echo " ";
                                                                    }
                                                                    else
                                                                     {
                                                                        echo $words.' '.number_format($price_numbers);
                                                                      }
                                                                }  
                                                            ?>  
                                                        </h3>
                                                        <br>
                                                        <p style="text-transform:none;font-style:normal;">
                                                            Available for
                                                            <?php 
                                                                $available_from = strtotime($car_details->available_from);
                                                                $available_to =  strtotime($car_details->available_to);
                                                               
                                                                echo (($available_to - $available_from)/60/60/24).'  Days '; 
                                                            ?>    
                                                        </p>

                                                    </div>
                                                    </div>
                                                    <div class="x_avanticar_btn float_right" style="padding-bottom:10px;">
                                                        <ul>
                                                            <li>
                                                                <?php 
                                                                    if($car_details->customer_status == 'booking')
                                                                    {
                                                                        echo ' <a href="'.base_url('agent/car_invoice_view/'.$car_details->carstock_id).'">Buy Now </a> ';
                                                                    }
                                                                    else
                                                                    {
                                                                        echo ' <a href="'.base_url('agent/car_invoice/'.$car_details->carstock_id).'">Buy Now <i class="fa fa-arrow-right"></i></a> ';
                                                                    }
                                                                ?>
                                                               
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="x_slider_form_input_wrapper float_left">
                                                        <h3>Vehicle Specification</h3>
                                                    </div>
                                                    <div class="x_car_offer_heading x_car_offer_heading_listing float_left x_car_offer_heading_inner_car_names x_car_offer_heading_inner_car_names2"
                                                        style="margin-top:0;">

                                                        <ul class="">
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-1.png');?>" />
                                                                    &nbsp;Mileage: <?php echo $car_details->car_mileage;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-2.png');?>" />
                                                                    &nbsp;Drive: <?php echo $car_details->Drive_type;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-3.png');?>" />
                                                                    &nbsp;Engine: <?php echo $car_details->engine;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-4.png');?>" />
                                                                    &nbsp;Transmission: <?php echo $car_details->transmission;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-5.png');?>" />
                                                                    &nbsp;Fuel: <?php echo $car_details->Fuel_type;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-6.png');?>" />
                                                                    &nbsp;MPG: <?php echo $car_details->car_mpg;?></a>
                                                            </li>

                                                        </ul>
                                                        <ul>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-9.png');?>" />
                                                                    &nbsp;Exterior Color: <?php echo $car_details->exterior_color;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-10.png');?>" />
                                                                    &nbsp;Interior Color: <?php echo $car_details->interior_color;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-11.png');?>" />
                                                                    &nbsp;Vehicle Class: <?php echo $car_details->vehicle_class;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-12.png');?>" />
                                                                    &nbsp;Maufacturer: <?php echo $car_details->manufactured;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-13.png');?>" />
                                                                    &nbsp;VIN: <?php echo $car_details->vin_status;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-14.png');?>" />
                                                                    &nbsp;Keys: <?php echo $car_details->car_keys;?></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="x_car_detail_slider_bottom_cont_center float_left">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <p style="line-height:35px;">
                                                                    <strong  style="color:#333;">DAMAGE</strong><br>
                                                                    Primary Damage: <?php echo $car_details->primary_damage;?> <br>
                                                                    Secondary Damage: <?php echo $car_details->secondary_damage;?><br>

                                                                </p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p style="line-height:35px;">
                                                                    <strong  style="color:#333;">ESTIMATED CLEARING COST</strong><br>
                                                                    Customs Clearing Cost<br>
                                                                    <?php echo $car_details->clearing_cost;?><br>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p style="line-height:35px;">
                                                                    <strong  style="color:#333;">SHIPPING TIME ESTIMATE</strong><br>
                                                                    <?php echo $car_details->delivery_estimate;?></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="x_slider_form_input_wrapper float_left">
                                                        <strong>Message: </strong><br>
                                                        <?php echo $car_details->Message;?>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    <?php } } ?>

                                    <!-- car #1 end here -->

                                    <?php 
                                        foreach ($car_detail as $car_details) {
                                            if($car_details->car_number == "car_2")
                                            {
                                          
                                    ?>
                                        <div id="menu1" class="tab-pane fade">
                                            <div class="x_car_detail_main_wrapper float_left" style="margin-top:25px;">
                                                <div class="lr_bc_slider_first_wrapper">
                                                    <div class="owl-carousel owl-theme">
                                                        <?php 
                                                                foreach (json_decode($car_details->admincar_stockimg) as  $detail) {
                                                        ?>
                                                        <div class="item">
                                                            <div class="lr_bc_slider_img_wrapper">
                                                                <img src="<?php echo $detail->url;?>" alt="fresh_food_img">
                                                            </div>
                                                        </div>

                                                        <?php } ?>

                                                    </div>
                                                </div>
                                                <div class="x_car_offer_heading x_car_offer_heading_listing float_left x_car_offer_heading_inner_car_names x_car_offer_heading_inner_car_names2" style="margin-top:15px;">

                                                        <ul class="">
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-15.png');?>">
                                                                    &nbsp;<span style="color:#333;">Car Source: <?php echo $car_details->category;?></span></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-16.png');?>">
                                                                    &nbsp;<span style="color:#333;">Car Condition: <?php echo $car_details->car_condition;?></span></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-17.png');?>">
                                                                    &nbsp;<span style="color:#333;">Car Location: <?php echo $car_details->car_location;?></span></a>
                                                            </li>
                                                           
                                                        </ul>
                                                       
                                                </div>
                                         
                                                
                                                <div class="x_car_detail_slider_bottom_cont float_left">
                                                    <div class="row">
                                                    <div class="car_detail col-md-9 col-lg-9 col-sm-12">
                                                        <h3><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model; ?></h3>

                                                        <span>AVAILABLE FROM
                                                            <span style="font-weight:bold;">
                                                            <?php 
                                                                $available_from = strtotime($car_details->available_from);
                                                                $available_to =  strtotime($car_details->available_to);
                                                                echo date("M j S",$available_from);
                                                                echo " To ";
                                                                echo date("M j S",$available_to);
                                                            ?>   
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="car_detail_other col-md-3 col-lg-3 col-sm-12 ">
                                                        <h3 style="font-style:normal;">
                                                            <?php 
                                                               if($car_details->price != null)
                                                                { 
                                                                  $price = $car_details->price;
                                                                  $words = preg_replace('/\d+/', '', $price );
                                                                  $price_numbers = preg_replace('/[^0-9]/', '', $price);

                                                                   if($price_numbers == 0 )
                                                                    {
                                                                      echo " ";
                                                                    }
                                                                    else
                                                                     {
                                                                        echo $words.' '.number_format($price_numbers);
                                                                      }
                                                                }  
                                                            ?>  
                                                        </h3>
                                                        <br>
                                                        <p style="text-transform:none;font-style:normal;">
                                                            Available for
                                                           <?php 
                                                                $available_from = strtotime($car_details->available_from);
                                                                $available_to =  strtotime($car_details->available_to);
                                                               
                                                                echo (($available_to - $available_from)/60/60/24).'  Days '; 
                                                            ?>   
                                                        </p>

                                                    </div>
                                                    </div>
                                                    <div class="x_avanticar_btn float_right" style="padding-bottom:10px;">
                                                        <ul>
                                                            <li>
                                                                <?php 
                                                                    if($car_details->customer_status == 'booking')
                                                                    {
                                                                        echo ' <a href="'.base_url('agent/car_invoice_view/'.$car_details->carstock_id).'">Buy Now </a> ';
                                                                    }
                                                                    else
                                                                    {
                                                                        echo ' <a href="'.base_url('agent/car_invoice/'.$car_details->carstock_id).'">Buy Now <i class="fa fa-arrow-right"></i></a> ';
                                                                    }
                                                                ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="x_slider_form_input_wrapper float_left">
                                                        <h3>Vehicle Specification</h3>
                                                    </div>
                                                    <div class="x_car_offer_heading x_car_offer_heading_listing float_left x_car_offer_heading_inner_car_names x_car_offer_heading_inner_car_names2"
                                                        style="margin-top:0;">

                                                        <ul class="">
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-1.png');?>" />
                                                                    &nbsp;Mileage: <?php echo $car_details->car_mileage;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-2.png');?>" />
                                                                    &nbsp;Drive: <?php echo $car_details->Drive_type;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-3.png');?>" />
                                                                    &nbsp;Engine: <?php echo $car_details->engine;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-4.png');?>" />
                                                                    &nbsp;Transmission: <?php echo $car_details->transmission;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-5.png');?>" />
                                                                    &nbsp;Fuel: <?php echo $car_details->Fuel_type;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-6.png');?>" />
                                                                    &nbsp;MPG: <?php echo $car_details->car_mpg;?></a>
                                                            </li>

                                                        </ul>
                                                        <ul>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-9.png');?>" />
                                                                    &nbsp;Exterior Color: <?php echo $car_details->exterior_color;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-10.png');?>" />
                                                                    &nbsp;Interior Color: <?php echo $car_details->interior_color;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-11.png');?>" />
                                                                    &nbsp;Vehicle Class: <?php echo $car_details->vehicle_class;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-12.png');?>" />
                                                                    &nbsp;Maufacturer: <?php echo $car_details->manufactured;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-13.png');?>" />
                                                                    &nbsp;VIN: <?php echo $car_details->vin_status;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-14.png');?>" />
                                                                    &nbsp;Keys: <?php echo $car_details->car_keys;?></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="x_car_detail_slider_bottom_cont_center float_left">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <p style="line-height:35px;">
                                                                    <strong  style="color:#333;">DAMAGE</strong><br>
                                                                    Primary Damage: <?php echo $car_details->primary_damage;?> <br>
                                                                    Secondary Damage: <?php echo $car_details->secondary_damage;?><br>

                                                                </p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p style="line-height:35px;">

                                                                    <strong  style="color:#333;">ESTIMATED CLEARING COST</strong><br>
                                                                    Customs Clearing Cost<br>
                                                                    <?php echo $car_details->clearing_cost;?><br>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p style="line-height:35px;">
                                                                    <strong  style="color:#333;">SHIPPING TIME ESTIMATE</strong><br>
                                                                    <?php echo $car_details->delivery_estimate;?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    

                                                </div>


                                            </div>
                                        </div>

                                    <?php } } ?>
                                    <!-- car #2 end here -->
                                    <?php 
                                        foreach ($car_detail as $car_details) {
                                            if($car_details->car_number == "car_3")
                                            {
                                          
                                    ?>
                                        <div id="menu2" class="tab-pane fade">
                                               <div class="x_car_detail_main_wrapper float_left" style="margin-top:25px;">
                                                <div class="lr_bc_slider_first_wrapper">
                                                    <div class="owl-carousel owl-theme">
                                                        <?php 
                                                                foreach (json_decode($car_details->admincar_stockimg) as  $detail) {
                                                        ?>
                                                        <div class="item">
                                                            <div class="lr_bc_slider_img_wrapper">
                                                                <img src="<?php echo $detail->url;?>" alt="fresh_food_img">
                                                            </div>
                                                        </div>

                                                        <?php } ?>

                                                    </div>
                                                </div>
                                                <div class="x_car_offer_heading x_car_offer_heading_listing float_left x_car_offer_heading_inner_car_names x_car_offer_heading_inner_car_names2" style="margin-top:15px;">

                                                        <ul class="">
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-15.png');?>">
                                                                    &nbsp;<span style="color:#333;">Car Source: <?php echo $car_details->category;?></span></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-16.png');?>">
                                                                    &nbsp;<span style="color:#333;">Car Condition: <?php echo $car_details->car_condition;?></span></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-17.png');?>">
                                                                    &nbsp;<span style="color:#333;">Car Location: <?php echo $car_details->car_location;?></span></a>
                                                            </li>
                                                           
                                                        </ul>
                                                       
                                                </div>
                                         
                                                
                                                <div class="x_car_detail_slider_bottom_cont float_left">
                                                    <div class="row">
                                                    <div class="car_detail col-md-9 col-lg-9 col-sm-12">
                                                        <h3><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model; ?></h3>

                                                        <span>AVAILABLE FROM
                                                            <span style="font-weight:bold;">
                                                            <?php 
                                                                $available_from = strtotime($car_details->available_from);
                                                                $available_to =  strtotime($car_details->available_to);
                                                                echo date("M j S",$available_from);
                                                                echo " To ";
                                                                echo date("M j S",$available_to);
                                                            ?>   
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="car_detail_other col-md-3 col-lg-3 col-sm-12 ">
                                                        <h3 style="font-style:normal;">
                                                            <?php 
                                                               if($car_details->price != null)
                                                                { 
                                                                  $price = $car_details->price;
                                                                  $words = preg_replace('/\d+/', '', $price );
                                                                  $price_numbers = preg_replace('/[^0-9]/', '', $price);

                                                                   if($price_numbers == 0 )
                                                                    {
                                                                      echo " ";
                                                                    }
                                                                    else
                                                                     {
                                                                        echo $words.' '.number_format($price_numbers);
                                                                      }
                                                                }  
                                                            ?>  
                                                        </h3>
                                                        <br>
                                                        <p style="text-transform:none;font-style:normal;">
                                                            Available for
                                                            <?php 
                                                                $available_from = strtotime($car_details->available_from);
                                                                $available_to =  strtotime($car_details->available_to);
                                                               
                                                                echo (($available_to - $available_from)/60/60/24).'  Days'; 
                                                            ?>   
                                                        </p>

                                                    </div>
                                                    </div>
                                                    <div class="x_avanticar_btn float_right" style="padding-bottom:10px;">
                                                        <ul>
                                                            <li>
                                                                <?php 
                                                                    if($car_details->customer_status == 'booking')
                                                                    {
                                                                        echo ' <a href="'.base_url('agent/car_invoice_view/'.$car_details->carstock_id).'">Buy Now </a> ';
                                                                    }
                                                                    else 
                                                                    {
                                                                        echo ' <a href="'.base_url('agent/car_invoice/'.$car_details->carstock_id).'">Buy Now <i class="fa fa-arrow-right"></i></a> ';
                                                                    }
                                                                ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="x_slider_form_input_wrapper float_left">
                                                        <h3>Vehicle Specification</h3>
                                                    </div>
                                                    <div class="x_car_offer_heading x_car_offer_heading_listing float_left x_car_offer_heading_inner_car_names x_car_offer_heading_inner_car_names2"
                                                        style="margin-top:0;">

                                                        <ul class="">
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-1.png');?>" />
                                                                    &nbsp;Mileage: <?php echo $car_details->car_mileage;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-2.png');?>" />
                                                                    &nbsp;Drive: <?php echo $car_details->Drive_type;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-3.png');?>" />
                                                                    &nbsp;Engine: <?php echo $car_details->engine;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-4.png');?>" />
                                                                    &nbsp;Transmission: <?php echo $car_details->transmission;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-5.png');?>" />
                                                                    &nbsp;Fuel: <?php echo $car_details->Fuel_type;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-6.png');?>" />
                                                                    &nbsp;MPG: <?php echo $car_details->car_mpg;?></a>
                                                            </li>

                                                        </ul>
                                                        <ul>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-9.png');?>" />
                                                                    &nbsp;Exterior Color: <?php echo $car_details->exterior_color;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-10.png');?>" />
                                                                    &nbsp;Interior Color: <?php echo $car_details->interior_color;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-11.png');?>" />
                                                                    &nbsp;Vehicle Class: <?php echo $car_details->vehicle_class;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-12.png');?>" />
                                                                    &nbsp;Maufacturer: <?php echo $car_details->manufactured;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-13.png');?>" />
                                                                    &nbsp;VIN: <?php echo $car_details->vin_status;?></a>
                                                            </li>
                                                            <li> <a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-14.png');?>" />
                                                                    &nbsp;Keys: <?php echo $car_details->car_keys;?></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="x_car_detail_slider_bottom_cont_center float_left">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <p style="line-height:35px;">
                                                                    <strong  style="color:#333;">DAMAGE</strong><br>
                                                                    Primary Damage: <?php echo $car_details->primary_damage;?> <br>
                                                                    Secondary Damage: <?php echo $car_details->secondary_damage;?><br>

                                                                </p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p style="line-height:35px;">

                                                                    <strong  style="color:#333;">ESTIMATED CLEARING COST</strong><br>
                                                                    Customs Clearing Cost<br>
                                                                    <?php echo $car_details->clearing_cost;?><br>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p style="line-height:35px;">
                                                                    <strong  style="color:#333;">SHIPPING TIME ESTIMATE</strong><br>
                                                                    <?php echo $car_details->delivery_estimate;?></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="x_car_detail_slider_bottom_cont_center float_left">
                                                        <div class="row">
                                                            <!-- <div class="col-md-9">
                                                                <p style="line-height:30px; color:#333;">
                                                                    <strong style="color:#f60;">INTERIOR</strong><br>
                                                                    <i class="fa fa-check"></i> Air Conditioner<br>
                                                                    <i class="fa fa-check"></i> Multi-information
                                                                    display-inc: average speed, instant/average fuel
                                                                    economy, distance to empty, elapsed time functions<br>
                                                                    <i class="fa fa-check"></i> Dual illuminated visor
                                                                    vanity mirrors<br>
                                                                    <i class="fa fa-check"></i> Cruise control<br>
                                                                    <i class="fa fa-check"></i> Center console-inc:
                                                                    storage, armrest, dual front cup holders<br>
                                                                    <i class="fa fa-check"></i> Driver Adjustable
                                                                    Lumbar<br>
                                                                    <i class="fa fa-check"></i> AIR BAGS rear left
                                                                    deployed<br>
                                                                    <i class="fa fa-check"></i> ABS<br>
                                                                    <i class="fa fa-check"></i> 4-Wheel Disc Brakes<br>
                                                                    <i class="fa fa-check"></i> AM/FM Stereo<br>
                                                                    <i class="fa fa-check"></i> Drive Train: front
                                                                    wheel drive<br>
                                                                    <i class="fa fa-check"></i> Power Windows<br>
                                                                    <i class="fa fa-check"></i> Power Steering<br>
                                                                    <i class="fa fa-check"></i> Generic Sun/Moonroof<br>
                                                                    <i class="fa fa-check"></i> Security System<br>
                                                                    <i class="fa fa-check"></i> Keyless Entry<br>
                                                                    <i class="fa fa-check"></i> Number of seats 6<br>
                                                                </p>
                                                            </div> -->
                                                           
                                                          
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>

                                    <?php } } ?>
                                    <!-- car #3 end here -->

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