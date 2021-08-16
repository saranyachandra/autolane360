
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
                                            <h5>View Client Members</h5>
                                        </div>
                                        <!-- /.widget-heading -->
                                        <div class="widget-body clearfix">
                                                <div class="tabs">
                                                       
                                                        <!-- viwe about -->
                                                    <div class="tab-pane" id="view_about">
                                                          <div id="delete_result"></div>
                                                            <table id="news_feed_table" class="table table-bordered" style="width: 100%!important;" >
                                                              <thead>
                                                                <tr>
                                                                  <th scope="col">S.No</th>
                                                                  <th scope="col">Customer Name</th>
                                                                  <th scope="col">Email/Phone</th>
                                                                  <th scope="col">Country</th>
                                                                  <th scope="col">State</th>
                                                                  <th scope="col">Status</th>
                                                                </tr>
                                                              </thead>

                                                              <tbody>
                                                                  
                                                                <?php 
                                                                    $i = 1;
                                                                    foreach ($client_details as $client_detail) {
                                                                ?>  

                                                                  <tr>
                                                                    <th scope="row"> 
                                                                      <?php echo $i; ?>
                                                                    </th>
                                                                    <td><?php echo $client_detail->f_name." ".$client_detail->l_name;?></td>
                                                                    <td><?php echo $client_detail->email." / ".$client_detail->phone_no;?></td>
                                                                    <td><?php echo $client_detail->cus_country;?> </td>
                                                                    <td><?php echo $client_detail->cus_state;?></td>
                                                                    <td><a href="<?php echo base_url('agent_dashboard/view_customer_car_details/'.$client_detail->agent_cus_id);?>">View </a></td>
                                                                  </tr>

                                                                <?php $i++; } ?>
                                                            </tbody>

                                                        </table>                                                  
                                                    </div>

                                                        <!-- /.tab-content -->
                                            </div>
                                           
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



// data table 
$(document).ready(function () {
    
    $('#news_feed_table').DataTable({
       
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true      
        
    });                                                         
});








</script>
</body>



</html>