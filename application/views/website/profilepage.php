
<!--        <div class="section">-->
            <a class="" href="#" data-slide="">
            <img src="<?php echo base_url("webassets");?>/img/pre_button.png" class="pre-pos">
        </a>
        <a class="" href="#" data-slide="">
            <img src="<?php echo base_url("webassets");?>/img/next_button.png" class="next-pos">
        </a>
            <div class="container">
             <div class="row">
                     
                      <div class="col-md-4">
                         <div class="profile-img">
                          <img src="<?php echo base_url("webassets");?>/img/<?php echo $before->image;?>" width="100%">
                          <div class="prof-mini">  
                          <img src="<?php echo base_url("webassets");?>/img/music.png"> 
                          <img src="<?php echo base_url("webassets");?>/img/music.png">
                          </div> 
                          </div>
                      </div>
                      <div class="col-md-8">
                          <div class="profile-text">
                              <h3><?php echo $before->name;?></h3>
                              <h5>designer</h5>
                              <p><?php echo $before->content;?> </p>
                              
                                 <a href="<?php echo site_url('website/profileedit?id=').$before->id;?>">
                            <div class="style-text">

                                <p>choose this style blender</p>


                            </div>
                        </a>
                          </div>
                          
                      </div>
                    </div>
              
            </div>
<!--        </div>-->