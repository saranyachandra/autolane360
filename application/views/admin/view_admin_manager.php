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
                        </figure>
                        <a href="#" class="text-muted side-user-link"><i class="feather feather-settings list-icon"></i></a>
                    </div>
                    <!-- /.d-inline-block -->
                    <div class="lh-14 mr-t-5"><a href="#" class="hide-menu mt-3 mb-0 side-user-heading fw-500">Emeka
                            Daniels</a>
                        <br>
                        <small class="hide-menu">Super Admin</small>
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
                        <li class="breadcrumb-item"><a href="#">Dashboard</a>
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
                                        <h5>View Admin Members</h5>
                                    </div>
                                    <!-- /.widget-heading -->
                                    <div class="widget-body clearfix">
                                        <div class="tabs">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#USA" data-toggle="tab"
                                                       aria-expanded="true">USA</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#Nigeria" data-toggle="tab"
                                                       aria-expanded="true">Nigeria</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#Ghana" data-toggle="tab"
                                                       aria-expanded="true">Ghana</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#uk" data-toggle="tab"
                                                       aria-expanded="true">UK</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#Canada" data-toggle="tab"
                                                       aria-expanded="true">Canada</a>
                                                </li>

                                            </ul>
                                            <!-- /.nav-tabs -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="USA">
                                                    <table class="table table-responsive edit_table">
                                                        <thead>
                                                        <tr>
                                                            <th style="display: none;"></th>
                                                            <th>img</th>
                                                            <th data-editable>First Name</th>
                                                            <th data-editable>Last Name</th>
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
                                                        foreach ($admin_user_detail as $user_details) {

                                                            if ($user_details->admin_country == 'United States') {
                                                                ?>
                                                                <tr>
                                                                    <td style="display: none;"><?php echo $user_details->admin_id; ?></td>

                                                                    <td>
                                                                        <img style="width: 50px;height: 50px;border-radius: 50px;"
                                                                             src="<?php echo $user_details->image; ?>"
                                                                             class="img-responsive"/>
                                                                    </td>
                                                                    <td><?php echo $user_details->admin_fname; ?> </td>
                                                                    <td><?php echo $user_details->admin_lname; ?></td>
                                                                    <td><?php echo $user_details->admin_phone; ?></td>
                                                                    <td><?php echo $user_details->admin_email; ?></td>
                                                                    <td><?php echo $user_details->admin_password; ?></td>
                                                                    <td><?php echo $user_details->delegate; ?></td>

                                                                    <td>
                                                                        <select class="form-control">
                                                                            <option value="1" <?php if (isset($user_details->Active) && ($user_details->Active == "1")) {
                                                                                echo "selected";
                                                                            } else {
                                                                                echo "";
                                                                            } ?> >Active
                                                                            </option>
                                                                            <option value="0" <?php if (isset($user_details->Active) && ($user_details->Active == "0")) {
                                                                                echo "selected";
                                                                            } else {
                                                                                echo "";
                                                                            } ?> >Inactive
                                                                            </option>
                                                                        </select>
                                                                    </td>

                                                                </tr>
                                                            <?php }
                                                        } ?>

                                                        </tbody>
                                                    </table>
                                                </div>

                                                <!-- viwe stock from nigeria -->
                                                <div class="tab-pane" id="Nigeria">
                                                    <table class="table edit_table table-responsive">
                                                        <thead>
                                                        <tr>
                                                            <th style="display: none;"></th>
                                                            <th>img</th>
                                                            <th data-editable>First Name</th>
                                                            <th data-editable>Last Name</th>
                                                            <th data-editable>Phone</th>
                                                            <th data-editable>Email</th>
                                                            <th data-editable>Password</th>
                                                            <th>Delegation</th>
                                                            <th>Status</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        foreach ($admin_user_detail as $user_details) {
                                                            if ($user_details->admin_country == 'Nigeria') {
                                                                ?>
                                                                <tr>
                                                                    <td style="display: none;"> <?php echo $user_details->admin_id; ?></td>
                                                                    <td>
                                                                        <img style="width: 50px;height: 50px;border-radius: 50px;"
                                                                             src="<?php echo $user_details->image; ?>"
                                                                             class="img-responsive"/>
                                                                    </td>
                                                                    <td><?php echo $user_details->admin_fname; ?> </td>
                                                                    <td><?php echo $user_details->admin_lname; ?></td>
                                                                    <td><?php echo $user_details->admin_phone; ?></td>
                                                                    <td><?php echo $user_details->admin_email; ?></td>
                                                                    <td><?php echo $user_details->admin_password; ?></td>

                                                                    <td><?php echo $user_details->delegate; ?></td>

                                                                    <td>
                                                                        <select class="form-control">
                                                                            <option value="1" <?php if (isset($user_details->Active) && ($user_details->Active == "1")) {
                                                                                echo "selected";
                                                                            } else {
                                                                                echo "";
                                                                            } ?> >Active
                                                                            </option>
                                                                            <option value="0" <?php if (isset($user_details->Active) && ($user_details->Active == "0")) {
                                                                                echo "selected";
                                                                            } else {
                                                                                echo "";
                                                                            } ?> >Inactive
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                            <?php }
                                                        } ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <!-- viwe stock from ghana -->

                                                <div class="tab-pane" id="Ghana">
                                                    <table class="table edit_table table-responsive">
                                                        <thead>
                                                        <tr>
                                                            <th style="display: none;"></th>
                                                            <th>Img</th>
                                                            <th data-editable>First Name</th>
                                                            <th data-editable>Last Name</th>
                                                            <th data-editable>Phone</th>
                                                            <th data-editable>Email</th>
                                                            <th data-editable>Password</th>
                                                            <th>Delegation</th>
                                                            <th>Status</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        foreach ($admin_user_detail as $user_details) {
                                                            if ($user_details->admin_country == 'Ghana') {
                                                                ?>
                                                                <tr>
                                                                    <td style="display: none;"> <?php echo $user_details->admin_id; ?></td>
                                                                    <td>
                                                                        <img style="width: 50px;height: 50px;border-radius: 50px;"
                                                                             src="<?php echo $user_details->image; ?>"
                                                                             class="img-responsive"/>
                                                                    </td>
                                                                    <td><?php echo $user_details->admin_fname; ?> </td>
                                                                    <td><?php echo $user_details->admin_lname; ?></td>
                                                                    <td><?php echo $user_details->admin_phone; ?></td>
                                                                    <td><?php echo $user_details->admin_email; ?></td>
                                                                    <td><?php echo $user_details->admin_email; ?></td>

                                                                    <td><?php echo $user_details->delegate; ?></td>

                                                                    <td>
                                                                        <select class="form-control">
                                                                            <option value="1" <?php if (isset($user_details->Active) && ($user_details->Active == "1")) {
                                                                                echo "selected";
                                                                            } else {
                                                                                echo "";
                                                                            } ?> >Active
                                                                            </option>
                                                                            <option value="0" <?php if (isset($user_details->Active) && ($user_details->Active == "0")) {
                                                                                echo "selected";
                                                                            } else {
                                                                                echo "";
                                                                            } ?> >Inactive
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                            <?php }
                                                        } ?>

                                                        </tbody>
                                                    </table>
                                                </div>

                                                <!-- viwe stock from UK -->

                                                <div class="tab-pane" id="uk">
                                                    <table class="table edit_table table-responsive">
                                                        <thead>
                                                        <tr>
                                                            <th style="display: none;"></th>
                                                            <th>Img</th>
                                                            <th data-editable>First Name</th>
                                                            <th data-editable>Last Name</th>
                                                            <th data-editable>Phone</th>
                                                            <th data-editable>Email</th>
                                                            <th data-editable>Password</th>
                                                            <th>Delegation</th>
                                                            <th>Status</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        foreach ($admin_user_detail as $user_details) {
                                                            if ($user_details->admin_country == 'UK') {
                                                                ?>
                                                                <tr>
                                                                    <td style="display: none;"> <?php echo $user_details->admin_id; ?></td>
                                                                    <td>
                                                                        <img style="width: 50px;height: 50px;border-radius: 50px;"
                                                                             src="<?php echo $user_details->image; ?>"
                                                                             class="img-responsive"/>
                                                                    </td>
                                                                    <td><?php echo $user_details->admin_fname; ?> </td>
                                                                    <td><?php echo $user_details->admin_lname; ?></td>
                                                                    <td><?php echo $user_details->admin_phone; ?></td>
                                                                    <td><?php echo $user_details->admin_email; ?></td>
                                                                    <td><?php echo $user_details->admin_password; ?></td>
                                                                    <td><?php echo $user_details->delegate; ?></td>

                                                                    <td>
                                                                        <select class="form-control">
                                                                            <option value="1" <?php if (isset($user_details->Active) && ($user_details->Active == "1")) {
                                                                                echo "selected";
                                                                            } else {
                                                                                echo "";
                                                                            } ?> >Active
                                                                            </option>
                                                                            <option value="0" <?php if (isset($user_details->Active) && ($user_details->Active == "0")) {
                                                                                echo "selected";
                                                                            } else {
                                                                                echo "";
                                                                            } ?> >Inactive
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                            <?php }
                                                        } ?>

                                                        </tbody>
                                                    </table>
                                                </div>

                                                <!-- viwe stock from ghana -->

                                                <div class="tab-pane" id="Canada">
                                                    <table class="table edit_table table-responsive">
                                                        <thead>
                                                        <tr>
                                                            <th style="display: none;"></th>
                                                            <th>Img</th>
                                                            <th data-editable>First Name</th>
                                                            <th data-editable>Last Name</th>
                                                            <th data-editable>Phone</th>
                                                            <th data-editable>Email</th>
                                                            <th data-editable>Password</th>
                                                            <th>Delegation</th>
                                                            <th>Status</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        foreach ($admin_user_detail as $user_details) {
                                                            if ($user_details->admin_country == 'Canada') {
                                                                ?>
                                                                <tr>
                                                                    <td style="display: none;"><?php echo $user_details->admin_id; ?></td>

                                                                    <td>
                                                                        <img style="width: 50px;height: 50px;border-radius: 50px;"
                                                                             src="<?php echo $user_details->image; ?>"
                                                                             class="img-responsive"/>
                                                                    </td>
                                                                    <td><?php echo $user_details->admin_fname; ?> </td>
                                                                    <td><?php echo $user_details->admin_lname; ?></td>
                                                                    <td><?php echo $user_details->admin_phone; ?></td>
                                                                    <td><?php echo $user_details->admin_email; ?></td>
                                                                    <td><?php echo $user_details->admin_password; ?></td>
                                                                    <td><?php echo $user_details->delegate; ?></td>

                                                                    <td>
                                                                        <select class="form-control">
                                                                            <option value="1" <?php if (isset($user_details->Active) && ($user_details->Active == "1")) {
                                                                                echo "selected";
                                                                            } else {
                                                                                echo "";
                                                                            } ?> >Active
                                                                            </option>
                                                                            <option value="0" <?php if (isset($user_details->Active) && ($user_details->Active == "0")) {
                                                                                echo "selected";
                                                                            } else {
                                                                                echo "";
                                                                            } ?> >Inactive
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                            <?php }
                                                        } ?>

                                                        </tbody>
                                                    </table>
                                                </div>


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


    var base_url = '<?php echo base_url() ?>'; //form submited

    $('.edit_table').Tabledit({
        url: base_url + 'admin/update_admin_manager/',
        columns: {
            identifier: [0, 'id'],
            editable: [[2, 'fname'], [3, 'lname'], [4, 'phone'], [5, 'email'], [6, 'password']]
        },
        onSuccess: function (data, textStatus, jqXHR) {
            window.setTimeout(function () {
                location.reload()
            })

        },
    });

</script>

</body>


</html>