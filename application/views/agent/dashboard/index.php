
<?php $this->load->view('includes/admin_css'); ?>

<style type="text/css">
body,a, h1,h2,h3,h4,h5,h6, ul, li, span{
  font-family: 'Overpass', sans-serif !important  ;
}
  .product{
    position: relative;
    height: 100%;
    transition: all .4s;
    background-color: #fff;
  }

  .product:hover{
    box-shadow: 0 0 17px 0 rgba(0, 0, 0, 0.1);
  }

  .products-holder.type-2 .product:hover{
    box-shadow: none;
  }

  .product-description{
    position: relative;
    padding: 5px 20px 5px 20px;
  }

  .products-holder.type-2 .product-description,
  table .product-description{
    padding: 22px 0 0;
  }

  .product-description.no-rating .product-name{
    height: 50px;
  }

  .product-description p:not(.text-size-normal):not(.product-excerpt){
    font-size: 12px;
    line-height: 18px;
    letter-spacing: 0.1px;
  }

  .product-description p{
    color: #6d6f73;
  }

  .product-description > .btn{
    width: 100%;
  }

  .product-description p:not(:last-child){
    margin-bottom: 30px;
  }

  .product-description p.product-excerpt:not(:last-child){
    margin-bottom: 20px;
  }

  .product img{
    width: 100%;
  }

  .product .dealer-item .personal{
    text-transform: uppercase;
    color: #999a9d;
    font-size: 12px;
    line-height: 18px;
  }

  .product .dealer-item .personal:not(:last-child){
    margin-bottom: 5px;
  }

ul, li{
  list-style: none;
  margin: 0;
  padding: 0;
}

.product-price{
    font-size: 18px;
    font-family: 'Overpass', sans-serif;
    font-weight: 900;
  }
 .model-loc ul li{
    color: #31353c;
    font-size: 14px;
    line-height: 18px;
  }

    .model-loc ul li span{
      color: #999a9d;
      font-size: 12px;
      text-transform: uppercase;
      min-width: 66px;
      display: inline-block;
    }

  .products-holder.view-list > .row > [class*="col-"]{
    width: 100%;
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
                                            <h5>View Admin Members</h5>
                                        </div>
                                        <!-- /.widget-heading -->
    <div class="widget-body clearfix">
        <div class="tabs">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#Luxury" data-toggle="tab" aria-expanded="true">Luxury</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Dealership" data-toggle="tab" aria-expanded="true">Dealership Consigment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Used_Car" data-toggle="tab" aria-expanded="true">Used Car Minor Dents</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="#Uber-Taxi" data-toggle="tab" aria-expanded="true">Uber-Taxi Ready Cars</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#Commercial_Trucks" data-toggle="tab" aria-expanded="true">Commercial Trucks</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#Wholesale_Autoparts" data-toggle="tab" aria-expanded="true">Used Wholesale Autoparts</a>
                    </li> 
                </ul>
                                                        <!-- /.nav-tabs -->
            <div class="tab-content">

                <div class="tab-pane active" id="Luxury">
                   <div class="row">
                        <?php 
                            foreach ($car_detail as $car_details) {

                                if($car_details->category == 'Luxury Premium Cars')
                                {   
                        ?>
               
                     
                  <div class="col-md-2">                                                  
                    <div class="product" >
                        
                          <a href="#"><img style="height: 185px;" class="img-responsive"  src="<?php echo $car_details->admincar_stockimg;?>" alt=""></a>
                         
                          <div class="product-description text-left">
  
                            <h5 class="product-name" style="text-transform: capitalize;">
                              <a href="#"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> </a>
                            </h5>
  
                            <div class="pricing-area text-left">
                              <div class="product-price text-left">
                                
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
                              </div>
                            </div>

                            <div class="model-loc text-left">
                                <ul>
                                  <li><span>Mileage</span><?php echo $car_details->car_mileage;?></li>
                                  <li><span>Location</span><?php echo $car_details->car_location;?></li>
                                  <li ><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;">Price Includes Shipping to <?php echo $car_details->country;?></span></li>
                                </ul>
                            </div>
                            
                          </div>

                          <div class="product-description text-left" style="background-color:#dae0f3;font-family: 'Overpass', sans-serif !important">
                              <div class="model-loc text-left">
                                <ul>
                                  <li>
                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
                                    Sales Commision: <?php echo $car_details->commision_value;?> </span>
                                  </li>
                                  <li>
                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
                                      <strong>Commision Point:</strong> <?php echo $car_details->commision_points;?>
                                    </span>
                                  </li>
                                </ul>
                              </div>
                                   
                            <?php 
                              if($car_details->fav_status == 1){
                            ?>                     
                              <div class="model-info text-center" >
                                <input type="checkbox" name="car_status" style="width: 15px;height: 15px;border: 1px solid #333; " value=" <?php echo $car_details->fav_id;?>" checked>
                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="#">Add To My Page</a>
                              </div>
                            <?php } else{ ?>
                              <div class="model-info text-center" >
                                <input type="checkbox" name="car_status" style="width: 15px;height: 15px;border: 1px solid #333; " value=" <?php echo $car_details->carstock_id;?>" >
                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="#">Add To My Page</a>
                              </div>
                            <?php } ?>

                          </div>

                    </div> 
                  </div> 
                
                       <?php } } ?> 
                  </div> 
                                                            
                </div>

                    <!-- viwe stock from Dealership -->
                <div class="tab-pane" id="Dealership">
                    <?php 
                            foreach ($car_detail as $car_details) {

                                if($car_details->category == 'Dealership Consignment')
                                {   
                    ?>
                                                                    
                     <div class="col-md-2">                                                  
                    <div class="product" >
                        
                          <a href="#"><img style="height: 185px;" class="img-responsive"  src="<?php echo $car_details->admincar_stockimg;?>" alt=""></a>
                         
                          <div class="product-description text-left">
  
                            <h5 class="product-name" style="text-transform: capitalize;">
                              <a href="#"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> </a>
                            </h5>
  
                            <div class="pricing-area text-left">
                              <div class="product-price text-left">
                                
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
                              </div>
                            </div>

                            <div class="model-loc text-left">
                                <ul>
                                  <li><span>Mileage</span><?php echo $car_details->car_mileage;?></li>
                                  <li><span>Location</span><?php echo $car_details->car_location;?></li>
                                  <li ><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;">Price Includes Shipping to <?php echo $car_details->country;?></span></li>
                                </ul>
                            </div>
                            
                          </div>

                          <div class="product-description text-left" style="background-color:#dae0f3;font-family: 'Overpass', sans-serif !important">
                              <div class="model-loc text-left">
                                <ul>
                                  <li>
                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
                                    Sales Commision: <?php echo $car_details->commision_value;?> </span>
                                  </li>
                                  <li>
                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
                                      <strong>Commision Point:</strong> <?php echo $car_details->commision_points;?>
                                    </span>
                                  </li>
                                </ul>
                              </div>
                                   
                            <?php 
                              if($car_details->fav_status == 1){
                            ?>                     
                              <div class="model-info text-center" >
                                <input type="checkbox" name="car_status" style="width: 15px;height: 15px;border: 1px solid #333; " value=" <?php echo $car_details->fav_id;?>" checked>
                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="#">Add To My Page</a>
                              </div>
                            <?php } else{ ?>
                              <div class="model-info text-center" >
                                <input type="checkbox" name="car_status" style="width: 15px;height: 15px;border: 1px solid #333; " value=" <?php echo $car_details->carstock_id;?>" >
                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="#">Add To My Page</a>
                              </div>
                            <?php } ?>

                          </div>

                    </div> 
                  </div> 
                    <?php } } ?>                                           
                </div>

                    <!-- viwe stock from Used Car -->

                <div class="tab-pane" id="Used_Car">
                      <div class="row">
                        <?php 
                            foreach ($car_detail as $car_details) {

                                if($car_details->category == 'Used Car Minor Dent')
                                {   
                        ?>
               
                  <div class="col-md-2">                                                  
                    <div class="product" >
                        
                          <a href="#"><img style="height: 185px;" class="img-responsive"  src="<?php echo $car_details->admincar_stockimg;?>" alt=""></a>
                         
                          <div class="product-description text-left">
  
                            <h5 class="product-name" style="text-transform: capitalize;">
                              <a href="#"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> </a>
                            </h5>
  
                            <div class="pricing-area text-left">
                              <div class="product-price text-left">
                                
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
                              </div>
                            </div>

                            <div class="model-loc text-left">
                                <ul>
                                  <li><span>Mileage</span><?php echo $car_details->car_mileage;?></li>
                                  <li><span>Location</span><?php echo $car_details->car_location;?></li>
                                  <li ><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;">Price Includes Shipping to <?php echo $car_details->country;?></span></li>
                                </ul>
                            </div>
                            
                          </div>

                          <div class="product-description text-left" style="background-color:#dae0f3;font-family: 'Overpass', sans-serif !important">
                              <div class="model-loc text-left">
                                <ul>
                                  <li>
                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
                                    Sales Commision: <?php echo $car_details->commision_value;?> </span>
                                  </li>
                                  <li>
                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
                                      <strong>Commision Point:</strong> <?php echo $car_details->commision_points;?>
                                    </span>
                                  </li>
                                </ul>
                              </div>
                                   
                            <?php 
                              if($car_details->fav_status == 1){
                            ?>                     
                              <div class="model-info text-center" >
                                <input type="checkbox" name="car_status" style="width: 15px;height: 15px;border: 1px solid #333; " value=" <?php echo $car_details->fav_id;?>" checked>
                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="#">Add To My Page</a>
                              </div>
                            <?php } else{ ?>
                              <div class="model-info text-center" >
                                <input type="checkbox" name="car_status" style="width: 15px;height: 15px;border: 1px solid #333; " value=" <?php echo $car_details->carstock_id;?>" >
                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="#">Add To My Page</a>
                              </div>
                            <?php } ?>

                          </div>

                    </div> 
                  </div>   
                  
                
                       <?php } } ?> 
                  </div>                                              
                </div>

                <!-- Uber-Taxi -->

                 <div class="tab-pane" id="Uber-Taxi">
                      <div class="row">
                        <?php 
                            foreach ($car_detail as $car_details) {

                                if($car_details->category == 'Uber-Taxi Ready Cars')
                                {   
                        ?>
               
                     
                  <div class="col-md-2">                                                  
                    <div class="product" >
                        
                          <a href="#"><img style="height: 185px;" class="img-responsive"  src="<?php echo $car_details->admincar_stockimg;?>" alt=""></a>
                         
                          <div class="product-description text-left">
  
                            <h5 class="product-name" style="text-transform: capitalize;">
                              <a href="#"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> </a>
                            </h5>
  
                            <div class="pricing-area text-left">
                              <div class="product-price text-left">
                                
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
                              </div>
                            </div>

                            <div class="model-loc text-left">
                                <ul>
                                  <li><span>Mileage</span><?php echo $car_details->car_mileage;?></li>
                                  <li><span>Location</span><?php echo $car_details->car_location;?></li>
                                  <li ><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;">Price Includes Shipping to <?php echo $car_details->country;?></span></li>
                                </ul>
                            </div>
                            
                          </div>

                          <div class="product-description text-left" style="background-color:#dae0f3;font-family: 'Overpass', sans-serif !important">
                              <div class="model-loc text-left">
                                <ul>
                                  <li>
                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
                                    Sales Commision: <?php echo $car_details->commision_value;?> </span>
                                  </li>
                                  <li>
                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
                                      <strong>Commision Point:</strong> <?php echo $car_details->commision_points;?>
                                    </span>
                                  </li>
                                </ul>
                              </div>
                                   
                            <?php 
                              if($car_details->fav_status == 1){
                            ?>                     
                              <div class="model-info text-center" >
                                <input type="checkbox" name="car_status" style="width: 15px;height: 15px;border: 1px solid #333; " value=" <?php echo $car_details->fav_id;?>" checked>
                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="#">Add To My Page</a>
                              </div>
                            <?php } else{ ?>
                              <div class="model-info text-center" >
                                <input type="checkbox" name="car_status" style="width: 15px;height: 15px;border: 1px solid #333; " value=" <?php echo $car_details->carstock_id;?>" >
                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="#">Add To My Page</a>
                              </div>
                            <?php } ?>

                          </div>

                    </div> 
                  </div> 
                
                       <?php } } ?> 
                  </div>                                              
                </div>

                <!-- Commercial_Trucks -->
                 <div class="tab-pane" id="Commercial_Trucks">
                      <div class="row">
                        <?php 
                            foreach ($car_detail as $car_details) {

                                if($car_details->category == 'Commercial Trucks')
                                {   
                        ?>
               
                     
                    <div class="col-md-2">                                                  
                    <div class="product" >
                        
                          <a href="#"><img style="height: 185px;" class="img-responsive"  src="<?php echo $car_details->admincar_stockimg;?>" alt=""></a>
                         
                          <div class="product-description text-left">
  
                            <h5 class="product-name" style="text-transform: capitalize;">
                              <a href="#"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> </a>
                            </h5>
  
                            <div class="pricing-area text-left">
                              <div class="product-price text-left">
                                
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
                              </div>
                            </div>

                            <div class="model-loc text-left">
                                <ul>
                                  <li><span>Mileage</span><?php echo $car_details->car_mileage;?></li>
                                  <li><span>Location</span><?php echo $car_details->car_location;?></li>
                                  <li ><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;">Price Includes Shipping to <?php echo $car_details->country;?></span></li>
                                </ul>
                            </div>
                            
                          </div>

                          <div class="product-description text-left" style="background-color:#dae0f3;font-family: 'Overpass', sans-serif !important">
                              <div class="model-loc text-left">
                                <ul>
                                  <li>
                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
                                    Sales Commision: <?php echo $car_details->commision_value;?> </span>
                                  </li>
                                  <li>
                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
                                      <strong>Commision Point:</strong> <?php echo $car_details->commision_points;?>
                                    </span>
                                  </li>
                                </ul>
                              </div>
                                   
                            <?php 
                              if($car_details->fav_status == 1){
                            ?>                     
                              <div class="model-info text-center" >
                                <input type="checkbox" name="car_status" style="width: 15px;height: 15px;border: 1px solid #333; " value=" <?php echo $car_details->fav_id;?>" checked>
                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="#">Add To My Page</a>
                              </div>
                            <?php } else{ ?>
                              <div class="model-info text-center" >
                                <input type="checkbox" name="car_status" style="width: 15px;height: 15px;border: 1px solid #333; " value=" <?php echo $car_details->carstock_id;?>" >
                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="#">Add To My Page</a>
                              </div>
                            <?php } ?>

                          </div>

                    </div> 
                  </div>
                
                       <?php } } ?> 
                  </div>                                              
                </div>

                <!-- Used Wholesale Parts -->
                 <div class="tab-pane" id="Wholesale_Autoparts">
                      <div class="row">
                        <?php 
                            foreach ($car_detail as $car_details) {

                                if($car_details->category == 'Used Wholesale Parts')
                                {   
                        ?>
               
                     
                  <div class="col-md-2">                                                  
                    <div class="product" >
                        
                          <a href="#"><img style="height: 185px;" class="img-responsive"  src="<?php echo $car_details->admincar_stockimg;?>" alt=""></a>
                         
                          <div class="product-description text-left">
  
                            <h5 class="product-name" style="text-transform: capitalize;">
                              <a href="#"><?php echo $car_details->car_year." ".$car_details->car_brand." ".$car_details->car_model;?> </a>
                            </h5>
  
                            <div class="pricing-area text-left">
                              <div class="product-price text-left">
                                
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
                              </div>
                            </div>

                            <div class="model-loc text-left">
                                <ul>
                                  <li><span>Mileage</span><?php echo $car_details->car_mileage;?></li>
                                  <li><span>Location</span><?php echo $car_details->car_location;?></li>
                                  <li ><span style="font-size:11px!important; color:#f60; text-transform:none; margin-top:10px;">Price Includes Shipping to <?php echo $car_details->country;?></span></li>
                                </ul>
                            </div>
                            
                          </div>

                          <div class="product-description text-left" style="background-color:#dae0f3;font-family: 'Overpass', sans-serif !important">
                              <div class="model-loc text-left">
                                <ul>
                                  <li>
                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
                                    Sales Commision: <?php echo $car_details->commision_value;?> </span>
                                  </li>
                                  <li>
                                    <span style="font-size:11px!important; color:#333; text-transform:none; margin-top:5px;">
                                      <strong>Commision Point:</strong> <?php echo $car_details->commision_points;?>
                                    </span>
                                  </li>
                                </ul>
                              </div>
                                   
                            <?php 
                              if($car_details->fav_status == 1){
                            ?>                     
                              <div class="model-info text-center" >
                                <input type="checkbox" name="car_status" style="width: 15px;height: 15px;border: 1px solid #333; " value=" <?php echo $car_details->fav_id;?>" checked>
                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="#">Add To My Page</a>
                              </div>
                            <?php } else{ ?>
                              <div class="model-info text-center" >
                                <input type="checkbox" name="car_status" style="width: 15px;height: 15px;border: 1px solid #333; " value=" <?php echo $car_details->carstock_id;?>" >
                                <a style="color: #333;font-weight: bold;font-family: 'Overpass', sans-serif !important;" href="#">Add To My Page</a>
                              </div>
                            <?php } ?>

                          </div>

                    </div> 
                  </div> 
                
                       <?php } } ?> 
                  </div>                                              
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
        <footer class="footer">
          <span class="heading-font-family">Copyright @2018. All rights reserved. Autolane360
                Admin</span>
        </footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
<?php $this->load->view('includes/admin_js'); ?>

<script type="text/javascript">

var base_url = '<?php echo base_url() ?>';


//available from and to  date 
$(".available_from").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
});

$(".available_to").datetimepicker({      
  format:'M-d-Y',      
  timepicker:false, 
}); 



$(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            
            if($(this).prop("checked") == true){
                var carstock_id = $(this).val();
                var status = '1';
                
                bootbox.confirm("Are you sure you want to Add agent list", function(result) {

                if(result)
                  {

                    $.ajax({
                              url :base_url+'agent_dashboard/update_agentcar_status/',
                              type: 'POST',
                              data: {id : carstock_id, car_status: status},
                              dataType:'json',
                               
                              error: function(xhr,status,error)
                              {   
                                  alert(xhr.responseText);
                              },  
                              
                              success: function(response) 
                              {                             
                                if(response.status == 'success')
                                {
                                 
                                  swal("Successfully Updated... ");
                                }
                                 
                                else 
                                  {                       
                                    swal("Something went wrong...");
                                  }      
                              }

                          });
                  }  

                });     
            }

            else if($(this).prop("checked") == false){
                var carstock_id = $(this).val();
                var status = '0';
                
                bootbox.confirm("Are you sure you want to Remove", function(result) {

                if(result)
                  {

                    $.ajax({
                              url :base_url+'agent_dashboard/update_agentcar_status/',
                              type: 'POST',
                              data: {id : carstock_id, car_status: status},
                              dataType:'json',
                               
                              error: function(xhr,status,error)
                              {   
                                  alert(xhr.responseText);
                              },  
                              
                              success: function(response) 
                              {                             
                                if(response.status == 'update')
                                {
                                 
                                  swal(" Successfully Updated... ");
                                }
                                 
                                else 
                                  {                       
                                    swal("Something went wrong...");
                                  }      
                              }

                          });
                  }  

                });     
            }


        });
});   






</script>
</body>



</html>