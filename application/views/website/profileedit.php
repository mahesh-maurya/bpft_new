
    <div class="section">
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
                            <img src="<?php echo base_url("webassets");?>/img/music.png" >
                            <img src="<?php echo base_url("webassets");?>/img/music.png" >
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="profile-text">
                        <h3><?php echo $before->name;?></h3>
                        <h5>designer</h5>
                        <div class="col-md-4">  
                        <div class="profile-edit">
                            <h5>submit text</h5> 
                            <form method="post" action="<?php echo site_url('website/textpost');?>" enctype= "multipart/form-data">
<input type="hidden" name="id" value="<?php echo $before->id;?>">
<textarea name="text" value="<?php echo set_value('text');?>" id="comments" class="profile-textarea">

</textarea><br />
<input type="submit" value="Submit" class="profile-submit" /><br>
<button type="reset" value="Reset" class="profile-cancel">cancel</button>
</form>
                        </div>
                     
                        </div>

                                      <div class="col-md-4">
                                        
                        <div class="profile-image">
                            
                            <span >or</span>
                        
                            <h5>submit photo</h5> 
                            <form method="post" action="<?php echo site_url('website/imagepost');?>" enctype= "multipart/form-data" class="dropzone" id="my-awesome-dropzone">
<input type="hidden" name="id" value="<?php echo $before->id;?>">
<input type="file" id="normal-field" class="form-control" name="logo" value="<?php echo set_value('logo');?>">

<input type="submit" value="Submit" class="profile-submit" /><br>
<button type="reset" value="Reset" class="profile-cancel">cancel</button>

<div class="dz-default dz-message"><span>Drop files here to upload</span></div>


</form>
                        </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

