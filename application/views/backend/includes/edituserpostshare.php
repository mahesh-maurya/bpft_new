	    <section class="panel">
		    <header class="panel-heading">
				 userpostshare Details
			</header>
			<div class="panel-body">
			  <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('site/edituserpostsharesubmit');?>" enctype= "multipart/form-data">
				<input type="text" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
				
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">User</label>
				  <div class="col-sm-4">
					<?php 	 echo form_dropdown('user',$user,set_value('user',$before->user),'class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
					?>
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">Post</label>
				  <div class="col-sm-4">
					<?php 	 echo form_dropdown('post',$post,set_value('post',$before->post),'class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
					?>
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label">Shareon</label>
				  <div class="col-sm-4">
					<?php 	 echo form_dropdown('shareon',$shareon,set_value('shareon',$before->shareon),'class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
					?>
				  </div>
				</div>
				
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">&nbsp;</label>
				  <div class="col-sm-4">
				  <button type="submit" class="btn btn-primary">Save</button>
				  <a href="<?php echo site_url('site/viewuserpostshare'); ?>" class="btn btn-secondary">Cancel</a>
				</div>
				</div>
			  </form>
			</div>
		</section>
