                      
<!-- here showing extend code model popup  -->

        <div class="modal-body">
           <button type="button" class="close" data-dismiss="modal">
                      <img src="<?php echo base_url('assets/images/view-icons/wow-close.png'); ?>">
                     </button>
                    <div class="user-info">
                       
                        <h4 class="modal-title" style="text-align:center; font-size:18px; padding:10px; background-color:#FDF2F5; border-radius:7px; margin-bottom:10px; color:#e91e63;">Extend Code model </h4>
                        
                    </div>                              
                    <div class="line-divider"></div>

          <article class="card-body">
                          
            <div class="form-group">
              <div style="padding-bottom:10px; font-size: 16px;">
                <?php 
                  foreach ($code_detail as  $details) {
                   
                ?>
                <small class="text-muted">
                 Thanks for requesting for code extension. A hold my car deposite of <span style="border: 2px solid #f76d2b; padding: 2px; font-weight: bold"> $ 50,000 <!-- <?php echo $details->extend_code_price;?> --> </span>   (Non-refundable) is required to extend for another <span style="font-weight: bold;"> 48 hours </span>. <br><br>
                 <span style="font-weight: bold;"> Call/What'sapp at +1 - 832-716-3892 at USA.</span>
                </small>
              <?php } ?>
              </div>
                <button type="submit" class="btn btn-primary btn-block" data-dismiss="modal" style="background-color:#f76d2b; border:none;">OK</button>
            </div>              
           
          </article>
        </div><!--/.modal nody -->
        <div class="modal-footer">
        </div>