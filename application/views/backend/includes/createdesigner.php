<div class="row" style="padding:1% 0">
	<div class="col-md-12">
		<div class="pull-right">
			<a href="<?php echo site_url('site/viewdesigner'); ?>" class="btn btn-primary pull-right"><i class="icon-long-arrow-left"></i>&nbsp;Back</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
	    <section class="panel">
		    <header class="panel-heading">
				 designer Details
			</header>
			<div class="panel-body">
			  <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('site/createdesignersubmit');?>" enctype= "multipart/form-data">
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Name</label>
				  <div class="col-sm-4">
					<input type="numeric" id="normal-field" class="form-control" name="name" value="<?php echo set_value('name');?>">
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">content</label>
				  <div class="col-sm-4">
					<textarea type="numeric" id="normal-field" class="form-control" name="content"><?php echo set_value('content');?></textarea>
                      
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Image</label>
				  <div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="image" value="<?php echo set_value('image');?>">
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">json</label>
				  <div class="col-sm-4">
					<input type="numeric" id="normal-field" class="form-control" name="json" value="<?php echo set_value('json');?>">
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

echo form_dropdown('type', $options, set_value('type'),"class='form-control'");
?>
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">&nbsp;</label>
				  <div class="col-sm-4">
				  <button type="submit" class="btn btn-primary">Save</button>
				  <a href="<?php echo site_url('site/viewdesigner?id=').$this->input->get('id'); ?>" class="btn btn-secondary">Cancel</a>
				</div>
				</div>
			  </form>
			</div>
		</section>
	</div>
</div>