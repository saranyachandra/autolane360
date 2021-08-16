                      
<!-- here showing receipt model popup  -->

        <div class="modal-body">
         <div class="post-detail">
                     <button type="button" class="close" data-dismiss="modal">
                      <img src="<?php echo base_url('assets/images/view-icons/wow-close.png'); ?>">
                     </button>
                    <div class="user-info">
                       
                        <h4 class="modal-title" style="text-align:center; font-size:18px; padding:10px; background-color:#FDF2F5; border-radius:7px; margin-bottom:10px; color:#e91e63;">Receipt model </h4>
                        
                    </div>                              
                    <div class="line-divider"></div>
                      <div class="user-info">
                        <div class="row" style="padding:10px;">          
                          <div class="row">  

                            <?php 
                                foreach ($receipt as $details) {
                                 foreach (json_decode($details->receipturl) as  $detail) {
                                 
                            ?>            
                            <div class="col-md-12">

                              <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #D0D0D0; padding:10px 15px; border-radius:5px; min-height:170px;">
                                  <div class="col-md-12 text-center">
                                   <img src="<?php echo $detail->url;?>"  class="img-responsive">
                                  </div>

                              </div>

                            </div> 

                            <?php }  } ?> 

                          </div>                     
                        </div>
                      </div>
                  </div>  
        </div><!--/.modal nody -->
        <div class="modal-footer">
        </div>