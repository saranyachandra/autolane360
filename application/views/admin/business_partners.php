
<?php $this->load->view('includes/admin_css'); ?>

<style type="text/css">
    span{
        font-weight: bold;
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
                                            <h5>View Business Partners</h5>
                                        </div>
                                        <!-- /.widget-heading -->
                                        <div class="widget-body clearfix">
                                                <div class="tabs">
                                                        <ul class="nav nav-tabs">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" href="#add_about_page" data-toggle="tab" aria-expanded="true">Business Partners Details</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#view_about" data-toggle="tab" aria-expanded="true">View</a>
                                                            </li>
                                                        </ul>
                                                        <!-- /.nav-tabs -->
          <div class="tab-content">
            <div class="tab-pane active" id="add_about_page">
              <form id="partner_details_form" action="<?php echo base_url('admin/insert_Business_Partners'); ?>"  method="POST" enctype="multipart/form-data">

                    <div id="dynamic_row">
                      <div  id="bank_details_1">
                        <div id="result"></div> 
                       
                      <div class="col-lg-12 col-md-12"> 
                        <div class="col-lg-6 col-md-6">
                          <div class="row" style="margin-top: 20px;"> 
                              <div class="form-group col-lg-6 col-md-6">
                                 <input type="text" name="title[]" id="title_1" class="form-control required" placeholder="Title" autocomplete="off" >
                                
                              </div>
                          
                              <div class="form-group col-lg-6 col-md-6">
                                <input type="text" name="partner_name[]" id="partner_name_1" class="form-control required" placeholder="Business partner Name" autocomplete="off" >
                              </div>

                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                          <div class="row" style="margin-top: 20px;">
                          
                          <div class="col-md-6 col-lg-6 ">
                            <div class="form-group" >
                            <input  type="file" id="company_logo_1" name="company_logo[]" accept="image/*" class="required" >
                            </div>
                          </div>
                          </div>

                        </div>
                      </div>
                      <hr>
                      </div>
                    </div>

                      <div class='col-sm-12'> 
                        <div class='col-sm-5'>
                          <a href="JavaScript:void(0);" id="add_bank" data-nxt_partner_details="2">
                          <i class="fa fa-plus-circle"></i> Add Multiple Details </a>
                        </div>
                      </div>
                    
                    <div class="row" style="border:1px solid #f1f1f1; border-radius:5px; margin-top:15px;">
                      <div class="col-md-12 col-xs-12" style="margin-top: 20px;">
                       
                        <div class="row text-center">
                          <div class="col-lg-12 ">
                          <div class="form-actions btn-list">
                            <button type="submit" class="btn btn-primary" > Publish</button>                           
                          </div>
                          </div>
                        </div>

                      </div>                    
                    </div>
              </form> 
            </div>

                                                        <!-- viwe partners list -->
                        <div class="tab-pane" id="view_about">
                          <div id="delete_partner_result"></div>
                            <table id="news_feed_table" class="table table-bordered" style="width: 100%!important;" >
                                <thead>
                                  <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Partner Name</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Business Logo</th>
                                    <th scope="col">Option</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>

                                <tbody>
                                                            
                                  <?php
                                    $i= 1; 
                                    foreach ($partner_detail as $details) {
                                  ?>  
                                                            
                                  <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $details->partner_name; ?></td>
                                    <td><?php echo $details->title; ?></td>
                                    <td>
                                      <img style="height:100px;" class="img-responsive img-thumbnail" src="<?php echo $details->business_logo_url; ?>" alt="profile_pic">
                                    </td>
                                    <td>
                                      <a id='partner_details_id' href="<?php echo base_url('admin/delete_partner_details/'.$details->partner_id);?>">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> 
                                      </a>
                                    </td>
                                    <td>
                                      <input type="hidden" id="partner_id" value="<?php echo $details->partner_id;?>">
                                      <select class="active_status form-control" >
                                        <option value="1" <?php if(isset($details->active) && ($details->active == "1" )){ echo "selected"; } else { echo ""; } ?> >Active</option>
                                        <option value="0" <?php if(isset($details->active) && ($details->active == "0" )){ echo "selected"; } else { echo ""; } ?> >Inactive</option>
                                      </select>
                                    </td>
                                  </tr>

                                   <?php $i++; } ?>
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



function generate_bank_fields(count)
{  
  var bank  = ' <div  id="partner_details12_'+count+'"> <div class="col-lg-12 col-md-12"> <div class="col-lg-6 col-md-6"> <div class="row" style="margin-top: 20px;"> <div class="form-group col-lg-6 col-md-6"> <input type="text" name="title[]" id="title_'+count+'" class="form-control required" placeholder="Title" autocomplete="off" >  </div> <div class="form-group col-lg-6 col-md-6"> <input type="text" name="partner_name[]" id="partner_name_'+count+'" class="form-control required" placeholder="Business partner Name" autocomplete="off" > </div> </div> </div> <div class="col-lg-6 col-md-6"> <div class="row" style="margin-top: 20px;"> <div class="col-md-6 col-lg-6 "> <div class="form-group" > <input  type="file" id="company_logo_'+count+'" name="company_logo[]" accept="image/*" class="required" > </div>  </div><div class="form-group col-lg-1 col-md-1"> <a class="btn btn-danger remove_partner" style="padding: 5px;" href="JavaScript:void(0);" > <i class="fa fa-trash-o" aria-hidden="true"></i> </a> </div> </div> </div>  </div> <hr></div> ';

    return bank;
}
   

  $('#add_bank').click(function() //here add address
  {
        var nxtaddress_count = $(this).data("nxt_bank_details");

        var nxtaddressHTML = generate_bank_fields(nxtaddress_count);
       
        $('#dynamic_row').append(nxtaddressHTML); // Add field html

        nxtaddress_count++; //Increment field counter

        $(this).data('nxt_partner_details', nxtaddress_count); //update data nxtportion   
                 

  });

  $(document).on('click', '.remove_partner', function(e)
    {
      $(this).parents('[id^=partner_details12_]').remove();
    });

//policy form submit

var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", "#partner_details_form", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                             
                                  title:"required",                  
                                  partner_name: "required",
                                  company_logo:"required",
                                },
                               

                          messages: {                           
                                  title: {
                                      required: "Required", 
                                  }, 
                                  partner_name: {
                                      required: "Required ", 
                                  }, 
                                  company_logo: {
                                      required: "Required ", 
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
                       
                        $("#result").html('<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>  Your Details Successfully Updated. </div>');
                        document.getElementById("partner_details_form").reset(); //clear form data
                        window.setTimeout(function(){location.reload()},2000)
                        }
                        else 
                        {                       
                          $("#result").html('<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry!</strong> Something went wrong Try again. </div>');
                        }          
                    }

           });
    }     

 });


// delete bank details submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("click", "#partner_details_id", function(e){
         
        e.preventDefault(); 
        var url = $(this).attr('href');
        var formdata = new FormData(this);

        bootbox.confirm("Are you sure you want to delete?", function(result) {

            if(result)
               {
      
                  $.ajax({
                          url :url,
                          context:this,
                          type: 'POST',
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
                                $("#delete_partner_result").html('<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> Successfully Deleted  </div>');
                                window.setTimeout(function(){location.reload()},3000)
                                                                   
                              }else 
                               {                    
                                  $("#delete_partner_result").html('<div class="alert alert-success alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Sorry! Somethink went wrong. </div>');
                               }
                          }

                      });
                }
              });
        });
 });


//update status 

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("change", ".active_status", function(e){

        e.preventDefault();    

        var partner_id = ($(this).closest('td').find('#partner_id').val());
        var active_status = $(this).val();      
       
       bootbox.confirm("Are you sure you want to change", function(result) {

        if(result)
            {

                $.ajax({
                          url :base_url+'admin/update_partner_status/',
                          type: 'POST',
                          data: {id : partner_id, status : active_status},
                          dataType:'json',
                           
                          error: function(xhr,status,error)
                          {   
                              alert(xhr.responseText);
                          },  
                          
                          success: function(response) 
                          {                             
                            if(response.status == 'success')
                            {
                             
                              swal("Successfully Updated");
                            }
                             
                            else 
                            {                       
                               swal("Something went wrong");
                            }      
                          }

                        });
            }  
        });     
             
    });
 });


</script>
</body>



</html>