
<nav class="sidebar-nav">

                    <ul class="nav in side-menu">

                        <li class="<?php if($page_name == 'index'){ echo 'active'; }?>">
                            <a href="<?php echo base_url('Agent_dashboard/index'); ?>">
                                <i class="list-icon feather feather-command"></i>
                                <span class="hide-menu">Home</span>
                            </a> 
                        </li>

                        <li class="<?php if($page_name == 'marketing_link'){ echo 'active'; } ?>">
                            <a href="<?php echo base_url('Agent_dashboard/marketing_link'); ?>">
                                <!-- <i class="list-icon feather feather-user"></i> -->
                                <span class="hide-menu" style="font-size: 10px;">Create Agent Marketing Link</span>
                            </a>
                            <!-- <ul class="list-unstyled sub-menu collapse" aria-expanded="false">

                                <li class="<?php if($page_name == 'add_admin_manager'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/add_admin_manager'); ?>">Add Admin Members</a>
                                </li>
                                <li class="<?php if($page_name == 'view_admin_manager'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/view_admin_manager'); ?>">View Admin Members</a>
                                </li>
                            </ul> -->
                        </li>

                        <li class="<?php if($page_name == 'my_client_list'){ echo 'active'; }else if($page_name == 'view_agent_manager'){ echo 'active'; } ?>">
                              <a href="<?php echo base_url('Agent_dashboard/my_client_list'); ?>">
                                <!-- <i class="list-icon feather feather-user"></i> -->
                                <span class="hide-menu">My Clients List</span>
                              </a>
                            <!-- <ul class="list-unstyled sub-menu collapse" aria-expanded="false">

                                <li class="<?php if($page_name == 'add_agent_manager'){ echo 'active'; }?>" >
                                    <a href="<?php echo base_url('Admin/add_agent_manager'); ?>">Add Agent Members</a>
                                </li>
                                <li class="<?php if($page_name == 'view_agent_manager'){ echo 'active'; }?>" ">
                                    <a href="<?php echo base_url('Admin/view_agent_manager'); ?>">View Agent Members</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="<?php if($page_name == 'add_seller_manager'){ echo 'active'; }else if($page_name == 'view_seller_manager'){ echo 'active'; } ?>">
                            <a href="index.html">
                              <!-- <i class="list-icon feather feather-user"></i> -->
                                <span class="hide-menu" style="font-size: 10px;">Autohubb360 Downloads</span></a>
                           <!--  <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'add_seller_manager'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/add_seller_manager'); ?>">Add Seller Members</a>
                                </li>
                                <li class="<?php if($page_name == 'view_seller_manager'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/view_seller_manager'); ?>">View Seller Members</a>
                                </li>
                            </ul> -->
                        </li>
                        
                        <li class="<?php if($page_name == 'add_stock_page'){ echo 'active'; }else if($page_name == 'view_stock_page'){ echo 'active'; }else if($page_name == 'View_Parts'){ echo 'active'; } ?>">
                            <a href="#">
                                <!-- <i class="list-icon feather feather-feather"></i> -->
                                <span class="hide-menu">Messages</span>
                            </a>
                           <!--  <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'add_stock_page'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/add_stock_page'); ?>">Add Stock</a>
                                </li>
                                <li class="<?php if($page_name == 'view_stock_page'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/get_car_infomation'); ?>">View Car Stock</a>
                                </li>
                                <li class="<?php if($page_name == 'View_Parts'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/get_part_infomation'); ?>">View Car Parts</a>
                                </li>
                            </ul> -->
                        </li>

                        <li class="<?php if($page_name == 'about_us'){ echo 'active'; }else if($page_name == 'News_Feeds'){ echo 'active'; } ?>">
                            <a href="#">
                                <!-- <i class="list-icon feather feather-folder"></i> -->
                                <span class="hide-menu">Agent Training</span>
                            </a>
                           <!--  <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'about_us'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/about_us'); ?>">About Us</a>
                                </li>
                                <li class="<?php if($page_name == 'News_Feeds'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/News_Feeds'); ?>">NewsFeeds</a>
                                </li>
                            </ul> -->
                        </li>

                        <!-- <li><a href="#"><i class="list-icon feather feather-users"></i>Client List</a></li> -->
                        <li><a href="#"><i class="list-icon feather feather-layout"></i>Rewards</a></li>
                         <li><a href="#"><i class="list-icon feather feather-credit-card"></i>Payment</a></li>
                       <!--  <li class="<?php if($page_name == 'buyer_page'){ echo 'active'; }?>">
                            <a href="<?php echo base_url('Admin/buyer_page'); ?>">
                                <i class="list-icon feather feather-user-plus"></i>Buyers
                            </a>
                        </li>
                        <li class="<?php if($page_name == 'Message'){ echo 'active'; }?>">
                            <a href="<?php echo base_url('Admin/message'); ?>"><i class="list-icon feather feather-briefcase"></i>Messages</a>
                        </li>
                        <li><a>AUTOPARTS360</a></li>
                        <li><a href="#"><i class="list-icon feather feather-user"></i>Autoparts Seller</a></li>
 -->
                    </ul>
                    <!-- /.side-menu -->
                </nav>