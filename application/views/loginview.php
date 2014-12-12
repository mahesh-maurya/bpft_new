<div class="signin">
    <?php if($this->session->userdata('logged_in')) { ?>
    
     <a href="<?php echo site_url('website/profilee'); ?>"><i>profile</i></a> /
     <a href="<?php echo site_url("website/logout");?>"><i>logout</i></a>
    <?php } else { ?>
    
    <a href="<?php echo site_url("website/register");?>"><i>signup</i></a> /
    <a href="<?php echo site_url("website/login");?>"><i>login</i></a>
    <?php } ?>
    
        <span class="social">
        
         <a href="https://www.facebook.com/blenderspridefashiontour" target="_blank"><i class="fa fa-facebook"></i></a>
                                        
         <a href="https://twitter.com/bpft2014" target="_blank"> <i class="fa fa-twitter"></i></a>
                                        
         <a href="https://www.youtube.com/user/SeagramsBPFT" target="_blank"><i class="fa fa-youtube"></i></a> 
                                    
        </span>
</div>