<div class="st-container" id="st-container">

    

        <?php $this->load->view("website/sidemenu");?>
        <div class="st-pusher">
            <div class="st-content-inner">
                 
                <div class="st-content" >
                  <div class=" <?php if(isset($nobackbackground)) { echo $nobackbackground; } else {echo "reset";} ?>" >
                        <div class="container">


                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="menu" id="st-trigger-effects">
                                        <button data-effect="st-effect-11">
                                            <img src="<?php echo base_url("webassets");?>/img/menu.png"><i class="menu-text">menu</i>
                                        </button>
                                    </div>




                                </div>
                                <div class="col-xs-6">
                                    <div class="navbar-header">

                                        <a class="navbar-brands" href="<?php echo site_url(); ?>">
                                            <img src="<?php echo base_url("webassets");?>/img/logo<?php if($page=="blenderstyle") echo 2;?>.png" alt="bootstrapwizard logo" >
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <?php $this->load->view("loginview");?>
                                </div>

                            </div>
                            <div class="row topleave">
                              
                                <div class="col-md-12">
                                    
                                    
                                    
                                    
                                    
                                    