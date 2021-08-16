
<nav class="sidebar-nav">

                    <ul class="nav in side-menu">

                        <li class="<?php if($page_name == 'index'){ echo 'active'; }?>">
                            <a href="<?php echo base_url('Admin/index'); ?>">
                                <i class="list-icon feather feather-command"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a> 
                        </li>

                        <li class="<?php if($page_name == 'add_admin_manager'){ echo 'active'; }else if($page_name == 'view_admin_manager'){ echo 'active'; } ?>">
                            <a href="#">
                                <i class="list-icon feather feather-user"></i>
                                <span class="hide-menu">Admin Manager</span>
                            </a>
                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">

                                <li class="<?php if($page_name == 'add_admin_manager'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/add_admin_manager'); ?>">Add Admin Members</a>
                                </li>
                                <li class="<?php if($page_name == 'view_admin_manager'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/view_admin_manager'); ?>">View Admin Members</a>
                                </li>
                            </ul>
                        </li>

                        <li class="<?php if($page_name == 'add_agent_manager'){ echo 'active'; }else if($page_name == 'view_agent_manager'){ echo 'active'; } ?>">
                            <a href="#">
                                <i class="list-icon feather feather-user"></i>
                                <span class="hide-menu">Agent Manager</span></a>
                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">

                                <li class="<?php if($page_name == 'add_agent_manager'){ echo 'active'; }?>" >
                                    <a href="<?php echo base_url('Admin/add_agent_manager'); ?>">Add Agent Members</a>
                                </li>
                                <li class="<?php if($page_name == 'view_agent_manager'){ echo 'active'; }?>" ">
                                    <a href="<?php echo base_url('Admin/view_agent_manager'); ?>">View Agent Members</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php if($page_name == 'add_seller_manager'){ echo 'active'; }else if($page_name == 'view_seller_manager'){ echo 'active'; } ?>">
                            <a href="index.html"><i class="list-icon feather feather-user"></i>
                                <span class="hide-menu">Seller Manager</span></a>
                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'add_seller_manager'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/add_seller_manager'); ?>">Add Seller Members</a>
                                </li>
                                <li class="<?php if($page_name == 'view_seller_manager'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/view_seller_manager'); ?>">View Seller Members</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="<?php if($page_name == 'add_stock_page'){ echo 'active'; }else if($page_name == 'view_stock_page'){ echo 'active'; }else if($page_name == 'View_Parts'){ echo 'active'; } ?>">
                            <a href="#">
                                <i class="list-icon feather feather-feather"></i>
                                <span class="hide-menu">Stock Update</span>
                            </a>
                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'add_stock_page'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/add_stock_page'); ?>">Add Stock</a>
                                </li>
                                <li class="<?php if($page_name == 'view_stock_page'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/get_car_infomation'); ?>">View Car Stock</a>
                                </li>
                                <li class="<?php if($page_name == 'View_Parts'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/get_part_infomation'); ?>">View Car Parts</a>
                                </li>
                            </ul>
                        </li>

                        <li class="<?php if($page_name == 'about_us'){ echo 'active'; }else if($page_name == 'News_Feeds'){ echo 'active'; } else if($page_name == 'bank_details'){ echo 'active'; } else if($page_name == 'Video'){ echo 'active'; } else if($page_name == 'Business_Partners'){ echo 'active'; }?>">
                            <a href="#">
                                <i class="list-icon feather feather-folder"></i>
                                <span class="hide-menu">Pages</span>
                            </a>
                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'about_us'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/about_us'); ?>">About Us</a>
                                </li>
                                <li class="<?php if($page_name == 'News_Feeds'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/News_Feeds'); ?>">NewsFeeds</a>
                                </li>
                                <li class="<?php if($page_name == 'bank_details'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/bank_details'); ?>">Bank Details</a>
                                </li>
                                <li class="<?php if($page_name == 'Video'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/upload_video'); ?>">Upload Video</a>
                                </li>
                                <li class="<?php if($page_name == 'Business_Partners'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/Business_Partners'); ?>">Business Partners</a>
                                </li>

                            </ul>
                        </li>

                        <li><a href="#"><i class="list-icon feather feather-layout"></i>Direct Buy Lane</a></li>
                        <li class="<?php if($page_name == 'buyer_page'){ echo 'active'; }?>">
                            <a href="<?php echo base_url('Admin/buyer_page'); ?>">
                                <i class="list-icon feather feather-user-plus"></i>Buyers
                            </a>
                        </li>
                        <li class="<?php if($page_name == 'Message'){ echo 'active'; }?>">
                            <a href="<?php echo base_url('Admin/message'); ?>"><i class="list-icon feather feather-briefcase"></i>Messages</a>
                        </li>
                        <li><a>CARPARTS360</a></li>

                        <li class="<?php if($page_name == 'Registed Customer'){ echo 'active'; }else if($page_name == 'upload_car_part'){ echo 'active'; } else if($page_name == 'car_part_order'){ echo 'active'; } else if($page_name == 'view_all_carpart'){ echo 'active'; }?>">
                            <a href="#"><i class="list-icon feather feather-user"></i>Car Parts</a>
                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'Registed Customer'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/view_carpart_customer'); ?>">Registed Customer</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'upload_car_part'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/upload_car_part'); ?>">Upload Car Part</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'view_all_carpart'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/view_all_carpart'); ?>">View All Car Part</a>
                                </li>
                            </ul>

                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'car_part_order'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/view_carpart_order'); ?>"> Car Part Order</a>
                                </li>
                            </ul>

                        </li>

                        <li class="<?php if($page_name == 'upload_cars'){ echo 'active'; } else if($page_name == 'view_agent_car_info'){ echo 'active'; } else if($page_name == 'order_home_page'){ echo 'active'; }else if($page_name == 'car_sale_invoice'){ echo 'active'; }else if($page_name == 'all_customer'){ echo 'active'; } else if($page_name == 'Add_Agent_Car_Listing'){ echo 'active'; } else if($page_name == 'view_agent_car_listing'){ echo 'active'; }?>">
                            <a href="#">
                                <i class="list-icon feather feather-user"></i>
                                <span class="hide-menu">Order Dashboard</span>
                            </a>
                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'order_home_page'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/order_home_page'); ?>">Order Home Page</a>
                                </li>
                            </ul>

                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'view_agent_car_info'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/view_agent_car_info'); ?>">View Cars</a>
                                </li>
                            </ul>

                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'car_sale_invoice'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/car_sale_invoice'); ?>">Car Sale Invoice</a>
                                </li>
                            </ul>

                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'all_customer'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/all_customer'); ?>">All Customer</a>
                                </li>
                            </ul>

                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'Add_Agent_Car_Listing'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/common_agent_upload_car'); ?>">Add Agent Car Listing</a>
                                </li>
                            </ul>

                            <ul class="list-unstyled sub-menu collapse" aria-expanded="false">
                                <li class="<?php if($page_name == 'view_agent_car_listing'){ echo 'active'; }?>">
                                    <a href="<?php echo base_url('Admin/view_agent_car_list'); ?>">View Agent Car Listing</a>
                                </li>
                            </ul>

                        </li>

                    </ul>
                    <!-- /.side-menu -->
                </nav>