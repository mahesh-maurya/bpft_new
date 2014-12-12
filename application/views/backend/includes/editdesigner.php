	    <section class="panel">
		    <header class="panel-heading">
				 designer Details
			</header>
			<div class="panel-body">
			  <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('site/editdesignersubmit');?>" enctype= "multipart/form-data">
				<input type="text" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
				
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Name</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="name" value="<?php echo set_value('name',$before->name);?>">
				  </div>
				</div>
				
				
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">content</label>
				  <div class="col-sm-4">
                      <textarea type="numeric" id="normal-field" class="form-control" name="content"><?php echo set_value('content',$before->content);?></textarea>
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Image</label>
				  <div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="image" value="<?php echo set_value('image',$before->image);?>">
					<?php if($before->image == "")
						 { }
						 else
						 { ?>
							<img src="<?php echo base_url('uploads')."/".$before->image; ?>" width="140px" height="140px">
						<?php }
					?>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">json</label>
				  <div class="col-sm-4">
					<input type="numeric" id="normal-field" class="form-control" name="json" value="<?php echo set_value('json',$before->json);?>">
				  </div>
				</div>
              <div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Type</label>
				  <div class="col-sm-4">
				  <?php
				  $options = array(
                  'des'  => 'Designer',
                  'mus'    => 'Musician',
                  'spe'   => 'Speaker',
                    'dess'  => 'Designers',
                  'muss'    => 'Musicians',
                  'spes'   => 'Speakers',
                );

echo form_dropdown('type', $options, set_value('type',$before->type),"class='form-control'");
?>
				  
					
				  </div>
				</div>
				
				
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">&nbsp;</label>
				  <div class="col-sm-4">
				  <button type="submit" class="btn btn-primary">Save</button>
				  <a href="<?php echo site_url('site/viewdesigner'); ?>" class="btn btn-secondary">Cancel</a>
				</div>
				</div>
			  </form>
			</div>
		</section>
