<div class="pre-footer">
        
        <div class="container">
        
          <div class="row flex-row flex-center">
            <div class="col-md-7 col-sm-12">
              
              <form id="newsletter">
                <p class="f-left align-right">Sign up now and get exclusive offers <br> and news straight to your inbox!</p>
                <button type="submit" class="btn-email btn btn-style-2 f-right" data-type="submit"><i class="licon-envelope"></i></button>
                <div class="wrapper">
                  <input type="email" placeholder="Enter your email address" name="newsletter-email">
                </div> 
              </form>

            </div>
            <div class="col-md-5 col-sm-12">
              
              <div class="flex-row">
                <span>Connect With Us</span>
                <ul class="social-icons">
                  
                  <li><a target="_blank" href="https://www.facebook.com/autolane360"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <!-- <li><a href="#"><i class="icon-youtube-play"></i></a></li> -->
                  <!-- <li><a href="#"><i class="icon-gplus-3"></i></a></li> -->
                  <li><a href="#"><i class="icon-instagram-5"></i></a></li>
                  <!-- <li><a href="#"><i class="icon-linkedin-3"></i></a></li> -->
                
                </ul>
              </div>

            </div>
          </div>

        </div>

      </div>

        <!-- Top footer -->
      <div class="top-footer">
        
        <div class="container">
          
          <div class="flex-row">

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
              
              <div class="widget">

                <h5 class="widget-title">About Us</h5>
                <p>
                    Autolane360 is a Houston Based car sales company with branches in San Antonio Texas, Nigerian and Ghana. The founders of the company have been buying and selling used cars in US. 
                </p>
                <p>Auto-Market for the past 10 years and partnered various used cars companies across the USA thereby creating a huge network of both auction stock cars to dealership stocks cars.  </p>
                
              </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
              
              <div class="widget">
                <h5 class="widget-title">Company</h5>
                <ul class="info-links">
                      
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">How It Works</a></li>
                  <li><a href="#">News Feeds</a></li>
                  <li><a href="#">Agent List</a></li>
                  <li><a href="#">Direct Buy Lane</a></li>

                </ul>
              </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">

              <div class="widget">
                <h5 class="widget-title">Services</h5>
                <ul class="info-links">
                      
                  <li><a href="#">Car Parts</a></li>
                  <li><a href="#">Disclaimer</a></li>
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Shipping Policy</a></li>
                  <li><a href="#">Agent Login</a></li>

                </ul>
              </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
              
              <div class="widget">
                <h5 class="widget-title">Locations</h5>
                <ul class="info-links">
                      
                  <li><a href="#">USA</a></li>
                  <li><a href="#">Ghana</a></li>
                  <li><a href="#">Nigeria</a></li>
                  
                </ul>
              </div>

            </div>
            

          </div>

        </div>

        <div class="container">          
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="col-md-3 col-md-offset-3 col-xs-12 col-sm-12 ">               
                <div class="b-topBar__nav" style="border-right: none!important;">
                  <div class="dropdown" style="padding-top: 10px; margin-left: 10px;">
                      <div class="auto-custom-select">
                        <select id="country_filter" data-default-text="Select Country">
                          <option value="Ghana">Ghana</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="United States">USA</option>
                        </select>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-xs-12 col-sm-12">
                <a href="javascript:;" class="link-text2 contact-button btn" style="background-color: #f60; margin: 10px 10px 0;color: #fff;text-align: center; width:97%; height:45px; line-height:30px; text-decoration:none;">Agent Login</a>
                <!-- <a href="javascript:;" class="link-text2 contact-button"><i class="icon-help-circled-alt"></i>Agent Login</a> -->
              </div>
            </div>
          </div>
        </div>

      </div>
      

      <!-- Copyright -->
      <div class="copyright-section">
      
        <div class="container">
          
          <div class="copyright align-center">Copyright Autolane360 © 2018. All Rights Reserved.</div>

        </div>

      </div>


       <!-- model popup start here -->
    <div class="popup-holder popup-contact">

    <div class="popup">
      <div class="question-form">                      
        <h5 class="section-title text-center">Agent Login Here</h5> 

        <div id="error_result"></div>   
        <form id="agent_login" action="<?php echo base_url('agent_login/agent_login_auth'); ?>"  method="POST" enctype="multipart/form-data">
          <div class="form-cols">            
            <div class="form-collumn col-sm-6 col-md-12">
              <input type="text" name="agent_email" placeholder="Email">
              <input type="password" name="agent_password" placeholder="Password">              
            </div>
          </div>
          <a href="#" class="calc-button">Forgot your password?</a>
          <button class="btn btn-style-3">Login</button> 
        </form>
      </div>
    </div>

    <a href="javascript:;" class="closePopup close-search-form"></a>

    </div>

  <!-- model popup end here -->

  <!-- forget model popup -->
<div class="popup-holder popup-forget">
  <div class="popup">
    <div class="calculation-form text-center">
      <div class="row" style="margin-bottom: 20px;" >
        <div class="col-sm-6 col-md-6  col-md-offset-3"> <img src="<?php echo base_url('assets/images/logo.png');?>" alt=""> </div>
      </div>
      <form id="forget_form" action="<?php echo base_url('login/forget_password'); ?>"  method="POST" enctype="multipart/form-data">
        <div id="forget_result"></div>
        <div class="row" style="margin-bottom: 20px;">
          <div class="col-sm-6 col-md-6 col-md-offset-3">
            <input type="text" name="user_email" placeholder="Enter Your Email..">
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn" style="background-color: #f60;color: #fff;"> Get Password </button>
          </div>
      </form>
    </div>
  </div>
  <a href="javascript:;" class="closePopup close-search-form"></a> 
</div>


<script type="text/javascript">
var base_url = '<?php echo base_url() ?>'; //form submited
  $(document).ready(function(){

   $(document).on("change", "#country_filter", function(e){

        e.preventDefault();         
        
        var country_name = $('#country_filter').val();

        window.location.href = base_url+'Home/change_country/'+country_name;
      });
    });


  //agent login form 
    $(document).on("submit", "#agent_login", function(e){

        e.preventDefault();

        $(this).validate({ 
                         rules: {                             
                                  agent_email:"required",   
                                  agent_password:"required",                  
                                },

                          messages: {  

                                  agent_email: {
                                      required: "Required", 
                                  },  

                                  agent_password: {
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
                         window.location.href ='<?php echo base_url('agent_dashboard/index'); ?>';
                      }
                        else 
                        {                       
                          $("#error_result").html('<div style="color:red;" class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry!</strong> Email or Password incorrect. </div>');
                        }          
                    }

           });
        }     

 }); 

</script>