
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
                                           <form id="individual_form" action="<?php echo base_url('admin/insert_individual_seller_user'); ?>" method="POST" enctype="multipart/form-data"> 
                                                <div class="container">
                                                    <div class="form-group row">                            
                                                        <div class="col-sm-6" style="margin-bottom:10px;">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="material-icons">person</i>
                                                                </div>
                                                                <input type="text" name="individaul_fname" class="form-control" placeholder="First Name">
                                                            </div>                                                                                
                                                        </div>

                                                        <div class="col-sm-6" style="margin-bottom:10px;">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="material-icons">person</i>
                                                                </div>
                                                                <input type="text" name="individaul_lname" class="form-control"  placeholder="Last Name">
                                                            </div>                                                                               
                                                        </div>                                                                           
                                                    </div>

                                                    <div class="form-group row">                            
                                                        <div class="col-sm-6" style="margin-bottom:10px;">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="material-icons">mail</i>
                                                                </div>
                                                                <input type="text" name="individaul_email" id="individaul_email" class="form-control" placeholder="Email">
                                                                <div id="individaul_email_error"></div>
                                                            </div>                                                                               
                                                        </div>
                                                        <div class="col-sm-6" style="margin-bottom:10px;">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="material-icons">phone</i>
                                                                </div>
                                                                <input type="text" name="individaul_phone" class="form-control"  placeholder="Phone">
                                                            </div>                                                                                
                                                        </div>                                                                            
                                                    </div>
                                                    <div class="form-group row">                            
                                                        <div class="col-sm-12" style="margin-bottom:10px;">
                                                            <div class="input-group">
                                                               <div class="input-group-addon"><i class="material-icons">lock</i>
                                                                </div>
                                                                <input type="password" name="individaul_pass" minlength="4" maxlength="4" class="form-control" placeholder="Assign PIN">
                                                            </div>                                                                                
                                                       </div>                                                                         
                                                   </div>
                                                                       
                                                    <div class="form-group row">                            
                                                        <div class="col-sm-12">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="material-icons">message</i>
                                                                </div>
                                                                <textarea class="form-control" name="individaul_msg" rows="3" placeholder="Add Message"></textarea>
                                                            </div>                                                                               
                                                        </div>                           
                                                    </div>
                                                </div>

                                                <div class="container">                                                    
                                                    <div class="row">                                                       
                                                       <div class="col-md-6">
                                                            <span style="font-weight: bold;">Upload Profile Photo</span><br>
                                                            <input type="button" class="btn btn-success"  value="Image..." onclick="document.getElementById('files').click();" />
                                                            <div id="img_preview"></div>
                                                            <input type="file" style="display:none;" name="seller_profile_pic" id="files" class="file" accept="image/*" title="cover image"> 
                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                                   
                                                <div class="container">
                                                   <div class="form-actions">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12 ml-auto btn-list text-center">
                                                               <button type="submit" style="background-color:#f60; border:0;" class="btn btn-warning">Add Seller Member </button>
                                                            </div>
                                                        </div>                                                                           
                                                    </div>
                                                </div>                                                                    
                                            </form>
                                                                
                                        </div>

                                        <!-- dealer form start here -->
                                                    <div class="tab-pane" id="profile-tab-bordered-1">
                                                        <form id="dealer_form" action="<?php echo base_url('admin/insert_dealer_seller_user'); ?>" method="POST" enctype="multipart/form-data"> 
                                                                    <div class="container">
                                                                        <div class="form-group row">                            
                                                                            <div class="col-sm-6" style="margin-bottom:10px;">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="material-icons">person</i>
                                                                                    </div>
                                                                                    <input type="text" name="dealer_fname" class="form-control" placeholder="First Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6" style="margin-bottom:10px;">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="material-icons">person</i>
                                                                                    </div>
                                                                                    <input type="text" name="dealer_lname" class="form-control" placeholder="Last Name">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6" style="margin-bottom:10px;">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="material-icons">mail</i>
                                                                                    </div>
                                                                                    <input type="text" name="dealer_email" id="dealer_email" class="form-control" placeholder="Email">
                                                                                    <div id="dealer_email_error"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6" style="margin-bottom:10px;">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="material-icons">phone</i>
                                                                                    </div>
                                                                                    <input type="text" name="dealer_phone" class="form-control" placeholder="Phone">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">                            
                                                                            <div class="col-sm-6" style="margin-bottom:10px;">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="material-icons">lock</i>
                                                                                    </div>
                                                                                    <input type="password" name="dealer_pass" minlength="4" maxlength="4" class="form-control" placeholder="Assign PIN">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6" style="margin-bottom:10px;">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="material-icons">public</i>
                                                                                    </div>
                                                                                    <input type="text" name="dealer_city" class="form-control" placeholder="City">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">                            
                                                                            <div class="col-sm-6" style="margin-bottom:10px;">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="material-icons">edit_location</i>
                                                                                    </div>
                                                                                    <input type="text" name="dealer_country" class="form-control" placeholder="Select Country">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6" style="margin-bottom:10px;">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="material-icons">person</i>
                                                                                    </div>
                                                                                    <input type="text" name="dealer_address" class="form-control" placeholder="Dealer Address">
                                                                                </div>
                                                                            </div>                                                                           
                                                                        </div>
                                                                        <div class="form-group row">  
                                                                            <div class="col-sm-6">
                                                                                <input type="text" name="dealer_zipcode" class="form-control" placeholder="Zipcode">
                                                                            </div>                          
                                                                            <div class="col-sm-6">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="material-icons">message</i>
                                                                                    </div>
                                                                                    <textarea class="form-control" name="dealer_msg" rows="3" placeholder="Add Message"></textarea>
                                                                                </div>
                                                                            </div>                            
                                                                        </div>
                                                                    </div>

                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <span style="font-weight: bold;">Upload Profile Photo</span><br>
                                                                            <input type="button" class="btn btn-success"  value="Image..." onclick="document.getElementById('dealer_files').click();" />
                                                                            <div id="dealer_img_preview"></div>
                                                                            <input type="file" style="display:none;" name="dealer_profile_pic" id="dealer_files" class="file required" accept="image/*" title="cover image"> 
                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                  
                                                                    <div class="container">
                                                                        <div class="form-actions">
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-12 ml-auto btn-list text-center">
                                                                                    <button type="submit" style="background-color:#f60; border:0;"
                                                                                        class="btn btn-warning">Add Dealer Member</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                   
                                                                </form>
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
    

// individual  image preview 

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

// dealer image preview 

$(document).ready(function() {

  if (window.File && window.FileList && window.FileReader) {
    $("#dealer_files").on("change", function(e) {

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

              $("#dealer_img_preview").html("<span class=\"pip\">" +
                      "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                      "<br/><span class=\"dealer_remove\">X Remove Image</span>" +
                      "</span>");

              $(".dealer_remove").click(function(){
              $(this).parent(".pip").remove();
              $('#dealer_files').val("");
            });    
                    }
                    else
                    {
                        $('#img_dimension').show();
                        $('#dealer_files').val("");
                    }
          }; 
                   
        });

        fileReader.readAsDataURL(f);
     
    });

  } else {
        alert("Your browser doesn't support to File API")
    }
});



// individual form submit

    $(document).on("submit", "#individual_form", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                             
                                  individaul_fname:"required",                  
                                  individaul_lname: "required",
                                  individaul_email:
                                    {
                                      required : true,
                                      email: true
                                    }, 
                                  individaul_phone: 
                                  {
                                     required : true,
                                     digits: true
                                  },
                                  individaul_pass: "required",
                                  individaul_msg: "required"
                                },

                          messages: {                           
                                  individaul_fname: {
                                      required: "Required", 
                                  }, 
                                  individaul_lname: {
                                      required: "Required ", 
                                  }, 
                                  individaul_email: {
                                      required: "Please Enter a Valid Email",
                                  }, 
                                  individaul_phone: {
                                      required: "Required", 
                                  }, 
                                  individaul_pass: {
                                      required: "Required", 
                                  },
                                  individaul_msg: {
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
                       
                        swal("Successfully Seller User was Created");
                        document.getElementById("individual_form").reset(); //clear form data
                        window.setTimeout(function(){location.reload()},3000)
                        
                        }
                        else 
                        {                       
                          swal("Somethink went wrong...");
                        }          
                    }

           });
    }     

 });

// dealer form submit

    $(document).on("submit", "#dealer_form", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                             
                                  dealer_fname:"required",                  
                                  dealer_lname: "required",
                                  dealer_email:
                                    {
                                      required : true,
                                      email: true
                                    }, 
                                  dealer_phone: 
                                  {
                                     required : true,
                                     digits: true
                                  },
                                  dealer_pass: "required",
                                  dealer_msg: "required"
                                },

                          messages: {                           
                                  dealer_fname: {
                                      required: "Required", 
                                  }, 
                                  dealer_lname: {
                                      required: "Required ", 
                                  }, 
                                  dealer_email: {
                                      required: "Please Enter a Valid Email",
                                  }, 
                                  dealer_phone: {
                                      required: "Required", 
                                  }, 
                                  dealer_pass: {
                                      required: "Required", 
                                  },
                                  dealer_msg: {
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
                       
                        swal("Successfully Seller User was Created");
                        document.getElementById("dealer_form").reset(); //clear form data
                        window.setTimeout(function(){location.reload()},3000)
                        
                        }
                        else 
                        {                       
                          swal("Somethink went wrong...");
                        }          
                    }

           });
    }     

 });


//individaul email validate form submit

$('#individaul_email').blur(function(e){

        e.preventDefault();
          
            var form_data = new FormData(this);

             var email = $('#individaul_email').val();
             form_data.append('agent_email',email);
        
       if(email.trim().length == 0)  
       {
          $("#individaul_email_error").html('<p style="color:red; font-weight:bold;">Sorry! This field is not empty</p>');
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
                            $("#individaul_email_error").html('<p style="color:red; font-weight:bold;">Sorry! Already have this Email try new</p>');
                        }
                      else 
                        {                       
                            $("#individaul_email_error").html('<p style="color:green; font-weight:bold;"></p>');
                        }          
                    }

                  });
        }
 });

//dealer email validate form submit

$('#dealer_email').blur(function(e){

        e.preventDefault();
          
            var form_data = new FormData(this);

             var email = $('#dealer_email').val();
             form_data.append('agent_email',email);
        
       if(email.trim().length == 0)  
       {
          $("#dealer_email_error").html('<p style="color:red; font-weight:bold;">Sorry! This field is not empty</p>');
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
                            $("#dealer_email_error").html('<p style="color:red; font-weight:bold;">Sorry! Already have this Email try new</p>');
                        }
                      else 
                        {                       
                            $("#dealer_email_error").html('<p style="color:green; font-weight:bold;"></p>');
                        }          
                    }

                  });
        }
 });

</script>

</body>



</html>