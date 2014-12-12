<div class="container profiler" >
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6  text-center">
            <div class="contents-rest">
                <form method="post" action="<?php echo site_url('website/submitresetemail');?>" enctype="multipart/form-data">
                    <h3>Reset Password</h3>
                    <h5>Please enter your email address below.  
                                        <br> We will send you an email with instructions to reset your password.</h5>
                    <div class="input-content text-center ">
                        <input value="" name="email" id="email" placeholder="EMAIL" type="email" class="input-focus">
                    </div>
                    <h4><?php echo $msg;?></h4>
                    <div class="content-button pading1">
                        <a>
                            <button>submit</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>