<!-- include css file here -->
<?php $this->load->view('includes/agent_site_css'); ?>
<link href="<?php echo base_url ('assets/agent-assets/datatables/datatables.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url ('assets/agent-assets/datatables/datatables.min.css'); ?>" rel="stylesheet" type="text/css">
    
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
    color:#333;
    font-weight:800;
    line-height: 50px;
    display:inline-block;
    font-style:normal;
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
.car_detail_other h3{
    font-family: 'Lato', sans-serif;
    font-size:20px;
    color:#333;
    font-weight:800;
    line-height: 50px;
    display:inline-block;
    font-style: normal;
    
}

}

.car_detail_other p{
    color:#fff;
    text-transform:none;
    font-size:18px;
    display:inline-block;
    line-height: 23px;
    font-weight:900;
    font-style:normal;
    position:relative;
    /*border: 1px solid #333;*/
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
                                            <div class="x_slider_form_input_wrapper float_left">
                                                <img  src="<?php echo $car_detail->admincar_stockimg;?>" class="img-responsive img-thumbnail" />
                                            </div>
                                            <div class="x_slider_select" style="line-height:28px; width:100%; font-size:13px; margin-top: 0; text-transform: capitalize;">
                                                <strong>Car Brand:</strong> <?php echo $car_detail->car_brand." ".$car_detail->car_model; ?><br>
                                                <strong>Car Year:</strong> <?php echo $car_detail->car_year; ?><br>
                                            </div>
                                            <div class="x_slider_form_input_wrapper float_left">
                                                <h3>Buyer Detail</h3>
                                            </div>
                                            <div class="x_slider_select" style="line-height:28px; width:100%; font-size:13px;margin-top: 0;  ">
                                                <strong>Name:</strong> 
                                                <?php  echo $this->session->userdata('cus_fname')." ".$this->session->userdata('cus_lname');?><br>
                                                 <strong>Phone:</strong>
                                                <?php  echo $this->session->userdata('cus_phone'); ?><br>
                                                <strong>Email:</strong> <?php  echo $this->session->userdata('cus_email'); ?><br>
                                                <strong>Country:</strong> <?php  echo $this->session->userdata('cus_country'); ?><br>
                                                <strong>State:</strong> <?php  echo $this->session->userdata('cus_state'); ?><br>
                                            </div>
                                            <div class="x_slider_form_input_wrapper float_left">
                                                <h3>Address</h3>
                                            </div>
                                            <div class="x_slider_select" style="line-height:28px; width:100%; font-size:13px;margin-top: 0;  ">
                                                <strong>AUTOLANE360</strong><br>
                                                101811 Clodine Rd Suite G Richmond Texas 77407<br>
                                                auto.sales@autolane360.com
                                            </div>
                                            <!-- <div class="x_slider_form_input_wrapper float_left"></div> -->

                                            
                                            <div class="x_slider_select" style="line-height:28px; width:100%; font-size:13px;margin-top: 0;  ">
                                                <strong>Phone:</strong> +1832-7163892<br>
                                                <strong>Whatsapp Video:</strong> +1832-7163892<br>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- print option here -->
    <div id="print">
        <div class="table-responsive" style="display: none;">
        <table class="table table-striped"  >
            <thead>
                <tr>
                    <th> Invoice Date</th>
                    <th> Due Date</th>
                    <th>Price </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?php echo $car_detail->invoice_date; ?></td>
                    <td><?php echo $car_detail->due_date; ?></td>
                    <td>
                        <?php 
                            if($car_detail->price != null)
                            { 
                                $price = $car_detail->price;
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
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>


                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_car_detail_main_wrapper float_left">
                                <div class="x_css_tabs_wrapper float_left">
                                    <div class="x_car_detail_main_wrapper float_left" style="margin-top:25px;" >
                                        <div class="row">
                                            <div class="col-md-12" >
                                                <div class="text-center">
                                                <span style="color: #ec091d;font-weight: bold;">  CALL US BEFORE YOU PAY</span>
                                                </div>
                                                       
                                                <div class="col-md-12 text-center" style="background-color: #111111;margin-top: 15px;">
                                                    <div class="car_detail_other col-sm-12 col-md-12 col-lg-12">
                                                   
                                                    <div style="padding: 10px; font-weight: normal!important; color: #ffffff;">
                                                         Please, all customers must call us this number <br>
                                                            +1832-716-3892 <br>
                                                            for approval of payment  and shipping information<br><br>
                                                            Our Agent are not authorized to recieve any payment on our behalf <br>
                                                                 Note No  Exceptions 
                                                   
                                                    </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="car_detail col-sm-12 col-md-7 col-lg-7">
                                            <h3>
                                                <?php
                                                    if(isset($car_detail->car_number))
                                                    echo $car_detail->car_number;
                                                ?>

                                            </h3>
                                            
                                        </div>
                                        <div class="car_detail_other col-sm-12 col-md-5 col-lg-5">
                                            <h3 >CAR SALE INVOICE</h3><br>
                                            <span style="font-weight:bold; padding-left:0;color: #f60;">
                                                Order Ticket : 
                                                <?php 
                                                if(isset($car_detail->order_ticket))
                                                echo $car_detail->order_ticket; 
                                                ?> 
                                            </span> 
                                        </div>
                                        </div>

                                        <div class="x_car_offer_heading x_car_offer_heading_listing float_left x_car_offer_heading_inner_car_names x_car_offer_heading_inner_car_names2"
                                            style="margin-top:15px;">

                                            <ul>
                                                <li>
                                                    <div style="width:100%; float: left;">
                                                        <div style="width:45%; float: left;"><a href="#"><img src="<?php echo base_url('assets/images/view-icons/icon-18.png');?>"></a></div>
                                                        <div style="width:50%; float: left; margin-top:25px;">&nbsp;
                                                            <span style="color:#333;">Invoice Date <br>
                                                                <?php 
                                                                    if(isset($car_detail->invoice_date))
                                                                    echo $car_detail->invoice_date;
                                                                 ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                <div style="width:100%; float: left;">
                                                    <div style="width:45%; float: left;"><a href="#">
                                                        <img src="<?php echo base_url('assets/images/view-icons/icon-19.png');?>"></a>
                                                    </div>
                                                    <div style="width:50%; float: left; margin-top:25px;">&nbsp;
                                                        <span style="color:#333;">Please Pay <br>
                                                            <span style="font-size:23px; font-weight:bold;">
                                                                   
                                                            <?php 
                                                                if($car_detail->price != null)
                                                                { 
                                                                    $price = $car_detail->price;
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
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                   
                                                </li>
                                                <li>
                                                <div style="width:100%; float: left;">
                                                    <div style="width:45%; float: left;"><a href="#">
                                                        <img src="<?php echo base_url('assets/images/view-icons/icon-18.png');?>"></a>
                                                    </div>
                                                    <div style="width:50%; float: left; margin-top:25px;">&nbsp;
                                                        <span style="color:#333;">Due Date <br>
                                                            <?php
                                                                if(isset($car_detail->due_date)) 
                                                                echo $car_detail->due_date; 
                                                            ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                </li>

                                            </ul>

                                        </div>
                                           
                                        <div class="x_car_offer_heading x_car_offer_heading_listing float_left x_car_offer_heading_inner_car_names x_car_offer_heading_inner_car_names2"
                                                style="margin-bottom: 10px;" >

                                            <ul class="">
                                                <li style="padding:15px;"> 
                                                    &nbsp;<strong>Description</strong>
                                                </li >
                                                <li style="padding:15px;"> 
                                                    &nbsp;<strong>Quantity</strong>
                                                </li>
                                                <li style="padding:15px;"> 
                                                    &nbsp;<strong>Price</strong>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li style="padding:15px;text-transform: capitalize;"> 
                                                    &nbsp;
                                                    <?php echo $car_detail->car_brand." ".$car_detail->car_model." ".$car_detail->car_year; ?>
                                                </li>
                                                <li style="padding:15px;"> 
                                                    &nbsp;1
                                                </li>
                                                <li style="padding:15px;"> 
                                                    &nbsp;
                                                <?php 
                                                    if($car_detail->price != null)
                                                    { 
                                                        $price = $car_detail->price;
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
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-12 col-lg-12 col-md-12 text-center" >
                                           <p>Please Pay In-full</p>
                                        </div>

                                        <div class="col-sm-12 col-lg-12 col-md-12" >
                                           <button type="button" class="btn violet btn-info" onclick="PrintDoc()"><i class="fa fa-print"></i> Print</button>
                                        </div>

                                        <div class="x_car_detail_slider_bottom_cont float_left" style="padding-top: 0;">
                                            <div class="x_car_detail_slider_bottom_cont_center float_left">
                                                <div class="row">

                                                    <?php 
                                                        foreach ($bank_details as  $details) {
                                                    ?>
                                                    <div class="col-md-3 col-lg-3 col-sm-12"><a href="#">
                                                        <img style="height: 165px;width: 165px;" src="<?php echo $details->bank_logo_url;?>" class="img-responsive img-thumbnail"></a>
                                                    </div>

                                                    <div class="col-md-9 col-lg-9 col-sm-12"> 
                                                        <p style="line-height:35px;">
                                                        <strong style="color:#333;">BANK INFO</strong><br>
                                                        Bank Name: <?php echo $details->bank_name;?> <br>
                                                        Account Name: AUTOLANE360 NIG LTD <br>
                                                        Account Number:<?php echo $details->account_no;?><br>
                                                        <?php } ?>
                                                        Amount: 
                                                        <?php 
                                                            if($car_detail->price != null)
                                                            { 
                                                                $price = $car_detail->price;
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
                                                        <br>
                                                        </p>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <div class="x_car_detail_slider_bottom_cont_center float_left">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="x_slider_checkbox float_left" style="font-size:14px;">
                                                            <div class="row">
                                                                <div class="col-md-6" style="padding-top:15px;">
                                                                    <input type="checkbox" id="c1" name="cb">
                                                                    <label for="c1">Email  To Self</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="x_slider_checkbox float_left" style="font-size:14px;">
                                                        <div class="row" >
                                                            <div class="col-md-6" style="margin-bottom: 10px;">
                                                                <input type="text" placeholder="Additional Email"
                                                                                    class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="checkbox" id="c1" name="cb">
                                                                <div class="x_avanticar_btn" style="padding:0; margin:0;">
                                                                    <button class="btn" style="background-color: #ff6600;color: #fdfcfb;">  Email Now <i class="fa fa-arrow-right"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="x_slider_checkbox float_left" style="font-size:14px;">Your Car Will be Shipped As Soon Your Payment is Confirmed. 
                                                                        You will be Emailed The Details of Your Shipping Information  within 24 Hours of the shipping date
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
        </div>
    </div>
    </div>

   
   <!-- btc team Wrapper Start -->

<?php $this->load->view('includes/business_partners') ?>
    <!-- custom js-->

    <!-- custom js-->
<?php $this->load->view('includes/agent_site_js') ?>
<script src="<?php echo base_url('assets/agent-assets/datatables/datatables.js');?>"></script>
<script src="<?php echo base_url('assets/agent-assets/datatables/datatables.min.js');?>"></script>

<script type="text/javascript">

    function PrintDoc() {

            var divContents = document.getElementById('print');
            var printWindow = window.open('', '', 'height=1400,width=800');
            printWindow.document.write('<html><head><title>Prescription</title>');
            printWindow.document.write('<style>@page { size: auto;  margin: 0mm; padding:5px; } td{font-size:12px;} html{overflow: auto; height: 99%; page-break-after: avoid; page-break-before: avoid; } body{overflow: auto; height: 99%; page-break-after: avoid; page-break-before: avoid; } ul li.select2-selection__choice{float:right!important; }table tr td{border:#111111;}</style></head><body >');
            printWindow.document.write(divContents.innerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
       
    }

</script>
</body>



</html>