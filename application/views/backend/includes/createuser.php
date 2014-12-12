<div class="row" style="padding:1% 0">
	<div class="col-md-12">
		<div class="pull-right">
			<a href="<?php echo site_url('site/viewusers'); ?>" class="btn btn-primary pull-right"><i class="icon-long-arrow-left"></i>&nbsp;Back</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
	    <section class="panel">
		    <header class="panel-heading">
				 User Details
			</header>
			<div class="panel-body">
			  <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('site/createusersubmit');?>">
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">First Name</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="firstname" value="<?php echo set_value('firstname');?>">
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Last Name</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="lastname" value="<?php echo set_value('lastname');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Email</label>
				  <div class="col-sm-4">
					<input type="email" id="normal-field" class="form-control" name="email" value="<?php echo set_value('email');?>">
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="description-field">Password</label>
				  <div class="col-sm-4">
					<input type="password" id="description-field" class="form-control" name="password" value="">
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="description-field">Confirm Password</label>
				  <div class="col-sm-4">
					<input type="password" id="description-field" class="form-control" name="confirmpassword" value="">
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Contact</label>
				  <div class="col-sm-4">
					<input type="number" id="normal-field" class="form-control" name="contact" value="<?php echo set_value('contact');?>">
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Logo</label>
				  <div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="logo" value="<?php echo set_value('logo');?>">
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Date Of Birth</label>
				  <div class="col-sm-4">
					<input type="date" id="normal-field" class="form-control" name="dob" value="<?php echo set_value('dob');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">city</label>
				  <div class="col-sm-4">
					<input type="text" id="" name="city" class="form-control" value="<?php echo set_value('city'); ?>">
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label">Gender</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('gender',$gender,set_value('gender'),'class="chzn-select form-control" 	data-placeholder="Choose Gender..."');
					?>
				  </div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Facebook Userid</label>
					<div class="col-sm-4">
					  <input type="text" id="" name="facebookuserid" class="form-control" value="<?php echo set_value('facebookuserid'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">twitter</label>
					<div class="col-sm-4">
					  <input type="text" id="" name="twitter" class="form-control" value="<?php echo set_value('twitter'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">instagram</label>
					<div class="col-sm-4">
					  <input type="text" id="" name="instagram" class="form-control" value="<?php echo set_value('instagram'); ?>">
					</div>
				</div>
				
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">accesskey</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="accesskey" value="<?php echo set_value('accesskey');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">unique key</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="uniquekey" value="<?php echo set_value('uniquekey');?>">
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Points</label>
				  <div class="col-sm-4">
					<input type="numeric" id="normal-field" class="form-control" name="points" value="<?php echo set_value('points');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">Status</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('status',$status,set_value('status'),'class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
					?>
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label">loginby</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('loginby',$loginby,set_value('loginby'),'class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
					?>
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label">Select Accesslevel</label>
				  <div class="col-sm-4">
					<?php 	 echo form_dropdown('accesslevel',$accesslevel,set_value('accesslevel'),'class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
					?>
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">&nbsp;</label>
				  <div class="col-sm-4">
				  <button type="submit" class="btn btn-primary">Save</button>
				  <a href="<?php echo site_url('site/viewusers'); ?>" class="btn btn-secondary">Cancel</a>
				</div>
				</div>
			  </form>
			</div>
		</section>
	</div>
</div>