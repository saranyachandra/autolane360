
<?php $this->load->view('includes/admin_css'); ?>

<style type="text/css">
    span{
        font-weight: bold;
    }
</style>

<body class="sidebar-dark sidebar-expand navbar-brand-dark header-light">
     
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
               <?php $this->load->view('includes/agent_logout_menu'); ?>
        <!-- /.navbar -->
        <div class="content-wrapper">
            <!-- SIDEBAR -->
            <aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
                <!-- User Details -->
                <div class="side-user d-none">
                    <div class="col-sm-12 text-center p-0 clearfix">
                        <div class="d-inline-block pos-relative mr-b-10">
                            <figure class="thumb-sm mr-b-0 user--online">
                                <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                            </figure><a href="#" class="text-muted side-user-link"><i class="feather feather-settings list-icon"></i></a>
                        </div>
                        <!-- /.d-inline-block -->
                        <div class="lh-14 mr-t-5"><a href="#" class="hide-menu mt-3 mb-0 side-user-heading fw-500">Emeka
                                Daniels</a>
                            <br><small class="hide-menu">Super Admin</small>
                        </div>
                    </div>
                    <!-- /.col-sm-12 -->
                </div>
                <!-- /.side-user -->
                <!-- Call to Action -->

                <!-- Sidebar Menu -->
                    <?php $this->load->view('includes/agent_sidemenu'); ?>
                <!-- /.sidebar-nav -->
            </aside>
            <!-- /.site-sidebar -->
            <main class="main-wrapper clearfix">
                <!-- Page Title Area -->
                <div class="row page-title clearfix">
                    <div class="page-title-left">
                        <h6 class="page-title-heading mr-0 mr-r-5">Agent Manager</h6>
                        <p class="page-title-description mr-0 d-none d-md-inline-block">Create Agent Marketing Page</p>
                    </div>
                    <!-- /.page-title-left -->
                   <!--  <div class="page-title-right d-none d-sm-inline-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Admin Manager</li>
                        </ol>
                    </div> -->
                    <!-- /.page-title-right -->
                </div>
                <!-- /.page-title -->
                <!-- =================================== -->
                <!-- Different data widgets ============ -->
                <!-- =================================== -->
                <div class="widget-list row">

                    <!-- /.widget-holder -->
                    <div class="widget-holder widget-sm col-md-12 widget-full-height">
                        <div class="widget-bg">

                            <div class="row">
                                <div class="col-md-12 widget-holder">
                                    <div class="widget-bg">
                                        <div class="widget-heading clearfix">
                                            <span style="font-weight: bold;">Our Agent Marketing Platform Is a built on common sense, hardwor kand dedication, rewarding our agent partners for their accomplishments.</span>
                                        </div>
                                        <!-- /.widget-heading -->
                                        <div class="widget-body clearfix">
                                            <form id="marketing_form" action="<?php echo base_url('agent_dashboard/sent_market_link'); ?>"  method="POST" >

                                            <input type="hidden" name="link" value="<?php echo base_url('agent/register/'.$this->session->userdata('admin_code'));?>">
                                            <div class="tabs">
                                                <div class="row">
                                                    <p style="font-weight: bold;">
                                                        <a href="<?php echo base_url('agent/register/'.$this->session->userdata('admin_code'));?>" target="_blank">
                                                            <?php echo base_url('agent/register/'.$this->session->userdata('admin_code'));?>
                                                        </a>
                                                    </p>
                                                </div>  

                                              <!--   <div class="row">
                                                    <p>
                                                        Hi, My Name <?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name');?>
                                                    </p>
                                                </div>   -->  
                                               <!--  <div class="row">
                                                    <p>
                                                        I am a Agent With Autolane360, Inc. we are Houston Based Company with branches in San Antonio, Nigeria, and Ghana.<br>
                                                         We work with our clients in helping  them access thousand of America Specs' Cars, heavy Duty Trucks, Cars parts and other related products. <br>
                                                        Please Click on the link below to place an order for your car purchase from us. We will send you a list of cars based on your selection <br> 
                                                        and the qouated price includes shipping and handling from USA to Nigeria/ Ghana Ports.<br>
                                                        All you have after we ship your car to your assigned ports is pay your custom duties and chargesd and pick up your car
                                                    </p>
                                                </div> -->
                                               <textarea  name="text_msg" rows="8" cols="150"> Hi, My Name <?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name');?>&#10;I am a Agent With Autolane360, Inc. we are Houston Based Company with branches in San Antonio, Nigeria, and Ghana. We work with our clients in helping  them access thousand of America Specs' Cars, heavy Duty Trucks, Cars parts and other related products. Please Click on the link below to place an order for your car purchase from us. We will send you a list of cars based on your selection and the qouated price includes shipping and handling from USA to Nigeria/ Ghana Ports. All you have after we ship your car to your assigned ports is pay your custom duties and chargesd and pick up your car.</textarea>
                                                
                                                <div class="row">
                                                    <p>
                                                        Click On this link:
                                                        <a href="<?php echo base_url('agent/register/'.$this->session->userdata('admin_code'));?>" target="_blank">
                                                            <?php echo base_url('agent/register/'.$this->session->userdata('admin_code'));?>
                                                        </a>
                                                    </p>
                                                </div>

                                                <div class="col-md-12">
                                                    <p style="font-weight: bold;">USA OFFICE:</p>
                                                    <p>10811 Clodine Rd Suite  G </p>
                                                    <p>Richmond 77407</p>
                                                    <p>Phone +1 832-716-3892</p>
                                                    <p>Email :auto.sales@autolane360.com</p>
                                                </div>

                                                <hr>

                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <span style="font-weight: bold;font-size: 16px;">Send Marketing Lead As Email </span>
                                                    </div>
                                                </div>

                                                <div id="dynamic_row">
                                                    <div id="email_1">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                        <label>Email Link</label>
                                                        <input type="text" name="email[]" class="form-control required">
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>

                                            <div class='col-sm-12 col-md-12'> 
                                                <a href="JavaScript:void(0);" id="add_email" data-nxt_about_details="2"><i class="fa fa-plus-circle"></i>Add more email</a>
                                            </div>

                                            <div class="col-sm-12 col-md-12 text-center" >
                                                <button class="btn btn-info">Send</button>
                                            </div>  

                                            <hr>

                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <span style="font-weight: bold;font-size: 16px;">Send Marketing Lead Text Message </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                <p>Copy  Your Assigned marketing Link From Here on your mobile browser and send it as a text <br> message to your prospects clients</p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p>Copy Link Here: 
                                                        <a href="<?php echo base_url('agent/register/'.$this->session->userdata('admin_code'));?>" target="_blank">
                                                            <?php echo base_url('agent/register/'.$this->session->userdata('admin_code'));?>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>


                                            </div>
                                        </form>
                                           
                                        </div>

                                        <!-- /.widget-body -->
                                    </div>
                                    <!-- /.widget-bg -->
                                </div>

                                <!-- /.widget-holder -->
                            </div>
                            <!-- /.counter-w-info -->

                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->


                </div>

                <!-- /.widget-list -->

                <!-- /.widget-list -->
            </main>
            <!-- /.main-wrappper -->
            <!-- RIGHT SIDEBAR -->

            <!-- CHAT PANEL -->

            <!-- /.chat-panel -->
        </div>
        <!-- /.content-wrapper -->
        <!-- FOOTER -->
        <footer class="footer"><span class="heading-font-family">Copyright @ 2018. All rights reserved. Autolane360
                Admin</span>
        </footer>

       

    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
  <?php $this->load->view('includes/admin_js'); ?>


<script type="text/javascript">

// dynamic create email
function generate_email_fields(count)
{  
  var email  = ' <div  id="email_'+count+'">  <div class="row"> <div class="col-sm-4 col-md-4"> <label> Email Link</label> <input type="text" id="about_title_'+count+'" name="email[]" class="form-control required" placeholder="Enter Here" autocomplete="off"> </div>   <div class="col-md-2 col-sm-2"> <a class="btn btn-danger remove_email" style="padding: 5px;margin-top:38px;" href="JavaScript:void(0);" > <i class="fa fa-trash-o" aria-hidden="true"></i> </a> </div> </div>  </div> ';

    return email;
}
   

$('#add_email').click(function() //here add address
    {
        var nxtaddress_count = $(this).data("nxt_about_details");

        var nxtaddressHTML = generate_email_fields(nxtaddress_count);
       
        $('#dynamic_row').append(nxtaddressHTML); // Add field html

        nxtaddress_count++; //Increment field counter

        $(this).data('nxt_about_details', nxtaddress_count); //update data nxtportion   

    });

$(document).on('click', '.remove_email', function(e)
    {
      $(this).parents('[id^=email_]').remove();
    });


//email link send form submit

var base_url = '<?php echo base_url() ?>'; //form submited


$(document).on("submit", "#marketing_form", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                             
                                  email:"required",   
                                },

                          messages: {  

                                  email: {
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
                        swal("Email Sent Successfully!... ");
                      }
                      else 
                        {                       
                          swal("Failed");
                        }          
                    }

                });
        }     

});

</script>
</body>



</html>