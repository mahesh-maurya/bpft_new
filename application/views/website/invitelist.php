
            <div class="content-center">
                <div class="follows">
                    <h5><span class="gold"><?php echo $user->total;?> </span>people are going to Blenders Pride Fashion Tour </h5>
                    <p>read/view their style statements below.</p>
                </div>
            </div>




    <div class="section top" style="background:none;">
        <div class="container">

            <div class="row">
               <?php foreach($posts as $post) { // print_r($post); ?>
                <div class="col-md-3 col1 posts">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="circular"><img class="" src="<?php
    if($post->userlogo=="")
    {
        $post->userlogo="nouserimg.png";
    }
                                                           $usersub=substr($post->userlogo,0,4);
                                if($usersub=="http")
                                {
                                    echo $post->userlogo;
                                }
                                else
                                {
                                echo base_url("uploads")."/".$post->userlogo;
                                }
                                       
                                                           
                                                           ?>"></div><span class="top-text"><?php echo $post->firstname." ".$post->lastname;?></span>
<!--                            <img src="<?php echo base_url("webassets");?>/img/rect.png" class="rect">-->

                        </div>
                        <?php if($post->image!="") { ?>
                        <div class="panel-body">
                            <a href="#">
                                    <img src="<?php echo base_url("uploads");?>/<?php echo $post->image;?>" width="100%">
                                </a>
                        </div>
                        <?php } if($post->text!=""){ ?>

                        <div class="panel-body body-text">
                            <p>
                                <?php echo $post->text;?></p>
                        </div>
                        <?php } ?>

                        <div class="panel-footer">
                            <div class="pull-right">
                                <a href="" class="sharee"><i class="fa fa-facebook"></i></a>
                                <a href="" class="twitterbutton"></a>
                                <!-- <a href="#"> <i class="fa fa-google-plus"></i>
                                </a> -->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
           
                <div class="foot-text2">
                    <?php echo $this->pagination->create_links();?>
                </div>
            
        </div>
    </div>