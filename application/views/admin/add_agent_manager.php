
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
                                <img src="<?php echo base_url('assets/admin-assets/demo/users/user1.jpg');?>" class="rounded-circle" alt="">
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
                        <h6 class="page-title-heading mr-0 mr-r-5">Add Agent Members</h6>
                        <p class="page-title-description mr-0 d-none d-md-inline-block">Information about Admin details</p>
                    </div>
                    <!-- /.page-title-left -->
                    <div class="page-title-right d-none d-sm-inline-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/index'); ?>">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Add Agent Members</li>
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
                                <div class="col-md-12 widget-holder" style="margin-top: 25px;">
                                    <form id="agent_form" action="<?php echo base_url('admin/insert_agent_user'); ?>" method="POST" enctype="multipart/form-data"> 
                                        <div class="container">

                                            <div class="form-group row">
                                                <div class="col-sm-6 col-md-6" style="margin-bottom:10px;">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="material-icons">person</i>
                                                        </div>
                                                        <input type="text" name="admin_fname" class="form-control" placeholder="First Name">
                                                    </div>                                                   
                                                </div>
                                                <div class="col-sm-6 col-md-6" style="margin-bottom:10px;">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="material-icons">person</i>
                                                        </div>
                                                        <input type="text" name="admin_lname" class="form-control" placeholder="Last Name">
                                                    </div>                                                    
                                                </div>                                              
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 col-md-6" style="margin-bottom:10px;">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="material-icons">mail</i>
                                                        </div>
                                                        <input type="text" name="admin_email" id="admin_email" class="form-control" placeholder="Email">
                                                        <div id="admin_email_error"></div>
                                                    </div>                                                   
                                                </div>
                                                <div class="col-sm-6 col-md-6" style="margin-bottom:10px;">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="material-icons">phone</i>
                                                        </div>
                                                        <input type="text" name="admin_phone" class="form-control" placeholder="Phone">
                                                    </div>                                                    
                                                </div>                                               
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 col-md-6" style="margin-bottom:10px;">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="material-icons">lock</i>
                                                        </div>
                                                        <input type="Password" minlength="4" name="admin_pass" class="form-control" placeholder="Password">
                                                    </div>                                                   
                                                </div>
                                                <div class="col-sm-6 col-md-6" style="margin-bottom:10px;">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="material-icons">public</i>
                                                        </div>
                                                        <input type="text" name="admin_city" class="form-control" placeholder="City">
                                                    </div>                                                    
                                                </div>                                              
                                            </div>

                                            <div class="form-group row">

                                                <div class="col-sm-6 col-md-6" style="margin-bottom:10px;">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="material-icons">edit_location</i>
                                                        </div>
                                                        <select id="country" name="admin_country" data-default-text="Select Country">
                                                            <option>Select Country</option>
                                                        <?php 
                                                            foreach ($country as $country_name) {
                                                        ?>
                                                        <option value="<?php echo $country_name->countryname; ?>"><?php echo $country_name->countryname; ?>
                                                        </option>
                                                        <?php } ?>

                                                        </select>
                                                        
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6 col-md-6" style="margin-bottom:10px;">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="material-icons">person</i>
                                                        </div>
                                                        <input type="text" name="admin_member_code" class="form-control" placeholder="Admin Member Code">
                                                    </div>                                                    
                                                </div>                                               
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="material-icons">message</i>
                                                        </div>
                                                        <textarea class="form-control" name="admin_msg" rows="3" placeholder="Add Message"></textarea>
                                                    </div>                                                  
                                                </div>                                                
                                            </div>
                                        </div>

                                        <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-md-6">
                                            <div class="form-group">
                                                <span style="font-weight: bold;">Assign Access/Delegation</span>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="delecation[]" value="Post Cars" checked="checked">
                                                        <span class="label-text">Post Cars</span>
                                                    </label>
                                                </div>
                                                <!-- /.checkbox -->
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="delecation[]" value="Add Members"> <span
                                                            class="label-text">Add Members</span>
                                                    </label>
                                                </div>
                                                <!-- /.checkbox -->
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="delecation[]" value="Add Sellers"> <span
                                                            class="label-text">Add Sellers</span>
                                                    </label>
                                                </div>
                                                <!-- /.checkbox -->
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="delecation[]" value="Add Agents"> <span
                                                            class="label-text">Add Agents</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="delecation[]" value="Edit Pages">
                                                         <span  class="label-text">Edit Pages</span>
                                                    </label>
                                                </div>
                                                <!-- /.checkbox -->
                                               
                                            </div>
                                            </div>
                                            <div class="col-md-6 col-md-6">
                                                <span style="font-weight: bold;">Upload Profile Photo</span><br>
                                                <input type="button" class="btn btn-success"  value="Image..." onclick="document.getElementById('files').click();" />
                                                <div id="img_preview"></div>
                                                <input type="file" style="display:none;" name="admin_profile_pic" id="files" class="file required" accept="image/*" title="cover image"> 

                                            </div>
                                        </div>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="container">
                                            <div class="form-actions">
                                                <div class="form-group row">
                                                    <div class="col-sm-12 ml-auto btn-list text-center">
                                                        <button type="submit" style="background-color:#f60; border:0;" class="btn btn-warning">Add Admin Member</button>

                                                    </div>
                                                    <!-- /.col-sm-12 -->
                                                </div>
                                                <!-- /.form-group -->
                                            </div>
                                        </div>
                                        <!-- /.form-actions -->
                                    </form>
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

// select2 library
$("#country").select2();

// admin image preview 

$(document).ready(function() {

  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {

        var files = e.target.files,
        filesLength = files.length;
      
        var f = files[0]
        var fileReader = new FileReader();

        fileReader.onload = (function(e) {
         
            var img = new Image(); 
            img.src = e.target.result;     

            img.onload = function() {
              
                    var height = this.height;
                    var width = this.width;
                                
                        if (height > 250 || width > 250) 
                        {                               
                            var file = e.target;              
                      $('#img_dimension').hide();

                  $("#img_preview").html("<span class=\"pip\">" +
                          "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                          "<br/><span class=\"remove\">X Remove Image</span>" +
                          "</span>");

                  $(".remove").click(function(){
                  $(this).parent(".pip").remove();
                  $('#files').val("");
                });    
                        }
                        else
                        {
                            $('#img_dimension').show();
                            $('#files').val("");
                        }
            }; 
                   
        });

        fileReader.readAsDataURL(f);
     
    });

  } else {
        alert("Your browser doesn't support to File API")
    }
});


$(document).on("submit", "#agent_form", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                             
                                    admin_fname:"required",                  
                                    admin_lname: "required",
                                    admin_email:
                                    {
                                      required : true,
                                      email: true
                                    }, 
                                    admin_phone: 
                                    {
                                     required : true,
                                     digits: true
                                    },
                                    admin_pass: "required",
                                    admin_city: "required",
                                    admin_country: "required",
                                    admin_member_code: "required",  
                                    admin_msg: "required",
                                    delecation: "required"

                                },

                          messages: {                           
                                admin_fname: {
                                      required: "Required", 
                                }, 
                                admin_lname: {
                                      required: "Required ", 
                                }, 
                                admin_email: {
                                      required: "Please Enter a Valid Email Address",
                                }, 
                                admin_phone: {
                                      required: "Required", 
                                }, 
                                admin_pass: {
                                      required: "Required", 
                                },
                                admin_city: {
                                      required: "Required", 
                                }, 
                                admin_country: {
                                      required: "Required", 
                                }, 

                                admin_member_code: {
                                      required: "Required", 
                                }, 
                                admin_msg: {
                                      required: "Required", 
                                }, 
                                delecation: {
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
                       
                        swal("Successfully Admin User was Created");
                        document.getElementById("agent_form").reset(); //clear form data
                        window.location.href = "<?php echo base_url('admin/view_agent_manager'); ?>";
                        
                        }
                        else 
                        {                       
                          $("#result").html('<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry!</strong> Something went wrong Try again. </div>');
                        }          
                    }

           });
        }     
});

//admin email validate form submit

$('#admin_email').blur(function(e){

        e.preventDefault();
          
            var form_data = new FormData(this);

             var email = $('#admin_email').val();
             form_data.append('agent_email',email);
        
       if(email.trim().length == 0)  
       {
          $("#admin_email_error").html('<p style="color:red; font-weight:bold;">Sorry! This field is not empty</p>');
       }
       else
       {
            $.ajax({
                    url : base_url+'admin/validate_email/',
                    method: 'POST',
                    data: form_data,
                    processData: false,
                    contentType: false,
                    dataType:'json',
                    context:this,

                    error: function(xhr,status,error)
                    {   
                        alert(xhr.responseText);
                    },                   
                    
                    success: function(response)
                    {
                      if(response.status == 'success')
                        {
                            $("#admin_email_error").html('<p style="color:red; font-weight:bold;">Sorry! Already have this Email try new</p>');
                        }
                      else 
                        {                       
                            $("#admin_email_error").html('<p style="color:green; font-weight:bold;"></p>');
                        }          
                    }

                  });
        }
 });


</script>

</body>



</html>