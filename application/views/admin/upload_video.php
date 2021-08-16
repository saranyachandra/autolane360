
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
                                            <h5>View Admin Members</h5>
                                        </div>
                                        <!-- /.widget-heading -->
                                        <div class="widget-body clearfix">
                                                <div class="tabs">
                                                        <ul class="nav nav-tabs">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" href="#add_about_page" data-toggle="tab" aria-expanded="true">About</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#view_about" data-toggle="tab" aria-expanded="true">View</a>
                                                            </li>
                                                          
                                                        </ul>
                                                        <!-- /.nav-tabs -->
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="add_about_page">
                                                                <form id="video_form" action="<?php echo base_url('admin/insert_video'); ?>"  method="POST" enctype="multipart/form-data">

                                                                <div id="video_result"></div>
                                                                 
                                                                <div class="col-lg-12 col-md-12"> 
                                                                  <div class="row"> 
                                                                    <div class="form-group col-lg-6 col-md-6">
                                                                      <span>Title Here</span>
                                                                      <input type="text" id="about_title_1" name="video_title" class="form-control required" placeholder="Enter Here" autocomplete="off">
                                                                    </div>
                                                                  </div>

                                                                  <div class="row"> 
                                                                    <div class="form-group col-lg-6 col-md-6">
                                                                      <span>Select Video</span>
                                                                      <input type="file" name="agent_video" class="form-control" accept="video/*"> 
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                                                                                 
                                                                <div class="row" >
                                                                  <div class="col-md-12 col-xs-12" style="margin-top: 20px;">
                                                                    <div class="row text-center">
                                                                      <div class="col-lg-12 ">
                                                                      <div class="form-actions btn-list">
                                                                        <button type="submit" class="btn btn-primary" > Submit</button>                           
                                                                      </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>                  
                                                                </div>

                                                              </form> 
                                                            </div>

                                                        <!-- viwe about -->
                                                    <div class="tab-pane" id="view_about">
                                                        <div id="delete_video_result"></div>
                                                        <table id="news_feed_table" class="table table-bordered" style="width: 100%!important;" >
                                                          <thead>
                                                            <tr>
                                                              <th scope="col">S.No</th>
                                                              <th scope="col">Title</th>
                                                              <th scope="col">video</th>
                                                              <th scope="col">Created At</th>
                                                              <th scope="col">Delete</th>
                                                            </tr>
                                                          </thead>

                                                          <tbody>
                                                            
                                                          <?php 
                                                              $i = 1;
                                                              foreach ($video_detail as $details) {
                                                          ?>                         

                                                            <tr>
                                                              <th scope="row"> 
                                                                <?php echo $i; ?>
                                                              </th>

                                                              <td><?php echo $details->video_title;?></td>
                                                            
                                                              <td>                                                                
                                                               <video width="200" controls>
                                                                  <source src="<?php echo $details->video_url;?>" type="video/mp4">
                                                                  <source src="mov_bbb.ogg" type="video/ogg">
                                                                </video>
                                                              </td>
                                                             
                                                              <td>
                                                                <?php 
                                                                     $timestamp = strtotime($details->created_at);
                                                                     echo date('M-d-Y', $timestamp);  
                                                                ?>
                                                              </td>
                                                                    
                                                              <td>
                                                                <a class="btn btn-danger" style="padding: 5px;" href="<?php echo base_url('admin/delete_video/'.$details->video_id); ?>" id="delete_video">
                                                                 delete
                                                                </a>                                                             
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


//policy form submit

var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", "#video_form", function(e){

        e.preventDefault();

        $(this).validate({ 
                          rules: {                             
                                  video_title:"required",   
                                  agent_video:"required",                  
                                },

                          messages: {  

                                  video_title: {
                                      required: "Required", 
                                  },  

                                  agent_video: {
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
                       
                        $("#video_result").html('<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>  Your Details Successfully Updated. </div>');
                        document.getElementById("video_form").reset(); //clear form data
                        window.setTimeout(function(){location.reload()},2000)
                      }
                        else 
                        {                       
                          $("#video_result").html('<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry!</strong> Something went wrong Try again. </div>');
                        }          
                    }

           });
        }     

 });


// delete newsfeeds submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("click", "#delete_video", function(e){
         
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
                                $("#delete_video_result").html('<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> Successfully Deleted  </div>');
                                window.setTimeout(function(){location.reload()},2000)
                                                                   
                              }else 
                               {                    
                                  $("#delete_video_result").html('<div class="alert alert-success alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Sorry! Somethink went wrong. </div>');
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