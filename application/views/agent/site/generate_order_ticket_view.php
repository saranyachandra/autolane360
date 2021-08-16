
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
                        <h1>Generate Your Order Ticket</h1>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
                    <div class="btc_tittle_right_heading">
                        <div class="btc_tittle_right_cont_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i>
                                </li>
                                <li>Generate Your Order Ticket</li>
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
                            <img src="<?php echo base_url('assets/agent-assets/images/types/'.$car_type.'.jpg');?>" alt="car" class="img-responsive img-thumbnail">
                            
                        </div>
                       
                    </div>
               
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-center" style="margin-bottom:20px;">
                        <form id="generate_order_ticket" action="<?php echo base_url('agent/update_order_ticket'); ?>"  method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="order_id" value="<?php echo $order_id;?>">
                        <div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn" style="background:#f8f8f8; padding-top: 10px;">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="x_slider_checkbox_bottom float_left text-center">
                                        <div class="x_slider_checout_right text-center" style="width:100%;">
                                            <h3 style="font-size:15px; text-transform:uppercase;">This is Your Order
                                                Ticket</h3>
                                        </div>
                                        <div class="x_slider_checout_right text-center">
                                            <ul>
                                                <input type="text" name="order_ticket" id='random_number' style="font-size:30px; background: #333;text-align: center;color: #fff;" readonly>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top:35px;">
                                    <p style="line-height:35px; font-size:25px; color:#333;">Thanks you for your order
                                        we will send you avaliable cars in our network to select from in the next 24
                                        hours with instruction on how to finalize your transaction with us.</p>
                                </div>
                            </div>
                        </div>
                         
                        <div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn" style="background:#f8f8f8; padding-top: 15px;">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="x_slider_form_input_wrapper">
                                        <div class="x_slider_select text-center" style="line-height:40px; margin-top: 0px; width:100%; color:#333; text-transform: uppercase; font-weight: bold;">
                                            Send Link to my
                                        </div>
                                    

                                        <div class="col-md-12">
                                            <div class="x_slider_checkbox float_left" style="font-size:14px;">
                                                <div class="row">
                                                    <div class="col-md-6" style="padding-top:15px;">
                                                        <input type="checkbox"  id="c1" name="send_link[]" value="<?php echo $this->session->userdata('cus_email');?>">
                                                        <label for="c1">Email &nbsp;<?php echo $this->session->userdata('cus_email');?></label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="additional_email" placeholder="Additional Email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="x_slider_checkbox float_left" style="font-size:14px;">
                                                <div class="row">
                                                    <div class="col-md-6" style="padding-top:15px;">
                                                        <input type="checkbox" id="c2" name="send_link[]" value="<?php echo $this->session->userdata('cus_phone');?>">
                                                        <label for="c1">Phone: &nbsp;<?php echo $this->session->userdata('cus_phone');?>
                                                        </label>
                                                    </div>                                                       
                                                </div>
                                            </div>
                                            <div class="x_slider_checkbox float_left" style="font-size:14px;">Click Done Below To Initiate Your Order With Us</div>
                                        </div>

                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="x_slider_checkbox_bottom float_left">
                                <div class="x_slider_checout_right">
                                    <ul>
                                        <li><button type="submit" class="btn" style="background-color: #ff6600;color: #fdfcfb;">Done <i class="fa fa-check"></i></button> </li>
                                        <!-- <li><a href="<?php echo base_url('agent/generate_order_ticket');?>">Done <i class="fa fa-check"></i></a> -->
                                        <!-- </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
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

<script type="text/javascript">
    // generate ramdom number
function randString(x){
    var s = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    while(s.length<x&&x>0){
        var r = Math.random();
        s+= possible.charAt(Math.floor(Math.random() * possible.length));
    }
    return s;
}

document.getElementById("random_number").value = randString(8);

 $( document ).ready(function() {
        var ran_no = $('#random_number').val();
        $("#get_random_no").val(ran_no);
    });


var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", "#generate_order_ticket", function(e){

        e.preventDefault();
      
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
                   
                    beforeSend: function()
                    {

                      swal({
                          title: 'Please Wait...',
                          text: 'Submitting...',
                          toast: true,
                          target: '.swal',              
                         
                          onOpen: () => {
                            swal.showLoading()
                         }
                      }); 
          
                    },
                    success: function(response)
                    {
                       if(response.status == 'success')
                       {
                       
                            // swal("Your Details Updated Successfully...");
                            swal({
                                title: "Success!",
                                text: "Your Details Updated Successfully...",
                                type: "success",
                                timer: 2000
                            }).then(() => {                     
                                  window.location.href = base_url+'agent/track_order/';
                                });;  
                       
                        }                      
                       
                        else 
                        {                       
                          swal("Somethink went wrong Try again");
                        }          
                    }

           });
        

 });

</script>

</body>



</html>