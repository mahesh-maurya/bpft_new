<div class="container profiler">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6  text-center">
            <div class="contents-rest">
                <h3>Reset Password</h3>
                <h5>Welcome back<br/>
                                Please Enter Your New Password Below.</h5>
            </div>
            <form method="post" action="<?php echo site_url('website/submitresetpswd');?>" enctype="multipart/form-data">
                <input value="<?php echo $this->input->get("id");?>" name="id" id="id" placeholder="" type="hidden" class="">
                   <div class="input-content text-center">
                    <input value="" name="password" id="password" placeholder="PASSWORD" type="password" class="lockicon">
                    <div>
                        <input value="" name="confirmpassword" id="conformPassword" placeholder="CONFIRM PASSWORD" type="password" class="lockicon">
                    </div>
                </div>
                <div class="content-button">
                    <button type="submit" class="">Sumbit</button>
                </div>
            </form>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>