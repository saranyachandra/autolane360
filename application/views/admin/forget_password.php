

<?php $this->load->view('includes/admin_css'); ?>

</head>

<body class="body-bg-full profile-page" style="background-image: url('<?php echo base_url('assets/admin-assets/img/site-bg.jpg');?>')">
    <div id="wrapper" class="row wrapper">
        <div class="container-min-full-height d-flex justify-content-center align-items-center">
            <div class="login-center">


                <div class="navbar-header text-center mt-2 mb-4">
                    <a href="index.html">
                        <img alt="" src="<?php echo base_url('assets/admin-assets/img/logo-light.png');?>">
                    </a>
                </div>
                <!-- /.navbar-header -->
                <form id="forget_form" action="<?php echo base_url('admin_login/get_forget_password'); ?>"  method="POST" enctype="multipart/form-data">
                     <div id="forget_result"></div>

                    <div class="form-group">
                        <label for="example-email">Email</label>
                        <input type="text" name="email"  placeholder="johndoe@site.com" class="form-control form-control-line" >
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-lg btn-primary text-uppercase fs-12 fw-600" >Submit</button>
                    </div>

                    <div class="form-group no-gutters mb-0">
                        <div class="col-md-12 d-flex" style="font-weight: bold;">
                            <a href="<?php echo base_url('admin_login/index'); ?>" id="to-recover" class="my-auto pb-2 text-right">
                              <!--   <i class="material-icons mr-2 fs-18">lock</i> --> Login Here
                            </a>
                        </div>                      
                    </div>
                  
                </form>
            </div>
        </div>
       
    </div>
    
    <!-- Scripts -->
<?php $this->load->view('includes/admin_js'); ?>

<script>

//login form submit

var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", "#forget_form", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                          
                                  email:
                                    {
                                      required : true,
                                      email: true
                                    }, 
                                },

                          messages: {                           
                                 
                                  email: {
                                      required: "Please Enter a Valid Email Address",
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
                           swal({
                                title: "Success!",
                                text: "Your Password send by Email...",
                                type: "success",
                                timer: 5000
                            }).then(() => {                     
                                    window.location.href = "<?php echo base_url('admin_login/index'); ?>";
                                });; 
                       
                       }
                        else 
                        {                       
                          $("#forget_result").html('<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Try again!</strong> Email or Password incorrect. </div>');
                        }          
                    }

           });
        }     

 });




</script>

</body>
</html>