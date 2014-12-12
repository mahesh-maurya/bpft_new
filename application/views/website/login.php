<div class="container profiler">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="section pad1">
                <div class="text-center">
                    <img src="" class="img-responsive">
                </div>
                <div class="follow1 text-center">
                    <h5>SIGN IN</h5>
                    <h4>YOU MUST LOG IN TO PARTICIPATE.</h4>
                    <h6 style="color:red;">
                    
                    <?php 
$msg=$this->input->get('alert');
if(isset($msg))
{
    echo $msg;
}
                    ?>
                    </h6>
                </div>
                <form method="post" action="<?php echo site_url('website/normallogin');?>" enctype="multipart/form-data">
                    <div class="margin1">
                        <div class="input-content text-center">
                            <input value='' name="email" id="username-email" placeholder="EMAIL *" type="text" class="" />
                            <div>
                                <input value='' name="password" id="password" placeholder="PASSWORD *" type="password" class="" />
                            </div>
                           
                        </div>
                    </div>
                    <div class="row row-margin">
                        <div class="col-md-6 col-md-6-pad">
                            <a href="#">
                                <button type="submit" class="">Submit</button>
                            </a>

                        </div>
                        <div class="col-md-6 col-md-6-pad1">
                            <a href="<?php echo site_url("website/resetemail"); ?>">
                                <p>Forgot Password?</p>
                            </a>
                        </div>
                    </div>
                </form>

                <div class="text-center color-p1">
                    <h3>-&nbsp;OR&nbsp;-</h3> 
                </div>
                <div class="reg-invite text-center">

                                        <a href="#" class="facebooklogin">
                                            <p> <i class="fa fa-facebook"></i> SIGN IN WITH FACEBOOK</p>
                                        </a>
                                    </div>
                                    <div class="reg-invite text-center">

                                        <a href="<?php echo site_url("twitter/auth");?>">
                                            <p> <i class="fa fa-twitter"></i> SIGN IN WITH TWITTER</p>
                                        </a>
                                    </div>
                

                <div class="reg-policy pad-btm text-center">
                                               
                    <p>No Account?  <a href="<?php echo site_url("website/register"); ?>">Create New Account</a></p>
                   
                                            </div>
            </div>
            <div></div>
            <div class="col-md-3">
            </div>
        </div>
    </div>

</div>


<script>
</script>
