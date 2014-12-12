<div class="st-container" id="st-container">
   <?php $this->load->view("website/sidemenu");?>
            <div class="st-pusher">
    <?php /*<div class="section intro">
        <div class="container">
            <div class="content-center">
                <h1>Style</h1>
                <h4>Can grab attention without asking for it</h4>
            </div>
            <div class="scroll text-center">
                <a data-scroll href="#scrolldown">
                        <img src="<?php echo base_url("webassets");?>/img/scroll.png" alt="">
                    </a>
            </div>
        </div>
    </div>

    <div class="space">

    </div>
    */ ?>

        <div class="section home">

            <div class="video-content">
                <video style="width: 100%; height: auto; position: absolute; top: 0; left: 0;" loop autoplay>
                    <source src="<?php echo base_url("webassets");?>/video/bpft-vid.mp4" type="video/mp4">
                    <source src="<?php echo base_url("webassets");?>/video/bpft-vid.ogv" type="video/ogg">
                </video>
            </div>
            
                <div class="st-content-inner">
                    <div class="st-content">
                       <div class="navbar-header">

                                        <a class="navbar-brands" href="<?php echo site_url(); ?>">
                                    <img src="<?php echo base_url("webassets");?>/img/logo.png" class="mainlogo" alt="bootstrapwizard logo">
                                </a>
                                    </div>
                        <div class="container">


                            
                                   <div class="row blendertopmenu" id="scrolldown">
                                    <div class="col-xs-3">
                                        <div class="menu" id="st-trigger-effects">
                                            <button data-effect="st-effect-11">
                                                    <img src="<?php echo base_url("webassets");?>/img/menu.png"><i class="menu-text">menu</i>
                                                </button>
                                        </div>
                                
                                
                                
                                
                                    </div>
                                    <div class="col-xs-6">
                                        
                                    </div>
                                    <div class="col-xs-3">
                                       <?php $this->load->view("loginview");?>
                                       
                                    </div>
                                
                                </div>
                            <div class="row" style="margin-top: 135px;">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="contents">
                                        <h3>Blenders Pride Fashion Tour 2014</h3>
                                        <h5></h5>
                                        <div class="play">
                                            <a class="videoonly fancybox.iframe" href="http://www.youtube.com/embed/CUxJONigQhc?rel=0&amp;controls=0&amp;showinfo=0&autoplay=1">
                                        <img src="<?php echo base_url("webassets");?>/img/playbutton.png" alt="">
                                    </a>
                                        </div>
                                        <h6>Watch this stylish video and taste life in style</h6>
                                        <p></p>
                                        <div class="home-invite">

                                            <a href="<?php echo site_url("website/blenderstyle");?>">
                                                <p>Win invites to BPFT Style Nights</p>
                                            </a>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                                <!-- /.navbar-collapse -->
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
   
    <div class="mid-content">
        <div class="container">

            <div class="content-center">
                <h3>STYLE BLENDERS</h3>
                <h5>The finest and the classy names in fashion, music, design, technology and writing are here.</h5>
                <h5>Grab a seat as they take centre stage to style up the Blenders Pride Fashion Tour 2014.</h5>
                <a href="<?php echo site_url('website/blenderstyle'); ?>">
                    <div class="blend">
                        <p>VIEW ALL THE STYLE BLENDERS</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    <header id="myCarousel" class="carousel slide">
       <div class="bottom-gradient"></div>
        <!-- Indicators -->
<!--
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
-->

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets");?>/img/slider/Midival-Punditz.jpg" alt="" class="img-responsive">
                <div class="carousel-caption">
                    <div class="blender-bottom">
                        <div class="music text-center">
                            <div class="style-icon">
                                                   <i class="fa flaticon-musical"></i>
                                               </div>
                        </div>
                        <h5>Midival Punditz</h5>
                        <h6>Musicians for Blenders Pride Fashion Tour, 2014</h6>
<!--                        <p class="h7">Get a live taste of style in music</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class="blenders-invite">

                                <p>WIN AN INVITE. SHOW HOW IT’S DONE.</p>


                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <img src="<?php echo base_url("webassets");?>/img/slider/Rocky-S.jpg" alt="" class="img-responsive">
                <div class="carousel-caption">
                    <div class="blender-bottom">
                        <div class="music text-center">
                           <div class="style-icon">
                                                   <i class="fa flaticon-mannequin1"></i>
                                               </div>
                        </div>
                        <h5>Rocky Star</h5>
                        <h6>Designer for Blenders Pride Fashion Tour, 2014 </h6>
<!--                        <p class="h7">Get a live taste of style in design</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <img src="<?php echo base_url("webassets");?>/img/slider/Little-Shilpa.jpg" alt="" class="img-responsive">
                <div class="carousel-caption">
                    <div class="blender-bottom">
                        <div class="music text-center">
                            <div class="style-icon">
                                                   <i class="fa flaticon-mannequin1"></i>
                                               </div>
                        </div>
                        <h5>Little Shilpa</h5>
                        <h6>Designer for Blenders Pride Fashion Tour, 2014</h6>
<!--                        <p class="h7">Get a live taste of style in design</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class="blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                    <img src="<?php echo base_url("webassets");?>/img/slider/Karsh-Kale.jpg" alt="" class="img-responsive">
                <div class="carousel-caption">
                    <div class="blender-bottom">
                        <div class="music text-center">
                            <div class="style-icon">
                                                   <i class="fa flaticon-musical"></i>
                                               </div>
                        </div>
                        <h5>Grain featuring <br> Karsh Kale</h5>
                        <h6>Musician for Blenders Pride Fashion Tour, 2014</h6>
<!--                        <p class="h7">Get a live taste of style in music</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Ashvin-and-Ash.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-musical"></i>
                                               </div>
                                        </div>
                                        <h5>Ashvin and Ash</h5>
                                        <h6>Musicians for Blenders Pride Fashion Tour, 2014</h6>
<!--                                        <p class="h7">Get a live taste of style in music</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>

                                        
                                    </div>
                                </div>
                            </div>
                               <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Boman-Irani.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-microphone58"></i>
                                               </div>
                                        </div>
                                        <h5>Boman Irani</h5>
                                        <h6>Speaker for Blenders Pride Fashion Tour, 2014</h6>
<!--                                        <p class="h7">Get a live taste of style</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>

                                       
                                    </div>
                                </div>
                            </div>
                               <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Bomb-bay-Tarun-Shahani.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-musical"></i>
                                               </div>
                                        </div>
                                        <h5>Boom bay Central</h5>
                                        <h6>Musician for Blenders Pride Fashion Tour, 2014</h6>
<!--<p class="h7">Get a live taste of style in music</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                               <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Chetan-Bhagat.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-microphone58"></i>
                                               </div>
                                        </div>
                                        <h5>Chetan Bhagat</h5>
                                        <h6>Speaker for Blenders Pride Fashion Tour, 2014</h6>
<!--<p class="h7">Get a live taste of style</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                               <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Gaurav-Gupta.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-mannequin1"></i>
                                               </div>
                                        </div>
                                        <h5>Gaurav Gupta</h5>
                                        <h6>Designer for Blenders Pride Fashion Tour, 2014</h6>
<!--<p class="h7">Get a live taste of style in design</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>
                                      
                                    </div>
                                </div>
                            </div>
                               <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Namrata-Joshipura.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-mannequin1"></i>
                                               </div>
                                        </div>
                                        <h5>Namrata Joshipura</h5>
                                        <h6>Designer for Blenders Pride Fashion Tour, 2014</h6>
<!--<p class="h7">Get a live taste of style in design</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                               <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Neeta-Lulla.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-mannequin1"></i>
                                               </div>
                                        </div>
                                        <h5>Neeta Lulla</h5>
                                        <h6>Designer for Blenders Pride Fashion Tour, 2014</h6>
<!--<p class="h7">Get a live taste of style in design</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                               <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Pankaj-and-Nidhi.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-mannequin1"></i>
                                               </div>
                                        </div>
                                        <h5>Pankaj and Nidhi</h5>
                                        <h6>Designers for Blenders Pride Fashion Tour, 2014</h6>
<!--<p class="h7">Get a live taste of style in design</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>
                                       
                                    </div>
                                </div>
                            </div>
                               <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Shaair-Func.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-musical"></i>
                                               </div>
                                        </div>
                                        <h5>Shaa'ir and func</h5>
                                        <h6>Musicians for Blenders Pride Fashion Tour, 2014</h6>

<!--                                        <p class="h7">Get a live taste of style in music</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>
                                    </div>
                                </div>
                            </div>
                               <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Shivan-and-Naresh.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-mannequin1"></i>
                                               </div>
                                        </div>
                                        <h5>Shivan and Naresh</h5>
                                        <h6>Designers for Blenders Pride Fashion Tour, 2014</h6>
<!--<p class="h7">Get a live taste of style in design</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                               <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Suneet-Varma.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-mannequin1"></i>
                                               </div>
                                        </div>
                                        <h5>Suneet Varma</h5>
                                        <h6>Designer for Blenders Pride Fashion Tour, 2014</h6>

<!--<p class="h7">Get a live taste of style in design</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>
                                    </div>
                                </div>
                            </div>
                               <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Varun-Bahl.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-mannequin1"></i>
                                               </div>
                                        </div>
                                        <h5>Varun Bahl</h5>
                                        <h6>Designer for Blenders Pride Fashion Tour, 2014</h6>
<!--<p class="h7">Get a live taste of style in design</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>
                                      
                                    </div>
                                </div>
                            </div>
                               <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Wasim-Akram.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-microphone58"></i>
                                               </div>
                                        </div>
                                        <h5>Wasim Akram</h5>
                                        <h6>Speaker for Blenders Pride Fashion Tour, 2014</h6>
<!--<p class="h7">Get a live taste of style</p>-->

                        <a href="<?php echo site_url("website/blenderstyle");?>">
                            <div class=" blenders-invite">

                                <p>Win invites to BPFT Style Nights</p>


                            </div>
                        </a>
                                       
                                    </div>
                                </div>
                            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <img src="<?php echo base_url("webassets");?>/img/pre_button.png" class="pre-pos">
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <img src="<?php echo base_url("webassets");?>/img/next_button.png" class="next-pos">
        </a>

    </header>            
                
                
    <div class="space">

    </div>
    <div class="section priyanka">

        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <div class="content-center">
                        <div class="content-priya">
                            <h4>TASTE LIFE IN STYLE WITH PRIYANKA CHOPRA</h4>
                            <div class="play">
                                <a class="videoonly fancybox.iframe" href="http://www.youtube.com/embed/my0loANrEkc?rel=0&amp;controls=0&amp;showinfo=0&autoplay=1">
                                        <img src="<?php echo base_url("webassets");?>/img/playbutton.png" alt="">
                                    </a>
                            </div>
                            <h6>WATCH THE NEW BLENDERS PRIDE FASHION TOUR FILM</h6>
                        </div>
                    </div>


                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <div class="section tour">
        <div class="container">
            <div class="follow">
                <h5>FOLLOW ALL STYLE COVERAGE WITH <span class="gold">#BPMYSTYLE</span> </h5>
<!--
                <h5>
the Blenders Pride Fashion Tour 2014 with <span class="gold">#BPMYSTYLE</span></h5>
-->
            </div>
            <div class="row social-like">
                <div class="col-md-4 instagram">
                    <div class="panel">
                        <div class="panel-heading">
                            <a href="http://instagram.com/bpft2014" target="_blank"><p class="fa fa-instagram"><span class="text">instagram</span>
                                </p></a>
                        </div>
                        <div class="panel-body">
<!--                            <img src="<?php echo base_url("webassets");?>/img/panel.png">-->
                       <iframe src="<?php echo site_url("website/instagramimages");?>" frameborder="0" width="360px" height="420px"></iframe>
                        </div>
                    </div>




                </div>
                <div class="col-md-4 twitter">
                    <div class="panel">
                        <div class="panel-heading">
                            <a href="https://twitter.com/bpft2014" target="_blank"><p class="fa fa-twitter"><span class="text">Twitter</span>
                            </p></a>

                        </div>

                        <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/hashtag/bpft2014" data-widget-id="533327175592595456">#bpft2014 Tweets</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>

                </div>
                <div class="col-md-4 twitter">
                    <div class="panel">
                        <div class="panel-heading">
                            <a href="https://www.facebook.com/blenderspridefashiontour" target="_blank"><p class="fa fa-facebook"><span class="text">Facebook</span>
                                </p></a>

                        </div>
                        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=821682894560811&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><div class="fb-like-box" data-href="https://www.facebook.com/blenderspridefashiontour" data-width="360" data-height="420" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="true"></div>
                        
                        </div>


                </div>
            </div>
        </div>
    </div>
    <div class="section top">
        <div class="container">
            <div class="top">
                <h5>Inspire the world with your unique style</h5>
                <a href="<?php echo site_url('website/blenderstyle'); ?>">
                    <div class="top-share">

                        <p>Click here to share your style.</p>

                    </div>
                </a>
            </div>
            <div class="row" style="height:565px">
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
                                                           
                                                           ?>"></div>
                                                       
                                                       
                                                       <span class="top-text"><?php echo $post->firstname." ".$post->lastname;?></span>
<!--                            <img src="<?php echo base_url("webassets");?>/img/rect.png" class="rect">-->
<div class="clearfix"></div>
                        </div>
                        <?php if($post->image!="") { ?>
                        <div class="panel-body">

                            <a href="#">
                                    <img src="<?php echo base_url("uploads");?>/<?php echo $post->image;?>" width="100%">

                                 </a>
                        </div>
                        <?php } if($post->text!=""){ ?>

                        <div class="panel-body body-text">
                            <p class="testing"><?php echo $post->text;?></p>
                        </div>
                        <?php } ?>

                        <div class="panel-footer">
                            <div class="pull-right">
                                <a href="" class="sharee"><i class="fa fa-facebook"></i></a>
                                <a href="" class="twitterbutton"></a>
<!--
                                <a> <i class="fa fa-google-plus"></i>
                                </a>
-->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="clearfix"></div>
            <a href="<?php echo site_url('website/invitelist'); ?>">
                <div class="foot-text">
                    <p>
                        View All Entries
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="inspired">
        <div class="container inspired-text">
            <div class="content-center">
                <h4>ARE YOU INSPIRED?</h4>
                <a href="<?php echo site_url("website/schedule");?>">
                    <div class="inspired-win">

                        <p>WIN AN INVITE</p>


                    </div>
                </a>
                <a data-scroll href="#top"><span class="back-top">back to top</span></a>

            </div>

        </div>
    </div>
    
    <?php $this->load->view("website/contentfooter");?>
    
</div>
    </div>

    <script>
        
        //twitter integration
       
        
    </script>