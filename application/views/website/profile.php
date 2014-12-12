<div class="st-content-inner">
    <div class="st-content">
        <div class="profile-head">
            <div class="container">

                <div class="row">
                    <div class="col-md-2">
                        <div class="profile-pic">
                            <img src="<?php 
if($user->logo=="")
    {
        $user->logo="nouserimg.png";
    }
$usersub=substr($user->logo,0,4);
if($usersub=="http")
{
    echo $user->logo;
}
else
{
echo base_url("uploads")."/".$user->logo;
}
                       
                       
                       ?>">
                        </div>


                    </div>
                    <div class="col-md-5">
                        <div class="profile-details">
                            <h4><?php echo $user->firstname;?></h4>
                            <h4><?php echo $user->lastname;?></h4>

                            <?php if($user->email != '0') {?>
                            <img src="<?php echo base_url("webassets");?>/img/envolap.png"><span class="id-text"><?php echo $user->email;?></span>
                            <br>
                            <?php }if($user->accesskey!=""){?>
                            <img src="<?php echo base_url("webassets");?>/img/location.png"><span class="location-text"><?php echo $user->accesskey; ?></span>
                            <?php } ?>
                        </div>


                        <!--                    <a href="#"><span class="edit-pro">edit profile</span></a>-->
                    </div>
                    <div class="col-md-5">
                        <div class="count-num">
                            <h4><?php echo $user->points;?></h4>
                            <h6>points</h6>
                        </div>
                        <div class="social-pro text-center">
                            <p>social media accounts</p>
                        </div>
                        <h5 class="text-center" style="color:green;"><?php 
$msg=$this->input->get('alert');
if(isset($msg))
{
    echo $msg;
}
                    ?></h5>
                        <div class="social-icon">
                            
                          <form method="post" action="<?php echo site_url('website/submitprofile');?>" enctype="multipart/form-data">
                          <input value="<?php echo set_value('id',$user->id);?>" name="id" id="username-email" placeholder="Twitter UserID" type="hidden" class="" />
                           <div class="input-holder">
                                <i class="fa fa-twitter"></i>
                                <input value="<?php echo set_value('twitter',$user->twitter);?>" name="twitter" id="username-email" placeholder="Twitter UserID" type="text" class="" />
                           </div>
                            
                            <div class="input-holder">
                                <i class="fa fa-instagram"></i>
                                <input name="instagram" value="<?php echo set_value('instagram',$user->instagram);?>" id="password" placeholder="Instagram UserID" type="text" class="" />
                            </div>
                            
                            
                            <button type="submit" class="bpft-btn" >Submit</button>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mid-content">
    <div class="container">

        <div class="text-center pro-head">
<!--            <h6>We have received your style statement and our moderators are reviewing it.</h6>-->
            <a href="#"><h4>Your Style Statements</h4></a>
        </div>
        <?php foreach($posts as $post) { if($post->id!=null) { ?>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-11 pro-desc2">


                <div class="col-md-2">
                    <div class="pro-karsh">
                        <img src="<?php echo base_url("uploads");?>/<?php echo $post->proimage;?>" class="karsh-img">
                        <p>
                            <?php echo $post->name;?></p>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="pro-data">
                        <h5><?php echo $post->timestamp;?></h5>
                        <p>
                            <?php echo $post->text;?></p>
                    </div>

                </div>
                <?php if($post->image!="") { ?>
                <div class="col-md-2">

                    <img src="<?php echo base_url("uploads");?>/<?php echo $post->image;?>" >
                </div>
                <?php } if($post->approve==1) { ?>
                <div class="col-md-2 approve">
                    <a href="#"><img src="<?php echo base_url("webassets");?>/img/shape.png"></a>
                    <p>Approved</p>
                </div>
                <?php }else{ ?>
                <div class="col-md-2 approve">
                    <a href="#"><img src="<?php echo base_url("webassets");?>/img/rejected.png"></a>
                    <p>rejected</p>
                </div>
                <?php } ?>

            </div>
            <div class="col-md-2"></div>

        </div>
        <?php } } ?>


    </div>
</div>
