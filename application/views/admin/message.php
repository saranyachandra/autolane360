
<?php $this->load->view('includes/admin_css'); ?>


<body class="sidebar-dark sidebar-expand navbar-brand-dark header-light">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
             <?php $this->load->view('includes/admin_top_navigation'); ?>
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
                    <?php $this->load->view('includes/admin_side_menu'); ?>
                <!-- /.sidebar-nav -->
            </aside>
            <!-- /.site-sidebar -->
            <main class="main-wrapper clearfix">
                <!-- Page Title Area -->
                <div class="row page-title clearfix">
                    <div class="page-title-left">
                        <h6 class="page-title-heading mr-0 mr-r-5">Admin Manager</h6>
                        <p class="page-title-description mr-0 d-none d-md-inline-block">Information about Admin details</p>
                    </div>
                    <!-- /.page-title-left -->
                    <div class="page-title-right d-none d-sm-inline-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Admin Manager</li>
                        </ol>
                    </div>
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
                                            <h5>View  Message</h5>
                                        </div>
                                        <!-- /.widget-heading -->
                                        <div class="widget-body clearfix">
                                                        
                                                        <!-- /.nav-tabs -->
                                            <table class="table  table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Car Details</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Country</th>
                                                        <th>Message</th>
                                                        <th>Enquiry Topic</th>
                                                        <th>Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php 
                                                        $i = 1;
                                                        foreach ($user_details as $user_detail) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i; ?> </td>
                                                        <td> <?php echo $user_detail->car_details;?> </td>
                                                        <td>
                                                        <?php echo $user_detail->first_name." ".$user_detail->last_name;?>
                                                        </td>                                                                                
                                                        <td> <?php echo $user_detail->user_email;?> </td>
                                                        <td><?php echo $user_detail->user_country;?></td>
                                                        <td><?php echo $user_detail->message;?></td>
                                                        <td><?php echo $user_detail->enquiry_topic;?></td>
                                                        <td>
                                                        <input type="hidden" name="user_email" id="user_email" value="<?php echo $user_detail->user_email;?>">
                                                        <textarea type="text" id="admin_comments" name="comments" class="form-control required" ></textarea> 
                                                        <input type="submit" id="send_email" class="btn-info" value="send">
                                                        </td>
                                                                                
                                                    </tr>   
                                                    <?php $i++; } ?>
                                                </tbody>
                                            </table>
                                                           
                                       
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

//admin form submit

var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("click", "#send_email", function(e){

        e.preventDefault();

            var form_data = new FormData(this);

             var com        = $('#admin_comments').val();
             var user_email    = $('#user_email').val();

             form_data.append('comments',com);
             form_data.append('email',user_email);

            $.ajax({
                    url : base_url+'admin/send_customer_email/',
                    method: 'POST',
                    data: form_data,
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
                       
                        swal("Successfully email was send...");
                        document.getElementById("admin_comments").reset(); //clear form data
                       
                        }
                        else 
                        {                       
                          swal("Somethink went wrong...");
                        }          
                    }

           });
       

 });


</script>
</body>



</html>