
<?php $this->load->view('includes/admin_css'); ?>

<style type="text/css">
    img {
    max-width: 200px;
    height: auto;
    display: inline-block;
  }
.remove {
    display: block;
    background: #444;
    border: 1px solid black;
    color: white;
    text-align: center;
    cursor: pointer;
    width: 200px;
      margin-left: 0px;
  }
.remove:hover {
    background: white;
    color: black;
  }

.dealer_remove {
    display: block;
    background: #444;
    border: 1px solid black;
    color: white;
    text-align: center;
    cursor: pointer;
    width: 200px;
      margin-left: 0px;
  }
.dealer_remove:hover {
    background: white;
    color: black;
  }

</style>

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
                        <h6 class="page-title-heading mr-0 mr-r-5">Add Sellers Members</h6>
                        <p class="page-title-description mr-0 d-none d-md-inline-block">Information about Seller details</p>
                    </div>
                    <!-- /.page-title-left -->
                    <div class="page-title-right d-none d-sm-inline-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Add Seller Members</li>
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
                                    <div class="widget-body clearfix" style="width:100%;">
                                            
                                            <div class="tabs tabs-bordered">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item active"><a class="nav-link" href="#home-tab-bordered-1" data-toggle="tab" aria-expanded="true">Individual Seller</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="#profile-tab-bordered-1" data-toggle="tab" aria-expanded="true">Dealer</a>
                                                    </li>                                                   
                                                </ul>
                                                <!-- /.nav-tabs -->
                                    <div class="tab-content">

                                        <div class="tab-pane active" id="home-tab-bordered-1">
                                           <table class="table edit_table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th style="display: none;"></th>
                                                        <th>img</th>
                                                        <th data-editable>Name</th>
                                                        <th data-editable>Phone</th>
                                                        <th data-editable>Email</th>
                                                        <th data-editable>Password</th>
                                                        <th>Delegation</th>
                                                        <th>Status</th>
                                                        <th class="tabledit-toolbar-column"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php 
                                                    foreach ($seller_user_detail as  $user_details) {
                                                     if($user_details->user_type == 'individual_seller') 
                                                     { 
                                                ?>    
                                                    <tr>
                                                        <td style="display: none;"><?php echo $user_details->admin_id;?></td>
                                                        <td>
                                                            <img style="width: 50px;height: 50px;border-radius: 50px;" src="<?php echo $user_details->image;?>" class="img-responsive" />
                                                        </td>
                                                        <td><?php echo $user_details->admin_fname." ".$user_details->admin_lname; ?> </td>
                                                        <td><?php echo $user_details->admin_phone;?></td>
                                                        <td><?php echo $user_details->admin_email;?></td>
                                                        <td>
                                                            <select class="form-control" id="l13">
                                                                <option value="Post Cars" <?php if(isset($user_details->delegate) && ($user_details->delegate == "Post Cars" )){ echo "selected"; } else { echo ""; } ?> >Post Cars </option>
                                                                <option value="Add Members" <?php if(isset($user_details->delegate) && ($user_details->delegate == "Add Members" )){ echo "selected"; } else { echo ""; } ?> >Add Members </option>
                                                                <option value="Add Sellers" <?php if(isset($user_details->delegate) && ($user_details->delegate == "Add Sellers" )){ echo "selected"; } else { echo ""; } ?> >Add Sellers </option>
                                                                <option value="Add Agents" <?php if(isset($user_details->delegate) && ($user_details->delegate == "Add Agents" )){ echo "selected"; } else { echo ""; } ?> >Add Agents</option>
                                                                <option value="Edit Pages" <?php if(isset($user_details->delegate) && ($user_details->delegate == "Edit Pages" )){ echo "selected"; } else { echo ""; } ?> >Edit Pages</option>
                                                                
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control" >
                                                                <option value="1" <?php if(isset($user_details->Active) && ($user_details->Active == "1" )){ echo "selected"; } else { echo ""; } ?> >Active</option>
                                                                <option value="0" <?php if(isset($user_details->Active) && ($user_details->Active == "0" )){ echo "selected"; } else { echo ""; } ?> >Inactive</option>
                                                            </select>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                <?php } } ?>
                                                </tbody>
                                            </table>
                                                                
                                        </div>

                                        <!-- dealer form start here -->
                                                    <div class="tab-pane" id="profile-tab-bordered-1">
                                                        <table class="table edit_table table-responsive">
                                                <thead>
                                                     <tr>
                                                        <th style="display: none;"></th>
                                                        <th>img</th>
                                                        <th data-editable>Name</th>
                                                        <th data-editable>Phone</th>
                                                        <th data-editable>Email</th>
                                                        <th data-editable>Password</th>
                                                        <th>Delegation</th>
                                                        <th>Status</th>
                                                        <th class="tabledit-toolbar-column"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php 
                                                    foreach ($seller_user_detail as  $user_details) {
                                                     if($user_details->user_type == 'dealer_seller') 
                                                     {    
                                                ?>    
                                                    <tr>
                                                        <td style="display: none;"><?php echo $user_details->admin_id;?></td>
                                                        <td>
                                                            <img style="width: 50px;height: 50px;border-radius: 50px;" src="<?php echo $user_details->image;?>" class="img-responsive" />
                                                        </td>
                                                        <td><?php echo $user_details->admin_fname." ".$user_details->admin_lname; ?> </td>
                                                        <td><?php echo $user_details->admin_phone;?></td>
                                                        <td><?php echo $user_details->admin_email;?></td>
                                                        <td>
                                                            <select class="form-control" id="l13">
                                                                <option value="Post Cars" <?php if(isset($user_details->delegate) && ($user_details->delegate == "Post Cars" )){ echo "selected"; } else { echo ""; } ?> >Post Cars 
                                                                </option>
                                                                <option value="Add Members" <?php if(isset($user_details->delegate) && ($user_details->delegate == "Add Members" )){ echo "selected"; } else { echo ""; } ?> >Add Members 
                                                                </option>
                                                                <option value="Add Sellers" <?php if(isset($user_details->delegate) && ($user_details->delegate == "Add Sellers" )){ echo "selected"; } else { echo ""; } ?> >Add Sellers 
                                                                </option>
                                                                <option value="Add Agents" <?php if(isset($user_details->delegate) && ($user_details->delegate == "Add Agents" )){ echo "selected"; } else { echo ""; } ?> >Add Agents
                                                                </option>
                                                                <option value="Edit Pages" <?php if(isset($user_details->delegate) && ($user_details->delegate == "Edit Pages" )){ echo "selected"; } else { echo ""; } ?> >Edit Pages
                                                                </option>                                                                
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control" >
                                                                <option value="1" <?php if(isset($user_details->Active) && ($user_details->Active == "1" )){ echo "selected"; } else { echo ""; } ?> >Active</option>
                                                                <option value="0" <?php if(isset($user_details->Active) && ($user_details->Active == "0" )){ echo "selected"; } else { echo ""; } ?> >Inactive</option>
                                                            </select>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                <?php } } ?>
                                                </tbody>
                                            </table>
                                                    </div>
                                                   
                                                </div>                                               
                                            </div>                                            
                                        </div>
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
   

var base_url = '<?php echo base_url() ?>'; //form submited

$('.edit_table').Tabledit({
  url: base_url+'admin/update_admin_manager/',
  columns: {
    identifier: [0, 'id'],                    
    editable: [[2, 'fname'], [3, 'phone'], [4, 'email'], [5, 'password']]
  },
  onSuccess: function(data, textStatus, jqXHR) {
        window.setTimeout(function(){location.reload()})

    },
});
</script>

</body>



</html>