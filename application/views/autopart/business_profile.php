

<?php $this->load->view('includes/agent_site_css'); ?>

<style type="text/css">

.table thead th {
	border: 1px solid #ddd!important;
}
.table td, .table th {
	border: 1px solid #ddd!important;
}
th
{
	text-align:center!important;
}
</style>
</head>

<body>

<?php $this->load->view('includes/agentsite_header'); ?>
<!-- hs Navigation End -->
<div class="btc_tittle_main_wrapper">
  <div class="btc_tittle_img_overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
        <div class="btc_tittle_left_heading">
          <h1>Charles Autos</h1>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
        <div class="btc_tittle_right_heading">
          <div class="btc_tittle_right_cont_wrapper">
            <ul>
              <li><a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
              <li>Charles Autos</li>
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
      <div class="col-md-6 col-sm-12 col-xs-12">
        <h4 style="font-weight:bold;">Business Profile</h4>
        <div class="row" style="margin-top:15px; line-height:40px;">
          <div class="col-md-12 col-sm-12 col-xs-12"> <i class="fa fa-user"></i> Charles Auto Nig LTD<br>
            <i class="fa fa-map-marker"></i> 2345 Alagbo Close Lekki 
            Lagos Nigeria<br>
            <i class="fa fa-phone"></i> Phone +234-80-555-67-567<br>
            <i class="fa fa-envelope"></i> charlesauto@gmail.com<br>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:25px;">
            <h4 style="font-weight:bold; margin-bottom:15px;">Registration Info</h4>
            <i class="fa fa-user"></i> Username : Charles Auto Nig LTD<br>
            <i class="fa fa-key"></i> Password: *********<br>
            <i class="fa fa-phone"></i> Phone: +234-80-555-34-5678<br>
            <i class="fa fa-map-marker"></i> City: Lagos Nigeria<br>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12 text-center" style="margin-top:25px;">
            <h4 style="font-weight:bold;">Membership ID</h4>
            <input type="text"  name="transaction_code" id='random_number' style="background-color:#163874; color:#fff; margin-top:15px; font-size:28px; padding:15px 10px; border-radius:5px;text-align: center;" readonly>

           <!--  <div class="x_slider_checkbox_bottom col-md-12" style="background-color:#163874; color:#fff; margin-top:15px; font-size:28px; padding:15px 10px; border-radius:5px;"> <i class="fa fa-file-o"></i> 0456723 
            </div> -->
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12 text-center" style="margin-top:25px; font-size:13px;">
            <div class="row">
              <div class="col-md-5 col-sm-12"><i class="fa fa-user"></i> MEMBERSHIP STATUS: </div>
              <div class="col-md-2 col-sm-12"><span style="color:#ccc;">PENDING</span></div>
              <div class="col-md-3 col-sm-12"><span style="color:#389306;"><i class="fa fa-check"></i> APPROVED</span></div>
              <div class="col-md-2 col-sm-12"><span style="color:#f00;">SUSPENDED</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <h4 style="font-weight:bold;">MY BUSINESS CAR PARTS LIST</h4>

        <div class="row" style="margin-top:20px; margin-bottom:20px;">
          <div class="col-md-4 col-sm-12 col-xs-12 text-center" >
            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#fff; box-shadow:5px 5px 5px 0px; padding-top:10px;  padding-bottom:10px; border:1px solid #f3f3f3;">
              <img src="<?php echo base_url('assets/agent-assets/images/car-logos/1.png');?>"  alt=""/><br>
              <input type="checkbox" >
              <span style="color:#333;">&nbsp;&nbsp;Acura</span>
            </div>            
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12 text-center">
            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#fff; box-shadow:5px 5px 5px 0px; padding-top:10px; padding-bottom:10px;  border:1px solid #f3f3f3;">
              <img src="<?php echo base_url('assets/agent-assets/images/car-logos/2.png');?>"  alt=""/><br>
              <input type="checkbox">
              <span style="color:#333;">&nbsp;&nbsp;Audi</span>
            </div>
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12 text-center">
            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#fff; box-shadow:5px 5px 5px 0px; padding-top:10px; padding-bottom:10px;  border:1px solid #f3f3f3;">
              <img src="<?php echo base_url('assets/agent-assets/images/car-logos/3.png');?>"  alt=""/><br>
              <input type="checkbox">
              <span style="color:#333;">&nbsp;&nbsp;BMW</span>
            </div>
          </div>

        </div>

        <div class="row" style="margin-top:20px; margin-bottom:20px;">
          <div class="col-md-4 col-sm-12 col-xs-12 text-center">
            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#fff; box-shadow:5px 5px 5px 0px; padding-top:10px; padding-bottom:10px;  border:1px solid #f3f3f3;"><img src="<?php echo base_url('assets/agent-assets/images/car-logos/4.png');?>"  alt=""/><br>
              <input type="checkbox">
              <span style="color:#333;">&nbsp;&nbsp;Bentley</span></div>
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12 text-center">
            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#fff; box-shadow:5px 5px 5px 0px; padding-top:10px; padding-bottom:10px;  border:1px solid #f3f3f3;"><img src="<?php echo base_url('assets/agent-assets/images/car-logos/5.png');?>"  alt=""/><br>
              <input type="checkbox">
              <span style="color:#333;">&nbsp;&nbsp;Buick</span></div>
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12 text-center">
            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#fff; box-shadow:5px 5px 5px 0px; padding-top:10px; padding-bottom:10px;  border:1px solid #f3f3f3;"><img src="<?php echo base_url('assets/agent-assets/images/car-logos/6.png');?>"  alt=""/><br>
              <input type="checkbox">
              <span style="color:#333;">&nbsp;&nbsp;Cadillac</span></div>
          </div>
        </div>

        <div class="row" style="margin-top:20px;">
          <div class="col-md-4 col-sm-12 col-xs-12 text-center" >
            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#fff; box-shadow:5px 5px 5px 0px; padding-top:10px;  padding-bottom:10px; border:1px solid #f3f3f3;"><img src="<?php echo base_url('assets/agent-assets/images/car-logos/7.png');?>"  alt=""/><br>
              <input type="checkbox">
              <span style="color:#333;">&nbsp;&nbsp;Chevrolet</span></div>
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12 text-center">
            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#fff; box-shadow:5px 5px 5px 0px; padding-top:10px; padding-bottom:10px;  border:1px solid #f3f3f3;"><img src="<?php echo base_url('assets/agent-assets/images/car-logos/8.png');?>"  alt=""/><br>
              <input type="checkbox">
              <span style="color:#333;">&nbsp;&nbsp;Chrysler</span></div>
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12 text-center">
            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#fff; box-shadow:5px 5px 5px 0px; padding-top:10px; padding-bottom:10px;  border:1px solid #f3f3f3;"><img src="<?php echo base_url('assets/agent-assets/images/car-logos/9.png');?>"  alt=""/><br>
              <input type="checkbox">
              <span style="color:#333;">&nbsp;&nbsp;Dodge</span></div>
          </div>
        </div>

        <div class="row" style="margin-bottom:20px;">
          <div class="col-md-12 col-sm-12">
            <div class="col-md-4 col-sm-12 x_slider_checout_right">
              <ul>
                <li><a href="#" style="width:100%;"> <i class="fa fa-plus"></i>&nbsp;&nbsp; Add More</a> </li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-12 x_slider_checout_right">
              <ul>
                <li><a href="#"  style="width:100%; background:#08207F"> <i class="fa fa-plus"></i>&nbsp;&nbsp; Save</a> </li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-12 x_slider_checout_right">
              <ul>
                <li><a href="#"  style="width:100%; background:#f00"> <i class="fa fa-trash"></i>&nbsp;&nbsp; Delete</a> </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row" style="padding-left:15px; padding-right:15px;">
          <div class="col-md-12 col-sm-12">
            <div class="row" style="margin-bottom:20px; border:1px solid #ccc; padding:5px;">
              <div class="col-md-3 col-sm-6"><img src="<?php echo base_url('assets/agent-assets/images/admin_img.jpg');?>" class="rounded-circle img-fluid" alt="user"/></div>
              <div class="col-md-9 col-sm-6"><span style="font-size:18px; color:#f60;">John Adams</span> <br>
                <span style="font-size:14px; color:#333;">SAN0656565</span> <br>
                <span style="font-size:12px; color:#333;">San Antonio Texas</span></div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-12 text-center" style="margin-top:15px; margin-bottom:15px;">
          <h4 style="font-weight:bold;">Membership Type</h4>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th></th>
                <th align="center" valign="middle">Standard Member</th>
                <th align="center" valign="middle">Premium Member</th>
                <th align="center" valign="middle">Gold Member</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Member Enrollment</td>
                <td align="center">Pay As You Buy</td>
                <td align="center">USA Credit Facility</td>
                <td align="center">Full USA/Nigeria Credit Facility</td>
              </tr>
              <tr>
                <td>Yearly Subscription</td>
                <td align="center">No</td>
                <td align="center">Yes</td>
                <td align="center">Yes</td>
              </tr>
              <tr>
                <td>Credit Facility</td>
                <td align="center">No</td>
                <td align="center">Partial</td>
                <td align="center">Full</td>
              </tr>
              <tr>
                <td>Max Hold Period</td>
                <td align="center">2 Days</td>
                <td align="center">5 Days</td>
                <td align="center">5 Days</td>
              </tr>
              <tr>
                <td>Distribution Center</td>
                <td align="center">No</td>
                <td align="center">No</td>
                <td align="center">Yes</td>
              </tr>
              <tr>
                <td>Franchise Opportunity</td>
                <td align="center">No</td>
                <td align="center">Yes</td>
                <td align="center">Yes</td>
              </tr>
              <tr>
                <td>Member Enrollment Fee
                  </td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox">
                  <span style="color:#333;">&nbsp;&nbsp;Nigeria</span>
                  
                  </td>
                <td align="center">Free</td>
                <td align="center">N150,000</td>
                <td align="center">N500,000</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox">
                  <span style="color:#333;">&nbsp;&nbsp;Ghana</span>
                  </td>
                <td align="center">Free</td>
                <td align="center">C2,310</td>
                <td align="center">C7,720</td>
              </tr>
              <tr>
                <td>
                 
                  </td>
                <td align="center"><a href="#" style="background-color:#E76710; color:#fff; padding:10px 20px; border-radius:5px;"> Select</a></td>
                <td align="center"><a href="#" style="background-color:#E76710; color:#fff; padding:10px 20px; border-radius:5px;"> Select</a></td>
                <td align="center"><a href="#" style="background-color:#E76710; color:#fff; padding:10px 20px; border-radius:5px;"> Select</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- btc team Wrapper End -->

<div class="x_copyr_main_wrapper float_left"> <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
  <div class="container">
    <p>Copyright © 2019 Autohub360 Agent. All rights reserved.</p>
  </div>
</div>

<?php $this->load->view('includes/agent_site_js') ?>
<!-- custom js-->

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

</script>

</body>
</html>
